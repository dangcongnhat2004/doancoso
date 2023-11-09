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
                <a class="" href="{{URL::to('/dashboard')}}" aria-expanded="false">

                    <img src="{{('public/frontend_admin/images/1.svg')}}" alt="">
                    <span>Trang Chủ</span>
                </a>
                {{-- <ul>
                    <li><a class="active" href="index.html">Dashboard 1</a></li>
                    <li><a href="index_2.html">Dashboard 2</a></li>
                </ul> --}}
            </li>
            <li class="side_menu_title">
                <span>Quản Lý</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">

                    <!-- Sử dụng class của Font Awesome để hiển thị biểu tượng -->
  <!-- Thêm biểu tượng khác nếu cần -->
  <i class="fas fa-stethoscope"></i>
                    <span>Bác Sỹ</span>
                </a>
                <ul>
                    <li><a href=""><i class="fa fa-plus"></i>Xem Lịch Trình</a></li>
                    <li><a href="{{URL::to('/hien-thi-thong-tin-bac-sy')}}"><i class="fa fa-plus"></i>Hiển Thị Danh Sách</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="fas fa-user-injured"></i>
                    <span>Bệnh Nhân</span>
                </a>
                <ul>
                    <li><a href="mail_box.html"><i class="fa fa-plus"></i>Thêm Thông Tin</a></li>
                    <li><a href="faq.html"><i class="fa fa-plus"></i>Hiển Thị Danh Sách</a></li>
                </ul>
            </li>
            <li class="side_menu_title">
                <span>Components</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="public/frontend_admin/images/4.svg" alt="">
                    <span>UI Component</span>
                </a>
                <ul>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="dropdown.html">Dropdowns</a></li>
                            <li><a href="Badges.html">Badges</a></li>
                            <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Components</a>
                        <ul>
                            <li><a href="notification.html">Notifications</a></li>
                            <li><a href="progress.html">Progress Bar</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li><a href="cards.html">cards</a></li>
                            <li><a href="Pagination.html">Pagination</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="public/frontend_admin/images/5.svg" alt="">
                    <span>Widgets</span>
                </a>
                <ul>
                    <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                    <li><a href="profilebox.html">Profile Box</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="public/frontend_admin/images/6.svg" alt="">
                    <span>Forms</span>
                </a>
                <ul>
                    <li><a href="#">Elements</a>
                        <ul>
                            <li><a href="data_table.html">Data Tables</a></li>
                            <li><a href="bootstrap_table.html">Grid Tables</a></li>
                            <li><a href="datepicker.html">Date Picker</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Widgets</a>
                        <ul>
                            <li><a href="Input_Selects.html">Input Selects</a></li>
                            <li><a href="Input_Mask.html">Input Mask</a></li>
                        </ul>
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
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="public/frontend_admin/images/icon_search.svg" alt="">
                                    </button>
                                </form>
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
                                <img src="public/frontend_admin/images/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <p>Neurologist </p>
                                    <h5>Dr. Robar Smith</h5>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        <a href="#">Settings <i class="ti-settings"></i></a>
                                        <a href="#">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
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
