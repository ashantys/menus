<!doctype html>
<html>
<head>
    @include('layouts.nav')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
</head>
<body>
    <div class="">
        <div class="m-10">
            <div id="main" class="row">
                @yield('content')
            </div>
        </div>
        <footer class="row">
            @include('layouts.footer')
        </footer>
    </div>
</body>
</html>
