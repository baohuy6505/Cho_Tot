<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Lấy tiêu đề động từ code Dev (xịn hơn), fallback là tên Web --}}
    <title>@yield('title', 'Chợ Tốt Clone')</title>

    {{-- Dùng Bootstrap 5.3.2 (Mới nhất từ Dev) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Giữ Icons từ code HEAD --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Giữ cả 2 file CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notify.css') }}">

    {{-- Hỗ trợ cả 2 cách inject CSS --}}
    @yield('styles')
    @stack('styles')
</head>

<body class="bg-light">
    <div class="custom-toast-container">
        @if (session('error'))
            <div class="custom-toast error" data-autohide-delay="5000">
                <span style="font-weight: 600;">Lỗi:</span> {{ session('error') }}
                <button type="button" class="custom-toast__close">&times;</button>
            </div>
        @endif
        @if (session('success'))
            <div class="custom-toast success" data-autohide-delay="4000">
                <span style="font-weight: 600;">Thành công:</span> {{ session('success') }}
                <button type="button" class="custom-toast__close">&times;</button>
            </div>
        @endif
    </div>
    @include('partials.header')

    <main class="py-4">
        @yield('content')
    </main>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const toasts = document.querySelectorAll('.custom-toast');

            toasts.forEach(toast => {
                // Hiển thị toast
                setTimeout(() => {
                    toast.classList.add('show');
                }, 100); // Đợi 1 chút cho CSS load xong

                const delay = toast.getAttribute('data-autohide-delay') || 5000;
                
                // Tự động ẩn sau thời gian delay
                setTimeout(() => {
                    hideToast(toast);
                }, delay);

                // Sự kiện click nút đóng
                const closeButton = toast.querySelector('.custom-toast__close');
                closeButton.addEventListener('click', () => {
                    hideToast(toast);
                });
            });
            
            function hideToast(toastElement) {
                toastElement.classList.remove('show');
                // Xóa khỏi DOM sau khi animation kết thúc (300ms)
                setTimeout(() => {
                    toastElement.remove();
                }, 300);
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
