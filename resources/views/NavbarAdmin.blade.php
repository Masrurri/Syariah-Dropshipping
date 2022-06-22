<nav class="navbar fixed-top navbar-expand-sm navbar-light">
    <div class="container-fluid " style="padding-left: 103px; padding-right: 103px;">
        <a class="navbar-brand" href="/admin-dashboard" style="font-family: Philosopher; font-size: 22px; color: #056AD3; line-height: 22px;">DropSup</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" style="font-family: Open Sans;">
            <ul class="navbar-nav" style="color:#034AB6">
                <li class="nav-item">
                    <a class="container-fluid" href="/admin-dashboard">
                        Admin
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="container-fluid " href="/admin-dropshipper">
                        Dropshipper
                    </a>
                </li>   --}}
            </ul>
            <ul class="navbar-nav ms-auto">
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