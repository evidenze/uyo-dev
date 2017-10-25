@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 mr-auto ml-auto">
            <div class="card" style="margin-top:100px;margin-bottom:100px;"><br/><br/>
             <h4 class="text-center text-info" style="padding-top:40px;font-weight:bold;">SIGNUP TO GET <br/>STARTED</h4></br>
                <div class="card-body">
                    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                          <div class="form-row">
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} col-md-6">

                                <input id="firstname" placeholder="First Name" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                        </div>

                                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} col-md-6">

                                                        <input id="lastname" placeholder="Last Name" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                                        @if ($errors->has('lastname'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('lastname') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            <div class="form-row">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">

                                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('specialization') ? ' has-error' : '' }} col-md-6">

                              <select class="custom-select form-control" name="specialization">
                                  <option value="">Who are you?</option>
                                  <option value="Developer">Developer</option>
                                  <option value="UI/UX Designer">UI/UX Designer</option>
                                  <option value="Blogger">Blogger</option>
                                  <option value="Marketer">Marketer</option>
                              </select>

                                @if ($errors->has('specialization'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specialization') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">

                                <textarea id="about" placeholder="Short Bio" rows="5" class="form-control" name="about" value="{{ old('about') }}" required></textarea>

                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-row">

                        <div class="form-group{{ $errors->has('facebook_link') ? ' has-error' : '' }} col-md-6">

                                <input id="facebook_link" placeholder="Facebook Profile" type="text" class="form-control" name="facebook_link" value="{{ old('facebook_link') }}" required>

                                @if ($errors->has('facebook_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook_link') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group{{ $errors->has('twitter_link') ? ' has-error' : '' }} col-md-6">

                                <input id="twitter_link" placeholder="Twitter Profile" type="text" class="form-control" name="twitter_link" value="{{ old('twitter_link') }}" required>

                                @if ($errors->has('twitter_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('twitter_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                                                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                                                          <label for="photo" class="col-md-12 control-label" style="color:gray">Profile Picture</label>

                                                                                <input id="photo" placeholder="Profile Picture" type="file" class="form-control" name="photo" value="{{ old('photo') }}" required>

                                                                                @if ($errors->has('photo'))
                                                                                    <span class="help-block">
                                                                                        <strong>{{ $errors->first('photo') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>

                        <div class="form-row">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">

                                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="form-group col-md-6">

                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                        <div class="form-group">
                                <a class="btn btn-block" href="{{ url('login/facebook') }}" role="button" style="background-color:#3b5998;color:#fff;">Continue with facebook</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
