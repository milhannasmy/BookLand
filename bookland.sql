-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2021 at 04:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookland`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `bookId` int(5) NOT NULL AUTO_INCREMENT,
  `bookName` varchar(100) NOT NULL,
  `stock` int(3) NOT NULL,
  `author` varchar(100) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`bookId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookId`, `bookName`, `stock`, `author`, `genre`, `imagePath`, `price`, `description`) VALUES
(1, 'Sherlock Holmes', 10, 'Arthur Connan Doyle', 'Fiction/ Crime Mystery', 'uploads/Book Cover.jpg', 2000, 'Sherlock Holmes is a fictional detective of the late 19th and early 20th centuries, who first appeared in publication in 1887. He was devised by British author and physician Sir Arthur Conan Doyle. A brilliant London-based detective, Holmes is famous for his prowess at using logic and astute observation to solve cases.'),
(2, 'Fault in Our Stars', 6, 'John Green', 'Fiction/ Romance', 'uploads/Book Cover 2.jpg', 1500, 'The Fault In Our Stars is a fabulous book about a young teenage girl who has been diagnosed with lung cancer and attends a cancer support group. ... Hazel and Augustus embark on a roller coaster ride of emotions, including love, sadness and romance, while searching for the author of their favourite book.'),
(3, 'The Method', 15, 'Shannon Kirk', 'Fiction/ Thriller', 'uploads/Book Cover 3.jpg', 1600, 'Kidnapped Alone Terrified. Picture instead a pregnant, 16-year-old, manipulative prodigy. She is shoved into a dirty van and, from the first moment of her kidnapping, feels a calm desire for two things: to save her unborn son and to exact merciless revenge.'),
(4, 'Oxford Dictionary', 30, 'Oxford Publications', 'Education', 'uploads/Book Cover 4.jpeg', 2500, 'This new edition includes thousands of brand-new words and senses, as well as up-to-date encyclopedic information.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `commentId` varchar(8) NOT NULL,
  `date` varchar(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bookId` varchar(10) NOT NULL,
  PRIMARY KEY (`commentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerId` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `username`, `email`, `password`) VALUES
(6, 'milhannasmy', 'milhannasmy21@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `orderId` int(5) NOT NULL AUTO_INCREMENT,
  `payment` int(5) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `bookId` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderId`, `payment`, `customerEmail`, `bookId`, `quantity`) VALUES
(31, 4000, 'milhannasmy21@gmail.com', 1, 2),
(25, 2000, 'milhannasmy21@gmail.com', 6, 1),
(26, 2000, 'milhannasmy21@gmail.com', 1, 1),
(27, 2000, 'milhannasmy21@gmail.com', 1, 1),
(28, 2000, 'milhannasmy21@gmail.com', 1, 1),
(29, 1600, 'milhannasmy21@gmail.com', 3, 1),
(30, 7500, 'milhannasmy21@gmail.com', 4, 3),
(32, 2000, 'milhannasmy21@gmail.com', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
