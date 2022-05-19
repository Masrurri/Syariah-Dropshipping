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
                            <option selected>Semua Produk</option>
                            <option value="1">Terlaris</option>
                            <option value="2">Otomotif</option>
                            <option value="3">Alat Dapur</option>
                          </select>
                        </div>
                        <div class="col-8 position-fixed">
                            <button type="button" class="btn btn-sm btn-scn" style="width:10rem; float:right">Tambah Produk</button>
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
    <div class="row">

    </div>
</div>



    
@endsection