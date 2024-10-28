-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 01:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publicspeaking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0a14de5a76e5e14758b04c209f266726');

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE `bukti` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `data_gambar` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datapendaftarleo`
--

CREATE TABLE `datapendaftarleo` (
  `id` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `kelas` enum('Online','Offline') NOT NULL,
  `harga` varchar(100) NOT NULL,
  `bukti` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapendaftarleo`
--

INSERT INTO `datapendaftarleo` (`id`, `firstname`, `lastname`, `gender`, `email`, `nohp`, `kelas`, `harga`, `bukti`) VALUES
(3, 'jungkook', 'jeon', 'M', 'jk@gmail.com', '', 'Offline', '280000', 0x4552442052454749535452415349204d4148415349535741204b454c2e706e67),
(4, 'jungkook', 'jeon', 'M', 'jk@gmail.com', '', 'Offline', '280000', 0x4552442052454749535452415349204d4148415349535741204b454c2e706e67),
(7, 'wasdad', 'adasdas', 'F', '19fadil33@gmail.com', '2343242', 'Offline', '280000', 0x506f7374657220576562696e617220382e30202d204461746120536369656e636520507974686f6e2e706e67),
(9, 'sadsad', 'adad', 'M', '19fadil33@gmail.com', '08097', 'Offline', '280000', 0x4375706c696b616e206c6179617220323032332d30342d3035203133323335362e706e67),
(10, 'sadsad', 'adad', 'M', '19fadil33@gmail.com', '08097', 'Offline', '280000', 0x4375706c696b616e206c6179617220323032332d30342d3035203133323335362e706e67),
(13, 'user', 'random', 'M', 'anonym@gmail.com', '0123456789', 'Offline', '280000', 0x6267776562696e61722e6a7067),
(14, 'Febri', 'febrian', 'M', '19fadil33@gmail.com', '0123456789', 'Offline', '280000', 0x6267776562696e61722e6a7067),
(15, '', '', '', '', '', '', '', ''),
(16, 'Febri', 'random', 'M', '19fadil33@gmail.com', '0899089790', 'Offline', '280000', 0x6267776562696e61722e6a7067),
(17, 'Febri', 'febri', 'M', '19fadil33@gmail.com', '090980890', 'Offline', '280000', 0x6469616772616d61637469766974792e706e67),
(18, 'Febri', 'febri', 'M', '19fadil33@gmail.com', '090980890', 'Offline', '280000', 0x6469616772616d61637469766974792e706e67),
(19, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '1232', 'Offline', '280000', 0x6469616772616d61637469766974792e706e67),
(20, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '243242', 'Offline', '280000', 0x6469616772616d61637469766974792e706e67),
(21, 'Aldi', 'Taher', 'O', 'alditaher@gmail.com', '021310213', 'Online', '280000', 0x6469616772616d61637469766974792e706e67),
(22, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '9089080', 'Offline', '280000', 0x757365636173652e6a7067),
(23, 'baru', 'ya', 'M', '19fadil33@gmail.com', '123455646', 'Offline', '280000', 0x757365636173652e706e67),
(24, 'putri', 'indaryani', 'F', 'iin@gmail.com', '76709', 'Online', '260000', 0x6c6f676f756e737269312d72656d6f766562672d707265766965772e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `datapendaftarnajwa`
--

CREATE TABLE `datapendaftarnajwa` (
  `id` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `email` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `nohp` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `kelas` enum('Online','Offline') CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `harga` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `bukti` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapendaftarnajwa`
--

INSERT INTO `datapendaftarnajwa` (`id`, `firstname`, `lastname`, `gender`, `email`, `nohp`, `kelas`, `harga`, `bukti`) VALUES
(1, '', '', 'M', '19fadil33@gmail.com', '', '', '250000', 0x757365636173652e6a7067),
(2, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '', '', '250000', 0x757365636173652e6a7067),
(3, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '123456', 'Offline', '250000', 0x757365636173652e6a7067),
(4, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '123456', 'Offline', '250000', 0x757365636173652e6a7067),
(5, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '123456', 'Offline', '250000', 0x757365636173652e6a7067),
(6, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '022312414', 'Offline', '250000', 0x6469616772616d61637469766974792e706e67),
(7, '', '', 'M', '19fadil33@gmail.com', '', '', '260000', 0x6469616772616d61637469766974792e706e67),
(9, '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', ''),
(14, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '9089080', 'Offline', '260000', 0x757365636173652e706e67),
(15, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '90890800', 'Online', '260000', 0x757365636173652e706e67),
(16, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '9089080', 'Online', '260000', 0x6469616772616d61637469766974792e706e67),
(17, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '32424', 'Online', '260000', 0x6469616772616d61637469766974792e706e67),
(18, '', '', 'M', '19fadil33@gmail.com', '', '', '280000', 0x757365636173652e706e67),
(19, '', '', '', '', '', '', '', ''),
(20, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', '9089080', 'Offline', '280000', 0x757365636173652e706e67),
(21, 'baru', 'yaaa', 'M', '19fadil33@gmail.com', '7968', 'Offline', '280000', 0x6469616772616d61637469766974792e706e67),
(22, 'megumi', 'kawaii', 'M', 'megumi@gmail.com', '9999029', 'Offline', '250000', 0x42726176656865617274202831393935292e6a706567),
(23, 'putri', 'indaryani', 'F', 'iin@gmail.com', '093665807846', 'Offline', '250000', 0x576861747341707020496d61676520323032342d30332d31352061742030352e33392e31372e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `datapendaftartsana`
--

CREATE TABLE `datapendaftartsana` (
  `id` int(11) NOT NULL,
  `firstName` varchar(225) NOT NULL,
  `lastName` varchar(225) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `email` varchar(225) NOT NULL,
  `mentor` enum('leo','tsana') NOT NULL,
  `number` bigint(15) NOT NULL,
  `Kelas` enum('Online','Offline') NOT NULL,
  `harga` varchar(100) NOT NULL,
  `bukti` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapendaftartsana`
--

INSERT INTO `datapendaftartsana` (`id`, `firstName`, `lastName`, `gender`, `email`, `mentor`, `number`, `Kelas`, `harga`, `bukti`) VALUES
(809788, 'melinda', 'jeon', 'F', 'jk@gmail.com', 'leo', 98799, 'Online', '250000', 0x657264207265766973692e706e67),
(809789, 'random', 'user', 'F', 'randomuser@gmail.com', 'leo', 98674283, 'Online', '250000', 0x506f7374657220576562696e617220382e30202d204461746120536369656e636520507974686f6e2e706e67),
(809794, '', '', 'M', '', 'leo', 0, 'Online', '250000', 0x757365636173652e706e67),
(809795, '', '', 'M', '', 'leo', 0, 'Offline', '250000', 0x6469616772616d61637469766974792e706e67),
(809796, '', '', 'M', '', 'leo', 0, 'Offline', '250000', 0x6469616772616d61637469766974792e706e67),
(809797, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', 'leo', 67576576, 'Offline', '250000', 0x6469616772616d61637469766974792e706e67),
(809799, '', '', 'M', '19fadil33@gmail.com', 'leo', 0, '', '280000', 0x757365636173652e6a7067),
(809800, '', '', '', '', 'leo', 0, '', '', ''),
(809801, '', '', '', '', 'leo', 0, '', '', ''),
(809802, '', '', '', '', 'leo', 0, '', '', ''),
(809803, 'Febri', 'Anto', 'M', '19fadil33@gmail.com', 'leo', 9089080, 'Offline', '280000', 0x757365636173652e6a7067),
(809804, 'baru', 'yaa', 'F', '19fadil33@gmail.com', 'leo', 4342424, 'Offline', '280000', 0x757365636173652e6a7067),
(809806, 'toji', 'namin', 'M', 'toji@gmail.com', 'leo', 97546793, 'Online', '260000', 0x666f726d4261636b67726f756e642e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`) VALUES
(1, 'jungkook@gmail.com', 'jungkook');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `password`) VALUES
(1, 'toji', 'toji@gmail.com', 20, '123'),
(2, 'nami', 'nami@gmail.com', 32, '890'),
(3, 'melinda', 'melinda@gmail.com', 0, 'melinda123'),
(4, 'anonim', 'anonim@gmail.com', NULL, 'anonim123'),
(5, 'anonim', 'anonym@gmail.com', NULL, '123'),
(6, 'user', 'user@gmail.com', NULL, '123'),
(7, 'randomuser', 'randomuser@gmail.com', NULL, '123'),
(8, 'rio', 'rio@gmail.com', NULL, 'riohantenng'),
(9, 'rio', 'ganteng@gmail.com', NULL, '111'),
(10, 'apa', 'apa@gmail.com', NULL, '123'),
(11, 'febri', 'febri@gmail.com', NULL, '123'),
(12, 'febri', 'feb@gmail.com', NULL, '123'),
(13, 'nanami', 'namin123@gmail.com', NULL, '111'),
(14, 'admin1', 'admin@gmail.com', NULL, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapendaftarleo`
--
ALTER TABLE `datapendaftarleo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapendaftarnajwa`
--
ALTER TABLE `datapendaftarnajwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapendaftartsana`
--
ALTER TABLE `datapendaftartsana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datapendaftarleo`
--
ALTER TABLE `datapendaftarleo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `datapendaftarnajwa`
--
ALTER TABLE `datapendaftarnajwa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `datapendaftartsana`
--
ALTER TABLE `datapendaftartsana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=809807;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `username` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
