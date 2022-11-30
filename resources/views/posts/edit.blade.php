@extends('layouts.appIn')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar post') }}</div>

                    <div class="card-body">
                        <form action="{{ route('posts.update', [$post]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Titulo</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ $post->name }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" id="descripcion"
                                    value="{{ $post->descripcion }}">
                            </div>
                            <br>
                            <button class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
