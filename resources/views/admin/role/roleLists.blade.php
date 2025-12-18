@extends('admin.layouts.admin')
@section('content')
    <div class="admin-list-container">
        <div class="admin-list-header">
            <h2 class="admin-list-title">Danh sách tài khoản Quản trị</h2>
            <a href="{{ route('admin.role.create') }}" class="admin-list-add-btn">
                <i class="fas fa-plus"></i> Thêm Admin mới
            </a>
        </div>

        <div class="admin-list-table-wrapper">
            <table class="admin-list-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Thông tin Admin</th>
                        <th>Vai trò</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $user)
                        <tr>
                            <td>#{{ $user->id }}</td>
                            <td>
                                <div class="admin-list-user-info">
                                    <img src="{{ $user->avatar ?? asset('images/client/profile/default-avatar.jpg') }}" alt=""
                                        class="admin-list-avatar">
                                    <div class="admin-list-details">
                                        <span class="admin-list-name">{{ $user->name }}</span>
                                        <span class="admin-list-email">{{ $user->email }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($user->role == 'admin')
                                    <span class="badge bg-danger">Admin (Quản trị)</span>
                                @else
                                    <span class="badge bg-primary">Manager (Quản lý)</span>
                                @endif
                            </td>
                      
                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                            
                            <td>                                
                                @if (Auth::user()->role == 'admin' && $user->role !== 'admin')
                                    <form action="{{ route('admin.role.delete', $user->id) }}" method="POST"
                                        style="display:inline-block;"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa tài khoản {{ $user->name }} này không?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                @else
                                    <button class="btn btn-secondary btn-sm" disabled
                                        title="Không có quyền xóa">Xóa</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection