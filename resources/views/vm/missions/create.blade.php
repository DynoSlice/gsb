@extends('layouts.app')

@section('content')	
@vm	
	<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Nouvelle Note de Frais</h3>
			</div>
			<form method="post" action="{{url('frais')}}" enctype="multipart/form-data">
				@csrf
			<div class="box-body">
				<div class="row">
				<div class="col-md-6">
					<div class="form-group row">
						<label for="TypeMission" class="col-md-4 col-form-label text-md-right">{{ __('Type de mission :') }}</label>
						<div class="col-md-6">
							<input class="date form-control"  type="text" id="TypeMission" name="TypeMission" value="{{ old('TypeMission') }}" required autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label for="DebutMission" class="col-md-4 col-form-label text-md-right">{{ __('Date début mission :') }}</label>
						<div class="col-md-6">
							<input class="date form-control"  type="date" id="DebutMission" name="DebutMission" value="{{ old('DebutMission') }}" required autofocus>
						</div>
					</div>
					

					<div class="form-group row">
						<label for="FinMission" class="col-md-4 col-form-label text-md-right">{{ __('Date fin mission :') }}</label>
						<div class="col-md-6">
							<input class="date form-control"  type="date" id="FinMission" name="FinMission" value="{{ old('FinMission') }}" required autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Selectionner un hebergement :') }}</label>
						<div class="col-md-6" >
							<select name="hebergements_id" id="hebergements_id" class="form-control" style="width: 100%;">
									@foreach($Hebergements as $hebergement)
										<option value="{{ $hebergement->id }}">{{ $hebergement->NomHebergement }}</option>
									@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">{{ __('Selectionner un pressing :') }}</label>
						<div class="col-md-6" >
							<select name="pressings_id" id="pressings_id" class="form-control" style="width: 100%;">
									@foreach($Pressings as $pressing)
										<option value="{{ $pressing->id }}">{{ $pressing->NomPressing }}</option>
									@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="nombrerepas" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de repas :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="nombrerepas" id="nombrerepas" onBlur="calcul()" value="{{ old('nombrerepas') }}" required autofocus  >
						</div>
					</div>

					<div class="form-group row">
						<label for="nombrekilometre" class="col-md-4 col-form-label text-md-right">{{ __('Kilometrage :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="nombrekilometre" id="nombrekilometre" value="{{ old('nombrekilometre') }}" required autofocus onBlur="calcul()">
						</div>
					</div>

					<div class="form-group row">
						<label for="NombreNuit" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de nuits :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="nombrenuits" id="nombrenuits" value="{{ old('nombrenuits') }}" onBlur="calcul()">
						</div>
					</div>

					<div class="form-group row">
						<label for="PrixKilo" class="col-md-4 col-form-label text-md-right">{{ __('Prix kilometrique :') }}</label>
						<div class="col-md-6">
							<select id="Prix_Indemnité" onChange="calcul()">
								<option value="0.50">0.50</option>
								<option value="0.60">0.60</option>
								<option value="0.65">0.65</option>
								<option value="0.70">0.70</option>
							</select>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="NomHebergement" class="col-md-4 col-form-label text-md-right"></label>
						<div class="col-md-6">
							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success">
										{{ __('Envoyer') }}
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6">	
					<div class="form-group row">
						<label for="ResultatRepas" class="col-md-4 col-form-label text-md-right">{{ __('Resultat repas :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="totalrepas" id="totalrepas"   value="{{ old('totalrepas') }}" required autofocus onBlur="totaux_frais()" readonly="readonly">
						</div>
					</div>

					<div class="form-group row">
						<label for="ResultatNuit" class="col-md-4 col-form-label text-md-right">{{ __('Resultat nuitées :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="totalnuits" id="totalnuits"   value="{{ old('totalnuits') }}" required autofocus onBlur="totaux_frais()" readonly="readonly">
						</div>
					</div>						

					<div class="form-group row">
						<label for="resultatPressing" class="col-md-4 col-form-label text-md-right">{{ __('Resultat Pressings :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="totalpressing" id="totalpressing"   value="{{ old('totalpressing') }}" required autofocus onBlur="totaux_frais()" readonly="readonly" >
						</div>
					</div>	

					<div class="form-group row">
						<label for="totalkilometre" class="col-md-4 col-form-label text-md-right">{{ __('Resultat Kilometres :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="totalkilometre" id="totalkilometre"   value="{{ old('totalkilometre') }}" required autofocus onBlur="totaux_frais()" readonly="readonly" >
						</div>
					</div>

					<div class="form-group row">
						<label for="totalkilometre" class="col-md-4 col-form-label text-md-right">{{ __('Totaux Frais :') }}</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="totalfrais" id="totalfrais" readonly="readonly">
						</div>
					</div>	
					
				</div>			
			</div>			
		</form>
		</div>
		
@endvm

@gestion
@include('error.error')
@endgestion
@endsection

<script type="text/javascript">
	function calcul(){
		//Récupérer la valeur du nombre de nuits
		var Nombre_Nuit = document.getElementById('nombrenuits').value;
		var Nombre_Repas = document.getElementById('nombrerepas').value;
		var Nombre_Repas = document.getElementById('nombrerepas').value;
		var Prix_Indemnite = Number(document.getElementById('Prix_Indemnité').value);
		var Nombre_Kilometre = Number(document.getElementById('nombrekilometre').value);

		//on calcul le prix et on le stock dans une variable
		Prix_Nuit = Nombre_Nuit*90.00;
		Prix_Pressing = Nombre_Nuit*50.00;
		Prix_Repas = Nombre_Repas*18.00;
		Prix_Repas = Nombre_Repas*18.00;
		Resultat_Kilometre = Number(Prix_Indemnite * Nombre_Kilometre);
		Prix_total = Number(Prix_Nuit + Prix_Pressing + Prix_Repas + Resultat_Kilometre);
		//On affecte la valeur de la variable  à la valeur du champ

		document.getElementById('totalnuits').value = Prix_Nuit;
		document.getElementById('totalpressing').value = Prix_Pressing;
		document.getElementById('totalrepas').value = Prix_Repas;
		document.getElementById('totalrepas').value = Prix_Repas;
		document.getElementById("totalkilometre").value = Resultat_Kilometre;
		document.getElementById("totalfrais").value = Prix_total;					
	}
</script>
