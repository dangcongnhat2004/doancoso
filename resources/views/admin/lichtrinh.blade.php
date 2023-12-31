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
                  Bác sĩ
                </th>
                <th>
                  Họ tên
                </th>
                <th>
                  Chuyên ngành
                </th>
                <th>
                  Ngày hẹn
                </th>
                <th>
                  Người hẹn
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)

              <tr>
                <td>
                    {{ ++$incrementedId }}
                </td>
                <td class="py-1">
                    @if (isset($appointment->doctor_avatar))
                   <img src="public/uploads/{{$appointment->doctor_avatar}}" alt="image "/>
                   @else

               @endif
                </td>
                <td>
                    {{$appointment->doctor_name}}
                </td>
                <td>
                    {{ $appointment->doctor_specialization }}
                </td>
                <td>
                    {{$appointment->appointment_date  }}

                </td>
                <td>
                    {{$appointment->name  }}
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
