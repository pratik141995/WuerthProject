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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','App\Http\Controllers\visitController@index');
Route::get('/add_visitor_data','App\Http\Controllers\visitController@add_visitor_data');
Route::POST('/save_data','App\Http\Controllers\visitController@save_data');

<<<<<<< HEAD
Route::get('/New-Route','App\Http\Controllers\visitController@index');
=======

>>>>>>> 43664cf07990ff9843aa8af48fb0fd6c66038fc4

