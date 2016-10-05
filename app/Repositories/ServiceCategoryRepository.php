<?php

namespace App\Repositories;

use App\Models\ServiceCategory;

class ServiceCategoryRepository extends BaseRepository
{
    public function __construct(ServiceCategory $serviceCategory)
    {
        $this->model = $serviceCategory;
    }
}
