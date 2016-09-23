<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Repositories\MenuRepository;
use App\Models\Menu;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * The CommentRepository instance.
     *
     * @var \App\Repositories\MenuRepository
     */    
    protected $menuRepository;
    
    
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }
    
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $menus = $this->menuRepository->getActive();
        return view('front.index', compact('menus'));
    }
}
