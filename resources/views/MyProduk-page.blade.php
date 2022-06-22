@extends('Main-page')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <div class="row" style="display: block; height:3.6rem;">
                <div class="col-10 position-fixed">
                    <span style="font-weight: 600; font-size:20px">Produk Saya</span>  <a href="@if(auth()->user()->supplier->toko->status_akun == 'Aktif') /tambah-produk @else # @endif" type="button" class="btn btn-sm btn-scn" style="width:10rem; margin-left:1rem;">Tambah Produk</a>
                    @if(session()->has('success'))
                        <span class="col-8 alert alert-success alert-dismissible fade show py-2 px-4" role="alert" style="font-size:14px; font-weight:600; float:right">  
                            {{ session('success') }}
                        <button type="button" class="btn-sm btn" data-bs-dismiss="alert" aria-label="Close" style="margin-top:-0.1rem; padding:0%; float: right;"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </span>
                    @endif
                    @if(session()->has('loginError'))
                        <span class="col-8 alert alert-danger alert-dismissible fade show py-2 px-4" role="alert" style="font-size:14px; font-weight:600; float:right">  
                            {{ session('loginError') }}
                        <button type="button" class="btn-sm btn" data-bs-dismiss="alert" aria-label="Close" style="margin-top:-0.1rem; padding:0%; float: right;"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="row row-cols-sm-4" style="overflow-y: scroll; max-height:29rem">
                @foreach ($products as $produk)
                    <div class="col">
                        <div class="card" style="height: 25rem">
                            <img src="{{url($produk->gambar_utama)}}" class="card-img-top" alt="..." style="object-fit: cover; min-height:35vh; max-height:35vh ">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px">{{$produk->nama_produk}}</h5>

                                <span class="card-text" style="font-size: 16px; font-weight:700">Rp{{$produk->harga}}</span><br>
                                <span class="card-text m-0" style="font-size: 12px; font-weight:600">Saran Penjualan: Rp{{$produk->saran_harga}}</span><br>
                                @if($produk->stok > 0) <span class="card-text badge rounded-pill bg-success me-1" style="font-size: 9.9px; font-weight:600">Ready Stock</span>
                                @else <span class="card-text badge rounded-pill bg-danger me-1" style="font-size: 9.9px; font-weight:600">Stok Habis</span>

                                @endif
                                
                                <span class="card-text badge rounded-pill bg-primary" style="font-size: 9.9px; font-weight:600">
                                    @foreach ($categories as $category)
                                        @if($category->id == $produk->category_id)
                                            {{$category->name}}
                                        @endif
                                    @endforeach 
                                </span><br>
                                <a href="/detail-produk/{{$produk->id}}" class="btn btn-sm btn-scn mt-2" style="width:5rem">Detail</a>
                                <a href="/edit-produk/{{$produk->id}}" class="btn btn-sm btn-prm ms-2 mt-2">Edit</a>
                          
                        </div>
                      </div>
                  </div>
                @endforeach
            </div>

        </div>
    </div>

</div>
    
@endsection