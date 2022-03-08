@extends('admin.layouts.app')

@section('title', 'Detalhes do Post')

@section('content')

<title>{{$post->title}}</title>

    <h1>Detalhes do Post{{$post->title}}</h1>
    <ul>
        <li><strong>Título:</strong>{{ $post->title }}</li>
        <li><strong>Conteúdo:</strong>{{ $post->content }}</li>
    </ul>
        <form action=" {{route('post.destroy',$post->id)}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
         <button type="submit">Deletar o Post :{{$post->title}}</button>
    </form>
@endsection


