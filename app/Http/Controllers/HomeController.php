<?php


namespace App\Http\Controllers;


use App\Repositories\EventRepository;

class HomeController extends Controller
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
        return view('content.home',[
            'events' => $this->eventRepository->allEvents(10)
        ]);
    }
}
