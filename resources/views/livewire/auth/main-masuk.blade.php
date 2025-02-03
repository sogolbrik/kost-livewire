<!DOCTYPE html>
<html>

<head>
    <title>Kost - {{ $title ?? 'Page' }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('back-assets/assets/css/auth.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="{{ asset('back-assetss/assets/vendor/sweetalert/sweetalert.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/bootstrapku/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('back-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @livewireStyles
</head>

<body>
    <img class="wave" src="{{ asset('back-assets/assets/img/wave.png') }}">
    <div class="container">
        <div class="img">
            <img src="{{ asset('back-assets/assets/img/bg.svg') }}">
        </div>
        <div class="login-content">
            {{ $slot }}
        </div>
    </div>

    <script src="{{ asset('back-assets/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-asset/assets/js/auth.js') }}"></script>
    <script src="{{ asset('back-assets/assets/vendor/bootstrapku/js/bootstrap.js') }}"></script>
    <script src="{{ asset('front-assets/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('front-assets/assets/js/moment.js') }}"></script>

    {{-- Success --}}
    @if (session('success-message'))
        <script>
            Swal.fire({
                position: "top-end",
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
                position: "top-end",
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
                position: "top-end",
                title: "{{ session('info-message') }}",
                icon: "info",
                showConfirmButton: false,
                toast: true,
                timer: 2500,
            });
        </script>
    @endif

    {{-- Error --}}
    @if ($errors->any())
        <script>
            Swal.fire({
                position: "top-end",
                title: "An error occurred, please try again!",
                icon: "error",
                toast: true,
                showConfirmButton: false,
                timer: 2500,
            });
        </script>
    @endif

    {{-- confirm deletion --}}
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to return them!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

    {{-- Confirm Inactive --}}
    <script>
        function confirmInactive(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "Your account will be deactivated",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Inactive'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('inactive-form-' + id).submit();
                }
            });
        }
    </script>

    @livewireScripts
</body>

</html>
