<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use DB;
use Illuminate\Support\Facades\Hash;
Use Auth;
Use Session;
use Carbon\Carbon;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;
use Redirect;
class UserController extends Controller
{

    public function authLogin()
    {
        $email=session::get('email');
        if($email){
           return Redirect::to('admin-home');
        }else{
            return Redirect::to('dang-nhap')->send();
        }
    }
     public function logout(Request $request)
     {
         Auth::logout(); // Đăng xuất người dùng
         $request->session()->invalidate(); // Hủy bỏ phiên làm việc
         $request->session()->regenerateToken(); // Tạo lại token CSRF mới

        return redirect('/dang-nhap'); // Chuyển hướng về trang chính hoặc trang đăng nhập
     }
    public function home(){
        return view('homepage');
    }
    public function homeuser(){
        return view('users.homeuser');
    }
    public function loginuser(){
        return view('users.login');
    }
    public function homepage(){
        return view('users.homeuser');
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

        if ($user->role === 'user') {

            // Kiểm tra xem đăng nhập user có role là 'admin' không
            Session::flash('success', ' !');
            $request->session()->put('user_name', $user->name);
            return view('users.homeuser');
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
public function datlich(Request $request)
{

    // Xác định người dùng đang đăng nhập
    $userId = Auth::id();
    $user = User::find($userId);

    // Kiểm tra và xử lý dữ liệu từ form
    if ($user->id == $userId) {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
        ]);

        // Kiểm tra xem giờ hẹn có nằm trong khoảng làm việc không (8AM - 6PM)
        $startWorkTime = Carbon::createFromTime(8, 0, 0);
        $endWorkTime = Carbon::createFromTime(18, 0, 0);
        $appointmentTime = Carbon::createFromFormat('H:i', $request->appointment_time);

        if ($appointmentTime < $startWorkTime || $appointmentTime > $endWorkTime) {
            return redirect()->back()->with('error', 'Không thể đặt lịch báo răng ngoài giờ làm việc.');
        }

        // Lưu thông tin lịch hẹn vào bảng appointments
        $appointment = new Appointment();
        $appointment->user_id = $userId; // Thêm user_id vào appointments
        $appointment->doctor_id = $request->doctor_id; // Thêm doctor_id vào appointments
        $appointment->name = $request->name;
        $appointment->address = $request->address;
        $appointment->phone = $request->phone;
        $appointment->email = $request->email;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->message = $request->message;
        $appointment->appointment_time = $request->appointment_time;
        $appointment->status = 'pending'; // Hoặc giá trị khác tùy thuộc vào logic của bạn
        $appointment->save();

        // Kiểm tra nếu doctor_id trùng với id trong bảng users và có email
        $doctor = User::find($request->doctor_id);
        if ($doctor && $doctor->email) {
            Mail::to($doctor->email)->send(new AppointmentNotification($user, $appointment));
        } else {
            // Xử lý khi không tìm thấy hoặc không có email
            return redirect()->back()->with('error', 'Không tìm thấy thông tin hoặc email của bác sĩ.');
        }

        // Redirect hoặc hiển thị thông báo thành công
        return redirect()->back()->with('success', 'Đặt lịch hẹn thành công');
    } else {
        return redirect()->back()->with('error', 'Ngoài giờ làm việc');
    }
}



    public function register(){
        return view('users.register');
    }
    public function hienthibacsi()
    {
        $doctors = User::where('role', 'doctor')->get(); // Giả sử Doctor là model tương ứng với bảng doctors

        return view('users.hienthibacsi', compact('doctors'));
    }
    public function hienthilich(){
        $doctors = User::where('role', 'doctor')->get(); // Giả sử Doctor là model tương ứng với bảng doctors

        return view('users.datlich', compact('doctors'));
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



    public function cuochen(){
        $userId = auth()->id();
  // Lấy tất cả cuộc hẹn của người dùng đang đăng nhập
  $appointments = Appointment::where('user_id', auth()->id())->get();
  $namedetailsDoctors = User::where('role', 'doctor')->get();

  return view('users.cuochen', compact('appointments', 'namedetailsDoctors'));
    }

}
