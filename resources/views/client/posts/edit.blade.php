@extends('layouts.store')
@section('title', 'Chỉnh Sửa Bài Đăng')
@section('content')

<div class="containers">
    <div class="post-ad-page">
        {{-- Banner Section: Đổi text thành Chỉnh sửa --}}
        <div class="post-banner" style="background: #00c853">
            <div class="banner-top">
                <h2 class="banner-title">CHỈNH SỬA TIN</h2>
                <p class="banner-title">Cập nhật thông tin chuẩn Chợ Tốt</p>
            </div>
            <div class="banner-contents">
                <div class="left-info">
                    <h1 class="main-heading">Thay đổi thông tin sản phẩm</h1>
                    <ul class="steps">
                        <li>Lưu ý: Nếu tải ảnh mới, ảnh cũ sẽ bị thay thế.</li>
                        <li>Nếu không chọn ảnh mới, hệ thống giữ nguyên ảnh cũ.</li>
                    </ul>
                </div>
                {{-- Nút về danh sách --}}
                <a href="{{ route('client.posts.list') }}" class="btn-list-view" style="text-decoration: none; display:inline-block; text-align:center;">
                    Về danh sách tin
                </a>
            </div>
        </div>

        {{-- Form Section: ID đổi thành postEditForm --}}
        <form id="postEditForm" class="post-form" action="{{ route('client.posts.update', $datdaPost->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') Bắt buộc phải có để Laravel hiểu là Update --}}
            
            {{-- Tiêu đề --}}
            <div class="form-group">
                <label class="form-label">Tiêu đề tin</label>
                <input type="text" name="title" class="form-control" 
                       value="{{ old('title', $datdaPost->title) }}" 
                       placeholder="Ví dụ: Bán iPhone 13 Pro 128GB chính hãng" 
                       maxlength="120" required data-post-form="title">
                <span class="char-count" data-post-form="title-count">0/120</span>
            </div>

            <div class="form-row" >
                {{-- Danh mục --}}
                <div class="form-group col-half" style="flex: 1;">
                    <label class="form-label">Danh mục</label>
                    <div class="select-wrapper">
                        <select name="category_id" class="form-control" required>
                            <option value="">Chọn danh mục</option>
                            @foreach($categories ?? [] as $cat)
                                <option value="{{ $cat->id }}" @selected(old('category_id', $datdaPost->category_id) == $cat->id)>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                        <i class="fas fa-chevron-down arrow-icon"></i>
                    </div>
                </div>

                {{-- Giá --}}
                <div class="form-group col-half" style="flex: 1;">
                    <label class="form-label">Giá (₫)</label>
                    <input type="number" name="price" class="form-control" 
                           value="{{ old('price', $datdaPost->price) }}" min="0" step="1000" required>
                    <p class="upload-note">Để 0 nếu muốn thương lượng.</p>
                </div>
            </div>

            {{-- Địa chỉ --}}
            <div class="form-group">
                <label class="form-label">Địa chỉ</label>
                <input type="text" name="address" class="form-control" 
                       value="{{ old('address', $datdaPost->address) }}" 
                       placeholder="Quận/Huyện, Tỉnh/TP" required>
            </div>

            {{-- Mô tả --}}
            <div class="form-group">
                <label class="form-label">Mô tả chi tiết</label>
                <textarea name="description" class="form-control textarea-control" rows="6" 
                          maxlength="2000" required data-post-form="description"
                          placeholder="Nêu rõ tình trạng, phụ kiện, lý do bán, bảo hành...">{{ old('description', $datdaPost->description) }}</textarea>
                <span class="char-count" data-post-form="description-count">0/2000</span>
            </div>

            {{-- Ảnh sản phẩm --}}
            <div class="form-group">
                <label class="form-label">Ảnh sản phẩm</label>
                
                {{-- HIỂN THỊ ẢNH CŨ (Chỉ có ở trang Edit) --}}
                <div class="current-images-area" style="margin-bottom: 15px;">
                    <p class="form-label" style="font-size: 14px; color: #666;">Ảnh hiện tại ({{ $datdaPost->images->count() }} ảnh):</p>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        @forelse($datdaPost->images as $img)
                            <div style="width: 80px; height: 80px; border-radius: 8px; overflow: hidden; border: 1px solid #ddd;">
                                <img src="{{ $img->image_url }}" alt="anh-cu" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        @empty
                            <span style="font-size: 13px; color: #999;">Chưa có ảnh nào.</span>
                        @endforelse
                    </div>
                </div>

                <label class="form-label" style="font-size: 14px;">Tải ảnh mới (sẽ thay thế ảnh cũ)</label>
                <div class="image-upload-area">
                    {{-- Input file ẩn --}}
                    <input type="file" name="images[]" id="file-input" multiple accept="image/*" hidden data-post-form="images">
                    
                    {{-- Nút trigger custom --}}
                    <button type="button" class="btn-choose-file" onclick="document.getElementById('file-input').click()">
                        Chọn ảnh mới
                    </button>
                    <span class="file-msg" id="file-msg">Giữ nguyên ảnh cũ nếu không chọn</span>
                </div>
                
                {{-- Khu vực preview ảnh MỚI --}}
                <div class="image-preview-container" id="image-preview" data-post-form="preview"></div>
            </div>

            {{-- Buttons Footer --}}
            <div class="form-footer">
                <a href="{{ route('client.posts.list') }}" class="btn-cancel">Hủy</a>
                <button type="submit" class="btn-submit">Lưu thay đổi</button>
            </div>
        </form>
    </div>
