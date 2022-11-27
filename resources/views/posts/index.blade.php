@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mis Post') }}</div>

                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary"> Crear post</a>
                        <div class="mt-3">
                            <h3>Posts</h3>
                            <table class="table">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->categoria->name}}</td>
                                </tr>
                                <td class="d-flex">
                                    <a href="{{ route('posts.edit', [$post]) }}"
                                        class="btn btn-warning btn-sm mr-2">Editar</a>
                                    <form action="{{ route('posts.destroy', [$post])}} "method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger btn-sm">Borrar</button>
                                    </td>
                                <td>
                                    <p><strong>foto:</strong></p>
                                    <img src="{{ asset($post->foto) }}" alt="image" width="200px">
                                <td></td>
                                <br>
                                </form>

                            @empty
                                <li class="list-group-item">Sin posts</li>
                                @endforelse
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
