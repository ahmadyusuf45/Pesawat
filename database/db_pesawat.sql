-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 02:25 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pesawat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandara`
--

CREATE TABLE `bandara` (
  `id_bandara` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `kota_bandara` varchar(50) NOT NULL,
  `nama_bandara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandara`
--

INSERT INTO `bandara` (`id_bandara`, `kode`, `kota_bandara`, `nama_bandara`) VALUES
('BDR001', 'JKT', 'Jakarta', 'Halim Perdana Kusuma'),
('BDR002', 'SMG', 'Semarang', 'Ahmad Yani Airport'),
('BDR003', 'TG', 'Tangerang', 'Soekarno Hatta Airport'),
('BDR004', 'MKS', 'Makasar', 'Sultan Hasanuddin Airport'),
('BDR005', 'BL', 'Bali', 'Ngurah Rai Airport'),
('BDR006', 'PLM', 'Palembang', 'Sultan Mahmud Badaruddin II'),
('BDR007', 'BKS', 'Kota Bengkulu', 'Fatmawati Soekarno'),
('BDR008', 'KRC', 'Kerinci', 'Depati Parbo'),
('BDR009', 'PGK', 'Pangkal Pinang', 'Depati Amir'),
('BDR010', 'CBN', 'Cirebon', 'Cakrabhuwanan');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(50) NOT NULL,
  `id_customer` varchar(50) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jml_penumpang` varchar(50) NOT NULL,
  `total_tarif` varchar(50) NOT NULL,
  `status_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_customer`, `tgl_booking`, `jml_penumpang`, `total_tarif`, `status_bayar`) VALUES
('BKG001', 'CTR001', '2018-02-20', '2', '200000', 'TERBAYAR'),
('BKG002', 'CTR002', '2018-02-28', '2', '200000', 'TERBAYAR'),
('BKG003', 'CTR003', '2018-01-01', '1', '100000', 'TERBAYAR'),
('BKG004', 'CTR004', '2018-01-23', '2', '200000', 'TERBAYAR');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `email`, `kota`, `negara`) VALUES
('CTR001', 'Ahmad Yusuf Abdillah', 'ahmadyusuf.sj@gmail.com', 'Jepara', 'Indonesia'),
('CTR002', 'Karsono', 'karsono.sj@gmail.com', 'Sumatra', 'Indenesia'),
('CTR003', 'Sulaiman Bin Mail', 'sulaiman@gmail.com', 'Surabaya', 'Indonesai'),
('CTR004', 'Mailani Rahmawati', 'mailani.mdp@gmail.com', 'Semarang', 'indonesai'),
('CTR005', 'Dimas Syahrizal', 'dimas@gmail.com', 'Jakrta', 'Indonesai');

-- --------------------------------------------------------

--
-- Table structure for table `detail_booking`
--

CREATE TABLE `detail_booking` (
  `id_detail` varchar(50) NOT NULL,
  `id_tarif` varchar(50) NOT NULL,
  `id_booking` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_booking`
--

INSERT INTO `detail_booking` (`id_detail`, `id_tarif`, `id_booking`) VALUES
('DTL001', 'TRF002', 'BKG001'),
('DTL002', 'TRF001', 'BKG002'),
('DTL003', 'TRF002', 'BKG003'),
('DTL004', 'TRF001', 'BKG004');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
('LG001', 'admin', 'admin', 'admin'),
('LG002', 'petugas', 'petugas', 'petugas'),
('LG003', 'manajer', 'manajer', 'manajer'),
('LG004', 'master', 'master', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id_passenger` int(11) NOT NULL,
  `id_detail` varchar(50) NOT NULL,
  `nama_passenger` varchar(50) NOT NULL,
  `nomor_kursi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id_passenger`, `id_detail`, `nama_passenger`, `nomor_kursi`) VALUES
(77, 'DTL001', 'Ahmad yusuf', 'EKO001'),
(78, 'DTL001', 'Ahmad Dico Supaad', 'EKO002'),
(79, 'DTL002', 'Novita Putri', 'BIS003'),
(80, 'DTL002', 'Hilya Nur Maulita', 'BIS004'),
(81, 'DTL003', 'Ahmad Zailan', 'EKO003'),
(82, 'DTL004', 'Nur Maulita', 'BIS004'),
(83, 'DTL004', 'Novita Putri', 'BIS005');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id_penerbangan` varchar(50) NOT NULL,
  `tgl_penerbangan` date NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `id_bandara` varchar(50) NOT NULL,
  `id_pesawat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id_penerbangan`, `tgl_penerbangan`, `asal`, `tujuan`, `jam_berangkat`, `jam_tiba`, `id_bandara`, `id_pesawat`) VALUES
('PBN001', '2018-02-20', 'Jakarta', 'Bali', '12:00:00', '14:00:00', 'BDR001', 'PSW001'),
('PBN002', '2018-02-20', 'Semarang', 'Jakarta', '17:00:00', '18:00:00', 'BDR002', 'PSW003');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` varchar(50) NOT NULL,
  `type_pesawat` varchar(50) NOT NULL,
  `jml_kursi_ekonomi` varchar(50) NOT NULL,
  `jml_kursi_bisnis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `type_pesawat`, `jml_kursi_ekonomi`, `jml_kursi_bisnis`) VALUES
('PSW001', 'Garuda Indonesai', '100', '96'),
('PSW002', 'Batik Air', '100', '100'),
('PSW003', 'Lion Air', '97', '100'),
('PSW004', 'Abudabi Airline', '100', '100'),
('PSW005', 'Singapore Airline', '100', '100'),
('PSW006', 'Aviastar', '100', '100'),
('PSW007', 'Indonesia AirAsia', '100', '100'),
('PSW008', 'Kalstar Aviation', '100', '100'),
('PSW009', 'Sriwijaya Air', '100', '100'),
('PSW010', 'Susi Air', '100', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tarif_penerbangan`
--

CREATE TABLE `tarif_penerbangan` (
  `id_tarif` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `id_penerbangan` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif_penerbangan`
--

INSERT INTO `tarif_penerbangan` (`id_tarif`, `kelas`, `id_penerbangan`, `tarif`) VALUES
('TRF001', 'BISNIS', 'PBN001', '100000'),
('TRF002', 'EKONOMI', 'PBN002', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`id_bandara`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_booking`
--
ALTER TABLE `detail_booking`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id_passenger`,`nomor_kursi`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id_penerbangan`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `tarif_penerbangan`
--
ALTER TABLE `tarif_penerbangan`
  ADD PRIMARY KEY (`id_tarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id_passenger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
