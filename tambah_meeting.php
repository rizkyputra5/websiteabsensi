<?php
// Sambungkan ke database Anda
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $tema = $_POST['tema_rapat'];
    $waktu = $_POST['waktu'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];

    // Query untuk mengambil nomor terakhir dari tabel tb_meeting
    $query = "SELECT MAX(id) AS max_id FROM tb_meeting";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $max_id = $row['max_id'];

    // Tambahkan 1 ke nomor terakhir untuk mendapatkan nomor baru
    $next_id = $max_id + 1;

    // Query untuk menambahkan jadwal meeting ke database
    $query = "INSERT INTO tb_meeting (id, tema_rapat, waktu, hari, tanggal, lokasi) VALUES ('$next_id', '$tema', '$waktu', '$hari', '$tanggal', '$lokasi')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("Location: jadwal_meeting.php"); // Redirect kembali ke halaman jadwal_meeting.php setelah berhasil menambahkan
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
