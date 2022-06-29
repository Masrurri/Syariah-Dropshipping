<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="icon" href="{{ URL::asset('assets/img/favicon.png') }}" type="image/x-icon"/>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/landing.css" rel="stylesheet">
    <style>
        body {
            background-image: url('assets/img/bg.png');
            background-repeat: no-repeat;
            background-position: 112px 130px;
            background-size: 80%;
            color: #176E23;
        }
        body::-webkit-scrollbar {
            display: none; 
        }

        .card { 
            padding: 1rem 2rem;
            box-shadow: 0px 0px 4px 2px rgba(12, 126, 52, 0.24);
            border-radius: 13px;
            margin-top: 2.5rem;
            color: #FFFFFF;
            background: #176E23;
        }

        nav {
            background: #FFFFFF;
            box-shadow: 0px 0px 4px 2px rgba(12, 126, 52, 0.24);
            height: 5rem;
        }
        
    </style>

    <title>Syariah Dropshipping</title>
</head>

<body>
    <!-- Modal -->
    <div id="myModal" class="modal d-block mdls" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color:#0000008e;">
        <div class="modalAlert modal-dialog modal-sm modal-dialog-centered cardTbl" style="max-width:80vw; min-height:70vh">
            <div class="" style="text-align: center" >
                <h3 class="h3ad" style="font-weight: 600; font-size:8vw">Perangkat anda belum mendukung</h3>
                <img class="imgs" src="assets/img/dsktp.png" style="width:60%" />
                <p class="p4r" style="font-size:5vw">
                    Disarankan untuk mengakses aplikasi ini menggunakan komputer/desktop. Bukan
                    menggunakan handphone/smartphone.</p>
            </div>
        </div>
    </div>
    <nav class=" navbar navbar-light navbar-expand-md fixed-top" style="font-weight: 600;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/brand.png" width="130rem" /></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-1" class="collapse navbar-collapse hides">
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
    
    <div class="d-flex" style="height: 30rem; margin-top:14rem" id="section1">
        <div class="container hides">
            <div class="row">
                <div class="col">
                    <h1 style="font-family: 'Philosopher', sans-serif;">Syariah Dropshipping</h1><br>
                    <p style="width: 65%; font-size:22px;">Syariah Dropshipping merupakan platform yang diciptakan untuk
                        menjadi solusi dari masalah yang sering terjadi
                        pada bisnis dropshipping</p><br>
                    <a class="btn btn-primary btn-lg" type="button" style="width: 18%;" href="#section2">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex" style="display:none; padding-top:7rem; padding-bottom: 9rem;" id="section2">
        <div class="container hides">
            <div class="row justify-content-lg-center mb-1">
                <div class="col-auto">
                    <h1 style="text-align:center; font-size: 32px">Siapa saja bisa bergabung, mulai
                        bisnis <br> anda sekarang!</h1>
                </div>
            </div>
            <div class="row justify-content-lg-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body ">
                            <img src="assets/img/star.png" alt="" style="position: absolute; margin-left:20rem">
                            <h5 class="card-title" style="font-weight: 700; font-size:28px; margin-bottom: 1rem;"><a class="me-3"><img style="width:3.5rem" src="assets/img/drp2.png" alt=""></a>DROPSHIPPER</h5>
                            
                            <p class="card-text" style=" font-size:16px; margin-bottom: 1rem;">Mulai bisnis dengan mudah tanpa harus memiliki modal.
                                Cari produk untuk dijual kembali tanpa perlu stok barang.</p>
                            <a onclick="setRole2()" id="buttonDrp" href="/register" class="btn btn-primary2" style="font-weight: 600; font-size:18px; padding-left:2rem; padding-right:1rem;">
                                Daftar
                                <i class="bi bi-chevron-right" style=" margin-left:0.5rem;"></i>
                                
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/img/star.png" alt="" style="position: absolute; margin-left:20rem">
                            <h5 class="card-title" style="font-weight: 700; font-size:28px; margin-bottom: 1rem;"><a class="me-3"><img style="width:3.5rem" src="assets/img/spl2.png" alt=""></a>SUPPLIER</h5>

                            <p class="card-text" style=" font-size:16px; margin-bottom: 1rem;">Tingkatkan penjualan produk anda dengan bergabung dalam
                                bisnis dropshipping sebagai penyuplai barang.</p>
                            <a onclick="setRole1()" id="buttonSpl" href="/register" class="btn btn-primary2" style="font-weight: 600; font-size:18px; padding-left:2rem; padding-right:1rem;">
                                Daftar
                                <i class="bi bi-chevron-right" style=" margin-left:0.5rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="d-flex" style="height:23rem; padding-bottom: 10rem; background-color:#176E23; color:white" id="section3">
        <div class="container hides pt-5">
            <img src="assets/img/star.png" alt="" style="position: absolute; margin-top:2rem">
            <img src="assets/img/star.png" alt="" style="position: absolute; margin-left:50rem; margin-top:-5rem">
            <h1 class="mb-3 mt-5" style="text-align:center; font-size: 32px; font-weight:600">Bantu kami untuk menjadi lebih baik</h1>
            <p class="px-5"style="padding-left:10rem; padding-right:10rem; text-align:center; font-size: 18px; font-weight:400; color:#cae4cd">
                Syariah Dropshipping menyediakan semua layanan dan pemrograman kepada pengguna melalui dukungan anda secara gratis. Klik tombol di bawah ini apabila anda ingin mendonasikan jumlah berapa pun yang anda inginkan kepada kami. Dukungan anda sangat membantu kami untuk menginkatkan pelayanan dan operasional website.
            </p>
            <p style="text-align:center;">
                <a  href="https://saweria.co/SyariahDropshipping" target="_blank" class="btn btn-primary2" style="font-weight: 600; font-size:18px; padding-left:2rem; padding-right:2rem; border-radius:20px">
                    Donasi
                </a> 
            </p>
            
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


