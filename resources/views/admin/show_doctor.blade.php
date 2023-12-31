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
                    Chuyên môn
                </th>
                <th>
                   Số điện thoại
                </th>
                <th>
                 Email
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $users)

              <tr>
                <td>
                    {{ ++$incrementedId }}
                </td>
                <td class="py-1">
                    @if (isset($users->avatar))
                   <img src="public/uploads/{{$users->avatar}}" alt="image "/>
                   @else

               @endif
                </td>
                <td>
                    {{$users->name}}
                </td>
                <td>
                    {{ $users->specialization }}
                </td>
                <td>
                    {{$users->phone  }}

                </td>
                <td>
                    {{$users->email  }}
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
