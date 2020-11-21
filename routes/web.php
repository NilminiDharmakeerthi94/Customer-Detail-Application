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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', "CustomerController@index");


Route::get('/edit/{id}',"CustomerController@edit")->name('customer.edit');
Route::get('/show/{id}',"CustomerController@show");
Route::get('/create',"CustomerController@create");
Route::post('/store',"CustomerController@store");
Route::post('/update/{id}',"CustomerController@update");
Route::delete('/delete/{id}',"CustomerController@destroy")->name('destroy');
Route::get('/search', "CustomerController@search")->name('customer.search');