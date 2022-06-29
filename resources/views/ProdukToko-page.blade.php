@extends('Main-page')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <div class="" id="" >
                    <div class="row" style="">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col card" style="margin-left: 1rem; font-size:14px; padding:1rem 1rem">
                                    <div class="row p-1">
                                        <div class="col-1" style="padding: 0%; margin:0%; text-align:center">
                                            <a><img src="{{asset('assets/img/spl.png')}}" alt="" style="width: 55%; margin-left:1rem"></a>
                                        </div>
                                        <div class="col-11" style="padding: 0.8rem 0rem;">
                                            <div class="cHead" style="font-size: 18px">{{$toko->nama_toko}}</div>
                                            <div class="cBody" style="font-size: 14px; width:100%">{{$toko->deskripsi}}</div>
                                            <div class="cBody" style="font-size: 14px; width:100%">{{$toko->kota}} - {{$toko->alamat}}</div>
                                            <div class="cBody" style="font-size: 14px">{{$toko->supplier->user->no_handphone}}</div>
                                        </div>
                                    </div>
                                    
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 ms-1 card row p-4 mb-5">
                        <div class="row ">
                            <div class="col-12">
                                <span style="font-size: 24px; font-weight:600;">Produk {{$toko->nama_toko}}</span> 
                            </div>
                         </div>
                        <div class="mt-1 row row-cols-sm-4 g-3" style="">
                            @if($toko->produks->isNotEmpty() )
                            @foreach ($toko->produks as $produk)
                          @if($produk->stok > 0)
                              <div class="col">
                                <div class="card" style="height: 24rem">
                                    <img src="{{url($produk->gambar_utama)}}" class="card-img-top" alt="..." style="object-fit: cover; min-height:30vh; max-height:30vh ">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 14px; text-overflow:ellipsis; max-height:2rem; overflow-y:hidden;">{{$produk->nama_produk}}</h5>
                                        
                                        <span class="card-text" style="font-size: 16px; font-weight:700">Rp{{$produk->harga}}</span><br>
                                        <span class="card-text m-0" style="font-size: 12px; font-weight:600">Saran Penjualan: Rp{{$produk->saran_harga}}</span><br>
                                        
                                        <span class="card-text badge rounded-pill bg-success me-1" style="font-size: 9.9px; font-weight:600">Ready Stock</span>
                                        <span class="card-text badge rounded-pill bg-primary" style="font-size: 9.9px; font-weight:600">
                                            @foreach ($categories as $category)
                                                @if($category->id == $produk->category_id)
                                                    {{$category->name}}
                                                @endif
                                            @endforeach 
                                        </span><br>
                                        <a href="/detail-produk/{{$produk->id}}" class="btn btn-sm btn-scn mt-3" style="width:5rem">Detail</a>
                                        @if(auth()->user()->role == "dropshipper")
                                        <a href="/checkout/{{$produk->id}}" class="btn btn-sm btn-prm ms-2 mt-3">Beli</a>
                                        @else
                                        <a href="/edit-produk/{{$produk->id}}" class="btn btn-sm btn-prm ms-2 mt-3">Edit</a>
                                        @endif
                                  </div>
                                </div>
                              </div>
                            @endif
                          @endforeach
                            @else
                            <strong class="" style="font-size: 24px; color:#E0ECFF">Produk Kosong</strong> 
                            @endif
                          
        
                        </div>
                    </div>
                    
                    
            </div>
        </div>
    </div>

</div>
    
@endsection