<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Chợ Tốt Clone')</title>
    
    {{-- THAY BẰNG LỆNH NÀY --}}
    @vite(['resources/scss/main.scss'])
    <link rel="stylesheet" href="{{ asset('css/notify.css') }}">    
    @yield('styles') 
    @stack('styles')
</head>
 
{{-- @if (session('error'))
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
@endif --}}
<body>

<body class="bg-light">
   <div class="custom-toast-container">
    @if (session('error'))
        <div class="custom-toast error" id="toast-error">
            <button class="custom-toast__close" onclick="closeToast('toast-error')">&times;</button>
            <div class="custom-toast__body">
                Lỗi: {{ session('error') }}
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="custom-toast success" id="toast-success">
            <button class="custom-toast__close" onclick="closeToast('toast-success')">&times;</button>
            <div class="custom-toast__body">
                Thành công: {{ session('success') }}
            </div>
        </div>
    @endif
</div>
    @include('partials.header')

    <main>
        @yield('content')
    </main>
        @include('partials.footer')  

    <script src="{{ asset('js/client/main.js') }}"></script>
    <script src="{{ asset('js/client/details.js') }}"></script>
    </body>
</html>
