<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#e74c3c" />
    <title>Preferíadas</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.navbar')

    <div class="container py-5">
        @yield('content')
    </div>

    @include('partials.footer')
    <script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
