-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 11:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `name` text NOT NULL,
  `aboutme` text NOT NULL,
  `intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`name`, `aboutme`, `intro`) VALUES
('REGINE LIM', 'WELCOME TO MY DIGITAL PORTFOLIO!\r\nEXPLORE MY WORK TO SEE HOW I CAN BRING VALUE TO YOUR PROJECTS.\r\nLET\'S CONNECT AND DISCUSS HOW WE CAN COLLABORATE FOR SUCCESS.', 'Hi! I\'m Regine Lim\r\nAs a computer science student, I am driven by a curiosity for technology and a passion for creating solutions. Through my coursework, I have gained proficiency in languages like C++, JavaScript, and SQL, as well as hands-on experience in software development and algorithm design. My academic journey has not only provided me with a strong technical foundation but also honed my ability to work collaboratively in team projects. I am excited about the prospect of applying my skills and knowledge to address real-world challenges and contribute to the ever-evolving landscape of computer science. With a commitment to continuous learning and a keen interest in emerging technologies, I am poised to make meaningful contributions in the field. By the way, check out my awesome work.');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactsdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactsdesc`) VALUES
('EMAIL: REGINNE.LIM@GMAIL.COM\r\nCELLPHONE NUMBER: 0906 866 8623\r\nTELEPHONE: (062) 957 1880');

-- --------------------------------------------------------

--
-- Table structure for table `educ`
--

CREATE TABLE `educ` (
  `school` text NOT NULL,
  `descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educ`
--

INSERT INTO `educ` (`school`, `descrip`) VALUES
('Tertiary', 'BACHELOR OF SCIENCE IN COMPUTER SCIENCE MAJOR IN INFORMATION TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `title` text NOT NULL,
  `descrip` text NOT NULL,
  `workpic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`title`, `descrip`, `workpic`) VALUES
('PICK N\' GO - POS      ', 'A Point of Sale (POS) system developed for Pick N\' Go to process transactions, manage inventory, and track sales. The Pick N Go is a convenience store that serves people 24 hours. A business that stocks a range of everyday items such as groceries, snack foods, soft drinks, toiletries, magazines. Aside from that, it has bakery shop in it too. As a programmer these are the programming language that I have used are: Visual Basic .NET and SQL', 'images/admin item.jpeg'),
('Harry Potter Sorting Hat', '\"The Harry Potter Sorting Hat Quiz\" Android gaming app. This app is designed to engage users by sorting them into one of the four Hogwarts houses: Gryffindor, Hufflepuff, Ravenclaw, or Slytherin, based on their personality traits and preferences. Our goal is to create an engaging and entertaining gaming experience that captures the spirit of the Harry Potter series and delights fans of all ages. This project will give you valuable experience in Android app development, user experience design, and incorporating storytelling elements into interactive media. As a programmer these are the programming language that I have used are: Eqela ', 'images/harry.jpg'),
('Brand Identity for an Esports Company', 'Created a mock up design for a brand identity as a student. Los Gatos offer competitive gaming experiences,develop video games, provide platforms to stream and watch games, hold tournaments and leagues, and create content for the industry media. As a Graphic Designer these are the tools that I have used are: Adobe Photoshop, Canva, Freepik, Adobe Illustrator', 'images/lg1.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
