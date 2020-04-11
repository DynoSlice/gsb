@extends('layouts.app')
@section('content')
@gestion
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
        @foreach($uservisiteur as $mission)
        <tfoot>
            <tr>
                <td>{{$mission['id']}}</td>
                <td>{{$mission['TypeMission']}}</td>
                <td>{{$mission['DebutMission']}}</td>
                <td>{{$mission['FinMission']}}</td>
                <td>{{$mission['totalfrais']}}€</td>
                <td class="bg-yellow">{{$mission['etatdossier']}}</td>
                <td>
                        <a href="{{action('FraigestionController@edits', $mission['id'])}}" class="btn btn-warning">Traiter</a>
                </td>
            </tr>
        </tfoot>
        @endforeach
      </table>
    </div>
@endgestion

@vm
@include('error.error')
@endvm
@endsection