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
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/dashboard','DashboardController@index');
    Route::get('/book','BookController@index');
    Route::post('/book/create','BookController@create');
    Route::get('/book/{id}/edit','BookController@edit');
    Route::get('/book/{id}/delete','BookController@delete');
    Route::post('/book/{id}/update','BookController@update');
    Route::get('/bookAuthor','BookAuthorController@index');
    Route::post('/bookAuthor/create','BookAuthorController@create');
    Route::get('/bookAuthor/{id}/edit','BookAuthorController@edit');
    Route::post('/bookAuthor/{id}/update','BookAuthorController@update');
    Route::get('/bookAuthor/{id}/delete','BookAuthorController@delete');

});

