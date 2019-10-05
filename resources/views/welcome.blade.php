<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
                text-transform: uppercase;
            }
            .title > a:hover
            {
                transition: .6s;
                font: 65px;
                color: red;

            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .content
            {
                width: 300px;
                padding: 40px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: #60191919;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .jumbotron
            {
                background-image: url('images/intro-bg.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body class="jumbotron">


        <div class="content col-lg-8">
            <div class="title">

            <a href="{{url('homepage')}}"style="text-decoration:none;font:30px;color:white">e-buy168</a>
        </div>
        <br>
        <br>
            <div>
                    @if (Route::has('login'))
                        <div class="links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="login">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"class="login">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
            </div>


    </div>
</body>
</html>
