<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Lightbox2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <title>Desa Wisata</title>
  <style>
  body.dark-mode {
    background-color: #222 !important;
    color: #f1f1f1 !important;
  }
  .card.dark-mode, .navbar.dark-mode, .modal-content.dark-mode {
    background-color: #333 !important;
    color: #f1f1f1 !important;
  }
  .form-control.dark-mode, .table.dark-mode {
    background-color: #222 !important;
    color: #f1f1f1 !important;
    border-color: #444 !important;
  }
</style>
  
</head>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<body>
  <!-- Navbar -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <a href="img/1.jpg" data-lightbox="gallery" data-title="Gambar 1"></a>
        <img src="img/1.jpg" alt="Gambar 1" />
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide">
        <a href="img/2.jpg" data-lightbox="galleri" data-title="keterangan">
          <img src="img/2.jpg" alt="Gambar 2" />
        </a>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide">
        <img src="img/3.jpg" alt="Gambar 3" />
      </div>
      <div class="swiper-slide">
        <a href="img/4.jpg" data-lightbox="galeri" data-title="Gambar 1"></a>
        <img src="img/4.jpg" alt="Gambar 4" />
      </div>
      <div class="swiper-slide">
        <a href="img/5.jpg" data-lightbox="galeri" data-title="Gambar 1"></a>
        <img src="img/5.jpg" alt="Gambar 5" />
      </div>

      <div class="swiper-slide">
        <img src="img/nagari.jpg" alt="Gambar 3" />
      </div>
      <div class="swiper-slide">
        <img src="img/pacu-jawi.jpg" alt="Gambar 4" />
      </div>
      <div class="swiper-slide">
        <img src="img/kemah.jpg" alt="Gambar 3" />
      </div>
      <div class="swiper-slide">
        <img src="img/puncak-aro.jpg" alt="Gambar 3" />
      </div>
      <div class="swiper-slide">
        <img src="img/tari-piriang.jpg" alt="Gambar 3" />
      </div>
      <div class="swiper-slide">
        <img src="img/7.jpg" alt="Gambar 3" />
      </div>
    </div>
    <!-- Tambah sesuai kebutuhan -->

    <!-- Tombol panah -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <section id="navbar">
    <nav class="navbar navbar-expand-md navbar-dark shadow" style="background-color: #a4b465; ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h3>Desa Wisata Pariangan</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#navbar">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#wisata">Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form-daftar.php">Pemesanan</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="edit.php">Modifikasi Pesanan</a>
            </li> -->
            <li class="nav-item">
    <a class="nav-link" href="login.php">
      <i class="bi bi-person-circle"></i> Login Admin
    </a>
  </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <!-- End Navbar -->
  <!-- About -->
  <section id="about">
    <div class="container-fluid px-2 px-md-5 my-5 fs-8">
      <div class="row align-items-start">
        <!-- Konten -->
        <div class="col-12 col-md-8 mb-4 mb-md-0">
          <h4>Desa Wisata Pariangan Desa Terindah Di Dunia </h4>
          <p class="text-muted">
            <i class="bi bi-pin-map">
              Pariangan, Tanah Datar, Sumatera Barat
            </i>
          </p>

          <hr class="my-4" />

          <!-- Paragraf Awal dengan Shadow -->
          <div id="previewWrapper" class="preview-wrapper">
            <p class="text-muted">

              Desa wisata Nagari Tuo Pariangan adalah sebuah desa indah yang terletak di lereng Gunung Marapi, sebuah
              gunung api aktif yang berada di dataran tinggi Provinsi Sumatera Barat. Berada di ketinggian 800 - 1000
              mdpl, Pariangan
              memiliki topografi daerah perbukitan dan pegunungan dengan udara yang sejuk. Posisi geografis ini juga
              memberikan anugerah alam yang elok dan subur bagi desa wisata Pariangangan dimana sawah berjenjang
              memanjakan mata dari
              lereng Gunung Marapi hingga lembah-lembah yang ada dibawahnya bahkan hingga ke Danau Singkarak.
              <br><br>
              Pariangan adalah sebuah desa yang istimewa. Tambo, tradisi lisan Masyarakat Minangkabau, menyebut
              Pariangan sebagai desa atau nagari tertua tempat nenek moyang dan peradaban mereka bermula. Hal ini
              tertuang dalam pepatah kuno
              “dari mano dating titiak palito, dari telong nan Batali. Dari mano asa nenek moyang kito, dari puncak
              gunuang Marapi.”
              Hingga saat ini, masih ditemukan berbagai bukti peradaban tua Masyarakat Minangkabau di nagari ini seperti
              Batu Lantak Tigo, Kuburan Panjang Datuak Tantejo Gurhano, Sawah Satampang Baniah, Lurah Indak Barayia dan
              masih banyak lagi yang lainnya. <br /><br />
              Kekayaan sejarah dan budaya ini lah yang menjadikan Pariangan tidak hanya indah dipandang mata namun juga
              indah untuk dinikmati dan diselami lebih jauh melalui paket-paket wisata seperti live in experience,
              heritage walk, rice
              fields walk dan lain sebagainya. <br>

            </p>
          </div>

          <!-- Konten Collapse -->
          <div class="collapse slide-content" id="fullDesaContent">
            <p class="text-muted">
              Pariwisata di Nagari Tuo Pariangan mulai berkembang pesat dengan adanya publikasi dari Travel Budget USA
              pada tahun 2012 yang menyebut Pariangan sebagai salah satu desa terindah di dunia. Pada artikel World’s 16
              Most
              Picturesque Village yang ditulis Sandra Ramani dan dipublikasikan pada 23 Februari 2012, Pariangan
              disandingkan dengan Shirakawa-go di Jepang, Eze di Perancis dan Niagara-on-the-lake di Kanada dan
              desa-desa lainnya sebagai 16
              desa terindah di dunia. <br>
              Artikel tersebut kemudian memanacing rasa ingin tahu dan mengundang wisatawan untuk mengenal Pariangan
              lebih dekat dan kemudian ini mendorong akselerasi pembangunan dan pengembangan pariwisata di Nagari
              Tuo Pariangan. <br /><br />
              Desa Wisata Pariangan dapat ditempuh lewat jalur darat dengan kendaraan roda dua maupun empat dari
              kota-kota besar di Sumatera Barat; 90 menit dari Bandara Internasional Minangkabau, 2 jam dari kota
              Padang, 90 menit dari Kota
              Bukittinggi dan 90 menit dari kota Payakumbuh.
            </p>
          </div>


          <!-- Tombol -->
          <div class="text-center mt-3">
            <button class="btn-toggle" data-bs-toggle="collapse" data-bs-target="#fullDesaContent"
              onclick="toggleText(this)" aria-expanded="false">
              Tampilkan Semua
            </button>


          </div>
          <section class="py-5 bg-white">
            <div class="container">
              <h4 class="mb-4">Fasilitas</h4>
              <div class="row">
                <!-- Kolom 1 -->
                <div class="col-md-4">
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Areal Parkir</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Balai Pertemuan</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Cafetaria</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Jungle Tracking</p>
                </div>

                <!-- Kolom 2 -->
                <div class="col-md-4">
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Kamar Mandi Umum</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Kuliner</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Musholla</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Outbound</p>
                </div>

                <!-- Kolom 3 -->
                <div class="col-md-4">
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Selfie Area</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Spot Foto</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Tempat makan</p>
                  <p><i class="bi bi-check2-square text-warning me-2"></i> Wifi Area</p>
                </div>
              </div>
            </div>
          </section>

        </div>


        <div class=" col-12 col-md-4" style="background-color: #f4f3f3;">
          <div class="container my-5">
            <form class="d-flex justify-content-center" role="search">
              <div class="input-group w-200" style="z-index: 0;">
                <input type="search" class="form-control rounded-start shadow-sm" placeholder="Cari destinasi wisata..."
                  aria-label="Search" aria-describedby="search-button" />
                <button class="btn " type="submit" id="search-button" style="background: #a4b465;">
                  <i class="bi bi-search"></i>
                  <!-- Gunakan Bootstrap Icons -->

                </button>

              </div>
              <hr class="my-6" />
            </form>
            <!-- Kolom video YouTube -->
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/pK7H9JbCzqs" title="YouTube video" allowfullscreen> </iframe>
            </div>

            <div class="row mt-5">
              <div class="col">
                <div class=" rounded shadow p-3">
                  <h4 class="mb-3">Lokasi Desa Pariangan</h4>
                  <div style="height: 450px;">
                    <iframe class="w-100 h-100 rounded"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4207183024286!2d100.4564444147581!3d-0.41785993532560733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52f52e3cb9fa9%3A0xf13a05323db089cf!2sPariangan%2C%20Kec.%20Pariangan%2C%20Kabupaten%20Tanah%20Datar%2C%20Sumatera%20Barat!5e0!3m2!1sen!2sid!4v1718888888888!5m2!1sen!2sid"
                      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col">
                <div class="card " style="max-width: 350px; margin: auto;">
                  <!-- Header verifikasi -->
                  <div class="bg-success text-white text-center py-2 rounded-top">
                    <i class="bi bi-check-circle me-2"></i> Terverifikasi
                  </div>

                  <div class="rounded  p-3 qrcode-placeholder">
                    <h4 class="mb-4"> QRCode Desa Wisata Pariangan </h4>
                    <hr class="my-4" />
                    <img src="img/qr.png" alt="qr-code" class="img-fluid mt-3" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- End About -->
  <!-- Wisata -->
  <section id="wisata" class="py-5">
    <div class="container" data-aos-duration="3000" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <!-- Judul -->
      <div class="row mb-4">
        <div class="col text-center">
          <h2>
            <strong>

              Wisata Desa Pariangan
            </strong>
          </h2>
        </div>
        <hr class="my-4" />
      </div>

      <!-- Baris 1 -->
      <div class="row" id="wisataContainer">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 mb-4 wisata-card" data-nama="Pacu Jawi">
          <div class="card shadow h-100">
            <img src="img/pacu-jawi.jpg" class="card-img-top" alt="Pacu Jawi" />
            <div class="card-body">
              <h5 class="card-title">Pacu Jawi</h5>
              <p class="card-text text-muted">Pacu Jawi merupakan atraksi khas Tanah Datar yang menggabungkan tradisi,
                budaya, dan semangat gotong royong masyarakat.</p>
              <a href="form-daftar.php" class="contactButton">
                <!-- From Uiverse.io by d4niz -->

                Pesan Sekarang
                <div class="iconButton">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                      fill="currentColor"></path>
                  </svg>
                </div>



              </a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 mb-4 wisata-card" data-nama="Kemah Tabek Gadang">
          <div class="card shadow h-100">
            <img src="img/kemah.jpg" class="card-img-top" alt="Kemah Tabek Gadang" />
            <div class="card-body">
              <h5 class="card-title">Bumi Perkemahan Tabek Gadang</h5>
              <p class="card-text text-muted">Tempat berkemah yang menyuguhkan panorama Gunung Marapi dan aliran sungai
                jernih yang cocok untuk pecinta alam.</p>
              <a href="form-daftar.php" class="contactButton">
                <!-- From Uiverse.io by d4niz -->

                Pesan Sekarang
                <div class="iconButton">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                      fill="currentColor">
                    </path>
                  </svg>
                </div>



              </a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 mb-4 wisata-card" data-nama="Tari Piriang Nagari Tuo">
          <div class="card shadow h-100">
            <img src="img/tari-piriang.jpg" class="card-img-top" alt="Tari Piriang" />
            <div class="card-body">
              <h5 class="card-title">Tari Piriang Nagari Tuo</h5>
              <p class="card-text text-muted">Tarian tradisional Minangkabau yang dinamis dengan media piring,
                menggambarkan ketangkasan dan budaya yang dijaga erat.</p>
              <a href="form-daftar.php" class="contactButton">
                <!-- From Uiverse.io by d4niz -->

                Pesan Sekarang
                <div class="iconButton">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                      fill="currentColor">
                    </path>
                  </svg>
                </div>



              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Baris 2 -->
      <div class="row">
        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6 mb-4 wisata-card" data-nama="Puncak Aro">
          <div class="card shadow h-100">
            <img src="img/puncak-aro.jpg" class="card-img-top" alt="Puncak Aro" />
            <div class="card-body">
              <h5 class="card-title">Berkemah di Puncak Aro</h5>
              <p class="card-text text-muted">Spot berkemah di perkebunan kopi yang asri, dengan pemandangan puncak
                Gunung Marapi dan udara yang sejuk alami.</p>
              <a href="form-daftar.php" class="contactButton">
                <!-- From Uiverse.io by d4niz -->

                Pesan Sekarang
                <div class="iconButton">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                      fill="currentColor">
                    </path>
                  </svg>
                </div>



              </a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-lg-4 col-md-6 mb-4 wisata-card" data-nama="Air Terjun Bangkaweh">
          <div class="card shadow h-100">
            <img src="img/2.jpg" class="card-img-top" alt="Air Terjun Bangkaweh" />
            <div class="card-body">
              <h5 class="card-title">Trekking Air Terjun Bangkaweh</h5>
              <p class="card-text text-muted">Petualangan menyusuri alam menuju air terjun tersembunyi di Nagari Tuo,
                cocok untuk trekking keluarga dan pecinta alam.</p>
              <a href="form-daftar.php" class="contactButton">
                <!-- From Uiverse.io by d4niz -->

                Pesan Sekarang
                <div class="iconButton">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                      fill="currentColor">
                    </path>
                  </svg>
                </div>



              </a>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-lg-4 col-md-6 mb-4 wisata-card" data-nama="Kuliner Tradisional">
          <div class="card shadow h-100">
            <img src="img/kuliner.jpg" class="card-img-top" alt="Kuliner Nagari Tuo" />
            <div class="card-body">
              <h5 class="card-title">Kuliner Tradisional</h5>
              <p class="card-text text-muted">Nikmati sajian kuliner lokal seperti rendang, lamang tapai, dan teh talua
                yang disajikan langsung oleh warga setempat.</p>
              <a href="form-daftar.php" class="contactButton">
                <!-- From Uiverse.io by d4niz -->

                Pesan Sekarang
                <div class="iconButton">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                      fill="currentColor">
                    </path>
                  </svg>
                </div>



              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Wisata -->

  <!-- Pesan -->

  <section id="pesan" class="jumbotron text-center">
    <div class="container-fluid" style="color: white">
      <button class="cta-button text-center mb-5">
        <h3>Ingin Liburan di Desa Wisata Pariangan?
        </h3>
        <a href="form-daftar.php" class="btn btn-success">Lihat Daftar Paket</a>
      </button>
    </div>
  </section>
  <!-- End Pesan -->


  <!-- End Gallery -->
  <!-- Footer -->
  <footer></footer>
  <!-- End Footer -->
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script>
    document.getElementById("searchInput").addEventListener("input", function () {
      const input = this.value.toLowerCase();
      const cards = document.querySelectorAll(".wisata-card");

      cards.forEach(card => {
        const nama = card.getAttribute("data-nama").toLowerCase();
        if (nama.includes(input)) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  </script>

</body>
<!-- Footer -->
<footer class=" text-white pt-4 pb-2 mt-5" style="background-color: #a4b465;">
  <div class="container text-center text-md-start">
    <div class="row">
      <!-- Kolom 1: Logo / Nama -->
      <div class="col-md-4 mb-3">
        <h5>Desa Wisata Pariangan</h5>
        <p>Menikmati keindahan alam dan budaya Minangkabau.</p>
      </div>

      <!-- Kolom 2: Navigasi -->
      <div class="col-md-4 mb-3">
        <h6>Menu</h6>
        <ul class="list-unstyled">
          <li><a href="index.html" class="text-white text-decoration-none">Beranda</a></li>
          <li><a href="form-daftar.php" class="text-white text-decoration-none">Pemesanan</a></li>
          <li><a href="edit.php" class="text-white text-decoration-none">Modifikasi</a></li>
          <li><a href="#kontak" class="text-white text-decoration-none">Kontak</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Sosial Media -->
      <div class="col-md-4 mb-3">
        <h6>Ikuti Kami</h6>
        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-youtube"></i></a>
        <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>

    <div class="text-center mt-3 border-top pt-2">
      <small>&copy;
        <?= date('Y') ?> Desa Wisata Pariangan. All rights reserved.
      </small>
    </div>
  </div>
</footer>


</html>
<!-- <script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
</script> -->
<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4, // Tampilkan 4 gambar per baris (bisa disesuaikan)
    spaceBetween: 0, // Ini penting! Hapus celah antar slide
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 4,
      },
    },
  });
