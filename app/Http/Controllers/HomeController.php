<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\FaqRepository;
use App\Repositories\RecruitRepository;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\ProjectCategoryRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\NewsCategoryRepository;
use App\Repositories\NewsRepository;
use App\Repositories\QtextRepository;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class HomeController extends Controller
{ 
    protected $menuRepository;
    protected $customerRepository;
    protected $faqRepository;
    protected $recruitRepository;
    protected $serviceCategoryRepository;
    protected $projectCategoryRepository;
    protected $projectRepository;
    protected $newsCategoryRepository;
    protected $newsRepository;
    protected $qtextRepository;
    
    public function __construct(MenuRepository $menuRepository
            ,CustomerRepository $customerRepository
            ,FaqRepository $faqRepository
            ,RecruitRepository $recruitRepository
            , ServiceCategoryRepository $serviceCategoryRepository
            , ProjectCategoryRepository $projectCategoryRepository
            , ProjectRepository $projectRepository
            , NewsCategoryRepository $newsCategoryRepository
            , NewsRepository $newsRepository
            , QtextRepository $qtextRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->customerRepository = $menuRepository;
        $this->faqRepository = $faqRepository;
        $this->recruitRepository = $recruitRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
        $this->projectCategoryRepository = $projectCategoryRepository;
        $this->projectRepository = $projectRepository;
        $this->newsCategoryRepository = $newsCategoryRepository;
        $this->newsRepository = $newsRepository;
        $this->qtextRepository = $qtextRepository;
    }
    
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        //$this->menuRepository = new MenuRepository(new Menu());
        Mapper::map(52.381128999999990000, 0.470085000000040000)->marker(53.381128999999990000, -1.470085000000040000, ['markers' => ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']]);
        $menus = $this->menuRepository->getActive();
        $services = $this->serviceCategoryRepository->getActive(10);
        $projectCategories = $this->projectCategoryRepository->getActive(3);           
        $projects = getPaginateByPidData('project',$projectCategories, $this->projectRepository, 6);
        
        $newsCategories = $this->newsCategoryRepository->getActive(3);           
        $news = getPaginateByPidData('news',$newsCategories, $this->newsRepository, 3);
        $customers = $this->menuRepository->getActive(20);
        $faqs = $this->menuRepository->getActive(6);
        $recruits = $this->menuRepository->getActive(3);
        $qtextRecruit = $this->qtextRepository->getRecruit();
	
        return view('front.index', compact('menus', 'services'
                , 'projectCategories','projects', 'newsCategories','news', 'customers', 'faqs', 'recruits','qtextRecruit'));
    }
}
