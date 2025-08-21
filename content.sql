-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2025 at 06:09 AM
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
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `section_id` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `section_id`, `title`, `body`, `image_path`, `user_id`, `created_at`) VALUES
(1, 'artikel-teknologi', 'hai', 'abc', NULL, 1, '2025-08-19 16:26:30'),
(2, 'event', 'q', 'q', NULL, 2, '2025-08-19 16:59:57'),
(3, 'artikel-informasi', 'aaa', 'a', NULL, 2, '2025-08-19 17:01:20'),
(5, 'artikel-konsep', 'abc', '123', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMTOfdc4HDXZWMkOnexn0V75vC7dP2MPmgxA&s', 3, '2025-08-20 02:59:40'),
(6, 'artikel-konsep', 'Brand Guideline: Kenapa Krusial untuk Konsistensi Konten?', 'Banyak brand gagal mempertahankan identitas karena tidak memiliki panduan visual yang jelas. Brand guideline membantu menjaga konsistensi warna, tipografi, logo, hingga tone komunikasi. Dengan panduan ini, setiap konten akan terasa menyatu dan mudah dikenali konsumen.', 'https://cdn.logojoy.com/wp-content/uploads/20220901111251/brand-guidelines-infographic-600x426.jpg', 3, '2025-08-20 04:43:53'),
(8, 'artikel-konsep', 'test coba', '123', 'uploads/68a56f5bca8d6-Peran-Teknologi-Kecerdasan-Buatan-dalam-Duet-AI-untuk-Bantu-Siswa-Menulis-Lebih-Baik.jpg', 3, '2025-08-20 06:46:51'),
(9, 'artikel-teknologi', 'test', 'abc', 'uploads/68a68a1a9925d-Untitled diagram _ Mermaid Chart-2025-08-13-103538.png', 4, '2025-08-21 02:53:14'),
(10, 'artikel-konsep', 'tewest', 'asas', 'uploads/68a68a45dccaa-Untitled diagram _ Mermaid Chart-2025-08-13-103538.png', 4, '2025-08-21 02:53:57'),
(11, 'artikel-informasi', 'coba lagi', 'abc', 'uploads/68a68d1f90317-POSTER MEWARNAI & CCA (1).png', 3, '2025-08-21 03:06:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
