<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Repositories\MenuRepository;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\ProjectCategoryRepository;
use App\Repositories\ProjectRepository;
use App\Models\Menu;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use App\Models\Project;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class HomeController extends Controller
{
    /**
     * The CommentRepository instance.
     *
     * @var \App\Repositories\MenuRepository
     */    
    protected $menuRepository;
    protected $serviceCategoryRepository;
    protected $projectCategoryRepository;
    protected $projectRepository;
    
    public function __construct(MenuRepository $menuRepository
            , ServiceCategoryRepository $serviceCategoryRepository
            , ProjectCategoryRepository $projectCategoryRepository
            , ProjectRepository $projectRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
        $this->projectCategoryRepository = $projectCategoryRepository;
        $this->projectRepository = $projectRepository;
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
        $firstCategoryId = $projectCategories[0]->id;       
        $projects = $this->projectRepository->paginateByPid($firstCategoryId, 6);
        $customUrl = url(getCategorySlugLink('project', $projectCategories[0]));
        $projects->setPath($customUrl);
        return view('front.index', compact('menus', 'services', 'projectCategories','projects'));
    }
}
