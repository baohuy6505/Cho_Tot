<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //  
    public function showLogin()
    {
        return view('client.auth.login');
    }

    public function showRegister()
    {
        return view('client.auth.register');
    }


    //
    public function checkAccount(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ], [
            'email.required' => 'Vui lòng nhập Email hoặc Số điện thoại.'
        ]);

        $loginInput = $request->email;

        //
        $field = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        //
        $user = User::where($field, $loginInput)->first();

        //
        if (!$user) {
            return redirect()->route('register')
                ->withInput([
                    'email' => $field === 'email' ? $loginInput : '',
                    'phone' => $field === 'phone' ? $loginInput : '',
                    'name'  => ''
                ])
                ->with('warning', 'Tài khoản chưa tồn tại. Vui lòng đăng ký mới!');
        }

        /** Nếu tồn tại → hiển thị form nhập mật khẩu */
        return view('client.auth.login', [
            'email' => $loginInput,
            'showPassword' => true
        ]);
    }

    // dang ky
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'phone'    => ['required', 'unique:users,phone', 'regex:/(0)[0-9]{9}/'],
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password'   => Hash::make($request->password),
            'role'       => 'user',
            'reputation' => 0
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()
            ->route('home')
            ->with('success', 'Đăng ký thành công! Chào mừng bạn.');
    }


    //dang nhập
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        $loginInput = $request->email;

        $field = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $credentials = [
            $field     => $loginInput,
            'password' => $request->password
        ];

       if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            if (in_array($role, ['admin', 'manager'])) {
                return redirect()->route('admin.home');
            }

            return redirect()->route('home');
        }

        return back()
            ->withErrors(['email' => 'Mật khẩu hoặc tài khoản không chính xác.'])
            ->withInput($request->only('email'));
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function redirectWithGoogle()
    {
        return Socialite::driver('google')
            // ->redirectUrl('http://localhost:8000/auth/google/callback')
            ->redirect();
    }

    public function loginWithGoogle()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();//do nhung van hoat dong
        $dataUser = User::where('email',$googleUser->email)->first();
        if(!$dataUser){
           $dataUser = User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => bcrypt(uniqid()),//dung uniqid tao chuoi ngau nhien & ma hoa 
            'role' => 'user',
            'reputation' => 0,
            'avatar' => $googleUser->avatar,
           ]);
        }
        Auth::login($dataUser);//luu thong tin vao session
        return redirect()->route('home');

        // return response()->json([
        //     'message' => 'Post created successfully!',
        //     'dataSlug' => $googleUser
        // ]);
    }
}
