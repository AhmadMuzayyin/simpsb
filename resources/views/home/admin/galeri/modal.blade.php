<!-- Logout Modal-->
<div class="modal fade" id="editGaleri-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Galeri</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.galeri.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="Belajar" {{ $item->kategori == "Belajar" ? 'selected' : '' }}>Belajar</option>
                            <option value="Bermain" {{ $item->kategori == "Bermain" ? 'selected' : '' }}>Bermain</option>
                            <option value="Sekolah" {{ $item->kategori == "Sekolah" ? 'selected' : '' }}>Sekolah</option>
                            <option value="Kelas" {{ $item->kategori == "Kelas" ? 'selected' : '' }}>Kelas</option>
                            <option value="Kegiatan" {{ $item->kategori == "Kegiatan" ? 'selected' : '' }}>Kegiatan</option>
                            <option value="Prestasi" {{ $item->kategori == "Prestasi" ? 'selected' : '' }}>Prestasi</option>
                            <option value="Lainnya" {{ $item->kategori == "Lainnya" ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control"
                            placeholder="Judul" value="{{ $item->judul }}">
                    </div>
                    <div class="my-4">
                        <img src="{{ url($item->gambar) }}" alt="gambar" width="100" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Gambar">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"
                            placeholder="Deskripsi">{!! $item->deskripsi !!}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
