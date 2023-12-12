@extends('admin_layout')
@section('content_admin')

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Tên</th>
        <th>Tuổi</th>
        <th>Kinh Nghiệm</th>
        <th>Chuyên Môn</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)

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
              <p class="fw-bold mb-1">{{ $user->name }}</p>
              <p class="text-muted mb-0">{{ $user->email }}</p>
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
         &nbsp; &nbsp;<a href="link-den-trang-xoa">
            <i class="fas fa-trash-alt"></i>
          </a>

  <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng chỉnh sửa -->
  <i class="fas fa-edit"></i>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>



@endsection
