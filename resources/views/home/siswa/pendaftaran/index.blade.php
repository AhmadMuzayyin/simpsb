@extends('layouts.app', ['title' => 'Pendaftaran'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">
                                @php
                                    $step = request()->get('step');
                                @endphp
                                @isset($siswa)
                                    Data Siswa
                                @else
                                    {{ $step == 'wali' ? 'Data Wali' : ($step == 'sekolah' ? 'Data Sekolah' : ($step == 'biodata' ? 'Biodata' : 'Pilih Kelas')) }}
                                @endisset
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (isset($siswa))
                        @if ($siswa->is_save == true && $siswa->status != 'Perbaiki Data')
                            <div class="alert alert-success" role="alert">
                                Data berhasil disimpan
                            </div>
                            <table class="table">
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $siswa->user->name }}</td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td>{{ $siswa->nisn }}</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>{{ $siswa->kelas->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $siswa->status }}</td>
                                </tr>
                            </table>
                        @else
                            @include('home.siswa.pendaftaran.form')
                        @endif
                    @else
                        @include('home.siswa.pendaftaran.form')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@if (request()->get('step') == '' || request()->get('step') == 'kelas')
    @push('js')
        <script>
            $(document).ready(function() {
                // $('#kelas_id').on('change', function() {
                //     $.ajax({
                //         url: '{{ route('siswa.pendaftaran.store') }}',
                //         type: 'POST',
                //         data: {
                //             kelas_id: $(this).val(),
                //             _token: '{{ csrf_token() }}',
                //             user_id: '{{ Auth::user()->id }}'
                //         },
                //         success: function(response) {
                //             window.location.reload();
                //         },
                //         error: function(xhr) {
                //             console.log(xhr.responseText);
                //         }
                //     });
                // });
                $('#next').on('click', function() {
                    if ($('#kelas_id').val() == '') {
                        alert('Kelas harus dipilih');
                        return;
                    }
                    $.ajax({
                        url: '{{ route('siswa.pendaftaran.store') }}',
                        type: 'POST',
                        data: {
                            step: 'biodata',
                            _token: '{{ csrf_token() }}',
                            user_id: '{{ Auth::user()->id }}',
                            kelas_id: $('#kelas_id').val()
                        },
                        success: function(response) {
                            window.location.href =
                                '{{ route('siswa.pendaftaran.index') }}?step=biodata';
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });
            });
        </script>
    @endpush
@endif
@push('js')
    <script>
        var back =
            '{{ $step == 'biodata' ? 'kelas' : ($step == 'wali' ? 'biodata' : ($step == 'sekolah' ? 'wali' : '')) }}';
        $('#previous').on('click', function() {
            window.location.href = '{{ url()->current() }}' + `?step=${back}`
        });
    </script>
@endpush
