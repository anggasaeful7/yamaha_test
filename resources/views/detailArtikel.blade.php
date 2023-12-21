<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Artikel</title>
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/detailArtikel.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('style/assets/img/logo-sam.png') }}" type="image/x-icon" />
</head>

<body>
    <!-- Navbar -->
    <div class="nav bg-light navbar-expand-lg navbar-light sticky-top">
        <nav class="navbar mx-auto" style="width: 80%">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="{{ asset('style/assets/img/logo-sam 1.png') }}" height="50" alt="CoolBrand" />
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link">Beranda</a>
                        <a href="/kredit" class="nav-item nav-link" id="nav-active">Proses Kredit</a>
                        <a href="{{ url('https://yamahasentra.com') }}" class="nav-item nav-link">Tentang</a>
                        <a href="/#artikel" class="nav-item nav-link">Artikel</a>
                    </div>
                    <div class="navbar-nav">
                        <a href="https://wa.link/hra4wa" class="nav-item nav-link">
                            <button class="btn btn-danger">Hubungi</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="col col-artikel">
        <h1 class="card-title artikel-title">{{ $artikel->judul }}</h1>
        <h1 class="card-title artikel-subtitle">{{ $artikel->subjudul }}</h1>
        <h1 class="card-title artikel-date">{{ $artikel->created_at }}</h1>
        <div class="card card-artikel">
            <img src="{{ Storage::url($artikel->gambar) }}" class="card-img-top" alt="gambar artikel" id="artikel-1">
            <div class="card-body artikel-body">

                <h1 class="card-text artikel-content">
                    {!! strip_tags($artikel->konten) !!}
                </h1>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <section id="footer" style="background-image: url('{{ asset('style/assets/img/bg-footer.jpg') }}')">
        <div class="row footer-row">
            <div class="col-6">
                <img src="{{ asset('style/assets/img/yamaha-logo.svg') }}" class="img-fluid mx-auto img-cabang"
                    alt="logo" />
            </div>
            <div class="col-6">
                <p class="footer-text">HUBUNGI KAMI</p>
                <p class="footer-subtext">
                    <img src="{{ asset('style/assets/img/icon-place.svg') }}" class="footer-icon" />Jl.
                    Dipati Ukur Kelurahan No.75, Lebakgede, Kecamatan Coblong, Kota
                    Bandung, Jawa Barat 40132
                </p>
                <p class="footer-subtext">
                    <img src="{{ asset('style/assets/img/icon-phone.svg') }}" class="footer-icon" />0896-0192-8008
                </p>
                <p class="footer-subtext">
                    <img src="{{ asset('style/assets/img/icon-mail.svg') }}"
                        class="footer-icon" />yamaha.dipatiukur@gmail.com
                </p>
                <p class="footer-subtext">
                    <img src="{{ asset('style/assets/img/icon-ig.svg') }}" class="footer-icon" />@sentra_anugrah_motor
                </p>
            </div>
        </div>
    </section>
    <!-- End Footer Section -->

    <!-- FAB -->
    <div class="d-flex">
        <h1 class="text-float">Informasi promo dan produk? Chat disini</h1>
        <a href="https://wa.link/qpufw8" target="_blank" class="float">
            <img src="{{ asset('style/assets/img/icon-whatsapp.svg') }}" class="img-float">
        </a>
    </div>
    <!-- End FAB -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
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
</body>

</html>
