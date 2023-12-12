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
                <span>Trang Quản Trị</span>
            </li>
            <li class="mm-active">
                <a class="" href="{{URL::to('/trang-chu-admin')}}" aria-expanded="false">

                    <img src="{{('public/frontend_admin/images/1.svg')}}" alt="">
                    <span>Trang Chủ</span>
                </a>
                {{-- <ul>
                    <li><a class="active" href="index.html">Dashboard 1</a></li>
                    <li><a href="index_2.html">Dashboard 2</a></li>
                </ul> --}}
            </li>
            <li class="side_menu_title">
                <span>Quản lí con người</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">

                    <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng -->
  <!-- Thêm biểu tượng khác nếu cần -->
  <i class="fas fa-stethoscope"></i>
                    <span>Bác Sỹ</span>
                </a>
                <ul>
                    <li><a href="{{URL::to('/lich-trinh')}}"><i class="fa fa-plus"></i>Xem Lịch Trình</a></li>
                    <li><a href="{{URL::to('/hien-thi-thong-tin-bac-sy')}}"><i class="fa fa-plus"></i>Hiển Thị Danh Sách</a></li>
                    <li><a href="{{URL::to('/them-tai-khoan-bac-si')}}"><i class="fa fa-plus"></i>Thêm tài khoản bác sĩ</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="fas fa-user-injured"></i>
                    <span>Bệnh Nhân</span>
                </a>
                <ul>
                    <li><a href="{{URL::to('/hien-thi-benh-nhan')}}"><i class="fa fa-plus"></i>Hiển Thị Danh Sách</a></li>
                </ul>
            </li>
             <li class="side_menu_title">
                <span>Quản lí bài viết</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="public/frontend_admin/images/4.svg" alt="">
                    <span>Bài viết</span>
                </a>
                <ul>
                    <li><a href="{{URL::to('/them-bai-viet')}}">Thêm bài viết</a>

                    </li>
                    <li><a href="{{URL::to('/hien-thi-thuoc')}}">Danh sách các bài viết</a>

                    </li>
                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="public/frontend_admin/images/7.svg" alt="">
                    <span>Charts</span>
                </a>
                <ul>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="apex_chart.html">Apex Charts</a></li>
                    <li><a href="chart_sparkline.html">Chart sparkline</a></li>
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

                                        <form method="POST" action="{{ route('logout') }}">
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




        @yield('content_admin')





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

</body>

</html>
