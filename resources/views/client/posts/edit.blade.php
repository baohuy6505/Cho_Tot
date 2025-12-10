@extends('layouts.app')
@section('title', 'Chỉnh Sửa Bài Đăng')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center rounded-top">
                    <h4>Chỉnh Sửa Bài Đăng</h4>
                </div>

                <div class="card-body p-4">
                    {{-- ACTION FORM: Trỏ đến route update với ID của bài đăng --}}
                    {{-- Sử dụng $datdaPost->id để lấy ID --}}
                    <form method="POST" action="/posts/update/{{ $datdaPost->id }}" enctype="multipart/form-data">
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

                        {{-- user_id (Thường không thay đổi, có thể ẩn hoặc read-only) --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">ID Người Dùng</label>
                            <input type="number" name="user_id" class="form-control"
                                   value="{{ old('user_id', $datdaPost->user_id) }}" required readonly>
                        </div>

                        {{-- category_id --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">ID Danh Mục</label>
                            <input type="number" name="category_id" class="form-control"
                                   value="{{ old('category_id', $datdaPost->category_id) }}" required>
                        </div>

                        {{-- title --}}
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Tiêu Đề</label>
                            {{-- Lấy giá trị từ $datdaPost->title --}}
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', $datdaPost->title) }}" required>
                        </div>

                        {{-- description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Mô Tả</label>
                            {{-- Lấy giá trị từ $datdaPost->description --}}
                            <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $datdaPost->description) }}</textarea>
                        </div>

                        {{-- price --}}
                        <div class="mb-3">
                            <label for="price" class="form-label fw-bold">Giá Bán (VNĐ)</label>
                            <input type="number" name="price" id="price" class="form-control"
                                value="{{ old('price', $datdaPost->price) }}" required>
                        </div>

                        {{-- address --}}
                        <div class="mb-3">
                            <label for="address" class="form-label fw-bold">Địa Chỉ</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ old('address', $datdaPost->address) }}" required>
                        </div>

                        {{-- status --}}
                        <div class="mb-3">
                            <label for="status" class="form-label fw-bold">Trạng Thái</label>
                            <select name="status" id="status" class="form-select" required>
                                {{-- Gán trạng thái hiện tại là giá trị đã chọn --}}
                                @php $currentStatus = old('status', $datdaPost->status); @endphp

                                <option value="pending" {{ $currentStatus == 'pending' ? 'selected' : '' }}>Chờ duyệt</option>
                                <option value="active" {{ $currentStatus == 'active' ? 'selected' : '' }}>Đang hiển thị</option>
                                <option value="blocked" {{ $currentStatus == 'blocked' ? 'selected' : '' }}>Bị chặn</option>
                            </select>
                        </div>

                        {{-- images (upload nhiều ảnh) --}}
                        {{-- Khu vực này nên hiển thị ảnh cũ và cho phép tải lên ảnh mới --}}
                        <div class="mb-3">
                            <label class="form-label">Ảnh Sản Phẩm (Tải lên ảnh mới)</label>
                            <input type="file" name="images[]" class="form-control" multiple>
                            <small class="text-muted">Tải lên ảnh mới sẽ thay thế hoặc thêm vào ảnh hiện tại.</small>
                        </div>

                        <button type="submit" class="btn btn-success w-100 mt-3">Cập Nhật Bài Đăng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection