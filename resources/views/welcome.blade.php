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

                <div class="links col-6" style="float:left">
                    <div class="links">
                    <ul>
                        <li><a href="/posts/facebook">Aguila View Facebook Posts</a></li>
                        <li><a href="/comments/facebook">Aguila View Facebook Comments</a></li>
                        <li><a href="/followers/facebook">Aguila View Facebook Followers</a></li>
                        <li><a href="/reactions/facebook">Aguila View Facebook Reactions</a></li>
                        <li><a href="/followers/ranking/facebook/cervezaaguila">Aguila View Facebook Ranking</a></li>
                    </ul>
                    </div>
                    <div class="links">
                    <ul>
                        <li><a href="/posts/twitter">Aguila View Twitter Posts</a></li>
                        <li><a href="/comments/twitter">Aguila View Twitter Comments</a></li>
                        <li><a href="/followers/twitter">Aguila View Twitter Followers</a></li>
                        <li><a href="/reactions/twitter">Aguila View Twitter Reactions</a></li>
                        <li><a href="/followers/ranking/twitter/cervezaaguila">Aguila View Twitter Ranking</a></li>
                    </ul>
                    </div>
                    <div class="links">
                    <ul>
                        <li><a href="/posts/instagram">Aguila View instagram Posts</a></li>
                        <li><a href="/comments/instagram">Aguila View instagram Comments</a></li>
                        <li><a href="/followers/instagram">Aguila View instagram Followers</a></li>
                        <li><a href="/reactions/instagram">Aguila View instagram Reactions</a></li>
                        <li><a href="/followers/ranking/instagram/cervezaaguila">Aguila View Intagram Ranking</a></li>
                    </ul>
                    </div>
                    {{-- <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
                <div class="links col-6" style="float:left">
                    <div class="links">
                    <ul>
                        <li><a href="/posts/facebook">FCF View Facebook Posts</a></li>
                        <li><a href="/comments/facebook">FCF View Facebook Comments</a></li>
                        <li><a href="/followers/facebook">FCF View Facebook Followers</a></li>
                        <li><a href="/reactions/facebook">FCF View Facebook Reactions</a></li>
                        <li><a href="/followers/ranking/facebook/fcf">FCF View Facebook Ranking</a></li>
                    </ul>
                    </div>
                    <div class="links">
                    <ul>
                        <li><a href="/posts/twitter">FCF View Twitter Posts</a></li>
                        <li><a href="/comments/twitter">FCF View Twitter Comments</a></li>
                        <li><a href="/followers/twitter">FCF View Twitter Followers</a></li>
                        <li><a href="/reactions/twitter">FCF View Twitter Reactions</a></li>
                        <li><a href="/followers/ranking/twitter/fcf">FCF View Twitter Ranking</a></li>
                    </ul>
                    </div>
                    <div class="links">
                    <ul>
                        <li><a href="/posts/instagram">FCF View instagram Posts</a></li>
                        <li><a href="/comments/instagram">FCF View instagram Comments</a></li>
                        <li><a href="/followers/instagram">FCF View instagram Followers</a></li>
                        <li><a href="/reactions/instagram">FCF View instagram Reactions</a></li>
                        <li><a href="/followers/ranking/instagram/fcf">FCF View Intagram Ranking</a></li>
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
