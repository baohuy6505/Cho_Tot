<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        /* Custom scrollbar cho đẹp */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #888; border-radius: 4px;}
        ::-webkit-scrollbar-thumb:hover { background: #555; }
        
        /* Màu active của menu admin (Màu vàng Chợ Tốt hoặc Xanh dương) */
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            background-color: #ffba00; /* Màu vàng */
            color: #000 !important;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="d-flex">
        @include('partials.sidebar')

        <div class="flex-grow-1 p-4" style="margin-left: 260px;">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>