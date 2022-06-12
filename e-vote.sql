-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 04:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hakakses` int(2) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hakakses`, `Keterangan`) VALUES
(1, 'admin'),
(2, 'pengawas');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(10) NOT NULL,
  `nama_kandidat` varchar(260) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_kandidat`, `visi`, `misi`, `username`, `password`, `gambar`) VALUES
(1, 'supianto', 'membuat masjid sabilillah yang damai maju dan makmur', 'mendorong para pemuda untuk aktif dalam kegiatan masjid, serta ', 'supi', 'supi', 'fotku.jpg'),
(2, 'jafar', 'invoasi', 'sejahtera dan makmur', 'japar', 'japar', 'bgppt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(12) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `prodi` varchar(250) NOT NULL,
  `fakultas` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `fakultas`, `alamat`, `username`, `password`) VALUES
(190631100100, 'maulid hidayat', 'pendidikan informatika', 'ilmu pendidikan', 'Sampang madura', '190631100100', '12345678'),
(190631100102, 'Fadlilah Septyana Y.A', 'Pendidikan Informatika', 'Ilmu Pendidikan', 'lamongan', '190631100102', 'kelompok1'),
(190631100103, 'Nur wahid hidayatullah', 'pendidikan informatika', 'ilmu pendidikan', 'SURABAYA', '190631100103', 'kelompok2'),
(190631100104, 'Nanda Afdlolul B', 'Pendidikan Informatika', 'Ilmu Pendidikan', 'Lamongan', '190631100104', 'kelompok1'),
(190631100105, 'wanda', 'pendidikan informatika', 'ilmu pendidikan', 'SURABAYA', '190631100105', 'kelompok2'),
(190631100106, 'M. Khamdi Fadli', 'Pendidikan Informatika', 'Ilmu Pendidikan', 'Surabaya', '190631100106', 'kelompok1'),
(190631100120, 'Salman Alfarisi', 'Pendidikan Informatika', 'Ilmu Pendidikan', 'bangkalan', '190631100120', 'kelompok1'),
(190631100121, 'Siti Aminatus Z', 'Pendidikan Informatika', 'Ilmu Pendidikan', 'Bangkalan', '190631100121', 'kelompok1');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(10) NOT NULL,
  `nama_panitia` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_hakakses` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `nama_panitia`, `username`, `password`, `id_hakakses`) VALUES
(1000, 'dayat', 'dayat', 'password', 1),
(1002, 'dela', '1002', 'haish', 2),
(1006, 'khamdi', '1006', 'opo', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pendukung`
-- (See below for the actual view)
--
CREATE TABLE `pendukung` (
`id_kandidat` int(11)
,`nama_kandidat` varchar(260)
,`nim_pendukung` bigint(12)
,`nama` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `pendukung_kandidat`
--

CREATE TABLE `pendukung_kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nim_pendukung` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendukung_kandidat`
--

INSERT INTO `pendukung_kandidat` (`id_kandidat`, `nim_pendukung`) VALUES
(1, 190631100103),
(1, 190631100105),
(1, 190631100106),
(2, 190631100100),
(2, 190631100120);

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `nim` bigint(12) NOT NULL,
  `status_vote` int(2) DEFAULT NULL,
  `suara_kandidat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`nim`, `status_vote`, `suara_kandidat`) VALUES
(190631100106, 1, 1),
(190631100106, 0, NULL),
(190631100120, 1, 2);

-- --------------------------------------------------------

--
-- Structure for view `pendukung`
--
DROP TABLE IF EXISTS `pendukung`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pendukung`  AS SELECT `pendukung_kandidat`.`id_kandidat` AS `id_kandidat`, `kandidat`.`nama_kandidat` AS `nama_kandidat`, `pendukung_kandidat`.`nim_pendukung` AS `nim_pendukung`, `mahasiswa`.`nama` AS `nama` FROM ((`pendukung_kandidat` join `kandidat` on(`pendukung_kandidat`.`id_kandidat` = `kandidat`.`id_kandidat`)) join `mahasiswa` on(`pendukung_kandidat`.`nim_pendukung` = `mahasiswa`.`nim`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hakakses`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD KEY `id_hakakses` (`id_hakakses`);

--
-- Indexes for table `pendukung_kandidat`
--
ALTER TABLE `pendukung_kandidat`
  ADD KEY `id_kandidat` (`id_kandidat`,`nim_pendukung`),
  ADD KEY `nim_pendukung` (`nim_pendukung`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD UNIQUE KEY `nim` (`nim`,`suara_kandidat`) USING BTREE,
  ADD KEY `suara_kandidat` (`suara_kandidat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panitia`
--
ALTER TABLE `panitia`
  ADD CONSTRAINT `panitia_ibfk_1` FOREIGN KEY (`id_hakakses`) REFERENCES `hak_akses` (`id_hakakses`);

--
-- Constraints for table `pendukung_kandidat`
--
ALTER TABLE `pendukung_kandidat`
  ADD CONSTRAINT `pendukung_kandidat_ibfk_1` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`),
  ADD CONSTRAINT `pendukung_kandidat_ibfk_2` FOREIGN KEY (`nim_pendukung`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `voting`
--
ALTER TABLE `voting`
  ADD CONSTRAINT `voting_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `voting_ibfk_2` FOREIGN KEY (`suara_kandidat`) REFERENCES `kandidat` (`id_kandidat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
