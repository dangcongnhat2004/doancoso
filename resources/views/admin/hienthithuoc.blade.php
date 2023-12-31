@extends('admin_layout')
@section('content_admin')

@php
    $incrementedId = 0;
@endphp
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh sách lịch trình</h4>
        <p class="card-description">
        </p>
        <div class="table-responsive">
          <table class="table table-striped">

            <thead>
              <tr>
                <th>
                    STT
                  </th>
                <th>
                    Tên thuốc
                </th>
                <th>
                    Loại thuốc
                </th>
                <th>
                    Mô tả
                </th>
                <th>
                    Hình ảnh
                </th>

              </tr>
            </thead>
            <tbody>
                @foreach($medications as $medication)

              <tr>
                <td>
                    {{ ++$incrementedId }}
                </td>

                <td>
                    {{ $medication->medication_name }}
                </td>
                <td>
                    {{ $medication->type_medical }}
                </td>
                <td>
                    {{ $medication->tac_dung }}

                </td>
                <td class="py-1">
                
                   <img src="public/uploads/{{$medication->anh_minh_hoa}}" alt="image "/>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
