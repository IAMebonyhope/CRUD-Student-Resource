<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', 'AdminController@show');

Route::get('/dashboard/{student}', 'AdminController@student');

Route::get('/dashboard/delete/{student}', 'AdminController@delete');

Route::post('/dashboard/update/{student}', 'AdminController@update');

Route::get('/add', 'AdminController@create');

Route::post('/add', 'AdminController@store');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionController@create')->name('login');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

Route::get('/delete/{user}', 'SessionController@delete');

//Route::get('/students/{student}', 'StudentsController@show');

//Route::get('/home', 'HomeController@index')->name('home');
