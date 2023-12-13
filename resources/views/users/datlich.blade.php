@extends('user_layout')
@section('content')
{{-- <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Đặt lịch khám bệnh 8:00AM-18:00PM<br>(Lưu ý trong giờ hành chính)</h3>
            </div>
            @if (session('error'))
                      <div class="alert alert-success">
                          {{ session('error') }}
                      </div>
                  @endif
                  @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
            <form action="{{ URL::to('/user-dat-lich') }}" method="POST" role="form">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Họ tên" name="name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Địa chỉ" name="address">
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" placeholder="Số điện thoại" name="phone">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Nhập email" name="email">
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" placeholder="Ngày hẹn" name="appointment_date">
                    </div>
                    <div class="col-md-6">
                        <input type="time" class="form-control" placeholder="Giờ hẹn" name="appointment_time">
                    </div>
                    <div class="col-12">
                        <select class="form-select" name="doctor_id">
                            <option selected>Chọn bác sĩ</option>
                            @foreach ($doctors as $id => $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="message" name="message"></textarea>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary float-end">Đặt Ngay</button>
                        <button type="button" class="btn btn-outline-secondary float-end me-2">Hủy</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br> --}}

<section class="appointment">
    @if (session('error'))
<div class="alert alert-success">
    {{ session('error') }}
</div>
@endif
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="font-family: Roboto;">Chúng tôi luôn sẵn sàng hỗ trợ bạn.<br> Đặt lịch hẹn ngay bây giờ.</h2>
                    <div class="col-12">
                        <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Đặt lịch khám bệnh 8:00AM-18:00PM<br>(Lưu ý trong giờ hành chính)</h3>
                    </div>
                    <img src="{{('public/frontend/img/section-img.png')}}" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form action="{{ URL::to('/user-dat-lich') }}" class="form" method="POST" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Tên">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Số điện thoại">
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Department</li>
                                        <li data-value="2" class="option">Cardiac Clinic</li>
                                        <li data-value="3" class="option">Neurology</li>
                                        <li data-value="4" class="option">Dentistry</li>
                                        <li data-value="5" class="option">Gastroenterology</li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="address" type="text" placeholder="Địa chỉ">
                            </div>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="doctor_id">
                                <option value="" selected disabled>Chọn bác sĩ</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Ngày hẹn" name="appointment_date">
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control" placeholder="Giờ hẹn" name="appointment_time">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Viết lời nhắn tại đây....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Đặt lịch hẹn</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="{{('public/frontend/img/contact-img.png')}}" alt="#">
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
