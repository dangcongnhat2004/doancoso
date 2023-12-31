<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
session_start();
use App\Models\User;
use App\Models\Appointment;
use Redirect;
class DoctorController extends Controller
{

    function checkAuthentication()
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!Auth::check()) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return Redirect::to('/admin-home');
        }

        // Nếu đã đăng nhập, không thực hiện chuyển hướng
        return null;
    }
  public function index(){
       return view("doctor.login");
}
public function trangchu(){
    if (!Auth::check()) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return Redirect::to('/doctor-home');
    }


    return view("doctorpage");
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
    if (!Auth::check()) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return Redirect::to('/doctor-home');
    }
    // Lấy thông tin bác sĩ đăng nhập hiện tại
    $doctor = auth()->user();


    // Lấy danh sách các lịch hẹn mà bác sĩ đã đặt
    $appointments = Appointment::where('doctor_id', $doctor->id)->get();

    // Lấy thông tin người đặt lịch
    $patients = User::whereIn('id', $appointments->pluck('user_id'))->get();

    return view('doctor.lichtrinh', ['appointments' => $appointments, 'patients' => $patients]);
}



public function logout(Request $request)
     {
         Auth::logout(); // Đăng xuất người dùng
         $request->session()->invalidate(); // Hủy bỏ phiên làm việc
         $request->session()->regenerateToken(); // Tạo lại token CSRF mới

        return redirect('/doctor-home'); // Chuyển hướng về trang chính hoặc trang đăng nhập
     }

 public function hienthibacsi(){
    if (!Auth::check()) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return Redirect::to('/doctor-home');
    }
    // Lấy danh sách người dùng có type là 'user'
    $users = User::where('role', 'doctor')->get();
    // Truyền dữ liệu người dùng sang view
    return view('doctor.show_doctor', compact('users'));
}
public function hienthithongtin(){
    if (!Auth::check()) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return Redirect::to('/doctor-home');
    }
    // Lấy thông tin bác sĩ từ cơ sở dữ liệu
    $doctor = User::find(auth()->user()->id);
// Ví dụ chuyển định dạng từ "Y-m-d" sang "d/m/Y"

    // Trả về view và truyền thông tin bác sĩ
    return view('doctor.capnhatthongtin', compact('doctor'));
}
public function hienthinguoibenh(){
    if (!Auth::check()) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return Redirect::to('/doctor-home');
    }
    // Lấy danh sách người dùng có type là 'user'
    $users = User::where('role', 'user')->get();

    // Truyền dữ liệu người dùng sang view
    return view('doctor.show_user', compact('users'));
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
