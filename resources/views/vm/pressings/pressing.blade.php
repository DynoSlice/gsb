@extends('layouts.app')

@section('content')
@vm
<div class="pressing box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Ajouter un nouveaux pressing</h3>
    </div>
      <div class="box-body">
        <form method="post" action="{{url('pressing')}}" enctype="multipart/form-data">
            @csrf

                <div class="form-group row">
                    <label for="NomPressing" class="col-md-4 col-form-label text-md-right">{{ __('Nom du Pressing :') }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="text" id="NomPressing" name="NomPressing" value="{{ old('NomPressing') }}" required autofocus>
                    </div>
                </div>                

                <div class="form-group row">
                    <label for="AdressePressing" class="col-md-4 col-form-label text-md-right">{{ __('Adresse du Pressing :') }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="text" id="AdressePressing" name="AdressePressing" value="{{ old('AdressePressing') }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="AdressePressing" class="col-md-4 col-form-label text-md-right">{{ __('Ville du Pressing :') }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="text" id="VillePressing" name="VillePressing" value="{{ old('VillePressing') }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="CpPressing" class="col-md-4 col-form-label text-md-right">{{ __('Code postal du Pressing :') }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="number" id="CpPressing" name="CpPressing" value="{{ old('CpPressing') }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-md-4 col-form-label text-md-right"></label>
                    <div class="col-md-6">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        
</div>
</div>
@endvm
@gestion
@include('error.error')
@endgestion
@endsection

