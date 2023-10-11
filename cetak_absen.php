<!DOCTYPE html>
<html>
<link rel="icon" href="images/title.png" type="image/png">
<head>
    <title>BADAN AKSESIBILITAS TELEKOMUNIKASI DAN INFORMASI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .input-box {
            margin-bottom: 20px;
        }

        /* Menyembunyikan elemen formulir saat mencetak */
        @media print {
            .input-box,
            input[type="submit"] {
                display: none;
            }
        }

        /* Menyembunyikan tombol print saat mencetak */
        @media print {
            .no-print {
                display: none !important;
            }
        }

        /* Gaya tombol "Print Judul Laporan" */
        .print-button {
            background-color: #007BFF; /* Warna primer */
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            float: left; /* Menempatkan tombol di sebelah kiri */
            margin-right: 10px; /* Jarak antara tombol */
        }

        /* Menyusun tombol "Print Judul Laporan" dan "Print Laporan" di sebelah kiri dengan posisi atas bawah */
        .button-group {
            float: left;
            margin-top: 20px; /* Jarak atas */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Formulir untuk menambahkan judul laporan -->
        <form method="post">
            <div class="input-box">
                <label for="judul">Judul Laporan:</label>
                <input type="text" id="judul" name="judul" required>
            </div>
            
        <?php 
        include 'koneksi.php';

        // Cek apakah formulir telah disubmit
        if (isset($_POST['submit'])) {
            $judulLaporan = $_POST['judul'];
            echo "<h1>$judulLaporan</h1>";

        
        }
        ?>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>No telephone</th>
                <th>Email</th>
                <th>Waktu</th>
            </tr>

            <?php 
            $no = 1;
            $sql = mysqli_query($koneksi,"SELECT * FROM tb_absen");
            while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['instansi']; ?></td>
                <td><?php echo $data['no_telephone']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['waktu']; ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
     
        <!-- Tombol print dengan class "print-button" -->
        <div class="button-group">
            <button class="print-button no-print" onclick="window.print()">Print Laporan</button>
            <input type="submit" name="submit" class="print-button no-print" value="Print Judul Laporan">
        </div>
        </form>
    </div>
</body>
</html>
