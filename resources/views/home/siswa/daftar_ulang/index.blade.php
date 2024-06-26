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
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.daftar_ulang.store', $siswa->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @if (isset($daftar_ulang))
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Nama Siswa</td>
                                        <td>{{ $daftar_ulang->siswa->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Daftar Ulang</td>
                                        <td>{{ $daftar_ulang->status }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Bayar</td>
                                        <td>
                                            @if ($daftar_ulang->bukti_bayar)
                                                <img src="{{ url($daftar_ulang->bukti_bayar) }}" alt="bukti bayar"
                                                    width="100" class="img-fluid">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Daftar Ulang</td>
                                        <td>{{ $daftar_ulang->tgl_daftar_ulang }}</td>
                                    </tr>
                                </table>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="bukti_bayar">Bukti Bayar</label>
                            <input type="file" name="bukti_bayar" id="bukti_bayar"
                                class="form-control @error('bukti_bayar') is-invalid @enderror">
                            @error('bukti_bayar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="btn btn-{{ isset($daftar_ulang) ? 'warning' : 'primary' }} mt-3">{{ isset($daftar_ulang) ? 'Update Data' : 'Daftar Ulang' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
