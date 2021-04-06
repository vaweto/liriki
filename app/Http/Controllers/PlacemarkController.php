<?php


namespace App\Http\Controllers;


use App\Repositories\PlacemarkRepository;

class PlacemarkController extends Controller
{

    /**
     * @var \App\Repositories\PlacemarkRepository
     */
    private $repository;

    /**
     * PlacemarkController constructor.
     *
     * @param \App\Repositories\PlacemarkRepository $repository
     */
    public function __construct(PlacemarkRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function show($slug)
    {
        $placemark = $this->repository->forSlug($slug);

        abort_unless($placemark, 404, 'Placemarks');

        return view('content.placemark', compact('placemark') );
    }

}
