-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 12:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('ALT-001', 'P-S-002', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '10', '9', '7', '126', 'PTS-002'),
('ALT-002', 'P-S-003', 'Teknik Informatika-S1', '22', '3', '50', '48', '3', '8', '8', '10', '9', '7', '126', 'PTS-002'),
('ALT-003', 'P-S-013', 'ilmu Komputer-S1', '22', '3', '50', '48', '3', '8', '8', '10', '10', '7', '126', 'PTS-007'),
('ALT-004', 'P-S-014', 'Manajemen Informatika D-III', '22', '3', '50', '48', '3', '8', '8', '10', '10', '7', '126', 'PTS-007'),
('ALT-005', 'P-S-017', 'D- III Gizi', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-006', 'P-S-017', 'D- III Gizi', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-007', 'P-S-018', 'D-IV Gizi', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-008', 'P-S-018', 'D-IV Gizi', '22', '3', '50', '48', '3', '9', '8', '9', '10', '10', '126', 'PTS-009'),
('ALT-009', 'P-S-019', 'D-III Analis Kesehatan ', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-010', 'P-S-020', 'D-III Farmasi ', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-011', 'P-S-020', 'D-III Farmasi ', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-012', 'P-S-021', 'D-III Keperawatan ', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-013', 'P-S-021', 'D-III Keperawatan ', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-014', 'P-S-022', 'D-IV Keperawatan', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-009'),
('ALT-015', 'P-S-022', 'D-IV Keperawatan', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-009'),
('ALT-016', 'P-S-023', 'D-III Kebidanan', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-017', 'P-S-023', 'D-III Kebidanan', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-018', 'P-S-024', 'D-IV Kebidanan', '22', '3', '50', '48', '3', '9', '8', '9', '9', '10', '126', 'PTS-009'),
('ALT-019', 'P-S-024', 'D-IV Kebidanan', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-009'),
('ALT-020', 'P-S-025', 'D-III Kesehatan Lingkungan ', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-021', 'P-S-025', 'D-III Kesehatan Lingkungan ', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-009'),
('ALT-022', 'P-S-026', 'Manajemen-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-023', 'P-S-026', 'Manajemen-S1', '22', '3', '50', '48', '3', '9', '8', '9', '9', '10', '126', 'PTS-001'),
('ALT-024', 'P-S-027', 'Akuntansi-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '9', '126', 'PTS-001'),
('ALT-025', 'P-S-027', 'Akuntansi-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-026', 'P-S-028', 'Ilmu Hukum-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-027', 'P-S-028', 'Ilmu Hukum-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-028', 'P-S-029', 'Administrasi Negara-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-029', 'P-S-029', 'Administrasi Negara-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-030', 'P-S-030', 'Ilmu Pemerintahan-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-031', 'P-S-030', 'Ilmu Pemerintahan-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-032', 'P-S-031', 'Teknik Sipil-S1 ', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-033', 'P-S-032', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '9', '9', '9', '9', '10', '126', 'PTS-001'),
('ALT-034', 'P-S-033', 'Manajemen Budidaya Perairan-S1', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-001'),
('ALT-035', 'P-S-033', 'Manajemen Budidaya Perairan-S1', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-001'),
('ALT-036', 'P-S-034', 'Pendidikan Agama Islam(PAI) -S1', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-001'),
('ALT-037', 'P-S-034', 'Pendidikan Agama Islam(PAI) -S1', '22', '3', '50', '48', '3', '9', '9', '9', '10', '10', '126', 'PTS-001'),
('ALT-038', 'P-S-035', 'Pendidikan Guru Sekolah Dasar(PGSD)-S1', '22', '3', '50', '48', '3', '9', '8', '9', '10', '10', '126', 'PTS-001'),
('ALT-039', 'P-S-035', 'Pendidikan Guru Sekolah Dasar(PGSD)-S1', '22', '3', '50', '48', '3', '9', '8', '9', '10', '10', '126', 'PTS-001'),
('ALT-040', 'P-S-036', 'Keuangan dan Perbankan D-III', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-003'),
('ALT-041', 'P-S-036', 'Keuangan dan Perbankan D-III', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-042', 'P-S-036', 'Keuangan dan Perbankan D-III', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-003'),
('ALT-043', 'P-S-037', 'Manajemen-S1', '22', '3', '50', '48', '3', '9', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-044', 'P-S-037', 'Manajemen-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-045', 'P-S-037', 'Manajemen-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-046', 'P-S-038', 'Ekonomi Pembangunan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-047', 'P-S-038', 'Ekonomi Pembangunan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-048', 'P-S-038', 'Ekonomi Pembangunan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-050', 'P-S-039', 'Sains Manajemen-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-051', 'P-S-039', 'Sains Manajemen-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-052', 'P-S-039', 'Sains Manajemen-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-003'),
('ALT-053', 'P-S-041', 'Manajemen-S1', '22', '3', '50', '48', '3', '8', '9', '9', '10', '10', '126', 'PTS-004'),
('ALT-054', 'P-S-041', 'Manajemen-S1', '22', '3', '50', '48', '3', '8', '9', '9', '10', '10', '126', 'PTS-004'),
('ALT-055', 'P-S-041', 'Manajemen-S1', '22', '3', '50', '48', '3', '8', '9', '9', '10', '10', '126', 'PTS-004'),
('ALT-056', 'P-S-041', 'Manajemen-S1', '22', '3', '50', '48', '3', '8', '9', '9', '10', '10', '126', 'PTS-004'),
('ALT-057', 'P-S-042', 'Ekonomi Pembangunan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-058', 'P-S-042', 'Ekonomi Pembangunan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-059', 'P-S-042', 'Ekonomi Pembangunan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-060', 'P-S-042', 'Ekonomi Pembangunan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-061', 'P-S-043', 'Akuntansi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-062', 'P-S-043', 'Akuntansi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-063', 'P-S-043', 'Akuntansi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '9', '126', 'PTS-004'),
('ALT-064', 'P-S-043', 'Akuntansi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-065', 'P-S-044', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-066', 'P-S-044', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-067', 'P-S-045', 'Biologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-068', 'P-S-045', 'Biologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-069', 'P-S-046', 'Teknik Geologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-070', 'P-S-046', 'Teknik Geologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-071', 'P-S-047', 'Agroteknologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-072', 'P-S-047', 'Agroteknologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-073', 'P-S-048', 'Agrabisnis-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-074', 'P-S-048', 'Agrabisnis-S1', '22', '3', '50', '48', '3', '8', '8', '9', '10', '10', '126', 'PTS-004'),
('ALT-075', 'P-S-050', 'Manajemen Sumber Daya Perairan-S1', '22', '3', '50', '48', '3', '8', '9', '9', '10', '10', '126', 'PTS-004'),
('ALT-076', 'P-S-050', 'Manajemen Sumber Daya Perairan-S1', '22', '3', '50', '48', '3', '8', '9', '9', '10', '10', '126', 'PTS-004'),
('ALT-077', 'P-S-051', 'Teknik Sipil-S1 ', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-078', 'P-S-051', 'Teknik Sipil-S1 ', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-079', 'P-S-051', 'Teknik Sipil-S1 ', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-080', 'P-S-052', 'Arsitektur-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-081', 'P-S-052', 'Arsitektur-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-082', 'P-S-053', 'Teknik Lingkungan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-083', 'P-S-054', 'Perancangan Wilayah dan Kota(Planologi)-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-084', 'P-S-054', 'Perancangan Wilayah dan Kota(Planologi)-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-085', 'P-S-054', 'Perancangan Wilayah dan Kota(Planologi)-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-086', 'P-S-055', 'Teknik Mesin-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-087', 'P-S-055', 'Teknik Mesin-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-088', 'P-S-056', 'Teknik Elektro-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-089', 'P-S-056', 'Teknik Elektro-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-090', 'P-S-057', 'Teknik Pertambangan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-091', 'P-S-057', 'Teknik Pertambangan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-092', 'P-S-058', 'Teknik Geologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-093', 'P-S-058', 'Teknik Geologi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-094', 'P-S-059', 'Teknik Informatika-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-095', 'P-S-059', 'Teknik Informatika-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-096', 'P-S-059', 'Teknik Informatika-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-097', 'P-S-057', 'Teknik Pertambangan-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-098', 'P-S-060', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-099', 'P-S-060', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-100', 'P-S-060', 'Sistem Informasi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-101', 'P-S-062', 'Sastra Inggris-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-102', 'P-S-062', 'Sastra Inggris-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-103', 'P-S-062', 'Sastra Inggris-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-104', 'P-S-062', 'Sastra Inggris-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-105', 'P-S-061', 'Akuntansi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-106', 'P-S-061', 'Akuntansi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-107', 'P-S-063', 'Ilmu Komunikasi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-108', 'P-S-063', 'Ilmu Komunikasi-S1', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-109', 'P-S-065', 'Hubungan Internasional-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-110', 'P-S-065', 'Hubungan Internasional-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-111', 'P-S-065', 'Hubungan Internasional-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-112', 'P-S-066', 'Ilmu Pemerintahan-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-113', 'P-S-066', 'Ilmu Pemerintahan-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-114', 'P-S-066', 'Ilmu Pemerintahan-S1', '22', '3', '50', '48', '3', '8', '9', '9', '9', '8', '126', 'PTS-005'),
('ALT-115', 'P-S-067', 'Farmasi-D III', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-116', 'P-S-067', 'Farmasi-D III', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-117', 'P-S-068', 'Analis Kesehatan-D III', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-118', 'P-S-068', 'Analis Kesehatan-D III', '22', '3', '50', '48', '3', '8', '8', '9', '9', '8', '126', 'PTS-005'),
('ALT-119', 'P-S-069', 'Ilmu Hukum-S1', '22', '3', '50', '48', '3', '9', '9', '10', '10', '7', '126', 'PTS-006'),
('ALT-120', 'P-S-071', 'Ilmu Komputer-S1/Informatika', '22', '3', '50', '48', '3', '8', '8', '10', '10', '8', '126', 'PTS-008'),
('ALT-121', 'P-S-072', 'Kewirausahaan-S1', '22', '3', '50', '48', '3', '8', '8', '10', '10', '8', '126', 'PTS-008'),
('ALT-122', 'P-S-073', 'Ilmu Lingkungan-S1', '22', '3', '50', '48', '3', '8', '8', '10', '10', '8', '126', 'PTS-008'),
('ALT-123', 'P-S-074', 'Ilmu Komunikasi-S1', '22', '3', '50', '48', '3', '8', '9', '10', '10', '8', '126', 'PTS-008'),
('ALT-124', 'P-S-075', 'Ilmu Hukum-S1', '22', '3', '50', '48', '3', '8', '8', '10', '10', '8', '126', 'PTS-008'),
('ALT-125', 'P-S-076', 'Ilmu Psikologi-S1', '22', '3', '50', '48', '3', '8', '8', '10', '10', '8', '126', 'PTS-008'),
('ALT-126', 'P-S-077', 'Kehumasan-D III', '22', '3', '50', '48', '3', '8', '9', '10', '10', '8', '126', 'PTS-008');

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
(3, 'P-S-017', 'D- III Gizi', '0.17460317', '0.02380952', '0.39682539', '-0', '-0', '0.59523809', 'PTS-009'),
(4, 'P-S-017', 'D- III Gizi', '0.17460317', '0.02380952', '0.39682539', '-0', '-0', '0.59523809', 'PTS-009'),
(5, 'P-S-034', 'Pendidikan Agama Islam(PAI) -S1', '0.17460317', '0.02380952', '0.39682539', '-0', '-0', '0.59523809', 'PTS-001'),
(6, 'P-S-002', 'Sistem Informasi-S1', '0', '0', '-0', '0.38095238', '0.07142857', '0.45238095', 'PTS-002'),
(7, 'P-S-069', 'Ilmu Hukum-S1', '0.17460317', '0.02380952', '-0', '-0', '0.07142857', '0.26984126', 'PTS-006'),
(8, 'P-S-069', 'Ilmu Hukum-S1', '0.17460317', '0.02380952', '-0', '-0', '0.07142857', '0.26984126', 'PTS-006'),
(9, 'P-S-069', 'Ilmu Hukum-S1', '0.17460317', '0.02380952', '-0', '-0', '0.07142857', '0.26984126', 'PTS-006'),
(10, 'P-S-018', 'D-IV Gizi', '0.17460317', '0', '0.39682539', '-0', '-0', '0.57142857', 'PTS-009'),
(11, 'P-S-018', 'D-IV Gizi', '0.17460317', '0', '0.39682539', '-0', '-0', '0.57142857', 'PTS-009'),
(12, 'P-S-042', 'Ekonomi Pembangunan-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(13, 'P-S-017', 'D- III Gizi', '0.17460317', '0.02380952', '0.39682539', '-0', '-0', '0.59523809', 'PTS-009'),
(14, 'P-S-024', 'D-IV Kebidanan', '0.17460317', '0', '0.39682539', '0.38095238', '-0', '0.95238095', 'PTS-009'),
(15, 'P-S-002', 'Sistem Informasi-S1', '0', '0', '-0', '0.12', '0.01125', '0.13125', 'PTS-002'),
(16, 'P-S-060', 'Sistem Informasi-S1', '0', '0', '0.39682539', '0.38095238', '0.02380952', '0.80158730', 'PTS-005'),
(17, 'P-S-032', 'Sistem Informasi-S1', '0.17460317', '0.02380952', '0.39682539', '0.38095238', '-0', '0.97619047', 'PTS-001'),
(18, 'P-S-032', 'Sistem Informasi-S1', '0.17460317', '0.02380952', '0.39682539', '0.38095238', '-0', '0.97619047', 'PTS-001'),
(19, 'P-S-044', 'Sistem Informasi-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(20, 'P-S-042', 'Ekonomi Pembangunan-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(21, 'P-S-042', 'Ekonomi Pembangunan-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(22, 'P-S-042', 'Ekonomi Pembangunan-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(23, 'P-S-042', 'Ekonomi Pembangunan-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(24, 'P-S-042', 'Ekonomi Pembangunan-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(25, 'P-S-042', 'Ekonomi Pembangunan-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(26, 'P-S-043', 'Akuntansi-S1', '0', '0', '0.39682539', '-0', '-0', '0.39682539', 'PTS-004'),
(27, 'P-S-041', 'Manajemen-S1', '0', '0.02380952', '0.39682539', '-0', '-0', '0.42063492', 'PTS-004');

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

--
-- Dumping data for table `pencarian`
--

INSERT INTO `pencarian` (`kd_pencarian`, `cari`) VALUES
(1, 'STIMIK'),
(2, 'Teknik '),
(3, ''),
(4, 'Teknik '),
(5, 'Teknik '),
(6, 'Teknik '),
(7, 'Teknik '),
(8, 'Teknik '),
(9, 'sistem');

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
('P-S-002', 'PTS-002', 'Sistem Informasi-S1', 'C', 'Membimbing Mahasiswa Untuk Menjadi Web Developer'),
('P-S-003', 'PTS-002', 'Teknik Informatika-S1', 'C', 'Membina Mahasiswa Menjadi Analis IT'),
('P-S-013', 'PTS-007', 'ilmu Komputer-S1', 'B', 'Kecerdasan Buatan (AI)'),
('P-S-014', 'PTS-007', 'Manajemen Informatika D-III', 'C', 'Kecerdasan Buatan (AI)'),
('P-S-017', 'PTS-009', 'D- III Gizi', 'B', 'sesuai bidang keilmuan'),
('P-S-018', 'PTS-009', 'D-IV Gizi', 'B', 'sesuai bidang keilmuan'),
('P-S-019', 'PTS-009', 'D-III Analis Kesehatan ', 'B', 'sesuai bidang keilmuan'),
('P-S-020', 'PTS-009', 'D-III Farmasi ', 'B', 'sesuai bidang keilmuan'),
('P-S-021', 'PTS-009', 'D-III Keperawatan ', 'B', 'sesuai bidang keilmuan'),
('P-S-022', 'PTS-009', 'D-IV Keperawatan', 'B', 'sesuai bidang keilmuan'),
('P-S-023', 'PTS-009', 'D-III Kebidanan', 'B', 'sesuai bidang keilmuan'),
('P-S-024', 'PTS-009', 'D-IV Kebidanan', 'B', 'sesuai bidang keilmuan'),
('P-S-025', 'PTS-009', 'D-III Kesehatan Lingkungan ', 'B', 'sesuai bidang keilmuan'),
('P-S-026', 'PTS-001', 'Manajemen-S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0 '),
('P-S-027', 'PTS-001', 'Akuntansi-S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-028', 'PTS-001', 'Ilmu Hukum-S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-029', 'PTS-001', 'Administrasi Negara-S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-030', 'PTS-001', 'Ilmu Pemerintahan-S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-031', 'PTS-001', 'Teknik Sipil-S1 ', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-032', 'PTS-001', 'Sistem Informasi-S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-033', 'PTS-001', 'Manajemen Budidaya Perairan-S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-034', 'PTS-001', 'Pendidikan Agama Islam(PAI) -S1', 'B', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-035', 'PTS-001', 'Pendidikan Guru Sekolah Dasar(PGSD)-S1', 'C', 'Program Studi yang disesuaikan dengan kebutuhan masyarakat dan prospek karir di Era Industri 4.0'),
('P-S-036', 'PTS-003', 'Keuangan dan Perbankan D-III', 'B', 'Sesuai bidang keilmuan'),
('P-S-037', 'PTS-003', 'Manajemen-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-038', 'PTS-003', 'Ekonomi Pembangunan-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-039', 'PTS-003', 'Sains Manajemen-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-040', 'PTS-004', 'Magister Manajemen-S2', 'C', 'Sesuai bidang keilmuan'),
('P-S-041', 'PTS-004', 'Manajemen-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-042', 'PTS-004', 'Ekonomi Pembangunan-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-043', 'PTS-004', 'Akuntansi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-044', 'PTS-004', 'Sistem Informasi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-045', 'PTS-004', 'Biologi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-046', 'PTS-004', 'Teknik Geologi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-047', 'PTS-004', 'Agroteknologi-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-048', 'PTS-004', 'Agrabisnis-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-049', 'PTS-004', 'Kehutanan-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-050', 'PTS-004', 'Manajemen Sumber Daya Perairan-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-051', 'PTS-005', 'Teknik Sipil-S1 ', 'C', 'Sesuai bidang keilmuan'),
('P-S-052', 'PTS-005', 'Arsitektur-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-053', 'PTS-005', 'Teknik Lingkungan-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-054', 'PTS-005', 'Perancangan Wilayah dan Kota(Planologi)-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-055', 'PTS-005', 'Teknik Mesin-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-056', 'PTS-005', 'Teknik Elektro-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-057', 'PTS-005', 'Teknik Pertambangan-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-058', 'PTS-005', 'Teknik Geologi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-059', 'PTS-005', 'Teknik Informatika-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-060', 'PTS-005', 'Sistem Informasi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-061', 'PTS-005', 'Akuntansi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-062', 'PTS-005', 'Sastra Inggris-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-063', 'PTS-005', 'Ilmu Komunikasi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-065', 'PTS-005', 'Hubungan Internasional-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-066', 'PTS-005', 'Ilmu Pemerintahan-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-067', 'PTS-005', 'Farmasi-D III', 'C', 'Sesuai bidang keilmuan'),
('P-S-068', 'PTS-005', 'Analis Kesehatan-D III', 'C', 'Sesuai bidang keilmuan'),
('P-S-069', 'PTS-006', 'Ilmu Hukum-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-070', 'PTS-006', 'Magister Hukum-S2', 'B', 'Sesuai bidang keilmuan'),
('P-S-071', 'PTS-008', 'Ilmu Komputer-S1/Informatika', 'C', 'Sesuai bidang keilmuan'),
('P-S-072', 'PTS-008', 'Kewirausahaan-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-073', 'PTS-008', 'Ilmu Lingkungan-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-074', 'PTS-008', 'Ilmu Komunikasi-S1', 'B', 'Sesuai bidang keilmuan'),
('P-S-075', 'PTS-008', 'Ilmu Hukum-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-076', 'PTS-008', 'Ilmu Psikologi-S1', 'C', 'Sesuai bidang keilmuan'),
('P-S-077', 'PTS-008', 'Kehumasan-D III', 'B', 'Sesuai bidang keilmuan');

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
  `fasilitas_kampus` text DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pts`
--

INSERT INTO `pts` (`kd_pts`, `nama_pts`, `alamat`, `kota`, `kode_pos`, `no_telepon`, `email`, `laman_web`, `akreditasi`, `fasilitas_kampus`, `username`, `password`) VALUES
('1', 'ADMIN APTISI', '-', '-', '-', '-', '-', '-', '-', NULL, 'admin', 'admin'),
('PTS-001', 'Universitas Yapis Papua', 'Jl.Dr.Samratulangi No.11 Dok V Atas Jayapura â€“ Papua', 'Jayapura', '99222', '09675543', 'bippi.uniyap@gmail.com', 'www.uniyap.ac.id', 'B', 'Testing', 'uniyap', 'uniyap'),
('PTS-002', 'Sekolah Tinggi Ilmu Manajemen Informatika dan Komputer (STIMIK) Sepuluh November Jayapura', 'Jl.Ardipura 11 No.22B Polimak, Jayapura â€“ Papua ', 'Jayapura', '99223', '0967533769', 'stimiksepnop@gmail.com', 'stimiksepnop.ac.id', 'C', NULL, 'stimik', 'stimik'),
('PTS-003', 'Sekolah Tinggi Ilmu Ekonomi (STIE) Port Numbay', 'Jl.Beringin No 1 Entrop â€“ Jayapura SelataN, Kota Jayapura â€“ Papua ', 'Jayapura', '99224', '09675311551787', 'stieportnumbay@gmail.com', 'www.stieportnumbay.ac.id ', 'C', NULL, 'stie', 'stie'),
('PTS-004', 'Universitas Ottow Geissler Papua (UOGP)', 'Jln.Perkutut Kotaraja Jayapura â€“ Papua ', 'Jayapura', '99225', '0834082612', 'infouogp@yahoo.com', 'www.uogp.ac.id', 'C', NULL, 'uogp', 'uogp'),
('PTS-005', 'Universitas Sains dan Teknologi Jayapura', 'Jl.Raya Sentani, Padang Bulan Jayapura â€“ Papua ', 'Jayapura', '99225', '09675362', 'ustj@gmail.com', 'www.ustj.ac.id', 'C', NULL, 'ustj', 'ustj'),
('PTS-006', 'Sekolah Tinggi Ilmu Hukum (STIH) Umel Mandiri Jayapura ', 'Jl.Raya Abepura, Kotaraja Depan Perpustakaan Daerah ', 'Jayapura', '99225', '0967588763', 'stih@umelmandiri.ac.id', 'www.stihumelmandiri.ac.id', 'C', NULL, 'stih', 'stih'),
('PTS-007', 'Sekolah Tinggi Ilmu Manajemen dan Ilmu Kumputer (STIMIK) Umel Mandiri Jayapura', 'Jl.Raya Abepura, Kotaraja Depan Perpustakaan Daerah', 'Jayapura', '99225', '09675850967', 'stimik@umelmandiri.ac.id', 'www.stimikumelmandiri', 'C', NULL, 'umelmandiri', 'umelmandiri'),
('PTS-008', 'Universitas Muhammadiyah Papua ', 'Jl.Abepura No.25 Tanah Hitam Abepura - Jayapura', 'Jayapura', '99351', '0967586714', 'umpapua@gmail.com', 'umpapua.ac.id', 'C', NULL, 'umpapua', 'umpapua'),
('PTS-009', 'Politeknik Kesehatan Jayapura (POLTEKES)', 'Jl.Padang bulan II, Kelurahan Hedam,Distrik Heram ', 'Jayapura', '99225', '0967584280', 'info@poltekesjayapura.ac.id', 'www.poltekesjayapura.ac.id', 'B', NULL, 'poltekes', 'poltekes');

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
('SUB-001', 'KRI-001', 'A', '10'),
('SUB-002', 'KRI-001', 'B', '9'),
('SUB-003', 'KRI-001', 'C', '8'),
('SUB-004', 'KRI-002', 'IPA', '9'),
('SUB-005', 'KRI-002', 'IPS', '9'),
('SUB-006', 'KRI-002', 'SMK', '9'),
('SUB-007', 'KRI-002', 'SMK Pertanian', '9'),
('SUB-008', 'KRI-002', 'Paket C', '9'),
('SUB-009', 'KRI-002', 'Batu&Beton', '9'),
('SUB-010', 'KRI-002', 'Gambar Bangunan', '9'),
('SUB-011', 'KRI-002', 'Otomotif', '9'),
('SUB-012', 'KRI-002', 'Elektro', '9'),
('SUB-013', 'KRI-002', 'Mineral ', '9'),
('SUB-014', 'KRI-002', 'TKJ', '9'),
('SUB-015', 'KRI-002', 'RPL', '9'),
('SUB-016', 'KRI-002', 'Bahasa', '9'),
('SUB-017', 'KRI-002', 'Administrasi', '9'),
('SUB-018', 'KRI-002', 'SMAK', '9'),
('SUB-019', 'KRI-005', 'A', '10'),
('SUB-020', 'KRI-005', 'B', '9'),
('SUB-021', 'KRI-005', 'C', '8'),
('SUB-022', 'KRI-004', 'Sangat Lengkap', '10'),
('SUB-023', 'KRI-004', 'Lengkap', '9'),
('SUB-024', 'KRI-004', 'Cukup Lengkap', '8'),
('SUB-025', 'KRI-004', 'Kurang Lengkap', '7'),
('SUB-029', 'KRI-002', 'semua jurusan', '10'),
('SUB-030', 'KRI-003', '3.700.000', '9'),
('SUB-031', 'KRI-003', '2.100.000;', '10'),
('SUB-032', 'KRI-003', '2.650.000;', '10'),
('SUB-033', 'KRI-003', '3.762.500;', '9'),
('SUB-034', 'KRI-003', '3.500.000;', '9'),
('SUB-035', 'KRI-003', '3000.000;', '10'),
('SUB-036', 'KRI-003', '3.500.000;', '9'),
('SUB-037', 'KRI-003', '2.200.000;', '10'),
('SUB-038', 'KRI-003', '3000.000;', '10'),
('SUB-039', 'KRI-003', '5000.000;', '8'),
('SUB-040', 'KRI-003', '2.400.000;', '10'),
('SUB-041', 'KRI-003', '2.400.000;', '10'),
('SUB-042', 'KRI-003', '2.400.000;', '10'),
('SUB-043', 'KRI-003', '3000.000;', '10'),
('SUB-044', 'KRI-003', '2.700.000;', '10'),
('SUB-045', 'KRI-003', '2.600.000;', '10'),
('SUB-046', 'KRI-003', '3.200.000;', '9'),
('SUB-047', 'KRI-003', '3.700.000', '9'),
('SUB-048', 'KRI-003', '3000000', '8');

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
  MODIFY `kd_hasil` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pencarian`
--
ALTER TABLE `pencarian`
  MODIFY `kd_pencarian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
