@extends('Admin-page')

@section('container-admin')
<div class="container">
  @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row mt-2">
        <div class="col-3 cHead p-0">
          Supplier
        </div>
    </div>
    <div class="row">
        <div class="col card cardTbl mt-3 tblMax p-0 scrl" style="height:25rem">
          @if($tokos->isNotEmpty())
            <table class="table table-hover" style="font-size: 14px;">
              <thead class="tblHead">
                <tr>
                  <th scope="col" style="width: 7rem; text-align: center">ID Toko</th>
                  <th scope="col" style="width: 7rem">Nama Toko</th>
                  <th scope="col" style="width: 7rem">Kota</th>
                  <th scope="col" style="width: 14rem">Alamat Lengkap</th>
                  <th scope="col" style="width: 10rem; text-align: center">Status</th>
                  <th scope="col" style="width: 10rem; text-align: center">Identitas</th>
                  <th scope="col" style="width: 10rem; text-align: center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tokos as $toko)
                    <tr>
                      <th style="text-align: center" >{{$toko->id}}</th>
                      <td>{{$toko->nama_toko}}</td>
                      <td>{{$toko->kota}}</td>
                      <td>{{$toko->deskripsi}}</td>
                      <td style="text-align: center" > <button disabled class="@if($toko->status_akun == "Belum Aktif") btnYellow @elseif($toko->status_akun == "Tidak Aktif" or $toko->status_akun == "Ditolak") btnRed @else btnGreen @endif">{{$toko->status_akun}}</button> </td>
                      <td style="text-align: center" >
                        @if($toko->kartu_identitas == "" & $toko->foto_identitas == "") <button disabled class="btnRed">Tidak Lengkap </button> @else  <button disabled class="btnGreen">Lengkap </button> @endif 
                        
                      </td>
                      <td style="text-align: center" > <a href="/admin-detail-toko/{{$toko->id}}" type="button" class="btn-sm btn-prm">Detail</a> </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <strong class="ms-5 py-4" style="font-size: 24px; color:#E0ECFF">Tidak ada akun terdaftar</strong> 
          @endif
            
        </div>
    </div>   
</div>
@endsection