<?php


namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * @var \App\Repositories\EventRepository
     */
    private $eventRepository;

    /**
     * HomeController constructor.
     *
     * @param \App\Repositories\EventRepository $eventRepository
     */
    public function __construct(EventRepository $eventRepository) {
        parent::__construct();
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        return view('content.category_event_index',[
            'title' => __('custom.events'),
            'events' => $this->eventRepository->paginatedEvents()
        ]);
    }

    public function show($slug)
    {
        $event = $this->eventRepository->forSlug($slug);

        abort_unless($event, 404, 'Events');

        return view('content.event', compact('event') );
    }

    public function categoryShow($category)
    {
        $events = $this->eventRepository->byCategory($category);

        return view('content.category_event_index',[
            'title' => __('custom.'.$category),
            'categorySlug' => $category,
            'events' => $events
        ]);
    }


    public function program($year = null)
    {

        $events = $this->eventRepository->allEvents();

        $eventsByDate = new Collection();
        $events->map(function ($item) use (&$eventsByDate){
           $item->blocks->map(function($eventDate) use (&$item, &$eventsByDate){
               $eventDate->event = $item;
               $eventDate->eventDate =  Carbon::createFromFormat('Y-m-d H:i',$eventDate->content['event_date']);
               $eventDate->eventTimestamp =  Carbon::createFromFormat('Y-m-d H:i',$eventDate->content['event_date'])->timestamp;
               $eventDate->passDate =  (Carbon::createFromFormat('Y-m-d H:i',$eventDate->content['event_date']) < Carbon::now()->addDay()) ? true : false;
               $eventsByDate->push($eventDate);
           });
        });

        if(! is_null($year)) {
            $eventsByDate = $eventsByDate->reject(function ($item) use ($year) {
                return $item->eventDate->year !== (int)$year;
            });
        }

        $eventsByDate = $eventsByDate->sortBy(function($event)
        {
            return $event->eventTimestamp;
        });

        $eventsByYear = [];

        $eventsByDate->map(function ($item) use (&$eventsByYear){
            $eventsByYear[$item->eventDate->year][] = $item;
        });

        return view('content.program_index',[
            'year' => $year,
            'events' => $eventsByDate,
            'yearEvents' => $eventsByYear
        ]);
    }

}
