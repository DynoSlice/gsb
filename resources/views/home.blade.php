@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
</section>
<br>
<br>
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
                                @foreach($Articles as $Article)
                                <li>
                                  <i class="fa fa-envelope bg-blue"></i>
                    
                                  <div class="timeline-item">
                                    <span  class="time bg-green"><i class="fa fa-clock-o"></i> {{$Article->created_at}}</span>
                    
                                    <h3 class="timeline-header"><a href="">{{$Article->auteur}}</a> {{$Article->titre}}</h3>
                    
                                    <div class="timeline-body">
                                            {{$Article->contenu}}
                                    </div>
                                    <div class="timeline-footer">
                                      <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#yourModal{{$Article->id}}">Read more</a>
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

@foreach ($Articles as $Article)    
    <div class="modal fade" id="yourModal{{$Article->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">{{$Article->auteur}}</h2>
            
          </div>
          <div class="modal-body">
            <div class="form-group">
              <h4 class="modal-title" id="myModalLabel">{{$Article->titre}} :</h4>
              {{$Article->contenu}}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
@endsection
