@extends('template')

@section('title')

Minhas anotações

@stop

@section('content')
        <h1>Anotações</h1>
        
        <ul>
            <?php foreach ($notas as $nota):?>
            <li><?=$nota;?></li>
            <?php endforeach;?>              
        </ul>
@stop