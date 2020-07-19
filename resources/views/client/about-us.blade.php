@extends('client.layouts.client')
@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin Page Content Area -->
    <main class="page-content">
        <!-- About Page Area -->
        <div class="about-area section-padding-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-thumb fb-img-hover-effect">
                            <a href="#">
                                <img src="{{asset('assets/images/about-us/1.jpg')}}" alt="about image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2>WELCOME TO <span>FastBuy</span> WORLD</h2>
                            <p>We Provide Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae nisi fuga facilis, consequuntur, maiores eveniet voluptatum, omnis possimus temporibus aspernatur nobis animi in exercitationem vitae nulla! Adipisci ullam illum quisquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nulla veniam? Magni aliquid asperiores magnam. Veniam ex tenetur.</p>
                            <a href="{{route('shop.index')}}" class="fb-btn">
                                <span>SHOP NOW</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Page Area -->
        <!-- Team Area -->
        <div class="team-area section-padding-lg bg-grey pt-30">
            <div class="container">
                <div class="row justify-content-center pb-15">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <h6>BE THE HOURGLASS</h6>
                            <h3>OUR TEAM MEMBERS</h3>
                        </div>
                    </div>
                </div>
                <div class="row team-wrapper">

                    <!-- Single Team Member -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-team">
                            <div class="single-team-thumb">
                                <img src="{{asset('assets/images/about-us/team/1.jpg')}}" alt="team image">
                            </div>
                            <div class="single-team-content">
                                <h4>Oliver Bastin</h4>
                                <h6>Graphic Designer</h6>
                                <ul class="single-team-socialicons">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#/">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="#">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--// Single Team Member -->

                    <!-- Single Team Member -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-team">
                            <div class="single-team-thumb">
                                <img src="{{asset('assets/images/about-us/team/2.jpg')}}" alt="team image">
                            </div>
                            <div class="single-team-content">
                                <h4>Maria Mandy</h4>
                                <h6>Web Developer</h6>
                                <ul class="single-team-socialicons">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="#">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--// Single Team Member -->

                    <!-- Single Team Member -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-team">
                            <div class="single-team-thumb">
                                <img src="{{asset('assets/images/about-us/team/3.jpg')}}" alt="team image">
                            </div>
                            <div class="single-team-content">
                                <h4>Niki Adams</h4>
                                <h6>Content Writer</h6>
                                <ul class="single-team-socialicons">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#/">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="#">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--// Single Team Member -->

                </div>
            </div>
        </div>
        <!-- Team Area -->
        <!-- Skills Area -->
        <div class="skills-area section-padding-lg pt-25 pt-sm-0 pt-xs-0">
            <div class="container">
                <div class="section-title">
                    <h4>OUR SKILLS</h4>
                </div>

                <div class="row fb-progress-wrap">

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">90%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%; " aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <h6>WP DEVELOPING</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">90%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%; " aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <h6>WP DEVELOPING</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">80%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%; " aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <h6>PHP & JAVASCRIPT</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">80%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%; " aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <h6>PHP & JAVASCRIPT</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">95%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%; " aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <h6>HTML & CSS3</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">95%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%; " aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <h6>HTML & CSS3</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">75%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%; " aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <h6>WORDPRESS</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                    <!-- Single Progress Bar -->
                    <div class="col-lg-6">
                        <div class="fb-progress">
                            <span class="progress-bar-count">75%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%; " aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <h6>WORDPRESS</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Single Progress Bar -->

                </div>
            </div>
        </div>
        <!-- Skills Area -->
    </main>
    <!--Page Content Area End Here -->
@endsection
