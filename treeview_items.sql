-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2012 at 11:37 AM
-- Server version: 5.1.61
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `treeview_items`
--

CREATE TABLE IF NOT EXISTS `treeview_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `parent_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `treeview_items`
--

INSERT INTO `treeview_items` (`id`, `name`, `title`, `parent_id`) VALUES
(1, 'task1', 'task1title', '2'),
(2, 'task2', 'task2title', '0'),
(3, 'task3', 'task1title3', '0'),
(4, 'task4', 'task2title4', '3'),
(5, 'task4', 'task1title4', '3'),
(6, 'task5', 'task2title5', '5');
