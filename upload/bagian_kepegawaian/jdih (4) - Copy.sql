-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 03:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian_kepegawaian`
--

CREATE TABLE `bagian_kepegawaian` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian_kepegawaian`
--

INSERT INTO `bagian_kepegawaian` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(4, 'xx', '1                 asd                      ', 'asdasd', 'Mengubah', 'Bagian Kepegawaian', 'bagian_kepegawaian.php'),
(5, 'asdadasd', '2               ', 'Aturan Kerja Pejabat dan Kepegawaian', 'Diubah', 'Bagian Kepegawaian', 'InputData.php'),
(18, 'belom ada', '4             ', 'aturan2', '---', 'Bagian Kepegawaian', 'TABEL 1 sd IX TAHUN.XLS'),
(19, 'XXIIV/20/2000', '50', 'Aturan Penyesuaian Keuangan dan Kepegawaian', 'Dicabut', 'Bagian Kepegawaian', 'TABEL 1 sd IX TAHUN.XLS'),
(20, 'XXIIV/20/2016', '6     ', 'Aturan Kerja Pejabat dan Kepegawaian', 'Diubah', 'Bagian Kepegawaian', ''),
(22, '', '8     ', 'aturan2', '---', 'Bagian Kepegawaian', ''),
(23, 'XXIIV/20/2000', '9  ', 'Aturan Penyesuaian Keuangan dan Kepegawaian', 'Dicabut', 'Bagian Kepegawaian', ''),
(96, 'asdasd', '11  ', 'asd', 'Tidak Berlaku', 'Bagian Kepegawaian', ''),
(97, 'asdasd', 'asd        ', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'kosong'),
(99, 'asdasd', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(100, 'asdasd', '11 ', 'asd', 'Dicabut', 'Bagian Kepegawaian', ''),
(101, 'asdasd', '11', 'asd', 'Dicabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(102, 'asdasd', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(103, 'asdasd', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(104, 'asdasdsa', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(105, 'asdasdsa', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(106, 'asdasdsa', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(107, 'asdsad', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'background.jpg'),
(108, 'asdsad', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'background.jpg'),
(109, 'asd', 'asd', 'asd', 'Mencabut', 'Bagian Kepegawaian', 'dhana.jpg'),
(110, 'asdsad', 'ASD', 'ASD', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(111, 'asdsad', 'ASD', 'ASD', 'Mencabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(112, 'xer', '78', 'grdfg', 'Dicabut', 'Bagian Kepegawaian', 'bosta.jpg'),
(113, '123e', 'asdas', 'hendra drom', 'Dicabut', 'Bagian Kepegawaian', 'kevin.jpg'),
(114, 'hsfasd', '19978', 'asdasd', 'Dicabut', 'Bagian Kepegawaian', 'BIAYA_PERKARA_2016(1).zip'),
(115, 'asD', 'asdas ', 'dasd', 'Mencabut', 'Bagian Kepegawaian', ''),
(116, 'asdas', 'asdasd ', 'asd', 'Dicabut', 'Bagian Kepegawaian', ''),
(118, 'asDas', 'asd ', 'asd', 'Tidak Berlaku', 'Bagian Kepegawaian', ''),
(119, 'XXIIV/20/2000', '1                                 ', 'Aturan Penyesuaian Keuangan dan Kepegawaiansghj', 'Mencabut', '', ''),
(120, 'asdasd222', 'asd  ', 'asd', 'Diubah', '', ''),
(121, 'asdasd2222333', 'asd   ', 'asd', 'Diubah', '', ''),
(122, 'asdasdasd', '1                                 ', 'Aturan Penyesuaian Keuangan dan Kepegawaiansghj', 'Tidak Berlaku', '', ''),
(123, 'asDasa', 'asd', 'asd', 'Diubah', 'Bagian Kepegawaian', 'New Picture (44).bmp'),
(124, 'asDasa', 'asd  ', 'asd', 'Mencabut', '', 'New Picture (54).bmp'),
(125, '4', '4', '4', 'Dicabut', '', 'bagian_kepegawaian.php'),
(126, 'asdsad', 'ASdaasd', 'asd', 'Dicabut', 'Bagian Kepegawaian', 'scan0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bagian_organisasidantatalaksana`
--

CREATE TABLE `bagian_organisasidantatalaksana` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian_organisasidantatalaksana`
--

INSERT INTO `bagian_organisasidantatalaksana` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XXI/MA/07928/2018', '2018 ', 'Aturan Pembuatan Majalah Badilag', 'Diubah', 'Bagian Organisasi dan Tata Laksana', ''),
(2, 'XXI/MA/07928/2010', '2010 ', 'Aturan Kerja Desain Majalah Badilag', 'Mengubah', 'Bagian Organisasi dan Tata Laksana', ''),
(3, 'XXI/MA/07928/2010', '2010', 'Aturan Pembuatan Majalah Badilag', 'Diubah', 'Bagian Organisasi dan Tata Laksana', ''),
(4, 'asdasd', '123123', 'asdasd', 'Mencabut', 'Bagian Organisasi dan Tata Laksana', ''),
(5, 'asdsad', 'a123213a', 'a', 'Dicabut', 'Bagian Organisasi dan Tata Laksana', 'bagian_umum.php'),
(6, '2', '2', '2', 'Dicabut', '', 'bagian_organisasidantatalaksana.php'),
(7, 'asd', 'ASdaasd', 'zxcv', 'Dicabut', 'Bagian Organisasi dan Tata Laksana', 'scan0002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bagian_perencanaandankeuangan`
--

CREATE TABLE `bagian_perencanaandankeuangan` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian_perencanaandankeuangan`
--

INSERT INTO `bagian_perencanaandankeuangan` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(9, 'XXI/MA/07928/2015', '2015             ', 'Aturan Perencanaan Pengadaan Inventaris', 'Mengubah', 'Bagian Perencanaan dan Keuangan', 'Rekap tabel IV.XLS'),
(13, 'XXI/MA/07928/2015', '2015  ', 'Aturan Gajih Pejabat dan Staff', 'Mengubah', 'Bagian Perencanaan dan Keuangan', ''),
(14, 'XXI/MA/07928/2015', '2015', 'IWADL, Rapat Luar, Tunjangan Staff dan Pejabat', 'Mencabut', 'Bagian Perencanaan dan Keuangan', ''),
(15, 'xxi/MA/07928/2015', '2015   ', 'Aturan Kerja perencanaan pembuatan Surat Keputusan ', 'Diubah', 'Bagian Perencanaan dan Keuangan', ''),
(21, 'XXI/MA/07928/2019', '1996', 'hendra', 'Dicabut', 'Bagian Perencanaan dan Keuangan', ''),
(23, '1', '1231', '1', 'Dicabut', '', 'bagian_kepegawaian.php'),
(24, 'cba', 'ASda    ', 'a', 'Dicabut', 'Bagian Perencanaan dan Keuangan', 'kevin.jpg'),
(25, 'asdsada', 'ASd', 'asd', 'Dicabut', 'Bagian Perencanaan dan Keuangan', 'scan0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bagian_umum`
--

CREATE TABLE `bagian_umum` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian_umum`
--

INSERT INTO `bagian_umum` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XXI/MA/07928/2019', '2019 ', 'Aturan pembuatan surat keputusan kerja dan inventariers', 'Mencabut', 'Bagian Umum', ''),
(2, 'XXI/MA/07928/2015', '2015 ', 'Aturan Pengadaan Inventaris ', 'Dicabut', 'Bagian Umum', ''),
(3, 'XXI/MA/07928/2019', '2019 ', 'Sususan Langkah Kerja Inventaris Asset Badan Peradilan Agama', 'Dicabut', 'Bagian Umum', ''),
(4, 'XXI/MA/07928/2019', '2019', 'Aturan Pelayanan Untuk Pendataan Arsip Badan Peradilan Agama', 'Mencabut', 'Bagian Umum', ''),
(5, 'asdsad', 'asd', 'asdas', 'Mencabut', 'Bagian Umum', 'koneksi.php'),
(6, 'asdsad', '123123', 'asd', 'Mencabut', 'Bagian Umum', 'style.css'),
(7, 'asdsad', '123123', 'asd', 'Mencabut', 'Bagian Umum', 'index.php'),
(8, 'asdsad', '123123', 'asd', 'Mencabut', 'Bagian Umum', 'index.php'),
(9, 'asdsad', '123123', 'asd', 'Mencabut', 'Bagian Umum', 'index.php'),
(10, 'asdsad', '123123 ', 'asd', 'Mencabut', 'Bagian Umum', 'data perkara.rar'),
(11, 'asdsad', '123123', 'asd', 'Mencabut', 'Bagian Umum', 'background.jpg'),
(12, 'asdsa', 'asd', 'asd', 'Dicabut', 'Bagian Umum', 'bosta.jpg'),
(13, 'asdsa', 'asd', 'asd', 'Dicabut', 'Bagian Umum', 'bosta.jpg'),
(14, 'asdasdsa', '1997', 'asdsa', 'Diubah', 'Bagian Umum', 'dhana.jpg'),
(15, 'asdas', 'asdas', 'dasdas', 'Mencabut', 'Bagian Umum', 'updating-data-alamat-dan-gedung-pta-dan-pa-se-banten.pdf'),
(16, 'XIIIIV/102/2017', '1996 ', 'kelahiran', 'Dicabut', 'Bagian Umum', 'TABEL 1 sd IX TAHUN.XLS'),
(17, '3', '3', '3', 'Diubah', '', 'bagian_umum.php'),
(18, 'asda', 'asd', 'asd', 'Dicabut', 'Bagian Umum', 'scan0002.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian_kepegawaian`
--
ALTER TABLE `bagian_kepegawaian`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `bagian_organisasidantatalaksana`
--
ALTER TABLE `bagian_organisasidantatalaksana`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `bagian_perencanaandankeuangan`
--
ALTER TABLE `bagian_perencanaandankeuangan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `bagian_umum`
--
ALTER TABLE `bagian_umum`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian_kepegawaian`
--
ALTER TABLE `bagian_kepegawaian`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `bagian_organisasidantatalaksana`
--
ALTER TABLE `bagian_organisasidantatalaksana`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bagian_perencanaandankeuangan`
--
ALTER TABLE `bagian_perencanaandankeuangan`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `bagian_umum`
--
ALTER TABLE `bagian_umum`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
