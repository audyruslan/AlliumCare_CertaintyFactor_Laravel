@extends('layout.main')

@section('container')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <a href="{{ route('user.index') }}">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="iconly-boldUser"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">User</h6>
                                            <h6 class="font-extrabold mb-0">{{ $count_user }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <a href="{{ route('gejalahama.index') }}">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon purple">
                                                <i class="iconly-boldSearch"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Data Hama</h6>
                                            <h6 class="font-extrabold mb-0">{{ $count_hama }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <a href="{{ route('hama.index') }}">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldStar"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Data Penyakit</h6>
                                            <h6 class="font-extrabold mb-0">{{ $count_penyakit }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <a href="{{ route('riwayatdiagnosa-hama') }}">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldTime-Circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Data Value</h6>
                                            <h6 class="font-extrabold mb-0">{{ $count_value }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Diagram Lingkaran Data Hama & Penyakit --}}
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <h3>Diagram Lingkaran Riwayat Data Diagnosa</h3>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Diagram Lingkaran Riwayat Data Hama</h4>
                            </div>
                            <div class="card-body px-3 py-0-5">
                                <div class="row">
                                    <canvas id="barHama"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Diagram Lingkaran Riwayat Data Penyakit</h4>
                            </div>
                            <div class="card-body px-3 py-0-5">
                                <div class="row">
                                    <canvas id="barPenyakit"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        {{-- Data Hama --}}
        {{--  <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <h3>Riwayat Data Hama</h3>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Hasil Diagnosa Hama</h4>
                            </div>
                            <div class="card-body px-3 py-0-5">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Hasil Diagnosa</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($hasilhamas as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $row->nama }}</td>
                                                        <td class="text-end">{{ unserialize($row->cf_max)[2] }}
                                                            <b>(<span
                                                                    class="text-danger">{{ number_format(unserialize($row->cf_max)[0] * 100, 2) }}%</span>)</b>
                                                        </td>
                                                        <td>{{ $row->created_at->format('d M Y') }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">Hasil Hama Tidak Ditemukan
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Grafik Riwayat Data Hama</h4>
                            </div>
                            <div class="card-body px-3 py-0-5">
                                <div class="row">
                                    <canvas id="barHama"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}

        {{-- Data Penyakit --}}
        {{--  <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <h3>Riwayat Data Penyakit</h3>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Hasil Diagnosa Penyakit</h4>
                            </div>
                            <div class="card-body px-3 py-0-5">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="tablePenyakit">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Hasil Diagnosa</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($hasilpenyakits as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $row->nama }}</td>
                                                        <td class="text-end">{{ unserialize($row->cf_max)[2] }}
                                                            <b>(<span
                                                                    class="text-danger">{{ number_format(unserialize($row->cf_max)[0] * 100, 2) }}%</span>)</b>
                                                        </td>
                                                        <td>{{ $row->created_at->format('d M Y') }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">Hasil Penyakit Tidak
                                                            Ditemukan
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Grafik Riwayat Data Penyakit</h4>
                            </div>
                            <div class="card-body px-3 py-0-5">
                                <div class="row">
                                    <canvas id="barPenyakit"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}
    </div>

    {{--  Grafik Hama  --}}
    <script src="{{ asset('mazer/vendors/chartjs/Chart.min.js') }}"></script>
    <script>
        var chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            info: '#41B1F9',
            blue: '#3245D1',
            purple: 'rgb(153, 102, 255)',
            grey: '#EBEFF6'
        };

        var ctxBar = document.getElementById("barHama").getContext("2d");
        var myBar = new Chart(ctxBar, {
            type: 'pie',
            data: {
                labels: [
                    @foreach ($hamas as $hama)
                        "{{ $hama->name }}",
                    @endforeach
                ],
                datasets: [{
                    label: 'Hama',
                    backgroundColor: [
                        chartColors.red,
                        chartColors.orange,
                        chartColors.yellow,
                        chartColors.green,
                        chartColors.blue,
                        chartColors.indigo,
                        chartColors.violet,
                    ],
                    data: [
                      @foreach ($hamas as $hama)
                          {{ $hasilhamas->where('id_hama', $hama->id)->count() }},
                      @endforeach
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Pie Chart'
                    }
                }
            },
        });
    </script>

    {{-- Grafik Penyakit --}}
    <script src="{{ asset('mazer/vendors/chartjs/Chart.min.js') }}"></script>
    <script>
        var chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            info: '#41B1F9',
            blue: '#3245D1',
            purple: 'rgb(153, 102, 255)',
            grey: '#EBEFF6'
        };

        var ctxBar = document.getElementById("barPenyakit").getContext("2d");
        var myBar = new Chart(ctxBar, {
            type: 'pie',
            data: {
                labels: [
                    @foreach ($penyakits as $penyakit)
                        "{{ $penyakit->name }}",
                    @endforeach
                ],
                datasets: [{
                    label: 'Hama',
                    backgroundColor: [
                        chartColors.blue,
                        chartColors.orange,
                        chartColors.yellow,
                        chartColors.green,
                        chartColors.red,
                        chartColors.indigo,
                        chartColors.violet,
                    ],
                    data: [
                        @foreach ($penyakits as $penyakit)
                            {{ $hasilpenyakits->where('id_penyakit', $penyakit->id)->count() }},
                        @endforeach
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Pie Chart'
                    }
                }
            },
        });
    </script>
@endsection
