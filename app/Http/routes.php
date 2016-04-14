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

//Autenticação
//controllers pega todos os métodos do controller, ex: auth\login - getLogin (get - metodo) (login - action)
//não tem que colocar todas as url fica automatico
Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
]);

//agrupamento de rotas (group)
//middleware intercepta a requisição, e verifica se o usuario esta logado, se estiver deixa continuar senão bloqueia
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){
    Route::group(['prefix'=>'posts'], function(){
        //Rotas nomeadas (as) indica o nome que sera usado e o (uses) qual controller sera utilizado
        //Rotas nomeadas é util pois é possivel alterar a url sem ter que alterar todos os lugares que as usam.
        Route::get('',['as'=>'admin.posts.index', 'uses'=>'PostsAdminController@index']);
        Route::get('create', ['as'=>'admin.posts.create', 'uses'=>'PostsAdminController@create']);
        Route::post('store', ['as'=>'admin.posts.store', 'uses'=>'PostsAdminController@store']);
        Route::get('edit/{id}', ['as'=>'admin.posts.edit', 'uses'=>'PostsAdminController@edit']);
        Route::put('update/{id}', ['as'=>'admin.posts.update', 'uses'=>'PostsAdminController@update']);
        Route::get('destroy/{id}', ['as'=>'admin.posts.destroy', 'uses'=>'PostsAdminController@destroy']);   
    });  
});

