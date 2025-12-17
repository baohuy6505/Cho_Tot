@extends('admin.layouts.admin')
@section('content')
<div class="hero mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <div class="text-uppercase small opacity-75">Quản trị danh mục</div>
            <h4 class="mb-0">Danh sách Category</h4>
            <p class="mb-0">Quản lý các danh mục sản phẩm trên hệ thống</p>
        </div>
    </div>
</div>

<div class="card card-hover mb-4">
    <div class="card-header bg-primary text-white">
        <h6 class="mb-0 fw-bold">Thêm Category mới</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.category.create') }}" method="post">
            @csrf
            <div class="row g-3 ">
                <div class="col-md-8">
                    <label class="form-label fw-semibold">Tên Category <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                           value="{{ old('name') }}" maxlength="50" required 
                           placeholder="Nhập tên category">
                    <small class="text-muted">Tối đa 50 ký tự. Slug sẽ được tạo tự động từ tên.</small>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <button type="submit" class="btn btn-primary w-100">
                        Thêm Category
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card card-hover">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="fw-bold mb-0">Tất cả Category</h6>
            <span class="badge bg-primary">{{ $dataCategory->count() }} danh mục</span>
        </div>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width: 50px">ID</th>
                        <th>Tên Category</th>
                        <th>Slug</th>
                        <th>Số bài đăng</th>
                        <th>Ngày tạo</th>
                        <th class="text-end">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataCategory as $category)
                        <tr>
                            <td class="text-muted">#{{ $category->id }}</td>
                            <td class="fw-semibold">{{ $category->name }}</td>
                            <td class="text-muted small">
                                <code class="bg-light px-2 py-1 rounded">{{ $category->slug }}</code>
                            </td>
                            <td>
                                <span class="badge bg-info">{{ $category->posts->count() ?? 0 }}</span>
                            </td>
                            <td class="text-muted small">{{ $category->created_at?->format('d/m/Y H:i') }}</td>
                            <td class="text-end">
                                <form class="d-inline" action="{{ route('admin.category.delete', $category->id) }}" method="post" 
                                      onsubmit="return confirm('Bạn có chắc muốn xóa category {{ $category->name}}?')">
                                    @csrf
                                      @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash me-1" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                        Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-inbox text-muted mb-2" viewBox="0 0 16 16">
                                    <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z"/>
                                </svg>
                                <div>Chưa có category nào</div>
                                <small>Thêm category đầu tiên bằng form phía trên</small>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection