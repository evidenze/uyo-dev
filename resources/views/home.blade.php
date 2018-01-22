@extends('layouts.app')

@section('content')
<div class="jumbo jumbotron-fluid">
  <div class="container">
    <h2 class="text-center" style="padding-top:200px;">Welcome to</h2>
    <h1 class="text-center" style="color:#18ffff;">Uyo tech Community</h1>
    <h5 class="text-center" style="line-height:1.6;">UyoDev lets you discover and connect with awesome developers, designers,<br> bloggers and marketers from Uyo</h5>
  </div>
</div>
<div class="container">
  <div class="row text-center" style="padding-top:100px;">
    <div class="col-md-4">
      <img src="http://localhost/uyodev/public/img/search.png" width="80px"/><br>
      <h2>Discover</h2>
        <p style="color:gray;">Discover awesome software developers, designers, marketers and bloggers from Uyo.</p>
    </div>
    <div class="col-md-4">
      <img src="http://localhost/uyodev/public/img/sharing.png" width="80px"/><br/>
      <h2>Connect</h2>
        <p style="color:gray;">Connect, share and learn from each other in the community.</p>
    </div>
    <div class="col-md-4">
      <img src="http://localhost/uyodev/public/img/handshake.png" width="80px"/></br>
      <h2>Collaborate</h2>
        <p style="color:gray;">Collaboration is the key to success. Collaborate with each and grow your way to success.</p>
    </div>
  </div><br/><br/>
@guest
   <p class="text-center">  <a href="{{ route('register') }}" target="_top" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color:#1de9b6 ;color:#fff;">Join the Community</a></p><br><br>
@endguest

  <hr>
@if($users == null)

   <h3 class="text-center">No Member found</h3>

@else

</br>
<h2 class="text-center" style="font-weight:bold;">Members</h2>
   <div class="row">
@foreach($users as $user)
     <div class="col-md-3">
    <div class="card text-center shadow" style="margin-top:100px;margin-bottom:20px;">
      <div class="card-body">
        <a href="{{ route('home.show', $user) }}"><img class="img-fluid" src='http://localhost/uyodev/storage/app/{{ $user->photo }}' width="150px" style="border-radius:50%;"></a><br/><br/>
        <h6 class="card-title" style="text-transform:capitalize;font-weight:bold;"><a href="{{ route('home.show', $user) }}" style="color:#212121;">{{ $user->firstname." ".$user->lastname }}</a></h6>
        <p class="card-text" style="color:gray;">{{ $user->specialization }}</p>
        <a href="{{ $user->facebook_link }}"><i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="color:#3B5998;"></i></a> &nbsp&nbsp<a href="{{ $user->twitter_link }}"> <i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color:#00aced;"></i></a><br/><br/>
        <a href="mailto:{{ $user->email }}" target="_top" class="btn btn-lg btn-block active" role="button" aria-pressed="true" style="background-color:#1de9b6 ;color:#fff;">Contact</a>
      </div>
    </div>
  </div>
@endforeach
  </div><br><br>
{{ $users->links() }}
@endif
</div><br><br>

<div class="container" style="margin-bottom:100px;">
  <h2 class="text-center">Awesome Learning Resources</h2><br><br><br>
  <div class="row">
    <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h4 class="text-center" style="color:gray;padding:50px;"><a href="https://www.w3schools.com/js/default.asp" target="_blank">Getting Started with Javascript</a></h4></div>
      </div>
    </div>
    <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h4 class="text-center" style="color:gray;padding:50px;"><a href="#">React vs Vue.Js</a></h4></div>
      </div>
    </div>
    <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h4 class="text-center" style="color:gray;padding:50px;"><a href="#">Building for the next million users.</a></h4></div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
