@extends('layouts.app', ['title' => 'Daftar Ulang'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Daftar Ulang</h6>
                        </div>
                        <div class="col-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Siswa</th>
                                    <th>Tanggal</th>
                                    <th>Bukti Bayar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Siswa</th>
                                    <th>Tanggal</th>
                                    <th>Bukti Bayar</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($daftar_ulang as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->siswa->user->name }}</td>
                                        <td>{{ $item->tgl_daftar_ulang }}</td>
                                        <td>
                                            <img src="{{ url($item->bukti_bayar) }}" alt="bukti bayar" width="100" class="img-fluid">
                                        </td>
                                        <td>{{ $item->status }}</td>
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
