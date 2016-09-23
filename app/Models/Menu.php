<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 */
class Menu extends Model
{
    protected $table = 'menu';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'meta_keyword',
        'meta_description',
        'view',
        'e_title',
        'e_meta_keyword',
        'e_meta_description',
        'e_view',
        'ind',
        'active'
    ];

    protected $guarded = [];
    
        
}