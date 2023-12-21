<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/katalogPusat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="style/assets/img/logo-sam.png" type="image/x-icon">
</head>

<body>

    <!-- Navbar -->
    <div class="nav bg-light navbar-expand-lg navbar-light sticky-top">
        <nav class="navbar mx-auto" style="width: 80%;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="/style/assets/img/logo-sam 1.png" height="28" alt="CoolBrand">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <div class="navbar-nav ">
                        <a href="/" class="nav-item nav-link">Beranda</a>
                        <a href="/kredit" class="nav-item nav-link">Proses Kredit</a>
                        <a href="/company" class="nav-item nav-link">Tentang</a>
                        <a href="/detail_harga" class="nav-item nav-link" id="nav-active">Daftar Harga</a>
                    </div>
                    <div class="navbar-nav">
                        <a href="https%3A%2F%2Fwa.link%2Fysuga1" class="nav-item nav-link">
                            <Button class="btn btn-danger">
                                Hubungi
                            </Button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->


    <!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item active">
                    <img src="{{ Storage::url($banner->content) }}" class="d-block w-100 img-fluid" id="carousel-1"
                        alt="{{ $banner->title }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- Section Hero -->
    <section id="section-hero reveal">
        <div class="row row-hero">
            <div class="col-3 hero-card-1">
                <img src="/style/assets/img/building-icon.svg" class="img-fluid img-hero">
                <p class="text-hero">Dealer Kami</p>
                <p class="subtext-hero">Sentra Anugrah Motor</p>
            </div>
            <div class="col-3 hero-card-2">
                <img src="/style/assets/img/person-icon.svg" class="img-fluid img-hero">
                <p class="text-hero">Sales Kami</p>
                <p class="subtext-hero">John Doe</p>
            </div>
            <div class="col-3 hero-card-1">
                <img src="/style/assets/img/dollar-icon.svg" class="img-fluid img-hero">
                <p class="text-hero">Harga Terbaik</p>
                <p class="subtext-hero">Harga Paling Bersaing</p>
            </div>
            <div class="col-3 hero-card-2">
                <img src="/style/assets/img/disc-icon.svg" class="img-fluid img-hero">
                <p class="text-hero">Promo Yamaha</p>
                <p class="subtext-hero">Terbaik dan Termurah</p>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Section Promo -->
    <section id="section-promo reveal">
        <p class="promo-head-text">Promo 2023</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-3 row-promo reveal">
            {{-- <div class="col">
                <div class="card">
                    <img src="/style/assets/img/promo-2.jpg" class="card-img-top" alt="gambar promo" id="promo-1">
                    <div class="card-body promo-body">
                        <h5 class="card-title promo-text">Promo R15</h5>
                        <p class="card-text promo-subtext">
                            Disini diisi oleh keterangan promo.
                        </p>
                        <button class="btn btn-danger">Kontak</button>
                    </div>
                </div>
            </div> --}}
            @foreach ($promos as $promo)
                <div class="col">
                    <div class="card">
                        <img src="{{ Storage::url($promo->thumbnail) }}" class="card-img-top" id="promo-2"
                            alt="{{ $promo->title }}">
                        <div class="card-body promo-body">
                            <h5 class="card-title promo-text">{{ $promo->title }}</h5>
                            <p class="card-text promo-subtext">
                                {!! strip_tags($promo->keterangan) !!}
                            </p>
                            <button class="btn btn-danger">Kontak</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Promo -->

    <!-- Section Produk -->
    <section id="section-produk reveal">
        <p class="produk-head-text">Produk Yamaha 2023</p>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 row-produk reveal">

            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <a href="/detail_produk/{{ $product->id }}">
                            <img src="{{ Storage::url($product->thumbnail) }}" class="card-img-top"
                                alt="{{ $product->nama }}">
                        </a>
                        <div class="card-body promo-body">
                            <h5 class="card-title produk-text">{{ $product->tipe }}</h5>
                            <p class="card-text produk-subtext">
                                {{ $product->nama }}
                            </p>
                            <p class="card-text produk-harga">
                                {{ $product->harga }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-outline-danger">Kontak</button>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col">
                <div class="card h-100">
                    <img src="/style/assets/img/aerox-abs.png" class="card-img-top" alt="gambar produk">
                    <div class="card-body promo-body">
                        <h5 class="card-title produk-text">MAXI</h5>
                        <p class="card-text produk-subtext">
                            Aerox ABS Connected
                        </p>
                        <p class="card-text produk-harga">
                            Rp. 31.900.000
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger">Kontak</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/style/assets/img/vixion.png" class="card-img-top" alt="gambar produk">
                    <div class="card-body promo-body">
                        <h5 class="card-title produk-text">NAKED</h5>
                        <p class="card-text produk-subtext">
                            VIXION
                        </p>
                        <p class="card-text produk-harga">
                            Rp. 32.500.000
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger">Kontak</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/style/assets/img/r15-vva.png" class="card-img-top" alt="gambar produk">
                    <div class="card-body promo-body">
                        <h5 class="card-title produk-text">SPORT</h5>
                        <p class="card-text produk-subtext">
                            R15 VVA
                        </p>
                        <p class="card-text produk-harga">
                            Rp. 34.900.000
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger">Kontak</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/style/assets/img/mio-z.png" class="card-img-top" alt="gambar produk">
                    <div class="card-body promo-body">
                        <h5 class="card-title produk-text">MATIC</h5>
                        <p class="card-text produk-subtext">
                            Mio Z
                        </p>
                        <p class="card-text produk-harga">
                            Rp. 22.000.000
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger">Kontak</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/style/assets/img/fazzio.png" class="card-img-top" alt="gambar produk">
                    <div class="card-body promo-body">
                        <h5 class="card-title produk-text">MATIC</h5>
                        <p class="card-text produk-subtext">
                            Fazzio Neo Hybrid Connected
                        </p>
                        <p class="card-text produk-harga">
                            Rp. 23.300.000
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger">Kontak</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/style/assets/img/gear-standar.png" class="card-img-top" alt="gambar produk">
                    <div class="card-body promo-body">
                        <h5 class="card-title produk-text">MATIC</h5>
                        <p class="card-text produk-subtext">
                            Gear Standar
                        </p>
                        <p class="card-text produk-harga">
                            Rp. 22.800.000
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger">Kontak</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/style/assets/img/wr-155.png" class="card-img-top" alt="gambar produk">
                    <div class="card-body promo-body">
                        <h5 class="card-title produk-text">SPORT</h5>
                        <p class="card-text produk-subtext">
                            WR 155 R
                        </p>
                        <p class="card-text produk-harga">
                            Rp. 32.500.000
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger">Kontak</button>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- End Produk -->

    <!-- Section cara beli -->
    <section id="section-hero reveal">
        <div class="row row-hero">
            <div class="col-3 hero-card-1">
                <img src="/style/assets/img/icon-1.svg" class="img-fluid img-hero">
                <p class="text-hero">Pilih Tipe Motor</p>
                <p class="subtext-hero">Pilih Motor Yamaha yang
                    Anda Inginkan</p>
            </div>
            <div class="col-3 hero-card-1">
                <img src="/style/assets/img/icon-2.svg" class="img-fluid img-hero">
                <p class="text-hero">Hubungi Sales</p>
                <p class="subtext-hero">Hubungi Kami melalui telepon atau
                    chat Whatsapp sales kami</p>
            </div>
            <div class="col-3 hero-card-1">
                <img src="/style/assets/img/icon-3.svg" class="img-fluid img-hero">
                <p class="text-hero">Pembayaran</p>
                <p class="subtext-hero">Lakukan pembayaran setelah memilih
                    unit dan sudah menghubungi sales</p>
            </div>
            <div class="col-3 hero-card-1">
                <img src="/style/assets/img/icon-4.svg" class="img-fluid img-hero">
                <p class="text-hero">Pengantaran Unit</p>
                <p class="subtext-hero">Unit Motor diantar ke tempat
                    tinggal Anda</p>
            </div>
        </div>
    </section>
    <!-- End cara beli -->
    <!-- Section Layanan Yamaha -->
    <div class="row row-layanan reveal">
        <div class="col-6">
            <img src="style/assets/img/yamaha-logo.svg" class="img-fluid mx-auto" alt="logo">
        </div>
        <div class="col-6">
            <img src="style/assets/img/icon-rating.svg" class="img-fluid mx-auto img-rating" alt="logo">
            <p class="text-layanan">Layanan Prioritas dan Kemudahan dalam proses pemesanan motor YAMAHA anda di dealer
                kami.</p>
        </div>
    </div>
    <!-- End Layanan Yamaha -->
    <!-- Footer Section -->
    <section id="footer" style="background-image: url('/style/assets/img/bg-footer.jpg');">
        <div class="row footer-row">
            <div class="col-6">
                <img src="style/assets/img/yamaha-logo.svg" class="img-fluid mx-auto img-cabang" alt="logo">
            </div>
            <div class="col-6">
                <p class="footer-text">HUBUNGI KAMI</p>
                <p class="footer-subtext"><img src="style/assets/img/icon-place.svg" class="footer-icon"></img>Jl.
                    Dipati
                    Ukur
                    Kelurahan No.75, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</p>
                <p class="footer-subtext"><img src="style/assets/img/icon-phone.svg"
                        class="footer-icon"></img>0896-0192-8008
                </p>
                <p class="footer-subtext"><img src="style/assets/img/icon-mail.svg"
                        class="footer-icon"></img>yamaha.dipatiukur@gmail.com</p>
                <p class="footer-subtext"><img src="style/assets/img/icon-ig.svg"
                        class="footer-icon"></img>@sentra_anugrah_motor</p>
            </div>
        </div>
    </section>
    <!-- End Footer Section -->

    <!-- FAB -->
    <a href="https://instagram.com/" target="_blank" class="float">
        <img src="/style/assets/img/icon-whatsapp.svg" class="img-float">
    </a>
    <!-- End FAB -->

    <!-- Smooth Scrolling -->
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>
    <!-- End Smooth -->

</body>
<script src="style/js/bootstrap.min.js"></script>

</html>
