<!DOCTYPE html>
<html lang="zxx">

<head>

    <!--md bootstrap-->
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
rel="stylesheet"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...your-sha512-hash-here..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="{{('public/frontend_admin/css/all.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/bootstrap1.min.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/themify-icons.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/nice-select.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/gijgo.min.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend_admin/css/tagsinput.css')}}">

    <link rel="stylesheet" href="{{'public/frontend_admin/css/jquery.dataTables.min.css'}}">
    <link rel="stylesheet" href="{{('public/frontend_admin/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend_admin/css/buttons.dataTables.min.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/summernote-bs4.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/morris.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/material-icons.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/metisMenu.css')}}">

    <link rel="stylesheet" href="{{('public/frontend_admin/css/style1.css')}}">
    <link rel="stylesheet" href="{{('public/frontend_admin/css/default.css')}}" id="colorSkinCSS">
</head>
<style>.form-control {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    width: 500px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 100px;
}
.form-cung{
    margin-left: 100px;
    color: #749cdb;
}
</style>
<body class="crm_body_bg">



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="{{URL::to('dashboard')}}"><img src="{{('public/frontend_admin/images/logo.png')}}" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">


            <li class="side_menu_title">
                <span>Thông tin cá nhân</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">

                    <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng -->
  <!-- Thêm biểu tượng khác nếu cần -->
  <i class="fas fa-stethoscope"></i>
                    <span>Cập nhập hồ sơ</span>
                </a>
                <ul>
                    <li><a href="{{URL::to('/doctor-lich-trinh')}}"><i class="fa fa-plus"></i>Lịch Trình của tôi</a></li>
                    {{-- <li><a href="{{URL::to('/doctor-hien-thi-thong-tin-bac-sy')}}"><i class="fa fa-plus"></i>Hiển Thị Danh Sách</a></li> --}}
                    <li><a href="{{URL::to('/doctor-cap-nhat-thong-tin')}}"><i class="fa fa-plus"></i>Cập nhật thông tin</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="fas fa-user-injured"></i>
                    <span>Bệnh Nhân</span>
                </a>
                <ul>
                    <li><a href="{{URL::to('/doctor-hien-thi-benh-nhan')}}"><i class="fa fa-plus"></i>Hiển Thị Danh Sách</a></li>
                </ul>
            </li>



        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                    @endif

                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="public/frontend_admin/images/bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="public/frontend_admin/images/msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="public/frontend_admin/images/adminn.jfif" alt="#">
                                <div class="profile_info_iner">
                                    <h5>Quản Trị Viên</h5>
                                    <div class="profile_info_details">

                                        <form method="POST" action="{{ URL::to('/doctor-home') }}">
                                            @csrf
                                            <button type="submit">Logout</button>
                                        </form>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @yield('content_doctor')





        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2023 © Designed by <a href="#"> <i class="ti-heart"></i> </a><a
                                    href="#">Anh Iu</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{('public/frontend_admin/js/jquery1-3.4.1.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/popper1.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/bootstrap1.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/metisMenu.js')}}"></script>

    <script src="{{('public/frontend_admin/js/jquery.waypoints.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/Chart.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/jquery.counterup.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/swiper.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/owl.carousel.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/gijgo.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/buttons.flash.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/jszip.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/pdfmake.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/vfs_fonts.js')}}"></script>
    <script src="{{('public/frontend_admin/js/buttons.html5.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/buttons.print.min.js')}}"></script>
    <script src="{{('public/frontend_admin/js/chart.min.js')}}"></script>

    <script src="{{('public/frontend_admin/js/jquery.barfiller.js')}}"></script>

    <script src="{{('public/frontend_admin/js/tagsinput.js')}}"></script>

    <script src="{{('public/frontend_admin/js/summernote-bs4.js')}}"></script>
    <script src="{{('public/frontend_admin/js/apexcharts.js')}}"></script>

    <script src="{{('public/frontend_admin/js/custom.js')}}"></script>
    <script src="{{('public/frontend_admin/js/bar_active_1.js')}}"></script>
    <script src="{{('public/frontend_admin/js/apex_chart_list.js')}}"></script>
    <script></script>

</body>

</html>
