<!-- Logout Modal-->
<div class="modal fade" id="detailSiswa-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Biodata Siswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Nama Lengkap" value="{{ $item->user->name }}" disabled>
                    </div>
                    <div class="col">
                        <label for="kelas_id">Kelas</label>
                        <select class="form-control @error('kelas_id') is-invalid @enderror" name="kelas_id"
                            id="kelas_id" disabled>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($kelas as $kls)
                                <option value="{{ $kls->id }}"
                                    {{ isset($item) ? ($item->kelas_id == $kls->id ? 'selected' : '') : (old('kelas_id') == $kls->id ? 'selected' : '') }}>
                                    {{ $kls->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" class="form-control @error('nama_panggilan') is-invalid @enderror"
                            name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan"
                            value="{{ isset($item) ? $item->nama_panggilan : old('nama_panggilan') }}" disabled>
                    </div>
                    <div class="col">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"
                            id="jenis_kelamin" disabled>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki"
                                {{ isset($item) ? ($item->jenis_kelamin == 'Laki-Laki' ? 'selected' : '') : (old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '') }}>
                                Laki-Laki</option>
                            <option value="Perempuan"
                                {{ isset($item) ? ($item->jenis_kelamin == 'Perempuan' ? 'selected' : '') : (old('jenis_kelamin') == 'Perempuan' ? 'selected' : '') }}>
                                Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                            name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"
                            value="{{ isset($item) ? $item->tempat_lahir : old('tempat_lahir') }}" disabled>
                    </div>
                    <div class="col">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir"
                            value="{{ isset($item) ? $item->tanggal_lahir : old('tanggal_lahir') }}" disabled>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="golongan_darah">Golongan Darah</label>
                        <input type="text" class="form-control @error('golongan_darah') is-invalid @enderror"
                            name="golongan_darah" id="golongan_darah" maxlength="1" placeholder="Golongan Darah"
                            value="{{ isset($item) ? $item->golongan_darah : old('golongan_darah') }}" disabled>
                    </div>
                    <div class="col">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama"
                            id="agama" placeholder="Agama" value="{{ isset($item) ? $item->agama : old('agama') }}"
                            disabled>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="alamat_asal">Alamat Asal</label>
                        <input type="text" class="form-control @error('alamat_asal') is-invalid @enderror"
                            name="alamat_asal" id="alamat_asal" placeholder="Alamat Asal"
                            value="{{ isset($item) ? $item->alamat_asal : old('alamat_asal') }}" disabled>
                    </div>
                    <div class="col">
                        <label for="alamat_sekarang">Alamat Sekarang</label>
                        <input type="text" class="form-control @error('alamat_sekarang') is-invalid @enderror"
                            name="alamat_sekarang" id="alamat_sekarang" placeholder="Alamat Sekarang"
                            value="{{ isset($item) ? $item->alamat_sekarang : old('alamat_sekarang') }}" disabled>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="whatsapp">No Whatsapp</label>
                        <input type="text" class="form-control @error('whatsapp') is-invalid @enderror"
                            name="whatsapp" id="whatsapp" placeholder="Whatsapp"
                            value="{{ isset($item) ? $item->whatsapp : old('whatsapp') }}" disabled>
                    </div>
                    <div class="col">
                        <label for="anak_ke">Anak Ke</label>
                        <input type="number" class="form-control @error('anak_ke') is-invalid @enderror"
                            name="anak_ke" id="anak_ke" placeholder="Anak Ke"
                            value="{{ isset($item) ? $item->anak_ke : old('anak_ke') }}" disabled>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="jumlah_saudara">Jumlah Saudara</label>
                        <input type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror"
                            name="jumlah_saudara" id="jumlah_saudara" placeholder="Jumlah Saudara"
                            value="{{ isset($item) ? $item->jumlah_saudara : old('jumlah_saudara') }}" disabled>
                    </div>
                    <div class="col">
                        <label for="bahasa">Bahasa</label>
                        <input type="text" class="form-control @error('bahasa') is-invalid @enderror"
                            name="bahasa" id="bahasa" placeholder="Bahasa"
                            value="{{ isset($item) ? $item->bahasa : old('bahasa') }}" disabled>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="sekolah_asal">Sekolah Asal</label>
                        <input type="text" class="form-control @error('sekolah_asal') is-invalid @enderror"
                            name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah Asal"
                            value="{{ isset($item) ? $item->sekolah_asal : old('sekolah_asal') }}" disabled>
                    </div>
                    <div class="col">
                        <label for="ijazah_terakhir">Ijazah Terakhir</label>
                        <select class="form-control @error('ijazah_terakhir') is-invalid @enderror"
                            name="ijazah_terakhir" id="ijazah_terakhir" disabled>
                            <option value="">-- Pilih Ijazah Terakhir --</option>
                            <option value="SMP"
                                {{ isset($item) ? ($item->ijazah_terakhir == 'SMP' ? 'selected' : '') : (old('ijazah_terakhir') == 'SMP' ? 'selected' : '') }}>
                                SMP</option>
                            <option value="MTS"
                                {{ isset($item) ? ($item->ijazah_terakhir == 'MTS' ? 'selected' : '') : (old('ijazah_terakhir') == 'MTS' ? 'selected' : '') }}>
                                MTS</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control @error('nisn') is-invalid @enderror"
                            name="nisn" id="nisn" placeholder="NISN"
                            value="{{ isset($item) ? $item->nisn : old('nisn') }}" disabled>
                    </div>
                    @include('home.admin.siswa.wali')
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
