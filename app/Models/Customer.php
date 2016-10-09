<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 */
class Customer extends Model
{
    protected $table = 'customer';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'sum',
        'lnk',
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
        'vip',
        'ind'
    ];

    protected $guarded = [];

        
}