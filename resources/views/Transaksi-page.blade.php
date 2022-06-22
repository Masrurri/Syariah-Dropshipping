@extends('Main-page')

@section('container')
    <div class="container">
        <div class="row ">
            <div class="col cards mt-3 tblMax">
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
                      @foreach ($transactions as $item)
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