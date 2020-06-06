<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/','HomeController@index');
Route::get('/', function () {
    
    if (Auth::check()){
        $user = Auth::user(); //almacena el nombre del usuario
        return view('home', compact('user'));
    }
    else{
    return view('auth.login');
    }
});


//Para hacer úso de un controlador tipo Resource, se especifica en el tipó de ruta
Route::resource('Event','EventController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Event/Listar/{type}', 'EventController@listar');

Route::resource('User','UserController');

