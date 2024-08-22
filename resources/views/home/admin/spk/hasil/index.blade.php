@extends('layouts.app', ['title' => 'Data Hasil Akhir'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Hasil Akhir</h6>
                        </div>
                        <div class="col-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped akTable" id="akTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Siswa</th>
                                    <th>Nilai Total</th>
                                    <th>Rangking</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $hasil)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $hasil->siswa->user->name }}</td>
                                        <td>{{ $hasil->nilai_akhir }}</td>
                                        <td>{{ $hasil->ranking }}</td>
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
            $('.akTable').DataTable({
                filter: false,
                searching: false,
                pageLength: 50,
                info: false,
                // ordering: false,
                // paging: false,
            })
        });
    </script>
@endpush
