@extends('Main-page')

@section('container')
    <div class="container mt-1 mb-4">
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
            <div class="col cards mt-1" style="padding: 2rem 2rem">
                <span class="cHead ps-2">Detail Transaksi</span>
                @if (auth()->user()->role == "supplier")
                    @if ($transaksi->status_pembayaran == "Diterima")
                        <div class="col-8 alert alert-success px-3 py-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                            Pembayaran {{$transaksi->status_pembayaran}}
                        </div>
                    @elseif ($transaksi->status_pembayaran == "Ditolak")
                        <div class="col-8 alert alert-danger px-3 py-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                            Pembayaran {{$transaksi->status_pembayaran}}
                        </div>
                    @else
                        @if ($transaksi->bukti_pembayaran == "")
                            <div class="col-8 alert alert-warning px-3 py-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                                Tidak ada bukti pembayaran
                            </div>
                        @else
                            <div class="col-8 alert alert-warning px-3 py-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                                Bukti pembayaran belum dikonfirmasi
                            </div>
                        @endif
                    @endif
                @else
                    @if ($transaksi->status_pembayaran == "Belum Bayar")
                        <div class="col-8 alert alert-warning px-3 py-2 mt-3" role="alert" style="font-size:14px">
                            Segera lakukan pembayaran anda ke rekening berikut <br> 
                            <span style="font-weight: 700">{{$bank}}</span> No Rek. <span style="font-weight: 700"> {{$norek}} </span> A/N <span style="font-weight: 700"> {{$pemilik}} </span> 
                            <br> dan <span style="font-weight: 700"> upload bukti pembayaran </span>
                        </div>
                    @elseif ($transaksi->status_pembayaran == "Diterima")
                        <div class="col-8 alert alert-success px-3 py-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                            Terima kasih, pesanan anda akan segera diproses oleh supplier.
                        </div>
                    @elseif ($transaksi->status_pembayaran == "Ditolak")
                        <div class="col-8 alert alert-danger px-3 py-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                            Mohon maaf, pembayaran anda ditolak oleh supplier.
                        </div>
                    @else
                        <div class="col-8 alert alert-primary px-3 py-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                            Terima kasih, mohon tunggu pembayaran anda dikonfirmasi oleh supplier.
                        </div>
                    @endif
                @endif
                {{-- new line --}}
                <form @if(auth()->user()->role == "supplier") action="/update-transaksi-supplier/{{$transaksi->id}}" method="post" @else action="/update-transaksi/{{$transaksi->id}}" method="post" enctype="multipart/form-data" @endif style="font-weight: 600">
                    @method('put')
                    @csrf
                    <div class="row mt-4">
                        <div class="col-3">
                            <label id="no-order-label" for="no-order" class="form-label ps-2">No Order</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="no-order" value="{{$transaksi->no_order}}">
                        </div>
                        <div class="col-6">
                            <label id="nama-barang-label" for="nama-barang" class="form-label ps-2">Nama Barang</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="nama-barang" value="{{$transaksi->nama_produk}}">
                        </div>
                    </div>
                    {{-- new line --}}
                    <div class="row mt-3">
                        <div class="col-3">
                            <label id="tgl-order-label" for="tgl-order" class="form-label ps-2">Tanggal Order</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="tgl-order" value="{{$transaksi->created_at}}">
                        </div>
                        <div class="col-2">
                            <label id="keterangan-label" for="keterangan" class="form-label ps-2">Keterangan</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="keterangan" value="{{$transaksi->keterangan}}">
                        </div>
                        <div class="col-2">
                            <label id="jumlah-label" for="jumlah" class="form-label ps-2">Jumlah</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="jumlah" value="{{$transaksi->jumlah}}">
                        </div>
                        <div class="col-2">
                            <label id="ongkir-label" for="ongkir" class="form-label ps-2">Ongkir</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="ongkir" value="Rp{{$transaksi->ongkir}}">
                        </div>
                        <div class="col-2">
                            <label id="jasaPengiriman-label" for="jasaPengiriman" class="form-label ps-2">Jasa Pengiriman</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="jasaPengiriman" value="{{$transaksi->jasa_kurir}}">
                        </div>
                        
                    </div>
                    {{-- new line --}}
                    <div class="row mt-3">
                        <div class="col-3">
                            <label id="pengirim-label" for="pengirim" class="form-label ps-2">Pengirim</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="pengirim" value="{{$transaksi->pengirim}}">
                        </div>
                        <div class="col-2">
                            <label id="no-hp-pengirim-label" for="no-hp-pengirim" class="form-label ps-2">Telp Pengirim</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="no-hp-pengirim" value="{{$transaksi->telp_pengirim}}">
                        </div>
                        <div class="col-2">
                            <label id="penerima-label" for="penerima" class="form-label ps-2">Penerima</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="penerima" value="{{$transaksi->penerima}}">
                        </div>
                        <div class="col-2">
                            <label id="no-hp-penerima-label" for="no-hp-penerima" class="form-label ps-2">Telp Penerima</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="no-hp-penerima" value="{{$transaksi->telp_penerima}}">
                        </div>
                    </div>

                    {{-- new line --}}
                    <div class="row mt-3">
                        <div class="col-3">
                            <label id="no-resi-pengiriman-label" for="no-resi-pengiriman" class="form-label ps-2">Resi Pengiriman</label>
                            @if(auth()->user()->role == "supplier")
                            <input onchange="isChange()" type="text" class="form-control form-control-sm ms-2" name="no_resi" id="no-resi-pengiriman" value="{{$transaksi->no_resi}}" placeholder="Tambahkan Resi">
                            @else
                            <input type="text" class="form-control form-control-sm ms-2" name="no_resi" id="no-resi-pengiriman" readonly disabled value="{{$transaksi->no_resi}}" placeholder="Tambahkan Resi">
                            @endif
                        </div>
                        <div class="col-2">
                            <label id="kota-tujuan-label" for="kota-tujuan" class="form-label ps-2">Kota Tujuan</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="kota-tujuan" value="{{$transaksi->kota_tujuan}}">
                        </div>
                        <div class="col-4">
                            <label id="alamat-tujuan-label" for="alamat-tujuan" class="form-label ps-2">Alamat Tujuan</label>
                            <textarea type="text" rows="3" class="form-control-sm form-control-plaintext ps-2" readonly id="alamat-tujuan" value="">{{$transaksi->alamat_tujuan}}</textarea>
                        </div>
                    </div>
                    {{-- new line --}}
                    <div class="row mt-3" style="font-weight: 600">
                        <div class="col-3">
                            <label id="total-harga-label" for="total-harga" class="form-label ps-2">Total Harga</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="total-harga" value="Rp{{$transaksi->total_harga}}" style="font-weight: 700">
                        </div>
                        <div class="col-3">
                            <label id="status-pembayaran-label" for="status-pembayaran" class="form-label ps-2">Status Pembayaran</label><br>
                            <div class="form-check form-check-inline ms-2" style="font-weight: 400; color:black">
                                <input onchange="isChange()" @if($transaksi->status_pembayaran == "Diterima") checked @endif class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio1" value="Diterima" @if(auth()->user()->role == "dropshipper") disabled @endif>
                                <label class="form-check-label" for="inlineRadio1">Diterima</label>
                            </div>
                            <div class="form-check form-check-inline" style="font-weight: 400; color:black">
                                <input onchange="isChange()" @if($transaksi->status_pembayaran == "Ditolak") checked @endif class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio2" value="Ditolak" @if(auth()->user()->role == "dropshipper") disabled @endif>
                                <label class="form-check-label" for="inlineRadio2">Ditolak</label>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row mt-3" style="font-weight: 600">
                        <div class="col-3">
                            <label id="label-pengiriman-label" for="label-pengiriman" class="form-label ps-2">Label Pengiriman</label>
                            <button style="width: 6rem" type="button" class="ms-2 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#labelPengiriman">Lihat</button>
                            <!-- Modal -->
                            <div class="modal fade" id="labelPengiriman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Labe Pengiriman</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: center">
                                    <img style="width: 100%" src="{{url($transaksi->label_pengiriman)}}" alt="">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label id="bukti-pembayaran-label" for="bukti-pembayaran" class="form-label ps-2">Bukti Pembayaran</label>
                            @if(auth()->user()->role == "supplier")
                                <button @if($transaksi->bukti_pembayaran == "") disabled @endif style="width: 6rem; display:inline" type="button" class="ms-2 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#buktiPembayaran">Lihat</button>
                            @else
                                @if ($transaksi->bukti_pembayaran == "")
                                    <input onchange="isChange()" class="ms-2 form-control form-control-sm" id="buktiUpload" @error('bukti_pembayaran') is-invalid @enderror name="bukti_pembayaran" type="file" accept="image/jpeg, image/jpg, image/png" required>
                                @else
                                    <button style="width: 6rem; display:inline" type="button" class="ms-2 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#buktiPembayaran">Lihat</button>
                                @endif
                            @endif
                            <!-- Modal -->
                            <div class="modal fade" id="buktiPembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: center">
                                    <img style="width: 100%" src="{{url($transaksi->bukti_pembayaran)}}" alt="">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- new line --}}
                    <div class="row mt-2" style="font-weight: 600">
                        <div class="col-4 ms-2 mt-4">
                            <a href="/transaksi" type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;">Batal</a>
                            <button type="submit" class="btn btn-sm btn-prm" id="simpan" disabled>Simpan</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
    <script>
        // $('input[type=radio][name=status_pembayaran]').change(function() {
        //     document.getElementById("simpan").disabled = false;
        // });
        function isChange(){
            document.getElementById("simpan").disabled = false;
        }
    </script>
@endsection