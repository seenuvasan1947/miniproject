-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 05:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p11`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` text NOT NULL,
  `id` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `id`, `age`, `gender`, `country`, `image`, `video`) VALUES
('123', 's', 45, 'female', 'canada', 'Chrysanthemum.jpg ', 'FB.mp4'),
('124', 'sam', 45, 'male', 'us', 'Jellyfish.jpg ', 'Short video clip-nature.mp4-SD.ogv'),
('dia', '456', 26, 'female', 'us', 'Hydrangeas.jpg ', 'Short video clip-nature.mp4-SD.ogv'),
('gy', '29777', 20, 'male', 'banglasesh', 'download (1).jpg ', 'FB.mp4'),
('sd', '22', 34, 'male', 'banglasesh', 'download (1).jpg ', 'FB.mp4'),
('sh', '102', 23, 'male', 'banglasesh', 'Chrysanthemum.jpg  ', 'Short video clip-nature.mp4-SD.ogv'),
('sahed', '064', 20, 'male', 'banglasesh', 'Desert.jpg ', 'Short video clip-nature.mp4-SD.ogv'),
('salma', '7890', 89, 'female', 'us', 'Desert.jpg ', 'Short video clip-nature.mp4-SD.ogv'),
('mukib', '999', 123, 'male', 'banglasesh', 'Tulips.jpg ', 'FB.mp4'),
('asfa', '4788', 32, 'female', 'canada', 'Koala.jpg ', 'Short video clip-nature.mp4-SD.ogv'),
('sam', '4567', 72, 'male', 'us', 'Hydrangeas.jpg', 'Short video clip-nature.mp4-SD.ogv');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
