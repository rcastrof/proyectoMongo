@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis Post') }}</div>

                <div class="card-body">
                   <a href="{{route('posts.create')}}" class="btn btn-primary"> Crear post</a>
                   <h3>Posts</h3>
                   <ul class="list-group">
                    @forelse($posts as $post)
                    <li class="list-group-item">{{$post->name}}</li>
                    @empty
                    <li class="list-group-item">No hay registros</li>
                    @endforelse
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
