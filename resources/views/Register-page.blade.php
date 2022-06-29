<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ URL::asset('assets/img/favicon.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="/assets/css/style.css" rel="stylesheet">
    <style>
        .cardInfo{
            padding: 1rem 2rem;
            border-radius: 10px;
            color: #FFFFFF;
            background: #176E23;
        }

        .cards {
            width: 100%;
        }

        nav {
            background: #FFFFFF;
            box-shadow: 0px 0px 4px 2px rgba(12, 126, 52, 0.24);
            height: 5rem;
        }

        label {
            font-weight: 600;
        }

        .modal1 {
            background: none;
            border: none;
            padding: 0px;
            color: #056AD3;
            font-weight: 600
        }

        .modal1:hover {
            color: #FF8A00;
        }
    </style>

    <title>Syariah Dropshipping</title>
</head>

<body onload="role2()">
    <nav class="navbar navbar-light navbar-expand-md" style="font-weight: 600">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="assets/img/brand.png" width="130rem" /></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">

                </ul>
                
                <a href="/login">
                    <button class="btn btn-secondary btn-sm link-dark px-4 me-3" type="button"  style="font-weight: 600">Login</button>
                </a>
                <a href="/#section2">
                    <button class="btn btn-primary btn-sm border-0 px-4" type="button" style="font-weight: 600">Register</button>
                </a>
                
                   
            </div>
        </div>
    </nav>
    <div class="container cards mt-5 mb-5">
        <div class="row ms-2">
            <div class="col-1 mt-3">
                <span style="font-size: 24px; font-weight:700;">Registrasi</span> 
            </div>
            <div class="col-11 mt-4">
                @if(session()->has('loginError'))
                <span class=" alert alert-danger alert-dismissible fade show py-1 px-3 mx-4" role="alert" style="font-size:14px; font-weight:600; width:6.5rem;">  
                    Login Gagal!
                </span>
                @endif
            </div>
        </div>
        <div class="row py-3 ">
            <div class="col-6 ">
                <div class="row">
                    <div class=" mb-3" style="">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form class="row g-3" action="/register" method="post">
                                        @csrf
                                        <div class="row" hidden>
                                            <div class="col-12">
                                                <label for="sebagai" class="form-label">Daftar Sebagai</label>
                                                <select class="form-select @error('sebagai') is-invalid @enderror" aria-label="Default select example" name="sebagai" id="sebagai" style="color:#056AD3;" onchange="role()" required>
                                                    <option value="supplier">Supplier</option>
                                                    <option value="dropshipper">Dropshipper</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama-lengkap" required value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap">
                                                @error('nama_lengkap')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label for="user_name" class="form-label">Username</label>
                                                <input type="text" class="form-control form-control-sm @error('username') is-invalid @enderror" name="username" id="user_name" required value="{{ old('username') }}" placeholder="Username">
                                                @error('username')
                                                <div class="invalid-feedback">
                                                    Username sudah digunakan, gunakan username lain
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2" id="nama-toko">
                                            <div class="col-12">
                                                <label id="nama-toko-label" for="nama-toko" class="form-label">Nama Toko</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_toko') is-invalid @enderror" name="nama_toko" id="nama-toko" value="{{ old('nama_toko') }}" placeholder="Nama Toko">
                                                @error('nama_toko')
                                                <div id="nama-toko-feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label for="no-handphone" class="form-label">Nomor Handphone</label>
                                                <input type="text" maxlength="13" class="form-control form-control-sm @error('no_handphone') is-invalid @enderror" name="no_handphone" id="no-handphone" required value="{{ old('no_handphone') }}" placeholder="Nomor Handphone">
                                                @error('no_handphone')
                                                <div class="invalid-feedback">
                                                    Nomor handphone sudah terdaftar
                                                </div>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label for="input-email" class="form-label">Email</label>
                                                <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" id="input-email" required value="{{ old('email') }}" placeholder="Email">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    Email sudah terdaftar
                                                </div>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label for="input-password" class="form-label">Password</label>
                                                <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" id="input-password" placeholder="Minimal 8 karakter" required>
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    Password minimal harus 8 karakter
                                                </div>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                    
                                        <div class="row mt-3">
                                            <div class="col-12" style="font-size: 14px">
                                                <div class="form-check">
                                                    <input class="form-check-input @error('ketentuan_acc') is-invalid @enderror" type="checkbox" name="ketentuan_acc" id="ketentuan" required oninvalid="this.setCustomValidity('Mohon baca syarat dan ketentuan')" 
                                                    onclick ="if (this.checked) {this.setCustomValidity('');}">
                                                    <label class="form-check-label" for="">
                                                        <span style="font-weight: 400;">Saya telah membaca </span>
                                                        <button type="button" class="modal1" data-bs-toggle="modal" data-bs-target="#modal-register">
                                                            Syarat & Ketentuan
                                                        </button>
                                                    </label>
                                                    @error('ketentuan_acc')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-8">
                                                <a type="button" href="/#section2" class="btn btn-secondary me-2" style="font-weight: 600; width:6rem;">Kembali</a>
                                                <button type="submit" class="btn btn-primary" style="font-weight: 600; width:8rem;">Daftar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            <div class="col-6">
                <div class="row cardInfo" style="height: 67vh" id="drp" hidden>
                    <div class="card-body">
                        <img src="assets/img/star.png" alt="" style="position: absolute; margin-left:20rem">
                        <img src="assets/img/star.png" alt="" style="position: absolute; margin-top:15rem">
                        <h5 class="card-title" style="font-weight: 700; font-size:28px; margin-bottom: 1rem;"><a class="me-3"><img style="width:3.5rem" src="assets/img/spl2.png" alt=""></a>SUPPLIER</h5>
                        <div class="row">
                            <div class="col-1">
                                <i class="bi bi-boxes" style="font-size: 28px"></i>
                            </div>
                            <div class="col-11">
                                Supplier bisa berasal dari berbagai sektor usaha seperti UMKM, Pemilik Brand, Importir, Distributor dan Produsen. <br>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-1">
                                <i class="bi bi-graph-up-arrow" style="font-size: 28px"></i>
                            </div>
                            <div class="col-11">
                                Para Dropshipper siap memasarkan produk anda di marketplace manapun, tanpa perlu memikirkan tenaga dan strategi penjualan.
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-1" style="font-size: 28px">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                            <div class="col-11">
                                Syariah Dropshipping tidak mengenakan biaya apapun kepada pengguna, alias pendaftaran gratis.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cardInfo" style="height: 67vh" id="spl" hidden>
                    <div class="card-body">
                        <img src="assets/img/star.png" alt="" style="position: absolute; margin-left:20rem;">
                        <img src="assets/img/star.png" alt="" style="position: absolute; margin-top:15rem">
                        <h5 class="card-title" style="font-weight: 700; font-size:28px; margin-bottom: 1rem;"><a class="me-3"><img style="width:3.5rem" src="assets/img/drp2.png" alt=""></a>DROPSHIPPER</h5>
                        <div class="row">
                            <div class="col-1">
                                <i class="bi bi-wallet2" style="font-size: 28px"></i>
                            </div>
                            <div class="col-11">
                                Mulai bisnis dengan mudah tanpa harus memiliki modal.
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-1">
                                <i class="bi bi-hand-thumbs-up" style="font-size: 28px"></i>
                            </div>
                            <div class="col-11">
                                Pilih produk-produk yang beragam untuk dijual kembali tanpa perlu stok barang.
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-1" style="font-size: 28px">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                            <div class="col-11">
                                Syariah Dropshipping tidak akan mengenakan biaya tambahan apapun kepada pengguna.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Syarat Ketentuan -->
    <div class="modal fade" id="modal-register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content px-5 py-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="width: 25rem; font-weight:700">Ketentuan Syariah Dropshipping</h5>
                </div>
                <div class="modal-body scrl" style="color:black">
                    <span style="font-weight: 600">Akad Wakalah</span>
                    <ol style="width:90%">
                        <li>Supplier bersedia memberikan izin/wewenang kepada Dropshipper sebagai wakil untuk memasarkan dan menjual produk milik Supplier.</li>
                        <li>Supplier menjamin bahwa barang yang dijualnya adalah milik sendiri dan tidak menjual barang-barang yang dilarang secara hukum dan agama.</li>
                        <li>Dropshipper selaku wakil bersedia memasarkan, menjual dan melakukan pembayaran sesuai dengan ketentuan dari Supplier.</li>
                        <li>Dropshipper harus memasarkan produk sesuai dengan harga yang disarankan oleh Supplier, untuk menjaga harga pasar.</li>
                    </ol>
                    <span style="font-weight: 600">Dropshipper</span>
                    <ol style="width:90%">
                        <li>Dropshipper bertanggung jawab untuk membaca, memahami, dan menyetujui informasi/deskripsi keseluruhan produk yang telah dituliskan oleh Supplier sebelum melakukan pembelian produk.</li>
                        <li>Dropshipper wajib melakukan transaksi melalui prosedur yang telah ditetapkan.</li>
                        <li>Dropshipper wajib membayar lunas sesuai dengan jumlah invoice yang didapat tanpa cicilan untuk menghindari riba.</li>
                    </ol>
                    <span style="font-weight: 600">Supplier</span>
                    <ol style="width:90%">
                        <li>Supplier bertanggung jawab untuk mengirimkan barang sesuai dengan data yang diinputkan oleh Dropshipper.</li>
                        <li>Supplier bersedia menyanggupi untuk melayani pembelian Produk tanpa minimal order.</li>
                        <li>Supplier bersedia untuk menjamin ketersediaan stok barang miliknya.</li>
                    </ol>
                    <span style="font-weight: 600">Kebijakan Kerahasiaan Informasi</span>
                    <ol style="width:90%">
                        <li>Kami berkomitmen untuk memastikan bahwa informasi yang Anda berikan kepada Kami aman dan tidak dapat digunakan oleh pihak-pihak yang tidak bertanggungjawab.</li>
                        <li>Dropshipper dan Supplier menjamin bahwa informasi dan identitas yang diberikan saat membuat akun merupakan informasi pribadi milik sendiri dan bukan informasi/identitas fiktif.</li>
                        <li>Apabila terdapat perselisihan atau perbedaan pendapat antara Supplier dan Dropshipper, kami akan menggunakan informasi yang telah didaftarkan untuk menyelesaikan permasalahan yang terjadi antara kedua belah pihak berdasarkan hukum yang berlaku.</li>
                        <li>Dengan ini anda mengakui bahwa Kami memiliki hak untuk memonitor akses penggunaan Syariah Dropshipping untuk memastikan kepatuhan dengan syarat ketentuan ini, atau untuk mematuhi peraturan yang berlaku atau perintah atau persyaratan dari pengadilan, lembaga administratif atau badan pemerintahan lainnya.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-scn" data-bs-dismiss="modal" style="margin-right: 1rem;">Batal</button>
                    <button type="button" class="btn btn-prm" onclick="check()" data-bs-dismiss="modal">Setuju</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function role2() {
            var select = document.getElementById('sebagai');
            select.value = sessionStorage.getItem("roleOption");
            if (select.value == "supplier") {
                document.getElementById("drp").hidden = false;
                document.getElementById("spl").hidden = true;
                document.getElementById("nama-toko").hidden = false;
                document.getElementById("nama-toko-label").hidden = false;
                $("#nama-toko").attr('required',true);
            } else {
                $("#nama-toko").attr('required',false);
                document.getElementById("drp").hidden = true;
                document.getElementById("spl").hidden = false;
                document.getElementById("nama-toko").hidden = true;
                document.getElementById("nama-toko-label").hidden = true;
                document.getElementById("nama-toko-feedback").hidden = true;
            }
        }

        function role() {
            var select = document.getElementById('sebagai');
            var option = select.options[select.selectedIndex];
            if (option.value == "supplier") {
                var roleOption = "supplier"
                sessionStorage.setItem("roleOption", roleOption);
                document.getElementById("drp").hidden = false;
                document.getElementById("spl").hidden = true;
                document.getElementById("nama-toko").hidden = false;
                document.getElementById("nama-toko-label").hidden = false;
                $("#nama-toko").attr('required',true);
            } else {
                var roleOption = "dropshipper"
                sessionStorage.setItem("roleOption", roleOption);
                $("#nama-toko").attr('required',false);
                document.getElementById("drp").hidden = true;
                document.getElementById("spl").hidden = false;
                document.getElementById("nama-toko").hidden = true;
                document.getElementById("nama-toko-label").hidden = true;
            }
        }

        function check() {
            document.getElementById("ketentuan").checked = true;
            document.getElementById("ketentuan").setCustomValidity('');
        }
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>