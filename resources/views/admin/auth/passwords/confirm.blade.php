<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | FastBuy - Home and Kitchen Appliances | Mega Shop</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('home')}}"><b>FastBuy</b> - Home and Kitchen Appliances</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ __('Confirm Password') }}</p>

            <form method="POST" action="{{ route('admin.password.confirm') }}">
                @csrf
                <h4 class="login-title" hidden>{{ __('Please confirm your password before continuing.') }}</h4>
                @include('client.includes.alert')
                <div class="input-group mb-3">
                    <label for="password" hidden>{{ __('Password') }}</label>
                    <input id="password" type="password" placeholder="Password to confirm" class="mb-0 form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                <small class="text-danger"><strong>{{ $message }}</strong></small>
                @enderror
                <div class="row">
                    <!-- /.col -->
                    <div class="col">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Confirm Password') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mb-1">
                @if (Route::has('admin.password.request'))
                    <a href="{{ route('admin.password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

</body>
</html>
