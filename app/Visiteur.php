<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    public $timestamps = false;

    public function missions() 
    {
        return $this->hasMany(\App\Mission::class);
    }   
}
