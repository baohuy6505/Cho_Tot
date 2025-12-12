@extends('admin.layouts.admin')
@section('content')
    <style>
        .post-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>

    <div class="container mt-4">
        <a href="{{ route('admin.posts.list') }}" class="btn btn-secondary mb-3">⬅ Quay lại danh sách</a>

        <div class="card shadow">
            <div class="card-body">

                <h3 class="mb-3">Chi Tiết Bài Đăng</h3>

                <div class="row">
                    <div class="col-md-6">
                        <h5>Tiêu đề:</h5>
                        <p>{{ $dataPost->title }}</p>

                        <h5>Mô tả:</h5>
                        <p>{{ $dataPost->description }}</p>

                        <h5>Giá:</h5>
                        <p>{{ number_format($dataPost->price) }}đ</p>

                        <h5>Địa chỉ:</h5>
                        <p>{{ $dataPost->address }}</p>

                        <h5>Trạng thái:</h5>
                        <p><span class="badge bg-success">{{ $dataPost->status }}</span></p>

                        <h5>Ngày tạo:</h5>
                        <p>{{ $dataPost->created_at }}</p>
                    </div>

                    <div class="col-md-6">
                        <h5>Ảnh sản phẩm:</h5>
                        <div class="d-flex gap-3 flex-wrap mt-2">
                            @foreach ($dataPost->images as $image)
                                <img src="{{ $image->image_url }}" class="post-img">
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="mt-4 d-flex m-2">
                    <form class="m-3" action="{{ route('admin.posts.update', $dataPost->id) }}" method="POST">
                        @csrf
                        <div class="p-3">
                            <label class="form-label">Trạng Thái</label>
                            <select name="status" class="form-select">
                                <option value="pending" {{ $dataPost->status == 'pending' ? 'selected' : '' }}>Chờ duyệt
                                </option>
                                <option value="active" {{ $dataPost->status == 'active' ? 'selected' : '' }}>Đồng ý
                                </option>
                                <option value="blocked" {{ $dataPost->status == 'blocked' ? 'selected' : '' }}>Từ chối
                                </option>
                            </select>
                        </div>
                        <button class="btn btn-success px-3">Duyệt bài</button>
                    </form>

                    <form class="m-3" action="{{ route('admin.posts.delete', $dataPost->id) }}" method="POST"
                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa bài?');">
                        @csrf
                        <button class="btn btn-danger px-3">Xóa bài</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
