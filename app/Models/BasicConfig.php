<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BasicConfig
 */
class BasicConfig extends Model
{
    protected $table = 'basic_config';

    public $timestamps = false;

    protected $fillable = [
        'key',
        'content',
        'e_content'
    ];

    protected $guarded = [];

        
}