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
    <link href="/assets/css/style.css" rel="stylesheet">
    <style>
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

<body>
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
    <div class="container cards mt-5">
        <div class="row ms-2">
            <div class="col-1 mt-3">
                <span style="font-size: 24px; font-weight:700;">Login</span> 
            </div>
            <div class="col-11 mt-4">
                @if(session()->has('loginError'))
                <span class=" alert alert-danger alert-dismissible fade show py-1 px-3 mx-4" role="alert" style="font-size:14px; font-weight:600; width:6.5rem;">  
                    Login Gagal!
                </span>
                @endif
            </div>
        </div>
        <div class="row py-3 w-100">
            <div class="col-6 ">
                <div class="row">
                    <div class=" mb-3" style="max-width: 550px; max-height:30rem;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form class="row g-3" action="/login" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="nama-lengkap" class="form-label">Username</label>
                                                <input class="form-control form-control-sm " name="username" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label for="no-handphone" class="form-label">Password</label>
                                                <input class="form-control form-control-sm " name="password" type="password" placeholder="Password" aria-label="Password">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12" style="font-size: 14px">
                                                <span>Belum punya akun?</span><a href="/#section2"> Register disini</a>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-8">
                                                <button type="submit" class="btn btn-sm btn-primary" style="font-weight: 600; width:5rem;">Login</button>
                                                
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
                <div class="row">
                    <div class="col-12">
                        <img src="assets/img/login.png" alt="" style="width: 25vw; position: absolute; margin-top:-5rem">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>