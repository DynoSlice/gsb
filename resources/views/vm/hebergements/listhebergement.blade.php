
@extends('layouts.app')

@section('content')
@vm
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Liste des Hotels</h3>
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
            <th>Nom de l'hotel</th>
            <th>Adresse de l'hotel</th>
            <th>Code postal de l'hotel</th>
            <th>Ville de l'hotel</th>
            <th>Action</th>      
        </tr>
        </thead>
        @foreach($Hebergements as $hebergement)
        <tfoot>
            <tr>
                <td>{{$hebergement['id']}}</td>
                <td>{{$hebergement['NomHebergement']}}</td>
                <td>{{$hebergement['AdresseHebergement']}}</td>
                <td>{{$hebergement['CpHebergement']}}</td>
                <td>{{$hebergement['VilleHebergement']}}</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$hebergement->id}}"><i class="fa fa-fw fa-eye"></i></button></td>
            </tr>
        </tfoot>
        @endforeach
      </table>
    </div>
    @foreach ($Hebergements as $hebergement)    
    <div class="modal fade" id="yourModal{{$hebergement->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Frais de Mission N°{{$hebergement->id}}</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nom de l'hotel</label>
              <input type="text" class="form-control"  value="{{$hebergement->NomHebergement}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Adresse de l'hotel</label>
                <input type="text" class="form-control" value="{{$hebergement->AdresseHebergement}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Ville de l'hotel</label>
                <input type="text" class="form-control" value="{{$hebergement->VilleHebergement}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">CP de l'hotel</label>
                <input type="text" class="form-control" value="{{$hebergement->CpHebergement}}" readonly>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

