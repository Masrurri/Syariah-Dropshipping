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
            <div class="col card-green" style="margin-right: 2rem; font-size:14px">  
              <div class="row">
                  <div class="col-2" style="padding: 0%; text-align:center">
                      <a><img src="assets/img/drp2.png" alt="" style="width: 60%" class="mt-2"></a>
                  </div>
                  <div class="col-8" style="padding: 0.8rem 0rem;">
                        <div class="cHead" style="font-size:20px">Assalamualaikum, {{ strtok(auth()->user()->supplier->nama_lengkap, ' ') }}!</div>
                        <div class="cBody" style="font-size:14px">Anda terdaftar sebagai Supplier <br> Sejak <strong> {{ strtok(auth()->user()->supplier->created_at, ' ') }}!</strong> </div>
                  </div>
                  <img src="assets/img/stars.png" alt="" style="position: absolute; margin-left:23rem; width:9rem">
              </div>
            </div>
            <div class="col cards" style="margin-right: 2rem; font-size:14px; background-color:#FFD600">
              <img src="assets/img/starr.png" alt="" style="position: absolute; margin-left:24rem; margin-top:3rem; width:5rem">    
              <div class="row">
                      <div class="col-2" style="padding: 0%; text-align:center">
                          <a><img src="assets/img/spl.png" alt="" style="width: 55%" class="mt-2"></a>
                      </div>
                      <div class="col-8" style="padding: 0.8rem 0rem;">
                          @if(auth()->user()->supplier->toko->is_toko_complete())
                            <div class="cHead">{{ auth()->user()->supplier->toko->nama_toko }}</div>
                            <div class="cBody" style="font-size:14px">{{ auth()->user()->supplier->toko->deskripsi }}</div>
                            <div class="cBody" style="font-size:14px">{{ auth()->user()->supplier->toko->kota }}</div>
                            <div class="cBody" style="font-size:14px">{{ auth()->user()->no_handphone }}</div>
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
            <div class="col card-green" style="margin-right: 2rem; font-size:14px;">
              <div class="row">
                <img src="assets/img/stars.png" alt="" style="position: absolute; margin-left:53rem; width:8rem">
                  <div class="col-1" style="padding: 0%; text-align:center">
                      <a><img src="assets/img/drp2.png" alt="" style="width: 60%"></a>
                  </div>
                  <div class="col-10" style="padding: 0.8rem 0rem;">
                        <div class="cHead" style="font-size:20px">Assalamualaikum, {{ strtok(auth()->user()->dropshipper->nama_lengkap, ' ') }}!</div>
                        <div class="cBody" style="font-size:14px">Anda terdaftar sebagai Dropshipper <br> Sejak <strong> {{ strtok(auth()->user()->dropshipper->created_at, ' ') }}!</strong> </div>
                  </div>
              </div>
            </div>
          @endif
          {{-- <div class="col cards">
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
          </div> --}}
        </div>
          <div class="row mt-1">
            @if(auth()->user()->role == "supplier")
            <a class="col cards cHover" style="margin-right: 2rem; background-color:#E2EDF9; color: #3C4A57; border: solid 0.1ch #3C4B5E">
              <div class="row">
                  <div class="col-9" style="padding: 0.8rem 0rem;">
                    <div class="fw-bold" style="font-size: 16px">Total Seluruh</div>
                    <div class="fw-normal" style="font-size: 14px">Transaksi</div>
                      <div class="row" style="font-weight: 600;">
                          <div class="col-6 mt-2" style="color: #3C4B5E">
                              <div style="font-size:22px;">{{$allTrans}} </div>   
                          </div>
                          <div class="col-6 mt-1">
                            <i class="bi bi-clipboard2-data" style="font-size: 28px; margin-left:5rem"></i>
                          </div>
                      </div>
                  </div>
              </div>
            </a>
            @else
            <a class="col cards cHover" style="margin-right: 2rem; background-color:#E2EDF9; color: #3C4A57; border: solid 0.1ch #3C4B5E">
              <div class="row">
                  <div class="col-9" style="padding: 0.8rem 0rem;">
                    <div class="fw-bold" style="font-size: 16px">Total Seluruh</div>
                    <div class="fw-normal" style="font-size: 14px">Transaksi</div>
                      <div class="row" style="font-weight: 600;">
                          <div class="col-6 mt-2" style="color: #3C4B5E">
                              <div style="font-size:22px;">{{$allTrans}} </div>  
                          </div>
                          <div class="col-6 mt-1">
                            <i class="bi bi-clipboard2-data" style="font-size: 28px; margin-left:5rem"></i>
                          </div>
                      </div>
                  </div>
              </div>
            </a>
            @endif
            
            <a class="col cards cHover" style="margin-right: 2rem; background-color:#DFECE0; color:#3C4A57; border: solid 0.1ch #3C4B5E">
              <div class="row">
                  <div class="col-9" style="padding: 0.5rem 0rem;">
                    <div class="fw-bold" style="font-size: 16px">Transaksi</div>
                    <div class="fw-normal" style="font-size: 14px">Diproses</div>
                      <div class="row" style="font-weight: 600;">
                          <div class="col-6 mt-2" style="color: #3C4A57">
                              <div style="font-size:22px;">{{$on_process}}</div>
                          </div>
                          <div class="col-6 mt-2">
                            <i class="bi bi-clipboard2-check" style="font-size: 28px; margin-left:5rem"></i>
                          </div>
                      </div>
                  </div>
              </div>
            </a>
            <a class="col cards cHover" style="margin-right: 2rem; background-color:#FEEDD8; color:#3C4B5E; border: solid 0.1ch #3C4B5E">
              <div class="row">
                  <div class="col-9" style="padding: 0.5rem 0rem;">
                      <div class="fw-bold" style="font-size: 16px">Transaksi</div>
                      <div class="fw-normal" style="font-size: 14px">Belum Diproses</div>
                      <div class="row" style="font-weight: 600;">
                          <div class="col-6 mt-2" style="color: #3C4B5E">
                              <div style="font-size:22px;">{{$not_process}}</div>
                          </div>
                          <div class="col-6 mt-2">
                            <i class="bi bi-clipboard2-minus" style="font-size: 28px; margin-left:5rem"></i>
                          </div>
                      </div>
                  </div>
              </div>
            </a>
            <a class="col cards cHover" style="margin-right: 2rem; background-color:#fdddf8; color:#3C4B5E; border: solid 0.1ch #3C4B5E">
              <div class="row">
                  <div class="col-9" style="padding: 0.5rem 0rem;">
                      <div class="fw-bold" style="font-size: 16px">Transaksi</div>
                      <div class="fw-normal" style="font-size: 14px">Ditolak</div>
                      <div class="row" style="font-weight: 600;">
                          <div class="col-6 mt-2" style="color: #3C4B5E">
                              <div style="font-size:22px;">{{$ditolak}}</div>
                          </div>
                          <div class="col-6 mt-2">
                            <i class="bi bi-clipboard2-x" style="font-size: 28px; margin-left:5rem"></i>
                          </div>
                      </div>
                  </div>
              </div>
            </a>
          </div>
        <div class="row">
          @if(auth()->user()->role == "supplier")
          <a class="col cards cHover" style="margin-right: 2rem; background-color:#E2EDF9; color: #3C4A57; border: solid 0.1ch #3C4B5E">
            <div class="row">
                <div class="col-12" style="padding: 0.8rem 0rem;">
                  <div class="fw-bold" style="font-size: 16px">Total Penjualan</div>
                  <div class="fw-normal" style="font-size: 14px">Produk</div>
                    <div class="row" style="font-weight: 600;">
                        <div class="col-12 mt-2" style="color: #3C4B5E">
                            <div style="font-size:22px;">Rp{{ number_format($allSell) }} </div>
                        </div>
                    </div>
                </div>
            </div>
          </a>
          <a class="col cards cHover" style="margin-right: 2rem; background-color:#E2EDF9; color: #3C4A57; border: solid 0.1ch #3C4B5E">
            <div class="row">
                <div class="col-9" style="padding: 0.8rem 0rem;">
                  <div class="fw-bold" style="font-size: 16px">Total Produk</div>
                  <div class="fw-normal" style="font-size: 14px">Dimiliki</div>
                    <div class="row" style="font-weight: 600;">
                        <div class="col-6 mt-2" style="color: #3C4B5E">
                            <div style="font-size:22px;">{{$allProduk}} </div>
                        </div>
                        <div class="col-6">
                          <i class="bi bi-collection" style="font-size: 28px; margin-left:8rem"></i>
                        </div>
                    </div>
                </div>
            </div>
          </a>
          <a class="col cards cHover" style="margin-right: 2rem; background-color:#E2EDF9; color: #3C4A57; border: solid 0.1ch #3C4B5E">
            <div class="row">
                <div class="col-9" style="padding: 0.8rem 0rem;">
                  <div class="fw-bold" style="font-size: 16px">Total Produk</div>
                  <div class="fw-normal" style="font-size: 14px">Dikirim</div>
                    <div class="row" style="font-weight: 600;">
                        <div class="col-6 mt-2" style="color: #3C4B5E">
                            <div style="font-size:22px;">{{$allSend}} </div>
                        </div>
                        <div class="col-6">
                          <i class="bi bi-truck" style="font-size: 28px; margin-left:8rem"></i>
                        </div>
                    </div>
                </div>
            </div>
          </a>
          @endif
        </div>

    </div>
@endsection