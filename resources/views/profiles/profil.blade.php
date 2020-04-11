@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="/uploads/avatars/{{ Auth::user()->avatar}}" alt="User profile picture">

        <h3 class="profile-username text-center">{{ Auth::user()->name }} {{ Auth::user()->prenom }}</h3>

        <p class="text-muted text-center">{{ Auth::user()->roles }}</p>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Mes informations</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <strong><i class="fa fa-fw fa-home"></i> Adresse</strong>
        <p class="text-muted">
          {{ Auth::user()->adresse }}
        </p>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
        <p>
          Ville : {{ Auth::user()->ville }}
        </p>
        <p>
          Code postal : {{ Auth::user()->cp }}
          </p>
        <hr>

        <strong><i class="fa fa-pencil margin-r-5"></i>Compétences</strong>
        <p>
            @foreach($Competences as $competence)
          <span class="label label-warning">{{$competence->NomCompetence}}</span>
            @endforeach
        </p>
        <hr>
        <strong><i class="fa fa-file-text-o margin-r-5"></i> Mon adresse Mail</strong>
        <p>{{ Auth::user()->email }}</p>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">Activité</a></li>
        <li><a href="#timeline" data-toggle="tab">Ajouter compétences</a></li>
        <li><a href="#settings" data-toggle="tab">Modifier sa photo</a></li>
      </ul>
      <div class="tab-content">
          {{-- debut du pane --}}
        <div class="active tab-pane" id="activity">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
        
                        <div class="card-body">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                              <p>{{ \Session::get('success') }}</p>
                            </div><br />
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif                   
                            <div class="row">
                                    <div class="col-md-12">
                                      <!-- The time line -->
                                      <ul class="timeline">
                                        <!-- timeline item -->
                                        @foreach($Missions as $mission)
                                        <li>
                                          <i class="fa fa-fw fa-euro bg-blue"></i>
                                    
                            
                                          <div class="timeline-item">
                                            <span  class="time bg-green"><i class="fa fa-clock-o"></i> {{$mission->created_at}}</span>
                            
                                            <h3 class="timeline-header"><a href="">Creation fiche frais de mission N°{{$mission->id}}</a> </h3>
                            
                                            <div class="timeline-body">
                                                    {{$mission->TypeMission}}
                                            </div>
                                          </div>
                                        </li>
                                        @endforeach

                                        @foreach($Hebergements as $hebergement)
                                        <li>
                                            <i class="fa fa-fw fa-hotel bg-red"></i>
                                    
                            
                                          <div class="timeline-item">
                                            <span  class="time bg-green"><i class="fa fa-clock-o"></i> {{$hebergement->created_at}}</span>
                            
                                            <h3 class="timeline-header"><a href="">Creation fiche hotel N°{{$hebergement->id}}</a> </h3>
                            
                                            <div class="timeline-body">
                                                    {{$hebergement->NomHebergement}}
                                            </div>
                                          </div>
                                        </li>
                                        @endforeach

                                        @foreach($Pressings as $pressing)
                                        <li>
                                            <i class="fa fa-fw fa-adn bg-green"></i>
                                    
                            
                                          <div class="timeline-item">
                                            <span  class="time bg-green"><i class="fa fa-clock-o"></i> {{$pressing->created_at}}</span>
                            
                                            <h3 class="timeline-header"><a href="">Creation du pressing N°{{$pressing->id}}</a> </h3>
                            
                                            <div class="timeline-body">
                                                    {{$pressing->NomPressing}}
                                            </div>
                                          </div>
                                        </li>
                                        @endforeach

                                        @foreach($Articles as $article)
                                        <li>
                                            <i class="fa fa-envelope bg-blue"></i>
                                    
                            
                                          <div class="timeline-item">
                                            <span  class="time bg-green"><i class="fa fa-clock-o"></i> {{$article->created_at}}</span>
                            
                                            <h3 class="timeline-header"><a href="">Creation du message N°{{$article->id}}</a> </h3>
                            
                                            <div class="timeline-body">
                                                    {{$article->titre}}
                                            </div>
                                          </div>
                                        </li>
                                        @endforeach
                                        <!-- END timeline item -->
                                        <li>
                                          <i class="fa fa-clock-o bg-gray"></i>
                                        </li>
                                      </ul>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        {{-- fin du pane --}}
        {{-- debut du pane --}}
        <div class="tab-pane" id="timeline">
            <form method="post" action="{{url('competence')}}" class="form-horizontal">
                @csrf
                <div class="form-group">
                  <label for="NomCompetence" class="col-sm-2 control-label">Competences</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="NomCompetence" id="NomCompetence" placeholder="Compétence">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>
        </div>
        {{-- fin du pane --}}
        <!-- /debut pane-->
        <div class="tab-pane" id="settings">
          <form method="POST" action="{{url('profil')}}" class="form-horizontal"  enctype='multipart/form-data'>
              @csrf
              <div class="form-group ">
                  <label for="filename" class="col-sm-2 control-label">{{ __('Photo identité') }}</label>
                  <div class="col-sm-10">
                      <input type="file" class="form-control" name="avatar">
                  </div>
              </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Modifier</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.fin settings-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@endsection