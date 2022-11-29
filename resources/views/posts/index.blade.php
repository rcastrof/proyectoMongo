@extends('layouts.appIn')

@section('content')
    <style>
        .left {
            float: left;
            padding: 50px 10px;
            background: linear-gradient(to right, #0f0f0f, #a5918d);
        }

        .right {
            float: right;
            background: rgb(146, 146, 169);
            width: 60%;
            height: 90%;
            text-align: center;
            padding: 50px 10px;
            background: linear-gradient(to right, #0f0f0f, #a5918d);
            color: #fff;

        }

        .main {
            background: rgb(240, 236, 236);
            margin-bottom: 20px;

        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mis Post') }}</div>
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary"> Crear post</a>
                        <div class="mt-3">
                            <h3>Posts</h3>
                            <div class="row">
                                @forelse ($posts as $post)
                                    <div class="main">
                                        <div class="right">
                                            <td>{{ $post->name }}</td>
                                            <br>
                                            <td>{{ $post->categoria->name }}</td>
                                            <br>
                                            <td class="d-flex">
                                                <a href="{{ route('posts.edit', [$post]) }}"
                                                    class="btn btn-warning btn-sm mr-2">Editar
                                                </a>
                                                <form action="{{ route('posts.destroy', [$post]) }} "method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">Borrar</button>
                                                </form>
                                            </td>
                                        </div>

                                        <div class="left">
                                            <img src="{{ asset($post->foto) }}" class="center" alt="image"
                                                width="200px">
                                        </div>


                                    </div>

                                @empty
                                    <li class="list-group-item">Sin posts</li>

                            </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
