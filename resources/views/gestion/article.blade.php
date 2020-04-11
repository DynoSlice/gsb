@extends('layouts.app')

@section('content')
@gestion
<div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Redigez message general</h3>
        </div>
        <div class="box-body">
          <form role="form" method="post" action="{{url('article')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Text</label>
              <input class="form-control"  type="text" id="titre" name="titre"  placeholder="Titre" required autofocus>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12" style="width: 100%; ">
                        <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Redigez le message
                            <small>support laboratoire GSB</small>
                            </h3>
                        </div>
                        <div class="box-body pad">  
                            <textarea class="textarea" id="contenu" name="contenu" placeholder="Ecrire votre texte ici"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>       
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label  class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-6">
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Publier') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
      </div>
@endgestion

@vm
@include('error.error')
@endvm


@endsection