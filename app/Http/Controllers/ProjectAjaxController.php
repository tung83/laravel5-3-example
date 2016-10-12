<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Repositories\ProjectCategoryRepository;
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
    
    public function partialHomeData(Request $request)
    {       
        $pid = $request->input('pId');
        $projectCategory = $this->projectCategoryRepository->getById($pid);
        $projects = getPaginateByPidData('project',$projectCategory, $this->projectRepository, 6);
        if(!$request->input('page'))
        {
            return view('front.partials.project-category', ['projects' => $projects, 'projectCategory' => $projectCategory])->render();        
        }
        else {     
               return view('front.partials.project-items',['projects' => $projects])->render();
        }
    }
    
    public function partialProjectData(Request $request)
    {       
        $pid = $request->input('pId');
        $projectCategory = $this->projectCategoryRepository->getById($pid);
        $projects = getPaginateByPidData('project',$projectCategory, $this->projectRepository, 6);
        return view('front.project.partials.project-category', ['projects' => $projects])->render();  
    }
}
