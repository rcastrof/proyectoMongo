<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<style>
    main{
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
    }
    .headerSticky {
        width: 100%;

    }

    nav {
        width: 100%;
        padding: 20px 0;
        text-align: center;
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));    }

    nav ul {
        background: #000000;
        width: 100%;
        margin-top: 10px;
    }

    nav ul li {
        display: inline-block;
        list-style: none;
        margin: 20px 30px;
        color: #ffffff;
        text-transform: uppercase;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar">
            <div class="headerSticky">
                <ul>
                    <li onclick="location.href='{{ url('/home') }}'">
                        Chill Pictures
                    </li>
                    <li onclick="location.href='{{ route('posts.index') }}'">Mis Posts</li> &nbsp;&nbsp;

                    @if (Auth::user()->role == '1')
                        <li onclick="location.href='{{ route('categorias.index') }}'">Categorias</li>
                    @endif

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
