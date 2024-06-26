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
                        @if(isset($item->dokumen_siswa))
                        <tr>
                            <td>File Pendukung</td>
                            <td>
                                <iframe src="{{ url($item->dokumen_siswa->file_pendukung) }}" alt="gambar" height="620" width="100%" class="img-fluid" frameborder="0" scrolling="auto"></iframe>
                            </td>
                        </tr>
                        <tr>
                            <td>File Akta Lahir</td>
                            <td>
                                <iframe src="{{ url($item->dokumen_siswa->file_akta) }}" alt="gambar" height="620" width="100%" class="img-fluid" frameborder="0" scrolling="auto"></iframe>
                            </td>
                        </tr>
                        <tr>
                            <td>File Kartu Keluarga</td>
                            <td>
                                <iframe src="{{ url($item->dokumen_siswa->file_kk) }}" alt="gambar" height="620" width="100%" class="img-fluid" frameborder="0" scrolling="auto"></iframe>
                            </td>
                        </tr>
                        <tr>
                            <td>File Pas Foto 3x4</td>
                            <td>
                                <img src="{{ url($item->dokumen_siswa->file_foto) }}" alt="gambar" width="100" class="img-fluid">
                            </td>
                        </tr>
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
