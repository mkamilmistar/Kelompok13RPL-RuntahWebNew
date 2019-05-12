@extends('Auth.layouts.master')
@section('title')
RuntahWeb | Register
@endsection
@section('content')

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="/"><b>Runtah</b>Web</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new volunteer </p>

            <form action="{{ route('register') }}" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <input required type="text" id="username" value="{{ old('username') }}" class="form-control" placeholder="Username" name="username" required autocomplete="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email" name="email" required autocomplete="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="password" id="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="password" id="password-confirm" class="form-control" placeholder="Retype password" name="password_confirmation" required autocomplete="new-password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"> {{ __('Register') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="/login" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
    @endsection