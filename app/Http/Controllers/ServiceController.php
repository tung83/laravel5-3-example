<?php

namespace App\Http\Controllers;

    use App\Http\Requests\CommentRequest;
    use Illuminate\Http\Request;
    use App\Repositories\MenuRepository;
    use App\Repositories\ServiceCategoryRepository;
    use App\Models\Menu;
    use App\Models\ServiceCategory;
    use Carbon\Carbon;
    use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ServiceController extends Controller
{
    protected $menuRepository;
    protected $serviceCategoryRepository;

    public function __construct(MenuRepository $menuRepository, ServiceCategoryRepository $serviceCategoryRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
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
        return view('front.service.index', compact('menus', 'services'));
    }
}
