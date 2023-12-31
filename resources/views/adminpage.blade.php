@extends('admin_layout')
@section('content_admin')
@php
    $incrementedId = 0;
@endphp
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <span class="menu-title" style="font-size: 25px;">Chào mừng đến trang quản trị!</span>

              {{-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> --}}
            </div>
            <div class="col-12 col-xl-4">
             <div class="justify-content-end d-flex">

             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg">
            <div class="card-people mt-auto">
              <img src="{{('public/frontend_admin_fix/images/dashboard/people.svg')}}" alt="people">
              <div class="weather-info">
                <div class="d-flex">
                  <div>
                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>22<sup>C</sup></h2>
                  </div>
                  <div class="ml-2">
                    <h4 class="location font-weight-normal">Đà Nẵng</h4>
                    <h6 class="font-weight-normal">Việt Nam</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Bệnh nhân</p>
                  <p class="fs-30 mb-2">{{ $countUsers }}</p>
                  <p>Đơn vị:người</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Bác sĩ</p>
                  <p class="fs-30 mb-2">{{ $countDoctors }}</p>
                  <p>Đơn vị:người</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Cuộc hẹn</p>
                  <p class="fs-30 mb-2">{{ $countAppointments }}</p>
                  <p>Đơn vị:số</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Thuốc</p>
                  <p class="fs-30 mb-2">{{ $countMedications }}</p>
                  <p>Đơn vị:số</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">

        </div>

      </div>



        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Thông kê cuộc hẹn</p>
                  <div class="table-responsive">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th class="pl-0  pb-2 border-bottom">STT</th>
                          <th class="border-bottom pb-2">Họ tên</th>
                          <th class="border-bottom pb-2">Lịch hẹn</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($appointmentsByUser as $index => $data)
    <tr>
        <td class="pl-0">{{ ++$index }}</td>
        <td class="text-info mb-1">{{ $data->name }}</td>
        <td class="text-muted">{{ $data->appointment_count }}</td>
    </tr>
@endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Thuốc</p>
                      <div class="charts-data">
                        <div class="mt-3">
                          <p class="mb-0">Loại</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="progress progress-md flex-grow-1 mr-4">
                              <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0">{{ $countMedications }} Thuốc</p>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                  <div class="card data-icon-card-primary">
                    <div class="card-body">
                      <p class="card-title text-white">Số người sử dụng</p>
                      <div class="row">
                        <div class="col-8 text-white">
                          <h3>{{ $countAllusers}}</h3>
                          <p class="text-white font-weight-500 mb-0">Tổng quy mô người dùng </p>
                        </div>
                        <div class="col-4 background-icon">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<div class="col-md-4 stretch-card grid-margin">
    <div class="card">
        <div class="card-body">
            <p class="card-title">Thông báo</p>
            <ul class="icon-data-list">
                @foreach($recentUsers as $data)

                <li>
                    <div class="d-flex">
                        @if(isset($data->avatar))
                            <img src="{{ asset('public/uploads/' . $data->avatar) }}" alt="user">
                        @else
                            <!-- Nếu không có avatar, bạn có thể thay thế bằng một hình ảnh mặc định -->
                            <img src="{{ asset('path_to_default_avatar/default-avatar.jpg') }}" alt="default">
                        @endif
                        <div>
                            <p class="text-info mb-1">{{ $data->name }}</p>
                            <p class="mb-0">Đã tạo tài khoản</p>
                            <small>{{ $data->created_at }}</small>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
          </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">NHAT DEP TRAI </span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Phước cute <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->


@endsection
