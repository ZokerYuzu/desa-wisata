<?php
include("koneksi.php");
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Desa Wisata</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<body>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/1.jpg" alt="Gambar 1" /></div>
            <div class="swiper-slide"><img src="img/2.jpg" alt="Gambar 2" /></div>
            <div class="swiper-slide"><img src="img/3.jpg" alt="Gambar 3" /></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt="Gambar 4" /></div>
            <div class="swiper-slide"><img src="img/5.jpg" alt="Gambar 5" /></div>
            <div class="swiper-slide"><img src="img/nagari.jpg" alt="Gambar 6" /></div>
            <div class="swiper-slide"><img src="img/pacu-jawi.jpg" alt="Gambar 7" /></div>
            <div class="swiper-slide"><img src="img/kemah.jpg" alt="Gambar 8" /></div>
            <div class="swiper-slide"><img src="img/puncak-aro.jpg" alt="Gambar 9" /></div>
            <div class="swiper-slide"><img src="img/tari-piriang.jpg" alt="Gambar 10" /></div>
            <div class="swiper-slide"><img src="img/7.jpg" alt="Gambar 11" /></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <section id="navbar">
        <nav class="navbar navbar-expand-md navbar-dark shadow" style="background-color: #a4b465;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h3>Desa Wisata Pariangan</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-center">
                        <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html">Wisata</a></li>
                        <li class="nav-item"><a class="nav-link" href="form-daftar.php">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="edit.php">Modifikasi Pesanan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Form Pemesanan Paket Wisata</h4>
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="namaPemesan" placeholder="Nama Pemesan" required>
                        <label for="namaPemesan">Nama Pemesan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nomorHp" placeholder="Nomor HP/Telp" required>
                        <label for="nomorHp">Nomor HP/Telp</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="tanggalPesan" placeholder="Tanggal Pesan" required>
                        <label for="tanggalPesan">Tanggal Pesan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="waktuPerjalanan"
                            placeholder="Waktu Pelaksanaan Perjalanan">
                        <label for="waktuPerjalanan">Waktu Pelaksanaan Perjalanan</label>
                    </div>

                    <!-- Pelayanan Paket Perjalanan -->
                    <div class="mb-3">
                        <label class="form-label d-block">Pelayanan Paket Perjalanan:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1000000" id="penginapan">
                            <label class="form-check-label" for="penginapan">Penginapan (Rp 1.000.000)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1200000" id="transportasi">
                            <label class="form-check-label" for="transportasi">Transportasi (Rp 1.200.000)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="500000" id="makan">
                            <label class="form-check-label" for="makan">Servis/Makan (Rp 500.000)</label>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="jumlahPeserta" placeholder="Jumlah Peserta"
                            min="1">
                        <label for="jumlahPeserta">Jumlah Peserta</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="hargaPaket" placeholder="Harga Paket Perjalanan"
                            readonly>
                        <label for="hargaPaket">Harga Paket Perjalanan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="jumlahTagihan" placeholder="Jumlah Tagihan"
                            readonly>
                        <label for="jumlahTagihan">Jumlah Tagihan</label>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-success" onclick="hitung()">Hitung</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function hitung() {
            let total = 0;
            const peserta = parseInt(document.getElementById('jumlahPeserta').value || "0");
            if (document.getElementById('penginapan').checked) total += 1000000;
            if (document.getElementById('transportasi').checked) total += 1200000;
            if (document.getElementById('makan').checked) total += 500000;
            document.getElementById('hargaPaket').value = `Rp ${total.toLocaleString()}`;
            document.getElementById('jumlahTagihan').value = `Rp ${(total * peserta).toLocaleString()}`;
        }
    </script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                576: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                992: { slidesPerView: 4 }
            }
        });
    </script>
</body>

</html>