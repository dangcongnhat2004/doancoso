@extends('doctor_layout')
@section('content_doctor')

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Bác sĩ</th>
        <th>Chuyên ngành</th>
        <th>Ngày hẹn</th>
        <th>Thời gian</th>
        <th>Trạng Thái</th>
        <th>Người hẹn</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                class="rounded-circle"
                alt=""
                style="width: 45px; height: 45px"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1"></p>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Consultant</p>
        </td>
        <td>
            <p class="text-muted mb-0">Finance</p>

        </td>
        <td>Junior</td>
        <td>
         <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng xóa -->
         &nbsp; &nbsp; &nbsp; &nbsp;
         <i class="fa-solid fa-thumbs-up" style="color: #0a5ef0;"></i>


        </td>

        <td>
            <div class="d-flex align-items-center">
              <img
                  src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                  class="rounded-circle"
                  alt=""
                  style="width: 45px; height: 45px"
                  />
              <div class="ms-3">
                <p class="fw-bold mb-1">Alex Ray</p>
                <p class="text-muted mb-0">alex.ray@gmail.com</p>
              </div>
            </div>
          </td>
      </tr>

    </tbody>
  </table>



@endsection
