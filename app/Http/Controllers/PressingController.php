<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pressing;
use App\Visiteur;

class PressingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $Pressings=\App\pressing::where('user_id',$id)->get();
        return view('vm.pressings.listpressing',compact('Pressings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vm.pressings.pressing');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verif= \Auth::user()->id;
        $sqlcommand=\App\Visiteur::where('user_id',$verif)->get();
        if(!$sqlcommand->isEmpty()){
            
        }else{
            $visiteurs = new \App\Visiteur(); 
            $visiteurs->user_id=Auth()->id();
            $visiteurs->save();
        }
        $pressing = new \App\Pressing(); 
        $pressing->NomPressing = $request->get('NomPressing');
        $pressing->AdressePressing = $request->get('AdressePressing');
        $pressing->CpPressing = $request->get('CpPressing');
        $pressing->VillePressing = $request->get('VillePressing');
        $pressing->user_id=Auth()->id();
        $pressing->save();

        return redirect('listpressing')->with('success', 'Les informations ont bien été ajoutées'); 
    }    
    
    

}
