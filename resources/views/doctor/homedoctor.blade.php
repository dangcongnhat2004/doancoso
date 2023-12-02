@extends('doctor_layout')
@section('content_doctor')


<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="single_element">
                    <div class="quick_activity">
                        <div class="row">
                            <div class="col-12">
                                <div class="quick_activity_wrap">
                                    <div class="single_quick_activity d-flex">
                                        <div class="icon">
                                            <img src="public/frontend_admin/images/man.svg" alt="">
                                        </div>
                                        <div class="count_content">
                                            <h3><span class="counter">520</span> </h3>
                                            <p>Doctors</p>
                                        </div>
                                    </div>
                                    <div class="single_quick_activity d-flex">
                                        <div class="icon">
                                            <img src="public/frontend_admin/images/cap.svg" alt="">
                                        </div>
                                        <div class="count_content">
                                            <h3><span class="counter">6969</span> </h3>
                                            <p>Nurses</p>
                                        </div>
                                    </div>
                                    <div class="single_quick_activity d-flex">
                                        <div class="icon">
                                            <img src="public/frontend_admin/images/wheel.svg" alt="">
                                        </div>
                                        <div class="count_content">
                                            <h3><span class="counter">7510</span> </h3>
                                            <p>Patients</p>
                                        </div>
                                    </div>
                                    <div class="single_quick_activity d-flex">
                                        <div class="icon">
                                            <img src="public/frontend_admin/images/pharma.svg" alt="">
                                        </div>
                                        <div class="count_content">
                                            <h3><span class="counter">2110</span> </h3>
                                            <p>Pharmacusts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-12 col-xl-12">
                <div class="white_box mb_30 ">
                    <div class="box_header border_bottom_1px  ">
                        <div class="main-title">
                            <h3 class="mb_25">Hospital Survey</h3>
                        </div>
                    </div>
                    <div class="income_servay">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count_content">
                                    <h3>$ <span class="counter">305</span> </h3>
                                    <p>Today's Income</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count_content">
                                    <h3>$ <span class="counter">1005</span> </h3>
                                    <p>This Week's Income</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count_content">
                                    <h3>$ <span class="counter">5505</span> </h3>
                                    <p>This Month's Income</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count_content">
                                    <h3>$ <span class="counter">155615</span> </h3>
                                    <p>This Year's Income</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="bar_wev"></div>
                </div>
            </div> --}}

            {{-- <div class="col-xl-5 ">
                <div class="white_box card_height_50 mb_30">
                    <div class="box_header border_bottom_1px  ">
                        <div class="main-title">
                            <h3 class="mb_25">Total Recover Report</h3>
                        </div>
                    </div>
                    <div id="chart-7"></div>
                    <div class="row text-center mt-3">
                        <div class="col-sm-6">
                            <h6 class="heading_6 d-block">Last Month</h6>
                            <p class="m-0">358</p>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="heading_6 d-block">Current Month</h6>
                            <p class="m-0">194</p>
                        </div>
                    </div>
                </div>
                <div class="white_box card_height_50 mb_30">
                    <div class="box_header border_bottom_1px  ">
                        <div class="main-title">
                            <h3 class="mb_25">Total Death Report</h3>
                        </div>
                    </div>
                    <div id="chart-8"></div>
                    <div class="row text-center mt-3">
                        <div class="col-sm-6">
                            <h6 class="heading_6 d-block">Last Month</h6>
                            <p class="m-0">358</p>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="heading_6 d-block">Current Month</h6>
                            <p class="m-0">194</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-12">
                <div class="white_box card_height_100">
                    <div class="box_header border_bottom_1px  ">
                        <div class="main-title">
                            <h3 class="mb_25">Hospital Staff</h3>
                        </div>
                    </div>
                    <div class="staf_list_wrapper sraf_active owl-carousel">

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/1.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/2.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/3_1.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/4_1.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/5.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/1.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/2.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>

                        <div class="single_staf">
                            <div class="staf_thumb">
                                <img src="public/frontend_admin/images/3_1.png" alt="">
                            </div>
                            <h4>Dr. Sysla J Smith</h4>
                            <p>Doctor</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="white_box card_height_100">
                    <div class="box_header border_bottom_1px  ">
                        <div class="main-title">
                            <h3 class="mb_25">Recent Activity</h3>
                        </div>
                    </div>
                    <div class="Activity_timeline">
                        <ul>
                            <li>
                                <div class="activity_bell"></div>
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="activity_bell"></div>
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="activity_bell"></div>
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="activity_bell"></div>
                                <div class="activity_wrap">
                                    <h6>5 min ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                        scelerisque
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="white_box mb_30">
                    <div class="box_header border_bottom_1px  ">
                        <div class="main-title">
                            <h3 class="mb_25">Recent Activity</h3>
                        </div>
                    </div>
                    <div class="activity_progressbar">
                        <div class="single_progressbar">
                            <h6>USA</h6>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="single_progressbar">
                            <h6>AFRICA</h6>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="75"></span>
                            </div>
                        </div>
                        <div class="single_progressbar">
                            <h6>UK</h6>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="55"></span>
                            </div>
                        </div>
                        <div class="single_progressbar">
                            <h6>CANADA</h6>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="25"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
