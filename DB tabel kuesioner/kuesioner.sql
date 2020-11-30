-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2020 at 02:44 PM
-- Server version: 10.3.24-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hicorema_hicoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(10) UNSIGNED NOT NULL,
  `pertanyaan` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kunci` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `pertanyaan`, `kunci`, `created_at`, `updated_at`) VALUES
(1, 'Tekanan darah diastolik atau sistolik yang tinggi menunjukkan peningkatan tekanan darah', '1', NULL, NULL),
(2, 'peningkatan tekanan darah diastolik juga menunjukkan peningkatan tekanan darah', '1', NULL, NULL),
(3, 'Obat untuk menurunkan tekanan darah harus diminum setiap hari', '1', NULL, NULL),
(4, 'orang-orang dengan tekanan darah tinggi harus minum obat mereka hanya ketika mereka merasa sakit', '0', NULL, NULL),
(5, 'individu dengan tekanan darah tinggi harus minum obat sepanjang hidupnya', '1', NULL, NULL),
(6, 'orang dengan tekanan darah tinggi harus minum obat dengan cara yang membuat mereka merasa baik ', '0', NULL, NULL),
(7, 'jika obat untuk menurunkan tekanan darah dapat mengontrol tekanan darah, maka tidak perlu mengubah gaya hidup', '0', NULL, NULL),
(8, 'Peningkatan tekanan darah adalah hasil dari penuaan, jadi perawatan tidak perlu dilakukan', '1', NULL, NULL),
(9, 'jika individu dengan tekanan darah tinggi mengubah gaya hidup mereka, tidak perlu untuk perawatan', '0', NULL, NULL),
(10, 'orang dengan tekanan darah tinggi dapat makan makanan asin selama mereka minum obat secara teratur', '0', NULL, NULL),
(11, 'individu dengan tekanan darah tinggi dapat minum minuman beralkohol', '0', NULL, NULL),
(12, ' individu dengan tekanan darah tinggi tidak boleh merokok', '1', NULL, NULL),
(13, 'individu dengan tekanan darah tinggi harus sering makan buah dan sayuran', '1', NULL, NULL),
(14, 'Untuk individu dengan tekanan darah tinggi, metode memasak terbaik adalah menggoreng', '0', NULL, NULL),
(15, 'Untuk individu dengan tekanan darah tinggi, metode memasak terbaik adalah merebus atau memanggang', '1', NULL, NULL),
(16, 'Jenis daging terbaik untuk individu dengan tekanan darah tinggi adalah daging merah', '0', NULL, NULL),
(17, 'Jenis daging terbaik untuk individu dengan tekanan darah tinggi adalah daging putih', '1', NULL, NULL),
(18, 'peningkatan tekanan darah dapat menyebabkan kematian dini jika tidak diobati', '1', NULL, NULL),
(19, 'peningkatan tekanan darah dapat menyebabkan stroke, jika tidak ditangani', '1', NULL, NULL),
(20, 'peningkatan tekanan darah dapat menyebabkan penyakit jantung, seperti serangan jantung, jika tidak ditangani', '1', NULL, NULL),
(21, 'peningkatan tekanan darah dapat menyebabkan gagal ginjal, jika tidak ditangani', '1', NULL, NULL),
(22, 'peningkatan tekanan darah dapat menyebabkan gangguan visual, jika tidak ditangani', '1', NULL, NULL),
(23, 'Saya pikir bahwa diet sehat saja efektif untuk mengendalikan hipertens', '1', NULL, NULL),
(24, 'Saya pikir mudah bagi saya untuk memodifikasi diet saya', '1', NULL, NULL),
(25, 'Saya pikir saya makan diet sehat ', '1', NULL, NULL),
(26, 'Saya merasa bisa menggunakan & menikmati makanan rendah lemak', '1', NULL, NULL),
(27, 'Saya merasa buah hanya bisa membantu saya mengendalikan hipertensi  ', '1', NULL, NULL),
(28, 'Saya mencoba makan buah hampir setiap hari', '1', NULL, NULL),
(29, 'Saya mencoba makan sayur setiap hari', '1', NULL, NULL),
(30, 'Saya pikir saya akan menikmati makanan tanpa garam ', '1', NULL, NULL),
(31, 'Saya ingin menambahkan lebih sedikit garam dalam makanan saya ', '1', NULL, NULL),
(32, 'Diet tinggi serat adalah hal utama untuk diet saya terus menerus', '1', NULL, NULL),
(33, 'Saya mencoba secara teratur untuk mengurangi lemak hewani dari makanan saya', '1', NULL, NULL),
(34, 'Saya pikir saya ingin mengurangi asupan lemak jenuh.', '1', NULL, NULL),
(35, 'Saya mencoba makan asam lemak Omega-3 secara teratur seperti minyak ikan setiap minggu.', '1', NULL, NULL),
(36, 'Saya ingin mengganti susu murni dengan susu rendah lemak untuk mengurangi asupan lemak ', '1', NULL, NULL),
(37, 'Saya secara teratur mengurangi kafein dengan mengurangi asupan kafein saya misalnya kopi, teh, coke.', '1', NULL, NULL),
(38, 'Saya pikir latihan dapat membantu saya mengendalikan hipertensi ', '1', NULL, NULL),
(39, 'Saya mencoba meningkatkan aktivitas harian saya di rumah dan di tempat kerja ', '1', NULL, NULL),
(40, 'Saya tidak punya waktu untuk berolahraga.  ', '1', NULL, NULL),
(41, 'Saya mencoba memeriksa berat badan saya secara teratur. ', '1', NULL, NULL),
(42, 'Saya pikir saya tidak bisa menurunkan berat badan saya ', '1', NULL, NULL),
(43, 'Saya pikir saya perlu saran untuk menurunkan berat badan', '1', NULL, NULL),
(44, 'Saya memiliki lebih banyak kegugupan di sepanjang hidup saya. ', '1', NULL, NULL),
(45, 'Saya mencoba mengurangi stres dalam pekerjaan saya ', '1', NULL, NULL),
(46, 'Saya percaya bahwa saya terlalu banyak berpikir.  ', '1', NULL, NULL),
(47, 'Saya mencoba untuk pergi dari perokok. ', '1', NULL, NULL),
(48, 'Tidak dapat menghindari rokok dan konsumsi alkohol. ', '1', NULL, NULL),
(49, 'Saya tidak suka mengikuti jenis obat apa pun.  ', '1', NULL, NULL),
(50, 'Saya percaya bahwa pengobatan akan membantu saya merasa lebih baik.', '1', NULL, NULL),
(51, 'Bagi saya, hal-hal baik tentang pengobatan lebih penting daripada yang buruk ', '1', NULL, NULL),
(52, 'Saya merasa tidak nyaman dengan pengobatan', '0', NULL, NULL),
(53, 'Saya minum obat pilihan saya sendiri', '0', NULL, NULL),
(54, 'Obat membuat saya lebih rileks', '1', NULL, NULL),
(55, 'Obat membuat saya merasa lelah dan lesu', '0', NULL, NULL),
(56, 'Saya minum obat hanya ketika saya sakit', '0', NULL, NULL),
(57, 'Saya merasa lebih normal dalam pengobatan', '1', NULL, NULL),
(58, 'Tubuh dan pikiran saya merasa tidak enak dengan dikontrol oleh pengobatan', '1', NULL, NULL),
(59, 'Saya bisa berpikir dengan baik bila tetap konsumsi obat hipertensi', '1', NULL, NULL),
(60, 'Dengan tetap minum obat, saya bisa mencegah sakit', '1', NULL, NULL),
(61, 'Dalam 7 hari terakhir berapa hari anda Minum obat tekanan darah ?', '7', NULL, NULL),
(62, 'Dalam 7 hari terakhir berapa hari anda Minum obat tekanan darah pada waktu yang sama setiap hari?', '7', NULL, NULL),
(63, 'Dalam 7 hari terakhir berapa hari anda Minum obat tekanan darah sesuai dosis yang dianjurkan?', '7', NULL, NULL),
(64, 'Dalam 7 hari terakhir berapa hari anda Mengikuti rencana makan sehat ?', '7', NULL, NULL),
(65, 'Dalam 7 hari terakhir berapa hari anda Makan  keripik  kentang,  kacang  asin, ikan  asin  popcorn  asin  atau  makanan yang asin-asin?', '7', NULL, NULL),
(66, 'Dalam 7 hari terakhir berapa hari anda Makan daging olahan seperti hamburger bakso,atau sosis dll?', '7', NULL, NULL),
(67, 'Dalam 7 hari terakhir berapa hari anda Makan daging bakar atau ikan bakar?', '7', NULL, NULL),
(68, 'Dalam 7 hari terakhir berapa hari anda Makan  acar,  buah  zaitun  atau  sayuran asin?', '7', NULL, NULL),
(69, 'Dalam 7 hari terakhir berapa hari anda Makan lima porsi atau lebih buah-buahan dan sayuran?', '7', NULL, NULL),
(70, 'Dalam 7 hari terakhir berapa hari anda Makan malam yang dibekukan atau pizza beku?', '7', NULL, NULL),
(71, 'Dalam 7 hari terakhir berapa hari anda Makan roti yang dibeli di toko atau yang di kemas?', '7', NULL, NULL),
(72, 'Dalam 7 hari terakhir berapa hari anda Memberi garam makanan Anda di meja?', '7', NULL, NULL),
(73, 'Dalam 7 hari terakhir berapa hari anda Menambahkan garam ke makanan ketika Anda memasak?', '7', NULL, NULL),
(74, 'Dalam 7 hari terakhir berapa hari anda Makan  makanan  yang  digoreng  seperti ayam, kentang goreng, atau ikan?', '7', NULL, NULL),
(75, 'Dalam 7 hari terakhir berapa hari anda Menghindari makanan berlemak?', '7', NULL, NULL),
(76, 'Dalam 7 hari terakhir berapa hari anda Melakukan aktivitas fisik setidaknya 30 menit ?', '7', NULL, NULL),
(77, 'Dalam 7 hari terakhir berapa hari anda Melakukan aktivitas fisik (seperti berenang, berjalan atau bersepeda) selain dari apa yang Anda lakukan disekitar rumah atau sebagai bagian dari pekerjaan Anda?', '7', NULL, NULL),
(78, 'Dalam 7 hari terakhir berapa hari anda Menghisap  rokok  atau  cerutu,  bahkan hanya satu isapan ?', '0', NULL, NULL),
(79, 'Dalam 7 hari terakhir berapa hari anda Tinggal diruangan atau naik kendaraan tertutup saat seseorang merokok ?', '0', NULL, NULL),
(80, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya  berhati-hati  dengan  apa  yang  saya makan', '5', NULL, NULL),
(81, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya membaca label makanan ketika saya berbelanja', '5', NULL, NULL),
(82, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya  berolahraga  untuk  menurunkan  atau mempertahankan berat badan', '5', NULL, NULL),
(83, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya   mengurangi  minum   soda  dan  teh manis', '5', NULL, NULL),
(84, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya makan dengan porsi kecil atau dengan porsi yang lebih sedikit', '5', NULL, NULL),
(85, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya   berhenti   membeli   atau   membawa makanan yang tidak sehat ke rumahDalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya', '5', NULL, NULL),
(86, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya mengurangi atau membatasi makanan yang saya suka', '5', NULL, NULL),
(87, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya lebih jarang makan di restaurant atau tempat makan siap saji', '5', NULL, NULL),
(88, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya mengganti makanan yang lebih sehat dari makanan yang biasa saya makan', '5', NULL, NULL),
(89, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Saya merubah resep ketika memasak', '5', NULL, NULL),
(90, 'Dalam 30  hari terakhir utk menurunkan  berat badan atau mempertahankan berat badan saya maka Rata-rata,  berapa  hari  per  minggu  Anda minum alkohol ?', '0', NULL, NULL),
(91, 'Pada hari-hari biasa anda minum alkohol, berapa banyak yang Anda minum?', '0', NULL, NULL),
(92, 'Berapa jumlah paling besar dari minuman yang  sudah  Anda  minum  selama  sebulan terakhir?', '0', NULL, NULL),
(93, 'Merk alkohol yang biasa dikonsumsi', '', NULL, NULL),
(94, 'Dalam sebulan terakhir, seberapa sering Anda marah karena sesuatu yang terjadi secara tidak terduga?', '4', NULL, NULL),
(95, 'Dalam sebulan terakhir, seberapa sering Anda merasa bahwa Anda tidak dapat mengendalikan hal-hal penting dalam hidup Anda ?', '4', NULL, NULL),
(96, 'Dalam sebulan terakhir, seberapa sering Anda merasa gugup dan stres ?', '4', NULL, NULL),
(97, 'Dalam sebulan terakhir, seberapa serig Anda berhasil menangani gangguan hidup Anda yang menjengkelkan ?', '4', NULL, NULL),
(98, 'Dalam sebulan terakhir, seberapa sering Anda merasa bahwa Anda mampu mengatasi perubahan penting yang terjadi dalam hidup Anda ?', '4', NULL, NULL),
(99, 'Dalam sebulan terakhir, seberapa sering Anda merasa yakin tentang kemampuan Anda menangani masalah pribadi Anda ?', '4', NULL, NULL),
(100, 'Dalam sebulan terakhir, seberapa sering Anda merasa bahwa segala sesuatunya berjalan sesuai keinginan Anda?', '4', NULL, NULL),
(101, 'Dalam sebulan terakhir, seberapa sering Anda menemukan bahwa Anda tidak dapat mengatasi semua hal yang harus Anda lakukan ?', '4', NULL, NULL),
(102, 'Dalam sebulan terakhir, seberapa sering Anda dapat mengendalikan gangguan dalam hidup Anda?', '4', NULL, NULL),
(103, 'Dalam sebulan terakhir, seberapa sering Anda merasa bahwa Anda berada di atas segalanya?', '4', NULL, NULL),
(104, 'Dalam sebulan terakhir, seberapa sering Anda marah karena hal-hal yang terjadi di luar kendali Anda?', '4', NULL, NULL),
(105, 'Dalam sebulan terakhir, seberapa sering Anda menemukan diri Anda memikirkan hal-hal yang harus Anda selesaikan?', '4', NULL, NULL),
(106, 'Dalam sebulan terakhir, seberapa sering Anda dapat mengontrol cara Anda menghabiskan waktu?', '4', NULL, NULL),
(107, 'Dalam sebulan terakhir, seberapa sering Anda merasa sangat kesulitan sehingga Anda tidak dapat mengatasinya?', '4', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
