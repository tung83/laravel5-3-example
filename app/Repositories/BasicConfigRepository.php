<?php

namespace App\Repositories;

use App\Models\BasicConfig;

class BasicConfigRepository extends BaseRepository
{
    /**
     * Create a new MenuRepository instance.
     *
     * @param  \App\Models\Menu $menu
     * @return void
     */
    public function __construct(BasicConfig $basicConfig)
    {
        $this->model = $basicConfig;
    }
}
