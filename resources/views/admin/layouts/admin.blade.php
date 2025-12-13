<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Shop</title>
    {{-- <link rel="icon" href="/images/logofile.png" type="image/x-icon" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
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
                    <a href="/Admin/Home" class="admin-nav-link">
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
                    <a href="/Admin/ProductVariant" class="admin-nav-link">
                        <span class="admin-icon admin-product-variant-icon"></span>
                        <span class="admin-label">ProductVariant</span>
                    </a>
                </li>
                <li class="admin-nav-item">
                    <a href="/Admin/Product" class="admin-nav-link">
                        <span class="admin-icon admin-wallet-icon"></span>
                        <span class="admin-label">Product</span>
                    </a>
                </li>
                <li class="admin-nav-item">
                    <a href="/Admin/Category" class="admin-nav-link">
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

            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ asset('js/admin/admin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
