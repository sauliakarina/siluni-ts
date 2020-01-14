-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2020 at 07:46 AM
-- Server version: 10.2.29-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8810863_siluni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `avatar` varchar(225) NOT NULL,
  `tahun_masuk` varchar(50) NOT NULL,
  `bulan_lulus` varchar(100) DEFAULT NULL,
  `tahun_lulus` varchar(50) NOT NULL,
  `ipk` varchar(100) DEFAULT NULL,
  `toefl` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kuesioner` varchar(30) NOT NULL,
  `no_telepon` varchar(50) DEFAULT NULL,
  `waktu_skripsi` varchar(30) NOT NULL,
  `tampil_ipk` enum('yes','no') NOT NULL,
  `tampil_pekerjaan` enum('yes','no') NOT NULL,
  `tampil_waktu_skripsi` enum('yes','no') NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  `prodiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `userID`, `nim`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `avatar`, `tahun_masuk`, `bulan_lulus`, `tahun_lulus`, `ipk`, `toefl`, `pekerjaan`, `email`, `kuesioner`, `no_telepon`, `waktu_skripsi`, `tampil_ipk`, `tampil_pekerjaan`, `tampil_waktu_skripsi`, `status`, `prodiID`) VALUES
(1, 'ALU3145136217', '3145136217', 'M. Reyhan Fahlevi', 'Laki-laki', 'Jakarta', '1994-09-17', 'Jl. Talempong Blok J/1 Pegangsaan Dua,  Kelapa Gading, Jakarta Utara, DKI Jakarta\r\n', '', '2013', 'Februari', '2017', '3.83', '540', '', 'reysdesign@hotmail.com', '', '087785282708', '', 'yes', 'yes', 'yes', 'aktif', 1),
(2, 'ALU3145136218', '3145136218', 'Gregorius Andito H', 'Laki-laki', 'Jakarta', '1994-11-20', 'Cluster Adena blok SA 2 No. 7 Graha Raya, Tangerang Selatan, Banten', '', '2013', NULL, '2017', '3.72', '550', '', 'gregorius.andito@gmail.com', '', '0878 8112 3212', '', 'yes', 'yes', 'yes', 'aktif', 1),
(3, 'ALU3145136208', '3145136208', 'Alitinia Prastiantari', 'Perempuan', 'Jakarta', '1995-12-11', 'Jl. Masjid RT.009/07 no.27 13750. Jaktim.', '', '2013', 'September', '2017', '3.72', '510', '', 'alitiniapr@gmail.com', '', '08129142949', '', 'yes', 'yes', 'yes', 'aktif', 1),
(4, 'ALU3145136211', '3145136211', 'Tiara Amelia', 'Perempuan', 'Surabaya', '1995-08-21', 'Jl. Kayumanis VI GG. Kapuk I No.46 RT:005 RW:005, Kelurahan Kayumanis, Kecamatan Matraman, Jakarta Timur 13120', '', '2013', 'Agustus', '2017', '3.77', '403', '', 'tiara21.amelia@gmail.com', '', '081282003420', '', 'yes', 'yes', 'yes', 'aktif', 1),
(5, 'ALU3145136223', '3145136223', 'Agustinus Purimbaga', 'Laki-laki', '', '', '', '', '2013', NULL, '2017', '3.59', NULL, '', '', '', '081281011459', '', 'yes', 'yes', 'yes', 'aktif', 1),
(6, 'ALU3145136197', '3145136197', 'Muhammad Fachrizal', 'Laki-laki', '', '', '', '', '2013', NULL, '2017', '3.41', NULL, '', '', '', '085711402970', '', 'yes', 'yes', 'yes', 'aktif', 1),
(7, 'ALU3145136212', '3145136212', 'Anantassa Fitri Andini', 'Perempuan', 'Jakarta', '1995-03-10', 'Jl. Tanjung Duren Timur No V Jakarta Barat', '', '2013', NULL, '2017', '3.80', '557', '', 'anantassafitri@gmail.com', '', '081319508117', '', 'yes', 'yes', 'yes', 'aktif', 1),
(8, 'ALU3145136196', '3145136196', 'Mikael Yurubeli', 'Laki-laki', 'Jakarta', '1995-05-07', 'Jln.Hikmah No.64 rt 01/005, kel. Cilangkap', '', '2013', 'Agustus', '2017', '3.54', '530', '', 'mikaelyuru@gmail.com', '', '087875076738', '', 'yes', 'yes', 'yes', 'aktif', 1),
(9, 'ALU3145136193', '3145136193', 'Hana Maulinda', 'Perempuan', 'Jakarta', '1995-08-07', 'Jl. Lingkar Sari No.37A RT.006 RW.009 Kel.Kalisari Kec. Pasar Rebo, Jakarta Timur, 13790', '', '2013', 'September', '2017', '3.56', '527', '', 'hanamaulinda@gmail.com', '', '081318400299', '', 'yes', 'yes', 'yes', 'aktif', 1),
(10, 'ALU3145153280', '3145153280', 'M Nurilman Baehaqi', 'Laki-laki', 'Serang', '1997-05-07', 'Kp. Kadukacapi RT. 002 RW. 001 Ds. Tanjungsari Kec. Pabuaran', '', '2015', 'Agustus', '2019', '3.52', '520', '', 'mnurilmanbaehaqi@gmail.com', '', '085920039600', '', 'yes', 'yes', 'yes', 'aktif', 1),
(13, 'ALU3145141983', '3145141983', 'Muhammad Ardiansyah Rizkiyanto', 'Laki-laki', 'Jakarta', '1996-08-19', 'Jl. Bhineka IV RT 06 RW 09 Kel. Pasir Gunung Selatan, Cimanggis, Depok', '', '2014', 'September', '2019', '3.86', '503', '', 'm_ardiansyah_rizkiyanto@yahoo.com', '', '085810140868', '', 'yes', 'yes', 'yes', 'aktif', 1),
(14, 'ALU3145141981', '3145141981', 'Muhammad Afghan Amin', 'Laki-laki', '', '', '', '', '2014', NULL, '2019', '3.47', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(15, 'ALU3145141980', '3145141980', 'Ferdiansyah', 'Laki-laki', 'Jakarta', '1996-10-01', 'Jalan Tanah Pasir RT 007 RW 09 No 42, Kelurahan Penjaringan, Kecamatan Penjaringan, Jakarta Utara, DKI Jakarta.', '', '2014', 'September', '2019', '3.72', '', '', 'frdiansyah11@gmail.com', '', '081297255982', '', 'yes', 'yes', 'yes', 'aktif', 1),
(16, 'ALU3145140590', '3145140590', 'Kholil Akhmad ', 'Laki-laki', '', '', '', '', '2014', NULL, '2019', '3.26', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(17, 'ALU3145136214', '3145136214', 'Dimas Sartika', 'Perempuan', '', '', '', '', '2013', NULL, '2018', '3.49', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(18, 'ALU3145136194', '3145136194', 'Dian Rakasiwi', 'Perempuan', '', '', '', '', '2013', NULL, '2018', '3.43', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(19, 'ALU3145136210', '3145136210', 'Muhammad Fakhri Ali Ibrahim', 'Laki-laki', '', '', '', '', '2013', NULL, '2018', '3.61', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(20, 'ALU3145136206', '3145136206', 'Ghina Salsabila', 'Perempuan', '', '', '', '', '2013', NULL, '2018', '3.66', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(21, 'ALU3145136204', '3145136204', 'Dinda Kharisma', 'Perempuan', 'Jakarta', '1995-01-16', 'Jl. Mangga Besar XIII RT 003/02 Nomor 3A\r\nJakarta 10730', '', '2013', 'Maret', '2018', '3.48', '550', '', 'dindakhrsm@gmail.com', '', '089601676825', '', 'yes', 'yes', 'yes', 'aktif', 1),
(22, 'ALU3145136224', '3145136224', 'Annisa Nursya', 'Perempuan', '', '', '', '', '2013', NULL, '2018', '3.51', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(23, 'ALU3145136203', '3145136203', 'Ghina Rosika Amalina', 'Perempuan', '', '', '', '', '2013', NULL, '2018', '3.34', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(24, 'ALU3145136205', '3145136205', 'Annisa Mutiara Ditri', 'Perempuan', 'Jakarta', '1996-02-12', 'Jl. Hirup Raya RT 002/10 Kel. Jatimulya\r\nKec. Tambun Selatan, Bekasi 17510\r\n', '', '2013', 'Maret', '2018', '3.34', '540', '', 'annisamutiaraditri@gmail.com', '', '081284978442', '', 'yes', 'yes', 'yes', 'aktif', 1),
(25, 'ALU3145136216', '3145136216', 'Rahmi Putri', 'Perempuan', 'Bukittinggi', '1994-06-13', '', '', '2013', 'Maret', '2018', '3.73', '', '', 'rahmiputri1306@gmail.com', '', '085921460527', '', 'yes', 'yes', 'yes', 'aktif', 1),
(26, 'ALU3145136221', '3145136221', 'Khariza Nabila Aulia', 'Perempuan', 'Jakarta', '2014-12-29', 'Jl. H. Enjong RT.008/001 No. 15 Kelurahan Kalisari Kecamatan Pasar Rebo, Jakarta Timur 13790', '', '2013', 'Maret', '2018', '3.54', '517', '', 'khariza.nabilla@gmail.com', '', '085888697520', '', 'yes', 'yes', 'yes', 'aktif', 1),
(27, 'ALU3145136215', '3145136215', 'Andrean Oktavianus Halim Saputra', 'Laki-laki', 'Kebumen', '1994-10-26', 'Desa Sidomulyo RT 002/ RW 003, Kecamatan Karanganyar, Kabupaten Kebumen, Jawa Tengah 54364', '', '2013', 'Februari', '2018', '3.54', '513', '', 'siskom.andrean@gmail.com', '', '085780905314', '', 'yes', 'yes', 'yes', 'aktif', 1),
(28, 'ALU3145140591', '3145140591', 'Olga Noersaphira', 'Perempuan', '', '', '', '', '2014', NULL, '2018', NULL, NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(29, 'ALU3145143626', '3145143626', 'Amelia Apriliani', 'Perempuan', 'Jakarta', '1996-04-23', 'Jl. Olah Raga I RT.010 RW.05 No.64, Kel. Cililitan Kec. Kramat Jati, Jakarta Timur 13640', '', '2014', 'Agustus', '2018', '3.67', '500', '', 'ameliaapriliani85@gmail.com', '', '085776210885', '', 'yes', 'yes', 'yes', 'aktif', 1),
(30, 'ALU3145143629', '3145143629', 'Aisyah Naqiyyah', 'Perempuan', '', '', '', '', '2014', NULL, '2019', '3.37', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(31, 'ALU3145140588', '3145140588', 'Anisah', 'Perempuan', '', '', '', '', '2014', NULL, '2019', '3.37', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(32, 'ALU3145140598', '3145140598', 'Astia Desanti', 'Perempuan', '', '', '', '', '2014', NULL, '2019', '3.52', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(33, 'ALU3145140599', '3145140599', 'Dika Nur Azizah', 'Perempuan', '', '', '', '', '2014', NULL, '2019', '3.37', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(34, 'ALU3145143620', '3145143620', 'Muhammad Yan Handoko', 'Laki-laki', 'Semarang', '1997-06-18', 'Jalan Pengandegan Barat V Nomor 18 RT. 011/007', '', '2014', 'Februari', '2019', '3.28', '', '', 'myanhandkoko17@gmail.com', '', '082124022340', '', 'yes', 'yes', 'yes', 'aktif', 1),
(35, 'ALU3145140595', '3145140595', 'Tafana Komalasari Dewi', 'Perempuan', '', '', '', '', '2014', NULL, '2019', '3.46', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(36, 'ALU3145140596', '3145140596', 'Anita Dewi Sukmawati', 'Perempuan', 'Jakarta, 12 Desember 1996', '', 'Jalan Ontorejo No.449 RT 04 RW 02 Halim Perdana Kusumah Kec.Makasar Jakarta Timur 13610', '', '2014', 'Februari', '2019', '3.54', '527', '', 'anitadewisukmawati@gmail.com', '', '087789207523', '', 'yes', 'yes', 'yes', 'aktif', 1),
(37, 'ALU3145141976', '3145141976', 'Yogi Perdana', 'Laki-laki', '', '', '', '', '2014', '', '2019', '3.39', '', '', '', '', '', '', 'yes', 'yes', 'yes', 'aktif', 1),
(38, 'ALU3145141984', '3145141984', 'Riswandy', 'Laki-laki', '', '', '', '', '2014', NULL, '2019', '3.61', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(39, 'ALU3145143623', '3145143623', 'Rifqi Syahirul Alim', 'Laki-laki', '', '', '', '', '2014', NULL, '2019', '3.34', NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1),
(40, 'ALU54321', '54321', 'Akun Testing', 'Laki-laki', '', '', '', '', '2015', NULL, '2020', NULL, NULL, '', '', '', NULL, '', 'yes', 'yes', 'yes', 'aktif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_instansi`
--

CREATE TABLE `alumni_instansi` (
  `id` int(11) NOT NULL,
  `alumniID` int(11) NOT NULL,
  `instansiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(150) NOT NULL,
  `jenis` enum('alumni','pengguna') NOT NULL,
  `prodiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `isi`, `foto`, `jenis`, `prodiID`) VALUES
(1, '<p>Yth. Alumni Ilmu Komputer FMIPA UNJ</p>\r\n<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi Ilmu Komputer. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>\r\n', '', 'alumni', 1),
(2, '<p style=\"text-align: justify;\"><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Bapak/Ibu yang terhormat, saat ini kami sedang melakukan&nbsp;</span><strong><em style=\"box-sizing: border-box; display: inline-block; transition: all 0.3s ease 0s; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\"><span style=\"box-sizing: border-box;\">Tracer Study</span></em></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;(penelusuran alumni)&nbsp;</span><strong><span style=\"box-sizing: border-box; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Program Studi Ilmu Komputer</span></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.</span></p>', '', 'pengguna', 1),
(3, '<p>Yth. Alumni Matematika FMIPA UNJ</p>\r\n							<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi Matematika Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni Matematika UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>', '', 'alumni', 3),
(4, '<p style=\"text-align: justify;\"><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Bapak/Ibu yang terhormat, saat ini kami sedang melakukan&nbsp;</span><strong><em style=\"box-sizing: border-box; display: inline-block; transition: all 0.3s ease 0s; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\"><span style=\"box-sizing: border-box;\">Tracer Study</span></em></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;(penelusuran alumni)&nbsp;</span><strong><span style=\"box-sizing: border-box; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Program Studi Matematika </span></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.</span></p>', '', 'pengguna', 3),
(5, '<p>Yth. Alumni Matematika FMIPA UNJ</p>\r\n							<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi Matematika Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni Matematika UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>', '', 'alumni', 3),
(6, '<p style=\"text-align: justify;\"><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Bapak/Ibu yang terhormat, saat ini kami sedang melakukan&nbsp;</span><strong><em style=\"box-sizing: border-box; display: inline-block; transition: all 0.3s ease 0s; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\"><span style=\"box-sizing: border-box;\">Tracer Study</span></em></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;(penelusuran alumni)&nbsp;</span><strong><span style=\"box-sizing: border-box; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Program Studi Matematika </span></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.</span></p>', '', 'pengguna', 3),
(7, '<p>Yth. Alumni Matematika FMIPA UNJ</p>\r\n							<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi Matematika Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni Matematika UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>', '', 'alumni', 3),
(8, '<p style=\"text-align: justify;\"><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Bapak/Ibu yang terhormat, saat ini kami sedang melakukan&nbsp;</span><strong><em style=\"box-sizing: border-box; display: inline-block; transition: all 0.3s ease 0s; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\"><span style=\"box-sizing: border-box;\">Tracer Study</span></em></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;(penelusuran alumni)&nbsp;</span><strong><span style=\"box-sizing: border-box; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Program Studi Matematika </span></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.</span></p>', '', 'pengguna', 3);

-- --------------------------------------------------------

--
-- Table structure for table `berita_alumni`
--

CREATE TABLE `berita_alumni` (
  `id` int(11) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar_berita` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_alumni`
--

INSERT INTO `berita_alumni` (`id`, `userID`, `judul`, `kategori`, `isi`, `tanggal_dibuat`, `gambar_berita`) VALUES
(2, 'ALU3145136196', 'List Barang Yang Gak Boleh Ketinggalan Saat Datang Ke Jobfair', 'Tips Karir', '<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">UNJKita.com -- Selamat kepada Abang dan Mpok yang hari ini resmi menjadi wisudawan dan wisudawati Universitas Negeri Jakarta. Semoga ilmu yang didapat membawa pada kesuksesan dan yang memilih mengabdi di dunia pendidikan, mudah-mudahan diberi keikhlasan selama masa pengabdian.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Bagi yang masih bingung, setelah lulus ingin cari pekerjaan dimana? Memulai karier sebagai apa? Coba datang dan kunjungi bursa kerja atau karier expo dan lebih dikenal dengan sebutan&nbsp;<em style=\"box-sizing: border-box;\">Jobfair.</em>&nbsp;Pastikan dulu kalian membawa benda berikut sebelum pergi mengunjungi&nbsp;<em style=\"box-sizing: border-box;\">Jobfair.</em></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><em style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box; font-style: normal;\">1. CV&nbsp;<em style=\"box-sizing: border-box;\">(Curriculum Vitae) / Resume</em></strong><br style=\"box-sizing: border-box; font-style: normal;\" /><span style=\"font-style: normal;\">Wah, sekarang sudah sarjana nih. Tentulah CV sebagai hal yang wajib, secara tujuan datang ke&nbsp;</span><em style=\"box-sizing: border-box;\">Jobfair</em><span style=\"font-style: normal;\">&nbsp;kan untuk mencari pekerjaan. CV itu serupa cara perusahaan megenal kita, apakah sesuai kualifikasi yang dibutuhkan, siapa diri kamu, bagaimana latar pendidikan yang telah kamu jalani, sampai pada informasi lain yang berkaitan tentang kamu. Meski terkesan banyak yang ingin kamu beri tahu pada perusahaan dan atau tempat lain kamu melamar pekerjaan, yang perlu diingat bahwa isi CV jangan terlalu bertele-tele, jelas, ringkas dan padat isi.</span></em></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><em style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box; font-style: normal;\">2. Kelengkapan Akademik</strong><br style=\"box-sizing: border-box; font-style: normal;\" /><span style=\"font-style: normal;\">Tidak hanya CV saja, sebagai bukti kamu telah menyelesaikan studi, maka Ijazah dan Transkrip Nilai juga mesti dibawa saat datang ke&nbsp;</span><em style=\"box-sizing: border-box;\">jobfair</em><span style=\"font-style: normal;\">. Semisal kamu punya prestasi akademik maupun non-akademik yang menunjang, boleh juga membawa bukti sertifikatnya.</span></em></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><strong style=\"box-sizing: border-box;\">3. Dokumen Data Diri</strong><br style=\"box-sizing: border-box;\" />KTP, SIM, Akte Kelahiran atau Kartu Keluarga sebagai persiapan kalau dibutuhkan pelengkap identitas pribadi dalam melamar pekerjaan yang kamu incar.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><strong style=\"box-sizing: border-box;\">4. Alat tulis</strong><br style=\"box-sizing: border-box;\" />Ketika berkeliling&nbsp;<em style=\"box-sizing: border-box;\">stand jobfair</em>, perusahaan terkadang menyediakan formulir yang perlu diisi, atau pada CV yang akan kalian titipkan pada panitia perusahaan dalam&nbsp;<em style=\"box-sizing: border-box;\">jobfair</em>&nbsp;diharuskan diberi kode tertentu. Kamu pasti butuh pulpen, pensil, atau spidol.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><strong style=\"box-sizing: border-box;\">5. Tisu atau Sapu Tangan</strong><br style=\"box-sizing: border-box;\" />Sarjana yang lulus dalam waktu berbaregan dengan kalian tentu enggak cuma dari UNJ. Selama proses wisuda, di luar JIEXPO saja sudah jadi lautan manusia. Kebayang dong, itu baru satu universitas. Sedang yang mencari kerja bisa jadi&nbsp;<em style=\"box-sizing: border-box;\">fresh graduate</em>&nbsp;se-Jakarta atau bahkan se-Jabodetabek. Kapasitas gedung yang tak seberapa, ditambah jumlah pengunjung yang membludak akan membuat suasana ruangan menjadi lebih panas. Belum lagi saat berdesak-desakan saat mengantre. Mengurangi lepek akibat keringat bercucuran, ada baiknya kamu siapkan tisu atau sapu tangan.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><strong style=\"box-sizing: border-box;\">7.&nbsp;<em style=\"box-sizing: border-box;\">Flashdisk</em></strong><br style=\"box-sizing: border-box;\" />Teknologi semakin canggih, dengan kemajuan tersebut perusahaan biasanya mulai menyediakan fasilitas komputer, laptop atau&nbsp;<em style=\"box-sizing: border-box;\">notebook</em>&nbsp;untuk kamu masukkan sendiri data yang dibutuhkan perusahaan sebagai ganti dari&nbsp;<em style=\"box-sizing: border-box;\">hardcopy</em>&nbsp;berkas. Selain menghemat kertas, cinta lingkungan, tentunya menerapkan IPTEKS. Agar tidak kebingungan saat dihadapi situasi yang kekinian dalam&nbsp;<em style=\"box-sizing: border-box;\">jobfair</em>, solusinya membawa&nbsp;<em style=\"box-sizing: border-box;\">flashdisk</em>&nbsp;yang berisi CV serta kelengkapan lain dan juga foto resmi.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><strong style=\"box-sizing: border-box;\">8. Foto</strong><br style=\"box-sizing: border-box;\" />Perusahaan tentulah ingin tahu seperti apa kandidat calon yang nantinya akan diajak bekerjasama membangun visi dan misi kantor, caranya bisa melalui foto. Kerap kali ini yang sering dilupakan karena ukurannya yang kecil.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Setelah membuat list dan memeriksa apa saja yang dibutuhkan untuk datang ke<em style=\"box-sizing: border-box;\">jobfair</em>, bersiaplah berjuang! Semoga kesuksesan selalu menyertai kita semua.</p>', '2019-10-09 01:06:05', '1570583165.jpg'),
(3, 'ALU3145136196', 'Lowongan Kerja Volunteer Asian Games 2018', 'Lowongan Kerja', '<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Asian Games 2018 akan diselenggarakan di Indonesia pada tanggal 18 Agustus 2018 &ndash; 2 September 2018, di dua tempat yaitu Jakarta dan Palembang. Panitia Asian Games membutuhkah 15 ribu Volunteer Asian Games 2018 untuk bertugas di berbagai bidang.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Sebanyak 2000 Volunteer akan disiapkan untuk acara pre-event Asian Games yaitu Januari &ndash; Maret 2018. Sisanya sebanyak 13.000 volunteer akan ditugaskan pada event utama Asian Games dengan masa tugas Agustus-September 2018</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Akan ada 4 tipe volunteer selama Asian Games yaitu&nbsp;Protocol Assistant, NOC Assistant, Liaison Officer, Work Force dengan syarat dan ketentuan yang berbeda-beda.</p>\r\n<h3 style=\"box-sizing: border-box; font-family: \'Open Sans\', arial, sans-serif; color: #222222; font-weight: 400; margin: 27px 0px 17px; font-size: 22px; line-height: 30px;\">Pada Bidang Apa Volunteer Asian Games 2018 ditugaskan ?</h3>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Relawan Asian Games tahun 2018 akan bertugas dan disalurkan sesuai permintaan yang dibuat khusus oleh masing-masing departemen dalam pengelolaan INASGOC, berikut ini adalah departemen yang menjadi tugas relawan:</p>\r\n<ul style=\"box-sizing: border-box; padding: 0px; list-style-position: inside; margin-bottom: 24px; color: #444444; font-family: Verdana, Geneva, sans-serif; font-size: 15px;\">\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Catering</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">IT &amp; Telecommunication</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Revenue</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Accomodations</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Accreditations</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Media &amp; Public Relation</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Ceremonies &amp; Events</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Transportation</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Venue &amp; Environment</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Ticketing</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Communication</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Athlete Village &amp; Services</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Broadcast</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Sport, Medals, and Culture</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Arrival Departure &amp; Hospitality</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">International Relations &amp; Protocol</li>\r\n<li style=\"box-sizing: border-box; line-height: 24px; margin: 0px 0px 0px 21px;\">Promotion, Game Look &amp; Socialization</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Mari Kita Sukseskan perhelatan akbar Asian Games 2018 dengan menjadi Volunteer Asian Games 2018. Info Selengkapnya bisa kamu cek di&nbsp;<strong style=\"box-sizing: border-box;\"><a style=\"box-sizing: border-box; background: transparent; color: #008c45; text-decoration-line: none !important;\" href=\"http://volunteer.asiangames2018.id/\">volunteer.asiangames2018.id</a></strong></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\"><strong style=\"box-sizing: border-box;\">Sekilas Asian Games</strong></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Mengutip dari Wikipedia, Asian Games awalnya merupakan ajang olahraga di Asia kecil. Far Eastern Championship Games diadakan untuk menunjukkan kesatuan dan kerja sama antar tiga negara, yaitu Kerajaan Jepang, Kepulauan Filipina, dan Republik Tiongkok. Far Eastern Championship Games pertama diadakan di Manila pada tahun 1913. Negara Asia lainnya berpartisipasi setelah diselenggarakan. Far Eastern Championship Games dihentikan pada tahun 1938 ketika Jepang menyerbu Tiongkok dan aneksasi terhadap Filipina yang menjadi pemicu perluasan Perang Dunia II ke wilayah Pasifik.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Setelah Perang Dunia II, sejumlah negara di Asia menerima kemerdekaannya. Negara-negara baru tersebut meninginkan sebuah kompetisi yang baru di mana kekuasaan Asia tidak ditunjukkan dengan kekerasan dan kekuatan Asian diperkuat oleh saling pengertian. Pada Agustus 1948, pada saat Olimpiade di London, perwakilan India, Guru Dutt Sondhi mengusulkan kepada para pemimpin kontingen dari negara-negara Asia untuk mengadakan Asian Games. Seluruh perwakilan tersebut menyetujui pembentukan Federasi Atletik Asia. Panitia persiapan dibentuk untuk membuat rancangan piagam untuk federasi atletik amatir Asia. Pada Februari 1949, federasi atletik Asia terbentuk dan menggunakan nama Federasi Asian Games (Asian Games Federation). Dan menyepakati untuk mengadakan Asian Games pertama pada 1951 di New Delhi, ibu kota India. Mereka sepakat bahwa Asian Games akan diselenggarakan setiap empat tahun sekali.</p>', '2019-10-08 06:41:58', 'asian-games.jpg'),
(5, 'ALU3145136196', 'Ikatan Alumni UNJ Gelar Audiensi Dengan Menkopolhukam', 'Info Alumni', '<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">UNJ) menggelar audiensi dengan Menteri Koordinator Bidang Politik Hukum dan HAM (Menko Polhukam) di kantornya pukul 10.30 setempat. Juri Ardiantoro sebagai Ketua Umum IKA UNJ bersama beberapa jajaran pengurus IKA UNJ disambut hangat langsung oleh Wiranto yang juga merupakan alumni PascaSarjana Universitas Negeri Jakarta.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Pada kesempatan tersebut, Juri Ardiantoro memperkenalkan beberapa jajaran pengurus IKA UNJ. Wiranto sendiri juga menyepakati penunjukannya menjadi Dewan Penasehat IKA UNJ periode 2017 &ndash; 2020.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 24px; color: #222222; overflow-wrap: break-word; word-wrap: break-word; margin-bottom: 24px;\">Wiranto juga dijadwalkan memberikan&nbsp;<em style=\"box-sizing: border-box;\">Studium Generale&nbsp;</em>di Pelantikan Pengurus IKA UNJ 8 September mendatang. Dan pada kesempatan yang sama, pengurus IKA UNJ meminta Wiranto sebagai alumni dan dewan penasehat IKA UNJ menulis tentang pendidikan bela negara dalam buku&nbsp;<em style=\"box-sizing: border-box;\">Lansekap Pendidikan Indonesia</em>&nbsp;karya IKA UNJ.</p>', '2019-10-08 06:41:58', 'Audiensi-IKA-UNJ-Wiranto-640x360_(1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`) VALUES
(1, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  `prodiID` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `userID`, `nama`, `nidn`, `jenis_kelamin`, `email`, `no_telepon`, `avatar`, `status`, `prodiID`, `jabatan`) VALUES
(1, 'DOS0011026006', 'Fariani Hermin Indiyah', '0011026006', 'Perempuan', '', '', '', 'aktif', 1, 'koorprodi');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `kode_fakultas` varchar(50) NOT NULL,
  `nama_fakultas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `kode_fakultas`, `nama_fakultas`) VALUES
(1, '', 'FMIPA');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(225) NOT NULL,
  `jenis_instansi` enum('Lokal','Nasional','Internasional','') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `prodiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama_instansi`, `jenis_instansi`, `alamat`, `prodiID`) VALUES
(1, 'PT Docotel Teknologi', NULL, 'Jl. KH. Hasyim Ashari No.26, RT.1/RW.4, North Petojo, Gambir, Central Jakarta City, Jakarta 10130', 1),
(2, 'PT Tokopedia', '', 'lantai 52 Tokopedia Tower Ciputra World 2, Jl. Prof. DR. Satrio No.Kav. 11, RT.3/RW.3, Karet Semanggi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950', 1),
(3, 'PT Kompas Media Nusantara', NULL, 'Jl. Palmerah Sel. No.26-28, RT.4/RW.2, Gelora, Tanahabang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta', 1),
(4, 'DPD RI', NULL, NULL, 1),
(5, 'PT Harmoni Solusi Bisnis ', 'Nasional', 'Jl. Dempo I No.51, RT.4/RW.3, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120', 1),
(6, 'PT Sinar Mas', NULL, NULL, 1),
(7, 'PT Imkahfa ', NULL, NULL, 1),
(8, 'PT GSI (United Tractor )', NULL, NULL, 1),
(9, 'PT Manulife Indonesia', NULL, NULL, 1),
(10, 'PT Fliptech Lentera Inspirasi Pertiwi', 'Nasional', 'Komp. Timah BB. No. 71, Depok, Jawa Barat', 1),
(11, 'Dinas Cipta Karya, Tata Ruang dan Pertanahan ', 'Nasional', 'Jalan Taman Jatibaru No.1 Jakarta Pusat ', 1),
(12, 'Bimbingan dan Konsultasi Belajar Nurul Fikri', 'Nasional', 'Jl. Taman Marga Satwa No.6, RT.9/RW.5, Kel. Jati Padang, Kec. Ps. Minggu, RT.9/RW.5, Jati Padang, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540', 1),
(13, 'PT Bosnet Distribution Indonesia', 'Lokal', 'Jl. Tebet Barat Dalam Raya No.82, RT.17/RW.6, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810', 1),
(14, 'PT Difini Teknologi', 'Nasional', 'Jl. Tanah Abang II\r\nRT.1/RW.5, Petojo Sel.\r\nKecamatan Gambir\r\nKota Jakarta Pusat\r\nDaerah Khusus Ibukota Jakarta 10160', 1),
(15, 'PT Pentasada Andalan Kelola', 'Nasional', 'Sona Topas Tower 5A Floor, Jl. Jend Sudirman 26, RT.4/RW.2, Kuningan, Karet, Jakarta, Daerah Khusus Ibukota Jakarta, Jakarta Pusat, DKI Jakarta, 12920, Indonesia', 1),
(16, 'PT. Digital Otomotif Indonesia (garasi.id)', 'Nasional', 'Jl. KS Tubun IIC no.8', 1),
(17, 'PT. Integrasi Logistik Cipta Solusi', 'Nasional', 'Jalan Laksamana Yos Sudarso No.23 - 24, RT.16/RW.6, Kb. Bawang, Jakarta Utara, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14320', 1),
(18, 'Badan Pengawas Tenaga Nuklir', 'Nasional', 'Jl. Gajah Mada no. 8, Jakarta Pusat 10120 DKI Jakarta', 1),
(19, 'PT Testing', 'Nasional', '', 1),
(20, 'PT Testing', 'Lokal', '', 1),
(21, 'PT. Fore Coffee Indonesia', 'Nasional', 'Jl. Jend. Sudirman No.Kav 25, Kuningan, Karet, Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12920', 1),
(22, 'PT Electronic Data Interchange Indonesia', 'Nasional', 'Wisma SMR 10th & 3rd Floor, Jl. Yos Sudarso Kav. 89, Jakarta Utara', 1),
(23, 'Dinas Pendidikan DKI Jakarta', 'Nasional', 'Jalan Gatot Subroto No. Kav. 40-41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_alumni`
--

CREATE TABLE `jawaban_alumni` (
  `id` int(11) NOT NULL,
  `pertanyaanID` int(11) NOT NULL,
  `pertanyaanSkalaID` int(11) DEFAULT NULL,
  `jawaban` text NOT NULL,
  `tambahanJawaban` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `alumniID` int(11) NOT NULL,
  `notifID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_alumni`
--

INSERT INTO `jawaban_alumni` (`id`, `pertanyaanID`, `pertanyaanSkalaID`, `jawaban`, `tambahanJawaban`, `alumniID`, `notifID`) VALUES
(1, 1, NULL, '0 bulan (setelah lulus langsung diterima)', 'tidak', 10, 1),
(2, 2, NULL, 'Ya', 'tidak', 10, 1),
(3, 3, NULL, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 'tidak', 10, 1),
(4, 4, NULL, '6 atau lebih', 'tidak', 10, 1),
(5, 5, NULL, '5', 'tidak', 10, 1),
(6, 6, NULL, '3', 'tidak', 10, 1),
(7, 7, NULL, 'Tingkat yang Sama', 'tidak', 10, 1),
(8, 8, NULL, 'Ada', 'tidak', 10, 1),
(9, 8, NULL, 'stack teknologi yang digunakan tida secara spesifik di ajarkan di kuliah', 'ya', 10, 1),
(10, 9, NULL, '8 Semester', 'tidak', 10, 1),
(11, 10, NULL, '6 bulan', 'tidak', 10, 1),
(12, 11, NULL, 'Ya', 'tidak', 10, 1),
(13, 11, NULL, 'ICACSIS 2019', 'ya', 10, 1),
(14, 12, 1, 'Besar ', 'tidak', 10, 1),
(15, 12, 2, 'Cukup Besar ', 'tidak', 10, 1),
(16, 12, 3, 'Kurang', 'tidak', 10, 1),
(17, 12, 4, 'Kurang', 'tidak', 10, 1),
(18, 12, 5, 'Cukup Besar ', 'tidak', 10, 1),
(19, 12, 6, 'Cukup Besar ', 'tidak', 10, 1),
(20, 12, 7, 'Kurang', 'tidak', 10, 1),
(21, 13, NULL, 'S2', 'tidak', 10, 1),
(22, 16, NULL, 'Short Course', 'tidak', 10, 1),
(23, 16, NULL, 'coursera', 'ya', 10, 1),
(24, 17, NULL, 'SCRUM Development System, React Native, RESTful API, Pengantar UI/IX dengan pendekatan terkini, Etika Profesi', 'tidak', 10, 1),
(25, 26, NULL, 'Dosennya kurang banyak, kurang up to date dengan dunia industri teknologi. Arahin mahasiswanya magang di startup/perusahaan kalo niat jadi programmer. Relasi nya juga kurang mungkin karena masih baru. ', 'tidak', 10, 1),
(26, 1, NULL, '0 bulan (setelah lulus langsung diterima)', 'tidak', 13, 2),
(27, 2, NULL, 'Ya', 'tidak', 13, 2),
(28, 3, NULL, 'Mencari lewat internet/iklan online/milis', 'tidak', 13, 2),
(29, 4, NULL, '1', 'tidak', 13, 2),
(30, 5, NULL, '2', 'tidak', 13, 2),
(31, 6, NULL, '2', 'tidak', 13, 2),
(32, 7, NULL, 'Tingkat yang Sama', 'tidak', 13, 2),
(33, 8, NULL, 'Tidak Ada', 'tidak', 13, 2),
(34, 9, NULL, '10', 'tidak', 13, 2),
(35, 10, NULL, '> 12 bulan', 'tidak', 13, 2),
(36, 11, NULL, 'Tidak', 'tidak', 13, 2),
(37, 12, 1, 'Besar ', 'tidak', 13, 2),
(38, 12, 2, 'Kurang', 'tidak', 13, 2),
(39, 12, 3, 'Besar ', 'tidak', 13, 2),
(40, 12, 4, 'Kurang', 'tidak', 13, 2),
(41, 12, 5, 'Besar ', 'tidak', 13, 2),
(42, 12, 6, 'Cukup Besar ', 'tidak', 13, 2),
(43, 12, 7, 'Cukup Besar ', 'tidak', 13, 2),
(44, 16, NULL, 'Belum Ada', 'tidak', 13, 2),
(45, 17, NULL, 'Algoritma dan Dasar Pemrograman', 'tidak', 13, 2),
(46, 18, NULL, 'Sertifikasi Kompetensi Junior Programmer', 'tidak', 13, 2),
(47, 19, NULL, 'Lembaga Sertifikasi Profesi Telematika', 'tidak', 13, 2),
(48, 26, NULL, 'materi pembelajaran / kurikulumnya lebih menyesuaikan teknologi yang sedang dipakai di dunia kerja', 'tidak', 13, 2),
(49, 1, NULL, '0 bulan (setelah lulus langsung diterima)', 'tidak', 15, 3),
(50, 2, NULL, 'Ya', 'tidak', 15, 3),
(51, 3, NULL, 'Lainnya :', 'tidak', 15, 3),
(52, 3, NULL, 'dari whatsapp', 'ya', 15, 3),
(53, 4, NULL, '1', 'tidak', 15, 3),
(54, 5, NULL, '1', 'tidak', 15, 3),
(55, 6, NULL, '1', 'tidak', 15, 3),
(56, 7, NULL, 'Tidak Perlu Pendidikan Tinggi', 'tidak', 15, 3),
(57, 8, NULL, 'Ada', 'tidak', 15, 3),
(58, 8, NULL, 'pasti ada', 'ya', 15, 3),
(59, 9, NULL, '10 semester', 'tidak', 15, 3),
(60, 10, NULL, '10 bulan', 'tidak', 15, 3),
(61, 11, NULL, 'Tidak', 'tidak', 15, 3),
(62, 12, 1, 'Cukup Besar ', 'tidak', 15, 3),
(63, 12, 2, 'Cukup Besar ', 'tidak', 15, 3),
(64, 12, 3, 'Besar ', 'tidak', 15, 3),
(65, 12, 4, 'Besar ', 'tidak', 15, 3),
(66, 12, 5, 'Besar ', 'tidak', 15, 3),
(67, 12, 6, 'Besar ', 'tidak', 15, 3),
(68, 12, 7, 'Cukup Besar ', 'tidak', 15, 3),
(69, 16, NULL, 'Belum Ada', 'tidak', 15, 3),
(70, 17, NULL, 'logika pemrograman', 'tidak', 15, 3),
(71, 1, NULL, '1 bulan', 'tidak', 4, 4),
(72, 2, NULL, 'Ya', 'tidak', 4, 4),
(73, 3, NULL, 'Mencari lewat internet/iklan online/milis', 'tidak', 4, 4),
(74, 3, NULL, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 'tidak', 4, 4),
(75, 4, NULL, '5', 'tidak', 4, 4),
(76, 5, NULL, '3', 'tidak', 4, 4),
(77, 6, NULL, '3', 'tidak', 4, 4),
(78, 7, NULL, 'Tingkat yang Sama', 'tidak', 4, 4),
(79, 8, NULL, 'Tidak Ada', 'tidak', 4, 4),
(80, 9, NULL, 'S1 8 semester', 'tidak', 4, 4),
(81, 10, NULL, '4 bulan', 'tidak', 4, 4),
(82, 11, NULL, 'Tidak', 'tidak', 4, 4),
(83, 12, 1, 'Sangat Besar', 'tidak', 4, 4),
(84, 12, 2, 'Besar ', 'tidak', 4, 4),
(85, 12, 3, 'Sangat Besar', 'tidak', 4, 4),
(86, 12, 4, 'Sangat Besar', 'tidak', 4, 4),
(87, 12, 5, 'Sangat Besar', 'tidak', 4, 4),
(88, 12, 6, 'Sangat Besar', 'tidak', 4, 4),
(89, 12, 7, 'Sangat Besar', 'tidak', 4, 4),
(90, 16, NULL, 'Belum Ada', 'tidak', 4, 4),
(91, 17, NULL, 'Web programming, OOP, algoritma, etc', 'tidak', 4, 4),
(92, 18, NULL, 'Tidak', 'tidak', 4, 4),
(93, 19, NULL, 'Group2 programmer yg suka mengadakan pertemuan untuk diskusi', 'tidak', 4, 4),
(94, 20, 8, '4', 'tidak', 4, 4),
(95, 20, 9, '3', 'tidak', 4, 4),
(96, 20, 10, '3', 'tidak', 4, 4),
(97, 20, 11, '3', 'tidak', 4, 4),
(98, 20, 12, '5', 'tidak', 4, 4),
(99, 20, 13, '4', 'tidak', 4, 4),
(100, 20, 14, '4', 'tidak', 4, 4),
(101, 20, 15, '3', 'tidak', 4, 4),
(102, 20, 16, '3', 'tidak', 4, 4),
(103, 20, 17, '3', 'tidak', 4, 4),
(104, 20, 18, '3', 'tidak', 4, 4),
(105, 20, 19, '3', 'tidak', 4, 4),
(106, 20, 20, '3', 'tidak', 4, 4),
(107, 20, 21, '4', 'tidak', 4, 4),
(108, 20, 22, '3', 'tidak', 4, 4),
(109, 20, 23, '2', 'tidak', 4, 4),
(110, 20, 24, '3', 'tidak', 4, 4),
(111, 20, 25, '4', 'tidak', 4, 4),
(112, 20, 26, '4', 'tidak', 4, 4),
(113, 20, 27, '4', 'tidak', 4, 4),
(114, 20, 28, '3', 'tidak', 4, 4),
(115, 20, 29, '3', 'tidak', 4, 4),
(116, 20, 30, '3', 'tidak', 4, 4),
(117, 20, 31, '3', 'tidak', 4, 4),
(118, 20, 32, '3', 'tidak', 4, 4),
(119, 20, 33, '3', 'tidak', 4, 4),
(120, 20, 34, '3', 'tidak', 4, 4),
(121, 20, 35, '4', 'tidak', 4, 4),
(122, 20, 36, '5', 'tidak', 4, 4),
(123, 1, NULL, '5 bulan', 'tidak', 25, 6),
(124, 2, NULL, 'Ya', 'tidak', 25, 6),
(125, 3, NULL, 'Mencari lewat internet/iklan online/milis', 'tidak', 25, 6),
(126, 4, NULL, '50-100', 'tidak', 25, 6),
(127, 5, NULL, '5', 'tidak', 25, 6),
(128, 6, NULL, '3', 'tidak', 25, 6),
(129, 7, NULL, 'Tingkat yang Sama', 'tidak', 25, 6),
(130, 8, NULL, 'Ada', 'tidak', 25, 6),
(131, 9, NULL, '9 Semester', 'tidak', 25, 6),
(132, 10, NULL, '> 12 bulan', 'tidak', 25, 6),
(133, 11, NULL, 'Ya', 'tidak', 25, 6),
(134, 11, NULL, 'abstrak dipukblikasikan pada jkoma (jurnal ilmu komputer dan aplikasi) http://journal.unj.ac.id/unj/index.php/jkoma/article/view/6496', 'ya', 25, 6),
(135, 12, 1, 'Besar ', 'tidak', 25, 6),
(136, 12, 2, 'Besar ', 'tidak', 25, 6),
(137, 12, 3, 'Sangat Besar', 'tidak', 25, 6),
(138, 12, 4, 'Sangat Besar', 'tidak', 25, 6),
(139, 12, 5, 'Sangat Besar', 'tidak', 25, 6),
(140, 12, 6, 'Besar ', 'tidak', 25, 6),
(141, 12, 7, 'Sangat Besar', 'tidak', 25, 6),
(142, 16, NULL, 'Belum Ada', 'tidak', 25, 6),
(143, 17, NULL, 'web development', 'tidak', 25, 6),
(144, 18, NULL, '-', 'tidak', 25, 6),
(145, 19, NULL, '-', 'tidak', 25, 6),
(146, 20, 8, '4', 'tidak', 25, 6),
(147, 20, 9, '4', 'tidak', 25, 6),
(148, 20, 10, '4', 'tidak', 25, 6),
(149, 20, 11, '5', 'tidak', 25, 6),
(150, 20, 12, '5', 'tidak', 25, 6),
(151, 20, 13, '5', 'tidak', 25, 6),
(152, 20, 14, '5', 'tidak', 25, 6),
(153, 20, 15, '5', 'tidak', 25, 6),
(154, 20, 16, '5', 'tidak', 25, 6),
(155, 20, 17, '5', 'tidak', 25, 6),
(156, 20, 18, '5', 'tidak', 25, 6),
(157, 20, 19, '5', 'tidak', 25, 6),
(158, 20, 20, '5', 'tidak', 25, 6),
(159, 20, 21, '5', 'tidak', 25, 6),
(160, 20, 22, '5', 'tidak', 25, 6),
(161, 20, 23, '5', 'tidak', 25, 6),
(162, 20, 24, '5', 'tidak', 25, 6),
(163, 20, 25, '5', 'tidak', 25, 6),
(164, 20, 26, '5', 'tidak', 25, 6),
(165, 20, 27, '5', 'tidak', 25, 6),
(166, 20, 28, '5', 'tidak', 25, 6),
(167, 20, 29, '5', 'tidak', 25, 6),
(168, 20, 30, '5', 'tidak', 25, 6),
(169, 20, 31, '5', 'tidak', 25, 6),
(170, 20, 32, '5', 'tidak', 25, 6),
(171, 20, 33, '5', 'tidak', 25, 6),
(172, 20, 34, '4', 'tidak', 25, 6),
(173, 20, 35, '4', 'tidak', 25, 6),
(174, 20, 36, '5', 'tidak', 25, 6),
(175, 26, NULL, 'saran saya, mahasiswa diikutsertakan dalam project untuk mengetahui gambaran kerja serta juga dapat meningkatkan skill problem solving.', 'tidak', 25, 6),
(176, 1, NULL, '0 bulan (setelah lulus langsung diterima)', 'tidak', 8, 9),
(177, 2, NULL, 'Ya', 'tidak', 8, 9),
(178, 3, NULL, 'Dihubungi oleh perusahaan', 'tidak', 8, 9),
(179, 4, NULL, '0', 'tidak', 8, 9),
(180, 6, NULL, '4', 'tidak', 8, 9),
(181, 7, NULL, 'Tingkat yang Sama', 'tidak', 8, 9),
(182, 8, NULL, 'Ada', 'tidak', 8, 9),
(183, 8, NULL, 'Menyesuaikan dengan perkembangan bahasa pemrograman baru', 'ya', 8, 9),
(184, 9, NULL, '8 semester', 'tidak', 8, 9),
(185, 10, NULL, '3 bulan', 'tidak', 8, 9),
(186, 11, NULL, 'Ya', 'tidak', 8, 9),
(187, 11, NULL, 'unj', 'ya', 8, 9),
(188, 12, 1, 'Cukup Besar ', 'tidak', 8, 9),
(189, 12, 2, 'Besar ', 'tidak', 8, 9),
(190, 12, 3, 'Sangat Besar', 'tidak', 8, 9),
(191, 12, 4, 'Sangat Besar', 'tidak', 8, 9),
(192, 12, 5, 'Besar ', 'tidak', 8, 9),
(193, 12, 6, 'Sangat Besar', 'tidak', 8, 9),
(194, 12, 7, 'Cukup Besar ', 'tidak', 8, 9),
(195, 16, NULL, 'Belum Ada', 'tidak', 8, 9),
(196, 17, NULL, 'dasar dasar pemrograman ', 'tidak', 8, 9),
(197, 20, 8, '5', 'tidak', 8, 9),
(198, 20, 9, '3', 'tidak', 8, 9),
(199, 20, 10, '3', 'tidak', 8, 9),
(200, 20, 11, '4', 'tidak', 8, 9),
(201, 20, 12, '4', 'tidak', 8, 9),
(202, 20, 13, '5', 'tidak', 8, 9),
(203, 20, 14, '5', 'tidak', 8, 9),
(204, 20, 15, '4', 'tidak', 8, 9),
(205, 20, 16, '4', 'tidak', 8, 9),
(206, 20, 17, '3', 'tidak', 8, 9),
(207, 20, 18, '5', 'tidak', 8, 9),
(208, 20, 19, '4', 'tidak', 8, 9),
(209, 20, 20, '5', 'tidak', 8, 9),
(210, 20, 21, '3', 'tidak', 8, 9),
(211, 20, 22, '5', 'tidak', 8, 9),
(212, 20, 23, '3', 'tidak', 8, 9),
(213, 20, 24, '4', 'tidak', 8, 9),
(214, 20, 25, '4', 'tidak', 8, 9),
(215, 20, 26, '4', 'tidak', 8, 9),
(216, 20, 27, '4', 'tidak', 8, 9),
(217, 20, 28, '4', 'tidak', 8, 9),
(218, 20, 29, '4', 'tidak', 8, 9),
(219, 20, 30, '3', 'tidak', 8, 9),
(220, 20, 31, '5', 'tidak', 8, 9),
(221, 20, 32, '4', 'tidak', 8, 9),
(222, 20, 33, '4', 'tidak', 8, 9),
(223, 20, 34, '4', 'tidak', 8, 9),
(224, 20, 35, '3', 'tidak', 8, 9),
(225, 20, 36, '4', 'tidak', 8, 9),
(226, 26, NULL, 'Diadakan workshop\" yg sesuai dengan perkembangan di dunia pekerjaan', 'tidak', 8, 9),
(227, 1, NULL, '5 bulan', 'tidak', 29, 10),
(228, 2, NULL, 'Ya', 'tidak', 29, 10),
(229, 3, NULL, 'Mencari lewat internet/iklan online/milis', 'tidak', 29, 10),
(230, 4, NULL, '20', 'tidak', 29, 10),
(231, 5, NULL, '10', 'tidak', 29, 10),
(232, 6, NULL, '10', 'tidak', 29, 10),
(233, 7, NULL, 'Tingkat yang Sama', 'tidak', 29, 10),
(234, 8, NULL, 'Tidak Ada', 'tidak', 29, 10),
(235, 9, NULL, '8', 'tidak', 29, 10),
(236, 10, NULL, '6 bulan', 'tidak', 29, 10),
(237, 11, NULL, 'Tidak', 'tidak', 29, 10),
(238, 12, 1, 'Besar ', 'tidak', 29, 10),
(239, 12, 2, 'Cukup Besar ', 'tidak', 29, 10),
(240, 12, 3, 'Cukup Besar ', 'tidak', 29, 10),
(241, 12, 4, 'Kurang', 'tidak', 29, 10),
(242, 12, 5, 'Cukup Besar ', 'tidak', 29, 10),
(243, 12, 6, 'Kurang', 'tidak', 29, 10),
(244, 12, 7, 'Besar ', 'tidak', 29, 10),
(245, 13, NULL, 'S2', 'tidak', 29, 10),
(246, 15, NULL, 'Tidak', 'tidak', 29, 10),
(247, 16, NULL, 'Belum Ada', 'tidak', 29, 10),
(248, 17, NULL, 'Project Management', 'tidak', 29, 10),
(249, 18, NULL, 'Tidak Pernah', 'tidak', 29, 10),
(250, 19, NULL, 'Tidak Ada', 'tidak', 29, 10),
(251, 26, NULL, 'Lebih ditingkatkan lagi untuk Praktek Lapangan', 'tidak', 29, 10),
(252, 1, NULL, '1 bulan', 'tidak', 34, 11),
(253, 2, NULL, 'Tidak', 'tidak', 34, 11),
(254, 2, NULL, 'Awalnya tawarannya sama, bidang awal mengerjakan website namun semakin lama tidak ada hububgannya', 'ya', 34, 11),
(255, 3, NULL, 'Memeroleh informasi dari pusat pengembangan karir fakultas/universitas', 'tidak', 34, 11),
(256, 4, NULL, '10', 'tidak', 34, 11),
(257, 5, NULL, '10', 'tidak', 34, 11),
(258, 6, NULL, '10', 'tidak', 34, 11),
(259, 7, NULL, 'Tingkat yang Sama', 'tidak', 34, 11),
(260, 8, NULL, 'Tidak Ada', 'tidak', 34, 11),
(261, 9, NULL, '9 Semester', 'tidak', 34, 11),
(262, 10, NULL, '6 bulan', 'tidak', 34, 11),
(263, 11, NULL, 'Ya', 'tidak', 34, 11),
(264, 12, 1, 'Besar ', 'tidak', 34, 11),
(265, 12, 2, 'Cukup Besar ', 'tidak', 34, 11),
(266, 12, 3, 'Kurang', 'tidak', 34, 11),
(267, 12, 4, 'Kurang', 'tidak', 34, 11),
(268, 12, 5, 'Kurang', 'tidak', 34, 11),
(269, 12, 6, 'Kurang', 'tidak', 34, 11),
(270, 12, 7, 'Besar ', 'tidak', 34, 11),
(271, 16, NULL, 'Short Course', 'tidak', 34, 11),
(272, 26, NULL, 'Perbanyak demonstrasi, praktek, dan kerjasama dengan lembaga yang berkaitan dengan IT', 'tidak', 34, 11);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pengguna`
--

CREATE TABLE `jawaban_pengguna` (
  `id` int(11) NOT NULL,
  `penggunaID` int(11) DEFAULT NULL,
  `pertanyaanID` int(11) NOT NULL,
  `pertanyaanSkalaID` int(11) DEFAULT NULL,
  `jawaban` text NOT NULL,
  `notifID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_pengguna`
--

INSERT INTO `jawaban_pengguna` (`id`, `penggunaID`, `pertanyaanID`, `pertanyaanSkalaID`, `jawaban`, `notifID`) VALUES
(1, 1, 27, 37, 'Sangat Baik', 5),
(2, 1, 27, 38, 'Baik', 5),
(3, 1, 27, 39, 'Baik', 5),
(4, 1, 27, 40, 'Sangat Baik', 5),
(5, 1, 27, 41, 'Sangat Baik', 5),
(6, 1, 27, 42, 'Sangat Baik', 5),
(7, 1, 27, 43, 'Sangat Baik', 5),
(8, 1, 28, NULL, 'Terus belajar!', 5),
(9, 2, 27, 37, 'Sangat Baik', 7),
(10, 2, 27, 38, 'Sangat Baik', 7),
(11, 2, 27, 39, 'Cukup', 7),
(12, 2, 27, 40, 'Baik', 7),
(13, 2, 27, 41, 'Baik', 7),
(14, 2, 27, 42, 'Sangat Baik', 7),
(15, 2, 27, 43, 'Baik', 7),
(16, 2, 28, NULL, 'perbanyak belajar bahasa inggris. malu lulusan IT tapi inggrisnya jelek', 7);

-- --------------------------------------------------------

--
-- Table structure for table `koorprodi`
--

CREATE TABLE `koorprodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(11) NOT NULL,
  `customID` varchar(50) NOT NULL,
  `nama_kuesioner` varchar(255) NOT NULL,
  `responden` enum('alumni','pengguna') NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
  `prodiID` int(11) NOT NULL,
  `jenisKuesionerPengguna` enum('isian','ganda','pilihan','skala') DEFAULT NULL,
  `isDelete` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `customID`, `nama_kuesioner`, `responden`, `tanggal_dibuat`, `status`, `prodiID`, `jenisKuesionerPengguna`, `isDelete`) VALUES
(1, '', 'Pekerjaan', 'alumni', '2020-01-02 14:21:34', 'aktif', 1, NULL, 'no'),
(2, '', 'Pendidikan', 'alumni', '2020-01-02 14:21:34', 'aktif', 1, NULL, 'no'),
(3, 'XYVTYNTP', 'Kompetensi', 'alumni', '2020-01-03 00:31:34', 'aktif', 1, NULL, 'no'),
(4, '5WC677KY', 'Wirausaha', 'alumni', '2020-01-03 00:38:51', 'aktif', 1, NULL, 'no'),
(5, 'YWQBBFB8', 'Saran Masukan', 'alumni', '2020-01-03 00:43:04', 'aktif', 1, NULL, 'no'),
(6, 'T4PMPD5K', 'Kompetensi', 'pengguna', '2020-01-03 00:49:20', 'aktif', 1, 'skala', 'no'),
(7, 'W2JGSNNT', 'Saran Masukan', 'pengguna', '2020-01-03 00:51:13', 'aktif', 1, '', 'no'),
(8, '', 'Pekerjaan', 'alumni', '2020-01-03 01:16:36', 'aktif', 3, NULL, 'no'),
(9, '', 'Pendidikan', 'alumni', '2020-01-03 01:16:36', 'aktif', 3, NULL, 'no'),
(10, '3B6PFYSX', 'Kompetensi', 'pengguna', '2020-01-03 01:13:14', 'aktif', 3, 'skala', 'no'),
(11, '3C87SKF6', 'Saran Masukan', 'pengguna', '2020-01-03 01:13:15', 'aktif', 3, 'isian', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `notif_kuesioner`
--

CREATE TABLE `notif_kuesioner` (
  `id` int(11) NOT NULL,
  `respondenID` int(11) DEFAULT NULL,
  `jenis_kuesioner` enum('alumni','pengguna') NOT NULL,
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `timestamp` varchar(100) NOT NULL,
  `prodiID` int(11) NOT NULL,
  `customID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif_kuesioner`
--

INSERT INTO `notif_kuesioner` (`id`, `respondenID`, `jenis_kuesioner`, `new`, `timestamp`, `prodiID`, `customID`) VALUES
(1, 10, 'alumni', '0', '11-01-2020', 1, 'XP842RK6'),
(2, 13, 'alumni', '0', '11-01-2020', 1, 'V4C7DGPP'),
(3, 15, 'alumni', '0', '12-01-2020', 1, 'QB69X2Z7'),
(4, 4, 'alumni', '0', '13-01-2020', 1, 'YKF8XCHK'),
(5, 1, 'pengguna', '0', '13-01-2020', 1, 'DT8QCF7B'),
(6, 25, 'alumni', '0', '13-01-2020', 1, 'SDM2Y635'),
(7, 2, 'pengguna', '0', '13-01-2020', 1, '5XNXDMBN'),
(9, 8, 'alumni', '0', '13-01-2020', 1, 'ZCRCGRK5'),
(10, 29, 'alumni', '0', '13-01-2020', 1, 'TSJVZ8SV'),
(11, 34, 'alumni', '0', '13-01-2020', 1, 'VX9BH997');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `posisi` varchar(225) DEFAULT NULL,
  `gaji` varchar(225) DEFAULT NULL,
  `periode_kerja` varchar(100) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_instansi` int(11) NOT NULL,
  `firstPekerjaan` enum('yes','no') DEFAULT NULL,
  `isiPekerjaan` varchar(50) DEFAULT NULL,
  `seenPengguna` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `posisi`, `gaji`, `periode_kerja`, `profil`, `id_alumni`, `id_pengguna`, `id_instansi`, `firstPekerjaan`, `isiPekerjaan`, `seenPengguna`) VALUES
(1, 'PHP Engineer', '4000000', '', '', 1, NULL, 1, 'yes', NULL, '0'),
(2, 'Software Engineer', NULL, '', '', 1, NULL, 2, 'no', NULL, '1'),
(3, 'Front End Developer', '6000000', '', '', 2, NULL, 3, 'yes', NULL, '0'),
(4, 'Asisten Wakil 1 DPD R1', '4300000', '', '', 3, NULL, 4, 'yes', NULL, '0'),
(5, 'Front End Developer', '', '', '', 4, NULL, 5, 'yes', NULL, '0'),
(6, 'Java Pega Programmer', '', '', '', 5, NULL, 6, 'yes', NULL, '0'),
(7, 'Web Developer', '5000000', '', '', 6, NULL, 7, 'yes', NULL, '0'),
(8, 'IT Developer', '', '', '', 7, NULL, 8, 'yes', NULL, '0'),
(9, 'Frontend Developer', '7500000', 'Agustus 2017-November 2019', 'Programmer', 8, NULL, 5, 'yes', 'sudah', '0'),
(10, 'IT Bisnis', '6200000', '', '', 9, NULL, 9, 'yes', NULL, '0'),
(11, 'Mobile Developer', '9000000', 'Oktober 2019-Tidak ada batasan waktu', 'Programmer', 10, 1, 10, 'yes', 'sudah', '1'),
(12, 'Penunjang Juru Ukur', '5000000', '22 April 2019-Sekarang', 'Lainnya', 36, NULL, 11, 'yes', 'sudah', '0'),
(13, 'Staff IT dan Pengolahan Data', '4350000', '-', 'Programmer', 13, NULL, 12, 'yes', 'sudah', '0'),
(14, 'Software Developer', '6000000', '-', 'Programmer', 13, NULL, 13, 'no', 'sudah', '0'),
(15, 'Fullstack Developer', '6000000', '-', 'Programmer', 15, 2, 14, 'yes', 'sudah', '1'),
(16, 'Front End Developer', '4000000', 'April, 2018-Maret, 2019', 'Programmer', 37, NULL, 15, 'yes', 'sudah', '0'),
(17, 'Software Developer Engineer', '9500000', 'Agustus 2019-Sekarang', 'Programmer', 4, NULL, 16, 'no', 'sudah', '0'),
(18, 'Staff Web Developer', '7000000', 'Agustus 2018-Sekarang', 'Programmer', 25, NULL, 17, 'yes', 'sudah', '0'),
(19, 'Analis Sistem Informasi', '5800000', '01 Maret 2019-saat ini', 'Lainnya', 21, NULL, 18, 'yes', 'sudah', '0'),
(20, 'Frontend Developer', '9500000', 'November 2019-Sekarang', 'Programmer', 8, NULL, 21, 'no', 'sudah', '0'),
(21, 'Technical Writer', '5000000', '2019-sekarang', 'Konsultan', 29, 3, 22, 'yes', 'sudah', '1'),
(22, 'KKI', '4267349', '2 Mei 2019-Sekarang', 'Pendidik', 34, 4, 23, 'yes', 'sudah', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `penggunaID` varchar(50) DEFAULT NULL,
  `pengguna_nama` varchar(225) DEFAULT NULL,
  `pengguna_email` varchar(150) DEFAULT NULL,
  `pengguna_telepon` varchar(50) DEFAULT NULL,
  `id_instansi` int(11) DEFAULT NULL,
  `divisi` varchar(255) DEFAULT NULL,
  `prodiID` int(11) NOT NULL,
  `isDelete` enum('yes','no') DEFAULT 'no',
  `tandai` enum('checked') DEFAULT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `penggunaID`, `pengguna_nama`, `pengguna_email`, `pengguna_telepon`, `id_instansi`, `divisi`, `prodiID`, `isDelete`, `tandai`, `seen`) VALUES
(1, 'pkfTpPjZdKkBZTHRHnmFy73xvlg8fT-dmYwx', 'Abdullah Izzudiin Alqassam', 'abdullahizzuddiin@gmail.com', '+6287878458371', 10, 'Engineering', 1, 'no', 'checked', '1'),
(2, 'Mb8lBHsTrCtC2DFfpBcVpKHysoCQoF63p-vm', 'Wendy', 'wendy@difinite.com', NULL, 14, 'Developer', 1, 'no', NULL, '1'),
(3, 'ZSJmdZw4zypQiz8dobo5Xvs82fgV9t9zqnnq', 'Satri Nugraha', 'satri.nugraha@gmail.com', '081213893731', 22, 'Solution Development Government', 1, 'no', NULL, '1'),
(4, 'xehZ4z8fN7Ti-8iCDFXcyZekjfdFor6n5YmV', 'Ubaidilah', '', '', 23, 'Pendidik', 1, 'no', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jenis` enum('isian','pilihan','ganda','skala') NOT NULL,
  `inputBox` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `textarea` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `keterangan` varchar(255) DEFAULT NULL,
  `customID` varchar(50) NOT NULL,
  `kuesionerID` int(11) NOT NULL,
  `isDelete` enum('yes','no') NOT NULL DEFAULT 'no',
  `required` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `jenis`, `inputBox`, `textarea`, `keterangan`, `customID`, `kuesionerID`, `isDelete`, `required`) VALUES
(1, 'Masa tunggu Saudara dari kelulusan hingga mendapat pekerjaan pertama', 'pilihan', 'tidak', 'tidak', '', 'PR1577973642', 1, 'no', 'no'),
(2, 'Apakah pekerjaan Saudara saat ini berhubungan dengan bidang ilmu yang Saudara pelajari di Perguruan Tinggi?   ', 'pilihan', 'ya', 'tidak', 'Jelaskan alasan jawaban Saudara ', 'PR1577973956', 1, 'no', 'no'),
(3, 'Bagaimana anda mencari pekerjaan tersebut?', 'ganda', 'ya', 'tidak', 'Jawaban bisa lebih dari satu', 'PR1577974411', 1, 'no', 'no'),
(4, 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?', 'isian', 'tidak', 'tidak', 'perusahaan/instansi/institusi', 'PR1577974549', 1, 'no', 'no'),
(5, 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?', 'isian', 'tidak', 'tidak', 'perusahaan/instansi/institusi', 'PR1577974568', 1, 'no', 'no'),
(6, 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', 'isian', 'tidak', 'tidak', 'perusahaan/instansi/institusi ', 'PR1577974589', 1, 'no', 'no'),
(7, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', 'pilihan', 'tidak', 'tidak', '', 'PR1577974710', 1, 'no', 'no'),
(8, 'Adakah hambatan/kendala yang Saudara alami dalam menyesuaikan diri dengan pekerjaan?   ', 'pilihan', 'ya', 'tidak', 'Jelaskan alasan jawaban Saudara :', 'PR1577974811', 1, 'no', 'no'),
(9, 'Berapa lama masa studi/perkuliahan anda?', 'isian', 'tidak', 'tidak', 'Jawaban : S1 (7-14 Semester). Untuk S2 (3-8 semester)', 'PR1578010364', 2, 'no', 'yes'),
(10, 'Berapa lama penulisan skripsi anda?', 'pilihan', 'tidak', 'ya', '', 'PR1578010496', 2, 'no', 'yes'),
(11, 'Apakah anda mempublikasikan skripsi anda?', 'pilihan', 'ya', 'tidak', 'Jika ya tuliskan alamat/link tempat anda mempublikasin skripsi anda', 'PR1578010569', 2, 'no', 'yes'),
(12, 'Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?', 'skala', 'tidak', 'tidak', '', 'PR1578011019', 2, 'no', 'yes'),
(13, 'Setelah Saudara lulus dari UNJ, apakah Saudara melanjutkan pendidikan lagi?  Jika ya di tingkat mana Saudara melanjutkan pendidikan?', 'pilihan', 'tidak', 'tidak', '', 'PR1578011115', 2, 'no', 'no'),
(14, 'Dimana Saudara melanjutkan pendidikan? ', 'isian', 'tidak', 'tidak', 'Sebutkan nama perguruan tinggi dan program studinya', 'PR1578011204', 2, 'no', 'no'),
(15, 'Apakah S1 Anda linear dengan S2 ?', 'pilihan', 'tidak', 'tidak', '', 'PR1578011292', 2, 'no', 'no'),
(16, 'Setelah Saudara lulus dari UNJ, apakah Saudara meningkatkan kompetensi diri melalui ', 'pilihan', 'ya', 'tidak', 'Sebutkan nama dan lamanya', 'PR1578011428', 2, 'no', 'yes'),
(17, 'Pengetahuan apa yang Saudara butuhkan dari perkuliahan untuk menunjang pekerjaan Saudara saat ini? ', 'isian', 'tidak', 'tidak', '', 'PR1578011517', 3, 'no', 'no'),
(18, 'Pernahkah Saudara mengikuti tes Profesi di bidang tertentu yang mendukung pekerjaan Saudara saat ini? ', 'isian', 'tidak', 'tidak', 'Jika pernah mengikuti, sebutkan jenis tesnya!', 'PR1578011550', 3, 'no', 'no'),
(19, 'Adakah Organisasi Profesi yang Saudara ikuti? ', 'isian', 'tidak', 'tidak', 'Jika ada sebutkan nama organisasinya dan mulai tahun berapa!', 'PR1578011590', 3, 'no', 'no'),
(20, 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? *pertanyaan untuk alumni yang sudah lulus > 2 tahun', 'skala', 'tidak', 'tidak', '1 (Sangat Rendah)  - 5  (Sangat Tinggi) ', 'PR1578011879', 3, 'no', 'no'),
(21, 'Jika anda berwirausaha apa nama usaha yang didirikan?', 'isian', 'tidak', 'tidak', '', 'PR1578011947', 4, 'no', 'no'),
(22, 'Bergerak di bidang apa usaha anda?', 'isian', 'tidak', 'tidak', '', 'PR1578011959', 4, 'no', 'no'),
(23, 'Berapa lama usaha anda berdiri?', 'isian', 'tidak', 'tidak', 'Dalam bulan', 'PR1578011992', 4, 'no', 'no'),
(24, 'Berapa jumlah karyawan anda?', 'pilihan', 'tidak', 'tidak', '', 'PR1578012054', 4, 'no', 'no'),
(25, 'Berapa pendapatan dari usaha tersebut?', 'pilihan', 'tidak', 'tidak', '', 'PR1578012126', 4, 'no', 'no'),
(26, 'Saran Saudara untuk perbaikan Program Studi Ilmu Komputer', 'isian', 'tidak', 'ya', '', 'PR1578012203', 5, 'no', 'no'),
(27, 'Jenis Kemampuan', 'skala', 'tidak', 'tidak', NULL, 'PR1578012662', 6, 'no', 'yes'),
(28, 'Saran Bapak/Ibu untuk perbaikan lulusan Program Studi kami', 'isian', 'tidak', 'ya', NULL, 'PR1578012715', 7, 'no', 'no'),
(29, 'Jenis Kemampuan', 'skala', 'tidak', 'tidak', NULL, 'F55CRT5M', 10, 'no', 'no'),
(30, 'Saran Bapak/Ibu untuk perbaikan lulusan Program Studi kami', 'isian', 'tidak', 'ya', NULL, 'CRHBQPX6', 11, 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_skala`
--

CREATE TABLE `pertanyaan_skala` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `required` enum('yes','no') NOT NULL DEFAULT 'no',
  `pertanyaanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan_skala`
--

INSERT INTO `pertanyaan_skala` (`id`, `pertanyaan`, `required`, `pertanyaanID`) VALUES
(1, 'Perkuliahan', 'yes', 12),
(2, 'Demonstrasi', 'yes', 12),
(3, 'Partisipasi dalam proyek riset', 'yes', 12),
(4, 'Magang ', 'yes', 12),
(5, 'Praktikum', 'yes', 12),
(6, 'Kerja Lapangan', 'yes', 12),
(7, 'Diskusi', 'yes', 12),
(8, 'Pengetahuan di bidang atau disiplin ilmu anda', 'no', 20),
(9, 'Pengetahuan di luar bidang atau disiplin ilmu anda', 'no', 20),
(10, 'Pengetahuan umum', 'no', 20),
(11, 'Bahasa Inggris', 'no', 20),
(12, 'Ketrampilan internet', 'no', 20),
(13, 'Ketrampilan komputer', 'no', 20),
(14, 'Berpikir kritis', 'no', 20),
(15, 'Ketrampilan riset', 'no', 20),
(16, 'Kemampuan belajar', 'no', 20),
(17, 'Kemampuan berkomunikasi', 'no', 20),
(18, 'Bekerja di bawah tekanan', 'no', 20),
(19, 'Manajemen waktu', 'no', 20),
(20, 'Bekerja secara mandiri', 'no', 20),
(21, 'Bekerja dalam tim/bekerjasama dengan orang lain ', 'no', 20),
(22, 'Kemampuan dalam memecahkan masalah', 'no', 20),
(23, 'Negosiasi', 'no', 20),
(24, 'Kemampuan analisis', 'no', 20),
(25, 'Toleransi', 'no', 20),
(26, 'Kemampuan adaptasi', 'no', 20),
(27, 'Loyalitas', 'no', 20),
(28, 'Integritas', 'no', 20),
(29, 'Bekerja dengan orang yang berbeda budaya maupun latar belakang', 'no', 20),
(30, 'Kepemimpinan', 'no', 20),
(31, 'Kemampuan dalam memegang tanggung jawab', 'no', 20),
(32, 'Inisiatif', 'no', 20),
(33, 'Manajemen proyek/program', 'no', 20),
(34, 'Kemampuan untuk memresentasikan ide/produk/laporan ', 'no', 20),
(35, 'Kemampuan dalam menulis laporan, memo dan dokumen', 'no', 20),
(36, 'Kemampuan untuk terus belajar sepanjang hayat', 'no', 20),
(37, 'Integritas (etika dan moral) lulusan Program Studi kami', 'yes', 27),
(38, 'Keahlian berdasarkan bidang ilmu (profesionalisme) lulusan Program Studi kami', 'yes', 27),
(39, 'Kemampuan Bahasa Inggris lulusan Program Studi kami', 'yes', 27),
(40, 'Kemampuan penggunaan Teknologi Informasi lulusan Program Studi kami', 'yes', 27),
(41, 'Kemampuan Komunikasi lulusan Program Studi kami', 'yes', 27),
(42, 'Kemampuan Kerjasama tim lulusan Program Studi kami', 'yes', 27),
(43, 'Pengembangan diri lulusan Program Studi kami', 'yes', 27),
(44, 'Integritas (etika dan moral) lulusan Program Studi kami', 'no', 29),
(45, 'Keahlian berdasarkan bidang ilmu (profesionalisme) lulusan Program Studi kami', 'no', 29),
(46, 'Kemampuan Bahasa Inggris lulusan Program Studi kami', 'no', 29),
(47, 'Kemampuan penggunaan Teknologi Informasi lulusan Program Studi kami', 'no', 29),
(48, 'Kemampuan Komunikasi lulusan Program Studi kami', 'no', 29),
(49, 'Kemampuan Kerjasama tim lulusan Program Studi kami', 'no', 29),
(50, 'Pengembangan diri lulusan Program Studi kami', 'no', 29);

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_jawaban`
--

CREATE TABLE `pilihan_jawaban` (
  `id` int(11) NOT NULL,
  `pertanyaanID` int(11) NOT NULL,
  `pilihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan_jawaban`
--

INSERT INTO `pilihan_jawaban` (`id`, `pertanyaanID`, `pilihan`) VALUES
(1, 1, '0 bulan (setelah lulus langsung diterima)'),
(2, 1, '1 bulan'),
(3, 1, '2 bulan'),
(4, 1, '3 bulan'),
(5, 1, '4 bulan'),
(6, 1, '5 bulan'),
(7, 1, '6 bulan'),
(8, 1, '7 bulan'),
(9, 1, '8 bulan'),
(10, 1, '9 bulan'),
(11, 1, '10 bulan'),
(12, 1, '11 bulan'),
(13, 1, '12 bulan'),
(14, 1, '> 12 bulan'),
(15, 2, 'Ya'),
(16, 2, 'Tidak'),
(17, 3, 'Melalui iklan di koran/majalah, brosur '),
(18, 3, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada'),
(19, 3, 'Pergi ke bursa/pameran kerja'),
(20, 3, 'Mencari lewat internet/iklan online/milis'),
(21, 3, 'Dihubungi oleh perusahaan'),
(22, 3, 'Menghubungi Kemenakertrans'),
(23, 3, 'Menghubungi agen tenaga kerja komersial/swasta'),
(24, 3, 'Memeroleh informasi dari pusat pengembangan karir fakultas/universitas'),
(25, 3, 'Menghubungi kantor kemahasiswaan/hubungan alumni'),
(26, 3, ' Membangun jejaring (network) sejak masih kuliah'),
(27, 3, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)'),
(28, 3, ' Membangun bisnis sendiri'),
(29, 3, 'Melalui penempatan kerja atau magang'),
(30, 3, 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah'),
(31, 3, 'Lainnya :'),
(32, 7, 'Setingkat Lebih Tinggi'),
(33, 7, 'Tingkat yang Sama'),
(34, 7, 'Setingkat Lebih Rendah'),
(35, 7, 'Tidak Perlu Pendidikan Tinggi'),
(36, 8, 'Ada'),
(37, 8, 'Tidak Ada'),
(38, 10, '1 bulan'),
(39, 10, '2 bulan'),
(40, 10, '3 bulan'),
(41, 10, '4 bulan'),
(42, 10, '5 bulan'),
(43, 10, '6 bulan'),
(44, 10, '7 bulan'),
(45, 10, '8 bulan'),
(46, 10, '9 bulan'),
(47, 10, '10 bulan'),
(48, 10, '11 bulan'),
(49, 10, '12 bulan'),
(50, 10, '> 12 bulan'),
(51, 11, 'Ya'),
(52, 11, 'Tidak'),
(53, 13, 'S2'),
(54, 13, 'S3'),
(55, 15, 'Ya'),
(56, 15, 'Tidak'),
(57, 16, 'Penataran/Pelatihan'),
(58, 16, 'Short Course'),
(59, 16, 'Belum Ada'),
(60, 24, '1-10'),
(61, 24, '11-50'),
(62, 24, '51-100'),
(63, 24, '> 100'),
(64, 25, 'Rp 1 - 5 Juta'),
(65, 25, 'Rp 6 - 10 Juta'),
(66, 25, 'Rp 11 - 15 Juta'),
(67, 25, '> Rp  15 Juta');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `kode_prodi` varchar(50) NOT NULL,
  `fakultasID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`, `kode_prodi`, `fakultasID`) VALUES
(1, 'Ilmu Komputer', '', 1),
(2, 'Pendidikan Matematika', '', 1),
(3, 'Matematika', '', 1),
(7, 'Semua Prodi', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skala_nilai`
--

CREATE TABLE `skala_nilai` (
  `id` int(11) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `pertanyaanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skala_nilai`
--

INSERT INTO `skala_nilai` (`id`, `nilai`, `pertanyaanID`) VALUES
(1, 'Sangat Besar', 12),
(2, 'Besar ', 12),
(3, 'Cukup Besar ', 12),
(4, 'Kurang', 12),
(5, 'Tidak Sama Sekali', 12),
(6, '1', 20),
(7, '2', 20),
(8, '3', 20),
(9, '4', 20),
(10, '5', 20),
(11, 'Sangat Baik', 27),
(12, 'Baik', 27),
(13, 'Cukup', 27),
(14, 'Kurang', 27),
(15, 'Sangat Baik', 29),
(16, 'Baik', 29),
(17, 'Cukup', 29),
(18, 'Kurang', 29);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `prodiID` int(11) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userID`, `username`, `password`, `role`, `prodiID`, `status`) VALUES
(1, '', 'superadmin', 'superadmin', 'superadmin', 1, 'aktif'),
(2, '', 'admin', 'admin', 'admin', 1, 'aktif'),
(3, 'DOS0011026006', '0011026006', '0011026006', 'dosen', 1, 'aktif'),
(4, '', 'admin_mtk', 'admin_mtk', 'admin', 3, 'aktif'),
(5, 'ALU54321', '54321', '54321', 'alumni', 3, 'aktif'),
(6, 'ALU3145136217', '3145136217', '3145136217', 'alumni', 1, 'aktif'),
(7, 'ALU3145136218', '3145136218', '3145136218', 'alumni', 1, 'aktif'),
(8, 'ALU3145136208', '3145136208', '3145136208', 'alumni', 1, 'aktif'),
(9, 'ALU3145136211', '3145136211', '3145136211', 'alumni', 1, 'aktif'),
(10, 'ALU3145136223', '3145136223', '3145136223', 'alumni', 1, 'aktif'),
(11, 'ALU3145136197', '3145136197', '3145136197', 'alumni', 1, 'aktif'),
(12, 'ALU3145136212', '3145136212', '3145136212', 'alumni', 1, 'aktif'),
(13, 'ALU3145136196', '3145136196', 'silverlake10e', 'alumni', 1, 'aktif'),
(14, 'ALU3145136193', '3145136193', '3145136193', 'alumni', 1, 'aktif'),
(15, 'ALU3145153280', '3145153280', '3145153280', 'alumni', 1, 'aktif'),
(16, 'ALU3145141983', '3145141983', '3145141983', 'alumni', 1, 'aktif'),
(17, 'ALU3145141981', '3145141981', '3145141981', 'alumni', 1, 'aktif'),
(18, 'ALU3145141983', '3145141983', '3145141983', 'alumni', 1, 'aktif'),
(19, 'ALU3145141981', '3145141981', '3145141981', 'alumni', 1, 'aktif'),
(20, 'ALU3145141980', '3145141980', '3145141980', 'alumni', 1, 'aktif'),
(21, 'ALU3145140590', '3145140590', '3145140590', 'alumni', 1, 'aktif'),
(22, 'ALU3145136214', '3145136214', '3145136214', 'alumni', 1, 'aktif'),
(23, 'ALU3145136194', '3145136194', '3145136194', 'alumni', 1, 'aktif'),
(24, 'ALU3145136210', '3145136210', '3145136210', 'alumni', 1, 'aktif'),
(25, 'ALU3145136206', '3145136206', '3145136206', 'alumni', 1, 'aktif'),
(26, 'ALU3145136204', '3145136204', 'angkalima5', 'alumni', 1, 'aktif'),
(27, 'ALU3145136224', '3145136224', '3145136224', 'alumni', 1, 'aktif'),
(28, 'ALU3145136203', '3145136203', '3145136203', 'alumni', 1, 'aktif'),
(29, 'ALU3145136205', '3145136205', '3145136205', 'alumni', 1, 'aktif'),
(30, 'ALU3145136216', '3145136216', 'rahmiputri13', 'alumni', 1, 'aktif'),
(31, 'ALU3145136221', '3145136221', '3145136221', 'alumni', 1, 'aktif'),
(32, 'ALU3145136215', '3145136215', '3145136215', 'alumni', 1, 'aktif'),
(33, 'ALU3145140591', '3145140591', '3145140591', 'alumni', 1, 'aktif'),
(34, 'ALU3145143626', '3145143626', '3145143626', 'alumni', 1, 'aktif'),
(35, 'ALU3145143629', '3145143629', '3145143629', 'alumni', 1, 'aktif'),
(36, 'ALU3145140588', '3145140588', '3145140588', 'alumni', 1, 'aktif'),
(37, 'ALU3145140598', '3145140598', '3145140598', 'alumni', 1, 'aktif'),
(38, 'ALU3145140599', '3145140599', '3145140599', 'alumni', 1, 'aktif'),
(39, 'ALU3145143620', '3145143620', '3145143620', 'alumni', 1, 'aktif'),
(40, 'ALU3145140595', '3145140595', '3145140595', 'alumni', 1, 'aktif'),
(41, 'ALU3145140596', '3145140596', '3145140596', 'alumni', 1, 'aktif'),
(42, 'ALU3145141976', '3145141976', '3145141976', 'alumni', 1, 'aktif'),
(43, 'ALU3145141984', '3145141984', '3145141984', 'alumni', 1, 'aktif'),
(44, 'ALU3145143623', '3145143623', '3145143623', 'alumni', 1, 'aktif'),
(45, 'ALU54321', '54321', '54321', 'alumni', 1, 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_fk1` (`userID`);

--
-- Indexes for table `alumni_instansi`
--
ALTER TABLE `alumni_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita_alumni`
--
ALTER TABLE `berita_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_alumni`
--
ALTER TABLE `jawaban_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_pengguna`
--
ALTER TABLE `jawaban_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `koorprodi`
--
ALTER TABLE `koorprodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kuesioner_fk1` (`prodiID`);

--
-- Indexes for table `notif_kuesioner`
--
ALTER TABLE `notif_kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pekerjaan_fk1` (`id_alumni`),
  ADD KEY `pekerjaan_fk3` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_fk1` (`id_instansi`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_fk1` (`kuesionerID`);

--
-- Indexes for table `pertanyaan_skala`
--
ALTER TABLE `pertanyaan_skala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ps_fk1` (`pertanyaanID`);

--
-- Indexes for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pilihan_fk1` (`pertanyaanID`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skala_nilai`
--
ALTER TABLE `skala_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sn_fk1` (`pertanyaanID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk1` (`prodiID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `alumni_instansi`
--
ALTER TABLE `alumni_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berita_alumni`
--
ALTER TABLE `berita_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jawaban_alumni`
--
ALTER TABLE `jawaban_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `jawaban_pengguna`
--
ALTER TABLE `jawaban_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `koorprodi`
--
ALTER TABLE `koorprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notif_kuesioner`
--
ALTER TABLE `notif_kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pertanyaan_skala`
--
ALTER TABLE `pertanyaan_skala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skala_nilai`
--
ALTER TABLE `skala_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `kuesioner_fk1` FOREIGN KEY (`prodiID`) REFERENCES `prodi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD CONSTRAINT `pekerjaan_fk1` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_fk1` FOREIGN KEY (`kuesionerID`) REFERENCES `kuesioner` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan_skala`
--
ALTER TABLE `pertanyaan_skala`
  ADD CONSTRAINT `ps_fk1` FOREIGN KEY (`pertanyaanID`) REFERENCES `pertanyaan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  ADD CONSTRAINT `pilihan_fk1` FOREIGN KEY (`pertanyaanID`) REFERENCES `pertanyaan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `skala_nilai`
--
ALTER TABLE `skala_nilai`
  ADD CONSTRAINT `sn_fk1` FOREIGN KEY (`pertanyaanID`) REFERENCES `pertanyaan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_fk1` FOREIGN KEY (`prodiID`) REFERENCES `prodi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
