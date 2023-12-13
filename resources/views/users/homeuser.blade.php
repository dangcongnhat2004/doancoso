@extends('user_layout')
@section('content')

<!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url({{('public/frontend/img/Medical+Banner.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Chúng tôi cung cấp dịch vụ <span>Y tế</span> mà bạn có thể <span>tin tưởng!</span></h1>
                            <p>Đăng nhập để có trải nghiệm tốt nhất</p>
                            <div class="button">
                                <a href="{{URL::to('/dang-nhap')}}" class="btn">Đặt lịch khám</a>
                                <a href="#" class="btn primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url({{('public/frontend/img/doctor+banner.jpeg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Chúng tôi cung cấp dịch vụ <span>Y tế</span> mà bạn có thể <span>tin tưởng!</span></h1>
                            <p>Đăng nhập để có trải nghiệm tốt nhất</p>
                            <div class="button">
                                <a href="{{URL::to('/dang-nhap')}}" class="btn">Đặt lịch khám</a>
                                <a href="#" class="btn primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url({{('public/frontend/img/de.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Chúng tôi cung cấp dịch vụ <span>Y tế</span> mà bạn có thể <span>tin tưởng!</span></h1>
                            <p>Đăng nhập để có trải nghiệm tốt nhất</p>
                            <div class="button">
                                <a href="{{URL::to('/dang-nhap')}}" class="btn">Đặt lịch khám</a>
                                <a href="#" class="btn primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 ">
                    <!-- single-schedule -->
                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="single-content">
                                <span>Linh động-kịp thời</span>
                                <h4>Cấp cứu</h4>
                                <p>Trong trường hợp cấp cứu người bị thương hãy gọi cho chúng tôi
                                </p>
                                <a href="#">Xem chi tiết<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-prescription"></i>
                            </div>
                            <div class="single-content">
                                <span>Kinh nghiệm</span>
                                <h4>Đội ngũ bác sĩ</h4>
                                <p>Đội ngũ y bác sĩ dày dặn kinh nghiệm,đa lĩnh vực</p>
                                <a href="#">Xem chi tiết<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <div class="single-content">
                                <span>Dịch vụ</span>
                                <h4>Đặt lịch khám</h4>
                                    <p>Monday - Saturday 8.00-18.00<br>
                                khung giờ linh hoạt</p>
                                <a href="#">Xem chi tiết<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/End Start schedule Area -->

<!-- Start Feautes -->
<section class="Feautes section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="font-family: Roboto;">Chúng tôi luôn sẵn sàng giúp đỡ bạn dù cho bạn là bất kỳ ai</h2>
                    <img src="{{('public/frontend/img/section-img.png')}}" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-ambulance-cross"></i>
                    </div>
                    <h3>Trợ giúp khẩn cấp</h3>
                    <p>Nhanh chóng,kịp thời</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <i class="icofont icofont-medical-sign-alt"></i>
                    </div>
                    <h3>Dược phẩm phong phú</h3>
                    <p>Đa dạng các loại thuôc cho nhiều bệnh khác nhau</p>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features last">
                    <div class="signle-icon">
                        <i class="icofont icofont-stethoscope"></i>
                    </div>
                    <h3>Điều trị y tế</h3>
                    <p>Ân cần,phục vụ người bệnh một cách tốt nhất </p>
                </div>
                <!-- End Single features -->
            </div>
        </div>
    </div>
</section>
<!--/ End Feautes -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">50</span>
                        <p>Quy mô bệnh viện</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">557</span>
                        <p>Đội ngũ chuyên gia</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">1000</span>
                        <p>Đánh giá hài lòng</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">32</span>
                        <p>Số lịch đã đặt</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun-facts -->



<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="content">
                    <h2>Bạn cần chăm sóc y tế khẩn cấp? <br>gọi 0972 087 664</h2><br>
                    <div class="button">
                        <a href="#" class="btn">Liên hệ bây giờ</a>
                        <a href="#" class="btn second">Xem chi tiết<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->

<!-- Start portfolio -->
{{-- <section class="portfolio section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                    <img src="{{('public/frontend/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="owl-carousel portfolio-slider">
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf1.jpg')}}"  alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf2.jpg')}}"   alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf3.jpg')}}"  alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf4.jpg')}}"  alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf1.jpg')}}"  alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf2.jpg')}}"   alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf3.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                    <div class="single-pf">
                        <img src="{{('public/frontend/img/pf4.jpg')}}" alt="#">
                        <a href="portfolio-details.html" class="btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--/ End portfolio -->

<!-- Start service -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="font-family: Roboto;">Chúng tôi cung cấp các dịch vụ khác nhau để cải thiện sức khỏe của bạn</h2>
                    <img src="{{('public/frontend/img/section-img.png')}}" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-prescription"></i>
                    <h4><a href="service-details.html">Phương pháp điều trị </a></h4>
                    <p>Hướng dẫn hay quy tắc tổng quát về cách điều trị một tình trạng bệnh nhất định mà không cần đến chi tiết cụ thể của từng trường hợp.  </p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-tooth"></i>
                    <h4><a href="service-details.html">Tăng sáng răng</a></h4>
                    <p>Sử dụng các phương pháp và sản phẩm nhất định để làm cho màu sắc của răng trở nên trắng sáng hơn.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-heart-alt"></i>
                    <h4><a href="service-details.html">Phẫu thuật Tim</a></h4>
                    <p>Phẫu thuật tim bao gồm các thủ tục phẫu thuật trên tim hoặc các mạch máu lớn được thực hiện bởi bác sĩ phẫu thuật tim và ngực.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-listening"></i>
                    <h4><a href="service-details.html">Điều Trị Tai</a></h4>
                    <p>Điều trị tai bao gồm chăm sóc y tế và các biện pháp can thiệp liên quan đến tai và khả năng nghe.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-eye-alt"></i>
                    <h4><a href="service-details.html">Vấn đề Thị lực</a></h4>
                    <p>Vấn đề thị lực là các tình trạng ảnh hưởng đến tầm nhìn và sự nhận thức hình ảnh của mắt.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Truyền Máu</a></h4>
                    <p>Truyền máu là quá trình chuyển giao máu hoặc các thành phần máu vào hệ tuần hoàn máu của người.</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!--/ End service -->

<!-- Pricing Table -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="font-family: Roboto;">Chúng tôi cung cấp cho bạn phương pháp điều trị tốt nhất với giá cả hợp lí</h2>
                    <img src="{{('public/frontend/img/section-img.png')}}" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont icofont-ui-cut"></i>
                        </div>
                        <h4 class="title">Phẫu thuật mắt</h4>
                        <div class="price">
                            <p class="amount">1.999.000 VNĐ<span></span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Chuẩn đoán sức khỏe</li>
                        <li><i class="icofont icofont-ui-check"></i>phẫu thuật</li>
                        <li><i class="icofont icofont-ui-check"></i>theo dõi sức khỏe</li>
                        <li><i class="icofont icofont-ui-check"></i>cấp phát thuốc</li>
                        <li><i class="icofont icofont-ui-check"></i>khám định kỳ đến khi khỏi bệnh</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Đặt ngay</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont icofont-tooth"></i>
                        </div>
                        <h4 class="title">Làm trắng răng</h4>
                        <div class="price">
                            <p class="amount">1.000.000 VNĐ<span></span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Kiểm tra tình trạng răng</li>
                        <li><i class="icofont icofont-ui-check"></i>Vệ sinh răng miệng</li>
                        <li><i class="icofont icofont-ui-check"></i> Cách ly bảo vệ môi và nướu</li>
                        <li><i class="icofont icofont-ui-check"></i>Bôi thuốc tẩy trắng lên răng</li>
                        <li><i class="icofont icofont-ui-check"></i>Chiếu đèn laser làm trắng</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Đặt ngay</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont-heart-beat"></i>
                        </div>
                        <h4 class="title"> Khám tim</h4>
                        <div class="price">
                            <p class="amount">1.000.000 VNĐ<span></span></p>
                        </div>
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Chẩn đoán và Đánh giá</li>
                        <li><i class="icofont icofont-ui-check"></i>Kiểm tra lâm sàng</li>
                        <li><i class="icofont icofont-ui-check"></i>Xét nghiệm máu</li>
                        <li><i class="icofont icofont-ui-check"></i>Xét nghiệm điện tâm đồ (ECG)</li>
                        <li><i class="icofont icofont-ui-check"></i>Siêu âm tim</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Book Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
        </div>
    </div>
</section>
<!--/ End Pricing Table -->



<!-- Start Blog Area -->
{{-- <section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Medical News.</h2>
                    <img src="{{('public/frontend/img/section-img.png')}}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{('public/frontend/img/blog1.jpg')}}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">22 Aug, 2020</div>
                            <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{('public/frontend/img/blog2.jpg')}}"  alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Jul, 2020</div>
                            <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{('public/frontend/img/blog3.jpg')}}"  alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">05 Jan, 2020</div>
                            <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
</section> --}}
<!-- End Blog Area -->

<!-- Start clients -->
{{-- <div class="clients overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel clients-slider">
                    <div class="single-clients">
                        <img src="img/client1.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client2.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client3.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client4.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client5.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client1.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client2.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client3.png" alt="#">
                    </div>
                    <div class="single-clients">
                        <img src="img/client4.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--/Ens clients -->

<!-- Start Appointment -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="font-family: Roboto;">Chúng tôi luôn sẵn sàng hỗ trợ bạn.<br> Đặt lịch hẹn ngay bây giờ.</h2>
                    <img src="{{('public/frontend/img/section-img.png')}}" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Tên">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Số điện thoại">
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Department</li>
                                        <li data-value="2" class="option">Cardiac Clinic</li>
                                        <li data-value="3" class="option">Neurology</li>
                                        <li data-value="4" class="option">Dentistry</li>
                                        <li data-value="5" class="option">Gastroenterology</li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Địa chỉ">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Bác sĩ</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Doctor</li>
                                        <li data-value="2" class="option">Dr. Akther Hossain</li>
                                        <li data-value="3" class="option">Dr. Dery Alex</li>
                                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Ngày" id="datepicker">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Viết lời nhắn tại đây....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Đặt lịch hẹn</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="{{('public/frontend/img/contact-img.png')}}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Appointment -->

<!-- Start Newsletter Area -->
{{-- <section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text ">
                    <h6>Đăng kí để nhận bản tin</h6>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-form ">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your email address'" required="" type="email">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
        </div>
    </div>
</section> --}}
<!-- /End Newsletter Area -->
@endsection
