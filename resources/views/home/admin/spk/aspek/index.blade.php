@extends('layouts.app', ['title' => 'Data Aspek'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Aspek</h6>
                        </div>
                        <div class="col-right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahGaleri">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Kriteria</th>
                                    <th>Nama Aspek</th>
                                    <th>Nama Kriteria</th>
                                    <th>Nilai</th>
                                    <th>Tipe</th>
                                    <th>Kode</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aspek as $as)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $as->kriteria->kode }}</td>
                                        <td>{{ $as->kriteria->nama }}</td>
                                        <td>{{ $as->kriteria->kriteria }}</td>
                                        <td>{{ $as->nilai }}</td>
                                        <td>{{ $as->tipe }}</td>
                                        <td>{{ $as->kode }}</td>
                                        <td>
                                            <button class="btn btn-info btn-circle btn-sm" data-toggle="modal"
                                                data-target="#editAspek-{{ $as->id }}">
                                                <i class="fas fa-pencil"></i>
                                            </button>
                                            @include('home.admin.spk.aspek.modalEdit')
                                            <button class="btn btn-danger btn-circle btn-sm delete"
                                                data-id="{{ $as->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="tambahGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('admin.aspek.store') }}" method="post" enctype="multipart/form-data">
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
                                                <option value="{{ $sub->id }}">{{ $sub->kriteria }}</option>
                                            @endforeach
                                        </optgroup>
                                    @else
                                        <optgroup label="Jumlah Saudara Kandung">
                                            @foreach ($subs as $sub)
                                                <option value="{{ $sub->id }}">{{ $sub->kriteria }}</option>
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
                                        <option value="{{ $sub->id }}">{{ $sub->kriteria }}</option>
                                    @endforeach
                                </optgroup>
                            @else
                                <optgroup label="Penghasilan Orang Tua">
                                    @foreach ($subs as $sub)
                                        <option value="{{ $sub->id }}">{{ $sub->kriteria }}</option>
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
                                        <option value="{{ $sub->id }}">{{ $sub->kriteria }}</option>
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
                                    value="1">
                                <label class="form-check-label" for="inlineRadio1">1 Sangat Tidak Setuju</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nilai" id="inlineRadio2"
                                    value="2">
                                <label class="form-check-label" for="inlineRadio2">2 Tidak Setuju</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nilai" id="inlineRadio3"
                                    value="3">
                                <label class="form-check-label" for="inlineRadio3">3 Ragu - Ragu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nilai" id="inlineRadio4"
                                    value="4">
                                <label class="form-check-label" for="inlineRadio4">4 Setuju</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nilai" id="inlineRadio5"
                                    value="5">
                                <label class="form-check-label" for="inlineRadio5">5 Sangat Setuju</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select name="tipe" id="tipe"
                                class="form-control @error('tipe')
                                is-invalid
                            @enderror">
                                <option value="NCF">NCF</option>
                                <option value="NSF">NSF</option>
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
                                class="form-control @error('kode') is-invalid @enderror" placeholder="kode"></input>
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
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            var btnDelete = $('.delete');
            btnDelete.click(function() {
                var id = $(this).data('id');
                var url = `aspek/${id}/destroy`;
                // make confirm using alert
                if (confirm('Apakah anda yakin akan menghapus data ini?')) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            location.reload();
                        }
                    });
                }
            });
        });
    </script>
@endpush
