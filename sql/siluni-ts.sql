-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 04:59 AM
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
  `no_telepon` varchar(50) NOT NULL,
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
(28, 'ALU3145136217', '3145136217', 'M. Reyhan Fahlevi', 'Laki-laki', 'Jakarta', '2019-08-08', '', '', '2013', '2017', '0000-00-00', '3.84', '', '', 'reysdesign@hotmail.com', '', '0877 8528 2705', '', 'yes', 'yes', 'yes', 'aktif', 1),
(29, 'ALU3145136218', '3145136218', 'Gregorius Andito H', 'Laki-laki', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.72', NULL, '', '', '', '0878 8112 3212', '', 'yes', 'yes', 'yes', 'aktif', 1),
(30, 'ALU3145136208', '3145136208', 'Alitinia Prastiantari', 'Perempuan', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.72', NULL, '', '', '', '08129142949', '', 'yes', 'yes', 'yes', 'aktif', 1),
(31, 'ALU3145136211', '3145136211', 'Tiara Amelia', 'Perempuan', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.77', NULL, '', '', '', '081282003420', '', 'yes', 'yes', 'yes', 'aktif', 1),
(32, 'ALU3145136223', '3145136223', 'Agustinus Purimbaga', 'Laki-laki', '', '', '', '', '2013', '2017', '0000-00-00', '3.59', '', '', '', '', '081281011459', '', 'yes', 'yes', 'yes', 'aktif', 1),
(33, 'ALU3145136197', '3145136197', 'Muhammad Fachrizal', 'Laki-laki', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.41', NULL, '', '', '', '085711402970', '', 'yes', 'yes', 'yes', 'aktif', 1),
(34, 'ALU3145136212', '3145136212', 'Anantassa Fitri Andini', 'Perempuan', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.8', NULL, '', '', '', '081319508117', '', 'yes', 'yes', 'yes', 'aktif', 1),
(35, 'ALU3145136196', '3145136196', 'Mikael Yurubeli', 'Laki-laki', 'Jakarta', '', ' Jalan Hikmah No 64, Cilangkap, Cipayung, Jakarta Timur', '', '2013', '2017', '0000-00-00', '3.56', '', '', '', '', '087875076738', '', 'yes', 'yes', 'yes', 'aktif', 1),
(36, 'ALU3145136193', '3145136193', 'Hana Maulinda', 'Perempuan', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.56', NULL, '', '', '', '081318400299', '', 'yes', 'yes', 'yes', 'aktif', 1),
(37, 'ALU12345', '12345', 'Test', 'Perempuan', '', '', '', '', '2015', '2020', '0000-00-00', '3.5', NULL, '', '', '', '12345', '', 'yes', 'yes', 'yes', 'aktif', 1);

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
(1, '<p>Yth. Alumni Ilmu Komputer FMIPA UNJ</p>\r\n<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi Ilmu Komputer. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>', '1575635288.png', 'alumni', 1),
(2, '<p style=\"text-align: justify;\"><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Bapak/Ibu yang terhormat, saat ini kami sedang melakukan&nbsp;</span><strong><em style=\"box-sizing: border-box; display: inline-block; transition: all 0.3s ease 0s; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\"><span style=\"box-sizing: border-box;\">Tracer Study</span></em></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;(penelusuran alumni)&nbsp;</span><strong><span style=\"box-sizing: border-box; color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">Program Studi Ilmu Komputer</span></strong><span style=\"color: #212529; font-family: cambria; font-size: 17px; text-align: justify;\">&nbsp;FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.</span></p>', '', 'pengguna', 1),
(3, '', '', 'alumni', 2),
(4, '', '', 'pengguna', 2);

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
(6, 'DOS0015067705', 'Med Irzal', '0015067705', 'Laki-laki', '', '', '', 'aktif', 1, 'dosen');

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
(9, 'PT Docotel Teknologi', 'Lokal', 'Jl. KH. Hasyim Ashari No.26, RT.1/RW.7, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130', 1),
(10, 'PT Tokopedia', 'Nasional', ' lantai 52 Tokopedia Tower Ciputra World 2, Jl. Prof. DR. Satrio No.Kav. 11, RT.3/RW.3, Karet Semanggi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950', 1),
(11, 'PT Manulife Indonesia', 'Nasional', 'Menara Batavia Lantai 19, JL KH Mas Mansyur, Kav. 126, 10220, RT.3/RW.2, Karet Tengsin, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10240', 1),
(12, 'PT Digital Mind System', NULL, NULL, 1),
(13, 'DPD RI', NULL, NULL, 1),
(15, 'PT Imkahfa ', NULL, NULL, 1),
(16, 'PT GSI (United Tractor )', NULL, NULL, 1),
(17, 'PT  Sinar Mas', 'Nasional', NULL, 0),
(20, 'test', 'Nasional', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_alumni`
--

CREATE TABLE `jawaban_alumni` (
  `id` int(11) NOT NULL,
  `pertanyaanID` int(11) NOT NULL,
  `pertanyaanSkalaID` int(11) DEFAULT NULL,
  `jawaban` text NOT NULL,
  `alumniID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_alumni`
--

INSERT INTO `jawaban_alumni` (`id`, `pertanyaanID`, `pertanyaanSkalaID`, `jawaban`, `alumniID`) VALUES
(26, 60, NULL, 'Ya', 35),
(27, 60, NULL, 'tidak', 35),
(28, 61, NULL, 'Memeroleh informasi dari pusat pengembangan karir fakultas/universitas   ', 35),
(29, 61, NULL, ' Menghubungi kantor kemahasiswaan/hubungan alumni ', 35),
(31, 62, NULL, '5 perusahaan', 35),
(32, 65, NULL, 'Tidak', 35),
(33, 65, NULL, '', 35),
(34, 78, 18, 'Sangat Besar', 35),
(35, 78, 19, 'Cukup Besar', 35),
(36, 78, 20, 'Besar', 35),
(37, 78, 21, 'Kurang', 35),
(38, 78, 22, 'Cukup Besar', 35),
(39, 78, 23, 'Besar', 35),
(40, 78, 24, 'Kurang', 35),
(41, 84, NULL, 'Belum Ada', 35),
(42, 84, NULL, '', 35),
(43, 85, NULL, 'statistik', 35),
(44, 88, NULL, 'semoga sdmnya meningkat', 35),
(45, 84, NULL, 'Penataran/Pelatihan', 35),
(46, 61, NULL, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 35),
(47, 60, NULL, 'ya', 35),
(49, 60, NULL, 'Ya', 35),
(50, 61, NULL, 'Dihubungi oleh perusahaan', 35),
(51, 61, NULL, 'Memeroleh informasi dari pusat pengembangan karir fakultas/universitas   ', 35),
(52, 61, NULL, 'Membangun jejaring (network) sejak masih kuliah', 35),
(53, 62, NULL, '5 perusahaan', 35),
(54, 63, NULL, '4 perusahaan', 35),
(55, 64, NULL, '3 perusahaan', 35),
(56, 65, NULL, 'Tidak', 35),
(57, 90, NULL, 'Tingkat yang Sama', 35),
(58, 78, 18, 'Besar', 35),
(59, 78, 19, 'Besar', 35),
(60, 78, 20, 'Cukup Besar', 35),
(61, 78, 21, 'Sangat Besar', 35),
(62, 78, 22, 'Sangat Besar', 35),
(63, 78, 23, 'Sangat Besar', 35),
(64, 78, 24, 'Besar', 35),
(65, 79, NULL, 'Ya', 35),
(66, 84, NULL, 'Belum Ada', 35),
(67, 85, NULL, 'tes', 35),
(68, 86, NULL, 'tes', 35),
(69, 87, NULL, 'tes', 35),
(70, 88, NULL, 'semoga lebih baik', 35),
(71, 59, NULL, '3 bulan', 35),
(72, 59, NULL, '1 bulan', 28),
(73, 59, NULL, '3 bulan', 37),
(74, 60, NULL, 'Ya', 37),
(75, 61, NULL, 'Pergi ke bursa/pameran kerja', 37),
(76, 61, NULL, ' Mencari lewat internet/iklan online/milis ', 37),
(77, 62, NULL, '10 perusahaan', 37),
(78, 63, NULL, '6 perusahaan', 37),
(79, 64, NULL, '3 perusahaan', 37),
(80, 65, NULL, 'Tidak', 37),
(81, 90, NULL, 'Tingkat yang Sama', 37),
(82, 78, 18, 'Cukup Besar', 37),
(83, 78, 19, 'Besar', 37),
(84, 78, 20, 'Besar', 37),
(85, 78, 21, 'Besar', 37),
(86, 78, 22, 'Besar', 37),
(87, 78, 23, 'Besar', 37),
(88, 78, 24, 'Besar', 37),
(89, 84, NULL, 'Belum Ada', 37),
(90, 85, NULL, 'programming', 37),
(91, 98, 25, '3', 37),
(92, 98, 26, '3', 37),
(93, 98, 27, '3', 37),
(94, 98, 28, '3', 37),
(95, 98, 29, '4', 37),
(96, 98, 30, '5', 37),
(97, 98, 31, '5', 37),
(98, 98, 32, '5', 37),
(99, 98, 33, '5', 37),
(100, 98, 34, '5', 37),
(101, 98, 35, '5', 37),
(102, 98, 36, '5', 37),
(103, 98, 37, '5', 37),
(104, 98, 38, '5', 37),
(105, 98, 39, '5', 37),
(106, 98, 40, '5', 37),
(107, 98, 41, '5', 37),
(108, 98, 42, '5', 37),
(109, 98, 43, '5', 37),
(110, 98, 44, '5', 37),
(111, 98, 45, '5', 37),
(112, 98, 46, '5', 37),
(113, 98, 47, '5', 37),
(114, 98, 48, '5', 37),
(115, 98, 49, '5', 37),
(116, 98, 50, '5', 37),
(117, 98, 51, '5', 37),
(118, 98, 52, '5', 37),
(119, 98, 53, '5', 37),
(120, 97, NULL, 'perbanyak praktikum daripada teori', 37),
(121, 59, NULL, '4 bulan', 37),
(122, 60, NULL, 'Ya', 37),
(123, 61, NULL, ' Mencari lewat internet/iklan online/milis ', 37),
(124, 61, NULL, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 37),
(125, 62, NULL, '5 perusahaan', 37),
(126, 63, NULL, '4 perusahaan', 37),
(127, 64, NULL, '3 perusahaan', 37),
(128, 65, NULL, 'Tidak', 37),
(129, 90, NULL, 'Setingkat Lebih Tinggi', 37),
(130, 78, 18, 'Cukup Besar', 37),
(131, 78, 19, 'Besar', 37),
(132, 78, 20, 'Kurang', 37),
(133, 78, 21, 'Sangat Besar', 37),
(134, 78, 22, 'Besar', 37),
(135, 78, 23, 'Kurang', 37),
(136, 78, 24, 'Tidak Sama Sekali', 37),
(137, 85, NULL, 'statistik', 37),
(138, 86, NULL, 'tes', 37),
(139, 87, NULL, 'tes', 37),
(140, 98, 25, '3', 37),
(141, 98, 26, '2', 37),
(142, 98, 27, '4', 37),
(143, 98, 28, '4', 37),
(144, 98, 29, '3', 37),
(145, 98, 30, '2', 37),
(146, 98, 31, '4', 37),
(147, 98, 32, '3', 37),
(148, 98, 33, '2', 37),
(149, 98, 34, '4', 37),
(150, 98, 35, '2', 37),
(151, 98, 36, '3', 37),
(152, 98, 37, '4', 37),
(153, 98, 38, '3', 37),
(154, 98, 39, '3', 37),
(155, 98, 40, '4', 37),
(156, 98, 41, '5', 37),
(157, 98, 42, '3', 37),
(158, 98, 43, '1', 37),
(159, 98, 44, '1', 37),
(160, 98, 45, '3', 37),
(161, 98, 46, '4', 37),
(162, 98, 47, '2', 37),
(163, 98, 48, '4', 37),
(164, 98, 49, '3', 37),
(165, 98, 50, '2', 37),
(166, 98, 51, '5', 37),
(167, 98, 52, '1', 37),
(168, 98, 53, '4', 37),
(169, 97, NULL, 'tes saran ', 37);

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
(1, 49, 53, 5, 'Sangat Baik'),
(2, 49, 53, 6, 'Cukup'),
(3, 49, 53, 7, 'Baik'),
(4, 49, 53, 8, 'Kurang'),
(5, 49, 53, 9, 'Cukup'),
(6, 49, 53, 10, 'Baik'),
(7, 49, 53, 11, 'Cukup'),
(8, 49, 54, NULL, 'saran pengguna'),
(9, NULL, 53, 5, 'Sangat Baik'),
(10, NULL, 53, 6, 'Baik'),
(11, NULL, 53, 7, 'Cukup'),
(12, NULL, 53, 8, 'Cukup'),
(13, NULL, 53, 9, 'Cukup'),
(14, NULL, 53, 10, 'Baik'),
(15, NULL, 53, 11, 'Cukup'),
(16, NULL, 54, NULL, 'baik baik aja'),
(17, 49, 53, 5, 'Sangat Baik'),
(18, 49, 53, 6, 'Sangat Baik'),
(19, 49, 53, 7, 'Sangat Baik'),
(20, 49, 53, 8, 'Sangat Baik'),
(21, 49, 53, 9, 'Sangat Baik'),
(22, 49, 53, 11, 'Sangat Baik'),
(23, 49, 54, NULL, 'semakin di depan'),
(24, NULL, 53, 5, 'Baik'),
(25, NULL, 53, 6, 'Cukup'),
(26, NULL, 53, 7, 'Cukup'),
(27, NULL, 53, 8, 'Baik'),
(28, NULL, 53, 9, 'Cukup'),
(29, NULL, 53, 10, 'Sangat Baik'),
(30, NULL, 53, 11, 'Kurang'),
(31, NULL, 99, NULL, 'Semoga proses akademik semakin berkembang'),
(32, 60, 53, 5, 'Sangat Baik'),
(33, 60, 53, 6, 'Baik'),
(34, 60, 53, 7, 'Cukup'),
(35, 60, 53, 8, 'Baik'),
(36, 60, 53, 9, 'Cukup'),
(37, 60, 53, 10, 'Kurang'),
(38, 60, 53, 11, 'Sangat Baik'),
(39, 60, 99, NULL, 'Semoga semakin jaya'),
(40, 65, 53, 5, 'Sangat Baik'),
(41, 65, 53, 6, 'Baik'),
(42, 65, 53, 7, 'Cukup'),
(43, 65, 53, 8, 'Baik'),
(44, 65, 53, 9, 'Cukup'),
(45, 65, 53, 10, 'Cukup'),
(46, 65, 53, 11, 'Baik'),
(47, 65, 99, NULL, 'semakin jaya'),
(48, 67, 53, 5, 'Sangat Baik'),
(49, 67, 53, 6, 'Baik'),
(50, 67, 53, 7, 'Cukup'),
(51, 67, 53, 8, 'Baik'),
(52, 67, 53, 9, 'Baik'),
(53, 67, 53, 10, 'Baik'),
(54, 67, 53, 11, 'Sangat Baik'),
(55, 67, 99, NULL, 'semoga mahasiswanya cepet lulus');

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
  `jenisKuesionerPengguna` enum('isian','ganda','pilihan','skala') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `customID`, `nama_kuesioner`, `responden`, `tanggal_dibuat`, `status`, `prodiID`, `jenisKuesionerPengguna`) VALUES
(10, 'RFGNCSQG', 'Kompetensi', 'pengguna', '2019-12-13 06:52:47', 'aktif', 1, 'skala'),
(12, 'CB32B98M', 'Pekerjaan', 'alumni', '2019-12-04 01:17:24', 'aktif', 1, NULL),
(13, '5B7C2P3D', 'Pendidikan', 'alumni', '2019-12-04 01:46:24', 'aktif', 1, NULL),
(17, 'PTW4VCCS', 'Kompetensi', 'alumni', '2019-12-05 00:37:51', 'aktif', 1, NULL),
(20, 'RYMD4QC6', 'Wirausaha', 'alumni', '2019-12-11 00:31:16', 'aktif', 1, NULL),
(21, 'YQJN3ZTK', 'Saran Masukan', 'alumni', '2019-12-11 00:46:18', 'aktif', 1, NULL),
(22, 'QHSQGBDY', 'Saran Masukan', 'pengguna', '2019-12-13 06:52:40', 'aktif', 1, 'isian');

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
(1, 35, 'alumni', '0', '10-12-2019', 1),
(2, 49, 'pengguna', '0', '10-12-2019', 1),
(3, 35, 'alumni', '0', '11-12-2019', 1),
(4, 28, 'alumni', '0', '11-12-2019', 1),
(5, 37, 'alumni', '0', '12-12-2019', 1),
(6, 37, 'alumni', '0', '13-12-2019', 1),
(7, 60, 'pengguna', '0', '13-12-2019', 1),
(8, NULL, 'pengguna', '0', '16-12-2019', 1),
(9, NULL, 'pengguna', '0', '16-12-2019', 1),
(10, 35, 'alumni', '0', '16-12-2019', 1);

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
  `firstPekerjaan` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `posisi`, `gaji`, `periode_kerja`, `profil`, `id_alumni`, `id_pengguna`, `firstPekerjaan`) VALUES
(36, 'PHP Engineer', '3jt - 4jt', '2017-2018', 'Programmer', 28, 49, 'yes'),
(37, 'Software Engineer', '< 1jt', '2018-Sekarang', '', 28, 50, 'no'),
(38, 'Front End Developer', '> 4jt', '', 'Programmer', 29, 51, 'yes'),
(39, 'Asisten Wakil 1 DPD R1', '> 4jt', '', 'Programmer', 30, 52, 'yes'),
(40, 'Front End Developer', '< 1jt', '', 'Programmer', 31, 53, 'yes'),
(41, 'Java Pega Programmer', '< 1jt', '', 'Programmer', 32, 54, 'yes'),
(42, 'Web Developer', '> 4jt', '', 'Programmer', 33, 55, 'yes'),
(43, 'IT Developer', '< 1jt', '', 'Programmer', 34, 56, 'yes'),
(44, 'Front End Developer', '> 4jt', '2017-Sekarang', 'Programmer', 35, 57, 'yes'),
(45, 'IT Bisnis', '> 4jt', '', 'Programmer', 36, 58, 'yes'),
(51, 'Web Developer', '2jt - 3jt', '', 'Programmer', 37, 63, 'yes');

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
(49, '58B6DQWF', '', '', '', 9, '', 1, 'no', '', '1'),
(50, 'SSS8DFVT', '', '', '', 10, '', 1, 'no', '', '1'),
(51, 'M4TMY9XX', NULL, NULL, NULL, 3, NULL, 1, 'no', '', '1'),
(52, 'V2V8PBRN', NULL, NULL, NULL, 13, NULL, 1, 'no', '', '1'),
(53, 'R8VC6G6K', NULL, NULL, NULL, 14, NULL, 1, 'no', '', '1'),
(54, '89MDXBFV', 'pengguna sinarmas', 'penggunasinarmas@mail.com', '', 7, '', 1, 'no', '', '1'),
(55, 'FKSDPPFT', NULL, NULL, NULL, 15, NULL, 1, 'no', '', '1'),
(56, '3JXDSMXD', NULL, NULL, NULL, 16, NULL, 1, 'no', '', '1'),
(57, '2B4ZKQRZ', 'Pengguna harmoni', 'pengguna@harmoni.com', '0812345667', 14, 'Teknologi Informasi', 1, 'no', '', '1'),
(58, 'NFCWZH7G', NULL, NULL, NULL, 11, NULL, 1, 'no', '', '1'),
(59, '8V7P66WJ', 'Test', 'pengguna1@gmail.com', '0812345667', 12, 'Teknologi Informasi', 1, 'no', '', '1'),
(60, 'T6VNJMG5', 'Test', 'pengirim@gmail.com', '0812345667', 7, 'Website', 1, 'no', '', '1'),
(62, 'QJHQJNCG', 'Test', 'pengirim@gmail.com', '0812345667', 9, 'Website', 1, 'no', '', '1'),
(63, '4HPF93BY', NULL, NULL, NULL, 2, NULL, 1, 'no', '', '1'),
(64, 'D7RMX7PH', NULL, NULL, NULL, 17, NULL, 1, 'no', '', '1'),
(67, '69FSPDXH', 'test kuesioner pengguna', 'pengguna@harmoni.com', '0812345667', 0, '', 1, 'no', '', '1');

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
  `customID` varchar(50) NOT NULL,
  `kuesionerID` int(11) NOT NULL,
  `isDelete` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `jenis`, `inputBox`, `textarea`, `customID`, `kuesionerID`, `isDelete`) VALUES
(53, 'Jenis Kemampuan', 'skala', 'tidak', 'tidak', 'PR1574911254', 10, 'no'),
(59, 'Masa tunggu Saudara dari kelulusan hingga mendapat pekerjaan pertama kali', 'pilihan', 'tidak', 'tidak', 'PR1575422613', 12, 'no'),
(60, 'Apakah pekerjaan Saudara ini berhubungan dengan bidang ilmu yang Saudara pelajari di Perguruan Tinggi?  Jelaskan jawaban anda', 'pilihan', 'ya', 'tidak', 'PR1575422692', 12, 'no'),
(61, 'Bagaimana anda mencari pekerjaan?', 'ganda', 'ya', 'tidak', 'PR1575422991', 12, 'no'),
(62, 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?', 'isian', 'tidak', 'tidak', 'PR1575423351', 12, 'no'),
(63, 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?', 'isian', 'tidak', 'tidak', 'PR1575423401', 12, 'no'),
(64, 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', 'isian', 'tidak', 'tidak', 'PR1575423418', 12, 'no'),
(65, 'Adakah hambatan/kendala yang Saudara alami dalam menyesuaikan diri dengan pekerjaan?   Jelaskan alasan anda', 'pilihan', 'ya', 'tidak', 'PR1575423501', 12, 'no'),
(78, 'Seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di prodi anda?', 'skala', 'tidak', 'tidak', 'PR1575447057', 13, 'no'),
(79, 'Setelah Saudara lulus dari UNJ, apakah Saudara melanjutkan pendidikan lagi? Jika ya di tingkat apa anda melanjutkan pendidikan?', 'pilihan', 'tidak', 'tidak', 'PR1575447158', 13, 'no'),
(80, 'Dimana Saudara melanjutkan pendidikan?', 'isian', 'tidak', 'tidak', 'PR1575447232', 13, 'no'),
(81, 'Apa nama program studi dimana anda melanjutkan pendidikan?', 'isian', 'tidak', 'tidak', 'PR1575447405', 13, 'no'),
(83, 'Apakah S1 anda linear dengan S2 ?', 'pilihan', 'tidak', 'tidak', 'PR1575447916', 13, 'no'),
(84, 'Setelah Saudara lulus dari UNJ, apakah Saudara meningkatkan kompetensi diri melalui : Sebutkan nama dan lamanya', 'pilihan', 'ya', 'tidak', 'PR1575448012', 13, 'no'),
(85, 'Pengetahuan apa yang Saudara butuhkan dari perkuliahan untuk menunjang pekerjaan Saudara saat ini? ', 'isian', 'tidak', 'tidak', 'PR1575506292', 17, 'no'),
(86, 'Pernahkah Saudara mengikuti tes Profesi di bidang tertentu yang mendukung pekerjaan Saudara saat ini? Jika pernah mengikuti, sebutkan jenis tesnya!', 'isian', 'tidak', 'tidak', 'PR1575506399', 17, 'no'),
(87, 'Adakah Organisasi Profesi yang Saudara ikuti? Jika ada sebutkan nama organisasinya dan mulai tahun berapa!', 'isian', 'tidak', 'tidak', 'PR1575506426', 17, 'no'),
(89, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', 'pilihan', 'tidak', 'tidak', '', 13, 'yes'),
(90, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', 'pilihan', 'tidak', 'tidak', 'PR1575939730', 12, 'no'),
(91, 'Jika anda berwirausaha apa nama usaha yang didirikan?', 'isian', 'tidak', 'tidak', 'PR1576024376', 20, 'no'),
(92, 'Bergerak di bidang apa usaha anda?', 'isian', 'tidak', 'tidak', 'PR1576024446', 20, 'no'),
(93, 'Berapa lama usaha anda berdiri?', 'isian', 'tidak', 'tidak', 'PR1576024522', 20, 'no'),
(94, 'Jumlah karyawan anda?', 'pilihan', 'tidak', 'tidak', 'PR1576024676', 20, 'no'),
(95, 'Berapa pendapatan dari usaha tersebut?', 'pilihan', 'tidak', 'tidak', 'PR1576025009', 20, 'no'),
(96, 'tes', 'isian', 'tidak', 'tidak', '', 17, 'yes'),
(97, 'Saran Saudara untuk perbaikan Program Studi Ilmu Komputer', 'isian', 'tidak', 'ya', 'PR1576025187', 21, 'no'),
(98, 'Pada saat lulus, pada tingkat mana kompetensi berikut anda kuasai? beri nilai dari 1 (sangat rendah) sampai 5 (sangat tinggi)\r\n*untuk alumni yang sudah lulus lebih dari 2 tahun', 'skala', 'tidak', 'tidak', 'PR1576026220', 17, 'no'),
(99, 'Saran Bapak/Ibu untuk perbaikan lulusan Program Studi Ilmu Komputer UNJ', 'isian', 'tidak', 'ya', 'PR1576156789', 22, 'no');

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
(5, 'Integritas (etika dan moral) lulusan Program Studi Ilmu Komputer UNJ', 53),
(6, 'Keahlian berdasarkan bidang ilmu (profesionalisme) lulusan Program Studi Ilmu Komputer UNJ', 53),
(7, 'Kemampuan Bahasa Inggris lulusan Program Studi Ilmu Komputer UNJ', 53),
(8, 'Kemampuan penggunaan Teknologi Informasi lulusan Program Studi Ilmu Komputer UNJ', 53),
(9, 'Kemampuan Komunikasi lulusan Program Studi Ilmu Komputer UNJ', 53),
(10, 'Kemampuan Kerjasama tim lulusan Program Studi Ilmu Komputer UNJ', 53),
(11, 'Pengembangan diri lulusan Program Studi Ilmu Komputer UNJ', 53),
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
(53, 'Kemampuan untuk terus belajar sepanjang hayat', 98);

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
(149, 95, '>15 juta');

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
(4, 'Statistika', '', 1);

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
(7, 'Sangat Baik', 53),
(8, 'Baik', 53),
(9, 'Cukup', 53),
(10, 'Kurang', 53),
(17, 'Sangat Besar', 78),
(18, 'Besar', 78),
(19, 'Cukup Besar', 78),
(20, 'Kurang', 78),
(21, 'Tidak Sama Sekali', 78),
(22, '1', 98),
(23, '2', 98),
(24, '3', 98),
(25, '4', 98),
(26, '5', 98);

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
(2, '', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'pengguna', 1, 'aktif'),
(3, 'KOOR13136', 'koor13136', 'fcea920f7412b5da7be0cf42b8c93759', 'koorprodi', 1, 'aktif'),
(4, '', 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 'superadmin', 1, 'aktif'),
(12, 'DOS0011026006', '0011026006', '1630f5a8dd4d852f516f8132f0dab31a', 'koorprodi', 1, 'aktif'),
(13, 'DOS0021018204', '0021018204', 'cb35066d0a18667c7e3e919a3cb8221d', 'dosen', 2, 'aktif'),
(15, 'DOS0015067705', '0015067705', '0015067705', 'dosen', 1, 'aktif'),
(30, 'ALU3145136217', '3145136217', '4ec904584dca56889485d63a84919b1a', 'alumni', 1, 'aktif'),
(31, 'ALU3145136218', '3145136218', '66b3a4cf0b3fd0c56d11f9cf8c8325fa', 'alumni', 1, 'aktif'),
(32, 'ALU3145136208', '3145136208', 'b4302799821d6bfd9c7097f9a6ad8f6a', 'alumni', 1, 'aktif'),
(33, 'ALU3145136211', '3145136211', '9a1525e19c013671b54a9456263db863', 'alumni', 1, 'aktif'),
(34, 'ALU3145136223', '3145136223', '3542c021c7d9a07ba812e7c688fedd0d', 'alumni', 1, 'aktif'),
(35, 'ALU3145136197', '3145136197', 'c4cb0ca61856d1b09c967de0bac0be56', 'alumni', 1, 'aktif'),
(36, 'ALU3145136212', '3145136212', 'c1c920fb3af5f905f6cbf3856eb8440f', 'alumni', 1, 'aktif'),
(37, 'ALU3145136196', '3145136196', 'b9d12d59b5e1656696f8f42dd9fc5e25', 'alumni', 1, 'aktif'),
(38, 'ALU3145136193', '3145136193', '36f73abbc685c647eaebab77352c9d21', 'alumni', 1, 'aktif'),
(39, '', 'admin_mtk', 'fbf45fcf8f91f6bf19102b69333739a1', 'admin', 3, 'aktif'),
(40, '', 'admin_pendmat', '2b3a43903f5240134cb90294ab3e4173', 'admin', 2, 'aktif'),
(41, 'ALU12345', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'alumni', 1, 'aktif');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `alumni_instansi`
--
ALTER TABLE `alumni_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jawaban_alumni`
--
ALTER TABLE `jawaban_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `jawaban_pengguna`
--
ALTER TABLE `jawaban_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `koorprodi`
--
ALTER TABLE `koorprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notif_kuesioner`
--
ALTER TABLE `notif_kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `pertanyaan_skala`
--
ALTER TABLE `pertanyaan_skala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skala_nilai`
--
ALTER TABLE `skala_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  ADD CONSTRAINT `pekerjaan_fk1` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pekerjaan_fk3` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
