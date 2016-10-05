<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Qtext
 */
class Qtext extends Model
{
    protected $table = 'qtext';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'e_title',
        'content',
        'e_content'
    ];

    protected $guarded = [];

        
}