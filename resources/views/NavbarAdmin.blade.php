<nav class="navbar navbar-light navbar-expand-md fixed-top" style="font-weight: 600">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="{{asset('assets/img/brand.png')}}" width="130rem" /></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-1" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link {{ ($title === "Admin Supplier")? 'active' : '' }}" href="/admin-supplier">Supplier</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "Admin Dropshipper")? 'active' : '' }}" href="/admin-dropshipper">Dropshipper</a></li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">                       
                    <button type="submit" class="container-fluid navButton active">Admin</button>
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