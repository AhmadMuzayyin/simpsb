<button type="button" class="btn btn-warning btn-circle btn-sm" data-toggle="modal"
    data-target="#editKriteria-{{ $loop->iteration }}">
    <i class="fas fa-pencil"></i>
</button>
<form action="{{ route('admin.kriteria.destroy', $kt->id) }}" method="post" class="d-inline">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah anda yakin?')">
        <i class="fas fa-trash"></i>
    </button>
</form>

{{-- edit Modal --}}
<div class="modal fade" id="editKriteria-{{ $loop->iteration }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pendaftaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.kriteria.update', $kt->id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Aspek Kriteria</label>
                        <select name="nama" id="nama-{{ $loop->iteration }}"
                            class="form-control  @error('nama')
                            is-invalid
                        @enderror">
                            @foreach (\App\Helpers\EnumHelper::Kriteria as $kriteria)
                                <option value="{{ $kriteria }}" {{ $kt->nama == $kriteria ? 'selected' : '' }}>
                                    {{ $kriteria }}</option>
                            @endforeach
                        </select>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subkriteria">Sub Aspek Kriteria</label>
                        <select name="subkriteria" id="subkriteria-{{ $loop->iteration }}"
                            class="form-control  @error('subkriteria')
                            is-invalid
                        @enderror">
                            @foreach (\App\Helpers\EnumHelper::SubKriteria as $keySub => $sub)
                                <option value="{{ $keySub }}"
                                    {{ $kt->subkriteria == $keySub ? 'selected' : '' }}>
                                    {{ $keySub }}</option>
                            @endforeach
                        </select>
                        @error('subkriteria')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kriteria">Kriteria</label>
                        <select name="kriteria" id="kriteria-{{ $loop->iteration }}" class="form-control">
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
@push('js')
    <script>
        $(document).ready(function() {
            $('.modal').on('shown.bs.modal', function() {
                var subkriteria = $('#subkriteria-{{ $loop->iteration }}').val();
                var subSelected = "{{ $kt->kriteria }}";
                $.ajax({
                    url: "{{ route('admin.kriteria.getKriteria') }}",
                    type: 'GET',
                    data: {
                        subkriteria: subkriteria
                    },
                    success: function(data) {
                        var html = '';
                        data.forEach(function(item) {
                            html +=
                                `<option value="${item}" ${subSelected == item ?'selected':''}>${item}</option>`;
                        });
                        $('#kriteria-{{ $loop->iteration }}').html(html);
                    }
                });
                $('#subkriteria-{{ $loop->iteration }}').change(function() {
                    let subkriteria = $(this).val();
                    $.ajax({
                        url: "{{ route('admin.kriteria.getKriteria') }}",
                        type: 'GET',
                        data: {
                            subkriteria: subkriteria
                        },
                        success: function(data) {
                            var html = '';
                            data.forEach(function(item) {
                                html +=
                                    `<option value="${item}">${item}</option>`;
                            });
                            $('#kriteria-{{ $loop->iteration }}').html(html);
                        }
                    });
                });
            });
        });
    </script>
@endpush
