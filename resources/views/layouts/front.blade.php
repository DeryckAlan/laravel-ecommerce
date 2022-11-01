<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- Styles -->

    <style>
        a{
            text-decoration: none !important;
        }
    </style>

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">

    <!-- fonts -->
    <link rel="preconnect" href="https:/fonts.gstatic.com">
    <link href="https://font.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- fonts -->

    {{--Google Fonts--}}
    <link rel="stylesheet" href="https://cdn.jsdeliver.net/npm/@fortawesome/fortawesome-free@5.15.3/css/fontawesome.min.css" integer="undefined" crossorigin="anonymous">

    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    
    <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap-material-design.min.js')}}"></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    @include('layouts.inc.frontnavbar')
    <div class="content">
        @yield('content')
    </div>

    <!-- Scripts -->    

    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>

    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    @if(session('status'))
        <script>
            swal("{{ session('status')}}");
        </script>
    @endif
    @yield('scripts')
</body>
</html>