</script>
<!-- Script Toggle -->
<script>
  function toggleText(btn) {
    const preview = document.getElementById("previewWrapper");
    const full = document.getElementById("fullDesaContent");

    const isShown = full.classList.contains("show");

    // Tunggu animasi collapse selesai
    full.addEventListener('shown.bs.collapse', function () {
      preview.classList.add("no-shadow");
      btn.innerText = "Sembunyikan";
    });

    full.addEventListener('hidden.bs.collapse', function () {
      preview.classList.remove("no-shadow");
      btn.innerText = "Tampilkan Semua";
    });
  }
</script>
<script>
  const toggle = document.getElementById('darkModeToggle');
  toggle.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    document.querySelectorAll('.card, .navbar, .modal-content, .form-control, .table')
      .forEach(el => el.classList.toggle('dark-mode'));
    // Simpan preferensi ke localStorage
    if(document.body.classList.contains('dark-mode')) {
      localStorage.setItem('darkMode', 'on');
    } else {
      localStorage.setItem('darkMode', 'off');
    }
  });
  // Aktifkan dark mode jika sebelumnya sudah dipilih
  if(localStorage.getItem('darkMode') === 'on') {
    document.body.classList.add('dark-mode');
    document.querySelectorAll('.card, .navbar, .modal-content, .form-control, .table')
      .forEach(el => el.classList.add('dark-mode'));
  }
</script>