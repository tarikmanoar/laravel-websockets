<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- For Search Engine Meta Data  -->
        <meta name="description" content="Register to WS" />
        <meta name="keywords" content="" />
        <meta name="author" content="{{url('/')}}" />
        <title>@lang('Register') | WS </title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="" />

        <script src="{{ asset('auth/js/jquery-3.7.0.min.js') }}"></script>
        <!-- Main structure css file -->
        <link rel="stylesheet" href="{{asset('auth/css/style.css')}}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>
        <div class="container-fluid">
            <div class="row  justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
                    <!-- brand-logo start -->
                    <div class="brand-logo text-center">
                        <a href="{{url('/')}}">
                        <img src="{{asset('logo.png')}}" width="300" alt="brand-logo">
                        </a>
                    </div><!-- ./brand-logo -->
                    @yield('content')
                </div>
            </div> <!-- ./row -->
        </div> <!-- ./container -->

        <script src="{{asset('auth/js/custom.js')}}"></script>
    </body>

</html>
