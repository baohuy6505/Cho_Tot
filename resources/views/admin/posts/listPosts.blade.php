@extends('admin.layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Quản lý bài đăng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
            font-family: Arial, sans-serif;
        }
        .table thead {
            background: #343a40;
            color: #fff;
        }
        .post-img-preview {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
        }
        .card {
            border-radius: 10px;
        }
        .status-badge {
            font-size: 13px;
            padding: 6px 10px;
            border-radius: 6px;
        }
        .status-pending { background: #ffc107; color: #000; }
        .status-active { background: #28a745; }
        .status-blocked { background: #dc3545; }
    </style>
</head>
<body>

<div class="container mt-4">
    <h2 class="fw-bold mb-3">📌 Admin - Quản lý bài đăng</h2>

    <!-- Bảng danh sách bài đăng -->
    <div class="card p-3 shadow-sm mb-4">
        <h5 class="fw-bold mb-3">Danh sách bài đăng</h5>

        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Người đăng</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>15</td>
                    <td>
                        <img src="https://via.placeholder.com/80" class="post-img-preview" />
                    </td>
                    <td>iPhone 13 Pro Max 256GB</td>
                    <td>Nguyễn Văn A</td>
                    <td>Đồ điện tử</td>
                    <td><span class="status-badge status-pending">Pending</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Xem</a>
                        <a href="#" class="btn btn-sm btn-success">Duyệt</a>
                        <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>

                <tr>
                    <td>16</td>
                    <td>
                        <img src="https://via.placeholder.com/80" class="post-img-preview" />
                    </td>
                    <td>Xe máy Vision 2019</td>
                    <td>Trần Thị B</td>
                    <td>Xe cộ</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Xem</a>
                        <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>

                <tr>
                    <td>17</td>
                    <td>
                        <img src="https://via.placeholder.com/80" class="post-img-preview" />
                    </td>
                    <td>Cho thuê phòng trọ gần ĐHSP</td>
                    <td>Lê Văn C</td>
                    <td>Bất động sản</td>
                    <td><span class="status-badge status-blocked">Blocked</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Xem</a>
                        <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Popup xem chi tiết -->
    <div class="card p-4 shadow-sm mb-5">
        <h5 class="fw-bold mb-3">Chi tiết bài đăng (Demo UI)</h5>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Tiêu đề:</strong> iPhone 13 Pro Max 256GB</p>
                <p><strong>Người đăng:</strong> Nguyễn Văn A</p>
                <p><strong>Danh mục:</strong> Đồ điện tử</p>
                <p><strong>Giá:</strong> 18.500.000đ</p>
                <p><strong>Địa chỉ:</strong> 245 Điện Biên Phủ, Đà Nẵng</p>
                <p><strong>Trạng thái:</strong> <span class="status-badge status-pending">Pending</span></p>
            </div>

            <div class="col-md-6">
                <p><strong>Hình ảnh:</strong></p>
                <div class="d-flex gap-2 flex-wrap">
                    <img src="https://via.placeholder.com/120" class="post-img-preview" />
                    <img src="https://via.placeholder.com/120" class="post-img-preview" />
                    <img src="https://via.placeholder.com/120" class="post-img-preview" />
                </div>
            </div>
        </div>

        <hr>
        <div>
            <p><strong>Mô tả:</strong></p>
            <p>
                Máy đẹp 99%, không trầy xước, pin 90%. Full chức năng. Bao test 7 ngày.
            </p>
        </div>

        <div class="mt-3">
            <button class="btn btn-success">Duyệt bài</button>
            <button class="btn btn-danger">Xóa bài</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
