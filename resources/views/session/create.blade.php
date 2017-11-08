@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                  
            </div>

            <div class="col-8">
                <section class="form-simple">

                    <form method="POST" action="{{url('register')}}">

                    {{ csrf_field() }}
                    <div class="card">

                        <!--Header-->
                        <div class="header pt-3 grey lighten-2">

                            <div class="row d-flex justify-content-start">
                                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">REGISTER</h3>
                            </div>

                        </div>
                        <!--Header-->

                        <div class="card-body mx-4 mt-4">

                            <!--Body-->
                            <div class="md-form">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Full Name</label><br/>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('matric') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Staff ID</label><br/>
                                    <input type="text" id="matric" name="matric" class="form-control" value="{{ old('matric') }}" autofocus>

                                    @if ($errors->has('matric'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('matric') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Email</label><br/>
                                    <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Department</label><br/>
                                    <input type="text" id="dept" name="dept" class="form-control" value="{{ old('dept') }}" autofocus>

                                    @if ($errors->has('dept'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dept') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Phone</label><br/>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Password</label><br/>
                                    <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" autofocus>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Confirm Password</label><br/>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" autofocus>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-indigo btn-block z-depth-2">Sign Up</button>
                            </div>
                            <p class="font-small grey-text d-flex justify-content-center">Do you have an account already <a href="{{url('/login')}}" class="dark-grey-text font-bold ml-1"> Log In</a></p>

                        </div>

                    </div>
                    </form>

                </section>
            </div>

            <div class="col">
                  
            </div>
        </div>
    </div>
@endsection('content')