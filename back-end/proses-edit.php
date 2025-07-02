<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $nomor_hp = $_POST['nomor_hp'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $waktu_perjalanan = $_POST['waktu_perjalanan'];
    $penginapan = isset($_POST['penginapan']) ? 1 : 0;
    $transportasi = isset($_POST['transportasi']) ? 1 : 0;
    $makan = isset($_POST['makan']) ? 1 : 0;
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $harga_paket = $_POST['harga_paket'];
    $jumlah_tagihan = $_POST['jumlah_tagihan'];

    // Bersihkan nilai Rp dan titik dari harga (jika dikirim dalam format "Rp 1.000.000")
    $harga_paket = preg_replace('/[^\d]/', '', $harga_paket);
    $jumlah_tagihan = preg_replace('/[^\d]/', '', $jumlah_tagihan);

    $sql = "UPDATE pemesanan_paket SET 
                nama_pemesan = ?, 
                nomor_hp = ?, 
                tanggal_pesan = ?, 
                waktu_perjalanan = ?, 
                penginapan = ?, 
                transportasi = ?, 
                makan = ?, 
                jumlah_peserta = ?, 
                harga_paket = ?, 
                jumlah_tagihan = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiiiiiiii", $nama_pemesan, $nomor_hp, $tanggal_pesan, $waktu_perjalanan, $penginapan, $transportasi, $makan, $jumlah_peserta, $harga_paket, $jumlah_tagihan, $id);

    if ($stmt->execute()) {
        header('Location: form-data.php?status=berhasil_edit');
        exit();
    } else {
        die("Gagal menyimpan perubahan: " . $conn->error);
    }
} else {
    die("Akses ditolak.");
}
?>
