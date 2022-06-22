@extends('Main-page')

@section('container')
<div class="container ">
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
    <div class="row cards ps-4 py-4 w-100">
        <div class="row">
            <span style="font-size: 24px; font-weight:600;">Pembayaran</span>
            <div class="col-6">
                
                
                <div class="card mb-3 mt-3 p-1" style="max-width: 100%; max-height:30rem;">
                    <div class="row g-0">
                      <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div>Segera lakukan pembayaran anda ke rekening berikut.</div>
                                <h5 id="nama-bank" class="card-title" style="font-size: 24px; font-weight:700">Mandiri</h5>
                                <div>No Rek. <span id="no-rek" style="font-weight:600">{{$norek}}</span></div>
                                <div>A/N <span id="no-rek" style="font-weight:600">{{$pemilik}}</span></div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="">
                    <a href="/transaksi" type="button" class="btn btn-sm btn-prm" style="width:8rem;">Selesai</a>
                </div>
            </div>
            <div class="col-6">
                <div class="alert alert-warning p-2 mt-3" role="alert" style="font-size:14px; font-weight:600">
                    Upload bukti pembayaran pada halaman transaksi agar pesanan anda dapat diproses.
                </div>
            </div>
            
        </div>
    </div>
    

</div>
@endsection