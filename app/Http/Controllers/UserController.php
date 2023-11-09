<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use DB;
use Illuminate\Support\Facades\Hash;
Use Auth;
Use Session;
class UserController extends Controller
{
    public function home(){
        return view('homepage');
    }

    public function login(){
        return view('users.login');
    }


    public function register(){
        return view('users.register');
    }



    public function create(Request $request)
    {
        // Kiểm tra dữ liệu từ form đăng ký
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Tạo một tài khoản người dùng mới
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            // Đăng ký thành công, đăng nhập ngay và chuyển hướng
            Auth::login($user);
            Session::flash('success', 'Đăng ký thành công. Đăng nhập ngay!');
            return redirect('/dang-nhap'); // Điều hướng đến trang dashboard sau khi đăng ký
        } else {
            // Xử lý khi đăng ký không thành công
            Session::flash('error', 'Đăng ký không thành công. Vui lòng thử lại.');
            return back()->with('error', 'Đăng ký không thành công. Vui lòng thử lại.');
        }
    }


    public function Login_user(){



    }

}
