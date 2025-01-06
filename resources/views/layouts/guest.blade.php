<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('./admin/img/logo1.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/vendor/quill/styles.css') }}" rel="stylesheet">
</head>

<body>
        <main>
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <!---- Logo --->
                            @yield ('main')
                            <!---- Content --->
                            <div class="credits">
                                Copyright &copy; 2024 <a href="https://bootstrapmade.com/">Kenangan Rentcar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/apexcharts/chart.umd.js') }}"></script>
        <script src="{{ asset('assets/vendor/apexcharts/echarts.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/apexcharts/quill.js')}}"></script>
        <script src="{{ asset('assets/vendor/apexcharts/simple-datatables.js')}}"></script>
        <script src="{{ asset('assets/vendor/apexcharts/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/apexcharts/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/vendor/apexcharts/main.js') }}"></script>
</body>

</html>
