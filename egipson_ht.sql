-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 12:08 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egipson_ht`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('5eb7jpp4bphbi7e352d2cdm5cgq2e4tr', '::1', 1526936036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933353739393b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('iom53vckfcsge5qc28or7545i27uo21d', '::1', 1526936650, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933363430353b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('j2im880e47617faa2ef6i8087ssimsaj', '::1', 1526936997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933363730393b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('mv71s19oumote3hbcm1selh2jaiigul1', '::1', 1526937366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933373039373b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('jl8178sucbhu0qqk1mvv2jt5lkdgo5g1', '::1', 1526937711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933373536353b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('opbno669dgh6mhql0bjv0l73mssr8dlu', '::1', 1526938155, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933373837383b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('1p95so48t5sahi6tqsll3l2c3kv2347p', '::1', 1526938394, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933383234343b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('4o3bv6q23ftj1jtbtp8bae9bll6cac2p', '::1', 1526938932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933383633343b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('2a57neou02j5rsh2gcegjj5hmtq693qo', '::1', 1526939282, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933383938363b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('b88splija2bi0ef2h0fs1k9nohahasl8', '::1', 1526939556, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933393330303b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('9c85udtacc3cg4khlf6emcfkjkd91mjj', '::1', 1526940034, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363933393934313b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('tbe6gl1tj457afitif0rf6l715o2esn6', '::1', 1526940474, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363934303331393b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `judul_aplikasi` varchar(255) NOT NULL,
  `judul_menu` varchar(255) NOT NULL,
  `zenziva_passkey` varchar(255) NOT NULL,
  `zenziva_userkey` varchar(255) NOT NULL,
  `zenziva_sms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`judul_aplikasi`, `judul_menu`, `zenziva_passkey`, `zenziva_userkey`, `zenziva_sms`) VALUES
('EGIPSON A. W.', 'HT', '1234', '8es5nr', 'Anda sudah memasuki masa jatuh tempo pengembalian Handy Talky. Segeralah mengembalikan secepat mungkin !!!');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `noseri` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tanggal`, `noseri`, `jenis`, `nip`, `nama`, `nohp`, `durasi`, `status`, `user_id`) VALUES
(6, '2018-05-17', '0099', 'ATX', '1234', 'Egipson A. W. test', '085368530235', 6, 0, 1),
(7, '2018-05-30', 'r1r12r', '1rr1', '124124', 'qwqwf qw', '085368530235', 4, 0, 12),
(10, '2018-04-29', 'wea e', '12 rwe', 'e4twryh', '324tryt', '085368530235', 400, 1, 1),
(11, '2018-05-22', '34534', '345', '4534', '1234656', '085368530235', 1, 1, 1),
(12, '2018-05-22', '1241', '124', '124124', '12414', '085368530235', 300, 1, 1),
(13, '2018-05-21', '123', '123', '123', '123', '085368530235', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `noseri` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `tanggal`, `noseri`, `jenis`, `nip`, `nama`, `user_id`) VALUES
(5, '2018-05-30', 'r1r12r', '666666', '1234 ', 'Test DPM', 12),
(6, '2018-05-23', '0099', '23523', '235235', 'wetwe tw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 1),
(12, 'egipsons', '81dc9bdb52d04dc20036dbd8313ed055', 'Egipson A. W.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
