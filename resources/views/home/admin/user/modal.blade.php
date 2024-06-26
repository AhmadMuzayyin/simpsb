<!-- Logout Modal-->
<div class="modal fade" id="editKelas-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Admin - {{ $item->name }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.user.update', $item->id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{ $item->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" name="level" id="level">
                            <option value="" selected disabled>Pilih Level</option>
                            <option value="admin" {{ $item->level == 'admin' ? 'selected' : ''}}>Admin</option>
                            <option value="siswa" {{ $item->level == 'siswa' ? 'selected' : ''}}>Siswa</option>
                        </select>
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
