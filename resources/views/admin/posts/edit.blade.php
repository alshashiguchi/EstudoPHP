@extends('template')

@section('content')
    <h1>Edit Post: {{ $post->title }} </h1>

    @if($errors->any())
        <ul class="alert">
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>    
    @endif
    <!--model já carrega as inforamções é necessario passar a variavel que sera utilizada nesse caso o $post-->
    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id],'method'=>'put']) !!}
    @include('admin.posts._form')
    <div class="form-group">
        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}        
    </div>
    
    {!! Form::close() !!}
@endsection