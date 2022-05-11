<nav class="navbar fixed-top navbar-expand-sm navbar-light">
    <div class="container-fluid " style="padding-left: 103px; padding-right: 103px;">
        <a class="navbar-brand" href="#section1" style="font-family: Philosopher; font-size: 18px; color: #056AD3; line-height: 22px;">Syariah <br> Dropshipping</a>
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
                    <a class="container-fluid {{ ($title === "Produk")? 'actived2' : '' }}" href="/produk">
                        Produk
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="container-fluid {{ ($title === "Transaksi")? 'actived3' : '' }}" href="/transaksi">
                        Transaksi
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="container-fluid {{ ($title === "Profile")? 'actived3' : '' }}" href="/profile">
                        My Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="container-fluid " href="#section2">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>