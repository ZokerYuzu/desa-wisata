<?php
include("koneksi.php");
$status = isset($_GET['status']) ? $_GET['status'] : '';
$no = 1;
$ambildata = $conn->query("SELECT * FROM pemesanan_paket");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- REMOVED: lightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Desa Wisata</title>

    <style>
        html, body {
          width: 100%;
          height: 100%;
          overflow-x: hidden !important;
        }
        
        /* Fix modal getaran/bergetar */
        body.modal-open {
          padding-right: 0 !important;
          overflow: hidden !important;
        }
        
        /* Mencegah layout shift */
        .modal {
          padding-right: 0 !important;
        }
        
        .modal-backdrop {
          position: fixed !important;
        }
        
        /* Stabilkan scrollbar */
        html {
          scrollbar-gutter: stable;
        }
        
        /* Smooth modal transition */
        .modal.fade .modal-dialog {
          transition: transform 0.2s ease-out;
          transform: translateY(-25px);
        }
        
        .modal.show .modal-dialog {
          transform: translateY(0);
        }

        body, .card, .table, .modal-content, .form-control, .btn {
          font-family: 'Poppins', Arial, Helvetica, sans-serif !important;
        }
        .card.no-hover,
.card.no-hover:hover,
.card.no-hover:focus,
.card.no-hover:active {
    /* box-shadow: none !important; */
    /* border: 1px solid #e0e0e0 !important; atau border: none !important; jika ingin tanpa border */
    background: #fff !important;
    transform: none !important;
    transition: none !important;
   
}
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- REMOVED: lightbox.js script -->

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
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Wisata</a></li>
                        <li class="nav-item"><a class="nav-link" href="form-daftar.php">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link active" href="edit.php">Modifikasi Pesanan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'formulir.php' ? ' active' : '' ?>" href="formulir.php">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'form-daftar.php' ? ' active' : '' ?>" href="form-daftar.php">Data Pemesanan</a>
        </li>
      </ul>
    </div>

