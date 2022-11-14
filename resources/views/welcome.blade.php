<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekoncoan Florist</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/sekoncoanflorist_white.PNG') }}">
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
    <!-- header navbar -->
    <nav class="navbar navbar-expand-sm nav-bg">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
            <li class="nav-item"><a href="/" class="nav-link link-dark text-white px-2 active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Produk</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Promo</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark text-white px-2">Kontak Kami</a></li>
        
        
          
        </ul>
      </div>
    </div>
  </nav>
    
    <div class="container">
        <header class="d-flex justify-content-center">
            <img src="{{ asset('logo/sekoncoanflorist_black.PNG')}}" alt="sekoncoan_florist" width="350px">
        </header>
    </div>
    <!-- /header -->

    <!-- cover -->
    <div class="container">
        <header class="d-flex justify-content-center py-3 mb-4 border-bottom border-top">
        
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-5 link-dark menu-produk">Karangan Bunga</a></li>
            </ul>

        </header>
    </div>
    <!-- /cover -->

    <!-- main content -->
    <main>
        <div class="album py-5 produk-bg">
            <div class="container">
            <h1 class="display-6 text-center mb-5">Katalog</h1>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($produks as $produk)
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ Storage::url('public/produks/').$produk->gambar_produk }}" style="height: 225">
                            <div class="card-body">
                                <h5 class="card-title mt-3 mb-3 text-center ">{{ $produk->nama_produk }}</h5>
                                <a href="https://wa.me/+6289664356291/?text=Hi, Sekoncoan Florist. Saya Berminat dengan Produk {{ $produk->nama_produk }}. Terima Kasih" class="button w-100 btn btn-lg btn-primary" target="_blank">Beli Produk</a>                          
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
        <!-- centered hero -->
        <div class="px-4 py-5 my-5 text-center">
            <img src="{{ asset('logo/sekoncoanflorist_black.PNG')}}" alt="sekoncoan_florist" width="175px">
            <h1 class="display-6 fw-bold">Yuk Langganan</h1>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Kami menyediakan berbagai macam karangan bunga dan rangkaian bunga seperti bunga papan duka cita, wedding, congratulation, ulang tahun, dan bunga buket. Jika Anda berminat silakan hubungi kami melalui kontak dibawah ini.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Gabung</button>
                <a href="https://wa.me/+6289664356291/?text=Hi, Sekoncoan Florist." type="button" class="btn btn-outline-secondary btn-lg px-4">Tanya kami</a>
            </div>
            </div>
        </div>
        <!-- /centered hero -->

        <!-- Pesanan  -->
        <div class="container marketing border-top">
            <h1 class="display-6 text-center mb-5 mt-5">Pembelian Terbaru</h1>
                <div class="row mb-5" data-masonry='{"percentPosition": true }'>
                    @foreach ($pembelians as $pembelian)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ Storage::url('public/pembelians/').$pembelian->gambar_pembelian }}" alt="gambar_pembelian" width="100%" height="340">

                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
        <!-- /Pesanan  -->
        
        <!-- produk lainnya -->
        <div class="album bg-light">
            <div class="container px-4 py-5" id="featured-3">
                <h2 class="pb-2 border-bottom">Produk Lainnya</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <!-- <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
                        </div> -->
                        <h3>Sekoncoan Printing</h3>
                        <!-- <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> -->
                        <a href="#" class="icon-link d-inline-flex align-items-center">
                        Lihat Selengkapnya
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
                        </a>
                    </div>
                    <div class="feature col">
                        <!-- <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
                        </div> -->
                        <h3>Sekoncoan Merchandise</h3>
                        <!-- <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> -->
                        <a href="#" class="icon-link d-inline-flex align-items-center">
                        Lihat Selengkapnya
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
                        </a>
                    </div>
                    <!-- <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
                        </div>
                        <h2>Featured title</h2>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /produk lainnya -->

        <!-- Testimoni -->
        <div class="container marketing">
            <h1 class="display-6 text-center mb-5 mt-5">Testimoni Pelanggan</h1>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row mt-5 mb-5">
                            @foreach ($testi1 as $testimoni1)
                                <div class="col-lg-4">
                                <img src="{{ asset('img/user.png') }}" alt=""  width="140" height="140">

                                    <h2 class="fw-normal mt-4">{{ $testimoni1->nama_pelanggan }}</h2>
                                    <figure class="text-center">
                                        <blockquote class="blockquote">
                                            <p>{{ $testimoni1->isi_testimoni }}</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            <cite title="Source Title">{{ $testimoni1->asal_pelanggan }}</cite>
                                        </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row mt-5 mb-5">
                            @foreach ($testi2 as $testimoni2)
                                <div class="col-lg-4">
                                    <img src="{{ asset('img/user.png') }}" alt=""  width="140" height="140">

                                    <h2 class="fw-normal mt-4">{{ $testimoni2->nama_pelanggan }}</h2>
                                    <figure class="text-center">
                                        <blockquote class="blockquote">
                                            <p>{{ $testimoni2->isi_testimoni }}</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            <cite title="Source Title">{{ $testimoni2->asal_pelanggan }}</cite>
                                        </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </div>
        <!-- /Testimoni -->

       

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
                            <li class="nav-item mb-2"><a href="https://wa.me/+6289664356291/?text=Hi, Sekoncoan Florist." class="nav-link p-0 text-muted">Tanya kami</a></li>
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
                <p>&copy; 2022 Sekoncoan Florist. | Sekoncoan Group</p>
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
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>
</html>