<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra: Đã đăng nhập VÀ Role nằm trong danh sách cho phép
        if (Auth::check() && in_array(Auth::user()->role, ['admin', 'manager'])) {
            return $next($request);
        }

        // Nếu không phải admin hoặc manager -> đuổi về trang chủ
        return redirect()
            ->route('home') 
            ->with('error', 'Bạn không có quyền truy cập vào trang quản trị.');
    }
}
