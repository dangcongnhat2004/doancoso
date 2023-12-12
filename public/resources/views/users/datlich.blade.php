@extends('user_layout')
@section('content')
<div class="container mt-5">
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
<br><br><br>
@endsection
