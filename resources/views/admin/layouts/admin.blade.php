<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Shop</title>
    {{-- <link rel="icon" href="/images/logofile.png" type="image/x-icon" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">

</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="admin-sidebar-header">
                <div class="admin-sidebar-logo text-center p-3">
                    <img src="/images/logofile.png" alt="Logo" class="img-fluid" style="max-width: 50px;" />
                </div>

                <h2>Shop Shoes Manager</h2>
            </div>

            <div class="admin-sidebar-section">Overview</div>
            <ul class="admin-nav-menu">
                <li class="admin-nav-item">
                    <a href="/admin/home" class="admin-nav-link">
                        <span class="admin-icon admin-dashboard-icon"></span>
                        <span class="admin-label"> Dashboard</span>
                    </a>
                </li>
                <li class="admin-nav-item">
                    <a href="{{ route('admin.posts.list') }}" class="admin-nav-link">
                        <span class="admin-icon admin-order-list-icon"></span>
                        <span class="admin-label">Quản lí bài viết</span>
                    </a>
                </li>
                <li class="admin-nav-item">
                    <a href="{{ route('admin.category.list') }}" class="admin-nav-link">
                        <span class="admin-icon admin-category-icon"></span>
                        <span class="admin-label">Category</span>
                    </a>
                </li>
            </ul>

            <div class="admin-sidebar-divider"></div>

            <div class="admin-sidebar-section">Management</div>
            <ul class="admin-nav-menu">
                <!-- Đã cập nhật: Group Role Account thành menu đa cấp -->
                <li class="admin-nav-item">
                    <a href="#roleAccountSubmenu" data-bs-toggle="collapse"
                        class="admin-nav-link d-flex align-items-center justify-content-between" role="button"
                        aria-expanded="false" aria-controls="roleAccountSubmenu">
                        <div class="d-flex align-items-center">
                            <span class="admin-icon admin-user-manager-icon"></span>
                            <span class="admin-label">Tài khoản & Role</span>
                        </div>
                        <i class="fas fa-chevron-down" style="font-size: 0.8em;"></i>
                    </a>
                    <div class="collapse" id="roleAccountSubmenu">
                        <ul class="admin-nav-menu ps-3">
                            <li class="admin-nav-item">
                                <a href="/admin/users" class="admin-nav-link">
                                    <span class="admin-label">Danh sách TK</span>
                                </a>
                            </li>
                            <li class="admin-nav-item">
                                <a href="/admin/users/create" class="admin-nav-link">
                                    <span class="admin-label">Thêm tài khoản</span>
                                </a>
                            </li>
                            <li class="admin-nav-item">
                                <a href="/Admin/Role" class="admin-nav-link">
                                    <span class="admin-label">Quản lý Role</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="admin-sidebar-divider"></div>


        </aside>

        <div class="admin-overlay"></div>
        <button class="admin-menu-toggle">☰</button>
        <main class="admin-main-content">
            <div class="toast-container position-fixed top-0 end-0 p-3">
                @if (session('error'))
                    <div class="toast align-items-center text-white bg-danger border-0" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
                        <div class="d-flex">
                            <div class="toast-body">
                                Lỗi: {{ session('error') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if (session('success'))
                    <div class="toast align-items-center text-white bg-success border-0" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-delay="4000">
                        <div class="d-flex">
                            <div class="toast-body">
                                Thành công: {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

            </div>
            <div class="container-fluid">

                @yield('content')
            </div>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toastElList = [].slice.call(document.querySelectorAll('.toast'));

            // Khởi tạo Bootstrap Toast cho từng element
            const toastList = toastElList.map(function(toastEl) {
                const toast = new bootstrap.Toast(toastEl, {
                    // Tự động ẩn sau 4000ms (4 giây) nếu không có data-bs-delay khác
                    autohide: true,
                });
                toast.show();
                return toast;
            });
        });
    </script>
    <script src="{{ asset('js/admin/admin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
