@extends('layouts.app')

@section('title', 'Quản lý tin đăng')

@section('content')
<section class="listing-manager">
    {{-- =================================================== --}}
    {{-- PHẦN 1: HEADER, TOOLBAR, USER INFO (GIỮ NGUYÊN) --}}
    {{-- =================================================== --}}
    
    <div class="listing-manager__top-bar">
        <nav class="listing-manager__breadcrumb">
            <a href="{{ route('home') }}" class="listing-manager__breadcrumb-link">Trang chủ</a>
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
                <span class="listing-manager__pill-badge">PRO</span> Gói PRO
            </a>
            <a href="#" class="listing-manager__pill">
                <i class="fa-solid fa-ticket listing-manager__pill-icon"></i> Ưu đãi
            </a>
        </div>
        <div class="listing-manager__search">
            <i class="fa-solid fa-magnifying-glass listing-manager__search-icon"></i>
            <input type="text" class="listing-manager__search-input" placeholder="Tìm tin đăng của bạn..." />
        </div>
    </div>

    <div class="listing-manager__profile">
        <div class="listing-manager__user-info">
            @php $avatar = Auth::user()->avatar; @endphp
            <img class="listing-manager__avatar-img"
                 src="{{ Str::startsWith($avatar, 'http') ? $avatar : asset($avatar ?? 'images/client/profile/default-avatar.jpg') }}"
                 alt="Avatar"
                 style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 15px;">

            <div class="listing-manager__user-details">
                <h2 class="listing-manager__name">{{ Auth::user()->name }}</h2>
                <a href="{{ route('client.posts.create') }}" class="listing-manager__create-shop">
                    <i class="fa-solid fa-plus"></i> Đăng tin mới
                </a>
            </div>
        </div>
        <div class="listing-manager__balance-wrapper">
            <div class="listing-manager__balance">
                <span class="listing-manager__coin-icon"><i class="fa-solid fa-circle-dollar-to-slot"></i></span>
                <span class="listing-manager__balance-text">Số dư: 0</span>
            </div>
            <button class="listing-manager__deposit-btn"><i class="fa-solid fa-plus"></i></button>
        </div>
    </div>

    <div class="listing-manager__tabs">
        <a href="javascript:void(0)" class="listing-manager__tab listing-manager__tab--active" onclick="switchTab(event, 'tab-active')">
            ĐANG HIỂN THỊ ({{ $activePosts->total() }})
        </a>
        <a href="javascript:void(0)" class="listing-manager__tab" onclick="switchTab(event, 'tab-pending')">
            CHỜ DUYỆT ({{ $pendingPosts->total() }})
        </a>
        <a href="javascript:void(0)" class="listing-manager__tab" onclick="switchTab(event, 'tab-blocked')">
            BỊ TỪ CHỐI ({{ $blockedPosts->total() }})
        </a>
        <a href="#" class="listing-manager__tab">HẾT HẠN (0)</a>
    </div>

    {{-- =================================================== --}}
    {{-- PHẦN 2: NỘI DUNG BẢNG (THÊM CLASS 'manager') --}}
    {{-- =================================================== --}}
    
    <div class="listing-manager__content manager" style="background: #fff; padding: 20px; border-radius: 8px;">
        
        {{-- 1. TAB ĐANG HIỂN THỊ --}}
        <div id="tab-active" class="tab-content">
            @if($activePosts->count() > 0)
               <table class="listing-table">
    <thead class="listing-table__head">
        <tr class="listing-table__head-row">
            <th class="listing-table__head-cell">Tiêu đề</th>
            <th class="listing-table__head-cell">Giá</th>
            <th class="listing-table__head-cell">Trạng thái</th>
            <th class="listing-table__head-cell listing-table__head-cell--actions">
                Thao tác
            </th>
        </tr>
    </thead>

    <tbody class="listing-table__body">
        @foreach($activePosts as $post)
        <tr class="listing-table__row">
            <!-- Tiêu đề -->
            <td class="listing-table__cell listing-table__cell--title">
                <div class="listing-table__item">
                    <img 
                        src="{{ asset($post->thumbnail ?? 'images/no-image.jpg') }}" 
                        alt="{{ $post->title }}"
                        class="listing-table__item-image"
                    >
                    <div class="listing-table__item-info">
                        <div class="listing-table__item-name">
                            {{ Str::limit($post->title, 40) }}
                        </div>
                        <div class="listing-table__item-date">
                            {{ $post->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
            </td>

            <!-- Giá -->
            <td class="listing-table__cell listing-table__cell--price">
                {{ number_format($post->price) }} đ
            </td>

            <!-- Trạng thái -->
            <td class="listing-table__cell listing-table__cell--status">
                <span class="listing-table__status">
                    {{ $post->status }}
                </span>
            </td>

            <!-- Thao tác -->
            <td class="listing-table__cell listing-table__cell--actions">
                <a 
                    href="{{ route('client.posts.edit', $post->id) }}" 
                    class="listing-table__action listing-table__action--edit"
                >
                    Sửa
                </a>

                <form 
                    action="{{ route('client.posts.delete', $post->id) }}" 
                    method="POST"
                    class="listing-table__action-form"
                    onsubmit="return confirm('Xóa tin này?');"
                >
                    @csrf
                    @method('DELETE')
                    <button 
                        type="submit"
                        class="listing-table__action listing-table__action--delete"
                    >
                        Xóa
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                <div style="margin-top: 15px;">
                    {{ $activePosts->appends(['pending_page' => $pendingPosts->currentPage(), 'blocked_page' => $blockedPosts->currentPage()])->links() }}
                </div>
            @else
                <div style="text-align: center; padding: 30px 0;">
                    <img src="{{ asset('images/client/QuanLyTin/KhongTimThayTinDang.svg') }}" alt="Chưa có tin" style="max-width: 150px; margin-bottom: 20px;">
                    <p>Bạn chưa có tin nào đang hiển thị.</p>
                </div>
            @endif
        </div>

        {{-- 2. TAB CHỜ DUYỆT --}}
        <div id="tab-pending" class="tab-content" style="display: none;">
            @if($pendingPosts->count() > 0)
            <table class="post-table">
                <thead class="post-table__header">
                    <tr>
                        <th class="post-table__header-title">Tiêu đề</th>
                        <th class="post-table__header-price">Giá</th>
                        <th class="post-table__header-status">Trạng thái</th>
                        <th class="post-table__header-actions">Thao tác</th>
                    </tr>
                </thead>
                <tbody class="post-table__body">
                    @foreach($pendingPosts as $post)
                    <tr class="post-table__row">
                        <td class="post-table__cell post-table__cell--title">
                            <div class="post-table__item">
                                <img 
                                    src="{{ asset($post->thumbnail ?? 'images/no-image.jpg') }}" 
                                    alt="{{ $post->title }}"
                                    class="post-table__item-image"
                                >
                                <div class="post-table__item-content">
                                    <div class="post-table__item-title">{{ Str::limit($post->title, 40) }}</div>
                                    <div class="post-table__item-date">{{ $post->created_at->format('d/m/Y') }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="post-table__cell post-table__cell--price">{{ number_format($post->price) }} đ</td>
                        <td class="post-table__cell post-table__cell--status">
                            <span class="post-table__status-badge">{{ $post->status }}</span>
                        </td>
                        <td class="post-table__cell post-table__cell--actions">
                            <div class="post-table__actions">
                                <a href="{{ route('client.posts.edit', $post->id) }}" class="post-table__action-btn post-table__action-btn--edit">
                                    <span class="post-table__action-icon post-table__action-icon--edit"></span>
                                    <span class="post-table__action-text">Sửa</span>
                                </a>
                                <form 
                                    action="{{ route('client.posts.delete', $post->id) }}" 
                                    method="POST" 
                                    class="post-table__action-form"
                                    onsubmit="return confirm('Xóa tin này?');"
                                >
                                    @csrf @method('DELETE')
                                    <button type="submit" class="post-table__action-btn post-table__action-btn--delete">
                                        <span class="post-table__action-icon post-table__action-icon--delete">Xóa</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <div style="margin-top: 15px;">
                    {{ $pendingPosts->appends(['active_page' => $activePosts->currentPage(), 'blocked_page' => $blockedPosts->currentPage()])->links() }}
                </div>
            @else
                <div style="text-align: center; padding: 30px 0;">
                    <img src="{{ asset('images/client/QuanLyTin/KhongTimThayTinDang.svg') }}" alt="Chưa có tin" style="max-width: 150px; margin-bottom: 20px;">
                    <p>Bạn không có tin nào đang chờ duyệt.</p>
                </div>
            @endif
        </div>

        {{-- 3. TAB BỊ TỪ CHỐI --}}
        <div id="tab-blocked" class="tab-content" style="display: none;">
            @if($blockedPosts->count() > 0)
                <table class="rejected-table">
    <thead class="rejected-table__head">
        <tr class="rejected-table__head-row">
            <th class="rejected-table__head-cell">Tiêu đề</th>
            <th class="rejected-table__head-cell">Giá</th>
            <th class="rejected-table__head-cell">Trạng thái</th>
            <th class="rejected-table__head-cell rejected-table__head-cell--actions">
                Thao tác
            </th>
        </tr>
    </thead>

    <tbody class="rejected-table__body">
        @foreach($blockedPosts as $post)
        <tr class="rejected-table__row">
            <!-- Tiêu đề -->
            <td class="rejected-table__cell rejected-table__cell--title">
                <div class="rejected-table__item">
                    <img
                        src="{{ asset($post->thumbnail ?? 'images/no-image.jpg') }}"
                        alt="Thumbnail"
                        class="rejected-table__item-image"
                    />
                    <div class="rejected-table__item-info">
                        <div class="rejected-table__item-title">
                            {{ Str::limit($post->title, 40) }}
                        </div>
                        <div class="rejected-table__item-date">
                            {{ $post->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
            </td>

            <!-- Giá -->
            <td class="rejected-table__cell rejected-table__cell--price">
                {{ number_format($post->price) }} đ
            </td>

            <!-- Trạng thái -->
            <td class="rejected-table__cell rejected-table__cell--status">
                <span class="rejected-table__status rejected-table__status--blocked">
                    {{ $post->status }}
                </span>
            </td>

            <!-- Thao tác -->
            <td class="rejected-table__cell rejected-table__cell--actions">
                <a
                    href="{{ route('client.posts.edit', $post->id) }}"
                    class="rejected-table__action rejected-table__action--edit"
                >
                    <i class="fa-solid fa-pen"></i>
                    <span>Sửa</span>
                </a>

                <form
                    action="{{ route('client.posts.delete', $post->id) }}"
                    method="POST"
                    class="rejected-table__action-form"
                    onsubmit="return confirm('Xóa tin này?');"
                >
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="rejected-table__action rejected-table__action--delete"
                    >
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


                <div style="margin-top: 15px;">
                    {{ $blockedPosts->appends(['active_page' => $activePosts->currentPage(), 'pending_page' => $pendingPosts->currentPage()])->links() }}
                </div>
            @else
                <div style="text-align: center; padding: 30px 0;">
                    <img src="{{ asset('images/client/QuanLyTin/KhongTimThayTinDang.svg') }}" alt="Chưa có tin" style="max-width: 150px; margin-bottom: 20px;">
                    <p>Bạn không có tin nào bị từ chối.</p>
                </div>
            @endif
        </div>

    </div>
</section>

{{-- JAVASCRIPT CHUYỂN TAB --}}
<script>
    function switchTab(evt, tabId) {
        var tabContents = document.getElementsByClassName("tab-content");
        for (var i = 0; i < tabContents.length; i++) {
            tabContents[i].style.display = "none";
        }
        var tabLinks = document.getElementsByClassName("listing-manager__tab");
        for (var i = 0; i < tabLinks.length; i++) {
            tabLinks[i].classList.remove("listing-manager__tab--active");
        }
        document.getElementById(tabId).style.display = "block";
        evt.currentTarget.classList.add("listing-manager__tab--active");
    }
</script>
@endsection