-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2025 at 07:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_mhs` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `no_mhs`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Rizky', '213040045', 'rizky@example.com', 'Teknik Informatika', 'rizky.jpg'),
(2, 'Alya', '213040046', 'alya@example.com', 'Teknik Industri', 'alya.jpg'),
(3, 'Nisa', '213040047', 'nisa@example.com', 'Teknik Pangan', 'nisa.jpg'),
(4, 'Ahmad', '213040048', 'ahmad@example.com', 'Teknik Elektro', 'ahmad.jpg'),
(5, 'Sari', '213040049', 'sari@example.com', 'Teknik Kimia', 'sari.jpg'),
(6, 'Budi', '213040050', 'budi@example.com', 'Teknik Mesin', 'budi.jpg'),
(7, 'Dewi', '213040051', 'dewi@example.com', 'Teknik Sipil', 'dewi.jpg'),
(8, 'Fadil', '213040052', 'fadil@example.com', 'Teknik Informatika', 'fadil.jpg'),
(9, 'Lina', '213040053', 'lina@example.com', 'Teknik Industri', 'lina.jpg'),
(10, 'Andi', '213040054', 'andi@example.com', 'Teknik Pangan', 'andi.jpg'),
(11, 'Maya', '213040055', 'maya@example.com', 'Teknik Lingkungan', 'maya.jpg'),
(12, 'Reza', '213040056', 'reza@example.com', 'Teknik Geodesi', 'reza.jpg'),
(13, 'Dina', '213040057', 'dina@example.com', 'Teknik Informatika', 'dina.jpg'),
(14, 'Yoga', '213040058', 'yoga@example.com', 'Teknik Elektro', 'yoga.jpg'),
(15, 'Putri', '213040059', 'putri@example.com', 'Teknik Kimia', 'putri.jpg'),
(16, 'Hadi', '213040060', 'hadi@example.com', 'Teknik Mesin', 'hadi.jpg'),
(17, 'Rina', '213040061', 'rina@example.com', 'Teknik Sipil', 'rina.jpg'),
(18, 'Irfan', '213040062', 'irfan@example.com', 'Teknik Industri', 'irfan.jpg'),
(19, 'Sinta', '213040063', 'sinta@example.com', 'Teknik Pangan', 'sinta.jpg'),
(20, 'Bayu', '213040064', 'bayu@example.com', 'Teknik Informatika', 'bayu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_mhs` (`no_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
