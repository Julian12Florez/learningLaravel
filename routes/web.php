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
// */
// Route::get('test', function () {
//     $usuario=new App\Models\Users;
//     $usuario->nombre='Julian';
//     $usuario->email='andres@gmail.com';
//     $usuario->password = bcrypt('123');
//     $usuario->rol='admin';
//     $usuario->save();
//     return $usuario;
// });
Route::get('options', function () {
    return view('Asesores.create');
});
// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
// Route::post('login', 'Auth\LoginController@login');


// Route::post('createA', 'uses');
//Route for crud of adviser
Route::resource('createA', 'AsesorController', ['except'=>'show']);
// Route::put('updateA/{id}', 'AsesorController@update');
// Route::post('createA','AsesorController@store');