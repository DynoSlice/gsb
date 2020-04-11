@extends('layouts.app')

@section('content')
@vm
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Liste des Frais de mission</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br />
       @endif
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom de la mission</th>
            <th>Date debut de la mission</th>
            <th>Fin de la mission</th>
            <th>Total frais mission</th> 
            <th>traitement du dossier</th>
            <th>Action</th>     
        </tr>
        </thead>
        @foreach($Missions as $mission)
        <tfoot>
            <tr>
                <td>{{$mission['id']}}</td>
                <td>{{$mission['TypeMission']}}</td>
                <td>{{$mission['DebutMission']}}</td>
                <td>{{$mission['FinMission']}}</td>
                <td class="bg-red">{{$mission['totalfrais']}}€</td>
                <td class="bg-yellow">{{$mission['etatdossier']}}</td>
                <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$mission->id}}"><i class="fa fa-fw fa-eye"></i></button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modalsup{{$mission->id}}"><i class="fa fa-fw fa-trash"></i></button>
                </td>
            </tr>
        </tfoot>
        @endforeach
      </table>
    </div>

    @foreach ($Missions as $mission)    
    <div class="modal fade" id="yourModal{{$mission->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Frais de Mission N°{{$mission->id}}</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nom de la mission</label>
              <input type="text" class="form-control"  value="{{$mission->TypeMission}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Date de debut de la mission</label>
                <input type="text" class="form-control" value="{{$mission->DebutMission}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Date de fin de la mission</label>
                <input type="text" class="form-control" value="{{$mission->FinMission}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Total frais repas</label>
                <input type="text" class="form-control" value="{{$mission->totalrepas}}€" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Total frais Kilometrique</label>
                <input type="text" class="form-control" value="{{$mission->totalkilometre}}€" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Total frais hotel </label>
                <input type="text" class="form-control" value="{{$mission->totalnuits}}€" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Total frais pressing </label>
                <input type="text" class="form-control" value="{{$mission->totalpressing}}€" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Total frais </label>
                <input type="text" class="form-control" value="{{$mission->totalfrais}}€" readonly>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
@endforeach

@foreach ($Missions as $mission)    
    <div class="modal modal-danger fade" id="Modalsup{{$mission->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Frais de Mission N°{{$mission->id}}</h4>
              </div>
              <div class="modal-body">
                
                  Voulez vous vraiment supprimer les frais de la mission N°{{$mission->id}}
                
              </div>
              <div class="modal-footer">
                  <form action="{{action('FraisController@destroy', $mission['id'])}}" method="post">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit" >Oui</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                    </form>
              </div>
            </div>
          </div>
    </div>
@endforeach
@endvm
@gestion
@include('error.error')
@endgestion
@endsection

