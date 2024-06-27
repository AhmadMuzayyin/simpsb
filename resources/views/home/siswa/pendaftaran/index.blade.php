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
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.pendaftaran.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="row">
                            <div class="col">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="Nama Lengkap"
                                    value="{{ Auth::user()->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="kelas_id">Kelas</label>
                                <select class="form-control @error('kelas_id') is-invalid @enderror" name="kelas_id"
                                    id="kelas_id">
                                    <option value="">-- Pilih Kelas --</option>
                                    @foreach ($kelas as $item)
                                        <option value="{{ $item->id }}"
                                            {{ isset($siswa) ? ($siswa->kelas_id == $item->id ? 'selected' : '') : (old('kelas_id') == $item->id ? 'selected' : '') }}>
                                            {{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('kelas_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="nama_panggilan">Nama Panggilan</label>
                                <input type="text" class="form-control @error('nama_panggilan') is-invalid @enderror"
                                    name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan"
                                    value="{{ isset($siswa) ? $siswa->nama_panggilan : old('nama_panggilan') }}">
                                @error('nama_panggilan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-Laki"
                                        {{ isset($siswa) ? ($siswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : '') : (old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '') }}>
                                        Laki-Laki</option>
                                    <option value="Perempuan"
                                        {{ isset($siswa) ? ($siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '') : (old('jenis_kelamin') == 'Perempuan' ? 'selected' : '') }}>
                                        Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"
                                    value="{{ isset($siswa) ? $siswa->tempat_lahir : old('tempat_lahir') }}">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir"
                                    value="{{ isset($siswa) ? $siswa->tanggal_lahir : old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="golongan_darah">Golongan Darah</label>
                                <input type="text" class="form-control @error('golongan_darah') is-invalid @enderror"
                                    name="golongan_darah" id="golongan_darah" maxlength="3" placeholder="Golongan Darah"
                                    value="{{ isset($siswa) ? $siswa->golongan_darah : old('golongan_darah') }}">
                                @error('golongan_darah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama">Agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama"
                                    id="agama" placeholder="Agama">
                                    <option value="" selected disabled>--- Pilih Agama ---</option>
                                    <option value="Islam"
                                        {{ isset($siswa) ? ($siswa->agama == 'Islam' ? 'selected' : '') : '' }}>Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="alamat_asal">Alamat Asal</label>
                                <input type="text" class="form-control @error('alamat_asal') is-invalid @enderror"
                                    name="alamat_asal" id="alamat_asal" placeholder="Alamat Asal"
                                    value="{{ isset($siswa) ? $siswa->alamat_asal : old('alamat_asal') }}">
                                @error('alamat_asal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="alamat_sekarang">Alamat Sekarang</label>
                                <input type="text" class="form-control @error('alamat_sekarang') is-invalid @enderror"
                                    name="alamat_sekarang" id="alamat_sekarang" placeholder="Alamat Sekarang"
                                    value="{{ isset($siswa) ? $siswa->alamat_sekarang : old('alamat_sekarang') }}">
                                @error('alamat_sekarang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="whatsapp">No Whatsapp</label>
                                <input type="text" class="form-control @error('whatsapp') is-invalid @enderror"
                                    name="whatsapp" id="whatsapp" placeholder="Whatsapp"
                                    value="{{ isset($siswa) ? $siswa->whatsapp : old('whatsapp') }}">
                                @error('whatsapp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="anak_ke">Anak Ke</label>
                                <input type="number" class="form-control @error('anak_ke') is-invalid @enderror"
                                    name="anak_ke" id="anak_ke" placeholder="Anak Ke"
                                    value="{{ isset($siswa) ? $siswa->anak_ke : old('anak_ke') }}">
                                @error('anak_ke')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="jumlah_saudara">Jumlah Saudara</label>
                                <input type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror"
                                    name="jumlah_saudara" id="jumlah_saudara" placeholder="Jumlah Saudara"
                                    value="{{ isset($siswa) ? $siswa->jumlah_saudara : old('jumlah_saudara') }}">
                                @error('jumlah_saudara')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="bahasa">Bahasa</label>
                                <input type="text" class="form-control @error('bahasa') is-invalid @enderror"
                                    name="bahasa" id="bahasa" placeholder="Bahasa"
                                    value="{{ isset($siswa) ? $siswa->bahasa : old('bahasa') }}">
                                @error('bahasa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="sekolah_asal">Sekolah Asal</label>
                                <input type="text" class="form-control @error('sekolah_asal') is-invalid @enderror"
                                    name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah Asal"
                                    value="{{ isset($siswa) ? $siswa->sekolah_asal : old('sekolah_asal') }}">
                                @error('sekolah_asal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="ijazah_terakhir">Ijazah Terakhir</label>
                                <select class="form-control @error('ijazah_terakhir') is-invalid @enderror"
                                    name="ijazah_terakhir" id="ijazah_terakhir">
                                    <option value="">-- Pilih Ijazah Terakhir --</option>
                                    <option value="SMP"
                                        {{ isset($siswa) ? ($siswa->ijazah_terakhir == 'SMP' ? 'selected' : '') : (old('ijazah_terakhir') == 'SMP' ? 'selected' : '') }}>
                                        SMP</option>
                                    <option value="MTS"
                                        {{ isset($siswa) ? ($siswa->ijazah_terakhir == 'MTS' ? 'selected' : '') : (old('ijazah_terakhir') == 'MTS' ? 'selected' : '') }}>
                                        MTS</option>
                                </select>
                                @error('ijazah_terakhir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control @error('nisn') is-invalid @enderror"
                                    name="nisn" id="nisn" placeholder="NISN"
                                    value="{{ isset($siswa) ? $siswa->nisn : old('nisn') }}">
                                @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="nama_ayah">Nama Ayah</label>
                                <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror"
                                    name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah"
                                    value="{{ isset($siswa) ? $siswa->nama_ayah : old('nama_ayah') }}">
                                @error('nama_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                                    name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah"
                                    value="{{ isset($siswa) ? $siswa->pekerjaan_ayah : old('pekerjaan_ayah') }}">
                                @error('pekerjaan_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="kondisi_ayah">Kondisi Ayah</label>
                                <input type="text" class="form-control @error('kondisi_ayah') is-invalid @enderror"
                                    name="kondisi_ayah" id="kondisi_ayah" placeholder="Kondisi Ayah"
                                    value="{{ isset($siswa) ? $siswa->kondisi_ayah : old('kondisi_ayah') }}">
                                @error('kondisi_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                <input type="number"
                                    class="form-control @error('penghasilan_ayah') is-invalid @enderror"
                                    name="penghasilan_ayah" id="penghasilan_ayah" placeholder="Penghasilan Ayah"
                                    value="{{ isset($siswa) ? $siswa->penghasilan_ayah : old('penghasilan_ayah') }}">
                                @error('penghasilan_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="telpon_ayah">Telpon Ayah</label>
                                <input type="number" class="form-control @error('telpon_ayah') is-invalid @enderror"
                                    name="telpon_ayah" id="telpon_ayah" placeholder="Telpon Ayah"
                                    value="{{ isset($siswa) ? $siswa->telpon_ayah : old('telpon_ayah') }}">
                                @error('telpon_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror"
                                    name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu"
                                    value="{{ isset($siswa) ? $siswa->nama_ibu : old('nama_ibu') }}">
                                @error('nama_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                                    name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekrjaan Ibu"
                                    value="{{ isset($siswa) ? $siswa->pekerjaan_ibu : old('pekerjaan_ibu') }}">
                                @error('pekerjaan_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="kondisi_ibu">Kondisi Ibu</label>
                                <input type="text" class="form-control @error('kondisi_ibu') is-invalid @enderror"
                                    name="kondisi_ibu" id="kondisi_ibu" placeholder="Penghasilan Ibu"
                                    value="{{ isset($siswa) ? $siswa->kondisi_ibu : old('kondisi_ibu') }}">
                                @error('kondisi_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="penghasilan_ibu">Penghasilan Ibu</label>
                                <input type="number" class="form-control @error('penghasilan_ibu') is-invalid @enderror"
                                    name="penghasilan_ibu" id="penghasilan_ibu" placeholder="Penghasilan Ibu"
                                    value="{{ isset($siswa) ? $siswa->penghasilan_ibu : old('penghasilan_ibu') }}">
                                @error('penghasilan_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="telpon_ibu">Telpon Ibu</label>
                                <input type="number" class="form-control @error('telpon_ibu') is-invalid @enderror"
                                    name="telpon_ibu" id="telpon_ibu" placeholder="Telpon Ibu"
                                    value="{{ isset($siswa) ? $siswa->telpon_ibu : old('telpon_ibu') }}">
                                @error('telpon_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="alamat_ortu">Alamat Orang Tua</label>
                                <input type="text" class="form-control @error('alamat_ortu') is-invalid @enderror"
                                    name="alamat_ortu" id="alamat_ortu" placeholder="Alamat Orang Tua"
                                    value="{{ isset($siswa) ? $siswa->alamat_ortu : old('alamat_ortu') }}">
                                @error('alamat_ortu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="nama_wali">Nama Wali</label>
                                <input type="text" class="form-control @error('nama_wali') is-invalid @enderror"
                                    name="nama_wali" id="nama_wali" placeholder="Nama Wali"
                                    value="{{ isset($siswa) ? $siswa->nama_wali : old('nama_wali') }}">
                                @error('nama_wali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                <input type="text" class="form-control @error('pekerjaan_wali') is-invalid @enderror"
                                    name="pekerjaan_wali" id="pekerjaan_wali" placeholder="Pekerjaan Wali"
                                    value="{{ isset($siswa) ? $siswa->pekerjaan_wali : old('pekerjaan_wali') }}">
                                @error('pekerjaan_wali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="kondisi_wali">Kondisi Wali</label>
                                <input type="text" class="form-control @error('kondisi_wali') is-invalid @enderror"
                                    name="kondisi_wali" id="kondisi_wali" placeholder="Kondisi Wali"
                                    value="{{ isset($siswa) ? $siswa->kondisi_wali : old('kondisi_wali') }}">
                                @error('kondisi_wali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="penghasilan_wali">Penghasilan Wali</label>
                                <input type="number"
                                    class="form-control @error('penghasilan_wali') is-invalid @enderror"
                                    name="penghasilan_wali" id="penghasilan_wali" placeholder="Penghasilan Wali"
                                    value="{{ isset($siswa) ? $siswa->penghasilan_wali : old('penghasilan_wali') }}">
                                @error('penghasilan_wali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="alamat_wali">Alamat Wali</label>
                                <input type="text" class="form-control @error('alamat_wali') is-invalid @enderror"
                                    name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali"
                                    value="{{ isset($siswa) ? $siswa->alamat_wali : old('alamat_wali') }}">
                                @error('alamat_wali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="telpon_wali">Telpon Wali</label>
                                <input type="number" class="form-control @error('telpon_wali') is-invalid @enderror"
                                    name="telpon_wali" id="telpon_wali" placeholder="Telpon Wali"
                                    value="{{ isset($siswa) ? $siswa->telpon_wali : old('telpon_wali') }}">
                                @error('telpon_wali')
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
                        <button type="submit"
                            class="btn btn-{{ isset($siswa) ? 'warning' : 'primary' }} mt-3">{{ isset($siswa) ? 'Update Data' : 'Simpan' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
