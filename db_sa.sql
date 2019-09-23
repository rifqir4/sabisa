-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 03:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'BERANDA', 'beranda', 'fa fa-home', 0),
(2, 'Pendataan', '#', 'clip-screen', 0),
(3, 'Form Pendataan', 'formpendataan', 'fa fa-building', 2),
(4, 'Pendaftaran', '#', 'clip-pencil', 0),
(5, 'Form Pendaftaran', 'formpendaftaran', 'fa fa-building', 4),
(6, 'Upload Dokumen', 'upload_dokumen', 'fa fa-building', 4),
(7, 'Pembayaran', 'pembayaran', 'fa fa-building', 4),
(8, 'Pelaksanaan', '#', 'clip-file', 0),
(9, 'KRS Mahasiswa', 'krsmahasiswa', 'fa fa-building', 8),
(10, 'Jadwal Kuliah', 'jadwalkuliah', 'fa fa-building', 8),
(11, 'KRS Pendaftaran', 'krs_pendaftaran', 'fa fa-pencil', 4),
(12, 'Daftar Pendataaan', 'daftar_pendataan_dpa', 'fa fa-database', 2),
(13, 'Krs_Pendataan', 'krs_pendataan', 'fa fa-pencil', 2),
(14, 'Daftar Pendaftaran', 'daftar_pendaftaran', 'fa fa-database', 4),
(15, 'Dosen ', 'dosen', 'fa fa-building', 18),
(16, 'Jadwal SA', 'jadwalsa', 'fa fa-calendar-o', 2),
(17, 'Daftar Pembayaran', 'daftar_pembayaran', 'fa fa-database', 4),
(18, 'Master Data', '#', 'fa fa-bars', 0),
(19, 'Mahasiswa', 'mahasiswa', 'fa fa-building', 18),
(20, 'Mata Kuliah', 'matakuliah', 'fa fa-building', 18),
(21, 'Ruangan Kelas', 'ruangan', 'fa fa-building', 18),
(22, 'Jurusan', 'jurusan', 'fa fa-building', 18),
(23, 'Program Studi', 'programstudi', 'fa fa-building', 18),
(24, 'Tahun Ajar', 'tahunajar', 'fa fa-building', 18),
(25, 'Daftar MK Dibuka', 'daftar_matakuliah_dibuka', 'fa fa-database', 2),
(26, 'TIMELINE', 'Timeline', 'fa fa-calendar', 0),
(28, 'Pengguna Sistem', 'pengguna', 'fa fa-th-large', 0),
(30, 'Daftar MK Pendataan', 'daftar_matakuliah_pendataan', 'fa fa-database', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen`
--

CREATE TABLE `t_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nomor_induk` varchar(200) NOT NULL,
  `nama_dosen` varchar(200) NOT NULL,
  `is_dosen_pa` smallint(1) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dosen`
--

INSERT INTO `t_dosen` (`id_dosen`, `nomor_induk`, `nama_dosen`, `is_dosen_pa`, `id_pengguna`) VALUES
(4, '19720919 199702 1 001', 'Wayan Firdaus Mahmudy, S.Si., M.T., Ph.D.', 1, 3),
(5, '19650402 199002 1 001', 'Heru Nurwarsito, Ir., M.Kom. ', 1, 0),
(6, '19710727 199603 1 001', 'Suprapto, S.T., M.T.', 1, 0),
(7, '19740414 200312 1 004', 'Edy Santoso, S.Si., M.Kom. ', 1, 0),
(8, '19740823 200012 1 001 ', 'Herman Tolle, Dr. Eng., S.T., M.T.', 1, 0),
(9, '19710518 200312 1 001', 'Tri Astoto Kurniawan, S.T., M.T., Ph.D.', 1, 0),
(10, '201006 740719 1 001', 'Ismiarta Aknuranda, S.T., M.Sc., Ph.D.', 1, 0),
(11, '19820930 200801 1 004', 'Muhammad Tanzil Furqon, S.Kom., M.CompSc.', 1, 0),
(12, '19740805 200112 1 001', 'Agus Wahyu Widodo, S.T., M.Cs. ', 0, 0),
(13, '201607 870423 1 002', 'Dahnial Syauqy, S.T., M.T., M.Sc. ', 0, 0),
(14, '19820809 201212 1 004', 'Sabriansyah Rizqika Akbar, S.T., M.Eng.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_jurusan`
--

CREATE TABLE `t_jurusan` (
  `id_jurusan` int(1) NOT NULL,
  `nama_jurusan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurusan`
--

INSERT INTO `t_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'SISTEM INFORMASI'),
(2, 'TEKNIK INFORMATIKA');

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `id_mahasiswa` int(5) NOT NULL,
  `id_prodi` int(5) NOT NULL,
  `id_pengguna` int(5) NOT NULL,
  `id_dosen_dpa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id_mahasiswa`, `id_prodi`, `id_pengguna`, `id_dosen_dpa`, `nama_mahasiswa`) VALUES
(1, 1, 1, 3, 'Winda Silviana');

-- --------------------------------------------------------

--
-- Table structure for table `t_matakuliah`
--

CREATE TABLE `t_matakuliah` (
  `id_matakuliah` varchar(200) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `nama_matakuliah` varchar(200) NOT NULL,
  `sks` int(3) NOT NULL,
  `is_praktikum` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_matakuliah`
--

INSERT INTO `t_matakuliah` (`id_matakuliah`, `id_prodi`, `nama_matakuliah`, `sks`, `is_praktikum`) VALUES
('CCE60032', 2, 'Sistem Linier', 3, 0),
('CCE60111', 2, 'Sistem Digital', 4, 1),
('CCE60130', 2, 'Rangkaian & Elektronika', 3, 0),
('CCE61031', 2, 'Sistem Mikrokontroler', 4, 1),
('CCE61150', 2, 'Embedded System', 4, 1),
('CCE61151', 2, 'Sistem Kendali', 3, 0),
('CCE61152', 2, 'Sistem Cerdas', 3, 0),
('CCE61153', NULL, 'Jaringan Komputer', 4, 1),
('CCE61250', 2, 'Robotika', 3, 0),
('CCE61360', 1, 'Jaringan NirKabel', 3, 0),
('CCE61371', 1, 'Arsitektur Jaringan Terkini', 3, 0),
('CCE61372', 1, 'Sistem Komputasi Terdistribusi', 3, 0),
('CCE61450', 2, 'Sistem Medis Berbasis Komputer', 3, 0),
('CCE61550', 2, 'Pemrosesan Parallel', 3, 0),
('CCE62120', 2, 'Basis Data Terapan', 3, 0),
('CCE62140', 2, 'Gerbang Logika Terprogram', 3, 0),
('CCE62141', 2, 'Rangkaian & Elektronika Lanjut', 4, 1),
('CCE62142', 2, 'Arsitektur & Organisasi Komputer Lanjut', 4, 1),
('CCE62143', 2, 'Pemrosesan Sinyal', 3, 0),
('CCE62144', 2, 'Sensor & Aktuator', 3, 0),
('CCE62160', 2, 'Sistem Pengenalan Pola', 3, 0),
('CCE62161', 1, 'Administrasi Jaringan', 3, 0),
('CCE62163', 2, 'Keamanan Komputer', 3, 0),
('CCE62171', 2, 'Rekayasa Sistem Komputer', 3, 0),
('CCE62261', 2, 'Pemrograman Robotika', 3, 0),
('CCE62262', 2, 'Mobile Robotics', 3, 0),
('CCE62361', 1, 'Administrasi Sistem Server', 3, 0),
('CCE62370', 2, 'Wireless Sensor Network', 3, 0),
('CCE62460', 2, 'Komputasi Citra dan Suara', 3, 0),
('CCE62461', 2, 'Teknologi Sistem Cerdas', 3, 0),
('CCE62560', 2, 'Fault Tolerant Computer System', 3, 0),
('CCE62561', 2, 'High Performance Computer System', 3, 0),
('CID60981', NULL, 'Kapita Selekta', 3, 0),
('CID61132', NULL, 'Metode Numerik', 3, 0),
('CID61133', NULL, 'Sistem Operasi', 4, 1),
('CID62120', NULL, 'Pemrograman Lanjut', 5, 1),
('CID62121', NULL, 'Matematika Komputasi Lanjut', 4, 0),
('CID62122', NULL, 'Interaksi Manusia & Komputer', 3, 0),
('CID62125', NULL, 'Statistika', 3, 0),
('CIF60113', 1, 'Sistem Digital', 3, 0),
('CIF60971', 1, 'Induksi Riset', 3, 0),
('CIF60972', 1, 'Internship', 3, 0),
('CIF60973', 1, 'Kewirausahaan Teknologi Informasi', 3, 0),
('CIF60974', 1, 'Manajemen Industri Teknologi Informasi', 3, 0),
('CIF61134', 1, 'Sistem Multimedia', 3, 0),
('CIF61230', 1, 'Algoritma & Struktur Data', 4, 1),
('CIF61236', 1, 'Sistem Basis Data', 5, 1),
('CIF61251', 1, 'Keamanan Informasi', 3, 0),
('CIF61252', 1, 'Pengenalan Pola', 3, 0),
('CIF61255', NULL, 'Rekayasa Perangkat Lunak', 4, 1),
('CIF61256', 1, 'Pemrograman Platform Khusus', 4, 1),
('CIF61351', 1, 'Keamanan Jaringan', 3, 0),
('CIF61371', 1, 'Kriptografi', 3, 0),
('CIF61450', 1, 'Pengolahan Citra Digital', 3, 0),
('CIF61451', 1, 'Text Mining', 3, 0),
('CIF61452', 1, 'Algortima Evolusi', 3, 0),
('CIF61453', 1, 'Sistem Pakar', 3, 0),
('CIF61454', 1, 'Logika Fuzzy', 3, 0),
('CIF61455', 1, 'Sistem Pendukung Keputusan', 3, 0),
('CIF61456', 1, 'Analisis Big Data', 3, 0),
('CIF61471', 1, 'Swarm Intelligence', 3, 0),
('CIF61551', 1, 'Rekayasa & Manajemen Kebutuhan', 3, 0),
('CIF61552', 1, 'Rekayasa Pengetahuan', 3, 0),
('CIF61571', 1, 'Web Semantik', 3, 0),
('CIF61572', 1, 'Metode Formal dalam Rekayasa Perangkat Lunak', 3, 0),
('CIF61573', 1, 'Rekayasa Embedded System', 3, 0),
('CIF61574', 1, 'Manajemen Konfigurasi Perangkat Lunak', 3, 0),
('CIF61651', 1, 'Perancangan Game', 3, 0),
('CIF61652', 1, 'Pembuatan Konten 2D dan 3D', 3, 0),
('CIF61653', 1, 'Grafika Komputer dan Visualisasi', 3, 0),
('CIF61654', 1, 'Pemrograman Aplikasi Perangkat Bergerak', 3, 0),
('CIF62240', 1, 'Desain & Analisis Algoritma', 3, 0),
('CIF62242', 1, 'Kecerdasan Buatan', 4, 1),
('CIF62245', 1, 'Analisis & Perancangan Sistem', 5, 1),
('CIF62246', 1, 'Pemrograman Web', 4, 1),
('CIF62362', 1, 'Jaringan Multimedia', 3, 0),
('CIF62363', 1, 'Perencanaan dan Analisa Jaringan', 3, 0),
('CIF62364', 1, 'Pemrograman Jaringan', 3, 0),
('CIF62365', 1, 'Sistem Forensik Digital', 3, 0),
('CIF62460', 1, 'Visi Komputer', 3, 0),
('CIF62461', 1, 'Data Mining', 3, 0),
('CIF62462', 1, 'Sistem Temu Kembali Informasi', 3, 0),
('CIF62463', 1, 'Jaringan Syaraf Tiruan', 3, 0),
('CIF62466', 1, 'Pemrosesan Bahasa Alami', 3, 0),
('CIF62561', 1, 'Pengujian Perangkat Lunak', 3, 0),
('CIF62562', 1, 'Kualitas dan Kehandalan Perangkat Lunak', 3, 0),
('CIF62563', 1, 'Basis Data Terdistribusi', 3, 0),
('CIF62564', 1, 'Administrasi Basis Data', 3, 0),
('CIF62565', 1, 'Pola-pola Perancangan', 3, 0),
('CIF62567', 1, 'Perancangan User Experience', 3, 0),
('CIF62568', 1, 'Arsitektur Aplikasi Enterprise', 3, 0),
('CIF62569', 1, 'Manajemen Proyek Perangkat Lunak', 3, 0),
('CIF62661', 1, 'Pemrograman Game', 3, 0),
('CIF62662', 1, 'Kecerdasan Buatan dalam Game', 3, 0),
('CIF62663', 1, 'Pemrograman GPU', 3, 0),
('CIF62664', 1, 'Pemrograman Aplikasi Perangkat Bergerak Lanjut', 3, 0),
('CIF62665', 1, 'Rekayasa Aplikasi Perangkat Bergerak', 3, 0),
('CIS61110', 3, 'Manajemen & Organisasi', 3, 0),
('CIS61130', 3, 'Dasar Desain Antarmuka Pengguna', 3, 0),
('CIS61131', 3, 'Algoritma & Struktur Data', 4, 4),
('CIS61132', 3, 'Dasar Pengembangan Sistem Informasi', 3, 0),
('CIS61133', 3, 'Pemodelan Proses Bisnis', 3, 0),
('CIS61150', 3, 'Implementasi dan Pengujian Sistem Informasi', 3, 0),
('CIS61151', 3, 'Tata kelola Teknologi Informasi', 3, 0),
('CIS61152', 3, 'Manajemen Investasi Teknologi Informasi', 3, 0),
('CIS61153', 3, 'Data Warehouse', 3, 0),
('CIS61154', 3, 'Sistem Enterprise', 3, 0),
('CIS62120', 3, 'Interaksi Manusia & Komputer', 3, 0),
('CIS62121', 3, 'Sistem Bisnis Fungsional', 3, 0),
('CIS62140', 3, 'Administrasi Basis Data', 4, 1),
('CIS62141', 3, 'Pemrograman Aplikasi Berbasis Web', 4, 0),
('CIS62142', 3, 'Analisis dan Desain Sistem Informasi', 4, 0),
('CIS62143', 3, 'Desain Interaksi dan Antarmuka Pengguna', 3, 0),
('CIS62160', 3, 'Manajemen Proyek Sistem Informasi', 3, 0),
('CIS62161', 3, 'Perencanaan Strategis Sistem Informasi', 3, 0),
('CIS62162', 3, 'Evaluasi dan Audit Sistem Informasi', 3, 0),
('COM60010', NULL, 'Pemrograman Dasar', 5, 1),
('COM60011', NULL, 'Arsitektur & Organisasi Komputer', 3, 0),
('COM60012', NULL, 'Matematika Komputasi', 4, 0),
('COM60013', NULL, 'Pengantar Ilmu Komputer', 3, 0),
('COM60061', NULL, 'Metodologi Penelitian TI', 2, 0),
('COM60062', NULL, 'Etika Profesi TI', 3, 0),
('CSD60021', 3, 'Sistem Operasi', 3, 0),
('CSD60022', 3, 'Pemrograman Lanjut', 5, 1),
('CSD60031', 3, 'Dasar Basis Data', 4, 1),
('CSD60032', 3, 'Jaringan Komputer', 4, 1),
('CSD60041', 3, 'Statistika', 3, 0),
('TIF61673', 1, 'Augmented & Virtual Reality', 3, 0),
('TIF61675', 1, 'Desain Kreatif Aplikasi & Game', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_pendataan`
--

CREATE TABLE `t_pendataan` (
  `id_pendataan` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `validasi_DPA` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pendataan`
--

INSERT INTO `t_pendataan` (`id_pendataan`, `id_pengguna`, `validasi_DPA`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0),
(4, 1, 0),
(5, 13, 0),
(6, 13, 0),
(7, 13, 0),
(8, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_pendataanmk`
--

CREATE TABLE `t_pendataanmk` (
  `id_pendataanmk` int(11) NOT NULL,
  `id_pendataan` int(11) NOT NULL,
  `id_matakuliah` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pendataanmk`
--

INSERT INTO `t_pendataanmk` (`id_pendataanmk`, `id_pendataan`, `id_matakuliah`, `keterangan`) VALUES
(1, 1, 'COM60011', 'Mengulang'),
(2, 1, 'COM50012', 'Baru'),
(3, 3, 'COM60011', 'Mengulang'),
(4, 5, 'COM60011', 'Mengulang'),
(5, 5, 'COM50012', 'Mengulang'),
(6, 7, 'COM60011', 'Mengulang'),
(7, 7, 'COM50012', 'Baru'),
(8, 7, 'COM60010', 'Mengulang');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(200) NOT NULL,
  `id_peran` int(2) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengguna`
--

INSERT INTO `t_pengguna` (`id_pengguna`, `nama_pengguna`, `id_peran`, `username`, `password`, `alamat_rumah`, `email`, `no_hp`, `foto`) VALUES
(1, 'Winda Silviana', 1, '155150200111289', 'e10adc3949ba59abbe56e057f20f883e', 'Perumahan Joyogrand Blok S/3', 'windassil@student.ub.ac.id', '087789240033', 'azka_jpg1.jpg'),
(2, 'Dyah Ayu Prabandari', 1, '155150200111155', 'e10adc3949ba59abbe56e057f20f883e', 'Jalan Songgolangit No.19 A', 'dyahayu@gmail.com', '081945677654', 'Pandangan-Negara-Agama-dan-politik-dalam-bernegara.jpg'),
(3, 'Wayan Firdaus Mahmudy', 1, '197209191997021001', 'e10adc3949ba59abbe56e057f20f883e', 'Perum. Joyogrand Inside J/7', 'wayan@ub.lecture.ac.id', '081945745654', 'azka_jpg.jpg'),
(9, 'keuangan', 5, '999150200111289', 'e10adc3949ba59abbe56e057f20f883e', 'vavivu', 'endahon@gmail.com', '+62874827578', 'Fang_Render.png'),
(12, 'Akademik', 2, 'yohanes123', 'e10adc3949ba59abbe56e057f20f883e', 'halo halo halo', 'yohanes@akademik.ub.ac.id', '+62987676543', 'azka_jpg2.jpg'),
(13, 'Muhammad Fariz Arizali Effendi ', 1, '155150407111009', 'e10adc3949ba59abbe56e057f20f883e', 'Universitas Brawijaya', 'fariz@gmail.com', '081945671234', ''),
(14, 'Fakhri Rahmadan', 1, '155150407111056', '123456', 'Universitas Brawijaya', 'Fakhri@gmail.com', '08778123033', ''),
(15, 'Rino Adityo Putra', 1, '155150401111062', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(20, 'Hafid Satrio Primbodo ', 1, '155150207111059', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(21, 'Rakha Fikran Julda', 1, '155150207111110', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(22, 'Tirta Adi Prasetya', 1, '155150207111019', '123456', 'Universitas Brawijaya', 'Fakhri@gmail.com', '08778123033', ''),
(23, 'Muhammad Syauqi Dhiaulhaq ', 1, '155150207111157', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(24, 'Arjun Nurdiansyah ', 1, '155150201111007', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(25, 'Prasetyo Eko Yulianto ', 1, '155150201111064', '123456', 'Universitas Brawijaya', 'Fakhri@gmail.com', '08778123033', ''),
(26, 'Dini Nurhayati', 1, '156150600111009', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(27, 'Istighfarin Bahtiar', 1, '155150401111129', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(28, 'Ade Yudys Triawan', 1, '155150400111038', '123456', 'Universitas Brawijaya', 'Fakhri@gmail.com', '08778123033', ''),
(29, 'Irfan Maulana ', 1, '155150400111090', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', ''),
(30, 'Muhammad Rezky Sayuthi Putra', 1, '155150201111120', '123456', 'Universitas Brawijaya', 'Rino@gmail.com', '081932759454', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengguna_rule`
--

CREATE TABLE `t_pengguna_rule` (
  `id_rule` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_peran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengguna_rule`
--

INSERT INTO `t_pengguna_rule` (`id_rule`, `id_menu`, `id_peran`) VALUES
(7, 3, 1),
(8, 4, 1),
(9, 3, 2),
(10, 6, 2),
(11, 4, 3),
(12, 6, 3),
(13, 8, 3),
(14, 4, 2),
(15, 1, 2),
(16, 2, 2),
(17, 5, 2),
(18, 7, 2),
(19, 8, 2),
(20, 9, 2),
(21, 10, 2),
(22, 11, 2),
(23, 12, 2),
(24, 13, 2),
(25, 14, 2),
(26, 15, 2),
(27, 16, 2),
(28, 17, 2),
(29, 18, 2),
(30, 19, 2),
(31, 20, 2),
(32, 21, 2),
(33, 22, 2),
(34, 23, 2),
(35, 24, 2),
(36, 25, 2),
(37, 26, 2),
(38, 28, 2),
(39, 30, 2),
(40, 2, 1),
(41, 1, 1),
(42, 5, 1),
(43, 6, 1),
(44, 8, 1),
(45, 9, 1),
(46, 10, 1),
(47, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_peran`
--

CREATE TABLE `t_peran` (
  `id_peran` int(1) NOT NULL,
  `nama_peran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_peran`
--

INSERT INTO `t_peran` (`id_peran`, `nama_peran`) VALUES
(1, 'Mahasiswa'),
(2, 'Akademik'),
(3, 'Ketua Program Studi'),
(4, 'Dosen Pembimbing Akademik'),
(5, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `t_prodi`
--

CREATE TABLE `t_prodi` (
  `id_prodi` int(2) NOT NULL,
  `nama_prodi` varchar(200) NOT NULL,
  `id_jurusan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_prodi`
--

INSERT INTO `t_prodi` (`id_prodi`, `nama_prodi`, `id_jurusan`) VALUES
(1, 'Teknik Informatika', 2),
(2, 'Teknik Komputer', 2),
(3, 'Sistem Informasi', 1),
(4, 'Teknologi Informasi', 1),
(5, 'Pendidikan Teknologi Informasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_timeline`
--

CREATE TABLE `t_timeline` (
  `id_timeline` int(11) NOT NULL,
  `nama_timeline` varchar(200) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selese` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_timeline`
--

INSERT INTO `t_timeline` (`id_timeline`, `nama_timeline`, `tanggal_mulai`, `tanggal_selese`) VALUES
(1, 'Pengisian Form Pendataan', '2019-05-01', '2019-05-06');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_t_pengguna`
-- (See below for the actual view)
--
CREATE TABLE `v_t_pengguna` (
`id_pengguna` int(11)
,`nama_pengguna` varchar(200)
,`id_peran` int(2)
,`username` varchar(200)
,`password` varchar(200)
,`alamat_rumah` text
,`email` varchar(200)
,`no_hp` varchar(12)
,`foto` text
,`nama_peran` varchar(200)
);

-- --------------------------------------------------------

--
-- Structure for view `v_t_pengguna`
--
DROP TABLE IF EXISTS `v_t_pengguna`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_t_pengguna`  AS  select `a`.`id_pengguna` AS `id_pengguna`,`a`.`nama_pengguna` AS `nama_pengguna`,`a`.`id_peran` AS `id_peran`,`a`.`username` AS `username`,`a`.`password` AS `password`,`a`.`alamat_rumah` AS `alamat_rumah`,`a`.`email` AS `email`,`a`.`no_hp` AS `no_hp`,`a`.`foto` AS `foto`,`b`.`nama_peran` AS `nama_peran` from (`t_pengguna` `a` join `t_peran` `b`) where `a`.`id_peran` = `b`.`id_peran` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `t_matakuliah`
--
ALTER TABLE `t_matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `t_pendataan`
--
ALTER TABLE `t_pendataan`
  ADD PRIMARY KEY (`id_pendataan`);

--
-- Indexes for table `t_pendataanmk`
--
ALTER TABLE `t_pendataanmk`
  ADD PRIMARY KEY (`id_pendataanmk`);

--
-- Indexes for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `t_pengguna_rule`
--
ALTER TABLE `t_pengguna_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `t_peran`
--
ALTER TABLE `t_peran`
  ADD PRIMARY KEY (`id_peran`);

--
-- Indexes for table `t_prodi`
--
ALTER TABLE `t_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `t_timeline`
--
ALTER TABLE `t_timeline`
  ADD PRIMARY KEY (`id_timeline`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  MODIFY `id_jurusan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_pendataan`
--
ALTER TABLE `t_pendataan`
  MODIFY `id_pendataan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_pendataanmk`
--
ALTER TABLE `t_pendataanmk`
  MODIFY `id_pendataanmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `t_pengguna_rule`
--
ALTER TABLE `t_pengguna_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `t_peran`
--
ALTER TABLE `t_peran`
  MODIFY `id_peran` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_prodi`
--
ALTER TABLE `t_prodi`
  MODIFY `id_prodi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_timeline`
--
ALTER TABLE `t_timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
