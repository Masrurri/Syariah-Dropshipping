@extends('Main-page')

@section('container')
<div class="container ">
    <div class="row ">
        <div class="col-2">
            <span style="font-size: 24px; font-weight:600;">Checkout</span> 
        </div>
        
     </div>
    <div class="row cards ps-4 py-4 w-100">
        <div class="col-6 ">
            <div class="row mt-3 ms-1">
                <div class="col">
                    <div class="card mb-3" style="max-width: 34.4vw; max-height:10rem">
                        <div class="row g-0">
                          <div class="col-md-3">
                            <img src="assets/img/prdk.png" class="img-fluid rounded-start" alt="..." style="object-fit: cover; height:100%; width:100%;">
                            {{-- <input type="text" value="{{ date('d-m-Y H:i') }}"> --}}
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px">Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3</h5>
                                <span class="card-text" style="font-size: 14px; font-weight:700">Harga: Rp35.000</span><br>
                                <span class="card-text m-0" style="font-size: 14px; font-weight:700">Saran Penjualan: Rp40.000</span><br>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ms-3">
                <div class="card mb-3" style="max-width: 34.4vw; max-height:30rem;">
                    <div class="row g-0">
                      <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <label id="jumlah-label" for="jumlah" class="form-label" style="font-weight: 600; font-size: 14px">Jumlah</label>
                                        <input type="number" class="form-control form-control-sm" id="jumlah" value="1" min="1" >
                                    </div> 
                                    <div class="col-9">
                                        <label id="keterangan-label" for="keterangan" class="form-label" style="font-weight: 600; font-size: 14px">Keterangan</label>
                                        <input type="text" class="form-control-sm form-control" id="keterangan" value="" placeholder="Catatan">
                                    </div> 
                                </div>
                                <div class="row mt-3">
                                    <div class="col-8">
                                        <label id="label-pengiriman-label" for="label-pengiriman" class="form-label" style="font-weight:600; font-size: 14px">Label Pengiriman</label>
                                        <input class="form-control form-control-sm" id="label-pengiriman" type="file">
                                        <div id="labelHelp" class="form-text" style="font-size: 14px">*Upload label pengiriman dari marketplace jika ada</div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <label id="pengirim-label" for="pengirim" class="form-label" style="font-weight: 600; font-size: 14px">Pengirim </label>
                                        <input type="text" class="form-control form-control-sm" id="pengirim" value="" min="" >
                                    </div> 
                                    <div class="col-6">
                                        <label id="telp-pengirim-label" for="telp-pengirim" class="form-label" style="font-weight: 600; font-size: 14px">Telp. Pengirim</label>
                                        <input type="tel" class="form-control-sm form-control" id="telp-pengirim" value="">
                                    </div> 
                                </div>

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
                            <div class="row">
                                <h5 class="card-title" style="font-size: 16px; font-weight:700">Pengiriman</h5>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label id="kota-tujuan-label" for="kota-tujuan" class="form-label" style="font-weight:600; font-size: 14px">Kota Tujuan</label>
                                    <select class="form-select form-select-sm" id="kota-tujuan" aria-label=".form-select-sm example">
                                        <option selected>Kota/Kabupaten</option>
                                        <option value="1">Solo</option>
                                        <option value="2">Jakarta</option>
                                        <option value="3">Bekasi</option>
                                    </select>
                                </div>
                                <div class="col-5">
                                    <label id="jasa-pengiriman-label" for="jasa-pengiriman" class="form-label" style="font-weight:600; font-size: 14px">Jasa Pengiriman</label>
                                    <select class="form-select form-select-sm" id="jasa-pengiriman" aria-label=".form-select-sm example">
                                        <option selected>JNE-OKE</option>
                                        <option value="1">JNE-REG</option>
                                        <option value="2">JNE-YES</option>
                                        <option value="3">SiCepat-BEST</option>
                                        <option value="4">SiCepat-REG</option>
                                        <option value="5">SiCepat-SIUNT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label id="ongkir-label" for="ongkir" class="form-label" style="font-weight: 600; font-size: 14px">Biaya Ongkir</label>
                                    <input type="text" class="form-control-sm form-control" id="ongkir" value="" placeholder="Rp0" readonly>
                                </div> 
                                <div class="col-3">
                                    <button type="button" class="btn btn-sm btn-prm" style="margin-top: 2rem">Cek</button>
                                </div> 
                            </div>
                            
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 550px; max-height:30rem;">
                    <div class="row g-0">
                      <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <label id="penerima-label" for="penerima" class="form-label" style="font-weight: 600; font-size: 14px">Penerima</label>
                                    <input type="text" class="form-control-sm form-control" id="penerima" value="" placeholder="">
                                </div>
                                <div class="col-5">
                                    <label id="telp-penerima-label" for="telp-penerima" class="form-label" style="font-weight: 600; font-size: 14px">Telp. Penerima</label>
                                    <input type="text" class="form-control-sm form-control" id="telp-penerima" value="" placeholder="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-10 mb-2">
                                    <label for="deskripsi" class="form-label" style="font-weight:600; font-size: 14px">Deskripsi</label>
                                    <textarea class="form-control form-control-sm" id="deskripsi" rows="3" style="white-space: pre-line"></textarea>
                                </div> 
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