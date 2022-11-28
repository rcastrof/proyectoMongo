@extends('layouts.app')

@section('content')
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        body {
            background: #fefefe;
            font-family: sans-serif;

        }

        .container {

        }

        .heading {
            text-align: center;
            font-size: 30px;
            margin-bottom: 5px;
        }

        .row {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .cardpost {
            width: 30%;
            background: rgb(240, 236, 236);
            border: 1px solid rgb(4, 4, 4);
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .heading-card {
            text-align: center;
            padding: 50px 10px;
            background: linear-gradient(to right, #0f0f0f, #a5918d);
            color: #fff;
        }

        .card-bodypost {
            padding: 30px 20px;
            text-align: center;
            font-size: 18px;
        }

        .cardpost:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
        }


    </style>
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header heading">
                    <h3>Front page</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="search">
                            <input type="search" name="search" id="search" placeholder="Buscar" class="form-control">
                        </div>
                    </div>

                    <div id="Content" class="searchdata"></div>
                    <br>

                        <div class="alldata">
                            <div class="row">
                                @forelse ($posts as $post)

                                <div class="cardpost">
                                    <div class="heading-card">
                                        <td>{{ $post->name }}</td>
                                    </div>
                                    <div class="headingcategoria-card">
                                        <td>Categoria: {{ $post->categoria->name }}</td>
                                    </div>
                                    <div class="card-bodypost">
                                        <p>Agregar descripcion</p>
                                    </div>
                                    <div class="">
                                        <img src="{{ asset($post->foto) }}" alt="image" width="200px">
                                    </div>
                                </div>

                                @empty
                                    <li class="list-group-item">Sin posts</li>

                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();
            if ($value) {
                $('.alldata').hide();
                $('.searchdata').show();
            } else {
                $('.alldata').show();
                $('.searchdata').hide();
            }
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },

                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        })
    </script>
    <script type="text/javascript" src="{{ asset('/js/filtro_post_nombre.js') }}"></script>
@endsection
