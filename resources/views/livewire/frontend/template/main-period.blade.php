<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Kost-18 | {{ $title ?? 'Page' }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('back-assets/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('back-assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('back-assets/assets/vendor/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('front-assets/assets/css/main.css') }}" rel="stylesheet">
    <!-- DatePicker -->
    <link href="{{ asset('front-assets/assets/js/date-range/dist/daterangepicker.min.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="index-page">
    
    <main class="main">

        {{ $slot }}

    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('front-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front-assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('front-assets/assets/js/main.js') }}"></script>
    <script src="{{ asset('front-assets/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('front-assets/assets/js/moment.js') }}"></script>

    <!-- DatePicker -->
    <script src="{{ asset('front-assets/assets/js/date-range/dist/jquery.daterangepicker.min.js') }}"></script>

    {{-- Sweetalert --}}
    <script src="{{ asset('back-assets/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>

    @stack('script')

    {{-- Success --}}
    @if (session('success-message'))
        <script>
            Swal.fire({
                position: "top",
                title: "{{ session('success-message') }}",
                icon: "success",
                showConfirmButton: false,
                toast: true,
                timer: 2500,
            });
        </script>
    @endif

    {{-- Error --}}
    @if (session('error-message'))
        <script>
            Swal.fire({
                position: "top",
                title: "{{ session('error-message') }}",
                icon: "error",
                showConfirmButton: false,
                toast: true,
                timer: 2500,
            });
        </script>
    @endif

    {{-- Info --}}
    @if (session('info-message'))
        <script>
            Swal.fire({
                position: "top",
                title: "{{ session('info-message') }}",
                icon: "info",
                showConfirmButton: false,
                toast: true,
                timer: 2500,
            });
        </script>
    @endif

    @livewireScripts

</body>

</html>
