-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 04:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siluni-ts`
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
  `tahun_lulus` varchar(50) NOT NULL,
  `tanggal_lulus` date NOT NULL,
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

INSERT INTO `alumni` (`id`, `userID`, `nim`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `avatar`, `tahun_masuk`, `tahun_lulus`, `tanggal_lulus`, `ipk`, `toefl`, `pekerjaan`, `email`, `kuesioner`, `no_telepon`, `waktu_skripsi`, `tampil_ipk`, `tampil_pekerjaan`, `tampil_waktu_skripsi`, `status`, `prodiID`) VALUES
(35, 'ALU3145136196', '3145136196', 'Mikael Yurubeli', 'Laki-laki', 'Jakarta', '', ' Jalan Hikmah No 64, Cilangkap, Cipayung, Jakarta Timur', '', '2013', '2017', '0000-00-00', '3.56', '', '', '', '', '087875076738', '', 'yes', 'yes', 'yes', 'aktif', 1),
(55, 'ALU3145136217', '3145136217', 'M. Reyhan Fahlevi', 'Laki-laki', '', '', '', '', '2013', '2017', '0000-00-00', '3.84', NULL, '', '', '', '0877 8528 2705', '', 'yes', 'yes', 'yes', 'aktif', 1),
(56, 'ALU3145136218', '3145136218', 'Gregorius Andito H', 'Laki-laki', '', '', '', '', '2013', '2017', '0000-00-00', '3.72', NULL, '', '', '', '0878 8112 3212', '', 'yes', 'yes', 'yes', 'aktif', 1),
(57, 'ALU3145136208', '3145136208', 'Alitinia Prastiantari', 'Perempuan', '', '', '', '', '2013', '2017', '0000-00-00', '3.72', NULL, '', '', '', '08129142949', '', 'yes', 'yes', 'yes', 'aktif', 1),
(58, 'ALU3145136211', '3145136211', 'Tiara Amelia', 'Perempuan', '', '', '', '', '2013', '2017', '0000-00-00', '3.77', NULL, '', '', '', '081282003420', '', 'yes', 'yes', 'yes', 'aktif', 1),
(59, 'ALU3145136223', '3145136223', 'Agustinus Purimbaga', 'Laki-laki', '', '', '', '', '2013', '2017', '0000-00-00', '3.59', '', '', '', '', '081281011459', '', 'yes', 'yes', 'yes', 'aktif', 1),
(60, 'ALU3145136197', '3145136197', 'Muhammad Fachrizal', 'Laki-laki', '', '', '', '', '2013', '2017', '0000-00-00', '3.41', NULL, '', '', '', '085711402970', '', 'yes', 'yes', 'yes', 'aktif', 1),
(61, 'ALU3145136212', '3145136212', 'Anantassa Fitri Andini', 'Perempuan', '', '', '', '', '2013', '2017', '0000-00-00', '3.8', NULL, '', '', '', '081319508117', '', 'yes', 'yes', 'yes', 'aktif', 1),
(62, 'ALU3145136193', '3145136193', 'Hana Maulinda', 'Perempuan', '', '', '', '', '2013', '2017', '0000-00-00', '3.56', NULL, '', '', '', '081318400299', '', 'yes', 'yes', 'yes', 'aktif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_instansi`
--

