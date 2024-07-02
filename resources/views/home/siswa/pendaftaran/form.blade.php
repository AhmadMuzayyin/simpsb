<form method="POST">
    @csrf
    @if (request()->get('step') == '' || request()->get('step') == 'kelas')
        <div class="col">
            <label for="kelas_id">Kelas</label>
            <select class="form-control @error('kelas_id') is-invalid @enderror" name="kelas_id" id="kelas_id">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $item)
                    <option value="{{ $item->id }}"
                        {{ isset($siswa) ? ($siswa->kelas_id == $item->id ? 'selected' : '') : (old('kelas_id') == $item->id ? 'selected' : '') }}>
                        {{ $item->nama }}</option>
                @endforeach
            </select>
            @error('kelas_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    @elseif (request()->get('step') == 'biodata')
        @include('home.siswa.pendaftaran.biodata')
    @elseif (request()->get('step') == 'wali')
        @include('home.siswa.pendaftaran.wali')
    @elseif (request()->get('step') == 'sekolah')
        @include('home.siswa.pendaftaran.sekolah')
    @endif
    <ul class="mt-3 text-danger">
        <li>Mohon inputkan data yang valid</li>
        <li>Ketika tombol simpan ditekan maka data tidak dapat dirubah. Kecuali dikonfirmasi untuk
            dirubah oleh admin</li>
    </ul>
    @if ($step != null && $step != 'kelas')
        <a href="javascript:;void(0)" id="previous" class="btn btn-warning mt-3 mx-2">
            @if ($step == 'biodata' || $step == 'wali' || $step == 'sekolah')
                Sebelumnya
            @endif
        </a>
    @endif
    <a href="javascript:;void(0)" id="next" class="btn btn-primary mt-3">
        @if ($step == 'kelas' || $step == 'wali' || $step == 'biodata' || $step == null)
            Lanjut
        @endif
        @if ($step == 'sekolah')
            Simpan
        @endif
    </a>
</form>
