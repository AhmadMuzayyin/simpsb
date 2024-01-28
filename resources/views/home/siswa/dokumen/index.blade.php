@extends('layouts.app', ['title' => 'Dokumen'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Dokumen</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.dokumen.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                        <div class="row">
                            <div class="col">
                                @if (isset($dokumen->file_pendukung))
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ url($dokumen->file_pendukung) }}" width="100" class="img-fluid">
                                        </div>
                                    </div>
                                @endif
                                <label for="file_pendukung">File Pendukung (IJAZAH/SKL)</label>
                                <input type="file" class="form-control @error('file_pendukung') is-invalid @enderror"
                                    name="file_pendukung" id="file_pendukung" accept=".jpeg, .jpg, .png">
                                @error('file_pendukung')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                @if (isset($dokumen->file_kk))
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ url($dokumen->file_kk) }}" width="100" class="img-fluid">
                                        </div>
                                    </div>
                                @endif
                                <label for="file_kk">File Kartu Keluarga</label>
                                <input type="file" class="form-control @error('file_kk') is-invalid @enderror"
                                    name="file_kk" id="file_kk" accept=".jpeg, .jpg, .png">
                                @error('file_kk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                @if (isset($dokumen->file_akta))
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ url($dokumen->file_akta) }}" width="100" class="img-fluid">
                                        </div>
                                    </div>
                                @endif
                                <label for="file_akta">File Akta Lahir</label>
                                <input type="file" class="form-control @error('file_akta') is-invalid @enderror"
                                    name="file_akta" id="file_akta" accept=".jpeg, .jpg, .png">
                                @error('file_akta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                @if (isset($dokumen->file_foto))
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ url($dokumen->file_foto) }}" alt="pas foto" width="100"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                @endif
                                <label for="file_foto">Pas Foto (3x4)</label>
                                <input type="file" class="form-control @error('file_foto') is-invalid @enderror"
                                    name="file_foto" id="file_foto" accept=".jpeg, .jpg, .png">
                                @error('file_foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <ul class="mt-3 text-danger">
                            <li>Mohon inputkan data yang valid</li>
                            <li>Ketika tombol simpan ditekan maka data tidak dapat dirubah. Kecuali dikonfirmasi untuk
                                dirubah oleh admin</li>
                        </ul>
                        <button type="submit" class="btn btn-{{ isset($dokumen) ? 'warning' : 'primary' }} mt-3">{{ isset($dokumen) ? 'Update Data' : 'Simpan' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
