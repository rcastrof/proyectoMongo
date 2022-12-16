@extends('layouts.appIn')

@section('content')
    {{-- css --}}
    <link href="{{ '/css/post/show_post.css' }}" rel="stylesheet" type="text/css" />
    {{--  --}}
    <div class="card-body">
        <div class="row">
            <div class="cardpost">
                <div class="main">

                    <div class="right">
                        <td>{{ $post->name }}</td>
                        <br>
                        <td>{{ $post->categoria->name }}</td>
                        <br>
                        <td>{{ $post->descripcion }}</td>
                    </div>

                    <div class="left">
                        <img src="{{ asset($post->foto) }}" class="center" alt="image" width="200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
