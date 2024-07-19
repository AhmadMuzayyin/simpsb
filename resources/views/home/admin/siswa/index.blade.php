@extends('layouts.app', ['title' => 'Siswa Baru'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa Baru</h6>
                        </div>
                        <div class="col-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahSiswa">
                                <i class="fas fa-plus"></i>
                            </button>
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
                                    <th>Status</th>
                                    <th>Status Kelulusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Biodata</th>
                                    <th>Dokumen</th>
                                    <th>Status</th>
                                    <th>Status Kelulusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($siswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->kelas->nama }}</td>
                                        {{-- biodata --}}
                                        <td>
                                            <button type="button" class="btn btn-warning btn-circle btn-sm"
                                                data-toggle="modal" data-target="#detailSiswa-{{ $loop->iteration }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @if ($item->status == 'Diterima')
                                                <a href="{{ route('admin.siswa.download', $item->id) }}"
                                                    class="text-decoration-none">
                                                    <button class="btn btn-info btn-circle btn-sm">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>
                                        {{-- dokumen --}}
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
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            @if ($item->status_kelulusan == false)
                                                <a href="{{ route('admin.siswa.lulus', $item->id) }}">
                                                    <span class="badge badge-success">Aktif</span>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.siswa.lulus', $item->id) }}">
                                                    <span class="badge badge-danger">Lulus</span>
                                                </a>
                                            @endif
                                        </td>
                                        {{-- aksi --}}
                                        <td>
                                            @if ($item->status == 'Menunggu Konfirmasi')
                                                <a href="{{ route('admin.siswa.confirmation', $item->id) }}"
                                                    class="text-decoration-none" title="Diterima">
                                                    <button class="btn btn-success btn-circle btn-sm">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('admin.siswa.notconfirm', $item->id) }}"
                                                    class="text-decoration-none" title="Ditolak">
                                                    <button class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-x"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('admin.siswa.perbaiki_data', $item->id) }}"
                                                    class="text-decoration-none" title="Perbaiki Data">
                                                    <button class="btn btn-info btn-circle btn-sm">
                                                        <i class="fas fa-pencil"></i>
                                                    </button>
                                                </a>
                                                @isset($item->dokumen_siswa)
                                                    @if ($item->dokumen_siswa->status != 'Perbaiki Dokumen')
                                                        <a href="{{ route('admin.siswa.perbaiki_dokumen', $item->id) }}"
                                                            class="text-decoration-none" title="Perbaiki Dokumen">
                                                            <button class="btn btn-warning btn-circle btn-sm">
                                                                <i class="fa-solid fa-file-signature"></i>
                                                            </button>
                                                        </a>
                                                    @endif
                                                @endisset
                                            @endif
                                            @if ($item->status == 'Diterima')
                                                <a href="{{ route('admin.siswa.notconfirm', $item->id) }}"
                                                    class="text-decoration-none">
                                                    <button class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-x"></i>
                                                    </button>
                                                </a>
                                            @endif
                                            @if ($item->status == 'Tidak Diterima')
                                                <a href="{{ route('admin.siswa.confirmation', $item->id) }}"
                                                    class="text-decoration-none">
                                                    <button class="btn btn-success btn-circle btn-sm">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('admin.siswa.perbaiki_data', $item->id) }}"
                                                    class="text-decoration-none">
                                                    <button class="btn btn-info btn-circle btn-sm">
                                                        <i class="fas fa-pencil"></i>
                                                    </button>
                                                </a>
                                                @isset($item->dokumen_siswa)
                                                    @if ($item->dokumen_siswa->status != 'Perbaiki Data')
                                                        <a href="{{ route('admin.siswa.perbaiki_dokumen', $item->id) }}"
                                                            class="text-decoration-none">
                                                            <button class="btn btn-warning btn-circle btn-sm">
                                                                <i class="fa-solid fa-file-signature"></i>
                                                            </button>
                                                        </a>
                                                    @endif
                                                @endisset
                                            @endif
                                            <a
                                                href="{{ route('admin.kelas.destroy', $item->id) }}"class="text-decoration-none">
                                                <button type="button" class="btn btn-danger btn-circle btn-sm"
                                                    onclick="confirm('Anda yakin untuk menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                            @include('home.admin.siswa.modal')
                                            @include('home.admin.siswa.dokumen')
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
        });
    </script>
@endpush
