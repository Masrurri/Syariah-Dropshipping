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
        {{-- <div class="row">
            <div class="col-2">
                <a href="@if(auth()->user()->role == "supplier")/myproduk @else {{ route('produk', array('filter' => 'Semua Produk'))}} @endif"><i class="fa fa-chevron-left me-2" aria-hidden="true"></i>Kembali</a> 
            </div>
        </div> --}}
        <div class="row ">
            <div class="col cards p-5 mb-5">
                <div class="row ">
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%">

                                <div class="carousel-inner" style="border-radius:6pt"> 
                                    @foreach ($assets as $key => $asset)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{url($asset->url)}}" class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="ms-2 carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="me-2 carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
                                                <a href="{{url($asset->url)}}" target="_blank">
                                                    <img class="assetGBR" src="{{url($asset->url)}}" alt="..." style="height: 30vh; object-fit:cover; max-width:17vw; min-width:17vw; border-radius:5px;">
                                                  </a>  
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                </div>

                                <div class="modal-footer">
                                    <button data-bs-dismiss="modal" onclick="downloadAll()" type="button" class="btn btn-md btn-prm" style="width:12rem;"><i class="bi bi-download me-2" style="font-size: 18px"></i>Download Asset</button>
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
                            <button type="button" class="ms-3 btn btn-sm btn-outline-danger" style="width: 6rem" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hapus</button>
                            <a href="/edit-produk/{{$produk->id}}" class="btn btn-sm btn-prm mx-2" style="width: 8rem">Edit Produk</a>  
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content px-2">
                                        
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"><strong>Konfirmasi</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Apakah anda yakin ingin menghapus <strong>{{$produk->nama_produk}}</strong> ?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/assets/{{$produk->id}}" method="post">
                                                @method('delete')
                                                @csrf
                                                
                                            </form> 
                                            
                                            <form action="/delete-produk/{{$produk->id}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="button" class="mx-2 btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                             
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endif  
                                {{-- @if(auth()->user()->id == $produk->toko->supplier->user->id)
                                    <form action="/delete-produk/{{$produk->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus {{$produk->nama_produk}}')" class="btn btn-sm btn-red">Hapus</button>
                                        <a href="/edit-produk/{{$produk->id}}" class="btn btn-sm btn-prm mx-2" style="width: 8rem">Edit Produk</a>
                                    </form>
                                @endif --}}
                            
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

        function downloadAll(){
            var images = document.getElementsByClassName('assetGBR');
            var srcList = [];
            var i = 0;

            setInterval(function(){
                if(images.length > i){
                    srcList.push(images[i].src);
                    var link = document.createElement("a");
                    link.id=i;
                    link.download = "assets "+i;
                    link.href = images[i].src;
                    link.click();
                    i++;
                }
            },1000);
        }
    </script>
@endsection