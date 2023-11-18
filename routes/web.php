<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta Welcome de laravel
/**Route::get('/', function () {
    return view('welcome');
});**/


//Formulario de registro de usuarios

Route::view('/home', 'home')->name('home');
Route::view('/otro', 'otro')->name('otro');
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::view('/loginm', 'loginm')->name('loginm');

//Ruta para procesar registro de usuarios
Route::post('/registrar-usuario', '\App\Http\Controllers\UserController@store')->name('usuario.store');
Route::post('/login-user', '\App\Http\Controllers\UserController@login')->name('usuario.login');
Route::get('/crear-medico', '\App\Http\Controllers\UserController@crearMedico')->name('c.medico');
Route::post('/login-medico', '\App\Http\Controllers\UserController@loginMedico')->name('medico.login');
