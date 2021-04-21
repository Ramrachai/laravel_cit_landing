<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc."
    />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- GOOGLE FONTS -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
      rel="stylesheet"
    />
    <link
      href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css"
      rel="stylesheet"
    />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/css/simplebar.css') }}" rel="stylesheet" />
    <!-- <link href="css/nprogress.css" rel="stylesheet" /> -->

    <!-- No Extra plugin used -->
    <!-- <link href='css/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='css/daterangepicker.css' rel='stylesheet'> -->
    <link href="{{ asset('backend/css/toastr.min.css') }}" rel="stylesheet" />
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- SLEEK CSS -->
    <link href="{{ asset('backend/css/sleek.css') }}" id="sleek-css" rel="stylesheet"  />
    <link href="{{ asset('css/app.css') }}" id="sleek-css" rel="stylesheet"  />

    <!-- FAVICON -->
    <link href="{{ asset('backend/images/favicon.png') }}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script src="assets/plugins/nprogress/nprogress.js"></script> -->
    <!-- <script src="js/nprogress.js"></script> -->
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <!-- <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script> -->

    {{-- <div id="toaster"></div> --}}

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
       @yield('content')
    </div>
    <!-- End Wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/js/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/sleek.bundle.js') }}"></script>
    <!-- 
    <script src='js/Chart.min.js'></script>
    <script src='js/chart.js'></script>

    <script src='js/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='js/jquery-jvectormap-world-mill.js'></script>
    <script src='js/vector-map.js'></script>

    <script src='js/moment.min.js'></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/date-range.js'></script> -->


  </body>
</html>
