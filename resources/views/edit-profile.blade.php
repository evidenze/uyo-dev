@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 mr-auto ml-auto">
            <div class="card" style="margin-top:100px;margin-bottom:100px;"><br/><br/>
             <h3 class="text-center text-info">Edit Your Profile</h3>
                <div class="card-body">
                    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('profile.update', $profiles->id) }}">
                      {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="firstname" placeholder="First Name" type="text" class="form-control" name="firstname" value="{{ $profiles->firstname }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                                                    <div class="col-md-12">
                                                        <input id="lastname" placeholder="Last Name" type="text" class="form-control" name="lastname" value="{{ $profiles->lastname }}" required>

                                                        @if ($errors->has('lastname'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('lastname') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ $profiles->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('specialization') ? ' has-error' : '' }}">

                            <div class="col-md-12">
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

                            <div class="col-md-12">
                                <textarea id="about" placeholder="Short Bio" rows="5" class="form-control" name="about" value="{{ $profiles->about }}" required></textarea>

                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('facebook_link') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="facebook_link" placeholder="Facebook Profile" type="text" class="form-control" name="facebook_link" value="{{ $profiles->facebook_link }}" required>

                                @if ($errors->has('facebook_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('twitter_link') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="twitter_link" placeholder="Twitter Profile" type="text" class="form-control" name="twitter_link" value="{{ $profiles->twitter_link }}" required>

                                @if ($errors->has('twitter_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('twitter_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                                                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                                                          <label for="photo" class="col-md-12 control-label" style="color:gray">Profile Picture</label>

                                                                            <div class="col-md-12">
                                                                                <input id="photo" placeholder="Profile Picture" type="file" class="form-control" name="photo" value="" required>

                                                                                @if ($errors->has('photo'))
                                                                                    <span class="help-block">
                                                                                        <strong>{{ $errors->first('photo') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>




                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
