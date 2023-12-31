@extends('user_layout')
@section('content')
@php
    $incrementedId = 1;
    $selectedType = 'all'; // Mặc định hiển thị tất cả khi ban đầu
@endphp

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Chi tiết</th>
                                    <th>Nội dung</th>
                                </tr>
                            </thead>
                            <tbody id="newsDataBody">
                                @foreach($newsData as $data)
    <tr>
        <td>{{ $incrementedId++ }}</td>
        <td>
            <a href="{{ URL::to('/user-bai-viet-chi-tiet/' . $data->id) }}" style="color: #007bff">
                {{ $data->title }}
            </a>
        </td>
        <td class="truncate1">{{ $data->description }}</td>
        <td class="truncate">{{ $data->content }}</td>
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
<style>
    .custom-link {
    color: #007BFF;
    /* Các thuộc tính CSS khác nếu cần */
}
    .custom-l{
    color: #007BFF;
}
    </style>
<!-- Thêm script để xử lý sự kiện click -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var truncateElements = document.querySelectorAll('.truncate');

        truncateElements.forEach(function (element) {
            var originalText = element.textContent;
            var truncatedText = originalText.substring(0, 20); // Thay đổi số ký tự tùy ý

            element.textContent = truncatedText;
        });
    });
</script>

@endsection
