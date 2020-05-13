<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

    <script src ="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src ="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src ="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src ="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src ="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src ="{{ asset('js/main.js') }}"></script>
    <script src ="{{ asset('js/mixitup.min.js') }}"></script>
    <script src ="{{ asset('js/owl.carousel.min.js') }}"></script>

</head>
<body>
    header
    <hr />
        @yield("source")
    <hr >
    footer
</body>
</html>