@extends('layouts.app') {{-- Dùng chung khung với trang Xe cộ --}}
@section('title', 'Trang Đăng tin')
@section('content')
<section class="listing-manager">
      <div class="listing-manager__top-bar">
        <nav class="listing-manager__breadcrumb">
          <a href="#" class="listing-manager__breadcrumb-link">Chợ Tốt</a>
          <span class="listing-manager__breadcrumb-separator">&rsaquo;</span>
          <span class="listing-manager__breadcrumb-current">Quản lý tin</span>
        </nav>
        <div class="listing-manager__notification">
          <span class="listing-manager__notify-icon">
            <i class="fa-solid fa-bell"></i>
            <span class="listing-manager__notify-badge">NEW</span>
          </span>
          <span class="listing-manager__notify-text">Có gì mới</span>
        </div>
      </div>

      <div class="listing-manager__toolbar">
        <div class="listing-manager__shortcuts">
          <strong class="listing-manager__label">Lối tắt</strong>

          <a href="#" class="listing-manager__pill listing-manager__pill--pro">
            <span class="listing-manager__pill-badge">PRO</span>
            Gói PRO
          </a>

          <a href="#" class="listing-manager__pill">
            <i class="fa-solid fa-ticket listing-manager__pill-icon"></i>
            Ưu đãi
          </a>

          <a href="#" class="listing-manager__pill">
            <i class="fa-solid fa-user-group listing-manager__pill-icon"></i>
            Danh sách liên hệ
          </a>
        </div>

        <div class="listing-manager__search">
          <i
            class="fa-solid fa-magnifying-glass listing-manager__search-icon"
          ></i>
          <input
            type="text"
            class="listing-manager__search-input"
            placeholder="Tìm tin đăng của bạn..."
          />
        </div>
      </div>

      <div class="listing-manager__profile"><div class="listing-manager__user-info">
            {{-- XỬ LÝ AVATAR --}}
            @if( Auth::check() && Auth::user()->avatar )
                {{-- Kiểm tra: Nếu link chứa 'http' (ảnh Google) thì in nguyên gốc, ngược lại dùng asset() --}}
                <img 
                    class="listing-manager__avatar-img" 
                    src="{{ Str::startsWith(Auth::user()->avatar, 'http') ? Auth::user()->avatar : asset(Auth::user()->avatar) }}" 
                    alt="Avatar của tôi"
                    style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;"
                >
            @else
                {{-- Nếu chưa có avatar thì hiện ảnh mặc định --}}
                <img 
                    class="listing-manager__avatar-img"
                    src="{{ asset('images/client/profile/default-avatar.jpg') }}" 
                    alt="Avatar mặc định"
                    style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;"
                >
            @endif

            <div class="listing-manager__user-details">
                {{-- XỬ LÝ TÊN NGƯỜI DÙNG --}}
                <h2 class="listing-manager__name">
                    {{ Auth::user()->name ?? 'Người dùng' }}
                </h2>
                
                <a href="#" class="listing-manager__create-shop">
                    <i class="fa-solid fa-plus"></i> Tạo cửa hàng
                </a>
            </div>
        </div>

        <div class="listing-manager__balance-wrapper">
          <div class="listing-manager__balance">
            <span class="listing-manager__coin-icon">
              <i class="fa-solid fa-circle-dollar-to-slot"></i>
            </span>
            <span class="listing-manager__balance-text">Số dư: 0</span>
          </div>
          <button class="listing-manager__deposit-btn">
            <i class="fa-solid fa-plus"></i>
          </button>
        </div>
      </div>

      <div class="listing-manager__tabs">
        <a href="#" class="listing-manager__tab listing-manager__tab--active"
          >ĐANG HIỂN THỊ (0)</a
        >
        <a href="#" class="listing-manager__tab">HẾT HẠN (0)</a>
        <a href="#" class="listing-manager__tab">BỊ TỪ CHỐI (0)</a>
        <a href="#" class="listing-manager__tab">CẦN THANH TOÁN (0)</a>
        <a href="#" class="listing-manager__tab">TIN NHÁP (0)</a>
        <a href="#" class="listing-manager__tab">CHỜ DUYỆT (0)</a>
      </div>

      <div class="listing-manager__content">
        <div class="listing-manager__empty-state">
          <img
            class="listing-manager__empty-image"
            src="{{ asset('images/client/QuanLyTin/KhongTimThayTinDang.svg') }}"
            alt="Chưa có tin"
          />

          <p class="listing-manager__empty-text">
            Bạn hiện chưa có tin đăng nào.
          </p>
          <a href="#" class="listing-manager__post-btn">ĐĂNG TIN NGAY</a>
        </div>
      </div>
    </section>
@endsection