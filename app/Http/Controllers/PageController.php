<?php


namespace App\Http\Controllers;


use App\Repositories\PageRepository;

class PageController extends Controller
{

    /**
     * @var \App\Repositories\PageRepository
     */
    private $repository;

    /**
     * HomeController constructor.
     *
     * @param \App\Repositories\PageRepository $repository
     */
    public function __construct(PageRepository $repository) {
        $this->repository = $repository;
    }

    public function show($slug)
    {
        $page = $this->repository->forSlug($slug);

        abort_unless($page, 404, 'Pages');

        return view('content.page', compact('page') );
    }
}
