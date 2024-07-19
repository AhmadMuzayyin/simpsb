<div class="col">
    <label for="nama_ayah">Nama Ayah</label>
    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror"
        name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah"
        value="{{ isset($item) ? $item->nama_ayah : old('nama_ayah') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
    <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
        name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah"
        value="{{ isset($item) ? $item->pekerjaan_ayah : old('pekerjaan_ayah') }}"
        disabled>
</div>
<div class="col">
    <label for="kondisi_ayah">Kondisi Ayah</label>
    <input type="text" class="form-control @error('kondisi_ayah') is-invalid @enderror"
        name="kondisi_ayah" id="kondisi_ayah" placeholder="Kondisi Ayah"
        value="{{ isset($item) ? $item->kondisi_ayah : old('kondisi_ayah') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="penghasilan_ayah">Penghasilan Ayah</label>
    <input type="number"
        class="form-control @error('penghasilan_ayah') is-invalid @enderror"
        name="penghasilan_ayah" id="penghasilan_ayah" placeholder="Penghasilan Ayah"
        value="{{ isset($item) ? $item->penghasilan_ayah : old('penghasilan_ayah') }}"
        disabled>
</div>
<div class="col">
    <label for="telpon_ayah">Telpon Ayah</label>
    <input type="number" class="form-control @error('telpon_ayah') is-invalid @enderror"
        name="telpon_ayah" id="telpon_ayah" placeholder="Telpon Ayah"
        value="{{ isset($item) ? $item->telpon_ayah : old('telpon_ayah') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="nama_ibu">Nama Ibu</label>
    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror"
        name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu"
        value="{{ isset($item) ? $item->nama_ibu : old('nama_ibu') }}"
        disabled>
</div>
<div class="col">
    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
    <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
        name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekrjaan Ibu"
        value="{{ isset($item) ? $item->pekerjaan_ibu : old('pekerjaan_ibu') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="kondisi_ibu">Kondisi Ibu</label>
    <input type="text" class="form-control @error('kondisi_ibu') is-invalid @enderror"
        name="kondisi_ibu" id="kondisi_ibu" placeholder="Penghasilan Ibu"
        value="{{ isset($item) ? $item->kondisi_ibu : old('kondisi_ibu') }}"
        disabled>
</div>
<div class="col">
    <label for="penghasilan_ibu">Penghasilan Ibu</label>
    <input type="number" class="form-control @error('penghasilan_ibu') is-invalid @enderror"
        name="penghasilan_ibu" id="penghasilan_ibu" placeholder="Penghasilan Ibu"
        value="{{ isset($item) ? $item->penghasilan_ibu : old('penghasilan_ibu') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="telpon_ibu">Telpon Ibu</label>
    <input type="number" class="form-control @error('telpon_ibu') is-invalid @enderror"
        name="telpon_ibu" id="telpon_ibu" placeholder="Telpon Ibu"
        value="{{ isset($item) ? $item->telpon_ibu : old('telpon_ibu') }}"
        disabled>
</div>
<div class="col">
    <label for="alamat_ortu">Alamat Orang Tua</label>
    <input type="text" class="form-control @error('alamat_ortu') is-invalid @enderror"
        name="alamat_ortu" id="alamat_ortu" placeholder="Alamat Orang Tua"
        value="{{ isset($item) ? $item->alamat_ortu : old('alamat_ortu') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="nama_wali">Nama Wali</label>
    <input type="text" class="form-control @error('nama_wali') is-invalid @enderror"
        name="nama_wali" id="nama_wali" placeholder="Nama Wali"
        value="{{ isset($item) ? $item->nama_wali : old('nama_wali') }}"
        disabled>
</div>
<div class="col">
    <label for="pekerjaan_wali">Pekerjaan Wali</label>
    <input type="text" class="form-control @error('pekerjaan_wali') is-invalid @enderror"
        name="pekerjaan_wali" id="pekerjaan_wali" placeholder="Pekerjaan Wali"
        value="{{ isset($item) ? $item->pekerjaan_wali : old('pekerjaan_wali') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="kondisi_wali">Kondisi Wali</label>
    <input type="text" class="form-control @error('kondisi_wali') is-invalid @enderror"
        name="kondisi_wali" id="kondisi_wali" placeholder="Kondisi Wali"
        value="{{ isset($item) ? $item->kondisi_wali : old('kondisi_wali') }}"
        disabled>
</div>
<div class="col">
    <label for="penghasilan_wali">Penghasilan Wali</label>
    <input type="number"
        class="form-control @error('penghasilan_wali') is-invalid @enderror"
        name="penghasilan_wali" id="penghasilan_wali" placeholder="Penghasilan Wali"
        value="{{ isset($item) ? $item->penghasilan_wali : old('penghasilan_wali') }}"
        disabled>
</div>
</div>
<div class="row mt-2">
<div class="col">
    <label for="alamat_wali">Alamat Wali</label>
    <input type="text" class="form-control @error('alamat_wali') is-invalid @enderror"
        name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali"
        value="{{ isset($item) ? $item->alamat_wali : old('alamat_wali') }}"
        disabled>
</div>
<div class="col">
    <label for="telpon_wali">Telpon Wali</label>
    <input type="number" class="form-control @error('telpon_wali') is-invalid @enderror"
        name="telpon_wali" id="telpon_wali" placeholder="Telpon Wali"
        value="{{ isset($item) ? $item->telpon_wali : old('telpon_wali') }}"
        disabled>
</div>
