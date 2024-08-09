<div class="row mt-2">
    <div class="col">
        <label for="sekolah_asal">Sekolah Asal</label>
        <input type="text" class="form-control @error('sekolah_asal') is-invalid @enderror" name="sekolah_asal"
            id="sekolah_asal" placeholder="Sekolah Asal"
            value="{{ isset($siswa) ? $siswa->sekolah_asal : old('sekolah_asal') }}">
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="ijazah_terakhir">Ijazah Terakhir</label>
        <select class="form-control @error('ijazah_terakhir') is-invalid @enderror" name="ijazah_terakhir"
            id="ijazah_terakhir">
            <option value="">-- Pilih Ijazah Terakhir --</option>
            <option value="SMP"
                {{ isset($siswa) ? ($siswa->ijazah_terakhir == 'SMP' ? 'selected' : '') : (old('ijazah_terakhir') == 'SMP' ? 'selected' : '') }}>
                SMP</option>
            <option value="MTS"
                {{ isset($siswa) ? ($siswa->ijazah_terakhir == 'MTS' ? 'selected' : '') : (old('ijazah_terakhir') == 'MTS' ? 'selected' : '') }}>
                MTS</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <label for="nisn">NISN</label>
        <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" id="nisn"
            placeholder="NISN" value="{{ isset($siswa) ? $siswa->nisn : old('nisn') }}">
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="pindahan">Apakah anda siswa pindahan?</label>
        <select class="form-control @error('pindahan') is-invalid @enderror" name="pindahan" id="pindahan">
            <option value="Ya"
                {{ isset($siswa) ? ($siswa->pindahan == 'Ya' ? 'selected' : '') : (old('pindahan') == 'Ya' ? 'selected' : '') }}>
                Ya</option>
            <option value="Tidak"
                {{ isset($siswa) ? ($siswa->pindahan == 'Tidak' ? 'selected' : '') : (old('pindahan') == 'Tidak' ? 'selected' : '') }}>
                Tidak</option>
        </select>
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
                var sekolah_asal = $('#sekolah_asal').val();
                var ijazah_terakhir = $('#ijazah_terakhir').val();
                var nisn = $('#nisn').val();
                var pindahan = $('#pindahan').val();
                $.ajax({
                    url: '{{ route('siswa.pendaftaran.sekolah') }}',
                    type: 'POST',
                    data: {
                        sekolah_asal: sekolah_asal,
                        ijazah_terakhir: ijazah_terakhir,
                        nisn: nisn,
                        pindahan: pindahan,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.href = response.url;
                    },
                    error: function(xhr) {
                        var res = xhr.responseJSON;
                        if (res.errors) {
                            $.each(res.errors, function(key, value) {
                                $('#' + key).addClass('is-invalid');
                                $('#' + key).closest('.col').find('.invalid-feedback')
                                    .text(value);
                            });
                        }
                    }
                })
            })
        })
    </script>
@endpush
