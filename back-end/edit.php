<?php
include("koneksi.php");

// Cek apakah ada parameter ID
if (!isset($_GET['id'])) {
    header('Location: form-data.php');
    exit();
}

$id = $_GET['id'];

// Ambil data berdasarkan ID
$sql = "SELECT * FROM pemesanan_paket WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id); // i = integer
$stmt->execute();
$result = $stmt->get_result();
$siswa = $result->fetch_assoc();

// Jika data tidak ditemukan
if (!$siswa) {
    die("Data tidak ditemukan...");
}
?>

<?php
include("koneksi.php");

// Cek apakah ada parameter ID
if (!isset($_GET['id'])) {
    header('Location: form-data.php');
    exit();
}

$id = $_GET['id'];

// Ambil data berdasarkan ID
$sql = "SELECT * FROM pemesanan_paket WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$pemesanan = $result->fetch_assoc();

if (!$pemesanan) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pemesanan</title>
</head>
<body>
    <h3>Edit Pemesanan Paket Wisata</h3>

    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $pemesanan['id'] ?>">

        <p>
            <label>Nama Pemesan: </label>
            <input type="text" name="nama_pemesan" value="<?= htmlspecialchars($pemesanan['nama_pemesan']) ?>" required />
        </p>
        <p>
            <label>Nomor HP: </label>
            <input type="text" name="nomor_hp" value="<?= htmlspecialchars($pemesanan['nomor_hp']) ?>" required />
        </p>
        <p>
            <label>Tanggal Pesan: </label>
            <input type="date" name="tanggal_pesan" value="<?= $pemesanan['tanggal_pesan'] ?>" required />
        </p>
        <p>
            <label>Waktu Perjalanan (hari): </label>
            <input type="number" name="waktu_perjalanan" value="<?= $pemesanan['waktu_perjalanan'] ?>" min="1" required />
        </p>
        <p>
            <label>Layanan: </label><br>
            <label><input type="checkbox" name="penginapan" value="1" <?= $pemesanan['penginapan'] ? 'checked' : '' ?>> Penginapan (Rp 1.000.000)</label><br>
            <label><input type="checkbox" name="transportasi" value="1" <?= $pemesanan['transportasi'] ? 'checked' : '' ?>> Transportasi (Rp 1.200.000)</label><br>
            <label><input type="checkbox" name="makan" value="1" <?= $pemesanan['makan'] ? 'checked' : '' ?>> Servis/Makan (Rp 500.000)</label><br>
        </p>
        <p>
            <label>Jumlah Peserta: </label>
            <input type="number" name="jumlah_peserta" value="<?= $pemesanan['jumlah_peserta'] ?>" min="1" required />
        </p>
        <p>
            <input type="submit" name="simpan" value="Simpan" />
        </p>
    </form>
</body>
</html>

