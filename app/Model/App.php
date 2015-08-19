<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $guarded = [];


    public function indices()
    {
        return $this->hasMany('App\Model\Index');
    }
}
