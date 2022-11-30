@extends('layouts.appIn')

@section('content')
    {{-- css --}}
    <link href="{{ '/css/post/home_post.css' }}" rel="stylesheet" type="text/css" />
    {{--  --}}
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header heading">
                    <h3>Front page</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="search">
                            <input type="search" name="search" id="search" placeholder="Buscar" class="form-control">
                        </div>
                    </div>
                    <div id="Content" class="searchdata row">
                    </div>

                    <div class="alldata">
                        <div class="row">
                            @forelse ($posts as $post)
                                <div class="cardpost">
                                    <a style="text-decoration: none" href="{{ route('posts.show', [$post]) }}">
                                        <div class="heading-card">
                                            <td>{{ $post->name }}</td>
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
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ '/js/post/filtro_post_nombre.js' }}"></script>
@endsection
