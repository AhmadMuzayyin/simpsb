<div class="row mt-2">
    <div class="col">
        <label for="kondisi_ayah">Kondisi Ayah</label>
        <select name="kondisi_ayah" id="kondisi_ayah" class="form-control @error('kondisi_ayah') is-invalid @enderror">
            <option
                value="Hidup"{{ isset($siswa) ? ($siswa->kondisi_ayah == 'Hidup' ? 'selected' : '') : (old('kondisi_ayah') == 'Hidup' ? 'selected' : '') }}>
                Hidup</option>
            <option
                value="Meninggal"{{ isset($siswa) ? ($siswa->kondisi_ayah == 'Meninggal' ? 'selected' : '') : (old('kondisi_ayah') == 'Meninggal' ? 'selected' : '') }}>
                Meninggal</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="kondisi_ibu">Kondisi Ibu</label>
        <select name="kondisi_ibu" id="kondisi_ibu" class="form-control @error('kondisi_ibu') is-invalid @enderror">
            <option
                value="Hidup"{{ isset($siswa) ? ($siswa->kondisi_ibu == 'Hidup' ? 'selected' : '') : (old('kondisi_ibu') == 'Hidup' ? 'selected' : '') }}>
                Hidup</option>
            <option
                value="Meninggal"{{ isset($siswa) ? ($siswa->kondisi_ibu == 'Meninggal' ? 'selected' : '') : (old('kondisi_ibu') == 'Meninggal' ? 'selected' : '') }}>
                Meninggal</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col" id="father">
        <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah"
                id="nama_ayah" placeholder="Nama Ayah"
                value="{{ isset($siswa) ? $siswa->nama_ayah : old('nama_ayah') }}">
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="form-group">
            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
            <select class="form-control @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah"
                id="pekerjaan_ayah" placeholder="Pekerjaan Ayah"
                value="{{ isset($siswa) ? $siswa->pekerjaan_ayah : old('pekerjaan_ayah') }}">
                <option value="" selected disabled>--- Pekerjaan Ayah ---</option>
                @foreach (\App\Helpers\EnumHelper::SubKriteria['Pekerjaan Orang Tua'] as $workAyah)
                    <option value="{{ $workAyah }}" {{ $siswa->pekerjaan_ayah == $workAyah ? 'selected' : '' }}>
                        {{ $workAyah }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="form-group">
            <label for="penghasilan_ayah">Penghasilan Ayah</label>
            <select class="form-control @error('penghasilan_ayah') is-invalid @enderror" name="penghasilan_ayah"
                id="penghasilan_ayah" placeholder="Penghasilan Ayah" min="1000"
                value="{{ isset($siswa) ? $siswa->penghasilan_ayah : old('penghasilan_ayah') }}">
                <option value="" selected disabled>--- Penghasilan Ayah ---</option>
                @foreach (\App\Helpers\EnumHelper::SubKriteria['Penghasilan Orang Tua'] as $gajiAyah)
                    <option value="{{ $gajiAyah }}" {{ $siswa->penghasilan_ayah == $gajiAyah ? 'selected' : '' }}>
                        {{ $gajiAyah }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="form-group">
            <label for="telpon_ayah">Telpon Ayah</label>
            <input type="number" class="form-control @error('telpon_ayah') is-invalid @enderror" name="telpon_ayah"
                id="telpon_ayah" placeholder="Telpon Ayah" min="62"
                value="{{ isset($siswa) ? $siswa->telpon_ayah : old('telpon_ayah') }}">
            <div class="invalid-feedback">
            </div>
        </div>
    </div>
    <div class="col" id="mother">
        <div class="form-group">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu"
                id="nama_ibu" placeholder="Nama Ibu" value="{{ isset($siswa) ? $siswa->nama_ibu : old('nama_ibu') }}">
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="form-group">
            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
            <select class="form-control @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu"
                id="pekerjaan_ibu" placeholder="Pekrjaan Ibu"
                value="{{ isset($siswa) ? $siswa->pekerjaan_ibu : old('pekerjaan_ibu') }}">
                <option value="" selected disabled>--- Pekerjaan Ibu ---</option>
                @foreach (\App\Helpers\EnumHelper::SubKriteria['Pekerjaan Orang Tua'] as $workIbu)
                    <option value="{{ $workIbu }}"{{ $siswa->pekerjaan_ibu == $workIbu ? 'selected' : '' }}>
                        {{ $workIbu }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="form-group">
            <label for="penghasilan_ibu">Penghasilan Ibu</label>
            <select class="form-control @error('penghasilan_ibu') is-invalid @enderror" name="penghasilan_ibu"
                id="penghasilan_ibu" placeholder="Penghasilan Ibu" min="1000"
                value="{{ isset($siswa) ? $siswa->penghasilan_ibu : old('penghasilan_ibu') }}">
                <option value="" selected disabled>--- Penghasilan Ibu ---</option>
                @foreach (\App\Helpers\EnumHelper::SubKriteria['Penghasilan Orang Tua'] as $gajiIbu)
                    <option value="{{ $gajiIbu }}" {{ $siswa->penghasilan_ibu == $gajiIbu ? 'selected' : '' }}>
                        {{ $gajiIbu }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="form-group">
            <label for="telpon_ibu">Telpon Ibu</label>
            <input type="number" class="form-control @error('telpon_ibu') is-invalid @enderror" name="telpon_ibu"
                id="telpon_ibu" placeholder="Telpon Ibu" min="62"
                value="{{ isset($siswa) ? $siswa->telpon_ibu : old('telpon_ibu') }}">
            <div class="invalid-feedback">
            </div>
        </div>
    </div>
</div>
<div class="row mt-2" id="parentAddress">
    <div class="col">
        <label for="alamat_ortu">Alamat Orang Tua</label>
        <textarea class="form-control @error('alamat_ortu') is-invalid @enderror" name="alamat_ortu" id="alamat_ortu"
            placeholder="Alamat Orang Tua">{{ isset($siswa) ? $siswa->alamat_ortu : old('alamat_ortu') }}</textarea>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
{{-- wali --}}
<h3 class="mt-5 font-weight-bold">Silahkan Input Data Wali, Jika Anda Tidak Mempunyai Wali Laki-Laki</h3>
<div class="row mt-2">
    <div class="col">
        <label for="nama_wali">Nama Wali</label>
        <input type="text" class="form-control @error('nama_wali') is-invalid @enderror" name="nama_wali"
            id="nama_wali" placeholder="Nama Wali"
            value="{{ isset($siswa) ? $siswa->nama_wali : old('nama_wali') }}">
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="pekerjaan_wali">Pekerjaan Wali</label>
        <select class="form-control @error('pekerjaan_wali') is-invalid @enderror" name="pekerjaan_wali"
            id="pekerjaan_wali" placeholder="Pekerjaan Wali"
            value="{{ isset($siswa) ? $siswa->pekerjaan_wali : old('pekerjaan_wali') }}">
            <option value="" selected disabled>--- Pekerjaan Wali ---</option>
            @foreach (\App\Helpers\EnumHelper::SubKriteria['Pekerjaan Orang Tua'] as $workWali)
                <option value="{{ $workWali }}" {{ $siswa->pekerjaan_wali == $workWali ? 'selected' : '' }}>
                    {{ $workWali }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <label for="penghasilan_wali">Penghasilan Wali</label>
        <select class="form-control @error('penghasilan_wali') is-invalid @enderror" name="penghasilan_wali"
            id="penghasilan_wali" placeholder="Penghasilan Wali"
            value="{{ isset($siswa) ? $siswa->penghasilan_wali : old('penghasilan_wali') }}">
            <option value="" selected disabled>--- Penghasilan Wali ---</option>
            @foreach (\App\Helpers\EnumHelper::SubKriteria['Penghasilan Orang Tua'] as $gajWali)
                <option value="{{ $gajWali }}" {{ $siswa->penghasilan_wali == $gajWali ? 'selected' : '' }}>
                    {{ $gajWali }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
    <div class="col">
        <label for="alamat_wali">Alamat Wali</label>
        <input type="text" class="form-control @error('alamat_wali') is-invalid @enderror" name="alamat_wali"
            id="alamat_wali" placeholder="Alamat Wali"
            value="{{ isset($siswa) ? $siswa->alamat_wali : old('alamat_wali') }}">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <label for="telpon_wali">Telpon Wali</label>
        <input type="number" class="form-control @error('telpon_wali') is-invalid @enderror" name="telpon_wali"
            id="telpon_wali" placeholder="Telpon Wali"
            value="{{ isset($siswa) ? $siswa->telpon_wali : old('telpon_wali') }}">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
@push('js')
    <script>
        $(document).ready(function() {
            let kondisiAyah = $('#kondisi_ayah')
            let kondisiIbu = $('#kondisi_ibu')
            kondisiAyah.val() == 'Meninggal' ? $('#father').hide() : $('#father').show()
            kondisiIbu.val() == 'Meninggal' ? $('#mother').hide() : $('#mother').show()
            kondisiAyah.on('change', function() {
                if ($(this).val() == 'Meninggal') {
                    $('#father').hide();
                } else {
                    $('#father').show();
                }
            })
            kondisiIbu.on('change', function() {
                if ($(this).val() == 'Meninggal') {
                    $('#mother').hide();
                } else {
                    $('#mother').show();
                }
            })
        })
        var siswa = @json($siswa);
        if (!siswa) {
            window.location.href = '{{ route('siswa.pendaftaran.index') }}?step=kelas';
        }
        $(document).ready(function() {
            $('#next').on('click', function() {
                var nama_ayah = $('#nama_ayah').val();
                var nama_ibu = $('#nama_ibu').val();
                var pekerjaan_ayah = $('#pekerjaan_ayah').val();
                var pekerjaan_ibu = $('#pekerjaan_ibu').val();
                var kondisi_ayah = $('#kondisi_ayah').val();
                var kondisi_ibu = $('#kondisi_ibu').val();
                var penghasilan_ayah = $('#penghasilan_ayah').val();
                var penghasilan_ibu = $('#penghasilan_ibu').val();
                var telpon_ayah = $('#telpon_ayah').val();
                var telpon_ibu = $('#telpon_ibu').val();
                var alamat_ortu = $('#alamat_ortu').val();
                var nama_wali = $('#nama_wali').val();
                var pekerjaan_wali = $('#pekerjaan_wali').val();
                var kondisi_wali = $('#kondisi_wali').val();
                var penghasilan_wali = $('#penghasilan_wali').val();
                var alamat_wali = $('#alamat_wali').val();
                var telpon_wali = $('#telpon_wali').val();
                $.ajax({
                    url: '{{ route('siswa.pendaftaran.wali') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        nama_ayah: nama_ayah,
                        nama_ibu: nama_ibu,
                        pekerjaan_ayah: pekerjaan_ayah,
                        pekerjaan_ibu: pekerjaan_ibu,
                        kondisi_ayah: kondisi_ayah,
                        kondisi_ibu: kondisi_ibu,
                        penghasilan_ayah: penghasilan_ayah,
                        penghasilan_ibu: penghasilan_ibu,
                        telpon_ayah: telpon_ayah,
                        telpon_ibu: telpon_ibu,
                        alamat_ortu: alamat_ortu,
                        nama_wali: nama_wali,
                        pekerjaan_wali: pekerjaan_wali,
                        penghasilan_wali: penghasilan_wali,
                        alamat_wali: alamat_wali,
                        telpon_wali: telpon_wali,
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
