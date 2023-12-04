@extends('user_layout')
@section('content')
<div class="container">
    <h3>
        <center><small class="text-muted">Lịch hẹn của bạn</small></center>
    </h3>
    <br>
    <table class="responsive-table">
        <thead>
            <tr>
                <th scope="col">Mã cuộc hẹn</th>
                <th scope="col">Thời gian</th>
                @if (auth()->user()->type == 'doctor')
                    <th scope="col">Bác sĩ</th>
                @endif
                <th scope="col">Địa điểm</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hủy</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td data-title="Mã cuộc hẹn">{{ $appointment->id }}</td>
                    <td data-title="Thời gian">{{ $appointment->appointment_date }} {{ $appointment->appointment_time }}</td>
                    @if (auth()->user()->type == 'doctor')
                        <td data-title="Bác sĩ">{{ $appointment->doctor->name }}</td>
                    @endif
                    <td data-title="Địa điểm">Phòng hẹn bệnh viện</td>
                    <td data-title="Trạng thái">{{ $appointment->status }}</td>
                    <td data-title="Hủy">...</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
