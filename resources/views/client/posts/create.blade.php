@extends('layouts.app')
@section('title', 'Tạo Bài Đăng Mới')
@section('content')
    <style>
    .post-form { --pf-accent:#fdd835; --pf-dark:#1f2937; }
    .post-form__hero { background: linear-gradient(135deg, #ff9800, #f57c00); color:#fff; border-radius: 18px; padding: 24px; }
    .post-form__steps { display:flex; gap:12px; flex-wrap:wrap; margin-top:8px; }
    .post-form__step { background: rgba(255,255,255,0.12); border-radius: 12px; padding:8px 12px; font-size: 13px; }
    .post-form__card { border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.06); }
    .post-form__label { font-weight: 600; color: #374151; }
    .post-form__hint { font-size: 12px; color: #6b7280; }
    .post-form__char { font-size: 12px; color: #6b7280; text-align: right; }
    .image-uploader { border: 1px dashed #d1d5db; border-radius: 12px; padding: 16px; background: #fcfcff; }
    .image-uploader__input { cursor: pointer; }
    .image-uploader__preview { display:flex; flex-wrap:wrap; gap:10px; margin-top:12px; }
    .image-uploader__item { width:90px; height:90px; border-radius:10px; overflow:hidden; border:1px solid #e5e7eb; position:relative; background:#fff; }
    .image-uploader__item img { width:100%; height:100%; object-fit:cover; }
    .image-uploader__badge { position:absolute; top:6px; right:6px; background:#111827; color:#fff; font-size:11px; padding:2px 6px; border-radius:8px; }
</style>

<div class="post-form">
    <div class="post-form__hero mb-4">
        <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
            <div>
                <div class="text-uppercase small opacity-75">Đăng tin mới</div>
                <h3 class="mb-1">Rao bán nhanh – Chuẩn Chợ Tốt</h3>
                <div class="post-form__steps">
                    <span class="post-form__step">1. Nhập thông tin</span>
                    <span class="post-form__step">2. Thêm ảnh rõ nét</span>
                    <span class="post-form__step">3. Chờ admin duyệt</span>
                </div>
            </div>
            <div class="text-end">
                <div class="small">Tin sẽ được duyệt trong giờ hành chính.</div>
                <a href="{{ route('client.posts.list') }}" class="btn btn-light btn-sm mt-2">Về danh sách tin</a>
            </div>
        </div>
    </div>

    <div class="card post-form__card">
        <div class="card-body">
            <form id="postCreateForm" action="{{ route('client.posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label post-form__label">Tiêu đề tin</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" maxlength="120" required data-post-form="title">
                        <div class="d-flex justify-content-between">
                            <span class="post-form__hint">Ví dụ: Bán iPhone 13 Pro 128GB chính hãng</span>
                            <span class="post-form__char" data-post-form="title-count">0/120</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label post-form__label">Danh mục</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Chọn danh mục</option>
                            @foreach($categories ?? [] as $cat)
                                <option value="{{ $cat->id }}" @selected(old('category_id')==$cat->id)>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label post-form__label">Giá (đ)</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}" min="0" step="1000" required>
                        <div class="post-form__hint">Để 0 nếu muốn thương lượng.</div>
                    </div>

                    <div class="col-12">
                        <label class="form-label post-form__label">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Quận/Huyện, Tỉnh/TP" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label post-form__label">Mô tả chi tiết</label>
                        <textarea name="description" rows="6" class="form-control" maxlength="2000" required data-post-form="description">{{ old('description') }}</textarea>
                        <div class="d-flex justify-content-between">
                            <span class="post-form__hint">Nêu rõ tình trạng, phụ kiện, lý do bán, bảo hành...</span>
                            <span class="post-form__char" data-post-form="description-count">0/2000</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label post-form__label">Ảnh sản phẩm (tối đa 5)</label>
                        <div class="image-uploader">
                            <input class="form-control image-uploader__input" type="file" name="images[]" multiple accept="image/*" data-post-form="images">
                            <div class="post-form__hint mt-1">Ưu tiên 3-5 ảnh rõ nét, chụp thực tế.</div>
                            <div class="image-uploader__preview" data-post-form="preview"></div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end gap-2">
                        <a href="{{ route('client.posts.list') }}" class="btn btn-light">Hủy</a>
                        <button class="btn btn-primary">Đăng tin</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
(() => {
    const form = document.querySelector('#postCreateForm');
    if (!form) return;

    const titleInput = form.querySelector('[data-post-form="title"]');
    const titleCount = form.querySelector('[data-post-form="title-count"]');
    const descInput = form.querySelector('[data-post-form="description"]');
    const descCount = form.querySelector('[data-post-form="description-count"]');
    const imgInput = form.querySelector('[data-post-form="images"]');
    const preview = form.querySelector('[data-post-form="preview"]');
    const MAX_IMG = 5;

    const updateCount = (input, counter, max) => {
        if (!input || !counter) return;
        counter.textContent = `${input.value.length}/${max}`;
    };

    titleInput?.addEventListener('input', () => updateCount(titleInput, titleCount, 120));
    descInput?.addEventListener('input', () => updateCount(descInput, descCount, 2000));
    updateCount(titleInput, titleCount, 120);
    updateCount(descInput, descCount, 2000);

    imgInput?.addEventListener('change', (e) => {
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
