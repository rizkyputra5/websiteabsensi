<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>jadwal meeting</title>
    <link rel="icon" href="images/title.png" type="image/png">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="" href="index.html">
                          
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                        <li>
                            <a href="jadwal_meeting.php">
                                <i class="fas fa-table"></i>jadwal meeting</a>
                        </li>
                       
                       
                    </ul>
                </div>
            </nav>

        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                   <h2>Admin</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                        <li class="active has-sub">
                            <a href="jadwal_meeting.php">
                                <i class="fas fa-table"></i>jadwal meeting</a>
                        </li>
                        <!--<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>-->
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h1>BADAN AKSESIBILITAS TELEKOMUNIKASI DAN INFORMATIKA</h1>
                          
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="form-container">
                
                <form action="tambah_meeting.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="tema_rapat">Tema Rapat</label>
                        <input type="text" id="tema_rapat" name="tema_rapat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input type="text" id="waktu" name="waktu" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="text" id="hari" name="hari" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi" class="form-control" required>
                    </div>
                    <tr>
                            <td><button type="submit" name="simpan" class="btn btn-warning">submit</button></td>
                        </tr>
                </form>
            </div>
            <br>

                    
                                        
                    <tbody>
                                           
                                          
                        <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            // Ambil data dari form jadwal meeting
                            $tema = $_POST['tema_rapat'];
                            $waktu = $_POST['waktu'];
                            $hari = $_POST['hari'];
                            $tanggal = $_POST['tanggal'];
                            $lokasi = $_POST['lokasi'];
                        
                            // Query untuk menambahkan jadwal meeting ke dalam tb_meeting
                            $query = "INSERT INTO tb_meeting (tema_rapat, waktu, hari, tanggal, lokasi) VALUES ('$tema', '$waktu', '$hari', '$tanggal', '$lokasi')";
                        
                            // Eksekusi query
                            if (mysqli_query($koneksi, $query)) {
                                // Redirect kembali ke halaman jadwal_meeting.php setelah berhasil menambahkan
                                header("Location: jadwal_meeting.php");
                                exit;
                            } else {
                                echo "Error: " . mysqli_error($koneksi);
                            }
                        }
                        
                        include 'koneksi.php';
                        $query1 = "SELECT * FROM tb_meeting ORDER BY id";

                        $pola = 'asc';
                        $polabaru = 'asc';

                        if (isset($_GET['orderby'])) {
                            $orderby = $_GET['orderby'];
                            $pola = $_GET['pola'];

                        $query1 = "SELECT * FROM tb_meeting ORDER BY $orderby $pola";
                        mysqli_query($koneksi, $query1);
                        if ($pola=='asc') {
                            $polabaru = 'desc';
                        }else{
                            $polabaru = 'asc';
                        }

                        }
                         ?>
                         <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tema</th>
                                    <th>Waktu</th>
                                    <th>Hari</th>
                                    <th>Tanggal</th>
                                    <th>Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Query untuk mengambil data jadwal meeting dari tb_meeting
                                $query_meeting = "SELECT * FROM tb_meeting";
                                $result_meeting = mysqli_query($koneksi, $query_meeting);
                                $no = 1;

                                while ($row_meeting = mysqli_fetch_assoc($result_meeting)) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row_meeting['tema_rapat'] . "</td>";
                                    echo "<td>" . $row_meeting['waktu'] . "</td>";
                                    echo "<td>" . $row_meeting['hari'] . "</td>";
                                    echo "<td>" . $row_meeting['tanggal'] . "</td>";
                                    echo "<td>" . $row_meeting['lokasi'] . "</td>";
                                    echo "</tr>";
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                        
                    </div>
                    <button class="btn btn-danger" onclick="konfirmasiHapus()">Hapus Semua Data Meeting</button>

                <script>
                function konfirmasiHapus() {
                    if (confirm("Anda yakin ingin menghapus semua data meeting?")) {
                        window.location.href = "hapus_semua_meeting.php";
                    }
                }
                </script>




            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
