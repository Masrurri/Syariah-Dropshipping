@extends('Main-page')

@section('container')
    <div class="container mt-1">
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
        <div class="row ">
            <div class="col-6 card mt-2 mb-5 ms-3" style="padding: 1.5rem 2rem">
                <div class="row">
                    <span class="cHead ">Edit Produk</span>
                </div>
                <form action="/edit-produk/{{$produk->id}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label id="nama-barang-label" for="nama-barang" class="form-label" style="font-weight:600">Nama Barang</label>
                            <input type="text" class="form-control form-control-sm @error('nama_produk') is-invalid @enderror" name="nama_produk" id="nama-barang" value="{{$produk->nama_produk}}" required>
                            @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label id="nama-barang-label" for="kategori" class="form-label" style="font-weight:600">Kategori</label>
                            <select class="form-select form-select-sm @error('category') is-invalid @enderror" name="category" id="kategori" aria-label=".form-select-sm example" required>
                                @foreach ($categories as $category)
                                    <option @if($category->id == $produk->category_id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label id="nama-barang-label" for="gambar-utama" class="form-label" style="font-weight:600">Gambar Utama @if($produk->gambar_utama) ✔ @endif</label>
                            <input class="form-control form-control-sm @error('gambar_utama') is-invalid @enderror" name="gambar_utama" id="gbrUpload" type="file">
                            @error('gambar_utama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <label for="deskripsi" class="form-label" style="font-weight:600">Deskripsi</label>
                            <textarea class="form-control form-control-sm @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="3" style="white-space: pre-line" required>{{$produk->deskripsi}}
                            </textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label id="harga-label" for="harga" class="form-label" style="font-weight:600">Harga</label>
                            <input type="text" class="form-control form-control-sm @error('harga') is-invalid @enderror" name="harga" id="harga" value="{{$produk->harga}}" required>
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label id="stok-barang-label" for="stok-barang" class="form-label" style="font-weight:600">Stok Barang</label>
                            <input type="number" class="form-control form-control-sm @error('stok') is-invalid @enderror" name="stok" id="stok-barang" value="{{$produk->stok}}" required>
                            @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label id="saran-harga-label" for="saran-harga" class="form-label" style="font-weight:600">Saran Harga Jual</label>
                            <input type="text" class="form-control form-control-sm @error('saran_harga') is-invalid @enderror" name="saran_harga" id="saran-harga" value="{{$produk->saran_harga}}" required>
                            @error('saran_harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label id="berat-label" for="berat" class="form-label" style="font-weight:600">Berat (Kg)</label>
                            <input type="text" class="form-control form-control-sm @error('berat') is-invalid @enderror" name="berat" id="berat" value="{{$produk->berat}}" required>
                            @error('berat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <a href="/detail-produk/{{$produk->id}}" type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;">Batal</a>
                            <button type="submit" class="btn btn-sm btn-prm" style="width:6rem">Simpan</button>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="col-5 ms-4 card mt-2 mb-5" style="padding: 1.5rem 2rem">
                <div class="row">
                    <span class="cHead ">Asset Gambar</span>
                </div>

                    <div class="row">
                        @foreach ($assets as $key => $asset)
                            <div class="col-4 p-2">
                                <img src="{{url($asset->url)}}" alt="..." style="height: 20vh; object-fit:cover; max-width:10vw; min-width:10vw; border-radius:5px;">
                            </div>
                        @endforeach
                        
                    </div>
                    <div class="row mt-4">
                        <div class="col-12"> 
                            <form action="/assets/{{$produk->id}}" method="post" enctype="multipart/form-data">
                            @csrf 
                            <div class="input-group mb-3">
                                <input class="form-control form-control-sm" id="assetUpload" name="asset" accept="image/jpeg, image/jpg, image/png" type="file" required> 
                                <div class="input-group-append">
                                    <button href="" type="submit" class="btn btn-sm btn-primary ms-2" style="width:5rem;">Upload</button> 
                                </div>
                              </div>
                                
                                
                            </form>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-8"> 
                            
                                <button type="button" class="btn btn-sm btn-outline-danger" style="width: 8rem" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hapus Semua</button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content px-2">
                                        
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"><strong>Konfirmasi</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Apakah anda yakin ingin menghapus semua asset gambar yang ada?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/assets/{{$produk->id}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="button" class="mx-2 btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>    
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

            </div>
            
        </div>

    </div>
@endsection