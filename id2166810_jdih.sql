-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2017 at 09:21 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2166810_jdih`
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
(5, 'XII/2012/MA/1012', '2012   ', 'Aturan Kerja Pejabat dan Kepegawaian', 'Diubah', 'Bagian Kepegawaian', '201607131611081995556619578605ac99f77_20160713162803_PETA+BISNIS+MAHKAMAH+AGUNG+RI.pptx'),
(19, 'XXIIV/20/2000', '2000', 'Aturan Penyesuaian Keuangan dan Kepegawaian', 'Dicabut', 'Bagian Kepegawaian', 'TABEL 1 sd IX TAHUN.XLS'),
(20, 'XXIIV/20/2016', '2016', 'Aturan Kerja Pejabat dan Kepegawaian', 'Diubah', 'Bagian Kepegawaian', ''),
(23, 'XXIIV/20/2000', '2000', 'Aturan Penyesuaian Keuangan dan Kepegawaian', 'Dicabut', 'Bagian Kepegawaian', ''),
(119, 'XXIIV/20/2000', '2000         ', 'Aturan Penyesuaian Keuangan dan Kepegawaian', 'Mencabut', '', '');

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
(5, 'XXI/2010/XI/Z', '2010', 'Peraturan Cetak Majalah ', 'Mencabut', 'Bagian Organisasi dan Tata Laksana', '201607131611081995556619578605ac99f77_20160713162803_PETA+BISNIS+MAHKAMAH+AGUNG+RI.pptx');

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
(9, 'XXI/MA/07928/2015', '2015          ', 'Aturan Perencanaan Pengadaan Inventarisa', 'Mengubah', 'Bagian Perencanaan dan Keuangan', 'Rekap tabel IV.XLS'),
(13, 'XXI/MA/07928/2015', '2015  ', 'Aturan Gajih Pejabat dan Staff', 'Mengubah', 'Bagian Perencanaan dan Keuangan', '');

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
(4, 'XXI/MA/07928/2019', '2019', 'Aturan Pelayanan Untuk Pendataan Arsip Badan Peradilan Agama', 'Mencabut', 'Bagian Umum', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_a`
--

CREATE TABLE `subdit_a` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_a`
--

INSERT INTO `subdit_a` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'asd', ' asd', 'asd', 'Mencabut', 'Subdit A', 'bagian_kepegawaian.php'),
(2, 'asdsad', 'ASdaa', 'asd', 'Mencabut', 'Subdit A', 'jdih.sql'),
(3, 'XVII/2017/MA-SYR/201', '2017', 'subdit a', 'Dicabut', 'Subdit A', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_b`
--

CREATE TABLE `subdit_b` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_b`
--

INSERT INTO `subdit_b` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'xiI/2012/MA-SYR-B/112', '2012', 'SUBDIT B', 'Tidak Berlaku', 'Subdit B', 'Capture001.png');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_bimbingandanmonitoring`
--

CREATE TABLE `subdit_bimbingandanmonitoring` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_bimbingandanmonitoring`
--

INSERT INTO `subdit_bimbingandanmonitoring` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XVII/2017/MA-MON/112', '2017', 'PERATURAN PENGAWASAN DAN MONITORING', 'Diubah', 'Subdit Bimbingan dan Monitoring', ''),
(2, 'XVIII/2017/MA-MON/113', '2017', 'PERATURAN BIMBINGAN ADMINISTRASI', 'Mencabut', 'Subdit Bimbingan dan Monitoring', ''),
(3, 'XVIII/2017/MA-MON/114', '2017', 'PERATURAN PENGAJUAN PENGAWASAN DITJEN', 'Diubah', 'Subdit Bimbingan dan Monitoring', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_data`
--

CREATE TABLE `subdit_data` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_data`
--

INSERT INTO `subdit_data` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XIV/2017/MA-DAT/104', '2017', 'PERATURAN DATA MAINTENANCE', 'Mengubah', 'Subdit Data', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_kasasi`
--

CREATE TABLE `subdit_kasasi` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_kasasi`
--

INSERT INTO `subdit_kasasi` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XIV/2017/MA-KAS/111', '2017', 'PERATURAN PENGAJUAN KASASI ', 'Mencabut', 'Subdit Kasasi', ''),
(2, 'XIV/2017/MA-KAS/112', '2017', 'PERATURAN PERSYARATAN KASASI', 'Mengubah', 'Subdit Kasasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_mutasihakim`
--

