
@extends('layouts.app')

@section('content')
@vm
<div class="hebergement box box-info" >
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter un nouvel hotel</h3>
        </div>
          <div class="box-body">
            <form method="post" action="{{url('hebergement')}}" enctype="multipart/form-data">
                @csrf
        
                <div class="form-group row">
                    <label for="NomHebergement" class="col-md-4 col-form-label text-md-right">{{ __("Nom de l'hotel :") }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="text" id="NomHebergement" name="NomHebergement" value="{{ old('NomHebergement') }}" required autofocus >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="AdresseHebergement" class="col-md-4 col-form-label text-md-right">{{ __("Adresse de l'hotel :") }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="text" id="AdresseHebergement" name="AdresseHebergement" value="{{ old('AdresseHebergement') }}" required autofocus >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="VilleHebergement" class="col-md-4 col-form-label text-md-right">{{ __("Ville de l'hotel :") }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="text" id="VilleHebergement" name="VilleHebergement" value="{{ old('VilleHebergement') }}" required autofocus >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="CpHebergement" class="col-md-4 col-form-label text-md-right">{{ __("CP de l'hotel :") }}</label>
                    <div class="col-md-6">
                        <input class="date form-control"  type="number" id="CpHebergement" name="CpHebergement" value="{{ old('CpHebergement') }}" required autofocus >
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

@include('error.error')
@endsection

