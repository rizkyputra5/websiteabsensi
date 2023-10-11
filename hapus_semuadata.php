<?php
function hapusSemuaDataAbsen($koneksi) {
    // Perintah SQL untuk menghapus semua data dari tabel tb_absen
    $sql = "DELETE FROM tb_absen";

    // Eksekusi perintah DELETE
    $hapus = mysqli_query($koneksi, $sql);

    if ($hapus) {
        // Data berhasil dihapus, arahkan pengguna ke data_absen.php
        header("Location: data_absen.php");
        exit(); // Pastikan untuk menghentikan eksekusi lebih lanjut
    } else {
        echo "Gagal menghapus data.";
    }
    
}

// Contoh penggunaan fungsi
include 'koneksi.php'; // Pastikan Anda telah memasukkan file koneksi.php dengan benar

if (hapusSemuaDataAbsen($koneksi)) {
    echo "";
} else {
    echo "Gagal menghapus data.";
}
?>

<!-- Fungsi JavaScript onclick untuk kembali ke data_absen.php -->
<button onclick="window.location.href='data_absen.php';">Kembali ke Data Absen</button>
