

    @extends('admin.layouts.app')

    @section('title', 'Criar New Post')

    @section('content')
    <h1 >Cadastrar New Post</h1>
    {{-- @if ($errors->any())
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
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        {{-- <input type="text" name="_token" value="{{csrf_token()}}"> --}}
       {{--  @csrf --}}
        @include('admin.posts._partials.form')
       {{--  @include('admin.posts._partials.form') --}}
        {{-- <input type="text" name="title" id="title" placeholder="Titulo do Post" value="{{old('title')}}"><br><br>
        <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo" value="{{old('content')}}"></textarea><br>
        <button type="submit">Enviar</button> --}}
    </form>



    @endsection
