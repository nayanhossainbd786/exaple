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

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact','ContactController@index');
Route::get('contact/edit/{id}','ContactController@edit');
Route::get('contact/delete/{id}','ContactController@delete');
Route::post('contact/update/{id}','ContactController@update');
Route::get('contact/view/{id}','ContactController@view');
Route::post('contact/send','ContactController@contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
