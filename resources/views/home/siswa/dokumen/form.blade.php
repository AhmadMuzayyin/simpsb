<form action="{{ route('siswa.dokumen.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
    <input type="hidden" name="pindahan" value="{{ $siswa->pindahan == 'Ya' ? true : false }}">
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
            <input type="file" class="form-control @error('file_kk') is-invalid @enderror" name="file_kk"
                id="file_kk" accept=".jpeg, .jpg, .png">
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
            <input type="file" class="form-control @error('file_akta') is-invalid @enderror" name="file_akta"
                id="file_akta" accept=".jpeg, .jpg, .png">
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
                        <img src="{{ url($dokumen->file_foto) }}" alt="pas foto" width="100" class="img-fluid" />
                    </div>
                </div>
            @endif
            <label for="file_foto">Pas Foto (3x4)</label>
            <input type="file" class="form-control @error('file_foto') is-invalid @enderror" name="file_foto"
                id="file_foto" accept=".jpeg, .jpg, .png">
            @error('file_foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    @isset($siswa)
        @if ($siswa->pindahan == true)
            <h3 class="font-weight-bold text-center mt-5">Dokumen Pendukung Siswa Pindahan</h3>
            <div class="row mt-4">
                <div class="col">
                    @if (isset($pindahan->surat_pindah))
                        <div class="row">
                            <div class="col">
                                <img src="{{ url($pindahan->surat_pindah) }}" width="100" class="img-fluid">
                            </div>
                        </div>
                    @endif
                    <label for="surat_pindah">Surat Keterangan Pindah Dari Sekolah Asal</label>
                    <input type="file" class="form-control @error('surat_pindah') is-invalid @enderror"
                        name="surat_pindah" id="surat_pindah" accept=".jpeg, .jpg, .png">
                    @error('surat_pindah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    @if (isset($pindahan->raport_terakhir))
                        <div class="row">
                            <div class="col">
                                <img src="{{ url($pindahan->raport_terakhir) }}" alt="pas foto" width="100"
                                    class="img-fluid" />
                            </div>
                        </div>
                    @endif
                    <label for="raport_terakhir">Raport Terakhir</label>
                    <input type="file" class="form-control @error('raport_terakhir') is-invalid @enderror"
                        name="raport_terakhir" id="raport_terakhir" accept=".jpeg, .jpg, .png">
                    @error('raport_terakhir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    @if (isset($pindahan->keterangan_prilaku_baik))
                        <div class="row">
                            <div class="col">
                                <img src="{{ url($pindahan->keterangan_prilaku_baik) }}" width="100" class="img-fluid">
                            </div>
                        </div>
                    @endif
                    <label for="keterangan_prilaku_baik">Surat Keterangan Kelakuan Baik</label>
                    <input type="file" class="form-control @error('keterangan_prilaku_baik') is-invalid @enderror"
                        name="keterangan_prilaku_baik" id="keterangan_prilaku_baik" accept=".jpeg, .jpg, .png">
                    @error('keterangan_prilaku_baik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    @if (isset($pindahan->rekomendasi))
                        <div class="row">
                            <div class="col">
                                <img src="{{ url($pindahan->rekomendasi) }}" alt="pas foto" width="100"
                                    class="img-fluid" />
                            </div>
                        </div>
                    @endif
                    <label for="rekomendasi">Surat rekomendasi dari kepala sekolah atau kepala dinas pendidikan setempat
                        (asal)</label>
                    <input type="file" class="form-control @error('rekomendasi') is-invalid @enderror"
                        name="rekomendasi" id="rekomendasi" accept=".jpeg, .jpg, .png">
                    @error('rekomendasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    @if (isset($pindahan->surat_perwalian))
                        <div class="row">
                            <div class="col">
                                <img src="{{ url($pindahan->surat_perwalian) }}" width="100" class="img-fluid">
                            </div>
                        </div>
                    @endif
                    <label for="surat_perwalian">Surat perwalian bagi siswa yang tidak ikut orang tua</label>
                    <input type="file" class="form-control @error('surat_perwalian') is-invalid @enderror"
                        name="surat_perwalian" id="surat_perwalian" accept=".jpeg, .jpg, .png">
                    @error('surat_perwalian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    @if (isset($pindahan->sertifikat_akreditasi_sekolah))
                        <div class="row">
                            <div class="col">
                                <img src="{{ url($pindahan->sertifikat_akreditasi_sekolah) }}" alt="pas foto"
                                    width="100" class="img-fluid" />
                            </div>
                        </div>
                    @endif
                    <label for="sertifikat_akreditasi_sekolah">Sertifikat akreditasi sekolah asal</label>
                    <input type="file"
                        class="form-control @error('sertifikat_akreditasi_sekolah') is-invalid @enderror"
                        name="sertifikat_akreditasi_sekolah" id="sertifikat_akreditasi_sekolah"
                        accept=".jpeg, .jpg, .png">
                    @error('sertifikat_akreditasi_sekolah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    @if (isset($pindahan->ktp_orang_tua))
                        <div class="row">
                            <div class="col">
                                <img src="{{ url($pindahan->ktp_orang_tua) }}" alt="pas foto" width="100"
                                    class="img-fluid" />
                            </div>
                        </div>
                    @endif
                    <label for="ktp_orang_tua">Foto Copy Ktp kedua orang tua</label>
                    <input type="file" class="form-control @error('ktp_orang_tua') is-invalid @enderror"
                        name="ktp_orang_tua" id="ktp_orang_tua" accept=".jpeg, .jpg, .png">
                    @error('ktp_orang_tua')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col"></div>
            </div>
        @endif
    @endisset
    <ul class="mt-3 text-danger">
        <li>Mohon inputkan data yang valid</li>
        <li>Ketika tombol simpan ditekan maka data tidak dapat dirubah. Kecuali dikonfirmasi untuk
            dirubah oleh admin</li>
    </ul>
    <button type="submit"
        class="btn btn-{{ isset($dokumen) ? 'warning' : 'primary' }} mt-3">{{ isset($dokumen) ? 'Update Data' : 'Simpan' }}</button>
</form>
