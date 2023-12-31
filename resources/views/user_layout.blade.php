<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--icons-->
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
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
		<!-- Title -->
        <title>Sức Khỏe Là Tất Cả</title>

		<!-- Favicon -->
        <link rel="icon" href="{{('public/frontend/img/favicon.png')}}" >

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{('public/frontend/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{('public/frontend/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{('public/frontend/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{('public/frontend/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{('public/frontend/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{('public/frontend/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{('public/frontend/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{('public/frontend/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{('public/frontend/css/magnific-popup.css')}}">

		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{('public/frontend/css/normalize.css')}}">
        <link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{('public/frontend/css/responsive.css')}}">

    </head>
    <body>

		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator">
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

		<!-- Get Pro Button -->
		<ul class="pro-features">
			<a class="get-pro" href="#">Tài khoản</a>
			<li class="big-title"></li>


            <div class="button">
                <form method="POST" action="{{URL::to('/dang-xuat')}}">
                    @csrf
                    <button type="submit" class="btn">Đăng xuất</button>
                </form>
                <a href="/thongtin" target="_blank" class="btn">Chỉnh sửa thông tin</a>
            </div>




		</ul>

		<!-- End Header Area -->
        <header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="#">Giới Thiệu</a></li>
								<li><a href="#">Đội Ngũ</a></li>
								<li><a href="#">Liên Hệ</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>0972 087 664</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">Nhatdc.22it@vku.udn.vn</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
                                    <a href="{{URL::to('/user-home')}}"><img src="{{('public/frontend/img/anhdaidien.png')}}" width="180" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="{{URL::to('/user-home')}}">Trang Chủ</a>
												{{-- <ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul> --}}
											</li>
											<li><a href="{{URL::to('/user-hien-thi-bac-si')}}">Bác Sĩ</a></li>
											<li><a href="{{URL::to('/user-dat-lich')}}">Đặt Lịch{{--<i class="icofont-rounded-down"></i>--}} </a></li>
											<li><a href="{{URL::to('/user-tin-tuc')}}">Tin Tức</a>
												{{-- <ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul> --}}
											</li>
											<li><a href="{{URL::to('/user-hien-thi-thuoc')}}">Thuốc {{--<i class="icofont-rounded-down"></i>--}} </a>
												{{-- <ul class="dropdown">
													<li><a href="blog-single.html">Blog Details</a></li>
												</ul> --}}
											</li>
                                            <li><a href="#" style="color: #007bff;">@if(session('user_name'))
                                                {{ session('user_name') }}
                                            @else
                                                Xin chào, Khách
                                            @endif</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{URL::to('/dang-nhap')}}" class="btn">Đặt Lịch Khám</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
        @yield('content')

		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Về chúng tôi</h2>
								<p>Chúng tôi cung cấp các dịch vụ một cách đầy đủ nhất</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Đường dẫn nhanh</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Trang chủ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bác sĩ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Đặt lịch</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Chat AI</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Đăng nhật</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Liên hệ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Giới thiệu</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Điện thoại</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Địa chỉ</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Giờ mở</h2>
								<p>470-Trần Đại Nghĩa-Phường Hòa Quý-Quận Ngũ Hành Sơn.</p>
								<ul class="time-sidual">
									<li class="day">Thứ hai - Thứ bảy <span>8.00-16.00</span></li>

								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Bản tin</h2>
								<p>Đăng kí để nhận các thông tin mới nhất </p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Địa chỉ Email" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Địa chỉ Email của bạn'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2023  |  được làm bởi <a href="" target="_blank">Nhật phước</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->

		<!-- jquery Min JS -->
        <script src="{{('public/frontend/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{('public/frontend/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{('public/frontend/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{('public/frontend/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{('public/frontend/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{('public/frontend/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{('public/frontend/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{('public/frontend/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{('public/frontend/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{('public/frontend/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{('public/frontend/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{('public/frontend/js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{('public/frontend/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{('public/frontend/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{('public/frontend/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{('public/frontend/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{('public/frontend/js/main.js')}}"></script>
        //chuyển active

<script>
    $(document).ready(function() {
        // Khởi tạo
        var activeItem = localStorage.getItem('activeItem');
        if (activeItem) {
            $('.main-menu .menu li').removeClass('active');
            $('.main-menu .menu a[href="' + activeItem + '"]').parent('li').addClass('active');
        }

        $('.main-menu .menu a').click(function(e) {
            e.preventDefault(); // Ngăn chặn hành động mặc định của thẻ 'a'

            // Lấy giá trị href từ thẻ 'a'
            var targetUrl = $(this).attr('href');

            // Loại bỏ lớp 'active' từ tất cả các mục
            $('.main-menu .menu li').removeClass('active');

            // Thêm lớp 'active' cho mục được nhấp vào
            $(this).parent('li').addClass('active');

            // Lưu trạng thái "active" vào localStorage
            localStorage.setItem('activeItem', targetUrl);

            // Chuyển hướng đến URL tương ứng
            window.location.href = targetUrl;
        });
    });
    </script>


<script>
    // Thêm sự kiện lắng nghe cho sự thay đổi của dropdown
    document.getElementById('typeMedical').addEventListener('change', function () {
        var selectedType = this.value; // Lấy giá trị của option được chọn
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
    });
</script>


    </body>
</html>
