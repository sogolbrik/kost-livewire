<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kost | {{ $title ?? 'Page' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('back-assets/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('back-assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    {{-- DataTable --}}
    <link href="{{ asset('back-assets/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('back-assets/assets/vendor/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/bootstrapku/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/sweetalert/sweetalert.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('back-assets/assets/css/style.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>

    <!-- ======= Header ======= -->
    @livewire('backend.template.navbar')

    <!-- ======= Sidebar ======= -->
    @livewire('backend.template.sidebar')


    <main id="main" class="main">

        <section class="section">
            {{ $slot }}
        </section>

    </main>

    <!-- ======= Footer ======= -->
    @livewire('backend.template.footer')


    <!-- Vendor JS Files -->
    <script src="{{ asset('back-assets/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/bootstrapku/js/bootstrap.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/fontawesome/js/all.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('back-assets/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('back-assets/assets/js/main.js') }}"></script>
    {{-- Sweetalert --}}
    @livewire('backend.template.sweetalert')
    @livewireScripts
</body>

</html>
