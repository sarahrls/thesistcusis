-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `ay`
--

CREATE TABLE `ay` (
  `AY_ID` int(11) NOT NULL,
  `ACADYR` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `CHATBOT_ID` int(255) NOT NULL,
  `QUERIES` longtext NOT NULL,
  `ANSWERS` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`CHATBOT_ID`, `QUERIES`, `ANSWERS`) VALUES
(2, 'hi', 'hi'),
(3, 'hello', 'hell'),
(4, 'shift course to another course?', 'You can go to registrar office so they can assist you about shifting your course.'),
(5, 'best time to go to the registrar office , registrar open hours ,  oras bukas ng registrar', 'Taguig City University Registrar is open from Monday to Friday 8am to 5pm. '),
(6, 'Is there any chance we could access my information online?', 'Yes, through our Student Information System.'),
(7, 'Does the registrarâ€™s Office have another social media platform? ', 'Facebook page: https://www.facebook.com/officialtcuregistrar '),
(8, 'Who are the course evaluators in the registrar office?', ': Emily Carpio â€“ Marketing : Vilma Merjan â€“ English/Science Major'),
(9, 'Who are the course evaluators ', ': Emily Carpio â€“ Marketing : Vilma Merjan â€“ English/Science Major'),
(10, 'Can I interview the registrar staff?', 'You have to file a permission letter to the registrarâ€™s office.'),
(11, 'Can I interview the registrar office?', 'You have to file a permission letter to the registrarâ€™s office.'),
(12, 'Can I get my old records in the registrar office?', 'You have to file a request form to the Registrarâ€™s Office.'),
(13, 'Can you give me the contact number of the registrarâ€™s office?', '09234567890'),
(14, 'Contact number of registrar office', '09234567890'),
(15, 'Are there dress codes to be followed in entering the registrar office? ', 'Dress code: Pants, Sleeved Shirts, 3 inches above the knee skirts, closed shoes, No revealing clothes '),
(16, 'Are you accepting transfer students? ', 'Unfortunately, No at this moment. '),
(17, 'When is the admission for the next school year?', 'There is no available date at the moment. '),
(18, 'What are the requirements for admission? ', 'Birth certificate, Grade 12 Card, Good moral Certificate, Voterâ€™s Certificate'),
(19, 'What are the basic requirements for admission? ', 'Birth certificate, Grade 12 Card, Good moral Certificate, Voterâ€™s Certificate'),
(20, 'When is the enrollment for graduate studies?', 'There is no available date at the moment. The graduate studies are still ongoing for this school year. '),
(21, ' Is there a tuition fee at Taguig City University?', 'No.'),
(22, 'How many units do the students allow to take? ', '27 units.'),
(23, 'Does the Taguig City University Accept balik-aral students?', 'Yes.'),
(24, 'Does the Senior High School Student belong to the system?', 'Sorry, but 1st year to 4th year only.'),
(25, 'Where can I see my grades?', 'Log in to your account and go to the grades button.'),
(26, 'Can I still see my past grades?', 'Yes, you can still see your past grades.'),
(27, 'Can I still see my past subject?', 'Yes, you can still see your past subject.'),
(28, 'Pwede bang kunin yung dating records?', 'Oo, maari kang pumunta sa registrar office para mag request sa pagkuha ng lumang records.  '),
(29, 'Kailan pwedeng pumunta sa registrar office?', 'Maari kang pumunta sa registrar of Lunes hanggang Biyernes, 8am â€“ 5pm'),
(30, 'Pwede bang magpasurvey sa registrar staff?', ' Kailangan mo ng permission letter para makapagpa survey sa registrar'),
(31, 'Kailan pwede mag enroll sa taguig city university?', 'Sa ngayon wala pang araw kung kailan pwedeng mag enroll.'),
(32, 'Ano ang requirement na ipapa pag nag enroll?', ' Birth certificate, Grade 12 Card, Good moral Certificate, Voterâ€™s Certificate'),
(33, 'Tumataggap ba ang taguig city university ng transfer students?', 'Sa ngayon ay hindi muna tumataggap.'),
(34, 'tumataggap ba kayo ng transfer students?', 'Sa ngayon ay hindi muna tumataggap.'),
(35, 'pwede bang mag log in ang mga senior high school?', 'sa ngayon ay 1st year hanggang 4th year lamang ang pwede ');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CLASS_ID` int(11) NOT NULL,
  `CLASS_CODE` varchar(30) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  `SYID` int(11) NOT NULL,
  `AY` varchar(11) NOT NULL,
  `DAY` varchar(20) NOT NULL,
  `C_TIME` varchar(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `ROOM` varchar(30) NOT NULL DEFAULT 'NONE',
  `SECTION` varchar(30) NOT NULL DEFAULT 'NONE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CLASS_ID`, `CLASS_CODE`, `SUBJ_ID`, `INST_ID`, `SYID`, `AY`, `DAY`, `C_TIME`, `IDNO`, `ROOM`, `SECTION`) VALUES
