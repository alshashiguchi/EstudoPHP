@extends('template')

@section('content')
    <h1>Blog Admin</h1>
    
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Create new Post</a>
    <br>
    <br>
    
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
            <td>
                <a href="{{ route('admin.posts.edit',['id'=> $post->id]) }}" class="btn btn-default">Edit</a>
                <a href="{{ route('admin.posts.destroy',['id'=> $post->id]) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    
    <!--
        Gera todo o codigo da paginação
        As chaves e exclamação serve para renderizar a pagina html sem ele o vai mostrar o codigo html
    -->
    {!! $posts->render() !!}
@endsection