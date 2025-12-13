@extends('admin.layouts.admin')
@section('content')
    <style>
        .table-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
        }
    </style>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Danh Sách Bài Đăng</h2>

        <div class="card shadow">
            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Giá</th>
                            <th>Ảnh</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($dataPosts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ number_format($item->price) }}₫</td>
                                <td>
                                    @if($item->images->count() > 0)
                                        <img src="{{ $item->images[0]->image_url }}" class="table-img">
                                    @endif
                                </td>
                                <td><span class="badge bg-success">{{ $item->status }}</span></td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.detail', $item->id )}}" class="btn btn-sm btn-primary">Xem</a>
                                    <a href="{{ route('admin.posts.delete', $item->id )}}" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
