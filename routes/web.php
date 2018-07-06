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
    return view('Asesores.create');
});

// Route::post('createA', 'uses');
//Route for crud of adviser
Route::resource('createA', 'AsesorController', ['except'=>'show']);
// Route::put('updateA/{id}', 'AsesorController@update');
// Route::post('createA','AsesorController@store');
