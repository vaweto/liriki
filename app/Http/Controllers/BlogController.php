<?php


namespace App\Http\Controllers;


use App\Repositories\BlogRepository;

class BlogController extends Controller
{

    /**
     * @var \App\Repositories\BlogRepository
     */
    private $repository;

    /**
     * BlogController constructor.
     *
     * @param \App\Repositories\BlogRepository $repository
     */
    public function __construct(BlogRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }


    public function index()
    {
        return view('content.blog_index',[
            'blogs' => $this->repository->getPaginatedBlogs()
        ]);
    }


    public function show($slug)
    {
        $blog = $this->repository->forSlug($slug);

        abort_unless($blog, 404, 'Blog');

        return view('content.blog', compact('blog') );
    }

}
