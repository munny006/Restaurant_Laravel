<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::group(['middleware'=>"web"],function(){
	Route::get('/','restoController@index');
Route::get('/list','restoController@list');
Route::post('/add','restoController@add');
Route::view('/add','add');
Route::get('/delete/{id}','restoController@delete');
Route::get('/edit/{id}','restoController@edit');
Route::post('edit','restoController@update');
Route::view('register','register');
Route::post('register','restoController@register');
Route::view('login','login');
Route::post('login','restoController@login');
});