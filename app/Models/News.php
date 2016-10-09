<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 */
class News extends Model
{
    protected $table = 'news';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'sum',
        'content',
        'meta_keyword',
        'meta_description',
        'e_title',
        'e_sum',
        'e_content',
        'e_meta_keyword',
        'e_meta_description',
        'pId',
        'maps',
        'city',
        'district',
        'img',
        'active',
        'ind',
        'posted_datetime'
    ];

    protected $guarded = [];
    
    protected $dateFormat = 'd/m/Y';

        
}