(18, 'CC 101', 483, 8, 0, '2019-2020', 'MWF', '7:30-8:30', 0, '401', 'E2019'),
(19, 'CC 102', 484, 8, 0, '2019-2020', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(20, 'AL 101', 486, 9, 0, '2019-2020', 'TTH', '7:30-8:30', 0, '401', 'E2019'),
(21, 'GE 1', 487, 9, 0, '2019-2020', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(22, 'GE 2', 488, 9, 0, '2019-2020', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(23, 'GE 10', 489, 9, 0, '2019-2020', 'NONE', 'NONE', 0, 'NONE', 'NONE'),
(24, 'PE 1', 490, 9, 0, '2017-2018', 'NONE', 'NONE', 0, 'NONE', 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_LEVEL` int(11) NOT NULL DEFAULT '1',
  `COURSE_MAJOR` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_DESC` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_LEVEL`, `COURSE_MAJOR`, `COURSE_DESC`, `DEPT_ID`) VALUES
(57, '1st Year - 1st Semester', 0, '', '1st Year - 1st Semester', 9),
(58, '2nd Year - 1st Semester', 0, '', '2nd Year - 1st Semester', 9),
(59, '3rd Year - 1st Semester', 0, '', '3rd Year - 1st Semester', 9),
(60, '4th Year - 1st Semester', 0, '', '4th Year - 1st Semester', 9),
(61, '2nd Year - 2nd Semester', 0, '', '2nd Year - 2nd Semester', 9),
(62, '1st Year - 2nd Semester', 0, '', '1st Year - 2nd Semester', 9),
(63, '3rd Year - 2nd Semester', 0, '', '3rd Year - 2nd Semester', 9),
(64, '4th Year - 2nd Semester', 0, '', '4th Year - 2nd Semester', 9);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `DEPARTMENT_DESC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPT_ID`, `DEPARTMENT_NAME`, `DEPARTMENT_DESC`) VALUES
(3, 'CICT', 'College of Communication and Information Technology'),
(4, 'CBM', 'College of Business Mangament'),
(5, 'CCJ', 'College of Criminal Justice'),
(6, 'CET', 'College of Engineering and Technology'),
(7, 'CHTM', 'College of Hospitality and Tourism Mangement'),
(8, 'CAS', 'College of Arts and Science'),
(9, 'CED', 'College of Education');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  `SYID` int(30) NOT NULL,
  `FIRST` longtext NOT NULL,
  `SECOND` longtext NOT NULL,
  `THIRD` int(11) NOT NULL,
  `FOURTH` int(11) NOT NULL,
  `AVE` longtext NOT NULL,
  `DAY` varchar(30) NOT NULL,
  `G_TIME` time NOT NULL,
  `ROOM` varchar(30) NOT NULL,
  `REMARKS` longtext NOT NULL,
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GRADE_ID`, `IDNO`, `SUBJ_ID`, `INST_ID`, `SYID`, `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `DAY`, `G_TIME`, `ROOM`, `REMARKS`, `COMMENT`) VALUES
(49, 1900679, 482, 0, 13, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(50, 1900742, 482, 0, 15, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(51, 1900742, 483, 8, 19, 'g6scQ1cfgMDuNuOYw906Fw==', 'g6scQ1cfgMDuNuOYw906Fw==', 0, 0, 'g6scQ1cfgMDuNuOYw906Fw==', 'NONE', '00:00:00', '', 'zS0INBLNDrUsS9rf5J/5jA==', ''),
(52, 1900742, 484, 8, 19, '1.00', '1.00', 0, 0, '1.00', 'NONE', '00:00:00', '', 'Passed', ''),
(53, 1900742, 485, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(54, 1900742, 486, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(55, 1900742, 487, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(56, 1900742, 488, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(57, 1900742, 489, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(58, 1900742, 490, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(59, 1900742, 491, 0, 19, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(60, 1900742, 500, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(61, 1900742, 492, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(62, 1900742, 493, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(63, 1900742, 494, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(64, 1900742, 495, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(65, 1900742, 496, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(66, 1900742, 497, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(67, 1900742, 498, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(68, 1900742, 499, 0, 20, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(69, 1900742, 501, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(70, 1900742, 502, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(71, 1900742, 503, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(72, 1900742, 504, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(73, 1900742, 505, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(74, 1900742, 506, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(75, 1900742, 507, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(76, 1900742, 508, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(77, 1900742, 509, 0, 22, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(78, 1900742, 510, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(79, 1900742, 511, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(80, 1900742, 512, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(81, 1900742, 513, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(82, 1900742, 514, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(83, 1900742, 515, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(84, 1900742, 516, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(85, 1900742, 517, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(86, 1900742, 518, 0, 31, '0', '0', 0, 0, '0', 'NONE', '00:00:00', '', 'NONE', ''),
(87, 1900742, 540, 0, 35, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(88, 1900742, 519, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(89, 1900742, 520, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(90, 1900742, 521, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(91, 1900742, 522, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(92, 1900742, 523, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(93, 1900742, 524, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(94, 1900742, 525, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(95, 1900742, 526, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(96, 1900742, 527, 0, 32, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(97, 1900742, 528, 0, 33, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(98, 1900742, 529, 0, 33, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(99, 1900742, 530, 0, 33, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(100, 1900742, 531, 0, 33, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(101, 1900742, 532, 0, 33, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(102, 1900742, 533, 0, 33, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(103, 1900742, 534, 0, 34, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(104, 1900742, 535, 0, 34, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(105, 1900742, 536, 0, 34, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(106, 1900742, 537, 0, 34, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(107, 1900742, 538, 0, 34, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(108, 1900742, 539, 0, 34, '', '', 0, 0, '', 'NONE', '00:00:00', '', 'NONE', ''),
(109, 0, 0, 0, 0, '', '', 0, 0, '', '', '00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `INST_ID` int(30) NOT NULL,
  `INST_FULLNAME` varchar(255) NOT NULL,
  `INST_ADDRESS` varchar(255) NOT NULL,
  `INST_SEX` varchar(20) NOT NULL DEFAULT 'Male',
  `INST_STATUS` varchar(20) NOT NULL DEFAULT 'Single',
  `SPECIALIZATION` text NOT NULL,
  `INST_EMAIL` varchar(255) NOT NULL,
  `EMPLOYMENT_STATUS` varchar(40) NOT NULL DEFAULT 'Probationary'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`INST_ID`, `INST_FULLNAME`, `INST_ADDRESS`, `INST_SEX`, `INST_STATUS`, `SPECIALIZATION`, `INST_EMAIL`, `EMPLOYMENT_STATUS`) VALUES
(8, 'Sarah', '120P MLQ', 'M', 'Single', 'IT', 'sarahroselimsison@gmail.com', 'Full time'),
(9, 'Mary Jane Bayod', 'Wawa', 'F', 'Single', 'IT', 'bayodjane@gmail.com', 'Full time');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `YR_ID` int(11) NOT NULL,
  `LEVEL` varchar(30) NOT NULL,
  `LEVEL_DESCRIPTION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `MAJOR_ID` int(11) NOT NULL,
  `MAJOR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `PHOTO_ID` int(11) NOT NULL,
  `FILENAME` text NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  `SIZE` int(30) NOT NULL,
  `CAPTION` varchar(255) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `PRIMARY` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ROOM_ID` int(11) NOT NULL,
  `ROOM_NAME` varchar(30) NOT NULL,
  `ROOM_DESC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ROOM_ID`, `ROOM_NAME`, `ROOM_DESC`) VALUES
(5, '401', '4th Floor'),
(6, '402', '4th Floor'),
(7, '403', '4th Floor'),
(8, '404', '4th Floor'),
(9, '405', '4th Floor'),
(10, '406', '4th Floor'),
(11, '407', '4th Floor'),
(12, '408', '4th Floor'),
(13, '409', '4th Floor'),
(14, '410', '4th Floor'),
(15, '411', '4th Floor'),
(16, '412', '4th Floor'),
(17, '413', '4th Floor'),
(18, '414', '4th Floor'),
(19, '415', '4th Floor'),
(20, '416', '4th Floor'),
(21, '417', '4th Floor'),
(22, '418', '4th Floor'),
(23, '419', '4th Floor'),
(24, '420', '4th Floor');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyr`
--

CREATE TABLE `schoolyr` (
  `SYID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `IDNO` int(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL DEFAULT 'ENROLLED',
  `DATE_RESERVED` datetime NOT NULL,
  `DATE_ENROLLED` datetime NOT NULL,
  `STATUS` varchar(30) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyr`
--

INSERT INTO `schoolyr` (`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`) VALUES
(13, '2019-2020', 'First', 57, 1900679, 'ENROLLED', '2022-11-15 15:12:07', '0000-00-00 00:00:00', 'New'),
(19, '2019-2020', 'First', 57, 1900742, 'ENROLLED', '2022-11-15 16:17:40', '0000-00-00 00:00:00', 'Regular'),
(20, '2019-2020', 'First', 62, 1900742, 'ENROLLED', '2022-11-15 16:43:39', '0000-00-00 00:00:00', 'Regular'),
(22, '2020-2021', 'First', 58, 1900742, 'ENROLLED', '2022-11-15 16:45:07', '0000-00-00 00:00:00', 'Regular'),
(31, '2020-2021', 'First', 61, 1900742, 'ENROLLED', '2022-11-15 16:47:58', '0000-00-00 00:00:00', 'Regular'),
(32, '2021-2022', 'First', 59, 1900742, 'ENROLLED', '2022-11-15 16:48:05', '0000-00-00 00:00:00', 'Regular'),
(33, '2021-2022', 'First', 63, 1900742, 'ENROLLED', '2022-11-15 16:48:13', '0000-00-00 00:00:00', 'Regular'),
(34, '2022-2023', 'First', 60, 1900742, 'ENROLLED', '2022-11-15 16:48:25', '0000-00-00 00:00:00', 'Regular'),
(35, '2022-2023', 'First', 64, 1900742, 'ENROLLED', '2022-11-15 16:48:35', '0000-00-00 00:00:00', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `SEM_ID` int(11) NOT NULL,
  `SEM` varchar(15) NOT NULL DEFAULT 'First'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`) VALUES
(483, 'CC 101', 'Introduction to Computing (HTML/CSS)', 3, '', 57, '2017-2018', 'First'),
(484, 'CC 102', 'Fundamentals of Programming (JAVA)', 3, '', 57, '2019-2020', 'First'),
(485, 'DS 101', 'Discrete Structures 1', 3, '', 57, '2019-2020', 'First'),
(486, 'AL 101', 'Algorithms and Complexity', 3, '', 57, '2019-2020', 'First'),
(487, 'GE 1', 'Understanding the Self', 3, '', 57, '2019-2020', 'First'),
(488, 'GE 2', 'Readings in Philippine History', 3, '', 57, '2019-2020', 'First'),
(489, 'GE 10', 'Pagbasa at Pagsulat sa Iba''t Ibang Disiplina', 3, '', 57, '2019-2020', 'First'),
(490, 'PE 1', 'Physical Education 1', 2, '', 57, '2017-2018', 'First'),
(491, 'NSTP 1', 'CWTS/ROTC 1', 2, '', 57, '2017-2018', 'First'),
(492, 'CC 103', 'Intermediate Programming (Adv. Java)', 3, '', 62, '2017-2018', 'First'),
(493, 'CC 104', 'Data Structure and Algorithm', 3, '', 62, '2017-2018', 'First'),
(494, 'CC 105', 'Information Management (DB/SQL)', 3, '', 62, '2017-2018', 'First'),
(495, 'DS 102', 'Discrete Structures 2', 3, '', 62, '2017-2018', 'First'),
(496, 'GE 3', 'The Contemporary World', 3, '', 62, '2017-2018', 'First'),
(497, 'GE 4', 'Mathematics in the Modern World', 3, '', 62, '2017-2018', 'First'),
(498, 'PE 2', 'Physical Education 2', 3, '', 62, '2017-2018', 'First'),
(499, 'GE 11', 'Panitikang Filipino', 3, '', 62, '2017-2018', 'First'),
(500, 'NSTP 2', 'CWTS/ROTC 2', 2, '', 62, '2017-2018', 'First'),
(501, 'CC 106', 'Application Development and Emerging Technologies', 3, '', 58, '2019-2020', 'First'),
(502, 'SDF 104', 'Object Oriented Programming 1 (VB.net)', 3, '', 58, '2019-2020', 'First'),
(503, 'AL 102', 'Automata Theory and Formal Languages', 3, '', 58, '2019-2020', 'First'),
(504, 'NC 101', 'Networks and Communication', 3, '', 58, '2019-2020', 'First'),
(505, 'GE 5', 'Purposive Communication', 3, '', 58, '2019-2020', 'First'),
(506, 'GE 6', 'Art Appreciation', 3, '', 58, '2019-2020', 'First'),
(507, 'GEE 22', 'Philippine Indigenous Communities', 3, '', 58, '2019-2020', 'First'),
(508, 'IT 100', 'Internet and Advanced Office Productivity', 3, '', 58, '2019-2020', 'First'),
(509, 'PE 3', 'Physical Education 3', 2, '', 58, '2019-2020', 'First'),
(510, 'AR 101', 'Architecture and Organization', 3, '', 61, '2017-2018', 'First'),
(511, 'OS 101', 'Operational System', 3, '', 61, '2019-2020', 'First'),
(512, 'PL 101', 'Programing Languages', 3, '', 61, '2019-2020', 'First'),
(513, 'HCI 101', 'Human Computer Interaction', 3, '', 61, '2019-2020', 'First'),
(514, 'AL 103', 'Logic Design', 3, '', 61, '2019-2020', 'First'),
(515, 'GE 7', 'Science, Technology and Society', 3, '', 61, '2019-2020', 'First'),
(516, 'GE 8', 'Ethics', 3, '', 61, '2019-2020', 'First'),
(517, 'GEE 32', 'Philippine Popular Culture', 3, '', 61, '2019-2020', 'First'),
(518, 'PE 4', 'Physical Education 4', 3, '', 61, '2019-2020', 'First'),
(519, 'IAS 101', 'Information Assurance and Security', 3, '', 59, '2019-2020', 'First'),
(520, 'SE 101', 'Software Engineering 1', 3, '', 59, '2019-2020', 'First'),
(521, 'SP 101', 'Social Issues and Professional Practice', 3, '', 59, '2019-2020', 'First'),
(522, 'ELEC 1', 'Computational Science', 3, '', 59, '2019-2020', 'First'),
(523, 'CC 107', 'Mobile Programming', 3, '', 59, '2019-2020', 'First'),
(524, 'DS 103', 'Statistics with SPSS', 3, '', 59, '2019-2020', 'First'),
(525, 'GE 9', 'Rizal''s Life and Works', 3, '', 59, '2017-2018', 'First'),
(526, 'IT 101', 'Micro Controller Programming', 3, '', 59, '2019-2020', 'First'),
(527, 'GEE 13', 'Human Reproduction', 3, '', 59, '2019-2020', 'First'),
(528, 'ELEC 2', 'Intelligent System', 3, '', 63, '2019-2020', 'First'),
(529, 'SE 102', 'Software Engineering 2', 3, '', 63, '2019-2020', 'First'),
(530, 'THS 101', 'CS Thesis Writing 1', 3, '', 63, '2019-2020', 'First'),
(531, 'ELEC 3', 'Parallel and Distributed Computing', 3, '', 63, '2019-2020', 'First'),
(532, 'CC 108', 'Content Management System', 3, '', 63, '2019-2020', 'First'),
(533, 'OS 102', 'Open Source Operating System', 3, '', 63, '2019-2020', 'First'),
(534, 'IT 102', 'Social Media and Presentation', 3, '', 63, '2019-2020', 'First'),
(535, 'THS 102', 'CS Thesis Writing 2', 6, '', 60, '2019-2020', 'First'),
(536, 'ELEC 4', 'Graphics and Visual Computing', 3, '', 60, '2019-2020', 'First'),
(537, 'ELEC 5', 'System Fundamentals', 3, '', 60, '2019-2020', 'First'),
(538, 'SDF 105', 'Object Oriented Programming 2 (C#)', 3, '', 60, '2019-2020', 'First'),
(539, 'HCI 102', 'Technopreneurship/ E-Commerce', 6, '', 60, '2019-2020', 'First'),
(540, 'PRC 101', 'PRACTICUM (OJT)', 3, '', 64, '2019-2020', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequirements`
--

CREATE TABLE `tblrequirements` (
  `REQ_ID` int(30) NOT NULL,
  `NSO` varchar(5) NOT NULL DEFAULT 'no',
  `BAPTISMAL` varchar(5) NOT NULL DEFAULT 'no',
  `ENTRANCE_TEST_RESULT` varchar(5) NOT NULL DEFAULT 'no',
  `MARRIAGE_CONTRACT` varchar(5) NOT NULL DEFAULT 'no',
  `CERTIFICATE_OF_TRANSFER` varchar(5) NOT NULL DEFAULT 'no',
  `IDNO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudcoe`
--

CREATE TABLE `tblstudcoe` (
  `COE_ID` int(255) NOT NULL,
  `IDNO` int(255) NOT NULL,
  `COE` varchar(300) NOT NULL,
  `COE2` varchar(300) NOT NULL,
  `COE3` varchar(300) NOT NULL,
  `COE4` varchar(300) NOT NULL,
  `COE5` varchar(300) NOT NULL,
  `COE6` varchar(300) NOT NULL,
  `COE7` varchar(300) NOT NULL,
  `COE8` varchar(300) NOT NULL,
  `COE9` varchar(300) NOT NULL,
  `COE10` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudcoe`
--

INSERT INTO `tblstudcoe` (`COE_ID`, `IDNO`, `COE`, `COE2`, `COE3`, `COE4`, `COE5`, `COE6`, `COE7`, `COE8`, `COE9`, `COE10`) VALUES
(14, 1900742, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE'),
(15, 123, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE'),
(16, 223, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE'),
(17, 21, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE'),
(18, 1900664, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE'),
(19, 0, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(20, 0, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(21, 0, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(22, 0, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(23, 0, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(24, 0, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(25, 0, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(26, 1900742, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(27, 1900742, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(28, 1900742, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(29, 1900742, 'Interview Request.pdf', '', '', '', '', '', '', '', '', ''),
(30, 1900742, '', '', '', '', '', '', '', '', '', ''),
(31, 1900742, 'Interview Request.pdf', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL,
  `GUARDIAN` longtext NOT NULL,
  `GUARDIAN_ADDRESS` longtext NOT NULL,
  `OTHER_PERSON_SUPPORT` longtext NOT NULL,
  `ADDRESS` longtext NOT NULL,
  `COE` longtext NOT NULL,
  `IDNO` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `GUARDIAN`, `GUARDIAN_ADDRESS`, `OTHER_PERSON_SUPPORT`, `ADDRESS`, `COE`, `IDNO`) VALUES
(69, 'hvfvhgv', 'vgh', 'hb hb ', 'hbhbh', '', 12467),
(70, '', '', '', '', 'JeremiahS.pdf', 0),
(71, '', '', '', '', 'Interview Request.pdf', 0),
(72, '', '', '', '', 'Interview Request.pdf', 0),
(73, '', '', '', '', 'print.pdf', 0),
(74, 'Elizabeth Andes', 'San Miguel, Taguig City', 'Eduardo Sr. Andes', 'San Miguel, Taguig City', '', 1900771),
(75, 'jhbjhb', 'jhbjhb', 'hb', 'hbjh', '', 1231),
(76, 'kbkbkj', 'bjbjhb', 'jhhjb', 'jhhbjh', '', 12345),
(92, 'csdcsd', 'cdscsd', 'cdscs', 'csdcds', '', 123221),
(93, 'uvjhjh', 'jhbjhb', 'hgvh', 'bbbbbbbbbbbj', '', 2323),
(94, 'vsdvsd', 'vsdvsdv', 'vsdvsd', 'dsvssdv', '', 1223),
(95, 'sdada', 'dasdas', 'dasdad', 'asdad', '', 123),
(96, 'vsdvsd', 'vsdvsdv', 'vdsvsd', 'vsdvds', '', 32),
(97, 'kbkhbjh', 'kjbkjbj', 'kjbjhbj', 'jbjhbj', '', 31232),
(98, 'asdfghjkl', 'asdfghjkl', 'asdfghjkl', 'asdfghjkl', '', 123),
(99, 'fsdfsd', 'dsfsd', 'fdsfsdf', 'sdfds', '', 31232),
(100, 'W0bYcN25wH7aXf69jTSnHQ==', 'bO8PXnfCe2nSHwUzkkkHKommTbGfQp/Lcvmj1JekAyY=', 'hKZD1m90E2aFTtfFh4OJrA==', 'bO8PXnfCe2nSHwUzkkkHKommTbGfQp/Lcvmj1JekAyY=', '', 1900742),
(101, 'dad', 'dasda', 'dasd', 'sdsa', '', 123),
(104, 'gp0ZW/TnIGRBRph3tO/CpA==', 'Gh1MoNltfWxHIflv3ZFLTBnntt4/M81didYr9ocVHhI=', 'bRThxAAgp3rsuUqctdszebkn9JGv0Xa5iHZFqJ7I/Sk=', 'Gh1MoNltfWxHIflv3ZFLTBnntt4/M81didYr9ocVHhI=', '', 1900664),
(108, 'uoWFHS7B9oVOKlwaWqPeiQ==', 'ZQeC5Z2imFCOM0OZTEEBQw==', '3SdDU1dvd3f1VE98E4+obw==', 'ZQeC5Z2imFCOM0OZTEEBQw==', '', 1900930),
(109, 'W0bYcN25wH7aXf69jTSnHQ==', 'bO8PXnfCe2nSHwUzkkkHKommTbGfQp/Lcvmj1JekAyY=', 'hKZD1m90E2aFTtfFh4OJrA==', 'bO8PXnfCe2nSHwUzkkkHKommTbGfQp/Lcvmj1JekAyY=', '', 1900742),
(110, 'gp0ZW/TnIGRBRph3tO/CpA==', 'Gh1MoNltfWxHIflv3ZFLTBnntt4/M81didYr9ocVHhI=', 'bRThxAAgp3rsuUqctdszebkn9JGv0Xa5iHZFqJ7I/Sk=', 'Gh1MoNltfWxHIflv3ZFLTBnntt4/M81didYr9ocVHhI=', '', 19),
(111, 'uoWFHS7B9oVOKlwaWqPeiQ==', 'ZQeC5Z2imFCOM0OZTEEBQw==', '3SdDU1dvd3f1VE98E4+obw==', 'ZQeC5Z2imFCOM0OZTEEBQw==', '', 1900930),
(112, '/GaM3BerxQtT9uv028P6tQ==', 'SioF/7st0aqCNx+dsFxSUC7A/o0MYhz/lRKJHKhIed4=', '/GaM3BerxQtT9uv028P6tQ==', 'SioF/7st0aqCNx+dsFxSUC7A/o0MYhz/lRKJHKhIed4=', '', 1900914),
(113, 'KiVT3YNyBZJIoj3QT3EbqP1JJuk97uPxrqdsJ07JsUc=', 'Kv9sErX3OC/W2PHhjNHTcSegua64zAikfGU7TIBO3xMmR4OIg0UC0AH+ouh9Mdwj', 'V6j2dgwsDYf0SMArHq+WOQ==', 'Kv9sErX3OC/W2PHhjNHTcSegua64zAikfGU7TIBO3xMmR4OIg0UC0AH+ouh9Mdwj', '', 1902245),
(114, '682QPRw1x65X4/haf8XHxfwrd24X9kRKwmzkuf2zEQ8=', 'diiyWoAUL6N7pbl17VcPTv8whnx/5YmoW5fJg9vYBxiQQDIh8PI4VGEQxVwN6vjj', '6cdMgI6jT3plKcNi98g9Ow==', 'diiyWoAUL6N7pbl17VcPTv8whnx/5YmoW5fJg9vYBxiQQDIh8PI4VGEQxVwN6vjj', '', 1903886);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` varchar(700) NOT NULL,
  `FNAME` longtext NOT NULL,
  `LNAME` longtext NOT NULL,
  `MNAME` longtext NOT NULL,
  `SEX` longtext NOT NULL,
  `BDAY` longtext NOT NULL,
  `BPLACE` longtext NOT NULL,
  `STATUS` longtext NOT NULL,
  `AGE` longtext NOT NULL,
  `NATIONALITY` longtext NOT NULL,
  `RELIGION` longtext NOT NULL,
  `CONTACT_NO` longtext NOT NULL,
  `HOME_ADD` longtext NOT NULL,
  `EMAIL` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`) VALUES
(99, '1900742', 'nqFrlBli2EcmHJg9hx8PVg==', 'I9SJEMQEYDfbdz6lddClog==', 'RQwl6ppB6dVUiPHQUru1wg==', 'patETJBr/DjL1DcxhIMIhA==', 'jyf06DrFWD2jbu4Ghnlteg==', 'J09xzdCRzhOZAjQNOMWg+g==', 'ZOant/L/NucMeOSAUuLiDg==', 'pktvRjSSUuojEiZsWeQq1Q==', 'voHCyhjVoRR0ntH/9D0fbw==', '46Us49VCSAUFBFjKIZv/8DTkXwToV2r/CDGEaPa0cw7OsJ6Vbwa/6MnBT/k+Xa4/', '2psvT4mLogvs4aAOl6tZtg==', 'bO8PXnfCe2nSHwUzkkkHKommTbGfQp/Lcvmj1JekAyY=', 'Ql+rqCmOcAbT+P4MDHIGMpZkE6jBd0kNvW6b7xf6Vis='),
(100, '1900664', 'eJHg0AUtEniBsP/8vRpTdw==', 'IutpAKHc1/oaJb5hAaM8XQ==', 'VDmppmLi+70iCbxw8esILg==', 'patETJBr/DjL1DcxhIMIhA==', 'B3oEiabCTP2KnXNameMCfQ==', 'Ugs/HU1jFqZZhtCt3v2+wQ==', 'ZOant/L/NucMeOSAUuLiDg==', 'pktvRjSSUuojEiZsWeQq1Q==', 'voHCyhjVoRR0ntH/9D0fbw==', '6VblBvLlHFfnZUKwziNJ143QHcEZaPZwePvDrTwdZGk=', 'u2QduL3mJAfl/a9/jReDfQ==', 'Gh1MoNltfWxHIflv3ZFLTBnntt4/M81didYr9ocVHhI=', 'V1prdYKgosp9k4ev2UU/TGZ+qLKbOzd48Bmor8NGsdU='),
(101, '1900930', 'w78QC8+JP1O1rIBPQD0g1Q==', 'MNAr3VHIRiuHIKNSTjRyKg==', 'CDZUJUqnbFGkTAFAjHwFjg==', 'patETJBr/DjL1DcxhIMIhA==', 'XCy6oD4QxGyG/rdt2uuHFA==', '5TqHpojGiX65yGEmxetkHA==', 'ZOant/L/NucMeOSAUuLiDg==', 'pktvRjSSUuojEiZsWeQq1Q==', 'voHCyhjVoRR0ntH/9D0fbw==', '1gGv2KqxQbEU648rCPUSsg==', 'BHZ40dgx0jkVwTqmtdgtrw==', 'ZQeC5Z2imFCOM0OZTEEBQw==', '6kMUbqeDDF5bQoSLwti0tH0Yd59Vf1b/Gl0VjrHFzXs='),
(102, '1900914', 'i0nqBlAgHZsRzRY8QB69Tw==', 'bd1pyBdGw4tjUSEaC2qTEw==', 'EUftZqf1ie5zsSVemurXNw==', '+ZA06is9s7WgS8+8wBxYHw==', 'YORCabzyXE5Nb0vFvprupQ==', '5TqHpojGiX65yGEmxetkHA==', 'ZOant/L/NucMeOSAUuLiDg==', 'pktvRjSSUuojEiZsWeQq1Q==', 'voHCyhjVoRR0ntH/9D0fbw==', '1gGv2KqxQbEU648rCPUSsg==', 'BHZ40dgx0jkVwTqmtdgtrw==', 'SioF/7st0aqCNx+dsFxSUC7A/o0MYhz/lRKJHKhIed4=', 'wHinfYoW5qEfK/ep0xN+jhFAaekeELiS9a7O1ofhZiw='),
(103, '1902245', 'NTfMEmOkiDCSFLRzj/ylXg==', 'ntp7q6npq1XR5w/ByREQPA==', 'z5RatPVGwNksvJCCpCC5PA==', '+ZA06is9s7WgS8+8wBxYHw==', 'RakOUxAU2vU2bltLKb7Ufg==', 'Ugs/HU1jFqZZhtCt3v2+wQ==', 'ZOant/L/NucMeOSAUuLiDg==', 'ZRyL5SjD3peC/vRKjukIfQ==', 'voHCyhjVoRR0ntH/9D0fbw==', '1gGv2KqxQbEU648rCPUSsg==', 'zsfAHH9rHdK9xGkjMKtf0Q==', 'Kv9sErX3OC/W2PHhjNHTcSegua64zAikfGU7TIBO3xMmR4OIg0UC0AH+ouh9Mdwj', 'g2vesamAQL0jCRmq9tizdAJnS2DYlhbdYUMv0AZzWJmgxkKngcLB02nyPkNGZNIg'),
(104, '1903886', 'sBcnwXT7jwqlV+Q8/Y9+Eg==', 'GKOS3Tzi++HfE+8C74HCHg==', 't+AowI0PYegN+i+1ltYFZQ==', '+ZA06is9s7WgS8+8wBxYHw==', 'jgjcbPDD4y8926E5ao/DVQ==', '5TqHpojGiX65yGEmxetkHA==', 'ZOant/L/NucMeOSAUuLiDg==', '4abu7nm+AHTGMmgm7Hv2ww==', 'voHCyhjVoRR0ntH/9D0fbw==', '1gGv2KqxQbEU648rCPUSsg==', 'fs9AwakmqoH8Show2B0dwg==', 'diiyWoAUL6N7pbl17VcPTv8whnx/5YmoW5fJg9vYBxiQQDIh8PI4VGEQxVwN6vjj', 'kmoqrL5HAnQPCJCODjCtPqwdNJG3WsMUOIrrbnhkzGU=');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(12, 'TCU Admin', 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'Administrator'),
(13, 'Sarah', 'sarahroselimsison@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Teacher'),
(15, 'Mary Jane Bayod', 'bayodjane@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ay`
--
ALTER TABLE `ay`
  ADD PRIMARY KEY (`AY_ID`),
  ADD UNIQUE KEY `acadyr` (`ACADYR`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`CHATBOT_ID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`GRADE_ID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`INST_ID`),
  ADD UNIQUE KEY `INST_EMAIL` (`INST_EMAIL`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`YR_ID`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`MAJOR_ID`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`PHOTO_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOM_ID`);

--
-- Indexes for table `schoolyr`
--
ALTER TABLE `schoolyr`
  ADD PRIMARY KEY (`SYID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`SEM_ID`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  ADD PRIMARY KEY (`STUDSUBJ_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJ_ID`);

--
-- Indexes for table `tblrequirements`
--
ALTER TABLE `tblrequirements`
  ADD PRIMARY KEY (`REQ_ID`);

--
-- Indexes for table `tblstudcoe`
--
ALTER TABLE `tblstudcoe`
  ADD PRIMARY KEY (`COE_ID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD PRIMARY KEY (`DETAIL_ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ay`
--
ALTER TABLE `ay`
  MODIFY `AY_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `CHATBOT_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `INST_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `YR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `MAJOR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `PHOTO_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ROOM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `schoolyr`
--
ALTER TABLE `schoolyr`
  MODIFY `SYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `SEM_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  MODIFY `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541;
--
-- AUTO_INCREMENT for table `tblrequirements`
--
ALTER TABLE `tblrequirements`
  MODIFY `REQ_ID` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblstudcoe`
--
ALTER TABLE `tblstudcoe`
  MODIFY `COE_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
