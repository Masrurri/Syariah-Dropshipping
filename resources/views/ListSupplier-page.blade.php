@extends('Main-page')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="" id="">
                <div class="" id="" >
                    <div class="row" style="display: block; height:3.6rem;">
                        <div class="col-8 position-fixed">
                            <span style="font-weight: 600; font-size:20px">Semua Supplier</span>
                        </div>
                    </div>
                    <div class="row row-cols-sm-4 g-3" style="overflow-y: scroll; max-height:29rem">

                        @if(auth()->user()->role == "supplier")
                            @foreach ($tokos as $toko)
                                @if($toko->id == auth()->user()->supplier->toko->id)
                                    <a href="/produk-toko/{{$toko->id}}" class="col cardToko">
                                        <div style="font-weight: 600">{{$toko->nama_toko}}</div>
                                        <div class="infoToko" >{{$toko->deskripsi}}</div>
                                        <div class="infoToko" >{{$toko->kota}}</div>
                                        <div class="infoToko" >{{$toko->supplier->user->no_handphone}}</div>
                                        <img src="assets/img/spl.png" alt="" style="width: 15%; margin-top:0rem; float:right">
                                    </a>
                                @endif
                            @endforeach
                            
                        @else
                            @foreach ($tokos as $toko)
                                @if($toko->status_akun == "Aktif")
                                    <a href="/produk-toko/{{$toko->id}}" class="col cardToko">
                                        <div style="font-weight: 600">{{$toko->nama_toko}}</div>
                                        <div class="infoToko" >{{$toko->deskripsi}}</div>
                                        <div class="infoToko" >{{$toko->kota}}</div>
                                        <div class="infoToko" >{{$toko->supplier->user->no_handphone}}</div>
                                        <img src="assets/img/spl.png" alt="" style="width: 15%; margin-top:0rem; float:right">
                                    </a>
                                @endif
                            @endforeach
                        @endif
    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection