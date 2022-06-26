@extends('Main-page')

@section('container')
<div class="container">
    <div class="row ">
        <div class="col-2">
            <span style="font-size: 24px; font-weight:600;">Profile</span> 
            
        </div>
        <div class="col-10">
            @if(session()->has('success'))
                <span class="col-6 alert alert-success alert-dismissible fade show py-2 px-4 my-0 mx-3" role="alert" style="font-size:14px; font-weight:600; float:right">  
                    {{ session('success') }}
                <button type="button" class="btn-sm btn" data-bs-dismiss="alert" aria-label="Close" style="margin-top:-0.1rem; padding:0%; float: right;"><i class="fa fa-times" aria-hidden="true"></i></button>
                </span>
            @endif

            @if(session()->has('loginError'))
            <span class="col-6 alert alert-danger alert-dismissible fade show py-2 px-4 my-0 mx-3" role="alert" style="font-size:14px; font-weight:600; float:right">  
                {{ session('loginError') }}
                <button type="button" class="btn-sm btn" data-bs-dismiss="alert" aria-label="Close" style="margin-top:-0.1rem; padding:0%; float: right;"><i class="fa fa-times" aria-hidden="true"></i></button>
            </span>
            @endif
        </div>
        
     </div>
    <div class="row cards ps-4 py-4 w-100">
        <div class="col-6 ">
            
            <div class="row ms-3 mt-3">
                <div class="card mb-3" style="max-width: 34.4vw; max-height:30rem;">
                    <div class="row g-0">
                      <div class="col-md-12">
                            <div class="card-body">
                                <form action="/user/update" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="row">
                                        <h5 class="card-title" style="font-size: 16px; font-weight:700">Data Diri</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label id="nama-lengkap-label" for="nama-lengkap" class="form-label" style="font-weight:600; font-size: 14px">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" class="form-control form-control-sm @error('nama_lengkap') is-invalid @enderror" id="nama-lengkap" value="{{ $nama_lengkap }}" placeholder="Kosong" required>
                                        </div>
                                        <div class="col-6">
                                            <label id="email-label" for="email" class="form-label" style="font-weight:600; font-size: 14px">Email</label>
                                            <input type="text" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" value="{{ $email }}" placeholder="Kosong" required>
                                        </div> 
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label id="telepon-label" for="telepon" class="form-label" style="font-weight:600; font-size: 14px">No Handphone</label>
                                            <input type="text" name="no_handphone" class="form-control form-control-sm @error('no_handphone') is-invalid @enderror" id="telepon" value="{{ $no_handphone }}" placeholder="Kosong" required>
                                        </div> 
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-8">
                                            <button type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;" onclick="history.back()">Batal</button>
                                            <button type="submit" class="btn btn-sm btn-prm" >Simpan</button>
                                        </div>
                                    </div>
                                </form>  
                            </div>
                      </div>
                    </div>
                </div>
            </div>              
        </div>
        <div class="col-6">
            <div class="row mt-3">
                <div class="card mb-3" style="max-width: 550px; max-height:30rem;">
                    <div class="row g-0">
                      <div class="col-md-12">
                        <div class="card-body">
                            <form action="/user/update_password" method="post">
                                @method('put')
                                @csrf
                            <div class="row">
                                <h5 class="card-title" style="font-size: 16px; font-weight:700">Ubah Password</h5>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label id="pw-lama-label" for="pw-lama" class="form-label" style="font-weight: 600; font-size: 14px">Password Lama</label>
                                    <input name="pw_lama" type="password" class="form-control-sm form-control" id="pw-lama" value="" placeholder="">
                                </div>
    
                            </div>
                            <div class="row mt-2 mb-1">
                                <div class="col-6">
                                    <label id="pw-baru-label" for="pw-baru" class="form-label" style="font-weight: 600; font-size: 14px">Password Baru</label>
                                    <input name="pw_baru" type="password" class="form-control-sm form-control" id="pw-baru" value="" placeholder="">
                                </div> 
                            </div>
                            <div class="row mt-4">
                                <div class="col-8">
                                    <button type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;" onclick="history.back()">Batal</button>
                                    <button type="submit" class="btn btn-sm btn-prm" >Simpan</button>
                                </div>
                            </div>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </div>

</div>
@endsection