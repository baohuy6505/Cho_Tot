<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chợ Tốt Xe</title>
    @vite(['resources/scss/main.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/notify.css') }}">    

</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>