-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2014 at 01:00 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sti`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `code`, `title`) VALUES
(6, 'BSCS', 'Bachelor in Science in Computer Science'),
(7, 'BSAT', 'Bachelor in Science in Accounting Technology'),
(8, 'BSIT', 'Bachelor in Science in Information Technology'),
(9, 'IT', 'Information Technology'),
(10, 'CET', 'Computer and Electronics Technology');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `gen_ave` varchar(30) NOT NULL,
  `school_year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `unit` int(11) NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=678 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `student_id`, `subject_id`, `gen_ave`, `school_year`, `semester`, `remarks`, `unit`) VALUES
(663, 51, 131, '1.50', 'First Year', '1st', 'Very Good', 3),
(664, 51, 132, '1.50', 'First Year', '1st', 'Very Good', 3),
(665, 51, 133, '1.25', 'First Year', '1st', 'Very Good', 3),
(666, 51, 134, '1.25', 'First Year', '1st', 'Very Good', 4),
(667, 51, 135, '1.25', 'First Year', '1st', 'Very Good', 1),
(668, 51, 136, '1.00', 'First Year', '1st', 'Excellent', 3),
(669, 51, 137, '1.00', 'First Year', '1st', 'Excellent', 2),
(670, 51, 138, '1.00', 'First Year', '1st', 'Excellent', 3),
(671, 23, 163, '1.00', 'First Year', '2nd', 'Excellent', 3),
(672, 23, 164, '1.00', 'First Year', '2nd', 'Excellent', 4),
(673, 23, 165, '1.00', 'First Year', '2nd', 'Excellent', 4),
(674, 23, 166, '1.00', 'First Year', '2nd', 'Excellent', 3),
(675, 23, 168, '1.00', 'First Year', '2nd', 'Excellent', 3),
(676, 23, 169, '1.00', 'First Year', '2nd', 'Excellent', 2),
(677, 23, 170, '1.00', 'First Year', '2nd', 'Excellent', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `student_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `student_status` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `lastname`, `password`, `gender`, `course`, `address`, `contact`, `photo`, `student_no`, `status`, `year_level`, `term`, `student_status`) VALUES
(22, 'Jonnel Ray', 'Acostoy', 'j', 'Male', 'BSIT', 'Bacolod', '09362154039', 'upload/19690_419968988091510_2003011347_n.jpg', '01720100001', 'active', 'First Year', '1st', 'Irregular'),
(23, 'JR', 'Ang', 'r', 'Male', 'BSIT', 'Bacolod', '09382651402', 'upload/69624_419989601422782_90451266_n.jpg', '01720100002', 'active', 'First Year', '2nd', 'Regular'),
(24, 'Wendell', 'Francisco', 'w', 'Male', 'BSIT', 'Bacolod', '09358462054', 'upload/69624_419989601422782_90451266_n.jpg', '01720100003', '', 'First Year', '1st', 'Irregular'),
(25, 'Jade ', 'Omangayon', 'j', 'Male', 'BSIT', 'Bacolod', '0125487568', 'upload/72920_419993158089093_1036712210_n.jpg', '01720100004', '', 'First Year', '2nd', 'Regular'),
(26, 'Clarisse Joanne', 'Quinto', 'cj', 'Female', 'BSIT', 'Silay', '09658589848', 'upload/69624_419989601422782_90451266_n.jpg', '01720100005', '', 'First Year', '2nd', 'Irregular'),
(27, 'Aldrin Jay', 'Fuentes', 'aj', 'Male', 'BSIT', 'Saravia', '09365487236', 'upload/222683_419992111422531_710097129_n.jpg', '01720100006', '', 'Fourth', '', ''),
(28, 'Daresa ', 'Alolor', 'd', 'Female', 'BSIT', 'Silay', '0236875462', 'upload/19729_419991678089241_651129214_n.jpg', '01720100007', '', 'Fourth', '', ''),
(29, 'Mariestella', 'Santillan', 'm', 'Female', 'BSIT', 'Silay', '03269587456', 'upload/222754_419991128089296_1808353796_n.jpg', '01720100008', '', 'Fourth', '', ''),
(30, 'Oliver', 'Martinez', 'o', 'Male', 'BSIT', 'Catabla', '02147569865', 'upload/67281_419969851424757_397713077_n.jpg', '01720100009', '', 'Fourth', '', ''),
(31, 'Reyden', 'Lamig', 'r', 'Male', 'BSIT', 'Talisay', '09025487562', 'upload/223397_419990678089341_1327250400_n.jpg', '01720100010', '', 'Fourth', '', ''),
(32, 'Arjay', 'Valladarez', 'a', 'Male', 'BSIT', 'Bacolod', '09365482614', 'upload/222610_419988838089525_2056922731_n.jpg', '01720100011', '', 'Fourth', '', ''),
(33, 'Ricky', 'Hegino', 'r', 'Male', 'BSIT', 'Victorias', '09365425879', 'upload/69624_419989601422782_90451266_n.jpg', '01720100012', '', 'Third', '', ''),
(34, 'Kayvin Joshua', 'Nobleza', 'k', 'Male', 'BSIT', 'Talisay', '09587463259', 'upload/19729_419991804755895_1497610900_n.jpg', '01720100013', '', 'Third', '', ''),
(35, 'Dave', 'Macellana', 'd', 'Male', 'BSIT', 'Talisay', '02587496584', 'upload/28887_419991644755911_1991666035_n.jpg', '01720100014', '', 'Third', '', ''),
(36, 'Neri James', 'Yusala', 'j', 'Male', 'BSIT', 'Bacolod', '09065484120', 'upload/23905_10152405107074240_1249032324_n.jpg', '01720100015', 'active', 'Third', '', ''),
(37, 'Neri James', 'Yusala', 'nj', 'Male', 'BSIT', 'Bacolod', '09065484120', 'upload/11353_419989368089472_1146683879_n.jpg', '01720100016', '', 'Third', '', ''),
(38, 'Ziek', 'Lumogdang', 'z', 'Male', 'BSIT', 'Bacolod', '09657845623', 'upload/69624_419989601422782_90451266_n.jpg', '01720100017', '', 'Second', '', ''),
(39, 'Jay', 'Hegino', 'j', 'Male', 'BSIT', 'Talisay', '09050624568', 'upload/64818_419991544755921_1245275723_n.jpg', '01720100018', '', 'Second', '', ''),
(40, 'Kris', 'Mayo', 'k', 'Female', 'BSIT', 'Silay', '09325487123', 'upload/44351_419991981422544_242320805_n.jpg', '01720100019', '', 'Second', '', ''),
(41, 'Dannie', 'Villarias', 'd', 'Female', 'BSIT', 'Silay', '09382546201', 'upload/222610_419988838089525_2056922731_n.jpg', '01720100020', '', 'Second', '', ''),
(42, 'Christine', 'Diaz', 'c', 'Female', 'BSIT', 'Saravia', '09365481254', 'upload/19729_419991804755895_1497610900_n.jpg', '01720100021', '', 'First', '', ''),
(43, 'Gemar', 'Diaz', 'g', 'Male', 'BSIT', 'Talisay', '09093652140', 'upload/222683_419992111422531_710097129_n.jpg', '01720100022', '', 'First', '', ''),
(44, 'Jing', 'Fuentes', 'j', 'Female', 'BSIT', 'Silay', '09482635001', 'upload/67281_419969851424757_397713077_n.jpg', '01720100023', '', 'First', '', ''),
(45, 'Maica', 'Santillan', 'm', 'Female', 'BSIT', 'Saravia', '09365875623', 'upload/72920_419993158089093_1036712210_n.jpg', '01720100024', '', 'First', '', ''),
(46, 'Laarnie', 'Sanchez', 'l', 'Female', 'BSIT', 'Bacolod', '09394856230', 'upload/149434_419992328089176_2137045757_n.jpg', '01720100025', '', 'First', '', ''),
(47, 'Econ', 'Villacampa', 'e', 'Female', 'BSCS', 'Silay', '09364756201', 'upload/222754_419991128089296_1808353796_n.jpg', '01720100026', '', 'Fourth', '', ''),
(48, 'Julius', 'Vistar', 'sti', 'Male', 'BSIT', 'Bacolod', '09385214562', 'upload/28887_419991644755911_1991666035_n.jpg', '01720100054', 'active', 'Fourth', '', ''),
(50, 'john kevin ', 'lorayna ', 'teph', '', 'BSIT', '', '', 'upload/1240518_10200243579963092_2073745461_n.jpg', '100175', 'active', 'First Year', '2nd', 'Irregular'),
(51, 'leocadio', 'lea', 'm', '', 'BSIT', '', '', 'upload/14179_560838690598595_2144623357_s.jpg', '00002', 'active', 'First Year', '1st', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `year` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `pre_requisites` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `code`, `title`, `unit`, `year`, `term`, `pre_requisites`, `course_id`) VALUES
(131, 'ALGEBRA', 'Algebra', '3', 'First Year', '1st', '', 8),
(132, 'COMART1', 'Communication Arts 1', '3', 'First Year', '1st', '', 8),
(133, 'COMPFUND', 'Computer Fundamentals', '3', 'First Year', '1st', '', 8),
(134, 'COPRO-1', 'Computer Programming 1', '4', 'First Year', '1st', '', 8),
(135, 'MATPLUS', 'Math Plus', '1', 'First Year', '1st', '', 8),
(136, 'NSTP001', 'National Service Training Program 1*', '3', 'First Year', '1st', '', 8),
(137, 'PHYEDU1', 'Physical Education 1', '2', 'First Year', '1st', '', 8),
(138, 'PROFETH', 'Professional Ethics with Values Formation', '3', 'First Year', '1st', '', 8),
(139, 'ALGEBRA', 'Algebra', '3', 'First Year', '1st', '', 6),
(140, 'BASICON', 'Basic Computer Concepts', '3', 'First Year', '1st', '', 6),
(141, 'COMART1', 'Communication Arts 1', '3', 'First Year', '1st', '', 6),
(142, 'COPRO-1', 'Computer Programming 1', '4', 'First Year', '1st', '', 6),
(143, 'MATPLUS', 'Math Plus', '1', 'First Year', '1st', '', 6),
(144, 'NSTP001', 'National Service Training Program 1*', '3', 'First Year', '1st', '', 6),
(145, 'OFFPRO1', 'Office Productivity Tools 1', '1', 'First Year', '1st', '', 6),
(146, 'PHYEDU1', 'Physical Education 1', '2', 'First Year', '1st', '', 6),
(147, 'PROFETH', 'Professional Ethics with Values Formation', '3', 'First Year', '1st', '', 6),
(148, 'COLALGE', 'College Algebra', '3', 'First Year', '1st', 'MATPLUS', 7),
(149, 'COMART1', 'Communication Arts 1', '3', 'First Year', '1st', '', 7),
(150, 'COMPFUND', 'Computer Fundamentals', '3', 'First Year', '1st', '', 7),
(151, 'MATPLUS', 'Math Plus', '1', 'First Year', '1st', 'COLALGE', 7),
(152, 'NSTP001', 'National Service Training Program 1*', '3', 'First Year', '1st', '', 7),
(153, 'PHYEDU1', 'Physical Education 1', '2', 'First Year', '1st', '', 7),
(154, 'PRINMGT', 'Principles of Management', '3', 'First Year', '1st', '', 7),
(155, 'COMART2', 'Communication Arts 2', '3', 'First Year', '2nd', 'COMART1', 6),
(156, 'COPRO-2', 'Computer Programming 2', '4', 'First Year', '2nd', 'COPRO-1', 6),
(157, 'DATSRUC', 'Data Structures', '4', 'First Year', '2nd', 'COPRO-1', 6),
(158, 'DISTRUC', 'Discrete Structures', '3', 'First Year', '2nd', 'ALGEBRA', 6),
(159, 'NSTP002', 'National Service Training Program 2', '3', 'First Year', '2nd', '', 6),
(160, 'OFFPRO1', 'Office Productivity Tools 2', '1', 'First Year', '1st', 'OFFPRO1', 6),
(161, 'PHYEDU1', 'Physical Education 2', '2', 'First Year', '2nd', 'PHYEDU1', 6),
(162, 'TRIGONO', 'Trigonometry', '3', 'First Year', '2nd', 'ALGEBRA', 6),
(163, 'COMART2', 'Communication Arts 2', '3', 'First Year', '2nd', 'COMART1', 8),
(164, 'COPRO-2', 'Computer Programming 2', '4', 'First Year', '2nd', 'COPRO-1', 8),
(165, 'DATSRUC', 'Data Structures', '4', 'First Year', '2nd', 'COPRO-1', 8),
(166, 'DISTRUC', 'Discrete Structures', '3', 'First Year', '2nd', 'COPRO-1', 8),
(168, 'NTROART', 'Introduction to Arts', '3', 'First Year', '2nd', '', 8),
(169, 'PHYEDU2', 'Physical Education 2', '2', 'First Year', '2nd', 'PHYEDU1', 8),
(170, 'TRIGONO', 'Trigonometry', '3', 'First Year', '2nd', 'ALGEBRA', 8),
(171, 'COMART2', 'Communication Arts 2', '3', 'First Year', '2nd', 'COMART1', 7),
(172, 'FILIP01', 'Komunikasyon sa Akademikong Filipino', '3', 'First Year', '2nd', '', 7),
(173, 'FUNACCT1', 'Fundamentals of Accounting 1', '6', 'First Year', '2nd', '', 7),
(174, 'MATINVE', 'Mathematics of Investment', '3', 'First Year', '2nd', 'COLALGE', 7),
(175, 'NSTP002', 'National Service Training Program 2', '3', 'First Year', '2nd', '', 7),
(176, 'PHYEDU2', 'Physical Education 2', '2', 'First Year', '2nd', 'PHYEDU1', 7),
(177, 'PRIMARK', 'Principles and Methods of Marketing', '3', 'First Year', '2nd', '', 7),
(178, 'COMART3', 'Communication Arts 3', '3', 'Second Year', '1st', 'COMART2', 8),
(179, 'COMART3', 'Communication Arts 3', '3', 'Second Year', '1st', 'COMART2', 8),
(180, 'COPRO-3', 'Computer Programming 3', '4', 'Second Year', '1st', 'COPRO-2', 8),
(181, 'LOGSIGN', 'Logic Design and Switching', '3', 'Second Year', '1st', 'DISTRUC', 8),
(182, 'PHILGOV', 'Philippine History, Government and Constitution', '3', 'Second Year', '1st', '', 8),
(183, 'PHYEDU3', 'Physical Education 3', '2', 'Second Year', '1st', 'PHYEDU1', 8),
(184, 'PHYSIC1', 'Physics 1', '4', 'Second Year', '1st', '', 8),
(185, 'PROSTAT', 'Probability and Statistics', '3', 'Second Year', '1st', 'ALGEBRA', 8),
(186, 'SOCULITA', 'Society, Culture and Information Technology with Family Planning', '3', 'Second Year', '1st', '', 8),
(187, 'COMART4', 'Communication Arts 4', '3', 'Second Year', '2nd', 'COMART3', 8),
(188, 'CORLANG', 'Computer Organization and Assembly Language', '4', 'Second Year', '2nd', 'LOGSIGN', 8),
(189, 'PHILMAN ', 'Philosophy of Man ', '3', 'Second Year', '2nd', '', 8),
(190, 'PHYEDU4', 'Physical Education 4', '2', 'Second Year', '2nd', 'PHYEDU1', 8),
(191, 'PHYSIC2', 'Physics 2', '4', 'Second Year', '2nd', 'PHYSIC1', 8),
(192, 'SADSIGN', 'System Analysis and Design', '3', 'Second Year', '2nd', 'COPRO-1', 8),
(193, 'THEODBS', 'Theory of Database Systems', '4', 'Second Year', '2nd', 'DATSRUC', 8),
(194, 'ACCPRIN', 'Accounting Principles', '3', 'Third Year', '1st', 'ALGEBRA', 8),
(195, 'ADDBASE', 'Advance Database Systems', '3', 'Third Year', '1st', 'THEODBS', 8),
(196, 'FILIP01', 'Komunikasyon sa Akademikong Filipino', '3', 'Third Year', '1st', '', 8),
(197, 'ITFELE1', 'IT Free Elective 1', '0', 'Third Year', '1st', '', 8),
(198, 'OPERSYS', 'Operating Systems', '3', 'Third Year', '1st', 'CORLANG', 8),
(199, 'SOFTWEN', 'Software Engineering', '4', 'Third Year', '1st', 'SADSIGN', 8),
(200, 'WEBPROG', 'Web Programming', '3', 'Third Year', '1st', 'COPRO-1', 8),
(201, 'COMNETS', 'Computer Networks', '4', 'Third Year', '2nd', 'OPERSYS', 8),
(202, 'ECOTAXA', 'Economics with Taxation and Agrarian Reform', '3', 'Third Year', '2nd', '', 8),
(203, 'FILIP02', 'Pagbasa at Pagsulat Tungo sa pananaliksik', '3', 'Third Year', '2nd', 'FILIP01', 8),
(204, 'ITELEC1', 'IT Elective 1', '3', 'Third Year', '2nd', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `user_type`) VALUES
(2, 'Staff', 's', 'Maries', 'Santillan', 'Encoder'),
(3, 'Registrar', 'reg', 'Mealyn', 'Tabujara', 'Registrar'),
(4, 'marie', 'm', 'Mariestella', 'Santillan', 'Encoder'),
(5, 'admin', 'admin', 'admin', 'admin', 'Encoder');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
