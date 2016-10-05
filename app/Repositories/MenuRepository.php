<?php

namespace App\Repositories;

use App\Models\Menu;

class MenuRepository extends BaseRepository
{
    /**
     * Create a new MenuRepository instance.
     *
     * @param  \App\Models\Menu $menu
     * @return void
     */
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }
}
