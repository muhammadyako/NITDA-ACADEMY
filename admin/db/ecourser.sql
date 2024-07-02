-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 12:43 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecourser`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `AId` int(7) NOT NULL,
  `Year` varchar(40) NOT NULL,
  `January` varchar(40) DEFAULT NULL,
  `February` varchar(40) DEFAULT NULL,
  `March` varchar(40) DEFAULT NULL,
  `April` varchar(40) DEFAULT NULL,
  `May` varchar(40) DEFAULT NULL,
  `June` varchar(40) DEFAULT NULL,
  `July` varchar(40) DEFAULT NULL,
  `August` varchar(40) DEFAULT NULL,
  `September` varchar(40) DEFAULT NULL,
  `October` varchar(40) DEFAULT NULL,
  `November` varchar(40) DEFAULT NULL,
  `December` varchar(40) DEFAULT NULL,
  `Total` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`AId`, `Year`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`, `Total`) VALUES
(1, '2024', NULL, NULL, NULL, '10', '1433.4861111110338', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1443.4861111110338');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `RefId` varchar(60) NOT NULL,
  `CategoryName` varchar(200) NOT NULL,
  `Description` longtext,
  `Thumbnail` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `RefId`, `CategoryName`, `Description`, `Thumbnail`) VALUES
