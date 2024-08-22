@extends('layouts.app', ['title' => 'Data Perhitungan'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Perhitungan</h6>
                        </div>
                        <div class="col-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card shadow bg-success">
                        <div class="card-header">
                            <h5 class="font-weight-bold">Aspek Keluarga</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped akTable text-white" id="akTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Keluarga')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Keluarga')
                                                        <th>{{ $item->nilai }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Pemetaan Gap</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped akTable text-white" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Keluarga')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Keluarga')
                                                        <th>{{ $item->nilai - $item->aspek_kriteria->nilai }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Pembobotan Nilai Gap</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped akTable text-white" id="akTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Keluarga')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Keluarga')
                                                        @php
                                                            $gap = $item->nilai - $item->aspek_kriteria->nilai;
                                                            if ($gap == 0) {
                                                                $bobot = 5;
                                                            } elseif ($gap == 1) {
                                                                $bobot = 4.5;
                                                            } elseif ($gap == -1) {
                                                                $bobot = 4;
                                                            } elseif ($gap == 2) {
                                                                $bobot = 3.5;
                                                            } elseif ($gap == -2) {
                                                                $bobot = 3;
                                                            } elseif ($gap == 3) {
                                                                $bobot = 2.5;
                                                            } elseif ($gap == -3) {
                                                                $bobot = 2;
                                                            } elseif ($gap == 4) {
                                                                $bobot = 1.5;
                                                            } elseif ($gap == -4) {
                                                                $bobot = 1;
                                                            } else {
                                                                $bobot = 0; // Jika gap di luar range, bobot dianggap 0
                                                            }
                                                        @endphp
                                                        <th>{{ $bobot }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Perhitungan Factor</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped akTable text-white" id="akTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Keluarga')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            <th>NCF</th>
                                            <th>NSF</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @php
                                                    $total_cf = 0;
                                                    $total_sf = 0;
                                                    $count_cf = 0;
                                                    $count_sf = 0;
                                                @endphp
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Keluarga')
                                                        @php
                                                            $gap = $item->nilai - $item->aspek_kriteria->nilai;
                                                            if ($gap == 0) {
                                                                $bobot = 5;
                                                            } elseif ($gap == 1) {
                                                                $bobot = 4.5;
                                                            } elseif ($gap == -1) {
                                                                $bobot = 4;
                                                            } elseif ($gap == 2) {
                                                                $bobot = 3.5;
                                                            } elseif ($gap == -2) {
                                                                $bobot = 3;
                                                            } elseif ($gap == 3) {
                                                                $bobot = 2.5;
                                                            } elseif ($gap == -3) {
                                                                $bobot = 2;
                                                            } elseif ($gap == 4) {
                                                                $bobot = 1.5;
                                                            } elseif ($gap == -4) {
                                                                $bobot = 1;
                                                            } else {
                                                                $bobot = 0;
                                                            }
                                                            if ($item->aspek_kriteria->tipe == 'NCF') {
                                                                $total_cf += $bobot;
                                                                $count_cf++;
                                                            } else {
                                                                $total_sf += $bobot;
                                                                $count_sf++;
                                                            }
                                                        @endphp
                                                        <th>{{ $bobot }}</th>
                                                    @endif
                                                @endforeach
                                                @php
                                                    $avg_cf = $count_cf > 0 ? $total_cf / $count_cf : 0;
                                                    $avg_sf = $count_sf > 0 ? $total_sf / $count_sf : 0;
                                                    $bobot_cf = 0.6;
                                                    $bobot_sf = 0.4;
                                                    $total_final = $avg_cf * $bobot_cf + $avg_sf * $bobot_sf;
                                                @endphp
                                                <th>{{ number_format($avg_cf, 2) }}</th>
                                                <th>{{ number_format($avg_sf, 2) }}</th>
                                                <th>{{ number_format($total_final, 2) }}</th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 shadow bg-info">
                        <div class="card-header">
                            <h5>Aspek Sosial Ekonomi</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-white">
                                <table class="table table-bordered text-white aseTable" id="aseTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Sosial Ekonomi')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Sosial Ekonomi')
                                                        <th>{{ $item->nilai }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Pemetaan Gap</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped aseTable text-white" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Sosial Ekonomi')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Sosial Ekonomi')
                                                        <th>{{ $item->nilai - $item->aspek_kriteria->nilai }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Pembobotan Nilai Gap</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped aseTable text-white" id="aseTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Sosial Ekonomi')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Sosial Ekonomi')
                                                        @php
                                                            $gap = $item->nilai - $item->aspek_kriteria->nilai;
                                                            if ($gap == 0) {
                                                                $bobot = 5;
                                                            } elseif ($gap == 1) {
                                                                $bobot = 4.5;
                                                            } elseif ($gap == -1) {
                                                                $bobot = 4;
                                                            } elseif ($gap == 2) {
                                                                $bobot = 3.5;
                                                            } elseif ($gap == -2) {
                                                                $bobot = 3;
                                                            } elseif ($gap == 3) {
                                                                $bobot = 2.5;
                                                            } elseif ($gap == -3) {
                                                                $bobot = 2;
                                                            } elseif ($gap == 4) {
                                                                $bobot = 1.5;
                                                            } elseif ($gap == -4) {
                                                                $bobot = 1;
                                                            } else {
                                                                $bobot = 0; // Jika gap di luar range, bobot dianggap 0
                                                            }
                                                        @endphp
                                                        <th>{{ $bobot }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Perhitungan Factor</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped aseTable text-white" id="aseTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Sosial Ekonomi')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            <th>NCF</th>
                                            <th>NSF</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @php
                                                    $total_cf = 0;
                                                    $total_sf = 0;
                                                    $count_cf = 0;
                                                    $count_sf = 0;
                                                @endphp
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Sosial Ekonomi')
                                                        @php
                                                            $gap = $item->nilai - $item->aspek_kriteria->nilai;
                                                            if ($gap == 0) {
                                                                $bobot = 5;
                                                            } elseif ($gap == 1) {
                                                                $bobot = 4.5;
                                                            } elseif ($gap == -1) {
                                                                $bobot = 4;
                                                            } elseif ($gap == 2) {
                                                                $bobot = 3.5;
                                                            } elseif ($gap == -2) {
                                                                $bobot = 3;
                                                            } elseif ($gap == 3) {
                                                                $bobot = 2.5;
                                                            } elseif ($gap == -3) {
                                                                $bobot = 2;
                                                            } elseif ($gap == 4) {
                                                                $bobot = 1.5;
                                                            } elseif ($gap == -4) {
                                                                $bobot = 1;
                                                            } else {
                                                                $bobot = 0;
                                                            }
                                                            if ($item->aspek_kriteria->tipe == 'NCF') {
                                                                $total_cf += $bobot;
                                                                $count_cf++;
                                                            } else {
                                                                $total_sf += $bobot;
                                                                $count_sf++;
                                                            }
                                                        @endphp
                                                        <th>{{ $bobot }}</th>
                                                    @endif
                                                @endforeach
                                                @php
                                                    $avg_cf = $count_cf > 0 ? $total_cf / $count_cf : 0;
                                                    $avg_sf = $count_sf > 0 ? $total_sf / $count_sf : 0;
                                                    $bobot_cf = 0.6;
                                                    $bobot_sf = 0.4;
                                                    $total_final = $avg_cf * $bobot_cf + $avg_sf * $bobot_sf;
                                                @endphp
                                                <th>{{ number_format($avg_cf, 2) }}</th>
                                                <th>{{ number_format($avg_sf, 2) }}</th>
                                                <th>{{ number_format($total_final, 2) }}</th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 shadow bg-danger">
                        <div class="card-header">
                            <h5>Aspek Akademik</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-white">
                                <table class="table table-bordered aaTable text-white" id="aaTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Akademik')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Akademik')
                                                        <th>{{ $item->nilai }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Pemetaan Gap</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped aaTable text-white" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Akademik')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Akademik')
                                                        <th>{{ $item->nilai - $item->aspek_kriteria->nilai }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Pembobotan Nilai Gap</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped aaTable text-white" id="aaTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Akademik')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Akademik')
                                                        @php
                                                            $gap = $item->nilai - $item->aspek_kriteria->nilai;
                                                            if ($gap == 0) {
                                                                $bobot = 5;
                                                            } elseif ($gap == 1) {
                                                                $bobot = 4.5;
                                                            } elseif ($gap == -1) {
                                                                $bobot = 4;
                                                            } elseif ($gap == 2) {
                                                                $bobot = 3.5;
                                                            } elseif ($gap == -2) {
                                                                $bobot = 3;
                                                            } elseif ($gap == 3) {
                                                                $bobot = 2.5;
                                                            } elseif ($gap == -3) {
                                                                $bobot = 2;
                                                            } elseif ($gap == 4) {
                                                                $bobot = 1.5;
                                                            } elseif ($gap == -4) {
                                                                $bobot = 1;
                                                            } else {
                                                                $bobot = 0; // Jika gap di luar range, bobot dianggap 0
                                                            }
                                                        @endphp
                                                        <th>{{ $bobot }}</th>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="font-weight-bold text-white">Perhitungan Factor</h5>
                            <div class="table-responsive text-white">
                                <table class="table table-bordered table-striped aaTable text-white" id="aaTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($data->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama === 'Aspek Akademik')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <th>{{ $item->kode . ' - ' . $item->tipe }}</th>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            <th>NCF</th>
                                            <th>NSF</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @php
                                                    $total_cf = 0;
                                                    $total_sf = 0;
                                                    $count_cf = 0;
                                                    $count_sf = 0;
                                                @endphp
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Akademik')
                                                        @php
                                                            $gap = $item->nilai - $item->aspek_kriteria->nilai;
                                                            if ($gap == 0) {
                                                                $bobot = 5;
                                                            } elseif ($gap == 1) {
                                                                $bobot = 4.5;
                                                            } elseif ($gap == -1) {
                                                                $bobot = 4;
                                                            } elseif ($gap == 2) {
                                                                $bobot = 3.5;
                                                            } elseif ($gap == -2) {
                                                                $bobot = 3;
                                                            } elseif ($gap == 3) {
                                                                $bobot = 2.5;
                                                            } elseif ($gap == -3) {
                                                                $bobot = 2;
                                                            } elseif ($gap == 4) {
                                                                $bobot = 1.5;
                                                            } elseif ($gap == -4) {
                                                                $bobot = 1;
                                                            } else {
                                                                $bobot = 0;
                                                            }
                                                            if ($item->aspek_kriteria->tipe == 'NCF') {
                                                                $total_cf += $bobot;
                                                                $count_cf++;
                                                            } else {
                                                                $total_sf += $bobot;
                                                                $count_sf++;
                                                            }
                                                        @endphp
                                                        <th>{{ $bobot }}</th>
                                                    @endif
                                                @endforeach
                                                @php
                                                    $avg_cf = $count_cf > 0 ? $total_cf / $count_cf : 0;
                                                    $avg_sf = $count_sf > 0 ? $total_sf / $count_sf : 0;
                                                    $bobot_cf = 0.6;
                                                    $bobot_sf = 0.4;
                                                    $total_final = $avg_cf * $bobot_cf + $avg_sf * $bobot_sf;
                                                @endphp
                                                <th>{{ number_format($avg_cf, 2) }}</th>
                                                <th>{{ number_format($avg_sf, 2) }}</th>
                                                <th>{{ number_format($total_final, 2) }}</th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.akTable').DataTable({
                filter: false,
                searching: false,
                pageLength: 50,
                info: false,
                ordering: false,
                // paging: false,
            })
            $('.aseTable').DataTable({
                filter: false,
                searching: false,
                pageLength: 50,
                info: false,
                ordering: false,
            })
            $('.aaTable').DataTable({
                filter: false,
                searching: false,
                pageLength: 50,
                info: false,
                ordering: false,
            })
        });
    </script>
@endpush
