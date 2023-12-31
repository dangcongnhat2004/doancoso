@extends('user_layout')
@section('content')

@php
    $incrementedId = 0;
    $selectedType = 'all'; // Mặc định hiển thị tất cả khi ban đầu
@endphp

<script>
    var selectedType = '{{ $selectedType }}'; // Đặt giá trị mặc định cho biến JavaScript
</script>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách thuốc</h4>
                        <p class="card-description">
                            <select id="typeMedical" class="form-control">
                                <option value="all">Tất cả</option>
                                <option value="Thuốc dinh dưỡng">Thuốc dinh dưỡng</option>
                                <option value="thảo dược">thảo dược</option>
                                <option value="Kháng sinh">Kháng sinh</option>
                            </select>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button id="searchBtn" type="button" style="width: 80px; height: 30px; margin-top: 6px; margin-left: 10px;">Tìm kiếm</button>
                        </p>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên thuốc</th>
                                        <th>Loại thuốc</th>
                                        <th>Mô tả</th>
                                        <th>Hình ảnh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($medications as $medication)
                                        @if ($selectedType === 'all' || $selectedType === $medication->type_medical)
                                            <tr class="medication-row" data-type="{{ $medication->type_medical }}">
                                                <td>{{ ++$incrementedId }}</td>
                                                <td>{{ $medication->medication_name }}</td>
                                                <td>{{ $medication->type_medical }}</td>
                                                <td>{{ $medication->tac_dung }}</td>
                                                <td class="py-1">
                                                    <img src="public/uploads/{{$medication->anh_minh_hoa}}" alt="image" style="width: 45px; height: 45px" />
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="5">Không có sản phẩm nào.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .medication-row {
        display: none;
    }
</style>

<script>
    // Thêm sự kiện lắng nghe cho nút tìm kiếm
    document.getElementById('searchBtn').addEventListener('click', function () {
        filterMedications();
    });

    function filterMedications() {
        selectedType = document.getElementById('typeMedical').value; // Lấy giá trị của option được chọn
        var medicationRows = document.querySelectorAll('.medication-row'); // Lấy tất cả các dòng thuốc

        // Ẩn tất cả các dòng thuốc trước khi hiển thị chỉ dòng thuốc thuộc loại được chọn
        medicationRows.forEach(function (row) {
            row.style.display = 'none';
        });

        // Hiển thị chỉ dòng thuốc thuộc loại được chọn
        medicationRows.forEach(function (row) {
            var rowType = row.getAttribute('data-type');
            if (selectedType === 'all' || selectedType === rowType) {
                row.style.display = 'table-row';
            }
        });
    }
</script>

@endsection
