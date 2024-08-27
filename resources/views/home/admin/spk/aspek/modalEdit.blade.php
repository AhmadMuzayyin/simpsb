<div class="modal fade" id="editAspek-{{ $as->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Aspek</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.aspek.update', $as->id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kriteria_id">Kriteria</label>
                        <select name="kriteria_id" id="kriteria_id" class="form-control">
                            @foreach ($kriteria->groupBy('nama') as $keyKt => $kt)
                                @if ($keyKt == 'Aspek Keluarga')
                                    <optgroup class="text-danger" label="Aspek Keluarga">
                                        {{-- start --}}
                                        @foreach ($kt->groupBy('subkriteria') as $keySub => $subs)
                                            @if ($keySub == 'Status Anak')
                                    <optgroup label="Status Anak">
                                        @foreach ($subs as $sub)
                                            <option value="{{ $sub->id }}"
                                                {{ $as->kriteria->id == $sub->id ? 'selected' : '' }}>
                                                {{ $sub->kriteria }}
                                            </option>
                                        @endforeach
                                    </optgroup>
                                @else
                                    <optgroup label="Jumlah Saudara Kandung">
                                        @foreach ($subs as $sub)
                                            <option value="{{ $sub->id }}"
                                                {{ $as->kriteria->id == $sub->id ? 'selected' : '' }}>
                                                {{ $sub->kriteria }}</option>
                                        @endforeach
                                    </optgroup>
                                @endif
                            @endforeach
                            {{-- endfor --}}
                            </optgroup>
                        @elseif ($keyKt == 'Aspek Sosial Ekonomi')
                            <optgroup class="text-danger" label="Aspek Sosial Ekonomi">
                                {{-- startfor --}}
                                @foreach ($kt->groupBy('subkriteria') as $keySub => $subs)
                                    @if ($keySub == 'Pekerjaan Orang Tua')
                            <optgroup label="Pekerjaan Orang Tua">
                                @foreach ($subs as $sub)
                                    <option value="{{ $sub->id }}"
                                        {{ $as->kriteria->id == $sub->id ? 'selected' : '' }}>{{ $sub->kriteria }}
                                    </option>
                                @endforeach
                            </optgroup>
                        @else
                            <optgroup label="Penghasilan Orang Tua">
                                @foreach ($subs as $sub)
                                    <option value="{{ $sub->id }}"
                                        {{ $as->kriteria->id == $sub->id ? 'selected' : '' }}>{{ $sub->kriteria }}
                                    </option>
                                @endforeach
                            </optgroup>
                            @endif
                            @endforeach
                            {{-- endfor --}}
                            </optgroup>
                        @elseif ($keyKt == 'Aspek Akademik')
                            <optgroup class="text-danger" label="Aspek Akademik">
                                {{-- startfor --}}
                                @foreach ($kt->groupBy('subkriteria') as $keySub => $subs)
                                    @if ($keySub == 'Nilai Akademik')
                            <optgroup label="Nilai Akademik">
                                @foreach ($subs as $sub)
                                    <option value="{{ $sub->id }}"
                                        {{ $as->kriteria->id == $sub->id ? 'selected' : '' }}>{{ $sub->kriteria }}
                                    </option>
                                @endforeach
                            </optgroup>
                            @endif
                            @endforeach
                            {{-- endfor --}}
                            </optgroup>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <p for="Nilai">Nilai Standar</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nilai" id="inlineRadio1"
                                value="1" {{ $as->nilai == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio1">1 Sangat Tidak Setuju</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nilai" id="inlineRadio2"
                                value="2" {{ $as->nilai == 2 ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio2">2 Tidak Setuju</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nilai" id="inlineRadio3"
                                value="3" {{ $as->nilai == 3 ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio3">3 Ragu - Ragu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nilai" id="inlineRadio4"
                                value="4" {{ $as->nilai == 4 ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio4">4 Setuju</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nilai" id="inlineRadio5"
                                value="5" {{ $as->nilai == 5 ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio5">5 Sangat Setuju</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <select name="tipe" id="tipe"
                            class="form-control @error('tipe')
                                is-invalid
                            @enderror">
                            <option value="NCF" {{ $as->tipe == 'NCF' ? 'selected' : '' }}>NCF</option>
                            <option value="NSF" {{ $as->tipe == 'NSF' ? 'selected' : '' }}>NSF</option>
                        </select>
                        @error('tipe')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode"
                            class="form-control @error('kode') is-invalid @enderror" placeholder="kode"
                            value="{{ isset($as->kode) ? $as->kode : olde('kode') }}"></input>
                        @error('kode')
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
