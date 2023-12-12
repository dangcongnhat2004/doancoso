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
                                            <h3><span class="counter"></span> </h3>
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



        </div>
    </div>
</div>




@endsection
