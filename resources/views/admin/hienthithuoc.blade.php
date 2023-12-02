@extends('admin_layout')
@section('content_admin')

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Tên Thuốc</th>
        <th>Loại thuốc</th>
        <th>Mô tả</th>
        <th>Hình ảnh</th>
      </tr>
    </thead>
    <tbody>
        @foreach($medications as $medication)
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
              <p class="fw-bold mb-1">{{ $medication->medication_name }}</p>
              {{-- <p class="text-muted mb-0">{{ $medication->type_medical }}</p> --}}
            </div>
          </div>
        </td>

        <td>
            <p class="text-muted mb-0">{{ $medication->type_medical }}</p>

        </td>
        <td>{{ $medication->tac_dung }}</td>
        <td>
         <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng xóa -->
         {{-- <img src="public/uploads/product/{{$pro->product_image}}" width="100" height="100"> --}}

         <img src="public/uploads/{{$medication->anh_minh_hoa}}" alt="Ảnh minh họa" style="width: 50px; height: 50px;">
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>



@endsection
