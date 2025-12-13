@extends('layouts.app')
@section('title', 'Chỉnh Sửa Bài Đăng')
@section('content')
<style>
    .post-form { --pf-accent:#00c853; --pf-dark:#1f2937; }
    .post-form__hero { background: linear-gradient(135deg, #00c853, #00bfa5); color:#fff; border-radius: 18px; padding: 24px; }
    .post-form__badge { background: rgba(255,255,255,0.15); border-radius:12px; padding:6px 10px; font-size:12px; }
    .post-form__card { border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.06); }
    .post-form__label { font-weight: 600; color: #374151; }
    .post-form__hint { font-size: 12px; color: #6b7280; }
    .image-uploader { border: 1px dashed #b2dfdb; border-radius: 12px; padding: 16px; background: #f1fffb; }
    .image-uploader__preview { display:flex; flex-wrap:wrap; gap:10px; margin-top:12px; }
    .image-uploader__item { width:90px; height:90px; border-radius:10px; overflow:hidden; border:1px solid #e5e7eb; position:relative; background:#fff; }
    .image-uploader__item img { width:100%; height:100%; object-fit:cover; }
    .image-uploader__badge { position:absolute; top:6px; right:6px; background:#111827; color:#fff; font-size:11px; padding:2px 6px; border-radius:8px; }
</style>

<div class="post-form">
    <div class="post-form__hero mb-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
        <div>
            <div class="text-uppercase small opacity-75">Chỉnh sửa tin</div>
            <h3 class="mb-1">Cập nhật thông tin chuẩn Chợ Tốt</h3>
            <div class="post-form__badge">Thay ảnh mới sẽ thay thế toàn bộ ảnh cũ</div>
        </div>
        <a href="{{ route('client.posts.list') }}" class="btn btn-light btn-sm">Về danh sách tin</a>
    </div>

    <div class="card post-form__card">
        <div class="card-body">
            <form id="postEditForm" action="{{ route('client.posts.update', $datdaPost->id) }}" method="post" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label post-form__label">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $datdaPost->title) }}" maxlength="120" required data-post-form="title">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label post-form__label">Danh mục</label>
                        <select name="category_id" class="form-select" required>
                            @foreach($categories ?? [] as $cat)
                                <option value="{{ $cat->id }}" @selected(old('category_id', $datdaPost->category_id)==$cat->id)>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label post-form__label">Giá (đ)</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price', $datdaPost->price) }}" min="0" step="1000" required>
                        <div class="post-form__hint">Để 0 nếu muốn thương lượng.</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label post-form__label">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address', $datdaPost->address) }}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label post-form__label">Mô tả</label>
                        <textarea name="description" rows="6" class="form-control" maxlength="2000" required data-post-form="description">{{ old('description', $datdaPost->description) }}</textarea>
                        <div class="post-form__hint">Nêu rõ tình trạng, phụ kiện, lý do bán...</div>
                    </div>

                    <div class="col-12">
                        <label class="form-label post-form__label d-flex align-items-center justify-content-between">
                            <span>Ảnh hiện tại</span>
                            <span class="badge bg-light text-dark">Số ảnh: {{ $datdaPost->images->count() }}</span>
                        </label>
                        <div class="image-uploader__preview">
                            @forelse($datdaPost->images as $img)
                                <div class="image-uploader__item">
                                    <img src="{{ $img->image_url }}" alt="current image">
                                </div>
                            @empty
                                <div class="text-muted">Chưa có ảnh</div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label post-form__label">Tải ảnh mới (sẽ thay thế ảnh cũ, tối đa 5)</label>
                        <div class="image-uploader">
                            <input class="form-control" type="file" name="images[]" multiple accept="image/*" data-post-form="images">
                            <div class="post-form__hint mt-1">Nếu không chọn ảnh, hệ thống giữ nguyên ảnh cũ.</div>
                            <div class="image-uploader__preview" data-post-form="preview"></div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end gap-2">
                        <a href="{{ route('client.posts.list') }}" class="btn btn-light">Hủy</a>
                        <button class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
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
</script>
@endsection