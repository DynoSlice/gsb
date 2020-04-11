
@extends('layouts.app')

@section('content')
@vm
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Liste des Pressing</h3>
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
            <th>Nom du pressing</th>
            <th>Adresse du pressing</th>
            <th>Code postal du pressing</th>
            <th>Ville du pressing</th>  
            <th>Action</th>    
        </tr>
        </thead>
        @foreach($Pressings as $pressing)
        <tfoot>
            <tr>
                <td>{{$pressing['id']}}</td>
                <td>{{$pressing['NomPressing']}}</td>
                <td>{{$pressing['AdressePressing']}}</td>
                <td>{{$pressing['CpPressing']}}</td>
                <td>{{$pressing['VillePressing']}}</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$pressing->id}}"><i class="fa fa-fw fa-eye"></i></button></td>
            </tr>
        </tfoot>
        @endforeach
      </table>
    </div>
    @foreach ($Pressings as $pressing)    
    <div class="modal fade" id="yourModal{{$pressing->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Frais de Mission N°{{$pressing->id}}</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nom du pressing</label>
              <input type="text" class="form-control"  value="{{$pressing->NomPressing}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Adresse du pressing</label>
                <input type="text" class="form-control" value="{{$pressing->AdressePressing}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Ville du pressing</label>
                <input type="text" class="form-control" value="{{$pressing->VillePressing}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">CP du pressing</label>
                <input type="text" class="form-control" value="{{$pressing->CpPressing}}" readonly>
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
