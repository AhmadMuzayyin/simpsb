<div class="row">
    <div class="col">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
            placeholder="Nama Lengkap" value="{{ Auth::user()->name }}">
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="nama_panggilan">Nama Panggilan</label>
        <input type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" name="nama_panggilan"
            id="nama_panggilan" placeholder="Nama Panggilan"
            value="{{ isset($siswa) ? $siswa->nama_panggilan : old('nama_panggilan') }}">
        <div class="invalid-feedback">
        </div>
    </div>

</div>
<div class="row mt-2">
    <div class="col">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"
            id="jenis_kelamin">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-Laki"
                {{ isset($siswa) ? ($siswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : '') : (old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '') }}>
                Laki-Laki</option>
            <option value="Perempuan"
                {{ isset($siswa) ? ($siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '') : (old('jenis_kelamin') == 'Perempuan' ? 'selected' : '') }}>
                Perempuan</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="whatsapp">No Whatsapp</label>
        <input type="number" min="62" class="form-control @error('whatsapp') is-invalid @enderror"
            name="whatsapp" id="whatsapp" placeholder="Whatsapp"
            value="{{ isset($siswa) ? $siswa->whatsapp : old('whatsapp') }}">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
{{-- tetala --}}
<div class="row mt-2">
    <div class="col">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
            id="tempat_lahir" placeholder="Tempat Lahir"
            value="{{ isset($siswa) ? $siswa->tempat_lahir : old('tempat_lahir') }}">
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
            id="tanggal_lahir" placeholder="Tanggal Lahir"
            value="{{ isset($siswa) ? $siswa->tanggal_lahir : old('tanggal_lahir') }}">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
{{-- agama --}}
<div class="row mt-2">
    <div class="col">
        <label for="golongan_darah">Golongan Darah</label>
        <select class="form-control @error('golongan_darah') is-invalid @enderror" name="golongan_darah"
            id="golongan_darah" placeholder="Golongan Darah">
            <option value="" selected disabled>--- Pilih Golongan Darah ---</option>
            <option value="A" {{ isset($siswa) ? ($siswa->golongan_darah == 'A' ? 'selected' : '') : '' }}>
                A</option>
            <option value="B" {{ isset($siswa) ? ($siswa->golongan_darah == 'B' ? 'selected' : '') : '' }}>
                B</option>
            <option value="AB" {{ isset($siswa) ? ($siswa->golongan_darah == 'AB' ? 'selected' : '') : '' }}>
                AB</option>
            <option value="O" {{ isset($siswa) ? ($siswa->golongan_darah == 'O' ? 'selected' : '') : '' }}>
                O</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="agama">Agama</label>
        <select class="form-control @error('agama') is-invalid @enderror" name="agama" id="agama"
            placeholder="Agama">
            <option value="" selected disabled>--- Pilih Agama ---</option>
            <option value="Islam" {{ isset($siswa) ? ($siswa->agama == 'Islam' ? 'selected' : '') : '' }}>Islam
            </option>
            <option value="Kristen" {{ isset($siswa) ? ($siswa->agama == 'Kristen' ? 'selected' : '') : '' }}>
                Kristen</option>
            <option value="Katolik" {{ isset($siswa) ? ($siswa->agama == 'Katolik' ? 'selected' : '') : '' }}>
                Katolik</option>
            <option value="Hindu" {{ isset($siswa) ? ($siswa->agama == 'Hindu' ? 'selected' : '') : '' }}>Hindu
            </option>
            <option value="Budha" {{ isset($siswa) ? ($siswa->agama == 'Budha' ? 'selected' : '') : '' }}>Budha
            </option>
            <option value="Konghucu" {{ isset($siswa) ? ($siswa->agama == 'Konghucu' ? 'selected' : '') : '' }}>
                Konghucu</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <label for="jumlah_saudara">Jumlah Saudara</label>
        <input type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror" name="jumlah_saudara"
            id="jumlah_saudara" placeholder="Jumlah Saudara" min="0"
            value="{{ isset($siswa) ? $siswa->jumlah_saudara : old('jumlah_saudara') }}">
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="anak_ke">Anak Ke</label>
        <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke"
            id="anak_ke" placeholder="Anak Ke" min="1"
            value="{{ isset($siswa) ? $siswa->anak_ke : old('anak_ke') }}">
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="bahasa">Bahasa</label>
        <input type="text" class="form-control @error('bahasa') is-invalid @enderror" name="bahasa"
            id="bahasa" placeholder="Bahasa" value="{{ isset($siswa) ? $siswa->bahasa : old('bahasa') }}">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
{{-- alamat --}}
<div class="row mt-2">
    <div class="col">
        <label for="alamat_asal">Alamat Asal</label>
        <textarea class="form-control @error('alamat_asal') is-invalid @enderror" name="alamat_asal" id="alamat_asal"
            placeholder="Alamat Asal">{{ isset($siswa) ? $siswa->alamat_asal : old('alamat_asal') }}</textarea>
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="alamat_sekarang">Alamat Sekarang</label>
        <textarea class="form-control @error('alamat_sekarang') is-invalid @enderror" name="alamat_sekarang"
            id="alamat_sekarang" placeholder="Alamat Sekarang">{{ isset($siswa) ? $siswa->alamat_sekarang : old('alamat_sekarang') }}</textarea>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
@push('js')
    <script>
        var siswa = @json($siswa);
        if (!siswa) {
            window.location.href = '{{ route('siswa.pendaftaran.index') }}?step=kelas';
        }
        $(document).ready(function() {
            $('#next').on('click', function() {
                var step = '{{ request()->get('step') }}';
                var kelas_id = $('#kelas_id').val();
                var name = $('#name').val();
                var nama_panggilan = $('#nama_panggilan').val();
                var jenis_kelamin = $('#jenis_kelamin').val();
                var whatsapp = $('#whatsapp').val();
                var tempat_lahir = $('#tempat_lahir').val();
                var tanggal_lahir = $('#tanggal_lahir').val();
                var golongan_darah = $('#golongan_darah').val();
                var agama = $('#agama').val();
                var jumlah_saudara = $('#jumlah_saudara').val();
                var anak_ke = $('#anak_ke').val();
                var bahasa = $('#bahasa').val();
                var alamat_asal = $('#alamat_asal').val();
                var alamat_sekarang = $('#alamat_sekarang').val();
                $.ajax({
                    url: '{{ route('siswa.pendaftaran.biodata') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        name: name,
                        nama_panggilan: nama_panggilan,
                        jenis_kelamin: jenis_kelamin,
                        whatsapp: whatsapp,
                        tempat_lahir: tempat_lahir,
                        tanggal_lahir: tanggal_lahir,
                        golongan_darah: golongan_darah,
                        agama: agama,
                        jumlah_saudara: jumlah_saudara,
                        anak_ke: anak_ke,
                        bahasa: bahasa,
                        alamat_asal: alamat_asal,
                        alamat_sekarang: alamat_sekarang
                    },
                    success: function(response) {
                        window.location.href = response.url;
                    },
                    error: function(xhr) {
                        // make show error message to div class invalid-feedback
                        var res = xhr.responseJSON;
                        if (res.errors) {
                            $.each(res.errors, function(key, value) {
                                $('#' + key).addClass('is-invalid');
                                $('#' + key).closest('.col').find('.invalid-feedback')
                                    .text(value);
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
