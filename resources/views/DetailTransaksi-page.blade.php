@extends('Main-page')

@section('container')
    <div class="container">
        <a class="btnBack" href="/transaksi">
            <i class="fa fa-angle-left" aria-hidden="true" style=" margin-right:0.5rem;"></i>
            Kembali
        </a>
        <div class="row ">
            <div class="col cards mt-4" style="padding: 2rem 2rem">
                <span class="cHead ps-2">Detail Transaksi</span>
                {{-- new line --}}
                <form action="" style="font-weight: 600">
                    <div class="row mt-4">
                        <div class="col-2">
                            <label id="no-order-label" for="no-order" class="form-label ps-2">No Order</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="no-order" value="202203170ODGJP">
                        </div>
                        <div class="col-8">
                            <label id="nama-barang-label" for="nama-barang" class="form-label ps-2">Nama Barang</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="nama-barang" value="Cutting Mat A3 JOYKO/Alas Potong A3/Cutting Mad A3/Pemotong Kertas A3">
                        </div>
                    </div>
                    {{-- new line --}}
                    <div class="row mt-3">
                        <div class="col-2">
                            <label id="tgl-order-label" for="tgl-order" class="form-label ps-2">Tanggal Order</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="tgl-order" value="17/03/2022 18:37 WIB">
                        </div>
                        <div class="col-2">
                            <label id="total-harga-label" for="total-harga" class="form-label ps-2">Total Harga</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="total-harga" value="Rp1500.000">
                        </div>
                        <div class="col-2">
                            <label id="jumlah-label" for="jumlah" class="form-label ps-2">Jumlah</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="jumlah" value="2">
                        </div>
                    </div>
                    {{-- new line --}}
                    <div class="row mt-3">
                        <div class="col-2">
                            <label id="pengirim-label" for="pengirim" class="form-label ps-2">Pengirim</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="pengirim" value="Zorro">
                        </div>
                        <div class="col-2">
                            <label id="no-hp-pengirim-label" for="no-hp-pengirim" class="form-label ps-2">Telp Pengirim</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="no-hp-pengirim" value="088872311753">
                        </div>
                        <div class="col-2">
                            <label id="penerima-label" for="penerima" class="form-label ps-2">Penerima</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="penerima" value="Luffy">
                        </div>
                        <div class="col-2">
                            <label id="no-hp-penerima-label" for="no-hp-penerima" class="form-label ps-2">Telp Penerima</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="no-hp-penerima" value="087765122973">
                        </div>
                    </div>

                    {{-- new line --}}
                    <div class="row mt-3">
                        <div class="col-2">
                            <label id="no-resi-pengiriman-label" for="no-resi-pengiriman" class="form-label ps-2">No Resi Pengiriman</label>
                            <input type="text" class="form-control form-control-sm ms-2" id="no-resi-pengiriman" value="" placeholder="Tambahkan Resi">
                        </div>
                        <div class="col-8">
                            <label id="alamat-pengiriman-label" for="alamat-pengiriman" class="form-label ps-2">Alamat Pengiriman</label>
                            <input type="text" class="form-control-sm form-control-plaintext ps-2" readonly id="alamat-pengiriman" value="Jalan Bandung Riau Indonesia No 32, RT 09 RW 08, Kode Pos 125100">
                        </div>
                    </div>
                    {{-- new line --}}
                    <div class="row mt-3" style="font-weight: 600">
                        <div class="col-2">
                            <label id="bukti-pembayaran-label" for="bukti-pembayaran" class="form-label ps-2">Bukti Pembayaran</label>
                            <button type="button" class="ms-2 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#buktiPembayaran">Lihat</button>
                            <!-- Modal -->
                            <div class="modal fade" id="buktiPembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: center">
                                    <img style="width: 100%" src="/assets/img/bktwi.jpg" alt="">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <label id="label-pengiriman-label" for="label-pengiriman" class="form-label ps-2">Label Pengiriman</label>
                            <button type="button" class="ms-2 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#labelPengiriman">Lihat</button>
                            <!-- Modal -->
                            <div class="modal fade" id="labelPengiriman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Label Pengiriman</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: center">
                                    <img style="width: 100%" src="/assets/img/lblp.png" alt="">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label id="status-pembayaran-label" for="status-pembayaran" class="form-label ps-2">Status Pembayaran</label><br>
                            <div class="form-check form-check-inline ms-2" style="font-weight: 400; color:black">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Diterima</label>
                              </div>
                            <div class="form-check form-check-inline" style="font-weight: 400; color:black">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Ditolak</label>
                            </div>
                        </div>
                    </div>
                    {{-- new line --}}
                    <div class="row mt-2" style="font-weight: 600">
                        <div class="col-4 ms-2 mt-4">
                            <button type="button" class="btn btn-sm btn-scn" style="margin-right: 1rem;">Batal</button>
                            <button type="button" class="btn btn-sm btn-prm" >Simpan</button>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
@endsection