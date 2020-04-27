-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 07:38 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mobil`
--

CREATE TABLE IF NOT EXISTS `jenis_mobil` (
  `jenis_mobil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_mobil`
--

INSERT INTO `jenis_mobil` (`jenis_mobil`) VALUES
('Chevrolet Camaro'),
('Honda Jazz'),
('Kijang Innova'),
('Lamborghini'),
('Mercedez Benz'),
('Mercedez Benz s Class'),
('Mini Cooper'),
('Nissan Livina'),
('Range Rover Sport'),
('Toyota yaris');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE IF NOT EXISTS `sewa` (
`idsewa` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `telpon` varchar(40) NOT NULL,
  `jenis_mobil` varchar(100) NOT NULL,
  `masa_sewa` int(12) NOT NULL,
  `harga` int(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`idsewa`, `nama`, `alamat`, `telpon`, `jenis_mobil`, `masa_sewa`, `harga`) VALUES
(11, 'rico', 'tahunann', '089483645', 'Toyota yaris', 90, 600000),
(12, 'herman', 'saripan', '0857483647', 'Nissan Livina', 3, 900000),
(13, 'tuvie', 'demak', '089675223245', 'Mercedez Benz s Class', 2, 600000),
(15, 'Siti', 'mayong', '089654672', 'Range Rover Sport', 5, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`iduser` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `password`) VALUES
(1, 'Anang Ma''ruf', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'sopo iki', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
 ADD PRIMARY KEY (`jenis_mobil`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
 ADD PRIMARY KEY (`idsewa`), ADD KEY `jenis_mobil` (`jenis_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
MODIFY `idsewa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`jenis_mobil`) REFERENCES `jenis_mobil` (`jenis_mobil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
