<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('test', function(){
    //lolgica
    //HTML
    return "ola mundo";
});
*/

//como apontar para um controller e executar o metodo index do controller
//quando coloca entre chaves vira uma variavel {nome}
Route::get('ola/{nome}', 'TestController@index');
