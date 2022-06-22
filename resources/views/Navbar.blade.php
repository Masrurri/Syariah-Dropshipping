<nav class="navbar fixed-top navbar-expand-sm navbar-light">
    <div class="container-fluid " style="padding-left: 103px; padding-right: 103px;">
        <a class="navbar-brand" href="/dashboard" style="font-family: Philosopher; font-size: 22px; color: #056AD3; line-height: 22px; font-weight:800">DropSup</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" style="font-family: Open Sans;">
            <ul class="navbar-nav" style="color:#034AB6">
                <li class="nav-item">
                    <a class="container-fluid {{ ($title === "Dashboard")? 'actived1' : '' }}" href="/dashboard">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="container-fluid {{ ($title === "Produk" or $title === "My Produk")? 'actived2' : '' }}" href="@if(auth()->user()->role == "supplier")@if(auth()->user()->supplier->toko->status_akun == "Belum aktif")/edit-toko/{{ auth()->user()->supplier->toko->id }}  @else /myproduk @endif @else /produk @endif">
                        Produk
                    </a>
                </li>  
                <li class="nav-item">
                    <a class="container-fluid {{ ($title === "Supplier")? 'actived2' : '' }}" href="@if(auth()->user()->role == "supplier")@if(auth()->user()->supplier->toko->status_akun == "Belum aktif")/edit-toko/{{ auth()->user()->supplier->toko->id }}  @else /supplier @endif @else /supplier @endif">
                        Supplier
                    </a>
                </li>                 
                <li class="nav-item">
                    <a class="container-fluid {{ ($title === "Transaksi")? 'actived3' : '' }}" href="@if(auth()->user()->role == "supplier")@if(auth()->user()->supplier->toko->status_akun == "Belum aktif")/edit-toko/{{ auth()->user()->supplier->toko->id }}  @else /transaksi @endif @else /transaksi @endif">
                        Transaksi
                    </a>
                </li>
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