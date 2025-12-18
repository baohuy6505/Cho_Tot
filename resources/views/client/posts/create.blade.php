@extends('layouts.store')
@section('title', 'Tạo Bài Đăng Mới')

@section('content')
    {{-- Lưu ý: Bạn cần đảm bảo file CSS cho các class mới (post-ad-page, banner-top...) đã được load trong layout --}}


    <div class="containers">
        <div class="post-ad-page">
            {{-- Banner Section --}}
            <div class="post-banner">
                <div class="banner-top">
                    <h2 class="banner-title">ĐĂNG TIN MỚI</h2>
                    <p class="banner-title">Tin sẽ được duyệt trong giờ hành chính</p>
                </div>
                <div class="banner-contents">
                    <div class="left-info">
                        <h1 class="main-heading">Rao bán nhanh - Chuẩn Chợ Tốt</h1>
                        <ul class="steps">
                            <li>1. Nhập thông tin</li>
                            <li>2. Thêm ảnh rõ nét</li>
                            <li>3. Chờ admin duyệt</li>
                        </ul>
                    </div>
                    <a href="{{ route('client.posts.list') }}" class="btn-list-view">
                        Về danh sách tin
                    </a>
                </div>
            </div>
            <p style="color: red; margin: 15px;font-weight:bold; font-size:15px;">*Phí đăng 5.000đ / bài</p>
            {{-- Form Section --}}
            <form id="postCreateForm" class="post-form" action="{{ route('client.posts.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="custom-toast error"
                        style="opacity:1; transform:none; position:relative; top:0; right:0; margin-bottom:20px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- Tiêu đề --}}
                <div class="form-group">
                    <label class="form-label">Tiêu đề tin</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                        placeholder="Ví dụ: Bán iPhone 13 Pro 128GB chính hãng" maxlength="120" required
                        data-post-form="title">
                    <span class="char-count" data-post-form="title-count">0/120</span>
                </div>

                <div class="form-row">
                    {{-- Danh mục --}}
                    <div class="form-group col-half">
                        <label class="form-label">Danh mục</label>
                        <div class="select-wrapper">
                            <select name="category_id" class="form-control" required>
                                <option value="">Chọn danh mục</option>
                                @foreach ($categories ?? [] as $cat)
                                    <option value="{{ $cat->id }}" @selected(old('category_id') == $cat->id)>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                            <i class="fas fa-chevron-down arrow-icon"></i>
                        </div>
                    </div>

                    {{-- Giá --}}
                    <div class="form-group col-half">
                        <label class="form-label">Giá (₫)</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}" min="0"
                            step="1000" required>
                        <p class="upload-note">Để 0 nếu muốn thương lượng.</p>
                    </div>
                </div>

                {{-- Địa chỉ --}}
                <div class="form-group">
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                        placeholder="Quận/Huyện, Tỉnh/TP" required>
                </div>

                {{-- Mô tả --}}
                <div class="form-group">
                    <label class="form-label">Mô tả chi tiết</label>
                    <textarea name="description" class="form-control textarea-control" rows="6" maxlength="2000" required
                        data-post-form="description" placeholder="Nêu rõ tình trạng, phụ kiện, lý do bán, bảo hành...">{{ old('description') }}</textarea>
                    <span class="char-count" data-post-form="description-count">0/2000</span>
                </div>

                {{-- Ảnh sản phẩm --}}
                <div class="form-group">
                    <label class="form-label">Ảnh sản phẩm (tối đa 5)</label>
                    <div class="image-upload-area">
                        {{-- Input file ẩn --}}
                        <input type="file" name="images[]" id="file-input" multiple accept="image/*" hidden
                            data-post-form="images">

                        {{-- Nút trigger custom --}}
                        <button type="button" class="btn-choose-file"
                            onclick="document.getElementById('file-input').click()">
                            Chọn ảnh
                        </button>
                        <span class="file-msg" id="file-msg">Chưa có ảnh nào chọn</span>
                    </div>
                    <p class="upload-note">Ưu tiên 3-5 ảnh rõ nét, chụp thực tế.</p>

                    {{-- Khu vực preview ảnh --}}
                    <div class="image-preview-container" id="image-preview" data-post-form="preview"></div>
                </div>

                {{-- Buttons Footer --}}
                <div class="form-footer">
                    <a href="{{ route('client.posts.list') }}" class="btn-cancel">Hủy</a>
                    <button type="submit" class="btn-submit">Đăng tin</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Script xử lý đếm ký tự và preview ảnh --}}
    <script>
        (() => {
            const form = document.querySelector('#postCreateForm');
            if (!form) return;

            // Các element cần xử lý
            const titleInput = form.querySelector('[data-post-form="title"]');
            const titleCount = form.querySelector('[data-post-form="title-count"]');
            const descInput = form.querySelector('[data-post-form="description"]');
            const descCount = form.querySelector('[data-post-form="description-count"]');
            const imgInput = form.querySelector('[data-post-form="images"]');
            const preview = form.querySelector('[data-post-form="preview"]');
            const fileMsg = document.getElementById('file-msg');
            const MAX_IMG = 5;

            // Hàm update bộ đếm
            const updateCount = (input, counter, max) => {
                if (!input || !counter) return;
                counter.textContent = `${input.value.length}/${max}`;
            };

            // Gán sự kiện đếm ký tự
            titleInput?.addEventListener('input', () => updateCount(titleInput, titleCount, 120));
            descInput?.addEventListener('input', () => updateCount(descInput, descCount, 2000));

            // Chạy lần đầu (phòng trường hợp edit hoặc old input)
            updateCount(titleInput, titleCount, 120);
            updateCount(descInput, descCount, 2000);

            // Xử lý upload ảnh
            imgInput?.addEventListener('change', (e) => {
                if (!preview) return;

                const files = Array.from(imgInput.files || []);

                // Cập nhật text thông báo số lượng file
                if (files.length > 0) {
                    fileMsg.textContent = `${files.length} ảnh đã chọn`;
                } else {
                    fileMsg.textContent = 'Chưa có ảnh nào chọn';
                }

                // Validate số lượng
                if (files.length > MAX_IMG) {
                    alert(`Chỉ chọn tối đa ${MAX_IMG} ảnh.`);
                    imgInput.value = ''; // Reset input
                    fileMsg.textContent = 'Chưa có ảnh nào chọn';
                    preview.innerHTML = '';
                    return;
                }

                // Render preview
                preview.innerHTML = '';
                files.forEach((file, idx) => {
                    const reader = new FileReader();
                    reader.onload = (ev) => {
                        const item = document.createElement('div');
                        // Style inline cho item preview để đảm bảo đẹp ngay cả khi thiếu CSS class
                        item.style.cssText =
                            'width:90px; height:90px; border-radius:10px; overflow:hidden; border:1px solid #e5e7eb; position:relative; background:#fff;';
                        item.innerHTML = `
                    <img src="${ev.target.result}" alt="preview" style="width:100%; height:100%; object-fit:cover;">
                    <span style="position:absolute; top:4px; right:4px; background:rgba(0,0,0,0.7); color:#fff; font-size:10px; padding:2px 6px; border-radius:4px;">#${idx+1}</span>
                `;
                        preview.appendChild(item);
                    };
                    reader.readAsDataURL(file);
                });
            });
        })();
    </script>
@endsection
