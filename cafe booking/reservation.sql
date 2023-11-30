-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 01:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_tranksaksi`
--

CREATE TABLE `id_tranksaksi` (
  `id_tagihan` int(11) NOT NULL,
  `Room` enum('VIP','VIP+','PRINCE','KING') NOT NULL,
  `Tagihan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_tranksaksi`
--

INSERT INTO `id_tranksaksi` (`id_tagihan`, `Room`, `Tagihan`) VALUES
(7, 'KING', '15,000,000'),
(23, 'PRINCE', '10,000,000'),
(30, 'PRINCE', '10,000,000'),
(34, 'VIP', '5,000,000'),
(60, 'VIP+', '5,000,000'),
(66, 'VIP+', '8,000,000'),
(70, 'VIP+', '8,000,000'),
(76, 'VIP+', '8,000,000');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_user` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Telp` varchar(20) NOT NULL,
  `Hari` date NOT NULL,
  `AMPM` enum('AM','PM','','') NOT NULL,
  `Ruangan` enum('Vip','Vip+','Prince','King') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_user`, `Nama`, `Email`, `Telp`, `Hari`, `AMPM`, `Ruangan`) VALUES
(7, 'Mochamad Rafly Nurrizky', 'Raflynurrizky@gmail.com', '082121497448', '2023-08-24', 'PM', 'King'),
(23, 'Kepri pratama', 'Kepri@gmail.com', '082321987767', '2023-09-21', 'PM', 'Prince'),
(30, 'Demas Putra', 'DemasSwastike@gmail.com', '082221457889', '2023-08-24', 'PM', 'Prince'),
(34, 'Hiro Putra', 'HiroPutra@gmail.com', '082121345567', '2023-09-08', 'AM', 'Vip'),
(60, 'Desta Julpaesal', 'desta@gmail.com', '082223456678', '2023-09-07', 'AM', 'Vip'),
(66, 'ivanna azmi', 'ivanazmin@gmail.com', '082344565445', '2023-09-01', 'PM', 'Vip+'),
(70, 'aldymulya saputra', 'aldymulyasptr@gmail.com', '082121345545', '2023-09-08', 'PM', 'Vip+'),
(76, 'Dio Miftah Fauzi', 'Diom@gmail.com', '082232134435', '2023-09-06', 'PM', 'Vip+'),
(78, 'Farid Hendrawan', 'farid@gmail.com', '08234567778', '2023-09-27', 'PM', 'Vip+'),
(79, 'Linar Sihombing', 'Linar@gmail.com', '08222132556', '2023-09-27', 'PM', 'Prince'),
(84, 'Lintang', 'lintang@gmail.com', '084334324234', '2023-09-26', 'AM', 'Vip+'),
(86, 'siti ausyah', 'aisyah@gmail.comn', '0123123123123123', '2023-10-27', 'AM', 'Vip'),
(87, 'alvinfirmansyah', 'alvin@gmail.com', '0212213123123', '2023-11-13', 'AM', 'Prince');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(81, 'admin', 'admin@gmail.com', '2ca6831fcfab4396c5a9943094252d75', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vreservasi`
-- (See below for the actual view)
--
CREATE TABLE `vreservasi` (
`id_user` int(11)
,`Nama` varchar(50)
,`Telp` varchar(20)
,`Hari` date
,`AMPM` enum('AM','PM','','')
,`Ruangan` enum('Vip','Vip+','Prince','King')
,`id` int(11)
,`username` varchar(255)
,`email` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vtranksaksi`
-- (See below for the actual view)
--
CREATE TABLE `vtranksaksi` (
`id_user` int(11)
,`Nama` varchar(50)
,`Telp` varchar(20)
,`Hari` date
,`AMPM` enum('AM','PM','','')
,`id` int(11)
,`email` varchar(255)
,`password` varchar(255)
,`id_tagihan` int(11)
,`Ruangan` enum('Vip','Vip+','Prince','King')
,`Tagihan` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `vreservasi`
--
DROP TABLE IF EXISTS `vreservasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vreservasi`  AS SELECT `reservasi`.`id_user` AS `id_user`, `reservasi`.`Nama` AS `Nama`, `reservasi`.`Telp` AS `Telp`, `reservasi`.`Hari` AS `Hari`, `reservasi`.`AMPM` AS `AMPM`, `reservasi`.`Ruangan` AS `Ruangan`, `users`.`id` AS `id`, `users`.`username` AS `username`, `users`.`email` AS `email` FROM (`reservasi` left join `users` on(`reservasi`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vtranksaksi`
--
DROP TABLE IF EXISTS `vtranksaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtranksaksi`  AS SELECT `reservasi`.`id_user` AS `id_user`, `reservasi`.`Nama` AS `Nama`, `reservasi`.`Telp` AS `Telp`, `reservasi`.`Hari` AS `Hari`, `reservasi`.`AMPM` AS `AMPM`, `users`.`id` AS `id`, `users`.`email` AS `email`, `users`.`password` AS `password`, `id_tranksaksi`.`id_tagihan` AS `id_tagihan`, `reservasi`.`Ruangan` AS `Ruangan`, `id_tranksaksi`.`Tagihan` AS `Tagihan` FROM ((`reservasi` join `users` on(`reservasi`.`id_user` = `users`.`id`)) join `id_tranksaksi` on(`users`.`id` = `id_tranksaksi`.`id_tagihan`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id_tranksaksi`
--
ALTER TABLE `id_tranksaksi`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id_tranksaksi`
--
ALTER TABLE `id_tranksaksi`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
