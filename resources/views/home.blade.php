@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="mt-3">
                            <h3>Todos los post</h3>
                            <div class="container">
                                <div class="search">
                                    <input type="search" name="search" id="search" placeholder="Buscar"
                                        class="form-control">

                                </div>
                            </div>
                            <br>
                            <div id="Content" class="searchdata">
                            </div>
                            <div class="alldata">
                                @forelse ($posts as $post)
                                    <div class="card" style="display:inline-block">
                                        <td>Nombre: {{ $post->name }}</td>
                                        <br>
                                        <td>Categoria: {{ $post->categoria->name }}</td>
                                        </tr>
                                        <div class="d-flex">
                                            <img src="{{ asset($post->foto) }}" alt="image" width="200px">
                                        </div>
                                        <br>

                                    @empty
                                        <li class="list-group-item">Sin posts</li>
                                @endforelse
                            </div>
                            </tr>
                        </div>



                    </div>
                </div>
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
            }
            else
            {
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
@endsection
