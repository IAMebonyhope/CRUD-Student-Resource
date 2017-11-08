
@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>
    
            <div class="container-fluid">
                <div class="row">
    
                    <main class="col-sm-12 ml-sm-auto col-md-12 pt-3" role="main">

                        <div class="row col-md-12">               
                            @if(Session::has('registrationMessage'))
                                <div class="alert alert-success" role="alert">
                                    <strong>
                                        {{ session('registrationMessage')}}
                                    </strong>
                                </div>
                            @endif

                        </div>
    
    
                        <section class="row text-center placeholders">
                            
                            <div class="col-4 col-sm-4 placeholder">
                                
                            </div>
                            <div class="col-4 col-sm-4 placeholder">
                                <img src="{{asset('images/person.jpg')}}" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"><br/><br/>

                                @if(Auth::check())
                                    <span>{{ Auth::user()->fullName}}</span>
                                @endif
                                
                            </div>
                            <div class="col-4 col-sm-4 placeholder">
                                
                            </div>
                        </section>
                        <br/>
                        <br/>
                        <br/>
    
                        <h2>Students Table</h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td><b>Matric No</b></td>
                                        <td><b>Name</b></td>
                                        <td><b>Department</b></td>
                                    </tr>

                                    @foreach($students as $student)
                                    
                                        <tr>
                                            <td><a class="nav-link" href="/dashboard/{{ $student->id }}">{{$student->matricNo}}</a></td>
                                            <td>{{$student->fullName}}</td>
                                            <td>{{$student->dept}}</td>
                                        </tr>

                                    @endforeach
                                    
                                </tbody>
                            </table>

                            <a class="btn btn-outline-indigo btn-rounded" onclick="popup(document.getElementById('delete-popup'))"><i class="left"></i> Delete Account</a>
                                        <a class="btn btn-indigo btn-rounded" href="{{url('/logout')}}"><i class="left"></i> Log Out</a>
                                        <a class="btn btn-outline-indigo btn-rounded" href="{{url('/add')}}"><i class="left"></i> Add New Student</a>
                        </div>
                    </main>
                </div>
            </div>
        
@endsection('content')

<div id="delete-popup" class="alert-screen">
    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron">
            <p class="lead">Are you sure you want to delete this account...</p>
            <hr class="m-y-md">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/delete/{{ Auth::user()->id }}" role="button">YES</a>
                <a class="btn btn-primary btn-lg" href="#" role="button" onclick="remove(document.getElementById('delete-popup'))">NO</a>
            </p>
        </div>
        
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-1-12|auto space">
                  
            </div>
        </div>
    </div>
</div>

<script>
    function popup(elnt) {
        elnt.style.display = 'block';
    }

    function remove(elnt) {
        elnt.style.display = 'none';
    }
</script>



