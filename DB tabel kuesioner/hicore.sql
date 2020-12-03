-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.21 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hicore
CREATE DATABASE IF NOT EXISTS `hicore` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `hicore`;

-- Dumping structure for table hicore.jawaban_kuesioner
CREATE TABLE IF NOT EXISTS `jawaban_kuesioner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jawaban` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_id` int NOT NULL,
  `pasien_id` int NOT NULL,
  `kuesioner_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kuesioner_jawaban_kuesioner_fk` (`kuesioner_id`),
  KEY `pasien_jawaban_kuesioner_perawatan_diri_fk` (`pasien_id`),
  CONSTRAINT `kuesioner_jawaban_kuesioner_fk` FOREIGN KEY (`kuesioner_id`) REFERENCES `kuesioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pasien_jawaban_kuesioner_perawatan_diri_fk` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hicore.jawaban_kuesioner: ~22 rows (approximately)
/*!40000 ALTER TABLE `jawaban_kuesioner` DISABLE KEYS */;
INSERT IGNORE INTO `jawaban_kuesioner` (`id`, `tanggal`, `jawaban`, `jenis_id`, `pasien_id`, `kuesioner_id`) VALUES
	(63, '2020-12-01', '1', 0, 1, 1),
	(64, '2020-12-01', '1', 0, 1, 2),
	(65, '2020-12-01', '0', 0, 1, 3),
	(66, '2020-12-01', '1', 0, 1, 4),
	(67, '2020-12-01', '0', 0, 1, 5),
	(68, '2020-12-01', '1', 0, 1, 6),
	(69, '2020-12-01', '0', 0, 1, 7),
	(70, '2020-12-01', '1', 0, 1, 8),
	(71, '2020-12-01', '0', 0, 1, 9),
	(72, '2020-12-01', '1', 0, 1, 10),
	(73, '2020-12-01', '0', 0, 1, 11),
	(74, '2020-12-01', '1', 0, 1, 12),
	(75, '2020-12-01', '0', 0, 1, 13),
	(76, '2020-12-01', '1', 0, 1, 14),
	(77, '2020-12-01', '1', 0, 1, 15),
	(78, '2020-12-01', '0', 0, 1, 16),
	(79, '2020-12-01', '1', 0, 1, 17),
	(80, '2020-12-01', '0', 0, 1, 18),
	(81, '2020-12-01', '1', 0, 1, 19),
	(82, '2020-12-01', '0', 0, 1, 20),
	(83, '2020-12-01', '1', 0, 1, 21),
	(84, '2020-12-01', '1', 0, 1, 22),
	(85, '2020-12-03', '1', 1, 1, 1),
	(86, '2020-12-03', '1', 1, 1, 2),
	(87, '2020-12-03', '0', 1, 1, 3),
	(88, '2020-12-03', '1', 1, 1, 4),
	(89, '2020-12-03', '0', 1, 1, 5),
	(90, '2020-12-03', '1', 1, 1, 6),
	(91, '2020-12-03', '0', 1, 1, 7),
	(92, '2020-12-03', '0', 1, 1, 8),
	(93, '2020-12-03', '0', 1, 1, 9),
	(94, '2020-12-03', '1', 1, 1, 10),
	(95, '2020-12-03', '1', 1, 1, 11),
	(96, '2020-12-03', '0', 1, 1, 12),
	(97, '2020-12-03', '0', 1, 1, 13),
	(98, '2020-12-03', '1', 1, 1, 14),
	(99, '2020-12-03', '0', 1, 1, 15),
	(100, '2020-12-03', '1', 1, 1, 16),
	(101, '2020-12-03', '0', 1, 1, 17),
	(102, '2020-12-03', '0', 1, 1, 18),
	(103, '2020-12-03', '1', 1, 1, 19),
	(104, '2020-12-03', '1', 1, 1, 20),
	(105, '2020-12-03', '0', 1, 1, 21),
	(106, '2020-12-03', '1', 1, 1, 22);
/*!40000 ALTER TABLE `jawaban_kuesioner` ENABLE KEYS */;

-- Dumping structure for table hicore.jenis
CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hicore.jenis: ~4 rows (approximately)
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
INSERT IGNORE INTO `jenis` (`id`, `nama`, `video`) VALUES
	(1, 'Pengetahuan', '-'),
	(2, 'Persepsi', '-'),
	(3, 'Tingkat Stress', '-'),
	(4, 'Pengendalian diri', '-');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;

-- Dumping structure for table hicore.kuesioner
CREATE TABLE IF NOT EXISTS `kuesioner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(350) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jenis_id` int NOT NULL,
  `sub_jenis` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kunci` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jenis_kuesioner_fk` (`jenis_id`),
  CONSTRAINT `jenis_kuesioner_fk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hicore.kuesioner: ~93 rows (approximately)
