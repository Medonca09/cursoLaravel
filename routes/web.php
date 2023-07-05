<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato/{id}',function($id = null){
    return "Contato id = $id";
});

Route::post('/contato',function(){
    dd($_POST);
    return "Contato POST";
});

Route::put('/contato',function(){
    return "Contato PUT";
});