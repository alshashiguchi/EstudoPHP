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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('test', function(){
    //lolgica
    //HTML
    return "ola mundo";
});
*/

//como apontar para um controller e executar o metodo index do controller
//quando coloca entre chaves vira uma variavel {nome}
//Route::get('ola/{nome}', 'TestController@index');

//Route::get('notas', 'TestController@notas');

Route::get('/', 'PostsController@index');

//Rotas nomeadas (as) indica o nome que sera usado e o (uses) qual controller sera utilizado
//Rotas nomeadas é util pois é possivel alterar a url sem ter que alterar todos os lugares que as usam.
Route::get('admin/posts',['as'=>'admin.index', 'uses'=>'PostsAdminController@index']);
Route::get('admin/posts/create', ['as'=>'admin.posts.create', 'uses'=>'PostsAdminController@create']);
Route::post('admin/posts/store', ['as'=>'admin.posts.store', 'uses'=>'PostsAdminController@store']);