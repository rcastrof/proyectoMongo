@extends('layouts.appIn')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear post') }}</div>

                <div class="card-body">
                   <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Titulo</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion">
                    </div>
                    <div class="form-group">
                        <label for="categoria_id">Categoria</label>
                        <select name="categoria_id" id="categoria_id" class="form-control" >
                            @forelse ($categorias as $categoria )
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <label>
                        Imagen:<br>
                        <input type="file" required name="foto" id="foto" accept="image/*">
                        @error('foto')
                    <br>
                    <small class="text-danger">{{$message}}</small>
                    <br>
                    @enderror
                    </label>
                    <button class="btn btn-primary">Guardar</button>
                </form>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
