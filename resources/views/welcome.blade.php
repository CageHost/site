<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CageHost</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                min-width: 360px;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
              text-align: right;
              width: 100%;
              margin-top: 15px;
            }

            .content {
                text-align: center;
                max-width: 1000px;
                margin: auto;
            }

            .title {
                margin-bottom: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .cage {
                margin-top: 20px;
            }

        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="cage">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41SfzkpASeL.jpg" alt="CageHost" width="200px">
                </div>

                <div class="title">
                    <img src="/img/logo.png" alt="CageHost">
                </div>

                @include('partials.pricetable')
            </div>
        </div>
    </body>
</html>
