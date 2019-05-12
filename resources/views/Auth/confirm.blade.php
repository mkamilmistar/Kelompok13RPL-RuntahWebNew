@extends('Auth.layouts.master')
@section('title')
RuntahWeb | Confrim
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">

    </div>
</div>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>Runtah</b>Web</a>
        </div>

        <div class="login-box-body">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                You are logged in!
                Go to homepage <a href="/">here!</a>
            </div>
        </div>
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