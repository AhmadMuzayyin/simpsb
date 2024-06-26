@extends('layouts.app', ['title' => 'Kelas'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
                        </div>
                        <div class="col-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahKelas">
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
                                    <th>Maksimal</th>
                                    <th>Terisi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Maksimal</th>
                                    <th>Terisi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($kelas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->maksimal }}</td>
                                        <td>{{ $item->terisi }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-circle btn-sm"
                                                data-toggle="modal" data-target="#editKelas-{{ $loop->iteration }}">
                                                <i class="fas fa-pencil"></i>
                                            </button>
                                            <a href="{{ route('admin.kelas.destroy', $item->id) }}">
                                                <button type="button" class="btn btn-danger btn-circle btn-sm"
                                                    onclick="confirm('Anda yakin untuk menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                            @include('home.admin.kelas.modal')
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
    <div class="modal fade" id="tambahKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('admin.kelas.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Maksimal</label>
                            <input type="number" name="maksimal" id="" class="form-control"
                                placeholder="Maksimal">
                        </div>
                        <div class="form-group">
                            <label for="">Terisi</label>
                            <input type="number" name="terisi" id="" class="form-control" placeholder="Terisi">
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