CREATE TABLE `subdit_mutasihakim` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_mutasihakim`
--

INSERT INTO `subdit_mutasihakim` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(2, 'XVIII/2017/KEP/105', '2017', 'PERATURAN MUTASI HAKIM', 'Mengubah', 'Subdit Mutasi Hakim', 'Kualifikasi Data Mining.docx');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_mutasipaniteradanjurusita`
--

CREATE TABLE `subdit_mutasipaniteradanjurusita` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_mutasipaniteradanjurusita`
--

INSERT INTO `subdit_mutasipaniteradanjurusita` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XIV/2017/MA-PAN/110', '2017', 'PERATURAN JURUSITA', 'Diubah', 'Subdit Mutasi Panitera dan Jurusita', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_pk`
--

CREATE TABLE `subdit_pk` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_pk`
--

INSERT INTO `subdit_pk` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XII/2012/MA-PK/112', '2012', 'PERATURAN TINJAU KEMBALI ', 'Diubah', 'Subdit PK', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_syariah`
--

CREATE TABLE `subdit_syariah` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_syariah`
--

INSERT INTO `subdit_syariah` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XIV/2017/MA-SYR/104', '2017', 'PERATURAN KERJA SYARIAH', 'Mencabut', 'Subdit Syariah', 'hapus.php'),
(2, 'XIV/2017/MA-SYR/105', '2017', 'PERATURAN HUKUM SYARIAH ', 'Mengubah', 'Subdit Syariah', '');

-- --------------------------------------------------------

--
-- Table structure for table `subdit_tatakelola`
--

CREATE TABLE `subdit_tatakelola` (
  `kode` int(5) NOT NULL,
  `noPeraturan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `tentang` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdit_tatakelola`
--

INSERT INTO `subdit_tatakelola` (`kode`, `noPeraturan`, `tahun`, `tentang`, `status`, `bagian`, `file`) VALUES
(1, 'XII/2017/MA-TAT/111', '2017', 'PERATURAN PENATAAN DAN PENGELOLAAN ASSET ', 'Diubah', 'Subdit Tata Kelola', ''),
(2, 'XII/2017/MA-TAT/112', '2017', 'PERATURAN LAPORAN ASSET KELOLA ', 'Mencabut', 'Subdit Tata Kelola', '');

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
-- Indexes for table `subdit_a`
--
ALTER TABLE `subdit_a`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_b`
--
ALTER TABLE `subdit_b`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_bimbingandanmonitoring`
--
ALTER TABLE `subdit_bimbingandanmonitoring`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_data`
--
ALTER TABLE `subdit_data`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_kasasi`
--
ALTER TABLE `subdit_kasasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_mutasihakim`
--
ALTER TABLE `subdit_mutasihakim`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_mutasipaniteradanjurusita`
--
ALTER TABLE `subdit_mutasipaniteradanjurusita`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_pk`
--
ALTER TABLE `subdit_pk`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_syariah`
--
ALTER TABLE `subdit_syariah`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `subdit_tatakelola`
--
ALTER TABLE `subdit_tatakelola`
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
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bagian_perencanaandankeuangan`
--
ALTER TABLE `bagian_perencanaandankeuangan`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `bagian_umum`
--
ALTER TABLE `bagian_umum`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `subdit_a`
--
ALTER TABLE `subdit_a`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subdit_b`
--
ALTER TABLE `subdit_b`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subdit_bimbingandanmonitoring`
--
ALTER TABLE `subdit_bimbingandanmonitoring`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subdit_data`
--
ALTER TABLE `subdit_data`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subdit_kasasi`
--
ALTER TABLE `subdit_kasasi`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subdit_mutasihakim`
--
ALTER TABLE `subdit_mutasihakim`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subdit_mutasipaniteradanjurusita`
--
ALTER TABLE `subdit_mutasipaniteradanjurusita`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subdit_pk`
--
ALTER TABLE `subdit_pk`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subdit_syariah`
--
ALTER TABLE `subdit_syariah`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subdit_tatakelola`
--
ALTER TABLE `subdit_tatakelola`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
