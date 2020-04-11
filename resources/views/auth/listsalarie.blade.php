@extends('layouts.app')

@section('content')
@gestion
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Liste des salariés </h3>
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
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date d'embauche</th>
            <th>Email</th>
            <th>Poste</th> 
            <th>Action</th>     
        </tr>
        </thead>
        @foreach($Registers as $user)
        <tfoot>
            <tr>
                <td>{{$user['name']}}</td>
                <td>{{$user['prenom']}}</td>
                <td>{{$user['dateembauche']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['roles']}}</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$user->id}}"><i class="fa fa-fw fa-eye"></i></button></td>
            </tr>
        </tfoot>
        @endforeach
      </table>
    </div>

    @foreach ($Registers as $user)    
    <div class="modal fade" id="yourModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Salarié N°{{$user->id}}</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nom</label>
              <input type="text" class="form-control"  value="{{$user->name}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Prenom</label>
                <input type="text" class="form-control" value="{{$user->prenom}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Adresse</label>
                <input type="text" class="form-control" value="{{$user->adresse}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Ville</label>
                <input type="text" class="form-control" value="{{$user->ville}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Code postal</label>
                <input type="text" class="form-control" value="{{$user->cp}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Date embauche </label>
                <input type="text" class="form-control" value="{{$user->dateembauche}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email </label>
                <input type="text" class="form-control" value="{{$user->email}}" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Poste </label>
                <input type="text" class="form-control" value="{{$user->roles}}" readonly>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endforeach
@endgestion

@vm
@include('error.error')
@endvm

@endsection