-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 04, 2024 at 10:02 AM
-- Server version: 10.5.19-MariaDB-1:10.5.19+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Informatika dan Data Sains', 'Jalan Ir. Sutami 36A', '0271123456', '2024-06-04 09:30:00', NULL),
(2, 'Matematika dan Ilmu Pengetahuan Alam', 'Jalan Ir. Sutami 36A', '0271123457', '2024-06-04 09:30:00', NULL),
(3, 'Pertanian', 'Jalan Ir. Sutami 36A', '0271123458', '2024-06-04 09:30:00', NULL),
(4, 'Peternakan', 'Jalan Ir. Sutami 36A', '0271123456', '2024-06-04 09:30:00', NULL),
(5, 'Kedokteran', 'Jalan Ir. Sutami 36A', '0271123457', '2024-06-04 09:30:00', NULL),
(6, 'Teknik', 'Jalan Ir. Sutami 36A', '0271123458', '2024-06-04 09:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `address` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `faculty_id`, `nim`, `name`, `birthdate`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'M0522001', 'Adrian', '2005-01-01', 'Jalan Kenangan', '2024-06-04 09:33:00', NULL),
(2, 1, 'M0522002', 'Brian', '2005-02-01', 'Jalan Bersama', '2024-06-04 09:33:00', NULL),
(3, 1, 'M0522003', 'Charlie', '2005-02-28', 'Jalan Berjalan', '2024-06-04 09:33:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
