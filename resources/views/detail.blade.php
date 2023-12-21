<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Harga</title>
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/detail.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('style/assets/img/logo-sam.png') }}" type="image/x-icon">
</head>

<body>
    <!-- Navbar -->
    <div class="nav bg-light navbar-expand-lg navbar-light sticky-top">
        <nav class="navbar mx-auto" style="width: 80%;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="/style/assets/img/logo-sam 1.png" height="50" alt="CoolBrand">
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
    <div class="banner mt-5 mb-4">
        <div class="d-flex justify-content-center gap-5 mobile">
            <div class="detail-foto">
                <img src="{{ Storage::url($product->thumbnail) }}" alt="prodcut" class="main-image me-5"
                    id="mainImage">
                <div class="image-lite d-flex d-block gap-2 justify-content-between align-content-center">
                    <img src="{{ Storage::url($product->thumbnail) }}" alt="prodcut" class="img-lite active">
                    <img src="{{ Storage::url($product->gambar) }}" alt="prodcut" class="img-lite">
                    <img src="{{ Storage::url($product->gambar2) }}" alt="prodcut" class="img-lite">
                    <img src="{{ Storage::url($product->gambar3) }}" alt="prodcut" class="img-lite">
                </div>
            </div>
            <div class="detail-produk">
                <h1>WR-155 </h1>
                <h3 class="mt-2 mb-4">{{ $product->harga }}</h3>
                <p>Hubungi kami via <b>whaatsap</b> untuk harga Promo dan Harga Terbaik</p>
                <button class="btn btn-success mt-2 mbl" style="background-color: #23E31F;"><i class="bi-whatsapp"></i>
                    Hubungi
                    kami</button>
            </div>
        </div>
    </div>
    <div class="hero">
        <h3 class="fw-bold text-center mt-5">Deskripsi Produk</h2>
            <div class="d-flex justify-content-center">
                <table class="table table-striped table-hover table-responsive mt-3" style="width: 70%;">
                    <thead>
                        <tr>
                            <th scope="col" style="background-color: #F7F7F7;">Spesifikasi</th>
                            <th scope="col" style="background-color: #F7F7F7;">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tipe Mesin</td>
                            <td>{{ $product->tipe_mesin }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah/Posisi Silinder </td>
                            <td>{{ $product->jumlah_silinder }}</td>
                        </tr>
                        <tr>
                            <td>Diameter x Langkah</td>
                            <td>{{ $product->diameter }}</td>
                        </tr>
                        <tr>
                            <td>Perbandingan Kompresi</td>
                            <td>{{ $product->perbandingan_kompresi }}</td>
                        </tr>
                        <tr>
                            <td>Daya Maximum</td>
                            <td>{{ $product->daya_maximum }}</td>
                        </tr>
                        <tr>
                            <td>Torsi Maximum</td>
                            <td>{{ $product->torsi_maximum }}</td>
                        </tr>
                        <tr>
                            <td>Sistem Starter</td>
                            <td>{{ $product->starter }}</td>
                        </tr>
                        <tr>
                            <td>Sistem pelumasan</td>
                            <td>{{ $product->sistem_pelumasan }}</td>
                        </tr>

                        <tr>
                            <td>Kapasitas oli mesin</td>
                            <td>{{ $product->kapasitas_oli_mesin }}</td>
                        </tr>
                        <tr>
                            <td>Sistem bahan bakar</td>
                            <td>{{ $product->sistem_bahan_bakar }}</td>
                        </tr>
                        <tr>
                            <td>Volume Silinder</td>
                            <td>{{ $product->volume_silinder }}</td>
                        </tr>
                        <tr>
                            <td>Tipe Kopling</td>
                            <td>{{ $product->tipe_kopling }}</td>
                        </tr>
                        <tr>
                            <td>Pola Pengoperasian Transmisi</td>
                            <td>{{ $product->pola_transmisi }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>

    <!-- Footer Section -->
    <section id="footer" style="background-image: url('/style/assets/img/bg-footer.jpg');">
        <div class="row footer-row">
            <div class="col-6">
                <img src="style/assets/img/yamaha-logo.svg" class="img-fluid mx-auto img-cabang" alt="logo">
            </div>
            <div class="col-6">
                <p class="footer-text">HUBUNGI KAMI</p>
                <p class="footer-subtext"><img src="style/assets/img/icon-place.svg" class="footer-icon"></img>Jl.
                    Dipati Ukur
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- img -->
    <script>
        const mainImg = document.getElementById('mainImage');
        const smallimg = document.getElementsByClassName('img-lite');

        smallimg[0].onclick = function() {
            mainImg.src = smallimg[0].src

        }
        smallimg[1].onclick = function() {
            mainImg.src = smallimg[1].src
        }
        smallimg[2].onclick = function() {
            mainImg.src = smallimg[2].src
        }
        smallimg[3].onclick = function() {
            mainImg.src = smallimg[3].src
        }
    </script>

</body>

</html>
