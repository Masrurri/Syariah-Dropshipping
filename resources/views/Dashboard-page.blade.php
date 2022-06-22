@extends('Main-page')

@section('container')
    {{-- <h1>Dashboard</h1> --}}
      <div class="container">
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
        <div class="row">
          @if(auth()->user()->role == "supplier")
            <div class="col cards" style="margin-right: 2rem; font-size:14px">
                  <div class="row">
                      <div class="col-2" style="padding: 0%; text-align:center">
                          <a><img src="assets/img/spl.png" alt="" style="width: 60%"></a>
                      </div>
                      <div class="col-8" style="padding: 0.8rem 0rem;">
                          @if(auth()->user()->supplier->toko->is_toko_complete())
                            <div class="cHead">{{ auth()->user()->supplier->toko->nama_toko }}</div>
                            <div class="cBody">{{ auth()->user()->supplier->toko->deskripsi }}</div>
                            <div class="cBody">{{ auth()->user()->supplier->toko->kota }}</div>
                            <div class="cBody">{{ auth()->user()->no_handphone }}</div>
                          @else
                            <div>
                              <div class="cHead">{{ auth()->user()->supplier->toko->nama_toko }}</div>
                              <div class="cBody">
                                <a href="/edit-toko/{{auth()->user()->supplier->toko->id}}">
                                    Lengkapi Profile Toko
                                </a>
                              </div>
                            </div>
                          @endif
                      </div>
                      <div class="col-2" style="padding: 0.8rem 0rem;">
                          @php
                          @endphp
                          <a class="txHover" href="/edit-toko/{{auth()->user()->supplier->toko->id}}">Edit Toko</a>
                      </div>
                  </div>
                  {{-- <a href="/edit-toko" class="btn btn-lg btn-scn w-75 m-5">Lengkapi Identitas</a> --}}
            </div>
          @else
          <div class="col cards" style="margin-right: 2rem; font-size:14px">
            <div class="row">
                <div class="col-2" style="padding: 0%; text-align:center">
                    <a><img src="assets/img/drp.png" alt="" style="width: 60%"></a>
                </div>
                <div class="col-8" style="padding: 0.8rem 0rem;">
                      <div class="cHead">Halo, Dropshipper!</div>
                      <div class="cBody" style="font-weight: 700; font-size:16px">{{ auth()->user()->dropshipper->nama_lengkap }}</div>
                      <div class="cBody">{{ auth()->user()->dropshipper->email }}</div>
                </div>
            </div>
            
          </div>
          @endif
          <div class="col cards">
                <div class="row">
                    <div class="col-9" style="padding: 0.8rem 0rem;">
                        <div class="cHead">Transaksi</div>
                        <div class="row" style="font-weight: 600;">
                            <div class="col-6" style="color: #2FB084">
                                <div style="font-size:24px;">{{$on_process}}</div>
                                <div >Diproses</div>
                            </div>
                            <div class="col-6" style="color: #FF2525">
                                <div style="font-size:24px;">{{$not_process}}</div>
                                <div >Belum Diproses</div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        <div class="row mt-4">
            <div class="col-3 cHead p-0">
              Transaksi Terbaru
            </div>
            <div class="col-9" style="padding-top: 6px; text-align:end">
                <a href="/transaksi" class="txHover">Lihat Semua</a>
            </div>
        </div>
        <div class="row">
            <div class="col cards mt-3">
              @if($transactions->isNotEmpty())
              <table class="table table-hover" style="font-size: 14px;">
                <thead style="color:#056AD3">
                  <tr>
                    <th scope="col" style="width: 10rem">Tanggal</th>
                    <th scope="col" style="width: 4rem">No Order</th>
                    <th scope="col" style="width: 14rem">Nama Barang</th>
                    <th scope="col" style="width: 10rem; text-align: center">Jumlah</th>
                    <th scope="col" style="width: 10rem">Total Harga</th>
                    <th scope="col" style="width: 14rem; text-align: center">Resi Pengiriman</th>
                    <th scope="col" style="width: 10rem; text-align: center">Pembayaran </th>
                    <th scope="col" style="width: 10rem; text-align: center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($transactions->take(2) as $item)
                      <tr>
                        <th >{{$item->created_at}}</th>
                        <td>{{$item->no_order}}</td>
                        <td>{{$item->nama_produk}}</td>
                        <td style="text-align: center">{{$item->jumlah}}</td>
                        <td>Rp{{$item->total_harga}}</td>
                        <td style="text-align: center" > @if($item->no_resi == "") <button disabled class="btn-sm btnYellow">Belum Diproses</button> @else {{$item->no_resi}} @endif </td>
                        <td style="text-align: center" > 
                          @if($item->status_pembayaran == "Diterima") 
                            <button disabled class="btn-sm btnGreen ">{{$item->status_pembayaran}}</button>  
                          @elseif($item->status_pembayaran == "Ditolak")
                            <button disabled class="btn-sm btnRed">{{$item->status_pembayaran}}</button> 
                          @elseif($item->status_pembayaran == "Menunggu Konfirmasi")
                            <button disabled class="btn-sm btnYellow">Menunggu <br> Konfirmasi</button> 
                          @else
                            <button disabled class="btn-sm btnYellow">{{$item->status_pembayaran}}</button>
                          @endif
                        
                        </td>
                        <td style="text-align: center" > <form action="/detail-transaksi/{{$item->id}}" method="get"><button target="" class="btn-sm btn-prm">Detail</button></form></td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
            @else
              <strong style="font-size: 24px; color:#E0ECFF">Tidak ada transaksi</strong> 
            @endif
            </div>
        </div>

    </div>
@endsection