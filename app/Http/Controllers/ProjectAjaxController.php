<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Repositories\ProjectCategoryRepository;
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
    public function __construct(ProjectRepository $projectRepository
            , ProjectCategoryRepository $projectCategoryRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->projectCategoryRepository = $projectCategoryRepository;
        $this->middleware('ajax');
    }

    /**
     * Update "seen" field for projectCategory.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Project $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function partialCategoryData(Request $request)
    {       
        $pid = $request->input('pId');
        $projectCategory = $this->projectCategoryRepository->getById($pid);
        $projects = $this->projectRepository->paginateByPid($pid, 6);
        return view('front.partials.project-category', ['projects' => $projects, 'projectCategory' => $projectCategory])->render();        
    }
    public function partialData(Request $request)
    {       
        $pid = $request->input('pId');
        $projects = $this->projectRepository->paginateByPid($pid, 6);
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
