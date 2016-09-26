<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceCategory
 */
class ServiceCategory extends Model
{
    protected $table = 'service_category';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'sum',
        'meta_keyword',
        'meta_description',
        'e_title',
        'e_sum',
        'e_meta_keyword',
        'e_meta_description',
        'img',
        'icon',
        'pId',
        'lev',
        'ind',
        'active'
    ];

    protected $guarded = [];

        
}