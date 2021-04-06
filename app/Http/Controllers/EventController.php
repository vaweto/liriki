<?php


namespace App\Http\Controllers;


use App\Repositories\EventRepository;
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

    public function show($slug)
    {
        $event = $this->eventRepository->forSlug($slug);

        abort_unless($event, 404, 'Events');

        return view('content.event', compact('event') );
    }

}
