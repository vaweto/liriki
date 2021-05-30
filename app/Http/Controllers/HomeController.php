<?php


namespace App\Http\Controllers;


use App\Models\Event;
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
            'categories' =>  $this->getCategorySectionImages()
        ]);
    }

    protected function getCategorySectionImages()
    {
        $categories = Event::CATEGORIES;

        $categoriesImages = array();
        $key = 0;

        foreach ($categories as $category) {
            $image = \A17\Twill\Models\Setting::where('key',$category . '_image')->first();

            if(!is_null($image) && $image->medias->count() > 0 ) {
                $categoriesImages[$key]['category'] = $category;
                $categoriesImages[$key]['image'] = $image;
                $categoriesImages[$key]['events'] = $this->eventRepository->byCategory($category);
                $key++;
            }
        }

        return $categoriesImages;
    }
}
