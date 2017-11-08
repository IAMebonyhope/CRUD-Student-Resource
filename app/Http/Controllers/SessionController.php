<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SessionController extends Controller
{
    public function __construct(){

        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create(){

        return view('session/login');

    }

    public function store(){

        if(auth()->attempt(request(['email', 'password']))){

            return redirect('/dashboard');
        }
        else{
            return back()->withErrors([
                'message' => 'password or email incorrect'
            ]);
        }
    }

    public function destroy(){

    	auth()->logout();

    	return redirect('/'); 
    }

    public function delete(User $user){

        $user->delete();

        return redirect('/logout');
    }
}