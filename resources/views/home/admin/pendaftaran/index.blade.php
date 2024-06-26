@extends('layouts.app', ['title' => 'Pendaftaran'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h6>
                        </div>
                        <div class="col-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPendaftaran">
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
                                    <th>Mulai</th>
                                    <th>Berakhir</th>
                                    <th>Tahun Akademik</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Mulai</th>
                                    <th>Berakhir</th>
                                    <th>Tahun Akademik</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($pendaftaran as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->mulai }}</td>
                                        <td>{{ $item->berakhir }}</td>
                                        <td>{{ $item->tahun_akademik }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-circle btn-sm"
                                                data-toggle="modal" data-target="#editPendaftaran-{{ $loop->iteration }}">
                                                <i class="fas fa-pencil"></i>
                                            </button>
                                            <a href="{{ route('admin.pendaftaran.destroy', $item->id) }}">
                                                <button type="button" class="btn btn-danger btn-circle btn-sm"
                                                    onclick="confirm('Anda yakin untuk menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                            @include('home.admin.pendaftaran.modal')
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
    <!-- Logout Modal-->
    <div class="modal fade" id="tambahPendaftaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('admin.pendaftaran.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="mulai">Mulai</label>
                            <input type="date" name="mulai" id="mulai"
                                class="form-control @error('mulai')
                                is-invalid
                            @enderror"
                                placeholder="Mulai">
                                @error('mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="berakhir">Berakhir</label>
                            <input type="date" name="berakhir" id="berakhir" class="form-control @error('berakhir')
                                is-invalid
                            @enderror"
                                placeholder="Berakhir">
                                @error('berakhir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun_akademik">Tahun Akademik</label>
                            <input type="number" name="tahun_akademik" id="tahun_akademik" class="form-control @error('tahun_akademik')
                                is-invalid
                            @enderror"
                                placeholder="Tahun Akademik">
                                @error('tahun_akademik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
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
