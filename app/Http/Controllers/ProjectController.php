<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MenuRepository;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\ProjectCategoryRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\QtextRepository;
use App\Repositories\BasicConfigRepository;

class ProjectController extends Controller
{    
    protected $menuRepository;
    protected $projectCategoryRepository;
    protected $projectRepository;
    protected $qtextRepository;
    protected $basicConfigRepository;
    
    public function __construct(MenuRepository $menuRepository
            , ServiceCategoryRepository $serviceCategoryRepository
            , ProjectCategoryRepository $projectCategoryRepository
            , ProjectRepository $projectRepository
            , QtextRepository $qtextRepository
            , BasicConfigRepository $basicConfigRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
        $this->projectCategoryRepository = $projectCategoryRepository;
        $this->projectRepository = $projectRepository;
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
        $projectCategories = $this->projectCategoryRepository->getActive(3);           
        $projects = getPaginateByPidData('project',$projectCategories[0], $this->projectRepository, 6);
        $qtextRecruit = $this->qtextRepository->getRecruit();
        $qtextContact = $this->qtextRepository->getFooterContact();
        $qtextIntroduction = $this->qtextRepository->getIntroduction();
        $basicConfigs = $this->basicConfigRepository->getAll();
        
	
        return view('front.project.index', compact('menus','services' 
                , 'projectCategories','projects' 
                ,'qtextRecruit'
                , 'qtextContact'
                , 'qtextIntroduction'
                , 'basicConfigs'));
    }
    
    public function getItem(Request $request, $projectItem)
    {
        $menus = $this->menuRepository->getActive();
        $services = $this->serviceCategoryRepository->getActive(10);        
        $projectCategories = $this->projectCategoryRepository->getActive(3);           
        $project = $this->projectRepository->getById(4);
        $qtextRecruit = $this->qtextRepository->getRecruit();
        $qtextContact = $this->qtextRepository->getFooterContact();
        $qtextIntroduction = $this->qtextRepository->getIntroduction();
        $basicConfigs = $this->basicConfigRepository->getAll();
        
	
        return view('front.project.itemIndex', compact('menus','services' 
                , 'projectCategories','project' 
                ,'qtextRecruit'
                , 'qtextContact'
                , 'qtextIntroduction'
                , 'basicConfigs'));
    }
    
}
