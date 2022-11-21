@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Categorias') }}</div>

                    <div class="card-body">
                        <a href="{{ route('categorias.create') }}" class="btn btn-primary"> Crear categoria</a>
                        <div class="mt-3">
                            <h3>Categorias</h3>
                            <ul class="list-group">
                                @forelse($categorias as $categoria)
                                    <li class="list-group-item">
                                        {{ $categoria->name }}
                                    <div class="float-rigth d-flex">
                                        <a href="{{ route('categorias.edit', [$categoria]) }}"
                                            class="btn btn-warning btn-sm mr-2">Editar</a>
                                            <form action="{{route('categorias.destroy',[$categoria])}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger bnt-sm">Delete</button>
                                        </form>
                                    </div>
                                </li>
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
