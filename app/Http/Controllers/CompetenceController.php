<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nexmo\User\User;
use App\Competence;

class CompetenceController extends Controller
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
        $Competences=\App\Competence::where('user_id',$id)->get();
        return view('profiles.profil',compact('Competences')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // si est inscrit dans la table visiteur alors il l'inscrit pas
        $verif= \Auth::user()->id;
        $sqlcommand=\App\Visiteur::where('user_id',$verif)->get();
        if(!$sqlcommand->isEmpty()){
            
        }
        //sinon il le fais
        else{
            $visiteurs = new \App\Visiteur(); 
            $visiteurs->user_id=Auth()->id();
            $visiteurs->save();
        }
            
        $Competences = new \App\Competence(); 
        $Competences->NomCompetence = $request->get('NomCompetence');
        $Competences->user_id=Auth()->id();
        $Competences->save();

        return redirect('profil')->with('success', 'La compétence a bien été ajoutée');
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
        //
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
        //
    }
}
