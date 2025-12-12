@extends('layouts.app')
@section('title', 'Tạo Bài Đăng Mới')
@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h4>Tạo Bài Đăng Mới</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="/posts/store" enctype="multipart/form-data">
                    @csrf

                    {{-- Hiển thị lỗi --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Lỗi xác thực:</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- user_id --}}
                    <div class="mb-3">
                        <label class="form-label">ID Người Dùng</label>
                        <input type="number" name="user_id" class="form-control" value="{{ old('user_id', 1) }}" required>
                    </div>

                    {{-- category_id --}}
                    <div class="mb-3">
                        <label class="form-label">ID Danh Mục</label>
                        <input type="number" name="category_id" class="form-control" value="{{ old('category_id', 1) }}"
                            required>
                    </div>

                    {{-- title --}}
                    <div class="mb-3">
                        <label class="form-label">Tiêu Đề</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                    </div>

                    {{-- description --}}
                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <textarea name="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                    </div>

                    {{-- price --}}
                    <div class="mb-3">
                        <label class="form-label">Giá Bán</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
                    </div>

                    {{-- address --}}
                    <div class="mb-3">
                        <label class="form-label">Địa Chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address') }}" required>
                    </div>

                    {{-- status --}}
                    {{-- <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="status">
                            <option value="pending">Chờ duyệt</option>
                            <option value="active">Đang hiển thị</option>
                            <option value="blocked">Bị chặn</option>
                        </select>
                    </div> --}}

                    {{-- images (upload nhiều ảnh) --}}
                    <div class="mb-3">
                        <label class="form-label">Ảnh Sản Phẩm (tối đa 5 ảnh)</label>
                        <input type="file" name="images[]" class="form-control" multiple>
                    </div>

                    <button class="btn btn-primary w-100">Đăng Bài</button>
                </form>
            </div>
        </div>
    </div>
@endsection
