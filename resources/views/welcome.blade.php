<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/92b59916a6.js" crossorigin="anonymous"></script>


    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('img/back.jpg');
            background-position: center;
            background-size: cover;
            height: 100vh;
        }

        .menu {
            width: 100%;
        }

        .menu img {
            width: 15%;
            margin: 20px 10%;
            cursor: pointer;
        }

        .menu ul {
            display: inline-flex;
            color: #fff;
            list-style: none;
            right: 10%;
            top: 15px;
            position: absolute;
        }

        .menu ul li {
            margin: 15px;
            cursor: pointer;
            font-size: 18px;
        }

        .menu ul li .fa-solid {
            margin-right: 13px;
            font-size: 20px;
        }

        .content {
            width: 80%;
            color: #fff;
            margin: 12% auto 0px;
        }

        .content h1 {
            font-size: 60px;
            text-transform: uppercase;
        }

        .content p {
            font-size: 16px;
            margin: 40px 0px 50px;
        }

    </style>

</head>

<body>
    {{-- header de login y register --}}
    @if (Route::has('login'))
        <div class="menu">
            <ul>
                @auth
                    <li onclick="location.href='{{ url('/home') }}'">
                        <i class="fa-solid fa-envelope">Home</i>
                    </li>
                @else
                    <li onclick="location.href='{{ route('login') }}'">
                        <i class="fa-solid fa-envelope"></i>Log In
                    </li>
                    @if (Route::has('register'))
                        <li onclick="location.href='{{ route('register') }}'">
                            <i class="fa-solid fa-envelope"></i>Register
                        </li>
                    @endif
                @endauth
            </ul>
        </div>

        <div class="content">
            <h1>Chill Pictures</h1>
            <p>Comparte imagenes y descubre nuevas fotografias dia a dia.</p>

        </div>

    @endif
</body>

</html>
