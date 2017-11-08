<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class RegistrationController extends Controller
{
	public function __construct(){

		//$this->middleware('auth')->except(['create']);

	}

    public function create(){

    	return view('session/create');

    }

	public function store(){

    	$this->validate(request(), [
    		'matric' => 'required',
    		'name' => 'required',
    		'dept' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required',
    		'password' => 'required|confirmed'		
    	]);

    	$admin = User::create([
			    		'matricNo' => Request('matric'),
			    		'fullName' => Request('name'),
			    		'dept' => Request('dept'),
			    		'email' => Request('email'),
			    		'phoneNo' => Request('phone'),
			    		'password' => bcrypt(Request('password'))		
    				]);


    	auth()->login($admin);

        session()->flash('registrationMessage', 'You have Successfully registered');
        
    	return redirect('/dashboard');
    }
}
