<?php
include 'koneksi.php';

// Query untuk menghapus semua data jadwal meeting
$query = "DELETE FROM tb_meeting";
if (mysqli_query($koneksi, $query)) {
    // Jika penghapusan berhasil, arahkan kembali ke halaman jadwal_meeting.php
    header("Location: jadwal_meeting.php");
    exit;
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
