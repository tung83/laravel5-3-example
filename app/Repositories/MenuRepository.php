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

    /**
     * Get menus collection.
     *
     * @return Illuminate\Support\Collection
     */
//    public function getMenusOrder()
//    {
//        return $this->model->oldest('seen')->latest()->get();
//    }
//
//    /**
//     * Store a menu.
//     *
//     * @param  array $inputs
//     * @return void
//     */
//    public function store($inputs)
//    {
//        $this->model->create($inputs);
//    }
//
//    /**
//     * Update a menu.
//     *
//     * @param  bool  $seen
//     * @param  int   $id
//     * @return void
//     */
//    public function update($seen, $id)
//    {
//        $menu = $this->getById($id);
//
//        $menu->seen = $seen == 'true';
//
//        $menu->save();
//    }
}
