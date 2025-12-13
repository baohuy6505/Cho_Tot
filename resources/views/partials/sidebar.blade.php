<div class="d-flex align-items-center">
            @auth
                <div class="dropdown ms-2 me-3">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
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