/*!40000 ALTER TABLE `kuesioner` DISABLE KEYS */;
INSERT IGNORE INTO `kuesioner` (`id`, `pertanyaan`, `jenis_id`, `sub_jenis`, `kunci`) VALUES
	(1, 'Tekanan darah diastolik atau sistolik yang tinggi menunjukkan terjadi peningkatan tekanan darah ', 1, '', '1'),
	(2, 'tekanan darah diastolik yang tinggi juga menunjukkan peningkatan tekanan darah ', 1, '', '1'),
	(3, 'Obat untuk menurunkan tekanan darah harus diminum setiap hari', 1, '', '1'),
	(4, 'orang dengan tekanan darah tinggi harus minum obat mereka hanya ketika mereka merasa sakit ', 1, '', '0'),
	(5, 'Orang dengan tekanan darah tinggi harus minum obat sepanjang hidupnya ', 1, '', '1'),
	(6, 'orang dengan tekanan darah tinggi,minum obat sesuai dengan caranya sendiri  ', 1, '', '0'),
	(7, 'Bila dengan minum obat, sdh dapat menurunkan tekanan darah, maka tidak perlu lagi mengubah gaya hidup ', 1, '', '0'),
	(8, 'Peningkatan tekanan darah adalah hasil dari penuaan, jadi perawatan tidak perlu dilakukan', 1, '', '0'),
	(9, 'Bila orang dengan tekanan darah tinggi sudah mengubah gaya hidup,maka tidak perlu lagi untuk perawatan ', 1, '', '0'),
	(10, 'orang dengan tekanan darah tinggi dapat makan makanan asin selama mereka minum obat secara teratur ', 1, '', '0'),
	(11, 'Orang dengan tekanan darah tinggi dapat minum minuman beralkohol ', 1, '', '0'),
	(12, 'Orang dengan tekanan darah tinggi tidak boleh merokok ', 1, '', '1'),
	(13, 'Orang dengan tekanan darah tinggi harus sering makan buah dan sayuran ', 1, '', '1'),
	(14, 'Orang dengan tekanan darah tinggi, cara memasak terbaik adalah menggoreng ', 1, '', '0'),
	(15, 'Orang dengan tekanan darah tinggi, cara memasak terbaik adalah merebus /mengukus atau memanggang ', 1, '', '1'),
	(16, 'Jenis daging terbaik untuk orang dengan tekanan darah tinggi adalah daging merah seperti sapi,kerbau,kambing ', 1, '', '0'),
	(17, 'Jenis daging terbaik untuk individu dengan tekanan darah tinggi adalah daging putih seperti unggas ', 1, '', '1'),
	(18, 'peningkatan tekanan darah dapat menyebabkan kematian dini/awal jika tidak diobati ', 1, '', '1'),
	(19, 'peningkatan tekanan darah dapat menyebabkan stroke, jika tidak ditangani ', 1, '', '1'),
	(20, 'peningkatan tekanan darah dapat menyebabkan penyakit jantung, seperti serangan jantung, jika tidak ditangani ', 1, '', '1'),
	(21, 'peningkatan tekanan darah dapat menyebabkan penyakit gagal ginjal, jika tidak ditangani ', 1, '', '1'),
	(22, 'peningkatan tekanan darah dapat menyebabkan gangguan penglihatan/kabur, jika tidak ditangani ', 1, '', '1'),
	(23, 'Saya pikir bahwa diet/makan sehat saja berhasil untuk mengendalikan hipertensi', 2, '', NULL),
	(24, 'Saya pikir mudah bagi saya untuk mengatur makan sehat saya. ', 2, '', NULL),
	(25, 'Saya pikir saya sudah memenuhi makan sehat ', 2, '', NULL),
	(26, 'Saya merasa bisa menggunakan & menikmati makanan rendah lemak.', 2, '', NULL),
	(27, 'Saya merasa buah hanya bisa membantu saya mengendalikan hipertensi  ', 2, '', NULL),
	(28, 'Saya mencoba makan buah hampir setiap hari. ', 2, '', NULL),
	(29, 'Saya mencoba makan sayur setiap hari. ', 2, '', NULL),
	(30, 'Saya pikir saya akan menikmati makanan tanpa garam ', 2, '', NULL),
	(31, 'Saya ingin menambahkan lebih sedikit garam dalam makanan saya ', 2, '', NULL),
	(32, 'makan tinggi serat adalah hal penting untuk saya terus menerus saya lakukan.', 2, '', NULL),
	(33, 'Saya mencoba secara teratur untuk mengurangi lemak hewani dari makanan saya. ', 2, '', NULL),
	(34, 'Saya pikir saya ingin mengurangi asupan lemak jenuh seperti daging sapi, kambing,susu tinggi lemak,makanan berminyak dan berlemak dll', 2, '', NULL),
	(35, 'Saya mencoba makan asam lemak Omega-3 secara teratur seperti minyak ikan setiap minggu.', 2, '', NULL),
	(36, 'Saya ingin mengganti susu murni dengan susu rendah lemak untuk mengurangi asupan lemak ', 2, '', NULL),
	(37, 'Saya secara teratur mengurangi asupan kafein misalnya kopi, teh, minuman bersoda.', 2, '', NULL),
	(38, 'Saya pikir latihan dapat membantu saya mengendalikan hipertensi ', 2, '', NULL),
	(39, 'Saya mencoba meningkatkan aktivitas harian saya di rumah dan di tempat kerja ', 2, '', NULL),
	(40, 'Saya tidak punya waktu untuk berolahraga.  ', 2, '', NULL),
	(41, 'Saya mencoba memeriksa berat badan saya secara teratur. ', 2, '', NULL),
	(42, 'Saya pikir saya tidak bisa menurunkan berat badan saya ', 2, '', NULL),
	(43, 'Saya pikir saya perlu saran untuk menurunkan berat badan', 2, '', NULL),
	(44, 'Saya memiliki lebih banyak kegugupan di sepanjang hidup saya. ', 2, '', NULL),
	(45, 'Saya mencoba mengurangi stres dalam pekerjaan saya ', 2, '', NULL),
	(46, 'Saya percaya bahwa saya terlalu banyak berpikir.  ', 2, '', NULL),
	(47, 'Saya mencoba untuk pergi dari perokok. ', 2, '', NULL),
	(48, 'Saya tidak dapat menghindari rokok dan konsumsi alkohol. ', 2, '', NULL),
	(49, 'Saya tidak suka mengikuti jenis obat apa pun.  ', 2, '', NULL),
	(50, 'Saya percaya bahwa pengobatan akan membantu saya merasa lebih baik.', 2, '', NULL),
	(51, 'seberapa sering Anda marah karena sesuatu yang terjadi secara tidak terduga?', 3, '', NULL),
	(52, 'seberapa sering Anda merasa bahwa Anda tidak dapat mengendalikan hal-hal penting dalam hidup Anda ?', 3, '', NULL),
	(53, 'seberapa sering Anda merasa gugup dan "stres" ?', 3, '', NULL),
	(54, 'seberapa sering Anda berhasil menangani gangguan hidup Anda yang menjengkelkan ?', 3, '', NULL),
	(55, 'seberapa sering Anda merasa bahwa Anda mampu mengatasi perubahan penting yang terjadi dalam hidup Anda ?', 3, '', NULL),
	(56, 'seberapa sering Anda merasa yakin tentang kemampuan Anda menangani masalah pribadi Anda ?', 3, '', NULL),
	(57, 'seberapa sering Anda merasa bahwa segala sesuatunya berjalan sesuai keinginan Anda?', 3, '', NULL),
	(58, 'seberapa sering Anda menemukan bahwa Anda tidak dapat mengatasi semua hal yang harus Anda lakukan ?', 3, '', NULL),
	(59, 'seberapa sering Anda dapat mengendalikan gangguan dalam hidup Anda?', 3, '', NULL),
	(60, 'seberapa sering Anda merasa bahwa Anda berada di atas segalanya?', 3, '', NULL),
	(61, 'seberapa sering Anda marah karena hal-hal yang terjadi di luar kendali Anda?', 3, '', NULL),
	(62, 'seberapa sering Anda menemukan diri Anda memikirkan hal-hal yang harus Anda selesaikan?', 3, '', NULL),
	(63, 'seberapa sering Anda dapat mengontrol cara Anda menghabiskan waktu?', 3, '', NULL),
	(64, 'seberapa sering Anda merasa sangat kesulitan sehingga Anda tidak dapat mengatasinya?', 3, '', NULL),
	(65, 'Minum obat tekanan darah ?', 4, 'obat-obatan', NULL),
	(66, 'Minum obat tekanan darah pada waktu yang sama setiap hari?', 4, 'obat-obatan', NULL),
	(67, 'Minum obat tekanan darah sesuai dosis yang dianjurkan?', 4, 'obat-obatan', NULL),
	(68, 'Mengikuti rencana makan sehat ?', 4, 'diet', NULL),
	(69, 'Makan  keripik  kentang,  kacang  asin, ikan  asin  popcorn  asin  atau  makanan yang asin-asin?', 4, 'diet', NULL),
	(70, 'Makan daging olahan seperti hamburger bakso,atau sosis dll?', 4, 'diet', NULL),
	(71, 'Makan daging bakar atau ikan bakar?', 4, 'diet', NULL),
	(72, 'Makan  acar,  buah  zaitun  atau  sayuran asin?', 4, 'diet', NULL),
	(73, 'Makan lima porsi atau lebih buah-buahan dan sayuran?', 4, 'diet', NULL),
	(74, 'Makan malam yang dibekukan atau pizza beku?', 4, 'diet', NULL),
	(75, 'Makan roti yang dibeli di toko atau yang di kemas?', 4, 'diet', NULL),
	(76, 'Memberi garam makanan Anda di meja?', 4, 'diet', NULL),
	(77, 'Menambahkan garam ke makanan ketika Anda memasak?', 4, 'diet', NULL),
	(78, 'Makan  makanan  yang  digoreng  seperti ayam, kentang goreng, atau ikan?', 4, 'diet', NULL),
	(79, 'Menghindari makanan berlemak?', 4, 'diet', NULL),
	(80, 'Melakukan aktivitas fisik setidaknya 30 menit ?', 4, 'aktivitas_fisik', NULL),
	(81, 'Melakukan aktivitas fisik (seperti berenang, berjalan atau bersepeda) selain dari apa yang Anda lakukan disekitar rumah atau sebagai bagian dari pekerjaan Anda?', 4, 'aktivitas_fisik', NULL),
	(82, 'Menghisap  rokok  atau  cerutu,  bahkan hanya satu isapan ?', 4, 'merokok', NULL),
	(83, 'Tinggal diruangan atau naik kendaraan tertutup saat seseorang merokok ?', 4, 'merokok', NULL),
	(84, 'Saya  berhati-hati  dengan  apa  yang  saya makan', 4, 'manajemen_bb', NULL),
	(85, 'Saya membaca label makanan ketika saya berbelanja', 4, 'manajemen_bb', NULL),
	(86, 'Saya  berolahraga  untuk  menurunkan  atau mempertahankan berat badan', 4, 'manajemen_bb', NULL),
	(87, 'Saya   mengurangi  minum   soda  dan  teh manis', 4, 'manajemen_bb', NULL),
	(88, 'Saya makan dengan porsi kecil atau dengan porsi yang lebih sedikit', 4, 'manajemen_bb', NULL),
	(89, 'Saya   berhenti   membeli   atau   membawa makanan yang tidak sehat ke rumah', 4, 'manajemen_bb', NULL),
	(90, 'Saya mengurangi atau membatasi makanan yang saya suka', 4, 'manajemen_bb', NULL),
	(91, 'Saya lebih jarang makan di restaurant atau tempat makan siap saji', 4, 'manajemen_bb', NULL),
	(92, 'Saya mengganti makanan yang lebih sehat dari makanan yang biasa saya makan', 4, 'manajemen_bb', NULL),
	(93, 'Saya merubah resep ketika memasak', 4, 'manajemen_bb', NULL),
	(94, ' Rata-rata,  berapa  hari  per  minggu  Anda minum alkohol ?', 4, 'minum_alkohol', NULL),
	(95, 'Pada hari-hari biasa anda minum alkohol, berapa banyak yang Anda minum? (sloki)', 4, 'alkohol', NULL),
	(96, 'Berapa jumlah paling besar dari minuman yang  sudah  Anda  minum  selama  sebulan terakhir?', 4, 'alkohol', NULL),
	(97, 'Merk alkohol yang biasa dikonsumsi', 4, 'alkohol', NULL);
