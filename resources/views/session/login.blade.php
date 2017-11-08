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

                    <form method="POST" action="{{url('/login')}}">

                    @include('error')

                    {{ csrf_field() }}
                    <div class="card">

                        <!--Header-->
                        <div class="header pt-3 grey lighten-2">

                            <div class="row d-flex justify-content-start">
                                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">LOG IN</h3>
                            </div>

                        </div>
                        <!--Header-->

                        <div class="card-body mx-4 mt-4">

                             <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <label for="orangeForm-email">Email</label><br>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>

                            <div class="md-form">
                                <i class="fa fa-user-plus prefix grey-text"></i>
                                <label for="orangeForm-name">Password</label><br/>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-indigo btn-block z-depth-2">Log In</button>
                            </div>
                            <p class="font-small grey-text d-flex justify-content-center">Don't have an account yet? <a href="{{url('/register')}}" class="dark-grey-text font-bold ml-1"> Sign Up</a></p>

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