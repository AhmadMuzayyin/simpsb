<!-- Logout Modal-->
<div class="modal fade" id="dokumenSiswa-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Dokumen Siswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        @if (isset($item->dokumen_siswa))
                            <tr>
                                <td>File Ijazah</td>
                                <td>
                                    <img src="{{ $item->dokumen_siswa->file_pendukung != null ? url($item->dokumen_siswa->file_pendukung) : '' }}"
                                        alt="gambar" max-height="100" width="100" class="img-fluid"></img>
                                </td>
                            </tr>
                            <tr>
                                <td>File Akta Lahir</td>
                                <td>
                                    <img src="{{ $item->dokumen_siswa->file_akta != null ? url($item->dokumen_siswa->file_akta) : '' }}"
                                        alt="gambar" max-height="100" width="100" class="img-fluid"></img>
                                </td>
                            </tr>
                            <tr>
                                <td>File Kartu Keluarga</td>
                                <td>
                                    <img src="{{ $item->dokumen_siswa->file_kk != null ? url($item->dokumen_siswa->file_kk) : '' }}"
                                        alt="gambar" max-height="100" width="100" class="img-fluid"></img>
                                </td>
                            </tr>
                            <tr>
                                <td>File Pas Foto 3x4</td>
                                <td>
                                    <img src="{{ $item->dokumen_siswa->file_foto != null ? url($item->dokumen_siswa->file_foto) : '' }}"
                                        alt="gambar" width="100" class="img-fluid">
                                </td>
                            </tr>
                            <tr>
                                <td>KTP Ayah</td>
                                <td>
                                    <img src="{{ $item->dokumen_siswa->ktp_ayah != null ? url($item->dokumen_siswa->ktp_ayah) : '' }}"
                                        alt="gambar" width="100" class="img-fluid">
                                </td>
                            </tr>
                            <tr>
                                <td>KTP Ibu</td>
                                <td>
                                    <img src="{{ $item->dokumen_siswa->ktp_ibu != null ? url($item->dokumen_siswa->ktp_ibu) : '' }}"
                                        alt="gambar" width="100" class="img-fluid">
                                </td>
                            </tr>
                            <tr>
                                <td>KTP Wali</td>
                                <td>
                                    <img src="{{ $item->dokumen_siswa->ktp_wali != null ? url($item->dokumen_siswa->ktp_wali) : '' }}"
                                        alt="gambar" width="100" class="img-fluid">
                                </td>
                            </tr>
                            @if ($item->pindahan == 'Ya')
                                <tr>
                                    <td>Surat Keterangan Pindah Dari Sekolah Asal</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->surat_pindah) }}" alt="gambar"
                                                width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Raport Terakhir</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->raport_terakhir) }}"
                                                alt="gambar" width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat Keterangan Kelakuan Baik</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->keterangan_prilaku_baik ?? '') }}"
                                                alt="gambar" width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat rekomendasi dari kepala sekolah atau kepala dinas pendidikan setempat
                                        (asal)</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->rekomendasi) }}" alt="gambar"
                                                width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surat perwalian bagi siswa yang tidak ikut orang tua</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->surat_perwalian) }}"
                                                alt="gambar" width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sertifikat akreditasi sekolah asal</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->sertifikat_akreditasi_sekolah) }}"
                                                alt="gambar" width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Foto Copy Ktp Ayah</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->ktp_ayah) }}" alt="gambar"
                                                width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Foto Copy Ktp Ibu</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->ktp_ibu) }}" alt="gambar"
                                                width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td>Foto Copy Ktp Wali</td>
                                    <td>
                                        @isset($item->dokumen_siswa_pindahan)
                                            <img src="{{ url($item->dokumen_siswa_pindahan->ktp_wali) }}" alt="gambar"
                                                width="100" class="img-fluid">
                                        @endisset
                                    </td>
                                </tr>
                            @endif
                        @endif
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
