@extends('layouts.app')
@section('title', $dataPost->title ?? 'Chi Tiết Bài Đăng')
@section('content')

    {{-- APP CONTAINER --}}
    <div class="app-container">
        {{-- Breadcrumb --}}
        <nav class="breadcrumb">
            <a href="{{ route('home') }}" class="breadcrumb__item">Trang chủ</a>
            <i class="fas fa-chevron-right breadcrumb__icon"></i>
            <a href="#" class="breadcrumb__item">{{ $dataPost->category->name ?? 'Danh mục' }}</a>
            <i class="fas fa-chevron-right breadcrumb__icon"></i>
            <p class="breadcrumb__item-right">{{ $dataPost->title }}</p>
        </nav>

        <div class="ad-layout">
            <main class="ad-layout__main">

                {{-- Slide ảnh --}}
                <div class="image">
                    <div class="image__stage">

                        <div class="image__top-actions">

                            <div class="image__action-group">
                                <button class="image__action-btn" id="share-toggle-btn">
                                    <i class="fas fa-share"></i>
                                </button>

                                <div class="image__share-dropdown" id="share-dropdown">
                                    <p class="share-title">Chia sẻ qua:</p>
                                    <div class="share-list">
                                        <a href="#" class="share-item share-item-fb">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="share-item share-item-msg">
                                            <i class="fab fa-facebook-messenger"></i>
                                        </a>
                                        <a href="#" class="share-item share-item-zalo">
                                            Zalo
                                        </a>
                                        <button class="share-item share-item-link">
                                            <i class="fas fa-link"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="image__action-group">
                                <button class="image__action-btn" id="menu-toggle-btn">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="image__dropdown-menu" id="dropdown-menu">
                                    <a href="#" class="image__dropdown-item">
                                        <i class="far fa-flag"></i> Báo cáo tin đăng
                                    </a>
                                    <a href="#" class="image__dropdown-item">
                                        <i class="fas fa-headset"></i> Cần trợ giúp?
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="image__main-image-wrap">
                            @if ($dataPost->images->count() > 0)
                                <img src="{{ asset($dataPost->images[0]->image_url) }}" alt="{{ $dataPost->title }}"
                                    class="image__image" id="main-image">
                            @else
                                <img src="{{ asset('assets/img/default.png') }}" alt="No Image" class="image__image">
                            @endif
                        </div>

                        <button class="image__nav-btn image__nav-btn-prev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="image__nav-btn image__nav-btn-next">
                            <i class="fas fa-chevron-right"></i>
                        </button>

                        <span class="image__count">1 / {{ $dataPost->images->count() }}</span>
                    </div>

                    {{-- Thumbnails --}}
                    @if ($dataPost->images->count() > 0)
                        <div class="image__thumbs-container">
                            <div class="image__thumbs-list">
                                @foreach ($dataPost->images as $key => $img)
                                    <div class="image__thumb-item {{ $key == 0 ? 'image__thumb-item-active' : '' }}"
                                        onclick="changeImage(this, '{{ asset($img->image_url) }}')">
                                        <img src="{{ asset($img->image_url) }}" alt="Thumb {{ $key }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Mô tả tin đăng --}}
                <section class="ad-body" id="ad-body">
                    <h3 class="ad-body__title">Mô tả chi tiết</h3>
                    <p class="ad-body__text">
                        {!! nl2br(e($dataPost->description)) !!}
                        <br><br>
                        <button class="ad-body__text-tag">
                            <span>Liên hệ ngay: {{ $dataPost->user->phone ?? 'Chưa cập nhật' }}</span>
                        </button>
                    </p>
                </section>

                {{-- Thông số kỹ thuật (Ví dụ mẫu, bạn cần map field từ DB nếu có) --}}
                <section class="ad-params" id="ad-params">
                    <h2 class="ad-params__title">Thông số kỹ thuật</h2>
                    <div class="ad-params__list">
                        <div class="ad-params__item">
                            <span class="ad-params__label">Danh mục:</span>
                            <span class="ad-params__value">{{ $dataPost->category->name ?? 'Khác' }}</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Địa chỉ:</span>
                            <span class="ad-params__value">{{ $dataPost->address }}</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Tình trạng:</span>
                            <span class="ad-params__value">Đã sử dụng</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Hãng xe:</span>
                            <a href="" class="ad-params__value">Honda</a>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Dòng xe:</span>
                            <a href="" class="ad-params__value">Ari Blade</a>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Năm SX:</span>
                            <span class="ad-params__value">2018</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Số Km:</span>
                            <span class="ad-params__value">11.000 Km</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Năm SX:</span>
                            <span class="ad-params__value">2018</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Loại xe:</span>
                            <span class="ad-params__value">Xe ga</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Xuất xứ:</span>
                            <span class="ad-params__value">Đang cập nhật</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Chính sách bảo hành:</span>
                            <span class="ad-params__value">Bảo hành hãng</span>
                        </div>
                        <div class="ad-params__item">
                            <span class="ad-params__label">Trọng lượng:</span>
                            <span class="ad-params__value">> 50 kg</span>
                        </div>
                    </div>
                </section>

                {{-- Dịch vụ tiện ích (Tĩnh) --}}
                <div class="utility-services">
                    <h3 class="utility-services__title">Các dịch vụ tiện ích</h3>

                    <div class="utility-services__banner">
                        <img src="{{ asset('images/client/details/moto_purchasing_desktop.png') }}" alt="Banner dịch vụ"
                            class="utility-services__banner-img">
                    </div>

                    <ul class="utility-services__list">
                        <li class="utility-services__item">
                            <i class="far fa-check-circle utility-services__icon"></i>
                            <span class="utility-services__text">Bán xe nhanh trong 2 tiếng</span>
                        </li>
                        <li class="utility-services__item">
                            <i class="far fa-check-circle utility-services__icon"></i>
                            <span class="utility-services__text">Nhận tiền ngay</span>
                        </li>
                        <li class="utility-services__item">
                            <i class="far fa-check-circle utility-services__icon"></i>
                            <span class="utility-services__text">Hỗ trợ sang tên dễ dàng</span>
                        </li>
                    </ul>

                    <button class="utility-services__action-btn"> Bán xe ngay </button>
                </div>

            </main>

            <main class="ad-layout__sidebar">

                <section class="ad-header">
                    <div class="ad-header__top">
                        <h1 class="ad-header__title">{{ $dataPost->title }}</h1>
                        {{-- Tạm thời để action="#" hoặc để trống để không bị lỗi route --}}
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            <button class="ad-header__save-btn"> <i class="far fa-heart"></i> Lưu </button>
                        </form>
                    </div>

                    <div class="ad-header__meta">
                        2018 • 29000 km • Đang cập nhật
                    </div>

                    <div class="ad-header__price"> {{ number_format($dataPost->price, 0, ',', '.') }} đ</div>

                    <div class="ad-header__actions">
                        <button class="ad-header__chat-btn">Chat với người bán</button>
                        <a href="tel:{{ $dataPost->user->phone ?? '' }}" class="ad-header__call-btn"
                            style="text-decoration: none; display:flex; align-items:center; justify-content:center;">
                            <i class="fas fa-phone-alt" style="margin-right:5px;"></i>
                            {{ $dataPost->user->phone ?? 'Bấm để hiện số' }}
                        </a>
                    </div>

                    <div class="ad-header__footer">
                        <div class="ad-header__location"> <i class="fas fa-map-marker-alt ad-header__icon-small"></i>
                            <div class="ad-header__location-text">
                                <span class="ad-header__location-main">{{ $dataPost->address }}</span>
                            </div>
                        </div>
                        <div class="ad-header__time"> <i class="far fa-clock ad-header__icon-small"></i>
                            <span>Đăng {{ $dataPost->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </section>

                {{-- Thông tin người bán --}}
                <div class="seller">
                    <div class="seller__header">
                        <div class="seller__avatar-wrap">

                            @if (Auth::user()->avatar)
                                <img src="{{ $dataPost->user->avatar }}" alt="Avatar" class="seller__avatar">
                            @else
                                <img src="{{ asset('images/client/profile/default-avatar.jpg') }}" alt="Avatar"
                                    class="seller__avatar">
                            @endif

                            <span class="seller__status-dot"></span>
                        </div>

                        <div class="seller__info">
                            <h3 class="seller__name">{{ $dataPost->user->name ?? 'Người dùng Chợ Tốt' }}</h3>
                            <div class="seller__rating">
                                <span class="seller__score">5.0 <i class="fas fa-star text-yellow"></i></span>
                                <span class="seller__count">(1 Đánh giá)</span>
                            </div>
                            <div class="seller__meta">
                                <span class="seller__activity">• Hoạt động
                                    {{ $dataPost->user->last_activity ?? 'vài phút trước' }}</span>
                                <span class="seller__reply">Phản hồi: 70%</span>
                            </div>
                        </div>
                    </div>

                    <div class="seller__quick-chat">
                        <span class="seller__chat-label">Chat nhanh:</span>
                        <div class="seller__tags-list">
                            <button class="seller__tag">Xe còn hay đã bán rồi ạ?</button>
                            <button class="seller__tag">Xe chính chủ hay...</button>
                            <button class="seller__tag-more"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>

                {{-- Box bình luận (placeholder) --}}
                {{-- <div class="comment-box">
                    <h3 class="comment-box__title">Bình luận</h3>

                    <div class="comment-box__empty-state">
                        <!-- <div class="comment-box__icon-wrap"> <i class="far fa-comment-dots comment-box__icon"></i>
                                </div>
                                <p class="comment-box__text">
                                    Chưa có bình luận nào.<br>
                                    Hãy để lại bình luận cho người bán.
                                </p> -->
                        <div class="comment-list">
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="{{ asset('images/client/profile/default-avatar.jpg') }}" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-bubble">
                                        <h4 class="comment-author">Nguyễn Thanh Hải</h4>
                                        <p class="comment-text">minh nghèo, mua cho bé về đi học</p>
                                    </div>
                                    <div class="comment-actions">
                                        <span class="action-reply">Trả lời</span>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-item owner">
                                <div class="comment-avatar">
                                    @if (Auth::user()->avatar)
                                        <img src="{{ $dataPost->user->avatar }}" alt="Avatar" class="seller__avatar">
                                    @else
                                        <img src="{{ asset('images/client/profile/default-avatar.jpg') }}" alt="Avatar"
                                            class="seller__avatar">
                                    @endif
                                </div>
                                <div class="comment-content">
                                    <div class="comment-bubble">
                                        <h4 class="comment-author">{{ $dataPost->user->name ?? 'Người dùng Chợ Tốt' }}
                                        </h4>
                                        <p class="comment-text">Giá đó không được bạn ơi, bớt chút lộc lá thôi nhé.</p>
                                    </div>
                                    <div class="comment-actions">
                                        <span class="action-reply">Trả lời</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="comment-box__input-area">
                            <input type="text" class="comment-box__input" placeholder="Bình luận...">

                            <button class="comment-box__send-btn">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div> --}}
                {{-- Box bình luận --}}
                <div class="comment-box">
                    <h3 class="comment-box__title">Bình luận ({{ $dataPost->comments->count() }})</h3>

                    <div class="comment-box__body">
                        @if ($dataPost->comments->count() > 0)
                            <div class="comment-list">
                                {{-- Lặp qua danh sách bình luận (Chỉ lấy bình luận cấp 1 nếu bạn làm Reply lồng nhau) --}}
                                @foreach ($dataPost->comments->where('parent_id', null) as $comment)
                                    <div
                                        class="comment-item {{ $comment->user_id == $dataPost->user_id ? 'owner' : '' }}">
                                        <div class="comment-avatar">
                                            <img src="{{ $comment->user->avatar ?? asset('images/client/profile/default-avatar.jpg') }}"
                                                alt="Avatar">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-bubble">
                                                <h4 class="comment-author">
                                                    {{ $comment->user->name }}
                                                    @if ($comment->user_id == $dataPost->user_id)
                                                        <span class="badge-seller">(Người bán)</span>
                                                    @endif
                                                </h4>
                                                <p class="comment-text">{{ $comment->content }}</p>
                                            </div>
                                            <div class="comment-actions">
                                                <span
                                                    class="comment-time">{{ $comment->created_at->diffForHumans() }}</span>
                                                @auth
                                                    <span class="action-reply"
                                                        onclick="replyTo('{{ $comment->user->name }}', '{{ $comment->id }}')">Trả
                                                        lời</span>
                                                    @if (Auth::id() == $comment->user_id || Auth::user()->role == 'admin')
                                                        <form action="{{ route('comments.destroy', $comment->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn-delete-comment"
                                                                onclick="return confirm('Xóa bình luận này?')">Xóa</button>
                                                        </form>
                                                    @endif
                                                @endauth
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Hiển thị các câu trả lời (Replies) --}}
                                    @foreach ($comment->replies as $reply)
                                        <div class="comment-item is-reply {{ $reply->user_id == $dataPost->user_id ? 'owner' : '' }}"
                                            style="margin-left: 50px;">
                                            {{-- Cấu trúc tương tự comment cha --}}
                                            <div class="comment-avatar">
                                                <img src="{{ $reply->user->avatar ?? asset('images/client/profile/default-avatar.jpg') }}"
                                                    alt="Avatar">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-bubble">
                                                    <h4 class="comment-author">{{ $reply->user->name }}</h4>
                                                    <p class="comment-text">{{ $reply->content }}</p>
                                                </div>
                                                <div class="comment-actions">
                                                    <span
                                                        class="comment-time">{{ $reply->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        @else
                            <div class="comment-box__empty-state">
                                <i class="far fa-comment-dots"></i>
                                <p>Chưa có bình luận nào. Hãy để lại bình luận cho người bán.</p>
                            </div>
                        @endif
                    </div>

                    {{-- Form gửi bình luận --}}
                    @auth
                        <form action="{{ route('comments.store', $dataPost->id) }}" method="POST">
                            @csrf
                            {{-- Input ẩn để xử lý trả lời bình luận --}}
                            <input type="hidden" name="parent_id" id="parent_id">

                            <div id="reply-label"
                                style="display:none; padding: 5px 10px; background: #f0f0f0; border-radius: 5px; margin-bottom: 5px;">
                                Đang trả lời: <span id="reply-name"></span>
                                <span onclick="cancelReply()" style="cursor:pointer; color:red; float:right;">&times;</span>
                            </div>

                            <div class="comment-box__input-area">
                                <input type="text" name="content" class="comment-box__input"
                                    placeholder="Viết bình luận..." required>
                                <button type="submit" class="comment-box__send-btn">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    @else
                        <div class="comment-login-prompt">
                            <p><a href="{{ route('login') }}">Đăng nhập</a> để tham gia bình luận.</p>
                        </div>
                    @endauth
                </div>
            </main>
        </div>
    </div>

    {{-- Phần tin đăng tương tự (Có thể foreach nếu có biến $relatedPosts) --}}
    @if (isset($relatedPosts) && count($relatedPosts) > 0)
        <section class="products">
            <div class="app-container" style="background-color: #fff; padding: 20px 0;">
                <h2 class="products__title">Tin đăng tương tự</h2>
                <div class="products__list">
                    @foreach ($relatedPosts as $post)
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <div class="products__item">
                                <div class="products__img">
                                    <img src="{{ isset($post->images[0]) ? asset($post->images[0]->image_url) : asset('assets/img/default.png') }}"
                                        class="products__image" />
                                </div>
                                <div class="products__content">
                                    <h2 class="products__title">{{ $post->title }}</h2>
                                    <p class="products__price">{{ number_format($post->price, 0, ',', '.') }} đ</p>
                                    <span class="products__address">{{ Str::limit($post->address, 20) }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <script>
        function replyTo(userName, commentId) {
    document.getElementById('parent_id').value = commentId;
    document.getElementById('reply-name').innerText = userName;
    document.getElementById('reply-label').style.display = 'block';
    document.querySelector('.comment-box__input').focus();
}

function cancelReply() {
    document.getElementById('parent_id').value = '';
    document.getElementById('reply-label').style.display = 'none';
}
    </script>
@endsection
