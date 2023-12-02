@extends('admin_layout')
@section('content_admin')

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Tên</th>
        <th>Tình trạng</th>
        <th>SĐT</th>
        <th>Địa chỉ</th>
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
            <p class="text-muted mb-0">{{ $user->phone }}</p>

        </td>
        <td>{{ $user->phone }}</td>
        <td>
         <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng xóa -->
         {{ $user->address }}

        </td>
      </tr>
      @endforeach

    </tbody>
  </table>



@endsection
