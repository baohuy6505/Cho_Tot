<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Chợ Tốt Clone')</title>
    
    {{-- XÓA CÁC DÒNG NÀY --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    
    {{-- <link rel="stylesheet" href="{{ asset('css/client/.css') }}"> --}}

    {{-- THAY BẰNG LỆNH NÀY --}}
    @vite(['resources/scss/main.scss'])
    
    @yield('styles') 
    @stack('styles')
</head>
 
@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<body>

    @include('partials.header')  

    <main>
        @yield('content')
    </main>
        @include('partials.footer')  

    <script src="{{ asset('js/client/main.js') }}"></script>
    </body>
</html>