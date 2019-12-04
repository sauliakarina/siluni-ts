-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 09:36 AM
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
(32, 'ALU3145136223', '3145136223', 'Agustinus Pubimbaga', 'Laki-laki', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.59', NULL, '', '', '', '081281011459', '', 'yes', 'yes', 'yes', 'aktif', 1),
(33, 'ALU3145136197', '3145136197', 'Muhammad Fachrizal', 'Laki-laki', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.41', NULL, '', '', '', '085711402970', '', 'yes', 'yes', 'yes', 'aktif', 1),
(34, 'ALU3145136212', '3145136212', 'Anantassa Fitri Andini', 'Perempuan', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.8', NULL, '', '', '', '081319508117', '', 'yes', 'yes', 'yes', 'aktif', 1),
(35, 'ALU3145136196', '3145136196', 'Mikael Yurubeli', 'Laki-laki', 'Jakarta', '0000-00-00', ' Jalan Hikmah No 64, Cilangkap, Cipayung, Jakarta Timur', '', '2013', '2017', '0000-00-00', '3.56', '', '', '', '', '087875076738', '', 'yes', 'yes', 'yes', 'aktif', 1),
(36, 'ALU3145136193', '3145136193', 'Hana Maulinda', 'Perempuan', '', '0000-00-00', '', '', '2013', '2017', '0000-00-00', '3.56', NULL, '', '', '', '081318400299', '', 'yes', 'yes', 'yes', 'aktif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `isi`, `foto`) VALUES
(1, '<p>Yth. Alumni Ilmu Komputer FMIPA UNJ</p>\r\n<p style=\"text-align: justify;\">FMIPA UNJ sedang melakukan Tracer Study (penelusuran alumni) pada Program Studi Ilmu Komputer. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut, Kami mohon kesediaan alumni UNJ yang kami hormati untuk mengisi kuesioner Tracer Study yang dapat diisi pada website ini</p>', '1571833006.png');

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
(14, 'PT Harmoni Solusi Bisnis ', NULL, NULL, 1),
(15, 'PT Imkahfa ', NULL, NULL, 1),
(16, 'PT GSI (United Tractor )', NULL, NULL, 1);

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
  `prodiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `customID`, `nama_kuesioner`, `responden`, `tanggal_dibuat`, `status`, `prodiID`) VALUES
(10, 'RFGNCSQG', 'Kompetensi', 'pengguna', '2019-11-27 01:14:59', 'aktif', 1),
(12, 'CB32B98M', 'Pekerjaan', 'alumni', '2019-12-04 01:17:24', 'aktif', 1),
(13, '5B7C2P3D', 'Pendidikan', 'alumni', '2019-12-04 01:46:24', 'aktif', 1);

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
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `posisi`, `gaji`, `periode_kerja`, `profil`, `id_alumni`, `id_pengguna`) VALUES
(36, 'PHP Engineer', '3jt - 4jt', '2017-2018', '', 28, 49),
(37, 'Software Engineer', '< 1jt', '2018-Sekarang', '', 28, 50),
(38, 'Front End Developer', '> 4jt', '', '', 29, 51),
(39, 'Asisten Wakil 1 DPD R1', '> 4jt', '', '', 30, 52),
(40, 'Front End Developer', '< 1jt', '', '', 31, 53),
(41, 'Java Pega Programmer', '< 1jt', '', '', 32, 54),
(42, 'Web Developer', '> 4jt', '', '', 33, 55),
(43, 'IT Developer', '< 1jt', '', '', 34, 56),
(44, 'Front End Developer', '> 4jt', '2017-Sekarang', '', 35, 57),
(45, 'IT Bisnis', '> 4jt', '', '', 36, 58),
(46, 'Web Designer – Front End', '> 4jt', '2019-Sekarang', 'Programmer', 35, 59);

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
  `id_instansi` int(11) NOT NULL,
  `divisi` varchar(255) DEFAULT NULL,
  `prodiID` int(11) NOT NULL,
  `isDelete` enum('yes','no') DEFAULT 'no',
  `tandai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `penggunaID`, `pengguna_nama`, `pengguna_email`, `pengguna_telepon`, `id_instansi`, `divisi`, `prodiID`, `isDelete`, `tandai`) VALUES
(49, '58B6DQWF', '', '', '', 9, '', 1, 'no', 'checked'),
(50, 'SSS8DFVT', '', '', '', 10, '', 1, 'no', 'checked'),
(51, 'M4TMY9XX', NULL, NULL, NULL, 3, NULL, 1, 'no', 'checked'),
(52, 'V2V8PBRN', NULL, NULL, NULL, 13, NULL, 1, 'no', ''),
(53, 'R8VC6G6K', NULL, NULL, NULL, 14, NULL, 1, 'no', ''),
(54, '89MDXBFV', NULL, 'penggunasinarmas@mail.com', '', 7, '', 1, 'no', 'checked'),
(55, 'FKSDPPFT', NULL, NULL, NULL, 15, NULL, 1, 'no', ''),
(56, '3JXDSMXD', NULL, NULL, NULL, 16, NULL, 1, 'no', ''),
(57, '2B4ZKQRZ', 'Pengguna harmoni', 'pengguna@harmoni.com', '0812345667', 14, 'Teknologi Informasi', 1, 'no', ''),
(58, 'NFCWZH7G', NULL, NULL, NULL, 11, NULL, 1, 'no', ''),
(59, '8V7P66WJ', 'Test', 'pengguna1@gmail.com', '0812345667', 12, 'Teknologi Informasi', 1, 'no', '');

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
(54, 'Saran Bapak/Ibu untuk perbaikan lulusan Program Studi Ilmu Komputer UNJ', 'isian', 'tidak', 'ya', 'PR1574911269', 10, 'no'),
(59, 'Masa tunggu Saudara dari kelulusan hingga mendapat pekerjaan pertama kali', 'pilihan', 'tidak', 'tidak', 'PR1575422613', 12, 'no'),
(60, 'Apakah pekerjaan Saudara ini berhubungan dengan bidang ilmu yang Saudara pelajari di Perguruan Tinggi?  Jelaskan jawaban anda', 'pilihan', 'ya', 'tidak', 'PR1575422692', 12, 'no'),
(61, 'Bagaimana anda mencari pekerjaan?', 'ganda', 'ya', 'tidak', 'PR1575422991', 12, 'no'),
(62, 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?', 'isian', 'tidak', 'tidak', 'PR1575423351', 12, 'no'),
(63, 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?', 'isian', 'tidak', 'tidak', 'PR1575423401', 12, 'no'),
(64, 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', 'isian', 'tidak', 'tidak', 'PR1575423418', 12, 'no'),
(65, 'Adakah hambatan/kendala yang Saudara alami dalam menyesuaikan diri dengan pekerjaan?   Jelaskan alasan anda', 'pilihan', 'ya', 'tidak', 'PR1575423501', 12, 'no'),
(66, 'Test pertanyaan', 'pilihan', 'ya', 'tidak', '', 13, 'yes'),
(77, 'Seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di prodi anda?', 'skala', 'tidak', 'tidak', '', 13, 'yes'),
(78, 'Seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di prodi anda?', 'skala', 'tidak', 'tidak', 'PR1575447057', 13, 'no'),
(79, 'Setelah Saudara lulus dari UNJ, apakah Saudara melanjutkan pendidikan lagi?  ', 'pilihan', 'tidak', 'tidak', 'PR1575447158', 13, 'no'),
(80, 'Dimana Saudara melanjutkan pendidikan?', 'isian', 'tidak', 'tidak', 'PR1575447232', 13, 'no'),
(81, 'Apa nama program studi dimana anda melanjutkan pendidikan?', 'isian', 'tidak', 'tidak', 'PR1575447405', 13, 'no'),
(83, 'Apakah S1 anda linear dengan S2 ?', 'pilihan', 'tidak', 'tidak', 'PR1575447916', 13, 'no'),
(84, 'Setelah Saudara lulus dari UNJ, apakah Saudara meningkatkan kompetensi diri melalui : Sebutkan nama dan lamanya', 'pilihan', 'ya', 'tidak', 'PR1575448012', 13, 'no');

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
(24, 'Diskusi', 78);

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
(83, 59, '1-3 bln'),
(84, 59, '4-6 bln'),
(85, 59, '7-9 bln'),
(86, 59, '10-12 bln'),
(87, 59, '>12 bln'),
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
(119, 79, 'Ya'),
(120, 79, 'Tidak'),
(121, 83, 'Ya'),
(122, 83, 'Tidak'),
(123, 84, 'Penataran/Pelatihan'),
(124, 84, 'Short Course'),
(125, 84, 'Belum Ada');

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
(21, 'Tidak Sama Sekali', 78);

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
(38, 'ALU3145136193', '3145136193', '36f73abbc685c647eaebab77352c9d21', 'alumni', 1, 'aktif');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `koorprodi`
--
ALTER TABLE `koorprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `pertanyaan_skala`
--
ALTER TABLE `pertanyaan_skala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pilihan_jawaban`
--
ALTER TABLE `pilihan_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skala_nilai`
--
ALTER TABLE `skala_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_fk1` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
