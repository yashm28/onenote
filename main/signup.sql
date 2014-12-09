-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2014 at 12:24 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `note`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `add` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user`, `pass`, `name`, `add`, `city`, `phone`, `email`) VALUES
('akash', 'akash', 'c', 'surat', 'e', 'f', 'g');