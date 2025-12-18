<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Homecontroller extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $postsByMonth = Post::select(
            DB::raw('MONTH(created_at) as month'), //lay thang tu create_at
            DB::raw('COUNT(*) as total') //dem so luong moi thang
        )
            ->whereYear('created_at', Carbon::now()->year) //loc theo nam
            ->groupBy(DB::raw('MONTH(created_at)')) //gom cac bai theo thang
            ->pluck('total', 'month') //chia ra thanh so bai moi thang: T1 - 5bai
            ->toArray();
        $monthlyPosts = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyPosts[] = $postsByMonth[$i] ?? 0;
        }
        $active = Post::where('status', 'active')->count();
        $pending = Post::where('status', 'pending')->count();
        $blocked = Post::where('status', 'blocked')->count();
        return view('admin.homeAdmin', compact(
            'totalPosts',
            'monthlyPosts',
            'active',
            'pending',
            'blocked'
        ));
    }

    public function roleLists()
    {
        $admins = User::whereIn('role', ['admin', 'manager'])->get();
        return view('admin.role.roleLists', compact('admins'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone' => 'nullable|numeric'
        ], [
            'email.unique' => 'Email này đã tồn tại.',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'manager',
        ]);

        return redirect()->route('admin.role')->with('success', 'Đã thêm một Manager mới thành công!');
    }

public function delete($id)
{
    if (Auth::user()->role !== 'admin') {
        return redirect()->back()->with('error', 'Bạn không có quyền thực hiện hành động này!');
    }
    $userToDelete = User::find($id);
    if (!$userToDelete) {
        return redirect()->back()->with('error', 'Tài khoản không tồn tại!');
    }
    if ($userToDelete->id == Auth::id()) {
        return redirect()->back()->with('error', 'Bạn không thể tự xóa tài khoản của chính mình!');
    }
    if ($userToDelete->role == 'admin') {
        return redirect()->back()->with('error', 'Bạn không được phép xóa tài khoản Admin khác!');
    }
    $userToDelete->delete();
    return redirect()->route('admin.role')->with('success', 'Xóa tài khoản thành công!');
}
}
