@extends('layouts.app')

@section('title', 'Danh Sách Bài Đăng Của Tôi')

@section('content')
<div class="hero mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <div class="text-uppercase small opacity-75">Trang cá nhân</div>
            <h4 class="mb-0">Tin đăng của tôi</h4>
            <p class="mb-0 text-white-75">Theo dõi tình trạng duyệt, sửa hoặc xóa tin đã đăng.</p>
        </div>
        <a href="{{ route('client.posts.create') }}" class="btn btn-light">Đăng tin mới</a>
    </div>
</div>

<div class="card card-hover">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Trạng thái</th>
                        <th>Giá</th>
                        <th>Ngày tạo</th>
                        <th class="text-end">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php $map=['pending'=>'warning','active'=>'success','sold'=>'secondary','blocked'=>'danger']; @endphp
                    @forelse($dataPosts as $post)
                        <tr>
                            <td class="fw-semibold">{{ $post->title }}</td>
                            <td>
                                <span class="badge bg-{{ $map[$post->status] ?? 'secondary' }} badge-status">{{ $post->status }}</span>
                                @if($post->status === 'pending')
                                    <div class="small text-muted">Đang chờ admin duyệt</div>
                                @elseif($post->status === 'blocked')
                                    <div class="small text-danger">Đã bị từ chối / khóa</div>
                                @elseif($post->status === 'active')
                                    <div class="small text-success">Đang hiển thị</div>
                                @elseif($post->status === 'sold')
                                    <div class="small text-muted">Đã bán / hết hạn</div>
                                @endif
                            </td>
                            <td class="text-danger fw-bold">{{ number_format($post->price) }} đ</td>
                            <td class="text-muted small">{{ $post->created_at?->format('d/m/Y') }}</td>
                            <td class="text-end">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('client.posts.detail', $post->slug) }}">Xem</a>
                                <a class="btn btn-sm btn-outline-secondary" href="{{ route('client.posts.edit', $post->id) }}">Sửa</a>
                                <form action="{{ route('client.posts.delete', $post->id) }}" method="post" class="d-inline" onsubmit="return confirm('Xóa bài đăng này?');">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">Bạn chưa đăng tin nào.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- <div class="mt-3">
            {{ $dataPosts->links() }}
        </div> --}}
    </div>
</div>

@endsection
