<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }


    public function show(){

        $students = Student::all();

        return view('admin/dashboard', compact('students')); 
    }


    public function student(Student $student){

        return view('students/student', compact('student')); 
    }


    public function create(){

        return view('admin/addStudent');

    }


    public function store(){

        $this->validate(request(), [
            'matric' => 'required',
            'name' => 'required',
            'dept' => 'required',
            'email' => 'required|email',
            'phone' => 'required',     
        ]);

        $student = Student::create([
                        'matricNo' => Request('matric'),
                        'fullName' => Request('name'),
                        'dept' => Request('dept'),
                        'email' => Request('email'),
                        'phoneNo' => Request('phone'),      
                    ]);


        return redirect('/dashboard');
    }

    public function delete(Student $student){

        $student->delete();

        return redirect('/dashboard');
    }

    public function update(Student $student){

        $this->validate(request(), [
            'fullName' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        //$student->fullName = Request('fullName');
        //$student->email= Request('email');
        //$student->phoneNo = Request('phone');

        //$student->save();

        $input = request()->all();

        $student->fill($input)->save();

        return redirect('/dashboard');
    }

    

}