CREATE TABLE `alumni_instansi` (
  `id` int(11) NOT NULL,
  `alumniID` int(11) NOT NULL,
  `instansiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_instansi`
--

INSERT INTO `alumni_instansi` (`id`, `alumniID`, `instansiID`) VALUES
(10, 45, 11),
(11, 46, 9),
(12, 46, 10),
(13, 47, 3),
(14, 48, 13),
(16, 50, 7),
(17, 51, 15),
(18, 52, 16),
(20, 53, 11),
(21, 54, 9),
(22, 55, 9),
(23, 55, 10),
(24, 56, 3),
(25, 57, 13),
(26, 58, 2),
(27, 59, 7),
(28, 60, 15),
(29, 61, 16),
(30, 35, 2),
(31, 62, 11),
(32, 64, 22),
(33, 64, 22),
(34, 55, 9),
(35, 55, 10),
(36, 56, 3),
(37, 57, 13),
(38, 58, 2),
(39, 59, 7),
(40, 60, 15),
(41, 61, 16),
(42, 35, 2),
(43, 62, 11),
(44, 55, 9),
(45, 55, 10),
(46, 56, 3),
(47, 57, 13),
(48, 58, 2),
(49, 59, 7),
(50, 60, 15),
(51, 61, 16),
(52, 35, 2),
(53, 62, 11),
(54, 64, 22),
(55, 65, 22),
(56, 65, 22),
(57, 65, 22),
(58, 66, 22),
(59, 67, 22);

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
(1, '<p>Yth. Alumni Ilmu Komputer FMIPA UNJ</p>\r\n<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi Ilmu Komputer. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>', '1575635288.png', 'alumni', 1),
(2, '<p style=\"text-align: justify;\"><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Bapak/Ibu yang terhormat, saat ini kami sedang melakukan&nbsp;</span><strong><em style=\"box-sizing: border-box; display: inline-block; transition: all 0.3s ease 0s; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\"><span style=\"box-sizing: border-box;\">Tracer Study</span></em></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;(penelusuran alumni)&nbsp;</span><strong><span style=\"box-sizing: border-box; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Program Studi Ilmu Komputer</span></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.</span></p>', '', 'pengguna', 1),
(11, '<p>Yth. Alumni 3 FMIPA UNJ</p>\r\n							<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi 3 Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni 3 UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>', '', 'alumni', 3),
(12, '<p style=\"text-align: justify;\"><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Bapak/Ibu yang terhormat, saat ini kami sedang melakukan&nbsp;</span><strong><em style=\"box-sizing: border-box; display: inline-block; transition: all 0.3s ease 0s; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\"><span style=\"box-sizing: border-box;\">Tracer Study</span></em></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;(penelusuran alumni)&nbsp;</span><strong><span style=\"box-sizing: border-box; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Program Studi 3 </span></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.</span></p>', '', 'pengguna', 3);

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
(1, 'Teknologi Informasi'),
(5, 'Website'),
(8, 'Jaringan'),
(9, 'Jaringan'),
(10, ''),
(11, 'Aplikasi'),
(12, ''),
(13, '');

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
(2, 'DOS0021018204', 'Aris Hadiyan Wijaksana', '0021018204', 'Laki-laki', '', '', 'default.png', 'aktif', 2, ''),
(3, 'DOS0011026006', 'Fariani Hermin Indiyah', '0011026006', 'Perempuan', 'fariani@gmail.com', '', 'default.png', 'aktif', 1, 'koorprodi'),
(6, 'DOS0015067705', 'Med Irzal', '0015067705', 'Laki-laki', '', '', '', 'aktif', 1, 'dosen'),
(7, 'DOS0015067706', 'dosen mtk 1', '0015067706', 'Laki-laki', 'test@mail.com', '081234567', '', 'aktif', 3, 'koorprodi');

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
(1, '', 'FMIPA'),
(2, '', 'FBS');

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
(2, 'PT Harmoni Solusi Bisnis', 'Nasional', 'Jl. Dempo I No.51, RT.4/RW.3, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120', 1),
(3, 'PT Kompas Media Nusantara', 'Nasional', 'Jl. Palmerah Sel. No.26-28, RT.4/RW.2, Gelora, Tanahabang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270', 1),
(7, 'PT Sinar Mas', 'Nasional', 'Sinar Mas Land Plaza, Tower I Lt. 9, Jl. MH Thamrin No. 51, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350', 1),
(9, 'PT Docotel Teknologi', 'Nasional', 'Jl. KH. Hasyim Ashari No.26, RT.1/RW.7, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130', 1),
(10, 'PT Tokopedia', '', ' lantai 52 Tokopedia Tower Ciputra World 2, Jl. Prof. DR. Satrio No.Kav. 11, RT.3/RW.3, Karet Semanggi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950', 1),
(11, 'PT Manulife Indonesia', 'Nasional', 'Menara Batavia Lantai 19, JL KH Mas Mansyur, Kav. 126, 10220, RT.3/RW.2, Karet Tengsin, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10240', 1),
(12, 'PT Digital Mind System', NULL, NULL, 1),
(13, 'DPD RI', NULL, NULL, 1),
(15, 'PT Imkahfa ', NULL, NULL, 1),
(16, 'PT GSI (United Tractor )', NULL, NULL, 1),
(17, 'PT  Sinar Mas', 'Nasional', NULL, 0),
(57, 'PT PLN Disjaya', 'Nasional', NULL, 1);

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
  `alumniID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_alumni`
--

INSERT INTO `jawaban_alumni` (`id`, `pertanyaanID`, `pertanyaanSkalaID`, `jawaban`, `tambahanJawaban`, `alumniID`) VALUES
(170, 59, NULL, '2 bulan', 'tidak', 35),
(171, 60, NULL, 'Ya', 'tidak', 35),
(172, 61, NULL, ' Mencari lewat internet/iklan online/milis ', 'tidak', 35),
(173, 62, NULL, '5 perusahaan', 'tidak', 35),
(174, 63, NULL, '4 perusahaan', 'tidak', 35),
(175, 64, NULL, '3 perusahaan', 'tidak', 35),
(176, 65, NULL, 'Tidak', 'tidak', 35),
(177, 90, NULL, 'Tingkat yang Sama', 'tidak', 35),
(178, 78, 18, 'Besar', 'tidak', 35),
(179, 78, 19, 'Sangat Besar', 'tidak', 35),
(180, 78, 20, 'Cukup Besar', 'tidak', 35),
(181, 78, 21, 'Cukup Besar', 'tidak', 35),
(182, 78, 22, 'Kurang', 'tidak', 35),
(183, 78, 23, 'Cukup Besar', 'tidak', 35),
(184, 78, 24, 'Tidak Sama Sekali', 'tidak', 35),
(185, 84, NULL, 'Belum Ada', 'tidak', 35),
(186, 85, NULL, 'programming', 'tidak', 35),
(188, 98, 26, '2', 'tidak', 35),
(189, 98, 27, '4', 'tidak', 35),
(190, 98, 28, '2', 'tidak', 35),
(191, 98, 29, '5', 'tidak', 35),
(192, 98, 30, '3', 'tidak', 35),
(193, 98, 31, '4', 'tidak', 35),
(194, 98, 32, '1', 'tidak', 35),
(195, 98, 33, '4', 'tidak', 35),
(196, 98, 34, '3', 'tidak', 35),
(197, 98, 35, '2', 'tidak', 35),
(198, 98, 36, '4', 'tidak', 35),
(199, 98, 37, '2', 'tidak', 35),
(200, 98, 38, '4', 'tidak', 35),
(201, 98, 39, '2', 'tidak', 35),
(202, 98, 40, '4', 'tidak', 35),
(203, 98, 41, '2', 'tidak', 35),
(204, 98, 42, '4', 'tidak', 35),
(205, 98, 43, '2', 'tidak', 35),
(206, 98, 44, '4', 'tidak', 35),
(207, 98, 45, '2', 'tidak', 35),
(208, 98, 46, '4', 'tidak', 35),
(209, 98, 48, '2', 'tidak', 35),
(210, 98, 49, '5', 'tidak', 35),
(211, 98, 50, '1', 'tidak', 35),
(212, 98, 51, '2', 'tidak', 35),
(213, 98, 52, '3', 'tidak', 35),
(214, 98, 53, '4', 'tidak', 35),
(215, 100, 59, '2 bulan', 'tidak', 35),
(216, 100, 60, 'Ya', 'tidak', 35),
(217, 78, 18, 'Sangat Besar', 'tidak', 35),
(218, 78, 19, 'Besar', 'tidak', 35),
(219, 78, 20, 'Cukup Besar', 'tidak', 35),
(220, 78, 21, 'Besar', 'tidak', 35),
(221, 78, 22, 'Kurang', 'tidak', 35),
(222, 78, 23, 'Tidak Sama Sekali', 'tidak', 35),
(223, 78, 24, 'Kurang', 'tidak', 35),
(226, 62, NULL, '3', 'tidak', 35),
(227, 63, NULL, '4', 'tidak', 35),
(228, 64, NULL, '2', 'tidak', 35),
(230, 79, NULL, '4', 'tidak', 35),
(231, 80, NULL, '3', 'tidak', 35),
(232, 81, NULL, '4', 'tidak', 35),
(233, 100, 54, '1 (Sangat Rendah)', 'tidak', 35),
(234, 100, 55, '2', 'tidak', 35),
(235, 100, 56, '3', 'tidak', 35),
(236, 100, 57, '4', 'tidak', 35),
(237, 100, 58, '2', 'tidak', 35),
(238, 100, 59, '3', 'tidak', 35),
(239, 100, 60, '4', 'tidak', 35),
(240, 100, 61, '4', 'tidak', 35),
(241, 100, 62, '3', 'tidak', 35),
(242, 100, 63, '4', 'tidak', 35),
(243, 100, 64, '2', 'tidak', 35),
(244, 100, 65, '4', 'tidak', 35),
(245, 100, 66, '3', 'tidak', 35),
(246, 100, 67, '3', 'tidak', 35),
(247, 100, 68, '4', 'tidak', 35),
(248, 100, 69, '3', 'tidak', 35),
(249, 100, 70, '4', 'tidak', 35),
(250, 100, 71, '2', 'tidak', 35),
(251, 100, 72, '4', 'tidak', 35),
(252, 100, 73, '4', 'tidak', 35),
(253, 100, 74, '3', 'tidak', 35),
(254, 100, 75, '4', 'tidak', 35),
(255, 100, 76, '3', 'tidak', 35),
(256, 100, 77, '4', 'tidak', 35),
(257, 100, 78, '3', 'tidak', 35),
(258, 100, 79, '4', 'tidak', 35),
(259, 100, 80, '3', 'tidak', 35),
(260, 100, 81, '4', 'tidak', 35),
(261, 100, 82, '4', 'tidak', 35),
(262, 98, 25, '1', 'tidak', 35),
(263, 98, 26, '3', 'tidak', 35),
(264, 98, 27, '2', 'tidak', 35),
(265, 98, 28, '4', 'tidak', 35),
(266, 98, 29, '5', 'tidak', 35),
(267, 98, 30, '2', 'tidak', 35),
(268, 98, 31, '4', 'tidak', 35),
(269, 98, 32, '4', 'tidak', 35),
(270, 98, 33, '2', 'tidak', 35),
(271, 98, 34, '4', 'tidak', 35),
(272, 98, 35, '3', 'tidak', 35),
(273, 98, 36, '2', 'tidak', 35),
(274, 98, 37, '4', 'tidak', 35),
(275, 98, 38, '2', 'tidak', 35),
(276, 98, 39, '3', 'tidak', 35),
(277, 98, 40, '4', 'tidak', 35),
(278, 98, 41, '2', 'tidak', 35),
(279, 98, 42, '3', 'tidak', 35),
(280, 98, 43, '4', 'tidak', 35),
(281, 98, 44, '2', 'tidak', 35),
(282, 98, 45, '4', 'tidak', 35),
(283, 98, 46, '2', 'tidak', 35),
(284, 98, 47, '4', 'tidak', 35),
(285, 98, 48, '2', 'tidak', 35),
(286, 98, 49, '4', 'tidak', 35),
(287, 98, 50, '3', 'tidak', 35),
(288, 98, 51, '3', 'tidak', 35),
(289, 98, 52, '4', 'tidak', 35),
(290, 98, 53, '4', 'tidak', 35),
(291, 90, NULL, 'Tingkat yang Sama', 'tidak', 35),
(292, 78, 18, 'Sangat Besar', 'tidak', 35),
(293, 78, 19, 'Cukup Besar', 'tidak', 35),
(294, 78, 20, 'Besar', 'tidak', 35),
(295, 78, 21, 'Kurang', 'tidak', 35),
(296, 78, 22, 'Cukup Besar', 'tidak', 35),
(297, 78, 23, 'Kurang', 'tidak', 35),
(298, 78, 24, 'Cukup Besar', 'tidak', 35),
(299, 98, 25, '1', 'tidak', 35),
(300, 98, 26, '2', 'tidak', 35),
(301, 98, 27, '3', 'tidak', 35),
(302, 98, 28, '4', 'tidak', 35),
(303, 98, 29, '5', 'tidak', 35),
(304, 98, 30, '4', 'tidak', 35),
(305, 98, 31, '3', 'tidak', 35),
(306, 98, 32, '3', 'tidak', 35),
(307, 98, 33, '4', 'tidak', 35),
(308, 98, 34, '3', 'tidak', 35),
(309, 98, 35, '2', 'tidak', 35),
(310, 98, 36, '4', 'tidak', 35),
(311, 98, 37, '2', 'tidak', 35),
(312, 98, 38, '3', 'tidak', 35),
(313, 98, 39, '4', 'tidak', 35),
(314, 98, 40, '2', 'tidak', 35),
(315, 98, 41, '4', 'tidak', 35),
(316, 98, 42, '2', 'tidak', 35),
(317, 98, 43, '4', 'tidak', 35),
(318, 98, 44, '2', 'tidak', 35),
(319, 98, 45, '3', 'tidak', 35),
(320, 98, 46, '4', 'tidak', 35),
(321, 98, 47, '2', 'tidak', 35),
(322, 98, 48, '3', 'tidak', 35),
(323, 98, 49, '4', 'tidak', 35),
(324, 98, 50, '3', 'tidak', 35),
(325, 98, 51, '3', 'tidak', 35),
(326, 98, 52, '2', 'tidak', 35),
(327, 98, 53, '4', 'tidak', 35),
(328, 59, NULL, '2 bulan', 'tidak', 57),
(329, 60, NULL, 'Ya', 'tidak', 57),
(330, 61, NULL, 'Membangun jejaring (network) sejak masih kuliah', 'tidak', 57),
(331, 90, NULL, 'Tingkat yang Sama', 'tidak', 57),
(332, 78, 18, 'Sangat Besar', 'tidak', 57),
(333, 78, 19, 'Besar', 'tidak', 57),
(334, 78, 20, 'Cukup Besar', 'tidak', 57),
(335, 78, 21, 'Kurang', 'tidak', 57),
(336, 78, 22, 'Tidak Sama Sekali', 'tidak', 57),
(337, 78, 23, 'Kurang', 'tidak', 57),
(338, 78, 24, 'Cukup Besar', 'tidak', 57),
(339, 84, NULL, 'Belum Ada', 'tidak', 57),
(340, 98, 25, '1', 'tidak', 57),
(341, 98, 26, '2', 'tidak', 57),
(342, 98, 27, '3', 'tidak', 57),
(343, 98, 28, '4', 'tidak', 57),
(344, 98, 29, '5', 'tidak', 57),
(345, 98, 30, '4', 'tidak', 57),
(346, 98, 31, '3', 'tidak', 57),
(347, 98, 32, '2', 'tidak', 57),
(348, 98, 33, '4', 'tidak', 57),
(349, 98, 34, '2', 'tidak', 57),
(350, 98, 35, '4', 'tidak', 57),
(351, 98, 36, '2', 'tidak', 57),
(352, 98, 37, '3', 'tidak', 57),
(353, 98, 38, '4', 'tidak', 57),
(354, 98, 39, '3', 'tidak', 57),
(355, 98, 40, '2', 'tidak', 57),
(356, 98, 41, '4', 'tidak', 57),
(357, 98, 42, '4', 'tidak', 57),
(358, 98, 43, '3', 'tidak', 57),
(359, 98, 44, '2', 'tidak', 57),
(360, 98, 45, '3', 'tidak', 57),
(361, 98, 46, '4', 'tidak', 57),
(362, 98, 47, '2', 'tidak', 57),
(363, 98, 48, '3', 'tidak', 57),
(364, 98, 49, '4', 'tidak', 57),
(365, 98, 50, '3', 'tidak', 57),
(366, 98, 51, '2', 'tidak', 57),
(367, 98, 52, '4', 'tidak', 57),
(368, 98, 53, '4', 'tidak', 57),
(369, 100, 59, '2 bulan', 'tidak', 57),
(370, 100, 60, 'Ya', 'tidak', 57),
(373, 62, NULL, '2', 'tidak', 57),
(374, 63, NULL, '4', 'tidak', 57),
(375, 64, NULL, '3', 'tidak', 57),
(377, 90, NULL, 'Tingkat yang Sama', 'tidak', 57),
(378, 78, 18, 'Sangat Besar', 'tidak', 57),
(379, 78, 19, 'Besar', 'tidak', 57),
(380, 78, 20, 'Cukup Besar', 'tidak', 57),
(381, 78, 21, 'Kurang', 'tidak', 57),
(382, 78, 22, 'Tidak Sama Sekali', 'tidak', 57),
(383, 78, 23, 'Kurang', 'tidak', 57),
(384, 78, 24, 'Cukup Besar', 'tidak', 57),
(385, 79, NULL, '4', 'tidak', 57),
(386, 80, NULL, '3', 'tidak', 57),
(387, 81, NULL, '3', 'tidak', 57),
(388, 84, NULL, 'Belum Ada', 'tidak', 57),
(389, 98, 25, '1', 'tidak', 57),
(390, 98, 26, '2', 'tidak', 57),
(391, 98, 27, '3', 'tidak', 57),
(392, 98, 28, '4', 'tidak', 57),
(393, 98, 29, '5', 'tidak', 57),
(394, 98, 30, '4', 'tidak', 57),
(395, 98, 31, '3', 'tidak', 57),
(396, 98, 32, '2', 'tidak', 57),
(397, 98, 33, '4', 'tidak', 57),
(398, 98, 34, '2', 'tidak', 57),
(399, 98, 35, '4', 'tidak', 57),
(400, 98, 36, '2', 'tidak', 57),
(401, 98, 37, '3', 'tidak', 57),
(402, 98, 38, '4', 'tidak', 57),
(403, 98, 39, '3', 'tidak', 57),
(404, 98, 40, '2', 'tidak', 57),
(405, 98, 41, '4', 'tidak', 57),
(406, 98, 42, '4', 'tidak', 57),
(407, 98, 43, '3', 'tidak', 57),
(408, 98, 44, '2', 'tidak', 57),
(409, 98, 45, '3', 'tidak', 57),
(410, 98, 46, '4', 'tidak', 57),
(411, 98, 47, '2', 'tidak', 57),
(412, 98, 48, '3', 'tidak', 57),
(413, 98, 49, '4', 'tidak', 57),
(414, 98, 50, '3', 'tidak', 57),
(415, 98, 51, '2', 'tidak', 57),
(416, 98, 52, '4', 'tidak', 57),
(417, 98, 53, '4', 'tidak', 57),
(418, 100, 54, '1 (Sangat Rendah)', 'tidak', 57),
(419, 100, 55, '3', 'tidak', 57),
(420, 100, 56, '4', 'tidak', 57),
(421, 100, 57, '3', 'tidak', 57),
(422, 100, 58, '2', 'tidak', 57),
(423, 100, 59, '4', 'tidak', 57),
(424, 100, 60, '2', 'tidak', 57),
(425, 100, 61, '4', 'tidak', 57),
(426, 100, 62, '2', 'tidak', 57),
(427, 100, 63, '4', 'tidak', 57),
(428, 100, 64, '3', 'tidak', 57),
(429, 100, 65, '2', 'tidak', 57),
(430, 100, 66, '4', 'tidak', 57),
(431, 100, 67, '4', 'tidak', 57),
(432, 100, 68, '3', 'tidak', 57),
(433, 100, 69, '2', 'tidak', 57),
(434, 100, 70, '4', 'tidak', 57),
(435, 100, 71, '4', 'tidak', 57),
(436, 100, 72, '2', 'tidak', 57),
(437, 100, 73, '4', 'tidak', 57),
(438, 100, 74, '2', 'tidak', 57),
(439, 100, 75, '4', 'tidak', 57),
(440, 100, 76, '3', 'tidak', 57),
(441, 100, 77, '2', 'tidak', 57),
(442, 100, 78, '4', 'tidak', 57),
(443, 100, 79, '4', 'tidak', 57),
(444, 100, 80, '3', 'tidak', 57),
(445, 100, 81, '3', 'tidak', 57),
(446, 100, 82, '4', 'tidak', 57),
(447, 97, NULL, 'semakin suksess', 'tidak', 57),
(450, 62, NULL, '4', 'tidak', 57),
(451, 63, NULL, '3', 'tidak', 57),
(452, 64, NULL, '3', 'tidak', 57),
(454, 79, NULL, '4', 'tidak', 57),
(455, 80, NULL, '3', 'tidak', 57),
(456, 81, NULL, '3', 'tidak', 57),
(457, 100, 54, '1 (Sangat Rendah)', 'tidak', 57),
(458, 100, 55, '2', 'tidak', 57),
(459, 100, 56, '3', 'tidak', 57),
(460, 100, 57, '4', 'tidak', 57),
(461, 100, 58, '3', 'tidak', 57),
(462, 100, 59, '2', 'tidak', 57),
(463, 100, 60, '4', 'tidak', 57),
(464, 100, 61, '3', 'tidak', 57),
(465, 100, 62, '4', 'tidak', 57),
(466, 100, 63, '3', 'tidak', 57),
(467, 100, 64, '3', 'tidak', 57),
(468, 100, 65, '4', 'tidak', 57),
(469, 100, 66, '5 (Sangat Tinggi)', 'tidak', 57),
(470, 100, 67, '4', 'tidak', 57),
(471, 100, 68, '3', 'tidak', 57),
(472, 100, 69, '4', 'tidak', 57),
(473, 100, 70, '3', 'tidak', 57),
(474, 100, 71, '3', 'tidak', 57),
(475, 100, 72, '4', 'tidak', 57),
(476, 100, 74, '4', 'tidak', 57),
(477, 100, 75, '2', 'tidak', 57),
(478, 100, 76, '1 (Sangat Rendah)', 'tidak', 57),
(479, 100, 77, '3', 'tidak', 57),
(480, 100, 78, '2', 'tidak', 57),
(481, 100, 79, '4', 'tidak', 57),
(482, 100, 80, '3', 'tidak', 57),
(483, 100, 81, '3', 'tidak', 57),
(484, 100, 82, '4', 'tidak', 57),
(485, 59, NULL, '3 bulan', 'tidak', 68),
(486, 60, NULL, 'Ya', 'tidak', 68),
(487, 61, NULL, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada ', 'tidak', 68),
(488, 61, NULL, ' Mencari lewat internet/iklan online/milis ', 'tidak', 68),
(489, 61, NULL, 'cara mencari pekerjaan lainnya', 'ya', 68),
(490, 62, NULL, '5 perusahaan', 'tidak', 68),
(491, 63, NULL, '4 perusahaan', 'tidak', 68),
(492, 64, NULL, '3 perusahaan', 'tidak', 68),
(493, 65, NULL, 'Tidak', 'tidak', 68),
(494, 90, NULL, 'Tingkat yang Sama', 'tidak', 68),
(495, 78, 18, 'Sangat Besar', 'tidak', 68),
(496, 78, 19, 'Besar', 'tidak', 68),
(497, 78, 20, 'Cukup Besar', 'tidak', 68),
(498, 78, 21, 'Tidak Sama Sekali', 'tidak', 68),
(499, 78, 22, 'Cukup Besar', 'tidak', 68),
(500, 78, 23, 'Cukup Besar', 'tidak', 68),
(501, 78, 24, 'Kurang', 'tidak', 68),
(502, 83, NULL, 'Ya', 'tidak', 68),
(503, 84, NULL, 'Belum Ada', 'tidak', 68),
(504, 108, NULL, '9 semester', 'tidak', 68),
(505, 109, NULL, '10 bulan', 'tidak', 68),
(506, 85, NULL, 'bahasa pemrograman', 'tidak', 68),
(507, 98, 25, '1', 'tidak', 68),
(508, 98, 26, '2', 'tidak', 68),
(509, 98, 27, '3', 'tidak', 68),
(510, 98, 28, '4', 'tidak', 68),
(511, 98, 29, '3', 'tidak', 68),
(512, 98, 30, '2', 'tidak', 68),
(513, 98, 31, '4', 'tidak', 68),
(514, 98, 32, '3', 'tidak', 68),
(515, 98, 33, '2', 'tidak', 68),
(516, 98, 34, '4', 'tidak', 68),
(517, 98, 35, '2', 'tidak', 68),
(518, 98, 36, '4', 'tidak', 68),
(519, 98, 37, '2', 'tidak', 68),
(520, 98, 38, '4', 'tidak', 68),
(521, 98, 39, '3', 'tidak', 68),
(522, 98, 40, '2', 'tidak', 68),
(523, 98, 41, '4', 'tidak', 68),
(524, 98, 43, '1', 'tidak', 68),
(525, 98, 44, '2', 'tidak', 68),
(526, 98, 45, '3', 'tidak', 68),
(527, 98, 46, '4', 'tidak', 68),
(528, 98, 47, '5', 'tidak', 68),
(529, 98, 48, '3', 'tidak', 68),
(530, 98, 49, '3', 'tidak', 68),
(531, 98, 50, '2', 'tidak', 68),
(532, 98, 51, '4', 'tidak', 68),
(533, 98, 52, '3', 'tidak', 68),
(534, 98, 53, '4', 'tidak', 68),
(535, 97, NULL, 'mahasiswanya semakin pintar', 'tidak', 68),
(536, 59, NULL, '1 bulan', 'tidak', 55),
(537, 60, NULL, 'Ya', 'tidak', 55),
(538, 61, NULL, 'Melalui iklan di koran/majalah, brosur ', 'tidak', 55),
(539, 61, NULL, 'Pergi ke bursa/pameran kerja', 'tidak', 55),
(540, 61, NULL, 'mencari di rumah', 'ya', 55),
(541, 62, NULL, '5 perusahaan', 'tidak', 55),
(542, 63, NULL, '4 perusahaan', 'tidak', 55),
(543, 64, NULL, '3 perusahaan', 'tidak', 55),
(544, 65, NULL, 'Tidak', 'tidak', 55),
(545, 65, NULL, 'tida ada kendala dalam menyesuaikan dgn pekerjaan', 'ya', 55),
(546, 90, NULL, 'Tingkat yang Sama', 'tidak', 55),
(547, 78, 18, 'Cukup Besar', 'tidak', 55),
(548, 78, 19, 'Cukup Besar', 'tidak', 55),
(549, 78, 20, 'Besar', 'tidak', 55),
(550, 78, 21, 'Kurang', 'tidak', 55),
(551, 78, 22, 'Cukup Besar', 'tidak', 55),
(552, 78, 23, 'Besar', 'tidak', 55),
(553, 78, 24, 'Kurang', 'tidak', 55),
(554, 84, NULL, 'Belum Ada', 'tidak', 55),
(555, 84, NULL, 'tidak ikut kompetensi diri', 'tidak', 55),
(556, 108, NULL, '7 semester', 'tidak', 55),
(557, 109, NULL, '6 bulan', 'tidak', 55),
(558, 85, NULL, 'java programming', 'tidak', 55),
(559, 98, 25, '5', 'tidak', 55),
(560, 98, 26, '4', 'tidak', 55),
(561, 98, 27, '3', 'tidak', 55),
(562, 98, 28, '2', 'tidak', 55),
(563, 98, 29, '1', 'tidak', 55),
(564, 98, 30, '2', 'tidak', 55),
(565, 98, 31, '4', 'tidak', 55),
(566, 98, 32, '4', 'tidak', 55),
(567, 98, 33, '3', 'tidak', 55),
(568, 98, 34, '2', 'tidak', 55),
(569, 98, 35, '1', 'tidak', 55),
(570, 98, 36, '3', 'tidak', 55),
(571, 98, 37, '4', 'tidak', 55),
(572, 98, 38, '3', 'tidak', 55),
(573, 98, 39, '1', 'tidak', 55),
(574, 98, 40, '2', 'tidak', 55),
(575, 98, 41, '3', 'tidak', 55),
(576, 98, 42, '4', 'tidak', 55),
(577, 98, 43, '5', 'tidak', 55),
(578, 98, 44, '3', 'tidak', 55),
(579, 98, 45, '2', 'tidak', 55),
(580, 98, 46, '3', 'tidak', 55),
(581, 98, 47, '4', 'tidak', 55),
(582, 98, 48, '4', 'tidak', 55),
(583, 98, 49, '2', 'tidak', 55),
(584, 98, 50, '3', 'tidak', 55),
(585, 98, 51, '2', 'tidak', 55),
(586, 98, 52, '4', 'tidak', 55),
(587, 98, 53, '5', 'tidak', 55),
(588, 97, NULL, 'semakin banyak praktek', 'tidak', 55),
(589, 59, NULL, '1 bulan', 'tidak', 56),
(590, 60, NULL, 'Tidak', 'tidak', 56),
(591, 60, NULL, 'alasan keselarasan horizontal', 'ya', 56),
(592, 61, NULL, ' Mencari lewat internet/iklan online/milis ', 'tidak', 56),
(593, 61, NULL, 'Membangun jejaring (network) sejak masih kuliah', 'tidak', 56),
(594, 61, NULL, 'di warnet', 'ya', 56),
(595, 62, NULL, '5 perusahaan', 'tidak', 56),
(596, 63, NULL, '4 perusahaan', 'tidak', 56),
(597, 64, NULL, '3 perusahaan', 'tidak', 56),
(598, 65, NULL, 'Ada', 'tidak', 56),
(599, 65, NULL, 'sulit tidur', 'ya', 56),
(600, 90, NULL, 'Tingkat yang Sama', 'tidak', 56),
(601, 84, NULL, 'Belum Ada', 'tidak', 56),
(602, 84, NULL, 'tidak ikut', 'tidak', 56),
(603, 108, NULL, '8 semester', 'tidak', 56),
(604, 109, NULL, '7 bulan', 'tidak', 56),
(605, 85, NULL, 'statistik', 'tidak', 56),
(606, 98, 25, '1', 'tidak', 56),
(607, 98, 26, '2', 'tidak', 56),
(608, 98, 27, '3', 'tidak', 56),
(609, 98, 28, '4', 'tidak', 56),
(610, 98, 29, '5', 'tidak', 56),
(611, 98, 30, '4', 'tidak', 56),
(612, 98, 31, '3', 'tidak', 56),
(613, 98, 32, '2', 'tidak', 56),
(614, 98, 33, '1', 'tidak', 56),
(615, 98, 34, '2', 'tidak', 56),
(616, 98, 35, '4', 'tidak', 56),
(617, 98, 36, '5', 'tidak', 56),
(618, 98, 37, '4', 'tidak', 56),
(619, 98, 38, '3', 'tidak', 56),
(620, 98, 39, '2', 'tidak', 56),
(621, 98, 40, '1', 'tidak', 56),
(622, 98, 41, '3', 'tidak', 56),
(623, 98, 42, '4', 'tidak', 56),
(624, 98, 43, '5', 'tidak', 56),
(625, 98, 44, '3', 'tidak', 56),
(626, 98, 45, '1', 'tidak', 56),
(627, 98, 46, '3', 'tidak', 56),
(628, 98, 47, '4', 'tidak', 56),
(629, 98, 48, '3', 'tidak', 56),
(630, 98, 49, '2', 'tidak', 56),
(631, 98, 50, '4', 'tidak', 56),
(632, 98, 51, '4', 'tidak', 56),
(633, 98, 52, '3', 'tidak', 56),
(634, 98, 53, '3', 'tidak', 56),
(635, 97, NULL, 'semakin bahagia', 'tidak', 56),
(636, 59, NULL, '4 bulan', 'tidak', 61),
(637, 60, NULL, 'Tidak', 'tidak', 61),
(638, 61, NULL, 'Pergi ke bursa/pameran kerja', 'tidak', 61),
(639, 61, NULL, 'Memeroleh informasi dari pusat pengembangan karir fakultas/universitas   ', 'tidak', 61),
(640, 62, NULL, '5 perusahaan', 'tidak', 61),
(641, 63, NULL, '4 perusahaan', 'tidak', 61),
(642, 64, NULL, '3 perusahaan', 'tidak', 61),
(643, 65, NULL, 'Tidak', 'tidak', 61),
(644, 90, NULL, 'Tingkat yang Sama', 'tidak', 61),
(645, 78, 18, 'Sangat Besar', 'tidak', 61),
(646, 78, 19, 'Besar', 'tidak', 61),
(647, 78, 20, 'Cukup Besar', 'tidak', 61),
(648, 78, 21, 'Kurang', 'tidak', 61),
(649, 78, 22, 'Tidak Sama Sekali', 'tidak', 61),
(650, 78, 23, 'Kurang', 'tidak', 61),
(651, 78, 24, 'Cukup Besar', 'tidak', 61),
(652, 84, NULL, 'Belum Ada', 'tidak', 61),
(653, 108, NULL, '8 semesrer', 'tidak', 61),
(654, 109, NULL, '6 bulan', 'tidak', 61),
(655, 97, NULL, 'test', 'tidak', 61),
(656, 59, NULL, '2 bulan', 'tidak', 62),
(657, 60, NULL, 'Ya', 'tidak', 62),
(658, 60, NULL, 'sangat berhubungan', 'ya', 62),
(659, 61, NULL, 'Pergi ke bursa/pameran kerja', 'tidak', 62),
(660, 61, NULL, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 'tidak', 62),
(661, 109, NULL, '10 bulan', 'tidak', 62),
(662, 60, NULL, 'Tidak', 'tidak', 58),
(663, 60, NULL, 'saya tidak suka programming', 'ya', 58);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pengguna`
--

CREATE TABLE `jawaban_pengguna` (
  `id` int(11) NOT NULL,
  `penggunaID` int(11) DEFAULT NULL,
  `pertanyaanID` int(11) NOT NULL,
  `pertanyaanSkalaID` int(11) DEFAULT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_pengguna`
--

INSERT INTO `jawaban_pengguna` (`id`, `penggunaID`, `pertanyaanID`, `pertanyaanSkalaID`, `jawaban`) VALUES
(113, 77, 101, 83, 'Kurang'),
(114, 77, 101, 84, 'Cukup'),
(115, 77, 101, 85, 'Baik'),
(116, 77, 101, 86, 'Sangat Baik'),
(117, 77, 101, 87, 'Baik'),
(118, 77, 101, 88, 'Cukup'),
(119, 77, 101, 89, 'Kurang'),
(120, 77, 99, NULL, 'saran pengguna harmoni'),
(121, 78, 101, 83, 'Sangat Baik'),
(122, 78, 101, 84, 'Baik'),
(123, 78, 101, 85, 'Cukup'),
(124, 78, 101, 86, 'Kurang'),
(125, 78, 101, 87, 'Cukup'),
(126, 78, 101, 88, 'Baik'),
(127, 78, 101, 89, 'Kurang'),
(128, 78, 99, NULL, 'saran pengguna non instansi');

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
(10, 'RFGNCSQG', 'Kompetensi', 'pengguna', '2019-12-24 13:31:51', 'aktif', 1, 'skala', 'no'),
(12, 'CB32B98M', 'Pekerjaan', 'alumni', '2019-12-24 13:47:35', 'aktif', 1, NULL, 'no'),
(13, '5B7C2P3D', 'Pendidikan', 'alumni', '2019-12-24 13:47:36', 'aktif', 1, NULL, 'no'),
(17, 'PTW4VCCS', 'Kompetensi', 'alumni', '2019-12-24 13:47:36', 'aktif', 1, NULL, 'no'),
(20, 'RYMD4QC6', 'Wirausaha', 'alumni', '2019-12-24 13:47:36', 'aktif', 1, NULL, 'no'),
(21, 'YQJN3ZTK', 'Saran Masukan', 'alumni', '2019-12-28 13:40:38', 'aktif', 1, NULL, 'no'),
(22, 'QHSQGBDY', 'Saran Masukan', 'pengguna', '2019-12-28 13:32:11', 'aktif', 1, 'isian', 'no'),
(35, '', 'pekerjaan', 'alumni', '2019-12-25 00:31:58', 'aktif', 3, NULL, 'no'),
(36, '', 'pendidikan', 'alumni', '2019-12-25 00:31:59', 'aktif', 3, NULL, 'no'),
(37, '869DVM6J', 'Kompetensi', 'pengguna', '2019-12-25 00:49:07', 'aktif', 3, 'skala', 'no'),
(38, 'RMDW8GT7', 'Saran Masukan', 'pengguna', '2019-12-25 00:49:07', 'aktif', 3, 'isian', 'no');

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
  `prodiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif_kuesioner`
--

INSERT INTO `notif_kuesioner` (`id`, `respondenID`, `jenis_kuesioner`, `new`, `timestamp`, `prodiID`) VALUES
(14, 35, 'alumni', '0', '23-12-2019', 1),
(16, 57, 'alumni', '0', '23-12-2019', 1),
(21, 55, 'alumni', '0', '28-12-2019', 1),
(22, 56, 'alumni', '0', '28-12-2019', 1),
(23, 61, 'alumni', '0', '28-12-2019', 1),
(24, 62, 'alumni', '0', '28-12-2019', 1),
(25, 58, 'alumni', '0', '28-12-2019', 1),
(30, 77, 'pengguna', '0', '29-12-2019', 1);

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
(95, 'PHP Engineer', '11-15juta', '2017-2019', 'Penanggung Jawab Jaringan', 55, 68, 9, 'yes', 'sudah_1', '0'),
(96, 'Software Engineer', '6-10 juta', '2019-Sekarang', 'Wirausahawan', 55, 80, 57, 'no', 'sudah_2', '0'),
(97, 'Front End Developer', '6-10 juta', '', '', 56, 0, 3, 'yes', NULL, '0'),
(98, 'Asisten Wakil 1 DPD R1', '1-5 juta', '', '', 57, 0, 13, 'yes', NULL, '0'),
(99, 'Front End Developer', '', '', '', 58, 77, 2, 'yes', NULL, '1'),
(100, 'Java Pega Programmer', '', '', '', 59, 0, 7, 'yes', NULL, '0'),
(101, 'Web Developer', '1-5 juta', '', '', 60, 0, 15, 'yes', NULL, '0'),
(102, 'IT Developer', '', '', '', 61, 0, 16, 'yes', NULL, '0'),
(103, 'Front End Developer', '1-5 juta', '2017-2019', 'Wirausahawan', 35, 77, 2, 'yes', 'sudah_1', '1'),
(104, 'IT Bisnis', '', '', '', 62, 0, 0, 'no', '', '0');

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
  `tandai` varchar(50) NOT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `penggunaID`, `pengguna_nama`, `pengguna_email`, `pengguna_telepon`, `id_instansi`, `divisi`, `prodiID`, `isDelete`, `tandai`, `seen`) VALUES
(68, NULL, 'pengguna docotel', 'test@mail.com', '0812345667', 9, 'TI', 1, 'no', '', '0'),
(69, NULL, 'Pengguna non instansi', 'test@mail.com', '0812345667', 0, '', 1, 'yes', '', '1'),
(70, NULL, 'pengguna tokopedia', 'test@mail.com', '0812345667', 10, 'Teknologi Informasi', 1, 'no', '', '1'),
(75, NULL, 'pengguna harmoni', 'test@mail.com', '08123465', 2, 'TI', 1, 'yes', '', '1'),
(77, 'XDPJWNXM', 'Pengguna harmoni', 'test@mail.com', '0812345667', 2, 'Teknologi Informasi', 1, 'no', '', '1'),
(80, 'B9PQ7G8P', 'pengguna pln', 'email', '000', 57, NULL, 1, 'no', '', '0');

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
  `isDelete` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `jenis`, `inputBox`, `textarea`, `keterangan`, `customID`, `kuesionerID`, `isDelete`) VALUES
