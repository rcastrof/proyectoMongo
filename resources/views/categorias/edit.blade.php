@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar categoria') }}</div>

                <div class="card-body">
                   <form action="{{route('categorias.update',[$categoria])}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="name">Texto</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$categoria->name}}">
                    </div>
                    <button class="btn btn-primary">Update</button>
                </form>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
