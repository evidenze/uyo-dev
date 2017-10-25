@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:150px;margin-bottom:200px;">
  <div class="card shadow" style="auto;padding-top:80px;">
    <div class="card-body">
      <div class="row">
      <div class="col-md-4 text-center">
          <img class="img-fluid" src="http://localhost/uyodev/storage/app/{{ $users->photo }}" width="200px" style="border-radius:50%;"><br/><br/>
          <h5 class="text-center" style="color:#212121;font-weight:bold;text-transform:capitalize;">{{ $users->firstname." ".$users->lastname }}</h5>
          <p class="card-text" style="color:gray;">{{ $users->specialization }}</p>
          <a href="{{ $users->facebook_link }}"><i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="color:#3B5998;"></i></a> &nbsp&nbsp<a href="{{ $users->twitter_link }}"> <i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color:#00aced;"></i></a><br/><br/>
        </div>
        <div class="col-md-8">
          <h6 style="font-weight:bold;">BIO</h6>
          <p style="color:gray;">{{ $users->about }}</p><br/></br>
          <h6 style="font-weight:bold;">EMAIL</h6>
          <p style="color:gray;">{{ $users->email }}</p><br/></br>
          <a href="mailto:{{ $users->email }}" target="_top" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color:#1de9b6 ;color:#fff;">Contact</a>

        </div>
      </div>
    </div>
    </div>
    </div>
@endsection
