@extends('Main-page')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="" id="">
                <div class="" id="" >
                    <div class="row" style="display: block; height:3.6rem;">
                        <div class="col-12 position-fixed">
                            <div class="row">
                                <div class="col-1">
                                    <span style="font-weight: 600; font-size:20px">Produk</span>  
                                </div>
                                
                                    <div class="col-3" >
                                
                                        <select class="form-select form-select-sm" aria-label="Default select example" name="thisSelect">
                                            <option value="-1" selected>Terbaru</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="col-1">
                                        <button type="submit" class="btn btn-sm btn-scn m-0">Filter</button>  
                                    </div> --}}
                                
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-sm-4 g-3" style="overflow-y: scroll; max-height:30rem">
                        
                        @foreach ($products as $produk)

                        @if($produk->stok > 0)
                        <div class="col">
                            <div class="card" style="height: 25rem">
                            <img src="{{url($produk->gambar_utama)}}" class="card-img-top" alt="..." style="object-fit: cover; min-height:35vh; max-height:35vh; ">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px">{{$produk->nama_produk}}</h5>
                                
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
                                <a href="/detail-produk/{{$produk->id}}" class="btn btn-sm btn-scn mt-2" style="width:5rem">Detail</a>
                                @if(auth()->user()->role == "dropshipper")
                                <a href="/checkout/{{$produk->id}}" class="btn btn-sm btn-prm ms-2 mt-2">Beli</a>
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
    </div>

</div>
<script>
    function filter(value){
        window.location.href="produk/filter/"+value
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