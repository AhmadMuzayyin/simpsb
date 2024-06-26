<!-- Logout Modal-->
<div class="modal fade" id="editInfo-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Info</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.info.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->nama }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul" value="{{ $item->judul }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea name="isi" id="isi" cols="5" rows="5" class="form-control  @error('isi') is-invalid @enderror">{!! $item->isi !!}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{ url($item->gambar) }}" alt="gambar" width="100" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control  @error('gambar') is-invalid @enderror">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
