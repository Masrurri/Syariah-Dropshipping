@extends('Main-page')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-2">
            <!-- Example single danger button -->
            {{-- <div class="dropdown">
                <button type="button" class="btn btn-primary w-100 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                    Semua Produk 
                    <i class="fa fa-caret-down mt-1" style="float: right" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#home" data-toggle="tab">Action</a></li>
                    <li><a class="dropdown-item active" href="#profile" data-toggle="tab">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>>
                </ul>
            </div> --}}
            <ul class="nav nav-pills position-fixed" id="pills-tab" role="tablist" style="width: 5rem">
                <li class="nav-item" role="presentation">
                  <button style="width: 9rem; text-align:left" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Produk</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button style="width: 9rem; text-align:left" class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Supplier</button>
                </li>
            </ul>
        </div>
        <div class="col-10">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row" style="display: block; height:3.6rem; z-index:1;">
                        <div class="col-3 position-fixed" style="z-index:1;">
                          <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected>Terbaru</option>
                            <option value="1">Pakaian</option>
                            <option value="2">Otomotif</option>
                            <option value="3">Alat Dapur</option>
                          </select>
                        </div>
                        <div class="col-8 position-fixed">
                            <button type="button" class="btn btn-sm btn-scn" style="width:10rem; float:right" data-bs-toggle="modal" data-bs-target="#tambahProdukModal">Tambah Produk</button>
                        </div>
                    </div>
                    <div class="row row-cols-sm-4 g-3" style="overflow-y: scroll; max-height:29rem">
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="/detail-produk" class="btn btn-sm btn-scn my-3" style="width: 4rem">Detail</a>
                                <a href="/checkout" class="btn btn-sm btn-prm mx-2">Beli</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="#" class="btn btn-sm btn-primary my-3">Detail</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="#" class="btn btn-sm btn-primary my-3">Detail</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="#" class="btn btn-sm btn-primary my-3">Detail</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="#" class="btn btn-sm btn-primary my-3">Detail</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="#" class="btn btn-sm btn-primary my-3">Detail</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="#" class="btn btn-sm btn-primary my-3">Detail</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                              <img src="assets/img/prdk.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:40%">
                              <div class="card-body">
                                <h5 class="card-title" style="font-size: 12px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 12px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Stok: 50</span><br>
                                <a href="#" class="btn btn-sm btn-primary my-3">Detail</a>
                              </div>
                            </div>
                        </div>
    
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <br>
                    <div class="row row-cols-sm-4 g-4 ps-2" style="overflow-y: scroll; max-height:30rem">
                        <div class="col cardToko">
                          <div style="font-weight: 600">Toko Jaya Abadi</div>
                          <div class="infoToko" >Menjual segala peralatan rumah tanggaasdsadasdasdasdasasdassdasdasdas</div>
                          <div class="infoToko" >Bandung Barat, Indonesia</div>
                          <div class="infoToko" >+6219903244512</div>
                          <img src="assets/img/spl.png" alt="" style="width: 15%; margin-top:0rem; float:right">
                        </div>
                        <div class="col cardToko">
                            2
                        </div>
                        <div class="col cardToko">
                            3
                        </div>
                        <div class="col cardToko">
                            4
                        </div>
                        <div class="col cardToko">
                            <div style="font-weight: 600">Toko Jaya Abadi</div>
                            <div class="infoToko" >Menjual segala peralatan rumah tanggaasdsadasdasdasdasasdassdasdasdas</div>
                            <div class="infoToko" >Bandung Barat, Indonesia</div>
                            <div class="infoToko" >+6219903244512</div>
                            <img src="assets/img/spl.png" alt="" style="width: 15%; margin-top:0rem; float:right">
                          </div>
                          <div class="col cardToko">
                              2
                          </div>
                          <div class="col cardToko">
                              3
                          </div>
                          <div class="col cardToko">
                              4
                          </div>
                          <div class="col cardToko">
                            <div style="font-weight: 600">Toko Jaya Abadi</div>
                            <div class="infoToko" >Menjual segala peralatan rumah tanggaasdsadasdasdasdasasdassdasdasdas</div>
                            <div class="infoToko" >Bandung Barat, Indonesia</div>
                            <div class="infoToko" >+6219903244512</div>
                            <img src="assets/img/spl.png" alt="" style="width: 15%; margin-top:0rem; float:right">
                          </div>
                          <div class="col cardToko">
                              2
                          </div>
                          <div class="col cardToko">
                              3
                          </div>
                          <div class="col cardToko">
                              4
                          </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambahProdukModal" tabindex="-1" aria-labelledby="editProdukModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content px-3 py-2">
          <div class="modal-header">
          <h5 class="modal-title" id="editProdukModalLabel" style="font-weight:600">Tambah Produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body container">
              <div class="row">
                  <div class="col">
                      <label id="nama-barang-label" for="nama-barang" class="form-label" style="font-weight:600">Nama Barang</label>
                      <input type="text" class="form-control form-control-sm" id="nama-barang" value="">
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
                      <textarea class="form-control form-control-sm" id="deskripsi" rows="3" style="white-space: pre-line"></textarea>
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-6">
                      <label id="harga-label" for="harga" class="form-label" style="font-weight:600">Harga</label>
                      <input type="text" class="form-control form-control-sm" id="harga" value="">
                  </div>
                  <div class="col-6">
                      <label id="stok-barang-label" for="stok-barang" class="form-label" style="font-weight:600">Stok Barang</label>
                      <input type="text" class="form-control form-control-sm" id="stok-barang" value="">
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-6">
                      <label id="saran-harga-label" for="saran-harga" class="form-label" style="font-weight:600">Saran Harga Jual</label>
                      <input type="text" class="form-control form-control-sm" id="saran-harga" value="">
                  </div>
                  <div class="col-6">
                      <label id="berat-label" for="berat" class="form-label" style="font-weight:600">Berat</label>
                      <input type="text" class="form-control form-control-sm" id="berat" value="">
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-sm btn-prm" >Tambahkan</button>
          </div>
      </div>
      </div>
    </div>

</div>



    
@endsection