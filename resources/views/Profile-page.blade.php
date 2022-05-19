@extends('Main-page')

@section('container')
<div class="container">
    <div class="row ">
        <div class="col cards ps-5 py-4">
            <div class="row ">
                <span style="font-size: 24px; font-weight:600">Profile</span> 
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label id="nama-lengkap-label" for="nama-lengkap" class="form-label" style="font-weight:600">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-md" id="nama-lengkap" value="Monkey D Luffy" placeholder="Kosong">
                </div>
                <div class="col-4">
                    <label id="rekening-label" for="rekening" class="form-label" style="font-weight:600">No Rekening</label>
                    <input type="text" class="form-control form-control-md" id="rekening" value="22134 4411 112" placeholder="Kosong">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label id="telepon-label" for="telepon" class="form-label" style="font-weight:600">No Handphone</label>
                    <input type="text" class="form-control form-control-md" id="telepon" value="089927166429" placeholder="Kosong">
                </div>
                <div class="col-4">
                    <label id="bank-label" for="bank" class="form-label" style="font-weight:600">Nama Bank</label>
                    <input type="text" class="form-control form-control-md" id="bank" value="Mandiri" placeholder="Kosong">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label id="email-label" for="email" class="form-label" style="font-weight:600">Email</label>
                    <input type="text" class="form-control form-control-md" id="email" value="pirateking@gmali.com" placeholder="Kosong">
                </div>
                <div class="col-3">
                    <label id="identitas1-label" for="identitas1" class="form-label" style="font-weight:600">Kartu Identitas</label>
                    <input id="identitas1" class="form-control form-control-md" type="file">
                    <div class="form-text">
                        *Unggah kartu identitas anda dalam format foto
                    </div>
                    
                </div>
                <div class="col-3">
                    <label id="identitas2-label" for="identitas2" class="form-label" style="font-weight:600">Foto Identitas</label>
                    <input id="identitas2" class="form-control form-control-md" type="file">
                    <div class="form-text">
                        *Unggah Foto diri anda dengan memegang kartu identitas
                    </div>
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