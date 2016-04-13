<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//a classe TestController estende a classe App\Http\Controllers\Controller; 
class TestController extends Controller
{
    //o metodo index está recebendo a variavel nome do routes.php
    public function index($nome)
    {
        //$nome = "André";
        //return "Olá $nome!";
        //Já sabe que tem que localizar o arquivo na pasta test/index.blade.php
        //por convensão o laravel utiliza o "." no lugar da "/" 
        //A atribuição de variaveis para a view utiliza o [] (array)
        return view('test.index', ['nome' => $nome]);        
    }    
    
    public function notas()
    {
        
        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',
            4 => 'Anotação 5'
        ];
        
        //compact gera um array com a variavel notas
        return view('test.notas', compact('notas'));
    }
}
