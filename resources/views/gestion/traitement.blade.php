@extends('layouts.app')

@section('content')
@gestion
<section class="content-header">
    <h1>
        Note de Frais numeros {{$uservisiteur->id}}
    </h1>
</section>
<br>
<br>
<div class="box box-default">
    <div class="box-header with-border bg-blue">
      <h3 class="box-title">Identité du demandeur</h3>
    </div>
    <div class="box-body">
      <div class="row">
      <div class="col-md-6">

        <center><img src="/uploads/avatars/{{ $uservisiteur->avatar}} " class="img-circle" alt="User Image"></center>
        <br>
        <br>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom :') }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="name" name="name" value="{{$uservisiteur->name}}"  readonly="readonly">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom :') }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="prenom" name="prenom" value="{{$uservisiteur->prenom}}"  readonly="readonly">
            </div>
        </div>

        <div class="form-group row">
            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse :') }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="adresse" name="adresse" value="{{$uservisiteur->adresse}}"  readonly="readonly">
            </div>
        </div>

        <div class="form-group row">
            <label for="TypeMission" class="col-md-4 col-form-label text-md-right">{{ __('Email :') }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="email" id="TypeMission" name="TypeMission" value="{{$uservisiteur->email}}"  readonly="readonly">
            </div>
        </div>
      </div>
      
      <div class="col-md-6">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>	
          <br>
          <br>
        <div class="form-group row">
          <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville :') }}</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="ville" id="ville"   value="{{$uservisiteur->ville}}"  readonly="readonly">
          </div>
        </div>

        <div class="form-group row">
          <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Code postal :') }}</label>
          <div class="col-md-6">
            <input type="number" class="form-control" name="cp" id="cp"   value="{{$uservisiteur->cp}}"  readonly="readonly">
          </div>
        </div>						

        <div class="form-group row">
          <label for="dateembauche" class="col-md-4 col-form-label text-md-right">{{ __('Date Embauche :') }}</label>
          <div class="col-md-6">
            <input type="date" class="form-control" name="dateembauche" id="dateembauche"   value="{{$uservisiteur->dateembauche}}"  readonly="readonly" >
          </div>
        </div>		
        
      </div>			
    </div>			
  </div>
</div>

<div class="box box-default">
    <div class="box-header with-border bg-green">
      <h3 class="box-title">Details de la mission</h3>
    </div>
    <div class="box-body">
      <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <div class="form-group row">
            <label for="TypeMission" class="col-md-4 col-form-label text-md-right">{{ __('Type de mission :') }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="TypeMission" name="TypeMission" value="{{$uservisiteur->TypeMission}}"  readonly="readonly">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="DebutMission" class="col-md-4 col-form-label text-md-right">{{ __('Date debut missions :') }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="date" id="DebutMission" name="DebutMission" value="{{$uservisiteur->DebutMission}}"  readonly="readonly">
            </div>
        </div>

        <div class="form-group row">
            <label for="FinMission" class="col-md-4 col-form-label text-md-right">{{ __('Date fin mission :') }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="date" id="FinMission" name="FinMission" value="{{$uservisiteur->FinMission}}"  readonly="readonly">
            </div>
        </div>

        <div class="form-group row">
            <label for="NomHebergement" class="col-md-4 col-form-label text-md-right">{{ __("Nom de l'hotel :") }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="NomHebergement" name="NomHebergement" value="{{$uservisiteur->NomHebergement}}"  readonly="readonly">
            </div>
        </div>

        <div class="form-group row">
            <label for="AdresseHebergement" class="col-md-4 col-form-label text-md-right">{{ __("Adresse de l'hotel :") }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="AdresseHebergement" name="AdresseHebergement" value="{{$uservisiteur->AdresseHebergement}}"  readonly="readonly">
            </div>
        </div>

        <div class="form-group row">
            <label for="VilleHebergement" class="col-md-4 col-form-label text-md-right">{{ __("Ville de l'hotel :") }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="VilleHebergement" name="VilleHebergement" value="{{$uservisiteur->VilleHebergement}}"  readonly="readonly">
            </div>
        </div>

        <div class="form-group row">
            <label for="CpHebergement" class="col-md-4 col-form-label text-md-right">{{ __("Code postal de l'hotel :") }}</label>
            <div class="col-md-6">
              <input class="date form-control"  type="text" id="CpHebergement" name="CpHebergement" value="{{$uservisiteur->CpHebergement}}"  readonly="readonly">
            </div>
        </div>
      </div>
      
      <div class="col-md-6">
          <br>
          <br>
        <div class="form-group row">
          <label for="NomPressing" class="col-md-4 col-form-label text-md-right">{{ __('Nom du pressing :') }}</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="NomPressing" id="NomPressing"   value="{{$uservisiteur->NomPressing}}"  readonly="readonly">
          </div>
        </div>

        <div class="form-group row">
          <label for="AdressePressing" class="col-md-4 col-form-label text-md-right">{{ __('Adresse du pressing :') }}</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="AdressePressing" id="AdressePressing"   value="{{$uservisiteur->AdressePressing}}"  readonly="readonly">
          </div>
        </div>						

        <div class="form-group row">
          <label for="VillePressing" class="col-md-4 col-form-label text-md-right">{{ __('Ville du pressing :') }}</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="VillePressing" id="VillePressing"   value="{{$uservisiteur->VillePressing}}"  readonly="readonly" >
          </div>
        </div>	
        
        <div class="form-group row">
            <label for="CpPressing" class="col-md-4 col-form-label text-md-right">{{ __('Code postal du pressing :') }}</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="CpPressing" id="CpPressing"   value="{{$uservisiteur->CpPressing}}"  readonly="readonly" >
            </div>
        </div>
        
      </div>			
    </div>			
  </div>
</div>

<div class="box box-default">
    <div class="box-header with-border bg-red">
      <h3 class="box-title">Coûts de la mission</h3>
    </div>
    <div class="box-body">
      <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <div class="form-group row">
            <label for="nombrerepas" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de repas:') }}</label>
            <div class="col-md-6">
              <input type="number" class="form-control" name="nombrerepas" id="nombrerepas"   value="{{$uservisiteur->nombrerepas}}"  readonly="readonly">
            </div>
          </div>
  
          <div class="form-group row">
            <label for="nombrekilometre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre kilometre :') }}</label>
            <div class="col-md-6">
              <input type="number" class="form-control" name="nombrekilometre" id="nombrekilometre"   value="{{$uservisiteur->nombrekilometre}}"  readonly="readonly">
            </div>
          </div>						
  
          <div class="form-group row">
            <label for="nombrenuits" class="col-md-4 col-form-label text-md-right">{{ __('Nombre nuits :') }}</label>
            <div class="col-md-6">
              <input type="number" class="form-control" name="nombrenuits" id="nombrenuits"   value="{{$uservisiteur->nombrenuits}}"  readonly="readonly" >
            </div>
          </div>	

          <div class="form-group row">
              <label for="totalrepas" class="col-md-4 col-form-label text-md-right">{{ __('Total repas:') }}</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="totalrepas" id="totalrepas"   value="{{$uservisiteur->totalrepas}}"  readonly="readonly">
              </div>
          </div>
      </div>
      
      <div class="col-md-6">
          <br>
          <br>
            <div class="form-group row">
              <label for="totalkilometre" class="col-md-4 col-form-label text-md-right">{{ __('Total kilometre :') }}</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="totalkilometre" id="totalkilometre"   value="{{$uservisiteur->totalkilometre}}"  readonly="readonly">
              </div>
            </div>						
    
            <div class="form-group row">
              <label for="totalnuits" class="col-md-4 col-form-label text-md-right">{{ __('Total nuits :') }}</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="totalnuits" id="totalnuits"   value="{{$uservisiteur->totalnuits}}"  readonly="readonly" >
              </div>
            </div>

            <div class="form-group row">
                <label for="totalpressing" class="col-md-4 col-form-label text-md-right">{{ __('Total nuits :') }}</label>
                <div class="col-md-6">
                  <input type="number" class="form-control" name="totalnuits" id="totalpressing"   value="{{$uservisiteur->totalpressing}}"  readonly="readonly" >
              </div>
            </div>

            <div class="form-group row">
                <label for="totalfrais" class="col-md-4 col-form-label text-md-right">{{ __('Total des frais :') }}</label>
                <div class="col-md-6">
                  <input type="number" class="form-control bg-red" name="totalfrais" id="totalfrais"   value="{{$uservisiteur->totalfrais}}"  readonly="readonly" >
              </div>
            </div>
        
      </div>			
    </div>			
  </div>
</div>

<div class="box box-default">
    <div class="box-header with-border bg-aqua">
      <h3 class="box-title">Choix</h3>
    </div>
    <div class="box-body">
      <div class="row">
      
      <div class="col-md-6">
          <br>
          <br>
          <form method="post" action="{{action('FraigestionController@update', $id)}}">
              @csrf
              <input name="_method" type="hidden" value="PATCH">
              <div class="form-group row">
                  <label for="PrixKilo" class="col-md-4 col-form-label text-md-right">{{ __("Changez l'etat du dossier :") }}</label>
                  <div class="col-md-6">
                      <select name="etatdossier">
                          <option value="encour"  @if($uservisiteur->etatdossier=="encour") selected @endif>encour</option>
                          <option value="Refusée"  @if($uservisiteur->etatdossier=="Refusée") selected @endif>Refusée</option>
                          <option value="Accepter" @if($uservisiteur->etatdossier=="Accepter") selected @endif>Accepter</option>  
                          <option value="Manquedepiece" @if($uservisiteur->etatdossier=="Manquedepiece") selected @endif>Manquedepiece</option>
                      </select>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                  <button type="submit" class="btn btn-success" style="margin-left:38px">Changer le statut</button>
                </div>
              </div>
            </form>
      </div>
      <div class="col-md-6">
        <br>
        <br>
        <br>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <a  class="btn btn-warning" data-toggle="modal" data-target="#modal-dossier">Quitter le dossier</a>
            </div>
          </div>
      </div>			
    </div>			
  </div>
</div>


<div class="modal modal-danger fade" id="modal-dossier">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Attention !!!!</h4>
        </div>
        <div class="modal-body">
          <p>Quitter le dossier sans modifier son statut ? </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Non</button>
          <a href="{{url('gestion')}}"  class="btn btn-outline">Oui</a>
        </div>
      </div>
    </div>
  </div>
@endgestion

@vm
@include('error.error')
@endvm
@endsection