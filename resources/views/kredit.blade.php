<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Proses Kredit</title>
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/kredit.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" href="style/assets/img/logo-sam.png" type="image/x-icon" />
</head>

<body>
    <!-- Navbar -->
    <div class="nav bg-light navbar-expand-lg navbar-light sticky-top">
        <nav class="navbar mx-auto" style="width: 80%">
            <div class="container-fluid">
                <a href="katalogPusat.html" class="navbar-brand">
                    <img src="style/assets/img/logo-sam 1.png" height="50" alt="CoolBrand" />
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
                        <a href="#" class="nav-item nav-link">
                            <button class="btn btn-danger">Hubungi</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->
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

    <div class="main-content justify-content-center mt-5 reveal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h5 class="fw-bold syarat awal">
                        Berikut adalah syarat syarat pengajuan kredit Motor Yamaha melalui kami.
                    </h5>
                    <h5 class="mt-3 syarat fw-bold">
                        Syarat pengajuan kredit perorangan adalah:
                    </h5>
                    <ul class="syarat">
                        <li>Fotocopy KTP pemohon & suami / istri / penjamin</li>
                        <li>
                            Fotocopy kartu keluarga (bisa digantikan dengan surat nikah atau akte
                            kelahiran)
                        </li>
                        <li>Data lain (hanya jika diperlukan)</li>
                    </ul>
                    <h5 class="mt-3 fw-bold syarat">Kredit Perusahaan</h5>
                    <div class="col-12">
                        <ul class="syarat">
                            <li>Fotocopy akte pendirian & perubahannya</li>
                            <li>Fotocopy pengesahan kehakiman</li>
                            <li>Fotocopy SIUP, NPWP, SITU / Domisili, TDP</li>
                            <li>Fotocopy Rek. Koran 3 bulan terakhir</li>
                            <li>Fotocopy KTP direksi & komisaris</li>
                        </ul>
                    </div>

                    <h5 class="mt-4 fw-bold syarat">
                        Berikut adalah proses kredit Motor Yamaha melalui kami:
                    </h5>
                    <ol class="syarat">
                        <li>
                            Anda menghubungi sales kami atau sales kami menghubungi anda melalui
                            nomor telp yang anda berikan.
                        </li>
                        <li>
                            Kami akan mengkonfirmasi motor pilihan anda, DP dan angsuran yang anda
                            mau.
                        </li>
                        <li>
                            Kami akan mengkonfirmasi waktu dan tempat untuk pelaksanaan survey
                            dari pihak leasing.
                        </li>
                        <li>
                            Surveyor kredit dari pihak leasing akan mendatangi anda untuk proses
                            survey.
                        </li>
                        <li>
                            Pada saat anda disurvey, anda akan mengisi berkas kredit. Di sini juga
                            adalah kesempatan anda bertanya cara pembayaran angsuran. Tidak ada
                            pembayaran apapun saat survey.
                        </li>
                        <li>
                            Surveyor akan memberi kami hasil survey dalam jangka waktu 1-2 hari
                            setelah survey.
                        </li>
                        <li>
                            Pembayaran Dp / Uang muka dilakukan pada saat terima motor dirumah.
                        </li>
                    </ol>

                    <button class="btn btn-danger fw-bold mt-4 ms-2 sales mb-4">
                        Hubungi Sales
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!-- Footer -->
    <!-- Footer Section -->
    <section id="footer" style="background-image: url('style/assets/img/bg-footer.jpg')">
        <div class="row footer-row">
            <div class="col-6">
                <img src="style/assets/img/yamaha-logo.svg" class="img-fluid mx-auto img-cabang" alt="logo" />
            </div>
            <div class="col-6">
                <p class="footer-text">HUBUNGI KAMI</p>
                <p class="footer-subtext">
                    <img src="style/assets/img/icon-place.svg" class="footer-icon" />Jl.
                    Dipati Ukur Kelurahan No.75, Lebakgede, Kecamatan Coblong, Kota
                    Bandung, Jawa Barat 40132
                </p>
                <p class="footer-subtext">
                    <img src="style/assets/img/icon-phone.svg" class="footer-icon" />0896-0192-8008
                </p>
                <p class="footer-subtext">
                    <img src="style/assets/img/icon-mail.svg" class="footer-icon" />yamaha.dipatiukur@gmail.com
                </p>
                <p class="footer-subtext">
                    <img src="style/assets/img/icon-ig.svg" class="footer-icon" />@sentra_anugrah_motor
                </p>
            </div>
        </div>
    </section>
    <!-- End Footer Section -->

    <!-- FAB -->
    <a href="https://instagram.com/" target="_blank" class="float">
        <img src="style/assets/img/icon-whatsapp.svg" class="img-float" />
    </a>
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
