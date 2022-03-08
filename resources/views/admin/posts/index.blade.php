@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de Posts</title>
</head>
<body>
    {{-- <a href="{{route('posts/create')}}">Criar New Post</a> --}}  {{-- TIVE QUE RECRIAR MINHAS ROTAS DEU ERRO DEPOIS DA INSTALAÇÃO  VER DPS.... --}}
    <a href="{{route('post.create')}}">Criar New Post</a>
    <hr>
    @if (session('message'))
    <div>{{session('message')}}</div>

    @endif
    <form action="{{route('post.search')}}" method="POST">
    {{-- <form action="{{route('posts.search')}}" method="POST"> --}}{{-- TIVE QUE RECRIAR MINHAS ROTAS DEU ERRO DEPOIS DA INSTALAÇÃO  VER DPS.... --}}{{-- TIVE QUE RECRIAR MINHAS ROTAS DEU ERRO DEPOIS DA INSTALAÇÃO  VER DPS.... --}}
        @csrf
        <input type="text" name="search" placeholder="Filtrar:" >
        <button type="submit">Filtrar</button>
    </form>
    <h1>Posts</h1>
    @foreach ($posts as $post )
            <img src="{{url("storage/{$post->image}")}}" alt="{{$post->title}}" style="max-width:200px;"><br>
            <p>{{$post->title}}
            {{$post->content}}
                [

                <a href="{{route('post.show', $post->id)}}">ver</a> |
                <a href="{{route('post.edit', $post->id)}}">Editar</a>
               {{--  <a href="{{route('posts.show',$post->id)}}">Ver</a> |{{-- TIVE QUE RECRIAR MINHAS ROTAS DEU ERRO DEPOIS DA INSTALAÇÃO  VER DPS.... --}}
                {{-- <a href="{{route('posts.edit',$post->id)}}">Editar</a> --}}
                ]
            </p>


    @endforeach

    <hr>
    @if (isset($filters))
        {{$posts->appends($filters)->links()}}
    @else
        {{$posts->links()}}
    @endif

</body>
</html>
@endsection
