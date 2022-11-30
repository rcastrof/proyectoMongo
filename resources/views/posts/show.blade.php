@extends('layouts.appIn')

@section('content')
 {{-- css --}}
 <link href="{{('/css/post/show_post.css') }}" rel="stylesheet" type="text/css"/>
 {{--  --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ver') }}</div>

                    <div class="card-body">

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
        </div>
    </div>
@endsection
