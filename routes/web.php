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

Route::middleware('auth')->group(function () {
    Route::get('/perfil', 'PerfilController@perfil')->name('perfil');
    Route::post('/perfil', 'PerfilController@perfilSave')->name('perfil.save');
    Route::get('/clientes', 'ClienteController@clientes')->name('clientes');
});

Route::get('/lorem', 'PageController@lorem')->name('lorem');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
