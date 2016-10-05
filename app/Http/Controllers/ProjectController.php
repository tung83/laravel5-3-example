<?php

namespace App\Http\Controllers;

    use App\Http\Requests\CommentRequest;
    use Illuminate\Http\Request;
    use App\Repositories\MenuRepository;
    use App\Repositories\ProjectCategoryRepository;
    use App\Models\Menu;
    use App\Models\ProjectCategory;
    use Carbon\Carbon;
    use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ProjectController extends Controller
{
    protected $menuRepository;
    protected $projectCategoryRepository;

    public function __construct(MenuRepository $menuRepository, ProjectCategoryRepository $projectCategoryRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->projectCategoryRepository = $projectCategoryRepository;
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
        $projects = $this->projectCategoryRepository->getActive(10);
        return view('front.project.index', compact('menus', 'projects'));
    }
}
