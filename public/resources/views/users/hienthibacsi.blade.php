@extends('user_layout')
@section('content')
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Meet Our Qualified Doctors</h2>
                        <ul class="bread-list">
                            <li><a href="themes/medikit/index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Doctors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="team" class="team section single-page">
        <div class="container">
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-team">
                            <div class="t-head">
                                <img src="public/uploads/{{$doctor->avatar}}" alt="{{ $doctor->name }}">
                                <div class="t-icon">
                                    <a href="{{URL::to('/user-dat-lich')}}" class="btn">Đặt lịch</a>
                                </div>
                            </div>
                            <div class="t-bottom">
                                <p>{{ $doctor->specialization }}</p>
                                <h2><a href="{{ URL::to('/doctor-details/' . $doctor->id) }}">{{ $doctor->name }}</a></h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class>Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
                    </div>
                </div>
                <div class="col-lg-6  col-12">
                    <div class="subscribe-form ">
                        <form action="themes/medikit/mail/mail.html" method="get" target="_blank"
                            class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required
                                type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

