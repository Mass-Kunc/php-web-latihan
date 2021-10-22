-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2018 at 02:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paw_0830`
--
CREATE DATABASE `paw_0830` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `paw_0830`;

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`no`, `nama`, `alamat`) VALUES
(1, 'John', 'Jogja'),
(2, 'Darso', 'Solo'),
(3, 'Haha', 'Semarang'),
(4, '', '');
