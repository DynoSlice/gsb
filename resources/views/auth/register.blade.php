@gestion
@extends('layouts.app')

@section('content')
<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Enregistrer nouveau salarié</h3>
			</div>
			<form method="POST" action="{{ route('register') }}" enctype = "multipart / form-data">
				@csrf
			<div class="box-body">
				<div class="row">
				<div class="col-md-6">
					<div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                        <div class="col-md-6">
                            <input id="prenom" type="text" class="form-control" name="prenom" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                        <div class="col-md-6">
                            <input id="adresse" type="text" class="form-control" name="adresse" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                        <div class="col-md-6">
                            <input id="ville" type="text" class="form-control" name="ville" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>

                        <div class="col-md-6">
                            <input id="cp" type="number" class="form-control" name="cp" required>
                        </div>
                    </div>

					<div class="form-group row">
						<label for="NomHebergement" class="col-md-4 col-form-label text-md-right"></label>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
					</div>
				</div>
				
				<div class="col-md-6">	
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dateembauche" class="col-md-4 col-form-label text-md-right">{{ __('Poste') }}</label>

                        <div class="col-md-6">
                            <select class="form-control" id="roles" name="roles">
                                <option value="">--choisir le poste--</option>
                                <option value="vm">vm</option>
                                <option value="praticiens">praticiens</option>
                                <option value="gestion">gestion</option>
                            </select>
                        </div>
                    </div>                   
                    
				</div>			
			</div>			
		</form>
		</div>
@endgestion

@endsection
