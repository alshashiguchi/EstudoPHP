@extends('template')

@section('content')
    <!--
        Com o Blade não é necessario digitar codigo php no html ex.:<?php echo $nome; ?> é só usar as
        chaves         
     -->
    <h1>Olá {{ $nome }}</h1>
@stop