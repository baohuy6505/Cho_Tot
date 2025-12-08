<header class="navbar-chotot sticky-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="brand-logo">Chợ Tốt</a>


        <div class="d-flex align-items-center">
            @auth
                <div class="dropdown ms-2 me-3">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                        @if(Auth::user()->role === 'admin')
                            <li><a class="dropdown-item text-danger fw-bold" href="{{ route('admin.home') }}">Trang Quản Trị</a></li>
                        @endif
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger">Đăng xuất</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="d-flex align-items-center gap-2">
                    <a href="{{ route('login') }}" class="fw-bold text-dark text-decoration-none small">Đăng nhập</a>
                    <span class="text-dark">/</span>
                    <a href="{{ route('register') }}" class="fw-bold text-dark text-decoration-none small">Đăng ký</a>
                </div>
            @endauth
        </div>
    </div>
</header>