-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 11:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `blood_ID` int(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `blood_bag` int(100) NOT NULL,
  `blood_quantity` int(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`blood_ID`, `blood_type`, `blood_bag`, `blood_quantity`, `amount`, `date`) VALUES
(1, 'O', 2, 250, 500, '2019-05-12'),
(2, 'O', 5, 500, 2500, '2019-05-12'),
(3, 'O', 3, 250, 750, '2019-05-12'),
(4, 'O-', 1, 250, 250, '2019-05-12'),
(5, 'AB', 5, 250, 1250, '2019-05-12'),
(6, 'B', 3, 500, 1500, '2019-05-24'),
(7, 'A', 1, 250, 250, '2019-05-24'),
(8, 'A', 1, 250, 250, '2019-05-24'),
(9, 'A', 1, 500, 500, '2019-05-24'),
(10, 'A-', 1, 500, 500, '2019-05-24'),
(11, 'A', 1, 500, 500, '2019-05-24'),
(12, 'AB-', 1, 500, 500, '2019-05-24'),
(13, 'B', 2, 500, 1000, '2019-05-25'),
(14, 'A', 1, 250, 250, '2019-05-25'),
(15, 'A', 3, 250, 750, '2019-05-25'),
(16, 'O-', 3, 500, 1500, '2019-05-25'),
(17, 'B-', 1, 500, 500, '2019-05-25'),
(18, 'A', 1, 250, 250, '2019-05-25'),
(19, 'O-', 4, 250, 1000, '2019-05-25'),
(20, 'O-', 1, 500, 500, '2019-05-28'),
(21, 'AB-', 2, 500, 1000, '2019-05-25'),
(22, 'A', 2, 500, 1000, '2019-05-25'),
(23, 'B', 1, 250, 250, '2019-05-25'),
(24, 'AB-', 1, 250, 250, '2019-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donorID` int(10) NOT NULL COMMENT 'PRIMARY',
  `email` varchar(100) NOT NULL,
  `donorName` varchar(30) NOT NULL,
  `donorDOB` date NOT NULL,
  `donorAge` int(10) NOT NULL,
  `donorAddress` varchar(100) NOT NULL,
  `donorCity` varchar(30) NOT NULL,
  `donorPoscode` int(10) NOT NULL,
  `donorState` varchar(40) NOT NULL,
  `donorNation` varchar(40) NOT NULL,
  `donorGender` varchar(40) NOT NULL,
  `donorStatus` varchar(30) NOT NULL,
  `donorContact` int(20) NOT NULL,
  `typeBlood` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donorID`, `email`, `donorName`, `donorDOB`, `donorAge`, `donorAddress`, `donorCity`, `donorPoscode`, `donorState`, `donorNation`, `donorGender`, `donorStatus`, `donorContact`, `typeBlood`) VALUES
(1, 'fatin@yahoo.com', 'FATIN HANANI BT AZREEL', '1997-05-16', 22, 'NO 1, JALAN SAMERA', 'RAWANG', 48010, 'SELANGOR', 'MALAY', 'FEMALE', 'SINGLE', 1239873645, 'O'),
(2, 'ashraff@gmail.com', 'muhammad ashraff azlan', '1997-02-19', 34, '2a jalan kawani', 'banting', 34090, 'SELANGOR', 'MALAY', 'MALE', 'SINGLE', 23856821, 'AB'),
(3, 'azira@gmail.com', 'AZIRA ZUHAIDEE BT KAMAL', '1992-01-15', 27, 'AMPANG AMAN JAYA', 'AMPANG', 23490, 'W.P KUALA LUMPUR', 'MALAY', 'FEMALE', 'MARRIED', 189230832, 'B'),
(4, 'hanah@yahoo.com', 'HANNAH BATRISYIA BT AHMAD', '1999-05-11', 20, 'TIOMAN JAYA', 'SG PETANI', 17809, 'KEDAH', 'CHINESE', 'FEMALE', 'WIDOWED/DIVORCED', 123678432, 'B'),
(5, 'haziqah@gmail.com', 'NUR FITRI HAZIQAH BT YUSOF', '1993-04-06', 26, 'JALAN SELASIHSARI 9', 'batu pahat', 40900, 'JOHOR', 'MALAY', 'FEMALE', 'SINGLE', 198374399, 'A'),
(6, 'hazeeq@gmail.com', 'ikhwan hazeeq', '1995-10-09', 24, 'jalan semarak', 'sg buloh', 21010, 'SELANGOR', 'MALAY', 'MALE', 'SINGLE', 1987263511, 'A'),
(7, 'husna@gmail.com', 'syaizatu husna bt johan', '1990-03-05', 34, 'jalan mawarkeras', 'rompin', 49809, 'PAHANG', 'MALAY', 'FEMALE', 'SINGLE', 2147483647, 'AB'),
(8, 'harun@gmail.com', 'harun bin din', '1967-10-04', -36, 'sekapan iman', 'ipoh', -33, 'PERAK', 'IBAN', 'MALE', 'MARRIED', -4, 'AB'),
(9, 'masilah_ahmad@gmail.com', 'masilah bt ahmad', '1970-01-19', 48, 'jalan universiti 8', 'batu pahat', 10280, 'JOHOR', 'MALAY', 'FEMALE', 'MARRIED', 341748393, 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `donor_question`
--

CREATE TABLE `donor_question` (
  `no` int(10) NOT NULL,
  `donorID` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question_ID` varchar(100) NOT NULL,
  `questions` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor_question`
--

INSERT INTO `donor_question` (`no`, `donorID`, `email`, `question_ID`, `questions`, `answer`) VALUES
(1, 1, 'fatin@yahoo.com', 'question_ID_1', '1) Are you feeling good today?', 'YES'),
(2, 1, 'fatin@yahoo.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(3, 1, 'fatin@yahoo.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'NO'),
(4, 1, 'fatin@yahoo.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'YES'),
(5, 1, 'fatin@yahoo.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'YES'),
(6, 1, 'fatin@yahoo.com', 'question_ID_6', 'c) Migraine attack/headache?', 'NO'),
(7, 1, 'fatin@yahoo.com', 'question_ID_7', 'd) Get a doctor', 'NO'),
(8, 1, 'fatin@yahoo.com', 'question_ID_8', '5) Have you ever been/are being treated for the following illness?: a)Stroke?\r\n', 'NO'),
(9, 1, 'fatin@yahoo.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(10, 1, 'fatin@yahoo.com', 'question_ID_10', 'c) HIV', 'NO'),
(11, 1, 'fatin@yahoo.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(12, 1, 'fatin@yahoo.com', 'question_ID_12', 'e) Malaria', 'NO'),
(13, 1, 'fatin@yahoo.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(14, 1, 'fatin@yahoo.com', 'question_ID_14', 'g) Others', 'NO'),
(15, 1, 'fatin@yahoo.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(16, 1, 'fatin@yahoo.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(17, 1, 'fatin@yahoo.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(18, 1, 'fatin@yahoo.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'NO'),
(19, 1, 'fatin@yahoo.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'NO'),
(20, 1, 'fatin@yahoo.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'NO'),
(21, 1, 'fatin@yahoo.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(22, 1, 'fatin@yahoo.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(23, 1, 'fatin@yahoo.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(24, 1, 'fatin@yahoo.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(25, 1, 'fatin@yahoo.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO'),
(26, 2, 'ashraff@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'YES'),
(27, 2, 'ashraff@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(28, 2, 'ashraff@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'YES'),
(29, 2, 'ashraff@gmail.com', 'question_ID_4', '4) In the last week, have you ever been: a) Took any medicine?', 'YES'),
(30, 2, 'ashraff@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'YES'),
(31, 2, 'ashraff@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'YES'),
(32, 2, 'ashraff@gmail.com', 'question_ID_7', 'd) Get a doctor', 'YES'),
(33, 2, 'ashraff@gmail.com', 'question_ID_8', '5) Have you ever been / are / are being treated / have been treated for the following illness? \r\n\r\na', 'YES'),
(34, 2, 'ashraff@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(35, 2, 'ashraff@gmail.com', 'question_ID_10', 'c) HIV', 'NO'),
(36, 2, 'ashraff@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(37, 2, 'ashraff@gmail.com', 'question_ID_12', 'e) Malaria', 'NO'),
(38, 2, 'ashraff@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(39, 2, 'ashraff@gmail.com', 'question_ID_14', 'g) Others', 'NO'),
(40, 2, 'ashraff@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(41, 2, 'ashraff@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(42, 2, 'ashraff@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(43, 2, 'ashraff@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'NO'),
(44, 2, 'ashraff@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'NO'),
(45, 2, 'ashraff@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'NO'),
(46, 2, 'ashraff@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(47, 2, 'ashraff@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(48, 2, 'ashraff@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(49, 2, 'ashraff@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(50, 2, 'ashraff@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO'),
(51, 3, 'azira@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'NO'),
(52, 3, 'azira@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(53, 3, 'azira@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'NO'),
(54, 3, 'azira@gmail.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'NO'),
(55, 3, 'azira@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'NO'),
(56, 3, 'azira@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'NO'),
(57, 3, 'azira@gmail.com', 'question_ID_7', 'd) Get a doctor', 'NO'),
(58, 3, 'azira@gmail.com', 'question_ID_8', '5) Have you ever been / are / are being treated / have been treated for the following illness? \r\n\r\na', 'YES'),
(59, 3, 'azira@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'YES'),
(60, 3, 'azira@gmail.com', 'question_ID_10', 'c) HIV', 'NO'),
(61, 3, 'azira@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(62, 3, 'azira@gmail.com', 'question_ID_12', 'e) Malaria', 'NO'),
(63, 3, 'azira@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(64, 3, 'azira@gmail.com', 'question_ID_14', 'g) Others', 'NO'),
(65, 3, 'azira@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(66, 3, 'azira@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'YES'),
(67, 3, 'azira@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'YES'),
(68, 3, 'azira@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'YES'),
(69, 3, 'azira@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'YES'),
(70, 3, 'azira@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'YES'),
(71, 3, 'azira@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(72, 3, 'azira@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(73, 3, 'azira@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'YES'),
(74, 3, 'azira@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'YES'),
(75, 3, 'azira@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'YES'),
(76, 4, 'hanah@yahoo.com', 'question_ID_1', '1) Are you feeling good today?', 'NO'),
(77, 4, 'hanah@yahoo.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(78, 4, 'hanah@yahoo.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'NO'),
(79, 4, 'hanah@yahoo.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'NO'),
(80, 4, 'hanah@yahoo.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'NO'),
(81, 4, 'hanah@yahoo.com', 'question_ID_6', 'c) Migraine attack/headache?', 'NO'),
(82, 4, 'hanah@yahoo.com', 'question_ID_7', 'd) Get a doctor', 'NO'),
(83, 4, 'hanah@yahoo.com', 'question_ID_8', '5) Have you ever been / are / are being treated / have been treated for the following illness? \r\n\r\na', 'NO'),
(84, 4, 'hanah@yahoo.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(85, 4, 'hanah@yahoo.com', 'question_ID_10', 'c) HIV', 'NO'),
(86, 4, 'hanah@yahoo.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(87, 4, 'hanah@yahoo.com', 'question_ID_12', 'e) Malaria', 'NO'),
(88, 4, 'hanah@yahoo.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(89, 4, 'hanah@yahoo.com', 'question_ID_14', 'g) Others', 'NO'),
(90, 4, 'hanah@yahoo.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(91, 4, 'hanah@yahoo.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(92, 4, 'hanah@yahoo.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(93, 4, 'hanah@yahoo.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'NO'),
(94, 4, 'hanah@yahoo.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'NO'),
(95, 4, 'hanah@yahoo.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'NO'),
(96, 4, 'hanah@yahoo.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(97, 4, 'hanah@yahoo.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(98, 4, 'hanah@yahoo.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(99, 4, 'hanah@yahoo.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(100, 4, 'hanah@yahoo.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO'),
(101, 5, 'haziqah@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'YES'),
(102, 5, 'haziqah@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'YES'),
(103, 5, 'haziqah@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'YES'),
(104, 5, 'haziqah@gmail.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'YES'),
(105, 5, 'haziqah@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'YES'),
(106, 5, 'haziqah@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'YES'),
(107, 5, 'haziqah@gmail.com', 'question_ID_7', 'd) Get a doctor', 'YES'),
(108, 5, 'haziqah@gmail.com', 'question_ID_8', '5) Have you ever been / are / are being treated / have been treated for the following illness? \r\n\r\na', 'YES'),
(109, 5, 'haziqah@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(110, 5, 'haziqah@gmail.com', 'question_ID_10', 'c) HIV', 'NO'),
(111, 5, 'haziqah@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(112, 5, 'haziqah@gmail.com', 'question_ID_12', 'e) Malaria', 'NO'),
(113, 5, 'haziqah@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(114, 5, 'haziqah@gmail.com', 'question_ID_14', 'g) Others', 'NO'),
(115, 5, 'haziqah@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(116, 5, 'haziqah@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(117, 5, 'haziqah@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(118, 5, 'haziqah@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'YES'),
(119, 5, 'haziqah@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'YES'),
(120, 5, 'haziqah@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'YES'),
(121, 5, 'haziqah@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(122, 5, 'haziqah@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(123, 5, 'haziqah@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(124, 5, 'haziqah@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(125, 5, 'haziqah@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO'),
(126, 6, 'hazeeq@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'YES'),
(127, 6, 'hazeeq@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(128, 6, 'hazeeq@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'NO'),
(129, 6, 'hazeeq@gmail.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'NO'),
(130, 6, 'hazeeq@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'NO'),
(131, 6, 'hazeeq@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'NO'),
(132, 6, 'hazeeq@gmail.com', 'question_ID_7', 'd) Get a doctor', 'NO'),
(133, 6, 'hazeeq@gmail.com', 'question_ID_8', '5) Have you ever been/are being treated for the following illness?: a)Stroke?', 'NO'),
(134, 6, 'hazeeq@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'YES'),
(135, 6, 'hazeeq@gmail.com', 'question_ID_10', 'c) HIV', 'YES'),
(136, 6, 'hazeeq@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'YES'),
(137, 6, 'hazeeq@gmail.com', 'question_ID_12', 'e) Malaria', 'YES'),
(138, 6, 'hazeeq@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'YES'),
(139, 6, 'hazeeq@gmail.com', 'question_ID_14', 'g) Others', 'YES'),
(140, 6, 'hazeeq@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'YES'),
(141, 6, 'hazeeq@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'YES'),
(142, 6, 'hazeeq@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'YES'),
(143, 6, 'hazeeq@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'YES'),
(144, 6, 'hazeeq@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'YES'),
(145, 6, 'hazeeq@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'YES'),
(146, 6, 'hazeeq@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'YES'),
(147, 6, 'hazeeq@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'YES'),
(148, 6, 'hazeeq@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'YES'),
(149, 6, 'hazeeq@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'YES'),
(150, 6, 'hazeeq@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'YES'),
(151, 7, 'husna@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'NO'),
(152, 7, 'husna@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(153, 7, 'husna@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'NO'),
(154, 7, 'husna@gmail.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'NO'),
(155, 7, 'husna@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'NO'),
(156, 7, 'husna@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'NO'),
(157, 7, 'husna@gmail.com', 'question_ID_7', 'd) Get a doctor', 'NO'),
(158, 7, 'husna@gmail.com', 'question_ID_8', '5) Have you ever been/are being treated for the following illness?: a)Stroke?', 'NO'),
(159, 7, 'husna@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(160, 7, 'husna@gmail.com', 'question_ID_10', 'c) HIV', 'NO'),
(161, 7, 'husna@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(162, 7, 'husna@gmail.com', 'question_ID_12', 'e) Malaria', 'NO'),
(163, 7, 'husna@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(164, 7, 'husna@gmail.com', 'question_ID_14', 'g) Others', 'NO'),
(165, 7, 'husna@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(166, 7, 'husna@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(167, 7, 'husna@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(168, 7, 'husna@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'NO'),
(169, 7, 'husna@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'NO'),
(170, 7, 'husna@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'NO'),
(171, 7, 'husna@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(172, 7, 'husna@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(173, 7, 'husna@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(174, 7, 'husna@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(175, 7, 'husna@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO'),
(176, 7, 'husna@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'NO'),
(177, 7, 'husna@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(178, 7, 'husna@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'NO'),
(179, 7, 'husna@gmail.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'NO'),
(180, 7, 'husna@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'NO'),
(181, 7, 'husna@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'NO'),
(182, 7, 'husna@gmail.com', 'question_ID_7', 'd) Get a doctor', 'NO'),
(183, 7, 'husna@gmail.com', 'question_ID_8', '5) Have you ever been/are being treated for the following illness?: a)Stroke?', 'NO'),
(184, 7, 'husna@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(185, 7, 'husna@gmail.com', 'question_ID_10', 'c) HIV', 'NO'),
(186, 7, 'husna@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(187, 7, 'husna@gmail.com', 'question_ID_12', 'e) Malaria', 'NO'),
(188, 7, 'husna@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(189, 7, 'husna@gmail.com', 'question_ID_14', 'g) Others', 'NO'),
(190, 7, 'husna@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(191, 7, 'husna@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(192, 7, 'husna@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(193, 7, 'husna@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'NO'),
(194, 7, 'husna@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'NO'),
(195, 7, 'husna@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'NO'),
(196, 7, 'husna@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(197, 7, 'husna@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(198, 7, 'husna@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(199, 7, 'husna@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(200, 7, 'husna@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO'),
(201, 8, 'harun@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'NO'),
(202, 8, 'harun@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(203, 8, 'harun@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'NO'),
(204, 8, 'harun@gmail.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'NO'),
(205, 8, 'harun@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'NO'),
(206, 8, 'harun@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'NO'),
(207, 8, 'harun@gmail.com', 'question_ID_7', 'd) Get a doctor', 'NO'),
(208, 8, 'harun@gmail.com', 'question_ID_8', '5) Have you ever been/are being treated for the following illness?: a)Stroke?', 'NO'),
(209, 8, 'harun@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(210, 8, 'harun@gmail.com', 'question_ID_10', 'c) HIV', 'NO'),
(211, 8, 'harun@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(212, 8, 'harun@gmail.com', 'question_ID_12', 'e) Malaria', 'NO'),
(213, 8, 'harun@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(214, 8, 'harun@gmail.com', 'question_ID_14', 'g) Others', 'NO'),
(215, 8, 'harun@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(216, 8, 'harun@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(217, 8, 'harun@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(218, 8, 'harun@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'NO'),
(219, 8, 'harun@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'NO'),
(220, 8, 'harun@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'NO'),
(221, 8, 'harun@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(222, 8, 'harun@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(223, 8, 'harun@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(224, 8, 'harun@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(225, 8, 'harun@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO'),
(226, 9, 'masilah_ahmad@gmail.com', 'question_ID_1', '1) Are you feeling good today?', 'YES'),
(227, 9, 'masilah_ahmad@gmail.com', 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?', 'NO'),
(228, 9, 'masilah_ahmad@gmail.com', 'question_ID_3', '3) Have you ever donated blood before this?', 'YES'),
(229, 9, 'masilah_ahmad@gmail.com', 'question_ID_4', '4) In the last week: a) Took any medicine?', 'YES'),
(230, 9, 'masilah_ahmad@gmail.com', 'question_ID_5', 'b) Having fever/flu/cough?', 'YES'),
(231, 9, 'masilah_ahmad@gmail.com', 'question_ID_6', 'c) Migraine attack/headache?', 'YES'),
(232, 9, 'masilah_ahmad@gmail.com', 'question_ID_7', 'd) Get a doctor', 'YES'),
(233, 9, 'masilah_ahmad@gmail.com', 'question_ID_8', '5) Have you ever been/are being treated for the following illness?: a)Stroke?', 'NO'),
(234, 9, 'masilah_ahmad@gmail.com', 'question_ID_9', 'b) Hepatitis B/ Hepatitis C', 'NO'),
(235, 9, 'masilah_ahmad@gmail.com', 'question_ID_10', 'c) HIV', 'NO'),
(236, 9, 'masilah_ahmad@gmail.com', 'question_ID_11', 'd) Sifilis/Penyakit Kelamin ', 'NO'),
(237, 9, 'masilah_ahmad@gmail.com', 'question_ID_12', 'e) Malaria', 'NO'),
(238, 9, 'masilah_ahmad@gmail.com', 'question_ID_13', 'f) Kidney Malfunction', 'NO'),
(239, 9, 'masilah_ahmad@gmail.com', 'question_ID_14', 'g) Others', 'YES'),
(240, 9, 'masilah_ahmad@gmail.com', 'question_ID_15', '6) Did your family have / suffered from hepatitis?', 'NO'),
(241, 9, 'masilah_ahmad@gmail.com', 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment', 'NO'),
(242, 9, 'masilah_ahmad@gmail.com', 'question_ID_17', 'b) Receive blood transfusion ', 'NO'),
(243, 9, 'masilah_ahmad@gmail.com', 'question_ID_18', 'c) Getting injured by accidental blood stroke', 'NO'),
(244, 9, 'masilah_ahmad@gmail.com', 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks', 'NO'),
(245, 9, 'masilah_ahmad@gmail.com', 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?', 'NO'),
(246, 9, 'masilah_ahmad@gmail.com', 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?', 'NO'),
(247, 9, 'masilah_ahmad@gmail.com', 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection', 'NO'),
(248, 9, 'masilah_ahmad@gmail.com', 'question_ID_23', 'b) Corneal transfer', 'NO'),
(249, 9, 'masilah_ahmad@gmail.com', 'question_ID_24', 'c) Transfer of the membrane of the brain', 'NO'),
(250, 9, 'masilah_ahmad@gmail.com', 'question_ID_25', 'd) Bone sum transfer/ stem cell', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `donor_report`
--

CREATE TABLE `donor_report` (
  `no_report` int(10) NOT NULL,
  `donorID` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `donorName` varchar(100) NOT NULL,
  `donorAge` int(100) NOT NULL,
  `donorDOB` date NOT NULL,
  `donorNation` varchar(100) NOT NULL,
  `donorGender` varchar(100) NOT NULL,
  `donorStatus` varchar(100) NOT NULL,
  `donorContact` int(100) NOT NULL,
  `typeBlood` varchar(100) NOT NULL,
  `requestStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor_report`
--

INSERT INTO `donor_report` (`no_report`, `donorID`, `email`, `donorName`, `donorAge`, `donorDOB`, `donorNation`, `donorGender`, `donorStatus`, `donorContact`, `typeBlood`, `requestStatus`) VALUES
(1, 1, 'fatin@yahoo.com', 'FATIN HANANI BT AZREEL', 22, '1997-05-16', 'MALAY', 'FEMALE', 'SINGLE', 1239873645, 'O', 'PENDING'),
(2, 2, 'ashraff@gmail.com', 'muhammad ashraff azlan', 34, '1997-02-19', 'MALAY', 'MALE', 'SINGLE', 23856821, 'AB', 'PENDING'),
(3, 3, 'azira@gmail.com', 'AZIRA ZUHAIDEE BT KAMAL', 27, '1992-01-15', 'MALAY', 'FEMALE', 'MARRIED', 189230832, 'B', 'PENDING'),
(4, 4, 'hanah@yahoo.com', 'HANNAH BATRISYIA BT AHMAD', 20, '1999-05-11', 'CHINESE', 'FEMALE', 'WIDOWED/DIVORCED', 123678432, 'B', 'PENDING'),
(5, 5, 'haziqah@gmail.com', 'NUR FITRI HAZIQAH BT YUSOF', 26, '1993-04-06', 'MALAY', 'FEMALE', 'SINGLE', 198374399, 'A', 'PENDING'),
(6, 6, 'hazeeq@gmail.com', 'ikhwan hazeeq', 24, '1995-10-09', 'MALAY', 'MALE', 'SINGLE', 1987263511, 'A', 'DENIED'),
(7, 7, 'husna@gmail.com', 'syaizatu husna bt johan', 34, '1990-03-05', 'MALAY', 'FEMALE', 'SINGLE', 2147483647, 'AB', 'PENDING'),
(8, 8, 'harun@gmail.com', 'harun bin din', -36, '1967-10-04', 'IBAN', 'MALE', 'MARRIED', -4, 'AB', 'PENDING'),
(9, 9, 'masilah_ahmad@gmail.com', 'masilah bt ahmad', 48, '1970-01-19', 'MALAY', 'FEMALE', 'MARRIED', 341748393, 'AB', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(40) NOT NULL,
  `userLevel` varchar(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userLevel`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin', 'admin@eblood.com', '1234'),
(2, 'Staff', 'nurse', 'nurse@eblood.com', '1234'),
(3, 'Donor', 'fatin', 'fatin@yahoo.com', '1234'),
(4, 'Donor', 'ashraff', 'ashraff@gmail.com', '1234'),
(5, 'Donor', 'azira', 'azira@gmail.com', '1234'),
(6, 'Donor', 'hanah', 'hanah@yahoo.com', '1234'),
(7, 'Donor', 'haziqah', 'haziqah@gmail.com', '1234'),
(8, 'Donor', 'hazeeq', 'hazeeq@gmail.com', '1234'),
(9, 'Donor', 'husna', 'husna@gmail.com', '1234'),
(10, 'Donor', 'harun', 'harun@gmail.com', '1234'),
(11, 'Donor', 'masila', 'masilah_ahmad@gmail.com', '1234'),
(12, 'Admin', 'admin_eblood', 'admin29@eblood.com', '1234'),
(13, 'Staff', 'nurse34', 'nurse_34@eblood.com', '1234'),
(14, 'Donor', 'meor', 'meor@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `no` int(10) NOT NULL,
  `question_ID` varchar(100) NOT NULL,
  `questions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`no`, `question_ID`, `questions`) VALUES
(1, 'question_ID_1', '1) Are you feeling good today?'),
(10, 'question_ID_10', 'c) HIV'),
(11, 'question_ID_11', 'd) Sifilis/Penyakit Kelamin '),
(12, 'question_ID_12', 'e) Malaria'),
(13, 'question_ID_13', 'f) Kidney Malfunction'),
(14, 'question_ID_14', 'g) Others'),
(15, 'question_ID_15', '6) Did your family have / suffered from hepatitis?'),
(16, 'question_ID_16', '7) In the past 6 months, have you ever been:\r\n\r\na) Undergo any surgical treatment'),
(17, 'question_ID_17', 'b) Receive blood transfusion '),
(18, 'question_ID_18', 'c) Getting injured by accidental blood stroke'),
(19, 'question_ID_19', '8) Have you ever received an immunization injection / beauty injection within the last 4 weeks'),
(2, 'question_ID_2', '2) Did you donate to test your blood for HIV, Hepatitis, Sifilis?'),
(20, 'question_ID_20', '9) Have you ever received dental treatment in the last 24 hours?'),
(21, 'question_ID_21', '10) In the last 24 hours have you taken intoxicating drinks?'),
(22, 'question_ID_22', '11) Have you ever received treatment:\r\n\r\na) Growth hormone injection'),
(23, 'question_ID_23', 'b) Corneal transfer'),
(24, 'question_ID_24', 'c) Transfer of the membrane of the brain'),
(25, 'question_ID_25', 'd) Bone sum transfer/ stem cell'),
(3, 'question_ID_3', '3) Have you ever donated blood before this?'),
(4, 'question_ID_4', '4) In the last week: a) Took any medicine?'),
(5, 'question_ID_5', 'b) Having fever/flu/cough?'),
(6, 'question_ID_6', 'c) Migraine attack/headache?'),
(7, 'question_ID_7', 'd) Get a doctor\'s treatment for health problems?'),
(8, 'question_ID_8', '5) Have you ever been/are being treated for the following illness?: a)Stroke?'),
(9, 'question_ID_9', 'b) Hepatitis B/ Hepatitis C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`blood_ID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donorID`);

--
-- Indexes for table `donor_question`
--
ALTER TABLE `donor_question`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `donor_report`
--
ALTER TABLE `donor_report`
  ADD PRIMARY KEY (`no_report`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_ID`),
  ADD UNIQUE KEY `question_ID` (`question_ID`),
  ADD UNIQUE KEY `no` (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `blood_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donorID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PRIMARY', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donor_question`
--
ALTER TABLE `donor_question`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `donor_report`
--
ALTER TABLE `donor_report`
  MODIFY `no_report` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
