<!-- Logout Modal-->
<div class="modal fade" id="editKelas-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kelas - {{ $item->nama }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.kelas.update', $item->id) }}" method="post">
                @csrf
                <div class="modal-body">
                <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" placeholder="Nama" value="{{ $item->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="">Maksimal</label>
                            <input type="number" name="maksimal" id="" class="form-control"
                                placeholder="Maksimal" value="{{ $item->maksimal }}">
                        </div>
                        <div class="form-group">
                            <label for="">Terisi</label>
                            <input type="number" name="terisi" id="" class="form-control" placeholder="Terisi" value="{{ $item->terisi }}">
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
