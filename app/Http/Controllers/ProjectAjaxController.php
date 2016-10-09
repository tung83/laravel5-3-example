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
    
    public function partialCategoryData(Request $request)
    {       
        $pid = $request->input('pId');
        $projectCategory = $this->projectCategoryRepository->getById($pid);
        $projects = $this->projectRepository->paginateByPid($pid, 6);
        return view('front.partials.project-category', ['projects' => $projects, 'projectCategory' => $projectCategory])->render();        
    }
    public function partialData(Request $request)
    {       
        $projectCategories = $this->projectCategoryRepository->getActive(3);
        getPaginateByPidData('project',$projectCategories, $this->projectRepository, 6, $request);
	return view('front.partials.project-items',['projects' => $projects])->render();
    }    
}
