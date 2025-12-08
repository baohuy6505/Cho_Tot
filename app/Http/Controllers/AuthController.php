<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function showLogin() { return view('client.auth.login'); }
    public function showRegister() { return view('client.auth.register'); }
// Xử lý kiểm tra tài khoản (Bước 1)
public function checkAccount(Request $request)
{
    $request->validate(['email' => 'required']); // 'email' ở đây là tên input, chứa cả SĐT hoặc Email

    $login = $request->input('email');
    
    // Kiểm tra xem input là Email hay Số điện thoại
    $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

    // Tìm trong database
    $user = User::where($field, $login)->first();

    // TRƯỜNG HỢP 1: Tài khoản CHƯA TỒN TẠI -> Chuyển sang Đăng ký
    if (!$user) {
        // withInput() sẽ giúp điền sẵn dữ liệu sang form đăng ký
        return redirect()->route('register')->withInput([
            'email' => $field === 'email' ? $login : '',
            'phone' => $field === 'phone' ? $login : '',
            'name' => '' // Reset tên
        ])->with('warning', 'Tài khoản chưa tồn tại. Vui lòng đăng ký mới!');
    }

    return view('client.auth.login', [
        'email' => $login,
        'showPassword' => true
    ]);
}
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user', 
            'reputation' => 0
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('login')
            ->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.')
            ->withInput(); // Giữ lại email/sđt để user đỡ phải nhập lại
        }
        return redirect()->route('login');
    }
    public function login(Request $request) {
        $request->validate(['email' => 'required', 'password' => 'required']);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.home');
            }

            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Thông tin đăng nhập không đúng.']);
    }

    //logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}