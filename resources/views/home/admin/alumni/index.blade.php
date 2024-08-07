@extends('layouts.app', ['title' => 'Siswa Alumni'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Data Siswa Alumni
                                @if (request()->get('tahun_akademik'))
                                    Tahun Akademik {{ request()->get('tahun_akademik') }}
                                @endif
                            </h6>
                        </div>
                        <div class="col-right">
                            <select name="tahun_akademik" id="tahun_akademik" class="form-control">
                                <option value="">Pilih Tahun Akademik</option>
                                @foreach ($tahun_akademik as $item)
                                    <option value="{{ $item->tahun_akademik }}"
                                        {{ request()->get('tahun_akademik') == $item->tahun_akademik ? 'selected' : '' }}>
                                        {{ $item->tahun_akademik }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Biodata</th>
                                    <th>Dokumen</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Biodata</th>
                                    <th>Dokumen</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($siswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->kelas->nama }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-circle btn-sm"
                                                data-toggle="modal" data-target="#detailSiswa-{{ $loop->iteration }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @if ($item->status == 'Diterima')
                                                <a href="{{ route('admin.alumni.download', $item->id) }}"
                                                    class="text-decoration-none">
                                                    <button class="btn btn-info btn-circle btn-sm">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-circle btn-sm"
                                                data-toggle="modal" data-target="#dokumenSiswa-{{ $loop->iteration }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @if ($item->dokumen_siswa->status == 'Diterima')
                                                <a href="{{ route('admin.siswa.dokumen_download', $item->id) }}"
                                                    class="text-decoration-none">
                                                    <button class="btn btn-info btn-circle btn-sm">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
            $('#tahun_akademik').on('change', function() {
                var tahun_akademik = $(this).val();
                window.location.href = "{{ route('admin.alumni.index') }}" + "?tahun_akademik=" +
                    tahun_akademik;
            })
        });
    </script>
@endpush
