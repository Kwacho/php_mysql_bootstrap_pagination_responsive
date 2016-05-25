-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 02:58 PM
-- Server version: 5.6.22
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `image_desc` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_desc`, `image_name`) VALUES
(7, 'Some Description here.....', 'sharemyweb_sample_image_one.png'),
(8, 'Some Description here.....', 'sharemyweb_sample_image_two.png'),
(9, 'Some Description here.....', 'sharemyweb_sample_image_three.png'),
(10, 'Some Description here.....', 'sharemyweb_sample_image_four.png'),
(11, 'Some Description here.....', 'sharemyweb_sample_image_five.png'),
(12, 'Some Description here.....', 'sharemyweb_sample_image_six.png'),
(13, 'Some Description here.....', 'sharemyweb_sample_image_seven.png'),
(14, 'Some Description here.....', 'sharemyweb_sample_image_eight.png'),
(15, 'Some Description here.....', 'sharemyweb_sample_image_nine.png'),
(16, 'Some Description here.....', 'sharemyweb_sample_image_ten.png'),
(17, 'Some Description here.....', 'sharemyweb_sample_image_eleven.png'),
(18, 'Some Description here.....', 'sharemyweb_sample_image_twelve.png'),
(19, 'Some Description here.....', 'sharemyweb_sample_image_thirteen.png'),
(20, 'Some Description here.....', 'sharemyweb_sample_image_fourteen.png'),
(21, 'Some Description here.....', 'sharemyweb_sample_image_fifteen.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
