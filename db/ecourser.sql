-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 02:09 PM
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
(1, '2024', NULL, NULL, NULL, '10', '2128.6236111110247', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2510.6152777775424');

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
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `CId` int(10) NOT NULL,
  `RefId` varchar(10) NOT NULL,
  `EId` varchar(10) NOT NULL,
  `LId` varchar(10) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `CourseTitle` varchar(200) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Mname` varchar(30) DEFAULT NULL,
  `Sname` varchar(30) NOT NULL,
  `Result` varchar(5) NOT NULL,
  `DateIssued` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`CId`, `RefId`, `EId`, `LId`, `CourseCode`, `CourseTitle`, `Fname`, `Mname`, `Sname`, `Result`, `DateIssued`) VALUES
(1, '1712935963', '1', '1', 'CCNA1', 'CCNA1', '', '', '', '', '25 May 2024'),
(2, '1714812185', '142', '16', 'PHP01', 'PHP', '', '', '', '', '27 May 2024'),
(3, '1714812185', '0000000142', '16', 'PHP01', 'PHP', 'Ramatu', 'Abubakar', 'Sadeeq', '88%', '30-05-2024'),
(4, '1712935964', '0000000143', '16', 'CS01', 'Cyber Security Essential', 'Ramatu', 'Abubakar', 'Sadeeq', '50%', '30-05-2024'),
(5, '1712935964', '0000000145', '18', 'CS01', 'Cyber Security Essential', 'Khadija', '', 'Kabiru', '100%', '31-05-2024'),
(6, '1712935964', '0000000154', '29', 'CS01', 'Cyber Security Essential', 'Safarau', 'Aliyu', 'Aliyu', '83%', '05-06-2024'),
(7, '1712935964', '0000000163', '0000030', 'CS01', 'Cyber Security Essential', 'Joy', '', 'Chukwu', '100%', '14-06-2024'),
(8, '1715383949', '0000000171', '0000033', 'JAVA402', 'Introduction To Java OOP', 'Rose', '', 'Sunday', '100%', '19-06-2024');

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
  `Eligibility` text,
  `Description` longtext,
  `Overview` longtext,
  `Requirement` longtext,
  `DateAdded` varchar(20) DEFAULT NULL,
  `LastUpdated` varchar(20) DEFAULT NULL,
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

INSERT INTO `course` (`CourseId`, `RefId`, `CategoryId`, `CategoryName`, `CourseCode`, `CourseTitle`, `Provider`, `Url`, `Eligibility`, `Description`, `Overview`, `Requirement`, `DateAdded`, `LastUpdated`, `Thumbnail`, `Duration`, `Status`, `Count`, `AddedBy`, `TopCourse`) VALUES
(00001, '1712935961', '00002', 'Networking', 'A+', 'A+', 'NITDA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1712935961.png', '3 Months', NULL, '3', NULL, NULL),
(00002, '1712935962', '00002', 'Networking', 'CCNA3', 'CCNA3', 'NITDA', NULL, NULL, NULL, NULL, NULL, NULL, '23 May 2024', '1712935962.png', '3 Months', NULL, '3', NULL, NULL),
(00003, '1712935963', '00002', 'Networking', 'CCNA1', 'CCNA1', 'NITDA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1712935963.png', '3 Months', NULL, '11', NULL, NULL),
(00004, '1712935964', '00001', 'Cyber Security', 'CS01', 'Cyber Security Essential', 'NITDA', NULL, NULL, 'In recent years, the phrase "Cyber Security" has been more often used by both professionals \nand governments. However, as is the case with many current slang terms, there seems to be \nlittle grasp of what the phrase means in reality. While this may not be a problem when the \nphrase is used informally, it might present significant issues in the context of an organization\'s \nstrategy, corporate goals, or agreements with other countries across the world. \nIt is possible to preserve an organization\'s and its users\' assets via the use of a variety of cyber \nsecurity-related methods and instruments such as policies, procedures, security concepts, \nsafeguards, guidelines, and risk management techniques', NULL, NULL, NULL, NULL, '1712935964.png', '3 Months', NULL, '21', NULL, NULL),
(00005, '1712935972', '00005', 'Emerging Technologies', 'IOTN1', 'Internet Of Things Basic', 'NITDA', NULL, NULL, 'CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712935972.jpg', '3 Months', 'Active', '7', 'IOTN1', 'Yes'),
(00006, '1712936064', '00005', 'Emerging Technologies', 'IOTN2', 'Internet Of Things Basic', 'NITDA', NULL, NULL, 'Here The Description Of The Course CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712936064.jpg', '3 Months', 'Active', '4', 'IOTN1', 'Yes'),
(00007, '1712936127', '00005', 'Emerging Technologies', 'IOTN3', 'Internet Of Things Basic', 'NITDA', NULL, NULL, 'CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712936127.jpg', '3 Months', 'Active', '1', 'IOTN1', 'Yes'),
(00008, '1712936348', '00005', 'Emerging Technologies', 'IOTN4', 'Internet Of Things Basic', 'NITDA', NULL, NULL, 'CIT 882 Internets of Things is a Two [2] credit unit course of four modules with eleven \nunits. It is designed to train you for the use of the internet of things in the world of \nEnterprise. The knowledge gained in this course would lead to proficiency in the usage \nand application of IoT across different domains. As a computer scientist, savvy in \ntechnology, it is advised that you study each unit carefully to ensure you gain the\ndesired skills and knowledge required in the implementation of the Internet of Things. \nThe course material is made up of four modules.', 'The Course Over View Goes Here', 'General', '12 April 2024', '12 April 2024', '1712936348.png', '3 Months', 'Active', '1', 'IOTN1', 'Yes'),
(00009, '1714812185', '00004', 'Programming Languages', 'PHP01', 'PHP', 'NITDA', '', 'This Course Requires The Basic Knowledge Of Programming However,  The Applicant Must Be At Least OND Holder.', 'Server Site Scripting And Programming Language.', 'This Course Focuses On The Basic Syntax Of The PHP And The Basic Statement Construct.', 'General', '4 May 2024', '29 May 2024', '1714812185.png', '6 Months', 'Active', '17', 'PHP01', 'Yes'),
(00010, '1714946766', '00004', 'Programming Languages', 'PT001', 'Python Basics', 'Coursera', 'Https://coursera.com/', NULL, 'Basic Programming Technics In Python', '', 'General', '5 May 2024', '5 May 2024', '1714946766.png', '6 Months', 'Active', '11', 'PT001', 'Yes'),
(00011, '1714993602', '00007', 'Artificial Intelligence', 'AI001', 'Artificial Intelligence Applications', 'NITDA', '', NULL, 'Artificial Intelligence Introduction And Basic Application', '', 'General', '6 May 2024', '20 June 2024', '1714993602.png', '3 Months', 'Active', '9', 'AI001', 'Yes'),
(00012, '1714993759', '00007', 'Artificial Intelligence', 'AI401', 'Advance AI', 'NITDA', '', NULL, 'Artificially Intelligence', '', 'General', '6 May 2024', '20 June 2024', '1714993759.png', '7 Months', 'Active', '9', 'AI401', 'Yes'),
(00013, '1715383949', '00004', 'Programming Languages', 'JAVA402', 'Introduction To Java OOP', 'NITDA', '', NULL, 'Object Oriented Programming In Java', '', 'General', '10 May 2024', '19 June 2024', '1715383949.png', '2 Months', 'Active', '5', 'JAVA402', 'Yes'),
(00014, '1715384120', '00004', 'Programming Languages', 'JAVA403', 'Advance Java OOP', 'NITDA', '', '', 'Object Oriented Programming In Java', '', 'General', '10 May 2024', '19 June 2024', '1715384120.png', '2 Months', 'Active', '0', 'JAVA402', 'Yes'),
(00015, '1715384254', '00004', 'Programming Languages', 'JAVA403', 'Object Oriented Programming In Java ', 'NITDA', '', '', 'Object Oriented Programming In Java', '', 'General', '10 May 2024', '19 June 2024', '1715384254.png', '2 Months', 'Active', '1', 'JAVA402', 'Yes'),
(00016, '1717751443', '00004', 'Programming Languages', 'C101', 'C#', 'Third Party', 'http://cousera.com', 'Basic Computer Knowledge', 'C# Is An Object Oriented Programming For Developing Software Using An Object Oriented Approach.', 'This Course Defines The C Sharp And The Basic Construct Of Object Oriented Programming Language.', 'General', '7 June 2024', '7 June 2024', '1717751443.png', '4 Months', 'Active', '1', 'C101', 'Yes');

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
(0000000004, 'AI001', 'A Brief Introduction To Artificial Intelligence', 'AI001Artificial Intelligence Application.pdf'),
(0000000005, 'CCNA3', 'Module One', 'CCNA3Module One.pdf'),
(0000000006, 'JAVA402', 'Introduction To Java Programming', 'JAVA402Introduction To Java Programming.pdf'),
(0000000007, 'AI401', 'Advanced Articial Intelligence', 'AI401Advanced Articial Intelligence.pdf');

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
  `Progress1` varchar(5) DEFAULT NULL,
  `Progress2` varchar(5) DEFAULT NULL,
  `Progress3` varchar(5) DEFAULT NULL,
  `Quiz` varchar(5) DEFAULT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `SDate` varchar(20) NOT NULL,
  `EDate` varchar(20) NOT NULL,
  `QDate` varchar(15) NOT NULL,
  `Approve` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Step` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`EId`, `LId`, `Email`, `Fname`, `Mname`, `Sname`, `RefId`, `CategoryId`, `CourseCode`, `CourseId`, `CourseTitle`, `Provider`, `Url`, `Progress1`, `Progress2`, `Progress3`, `Quiz`, `Month`, `Year`, `SDate`, `EDate`, `QDate`, `Approve`, `Status`, `Step`) VALUES
