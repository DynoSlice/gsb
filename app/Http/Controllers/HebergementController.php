<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Hebergement;
use App\Visiteur;

class HebergementController extends Controller
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
        $Hebergements=\App\Hebergement::where('user_id',$id)->get();
        return view('vm.hebergements.listhebergement',compact('Hebergements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vm.hebergements.hebergement');
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
        $Hebergement = new \App\Hebergement(); 
        $Hebergement->NomHebergement = $request->get('NomHebergement');
        $Hebergement->AdresseHebergement = $request->get('AdresseHebergement');
        $Hebergement->CpHebergement = $request->get('CpHebergement');
        $Hebergement->VilleHebergement = $request->get('VilleHebergement');
        $Hebergement->user_id=Auth()->id();
        $Hebergement->save();

        return redirect('listhebergement')->with('success', 'Les informations ont bien été ajoutées'); 
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
    public function edit($id)
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
        
    }
}
