<?php
include("koneksi.php");
$harga_layanan = [];
$resHarga = $conn->query("SELECT * FROM harga_layanan");
while ($row = $resHarga->fetch_assoc()) {
    $harga_layanan[$row['nama']] = $row['harga'];
}
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

    <style>
   .card.no-hover,
.card.no-hover:hover,
.card.no-hover:focus,
.card.no-hover:active {
    box-shadow: none !important;
    border: 1px solid #e0e0e0 !important; /* atau border: none !important; jika ingin tanpa border */
    background: #fff !important;
    transform: none !important;
    transition: none !important;
    
}
    </style>
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
                        <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#wisata">Wisata</a></li>
                        <li class="nav-item"><a class="nav-link active" href="form-daftar.php">Pemesanan</a></li>
                        <li class="nav-item">
    <a class="nav-link" href="login.php">
      <i class="bi bi-person-circle"></i> Login Admin
    </a>
  </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="edit.php">Modifikasi Pesanan</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container  mt-5 mb-5">
        <div class="card no-hover shadow-sm">
            <div class="card-body ">
                <h4 class="card-title mb-4">Form Pemesanan Paket Wisata</h4>
                <?php if ($status == 'sukses'): ?>
                    <div class="alert alert-success">Data berhasil disimpan!</div>
                <?php endif; ?>
                <form action="proses-pendaftaran.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="namaPemesan" name="nama_pemesan" placeholder="Nama Pemesan" required>
                        <label for="namaPemesan">Nama Pemesan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nomorHp" name="nomor_hp" placeholder="Nomor HP/Telp" required>
                        <label for="nomorHp">Nomor HP/Telp</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="tanggalPesan" name="tanggal_pesan" required>
                        <label for="tanggalPesan">Tanggal Pesan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="waktuPerjalanan" name="waktu_perjalanan" min="1" required>
                        <label for="waktuPerjalanan">Waktu Pelaksanaan Perjalanan (dalam hari)</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Pelayanan Paket Perjalanan:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $harga_layanan['penginapan'] ?>" id="penginapan" name="penginapan">
                            <label class="form-check-label" for="penginapan">Penginapan (Rp <?= number_format($harga_layanan['penginapan'],0,',','.') ?>)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $harga_layanan['transportasi'] ?>" id="transportasi" name="transportasi">
                            <label class="form-check-label" for="transportasi">Transportasi (Rp <?= number_format($harga_layanan['transportasi'],0,',','.') ?>)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $harga_layanan['makan'] ?>" id="makan" name="makan">
                            <label class="form-check-label" for="makan">Makan (Rp <?= number_format($harga_layanan['makan'],0,',','.') ?>)</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="jumlahPeserta" name="jumlah_peserta" min="1" required>
                        <label for="jumlahPeserta">Jumlah Peserta</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="hargaPaket" name="harga_paket" readonly>
                        <label for="hargaPaket">Harga Paket Perjalanan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="jumlahTagihan" name="jumlah_tagihan" readonly>
                        <label for="jumlahTagihan">Jumlah Tagihan</label>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-success" onclick="hitung()">Hitung</button>
                        <button type="button" class="btn btn-info" id="btnReviewPesanan">Review</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal Konfirmasi Pesanan -->
    <div class="modal fade" id="modalKonfirmasi" tabindex="-1" aria-labelledby="modalKonfirmasiLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="modalKonfirmasiLabel">Konfirmasi Pesanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <p><strong>Nama Pemesan:</strong> <span id="konf-nama"></span></p>
            <p><strong>Nomor HP:</strong> <span id="konf-hp"></span></p>
            <p><strong>Tanggal Pesan:</strong> <span id="konf-tanggal"></span></p>
            <p><strong>Waktu Perjalanan:</strong> <span id="konf-waktu"></span> hari</p>
            <p><strong>Pelayanan:</strong> <span id="konf-layanan"></span></p>
            <p><strong>Jumlah Peserta:</strong> <span id="konf-peserta"></span></p>
            <p><strong>Harga Paket:</strong> <span id="konf-harga"></span></p>
            <p><strong>Jumlah Tagihan:</strong> <span id="konf-tagihan"></span></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" id="btnKonfirmasiPesanan">Konfirmasi</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Review Pesanan -->
    <div class="modal fade" id="modalReview" tabindex="-1" aria-labelledby="modalReviewLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-info text-white">
            <h5 class="modal-title" id="modalReviewLabel">Review Pesanan Anda</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <p><strong>Nama Pemesan:</strong> <span id="review-nama"></span></p>
            <p><strong>Nomor HP:</strong> <span id="review-hp"></span></p>
            <p><strong>Tanggal Pesan:</strong> <span id="review-tanggal"></span></p>
            <p><strong>Waktu Perjalanan:</strong> <span id="review-waktu"></span> hari</p>
            <p><strong>Pelayanan:</strong> <span id="review-layanan"></span></p>
            <p><strong>Jumlah Peserta:</strong> <span id="review-peserta"></span></p>
            <p><strong>Harga Paket:</strong> <span id="review-harga"></span></p>
            <p><strong>Jumlah Tagihan:</strong> <span id="review-tagihan"></span></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function hitung() {
            let total = 0;
            const peserta = parseInt(document.getElementById('jumlahPeserta').value || "0");
            const hari = parseInt(document.getElementById('waktuPerjalanan').value || "0");
            // Harga dari PHP
            const hargaPenginapan = <?= $harga_layanan['penginapan'] ?>;
            const hargaTransportasi = <?= $harga_layanan['transportasi'] ?>;
            const hargaMakan = <?= $harga_layanan['makan'] ?>;

            if (document.getElementById('penginapan').checked) total += hargaPenginapan;
            if (document.getElementById('transportasi').checked) total += hargaTransportasi;
            if (document.getElementById('makan').checked) total += hargaMakan;

            const hargaPaket = total;
            const jumlahTagihan = hargaPaket * peserta * hari;

            document.getElementById('hargaPaket').value = hargaPaket;
            document.getElementById('jumlahTagihan').value = jumlahTagihan;
        }

        document.querySelector("form").addEventListener("submit", function (e) {
            e.preventDefault(); // Cegah submit langsung

            const nama = document.getElementById('namaPemesan').value.trim();
            const hp = document.getElementById('nomorHp').value.trim();
            const tanggal = document.getElementById('tanggalPesan').value;
            const hari = parseInt(document.getElementById('waktuPerjalanan').value || "0");
            const peserta = parseInt(document.getElementById('jumlahPeserta').value || "0");
            const harga = document.getElementById('hargaPaket').value;
            const tagihan = document.getElementById('jumlahTagihan').value;

            // Validasi form kosong
            if (!nama || !hp || !tanggal || hari <= 0 || peserta <= 0) {
                alert("Mohon lengkapi semua isian form terlebih dahulu!");
                return;
            }

            // Validasi harus memilih setidaknya satu layanan
            if (
                !document.getElementById('penginapan').checked &&
                !document.getElementById('transportasi').checked &&
                !document.getElementById('makan').checked
            ) {
                alert("Silakan pilih minimal satu pelayanan paket perjalanan!");
                return;
            }

            // Ambil layanan
            let layanan = [];
            if (document.getElementById('penginapan').checked) layanan.push('Penginapan');
            if (document.getElementById('transportasi').checked) layanan.push('Transportasi');
            if (document.getElementById('makan').checked) layanan.push('Makan');

            // Isi data ke modal konfirmasi
            document.getElementById('konf-nama').textContent = nama;
            document.getElementById('konf-hp').textContent = hp;
            document.getElementById('konf-tanggal').textContent = tanggal;
            document.getElementById('konf-waktu').textContent = hari;
            document.getElementById('konf-layanan').textContent = layanan.join(', ');
            document.getElementById('konf-peserta').textContent = peserta;
            document.getElementById('konf-harga').textContent = harga;
            document.getElementById('konf-tagihan').textContent = tagihan;

            // Tampilkan modal konfirmasi
            var modalKonfirmasi = new bootstrap.Modal(document.getElementById('modalKonfirmasi'));
            modalKonfirmasi.show();

            // Submit form jika tombol konfirmasi ditekan
            document.getElementById('btnKonfirmasiPesanan').onclick = function() {
                modalKonfirmasi.hide();
                setTimeout(() => e.target.submit(), 300); // submit setelah modal tertutup
            };
        });

        document.getElementById('btnReviewPesanan').onclick = function() {
            // Ambil data dari form
            const nama = document.getElementById('namaPemesan').value.trim();
            const hp = document.getElementById('nomorHp').value.trim();
            const tanggal = document.getElementById('tanggalPesan').value;
            const hari = document.getElementById('waktuPerjalanan').value;
            const peserta = document.getElementById('jumlahPeserta').value;
            const harga = document.getElementById('hargaPaket').value;
            const tagihan = document.getElementById('jumlahTagihan').value;

            // Layanan
            let layanan = [];
            if (document.getElementById('penginapan').checked) layanan.push('Penginapan');
            if (document.getElementById('transportasi').checked) layanan.push('Transportasi');
            if (document.getElementById('makan').checked) layanan.push('Makan');

            // Isi data ke modal review
            document.getElementById('review-nama').textContent = nama;
            document.getElementById('review-hp').textContent = hp;
            document.getElementById('review-tanggal').textContent = tanggal;
            document.getElementById('review-waktu').textContent = hari;
            document.getElementById('review-layanan').textContent = layanan.join(', ');
            document.getElementById('review-peserta').textContent = peserta;
            document.getElementById('review-harga').textContent = harga;
            document.getElementById('review-tagihan').textContent = tagihan;

            // Tampilkan modal review
            var modal = new bootstrap.Modal(document.getElementById('modalReview'));
            modal.show();
        };
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