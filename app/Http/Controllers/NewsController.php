<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MenuRepository;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\NewsCategoryRepository;
use App\Repositories\NewsRepository;
use App\Repositories\QtextRepository;
use App\Repositories\BasicConfigRepository;

class NewsController extends Controller
{    
    protected $menuRepository;
    protected $newsCategoryRepository;
    protected $newsRepository;
    protected $qtextRepository;
    protected $basicConfigRepository;
    
    public function __construct(MenuRepository $menuRepository
            , ServiceCategoryRepository $serviceCategoryRepository
            , NewsCategoryRepository $newsCategoryRepository
            , NewsRepository $newsRepository
            , QtextRepository $qtextRepository
            , BasicConfigRepository $basicConfigRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
        $this->newsCategoryRepository = $newsCategoryRepository;
        $this->newsRepository = $newsRepository;
        $this->qtextRepository = $qtextRepository;
        $this->basicConfigRepository = $basicConfigRepository;
    }
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->menuRepository->getActive();
        $services = $this->serviceCategoryRepository->getActive(10);        
        $newsCategories = $this->newsCategoryRepository->getActive(3);           
        $newsList = getPaginateByPidData('news',$newsCategories[0], $this->newsRepository, 6);
        $qtextRecruit = $this->qtextRepository->getRecruit();
        $qtextContact = $this->qtextRepository->getFooterContact();
        $qtextIntroduction = $this->qtextRepository->getIntroduction();
        $basicConfigs = $this->basicConfigRepository->getAll();
        $most_saw_newsList = $this->newsCategoryRepository->getActive();
	
        return view('front.news.index', compact('menus','services' 
                , 'newsCategories','newsList', 'most_saw_newsList' 
                ,'qtextRecruit'
                , 'qtextContact'
                , 'qtextIntroduction'
                , 'basicConfigs'));
    }
    
    public function getItem(Request $request, $newsItem)
    {        
        preg_match('/(.*)-i(?P<digit>\d+)$/', $newsItem, $matches);
        $itemId = $matches['digit'];
        $menus = $this->menuRepository->getActive();
        $services = $this->serviceCategoryRepository->getActive(10);        
        $newsCategories = $this->newsCategoryRepository->getActive(3);           
        $news = $this->newsRepository->getById($itemId);
        $qtextRecruit = $this->qtextRepository->getRecruit();
        $qtextContact = $this->qtextRepository->getFooterContact();
        $qtextIntroduction = $this->qtextRepository->getIntroduction();
        $basicConfigs = $this->basicConfigRepository->getAll();
        
	
        return view('front.news.itemIndex', compact('menus','services' 
                , 'newsCategories','news' 
                ,'qtextRecruit'
                , 'qtextContact'
                , 'qtextIntroduction'
                , 'basicConfigs'));
    }
    
}