(00001, '111110101', 'Cyber Security', NULL, '111110101.jpg'),
(00002, '111110102', 'Networking', NULL, '111110102.jpg'),
(00003, '111110103', 'Data Science And Analytics', NULL, '111110103.jpg'),
(00004, '111110104', 'Programming Languages', NULL, '111110104.jpg'),
(00005, '111110105', 'Emerging Technologies', NULL, '111110105.jpg'),
(00006, '111110106', 'Digital Literacy', NULL, '111110106.jpg'),
(00007, '111110107', 'Artificial Intelligence', NULL, '111110107.jpg'),
(00008, '111110108', 'Machine Learning', NULL, '111110108.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `RefId` varchar(60) NOT NULL,
  `CategoryId` varchar(5) NOT NULL,
  `CategoryName` varchar(200) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseTitle` varchar(200) NOT NULL,
  `Provider` varchar(100) DEFAULT NULL,
  `Url` varchar(200) DEFAULT NULL,
  `Description` longtext,
  `Overview` longtext,
  `Requirement` longtext,
  `DateAdded` varchar(20) DEFAULT NULL,
  `LastModified` varchar(20) DEFAULT NULL,
  `Thumbnail` varchar(60) DEFAULT NULL,
  `Duration` varchar(10) NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Count` varchar(10) NOT NULL,
  `AddedBy` varchar(60) DEFAULT NULL,
  `TopCourse` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseId`, `RefId`, `CategoryId`, `CategoryName`, `CourseCode`, `CourseTitle`, `Provider`, `Url`, `Description`, `Overview`, `Requirement`, `DateAdded`, `LastModified`, `Thumbnail`, `Duration`, `Status`, `Count`, `AddedBy`, `TopCourse`) VALUES
(00001, '1712935961', '00002', 'Networking', 'A+', 'A+', 'Internal', NULL, NULL, NULL, NULL, NULL, NULL, '1712935961.png', '3 Months', NULL, '0', NULL, NULL),
(00002, '1712935962', '00002', 'Networking', 'CCNA3', 'CCNA3', 'Internal', NULL, NULL, NULL, NULL, NULL, NULL, '1712935962.png', '3 Months', NULL, '0', NULL, NULL),
(00003, '1712935963', '00002', 'Networking', 'CCNA1', 'CCNA1', 'Internal', NULL, NULL, NULL, NULL, NULL, NULL, '1712935963.png', '3 Months', NULL, '0', NULL, NULL),
(00004, '1712935964', '00001', 'Cyber Security', 'CS01', 'Cyber Security Essential', 'Internal', NULL, 'In recent years, the phrase "Cyber Security" has been more often used by both professionals \nand governments. However, as is the case with many current slang terms, there seems to be \nlittle grasp of what the phrase means in reality. While this may not be a problem when the \nphrase is used informally, it might present significant issues in the context of an organization\'s \nstrategy, corporate goals, or agreements with other countries across the world. \nIt is possible to preserve an organization\'s and its users\' assets via the use of a variety of cyber \nsecurity-related methods and instruments such as policies, procedures, security concepts, \nsafeguards, guidelines, and risk management techniques', NULL, NULL, NULL, NULL, '1712935964.png', '3 Months', NULL, '0', NULL, NULL),
(00005, '1712935972', '00005', 'Emerging Technologies', 'IOTN1', 'Internet Of Things Basic', 'Internal', NULL, 'CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712935972.jpg', '3 Months', 'Active', '0', 'IOTN1', 'Yes'),
(00006, '1712936064', '00005', 'Emerging Technologies', 'IOTN2', 'Internet Of Things Basic', 'Internal', NULL, 'Here The Description Of The Course CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712936064.jpg', '3 Months', 'Active', '0', 'IOTN1', 'Yes'),
(00007, '1712936127', '00005', 'Emerging Technologies', 'IOTN3', 'Internet Of Things Basic', 'Internal', NULL, 'CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712936127.jpg', '3 Months', 'Active', '0', 'IOTN1', 'Yes'),
(00008, '1712936348', '00005', 'Emerging Technologies', 'IOTN4', 'Internet Of Things Basic', 'Internal', NULL, 'CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712936348.png', '3 Months', 'Active', '0', 'IOTN1', 'Yes'),
(00009, '1714812185', '00004', 'Programming Languages', 'PHP01', 'PHP', 'Internal', NULL, 'Server Site Scripting And Programming Language ', '', 'General', '4 May 2024', '4 May 2024', '1714812185.png', '6 Months', 'Active', '1', 'PHP01', 'Yes'),
(00010, '1714946766', '00004', 'Programming Languages', 'PT001', 'Python Basics', NULL, 'Https://coursera.com/', 'Basic Programming Technics In Python', '', 'General', '5 May 2024', '5 May 2024', '1714946766.png', '6 Months', 'Active', '0', 'PT001', 'Yes'),
(00011, '1714993602', '00007', 'Artificial Intelligence', 'AI001', 'Artificial Intelligence Applications', 'Internal', '', 'Artificial Intelligence Introduction And Basic Application', '', 'General', '6 May 2024', '6 May 2024', '1714993602.png', '3 Months', 'Active', '1', 'AI001', 'Yes'),
(00012, '1714993759', '00007', 'Artificial Intelligence', 'AI401', 'Advance AI', 'Internal', '', 'Artificially Intelligence', '', 'General', '6 May 2024', '6 May 2024', '1714993759.png', '7 Months', 'Active', '0', 'AI401', 'Yes'),
(00013, '1715383949', '00004', 'Programming Languages', 'JAVA402', 'Introduction To Java OOP', 'Internal', '', 'Object Oriented Programming In Java', '', 'General', '10 May 2024', '10 May 2024', '1715383949.png', '2 Months', 'Active', '0', 'JAVA402', 'Yes'),
(00014, '1715384120', '00004', 'Programming Languages', 'JAVA402', 'Introduction To Java OOP', 'Internal', '', 'Object Oriented Programming In Java', '', 'General', '10 May 2024', '10 May 2024', '1715384120.png', '2 Months', 'Active', '0', 'JAVA402', 'Yes'),
(00015, '1715384254', '00004', 'Programming Languages', 'JAVA402', 'Introduction To Java OOP', 'Internal', '', 'Object Oriented Programming In Java', '', 'General', '10 May 2024', '10 May 2024', '1715384254.png', '2 Months', 'Active', '0', 'JAVA402', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `courselimit`
--

CREATE TABLE `courselimit` (
  `LId` int(2) UNSIGNED ZEROFILL NOT NULL,
  `Status` varchar(3) NOT NULL,
  `CLimit` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselimit`
--

INSERT INTO `courselimit` (`LId`, `Status`, `CLimit`) VALUES
(01, 'ON', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `EbookId` int(10) UNSIGNED ZEROFILL NOT NULL,
  `CourseCode` varchar(20) NOT NULL,
  `EbookTitle` varchar(200) NOT NULL,
  `FileName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`EbookId`, `CourseCode`, `EbookTitle`, `FileName`) VALUES
(0000000001, 'CS01', 'Cyber Security', 'CS01Cyber Security.pdf'),
(0000000002, 'CS01', 'Cyber Security Essential', 'CS01Cyber Security Essential.pdf'),
(0000000003, 'CCNA3', 'Introduction To CCNA ', 'CCNA3Introduction To CCNA .pdf'),
(0000000004, 'AI001', 'Artificial Intelligence Application', 'AI001Artificial Intelligence Application.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `EId` int(10) UNSIGNED ZEROFILL NOT NULL,
  `LId` int(7) UNSIGNED ZEROFILL NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `RefId` varchar(60) NOT NULL,
  `CategoryId` varchar(5) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseId` varchar(5) NOT NULL,
  `CourseTitle` varchar(200) NOT NULL,
  `Provider` varchar(100) DEFAULT NULL,
  `Url` varchar(200) DEFAULT NULL,
  `SDate` varchar(20) NOT NULL,
  `EDate` varchar(20) NOT NULL,
  `Approve` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`EId`, `LId`, `Email`, `Fname`, `Mname`, `Sname`, `RefId`, `CategoryId`, `CourseCode`, `CourseId`, `CourseTitle`, `Provider`, `Url`, `SDate`, `EDate`, `Approve`, `Status`) VALUES
(0000000001, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935963', '00002', 'CCNA1', '00003', 'CCNA1', 'Internal', NULL, '30-04-24', '30-07-24 ', 'Pending', 'Completed'),
(0000000002, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712936127', '00005', 'IOTN3', '00007', 'Internet Of Things Basic', 'Internal', NULL, '30-04-24', '30-07-24 ', 'Pending', 'Completed'),
(0000000003, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712936127', '00005', 'IOTN3', '00007', 'Internet Of Things Basic', 'Internal', NULL, '30-04-24', '30-07-24 ', 'Pending', 'Completed'),
(0000000004, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712936127', '00005', 'IOTN3', '00007', 'Internet Of Things Basic', 'Internal', NULL, '01-05-24', '01-08-24 ', 'Pending', 'Completed'),
(0000000005, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'Internal', NULL, '01-05-24', '01-08-24 ', 'Pending', 'Inprogress'),
(0000000006, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'Internal', NULL, '01-05-24', '01-08-24 ', 'Pending', 'Inprogress'),
(0000000007, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'Internal', NULL, '01-05-24', '01-08-24 ', 'Pending', 'Inprogress'),
(0000000008, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'Internal', NULL, '02-05-24', '02-08-24 ', 'Pending', 'Inprogress'),
(0000000009, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'Internal', NULL, '02-05-24', '02-08-24 ', 'Pending', 'Inprogress'),
(0000000010, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'Internal', NULL, '02-05-24', '02-08-24 ', 'Pending', 'Inprogress'),
(0000000011, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'Internal', NULL, '02-05-24', '02-08-24 ', 'Pending', 'Inprogress'),
(0000000019, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'Internal', NULL, '04-05-24', '04-11-24 ', 'Pending', 'Inprogress'),
(0000000020, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '05-05-24', '05-11-24 ', 'Pending', 'Inprogress'),
(0000000021, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '06-05-24', '06-11-24 ', 'Pending', 'Inprogress'),
(0000000022, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'Internal', '', '06-05-24', '01-01-70 ', 'Pending', 'Inprogress'),
(0000000023, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935972', '00005', 'IOTN1', '00005', 'Internet Of Things Basic', 'Internal', '', '06-05-24', '01-01-70 ', 'Pending', 'Inprogress'),
(0000000024, 0000005, 'hajara@gmail.com', 'Hajara', '', 'Yusuf', '', '', '', '', '', '', '', '06-05-24', '01-01-70 ', 'Pending', 'Inprogress'),
(0000000025, 0000005, 'hajara@gmail.com', 'Hajara', '', 'Yusuf', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'Internal', '', '06-05-24', '01-01-70 ', 'Pending', 'Inprogress'),
(0000000026, 0000005, 'hajara@gmail.com', 'Hajara', '', 'Yusuf', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'Internal', '', '06-05-24', '06-08-24 ', 'Pending', 'Inprogress'),
(0000000027, 0000006, 'habiba@gmail.com', 'Habiba', '', 'Yusuf', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'Internal', '', '06-05-24', '06-12-24 ', 'Pending', 'Inprogress'),
(0000000028, 0000006, 'habiba@gmail.com', 'Habiba', '', 'Yusuf', '', '', '', '', '', '', '', '06-05-24', '01-01-70 ', 'Pending', 'Inprogress'),
(0000000029, 0000006, 'habiba@gmail.com', 'Habiba', '', 'Yusuf', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'Internal', '', '06-05-24', '06-08-24 ', 'Pending', 'Inprogress'),
(0000000030, 0000007, 'nura@gmail.com', 'Nura', '', 'Aliyu', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'Internal', '', '06-05-24', '06-12-24 ', 'Pending', 'Inprogress'),
(0000000031, 0000007, 'nura@gmail.com', 'Nura', '', 'Aliyu', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'Internal', '', '06-05-24', '06-08-24 ', 'Pending', 'Inprogress'),
(0000000035, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '07-05-24', '07-11-24 ', 'Approved', 'Approved'),
(0000000036, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'Internal', '', '07-05-24', '01-01-70 ', 'Approved', 'Inprogess'),
(0000000042, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '08-05-24', '08-11-24 ', 'Approved', 'Approved'),
(0000000043, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '08-05-24', '08-11-24 ', 'Pending', 'Inprogress'),
(0000000044, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '08-05-24', '08-11-24 ', 'Approved', 'Approved'),
(0000000045, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '08-05-24', '08-11-24 ', 'Pending', 'Pending'),
(0000000046, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '08-05-24', '08-11-24 ', 'Pending', 'Pending'),
(0000000047, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '', '', '', '', '', '', '', '08-05-24', '01-01-70 ', 'Pending', 'Pending'),
(0000000048, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'Internal', '', '08-05-24', '08-11-24 ', 'Approved', 'Inprogess'),
(0000000072, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935961', '00002', 'A+', '00001', 'A+', 'Internal', '', '11-05-24', '11-08-24 ', 'Approved', 'Inprogess'),
(0000000076, 0000011, 'zainab@gmail.com', 'Zainab', 'Salisu', 'Musa', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'Internal', '', '13-05-24', '13-11-24 ', 'Approved', 'Inprogess'),
(0000000075, 0000011, 'zainab@gmail.com', 'Zainab', 'Salisu', 'Musa', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'Internal', '', '13-05-24', '13-08-24 ', 'Approved', 'Inprogess'),
(0000000074, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'Internal', '', '11-05-24', '11-08-24 ', 'Approved', 'Inprogess'),
(0000000073, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'Internal', '', '11-05-24', '11-08-24 ', 'Approved', 'Inprogess');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FId` int(10) UNSIGNED ZEROFILL NOT NULL,
  `LId` varchar(7) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `View` varchar(15) NOT NULL,
  `Feedback` text NOT NULL,
  `Date` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FId`, `LId`, `Name`, `View`, `Feedback`, `Date`) VALUES
(0000000001, '1', 'Bash Hadejia', 'Excellent', 'Ere Goes The Feedback.\r\n\r\nThank You		', '30 April 2024'),
(0000000002, '5', 'Abubakar Yusuf', 'Excellent', ' The Service Are Extremely Excellent We Are Happy With Available Course Materials.\r\n\r\nHave A Bless Day.\r\n			', '30 April 2024'),
(0000000006, '2', 'Abubakar Yusuf', 'Good', 'They Courses Services Are Very Very Good But The Test Time Is Too Short.', '2 May 2024'),
(0000000007, '0000007', 'Nura  Aliyu', 'Good', 'Good Morning,\r\nI\'m Feeling Compelled To Testify That The NITDA Coursera Is A Very Good And Effective Learning System That Gives Me Easy Access To My Course Materials Learn At My Face And Improves My Digital Knowledge.\r\n\r\nThanks To NITDA Academy. ', '7 May 2024'),
(0000000008, '0000007', 'Nura  Aliyu', 'Good', 'This Is My Review', '7 May 2024'),
(0000000009, '0000007', 'Nura  Aliyu', 'Good', 'Here', '7 May 2024'),
(0000000010, '0000007', 'Nura  Aliyu', 'Excellent', '', '7 May 2024'),
(0000000011, '0000007', 'Nura  Aliyu', 'Good', 'Excellent Courses ', '7 May 2024'),
(0000000012, '0000007', 'Nura  Aliyu', 'Very Good', 'Very Good Feedbak', '7 May 2024');

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `LId` int(7) UNSIGNED ZEROFILL NOT NULL,
  `Email` varchar(60) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) DEFAULT NULL,
  `Sname` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Dob` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Lga` varchar(20) NOT NULL,
  `LastSeen` varchar(60) DEFAULT NULL,
  `TimeSpent` varchar(40) DEFAULT NULL,
  `UserIp` varchar(60) NOT NULL,
  `DateJoin` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`LId`, `Email`, `PhoneNo`, `Password`, `Fname`, `Mname`, `Sname`, `Gender`, `Dob`, `State`, `Lga`, `LastSeen`, `TimeSpent`, `UserIp`, `DateJoin`, `Status`) VALUES
(0000001, 'bashhdj@gmail.com', '08039521637', 'abc', 'Basiru', 'A', 'Muhammad', 'M', '11/11/2000', 'Jigawa', 'Hadejia', '', '', '', '', ''),
(0000002, 'barristerzabzy@gmail.com', '08037772077', 'a93d460a11fd90a997b3e12afd590a0c', 'Zainab', 'Musa', 'Muhammad', 'On', '02/04/1992', '-1', 'Lga', NULL, '', '::1', '29 April 2024', 'Status'),
(0000003, 'bashhdjbox@gmail.com', '08039521637', 'a93d460a11fd90a997b3e12afd590a0c', 'Basiru', '', 'Muhammad', 'Male', '03/04/2024', 'Jigawa', 'Hadejia', NULL, '', '::1', '29 April 2024', 'Status'),
(0000004, 'aliyu@mail.com', '02039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Aliyu', '', 'Abubakar', 'Male', '22/05/1990', 'Jigawa', 'Kiri Kasamma', '13-05-24 08:12', '50.84833333333357', '::1', '6 May 2024', 'Status'),
(0000005, 'hajara@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Hajara', '', 'Yusuf', 'Female', '06/05/2008', 'Jigawa', 'Ringim', NULL, '', '::1', '6 May 2024', 'Status'),
(0000006, 'habiba@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Habiba', '', 'Yusuf', 'Female', '12/05/2008', 'Jigawa', 'Hadejia', NULL, '', '::1', '6 May 2024', 'Status'),
(0000007, 'nura@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Nura', '', 'Aliyu', 'Male', '02/05/2007', 'Jigawa', 'Babura', NULL, '', '::1', '6 May 2024', 'Status'),
(0000008, 'abubakar@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Abubakar', '', 'Muhammad', 'Male', '29/05/2007', 'Jigawa', 'Gwaram', NULL, '', '::1', '7 May 2024', 'Status'),
(0000009, 'yubusa@gmail.com', '02039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Yunusa', 'Muhd', 'Salisu', 'Male', '12/05/1999', 'Abia', 'Isuikwato', NULL, '', '127.0.0.1', '8 May 2024', 'Status'),
(0000010, 'salisu@gmail.com', '02039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Salisu', '', 'Isah', 'Male', '05/05/2009', 'Ebonyi', 'Ohaukwu', NULL, '', '127.0.0.1', '8 May 2024', 'Status'),
(0000011, 'zainab@gmail.com', '04039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Zainab', 'Salisu', 'Musa', 'Female', '01/01/2000', 'Gombe', 'Gombe', '13-05-24 22:12', NULL, '::1', '13 May 2024', 'Status');

-- --------------------------------------------------------

--
-- Table structure for table `outline`
--

CREATE TABLE `outline` (
  `OId` int(10) UNSIGNED ZEROFILL NOT NULL,
  `RefId` varchar(60) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `Outline` varchar(200) NOT NULL,
  `Content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outline`
--

INSERT INTO `outline` (`OId`, `RefId`, `CourseCode`, `Outline`, `Content`) VALUES
(0000000001, '001', 'PHP01', 'Introduction To PHP', '<b>Module 1: </b><br><span>This module provides a foundation for the course. In this module, we \r\ndescribed the concept of Things and the Internet. The definitions of IoT and the \r\nessential Characteristics of IoT provided different applications with diagrammatic \r\nrepresentation and provided other details that will help you understand the remaining \r\nparts of the course. Also covered in the module are the various design and development \r\nconsiderations, security issues with using IoT, and the evolving extension of the \r\nInternet of Everything.<br></span>'),
(0000000002, '002', 'PHP01', 'Introduction To PHP', '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; INTRODUCTION</b><span>Virtual Integrated Control Office<b> (VICO)</b> is a human resource management <u>software design and developed </u>to perform Human Resource Management. Human Resource Management (HRM) is the term used to describe formal systems devised for the management of people within an organization. The responsibilities of a human resources manager fall in to three major areas; staffing, employee compensation and benefits, and defining /designing work. Essentially, the purpose of HRM is to maximize the productivity of organization by optimizing the effectiveness of its employees. This mandate is unlikely to change in any fundamental way, despite the ever-increasing pace of change in the business wold. As Edward L. Gubman observed in the journal of Business strategy, â€˜â€™the basic mission of human resources will always be to acquire, develop, and retain talent; align the workforce with the business; and be an excellent contributor to the business. Those three challenges will never change.â€™â€™Until fairly recently, an organizationâ€™s human resource department was often consigned to lower rungs of the corporate hierarchy, despite the fact that its mandate is to replenish and nourish what is often cited-; legitimately-; as an organizationâ€™s greatest resource, itâ€™s work force. But in recent years recognition of the importance of human resource management to a companyâ€™s overall health has grown dramatically. This recognition of the importance of HRM extends to small business, for while they do not generally have the same volume of human resource requirements as do larger organizations, they too face personnel management issues that can have decisive impact of business health. As Irving Burtiner commented in the small Business Handbook, â€˜â€™Hiring the right people-; and training them well-; can often mean the difference between scratching out the barest of livelihoods and steady business grownâ€™. Personal problem does not discriminate between small and big business. You find them in all businesses, regardless of sizeâ€™â€™.&nbsp;Human resource management is concerned with the development of both individuals and the organization in which they operate. HRM, then, is engaged not only in securing and developing the talents of individual workers, but also in implementing programs that enhance communication and cooperation between those individual workers in order to nurture organizational development.&nbsp;The primary responsibilities associated with human resource management include: job analysis and staffing, organization and utilization of work force, measurement and appraisal of work force performance, implementation of reward systems for employees, professional development of workers, and maintenance of work force.&nbsp;Job analysis consist of determining-; often with help of other company areas-; the nature and responsibilities of various employment positions. This can encompass determination of the skills and experiences necessary to adequately perform in a position, identification of job and industry trends, and anticipation of future employment levels and skill requirements. â€˜â€™Job analysis is the cornerstone of HRM practice because it provides valid information about jobs that is used to hire and promote people, establish wages, determine training needs, and make other important HRM decisions,â€™â€™ stated Thomas S. Bateman and Carl P. Zeithaml in management: Function and Strategy. Staffing meanwhile, is the actual process of managing the follow of personnel into, within (through transfers and promotions), and out of an organization. Once the recruiting part of the staffing process has been completed, selection is accomplished through job postings, interviews, reference checks, testing, and other tools.&nbsp;Organization, utilization, and maintenance of a companyâ€™s work force is another key function of HRM. This involved designing an organizational framework that make maximum use of an enterpriseâ€™s human resources and establishing systems of communication that help the organization operate in a unified manner. Other responsibilities in this area include safety and health and worker-management relations. Human resources maintenance activities related to safety and heath usually entail compliance with federal laws that protect employees from hazards in the work place. These regulations are handed down from several federal agencies. including the Occupational safety and Health Administration (OSHA).&nbsp; </span>'),
(0000000003, '1715242856', 'PHP01', 'Basic PHP Syntax', '<b>ABSTRACT</b><br>\r\n\r\nVictual Integrated Control offices &shy;(VICO) is a human\r\nresource management software designed and development to perform human resource\r\nmanagement. Human Resource Management (HRM) is the term used describe formal\r\nsystem devices for the management of people within an organization. The\r\nresponsibilities of a human resources manager fall in to three major areas: staffing,\r\nemployee compensation and benefits, and defining/designing work. Essentially, the\r\npurpose of HRM is to minimize the productivity of an organization by optimizing\r\nthe effectiveness of IT employees. This mandate is unlikely to change in any\r\nfundamental away, despite the ever-increasing pace of change in the business\r\nworld. AS Edward L. Gubman observed in the journal of business Strategy â€˜â€™the\r\nbasic mission of human resources will always be to acquire, develop. And retain\r\ntalent; align the workforce with the business; and excellent contributor to the\r\nbusiness. Those three challenges will never change.â€™â€™\r\n\r\n&nbsp;\r\n\r\nUntil fairly recently, an organizationâ€™s human\r\nresources department was often consigned to lower rungs of the corporate hierarchy,\r\ndespite the fact that its mandate is to replenish what is often\r\ncited-legitimately-; as an organizationâ€™s greater resource, itsâ€™s work force.\r\nBut in resent years recognition of the importance of human resource management\r\nto a companyâ€™s overall health has grown dramatically. This recognition of\r\nimportance of HRM extends to small businesses, for while they do not generally\r\nhave the same volume of human resources requirements as do larger\r\norganizations, they too face personnel management issues that can have decisive\r\nimpact on business health. As Irving Bustiner commented in the small business\r\nHandbook, â€˜â€™hiring the right people and training them well can often mean the\r\ndifference between scratching out the barest of livelihood and steady business\r\ngrowthâ€™â€™. Personnel problems do not discriminate between small and big\r\nbusiness. You find them in all businesses, regardless of size.â€™â€™\r\n\r\n&nbsp;\r\n\r\nHuman resources management is concerned with the\r\ndevelopment of both individuals and the organization in which they operate.\r\nHRM, then, is engaged not only in securing and developing the talent of\r\nindividual workers; but also implementing programs that enhance communication\r\nand cooperation between those individual workers in order to nurture\r\norganization development.\r\n\r\n&nbsp;\r\n\r\nThe primary responsibilities associated with human\r\nresources management include: job analysis staffing, organization of work\r\nforce, measurement and appraisal of work force performance, implementation of\r\nreward systems for employee; professional development of workers, and\r\nmaintenance of work force.'),
(0000000004, '1715242902', 'PHP01', 'Basic PHP Syntax', '<b>ABSTRACT</b></br>\r\n\r\nVictual Integrated Control offices &shy;(VICO) is a human\r\nresource management software designed and development to perform human resource\r\nmanagement. Human Resource Management (HRM) is the term used describe formal\r\nsystem devices for the management of people within an organization. The\r\nresponsibilities of a human resources manager fall in to three major areas: staffing,\r\nemployee compensation and benefits, and defining/designing work. Essentially, the\r\npurpose of HRM is to minimize the productivity of an organization by optimizing\r\nthe effectiveness of IT employees. This mandate is unlikely to change in any\r\nfundamental away, despite the ever-increasing pace of change in the business\r\nworld. AS Edward L. Gubman observed in the journal of business Strategy â€˜â€™the\r\nbasic mission of human resources will always be to acquire, develop. And retain\r\ntalent; align the workforce with the business; and excellent contributor to the\r\nbusiness. Those three challenges will never change.â€™â€™\r\n\r\n&nbsp;\r\n\r\nUntil fairly recently, an organizationâ€™s human\r\nresources department was often consigned to lower rungs of the corporate hierarchy,\r\ndespite the fact that its mandate is to replenish what is often\r\ncited-legitimately-; as an organizationâ€™s greater resource, itsâ€™s work force.\r\nBut in resent years recognition of the importance of human resource management\r\nto a companyâ€™s overall health has grown dramatically. This recognition of\r\nimportance of HRM extends to small businesses, for while they do not generally\r\nhave the same volume of human resources requirements as do larger\r\norganizations, they too face personnel management issues that can have decisive\r\nimpact on business health. As Irving Bustiner commented in the small business\r\nHandbook, â€˜â€™hiring the right people and training them well can often mean the\r\ndifference between scratching out the barest of livelihood and steady business\r\ngrowthâ€™â€™. Personnel problems do not discriminate between small and big\r\nbusiness. You find them in all businesses, regardless of size.â€™â€™\r\n\r\n&nbsp;\r\n\r\nHuman resources management is concerned with the\r\ndevelopment of both individuals and the organization in which they operate.\r\nHRM, then, is engaged not only in securing and developing the talent of\r\nindividual workers; but also implementing programs that enhance communication\r\nand cooperation between those individual workers in order to nurture\r\norganization development.\r\n\r\n&nbsp;\r\n\r\nThe primary responsibilities associated with human\r\nresources management include: job analysis staffing, organization of work\r\nforce, measurement and appraisal of work force performance, implementation of\r\nreward systems for employee; professional development of workers, and\r\nmaintenance of work force.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(4) UNSIGNED ZEROFILL NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Sname` varchar(30) NOT NULL,
  `Mname` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phoneno` varchar(15) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `DateCreated` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Fname`, `Sname`, `Mname`, `Email`, `Phoneno`, `Role`, `Status`, `Password`, `DateCreated`) VALUES
(0001, 'Bash', 'Hadejia', 'A', 'bashhdj@gmail.com', '08039521637', 'Administrator', 'Active', 'abc', '12 April 2024'),
(0002, 'Basiru', 'Muhammad', '', 'bashhdjbox@gmail.com', '07039521637', 'Instructor', 'Active', '59b3f8b2cd04aebd139545a7b62bea30', '12 April 2024'),
(0003, 'Test', 'Tester', '', 'bashhdjboxt@gmail.com', '07039521638', 'Instructor', 'Inactive', '59b3f8b2cd04aebd139545a7b62bea30', '13 April 2024'),
(0008, 'Muhd', 'Suleiman', '', 'muhammadyako4y@gmail.com', '02051668306', 'Administrator', 'Active', '59b3f8b2cd04aebd139545a7b62bea30', '2 May 2024'),
(0009, 'Muhd', 'Suleiman', '', 'muhammadyako4ue@gmail.com', '02051668306', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '2 May 2024'),
(0010, 'Muhd', 'Suleiman', '', 'muhammadyako4u2@gmail.com', '07032323232', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '2 May 2024'),
(0011, 'Muhd', 'Suleiman', '', 'muhammadyako4u3@gmail.com', '08039521637', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '2 May 2024'),
(0012, 'Muhd', 'Suleiman', '', 'muhammadyako4u4@gmail.com', '07039521637', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '2 May 2024'),
(0013, 'Nitda', 'User', '', 'nitda@user.com', '08039521637', 'Instructor', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '3 May 2024'),
(0014, 'Abubakar', 'Idris', 'Yusuf', 'abubakar@gmail.com', '08039521637', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '6 May 2024'),
(0015, 'Sha1', 'User', '', 'sha1@gmail.com', '08039521637', 'Administrator', 'Active', 'a780271eaed428399f3faed98cfdb1bfe669f65a', '7 May 2024'),
(0016, 'Sha12', 'User', '', 'sha12@gmail.com', '08039521637', 'Administrator', 'Active', '6c42144edc0958583789c1b50ccda21a2379f474', '7 May 2024'),
(0017, 'Muhammad', 'Suleiman', 'Abdullahi', 'muhammadyako4u@gmail.com', '07034665224', 'Administrator', 'Active', '07034665224', '7 May 2024'),
(0018, 'Aminu', 'Abdullahi', '', 'aminu@mail.com', '01025145212', 'Instructor', 'Active', '01025145212', '13 May 2024');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `VideoId` int(10) NOT NULL,
  `CourseCode` varchar(20) NOT NULL,
  `VideoTitle` varchar(200) NOT NULL,
  `FileName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`VideoId`, `CourseCode`, `VideoTitle`, `FileName`) VALUES
(34, 'CCNA3', 'Basic Components Of Networking', 'CCNA3Basic Components Of Networking.mp4'),
(33, 'CCNA3', 'CCNA Overview', 'CCNA3CCNA Overview.mp4'),
(32, 'CS01', 'Cyber Security Basics Threat 3', 'CS01Cyber Security Basics Threat 3.mp4'),
(31, 'CS01', 'Cyber Security Basics Threat 2', 'CS01Cyber Security Basics Threat 2.mp4'),
(30, 'CS01', 'Cyber Security Basics Threat', 'CS01Cyber Security Basics Threat.mp4'),
(29, 'CS01', 'Cyber Security Essential', 'CS01Cyber Security Essential.mp4'),
(28, 'A+', 'Security System', 'A+Security System.mp4'),
(27, 'A+', 'Basics Of The IoT', 'A+Basics Of The IoT.mp4'),
(26, 'A+', 'Home Applications', 'A+Home Applications.mp4'),
(35, 'AI001', 'Artificial Intelligence Applications', 'AI001Artificial Intelligence Applications.mp4'),
(36, 'AI001', 'Artificial Intelligence Applications', 'AI001Artificial Intelligence Applications.mp4'),
(37, 'AI001', 'Artificial Intelligence Applications', 'AI001Artificial Intelligence Applications.mp4'),
(38, 'AI001', 'Artificial Intelligence Applications', 'AI001Artificial Intelligence Applications.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`AId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`),
  ADD UNIQUE KEY `CategoryName` (`CategoryName`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseId`),
  ADD UNIQUE KEY `RefId` (`RefId`);

--
-- Indexes for table `courselimit`
--
ALTER TABLE `courselimit`
  ADD PRIMARY KEY (`LId`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`EbookId`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`EId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FId`);

--
-- Indexes for table `learner`
--
ALTER TABLE `learner`
  ADD PRIMARY KEY (`LId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `outline`
--
ALTER TABLE `outline`
  ADD PRIMARY KEY (`OId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`VideoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `AId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `courselimit`
--
ALTER TABLE `courselimit`
  MODIFY `LId` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `EbookId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `EId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `learner`
--
ALTER TABLE `learner`
  MODIFY `LId` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `outline`
--
ALTER TABLE `outline`
  MODIFY `OId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `VideoId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
