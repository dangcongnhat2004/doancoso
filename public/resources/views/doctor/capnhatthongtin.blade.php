@extends('doctor_layout')
@section('content_doctor')

<form action="{{ URL::to('/doctor-cap-nhat-thong-tin') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

         <label class="form-cung" for="exampleFormControlInput1">Họ tên</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nhập họ tên" name="name" value="{{ $doctor->name ?? '' }}" >


         <label class="form-cung" for="exampleFormControlSelect1">Địa chỉ</label>
         <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="nhập địa chỉ" name="address"  value="{{ $doctor->address ?? '' }}">



        <label class="form-cung" for="exampleFormControlSelect1">Số điện thoại</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="nhập số điện thoại" name="phone" value="{{ $doctor->phone ?? '' }}" >

        <label class="form-cung" for="exampleFormControlSelect1">Chuyên môn </label>
        <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="nhập chuyên môn" name="specialization" value="{{ $doctor->specialization ?? '' }}" >


        <label class="form-cung" for="exampleFormControlSelect1">Chọn ngày làm </label>
        <input type="date" class="form-control" id="workingDate" name="work_days" value="{{ $doctor->work_days ?? '' }}">


           <label for="exampleFormControlFile1">Chọn ảnh đại diện</label>
           <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">

        <center> <button type="submit" class="btn btn-primary mb-2">Cập nhật</button> </center><br>

     </form>

@endsection
<script>
$(document).ready(function() {
    $( "#workingDate" ).datepicker();
  });

  </script>
