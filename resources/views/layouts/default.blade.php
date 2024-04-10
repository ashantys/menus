<!doctype html>
<html>
<head>
    @include('layouts.nav')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container m-10">
        <header class="row"></header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('layouts.footer')
        </footer>
    </div>
</body>
</html>
