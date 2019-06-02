<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/app.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{env('APP_NAME')}}
                </div>

                <div class="links">
                    <div class="links">
                    <ul>
                        <li><a href="/posts/facebook">View Facebook Posts</a></li>
                        <li><a href="/comments/facebook">View Facebook Comments</a></li>
                        <li><a href="/followers/facebook">View Facebook Followers</a></li>
                        <li><a href="/reactions/facebook">View Facebook Reactions</a></li>
                        <li><a href="/followers/ranking/facebook/cervezaaguila">View Facebook Ranking</a></li>
                    </ul>
                    </div>
                    <div class="links">
                    <ul>
                        <li><a href="/posts/twitter">View Twitter Posts</a></li>
                        <li><a href="/comments/twitter">View Twitter Comments</a></li>
                        <li><a href="/followers/twitter">View Twitter Followers</a></li>
                        <li><a href="/reactions/twitter">View Twitter Reactions</a></li>
                        <li><a href="/followers/ranking/twitter/cervezaaguila">View Twitter Ranking</a></li>
                    </ul>
                    </div>
                    <div class="links">
                    <ul>
                        <li><a href="/posts/instagram">View instagram Posts</a></li>
                        <li><a href="/comments/instagram">View instagram Comments</a></li>
                        <li><a href="/followers/instagram">View instagram Followers</a></li>
                        <li><a href="/reactions/instagram">View instagram Reactions</a></li>
                        <li><a href="/followers/ranking/instagram/cervezaaguila">View Intagram Ranking</a></li>
                    </ul>
                    </div>
                    {{-- <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>
        </div>
    </body>
</html>
