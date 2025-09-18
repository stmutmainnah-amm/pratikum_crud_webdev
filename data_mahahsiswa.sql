-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2025 pada 09.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php dasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data mahahsiswa`
--

CREATE TABLE `data mahahsiswa` (
  `id_mhs` int(11) NOT NULL,
  `no_mhs` varchar(20) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data mahahsiswa`
--

INSERT INTO `data mahahsiswa` (`id_mhs`, `no_mhs`, `nama_mhs`, `jurusan`, `email`, `foto`) VALUES
(1, '220001', 'siti mutmainnah', 'informatika', 'smutminnah@gmail.com', 'img/mutma.jpg'),
(2, '220002', 'siti khaerunnisya', 'bimbingan konsiling', 'skherunnisya@gmail.com', 'img/siti.jpg'),
(3, '220003', 'siti mkhafira ramadani', 'hukum', 'smkhafira@gmail.com', 'img/fira.jpg'),
(4, '220004', 'muh akbar hamzah', 'hukum', 'makbarhamzah@gmail.com', 'img/akbar.img'),
(5, '220005', 'tri salda ulfa', 'kesehatan', 'sldaulfa@gmail.com', 'img/salda.jpg'),
(6, '220006', 'alfajri', 'otomotif', 'alfjri@gmail.com', 'img/fajri.jpg'),
(7, '220007', 'nazwa alqadri', 'hukum', 'nzwaalqdri@gmail.com', 'img/nazwa.jpg'),
(8, '220008', 'alsiaya jatayu', 'hukum', 'alisyajatayu@gmail.com', 'img/ayu.jpg'),
(9, '220009', 'arianti rachama', 'kedokteran', 'ariantirachma@gmail.com', 'img/riang.img'),
(10, '220010', 'nurul atika atira', 'hukum', 'nurulatika@gmail.com', 'img/nurul.jpg'),
(11, '220011', 'fhivi ramha', 'olahraga', 'fhifi@gmail.com', 'img/pipi.jpg'),
(12, '220012', 'arya abdi', 'hukum', 'aryabadi@gmail.com', 'img/abdi.jpg'),
(13, '220013', 'aryansyah', 'teknik', 'aryansyah@gmail.com', 'img/arya.jpg'),
(14, '220014', 'yuanika putri jayanto', 'manejemen', 'yuanika@gmail.com', 'img/yuan.img'),
(15, '220015', 'nurul hidayah', 'manejemen', 'nurulhidayah@gmai.com', 'img/nurulle.jpg'),
(16, '220016', 'aksal syamsur', 'olahraga', 'aksalsyamsyur@gmail.com', 'img/aksal.jpg'),
(17, '220017', 'amelia vega', 'manejemen', 'ameliavega@gmail.com', 'img/vega.jpg'),
(18, '220018', 'dhyl', 'manejemen', 'dhyl@gmail.com', 'img/dil.jpg'),
(19, '220019', 'siti aisyahrani', 'hukum', 'sitiaisyahrani@gmail.com', 'img/sara.jpg'),
(20, '220020', 'sarah azeezah', 'manejemen', 'sarahazeezah@gmail.com', 'img/sarah.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data mahahsiswa`
--
ALTER TABLE `data mahahsiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data mahahsiswa`
--
ALTER TABLE `data mahahsiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
