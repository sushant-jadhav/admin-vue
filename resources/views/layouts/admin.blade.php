<!DOCTYPE html>
<html dir="ltr" lang="en" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/favicon.png')}}">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/admin/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin/css/style.min.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
<![endif]-->
</head>

<body >
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" class="app">
        <Admin></Admin>
        
    </div>
   
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/admin/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('assets/admin/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/admin/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/admin/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{ asset('assets/admin/js/pages/dashboards/dashboard1.js')}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets/admin/libs/flot/excanvas.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/pages/chart/chart-page-init.js')}}"></script>
    <script src="{{ asset('assets/admin/extra-libs/multicheck/jquery.multicheck.js')}}"></script>

</body>

</html>