@extends('layouts.appIn')

@section('content')
    {{-- css --}}
    <link href="{{ '/css/post/home_post.css' }}" rel="stylesheet" type="text/css" />
    {{--  --}}
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <br>
        <div class="search input-group">
            <input type="search" name="search" id="search" placeholder="Buscar" class="form-control">

            <select class="form-select" name="selectCategoria" id="selectCategoria">
                <option selected disabled> Seleccione categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                @endforeach
            </select>

        </div>
        <div id="Content" class="searchdata row">
        </div>


        <div class="alldata">
            <div class="row">
                @forelse ($posts as $post)
                    <div class="cardpost">
                        <a style="text-decoration: none" href="{{ route('posts.show', [$post]) }}">
                            <div class="heading-card">
                                <h1>
                                    <td>{{ $post->name }}</td>
                                </h1>
                            </div>

                            <div class="headingcategoria-card">
                                <td>{{ $post->categoria->name }}</td>
                            </div>

                            <div class="imagenDiv">
                                <img src="{{ asset($post->foto) }}" alt="image" width="200px">
                            </div>
                        </a>
                    </div>

                @empty
                    <li class="list-group-item">Sin posts</li>

            </div>
        </div>
        @endforelse
    </div>
    <script type="text/javascript" src="{{ '/js/post/filtro_post_nombre.js' }}"></script>
@endsection
