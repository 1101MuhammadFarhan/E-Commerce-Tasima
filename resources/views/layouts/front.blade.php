<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      TaSiMa
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset ('admin/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset ('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('admin/css/paper-dashboard.css') }}" rel="stylesheet" />


</head>
<body>
    <div class="wrapper">
        @include('layouts.frontend.sidebar')

        <div class="main-panel">
            @include('layouts.frontend.frontnav')

            <div class="content">
                @yield('content')

            </div>
            @include('layouts.frontend.frontfooter')
        </div>
    </div>

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('admin/js/core/jquery.min.js') }}" ></script>
    <script src="{{ asset('frontend/js/custom.js') }}" ></script>

    <script src="{{ asset('admin/js/core/popper.min.js') }}" ></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}" ></script>
    <!-- Chart JS -->
    <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}" ></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}" ></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/js/plugins/paper-dashboard.min.js') }}"></script>
    @yield('scripts')

</body>



</html>
