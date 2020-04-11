<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
\Carbon\Carbon::setToStringFormat('d-m-Y');

class Mission extends Model
{
    //protege la clee etrangere
    protected $fillable = [
        'user_id'
    ];

    //permet le formatage des dates
    protected $dates = [
        'DebutMission',
        'FinMission',
    ];
}
