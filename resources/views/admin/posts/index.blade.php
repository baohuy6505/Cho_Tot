@extends('admin.layouts.admin')

@section('content')
<style>
    .table-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 6px;
    }
    /* Thêm hiệu ứng hover cho card để người dùng biết bấm được */
    .card-filter {
        cursor: pointer;
        transition: transform 0.2s;
    }
    .card-filter:hover {
        transform: translateY(-5px);
    }
</style>

<div class="container mt-5">

    <h2 class="mb-4 text-center">Danh Sách Bài Đăng</h2>

    {{-- ===== THANH TỔNG HỢP TRẠNG THÁI (FILTER) ===== --}}
    <div class="row mb-4">
        {{-- Nút Tất cả --}}
        <div class="col-md-4">
            <a href="{{ route('admin.posts.list') }}" 
               class="card card-filter text-center text-decoration-none shadow-sm border-0 
               {{ !request()->has('status') ? 'bg-primary text-white' : 'bg-light' }}">
                <div class="card-body">
                    <h6>Tất cả bài đăng</h6>
                    <h3>{{ $totalPosts }}</h3>
                </div>
            </a>
        </div>

        {{-- Nút Chờ duyệt --}}
        <div class="col-md-4">
            <a href="{{ route('admin.posts.list', ['status' => 'pending']) }}" 
               class="card card-filter text-center text-decoration-none shadow-sm border-0 
               {{ request('status') == 'pending' ? 'bg-warning text-dark' : 'bg-light' }}">
                <div class="card-body">
                    <h6>Bài chờ duyệt</h6>
                    <h3>{{ $pendingPosts }}</h3>
                </div>
            </a>
        </div>

        {{-- Nút Đang hoạt động --}}
        <div class="col-md-4">
            <a href="{{ route('admin.posts.list', ['status' => 'active']) }}" 
               class="card card-filter text-center text-decoration-none shadow-sm border-0 
               {{ request('status') == 'active' ? 'bg-success text-white' : 'bg-light' }}">
                <div class="card-body">
                    <h6>Bài đang hoạt động</h6>
                    <h3>{{ $activePosts }}</h3>
                </div>
            </a>
        </div>
    </div>


    {{-- ===== TABLE ===== --}}
    <div class="card shadow">
        <div class="card-body">
            
            {{-- Kiểm tra nếu không có dữ liệu --}}
            @if($dataPosts->count() > 0)
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th style="width: 25%;">Tiêu đề</th> {{-- Giới hạn chiều rộng tiêu đề --}}
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
                                <td class="fw-bold text-danger">{{ number_format($item->price) }} ₫</td>

                                <td>
                                    @if($item->images->count() > 0)
                                        <img src="{{ $item->images[0]->image_url }}" class="table-img">
                                    @else
                                        <span class="text-muted small">No image</span>
                                    @endif
                                </td>

                                {{-- TRẠNG THÁI --}}
                                <td>
                                    @php
                                        $statusConfig = match($item->status) {
                                            'pending' => ['class' => 'warning', 'label' => 'Chờ duyệt'],
                                            'active'  => ['class' => 'success', 'label' => 'Hoạt động'],
                                            'blocked' => ['class' => 'danger',  'label' => 'Đã khóa'],
                                            default   => ['class' => 'secondary', 'label' => $item->status]
                                        };
                                    @endphp

                                    <span class="badge bg-{{ $statusConfig['class'] }}">
                                        {{ $statusConfig['label'] }}
                                    </span>
                                </td>

                                <td>{{ $item->created_at->format('d/m/Y') }}</td>

                                <td>
                                    <a href="{{ route('admin.posts.detail', $item->id) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-eye"></i> Xem
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center py-4">
                    <p class="text-muted mb-0">Không tìm thấy bài đăng nào ở trạng thái này.</p>
                </div>
            @endif

        </div>
    </div>
</div>
@endsection