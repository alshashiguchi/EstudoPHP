@extends('template')

@section('content')
    <h1>Blog Admin</h1>
    <!--
        comando para gerar uma tabela com tres colunas 
        no fim é só dar o tab
        table.table>tr>th*3
        
        no foreach tr>td*3
    -->
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
    
    <!--
        Gera todo o codigo da paginação
        As chaves e exclamação serve para renderizar a pagina html sem ele o vai mostrar o codigo html
    -->
    {!! $posts->render() !!}
@endsection