(59, 'Masa tunggu Saudara dari kelulusan hingga mendapat pekerjaan pertama kali', 'pilihan', 'tidak', 'tidak', NULL, 'PR1575422613', 12, 'no'),
(60, 'Apakah pekerjaan Saudara ini berhubungan dengan bidang ilmu yang Saudara pelajari di Perguruan Tinggi?  Jelaskan jawaban anda', 'pilihan', 'ya', 'tidak', NULL, 'PR1575422692', 12, 'no'),
(61, 'Bagaimana anda mencari pekerjaan?', 'ganda', 'ya', 'tidak', NULL, 'PR1575422991', 12, 'no'),
(62, 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?', 'isian', 'tidak', 'tidak', NULL, 'PR1575423351', 12, 'no'),
(63, 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?', 'isian', 'tidak', 'tidak', NULL, 'PR1575423401', 12, 'no'),
(64, 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', 'isian', 'tidak', 'tidak', NULL, 'PR1575423418', 12, 'no'),
(65, 'Adakah hambatan/kendala yang Saudara alami dalam menyesuaikan diri dengan pekerjaan?   Jelaskan alasan anda', 'pilihan', 'ya', 'tidak', NULL, 'PR1575423501', 12, 'no'),
(78, 'Seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di prodi anda?', 'skala', 'tidak', 'tidak', NULL, 'PR1575447057', 13, 'no'),
(79, 'Setelah Saudara lulus dari UNJ, apakah Saudara melanjutkan pendidikan lagi? Jika ya di tingkat apa anda melanjutkan pendidikan?', 'pilihan', 'tidak', 'tidak', NULL, 'PR1575447158', 13, 'no'),
(80, 'Dimana Saudara melanjutkan pendidikan?', 'isian', 'tidak', 'tidak', NULL, 'PR1575447232', 13, 'no'),
(81, 'Apa nama program studi dimana anda melanjutkan pendidikan?', 'isian', 'tidak', 'tidak', NULL, 'PR1575447405', 13, 'no'),
(83, 'Apakah S1 anda linear dengan S2 ?', 'pilihan', 'tidak', 'tidak', NULL, 'PR1575447916', 13, 'no'),
(84, 'Setelah Saudara lulus dari UNJ, apakah Saudara meningkatkan kompetensi diri melalui : Sebutkan nama dan lamanya', 'pilihan', 'ya', 'tidak', NULL, 'PR1575448012', 13, 'no'),
(85, 'Pengetahuan apa yang Saudara butuhkan dari perkuliahan untuk menunjang pekerjaan Saudara saat ini? ', 'isian', 'tidak', 'tidak', NULL, 'PR1575506292', 17, 'no'),
(86, 'Pernahkah Saudara mengikuti tes Profesi di bidang tertentu yang mendukung pekerjaan Saudara saat ini? Jika pernah mengikuti, sebutkan jenis tesnya!', 'isian', 'tidak', 'tidak', NULL, 'PR1575506399', 17, 'no'),
(87, 'Adakah Organisasi Profesi yang Saudara ikuti? Jika ada sebutkan nama organisasinya dan mulai tahun berapa!', 'isian', 'tidak', 'tidak', NULL, 'PR1575506426', 17, 'no'),
(89, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', 'pilihan', 'tidak', 'tidak', NULL, '', 13, 'yes'),
(90, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', 'pilihan', 'tidak', 'tidak', NULL, 'PR1575939730', 12, 'no'),
(91, 'Jika anda berwirausaha apa nama usaha yang didirikan?', 'isian', 'tidak', 'tidak', NULL, 'PR1576024376', 20, 'no'),
(92, 'Bergerak di bidang apa usaha anda?', 'isian', 'tidak', 'tidak', NULL, 'PR1576024446', 20, 'no'),
(93, 'Berapa lama usaha anda berdiri?', 'isian', 'tidak', 'tidak', NULL, 'PR1576024522', 20, 'no'),
(94, 'Jumlah karyawan anda?', 'pilihan', 'tidak', 'tidak', NULL, 'PR1576024676', 20, 'no'),
(95, 'Berapa pendapatan dari usaha tersebut?', 'pilihan', 'tidak', 'tidak', NULL, 'PR1576025009', 20, 'no'),
(96, 'tes', 'isian', 'tidak', 'tidak', NULL, '', 17, 'yes'),
(97, 'Saran Saudara untuk perbaikan Program Studi Ilmu Komputer', 'isian', 'tidak', 'ya', NULL, 'PR1576025187', 21, 'no'),
(98, 'Pada saat lulus, pada tingkat mana kompetensi berikut anda kuasai? *Pertanyaan hanya untuk alumni yang sudah lulus lebih dari 2 tahun', 'skala', 'tidak', 'tidak', 'Beri nilai dari 1 (sangat rendah) sampai 5 (sangat tinggi)', 'PR1576026220', 17, 'no'),
(99, 'Saran Bapak/Ibu untuk perbaikan lulusan Program Studi kami', 'isian', 'tidak', 'ya', NULL, 'PR1576156789', 22, 'no'),
(100, 'Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?', 'skala', 'tidak', 'tidak', NULL, '', 17, 'yes'),
(101, 'Jenis Kemampuan', 'skala', 'tidak', 'tidak', NULL, 'PR1577153152', 10, 'no'),
(105, 'Jenis Kemampuan', 'skala', 'tidak', 'tidak', NULL, 'P7P9GNQ6', 37, 'no'),
(106, 'Saran Bapak/Ibu untuk perbaikan lulusan Program Studi kami', 'isian', 'tidak', 'ya', NULL, '3ZW4WYF5', 38, 'no'),
(107, 'Berapa lama masa studi/perkuliahan anda?', 'isian', 'tidak', 'tidak', 'Jika s1 jawaban dari 7 sampai 14 semester. ', '', 13, 'yes'),
(108, 'Berapa lama masa studi/perkuliahan anda?', 'isian', 'tidak', 'tidak', 'Jawaban : S1 (7-14 Semester). Untuk S2 (3-8 semester)', 'PR1577236644', 13, 'no'),
(109, 'Berapa lama penulisan skripsi anda?', 'pilihan', 'tidak', 'tidak', '', 'PR1577237955', 13, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_skala`
--

CREATE TABLE `pertanyaan_skala` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pertanyaanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan_skala`
--

INSERT INTO `pertanyaan_skala` (`id`, `pertanyaan`, `pertanyaanID`) VALUES
(18, 'Perkuliahan', 78),
(19, 'Demonstrasi', 78),
(20, 'Partisipasi dalam proyek riset ', 78),
(21, 'Magang', 78),
(22, 'Praktikum ', 78),
(23, 'Kerja Lapangan', 78),
(24, 'Diskusi', 78),
(25, 'Pengetahuan di bidang atau disiplin ilmu anda', 98),
(26, 'Pengetahuan di luar bidang atau disiplin ilmu anda', 98),
(27, 'Pengetahuan umum', 98),
(28, 'Bahasa Inggris', 98),
(29, 'Ketrampilan internet', 98),
(30, 'Ketrampilan komputer', 98),
(31, 'Berpikir kritis', 98),
(32, 'Ketrampilan riset', 98),
(33, 'Kemampuan belajar', 98),
(34, 'Kemampuan berkomunikasi', 98),
(35, 'Bekerja di bawah tekanan', 98),
(36, 'Manajemen waktu', 98),
(37, 'Bekerja secara mandiri', 98),
(38, 'Bekerja dalam tim/bekerjasama dengan orang lain', 98),
(39, 'Kemampuan dalam memecahkan masalah', 98),
(40, 'Negosiasi', 98),
(41, 'Kemampuan analisis', 98),
(42, 'Toleransi', 98),
(43, 'Kemampuan adaptasi', 98),
(44, 'Loyalitas', 98),
(45, 'Integritas', 98),
(46, 'Bekerja dengan orang yang berbeda budaya maupun latar belakang', 98),
(47, 'Kepemimpinan', 98),
(48, 'Kemampuan dalam memegang tanggungjawab', 98),
(49, 'Inisiatif', 98),
(50, 'Manajemen proyek/program', 98),
(51, 'Kemampuan untuk memresentasikan ide/produk/laporan', 98),
(52, 'Kemampuan dalam menulis laporan, memo dan dokumen', 98),
(53, 'Kemampuan untuk terus belajar sepanjang hayat', 98),
(83, 'Integritas (etika dan moral) lulusan Program Studi kami', 101),
(84, 'Keahlian berdasarkan bidang ilmu (profesionalisme) lulusan Program Studi   kami', 101),
(85, 'Kemampuan Bahasa Inggris lulusan Program Studi kami', 101),
(86, 'Kemampuan penggunaan Teknologi Informasi lulusan Program Studi kami', 101),
(87, 'Kemampuan Komunikasi lulusan Program Studi kami', 101),
(88, 'Kemampuan Kerjasama tim lulusan Program Studi kami', 101),
(89, 'Pengembangan diri lulusan Program Studi kami', 101),
(112, 'Keahlian berdasarkan bidang ilmu (profesionalisme) lulusan Program Studi   kami', 105),
(113, 'Kemampuan Bahasa Inggris lulusan Program Studi kami', 105),
(114, 'Kemampuan penggunaan Teknologi Informasi lulusan Program Studi kami', 105),
(115, 'Kemampuan Komunikasi lulusan Program Studi kami', 105),
(116, 'Kemampuan Kerjasama tim lulusan Program Studi kami', 105),
(117, 'Pengembangan diri lulusan Program Studi kami', 105);

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
(83, 59, '1 bulan'),
(84, 59, '2 bulan'),
(85, 59, '3 bulan'),
(86, 59, '4 bulan'),
(87, 59, '5 bulan'),
(88, 60, 'Ya'),
(89, 60, 'Tidak'),
(90, 61, 'Melalui iklan di koran/majalah, brosur '),
(91, 61, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada '),
(92, 61, 'Pergi ke bursa/pameran kerja'),
(93, 61, ' Mencari lewat internet/iklan online/milis '),
(94, 61, 'Dihubungi oleh perusahaan'),
(95, 61, 'Memeroleh informasi dari pusat pengembangan karir fakultas/universitas   '),
(96, 61, ' Menghubungi kantor kemahasiswaan/hubungan alumni '),
(97, 61, 'Membangun jejaring (network) sejak masih kuliah'),
(98, 61, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)'),
(99, 61, 'Melalui penempatan kerja atau magang '),
(100, 61, ' Bekerja di tempat yang sama dengan tempat kerja semasa kuliah'),
(101, 61, 'Lainnya : '),
(102, 65, 'Ada'),
(103, 65, 'Tidak'),
(119, 79, 'S2'),
(120, 79, 'S3'),
(121, 83, 'Ya'),
(122, 83, 'Tidak'),
(123, 84, 'Penataran/Pelatihan'),
(124, 84, 'Short Course'),
(125, 84, 'Belum Ada'),
(130, 90, 'Setingkat Lebih Tinggi'),
(131, 90, 'Tingkat yang Sama'),
(132, 90, ' Setingkat Lebih Rendah'),
(133, 90, 'Tidak Perlu Pendidikan Tinggi'),
(134, 59, '6 bulan'),
(135, 59, '7 bulan'),
(136, 59, '8 bulan'),
(137, 59, '9 bulan'),
(138, 59, '10 bulan'),
(139, 59, '11 bulan'),
(140, 59, '12 bulan'),
(141, 59, '> 12 bulan'),
(142, 94, '1-10'),
(143, 94, '10-50'),
(144, 94, '51-100'),
(145, 94, '>100'),
(146, 95, '1-5 juta'),
(147, 95, '6-10 juta'),
(148, 95, '11-15 juta'),
(149, 95, '>15 juta'),
(150, 109, '3 bulan'),
(151, 109, '4 bulan'),
(152, 109, '5 bulan'),
(153, 109, '6 bulan'),
(154, 109, '7 bulan'),
(155, 109, '8 bulan'),
(156, 109, '9 bulan'),
(157, 109, '10 bulan'),
(158, 109, '11 bulan'),
(159, 109, '12 bulan'),
(160, 109, '> 12 bulan');

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
(4, 'Statistika', '', 1),
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
(17, 'Sangat Besar', 78),
(18, 'Besar', 78),
(19, 'Cukup Besar', 78),
(20, 'Kurang', 78),
(21, 'Tidak Sama Sekali', 78),
(22, '1', 98),
(23, '2', 98),
(24, '3', 98),
(25, '4', 98),
(26, '5', 98),
(32, 'Sangat Baik', 101),
(33, 'Baik', 101),
(34, 'Cukup', 101),
(35, 'Kurang', 101),
(40, 'Sangat Baik', 105),
(41, 'Baik', 105),
(42, 'Cukup', 105),
(43, 'Kurang', 105);

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
(1, '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 'aktif'),
(3, 'KOOR13136', 'koor13136', 'fcea920f7412b5da7be0cf42b8c93759', 'koorprodi', 1, 'aktif'),
(4, '', 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 'superadmin', 1, 'aktif'),
(12, 'DOS0011026006', '0011026006', '1630f5a8dd4d852f516f8132f0dab31a', 'koorprodi', 1, 'aktif'),
(13, 'DOS0021018204', '0021018204', 'cb35066d0a18667c7e3e919a3cb8221d', 'dosen', 2, 'aktif'),
(15, 'DOS0015067705', '0015067705', '0015067705', 'dosen', 1, 'aktif'),
(37, 'ALU3145136196', '3145136196', 'b9d12d59b5e1656696f8f42dd9fc5e25', 'alumni', 1, 'aktif'),
(40, '', 'admin_pendmat', '2b3a43903f5240134cb90294ab3e4173', 'admin', 2, 'aktif'),
(59, 'ALU3145136217', '3145136217', '4ec904584dca56889485d63a84919b1a', 'alumni', 1, 'aktif'),
(60, 'ALU3145136218', '3145136218', '66b3a4cf0b3fd0c56d11f9cf8c8325fa', 'alumni', 1, 'aktif'),
(61, 'ALU3145136208', '3145136208', 'b4302799821d6bfd9c7097f9a6ad8f6a', 'alumni', 1, 'aktif'),
(62, 'ALU3145136211', '3145136211', '9a1525e19c013671b54a9456263db863', 'alumni', 1, 'aktif'),
(63, 'ALU3145136223', '3145136223', '3542c021c7d9a07ba812e7c688fedd0d', 'alumni', 1, 'aktif'),
(64, 'ALU3145136197', '3145136197', 'c4cb0ca61856d1b09c967de0bac0be56', 'alumni', 1, 'aktif'),
(65, 'ALU3145136212', '3145136212', 'c1c920fb3af5f905f6cbf3856eb8440f', 'alumni', 1, 'aktif'),
(66, 'ALU3145136193', '3145136193', '36f73abbc685c647eaebab77352c9d21', 'alumni', 1, 'aktif'),
(67, 'DOS0015067706', '0015067706', '0015067706', 'koorprodi', 3, 'aktif'),
(77, '', 'admin_mtk', 'fbf45fcf8f91f6bf19102b69333739a1', 'admin', 3, 'aktif'),
(79, 'DOS321', '321', '321', 'dosen', 1, 'aktif');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `alumni_instansi`
--
ALTER TABLE `alumni_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `berita_alumni`
--
ALTER TABLE `berita_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `jawaban_alumni`
--
ALTER TABLE `jawaban_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=664;

--
-- AUTO_INCREMENT for table `jawaban_pengguna`
--
ALTER TABLE `jawaban_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `koorprodi`
--
ALTER TABLE `koorprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `notif_kuesioner`
--
ALTER TABLE `notif_kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `pertanyaan_skala`
--
ALTER TABLE `pertanyaan_skala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skala_nilai`
--
ALTER TABLE `skala_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

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
