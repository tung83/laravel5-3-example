<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsCategory
 */
class NewsCategory extends Model
{
    protected $table = 'news_category';

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