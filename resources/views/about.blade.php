@extends('layout.app')

@section('container')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('flex-start/img/logo.png') }}" alt="">
                <span>AlliumCare</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Diagnosa</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a target="_blank" href="{{ route('diagnosa-hama') }}">Diagnosa Hama</a></li>
                            <li><a target="_blank" href="{{ route('diagnosa-penyakit') }}">Diagnosa Penyakit</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Riwayat Diagnosa</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a target="_blank" href="{{ route('riwayatdiagnosa-hama') }}">Riwayat Diagnosa Hama</a></li>
                            <li><a target="_blank" href="{{ route('riwayatdiagnosa-penyakit') }}">Riwayat Diagnosa
                                    Penyakit</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('post-keterangan') }}">Post Keterangan</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('about') }}">Tentang</a></li>
                    @if (auth()->check())
                        <li><a class="getstarted scrollto" href="/dashboard">Dashboard</a></li>
                        <li><a class="getstarted scrollto" href="{{ route('logout') }}">Logout</a></li>
                    @else
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">


                @foreach ($settings as $row)
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>{{ $row->title }}</h2>
                            <p>
                                <?php echo $row->description; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('flex-start/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                @endforeach
            </div>
        </div>

    </section><!-- End About Section -->
@endsection
