@extends('layouts.app', ['title' => 'Data Rekapan'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Rekapan</h6>
                        </div>
                        <div class="col-right">
                            @php
                                $tahun_akdemik = request()->get('tahun_akademik');
                            @endphp
                            <select name="tahun_akademik" id="tahun_akademik" class="form-control">
                                <option value="" selected disabled>Pilih Tahun Akademik</option>
                                @foreach ($tahun_akademik as $tahun)
                                    <option value="{{ $tahun->tahun_akademik }}"
                                        {{ $tahun_akdemik == $tahun->tahun_akademik ? 'selected' : '' }}>
                                        {{ $tahun->tahun_akademik }}</option>
                                @endforeach
                            </select>
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
                                    <th>Kelas</th>
                                    <th>Status Penerima Bantuan</th>
                                    <th>Status Bantuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rekap as $hasil)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $hasil->siswa->user->name }}</td>
                                        <td>{{ $hasil->siswa->kelas->nama }}</td>
                                        <td>
                                            @if ($hasil->status == 'Layak')
                                                <span class="badge badge-success">{{ $hasil->status }}</span>
                                            @else
                                                <span class="badge badge-danger">{{ $hasil->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($hasil->status == 'Layak')
                                                @if ($hasil->is_delivered == 1)
                                                    <span class="badge badge-success">Sudah Diterima</span>
                                                @else
                                                    <select name="is_delivered" class="form-control is_delivered"
                                                        data-id="{{ $hasil->id }}">
                                                        <option value="0"
                                                            {{ $hasil->is_delivered == 0 ? 'selected' : '' }}>Belum
                                                            Diterima</option>
                                                        <option value="1"
                                                            {{ $hasil->is_delivered == 1 ? 'selected' : '' }}>
                                                            Sudah Diterima</option>
                                                    </select>
                                                @endif
                                            @else
                                                <span class="badge badge-danger">Tidak Dapat Menerima Bantuan</span>
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
            $('.akTable').DataTable({
                filter: false,
                searching: false,
                pageLength: 50,
                info: false,
                // ordering: false,
                // paging: false,
            })
            $('.is_delivered').on('change', function() {
                var status = $(this).val();
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('admin.rekap.update') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        status: status
                    },
                    success: function(data) {
                        if (data.status == 'success') {
                            toastr.success(data.message);
                        } else {
                            toastr.error(data.message);
                        }
                    }
                });
            });
            $('#tahun_akademik').on('change', function() {
                var tahun_akademik = $(this).val();
                window.location.href = "{{ route('admin.rekap.index') }}?tahun_akademik=" + tahun_akademik;
            });
        });
    </script>
@endpush
