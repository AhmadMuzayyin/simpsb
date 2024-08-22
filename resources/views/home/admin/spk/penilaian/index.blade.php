@extends('layouts.app', ['title' => 'Data Penilaian'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Penilaian</h6>
                        </div>
                        <div class="col-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h1>Aspek Keluarga</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($profile->groupBy('siswa_id') as $k => $kodes)
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
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Nilai Standar</td>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($profile->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Keluarga')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <td>{{ $item->aspek_kriteria->nilai }}</td>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($profile->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Keluarga')
                                                        @include('home.admin.spk.penilaian.thAK')
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h1>Aspek Sosial Ekonomi</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableASE" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($profile->groupBy('siswa_id') as $k => $kodes)
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
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Nilai Standar</td>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($profile->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Sosial Ekonomi')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <td>{{ $item->aspek_kriteria->nilai }}</td>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($profile->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Sosial Ekonomi')
                                                        @include('home.admin.spk.penilaian.thASE')
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h1>Aspek Akademik</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableAA" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Siswa</th>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($profile->groupBy('siswa_id') as $k => $kodes)
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
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Nilai Standar</td>
                                            @php
                                                $last_code = [];
                                            @endphp
                                            @foreach ($profile->groupBy('siswa_id') as $k => $kodes)
                                                @foreach ($kodes as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Akademik')
                                                        @if (!in_array($item->kode, $last_code))
                                                            <td>{{ $item->aspek_kriteria->nilai }}</td>
                                                            @php
                                                                array_push($last_code, $item->kode);
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($profile->groupBy('siswa_id') as $key => $nilai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilai[0]->siswa->user->name }}</td>
                                                @foreach ($nilai as $item)
                                                    @if ($item->aspek_kriteria->kriteria->nama == 'Aspek Akademik')
                                                        @include('home.admin.spk.penilaian.thAA')
                                                    @endif
                                                @endforeach
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
            $('#table').DataTable({
                searching: false,
                info: false,
            });
            $('#tableASE').DataTable({
                searching: false,
                info: false,
            });
            $('#tableAA').DataTable({
                searching: false,
                info: false,
            });
            $.ajax({
                url: "{{ route('admin.penilaian.profiling') }}",
                type: "GET",
                success: function(data) {
                    if (data.status == 'success') {
                        window.location.reload();
                    }
                }
            });
        });
    </script>
@endpush
