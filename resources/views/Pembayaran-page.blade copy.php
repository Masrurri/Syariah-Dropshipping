@extends('Main-page')

@section('container')
<div class="container ">
    <div class="row cards ps-4 py-4 w-100">
        <div class="row">
            <span style="font-size: 24px; font-weight:600;">Pembayaran</span>
            <div class="col-6">
                <div class="alert alert-sm alert-warning p-2 mt-3" role="alert" style="font-size:14px">
                    Segera lakukan pembayaran anda ke rekening berikut
                </div>
                
                <div class="card mb-3 mt-3 p-1" style="max-width: 100%; max-height:30rem;">
                    <div class="row g-0">
                      <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <h5 id="nama-bank" class="card-title" style="font-size: 24px; font-weight:700">Mandiri</h5>
                                <div>No Rek. <span id="no-rek" style="font-weight:600">13992018462</span></div>
                                <div>A/N <span id="no-rek" style="font-weight:600">Gold D Roger</span></div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
            <div class="col-6">
                <div class="card mb-1 mt-3 ms-4" style="max-width: 100%; max-height:30rem;">
                    <div class="row g-0">
                      <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title" style="font-size: 16px; font-weight:700">Rincian Order</h5>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label id="jumlah-label" for="jumlah" class="form-label" style="font-weight: 600; font-size: 14px" >Jumlah Barang</label>
                                    <input type="number" class="form-control-sm form-control" id="jumlah" value="1" placeholder="" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="harga-label" for="harga" class="form-label" style="font-weight: 600; font-size: 14px" >Harga Satuan</label>
                                    <input type="text" class="form-control-sm form-control" id="harga" value="Rp35,000" placeholder="" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="ongkir-label" for="ongkir" class="form-label" style="font-weight: 600; font-size: 14px" >Biaya Ongkir</label>
                                    <input type="text" class="form-control-sm form-control" id="ongkir" value="Rp10,000" placeholder="" readonly>
                                </div> 
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <label id="total-label" for="total" class="form-label" style="font-weight: 600; font-size: 16px" >Total</label>
                                    <input type="text" class="form-control-sm form-control" id="total" value="Rp45,000" placeholder="" readonly style="font-weight: 700">
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