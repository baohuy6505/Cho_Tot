@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="card auth-card">
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <a href="{{ route('login') }}" class="text-dark me-3"><i class="bi bi-arrow-left fs-4"></i></a>
                <h5 class="fw-bold mb-0">Đăng ký tài khoản mới</h5>
            </div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                
                {{-- 1. HỌ TÊN --}}
                <div class="mb-3">
                    <input type="text" name="name" 
                           class="form-control form-control-custom @error('name') is-invalid @enderror" 
                           placeholder="Họ và tên *" 
                           value="{{ old('name') }}" required>
                    @error('name') <small class="text-danger ps-1">{{ $message }}</small> @enderror
                </div>

                {{-- 2. SỐ ĐIỆN THOẠI (Hiện ra để nhập) --}}
                <div class="mb-3">
                    <input type="text" name="phone" 
                           class="form-control form-control-custom @error('phone') is-invalid @enderror" 
                           placeholder="Số điện thoại *" 
                           {{-- Nếu có dữ liệu cũ thì điền vào, nếu không thì để trống --}}
                           value="{{ old('phone') }}" 
                           required>
                    @error('phone') <small class="text-danger ps-1">{{ $message }}</small> @enderror
                </div>

                {{-- 3. EMAIL (Hiện ra để nhập) --}}
                <div class="mb-3">
                    <input type="email" name="email" 
                           class="form-control form-control-custom @error('email') is-invalid @enderror" 
                           placeholder="Email liên hệ *" 
                           value="{{ old('email') }}" 
                           required>
                    @error('email') <small class="text-danger ps-1">{{ $message }}</small> @enderror
                </div>

                {{-- 4. MẬT KHẨU --}}
                <div class="mb-3">
                    <input type="password" name="password" 
                           class="form-control form-control-custom @error('password') is-invalid @enderror" 
                           placeholder="Mật khẩu *" required>
                    @error('password') <small class="text-danger ps-1">{{ $message }}</small> @enderror
                </div>

                <input type="hidden" name="password_confirmation" id="password_confirmation">

                <div class="row g-2 mb-3">
                    <div class="col-6 small text-muted"><i class="bi bi-check-circle-fill text-secondary me-1"></i> 8-32 ký tự.</div>
                    <div class="col-6 small text-muted"><i class="bi bi-check-circle-fill text-secondary me-1"></i> 1 ký tự HOA.</div>
                    <div class="col-6 small text-muted"><i class="bi bi-check-circle-fill text-secondary me-1"></i> 1 ký tự thường.</div>
                    <div class="col-6 small text-muted"><i class="bi bi-check-circle-fill text-secondary me-1"></i> 1 số.</div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="terms" checked>
                    <label class="form-check-label small text-muted" for="terms">
                        Đồng ý với <a href="#" class="text-primary text-decoration-none">Điều khoản</a> và <a href="#" class="text-primary text-decoration-none">Bảo mật</a>.
                    </label>
                </div>

                <button type="submit" class="btn btn-continue-yellow">Đăng Ký</button>
            </form>

            <div class="text-center mt-4 text-muted small">
                <a href="#" class="text-decoration-none text-muted mx-2">Quy chế</a> | 
                <a href="#" class="text-decoration-none text-muted mx-2">Bảo mật</a> | 
                <a href="#" class="text-decoration-none text-muted mx-2">Hỗ trợ</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector('input[name="password"]').addEventListener('input', function(e) {
        document.getElementById('password_confirmation').value = e.target.value;
    });
</script>
@endsection