<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ResetPasswordController extends Controller
{
    public function showForm()
    {
        return view('reset-password-form');
    }

    public function sendResetLink(Request $request)
    {
        $email = $request->input('email');

        // Kiểm tra xác thực email ở đây (có thể kiểm tra trong cơ sở dữ liệu)

        // Gửi email đặt lại mật khẩu
        $this->sendPasswordResetEmail($email);

        return "Password reset email sent successfully";
    }

    private function sendPasswordResetEmail($email)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.example.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'dangcongnhat2004qb@gmail.com';
            $mail->Password   = 'oqyrjgkgjqxzpggr';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('oqyrjgkgjqxzpggr', 'Nhật đẹp trai');
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset';
            $mail->Body    = '<p>Click the following link to reset your password: <a href="http://your-website.com/reset-password?email='.$email.'">Reset Password</a></p>';

            $mail->send();
        } catch (Exception $e) {
            // Handle email sending error
        }
    }
}
