<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alumnos', 'AlumnoController@index')->name('alumnos.all');

Route::post('/alumnos', 'AlumnoController@store')->name('alumnos.store');

Route::get('/alumnos/{alumno}', 'AlumnoController@show')->name('alumnos.show');

Route::put('/alumnos/{alumno}', 'AlumnoController@update')->name('alumnos.update');

Route::delete('/alumnos/{alumno}', 'AlumnoController@destroy')->name('alumnos.destroy');
