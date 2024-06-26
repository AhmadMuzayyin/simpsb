<!-- Logout Modal-->
<div class="modal fade" id="detailInfo-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Info</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="category_id">Kategori</label>
                    <input type="text" class="form-control" name="category_id" id="category_id" value="{{ $item->category->nama }}" readonly>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul" value="{{ $item->judul }}" readonly>
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea name="isi" id="isi" cols="5" rows="5" class="form-control" readonly>{{ $item->isi }}</textarea>
                </div>
                <div class="form-group">
                    <img src="{{ url($item->gambar) }}" alt="gambar" width="100" class="img-fluid">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
