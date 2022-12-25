<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <!-- {{-- Bootstrap Icons --}} -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- {{-- My Style --}} -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!--=============== LOGO ===============-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- {{-- Home CSS --}} -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/home.css') }}">

    <!-- {{-- Navbar CSS --}} -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/navbar.css') }}">


    <title> De Orologio {{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">

    <!-- {{-- List Produk --}} -->
    <link rel="stylesheet" type="text/css" href="{{asset('style/listproduk.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>{{ $title }}</title>
</head>

<body>

    @include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>


    <!--=============== FOOTER ===============-->
    <footer class="footer section">
        <p class="footer__copy">
            <a href="" target="_blank" class="footer__copy-link">&#169; Estungkara Team.
                All right reserved</a>
        </p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <!--=============== SCROLL REVEAL ===============-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    -->
</body>

</html>