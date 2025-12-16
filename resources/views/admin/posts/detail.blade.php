@extends('admin.layouts.admin')

@section('content')
<div class="hero mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <div class="text-uppercase small opacity-75">Quản trị tin đăng</div>
            <h4 class="mb-0">{{ $dataPost->title }}</h4>
            <p class="mb-0 text-white-50">Kiểm duyệt, khóa hoặc xóa tin</p>
        </div>
        <div class="text-end">
            @php $map = ['pending'=>'warning','active'=>'success','sold'=>'secondary','blocked'=>'danger']; @endphp
            <span class="badge bg-{{ $map[$dataPost->status] ?? 'secondary' }} badge-status">{{ $dataPost->status }}</span>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-lg-8">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="text-muted small">Danh mục</div>
                        <div class="fw-semibold">{{ $dataPost->category->name ?? 'N/A' }}</div>
                    </div>
                    <div class="text-end">
                        <div class="text-muted small">Giá</div>
                        <div class="h5 text-danger mb-0">{{ number_format($dataPost->price) }} đ</div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="text-muted small">Địa chỉ</div>
                    <div>{{ $dataPost->address }}</div>
                </div>
                <hr>
                <h6 class="fw-bold">Mô tả</h6>
                <p class="mb-0">{{ $dataPost->description }}</p>
            </div>
        </div>

        <div class="card card-hover">
            <div class="card-header fw-bold">Hình ảnh</div>
            <div class="card-body">
                <div class="row g-2">
                    @forelse($dataPost->images as $img)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="ratio ratio-1x1 border rounded overflow-hidden">
                                <img src="{{ $img->image_url }}" class="img-fluid object-fit-cover">
                            </div>
                        </div>
                    @empty
                        <div class="text-muted">Không có ảnh</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-muted small">Người đăng</div>
                        <div class="fw-semibold">{{ $dataPost->user->name ?? 'N/A' }}</div>
                        <div class="small text-muted">Uy tín: {{ $dataPost->user->reputation ?? 0 }}</div>
                    </div>
                    <span class="badge bg-light text-primary">{{ $dataPost->created_at?->format('d/m/Y') }}</span>
                </div>
            </div>
        </div>

        <div class="card card-hover">
            <div class="card-header fw-bold">Thao tác nhanh</div>
            <div class="card-body">
                <form action="{{ route('admin.posts.update', $dataPost->id) }}" method="post" class="d-grid gap-2">
                    @csrf
                    <select name="status" class="form-select">
                        <option value="pending" @selected($dataPost->status==='pending')>Chờ duyệt</option>
                        <option value="active" @selected($dataPost->status==='active')>Hoạt động</option>
                        <option value="blocked" @selected($dataPost->status==='blocked')>Từ chối</option>
                    </select>
                    <button class="btn btn-primary">Cập nhật trạng thái</button>
                </form>
                <hr>
                <form action="{{ route('admin.posts.delete', $dataPost->id) }}" method="post" onsubmit="return confirm('Xóa bài đăng này?');">
                    @csrf 
                      @method('DELETE')
                    <button class="btn btn-outline-danger w-100">Xóa vĩnh viễn</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

