<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
session_start();
use App\Models\User;
class DoctorController extends Controller
{

  public function index(){
       return view("doctor.login");
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

        if ($user->role === 'doctor') {

            // Kiểm tra xem đăng nhập user có role là 'admin' không
            Session::flash('success', 'Chào mừng đến với trang bác sĩ !');
            return view('doctorpage');
        }
        else
        {
            // Nếu không phải , đăng xuất và thông báo lỗi
            Auth::logout();
            return redirect()->back()->with('error', 'Tài khoản không có quyền truy cập.');
        }
    } else {
        // Xử lý khi đăng nhập không thành công
        return redirect()->back()->with('error', 'Đăng nhập không thành công. Vui lòng thử lại.');
    }
}

public function lichtrinh()
 {
    return view('doctor.lichtrinh');
 }

 public function logout(Request $request)
 {
     Auth::logout();

     $request->session()->invalidate();

     $request->session()->regenerateToken();

     return redirect()->to('/doctor-home');
 }

 public function hienthibacsi(){

    // Lấy danh sách người dùng có type là 'user'
    $users = User::where('role', 'doctor')->get();
    // Truyền dữ liệu người dùng sang view
    return view('doctor.show_doctor', compact('users'));
}
public function hienthithongtin(){

    // Lấy thông tin bác sĩ từ cơ sở dữ liệu
    $doctor = User::find(auth()->user()->id);
// Ví dụ chuyển định dạng từ "Y-m-d" sang "d/m/Y"

    // Trả về view và truyền thông tin bác sĩ
    return view('doctor.capnhatthongtin', compact('doctor'));
}

public function capnhatthongtin(Request $request)
{

     // Xác định người dùng đang đăng nhập
     $userId = Auth::id();
     $user = User::find($userId);
    // Kiểm tra và xử lý dữ liệu từ form
    if ($user->id == $userId) {
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'specialization' => 'nullable|string|max:255',
    ]);

    // Lấy người dùng đang đăng nhập
    $user = Auth::user();

    // Cập nhật thông tin
    $user->name = $request->name;
    $user->address = $request->address;
    $user->phone = $request->phone;
    $user->specialization = $request->specialization;
    $user->work_days = $request->work_days;

    // Xử lý upload ảnh đại diện
    if ($request->hasFile('file')) {
        $image = $request->file('file');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $user->avatar = $imageName;
    }

    $user->save();

    // Redirect hoặc hiển thị thông báo thành công
    return redirect()->back()->with('success', 'Cập nhật thông tin thành công');
}else{
    return redirect()->back()->with('error', 'Cập nhật thông tin không thành công');

}

}
}
