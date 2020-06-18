<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiDatas extends Model {
    
    public $timestamps = false;
    protected $fillable = [
        'name', 'year'
    ];

}