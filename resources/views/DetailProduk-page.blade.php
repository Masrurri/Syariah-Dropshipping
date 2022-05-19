@extends('Main-page')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a href="/produk"><i class="fa fa-chevron-left me-2" aria-hidden="true"></i>Kembali</a> 
            </div>
        </div>
        <div class="row ">
            <div class="col cards p-5">
                <div class="row ">
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="assets/img/prdk.png" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/img/prdk.png" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/img/prdk.png" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-scn" style="width:10rem;" data-bs-toggle="modal" data-bs-target="#assetModal">Asset Gambar</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="assetModal" tabindex="-1" aria-labelledby="assetModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    
                                <div class="modal-header">
                                    <h5 class="modal-title" id="assetModalLabel">Asset Gambar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body container">
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <img src="assets/img/prdk.png" alt="..." style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/img/prdk.png" alt="..." style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/img/prdk.png" alt="..." style="width: 100%">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="assets/img/prdk.png" alt="..." style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/img/prdk.png" alt="..." style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/img/prdk.png" alt="..." style="width: 100%">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-8">
                                            <input class="form-control form-control-sm" id="assetUpload" type="file" multiple>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button href="" type="button" class="btn btn-sm btn-red" style="width: 8rem">Hapus Semua</button>
                                    <button href="" type="button" class="btn btn-sm btn-prm" style="">Download</button>
                                </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-9 ps-5" style="color: black">
                        <span class="card-text row" style="font-size: 16px;">Produk ID: A21DHJKKL19</span>
                        <span class="card-text row mt-3" style="font-size: 18px;">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</span>
                        <span class="card-text row mt-2" style="font-size: 16px; font-weight:700">Harga: Rp35.000</span>
                        <span class="card-text row" style="font-size: 16px; font-weight:700">Saran Penjualan: Rp40.000</span>
                        <span class="card-text row" style="font-size: 16px; font-weight:600">Stok: 50</span>
                        <span class="card-text row" style="font-size: 16px; font-weight:600">Berat: 1 Kg</span>
                        <span class="card-text row mt-2" style="font-size: 16px; font-weight:600">Dikirim dari: Jakarta</span>
                        <span class="card-text row" style="font-size: 16px; font-weight:600">Supplier: Toko Jaya Abadi</span>
                        <span class="card-text row mt-2" style="font-size: 16px; white-space: pre-line">Cutting Mat / Alas Potong Joyko CM-A3
                            >Harga yang tertera adalah 1pcs
                            >Ukuran Produk : Panjang 45 cm x Lebar 30 cm ( A3 )
                            >Warna Produk : Hijau
                            >Digunakan sebagai alas untuk memotong kertas, karton menggunakan Cutter
                        </span>
                        <span class="row mt-4">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;" data-bs-toggle="modal" data-bs-target="#editProdukModal">Edit</button>
                            
                            <button type="button" class="btn btn-sm btn-red" style="margin-right: 1rem;">Hapus</button>
                        </span>
                        <!-- Modal -->
                        <div class="modal fade" id="editProdukModal" tabindex="-1" aria-labelledby="editProdukModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content px-3 py-2">
                                <div class="modal-header">
                                <h5 class="modal-title" id="editProdukModalLabel" style="font-weight:600">Edit Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body container">
                                    <div class="row">
                                        <div class="col">
                                            <label id="nama-barang-label" for="nama-barang" class="form-label" style="font-weight:600">Nama Barang</label>
                                            <input type="text" class="form-control form-control-sm" id="nama-barang" value="Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label id="nama-barang-label" for="kategori" class="form-label" style="font-weight:600">Kategori</label>
                                            <select class="form-select form-select-sm" id="kategori" aria-label=".form-select-sm example">
                                                <option selected>Alat Tulis</option>
                                                <option value="1">Pakaian</option>
                                                <option value="2">Makanan</option>
                                                <option value="3">Otomotif</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label id="nama-barang-label" for="gambar-utama" class="form-label" style="font-weight:600">Gambar Utama</label>
                                            <input class="form-control form-control-sm" id="gbrUpload" type="file">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <label for="deskripsi" class="form-label" style="font-weight:600">Deskripsi</label>
                                            <textarea class="form-control form-control-sm" id="deskripsi" rows="3" style="white-space: pre-line">Cutting Mat / Alas Potong Joyko CM-A3
>Harga yang tertera adalah 1pcs
>Ukuran Produk : Panjang 45 cm x Lebar 30 cm ( A3 )
>Warna Produk : Hijau
>Digunakan sebagai alas untuk memotong kertas, karton menggunakan Cutter
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label id="harga-label" for="harga" class="form-label" style="font-weight:600">Harga</label>
                                            <input type="text" class="form-control form-control-sm" id="harga" value="Rp35.000.00">
                                        </div>
                                        <div class="col-6">
                                            <label id="stok-barang-label" for="stok-barang" class="form-label" style="font-weight:600">Stok Barang</label>
                                            <input type="text" class="form-control form-control-sm" id="stok-barang" value="50">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label id="saran-harga-label" for="saran-harga" class="form-label" style="font-weight:600">Saran Harga Jual</label>
                                            <input type="text" class="form-control form-control-sm" id="saran-harga" value="Rp40.000.00">
                                        </div>
                                        <div class="col-6">
                                            <label id="berat-label" for="berat" class="form-label" style="font-weight:600">Berat</label>
                                            <input type="text" class="form-control form-control-sm" id="berat" value="500 Gram">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-sm btn-prm" >Simpan</button>
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