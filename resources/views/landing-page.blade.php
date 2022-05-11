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
            background-image: url('assets/img/bg.png');
            background-repeat: no-repeat;
            background-position: 112px 130px;
            background-size: 80%;
            color: #056AD3;
        }

        .card {
            width: 55rem;
            padding: 1rem 2rem;
            box-shadow: 0px 0px 4px 2px rgba(0, 89, 183, 0.12);
            border-radius: 16px;
            margin-top: 2.5rem;

        }

        nav {
            background: #FFFFFF;
            box-shadow: 0px 0px 4px 2px rgba(0, 89, 183, 0.16);
            height: 5rem;
        }
    </style>

    <title>Syariah Dropshipping</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light">
        <div class="container-fluid " style="padding-left: 103px; padding-right: 103px;">
            <a class="navbar-brand" href="#section1" style="font-family: Philosopher; font-size: 18px; color: #056AD3; line-height: 22px;">Syariah <br> Dropshipping</a>
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
                    <li class="nav-item">
                        <a class="container-fluid justify-content-end" href="#section2">
                            <button class="btn btn-primary btn-sm" type="button" style="width: 100px; font-weight:700">DAFTAR</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex align-items-center " style="height: 50rem;" id="section1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Bisnis halal tanpa modal</h1><br>
                    <p style="width: 55%; font-size:24px;">Syariah Dropshipping merupakan platform yang diciptakan untuk
                        menjadi solusi dari masalah yang sering terjadi
                        pada bisnis dropshipping.</p><br>
                    <a class="btn btn-primary btn-lg" type="button" style="width: 18%;" href="#section2">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center" style="height: 50rem; padding-top:12rem; padding-bottom: 10rem;" id="section2">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-auto">
                    <h1 style="width: 40rem; text-align:center; font-size: 32px">Siapa saja bisa bergabung, mulai
                        bisnis anda sekarang!</h1>
                </div>
            </div>
            <div class="row justify-content-lg-center">
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 700; font-size:28px; margin-bottom: 1rem;">SUPPLIER</h5>
                            <a style="float: right;"><img src="assets/img/spl.png" alt=""></a>
                            <p class="card-text" style="width: 35rem; font-size:18px; margin-bottom: 1rem;">Tingkatkan penjualan produk anda dengan bergabung dalam
                                bisnis dropshipping sebagai penyuplai barang.</p>
                            <a onclick="setRole1()" id="buttonSpl" href="/register" class="btn btn-primary" style="font-weight: 600; font-size:18px; padding-left:2rem; padding-right:2rem;">
                                Daftar
                                <i class="fa fa-angle-right" aria-hidden="true" style=" margin-left:0.5rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-center">
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 700; font-size:28px; margin-bottom: 1rem;">DROPSHIPPER</h5>
                            <a style="float: right;"><img src="assets/img/drp.png" alt=""></a>
                            <p class="card-text" style="width: 35rem; font-size:18px; margin-bottom: 1rem;">Mulai bisnis anda dengan mudah tanpa harus memiliki modal.
                                Cari produk produk untuk dijual kembali disini, tanpa perlu stok barang.</p>
                            <a onclick="setRole2()" id="buttonDrp" href="/register" class="btn btn-primary" style="font-weight: 600; font-size:18px; padding-left:2rem; padding-right:2rem;">
                                Daftar
                                <i class="fa fa-angle-right" aria-hidden="true" style=" margin-left:0.5rem;"></i>
                            </a>
                        </div>
                    </div>
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
        var roleOption = "none";

        function setRole1() {
            roleOption = "supplier"
            sessionStorage.setItem("roleOption", roleOption);

        }

        function setRole2() {
            roleOption = "dropshipper"
            sessionStorage.setItem("roleOption", roleOption);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>