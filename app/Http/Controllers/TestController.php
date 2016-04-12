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
        return "<html><head><title>Olá</title></head><body>Olá $nome</body></html>";        
    }    
}
