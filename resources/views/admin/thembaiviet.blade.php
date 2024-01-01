@extends('admin_layout')
@section('content_admin')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm thuốc</h4>
        @if (session('success'))
 <div class="alert alert-success">
     {{ session('success') }}
 </div>
@endif
        <form class="forms-sample" action="{{ URL::to('/them-bai-viet') }}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Tên thuốc</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="medication_name">
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Loại thuốc</label>
              <select class="form-control" id="exampleSelectGender" name="type_medical">
                <option>Kháng sinh</option>
                <option>Thảo dược</option>
                <option>Thuốc dinh dưỡng</option>

              </select>
            </div>


          {{-- <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div> --}}
          <div class="form-group">
            <label>File upload</label>
            <input class="form-control file-upload-info" type="file" class="form-control-file" name="file" id="exampleFormControlFile1">

          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Mô tả</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="tac_dung"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
