-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 12:51 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_smart_jurusan_pt`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_kriteria`
--

CREATE TABLE `alternatif_kriteria` (
  `kd_alternatif` varchar(7) NOT NULL,
  `kd_prodi` varchar(7) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `a_kampus` varchar(10) NOT NULL,
  `a_prodi` varchar(10) NOT NULL,
  `asal_jurusan` varchar(10) NOT NULL,
  `spp` varchar(10) NOT NULL,
  `fasilitas` varchar(10) NOT NULL,
  `sub_a_kampus` varchar(10) NOT NULL,
  `sub_a_prodi` varchar(10) NOT NULL,
  `sub_asal_jurusan` varchar(10) NOT NULL,
  `sub_spp` varchar(10) NOT NULL,
  `sub_fasilitas` varchar(10) NOT NULL,
  `nilai_akhir` varchar(10) NOT NULL,
  `kd_pts` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif_kriteria`
--

INSERT INTO `alternatif_kriteria` (`kd_alternatif`, `kd_prodi`, `nama_prodi`, `a_kampus`, `a_prodi`, `asal_jurusan`, `spp`, `fasilitas`, `sub_a_kampus`, `sub_a_prodi`, `sub_asal_jurusan`, `sub_spp`, `sub_fasilitas`, `nilai_akhir`, `kd_pts`) VALUES
('ALT-002', 'P-S-002', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '10', '9', '9', '126', 'PTS-002'),
('ALT-003', 'P-S-003', 'Teknik Informatika-S1', '22', '3', '50', '48', '3', '8', '8', '10', '9', '9', '126', 'PTS-002'),
('ALT-005', 'P-S-004', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '7', '9', '8', '126', 'PTS-004'),
('ALT-006', 'P-S-001', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '9', '9', '10', '8', '10', '126', 'PTS-001'),
('ALT-007', 'P-S-005', 'Teknik Informatika-S1', '22', '3', '50', '48', '3', '9', '8', '7', '9', '8', '126', 'PTS-005'),
('ALT-008', 'P-S-006', 'Teknik Informatika-S1', '22', '3', '50', '48', '3', '8', '9', '10', '8', '10', '126', 'PTS-001');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_akhir`
--

CREATE TABLE `hasil_akhir` (
  `kd_hasil` int(7) NOT NULL,
  `kd_prodi` varchar(7) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `a_kampus` varchar(10) NOT NULL,
  `a_prodi` varchar(10) NOT NULL,
  `asal_jurusan` varchar(10) NOT NULL,
  `spp` varchar(10) NOT NULL,
  `fasilitas` varchar(10) NOT NULL,
  `nilai_akhir` varchar(10) NOT NULL,
  `kd_pts` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_akhir`
--

INSERT INTO `hasil_akhir` (`kd_hasil`, `kd_prodi`, `nama_prodi`, `a_kampus`, `a_prodi`, `asal_jurusan`, `spp`, `fasilitas`, `nilai_akhir`, `kd_pts`) VALUES
(2, '', '', '22,9', '3,9', '50,10', '48,9', '3,10', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kd_kriteria` varchar(7) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `bobot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kd_kriteria`, `nama_kriteria`, `bobot`) VALUES
('KRI-001', 'Akreditasi Kampus', '22'),
('KRI-002', 'Asal Jurusan SLTA', '50'),
('KRI-003', 'SPP', '48'),
('KRI-004', 'Fasilitas', '3'),
('KRI-005', 'Akreditasi Program Studi', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pencarian`
--

CREATE TABLE `pencarian` (
  `kd_pencarian` int(11) NOT NULL,
  `cari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` varchar(7) NOT NULL,
  `kd_pts` varchar(7) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `akreditasi` varchar(1) NOT NULL,
  `kelebihan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `kd_pts`, `nama_prodi`, `akreditasi`, `kelebihan`) VALUES
('P-S-001', 'PTS-001', 'Sistem Informasi-S1', 'B', 'Mengembangkan Mahasiswa agar Lebih Mahir Dalam IT'),
('P-S-002', 'PTS-002', 'Sistem Informasi-S1', 'C', 'Membimbing Mahasiswa Untuk Menjadi Web Developer'),
('P-S-003', 'PTS-002', 'Teknik Informatika-S1', 'B', 'Membina Mahasiswa Menjadi Analis IT'),
('P-S-004', 'PTS-004', 'Sistem Informasi-S1', 'C', 'Mengembangkan Mahasiswa agar Lebih Mahir Dalam IT'),
('P-S-005', 'PTS-005', 'Teknik Informatika-S1', 'C', 'Membimbing Mahasiswa Untuk Menjadi Web Developer'),
('P-S-006', 'PTS-001', 'Teknik Informatika-S1', 'A', 'Unggul Dalam Mengembangkan Mahasiswa Dalam IT');

-- --------------------------------------------------------

--
-- Table structure for table `pts`
--

CREATE TABLE `pts` (
  `kd_pts` varchar(7) NOT NULL,
  `nama_pts` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kode_pos` varchar(7) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `laman_web` varchar(50) NOT NULL,
  `akreditasi` varchar(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pts`
--

INSERT INTO `pts` (`kd_pts`, `nama_pts`, `alamat`, `kota`, `kode_pos`, `no_telepon`, `email`, `laman_web`, `akreditasi`, `username`, `password`) VALUES
('1', 'ADMIN APTISI', '-', '-', '-', '-', '-', '-', '-', 'admin', 'admin'),
('PTS-001', 'Universitas Yapis Papua', 'Jl.Dr.Samratulangi No.11 Dok V Atas Jayapura â€“ Papua', 'Jayapura', '99222', '09675543', 'bippi.uniyap@gmail.com', 'www.uniyap.ac.id', 'B', 'uniyap', 'uniyap'),
('PTS-002', 'Sekolah Tinggi Ilmu Manajemen Informatika dan Komputer (STIMIK) Sepuluh November Jayapura', 'Jl.Ardipura 11 No.22B Polimak, Jayapura â€“ Papua ', 'Jayapura', '99223', '0967533769', 'stimiksepnop@gmail.com', 'stimiksepnop.ac.id', 'C', 'stimik', 'stimik'),
('PTS-003', 'Sekolah Tinggi Ilmu Ekonomi (STIE) Port Numbay', 'Jl.Beringin No 1 Entrop â€“ Jayapura SelataN, Kota Jayapura â€“ Papua ', 'Jayapura', '99224', '09675311551787', 'stieportnumbay@gmail.com', 'www.stieportnumbay.ac.id ', 'C', 'stie', 'stie'),
('PTS-004', 'Universitas Ottow Geissler Papua (UOGP)', 'Jln.Perkutut Kotaraja Jayapura â€“ Papua ', 'Jayapura', '99225', '0834082612', 'infouogp@yahoo.com', 'www.uogp.ac.id', 'C', 'uogp', 'uogp'),
('PTS-005', 'Universitas Sains dan Teknologi Jayapura', 'Jl.Raya Sentani, Padang Bulan Jayapura â€“ Papua ', 'Jayapura', '99225', '09675362', 'ustj@gmail.com', 'www.ustj.ac.id', 'C', 'ustj', 'ustj');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `kd_sub` varchar(7) NOT NULL,
  `kd_kriteria` varchar(7) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`kd_sub`, `kd_kriteria`, `nama_sub`, `nilai`) VALUES
('SUB-001', 'KRI-001', 'B', '9'),
('SUB-007', 'KRI-003', '1.500.000 - 3.000.000', '10'),
('SUB-014', 'KRI-003', '> 3.000.000', '9'),
('SUB-015', 'KRI-004', 'Lumayan', '8'),
('SUB-017', 'KRI-005', 'B', '9'),
('SUB-018', 'KRI-001', 'C', '8'),
('SUB-019', 'KRI-002', 'Semua Jurusan', '10'),
('SUB-021', 'KRI-002', 'IPA/IPS', '9'),
('SUB-023', 'KRI-005', 'C', '8'),
('SUB-025', 'KRI-005', 'A', '10'),
('SUB-026', 'KRI-001', 'A', '10'),
('SUB-027', 'KRI-004', 'Bagus', '9'),
('SUB-028', 'KRI-004', 'Sangat Bagus', '10'),
('SUB-029', 'KRI-003', '> 5.000.000', '7'),
('SUB-030', 'KRI-002', 'RPL', '7'),
('SUB-031', 'KRI-002', 'TKJ', '7'),
('SUB-032', 'KRI-003', '> 4.000.000', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif_kriteria`
--
ALTER TABLE `alternatif_kriteria`
  ADD PRIMARY KEY (`kd_alternatif`);

--
-- Indexes for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  ADD PRIMARY KEY (`kd_hasil`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kd_kriteria`);

--
-- Indexes for table `pencarian`
--
ALTER TABLE `pencarian`
  ADD PRIMARY KEY (`kd_pencarian`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Indexes for table `pts`
--
ALTER TABLE `pts`
  ADD PRIMARY KEY (`kd_pts`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`kd_sub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  MODIFY `kd_hasil` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pencarian`
--
ALTER TABLE `pencarian`
  MODIFY `kd_pencarian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
