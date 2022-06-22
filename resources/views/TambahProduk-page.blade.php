@extends('Main-page')

@section('container')
    <div class="container mt-1">
        <div class="row ">
            <div class="col card mt-2 p-5 mb-4">
                <div class="row">
                    <span class="cHead ">Tambah Produk</span>
                </div>
                <form action="/tambah-produk" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label id="nama-barang-label" for="nama-barang" class="form-label" style="font-weight:600">Nama Barang</label>
                            <input type="text" class="form-control form-control-sm @error('nama_produk') is-invalid @enderror" name="nama_produk" id="nama-barang" value="" required>
                            @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label id="nama-barang-label" for="kategori" class="form-label" style="font-weight:600">Kategori</label>
                            <select class="form-select form-select-sm @error('category') is-invalid @enderror" name="category" id="kategori" aria-label=".form-select-sm example" required>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="deskripsi" class="form-label" style="font-weight:600">Deskripsi</label>
                            <textarea class="form-control form-control-sm @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="3" style="white-space: pre-line" required></textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label id="nama-barang-label" for="gambar-utama" class="form-label" style="font-weight:600">Gambar Utama</label>
                            <input class="form-control form-control-sm @error('gambar_utama') is-invalid @enderror" name="gambar_utama" id="gbrUpload" type="file" accept="image/jpeg, image/jpg, image/png" required>
                            @error('gambar_utama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> 
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <label id="harga-label" for="harga" class="form-label" style="font-weight:600">Harga</label>
                            <input type="number" min="1" class="form-control form-control-sm @error('harga') is-invalid @enderror" name="harga" id="harga" value="" required>
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label id="stok-barang-label" for="stok-barang" class="form-label" style="font-weight:600">Stok Barang</label>
                            <input type="number" min="0" class="form-control form-control-sm @error('stok') is-invalid @enderror" name="stok" id="stok-barang" value="" required>
                            @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <label id="saran-harga-label" for="saran-harga" class="form-label" style="font-weight:600">Saran Harga Jual</label>
                            <input type="number" min="1" class="form-control form-control-sm @error('saran_harga') is-invalid @enderror" name="saran_harga" id="saran-harga" value="" required>
                            @error('saran_harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label id="berat-label" for="berat" class="form-label" style="font-weight:600">Berat</label>
                            <input type="number" min="0" step="0.1" class="form-control form-control-sm @error('berat') is-invalid @enderror" name="berat" id="berat" value="" required>
                            @error('berat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <a type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;" href="/myproduk">Batal</a>
                            <button type="submit" class="btn btn-sm btn-prm" style="width:8rem" onclick="setValue()">Tambahkan</button>
                        </div>
                        
                    </div>
                </form>
            </div>
            
        </div>

    </div>
    <script>
        function setValue(){
            var x = parseInt((document.getElementByName("harga").value).replace ( /\D+/g, ""));
            document.getElementByName("harga").value = x;
        }
    </script>
@endsection