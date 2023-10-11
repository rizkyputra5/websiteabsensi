<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Absen</title>
</head>

<body>
    <h1>Data Absen</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>No telephone</th>
                <th>Email</th>
                <th>Waktu</th>
                <!-- Tambahkan kolom lain sesuai dengan struktur tabel -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Sambungkan ke database Anda
            include 'koneksi.php';

            // Query untuk mengambil data dari tabel tb_absen
            $query = "SELECT * FROM tb_absen";

            // Eksekusi query
            $result = mysqli_query($koneksi, $query);

            // Loop untuk menampilkan data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nip'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['instansi'] . "</td>";
                echo "<td>" . $row['nomor_telepon'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['waktu'] . "</td>";
                // Tambahkan kolom lain sesuai dengan struktur tabel
                echo "</tr>";
            }

            // Tutup koneksi database
            mysqli_close($koneksi);
            ?>
        </tbody>
    </table>
</body>

</html>
