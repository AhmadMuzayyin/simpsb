@extends('layouts.app', ['title' => 'Info'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Info</h6>
                        </div>
                        <div class="col-right">
                            <button class="btn btn-success" data-toggle="modal" data-target="#tambahKategori">
                                <i class="fas fa-plus"></i> Kategori
                            </button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahInfo">
                                <i class="fas fa-plus"></i> Info
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
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->category->nama }}</td>
                                        <td>
                                            <img src="{{ url($item->gambar) }}" alt="gambar" width="100" class="img-fluid">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-circle btn-sm"
                                                data-toggle="modal" data-target="#detailInfo-{{ $loop->iteration }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            @include('home.admin.info.modal_detail')
                                            <button type="button" class="btn btn-warning btn-circle btn-sm"
                                                data-toggle="modal" data-target="#editInfo-{{ $loop->iteration }}">
                                                <i class="fas fa-pencil"></i>
                                            </button>
                                            @include('home.admin.info.modal_edit')
                                            <a href="{{ route('admin.info.destroy', $item->id) }}">
                                                <button type="button" class="btn btn-danger btn-circle btn-sm"
                                                    onclick="confirm('Anda yakin untuk menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
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
    {{-- Modal Post --}}
    <div class="modal fade" id="tambahInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('admin.info.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="category_id">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea name="isi" id="isi" cols="5" rows="5" class="form-control @error('isi') is-invalid @enderror"></textarea>
                            @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
                            @error('gambar')
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
    {{-- Modal Kategori --}}
    <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('admin.kategori.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id=""
                                class="form-control @error('nama')
                                is-invalid
                            @enderror"
                                placeholder="Nama">
                            @error('nama')
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
                <div class="card-body">
                    <h5>Data Kategori</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-circle btn-sm"
                                                data-toggle="modal" data-target="#editKategori-{{ $loop->iteration }}">
                                                <i class="fas fa-pencil"></i>
                                            </button>
                                            <a href="{{ route('admin.kategori.destroy', $item->id) }}">
                                                <button type="button" class="btn btn-danger btn-circle btn-sm"
                                                    onclick="confirm('Anda yakin untuk menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                            @include('home.admin.info.modal_kategori')
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
        $('#tambahKategori').on('shown.bs.modal', function() {
            $('#table2').DataTable();
        })
    </script>
@endpush
