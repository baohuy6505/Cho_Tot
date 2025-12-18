@extends('admin.layouts.admin')

@section('title', 'Thêm Tài Khoản Mới')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm thành viên / Quản lý mới</h6>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.role.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                    placeholder="Nhập họ tên" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email đăng nhập <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="example@gmail.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"
                                    placeholder="090...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phân quyền (Role)</label>
                                <input type="text" class="form-control" value="Manager (Quản lý)" disabled
                                    style="background-color: #e9ecef;">
                                <small class="text-muted">Tài khoản tạo mới sẽ mặc định có quyền Quản lý.</small>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.role') }}" class="btn btn-secondary me-2">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Lưu tài khoản</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
