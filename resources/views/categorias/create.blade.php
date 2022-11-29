@extends('layouts.appIn')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categorias') }}</div>

                <div class="card-body">
                   <form action="{{route('categorias.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Texto</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <button class="btn btn-primary">Guardar</button>
                </form>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
