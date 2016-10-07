<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAjaxController extends Controller
{
    /**
     * The ProjectRepository instance.
     *
     * @var \App\Repositories\ProjectRepository
     */
    protected $projectRepository;

    /**
     * Create a new ProjectAjaxController instance.
     *
     * @param  \App\Repositories\ProjectRepository $projectCategoryRepository
     * @return void
     */
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->middleware('ajax');
    }

    /**
     * Update "seen" field for projectCategory.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Project $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function partialCategoryData()
    {       
        $term = Input::get('pId', 1);

        $this->projectRepository = $projectRepository;
        $projects = $this->projectRepository->paginate(2);
        $view = view('front.partials.project-items', compact('$projects'));
        return $view->render();
    }
    public function partialData()
    {       
        //$pid = Input::get('pId', 1);
        $projects = $this->projectRepository->paginateByPid(1, 6);
	return view('front.partials.project-items',['projects' => $projects])->render();
    }
    
    
     public function index(){
      $msg = "This is a simple message.";
      return response()->json(array('msg'=> $msg), 200);
   }

    /**
     * Validate an projectCategory for comments
     *
     * @param  Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function valid(Request $request, $id)
    {
        $this->projectCategoryRepository->valid($request->input('valid'), $id);
        
        return response()->json();
    }
}
