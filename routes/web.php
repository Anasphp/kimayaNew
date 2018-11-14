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
    return view('index');
});


Route::get('/contact', ['as'=>'contact','uses'=>'ContactController@index']);


Route::post('/contact-details','ContactController@contactDetail');


Route::get('/destinations', function () {
    return view('destinations');
});

Route::get('/tours', function () {
    return view('tours');
});

Route::get('/tours-detail', function () {
    return view('details');
});

Route::get('/domestic', function () {
    return view('domestic');
});

Route::get('/international', function () {
    return view('international');
});

Route::get('/students-tour', function () {
    return view('students-tour');
});

Route::get('/industrial-visit', function () {
    return view('industrial-visit');
});

Route::get('/corporate', function () {
    return view('corporate');
});


Route::get('/login', ['as'=>'login','uses'=>'LoginController@index']);

Route::post('/loginToAdmin', 'LoginController@loginToAdmin');

Route::get('/admin', ['as'=>'admin','uses'=>'AdminController@index']);

Route::get('/logout', ['as'=>'logout','uses'=>'AdminController@logout']);





