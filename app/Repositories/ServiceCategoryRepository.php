<?php

namespace App\Repositories;

use App\Models\ServiceCategory;

class ServiceCategoryRepository extends BaseRepository
{
    /**
     * Create a new ServiceCategoryRepository instance.
     *
     * @param  \App\Models\ServiceCategory $menu
     * @return void
     */
    public function __construct(ServiceCategory $menu)
    {
        $this->model = $menu;
    }

    /**
     * Get menus collection.
     *
     * @return Illuminate\Support\Collection
     */
//    public function getServiceCategorysOrder()
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
        public function getActive($n)
        {
            return $this->model
                    ->whereActive(true)
                    ->orderBy('ind', 'asc')
                    ->paginate($n);
        }
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