/*!40000 ALTER TABLE `kuesioner` ENABLE KEYS */;

-- Dumping structure for table hicore.notif_config
CREATE TABLE IF NOT EXISTS `notif_config` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pesan` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `durasi_hari` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `waktu_broadcast` date NOT NULL,
  `api` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hicore.notif_config: ~0 rows (approximately)
/*!40000 ALTER TABLE `notif_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `notif_config` ENABLE KEYS */;

-- Dumping structure for table hicore.pasien
CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hp` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `riwayat_hipertensi_kel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sebutkan_siapa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lama_hipertensiTahun` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `lama_hipertensi` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `penyakit_lain_cek` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `penyakit_lain` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teratur_kontrol` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alasan` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `konsumsi_obat` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tinggal_dengan` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_tempat_berobat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama_tempat_berobat` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_pasien_fk` (`user_id`),
  CONSTRAINT `user_pasien_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hicore.pasien: ~0 rows (approximately)
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT IGNORE INTO `pasien` (`id`, `hp`, `nama`, `tgl_lahir`, `jk`, `alamat`, `pendidikan`, `pekerjaan`, `riwayat_hipertensi_kel`, `sebutkan_siapa`, `lama_hipertensiTahun`, `lama_hipertensi`, `penyakit_lain_cek`, `penyakit_lain`, `teratur_kontrol`, `alasan`, `konsumsi_obat`, `tinggal_dengan`, `jenis_tempat_berobat`, `nama_tempat_berobat`, `user_id`) VALUES
	(1, '085274503739', 'Admin', '2020-11-30', 'perempuan', 'Pasaman barat', 'SMA', 'Wiraswasta', 'tidak', 'tidak ada', '0', '0', 'tidak ada', '-', 'iya', '-', '-', 'saudara', 'puskemas', 'lubuk sikaping barat', 1);
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;

-- Dumping structure for table hicore.status_kesehatan
CREATE TABLE IF NOT EXISTS `status_kesehatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tgl_mengisi` date NOT NULL,
  `tgl_pemeriksaan` date DEFAULT NULL,
  `sistol` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diastol` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_menimbang` date NOT NULL,
  `berat` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `tinggi` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pengukuran` date NOT NULL,
  `lingkar_perut` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `perokok_cek` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batangperhari` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `berhentitahun` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `berhentibulan` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `berhentihari` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `pasien_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pasien_status_kesehatan_fk` (`pasien_id`),
  CONSTRAINT `pasien_status_kesehatan_fk` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hicore.status_kesehatan: ~1 rows (approximately)
/*!40000 ALTER TABLE `status_kesehatan` DISABLE KEYS */;
INSERT IGNORE INTO `status_kesehatan` (`id`, `tgl_mengisi`, `tgl_pemeriksaan`, `sistol`, `diastol`, `tgl_menimbang`, `berat`, `tinggi`, `tgl_pengukuran`, `lingkar_perut`, `perokok_cek`, `batangperhari`, `berhentitahun`, `berhentibulan`, `berhentihari`, `pasien_id`) VALUES
	(1, '2020-11-29', '2020-11-23', '120', '80', '2020-11-24', '47', '162', '2020-11-25', '70', 'iya', '2', '0', '0', '0', 1),
	(5, '2020-11-30', '2020-11-11', '1', '1', '2020-11-19', '1', '1', '2020-11-19', '1', 'sudah berhenti', '0', '1', '1', '1', 1);
/*!40000 ALTER TABLE `status_kesehatan` ENABLE KEYS */;

-- Dumping structure for table hicore.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hicore.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `password`, `role`, `updated_at`, `created_at`) VALUES
	(1, 'Admin', '085274503739', '$2y$10$6wdH5MQxDdMydg79MHqzfunc2B0HGktCVwNU11vbsXAbtA3oP0rM.', '1', '2020-12-03 21:37:57', '2020-11-29 21:11:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
