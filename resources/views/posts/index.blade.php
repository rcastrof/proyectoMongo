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
                            <ul class="list-group">
                                @forelse($posts as $post)
                                    <li class="list-group-item">{{ $post->name }}</li>
                                    <span class="float-rigth d-flex">
                                        <a href="{{ route('posts.edit', [$post]) }}"
                                            class="btn btn-warning btn-sm mr-2">Editar</a>
                                            <form action="{{route('posts.destroy',[$post])}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger bnt-sm">Delete</button>
                                        </form>
                                    </span>
                                @empty
                                    <li class="list-group-item">No hay registros</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
