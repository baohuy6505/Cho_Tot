@extends('layouts.auth')

@section('content')
    @php
        $isLoginStep = isset($showPassword) && $showPassword;
    @endphp

    <div class="login-container">
        <div class="auth-card">

            <h3 class="auth-title">Đăng nhập/Đăng ký</h3>

            @if(!$isLoginStep)
                <a href='{{ route('google.redirect') }}' class="btn-social btn-google text-decoration-none">
                    <i class="fa-brands fa-google"></i>
                    Tiếp tục với Google
                </a>
                <div class="divider">Hoặc</div>
            @endif

            <form action="{{ $isLoginStep ? route('login') : route('login.check') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <input type="text" 
                           name="email" 
                           class="form-control form-control-custom" 
                           placeholder="Vui lòng nhập email" 
                           required
                           value="{{ $email ?? old('email') }}"
                           @if($isLoginStep) readonly style="background-color: #f9f9f9; color: #777;" @endif>
                </div>

                @if($isLoginStep)
                    <div class="mb-3">
                        <input type="password" 
                               name="password" 
                               class="form-control form-control-custom" 
                               placeholder="Mật khẩu" 
                               required 
                               autofocus>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('login') }}" class="small text-decoration-none text-muted">Quay lại</a>
                        <a href="#" class="small text-decoration-none text-muted">Quên mật khẩu?</a>
                    </div>

                    <button type="submit" class="btn-continue">Đăng nhập</button>
                @else
                    <button type="submit" class="btn-continue">Tiếp tục</button>
                @endif
            </form>
                <a class="text-danger m-2" href="/">Quay lại trang Home</a>

            <div class="footer-links">
                <a href="#">Quy chế hoạt động sàn</a>
                <span>|</span>
                <a href="#">Chính sách bảo mật</a>
                <span>|</span>
                <a href="#">Liên hệ hỗ trợ</a>
            </div>
        </div>

        <div class="brand-footer">
            <span class="brand-text">Được phát triển bởi</span>
            <span style="color:#FFBA00; font-weight:800;">chợTỐT</span>
            <span style="color:#FFBA00; font-weight:800;">NHÀTỐT</span>
            <span style="color:#2b3f8f; font-weight:800;">việcLÀM</span>
            <span style="color:#d0021b; font-weight:800;">Chợ TỐTXE</span>
        </div>
    </div>
@endsection