<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use App\Repositories\NewsCategoryRepository;
use Illuminate\Http\Request;

class NewsAjaxController extends Controller
{
    /**
     * The NewsRepository instance.
     *
     * @var \App\Repositories\NewsRepository
     */
    protected $newsRepository;

    /**
     * Create a new NewsAjaxController instance.
     *
     * @param  \App\Repositories\NewsRepository $newsCategoryRepository
     * @return void
     */
    public function __construct(NewsRepository $newsRepository
            , NewsCategoryRepository $newsCategoryRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->newsCategoryRepository = $newsCategoryRepository;
        $this->middleware('ajax');
    }
    
    public function partialCategoryData(Request $request)
    {       
        $pid = $request->input('pId');
        $newsCategory = $this->newsCategoryRepository->getById($pid);
        $news = $this->newsRepository->paginateByPid($pid, 6);
        return view('front.partials.news-category', ['news' => $news, 'newsCategory' => $newsCategory])->render();        
    }
    public function partialData(Request $request)
    {       
        $pid = $request->input('pId');
        $news = $this->newsRepository->paginateByPid($pid, 6);
	return view('front.partials.news-items',['news' => $news])->render();
    }    
}