</div>

<script>
    (() => {
        const form = document.querySelector('#postEditForm'); // Đã đổi ID
        if (!form) return;
    
        const titleInput = form.querySelector('[data-post-form="title"]');
        const titleCount = form.querySelector('[data-post-form="title-count"]');
        const descInput = form.querySelector('[data-post-form="description"]');
        const descCount = form.querySelector('[data-post-form="description-count"]');
        const imgInput = form.querySelector('[data-post-form="images"]');
        const preview = form.querySelector('[data-post-form="preview"]');
        const fileMsg = document.getElementById('file-msg');
        const MAX_IMG = 5;
    
        const updateCount = (input, counter, max) => {
            if (!input || !counter) return;
            counter.textContent = `${input.value.length}/${max}`;
        };
    
        titleInput?.addEventListener('input', () => updateCount(titleInput, titleCount, 120));
        descInput?.addEventListener('input', () => updateCount(descInput, descCount, 2000));
        
        // Trigger update ngay lập tức để đếm ký tự của dữ liệu cũ
        updateCount(titleInput, titleCount, 120);
        updateCount(descInput, descCount, 2000);
    
        imgInput?.addEventListener('change', (e) => {
            if (!preview) return;
            const files = Array.from(imgInput.files || []);
            
            if(files.length > 0) {
                fileMsg.textContent = `${files.length} ảnh mới được chọn (Sẽ thay thế ảnh cũ)`;
            } else {
                fileMsg.textContent = 'Giữ nguyên ảnh cũ nếu không chọn';
            }
    
            if (files.length > MAX_IMG) {
                alert(`Chỉ chọn tối đa ${MAX_IMG} ảnh.`);
                imgInput.value = '';
                fileMsg.textContent = 'Giữ nguyên ảnh cũ nếu không chọn';
                preview.innerHTML = '';
                return;
            }
    
            preview.innerHTML = '';
            files.forEach((file, idx) => {
                const reader = new FileReader();
                reader.onload = (ev) => {
                    const item = document.createElement('div');
                    item.style.cssText = 'width:90px; height:90px; border-radius:10px; overflow:hidden; border:1px solid #28a745; position:relative; background:#fff;';
                    item.innerHTML = `
                        <img src="${ev.target.result}" alt="preview" style="width:100%; height:100%; object-fit:cover;">
                        <span style="position:absolute; top:4px; right:4px; background:#28a745; color:#fff; font-size:10px; padding:2px 6px; border-radius:4px;">Mới #${idx+1}</span>
                    `;
                    preview.appendChild(item);
                };
                reader.readAsDataURL(file);
            });
        });
    })();
</script>

{{-- <script>
(() => {
    const form = document.querySelector('#postEditForm');
    if (!form) return;

    const imgInput = form.querySelector('[data-post-form="images"]');
    const preview = form.querySelector('[data-post-form="preview"]');
    const MAX_IMG = 5;

    imgInput?.addEventListener('change', () => {
        if (!preview) return;
        const files = Array.from(imgInput.files || []).slice(0, MAX_IMG);
        if ((imgInput.files || []).length > MAX_IMG) {
            alert(`Chỉ chọn tối đa ${MAX_IMG} ảnh.`);
            imgInput.value = '';
            return;
        }
        preview.innerHTML = '';
        files.forEach((file, idx) => {
            const reader = new FileReader();
            reader.onload = (ev) => {
                const item = document.createElement('div');
                item.className = 'image-uploader__item';
                item.innerHTML = `<img src="${ev.target.result}" alt="preview"><span class="image-uploader__badge">#${idx+1}</span>`;
                preview.appendChild(item);
            };
            reader.readAsDataURL(file);
        });
    });
})();
</script> --}}
@endsection