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
    return view('alpha');
});

Route::get('alpha',function(){
    return view('alpha');
});

Route::get('testapi',function(){
    return view('testapi');
});

Route::get('dynamic-map',function(){
    return view('dml');
});

Route::get('static-map',function(){
    return view('sml');
});