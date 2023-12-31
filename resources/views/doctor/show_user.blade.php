@extends('doctor_layout')
@section('content_doctor')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Danh sách bệnh nhân</h4>
        <p class="card-description">
        </p>
        <div class="table-responsive">
          <table class="table table-striped">

            <thead>
              <tr>
                <th>
                  Bệnh nhân
                </th>
                <th>
                  Họ tên
                </th>
                <th>
                    Địa chỉ
                </th>
                <th>
                   Số điện thoại
                </th>
                <th>
                  Hành động
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $users)

              <tr>
                <td class="py-1">
                    @if (isset($users->avatar))
                   <img src="public/uploads/{{$users->avatar}}" alt="image "    style="width: 45px; height: 45px"
                   />
                   @else

               @endif
                </td>
                <td>
                    {{$users->name}}
                </td>
                <td>
                    {{ $users->address }}
                </td>
                <td>
                    {{$users->phone  }}

                </td>
                <td>
                    {{$users->name  }}
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
