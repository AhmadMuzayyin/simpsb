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
                        <label for="nama">Nama Kelas</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="{{ $item->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="maksimal">maksimal</label>
                        <input type="number" class="form-control" name="maksimal" id="maksimal"
                            value="{{ $item->maksimal }}">
                    </div>
                    <div class="form-group">
                        <label for="terisi"></label>
                        <input type="number" class="form-control" name="terisi" id="terisi"
                            value="{{ $item->terisi }}">
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
