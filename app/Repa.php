<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repa extends Model
{
    //evite l'ajout du update created at
    public $timestamps = false;
    public function Missions() 
    {
        return $this->belongsTo(\App\Mission::class);
    }       
}
