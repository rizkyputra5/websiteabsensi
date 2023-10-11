<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO tb_daftar SET username='$username', password='$password'";
    
    if (mysqli_query($koneksi, $query)) {
        header("location: datauser.php");
        exit; // Penting: Keluar dari skrip setelah mengarahkan pengguna.
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
