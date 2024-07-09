<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('bootstrap-icons-1.10.5/font/bootstrap-icons.min.css') }}" />
    @yield('css')
    <title>Document</title>


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="container-fluid pt-4 px-4">
            <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                <div class="col-md-6 text-center p-4">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1 fw-bold">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website!
                        Maybe go to our home page or try to use a search?</p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('OK') }}
                                            </a>
                    {{-- <a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

@yield('js')
</body>

</html>

