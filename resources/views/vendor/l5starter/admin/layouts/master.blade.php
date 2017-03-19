<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('settings.headerTitleText') }}</title>
    <!-- Bootstrap 3.3.6 -->
    <link href="{{ asset('assets/adminLTE/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/css/AdminLTE.min.css') }}">
    <!-- DateTime Picker -->
    <link href="{{ asset('assets/adminLTE/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/css/admin.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    @include('l5starter::admin.partials.head')

    @include('l5starter::admin.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>
        <!-- Content Wrapper. Contains page content -->
        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; 2016 <a href="http://www.srisattha.com">Wiwat Srisattha</a>.</strong> All rights reserved.
    </footer>
</div>

<!-- jQuery 2.2.3 -->
<script src="{{ asset('assets/adminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('assets/adminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/adminLTE/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/adminLTE/js/app.min.js') }}"></script>
<!-- DateTime Picker -->
<script src="{{ asset('assets/adminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('assets/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- Custom Js -->
@yield('javascript')
<script>
    $('#flash-overlay-modal').modal();
    $("#datepicker").datepicker({format: '{{ config('settings.datepickerFormat') }}', autoclose: true});
    @yield('custom_js')
</script>
</body>
</html>