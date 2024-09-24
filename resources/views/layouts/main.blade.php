<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Q2E Tryout Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <nav class="navbar bg-light shadow">
          <a class="navbar-brand" href="#">
            <img src="https://data.q2e.at/cdn/images/logo-with-slogan-375x115.png"
                 alt="Logo von Q2E Online-Agentur"
                 height="36"/>
          </a>
        </nav>

        @yield('content')

        <footer class="container">
            <p>&copy; Q2E Online-Agentur 2021</p>
        </footer>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
