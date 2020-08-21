@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.includes.alert')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid"
                                         src="{{ asset('storage/'.config('settings.site_logo'))??"../../dist/img/user4-128x128.jpg"}}"
                                         alt="{{ config('app.name')??config('settings.site_name') }}">
                                </div>

                                <h2 class="text-md text-center p-1">{{ config('settings.site_name')??config('app.name') }}</h2>

                                <ul class="nav flex-column nav-pills">
                                    <li class="nav-item">
                                        <a href="#general" class="nav-link active" data-toggle="tab"><b>General</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#site-logo" class="nav-link" data-toggle="tab"><b>Site Logo</b></a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="#footer-seo" class="nav-link" data-toggle="tab">  <b>Footer & SEO</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#social-links" class="nav-link" data-toggle="tab">  <b>Social Links</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#analytics" class="nav-link" data-toggle="tab">  <b>Analytics</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#payments" class="nav-link" data-toggle="tab">  <b>Payments</b></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-pink card-outline">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="general">
                                        <!-- form -->
                                        <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                                            @csrf
                                            <h3 class="tile-title">General Settings</h3>
                                            <hr>
                                            <div class="tile-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="site_name">Site Name</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter site name"
                                                        id="site_name"
                                                        name="site_name"
                                                        value="{{ config('settings.site_name') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="site_title">Site Title</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter site title"
                                                        id="site_title"
                                                        name="site_title"
                                                        value="{{ config('settings.site_title') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="site_title">Site Author</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter site author"
                                                        id="site_author"
                                                        name="site_author"
                                                        value="{{ config('settings.site_author') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="default_email_address">Default Email Address</label>
                                                    <input
                                                        class="form-control"
                                                        type="email"
                                                        placeholder="Enter store default email address"
                                                        id="default_email_address"
                                                        name="default_email_address"
                                                        value="{{ config('settings.default_email_address') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="currency_code">Currency Code</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter store currency code"
                                                        id="currency_code"
                                                        name="currency_code"
                                                        value="{{ config('settings.currency_code') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="currency_symbol">Currency Symbol</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter store currency symbol"
                                                        id="currency_symbol"
                                                        name="currency_symbol"
                                                        value="{{ config('settings.currency_symbol') }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="tile-footer">
                                                <div class="row d-print-none mt-2">
                                                    <div class="col-12 text-right">
                                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.form -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="site-logo">
                                        <!-- form -->
                                        <form action="{{ route('admin.settings.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                            @csrf
                                            <h3 class="tile-title">Site Logo</h3>
                                            <hr>
                                            <div class="tile-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        @if (config('settings.site_logo') != null)
                                                            <img src="{{ asset('storage/'.config('settings.site_logo')) }}" id="logoImg" style="width: 100px; height: auto;">
                                                        @else
                                                            <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                                                        @endif
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="form-group">
                                                            <label class="control-label">Site Logo</label>
                                                            <input class="form-control p-1" type="file" name="site_logo" onchange="loadFile(event,'logoImg')"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-3">
                                                        @if (config('settings.site_favicon') != null)
                                                            <img src="{{ asset('storage/'.config('settings.site_favicon')) }}" id="faviconImg" style="width: 80px; height: auto;">
                                                        @else
                                                            <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="faviconImg" style="width: 80px; height: auto;">
                                                        @endif
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="form-group">
                                                            <label class="control-label">Site Favicon</label>
                                                            <input class="form-control p-1" type="file" name="site_favicon" onchange="loadFile(event,'faviconImg')"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tile-footer">
                                                <div class="row d-print-none mt-2">
                                                    <div class="col-12 text-right">
                                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.form -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="footer-seo">
                                        <!-- form -->
                                        <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                                            @csrf
                                            <h3 class="tile-title">Footer &amp; SEO</h3>
                                            <hr>
                                            <div class="tile-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="footer_copyright_text">Footer Copyright Text</label>
                                                    <textarea
                                                        class="form-control"
                                                        rows="4"
                                                        placeholder="Enter footer copyright text"
                                                        id="footer_copyright_text"
                                                        name="footer_copyright_text"
                                                    >{{ config('settings.footer_copyright_text') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="seo_meta_title">SEO Meta Title</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter seo meta title for store"
                                                        id="seo_meta_title"
                                                        name="seo_meta_title"
                                                        value="{{ config('settings.seo_meta_title') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="seo_meta_description">SEO Meta Description</label>
                                                    <textarea
                                                        class="form-control"
                                                        rows="4"
                                                        placeholder="Enter seo meta description for store"
                                                        id="seo_meta_description"
                                                        name="seo_meta_description"
                                                    >{{ config('settings.seo_meta_description') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="seo_meta_description">SEO Meta Keywords</label>
                                                    <textarea
                                                        class="form-control"
                                                        rows="4"
                                                        placeholder="Enter seo meta keywords for store"
                                                        id="seo_meta_keywords"
                                                        name="seo_meta_keywords"
                                                    >{{ config('settings.seo_meta_keywords') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="tile-footer">
                                                <div class="row d-print-none mt-2">
                                                    <div class="col-12 text-right">
                                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.form -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="social-links">
                                        <!-- form -->
                                        <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                                            @csrf
                                            <h3 class="tile-title">Social Links</h3>
                                            <hr>
                                            <div class="tile-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="social_facebook">Facebook Profile</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter facebook profile link"
                                                        id="social_facebook"
                                                        name="social_facebook"
                                                        value="{{ config('settings.social_facebook') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="social_twitter">Twitter Profile</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter twitter profile link"
                                                        id="social_twitter"
                                                        name="social_twitter"
                                                        value="{{ config('settings.social_twitter') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="social_instagram">Instagram Profile</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter instagram profile link"
                                                        id="social_instagram"
                                                        name="social_instagram"
                                                        value="{{ config('settings.social_instagram') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="social_linkedin">LinkedIn Profile</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter linkedin profile link"
                                                        id="social_linkedin"
                                                        name="social_linkedin"
                                                        value="{{ config('settings.social_linkedin') }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="tile-footer">
                                                <div class="row d-print-none mt-2">
                                                    <div class="col-12 text-right">
                                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.form -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="analytics">
                                        <!-- form -->
                                        <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                                            @csrf
                                            <h3 class="tile-title">Analytics</h3>
                                            <hr>
                                            <div class="tile-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="google_analytics">Google Analytics Code</label>
                                                    <textarea
                                                        class="form-control"
                                                        rows="4"
                                                        placeholder="Enter google analytics code"
                                                        id="google_analytics"
                                                        name="google_analytics"
                                                    >{!! Config::get('settings.google_analytics') !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="facebook_pixels">Facebook Pixel Code</label>
                                                    <textarea
                                                        class="form-control"
                                                        rows="4"
                                                        placeholder="Enter facebook pixel code"
                                                        id="facebook_pixels"
                                                        name="facebook_pixels"
                                                    >{{ Config::get('settings.facebook_pixels') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="tile-footer">
                                                <div class="row d-print-none mt-2">
                                                    <div class="col-12 text-right">
                                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.form -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="payments">
                                        <!-- form -->
                                        <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
                                            @csrf
                                            <h3 class="tile-title">Payment Settings</h3>
                                            <hr>
                                            <div class="tile-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="stripe_payment_method">Stripe Payment Method</label>
                                                    <select name="stripe_payment_method" id="stripe_payment_method" class="form-control">
                                                        <option value="1" {{ (config('settings.stripe_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                                                        <option value="0" {{ (config('settings.stripe_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="stripe_key">Key</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter stripe key"
                                                        id="stripe_key"
                                                        name="stripe_key"
                                                        value="{{ config('settings.stripe_key') }}"
                                                    />
                                                </div>
                                                <div class="form-group pb-2">
                                                    <label class="control-label" for="stripe_secret_key">Secret Key</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter stripe secret key"
                                                        id="stripe_secret_key"
                                                        name="stripe_secret_key"
                                                        value="{{ config('settings.stripe_secret_key') }}"
                                                    />
                                                </div>
                                                <hr>
                                                <div class="form-group pt-2">
                                                    <label class="control-label" for="paypal_payment_method">PayPal Payment Method</label>
                                                    <select name="paypal_payment_method" id="paypal_payment_method" class="form-control">
                                                        <option value="1" {{ (config('settings.paypal_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                                                        <option value="0" {{ (config('settings.paypal_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="paypal_client_id">Client ID</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter paypal client Id"
                                                        id="paypal_client_id"
                                                        name="paypal_client_id"
                                                        value="{{ config('settings.paypal_client_id') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="paypal_secret_id">Secret ID</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter paypal secret id"
                                                        id="paypal_secret_id"
                                                        name="paypal_secret_id"
                                                        value="{{ config('settings.paypal_secret_id') }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="tile-footer">
                                                <div class="row d-print-none mt-2">
                                                    <div class="col-12 text-right">
                                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.form -->
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
