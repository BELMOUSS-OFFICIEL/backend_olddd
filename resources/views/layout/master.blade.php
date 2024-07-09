<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./logo-removebg.png" rel="icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('bootstrap-icons-1.10.5/font/bootstrap-icons.min.css') }}" />
    @yield('css')
    <title>LuxeImmoKech | @yield('title') Admin</title>


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        @include('layout.siadBar')

        <div class="content">
            @include('layout.nevBare')

            @yield('content')
            @include('layout.footer')
        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>








    <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    @yield('js')
</body>

</html>