<!-- TABEL DATA PEMESANAN -->
<div class="container my-5">
  <div class="card no-hover shadow-sm">
    <div class="card-header text-white" style="background-color: #a4b465;">
      <h4 class="mb-0">Data Pemesanan Paket Wisata</h4>
    </div>
    <div class="card-body">
      <?php if ($status == 'berhasil_edit'): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          ✅ Data berhasil diperbarui!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php elseif ($status == 'berhasil_hapus'): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          🗑️ Data berhasil dihapus.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="table-responsive">
        <table class="table table-bordered  align-middle">
          <thead class="table text-center" style="background-color: #a4b465; color: white;">
            <tr>
              <th>No</th>
              <th>Nama Pemesan</th>
              <th>Nomor HP</th>
              <th>Tanggal Pesan</th>
              <th>Waktu Perjalanan</th>
              <th>Pelayanan</th>
              <th>Jumlah Peserta</th>
              <th>Harga Paket</th>
              <th>Jumlah Tagihan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php while ($data = $ambildata->fetch_assoc()): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= htmlspecialchars($data['nama_pemesan']) ?></td>
              <td><?= htmlspecialchars($data['nomor_hp']) ?></td>
              <td><?= htmlspecialchars($data['tanggal_pesan']) ?></td>
              <td><?= htmlspecialchars($data['waktu_perjalanan']) ?></td>
              <td>
                <?= $data['penginapan'] ? 'Penginapan<br>' : '' ?>
                <?= $data['transportasi'] ? 'Transportasi<br>' : '' ?>
                <?= $data['makan'] ? 'Makan' : '' ?>
              </td>
              <td><?= $data['jumlah_peserta'] ?></td>
              <td>Rp <?= number_format($data['harga_paket'], 0, ',', '.') ?></td>
              <td>Rp <?= number_format($data['jumlah_tagihan'], 0, ',', '.') ?></td>
              <td class="text-center">
                <button 
                  type="button"
                  class="btn btn-sm btn-warning text-white"
                  data-bs-toggle="modal"
                  data-bs-target="#modalEdit"
                  data-id="<?= $data['id'] ?>"
                  data-nama="<?= htmlspecialchars($data['nama_pemesan']) ?>"
                  data-hp="<?= htmlspecialchars($data['nomor_hp']) ?>"
                  data-tanggal="<?= $data['tanggal_pesan'] ?>"
                  data-waktu="<?= $data['waktu_perjalanan'] ?>"
                  data-jumlah="<?= $data['jumlah_peserta'] ?>"
                  data-harga="<?= $data['harga_paket'] ?>"
                  data-tagihan="<?= $data['jumlah_tagihan'] ?>"
                  data-layanan="<?= 
                    trim(
                      ($data['penginapan'] ? 'penginapan,' : '') .
                      ($data['transportasi'] ? 'transportasi,' : '') .
                      ($data['makan'] ? 'makan,' : ''),
                      ','
                    )
                  ?>"
                >Edit</button>
                <button 
                  type="button"
                  class="btn btn-sm btn-danger btn-hapus"
                  data-bs-toggle="modal"
                  data-bs-target="#modalHapus"
                  data-id="<?= $data['id'] ?>"
                >Hapus</button>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="proses-edit.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditLabel">Edit Pemesanan Paket Wisata</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="edit-id">
          <div class="mb-3">
            <label for="edit-nama" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" name="nama_pemesan" id="edit-nama" required>
          </div>
          <div class="mb-3">
            <label for="edit-hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" name="nomor_hp" id="edit-hp" required>
          </div>
          <div class="mb-3">
            <label for="edit-tanggal" class="form-label">Tanggal Pesan</label>
            <input type="date" class="form-control" name="tanggal_pesan" id="edit-tanggal" required>
          </div>
          <div class="mb-3">
            <label for="edit-waktu" class="form-label">Waktu Perjalanan</label>
            <input type="number" class="form-control" name="waktu_perjalanan" id="edit-waktu" min="1">
          </div>
          <div class="mb-3">
            <label class="form-label d-block">Pelayanan:</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="penginapan" value="1" id="edit-layanan-penginapan">
              <label class="form-check-label" for="edit-layanan-penginapan">Penginapan</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="transportasi" value="1" id="edit-layanan-transportasi">
              <label class="form-check-label" for="edit-layanan-transportasi">Transportasi</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="makan" value="1" id="edit-layanan-makan">
              <label class="form-check-label" for="edit-layanan-makan">Makan</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="edit-jumlah" class="form-label">Jumlah Peserta</label>
            <input type="number" class="form-control" name="jumlah_peserta" id="edit-jumlah" required>
          </div>
          <div class="mb-3">
            <label for="edit-harga" class="form-label">Harga Paket</label>
            <input type="text" class="form-control" name="harga_paket" id="edit-harga" readonly>
          </div>
          <div class="mb-3">
            <label for="edit-tagihan" class="form-label">Jumlah Tagihan</label>
            <input type="text" class="form-control" name="jumlah_tagihan" id="edit-tagihan" readonly>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="GET" action="hapus.php">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus pemesanan ini? Tindakan ini tidak dapat dibatalkan.
          <input type="hidden" name="id" id="hapus-id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Card Edit Harga Layanan Paket -->
