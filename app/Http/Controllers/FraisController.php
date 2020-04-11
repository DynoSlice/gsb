<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nexmo\User\User;
use App\Visiteur;
use App\Hebergement;
use App\Mission;
use App\Pressing;

class FraisController extends Controller
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
        $Missions=\App\Mission::where('user_id',$id)->get();
        return view('vm.missions.listmission',compact('Missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = \Auth::user()->id;
        $Hebergements=\App\Hebergement::where('user_id',$id)->get();
        $Pressings=\App\pressing::where('user_id',$id)->get();
        return view('vm.missions.create',compact('Hebergements','Pressings'));
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
            
        $mission = new \App\Mission(); 
        $mission->TypeMission = $request->get('TypeMission');
        $mission->DebutMission = $request->get('DebutMission');
        $mission->FinMission = $request->get('FinMission');
        $mission->nombrerepas = $request->get('nombrerepas');
        $mission->totalrepas = $request->get('totalrepas');
        $mission->nombrekilometre = $request->get('nombrekilometre');
        $mission->totalkilometre = $request->get('totalkilometre');
        $mission->nombrenuits = $request->get('nombrenuits');
        $mission->totalnuits = $request->get('totalnuits');
        $mission->totalpressing = $request->get('totalpressing');
        $mission->totalfrais = $request->get('totalfrais');
        $mission->hebergements_id = $request->get('hebergements_id');
        $mission->pressings_id = $request->get('pressings_id');
        $mission->user_id=Auth()->id();
        $mission->save();

        return redirect('listmission')->with('success', 'Les informations ont bien été ajoutées');
               
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mission = \App\Mission::find($id);
        $mission->delete();
        return redirect('listmission')->with('success','Information a bien été suprimer');
    }
}
