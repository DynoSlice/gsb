<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function webinfoconnect(){
        $id = \Auth::user()->id;
        return \view('gsb_server/client', compact('id'));
    }

    public function webwsdl(){
        return \view("gsb_server/services.wsdl");
    }
}
