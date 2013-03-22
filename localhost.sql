-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2013 at 02:35 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belloise`
--
CREATE DATABASE `belloise` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `belloise`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `title`, `body`, `created`, `modified`) VALUES
(1, 1, 1, 'nice Post Dude', 'i like this post', '2013-03-11 03:59:08', '2013-03-11 03:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(9) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dl_nbr` varchar(50) NOT NULL,
  `dl_img` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `address`, `city`, `state`, `zip`, `phone`, `email`, `dl_nbr`, `dl_img`, `created`, `modified`) VALUES
(2, 'Tom', 'Smith', '345 test Ave', 'Seminole', 'Fl', 33333, '555-555-5555', 'test@test.com', '5678765-56876u', 'test.jpg', '2013-03-09 19:16:32', '2013-03-14 01:03:03'),
(4, 'testy', 'testerson', '123 Test Street', 'Testington', 'Florida', 33333, '555-555-5555', 'test@test.com', 'L300-478-79-029-0', 'L300-478-79-029-0.jpg', '2013-03-13 13:51:41', '2013-03-13 13:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemtype_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serialnbr` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `markedprice` decimal(10,0) NOT NULL,
  `lowprice` decimal(10,0) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemtype_id`, `customer_id`, `make`, `model`, `serialnbr`, `description`, `markedprice`, `lowprice`, `status`, `created`, `modified`) VALUES
(1, 1, 4, 'Ibanez', 'RG-550', '12345', 'ibanez electric guitar', '500', '350', 'sold', '2013-03-07 05:17:07', '2013-03-14 01:30:49'),
(2, 2, 2, 'Ovation', '1811', 'n/a', 'vine inlay acoustic guitar with  rosewood fret board', '700', '550', 'Layaway', '2013-03-09 19:24:00', '2013-03-14 03:07:36'),
(3, 8, 2, 'Roland', ' x-11', '54345676543', 'synth', '450', '350', 'available', '2013-03-10 07:31:38', '2013-03-14 01:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `itemtypes`
--

CREATE TABLE IF NOT EXISTS `itemtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `itemtypes`
--

INSERT INTO `itemtypes` (`id`, `name`) VALUES
(1, 'Guitar - Electric'),
(2, 'Guitar - Acoustic'),
(3, 'Guitar - Bass'),
(4, 'Amplifier - Tube'),
(5, 'Amplifier - Solid State'),
(6, 'Rack - 6 Space'),
(7, 'Rack - 8 Space'),
(8, 'Keyboard'),
(9, 'strings - guitar');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created`, `modified`) VALUES
(1, 3, 'test post', 'from chuck to everyone', '2013-03-08 04:28:53', '2013-03-08 04:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `phone`, `email`, `role`, `created`, `modified`) VALUES
(1, 'admin', 'be0cac18a4009a71673cec7155bae6b539aefa2d', 'Mark', 'Lair', '727-403-0798', 'mark@stltest.com', 'admin', '2013-03-07 05:09:55', '2013-03-07 05:09:55'),
(3, 'chuckb', '8339e14c5a00c13380624d48b88898166932e4c3', 'Chuck', 'Belloise', '555-555-5555', 'chuck@belloisebros.com', 'employee', '2013-03-08 04:23:00', '2013-03-12 21:49:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
