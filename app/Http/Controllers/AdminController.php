<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function Authlogin(){
        $admin_id=session::get('email');
        if($admin_id){
           return Redirect::to('admin-home');
        }else{
            return Redirect::to('dashboard')->send();
        }
       }
    //trang chu
    public function homeadmin(){
        return view('admin.login_admin');
    }

    //hien thi thong tin bac sy
    public function hienthibacsy(){
        $this->Authlogin();
        return view('admin.show_doctor');
    }


    //dang nhap
    public function adminpage(){
        $this->Authlogin();
        return view('adminpage');
    }



    public function login(Request $request){
        // Kiểm tra dữ liệu từ form đăng nhập
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            Session::flash('success', 'Đăng nhập thành công.');
            return redirect('/admin-home');
        } else {
            // Xử lý khi đăng nhập không thành công
            return redirect()->back()->with('error', 'Đăng nhập không thành công. Vui lòng thử lại.');
        }
    }

    public function mainpage(){

        return Redirect::to('/admin');
    }
public function logout(){
    Session::put('message_logout','Bạn Đã Đăng Xuất Khỏi Tài Khoản');
    return Redirect::to('/admin');
}
}
