@extends('layouts.app')
@section('title', $dataPost->title ?? 'Chi Tiết Bài Đăng')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row">

        {{-- Cột 1: PHẦN HIỂN THỊ ẢNH (CAROUSEL) --}}
        <div class="col-md-7">
            {{-- CHÚ Ý: Đã thay $dataImages bằng $dataPost->images --}}
            @php $images = $dataPost->images ?? $dataImages; @endphp 

            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    
                    @if ($images->count() > 0)
                        <div id="postImageCarousel" class="carousel slide" data-bs-ride="carousel">
                            
                            {{-- Thanh điều hướng (Indicators) --}}
                            <div class="carousel-indicators">
                                @foreach ($images as $key => $image)
                                    <button type="button" data-bs-target="#postImageCarousel" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
                                @endforeach
                            </div>

                            {{-- Danh sách Ảnh --}}
                            <div class="carousel-inner rounded-top">
                                @foreach ($images as $key => $image)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ $image->image_url }}" class="d-block w-100" 
                                             alt="Ảnh bài đăng {{ $key + 1 }}" 
                                             style="height: 450px; object-fit: cover;">
                                    </div>
                                @endforeach
                            </div>

                            {{-- Nút điều hướng (Previous/Next) --}}
                            <button class="carousel-control-prev" type="button" data-bs-target="#postImageCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#postImageCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @else
                        <div class="text-center p-5 bg-light rounded" style="height: 450px; display: flex; align-items: center; justify-content: center;">
                            <p class="text-muted mb-0">Không có ảnh nào được tải lên.</p>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>

        {{-- Cột 2: PHẦN THÔNG TIN CHI TIẾT --}}
        <div class="col-md-5">
            <div class="d-flex flex-column h-100">
                
                <h2 class="fw-bolder">{{ $dataPost->title ?? 'Tiêu đề đang được cập nhật' }}</h2>
                <h1 class="text-danger my-3">
                    {{ number_format($dataPost->price ?? 0, 0, ',', '.') }} VNĐ
                </h1>
                
                <hr>

                {{-- Thông tin cơ bản --}}
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i> 
                        <strong>Địa Chỉ:</strong> {{ $dataPost->address ?? 'Chưa rõ' }}
                    </li>
                    <li class="mb-2">
                        {{-- Giả định có mối quan hệ Category --}}
                        <i class="fas fa-tags text-primary me-2"></i> 
                        <strong>Danh Mục:</strong> {{ $dataPost->category->name ?? 'Chưa phân loại' }} 
                    </li>
                    <li class="mb-2">
                        {{-- Giả định có mối quan hệ User --}}
                        <i class="fas fa-user-circle text-primary me-2"></i> 
                        <strong>Người Đăng:</strong> {{ $dataPost->user->name ?? 'Ẩn danh' }}
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-primary me-2"></i> 
                        <strong>Trạng Thái:</strong> 
                        <span class="badge bg-{{ $dataPost->status == 'active' ? 'success' : ($dataPost->status == 'pending' ? 'warning' : 'danger') }}">
                            {{ ucfirst($dataPost->status ?? 'pending') }}
                        </span>
                    </li>
                </ul>
                
                <hr>

                {{-- Nút hành động --}}
                <div class="mt-auto d-grid gap-2">
                    <button class="btn btn-success btn-lg">
                        <i class="fas fa-phone-alt me-2"></i> Liên Hệ Người Bán
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Mô Tả Chi Tiết Bài Đăng</h5>
                </div>
                <div class="card-body">
                    <p class="text-secondary" style="white-space: pre-wrap;">{{ $dataPost->description ?? 'Bài đăng này chưa có mô tả chi tiết.' }}</p>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection