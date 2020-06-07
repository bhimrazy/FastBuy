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
                            <li class="active">Blog Details Right Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin FB's Main Blog Page Area -->
    <div class="fb-main-blog-page fb-main-blog-details-page pt-60 pb-30 pb-sm-45 pb-xs-45">
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
                                <li><a href="#">Laptops (10)</a></li>
                                <li><a href="#">TV & Audio (08)</a></li>
                                <li><a href="#">reach (07)</a></li>
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
                                    <a href="#">
                                        <img class="img-full" src="{{asset('assets/images/blog/small-size/3.jpg')}}" alt="FB's Product Image">
                                    </a>
                                </div>
                                <div class="fb-recent-post-des">
                                    <span><a href="#">First Blog Post</a></span>
                                    <span class="fb-post-date">10.01.2019</span>
                                </div>
                            </div>
                            <div class="fb-recent-post pb-30">
                                <div class="fb-recent-post-thumb">
                                    <a href="#">
                                        <img class="img-full" src="{{asset('assets/images/blog/small-size/2.jpg')}}" alt="FB's Product Image">
                                    </a>
                                </div>
                                <div class="fb-recent-post-des">
                                    <span><a href="#">First Blog Post</a></span>
                                    <span class="fb-post-date">10.01.2019</span>
                                </div>
                            </div>
                            <div class="fb-recent-post pb-30">
                                <div class="fb-recent-post-thumb">
                                    <a href="#">
                                        <img class="img-full" src="{{asset('assets/images/blog/small-size/1.jpg')}}" alt="FB's Product Image">
                                    </a>
                                </div>
                                <div class="fb-recent-post-des">
                                    <span><a href="#">First Blog Post</a></span>
                                    <span class="fb-post-date">10.01.2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="fb-blog-sidebar">
                            <h4 class="fb-blog-sidebar-title">Tags</h4>
                            <ul class="fb-blog-tags">
                                <li><a href="#">Gaming</a></li>
                                <li><a href="#">Chromebook</a></li>
                                <li><a href="#">Refurbished</a></li>
                                <li><a href="#">Touchscreen</a></li>
                                <li><a href="#">Ultrabooks</a></li>
                                <li><a href="#">Sound Cards</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FB's Blog Sidebar Area End Here -->
                <!-- Begin FB's Main Content Area -->
                <div class="col-lg-9 order-lg-1 order-1">
                    <div class="row fb-main-content">
                        <div class="col-lg-12">
                            <div class="fb-blog-single-item pb-30">
                                <div class="fb-blog-banner">
                                    <a href="#"><img class="img-full" src="{{asset('assets/images/blog/large-size/1.jpg')}}" alt=""></a>
                                </div>
                                <div class="fb-blog-content">
                                    <div class="fb-blog-details">
                                        <h3 class="fb-blog-heading pt-25"><a href="#">This is Secound Post For XipBlog</a></h3>
                                        <div class="fb-blog-meta">
                                            <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                            <a class="comment" href="#"><i class="fa fa-comment-o"></i>7 comment</a>
                                            <a class="post-time" href="#"><i class="fa fa-calendar"></i> Journey 01, 2019</a>
                                        </div>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                        <!-- Begin Blog Blockquote Area -->
                                        <div class="fb-blog-blockquote">
                                            <blockquote>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                            </blockquote>
                                        </div>
                                        <!-- Blog Blockquote Area End Here -->
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum </p>
                                        <div class="fb-tag-line">
                                            <h4>tag:</h4>
                                            <a href="#">Headphones</a>,
                                            <a href="#">Video Games</a>,
                                            <a href="#">Wireless Speakers</a>
                                        </div>
                                        <div class="fb-blog-sharing text-center pt-30">
                                            <h4>share this post:</h4>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Begin FB's Blog Comment Section -->
                            <div class="fb-comment-section">
                                <h3>3 comment</h3>
                                <ul>
                                    <li>
                                        <div class="author-avatar pt-15">
                                            <img src="{{asset('assets/images/blog/small-size/user.png')}}" alt="User">
                                        </div>
                                        <div class="comment-body pl-15">
                                            <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                            <h5 class="comment-author pt-15">admin</h5>
                                            <div class="comment-post-date">
                                                20 Jan, 2019 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                    <li class="comment-children">
                                        <div class="author-avatar pt-15">
                                            <img src="{{asset('assets/images/blog/small-size/admin.png')}}" alt="Admin">
                                        </div>
                                        <div class="comment-body pl-15">
                                            <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                            <h5 class="comment-author pt-15">admin</h5>
                                            <div class="comment-post-date">
                                                20 Jan, 2019 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author-avatar pt-15">
                                            <img src="{{asset('assets/images/blog/small-size/user.png')}}" alt="">
                                        </div>
                                        <div class="comment-body pl-15">
                                            <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                            <h5 class="comment-author pt-15">User</h5>
                                            <div class="comment-post-date">
                                                20 Jan, 2019 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- FB's Blog Comment Section End Here -->
                            <!-- Begin Blog comment Box Area -->
                            <div class="fb-blog-comment-wrapper">
                                <h3>leave a reply</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form action="#">
                                    <div class="comment-post-box">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label>comment</label>
                                                <textarea name="commnet" placeholder="Write a comment"></textarea>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                                                <label>Name</label>
                                                <input type="text" class="coment-field" placeholder="Name">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                                                <label>Email</label>
                                                <input type="text" class="coment-field" placeholder="Email">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20">
                                                <label>Website</label>
                                                <input type="text" class="coment-field" placeholder="Website">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="coment-btn pt-30 pb-sm-30 pb-xs-30 f-left">
                                                    <input class="fb-btn-2" type="submit" name="submit" value="post comment">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Blog comment Box Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- FB's Main Content Area End Here -->
            </div>
        </div>
    </div>
    <!-- FB's Main Blog Page Area End Here -->
@endsection
