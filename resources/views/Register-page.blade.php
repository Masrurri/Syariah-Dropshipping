<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <style>
        body {
            background-image: url('assets/img/bg2.png');
            background-repeat: no-repeat;
            background-position: 30px 130px;
            background-size: 100%;
            color: #056AD3;
        }

        .card {
            width: 40rem;
            padding: 1rem 2rem;
            box-shadow: 0px 0px 4px 2px rgba(0, 89, 183, 0.12);
            border-radius: 16px;
            margin-top: 2rem;

        }

        nav {
            background: #FFFFFF;
            box-shadow: 0px 0px 4px 2px rgba(0, 89, 183, 0.16);
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

        .btn-prm {
            background-color: #056AD3;
            width: 6rem;
            color: #FFFFFF;
            font-weight: 600;
        }

        .btn-prm:hover {
            color: #FFFFFF;
            background-color: #034AB6;
        }

        .btn-scn {
            background-color: #E0ECFF;
            width: 6rem;
            color: #056AD3;
            font-weight: 600;
        }

        .btn-scn:hover {
            border: 1px solid #056AD3;
            color: #056AD3;
        }
    </style>

    <title>Syariah Dropshipping</title>
</head>

<body onload="role2()">
    <nav class="navbar fixed-top navbar-expand-sm navbar-light">
        <div class="container-fluid " style="padding-left: 103px; padding-right: 103px;">
            <a class="navbar-brand" href="/" style="font-family: Philosopher; font-size: 18px; color: #056AD3; line-height: 22px;">Syariah <br> Dropshipping</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent" style="font-family: Open Sans;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="container-fluid justify-content-end">
                            <button class="btn btn-outline-primary btn-sm" type="button" style="width: 100px; font-weight:700" data-bs-toggle="modal" data-bs-target="#modal-login">MASUK</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex align-items-center" style="margin-top: 7rem;" id="section2">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-auto">
                    <h1 style="font-size: 32px; color:#056AD3; font-weight:600;">Registrasi</h1>
                </div>
            </div>
            <div class="row justify-content-lg-center">
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3" action="/register" method="post">
                                @csrf
                                <div class="col-md-6 form-group">
                                    <label for="sebagai" class="form-label">Daftar Sebagai</label>
                                    <select class="form-select @error('sebagai') is-invalid @enderror" aria-label="Default select example" name="sebagai" id="sebagai" style="color:#056AD3;" onchange="role()" required>
                                        <option value="supplier">Supplier</option>
                                        <option value="dropshipper">Dropshipper</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label id="nama-toko-label" for="nama-toko" class="form-label">Nama Toko</label>
                                    <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" name="nama_toko" id="nama-toko" value="{{ old('nama_toko') }}">
                                    @error('nama_toko')
                                    <div id="nama-toko-feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama-lengkap" required value="{{ old('nama_lengkap') }}">
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="no-handphone" class="form-label">Nomor Handphone</label>
                                    <input type="text" class="form-control @error('no_handphone') is-invalid @enderror" name="no_handphone" id="no-handphone" required value="{{ old('no_handphone') }}">
                                    @error('no_handphone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label for="input-email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="input-email" required value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label for="input-password" class="form-label">Kata Sandi</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="input-password" placeholder="min. 8 characters" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group">
                                    <div class="form-check">
                                        <input class="form-check-input @error('ketentuan_acc') is-invalid @enderror" type="checkbox" name="ketentuan_acc" id="ketentuan" required>
                                        <label class="form-check-label" for="gridCheck">
                                            <span style="font-weight: 400;">Saya telah membaca </span>
                                            <button type="button" class="modal1" data-bs-toggle="modal" data-bs-target="#modal-register">
                                                Ketentuan Wakalah
                                            </button>
                                        </label>
                                        @error('ketentuan_acc')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="font-weight: 600; width:10rem;">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Syarat Ketentuan -->
    <div class="modal fade" id="modal-register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content px-5 py-3">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="width: 19rem;">Ketentuan Dropshipping Syariah 
                        Wakalah</h5>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Supplier bersedia memberikan izin/wewenang kepada Dropshipper sebagai wakil untuk memasarkan dan menjual produk milik Supplier.</li>
                        <li>Supplier bersedia untuk menjamin ketersediaan stok barang miliknya.</li>
                        <li>Supplier menjamin bahwa barang yang dijualnya adalah milik sendiri dan tidak menjual barang-barang terlarang.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-scn" data-bs-dismiss="modal" style="margin-right: 1rem;">Batal</button>
                    <button type="button" class="btn btn-prm" onclick="check()" data-bs-dismiss="modal">Setuju</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal LOGIN -->
    <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-md modal-dialog modal-dialog-centered">
            <div class="modal-content px-5 py-3">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="width: 15rem;">Login</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="">
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function role2() {
            var select = document.getElementById('sebagai');
            select.value = sessionStorage.getItem("roleOption");
            if (select.value == "supplier") {
                document.getElementById("nama-toko").style.display = "block";
                document.getElementById("nama-toko-label").style.display = "block";
                $("#nama-toko").attr('required',true);
            } else {
                $("#nama-toko").attr('required',false);
                document.getElementById("nama-toko").style.display = "none";
                document.getElementById("nama-toko-label").style.display = "none";
                document.getElementById("nama-toko-feedback").style.display = "none";
            }
        }

        function role() {
            var select = document.getElementById('sebagai');
            var option = select.options[select.selectedIndex];
            if (option.value == "supplier") {
                var roleOption = "supplier"
                sessionStorage.setItem("roleOption", roleOption);
                document.getElementById("nama-toko").style.display = "block";
                document.getElementById("nama-toko-label").style.display = "block";
                $("#nama-toko").attr('required',true);
            } else {
                var roleOption = "dropshipper"
                sessionStorage.setItem("roleOption", roleOption);
                $("#nama-toko").attr('required',false);
                document.getElementById("nama-toko").style.display = "none";
                document.getElementById("nama-toko-label").style.display = "none";
            }
        }

        function check() {
            document.getElementById("ketentuan").checked = true;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>