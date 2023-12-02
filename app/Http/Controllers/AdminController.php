<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Medication;
use App\Models\User;
use Auth;
use DB;

use Closure;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use Hash;

class AdminController extends Controller
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return Redirect::to('admin-home');
        // Đổi '/login' thành đường dẫn trang đăng nhập của bạn
    }
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




    //dang nhap
    public function adminpage(){
        return view('adminpage');
    }




public function login(Request $request)
{

    // Kiểm tra dữ liệu từ form đăng nhập
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Đăng nhập thành công
        $user = Auth::User();

        if ($user->role === 'admin') {

            // Kiểm tra xem đăng nhập user có role là 'admin' không
            Session::flash('success', ' !');
            $countDoctors = User::where('role', 'doctor')->count();
            $usershienthi = User::where('role', 'doctor')->get();

            return view('adminpage', compact('countDoctors', 'usershienthi'));
        } else {
            // Nếu không phải admin, đăng xuất và thông báo lỗi
            Auth::logout();
            return redirect()->back()->with('error', 'Tài khoản không có quyền truy cập.');
        }
    } else {
        // Xử lý khi đăng nhập không thành công
        return redirect()->back()->with('error', 'Đăng nhập không thành công. Vui lòng thử lại.');
    }
}

public function adminhome()
{
    $countDoctors = User::where('role', 'doctor')->count();
    $usershienthi = User::where('role', 'user')->get();

    return view('adminpage', compact('countDoctors', 'usershienthi'));
}


    public function mainpage(){

        return Redirect::to('/admin');
    }

 public function lichtrinh()
 {
    return view('admin.lichtrinh');
 }
 //logout

 public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->to('/dashboard');
}

 //user
 //hienthibenhnhan
 public function hienthibenhnhan(){
      // Lấy danh sách người dùng có type là 'user'
      $users = User::where('role', 'user')->get();

      // Truyền dữ liệu người dùng sang view
      return view('users.hienthibenhnhan', compact('users'));
 }

//hien thi bac si
public function hienthibacsi(){

    // Lấy danh sách người dùng có type là 'user'
    $users = User::where('role', 'doctor')->get();
    // Truyền dữ liệu người dùng sang view
    return view('admin.show_doctor', compact('users'));
}
public function thembai(){

    return view('admin.thembaiviet');
}

public function thembaiviet(Request $request)
    {
        // Kiểm tra và xử lý dữ liệu từ form
        $request->validate([
            'medication_name' => 'required|string|max:255',
            'type_medical' => 'required|string|max:255',
            'tac_dung' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lưu thông tin thuốc vào cơ sở dữ liệu
        $medication = new Medication();
        $medication->user_id = auth()->user()->id;
        $medication->medication_name= $request->medication_name;
        $medication->type_medical = $request->type_medical;
        $medication->tac_dung = $request->tac_dung;

        // Xử lý upload ảnh minh họa
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $medication->anh_minh_hoa = $imageName;
        }

        $medication->save();

        // Redirect hoặc hiển thị thông báo thành công
        return redirect()->back()->with('success', 'Thêm bài viết thành công');
    }

    //hienthidanhsachbaiviet
    public function hienthithuoc()
{
    $medications = Medication::all(); // Lấy tất cả các bản ghi từ bảng medications

    return view('admin.hienthithuoc')->with('medications', $medications);
}

public function taikhoanbacsi(){
    return View('admin.thembacsi');
}

public function thembacsi(Request $request)
{
    // Kiểm tra dữ liệu từ form đăng ký
    $this->validate($request, [
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    // Tạo một tài khoản người dùng mới với type là 'doctor'
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'doctor', // Đặt giá trị type là 'doctor'
    ]);

    if ($user) {
        // Đăng ký thành công, chuyển hướng hoặc hiển thị thông báo thành công
        return redirect('/them-tai-khoan-bac-si')->with('success', 'Thêm tài khoản bác sĩ thành công');
    } else {
        // Xử lý khi đăng ký không thành công
        return back()->with('error', 'Thêm tài khoản bác sĩ không thành công. Vui lòng thử lại.');
    }
}


}
