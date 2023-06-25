-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 11:14 PM
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
-- Database: `guest_book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_book`
--

CREATE TABLE `guest_book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guest_book`
--

INSERT INTO `guest_book` (`id`, `title`, `nama`, `alamat`, `institusi`, `no_telp`, `jenis_kelamin`, `status`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Ini Title 1', 'Mimin', 'Jl Panjang', 'PNJ', '08678987', 'Pria', 1, 1, '2023-06-25 20:23:27', '2023-06-25 20:23:27'),
(3, 'EDIT ZZZZZZ', 'zz aa', 'Jl zzz', 'UI', '087887', 'Pria', 1, 1, '2023-06-25 19:53:39', '2023-06-25 21:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `nik`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vivi@gmail.com', '1234', 'vivi edit ya', 'vivi1234', 'Jl Raya Bandung No 5', 0, NULL, '2023-06-25 15:32:56'),
(4, 'wik@gmail.com', '1234', 'wik', 'wik1234', 'Jl Jalan Aja', 1, '2023-06-25 17:14:36', '2023-06-25 17:14:36'),
(5, 'lolo@gmail.com', '1234', 'Lolo', 'lolo1234', 'Hahahahahahahaha', 1, '2023-06-25 18:02:06', '2023-06-25 18:02:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_book`
--
ALTER TABLE `guest_book`
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
-- AUTO_INCREMENT for table `guest_book`
--
ALTER TABLE `guest_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
