@extends('Main-page')

@section('container')
<div class="container ">
    <div class="row ">
        <div class="col-2">
            
        </div>   
     </div>
    <form action="/checkout/{{$produk->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row cards ps-4 py-4 w-100 mb-5">
        <div class="row">
            <span style="font-size: 24px; font-weight:600;" class="ms-3">Checkout</span> 
        </div>
        <div class="row">
            <div class="col-6 ">
                <div class="row mt-3 ms-1">
                    <div class="col">
                        <div class="card mb-3" style="max-width: 34.4vw; max-height:20vh">
                            <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{url($produk->gambar_utama)}}" class="img-fluid rounded-start" alt="..." style="object-fit: cover; min-height:19vh; max-height:19vh; width:100%;">   
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 14px; font-weight:600">{{$produk->nama_produk}}</h5>
                                    <span class="card-text" style="font-size: 14px; font-weight:700">Berat:</span>
                                    <input id="berat" type="text" name="berat" value="{{$produk->berat}} Kg" readonly style="border: none; font-size:14px; font-weight:700; color:#056AD3"><br>
                                    <span class="card-text" style="font-size: 14px; font-weight:700">Harga:</span>
                                    <input id="harga" type="text" name="harga" value="Rp{{$produk->harga}}" readonly style="border: none; font-size:14px; font-weight:700; color:#056AD3">
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
                                        {{-- TANGGAL ORDER --}}
                                        <input type="text" name="tanggal_order" value="{{ date('d-m-Y H:i') }}" style="display: none">
                                        
                                        <div class="col-3">
                                            <label id="jumlah-label" for="jumlah" class="form-label" style="font-weight: 600; font-size: 14px">Jumlah</label>
                                            <input type="number" name="jumlah" class="form-control form-control-sm @error('jumlah') is-invalid @enderror" id="jumlah"  value="1" min="1" onchange="hargaTotal()" required>
                                        </div> 
                                        <div class="col-9">
                                            <label id="keterangan-label" for="keterangan" class="form-label" style="font-weight: 600; font-size: 14px">Keterangan</label>
                                            <input type="text" name="catatan" class="form-control-sm form-control @error('keterangan') is-invalid @enderror" id="keterangan" value=" " placeholder="Catatan">
                                        </div> 
                                    </div>
                                    
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <label id="pengirim-label" for="pengirim" class="form-label" style="font-weight: 600; font-size: 14px">Pengirim </label>
                                            <input type="text" name="pengirim" class="form-control form-control-sm @error('pengirim') is-invalid @enderror" id="pengirim" value="" min="" required>
                                        </div> 
                                        <div class="col-6">
                                            <label id="telp-pengirim-label" for="telp-pengirim" class="form-label" style="font-weight: 600; font-size: 14px">Telp. Pengirim</label>
                                            <input maxlength="13" type="tel" name="no_hp_pengirim" class="form-control-sm form-control @error('no_hp_pengirim') is-invalid @enderror" id="telp-pengirim" value="" required>
                                        </div> 
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-9">
                                            <label id="label-pengiriman-label" for="label-pengiriman" class="form-label" style="font-weight:600; font-size: 14px">Label Pengiriman</label>
                                            <input class="form-control form-control-sm @error('label') is-invalid @enderror" name="label" id="label-pengiriman" type="file" accept="image/jpeg, image/jpg, image/png" required>
                                            <div id="labelHelp" class="form-text" style="font-size: 14px">*Upload label pengiriman dari marketplace (maksimal 2 MB)</div>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row ms-3">
                    <div class="card" style="max-width: 34.4vw; max-height:30rem;">
                        <div class="row g-0">
                        <div class="col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <h5 class="card-title" style="font-size: 16px; font-weight:700">Total Harga</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <input type="text" name="total_harga" class="form-control form-control-sm @error('total_harga') is-invalid @enderror" id="totalHarga" value=""  readonly required>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn btn-sm btn-prm">Bayar</button>
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
                                        <input type="text" class="form-control-sm form-control @error('kota_tujuan') is-invalid @enderror" id="kota-tujuan" name="kota_tujuan" value="" placeholder="Kota/Kabupaten" required>
                                    </div>
                                    <div class="col-5">
                                        <label id="jasa-pengiriman-label" for="jasa-pengiriman" class="form-label" style="font-weight:600; font-size: 14px">Jasa Pengiriman</label>
                                        <input type="text" class="form-control-sm form-control @error('jasa_pengiriman') is-invalid @enderror" id="jasa-pengiriman" name="jasa_pengiriman" value="" placeholder="SiCepat-REG" required>

                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <label id="ongkir-label" for="ongkir" class="form-label" style="font-weight: 600; font-size: 14px" >Biaya Ongkir</label>
                                        <input type="number" min="0" class="form-control-sm form-control @error('ongkir') is-invalid @enderror" id="ongkir" value="0" name="ongkir" placeholder="" onchange="hargaTotal()" style="width: 10rem" required>
                                        <div id="labelHelp" class="form-text" style="font-size: 14px">*Isikan 0 jika menggunakan promo gratis ongkir dari marketplace</div>
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
                                        <input type="text" class="form-control-sm form-control @error('penerima') is-invalid @enderror" name="penerima" id="penerima" value="" placeholder="" required>
                                    </div>
                                    <div class="col-5">
                                        <label id="telp-penerima-label" for="telp-penerima" class="form-label" style="font-weight: 600; font-size: 14px">Telp. Penerima</label>
                                        <input maxlength="13" type="text" class="form-control-sm form-control @error('no_hp_penerima') is-invalid @enderror" name="no_hp_penerima" id="telp-penerima" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-1">
                                    <div class="col-10">
                                        <label for="alamat-tujuan" class="form-label" style="font-weight:600; font-size: 14px">Alamat Tujuan</label>
                                        <textarea class="form-control form-control-sm @error('alamat_tujuan') is-invalid @enderror" id="alamat-tujuan" name="alamat_tujuan" rows="3" style="white-space: pre-line" required></textarea>
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
    </form>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var x = parseFloat((document.getElementById("harga").value).replace ( /\D+/g, "" ));
        var y = parseInt(document.getElementById("jumlah").value);
        var z = parseInt((document.getElementById("ongkir").value).replace ( /\D+/g, ""));
        let hasil = x*y+z;
      
        document.getElementById("totalHarga").value = hasil;
    }, false);
    function hargaTotal() {
      var x = parseFloat((document.getElementById("harga").value).replace ( /\D+/g, "" ));
      var y = parseInt(document.getElementById("jumlah").value);
      var z = parseInt((document.getElementById("ongkir").value).replace ( /\D+/g, ""));
      let hasil = x*y+z;
      
      document.getElementById("totalHarga").value = hasil;
    }
</script>
@endsection