@extends('client.layouts.client')
@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin FB's Main Blog Page Area -->
    <div class="fb-main-blog-page pt-60 pb-40 pb-sm-15 pb-xs-15">
        <div class="container">
            <div class="row">
                <!-- Begin FB's Blog Sidebar Area -->
                <div class="col-lg-3 order-lg-2 order-2">
                    <div class="fb-blog-sidebar-wrapper">
                        <div class="fb-blog-sidebar">
                            <div class="fb-sidebar-search-form">
                                <form action="#">
                                    <input type="text" class="fb-search-field" placeholder="search here">
                                    <button type="submit" class="fb-search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="fb-blog-sidebar pt-25">
                            <h4 class="fb-blog-sidebar-title">Categories</h4>
                            <ul class="fb-blog-archive">
                                <li><a href="#">Manga (10)</a></li>
                                <li><a href="#">Gamepad (08)</a></li>
                                <li><a href="#">Furniture (07)</a></li>
                                <li><a href="#">Smartphone (14)</a></li>
                                <li><a href="#">Cameras (10)</a></li>
                                <li><a href="#">Headphone (06)</a></li>
                            </ul>
                        </div>
                        <div class="fb-blog-sidebar">
                            <h4 class="fb-blog-sidebar-title">Blog Archives</h4>
                            <ul class="fb-blog-archive">
                                <li><a href="#">January (10)</a></li>
                                <li><a href="#">February (08)</a></li>
                                <li><a href="#">March (07)</a></li>
                                <li><a href="#">April (14)</a></li>
                                <li><a href="#">May (10)</a></li>
                                <li><a href="#">June (06)</a></li>
                            </ul>
                        </div>
                        <div class="fb-blog-sidebar">
                            <h4 class="fb-blog-sidebar-title">Recent Post</h4>
                            <div class="fb-recent-post pb-30">
                                <div class="fb-recent-post-thumb">
                                    <a href="{{route('blog-details')}}">
                                        <img class="img-full" src="{{asset('assets/images/blog/small-size/1.jpg')}}" alt="FB's Product Image">
                                    </a>
                                </div>
                                <div class="fb-recent-post-des">
                                    <span><a href="{{route('blog-details')}}">First Blog Post</a></span>
                                    <span class="fb-post-date">10.10.2019</span>
                                </div>
                            </div>
                            <div class="fb-recent-post pb-30">
                                <div class="fb-recent-post-thumb">
                                    <a href="{{route('blog-details')}}">
                                        <img class="img-full" src="{{asset('assets/images/blog/small-size/2.jpg')}}" alt="FB's Product Image">
                                    </a>
                                </div>
                                <div class="fb-recent-post-des">
                                    <span><a href="{{route('blog-details')}}">First Blog Post</a></span>
                                    <span class="fb-post-date">10.10.2019</span>
                                </div>
                            </div>
                            <div class="fb-recent-post pb-25">
                                <div class="fb-recent-post-thumb">
                                    <a href="{{route('blog-details')}}">
                                        <img class="img-full" src="{{asset('assets/images/blog/small-size/3.jpg')}}" alt="FB's Product Image">
                                    </a>
                                </div>
                                <div class="fb-recent-post-des">
                                    <span><a href="{{route('blog-details')}}">First Blog Post</a></span>
                                    <span class="fb-post-date">10.10.2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="fb-blog-sidebar">
                            <h4 class="fb-blog-sidebar-title">Tags</h4>
                            <ul class="fb-blog-tags pt-10">
                                <li><a href="#">VR</a></li>
                                <li><a href="#">iPad Pro</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">PS4</a></li>
                                <li><a href="#">Manga</a></li>
                                <li><a href="#">Comics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FB's Blog Sidebar Area End Here -->
                <!-- Begin FB's Main Content Area -->
                <div class="col-lg-9 order-lg-1 order-1">
                    <div class="row fb-main-content">
                        <div class="col-lg-12">
                            <div class="fb-blog-single-item mb-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fb-blog-banner">
                                            <a href="{{route('blog-details')}}"><img class="img-full" src="{{asset('assets/images/blog/medium-size/1.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fb-blog-content">
                                            <div class="fb-blog-details">
                                                <h3 class="fb-blog-heading pt-xs-25 pt-sm-25"><a href="{{route('blog-details')}}">blog image post</a></h3>
                                                <div class="fb-blog-meta">
                                                    <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                                    <a class="comment" href="#"><i class="fa fa-comment-o"></i> 7 comment</a>
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i>Journey 01, 2019</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class="read-more" href="{{route('blog-details')}}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="fb-blog-single-item mb-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fb-blog-gallery-slider slick-dot-style">
                                            <div class="fb-blog-banner">
                                                <a href="{{route('blog-details')}}"><img class="img-full" src="{{asset('assets/images/blog/medium-size/3.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="fb-blog-banner">
                                                <a href="{{route('blog-details')}}"><img class="img-full" src="{{asset('assets/images/blog/medium-size/2.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="fb-blog-banner">
                                                <a href="{{route('blog-details')}}"><img class="img-full" src="{{asset('assets/images/blog/medium-size/1.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fb-blog-content">
                                            <div class="fb-blog-details">
                                                <h3 class="fb-blog-heading pt-xs-25 pt-sm-25"><a href="{{route('blog-details')}}">blog gallery post</a></h3>
                                                <div class="fb-blog-meta">
                                                    <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                                    <a class="comment" href="#"><i class="fa fa-comment-o"></i> 7 comment</a>
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i>Journey 01, 2019</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class="read-more" href="{{route('blog-details')}}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="fb-blog-single-item mb-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fb-blog-banner embed-responsive embed-responsive-16by9">
                                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/89701860&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fb-blog-content">
                                            <div class="fb-blog-details">
                                                <h3 class="fb-blog-heading pt-xs-25 pt-sm-25"><a href="{{route('blog-details')}}">blog audio post</a></h3>
                                                <div class="fb-blog-meta">
                                                    <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                                    <a class="comment" href="#"><i class="fa fa-comment-o"></i> 7 comment</a>
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i>Journey 01, 2019</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class="read-more" href="{{route('blog-details')}}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="fb-blog-single-item mb-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fb-blog-banner embed-responsive embed-responsive-16by9">
                                            <iframe src="https://www.youtube.com/embed/DR2c266yWEA" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fb-blog-content">
                                            <div class="fb-blog-details">
                                                <h3 class="fb-blog-heading pt-xs-25 pt-sm-25"><a href="{{route('blog-details')}}">blog video post</a></h3>
                                                <div class="fb-blog-meta">
                                                    <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                                    <a class="comment" href="#"><i class="fa fa-comment-o"></i> 7 comment</a>
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i>Journey 01, 2019</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class="read-more" href="{{route('blog-details')}}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="fb-blog-single-item mb-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fb-blog-banner">
                                            <a href="{{route('blog-details')}}"><img class="img-full" src="{{asset('assets/images/blog/medium-size/5.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fb-blog-content">
                                            <div class="fb-blog-details">
                                                <h3 class="fb-blog-heading pt-xs-25 pt-sm-25"><a href="{{route('blog-details')}}">This Is Fifth Post For XipBlog</a></h3>
                                                <div class="fb-blog-meta">
                                                    <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                                    <a class="comment" href="#"><i class="fa fa-comment-o"></i> 7 comment</a>
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i>Journey 01, 2019</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class="read-more" href="{{route('blog-details')}}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="fb-blog-single-item mb-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fb-blog-banner">
                                            <a href="{{route('blog-details')}}"><img class="img-full" src="{{asset('assets/images/blog/medium-size/6.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fb-blog-content">
                                            <div class="fb-blog-details">
                                                <h3 class="fb-blog-heading pt-xs-25 pt-sm-25"><a href="{{route('blog-details')}}">This Is Second Post For XipBlog</a></h3>
                                                <div class="fb-blog-meta">
                                                    <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                                    <a class="comment" href="#"><i class="fa fa-comment-o"></i> 7 comment</a>
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i>Journey 01, 2019</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                                <a class="read-more" href="{{route('blog-details')}}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Begin FB's Pagination Area -->
                        <div class="col-lg-12">
                            <div class="fb-paginatoin-area text-center pt-25">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="fb-pagination-box">
                                            <li><a class="Previous" href="#">Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a class="Next" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FB's Pagination End Here Area -->
                    </div>
                </div>
                <!-- FB's Main Content Area End Here -->
            </div>
        </div>
    </div>
    <!-- FB's Main Blog Page Area End Here -->
@endsection
