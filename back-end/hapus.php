<?php
include("koneksi.php");

// Pastikan ada parameter ID di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Gunakan prepared statement untuk mencegah SQL Injection
    $sql = "DELETE FROM pemesanan_paket WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Jika berhasil, kembali ke halaman data
        header("Location: form-data.php?status=berhasil_hapus");
        exit();
    } else {
        die("Gagal menghapus data: " . $conn->error);
    }
} else {
    die("Akses langsung tidak diizinkan.");
}
?>
