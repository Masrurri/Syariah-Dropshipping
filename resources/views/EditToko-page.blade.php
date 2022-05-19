@extends('Main-page')

@section('container')
<div class="container">
    <div class="row ">
        <div class="col cards ps-5 py-4">
            <div class="row ">
                <span style="font-size: 24px; font-weight:600">Toko</span> 
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label id="nama-toko-label" for="nama-toko" class="form-label" style="font-weight:600">Nama Toko</label>
                    <input type="text" class="form-control form-control-md" id="nama-toko" value="Jaya Abadi" placeholder="Kosong">
                </div>
                <div class="col-5">
                    <label id="kota-label" for="kota" class="form-label" style="font-weight:600">Kota/Kabupaten</label>
                    <select id="kota" class="form-select form-select-md" aria-label=".form-select-sm example">
                        <option selected>Bandung</option>
                        <option value="1">Bekasi</option>
                        <option value="2">Bondowoso</option>
                        <option value="3">Solo</option>
                      </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    <label for="alamatToko" class="form-label" style="font-weight:600">Alamat Lengkap</label>
                    <textarea class="form-control form-control-md" id="alamatToko" rows="3" style="white-space: pre-line" placeholder="Kosong"></textarea>
                </div>
                <div class="col-5">
                    <label for="deskripsiToko" class="form-label" style="font-weight:600">Deskripsi</label>
                    <textarea class="form-control form-control-md" id="deskripsiToko" rows="3" style="white-space: pre-line" placeholder="Kosong"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <button type="button" class="btn btn-md btn-prm" >Simpan</button>
                </div>
            </div>                 
        </div>
    </div>

</div>
@endsection