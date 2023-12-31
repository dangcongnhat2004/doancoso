@extends('doctor_layout')
@section('content_doctor')

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>STT</th>
        <th>Họ tên</th>
        <th>Ngày hẹn</th>
        <th>Thời gian</th>
        <th>Trạng Thái</th>
        <th>Người đặt lịch</th>
      </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
        @php
            $patient = $patients->where('id', $appointment->user_id)->first();
        @endphp

      <tr>
        <td>
            <p class="fw-normal mb-1">{{ $loop->iteration }}</p>
          </td>

        <td>
            <p class="text-muted mb-0">{{ $appointment->name }}</p>
        </td>

        <td>{{ $appointment->created_at }}</td>
        <td>{{ $appointment->created_at }}</td>

        <td>
            <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng xóa -->
            &nbsp; &nbsp; &nbsp; &nbsp;
            <i class="fa-solid fa-thumbs-up" style="color: #0a5ef0;"></i>
        </td>

        <td>
            @if($patient)
                {{ $patient->name }}
                <!-- Hiển thị thông tin khác của người đặt lịch nếu cần -->
            @else
                Không có thông tin
            @endif
        </td>
      </tr>
      @endforeach
    </tbody>
</table>

@endsection
