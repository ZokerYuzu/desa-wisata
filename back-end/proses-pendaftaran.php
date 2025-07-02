<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama           = $_POST['nama_pemesan'];
    $nomor_hp       = $_POST['nomor_hp'];
    $tanggal_pesan  = $_POST['tanggal_pesan'];
    $waktu_jalan    = (int) $_POST['waktu_perjalanan']; // jumlah hari
    $jumlah_peserta = (int) $_POST['jumlah_peserta'];

    // Checkbox pelayanan
    $penginapan     = isset($_POST['penginapan']) ? 1 : 0;
    $transportasi   = isset($_POST['transportasi']) ? 1 : 0;
    $makan          = isset($_POST['makan']) ? 1 : 0;

    // Validasi wajib isi
    if (empty($nama) || empty($nomor_hp) || empty($tanggal_pesan) || $waktu_jalan <= 0 || $jumlah_peserta <= 0) {
        header("Location: form-daftar.php?status=kosong");
        exit;
    }

    // Ambil harga layanan dari database
    $harga_layanan = [
        'penginapan' => 0,
        'transportasi' => 0,
        'makan' => 0
    ];
    $resHarga = $conn->query("SELECT * FROM harga_layanan");
    while ($row = $resHarga->fetch_assoc()) {
        $harga_layanan[$row['nama']] = (int)$row['harga'];
    }

    // Hitung harga paket berdasarkan pilihan
    $harga_paket = 0;
    if ($penginapan)   $harga_paket += $harga_layanan['penginapan'];
    if ($transportasi) $harga_paket += $harga_layanan['transportasi'];
    if ($makan)        $harga_paket += $harga_layanan['makan'];

    // Hitung jumlah tagihan
    $jumlah_tagihan = $waktu_jalan * $jumlah_peserta * $harga_paket;

    // Simpan ke database
    $sql = "INSERT INTO pemesanan_paket (
                nama_pemesan, nomor_hp, tanggal_pesan, waktu_perjalanan,
                penginapan, transportasi, makan,
                jumlah_peserta, harga_paket, jumlah_tagihan
            ) VALUES (
                '$nama', '$nomor_hp', '$tanggal_pesan', '$waktu_jalan',
                '$penginapan', '$transportasi', '$makan',
                '$jumlah_peserta', '$harga_paket', '$jumlah_tagihan'
            )";

    $query = $conn->query($sql);

    if ($query) {
        header("Location: form-daftar.php?status=sukses");
    } else {
        header("Location: form-daftar.php?status=gagal");
    }
} else {
    die("Akses tidak sah...");
}
?>
