<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekoncoan Florist</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .nav-bg {
            background-color: #ea0061;
        }

        .produk-bg {
            background-color: #FCF8E8;
        }

        .nav-link {
            font-family: "Encode Sans", Sans-serif;
            font-size: 18px;
        }

        .menu-produk {
            font-family: "Encode Sans", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
        }

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        
    </style>
</head>
<body>
    <!-- header -->
    <nav class="py-2 nav-bg border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2 active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Produk</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Promo</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Kontak Kami</a></li>
                            
            </ul>
            <!-- <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Register</a></li>
            </ul> -->
        </div>
    </nav>
   
    <!-- /header -->

    <!-- main content -->
    <main>
        <!-- centered hero -->
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-6 text-center mb-5">Segara Hadir</h1>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Fitur Langganan Akan Segara Kita Hadirkan, Tunggu yaa ...
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Gabung</button>
                <a href="https://wa.me/+6282233487223/?text=Hi, Sekoncoan Florist." type="button" class="btn btn-outline-secondary btn-lg px-4">Tanya kami</a>
            </div>
            </div>
        </div>
        <!-- /centered hero --> 

    </main>
    <!-- /main content -->

    <!-- footer -->
    <div class="album bg-light">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <img src="{{ asset('logo/sekoncoanflorist_black.PNG')}}" alt="sekoncoan_florist" width="125px">
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Partnership</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Join</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tanya kami</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Informasi</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Karir</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kontak kami</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Subscribe untuk Langganan</h5>
                            <p>Dapatkan informasi, promo menarik dari kami</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2022 Sekoncoan Florist. All rights reserved | CV. Kodevindo Teknologi</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                </ul>
                </div>
                
            </footer>
        </div>
    </div>
    <!-- /footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>