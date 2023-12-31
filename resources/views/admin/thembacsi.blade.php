@extends('admin_layout')
@section('content_admin')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" >
        <h4 class="card-title">Thêm tài khoản bác sĩ</h4>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
        <form class="forms-sample" method="POST" action="{{ URL::to('/them-tai-khoan-bac-si') }}">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputUsername1">Họ tên</label>
            <input type="text" class="form-control"  placeholder="Nhập họ và tên" name="name" id="name" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ Email</label>
            <input type="email" class="form-control"  placeholder="Nhập địa chỉ Email" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input type="password" class="form-control"  placeholder="Nhập mật khẩu" name="password" id="password">
          </div>

          <button type="submit" class="btn btn-primary">Thêm</button>
          <button class="btn btn-light">Hủy</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection

