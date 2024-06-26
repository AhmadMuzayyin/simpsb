<!-- Logout Modal-->
<div class="modal fade" id="editPendaftaran-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pendaftaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.pendaftaran.update', $item->id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="mulai">Mulai</label>
                        <input type="date" name="mulai" id="mulai"
                            class="form-control @error('mulai')
                            is-invalid
                        @enderror"
                            placeholder="Mulai" value="{{ $item->mulai }}">
                            @error('mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="berakhir">Berakhir</label>
                        <input type="date" name="berakhir" id="berakhir" class="form-control @error('berakhir')
                            is-invalid
                        @enderror"
                            placeholder="Berakhir" value="{{ $item->berakhir }}">
                            @error('berakhir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="tahun_akademik">Tahun Akademik</label>
                        <input type="number" name="tahun_akademik" id="tahun_akademik" class="form-control @error('tahun_akademik')
                            is-invalid
                        @enderror"
                            placeholder="Tahun Akademik" value="{{ $item->tahun_akademik }}">
                            @error('tahun_akademik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
