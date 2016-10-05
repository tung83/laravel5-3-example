<?php

namespace App\Http\Controllers;

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
    protected $projectCategoryRepository;

    /**
     * Create a new ProjectAjaxController instance.
     *
     * @param  \App\Repositories\ProjectRepository $projectCategoryRepository
     * @return void
     */
    public function __construct(ProjectCategoryRepository $projectCategoryRepository)
    {
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
    public function partialCategory($projectCategory)
    {
        $projectCategories = $this->projectCategoryRepository->getActive(3);
        $view = view('front.partials.projects', compact('projectCategories'));
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
