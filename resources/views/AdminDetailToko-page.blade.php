@extends('Admin-page')

@section('container-admin')
<div class="container">
    <div class="row ">
        <div class="col cards ps-5 py-4">
            <div class="row ">
                <span style="font-size: 24px; font-weight:600">Supplier</span> 
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <label id="nama-toko-label" for="nama-toko" class="form-label" style="font-weight:600">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-sm" id="nama-toko" value="{{$supplier->nama_lengkap}}" placeholder="Kosong" readonly>
                </div>
                <div class="col-3">
                    <label id="rekening-label" for="rekening" class="form-label" style="font-weight:600">Email</label>
                    <input type="text" class="form-control form-control-sm" id="rekening" value="{{$supplier->email}}" placeholder="Kosong" readonly>
                </div>
                <div class="col-3">
                    <label id="pemilikRek-label" for="pemilikRek" class="form-label" style="font-weight:600">No Handphone</label>
                    <input type="text" class="form-control form-control-sm" id="pemilikRek" value="{{$supplier->user->no_handphone}}" placeholder="Kosong" readonly>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <label id="teradaftar-label" for="teradaftar" class="form-label" style="font-weight:600">Tanggal Bergabung</label>
                    <input type="text" class="form-control form-control-sm" id="teradaftar" value="{{$supplier->created_at}}" placeholder="Kosong" readonly>
                </div>
            </div>                
        </div>
    </div>

    <div class="row mb-5">
        <div class="col cards ps-5 py-4">
            <div class="row ">
                <span style="font-size: 24px; font-weight:600">Toko</span> 
            </div>
            <form action="/update_status/{{$toko->id}}" method="post">
                @method('put')
                @csrf
            <div class="row mt-3">
                <div class="col-3">
                    <label id="nama-toko-label" for="nama-toko" class="form-label" style="font-weight:600">Nama Toko</label>
                    <input type="text" class="form-control form-control-sm" id="nama-toko" value="{{$toko->nama_toko}}" placeholder="Kosong" readonly>
                </div>
                <div class="col-3">
                    <label id="rekening-label" for="rekening" class="form-label" style="font-weight:600">No Rekening</label>
                    <input type="text" class="form-control form-control-sm" id="rekening" value="{{$toko->no_rekening}}" placeholder="Kosong" readonly>
                </div>
                <div class="col-3">
                    <label id="pemilikRek-label" for="pemilikRek" class="form-label" style="font-weight:600">Pemilik Rekening</label>
                    <input type="text" class="form-control form-control-sm" id="pemilikRek" value="{{$toko->pemilik_rekening}}" placeholder="Kosong" readonly>
                </div>
                <div class="col-3">
                    <label id="bank-label" for="bank" class="form-label" style="font-weight:600">Nama Bank</label>
                    <input type="text" class="form-control form-control-sm" id="bank" value="{{$toko->bank}}" placeholder="Kosong" readonly>
                </div>
                
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label id="kota-label" for="kota" class="form-label" style="font-weight:600">Kota/Kabupaten</label>
                    <input type="text" class="form-control form-control-sm" id="kota" value="{{$toko->kota}}" placeholder="Kosong" readonly>
                </div>
                <div class="col-2">
                    <label id="identitas1-label" for="identitas1" class="form-label" style="font-weight:600">Kartu Identitas</label>
                    <button style="width: 6rem; display:inline" type="button" class=" btn btn-sm btn-primary" data-bs-toggle="modal" @if($toko->kartu_identitas == "") disabled @endif data-bs-target="#kartuIdentitasModal">Lihat</button>
                        <!-- Modal -->
                        <div class="modal fade" id="kartuIdentitasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Kartu Identitas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    <img id="kartuIdentitas" style="width: 100%" src="{{url($toko->kartu_identitas)}}" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    
                </div>
                <div class="col-2">
                    <label id="identitas2-label" for="identitas2" class="form-label" style="font-weight:600">Foto Identitas</label>
                    <button style="width: 6rem; display:inline" type="button" class=" btn btn-sm btn-primary" data-bs-toggle="modal" @if($toko->foto_identitas == "") disabled @endif data-bs-target="#fotoIdentitasModal">Lihat</button>
                        <!-- Modal -->
                        <div class="modal fade" id="fotoIdentitasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Foto Identitas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    <img id="fotoIdentitas" style="width: 100%" src="{{url($toko->foto_identitas)}}" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label for="alamatToko" class="form-label" style="font-weight:600">Alamat Lengkap</label>
                    <textarea class="form-control form-control-sm" id="alamatToko" rows="3" style="white-space: pre-line" placeholder="Kosong" readonly>{{$toko->alamat}}</textarea>
                </div>
                <div class="col-5">
                    <label for="deskripsiToko" class="form-label" style="font-weight:600">Deskripsi</label>
                    <textarea class="form-control form-control-sm" id="deskripsiToko" rows="3" style="white-space: pre-line" placeholder="Kosong" readonly>{{$toko->deskripsi}}</textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <label id="status-akun-label" for="status-akun" class="form-label ps-2" style="font-weight:600">Status Akun</label><br>
                    <div class="form-check form-check-inline ms-2" style="font-weight: 400; color:black">
                        <input class="form-check-input" type="radio" name="status_akun" id="inlineRadio1" @if($toko->status_akun == "Aktif") checked @endif value="Aktif">
                        <label class="form-check-label" for="inlineRadio1">Aktif</label>
                      </div>
                    <div class="form-check form-check-inline" style="font-weight: 400; color:black">
                        <input class="form-check-input" type="radio" name="status_akun" id="inlineRadio2" @if($toko->status_akun == "Tidak Aktif") checked @endif value="Tidak Aktif">
                        <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
                    </div>
                </div>
                
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <a href="/admin-supplier" type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;">Batal</a>
                    <button type="submit" class="btn btn-sm btn-prm" >Simpan</button>
                </div>
            </div>
            </form>               
        </div>
    </div>

</div>
@endsection