<div class="container mb-4">
  <div class="card b shadow-sm no-hover">
    <div class="card-header  text-white" style="background-color: #a4b465;">
      <strong>Edit Harga Layanan Paket</strong>
    </div>
    <div class="card-body">
      <?php
      // Proses update harga
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['update_harga'])) {
          $id = intval($_POST['id']);
          $harga_baru = intval($_POST['harga']);
          $conn->query("UPDATE harga_layanan SET harga=$harga_baru WHERE id=$id");
          echo '<div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                  Harga layanan berhasil diupdate!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
        if (isset($_POST['hapus_harga'])) {
          $id = intval($_POST['id']);
          $conn->query("DELETE FROM harga_layanan WHERE id=$id");
          echo '<div class="alert alert-warning alert-dismissible fade show mb-2" role="alert">
                  Layanan berhasil dihapus!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
        // Simpan semua harga sekaligus
        if (isset($_POST['simpan_semua'])) {
          if (isset($_POST['harga_all']) && is_array($_POST['harga_all'])) {
            foreach ($_POST['harga_all'] as $id => $harga) {
              $id = intval($id);
              $harga = intval($harga);
              $conn->query("UPDATE harga_layanan SET harga=$harga WHERE id=$id");
            }
            echo '<div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                    Semua harga layanan berhasil disimpan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
          }
        }
      }
      // Ambil ulang data harga layanan
      $resHarga = $conn->query("SELECT * FROM harga_layanan");
      ?>
      <form method="POST">
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table text-center" style="background-color: #a4b465; color: white;">
            <tr>
              <th>Layanan</th>
              <th>Harga Lama</th>
              <th>Harga Baru</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $resHarga->fetch_assoc()): ?>
            <tr>
                <td>
                  <?= htmlspecialchars(ucfirst($row['nama'])) ?>
                  <input type="hidden" name="id_single" value="<?= $row['id'] ?>">
                </td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                <td>
                  <input type="number" class="form-control" name="harga_all[<?= $row['id'] ?>]" value="<?= $row['harga'] ?>" min="0" required>
                </td>
                <td>
                  <button type="submit" name="update_harga" value="1" class="btn  btn-success btn-sm "  formaction="" formmethod="post" onclick="this.form.action='';">Simpan</button>
                  <!-- <button type="submit" name="hapus_harga" value="1" class="btn btn-danger btn-sm" formaction="" formmethod="post" onclick="return confirm('Hapus layanan ini?');this.form.action='';">Hapus</button> -->
                </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      <div class="mt-3 text-end">
        <button type="submit" name="simpan_semua" class="btn btn-primary">Simpan Semua</button>
      </div>
      </form>
      <!-- <small class="text-muted">Harga yang diubah akan langsung tersimpan ke database dan digunakan untuk semua perhitungan.<br>
      Jika layanan dihapus, maka tidak bisa dipilih pada form pemesanan.</small>

       form Tambah Layanan -->
      <!-- <hr>
      <h6 class="mb-3">Tambah Layanan Baru</h6>
      <form method="POST" class="row g-2 align-items-end">
        <div class="col-md-5">
          <label for="nama_layanan" class="form-label">Nama Layanan</label>
          <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" placeholder="Contoh: laundry" required>
        </div>
        <div class="col-md-4">
          <label for="harga_layanan" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga_layanan" name="harga_layanan" min="1" required>
        </div>
        <div class="col-md-3">
          <button type="submit" name="tambah_layanan" class="btn btn-success w-100">Tambah Layanan</button>
        </div>
      </form>
      <small class="text-muted">Layanan baru akan langsung muncul di daftar dan bisa dipilih pada form pemesanan.</small>
      
    </div>
  </div> -->
  
</div>

