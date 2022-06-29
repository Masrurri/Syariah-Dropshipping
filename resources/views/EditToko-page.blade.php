@extends('Main-page')

@section('container')
<div class="container">
    <div class="row ">
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
        <div class="col cards px-5 py-4 mb-5">
            <div class="col-12">
                <div class="row ">
                    <span style="font-size: 24px; font-weight:600">Toko</span> 
                </div>
                <form action="/edit-toko/{{auth()->user()->supplier->toko->id}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row mt-3">
                        @if($toko->status_akun == "Belum Aktif")
                            <div class="col-10 mx-3 alert alert-warning" style="">
                                Status toko anda saat ini masih <strong>Belum Aktif</strong>, segera lengkapi identitas anda terlebih dahulu agar dapat dikonfirmasi oleh Admin.
                            </div>
                        @elseif($toko->status_akun == "Ditolak")
                            <div class="col-10 mx-3 alert alert-danger" style="">
                                Status verifikasi identitas anda <strong>Ditolak</strong> oleh admin, segera lengkapi identitas anda sesuai dengan ketentuan agar dapat dikonfirmasi oleh Admin.
                            </div>
                        @elseif($toko->status_akun == "Tidak Aktif")
                            <div class="col-10 mx-3 alert alert-danger" style="">
                                Status akun anda saat ini sedang <strong>Dinonaktifkan</strong> oleh admin, untuk mengaktifkan kembali silahkan hubungi admin.
                            </div>
                        @endif
                        @if($toko->status_akun != "Aktif")
                            <div class="@if($toko->status_akun == "Aktif")col-2 @else col-3 @endif">
                                
                                    <label id="identitas1-label" for="identitas1" class="form-label" style="font-weight:600">Kartu Identitas</label>
                                    <img src="{{url($toko->kartu_identitas)}}" alt="..." style="height: 20vh; object-fit:cover; width:15vw; min-width:10vw; border-radius:5px;">
                                    <input id="identitas1" class="mt-2 form-control form-control-sm @error('kartu_identitas') is-invalid @enderror" name="kartu_identitas" type="file" accept="image/jpeg, image/jpg, image/png" value="{{$toko->kartu_identitas}}" required>
                                    <div class="form-text" style="font-size: 13px">
                                        *Unggah kartu identitas anda dalam format foto KTP/SIM (maksimal 2 MB)
                                    </div>
                                    @error('kartu_identitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                
                            </div>
                            <div class="@if($toko->status_akun == "Aktif")col-2 @else col-3 @endif"> 
                                
                                    <label id="identitas2-label" for="identitas2" class="form-label" style="font-weight:600">Foto Identitas</label>
                                    <img src="{{url($toko->foto_identitas)}}" alt="..." style="height: 20vh; object-fit:cover; width:15vw; min-width:10vw; border-radius:5px;">
                                    <input id="identitas2" class="mt-2 form-control form-control-sm @error('foto_identitas') is-invalid @enderror" name="foto_identitas" type="file" accept="image/jpeg, image/jpg, image/png" value="{{$toko->foto_identitas}}" required>
                                    <div class="form-text" style="font-size: 13px">
                                        *Unggah kartu identitas anda dalam format foto KTP/SIM (maksimal 2 MB)
                                    </div>
                                    @error('foto_identitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                
                            </div>
                        @endif
                        
                    </div>
                    <div class="row @if($toko->status_akun == "Tidak Aktif") mt-3 @endif">
                        <div class="col-3">
                            <label id="nama-toko-label" for="nama-toko" class="form-label" style="font-weight:600">Nama Toko</label>
                            <input type="text" class="form-control form-control-sm @error('nama_toko') is-invalid @enderror" name="nama_toko" id="nama-toko" value="{{$toko->nama_toko}}" placeholder="Kosong">
                            @error('nama_toko')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label id="kota-label" for="kota" class="form-label" style="font-weight:600">Kota/Kabupaten</label>
                            <input type="text" class="form-control form-control-sm @error('kota') is-invalid @enderror" name="kota" id="kota" value="{{$toko->kota}}" placeholder="Kosong">
                            @error('kota')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label id="rekening-label" for="rekening" class="form-label" style="font-weight:600">No Rekening</label>
                            <input type="text" class="form-control form-control-sm @error('no_rekening') is-invalid @enderror" name="no_rekening" id="rekening" value="{{$toko->no_rekening}}" placeholder="Kosong">
                            @error('no_rekening')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label id="pemilikRek-label" for="pemilikRek" class="form-label" style="font-weight:600">Pemilik Rekening</label>
                            <input type="text" class="form-control form-control-sm @error('pemilik_rekening') is-invalid @enderror" name="pemilik_rekening" id="pemilikRek" value="{{$toko->pemilik_rekening}}" placeholder="Kosong">
                            @error('pemilik_rekening')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label id="bank-label" for="bank" class="form-label" style="font-weight:600">Nama Bank</label>
                            <input type="text" class="form-control form-control-sm @error('bank') is-invalid @enderror" name="bank" id="bank" value="{{$toko->bank}}" placeholder="Kosong">
                            @error('bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-5">
                            <label for="alamatToko" class="form-label" style="font-weight:600">Alamat Lengkap</label>
                            <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" name="alamat" id="alamatToko" rows="3" style="white-space: pre-line" placeholder="Kosong">{{$toko->alamat}}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="deskripsiToko" class="form-label" style="font-weight:600">Deskripsi Toko</label>
                            <textarea class="form-control form-control-sm @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsiToko" rows="3" style="white-space: pre-line" placeholder="Kosong">{{$toko->deskripsi}}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <a href="/dashboard" type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;">Batal</a>
                            <button type="submit" class="btn btn-sm btn-prm" >Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
                          
        </div>
    </div>

</div>
@endsection