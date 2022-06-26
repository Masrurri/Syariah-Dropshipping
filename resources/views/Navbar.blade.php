<nav class="navbar navbar-light navbar-expand-md fixed-top" style="font-weight: 600">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="{{asset('assets/img/brand.png')}}" width="130rem" /></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link {{ ($title === "Dashboard")? 'active' : '' }} " href="/dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "Produk" or $title === "My Produk")? 'active' : '' }} " href="@if(auth()->user()->role == "supplier")@if(auth()->user()->supplier->toko->status_akun == "Belum aktif")/edit-toko/{{ auth()->user()->supplier->toko->id }}  @else /myproduk @endif @else {{ route('produk', array('filter' => 'Semua Produk'))}} @endif">Produk</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "Supplier")? 'active' : '' }} " href="@if(auth()->user()->role == "supplier")@if(auth()->user()->supplier->toko->status_akun == "Belum aktif")/edit-toko/{{ auth()->user()->supplier->toko->id }}  @else /supplier @endif @else /supplier @endif">Supplier</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "Transaksi")? 'active' : '' }} " href="@if(auth()->user()->role == "supplier")@if(auth()->user()->supplier->toko->status_akun == "Belum aktif")/edit-toko/{{ auth()->user()->supplier->toko->id }}  @else /transaksi @endif @else /transaksi @endif">Transaksi</a></li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form action="/profile">
                        <button class="container-fluid {{ ($title === "Profile")? 'actived3' : '' }} navButton" href="/profile">
                            My Profile
                        </button>
                    </form>
                    
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="container-fluid navButton">Logout</button>
                    </form>
                </li>
            </ul>
            
        </div>
    </div>
</nav>