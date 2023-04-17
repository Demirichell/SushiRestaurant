-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 10:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `gerechten`
--

CREATE TABLE `gerechten` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `prijs` float NOT NULL,
  `beschrijving` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gerechten`
--

INSERT INTO `gerechten` (`id`, `naam`, `prijs`, `beschrijving`, `img`) VALUES
(0, 'Makischotel crispy 30 stuks', 6, '- 10 stuks crispy salmon- 10 stuks crispy tuna- 5 stuks crispy chicken- 5 stuks crispy veggie', './img/makischotel.jpg'),
(1, 'Ebi Nigiri 3x', 688, 'garnaal', './img/ebi_nigiri.jpg'),
(4, 'Nigiri zalm 3x', 6, 'zalm', './img/nigiri.jpg'),
(6, 'Maki schotel groot 50 stuks', 52, '- 15 stuks sake maki\r\n- 15 stuks tekka maki\r\n- 10stuks kappa maki\r\n- 10stuks kani maki', './img/makischotelgroot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('demiidegroot.2002@gmail.c', '$2y$10$8fWnYxeQHHqXroCFwV'),
('pascal@gmail.com', '$2y$10$8jeMqbJNRYvIAL5MAS'),
('bo@gmail.com', '$2y$10$Bc2OC7nq/HxA2KCc.Snvg.98xQ4KQK8eBEu5W/QMrOYwSBRd3MaAS'),
('bo@gmail.com', '$2y$10$Zmh1OqDGeATlK3mPmxTCCeySsWIXj5VAkEg7KuyMvaPF3i0YJnJlq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gerechten`
--
ALTER TABLE `gerechten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gerechten`
--
ALTER TABLE `gerechten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
