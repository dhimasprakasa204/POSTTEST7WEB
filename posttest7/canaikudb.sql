-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canaikudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `canaikudb`
--

CREATE TABLE `canaikudb` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` int(20) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `pesan` varchar(225) NOT NULL,
  `nama_file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canaikudb`
--

INSERT INTO `canaikudb` (`id`, `nama`, `email`, `telepon`, `jenis`, `pesan`, `nama_file`) VALUES
(4, 'Dhimas', 'dhimasprakasa2002@gmail.com', 2147483647, 'laki-laki', 'Baguss', 'Canai Red Velvet.png'),
(5, 'QILA', 'qila@gmail.com', 80808, 'perempuan', 'Enak banget Roti canainya', 'esteh.png'),
(6, 'Dhimas Henjowwwww', 'dhimasganteng@gmail.com', 2147483647, 'laki-laki', 'adawdw', 'jusalpukat.png'),
(7, 'okin', 'okin22@gmail.com', 7897897, 'laki-laki', 'sip', 'Canai Red Velvet.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Dhimas Henjo', 'dhimas@gmail.com', 'dhimas123', '$2y$10$ix87Tyo.ivp4AVVBASDB/OiDSCZHDsvRQOKoXHJX1wv'),
(2, 'admin', 'admin123@gmail.com', 'admin123', '$2y$10$nhlhHlQDwz5TV86yRJi.a.FafVZnj0zDYqYXJ3LmkyF'),
(3, 'dhimashenjo', 'henjo123@gmail.com', 'dhimas1234', '$2y$10$/5ZC1JkmcFT74f3iHe/azuRUfSVRkZ/V8h9k/BBKHQu'),
(4, 'dawdawd', 'adawd@ffe', 'adwadaw', '$2y$10$5RdVr1gYL.CRMLvjOA4y6uIWoDLmODKEkrFKhoxCDLd'),
(5, 'Dhimas', 'okin22@gmail.com', 'dhimas1239', '$2y$10$uWkVoQ2ALVC4SVYhiiQ5tuGhNGVA9W.ZHx/0WxFl0N9'),
(6, 'dadwad', 'adwa@wdw', 'adwada', '$2y$10$lOijMmft3gjlu/Ese1NhSeBDoGXDbvtprCMmQqVqmJy'),
(7, 'dcsdfw', 'fdgdgr@fdbdb', 'fesscdwr', '$2y$10$59xsFEJB6BRfLqMUrBrFSu5nezJ23ZVeRWzazwOWmjx'),
(8, 'Rifqi123', 'rifqi123@gmail.com', 'rifqi123', '$2y$10$xuOWi5/i9HUxGNkRWmA7D.52hvaGcNanDQQUSSknUin'),
(9, 'dadad', 'adawd@adawda', 'adada', '$2y$10$yOlMUomyW0IfohBzdRWKh.ZWnnmA9TOH5Ad2kmy8Qfi'),
(10, 'adwad', 'adawda@', 'dadadadawdwadaw', '$2y$10$CBYUm/FzG8GIuk/tYHOkM.atiOrydw7PvORsuZy4QDL'),
(11, 'awdwad', 'awdawd@', 'adawdawdawdawdawdwad', '$2y$10$4gxsCloOfz6jautt6F4/BOKhwh6VWODBQoP07KlaoFE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canaikudb`
--
ALTER TABLE `canaikudb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canaikudb`
--
ALTER TABLE `canaikudb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
