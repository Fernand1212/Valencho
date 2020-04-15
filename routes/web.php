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
    return view('/box/index');
});

Route::get('/Portafolio', function(){
return view('/box/portfolio');
});

Route::get('/Servicio', function(){
    return view('/box/services');
    });

Route::get('/Single', function(){
return view('/box/single-project');
});

Route::get('/About', function(){
    return view('/box/about');
    });

Route::get('/Contact', function(){
return view('/box/contact');
});    