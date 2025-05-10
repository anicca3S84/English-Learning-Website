<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'email' => 'nullable|email|unique:users,email',
            'username' => 'required|string|unique:users,username',
            'password' => 'required',
            'agree' => 'accepted',
        ], [
            'email.unique' => 'Email đã được sử dụng!',
            'username.unique' => 'Tên đăng nhập đã tồn tại!',   
        ]);
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/register')->with('success', 'Đăng ký thành công!');
    }
}
