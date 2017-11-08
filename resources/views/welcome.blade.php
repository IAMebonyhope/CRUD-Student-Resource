@extends('layout')


@section('content')
	<div class="row">
		<div class="home-header col-md-12">
			<div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 wow fadeIn mb-3">
                            <div class="text-center">
                                <ul>
                                    <li>
                                        <h1 class="display-4 font-bold mb-5 wow fadeInUp">Our New Admin Portal</h1></li>
                                    <li>
                                        <h5 class="mb-5 wow fadeInUp" data-wow-delay="0.2s">It comes with a lot of new features...</h5>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="0.4s">
                                        <a class="btn btn-outline-indigo btn-rounded" href="{{url('/register')}}"><i class="fa fa-user left"></i> Register</a>
                                        <a class="btn btn-indigo btn-rounded" href="{{url('/login')}}"><i class="fa fa-user left"></i>Log in</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
		</div>
	</div>
	
@endsection('content')