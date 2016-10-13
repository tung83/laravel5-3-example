<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MenuRepository;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\QtextRepository;
use App\Repositories\BasicConfigRepository;

class ContactFormController extends Controller
{    
    protected $menuRepository;
    protected $projectCategoryRepository;
    protected $projectRepository;
    protected $qtextRepository;
    protected $basicConfigRepository;
    
    public function __construct(MenuRepository $menuRepository
            , ServiceCategoryRepository $serviceCategoryRepository
            , QtextRepository $qtextRepository
            , BasicConfigRepository $basicConfigRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
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
        $qtextRecruit = $this->qtextRepository->getRecruit();
        $qtextContact = $this->qtextRepository->getFooterContact();
        $qtextIntroduction = $this->qtextRepository->getIntroduction();
        $basicConfigs = $this->basicConfigRepository->getAll();
        
	
        return view('front.contact.index', compact('menus','services' 
                ,'qtextRecruit'
                , 'qtextContact'
                , 'qtextIntroduction'
                , 'basicConfigs'));
    }
    
    
}
