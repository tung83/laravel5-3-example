<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Repositories\MenuRepository;
use App\Models\Menu;
use Carbon\Carbon;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class HomeController extends Controller
{
    /**
     * The CommentRepository instance.
     *
     * @var \App\Repositories\MenuRepository
     */    
    protected $menuRepository;
    
    
//    public function __construct(MenuRepository $menuRepository)
//    {
//        $this->menuRepository = $menuRepository;
//    }
    
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $this->menuRepository = new MenuRepository(new Menu());
        Mapper::map(52.381128999999990000, 0.470085000000040000)->marker(53.381128999999990000, -1.470085000000040000, ['markers' => ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']]);
        $menus = $this->menuRepository->getActive();
        return view('front.index', compact('menus'));
    }
}
