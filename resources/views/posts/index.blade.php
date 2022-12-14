@extends('layouts.appIn')

@section('content')
    {{-- css --}}
    <link href="{{ '/css/post/mis_post.css' }}" rel="stylesheet" type="text/css" />
    {{--  --}}

    <div class="card-body">
        <a href="{{ route('posts.create') }}" class="btn btn-primary"> Crear post</a>
        <div class="row">
            @forelse ($posts as $post)
                <div class="main">
                    <div class="right">
                        <td>{{ $post->name }}</td>
                        <br>
                        <td>{{ $post->categoria->name }}</td>
                        <br>
                        <td class="d-flex">
                            <a href="{{ route('posts.edit', [$post]) }}" class="btn btn-warning btn-sm mr-2">Editar
                            </a>
                            <form action="{{ route('posts.destroy', [$post]) }} "method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                        </td>
                    </div>

                    <div class="left">
                        <img src="{{ asset($post->foto) }}" class="center" alt="image" width="200px">
                    </div>

                </div>

            @empty
                <li class="list-group-item">Sin posts</li>

        </div>
        @endforelse

    </div>

@endsection
