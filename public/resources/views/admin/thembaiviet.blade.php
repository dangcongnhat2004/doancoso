@extends('admin_layout')
@section('content_admin')

<form action="{{ URL::to('/them-bai-viet') }}" method="POST" role="form" enctype="multipart/form-data">
 @csrf
 @if (session('success'))
 <div class="alert alert-success">
     {{ session('success') }}
 </div>
@endif
    <div class="form-group">
      <label for="exampleFormControlInput1">Tên thuốc</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nhập tên thuốc" name="medication_name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Loại thuốc</label>
      <select class="form-control" id="exampleFormControlSelect1" name="type_medical">
        <option>kháng sinh</option>
        <option>thảo dược</option>
        <option>thuốc dinh dưỡng</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Mô tả</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="tac_dung" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Chọn ảnh minh họa</label>
        <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
      </div><br>

     <center> <button type="submit" class="btn btn-primary mb-2">Đăng</button> </center>

  </form>

@endsection
