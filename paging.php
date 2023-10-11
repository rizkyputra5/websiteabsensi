<?php
// Sambungkan ke database Anda
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $tema = $_POST['tema'];
    $waktu = $_POST['waktu'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];

    // Query untuk menambahkan jadwal meeting ke database
    $query = "INSERT INTO tb_meeting (tema_rapat, waktu, hari, tanggal, lokasi) VALUES ('$tema', '$waktu', '$hari', '$tanggal', '$lokasi')";

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
