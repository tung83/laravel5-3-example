<?php

namespace App\Repositories;

use App\Models\Qtext;

class QtextRepository extends BaseRepository
{
    /**
     * Create a new MenuRepository instance.
     *
     * @param  \App\Models\Menu $menu
     * @return void
     */
    public function __construct(Qtext $qtext)
    {
        $this->model = $qtext;
    }
    
    public function getRecruit()
    {
        return $this->model->where('title', 'Tuyển dụng')->get();
    }
}
