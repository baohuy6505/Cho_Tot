@extends('layouts.app')
@section('title', $dataPost->title ?? 'Chi Tiết Bài Đăng')
@section('content')

<div class="row g-3">
    <div class="col-lg-8">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="mb-1">{{ $dataPost->title }}</h4>
                        <div class="text-muted small">{{ $dataPost->address }}</div>
                    </div>
                    <div class="text-end">
                        <div class="h4 text-danger mb-1">{{ number_format($dataPost->price) }} đ</div>
                        @php $map=['pending'=>'warning','active'=>'success','sold'=>'secondary','blocked'=>'danger']; @endphp
                        <span class="badge bg-{{ $map[$dataPost->status] ?? 'secondary' }} badge-status">{{ $dataPost->status }}</span>
                    </div>
                </div>
                <hr>
                <h6 class="fw-bold">Mô tả chi tiết</h6>
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
                        <div class="text-muted">Chưa có ảnh</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-hover mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="text-muted small">Người bán</div>
                        <div class="fw-semibold">{{ $dataPost->user->name ?? 'N/A' }}</div>
                        <div class="small text-muted">Uy tín: {{ $dataPost->user->reputation ?? 0 }}</div>
                    </div>
                    <span class="badge bg-light text-primary">{{ $dataPost->created_at?->format('d/m/Y') }}</span>
                </div>
                <div class="mt-3 d-grid gap-2">
                    <a href="tel:{{ $dataPost->user->phone ?? '' }}" class="btn btn-primary">Gọi người bán</a>
                    <form action="{{ route('favorites.toggle', $dataPost->id) }}" method="post">@csrf
                        <button class="btn btn-outline-warning">Lưu tin</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card card-hover">
            <div class="card-header fw-bold">Báo cáo vi phạm</div>
            <div class="card-body">
                <form action="{{ route('reports.store', $dataPost->id) }}" method="post" class="d-grid gap-2">@csrf
                    <textarea name="reason" rows="3" class="form-control" placeholder="Nhập lý do..." required></textarea>
                    <button class="btn btn-outline-danger">Gửi báo cáo</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection