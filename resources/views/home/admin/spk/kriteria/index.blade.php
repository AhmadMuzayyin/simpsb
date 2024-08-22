@extends('layouts.app', ['title' => 'Data Kriteria'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kriteria</h6>
                        </div>
                        <div class="col-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahGaleri">
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
                                    <th>Kode</th>
                                    <th>Nama Aspek</th>
                                    <th>Nama Kriteria</th>
                                    <th>Faktor Penilaian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $kt)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kt->kode }}</td>
                                        <td>{{ $kt->nama }}</td>
                                        <td>{{ $kt->subkriteria }}</td>
                                        <td>{{ $kt->kriteria }}</td>
                                        <td>
                                            @include('home.admin.spk.kriteria.action.btn')
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
    <div class="modal fade" id="tambahGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('admin.kriteria.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Aspek Kriteria</label>
                            <select name="nama" id="nama"
                                class="form-control  @error('nama')
                                is-invalid
                            @enderror">
                                @foreach (\App\Helpers\EnumHelper::Kriteria as $kriteria)
                                    <option value="{{ $kriteria }}">{{ $kriteria }}</option>
                                @endforeach
                            </select>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subkriteria">Sub Aspek Kriteria</label>
                            <select name="subkriteria" id="subkriteria"
                                class="form-control  @error('subkriteria')
                                is-invalid
                            @enderror">
                                @foreach (\App\Helpers\EnumHelper::SubKriteria as $keySub => $sub)
                                    <option value="{{ $keySub }}">{{ $keySub }}</option>
                                @endforeach
                            </select>
                            @error('subkriteria')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kriteria">Kriteria</label>
                            <select name="kriteria" id="kriteria" class="form-control">
                            </select>
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
            // $('#table').DataTable();
            var subkriteria = $('#subkriteria').val();
            $('#subkriteria').change(function() {
                subkriteria = $(this).val();
                $.ajax({
                    url: "{{ route('admin.kriteria.getKriteria') }}",
                    type: 'GET',
                    data: {
                        subkriteria: subkriteria
                    },
                    success: function(data) {
                        var html = '';
                        data.forEach(function(item) {
                            html += `<option value="${item}">${item}</option>`;
                        });
                        $('#kriteria').html(html);
                    }
                });
            });
        });
    </script>
@endpush
