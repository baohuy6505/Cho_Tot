<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Chợ Tốt Clone')</title>
        <link rel="icon" href="{{ asset('images/client/profile/logo.jpg') }}" type="image/x-icon" /> 
    {{-- THAY BẰNG LỆNH NÀY --}}
    @vite(['resources/scss/main.scss'])
    <link rel="stylesheet" href="{{ asset('css/notify.css') }}">    
    @yield('styles') 
    @stack('styles')
</head>
 
<body>

<body class="bg-light">
  <div class="custom-toast-container">
    {{-- Thông báo lỗi --}}
    @if (session('error'))
        <div class="custom-toast error" id="toast-error">
            <button class="custom-toast__close" onclick="this.parentElement.remove()">&times;</button>
            <div class="custom-toast__body">
                Lỗi: {{ session('error') }}
            </div>
        </div>
    @endif

    {{-- Thông báo thành công --}}
    @if (session('success'))
        <div class="custom-toast success" id="toast-success">
            <button class="custom-toast__close" onclick="this.parentElement.remove()">&times;</button>
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