<!-- Load Bootstrap JS (includes jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script untuk mencegah getaran modal -->
<script>
  // Prevent modal body shifting/getaran
  document.addEventListener('DOMContentLoaded', function() {
    const modals = document.querySelectorAll('.modal');
    
    modals.forEach(modal => {
      modal.addEventListener('show.bs.modal', function() {
        // Lock body scroll dan cegah getaran
        document.body.style.overflow = 'hidden';
        document.body.style.paddingRight = '0px';
      });
      
      modal.addEventListener('hidden.bs.modal', function() {
        // Restore body scroll
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
      });
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modalEdit = document.getElementById('modalEdit');
    modalEdit.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      document.getElementById('edit-id').value = button.getAttribute('data-id');
      document.getElementById('edit-nama').value = button.getAttribute('data-nama');
      document.getElementById('edit-hp').value = button.getAttribute('data-hp');
      document.getElementById('edit-tanggal').value = button.getAttribute('data-tanggal');
      document.getElementById('edit-waktu').value = button.getAttribute('data-waktu');
      document.getElementById('edit-jumlah').value = button.getAttribute('data-jumlah');
      document.getElementById('edit-harga').value = button.getAttribute('data-harga');
      document.getElementById('edit-tagihan').value = button.getAttribute('data-tagihan');

      // layanan (checkbox)
      const layanan = button.getAttribute('data-layanan').split(',');
      ['penginapan', 'transportasi', 'makan'].forEach(item => {
        document.getElementById('edit-layanan-' + item).checked = layanan.includes(item);
      });
    });
  });
</script>

<script>
  // Saat modal hapus ditampilkan, isi nilai ID ke form
  document.addEventListener('DOMContentLoaded', function () {
    var hapusButtons = document.querySelectorAll('.btn-hapus');
    hapusButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        var id = this.getAttribute('data-id');
        document.getElementById('hapus-id').value = id;
      });
    });
  });
</script>

<script>
  // Simpan harga ke localStorage dan update perhitungan
  document.getElementById('btnSimpanHarga').onclick = function() {
    localStorage.setItem('hargaPenginapan', document.getElementById('hargaPenginapan').value);
    localStorage.setItem('hargaTransportasi', document.getElementById('hargaTransportasi').value);
    localStorage.setItem('hargaMakan', document.getElementById('hargaMakan').value);
    alert('Harga layanan berhasil disimpan!');
  };

  // Saat halaman dimuat, ambil harga dari localStorage jika ada
  document.addEventListener('DOMContentLoaded', function() {
    if(localStorage.getItem('hargaPenginapan')) document.getElementById('hargaPenginapan').value = localStorage.getItem('hargaPenginapan');
    if(localStorage.getItem('hargaTransportasi')) document.getElementById('hargaTransportasi').value = localStorage.getItem('hargaTransportasi');
    if(localStorage.getItem('hargaMakan')) document.getElementById('hargaMakan').value = localStorage.getItem('hargaMakan');
  });

  // Fungsi untuk mengambil harga layanan dari localStorage atau default
  function getHargaLayanan() {
    return {
      penginapan: parseInt(document.getElementById('hargaPenginapan').value || 0),
      transportasi: parseInt(document.getElementById('hargaTransportasi').value || 0),
      makan: parseInt(document.getElementById('hargaMakan').value || 0)
    };
  }

  // Update fungsi hitung() agar pakai harga dari card
  function hitung() {
    let total = 0;
    const harga = getHargaLayanan();
    const peserta = parseInt(document.getElementById('jumlahPeserta').value || "0");
    if (document.getElementById('penginapan').checked) total += harga.penginapan;
    if (document.getElementById('transportasi').checked) total += harga.transportasi;
    if (document.getElementById('makan').checked) total += harga.makan;
    document.getElementById('hargaPaket').value = `Rp ${total.toLocaleString()}`;
    document.getElementById('jumlahTagihan').value = `Rp ${(total * peserta).toLocaleString()}`;
  }

  // Jika ada form edit, update juga hitungEdit()
  if (typeof document.getElementById('edit-harga') !== 'undefined') {
    function hitungEdit() {
      let total = 0;
      const harga = getHargaLayanan();
      if (document.getElementById('edit-layanan-penginapan').checked) total += harga.penginapan;
      if (document.getElementById('edit-layanan-transportasi').checked) total += harga.transportasi;
      if (document.getElementById('edit-layanan-makan').checked) total += harga.makan;
      const peserta = parseInt(document.getElementById('edit-jumlah').value || "0");
      const hari = parseInt(document.getElementById('edit-waktu').value || "0");
      document.getElementById('edit-harga').value = total;
      document.getElementById('edit-tagihan').value = total * peserta * hari;
    }
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