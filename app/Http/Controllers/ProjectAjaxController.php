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
    public function partialCategory( Request $request, $projectCategory)
    {       
        $projects = $this->projectRepository->paginate(2);
        $view = view('front.partials.project-items', compact('$projects'));
        return $view->render();
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
