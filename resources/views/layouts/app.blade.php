<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title Page-->
    <title>@yield('title')</title>
    {{-- customize css link  --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('extra_css')
</head>
<body>
    <div id="app">
        <div class="header-menu">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between">
                        <a href=""></a>
                        <h5>@yield('title')</h5>
                        <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4">
            @yield('content')
        </div>
        <div class="bottom-menu">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between">
                        <a href="">
                            <i class="fa-solid fa-home"></i>
                            <p class="mb-0">Home</p>
                        </a>
                        <a href="">
                            <i class="fa-solid fa-home"></i>
                            <p class="mb-0">Home</p>
                        </a>
                        <a href="">
                            <i class="fa-solid fa-home"></i>
                            <p class="mb-0">Home</p>
                        </a>
                        <a href="">
                            <i class="fa-solid fa-home"></i>
                            <p class="mb-0">Home</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
@yield('scripts')
</body>
</html>
