
@extends('admin.layouts.app')

@section('title', 'Editar Produto')

@section('content')

<h1 >Editar o Post <strong>{{$post->title}}</strong></h1>
{{--   @if ($errors->any())
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error}}</li>

          @endforeach
      </ul>

  @endif --}}
  {{-- Procurar Erro --}}
  {{-- @if ($errors->any())
      <ul>
          @foreach ($errors->all()as $error)
          <li>{{$error}}</li>

          @endforeach
      </ul>
  @endif --}}
   <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">

      {{-- <input type="text" name="_token" value="{{csrf_token()}}"> --}}
      @csrf
      @method('put')
      @include('admin.posts._partials.form')
      {{-- <input type="text" name="title" id="title" placeholder="Titulo do Post" value="{{$post->title}}"><br><br>
      <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo" value="{{$post->content}}"></textarea><br>
      <button type="submit">Enviar</button> --}}
  </form>
@endsection


