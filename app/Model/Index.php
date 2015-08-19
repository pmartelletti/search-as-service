<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $guarded = [];

    protected $table = "indices";

    protected $casts = [
        'search_settings' => 'json',
        'display_settings' => 'json'
    ];

}