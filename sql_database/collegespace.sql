-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2020 at 02:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegespace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'test@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subject_name`, `content`, `location`) VALUES
(1, 'AI', 'What is Artificial Intelligence?, Goals of Artificial Intelligence,What Comprises to Artificial Intelligence? ,Advantages of Artificial Intelligence,Disadvantages of Artificial Intelligence and more', '../upload/AI_POONAM/1.pdf'),
(2, 'NLP', 'What is NLP?, History, How its work.', '../upload/NLP _MEENA/Lecture1.pdf'),
(3, 'AI', 'PEAS Represent, Agent', '../upload/AI_POONAM/2.pdf'),
(4, 'AI', 'Search Algorithms in Artificial Intelligence', '../upload/AI_POONAM/2.1.pdf'),
(5, 'AI', 'Search Algorithms in Artificial Intelligence Part-2', '../upload/AI_POONAM/2.2.pdf'),
(6, 'AI', 'Knowledge-Based Agent in Artificial intelligence', '../upload/AI_POONAM/3.1.pdf'),
(7, 'NLP', 'Components of NLP', '../upload/NLP _MEENA/Lecture2.pdf'),
(8, 'NLP', 'How to implement NLP', '../upload/NLP _MEENA/Lecture3.pdf'),
(9, 'NLP', 'Components of NLP', '../upload/NLP _MEENA/Lecture4.pdf'),
(10, 'NLP', 'Why is NLP Hard?', '../upload/NLP _MEENA/Notes5.pdf'),
(11, 'NLP', 'Corpus, Element of corpus', '../upload/NLP _MEENA/Note6.pdf'),
(12, 'NLP', 'Example of Corpus', '../upload/NLP _MEENA/Note7.pdf'),
(13, 'NLP', 'Regular expressions', '../upload/NLP _MEENA/Note8.pdf'),
(14, 'NLP', 'Finite State Automata', '../upload/NLP _MEENA/Note9.pdf'),
(15, 'NLP', 'Concept of Parser', '../upload/NLP _MEENA/Note10.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_by` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `post_by`, `title`, `description`) VALUES
(1, 'admin', 'fees pending', 'pay fees before 28 oct'),
(3, 'test@gmail.com', 'send fees slip', 'who have submitted their fees send their fees slip to their respected class CR');

-- --------------------------------------------------------

--
-- Table structure for table `sysllabus`
--

DROP TABLE IF EXISTS `sysllabus`;
CREATE TABLE IF NOT EXISTS `sysllabus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sysllabus`
--

INSERT INTO `sysllabus` (`id`, `subject_name`, `year`, `location`) VALUES
(1, 'C', '2017', '../upload/Sysllabus/c.pdf'),
(2, 'C', '2019', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `top_contributor`
--

DROP TABLE IF EXISTS `top_contributor`;
CREATE TABLE IF NOT EXISTS `top_contributor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_contributor`
--

INSERT INTO `top_contributor` (`id`, `username`) VALUES
(1, 'Jaspreet Singh'),
(2, 'Adam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