(0000000001, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935963', '00002', 'CCNA1', '00003', 'CCNA1', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '30-04-24', '30-07-24 ', '', 'Pending', 'Completed', '2'),
(0000000002, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712936127', '00005', 'IOTN3', '00007', 'Internet Of Things Basic', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '30-04-24', '30-07-24 ', '', 'Pending', 'Completed', '2'),
(0000000003, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712936127', '00005', 'IOTN3', '00007', 'Internet Of Things Basic', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '30-04-24', '30-07-24 ', '', 'Pending', 'Completed', '2'),
(0000000004, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712936127', '00005', 'IOTN3', '00007', 'Internet Of Things Basic', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '01-05-24', '01-08-24 ', '', 'Pending', 'Completed', '2'),
(0000000005, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '01-05-24', '01-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000006, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '01-05-24', '01-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000007, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '01-05-24', '01-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000008, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '02-05-24', '02-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000009, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '02-05-24', '02-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000010, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '02-05-24', '02-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000011, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '02-05-24', '02-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000019, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', NULL, NULL, '', '', NULL, 'April', '2024', '04-05-24', '04-11-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000020, 0000001, 'bashhdj@gmail.com', 'Basiru', 'A', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', NULL, '', '', NULL, 'April', '2024', '05-05-24', '05-11-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000021, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', NULL, '', '', NULL, 'April', '2024', '06-05-24', '06-11-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000022, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '01-01-70 ', '', 'Pending', 'Inprogress', '1'),
(0000000023, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935972', '00005', 'IOTN1', '00005', 'Internet Of Things Basic', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '01-01-70 ', '', 'Pending', 'Inprogress', '1'),
(0000000024, 0000005, 'hajara@gmail.com', 'Hajara', '', 'Yusuf', '', '', '', '', '', '', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '01-01-70 ', '', 'Pending', 'Inprogress', '1'),
(0000000025, 0000005, 'hajara@gmail.com', 'Hajara', '', 'Yusuf', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '01-01-70 ', '', 'Pending', 'Inprogress', '1'),
(0000000026, 0000005, 'hajara@gmail.com', 'Hajara', '', 'Yusuf', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '06-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000027, 0000006, 'habiba@gmail.com', 'Habiba', '', 'Yusuf', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '06-12-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000028, 0000006, 'habiba@gmail.com', 'Habiba', '', 'Yusuf', '', '', '', '', '', '', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '01-01-70 ', '', 'Pending', 'Inprogress', '1'),
(0000000029, 0000006, 'habiba@gmail.com', 'Habiba', '', 'Yusuf', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '06-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000030, 0000007, 'nura@gmail.com', 'Nura', '', 'Aliyu', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '06-12-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000031, 0000007, 'nura@gmail.com', 'Nura', '', 'Aliyu', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '06-05-24', '06-08-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000035, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', NULL, '', '', NULL, 'April', '2024', '07-05-24', '07-11-24 ', '', 'Approved', 'Approved', NULL),
(0000000036, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '07-05-24', '01-01-70 ', '', 'Approved', 'Inprogress', '1'),
(0000000077, 0000012, 'rabiu@gmail.com', 'Rabiu', 'Usman', 'Usman', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '14-05-24', '14-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000042, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', NULL, '', '', NULL, 'April', '2024', '08-05-24', '08-11-24 ', '', 'Declined', 'Declined', NULL),
(0000000043, 0000008, 'abubakar@gmail.com', 'Abubakar', '', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', NULL, '', '', NULL, 'April', '2024', '08-05-24', '08-11-24 ', '', 'Pending', 'Inprogress', '1'),
(0000000142, 0000016, 'ramatuasadeeq@gmail.com', 'Ramatu', 'Abubakar', 'Sadeeq', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '26-05-24', '26-11-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000141, 0000016, 'ramatuasadeeq@gmail.com', 'Ramatu', 'Abubakar', 'Sadeeq', '1714946766', '00004', 'PT001', '00010', 'Python Basics', 'Coursera', 'Https://coursera.com/', '20', '20', '0', '0', 'May', '2024', '26-05-24', '26-11-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000046, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', NULL, '', '', NULL, 'April', '2024', '08-05-24', '08-11-24 ', '', 'Approved', 'Approved', NULL),
(0000000047, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '', '', '', '', '', '', '', NULL, '', '', NULL, 'April', '2024', '08-05-24', '01-01-70 ', '', 'Pending', 'Pending', NULL),
(0000000048, 0000010, 'salisu@gmail.com', 'Salisu', '', 'Isah', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '08-05-24', '08-11-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000072, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935961', '00002', 'A+', '00001', 'A+', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '11-05-24', '11-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000076, 0000011, 'zainab@gmail.com', 'Zainab', 'Salisu', 'Musa', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '13-05-24', '13-11-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000075, 0000011, 'zainab@gmail.com', 'Zainab', 'Salisu', 'Musa', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', '20', '20', '20', NULL, 'April', '2024', '13-05-24', '13-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000074, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '11-05-24', '11-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000073, 0000004, 'aliyu@mail.com', 'Aliyu', '', 'Abubakar', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', '', NULL, '', '', NULL, 'April', '2024', '11-05-24', '11-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000078, 0000011, 'zainab@gmail.com', 'Zainab', 'Salisu', 'Musa', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '0', 'April', '2024', '14-05-24', '14-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000079, 0000011, 'zainab@gmail.com', 'Zainab', 'Salisu', 'Musa', '1712935963', '00002', 'CCNA1', '00003', 'CCNA1', 'NITDA', '', '0', NULL, NULL, '0', 'April', '2024', '17-05-24', '17-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000080, 0000011, 'zainab@gmail.com', 'Zainab', 'Salisu', 'Musa', '', '', '', '', '', '', '', '0', NULL, NULL, '0', 'April', '2024', '17-05-24', '01-01-70 ', '', 'Pending', 'Pending', NULL),
(0000000081, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '', '', '', '', '', '', '', '20', '20', '0', '0', 'May', '2024', '18-05-24', '01-01-70 ', '', 'Pending', 'Pending', NULL),
(0000000082, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '1712935961', '00002', 'A+', '00001', 'A+', 'NITDA', '', '20', '20', '20', '0', 'May', '2024', '18-05-24', '18-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000083, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '18-05-24', '18-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000084, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '18-05-24', '18-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000085, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '1712935963', '00002', 'CCNA1', '00003', 'CCNA1', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '18-05-24', '18-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000086, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '1712935972', '00005', 'IOTN1', '00005', 'Internet Of Things Basic', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '18-05-24', '18-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000090, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '20', '20', '0', '0', 'May', '2024', '18-05-24', '18-11-24 ', '', 'Pending', 'Pending', NULL),
(0000000089, 0000013, 'hamisu@gmail.com', 'Hamisu', '', 'Muhammad', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '18-05-24', '18-11-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000091, 0000014, 'saminu@gmail.com', 'Saminu', '', 'Ibrahim', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '19-05-24', '19-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000092, 0000014, 'saminu@gmail.com', 'Saminu', '', 'Ibrahim', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '19-05-24', '19-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000093, 0000014, 'saminu@gmail.com', 'Saminu', '', 'Ibrahim', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '19-05-24', '19-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000094, 0000014, 'saminu@gmail.com', 'Saminu', '', 'Ibrahim', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '19-05-24', '19-12-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000095, 0000015, 'aminu@gmail.com', 'Aminu', '', 'Hamisu', '1712935962', '00002', 'CCNA3', '00002', 'CCNA3', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '19-05-24', '19-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000139, 0000015, 'aminu@gmail.com', 'Aminu', '', 'Hamisu', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '20-05-24', '20-11-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000145, 0000018, 'khadijak@gmail.com', 'Khadija', '', 'Kabiru', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '40', 'May', '2024', '31-05-24', '31-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000143, 0000016, 'ramatuasadeeq@gmail.com', 'Ramatu', 'Abubakar', 'Sadeeq', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '0', '0', 'May', '2024', '30-05-24', '30-08-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000144, 0000016, 'ramatuasadeeq@gmail.com', 'Ramatu', 'Abubakar', 'Sadeeq', '1715383949', '00004', 'JAVA402', '00013', 'Introduction To Java OOP', 'NITDA', '', '20', '20', '20', '0', 'May', '2024', '31-05-24', '31-07-24 ', '', 'Approved', 'Inprogress', '1'),
(0000000140, 0000015, 'aminu@gmail.com', 'Aminu', '', 'Hamisu', '1714946766', '00004', 'PT001', '00010', 'Python Basics', '', 'Https://coursera.com/', '20', '20', '0', '0', 'May', '2024', '20-05-24', '20-11-24 ', '', 'Pending', 'Pending', NULL),
(0000000147, 0000018, 'khadijak@gmail.com', 'Khadija', '', 'Kabiru', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '01-06-24', '01-12-24 ', '24-06-2024', 'Approved', 'Inprogress', '1'),
(0000000148, 0000019, 'saadatu@gmail.com', 'Saadatu', 'Musa', 'Suleiman', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '04-06-2024', '04-09-2024 ', '17-06-2024', 'Approved', 'Inprogress', '1'),
(0000000157, 0000019, 'saadatu@gmail.com', 'Saadatu', 'Musa', 'Suleiman', '1714946766', '00004', 'PT001', '00010', 'Python Basics', 'Coursera', 'Https://coursera.com/', '0', '0', '0', '0', 'June', '2024', '07-06-2024', '07-12-2024 ', '17-06-2024', 'Pending', 'Pending', NULL),
(0000000149, 0000022, 'ikechukwu@gmail.com', 'Ikechukwu', '', 'Benjamin', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '04-06-2024', '04-12-2024 ', '27-11-2024 ', 'Approved', 'Inprogress', '1'),
(0000000150, 0000024, 'sulaimans@gmail.com', 'Sulaiman', '', 'Sani', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '05-06-2024', '05-12-2024 ', '28-11-2024 ', 'Approved', 'Inprogress', '1'),
(0000000151, 0000027, 'salisum@gmail.com', 'Salisu', '', 'Madaki', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '05-06-2024', '05-09-2024 ', '05-06-2024', 'Approved', 'Inprogress', '1'),
(0000000152, 0000025, 'nasidi@gmail.com', 'Nasidi', '', 'Aliyu', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '05-06-2024', '05-09-2024 ', '29-08-2024 ', 'Approved', 'Inprogress', '1'),
(0000000153, 0000028, 'yusufl@gmail.com', 'Yusuf', '', 'Lamido', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '05-06-2024', '05-09-2024 ', '29-08-2024 ', 'Approved', 'Inprogress', '1'),
(0000000154, 0000029, 'safarau@gmail.com', 'Safarau', 'Aliyu', 'Aliyu', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '40', 'June', '2024', '05-06-2024', '05-09-2024 ', 'Done', 'Approved', 'Completed', '2'),
(0000000155, 0000029, 'safarau@gmail.com', 'Safarau', 'Aliyu', 'Aliyu', '1714946766', '00004', 'PT001', '00010', 'Python Basics', 'Coursera', 'Https://coursera.com/', '0', '0', '0', '0', 'June', '2024', '06-06-2024', '06-12-2024 ', '29-11-2024 ', 'Pending', 'Pending', NULL),
(0000000156, 0000019, 'saadatu@gmail.com', 'Saadatu', 'Musa', 'Suleiman', '1717751443', '00004', 'C101', '00016', 'C#', 'Third Party', 'http://cousera.com', '0', '0', '0', '0', 'June', '2024', '07-06-2024', '07-10-2024 ', '17-06-2024', 'Pending', 'Pending', NULL),
(0000000158, 0000019, 'saadatu@gmail.com', 'Saadatu', 'Musa', 'Suleiman', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '07-06-2024', '07-09-2024 ', '17-06-2024', 'Approved', 'Inprogress', '1'),
(0000000167, 0000032, 'yahuza@mail.com', 'Yahuza', 'Muhd', 'Aliyu', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '18-06-2024', '18-09-2024 ', '23-06-2024 ', 'Approved', 'Inprogress', '1'),
(0000000159, 0000019, 'saadatu@gmail.com', 'Saadatu', 'Musa', 'Suleiman', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '09-06-2024', '09-12-2024 ', '22-06-2024 ', 'Approved', 'Inprogress', '1'),
(0000000160, 0000019, 'saadatu@gmail.com', 'Saadatu', 'Musa', 'Suleiman', '1712936064', '00005', 'IOTN2', '00006', 'Internet Of Things Basic', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '10-06-2024', '10-09-2024 ', '17-06-2024', 'Approved', 'Inprogress', '1'),
(0000000161, 0000029, 'safarau@gmail.com', 'Safarau', 'Aliyu', 'Aliyu', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '11-06-2024', '11-12-2024 ', '04-12-2024 ', 'Approved', 'Inprogress', '1'),
(0000000162, 0000029, 'safarau@gmail.com', 'Safarau', 'Aliyu', 'Aliyu', '1712935963', '00002', 'CCNA1', '00003', 'CCNA1', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '11-06-2024', '11-09-2024 ', '04-09-2024 ', 'Approved', 'Inprogress', '1'),
(0000000163, 0000030, 'joy@mail.com', 'Joy', '', 'Chukwu', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '40', 'June', '2024', '14-06-2024', '14-09-2024 ', '16-06-2024', 'Approved', 'Completed', '2'),
(0000000164, 0000030, 'joy@mail.com', 'Joy', '', 'Chukwu', '1715383949', '00004', 'JAVA402', '00013', 'Introduction To Java OOP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '14-06-2024', '14-08-2024 ', '16-06-2024', 'Approved', 'Inprogress', '1'),
(0000000165, 0000030, 'joy@mail.com', 'Joy', '', 'Chukwu', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '14-06-2024', '14-12-2024 ', '16-06-2024', 'Approved', 'Inprogress', '1'),
(0000000166, 0000030, 'joy@mail.com', 'Joy', '', 'Chukwu', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '16-06-2024', '16-01-2025 ', '09-01-2025 ', 'Approved', 'Inprogress', '1'),
(0000000168, 0000032, 'yahuza@mail.com', 'Yahuza', 'Muhd', 'Aliyu', '1715383949', '00004', 'JAVA402', '00013', 'Introduction To Java OOP', 'NITDA', '', '0', '0', '0', '0', 'June', '2024', '18-06-2024', '18-08-2024 ', '11-08-2024 ', 'Approved', 'Inprogress', '1'),
(0000000169, 0000033, 'rose@mail.com', 'Rose', '', 'Sunday', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '18-06-2024', '18-12-2024 ', '28-06-2024', 'Approved', 'Inprogress', '1'),
(0000000170, 0000033, 'rose@mail.com', 'Rose', '', 'Sunday', '1714993602', '00007', 'AI001', '00011', 'Artificial Intelligence Applications', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '18-06-2024', '18-09-2024 ', '28-06-2024', 'Approved', 'Inprogress', '1'),
(0000000171, 0000033, 'rose@mail.com', 'Rose', '', 'Sunday', '1715383949', '00004', 'JAVA402', '00013', 'Introduction To Java OOP', 'NITDA', '', '20', '20', '20', '40', 'June', '2024', '19-06-2024', '19-08-2024 ', '28-06-2024', 'Approved', 'Completed', '1'),
(0000000172, 0000034, 'eunice@mail.com', 'Eunice', '', 'Sunday', '1715383949', '00004', 'JAVA402', '00013', 'Introduction To Java OOP', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '19-06-2024', '19-08-2024 ', '19-06-2024', 'Approved', 'Inprogress', '1'),
(0000000173, 0000033, 'rose@mail.com', 'Rose', '', 'Sunday', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '20-06-2024', '20-01-2025 ', '03-07-2024 ', 'Approved', 'Inprogress', '1'),
(0000000174, 0000036, 'khadija@mail.com', 'Khadija', 'Musa', 'Usman', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'NITDA', '', '0', '0', '0', '0', 'June', '2024', '27-06-2024', '27-01-2025 ', '20-01-2025 ', 'Approved', 'Inprogress', '1'),
(0000000175, 0000036, 'khadija@mail.com', 'Khadija', 'Musa', 'Usman', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '0', '0', '0', '0', 'June', '2024', '27-06-2024', '27-12-2024 ', '20-12-2024 ', 'Approved', 'Inprogress', '1'),
(0000000176, 0000033, 'rose@mail.com', 'Rose', '', 'Sunday', '1714946766', '00004', 'PT001', '00010', 'Python Basics', 'Coursera', 'Https://coursera.com/', '0', '0', '0', '0', 'June', '2024', '28-06-2024', '28-12-2024 ', '28-06-2024', 'Pending', 'Pending', NULL),
(0000000177, 0000037, 'ademola@mail.com', 'Ademola', '', 'Adaleke', '1712935964', '00001', 'CS01', '00004', 'Cyber Security Essential', 'NITDA', '', '20', '20', '20', '0', 'June', '2024', '29-06-2024', '29-09-2024 ', '22-09-2024 ', 'Approved', 'Inprogress', '1'),
(0000000178, 0000037, 'ademola@mail.com', 'Ademola', '', 'Adaleke', '1714812185', '00004', 'PHP01', '00009', 'PHP', 'NITDA', '', '0', '0', '0', '0', 'June', '2024', '29-06-2024', '29-12-2024 ', '22-12-2024 ', 'Approved', 'Inprogress', '1'),
(0000000179, 0000037, 'ademola@mail.com', 'Ademola', '', 'Adaleke', '1714946766', '00004', 'PT001', '00010', 'Python Basics', 'Coursera', 'Https://coursera.com/', '0', '0', '0', '0', 'June', '2024', '30-06-2024', '30-12-2024 ', '23-12-2024 ', 'Pending', 'Pending', NULL),
(0000000180, 0000037, 'ademola@mail.com', 'Ademola', '', 'Adaleke', '1714993759', '00007', 'AI401', '00012', 'Advance AI', 'NITDA', '', '0', '0', '0', '0', 'July', '2024', '02-07-2024', '02-02-2025 ', '26-01-2025 ', 'Approved', 'Inprogress', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FId` int(10) UNSIGNED ZEROFILL NOT NULL,
  `LId` varchar(7) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `View` varchar(15) NOT NULL,
  `Feedback` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Display` varchar(2) DEFAULT NULL,
  `Dorder` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FId`, `LId`, `CourseCode`, `Name`, `View`, `Feedback`, `Date`, `Display`, `Dorder`) VALUES
(0000000001, '1', '', 'Bash Hadejia', 'Excellent', 'I love learning and adding value to the society took this course through NITDA Sponsorship as one of its mandates is driving digital skills capacity building and building business leaders. This course has really helped me in ways i can\'t even express, am glad i took it, its a privilege to have gotten this valuable knowledge and am grateful to God for it love Everything about the course and i promise to pass what I\'ve also learn to others as well. Thank You so much for this!', '30 April 2024', '1', NULL),
(0000000002, '5', '', 'Abubakar Yusuf', 'Excellent', ' The Service Are Extremely Excellent We Are Happy With Available Course Materials.\n\nHave A Bless Day.\n			', '30 April 2024', '1', NULL),
(0000000006, '2', '', 'Abubakar Yusuf', 'Good', 'They Courses Services Are Very Very Good But The Test Time Is Too Short.', '2 May 2024', '1', NULL),
(0000000007, '0000007', '', 'Nura  Aliyu', 'Good', 'Good Morning,\r\nI\'m Feeling Compelled To Testify That The NITDA Coursera Is A Very Good And Effective Learning System That Gives Me Easy Access To My Course Materials Learn At My Face And Improves My Digital Knowledge.\r\n\r\nThanks To NITDA Academy. ', '7 May 2024', '', NULL),
(0000000008, '0000007', '', 'Nura  Aliyu', 'Good', 'This Is My Review', '7 May 2024', '', NULL),
(0000000009, '0000007', '', 'Nura  Aliyu', 'Good', 'Here', '7 May 2024', '', NULL),
(0000000010, '0000007', '', 'Nura  Aliyu', 'Excellent', '', '7 May 2024', '', NULL),
(0000000011, '0000007', '', 'Nura  Aliyu', 'Good', 'Excellent Courses ', '7 May 2024', '', NULL),
(0000000012, '0000007', '', 'Nura  Aliyu', 'Very Good', 'Very Good Feedbak', '7 May 2024', '', NULL),
(0000000017, '0000019', 'CS01', 'Saadatu Musa Suleiman', 'Excellent', 'This Is The First Time I\'m Taken An Online Course At NITDA Academy But I Found It Helpful And Fantastic.  \r\n\r\nThank You For Your Online Courses.', '7 June 2024', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `LId` int(10) UNSIGNED ZEROFILL NOT NULL,
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
  `Qualification` varchar(60) NOT NULL,
  `Specialisation` varchar(100) NOT NULL,
  `LastSeen` varchar(60) DEFAULT NULL,
  `TimeSpent` varchar(40) DEFAULT NULL,
  `UserIp` varchar(60) NOT NULL,
  `DateJoin` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `VCode` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`LId`, `Email`, `PhoneNo`, `Password`, `Fname`, `Mname`, `Sname`, `Gender`, `Dob`, `State`, `Lga`, `Qualification`, `Specialisation`, `LastSeen`, `TimeSpent`, `UserIp`, `DateJoin`, `Status`, `VCode`) VALUES
(0000000001, 'bashhdj@gmail.com', '08039521637', '74bc6cd0b835542cf29aa411acabc4bf', 'Basiru', 'A', 'Muhammad', 'M', '11/11/2000', 'Jigawa', 'Hadejia', 'Degree', 'Computer science', '02-07-24 10:01', '75.75555555555563', '', '', '', ''),
(0000000002, 'barristerzabzy@gmail.com', '08037772077', 'a93d460a11fd90a997b3e12afd590a0c', 'Zainab', 'Musa', 'Muhammad', 'On', '02/04/1992', 'Abia', 'Abia North', 'Degree', 'Computer science', NULL, '', '::1', '29 April 2024', 'Status', ''),
(0000000003, 'bashhdjbox@gmail.com', '08039521637', 'a93d460a11fd90a997b3e12afd590a0c', 'Basiru', '', 'Muhammad', 'Male', '03/04/2024', 'Jigawa', 'Hadejia', 'Degree', 'Computer science', NULL, '', '::1', '29 April 2024', 'Status', ''),
(0000000004, 'aliyu@mail.com', '02039521637', '74bc6cd0b835542cf29aa411acabc4bf', 'Aliyu', '', 'Abubakar', 'Male', '22/05/1990', 'Jigawa', 'Kiri Kasamma', 'Degree', 'Computer science', '29-05-24 22:06', '208.06999999999758', '::1', '6 May 2024', 'Status', ''),
(0000000005, 'hajara@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Hajara', '', 'Yusuf', 'Female', '06/05/2008', 'Jigawa', 'Ringim', 'Degree', 'Computer science', NULL, '', '::1', '6 May 2024', 'Status', ''),
(0000000006, 'habiba@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Habiba', '', 'Yusuf', 'Female', '12/05/2008', 'Jigawa', 'Hadejia', 'Degree', 'Computer science', NULL, '', '::1', '6 May 2024', 'Status', ''),
(0000000007, 'nura@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Nura', '', 'Aliyu', 'Male', '02/05/2007', 'Jigawa', 'Babura', 'Degree', 'Computer science', NULL, '', '::1', '6 May 2024', 'Status', ''),
(0000000008, 'abubakar@gmail.com', '08039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Abubakar', '', 'Muhammad', 'Male', '29/05/2007', 'Jigawa', 'Gwaram', 'Degree', 'Computer science', NULL, '', '::1', '7 May 2024', 'Status', ''),
(0000000009, 'yubusa@gmail.com', '02039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Yunusa', 'Muhd', 'Salisu', 'Male', '12/05/1999', 'Abia', 'Isuikwato', 'Degree', 'Computer science', NULL, '', '127.0.0.1', '8 May 2024', 'Status', ''),
(0000000010, 'salisu@gmail.com', '02039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Salisu', '', 'Isah', 'Male', '05/05/2009', 'Ebonyi', 'Ohaukwu', 'Degree', 'Computer science', NULL, '', '127.0.0.1', '8 May 2024', 'Status', ''),
(0000000011, 'zainab@gmail.com', '04039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Zainab', 'Salisu', 'Musa', 'Female', '01/01/2000', 'Gombe', 'Gombe', 'Degree', 'Computer science', '19-05-24 13:34', NULL, '::1', '13 May 2024', 'Status', ''),
(0000000012, 'rabiu@gmail.com', '05039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Rabiu', 'Usman', 'Usman', 'Male', '11/08/1991', 'Imo', 'Nkwerre', 'Degree', 'Computer science', '14-05-24 13:57', NULL, '::1', '14 May 2024', 'Status', ''),
(0000000013, 'hamisu@gmail.com', '01039521637', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Hamisu', '', 'Muhammad', 'Male', '28/04/2024', 'Borno', 'Bama', 'Degree', 'Computer science', '18-05-24 11:23', NULL, '127.0.0.1', '18 May 2024', 'Status', ''),
(0000000014, 'saminu@gmail.com', '08051668306', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Saminu', '', 'Ibrahim', 'Male', '08/05/2020', 'Enugu', 'Ovia South East', 'Degree', 'Computer science', '19-05-24 21:27', NULL, '127.0.0.1', '19 May 2024', 'Status', ''),
(0000000015, 'aminu@gmail.com', '02051668306', '8f45c661f56ec12563762ca5964afe6a4b6109f5', 'Aminu', '', 'Hamisu', 'Female', '13/05/2003', 'Niger', 'Shiroro', 'Degree', 'Computer science', '22-05-24 15:36', NULL, '127.0.0.1', '19 May 2024', 'Status', ''),
(0000000016, 'ramatuasadeeq@gmail.com', '08163814126', '74bc6cd0b835542cf29aa411acabc4bf', 'Ramatu', 'Abubakar', 'Sadeeq', 'Female', '01/01/1992', 'Jigawa', 'Birniwa', 'NCE', 'Mathmathics', '08-06-24 08:40', NULL, '::1', '26 May 2024', 'Status', ''),
(0000000017, 'aliyuh@gmail.com', '04029521637', '74bc6cd0b835542cf29aa411acabc4bf', 'Aliyu', '', 'Abubakar', 'Male', '21 May 2019', 'Borno', 'Gwoza', 'HND', 'Mathmatics', '28-05-24 13:53', NULL, '::1', '28 May 2024', 'Status', ''),
(0000000018, 'khadijak@gmail.com', '04051668312', '74bc6cd0b835542cf29aa411acabc4bf', 'Khadija', '', 'Kabiru', 'Female', '01 Jan 2002', 'Gombe', 'Bajoga', 'NCE', 'English', '31-05-24 13:45', NULL, '127.0.0.1', '31 May 2024', 'Status', ''),
(0000000019, 'saadatu@gmail.com', '09051668314', '74bc6cd0b835542cf29aa411acabc4bf', 'Saadatu', 'Musa', 'Suleiman', 'Female', '02 Jan 2003', 'FCT', ' Bwari', 'Degree', 'Phamarcy', '18-06-24 21:33', NULL, '127.0.0.1', '4 June 2024', 'Status', '0'),
(0000000020, 'isyakuabkr@gmail.com', '04022541425', '74bc6cd0b835542cf29aa411acabc4bf', 'Isyaku', '', 'Abubakar', 'Male', '09 May 1990', 'FCT', 'Abaji', 'Masters', 'Mathmatics', NULL, NULL, '127.0.0.1', '4 June 2024', 'Status', '513789'),
(0000000021, 'onyebuchisunday@gmail.com', '45145254152', '74bc6cd0b835542cf29aa411acabc4bf', 'Onyebuchi', '', 'Sunday', 'Male', '07 May 1991', 'Enugu', 'Esan Central', 'PhD', 'MBBS', NULL, NULL, '127.0.0.1', '4 June 2024', 'Status', '204943'),
(0000000022, 'ikechukwu@gmail.com', '33652565265', '74bc6cd0b835542cf29aa411acabc4bf', 'Ikechukwu', '', 'Benjamin', 'Male', '11 Aug 2013', 'Anabra', 'Aguata', 'Degree', 'Computer Science', '04-06-24 17:20', NULL, '127.0.0.1', '4 June 2024', 'Status', '0'),
(0000000023, 'kabirusulaiman@gmail.com', '04111452541', '74bc6cd0b835542cf29aa411acabc4bf', 'Kabiru', 'Sulaiman', 'Sani', 'Male', '09 May 1990', 'Borno', 'Gwoza', 'HND', 'Agricultural Economy', NULL, NULL, '127.0.0.1', '5 June 2024', 'Status', '446326'),
(0000000024, 'sulaimans@gmail.com', '06022251421', '74bc6cd0b835542cf29aa411acabc4bf', 'Sulaiman', '', 'Sani', 'Male', '16 May 1972', 'FCT', 'Kuje', 'Masters', 'Economics', '05-06-24 09:30', NULL, '127.0.0.1', '5 June 2024', 'Status', '0'),
(0000000025, 'nasidi@gmail.com', '88888747487', '74bc6cd0b835542cf29aa411acabc4bf', 'Nasidi', '', 'Aliyu', 'Male', '09 May 2000', 'Kogi', 'Lokoja', 'HND', 'Accounting', '05-06-24 16:45', NULL, '127.0.0.1', '5 June 2024', 'Status', '0'),
(0000000026, 'nataala@gmail.com', '33332121232', '74bc6cd0b835542cf29aa411acabc4bf', 'Nataala', 'Sani', 'Salisu', 'Male', '01 Feb 2010', 'Gombe', 'Bajoga', 'NCE', 'Biology/physics', '05-06-24 13:47', NULL, '127.0.0.1', '5 June 2024', 'Status', '0'),
(0000000027, 'salisum@gmail.com', '01211441447', '74bc6cd0b835542cf29aa411acabc4bf', 'Salisu', '', 'Madaki', 'Male', '13 Apr 2020', 'Kogi', 'Lokoja', 'Degree', 'Economics', '05-06-24 13:52', NULL, '127.0.0.1', '5 June 2024', 'Status', '0'),
(0000000028, 'yusufl@gmail.com', '00141524142', '74bc6cd0b835542cf29aa411acabc4bf', 'Yusuf', '', 'Lamido', 'Male', '02 May 2000', 'Adamawa', 'Jada', 'Degree', 'Electrical Engeneering', '05-06-24 22:00', NULL, '127.0.0.1', '5 June 2024', 'Status', '0'),
(0000000029, 'safarau@gmail.com', '00022125212', '74bc6cd0b835542cf29aa411acabc4bf', 'Safarau', 'Aliyu', 'Aliyu', 'Female', '03 May 2010', 'Nasarawa', 'Keffi', 'HND', 'Economics', '11-06-24 20:35', NULL, '127.0.0.1', '5 June 2024', 'Status', '0'),
(0000000030, 'joy@mail.com', '00020254525', '74bc6cd0b835542cf29aa411acabc4bf', 'Joy', '', 'Chukwu', 'Female', '11/08/1991', 'Enugu', 'Central', 'HND', 'Electrical Engineering', '16-06-24 12:34', NULL, '::1', '14 June 2024', 'Status', '0'),
(0000000031, 'yinka@mail.com', '55474747447', '74bc6cd0b835542cf29aa411acabc4bf', 'Yinka', '', 'Adebayo', 'Male', '11/08/1991', 'Ondo', 'Ondo West', 'Degree', 'Computerl Engineering', '16-06-24 22:23', NULL, '::1', '16 June 2024', 'Status', '0'),
(0000000032, 'yahuza@mail.com', '05554748457', '74bc6cd0b835542cf29aa411acabc4bf', 'Yahuza', 'Muhd', 'Aliyu', 'Male', '11/08/1991', 'Jigawa', 'Kaugama', 'HND', 'Banking And Finance', '18-06-24 08:41', NULL, '::1', '18 June 2024', 'Status', '0'),
(0000000033, 'rose@mail.com', '33625632514', '74bc6cd0b835542cf29aa411acabc4bf', 'Rose', '', 'Sunday', 'Female', '08/05/2020', 'Abia', 'Aba South', 'Degree', 'Biochemistry', '29-06-24 08:18', NULL, '127.0.0.1', '18 June 2024', 'Status', '0'),
(0000000034, 'eunice@mail.com', '77747584758', '74bc6cd0b835542cf29aa411acabc4bf', 'Eunice', '', 'Sunday', 'Female', '01/01/2000', 'Ebonyi', 'Onicha', 'HND', 'Economics', '19-06-24 22:08', NULL, '::1', '19 June 2024', 'Status', '0'),
(0000000035, 'adeleke@mail.com', '03254152632', '74bc6cd0b835542cf29aa411acabc4bf', 'Adeleke', '', 'Adekunle', 'Male', '02/04/1992', 'Osun', 'Ejigbo', 'Masters', 'Banking And Finance', NULL, NULL, '::1', '21 June 2024', 'Status', '353110'),
(0000000036, 'khadija@mail.com', '200021215252', '74bc6cd0b835542cf29aa411acabc4bf', 'Khadija', 'Musa', 'Usman', 'Female', '17 Aug 1994', 'Sokoto', 'Wamako', 'Degree', 'Computer Studies', '27-06-24 17:39', NULL, '127.0.0.1', '27 June 2024', 'Status', '0'),
(0000000037, 'ademola@mail.com', '22544144441', '74bc6cd0b835542cf29aa411acabc4bf', 'Ademola', '', 'Adaleke', 'Male', '03 May 1971', 'Ekiti', 'Ezeagu', 'Degree', 'Computer Engineering', '29-06-24 12:51', NULL, '127.0.0.1', '29 June 2024', 'Status', '0');

-- --------------------------------------------------------

--
-- Table structure for table `myquiz`
--

CREATE TABLE `myquiz` (
  `id` int(255) NOT NULL,
  `CourseCode` text,
  `RefId` varchar(60) NOT NULL,
  `que` text NOT NULL,
  `A` text NOT NULL,
  `B` text NOT NULL,
  `C` text NOT NULL,
  `D` text NOT NULL,
  `ans` text NOT NULL,
  `userans` text,
  `timer` varchar(50) NOT NULL DEFAULT '03:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myquiz`
--

INSERT INTO `myquiz` (`id`, `CourseCode`, `RefId`, `que`, `A`, `B`, `C`, `D`, `ans`, `userans`, `timer`) VALUES
(1, 'PHP01', '1714812185', 'What Does PHP Stand For?', 'preprocessed hypertext page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'C', '', '5:0'),
(2, 'PHP01', '1714812185', 'What will be the value of $var? ', '0', '1', '2', 'NULL', 'A', '', ''),
(3, 'PHP01', '1714812185', ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'B', '', ''),
(4, 'PHP01', '1714812185', 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'D', '', ''),
(5, 'PHP01', '1714812185', 'NITDA is acronym for? ', 'National institute development Agency', 'Nation information technology development Agency', 'National Information Technology Development Agency', 'National Technology Development Agency', 'C', '', ''),
(6, 'PHP01', '1714812185', 'what does HTML stands for?', 'Hypertext mark up language', 'hyper tech mark law', 'hypo transmission mark location', 'hyper mark up language', 'A', '', '03:00'),
(7, 'PHP01', '1714812185', 'what does CPU stands for?', 'Central Processing unit', 'centre processor', 'central protocol unit', 'centre process unit', 'A', 'centre processor', '03:00'),
(9, 'PHP01', '1714812185', 'Java Script Is?', 'serversite scriptinh', 'Client Site Scripting Luangauge', 'Web Styling Script', 'Database Language', 'B', NULL, '03:00'),
(10, 'A', '1712935961', 'What Does LAN Stand For?', 'local available network ', 'Local Area Network', 'Lock Application Network', 'Local Air Network', 'B', NULL, '03:00'),
(13, 'A ', '1712935961', 'Which Of The Following Type Of Network Confined In A Small Building Or Area?', 'man', 'WAN', 'Internet', 'LAN', 'D', NULL, '03:00'),
(14, 'CS01', '1712935964', 'An Attack To The Network Or The Computer System By Some Person With Authorized System Access Is Known As?', 'intruder', ' Insider Attack', 'Hacker', 'Theft Identity', 'B', NULL, '03:00'),
(15, 'CS01', '1712935964', 'The Motive Of The Insider Attack Could Be?', 'revenge or greed', 'Destruction', 'Mantainance', 'Trobleshooting', 'A', NULL, '03:00'),
(16, 'CS01', '1712935964', 'When The Attacker Is Either Hired By An Insider Or An External Entity To The Organization, It Is Known As?', 'external attack', 'Firewalls Attack', 'Internal Attack', 'User Attack', 'A', NULL, '03:00'),
(20, 'CS01', '', 'These Attacks Are Generally Performed By Amateurs Who Do Not Have Any Predefined Motive To Perform The Cyber Attack.', 'internal attack', 'External Attack', 'Structured Attacks', 'Unstructured Attacks', 'D', NULL, '03:00'),
(21, 'CS01', '', 'A Black-Hat Hackers-----------', 'engages in cybercrime operations and uses hacking for financial gain.', 'Security Specialists', 'Engage In Destroying Software', 'Analises The The Network Architecture For Optimisation', 'A', NULL, '03:00'),
(22, 'CS01', '', 'A White-Hat Hackers Is Also Called?', ' ethical hacker', 'Cybercriminals', 'Dangerous Hacker', 'Criminal Hacker', 'A', NULL, '03:00'),
(23, 'JAVA402', '1715383949', 'When You Write A Java Program, You Design And Construct A Set Of', 'variables', 'Clases', 'Intances', 'Parameters', 'B', NULL, '03:00'),
(25, 'JAVA402', '1715383949', 'Which Of The Following Is The Correct Class Declaration', 'class class_name', 'Class Class_name{\r\n}', 'Class Class_name[\r\n]', 'Class Class_name(\r\n)', 'B', NULL, '03:00'),
(33, 'JAVA402', '1715383949', 'Which Of The Following Is The Correct Class Declaration In Java?', 'class class_name', 'Class Class_name{</br>}', 'Class Class_name[</br>]', 'Class Class_name(</br>)', 'B', NULL, '03:00'),
(34, 'JAVA402', '1715383949', 'In order to write Java programs, you will, of course, need a Java development environment known as_________', 'JDK', 'SDK', 'JSK', 'Java envirpment', 'A', NULL, '03:00'),
(35, 'JAVA402', '1715383949', 'JDK means?', 'Java data kit', 'Java development knowledge', 'Java development kit', 'Non of the above', 'C', NULL, '03:00'),
(36, 'JAVA402', '1715383949', 'Which of the following is the correct statement to display hello world', 'Java.print("Hello World!");', 'System.out.println(â€œHello World!â€);', 'Java.out.println(â€œHello World!â€);', 'System.out(â€œHello World!â€);', 'B', NULL, '03:00'),
(37, 'JAVA402', '1715383949', 'To create a subclass a_________ keyword is used.', 'Subclass', 'extends', 'Inherit', 'String', 'B', NULL, '03:00'),
(38, 'JAVA402', '1715383949', 'Select the correct statement to call the main method in Java.', 'public static void main (String args[]) {', 'public static extends main (String args[]) {', 'public void main (String args[]) {', 'public static main void (String args[]) {', 'A', NULL, '03:00'),
(39, 'JAVA402', '1715383949', 'Java was developed by', 'Microsoft corporation', 'IBM', 'Intel', 'Sun Microsystem', 'D', NULL, '03:00'),
(40, 'JAVA402', '1715383949', 'A global variable is created using______keyword.', 'Private', 'Global', 'Public', 'Double', 'C', NULL, '03:00'),
(41, 'AI401', '1714993759', 'The following are types of AI (Based on Capabilities) except?', 'Weak or narrow AI', 'General AI', 'Strong AI', 'Robotic AI', 'D', NULL, '03:00'),
(42, 'AI401', '1714993759', 'Weak or narrow AI perform a predefined narrow set of\r\ninstructions_____________', 'with thinking capability.', 'without exhibiting any thinking capability.', 'that surpass the capacity of human.', 'with complex problem solving.', 'B', NULL, '03:00'),
(43, 'AI401', '1714993759', 'General AI  is the type of AI which can perform the tasks_______', 'like what human can\r\ndo', 'close to what human can\r\ndo.', 'more than what human can\r\ndo.', 'that human can not do,', 'A', NULL, '03:00'),
(44, 'AI401', '1714993759', 'Strong AI is the type of AI in which it is expected that the machine______.', 'will surpass\r\nthe capacity of human', 'can not surpass\r\nthe capacity of human', 'may solve complex problem', 'can not excel human capability', 'A', NULL, '03:00'),
(45, 'AI001', '1714993602', 'Artificial Intelligence is a computing concept that helps a\r\nmachine', 'think and solve complex  problems', 'think and create complex  problems', 'display problem', 'highlight problems', 'A', NULL, '03:00'),
(46, 'AI001', '1714993602', 'Real life robots_________', 'perform task they are not programmed to execute.', 'perform task they are programmed to execute.', 'perform task beyond what they are programmed to execute.', 'performs task outside what they are programmed to execute', 'B', NULL, '03:00'),
(47, 'AI001', '1714993602', 'The deep learning process\r\ninvolves something called_______', 'a neural network.', 'Simulation.', 'machine learning.', 'pattern recognition.', 'A', NULL, '03:00'),
(48, 'AI001', '1714993602', 'Which of the following is a machine learning process?', 'Supervised learning.', 'Unsupervised learning.', 'Reinforcement learning.', 'All of the above', 'D', NULL, '03:00');

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
(0000000004, '1715242902', 'PHP01', 'Basic PHP Syntax', '<b>ABSTRACT</b></br>\r\n\r\nVictual Integrated Control offices &shy;(VICO) is a human\r\nresource management software designed and development to perform human resource\r\nmanagement. Human Resource Management (HRM) is the term used describe formal\r\nsystem devices for the management of people within an organization. The\r\nresponsibilities of a human resources manager fall in to three major areas: staffing,\r\nemployee compensation and benefits, and defining/designing work. Essentially, the\r\npurpose of HRM is to minimize the productivity of an organization by optimizing\r\nthe effectiveness of IT employees. This mandate is unlikely to change in any\r\nfundamental away, despite the ever-increasing pace of change in the business\r\nworld. AS Edward L. Gubman observed in the journal of business Strategy â€˜â€™the\r\nbasic mission of human resources will always be to acquire, develop. And retain\r\ntalent; align the workforce with the business; and excellent contributor to the\r\nbusiness. Those three challenges will never change.â€™â€™\r\n\r\n&nbsp;\r\n\r\nUntil fairly recently, an organizationâ€™s human\r\nresources department was often consigned to lower rungs of the corporate hierarchy,\r\ndespite the fact that its mandate is to replenish what is often\r\ncited-legitimately-; as an organizationâ€™s greater resource, itsâ€™s work force.\r\nBut in resent years recognition of the importance of human resource management\r\nto a companyâ€™s overall health has grown dramatically. This recognition of\r\nimportance of HRM extends to small businesses, for while they do not generally\r\nhave the same volume of human resources requirements as do larger\r\norganizations, they too face personnel management issues that can have decisive\r\nimpact on business health. As Irving Bustiner commented in the small business\r\nHandbook, â€˜â€™hiring the right people and training them well can often mean the\r\ndifference between scratching out the barest of livelihood and steady business\r\ngrowthâ€™â€™. Personnel problems do not discriminate between small and big\r\nbusiness. You find them in all businesses, regardless of size.â€™â€™\r\n\r\n&nbsp;\r\n\r\nHuman resources management is concerned with the\r\ndevelopment of both individuals and the organization in which they operate.\r\nHRM, then, is engaged not only in securing and developing the talent of\r\nindividual workers; but also implementing programs that enhance communication\r\nand cooperation between those individual workers in order to nurture\r\norganization development.\r\n\r\n&nbsp;\r\n\r\nThe primary responsibilities associated with human\r\nresources management include: job analysis staffing, organization of work\r\nforce, measurement and appraisal of work force performance, implementation of\r\nreward systems for employee; professional development of workers, and\r\nmaintenance of work force.'),
(0000000005, '1716505509', 'CCNA3', 'Introduction To CCN', 'In this unit, we shall provide a foundation for this course on the Internet of Things \r\n(IoT). To achieve this, some basic concepts of Things and the Internet are discussed. \r\nThe definitions of IoT and the essential Characteristics of IoT. Specifically, different \r\napplications of IoT will be described and diagrammatic representation will be \r\npresented to aid the understanding of the remaining part of this course.\r\n&lt;/br&gt;&lt;b&gt;Overview&lt;/b&gt;&lt;p?<span>A thing, in the respect to the Internet of things (IoT), is a physical object with a unique \r\nidentifier, an embedded system, and the capability to transfer data over a network and \r\nactuators that permit things to act (such as to open or close a door, to switch on or off \r\nthe light, to increase or decrease engine rotation speed and more). Things are objects \r\nof the physical world (physical things) or of the information world (virtual world) \r\nwhich are capable of being identified and integrated into communication networks. \r\nThings have associated information, which can be static or dynamic.\r\nPhysical things exist in the physical world and are capable of being sensed, actuated,\r\nand connected. Examples of physical things include the surrounding environment, \r\nindustrial robots, goods, and electrical equipment. \r\nVirtual things exist in the information world and are capable of being stored, \r\nprocessed, and accessed. Examples of virtual things include multimedia content and \r\napplication software.<br></span>'),
(0000000006, '1716505554', 'CCNA3', 'Introduction To CCN', '<span>In this unit, we shall provide a foundation for this course on the Internet of Things \r\n(IoT). To achieve this, some basic concepts of Things and the Internet are discussed. \r\nThe definitions of IoT and the essential Characteristics of IoT. Specifically, different \r\napplications of IoT will be described and diagrammatic representation will be \r\npresented to aid the understanding of the remaining part of this course.\r\n<br><b>Overview</b></span><span>A thing, in the respect to the Internet of things (IoT), is a physical object with a unique \r\nidentifier, an embedded system, and the capability to transfer data over a network and \r\nactuators that permit things to act (such as to open or close a door, to switch on or off \r\nthe light, to increase or decrease engine rotation speed and more). Things are objects \r\nof the physical world (physical things) or of the information world (virtual world) \r\nwhich are capable of being identified and integrated into communication networks. \r\nThings have associated information, which can be static or dynamic.\r\nPhysical things exist in the physical world and are capable of being sensed, actuated,\r\nand connected. Examples of physical things include the surrounding environment, \r\nindustrial robots, goods, and electrical equipment. \r\nVirtual things exist in the information world and are capable of being stored, \r\nprocessed, and accessed. Examples of virtual things include multimedia content and \r\napplication software.<br></span>'),
(0000000007, '1716505618', 'CCNA3', 'Introduction To CCN', '<span>In this unit, we shall provide a foundation for this course on the Internet of Things \r\n(IoT). To achieve this, some basic concepts of Things and the Internet are discussed. \r\nThe definitions of IoT and the essential Characteristics of IoT. Specifically, different \r\napplications of IoT will be described and diagrammatic representation will be \r\npresented to aid the understanding of the remaining part of this course.\r\n<br><b>Overview</b></span><span>A thing, in the respect to the Internet of things (IoT), is a physical object with a unique \r\nidentifier, an embedded system, and the capability to transfer data over a network and \r\nactuators that permit things to act (such as to open or close a door, to switch on or off \r\nthe light, to increase or decrease engine rotation speed and more). Things are objects \r\nof the physical world (physical things) or of the information world (virtual world) \r\nwhich are capable of being identified and integrated into communication networks. \r\nThings have associated information, which can be static or dynamic.\r\nPhysical things exist in the physical world and are capable of being sensed, actuated,\r\nand connected. Examples of physical things include the surrounding environment, \r\nindustrial robots, goods, and electrical equipment. \r\nVirtual things exist in the information world and are capable of being stored, \r\nprocessed, and accessed. Examples of virtual things include multimedia content and \r\napplication software.<br></span>');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(5) NOT NULL,
  `correct_answer` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `correct_answer`) VALUES
(1, '4'),
(2, 'Paris');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text,
  `timer` varchar(50) NOT NULL DEFAULT '03:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`, `timer`) VALUES
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', '', '5:0'),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', '', ''),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', '', ''),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', '', ''),
(5, 'NITDA is acronym for? ', 'National institute development Agency', 'Nation information technology development Agency', 'National Information Technology Development Agency', 'National Technology Development Agency', 'National Information Technology Development Agency', '', ''),
(6, 'what does HTML stands for?', 'Hypertext mark up language', 'hyper tech mark law', 'hypo transmission mark location', 'hyper mark up language', 'Hypertext mark up language', '', '03:00'),
(7, 'what does CPU stands for?', 'Central Processing unit', 'centre processor', 'central protocol unit', 'centre process unit', 'Central Processing unit', '', '03:00');

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
  `Password` varchar(255) NOT NULL,
  `DateCreated` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Fname`, `Sname`, `Mname`, `Email`, `Phoneno`, `Role`, `Status`, `Password`, `DateCreated`) VALUES
(0001, 'Bash', 'Hadejia', 'A', 'bashhdj@gmail.com', '08039521637', 'Administrator', 'Active', '74bc6cd0b835542cf29aa411acabc4bf', '12 April 2024'),
(0002, 'Basiru', 'Muhammad', '', 'bashhdjbox@gmail.com', '07039521637', 'Instructor', 'Active', '74bc6cd0b835542cf29aa411acabc4bf', '12 April 2024'),
(0003, 'Test', 'Tester', '', 'bashhdjboxt@gmail.com', '07039521638', 'Instructor', 'Inactive', '59b3f8b2cd04aebd139545a7b62bea30', '13 April 2024'),
(0008, 'Muhd', 'Suleiman', '', 'muhammadyako4y@gmail.com', '02051668306', 'Administrator', 'Active', '59b3f8b2cd04aebd139545a7b62bea30', '2 May 2024'),
(0009, 'Muhd', 'Suleiman', '', 'muhammadyako4ue@gmail.com', '02051668306', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '2 May 2024'),
(0010, 'Muhd', 'Suleiman', '', 'muhammadyako4u2@gmail.com', '07032323232', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '2 May 2024'),
(0011, 'Muhd', 'Suleiman', '', 'muhammadyako4u3@gmail.com', '08039521637', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '2 May 2024'),
(0012, 'Muhd', 'Suleiman', '', 'muhammadyako4u4@gmail.com', '07039521637', 'Administrator', 'Active', '07034665224', '2 May 2024'),
(0013, 'Nitda', 'User', '', 'nitda@user.com', '08039521637', 'Instructor', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '3 May 2024'),
(0014, 'Abubakar', 'Idris', 'Yusuf', 'abubakar@gmail.com', '08039521637', 'Administrator', 'Active', '0c71db8b0a3c86d91dfad21bbe87a686', '6 May 2024'),
(0015, 'Sha1', 'User', '', 'sha1@gmail.com', '08039521637', 'Administrator', 'Active', 'a780271eaed428399f3faed98cfdb1bfe669f65a', '7 May 2024'),
(0016, 'Sha12', 'User', '', 'sha12@gmail.com', '08039521637', 'Administrator', 'Active', '6c42144edc0958583789c1b50ccda21a2379f474', '7 May 2024'),
(0017, 'Muhammad', 'Suleiman', 'Abdullahi', 'muhammadyako4u@gmail.com', '07034665224', 'Administrator', 'Active', '12d2396f19ac7d335c5c689ff8840fa7', '7 May 2024'),
(0018, 'Aminu', 'Abdullahi', '', 'aminu@mail.com', '01025145212', 'Instructor', 'Active', '01025145212', '13 May 2024'),
(0019, 'Gcyber', 'Global', '', 'gcyber@gmail.com', '07051668306', 'Administrator', 'Active', '$2y$10$eQD0GSvXMViwuaT831AKuOWA9YIbAIR5en5YaW24uZOxmU9NPnE4a', '21 May 2024'),
(0020, 'Ayuba', 'Aliyu', '', 'ayuba@gmail.com', '04051668306', 'Administrator', 'Active', '04051668306', '22 May 2024'),
(0021, 'Ayuba', 'Aliyu', '', 'ayubaak@gmail.com', '03051668306', 'Administrator', 'Active', '03051668306', '22 May 2024'),
(0022, 'Khadiza', 'Aliyu', '', 'khadija@gmail.com', '03053554477', 'Administrator', 'Active', '03053554477', '22 May 2024'),
(0023, 'Khadiza', 'Muhammad', 'Sani', 'khadijasani@gmail.com', '03053554478', 'Administrator', 'Active', '03053554478', '22 May 2024');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `VideoId` int(10) NOT NULL,
  `Ref` varchar(60) NOT NULL,
  `Source` varchar(10) NOT NULL,
  `Url` varchar(100) DEFAULT NULL,
  `CourseCode` varchar(20) NOT NULL,
  `VideoTitle` varchar(200) NOT NULL,
  `FileName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`VideoId`, `Ref`, `Source`, `Url`, `CourseCode`, `VideoTitle`, `FileName`) VALUES
(34, '0144774441', '', NULL, 'CCNA3', 'Basic Components Of Networking', 'CCNA3Basic Components Of Networking.mp4'),
(33, '0144774442', '', NULL, 'CCNA3', 'CCNA Overview', 'CCNA3CCNA Overview.mp4'),
(32, '0144774443', '', NULL, 'CS01', 'Cyber Security Basics Threat 3', 'CS01Cyber Security Basics Threat 3.mp4'),
(31, '0144774444', '', NULL, 'CS01', 'Cyber Security Basics Threat 2', 'CS01Cyber Security Basics Threat 2.mp4'),
(30, '0144774445', '', NULL, 'CS01', 'Cyber Security Basics Threat', 'CS01Cyber Security Basics Threat.mp4'),
(29, '0144774446', '', NULL, 'CS01', 'Cyber Security Essential', 'CS01Cyber Security Essential.mp4'),
(28, '0144774447', '', NULL, 'A+', 'Security System', 'A+Security System.mp4'),
(27, '0144774448', '', NULL, 'A+', 'Basics Of The IoT', 'A+Basics Of The IoT.mp4'),
(26, '0144774449', '', NULL, 'A+', 'Home Applications', 'A+Home Applications.mp4'),
(35, '0144774451', 'Internal', '', 'AI001', 'Artificial Intelligence Applications', 'AI001Artificial Intelligence Applications.mp4'),
(36, '0144774452', 'Youtube', 'Yq0QkCxoTHM', 'AI001', 'Introdtuction To Artificial Intelligence', 'AI001Artificial Intelligence Applications.mp4'),
(37, '0144774453', 'Youtube', 'ad79nYk2keg', 'AI001', 'Artificial Intelligence Basics', 'AI001Artificial Intelligence Applications.mp4'),
(38, '0144774454', 'Youtube', 'FWOZmmIUqHg', 'AI001', 'Artificial Intelligence Applications Overview', 'AI001Artificial Intelligence Applications.mp4'),
(39, '0144774455', '', NULL, 'PHP01', 'PHP Basic Class Declaration', 'PHP01.mp4'),
(40, '0144774456', '', NULL, 'CCNA3', 'Basic Security Architecture', 'CCNA3.mp4'),
(41, '1718471898', 'Youtube', 'mAtkPQO1FcA', 'JAVA402', 'Introduction', 'JAVA402.mp4'),
(44, '1718547171', 'Internal', '', 'AI401', 'How The AI Works', 'AI401.mp4'),
(45, '1718558862', 'Internal', '', 'AI401', 'AI Versus Machine Learning', 'AI401AI Versus Machine Learning.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `VId` int(10) NOT NULL,
  `Year` varchar(10) NOT NULL DEFAULT '0',
  `January` varchar(10) NOT NULL DEFAULT '0',
  `February` varchar(10) NOT NULL DEFAULT '0',
  `March` varchar(10) NOT NULL DEFAULT '0',
  `April` varchar(10) NOT NULL DEFAULT '0',
  `May` varchar(10) NOT NULL DEFAULT '0',
  `June` varchar(10) NOT NULL DEFAULT '0',
  `July` varchar(10) NOT NULL DEFAULT '0',
  `August` varchar(10) NOT NULL DEFAULT '0',
  `September` varchar(10) NOT NULL DEFAULT '0',
  `October` varchar(10) NOT NULL DEFAULT '0',
  `November` varchar(10) NOT NULL DEFAULT '0',
  `December` varchar(10) NOT NULL DEFAULT '0',
  `Total` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`VId`, `Year`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`, `Total`) VALUES
(1, '2024', '0', '0', '0', '0', '0', '3967', '71', '0', '0', '0', '0', '0', '4038'),
(2, '2025', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '2026', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '2027', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '2028', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '2029', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '2030', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '2031', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

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
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`CId`);

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
-- Indexes for table `myquiz`
--
ALTER TABLE `myquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outline`
--
ALTER TABLE `outline`
  ADD PRIMARY KEY (`OId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);

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
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`VId`);

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
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `CId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `courselimit`
--
ALTER TABLE `courselimit`
  MODIFY `LId` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `EbookId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `EId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `learner`
--
ALTER TABLE `learner`
  MODIFY `LId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `myquiz`
--
ALTER TABLE `myquiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `outline`
--
ALTER TABLE `outline`
  MODIFY `OId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `VideoId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
