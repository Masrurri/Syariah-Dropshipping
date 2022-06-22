@extends('Main-page')

@section('container')
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
            <div class="col-2">
                <a href="@if(auth()->user()->role == "supplier")/myproduk @else /produk @endif"><i class="fa fa-chevron-left me-2" aria-hidden="true"></i>Kembali</a> 
            </div>
        </div>
        <div class="row ">
            <div class="col cards p-5 mb-5">
                <div class="row ">
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{url($produk->gambar_utama)}}" class="d-block w-100" alt="...">
                                    </div>
                                    
                                    @foreach ($assets as $key => $asset)
                                        <div class="carousel-item">
                                            <img src="{{url($asset->url)}}" class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-scn" style="width:10rem;" data-bs-toggle="modal" data-bs-target="#assetModal">Asset Gambar</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="assetModal" tabindex="-1" aria-labelledby="assetModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content px-3">
                                    
                                <div class="modal-header">
                                    <h5 class="modal-title" id="assetModalLabel">Asset Gambar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body container">
                                    <div class="row mb-3">
                                        @foreach ($assets as $key => $asset)
                                            <div class="col-4 p-2">
                                                <img src="{{url($asset->url)}}" alt="..." style="width: 100%">
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                </div>

                                <div class="modal-footer">

                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-9 ps-5 produkBody" style="color: black; overflow:scroll; max-height:55vh">
                        <span class="card-text row" style="font-size: 14px; font-weight:600">Produk ID: {{$produk->id}}</span>
                        <span class="card-text row" style="font-size: 22px; font-weight:600">{{$produk->nama_produk}}</span>
                        <span class="card-text row mt-2" style="font-size: 24px; font-weight:700">Rp{{$produk->harga}}</span>
                        <span class="card-text row mb-2" style="font-size: 16px; font-weight:600">Saran Penjualan: Rp{{$produk->saran_harga}}</span>
                        
                        <span class=" mt-2" style="font-size: 16px; font-weight:400">Stok: {{$produk->stok}}</span><br>
                        <span class="" style="font-size: 16px; font-weight:400">Berat: {{$produk->berat}} Kg</span><br>
                        <span class=" mt-2" style="font-size: 16px; font-weight:400">Dikirim dari <b>{{$produk->toko->kota}}</b> </span><br>
                        <span class="mb-0" style="font-size: 16px; font-weight:400">Supplier <b>{{$produk->toko->nama_toko}}</b> </span>
                        <div id="deskripsi" class="row mt-2" style="font-size: 16px; white-space: pre-line; overflow: hidden; max-height:8vh">{{$produk->deskripsi}}</div>
                        <a onclick="detailShow()" class=" row mt-0" style="font-size: 13px; font-weight:700" type="button">Lihat Selengkapnya</a>
                        

                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        
                        
                    </div>
                    <div class="col-9 ps-5">
                        <span class="card-text row mt-3" style="margin-left:-1.5rem">
                            @if(auth()->user()->role == "supplier")
                                @if(auth()->user()->id == $produk->toko->supplier->user->id)
                                    <form action="/delete-produk/{{$produk->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus {{$produk->nama_produk}}')" class="btn btn-sm btn-red">Hapus</button>
                                        <a href="/edit-produk/{{$produk->id}}" class="btn btn-sm btn-prm mx-2" style="width: 8rem">Edit Produk</a>
                                    </form>
                                @endif
                            <!-- Button trigger modal -->
                            @else
                                <a href="/checkout/{{$produk->id}}" class="btn btn-sm btn-prm" style="margin-left: 0.8rem">Beli</a>
                            @endif
                        </span>

                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    <script>
        var a = document.getElementById("deskripsi");
        function detailShow(){
            if(a.style.overflow != null && a.style.maxHeight != null){ 
                a.style.overflow = null;
                a.style.maxHeight = null;
            }else{
                a.style.overflow = "hidden";
                a.style.maxHeight = "8vh";
            }      
        }
    </script>
@endsection