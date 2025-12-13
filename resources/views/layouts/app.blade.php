<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>@yield('title', 'Tên Website của Bạn')</title> {{-- Vị trí động cho tiêu đề trang --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles') {{-- Vị trí động để chèn CSS riêng của từng trang --}}
</head>
<body>

    @include('partials.header') {{-- Sử dụng @include để chèn partial view --}}
    <main class="container">
        @yield('content') {{-- Vị trí BẮT BUỘC cho nội dung riêng của từng trang --}}
    </main>
    @include('partials.footer') {{-- Sử dụng @include để chèn partial view --}}


    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts') {{-- Vị trí động để chèn JS riêng của từng trang --}}
</body>
</html>