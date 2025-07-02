<?php
include 'koneksi.php';

// Proses update harga
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $penginapan = intval($_POST['hargaPenginapan']);
    $transportasi = intval($_POST['hargaTransportasi']);
    $makan = intval($_POST['hargaMakan']);

    $conn->query("UPDATE harga_layanan SET harga=$penginapan WHERE nama='penginapan'");
    $conn->query("UPDATE harga_layanan SET harga=$transportasi WHERE nama='transportasi'");
    $conn->query("UPDATE harga_layanan SET harga=$makan WHERE nama='makan'");

    $msg = "Harga layanan berhasil diperbarui!";
}

// Ambil harga terbaru dari database
$harga = [];
$res = $conn->query("SELECT * FROM harga_layanan");
while ($row = $res->fetch_assoc()) {
    $harga[$row['nama']] = $row['harga'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Harga Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card border-success">
        <div class="card-header bg-success text-white">
            <strong>Edit Harga Layanan Paket</strong>
        </div>
        <div class="card-body">
            <?php if (!empty($msg)): ?>
                <div class="alert alert-success"><?= $msg ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="hargaPenginapan" class="form-label">Penginapan</label>
                    <input type="number" class="form-control" id="hargaPenginapan" name="hargaPenginapan" value="<?= $harga['penginapan'] ?>" min="0" required>
                </div>
                <div class="mb-3">
                    <label for="hargaTransportasi" class="form-label">Transportasi</label>
                    <input type="number" class="form-control" id="hargaTransportasi" name="hargaTransportasi" value="<?= $harga['transportasi'] ?>" min="0" required>
                </div>
                <div class="mb-3">
                    <label for="hargaMakan" class="form-label">Makan</label>
                    <input type="number" class="form-control" id="hargaMakan" name="hargaMakan" value="<?= $harga['makan'] ?>" min="0" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>