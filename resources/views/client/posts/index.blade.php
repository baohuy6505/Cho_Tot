@extends('layouts.app')

@section('title', 'Danh Sách Bài Đăng Của Tôi')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center">Danh sách đơn hàng đã đăng</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Tiêu đề</th>
                        <th>Giá</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPosts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ number_format($post->price) }}₫</td>
                            <td>{{ $post->address }}</td>
                            <td>
                                <span class="badge bg-success">{{ $post->status }}</span>
                            </td>
                            <td>
                                <a href="{{ route('client.posts.detail',$post->id)}}" class="btn btn-sm btn-success">Chi tiết</a>
                                <a href="{{ route('client.posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                                <form method="POST" action="{{ route('client.posts.delete', $post->id) }}">
                                         @csrf
                                    <button
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Bạn có chắc muốn xóa?')">
                                   Xóa
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Phân trang --}}
            {{-- <div class="mt-3">
                {{ $dataPosts->links() }}
            </div> --}}
        </div>
    </div>
</div>
@endsection
