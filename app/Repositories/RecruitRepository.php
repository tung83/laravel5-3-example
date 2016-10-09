<?php

namespace App\Repositories;

use App\Models\Recruit;

class RecruitRepository extends BaseRepository
{
    public function __construct(Recruit $recruit)
    {
        $this->model = $recruit;
    }
}
