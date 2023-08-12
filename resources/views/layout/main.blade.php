<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - AlliumCare</title>


    <!-- Favicons -->
    <link href="{{ asset('flex-start/img/logo.png') }}" rel="icon">
    <link href="{{ asset('flex-start/img/logo.png') }}" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mazer/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/vendors/sweetalert2/sweetalert2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/vendors/simple-datatables/style.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('layout.sidebar')
        <div id="main" class="layout-navbar">
            <header class="mb-3">
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            </ul>
                            @if (auth()->check())
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                        <div class="user-menu d-flex">
                                            <div class="user-name text-end me-3">
                                                <h6 class="mb-0 text-gray-600">{{ auth()->user()->name }}</h6>
                                                <p class="mb-0 text-sm text-gray-600">{{ auth()->user()->level }}</p>
                                            </div>
                                            <div class="user-img d-flex align-items-center">
                                                <div class="avatar bg-primary">
                                                    <span
                                                        class="avatar-content">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Hello,
                                                {{ explode(' ', auth()->user()->name)[0] }}</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('profile') }}"><i
                                                    class="icon-mid bi bi-person me-2"></i> My
                                                Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                                    class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content" style="padding-top: 0px;">
                @yield('container')
                {{-- <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="http://ahmadsaugi.com">A. Saugi</a></p>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('mazer/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('mazer/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ asset('mazer/vendors/ckeditor/ckeditor.js') }}"></script>

    <script>
        // CKEditor Detail Hama
        ClassicEditor
            .create(document.querySelector('#det_hama'))
            .catch(error => {
                console.error(error);
            });

        // CKEditor Saran Hama
        ClassicEditor
            .create(document.querySelector('#srn_hama'))
            .catch(error => {
                console.error(error);
            });

        // CKEditor Detail Penyakit
        ClassicEditor
            .create(document.querySelector('#det_penyakit'))
            .catch(error => {
                console.error(error);
            });

        // CKEditor Saran Penyakit
        ClassicEditor
            .create(document.querySelector('#srn_penyakit'))
            .catch(error => {
                console.error(error);
            });

        // CKEditor Deksripsi About
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>

    {{-- <script src="{{ asset('mazer/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{ asset('mazer/js/pages/dashboard.js')}}"></script> --}}

    <script src="{{ asset('mazer/js/main.js') }}"></script>
    <script src="{{ asset('mazer/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('mazer/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        // Hapus Data Hama
        $(document).on('click', '.hapus-hama', function(e) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Hama!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result) {
                    form.submit();
                }
            })
        });

        // Hapus Data Gejala Hama
        $(document).on('click', '.hapus-gejalaHama', function(e) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Gejala Hama!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result) {
                    form.submit();
                }
            })
        });

        // Hapus Data Hasil Hama
        $(document).on('click', '.hapus-hasilHama', function(e) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Hasil Diagnosa Hama!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result) {
                    form.submit();
                }
            })
        });

        // Hapus Data Penyakit
        $(document).on('click', '.hapus-penyakit', function(e) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Penyakit!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result) {
                    form.submit();
                }
            })
        });

        // Hapus Data Gejala Penyakit
        $(document).on('click', '.hapus-gejalaPenyakit', function(e) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Gejala Penyakit!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result) {
                    form.submit();
                }
            })
        });

        // Hapus Data Hasil Penyakit
        $(document).on('click', '.hapus-hasilPenyakit', function(e) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Hasil Diagnosa Penyakit!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!'
            }).then((result) => {
                if (result) {
                    form.submit();
                }
            })
        });
    </script>
</body>

</html>
