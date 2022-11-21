-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 08:08 AM
-- Server version: 5.1.53-community-log
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Programming'),
(3, 'Music'),
(4, 'Dance'),
(6, 'Painting'),
(7, 'People'),
(8, 'Social Media'),
(9, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `contents`, `date_posted`) VALUES
(6, 2, 'What is programming today?', 'â€œProgramming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the Universe trying to produce bigger and better idiots. So far, the Universe is winning.â€ \r\nâ€• Rick Cook, The Wizardry Compiled', '2017-10-06 15:50:31'),
(8, 3, 'Music <3', 'â€œMusic has always been a matter of Energy to me, a question of Fuel. Sentimental people call it Inspiration, but what they really mean is Fuel. I have always needed Fuel. I am a serious consumer. On some nights I still believe that a car with the gas needle on empty can run about fifty more miles if you have the right music very loud on the radio.â€ \r\nâ€• Hunter S. Thompson', '2017-10-06 15:53:36'),
(9, 4, 'Just Dance!', 'Work like you don''t need the money. Love like you''ve never been hurt. Dance like nobody''s watching. Satchel Paige', '2017-10-06 15:55:17'),
(10, 6, 'Art of Patience', 'I have seen many storms in my life. Most storms have caught me by surprise, so I had to learn very quickly to look further and understand that I am not capable of controlling the weather, to exercise the art of patience and to respect the fury of nature. -Paulo Coelho', '2017-10-06 15:56:16'),
(11, 7, 'Yeah! People!', 'People don`t change, but they can learn to behave differently.     \r\n\r\nCharlaine Harris', '2017-10-06 15:57:18'),
(12, 8, 'Social Media vs. Technology', 'â€œSocial media is about sociology and psychology more than technology.â€ â€“ Brian Solis', '2017-10-06 15:58:33'),
(13, 9, 'Technology!', 'All of the biggest technological inventions created by man - the airplane, the automobile, the computer - says little about his intelligence, but speaks volumes about his laziness. - Mark Kennedy', '2017-10-06 15:59:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
