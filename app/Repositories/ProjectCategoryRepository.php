<?php

namespace App\Repositories;

use App\Models\ProjectCategory;

class ProjectCategoryRepository extends BaseRepository
{
    public function __construct(ProjectCategory $projectCategory)
    {
        $this->model = $projectCategory;
    }
}
