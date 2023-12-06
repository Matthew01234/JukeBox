<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
</head>
<body>
    @yield('counter')
    <nav>
        <ul>
            <li><a href="{{route('genre.index')}}">Genres</a></li>
            <li><a href="{{route('song.index')}}">Songs</a></li>
            <li><a href="{{route('playlist.index')}}">Playlists</a></li>
        </ul>
    </nav>

    <main>
        <!-- content -->
        @yield('content')

    </main>

    <footer>
       
    </footer>
</body>
</html>
