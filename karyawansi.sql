-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2023 pada 17.54
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawansi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `no_telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id`, `nama`, `instansi`, `no_telephone`, `email`, `waktu`) VALUES
(29, 'utha', 'web develop', '087774065182', 'utha@gmail.com', 'Friday, 06-10-2023 03:32:51 pm'),
(30, 'dsad', 'sad', 'dsad', 'dsadas@gmail.com', 'Friday, 06-10-2023 04:59:46 pm'),
(31, 'dsadsa', 'dsad', 'dsad', 'sfas@gmail.com', 'Friday, 06-10-2023 05:09:42 pm'),
(32, 'dsads', 'dsadsa', 'dsaddsa', 'dsa@gmail.com', 'Friday, 06-10-2023 05:09:42 pm'),
(33, 'dafa', 'fdafda', 'fdafda', 'fsadf@gmail.com', 'Friday, 06-10-2023 05:12:04 pm'),
(34, 'dafdaf', 'daf', 'dafadf', 'dafda@gmail.com', 'Friday, 06-10-2023 05:12:35 pm'),
(35, 'dsadsa', 'dsadsad', 'saadsa', 'dsadsa@gmail.com', 'Friday, 06-10-2023 05:14:04 pm'),
(36, 'dsadsad', 'sadsa', 'dsad', 'dsadsa@gmail.com', 'Friday, 06-10-2023 05:14:04 pm'),
(37, 'dsadsad', 'sadasd', 'dsadas', 'dsdads@gmal.com', 'Friday, 06-10-2023 05:14:04 pm'),
(38, 'dsasd', 'ssads', 'adsads', 'dsadsa@gmail.com', 'Friday, 06-10-2023 05:14:04 pm'),
(39, 'dsadsa', 'dsads', 'adsa', 'dsadsa@gmail.com', 'Friday, 06-10-2023 05:14:04 pm'),
(40, 'dsadsa', 'dsad', 'sadsa', 'dsads@gmail.com', 'Friday, 06-10-2023 05:14:04 pm'),
(41, 'dsad', 'sadsa', 'dsadsa', 'dsadsa@gmail.com', 'Friday, 06-10-2023 05:14:04 pm'),
(42, 'dsads', 'adsad', 'sadsa', 'dsadasdsa@gmail.com', 'Friday, 06-10-2023 05:14:04 pm'),
(43, 'dsds', 'dsds', 'dsdsd', 'dsdsd@gmail.com', 'Friday, 06-10-2023 05:53:06 pm'),
(44, 'utha', 'sasa', 'sasas', 'sasaasa@gmail.com', 'Friday, 06-10-2023 05:53:17 pm'),
(45, 'sasa', 'sasa', 'sasa', 'sasa@gmail.com', 'Friday, 06-10-2023 05:53:33 pm'),
(46, 'utha', 'programer', '087774065182', 'utha@gmail.com', 'Saturday, 07-10-2023 10:19:08 pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar`
--

INSERT INTO `tb_daftar` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmp_tgl_lahir` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_tel` varchar(18) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `username`, `password`, `nama`, `tmp_tgl_lahir`, `jenkel`, `agama`, `alamat`, `no_tel`, `jabatan`, `foto`) VALUES
(192, 'sarah', '9e9d7a08e048e9d604b79460b54969c3', 'Sarah Mutia', 'Cianjur / 10-12-1992', 'Perempuan', 'Islam', '', '08128384848', 'CEO', '10092020025112employee3.png'),
(999999999, 'bagas', 'ee776a18253721efe8a62e4abd29dc47', 'bagas a', 'Jakarta / 10-01-1990', 'Laki-laki', 'Islam', 'Jakarta', '0895628383333', 'Office Boy', '10092020024120employee3.png'),
(1920392912, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Budi Sanjaya', 'Bekasi / 10-12-1980', 'Laki-laki', 'Kristen', '', '0895254859994', 'CEO', '10092020023942employee1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_meeting`
--

CREATE TABLE `tb_meeting` (
  `id` int(11) NOT NULL,
  `tema_rapat` varchar(255) NOT NULL,
  `waktu` varchar(11) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_meeting`
--

INSERT INTO `tb_meeting` (`id`, `tema_rapat`, `waktu`, `hari`, `tanggal`, `lokasi`) VALUES
(1, 'dsa', 'dsad', 'dsad', 'dsads', 'dsadsa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tb_meeting`
--
ALTER TABLE `tb_meeting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_meeting`
--
ALTER TABLE `tb_meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
