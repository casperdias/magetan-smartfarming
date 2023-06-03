<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- CSS --}}
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
     <link href="{{ asset ('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="{{ asset ('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
     <link href="{{ asset ('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
     <link href="{{ asset ('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
     
     <title>Refugia Smart Farm</title>
</head>
<body>
    
     @yield('content')
     
     <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>