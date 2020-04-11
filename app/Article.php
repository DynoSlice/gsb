<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //permet le bon formatage des dates
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
