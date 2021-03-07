-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 10:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_c030318045_p8`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`artikel_id` int(11) NOT NULL,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_slug` varchar(255) NOT NULL,
  `artikel_konten` longtext NOT NULL,
  `artikel_sampul` varchar(255) NOT NULL,
  `artikel_author` int(11) NOT NULL,
  `artikel_kategori` int(11) NOT NULL,
  `artikel_status` enum('publish','draft') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_tanggal`, `artikel_judul`, `artikel_slug`, `artikel_konten`, `artikel_sampul`, `artikel_author`, `artikel_kategori`, `artikel_status`) VALUES
(2, '2020-12-01 17:53:07', 'Apa Tren Terbaru Web Design 2019 ?', 'apa-tren-terbaru-web-design-2019', '<h1>Tren Web Design 2019</h1>\r\n\r\n<p><strong>Perancangan web</strong>&nbsp;(<a href="https://id.wikipedia.org/wiki/Web_design">web design</a>) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web&nbsp;<a href="https://id.wikipedia.org/w/index.php?title=Konten_web&amp;action=edit&amp;redlink=1">konten</a>&nbsp;ditampilkan, (biasanya berupa&nbsp;<a href="https://id.wikipedia.org/wiki/Hypertext">hypertext</a>&nbsp;atau&nbsp;<a href="https://id.wikipedia.org/w/index.php?title=Hypermedia&amp;action=edit&amp;redlink=1">hypermedia</a>) yang dikirimkan ke pengguna akhir melalui&nbsp;<a href="https://id.wikipedia.org/wiki/World_Wide_Web">World Wide Web</a>, dengan menggunakan sebuah&nbsp;<a href="https://id.wikipedia.org/wiki/Browser_web">browser web</a>&nbsp;atau perangkat lunak berbasis web. Tujuan dari web design adalah untuk membuat&nbsp;<a href="https://id.wikipedia.org/wiki/Website">website</a>&mdash;sekumpulan konten&nbsp;<a href="https://id.wikipedia.org/wiki/Online">online</a>&nbsp;termasuk dokumen dan&nbsp;<a href="https://id.wikipedia.org/wiki/Aplikasi_web">aplikasi</a>&nbsp;yang berada pada&nbsp;<a href="https://id.wikipedia.org/wiki/Server_web">server web</a>&nbsp;/&nbsp;<a href="https://id.wikipedia.org/wiki/Server">server</a>. Sebuah website dapat berupa sekumpulan teks, gambar, suara dan konten lainnya, serta dapat bersifat interaktif ataupun statis.</p>\r\n', '2_py.PNG', 1, 3, 'publish'),
(3, '2020-12-15 17:29:30', 'IOT, Membawa Berkah Atau Musibah', 'iot-membawa-berkah-atau-musibah', '<h3>Apa itu IOT ?</h3>\r\n\r\n<p>IoT adalah jaringan raksasa dari perangkat yang tehubung terus menerus/kontinu melalui perangkat elektonik. Semua bekerja mengumpulkan dan membagikan data atau informasi dari dunia nyata serta mempunyai kemampuan untuk mengendalikan secara otomatis.</p>\r\n\r\n<p>&ldquo;Thing&rdquo; pada konteks IoT dapat berupa perangkat apa saja dengan sensor internal apa pun yang memiliki kemampuan untuk mengumpulkan dan mentransfer data melalui jaringan tanpa intervensi manualMasing-masing perangkat akan belajar dari pengalaman yang didapat dari perangkat lain, layaknya seorang manusia.</p>\r\n\r\n<p>Interkoneksi beberapa perangkat tersemat (embedded deivices) akan menghasilkan otomatisasi di hampir semua bidang dan juga memungkinkan aplikasi tingkat lanjut. Hal ini menghasilkan peningkatan akurasi, efisiensi dan manfaat dalam segi ekonomi dengan intervensi / campur tangan manusia yang berkurang.</p>\r\n\r\n<p>IoT memungkinkan perangkat dikontrol dari jarak jauh dengan internet, maka hal tersebut menciptakan peluang untuk langsung menghubungkan &amp; mengintegrasikan dunia fisik ke sistem berbasis komputer menggunakan sensor dan internet.</p>\r\n\r\n<p>Tantangan IoT</p>\r\n\r\n<ul>\r\n	<li>Safety &amp; Security : perangkat yang terhubung dan sebanyak 50 bilion alat pada tahun 2020. Sebanyak itu pula perangkat yang harus dilindungi dari serangan</li>\r\n	<li>Multiple Devices : dengan pertumbuhan eksponensial dari IoT ini berarti akan semakin banyak perangkat yang menggunakan jaringan, yang akan menimbulkan ketegangan yang luar biasa pada jaringan Anda sendiri</li>\r\n</ul>\r\n\r\n<p>Apakah IoT Membawah Berkah atau Musibah ?</p>\r\n\r\n<ul>\r\n	<li>Berkah jika digunakan dengan baik dan memiliki pengaman yang memadai</li>\r\n	<li>Bencana jika dimanfaatkan dengan cara yang tidak benar dan memiliki pengaman yang tidak memadai</li>\r\n</ul>\r\n', '1301120.jpg', 3, 3, 'publish'),
(4, '2020-12-24 15:20:54', 'Marquez Yakin Espargaro Bakal Berikan Kontribusi Luar Biasa untuk Honda', 'marquez-yakin-espargaro-bakal-berikan-kontribusi-luar-biasa-untuk-honda', '<p>&nbsp;<strong><a href="https://www.okezone.com/tag/marc-marquez">Marc Marquez</a></strong>&nbsp;memberikan pandangannya soal keputusan&nbsp;<strong><a href="https://www.okezone.com/tag/pol-espargaro">Pol Espargaro</a></strong>&nbsp;menerima pinangan dari Tim Repsol Honda. Ya, Marquez memiliki keyakinan besar bahwa Espargaro bakal memberikan dampak luar biasa untuk Tim Honda.</p>\r\n\r\n<p>Sebagaimana diketahui, dalam beberapa bulan terakhir rumor Espargaro bergabung dengan Tim Honda memang sudah menyeruak ke permukaan. Terlebih setelah manajemen Tim KTM mengumumkan line-up pembalap mereka di MotoGP musim 2021.</p>\r\n\r\n<p>Pada pengumuman line-up pembalap tersebut, Tim KTM sendiri memang tidak menyertakan nama Espargaro sebagai rider mereka. Hingga akhirnya, manajemen Tim Honda pun mengumumkan perekrutan Espargaro sebagai pembalap mereka di MotoGP 2021.</p>\r\n', '8l5euxky4blfnjbtis8l_11566.jpg', 1, 4, 'publish'),
(5, '2020-12-24 15:22:34', 'Anthony Davis Perpanjang Kontrak dengan Lakers, Dapat Gaji Rp2,6 Triliun', 'anthony-davis-perpanjang-kontrak-dengan-lakers-dapat-gaji-rp26-triliun', '<p><strong>LOS ANGELES</strong>&nbsp;&ndash;&nbsp;<a href="https://www.okezone.com/tag/anthony-davis">Anthony Davis&nbsp;</a>telah sepakat memperpanjang kontraknya bersama&nbsp;<a href="https://www.okezone.com/tag/la-lakers">Los Angeles (LA) Lakers&nbsp;</a>untuk durasi lima tahun ke depan. Dengan memperpanjang kontrak itu, Davis akan mendapatkan gaji senilai Rp2,6 triliun.</p>\r\n\r\n<p>Setelah menolak hak opsi pemain dan menjadi unrestricted free agent di jeda antarmusim kali ini, Davis tergolong sebagai pemain yang cukup lama dalam menandatangani kontrak baru. Dia memang sudah memastikan akan bertahan dengan Lakers, tetapi masih menimbang durasi kontrak yang paling tepat.</p>\r\n\r\n<p>Agen Davis, Rich Paul, dari Klutch Sports Group mengatakan kepada ESPN dan Los Angeles Times jika Davis mencapai kesepakatan kontrak lima tahun dengan nilai maksimum USD190 juta (Rp 2,6 triliun). Menurut outlet, kesepakatan itu mencakup opsi penghentian lebih awal sebelum tahun kelima kesepakatan pada 2024-2025.</p>\r\n\r\n<p>Menurut ESPN, forward berusia 27 tahun itu mempertimbangkan beberapa opsi kontrak jangka pendek dan panjang sebelum menerima kerja sama lima tahun.</p>\r\n\r\n<p>&ldquo;Dalam gelembung di Orlando, Davis membuktikan bahwa dia adalah salah satu pemain yang paling lengkap dan dominan,&rdquo; kata manajer umum Lakers Rob Pelinka dalam sebuah pernyataan.</p>\r\n\r\n<p>&ldquo;Sekarang, penggemar Lakers dapat menyaksikan AD terus tumbuh dan memimpin tim kami untuk beberapa tahun mendatang. Ini benar-benar momen yang diberkati untuk Lakers Nation,&rdquo; lanjutnya.</p>\r\n', '46enc67fbk0vcojdyr6y_21331.jpg', 1, 4, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `asuransi`
--

CREATE TABLE IF NOT EXISTS `asuransi` (
`id` int(11) NOT NULL,
  `ktp` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(5) NOT NULL,
  `tmpt` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status_nikah` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `warga` char(5) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `telp_rumah` varchar(15) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `status_kel` varchar(50) NOT NULL,
  `jum_anak` int(5) NOT NULL,
  `rekening` varchar(10) NOT NULL,
  `no_rek` varchar(15) NOT NULL,
  `nama_rek` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asuransi`
--

INSERT INTO `asuransi` (`id`, `ktp`, `nama`, `jk`, `tmpt`, `tgl_lahir`, `status_nikah`, `hp`, `npwp`, `warga`, `kelas`, `email`, `alamat`, `rt`, `kode_pos`, `telp_rumah`, `kelurahan`, `kk`, `status_kel`, `jum_anak`, `rekening`, `no_rek`, `nama_rek`) VALUES
(2, 21321, 'Robith', 'L', 'Banjarmasin', '2021-02-24', 'Kawin', '0895700801891', '2312321', 'WNI', 'Kelas I', 'kokobops123@gmail.com', 'Cemara2', '21321', 70123, '2312121', 'sei miai', '123412412122', 'Kepala Keluarga', 0, 'BCA', '23121', 'Aziz'),
(4, 2147483647, 'Edor Maguire', 'L', 'Banjarmasin', '1999-03-02', 'Belum Kawin', '0823237823', '09.254.294.3-407.00', 'WNI', 'Kelas I', 'edorkece@gmail.com', 'Jl. Antasan Kecil Timur No.43', '02/02', 70123, '05110892383232', 'sei miai', '6855353434', 'Lainnya', 0, 'BNI', '9892738262332', 'Edor Maguire');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
`halaman_id` int(11) NOT NULL,
  `halaman_judul` varchar(255) NOT NULL,
  `halaman_slug` varchar(255) NOT NULL,
  `halaman_konten` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`halaman_id`, `halaman_judul`, `halaman_slug`, `halaman_konten`) VALUES
(1, 'Kontak Kami', 'kontak-kami', '<p>Berikut ini adalah kontak kami yang bisa anda dihubungi :</p><p><strong>Whatsapp</strong> :0895-7008-01891</p><p>Email : rezanialwi@gmail.com</p><p>Website :https://www.malasngoding.com</p>'),
(2, 'Tentang', 'tentang', '<p><strong>Website Sederhana ini</strong></p>\r\n'),
(3, 'Layanan', 'layanan', '<p>Setiap hari seni sampai jumat</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_slug` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_slug`) VALUES
(3, 'Web Design', 'web-design'),
(4, 'Olahraga', 'olahraga'),
(5, 'Teknologi', 'teknologi'),
(6, 'Film', 'film'),
(7, 'Travel', 'travel');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `link_facebook` varchar(255) NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  `link_instagram` varchar(255) NOT NULL,
  `link_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`nama`, `deskripsi`, `logo`, `link_facebook`, `link_twitter`, `link_instagram`, `link_github`) VALUES
('C030318045', 'praktek web 13', 'logo_poliban.jpg', 'rezani', 'rezani_a', 'rezani_a', 'rezanii');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`pengguna_id` int(5) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','penulis') NOT NULL,
  `pengguna_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`) VALUES
(1, 'M. Rezani Alwi', 'rezanialwi@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(2, 'Wak johny', 'johny@malasngoding.com', 'johny', '1e75411586c9180c21db5f8dfb20b314', 'penulis', 1),
(3, 'Robith', 'robith@poliban.com', 'robith', 'd6360176c68660cfc480369e4b3a261c', 'penulis', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `asuransi`
--
ALTER TABLE `asuransi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
 ADD PRIMARY KEY (`halaman_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
 ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `asuransi`
--
ALTER TABLE `asuransi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
MODIFY `halaman_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `pengguna_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
