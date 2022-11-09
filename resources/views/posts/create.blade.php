@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear post') }}</div>

                <div class="card-body">
                   <form action="{{route('posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Texto</label>
                        <input type="text" name="name" class="form-control" id="name">

                    </div>
                </form>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
