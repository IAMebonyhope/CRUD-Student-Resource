
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
    
                        <section class="row text-center placeholders">
                        	<div class="col-4 col-sm-4 placeholder">
                                
                            </div>

                            <div class="col-4 col-sm-4 placeholder">
                                 <p class="font-weight-bold text-xl-left">{{$student->fullName}}</p>
                            </div>
                           
                            <div class="col-4 col-sm-4 placeholder">
                                
                            </div>
                        </section>
                        <br/>
                        <br/>
                        <br/>
    
                        <div class="table-responsive">
                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <td><b>Matric No</b></td>
                                       	<td>{{$student->matricNo}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Full Name</b></td>
                                       	<td>{{$student->fullName}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Gender</b></td>
                                       	<td>{{$student->gender}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Department</b></td>
                                       	<td>{{$student->dept}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Email</b></td>
                                       	<td>{{$student->email}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Phone No</b></td>
                                       	<td>{{$student->phoneNo}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            <a class="btn btn-outline-indigo btn-rounded" onclick="popup(document.getElementById('edit-popup'))"><i class="left"></i> Edit</a>
                            <a class="btn btn-indigo btn-rounded" href="/dashboard/delete/{{ $student->id }}"><i class="left"></i> Delete</a>
                        </div>
                    </main>
                </div>
            </div>
        
@endsection('content')

<div id="edit-popup" class="alert-screen">
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

        <div class="row">
            <div class="col">
                  
            </div>

            <div class="col-9">
                <section class="form-simple">

                    <form method="POST" action="{{url('/dashboard/update',$student->id)}}">

                    {{ csrf_field() }}
                    <div class="card">

                        <!--Header-->
                        <div class="header pt-3 grey lighten-2">

                            <div class="row d-flex justify-content-start">
                                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Edit Detail</h3>
                            </div>

                        </div>
                        <!--Header-->

                        <div class="card-body mx-4 mt-4">

                            <!--Body-->
                            <div class="md-form">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Full Name</label><br/>
                                    <input type="text" id="name" name="fullName" class="form-control" value="{{ $student->fullName }}" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fullName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Email</label><br/>
                                    <input type="text" id="email" name="email" class="form-control" value="{{ $student->email }}" autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <i class="fa fa-user-plus prefix grey-text"></i>
                                    <label for="orangeForm-name">Phone</label><br/>
                                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $student->phoneNo }}" autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-indigo btn-block z-depth-2">Update</button>
                            </div>

                        </div>

                    </div>
                    </form>

                </section>
            </div>

            <div class="col">
                  
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
</script>


