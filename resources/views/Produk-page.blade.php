@extends('Main-page')

@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <div class="row" style="display: block; height:4rem;">
                <div class="col-12 position-fixed">
                    <div class="row">
                        <div class="col-3" >
                            <select onchange="filter(this.options[this.selectedIndex].value)" class="form-select form-select-md" aria-label="Default select example" name="thisSelect">
                                <option value="Semua Produk" selected>Semua Produk</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->name}}" @if($filter === $category->name) selected @endif >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row row-cols-sm-4 g-3 scrl" style="overflow-y: scroll; max-height:25rem">
                @foreach ($products as $produk)
                    @if($produk->stok > 0)
                    <div class="col">
                        <div class="card" style="height: 23rem; max-width:16rem">
                            <img src="{{url($produk->gambar_utama)}}" class="card-img-top" alt="..." style="object-fit: cover; min-height:28vh; max-height:28vh; ">
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
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    function filter(value){
        window.location.href=""+value
    }
    // var kategori = "0"
    // var produks = document.getElementsByName("produks");
    // function getSelected(getKategori){
    //     kategori = getKategori.value;
    //     if(kategori === "0"){
    //         document.getElementsByName("produks").hidden = false;
    //     }else{
    //         document.getElementById(kategori).hidden = true;
    //     }
        
    // }

     
</script> 
@endsection