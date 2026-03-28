<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ─── Hiển thị form login ─────────────────────────────────────────

    public function showLogin()
    {
        return view('auth.login');
    }

    // ─── Hiển thị form register ──────────────────────────────────────

    public function showRegister()
    {
        return view('auth.register');
    }

    // ─── Xử lý register ──────────────────────────────────────────────

    public function postRegister(Request $request)
    {
        $param = $request->all();

        // 1. Kiểm tra mật khẩu khớp nhau
        if ($param['password'] !== $param['password_confirmation']) {
            return redirect('/register')
                ->withInput($request->only('name', 'email'))
                ->with('error', 'Mật khẩu xác nhận không khớp.');
        }

        // 2. Kiểm tra email đã tồn tại chưa
        $emailExists = User::where('email', $param['email'])->exists();
        if ($emailExists) {
            return redirect('/register')
                ->withInput($request->only('name', 'email'))
                ->with('error', 'Email này đã được sử dụng.');
        }

        // 3. Tạo user mới — không cần xác minh email
        User::create([
            'name'     => $param['name'],
            'email'    => $param['email'],
            'password' => Hash::make($param['password']),
        ]);

        return redirect('/login')
            ->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    // ─── Xử lý login ─────────────────────────────────────────────────

    public function doLogin(Request $request)
    {
        // Validate đầu vào
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        $remember    = $request->boolean('remember'); // checkbox "Remember me"

        // Auth::attempt tự động kiểm tra email và mật khẩu (bcrypt)
        $checkLogin = Auth::attempt($credentials, $remember);

        if ($checkLogin) {
            $request->session()->regenerate(); // chống session fixation

            $user = Auth::user();
            session(['user_id' => $user->id]);

            return redirect('/dashboard');
        }

        // Sai email hoặc mật khẩu
        return redirect('/login')
            ->withInput($request->only('email'))
            ->with('error', 'Email hoặc mật khẩu không đúng.');
    }

    // ─── Logout ───────────────────────────────────────────────────────

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
