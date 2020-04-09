-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 04:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` varchar(15) NOT NULL,
  `E_NAME` varchar(50) NOT NULL,
  `DID` int(1) NOT NULL,
  `SAL` double(10,2) NOT NULL,
  `E_MOB` varchar(14) NOT NULL,
  `JOIN_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `ADDED_BY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `E_NAME`, `DID`, `SAL`, `E_MOB`, `JOIN_DATE`, `ADDED_BY`) VALUES
('1000', 'American International University - Bangladesh', 1, 50000.00, '01789456123', '2020-04-09 01:44:40', 'BT-01AD'),
('1002', 'American International University - Bangladesh', 1, 50000.00, '01510000001', '2020-04-09 02:10:24', 'BT-01AD'),
('2000', 'American International University - Bangladesh', 1, 200000.00, '01545248877', '2020-04-09 01:56:42', 'BT-01AD'),
('245', 'American International University - Bangladesh', 1, 250000.00, '01517788994', '2020-04-09 02:17:51', 'BT-01AD'),
('2587', 'American International University - Bangladesh', 2, 85000.00, '015145678951', '2020-04-09 02:19:25', 'BT-01AD'),
('50001', 'American International University - Bangladesh', 1, 35000.00, '01511489789', '2020-04-09 02:14:34', 'BT-01AD'),
('5002', 'American International University - Bangladesh', 1, 35000.00, '02312321231', '2020-04-09 02:15:49', 'BT-01AD'),
('80', 'American International University - Bangladesh', 1, 50000.00, '01222222233', '2020-04-09 02:04:19', 'BT-01AD'),
('8000', 'American International University - Bangladesh', 3, 50000.00, '00112223344', '2020-04-09 01:58:07', 'BT-01AD'),
('8001', 'American International University - Bangladesh', 3, 50000.00, '0000223311', '2020-04-09 02:06:11', 'BT-01AD'),
('854', 'American International University - Bangladesh', 3, 50000.00, '01447889966', '2020-04-09 02:01:21', 'BT-01AD'),
('8800', 'American International University - Bangladesh', 3, 50000.00, '01454784455', '2020-04-09 02:01:48', 'BT-01AD'),
('affadfv', 'American International University - Bangladesh', 1, 250000.00, '11111111456', '2020-04-03 19:43:47', 'BT-01AD'),
('ascsavs', 'ascac', 1, 35000.00, '0000000000', '2020-04-03 19:38:27', 'BT-01AD'),
('asfasdvfdvdfbvd', 'ascac', 1, 35000.00, '0000000015', '2020-04-03 19:39:39', 'BT-01AD'),
('BT-01AD', 'TANVIR TANJUM SHOURAV', 1, 250000.00, '01515217821', '2020-03-27 22:29:58', 'superuser'),
('BT-01MG', 'RAHATUL MAKSUD', 2, 50000.00, '01758845987', '2020-03-27 22:31:27', 'BT-01AD'),
('BT-01SM', 'ANIKA TAHSIN TINA', 3, 35000.00, '01752248657', '2020-03-27 22:37:26', 'BT-01AD'),
('BT-02AD', 'ZISHAD HOSSAIN LIMON', 1, 200000.00, '01945587624', '2020-03-27 23:15:59', 'BT-01AD'),
('BT-02MG', 'SHARABAN TAHURA', 2, 85000.00, '01945585858', '2020-03-27 23:19:46', 'BT-01AD'),
('BT-02SM', 'NOUSIN SHARON', 3, 38150.00, '01578945621', '2020-03-27 23:21:39', 'BT-01AD'),
('BT-03AD', 'DEWAN AMOR', 1, 185000.00, '01945587655', '2020-03-27 23:17:36', 'BT-01AD'),
('BT-03MG', 'LABIB AHSAN', 2, 78000.00, '01515785412', '2020-03-27 23:26:52', 'BT-01AD'),
('BT-03SM', 'AHNAF BRINTO', 3, 40000.00, '01458754125', '2020-03-27 23:36:20', 'BT-01AD'),
('BT-04AD', 'ATISH RHABAR', 1, 190000.00, '01325771548', '2020-03-27 23:33:01', 'BT-01AD'),
('BT-04MG', 'EHTESHAM AHSAN', 2, 78000.00, '01755785432', '2020-03-27 23:27:59', 'BT-01AD'),
('BT-04SM', 'PURAB AHMED', 3, 40000.00, '01958754999', '2020-03-27 23:37:53', 'BT-01AD'),
('BT-05AD', 'RAGIB TANJUM SHARNAV', 1, 150000.00, '01515210969', '2020-03-28 17:04:23', 'BT-01AD'),
('BT-05MG', 'ABRA AHMED', 2, 88000.00, '01825785493', '2020-03-27 23:29:52', 'BT-01AD'),
('BT-05SM', 'FAHIM AHMED', 3, 50000.00, '01751548254', '2020-03-27 23:42:21', 'BT-01AD'),
('BT-06AD', 'ZAKIR HOSSAIN KAMAL', 1, 250000.00, '01552321780', '2020-03-28 17:09:43', 'BT-01AD'),
('BT-06MG', 'ISHITA RAHMAN', 2, 77000.00, '01825771548', '2020-03-27 23:31:14', 'BT-01AD'),
('BT-06SM', 'ZAHIN AHMED', 3, 50000.00, '01751548288', '2020-03-27 23:42:53', 'BT-01AD'),
('BT-07AD', 'SHAHANA FERDOUS ETTY', 1, 250000.00, '01720017312', '2020-03-28 17:10:57', 'BT-01AD'),
('BT-07MG', 'ARMAN CHOWDHURY', 2, 75000.00, '01512123289', '2020-03-28 16:14:10', 'BT-01AD'),
('BT-07SM', 'IKRAM AHMED', 3, 50000.00, '01354845215', '2020-03-27 23:45:01', 'BT-01AD'),
('BT-07SMvsv', 'SHIRAZUM MUNIRA MEEM', 2, 250000.00, '01423698752', '2020-04-03 19:26:09', 'BT-01AD'),
('BT-08MG', 'AHNAF SHAKIL', 2, 85000.00, '01515275145', '2020-03-28 16:17:46', 'BT-01AD'),
('BT-08SM', 'INZAMAM HOSSAIN', 3, 47000.00, '01354841254', '2020-03-27 23:46:04', 'BT-01AD'),
('BT-09MG', 'ROUZA MIAH', 2, 85000.00, '01515299998', '2020-03-28 16:26:22', 'BT-01AD'),
('BT-09SM', 'AKIF AHMED', 1, 450000.00, '01515211234', '2020-03-28 00:27:05', 'BT-01AD'),
('BT-10SM', 'HAMIM AHMED', 2, 450000.00, '01515213210', '2020-03-28 00:31:52', 'BT-01AD'),
('BT-11SM', 'MEDUL MASUM', 2, 450000.00, '01845213210', '2020-03-28 00:33:18', 'BT-01AD'),
('BT-12SM', 'SHAHRIAR OMI', 3, 50000.00, '01720045873', '2020-03-28 00:50:33', 'BT-01AD'),
('BT-13SM', 'SHARMILA SANILA', 3, 49050.00, '0175220495', '2020-03-28 00:56:59', 'BT-01AD'),
('BT-14SM', 'NAIMA NIJHUM', 3, 29000.00, '01548214562', '2020-03-28 00:59:58', 'BT-01AD'),
('BT-15SM', 'RASHIK INZAMAM', 3, 35000.00, '01785421478', '2020-03-28 15:17:56', 'BT-01AD'),
('BT-16SM', 'SHIRAZUM MUNIRA MEEM', 3, 50000.00, '01515210000', '2020-03-28 15:34:27', 'BT-01AD'),
('BT-17SM', 'TANVIR AHMED', 3, 50000.00, '01515255555', '2020-03-28 16:57:41', 'BT-01AD'),
('BT-18SM', 'MOHAIMEN NILOY', 3, 50000.00, '01515299999', '2020-03-28 17:00:08', 'BT-01AD'),
('BT-19SM', 'HAMIM AHMED NILOY', 4, 50000.00, '01515215465', '2020-03-28 17:22:46', 'BT-01AD'),
('BT-20SM', 'ANIK BISWAS', 4, 50000.00, '019123456789', '2020-03-28 17:25:43', 'BT-01AD'),
('BT-21SM', 'UDOY AHMED', 3, 50000.00, '01547842154', '2020-03-28 19:50:34', 'BT-01AD'),
('BT-22SM', 'IKRAM RUSSEL', 3, 35000.00, '0151548632', '2020-03-28 19:52:01', 'BT-01AD'),
('BT-23SM', 'RUSSEL MIAH', 3, 35000.00, '0151546666', '2020-03-28 19:53:07', 'BT-01AD'),
('BT-24SM', 'RAYHAN MIAH', 3, 35000.00, '0151546646', '2020-03-28 19:53:50', 'BT-01AD'),
('BT-25SM', 'RAYHAN MIAH', 3, 35000.00, '0151546655', '2020-03-28 19:56:58', 'BT-01AD'),
('BT-26SM', 'ANIK SHARMA', 3, 50000.00, '01785546215', '2020-03-29 08:41:52', 'BT-01AD'),
('BT-27SM', 'TANIMA NASRIN', 3, 50000.00, '01515278630', '2020-03-30 19:33:08', 'BT-01AD'),
('BT-28SM', 'ORIN JAHAN', 3, 35000.00, '01487321548', '2020-03-30 19:48:40', 'BT-01AD'),
('BT-29SM', 'AHNAF JAMIL', 3, 35000.00, '01515214580', '2020-03-30 19:50:42', 'BT-01AD'),
('BT-30SM', 'AMZAD ALI', 3, 50000.00, '01548793254', '2020-03-30 20:12:22', 'BT-01AD'),
('BT-31SM', 'IMAM ALI', 3, 50000.00, '01515487633', '2020-03-30 20:17:56', 'BT-01AD'),
('BT-32SM', 'HASAN ALI', 3, 50000.00, '01515487601', '2020-03-30 20:20:46', 'BT-01AD'),
('BT-33SM', 'KHAIRUL ROBIN', 3, 50000.00, '01578621451', '2020-03-31 05:12:34', 'BT-01AD'),
('BT-34SM', 'MUNIR HASAN', 3, 50000.00, '01515217777', '2020-03-31 05:17:44', 'BT-01AD'),
('BT-35SM', 'AYMAN SADIK', 3, 35000.00, '01457623148', '2020-03-31 05:24:35', 'BT-01AD'),
('BT-36SM', 'SALMAN MUKTADIR', 3, 35000.00, '01515214578', '2020-03-31 05:38:32', 'BT-01AD'),
('BT-37SM', 'MAHFUZ MIA', 3, 35000.00, '01515783300', '2020-03-31 08:23:36', 'BT-01AD'),
('BT-38SM', 'HALIMA AKHTER', 3, 35000.00, '01515784485', '2020-03-31 08:24:50', 'BT-01AD'),
('BT-39SM', 'RONY RAIHAN', 3, 50000.00, '01515212345', '2020-04-02 00:40:16', 'BT-01AD'),
('BT-40SM', 'ABDULLAH MIA', 3, 35000.00, '01515234832', '2020-04-02 01:07:24', 'BT-01AD'),
('BT-41SM', 'ABDULLAH MIA', 3, 35000.00, '01515234122', '2020-04-02 01:07:52', 'BT-01AD'),
('BT-42SM', 'ABUL AZIZ', 3, 35000.00, '01515219944', '2020-04-02 01:10:39', 'BT-01AD'),
('BT-43SM', 'American International University - Bangladesh', 2, 35000.00, '01515278451', '2020-04-02 01:21:15', 'BT-01AD'),
('BT-44SM', 'American International University - Bangladesh', 2, 35000.00, '01515273300', '2020-04-02 01:22:23', 'BT-01AD'),
('BT-45SM', 'American International University - Bangladesh', 3, 35000.00, '01578325432', '2020-04-02 01:23:09', 'BT-01AD'),
('BT-46SM', 'American International University - Bangladesh', 3, 50000.00, '01615247877', '2020-04-02 01:39:22', 'BT-01AD'),
('BT-48SM', 'American International University - Bangladesh', 3, 50000.00, '01715247877', '2020-04-02 01:42:05', 'BT-01AD'),
('BT-50SM', 'American International University - Bangladesh', 1, 50000.00, '01515212032', '2020-04-03 18:55:04', 'BT-01AD'),
('BT-51SM', 'American International University - Bangladesh', 3, 50000.00, '01515212044', '2020-04-03 18:56:36', 'BT-01AD'),
('BT-52SM', 'American International University - Bangladesh', 3, 250000.00, '01515212459', '2020-04-03 18:58:29', 'BT-01AD'),
('BT-546531', 'American International University - Bangladesh', 2, 35000.00, '01515213214', '2020-04-03 19:27:11', 'BT-01AD'),
('BT=49SM', 'American International University - Bangladesh', 3, 50000.00, '01815247877', '2020-04-02 01:42:39', 'BT-01AD'),
('ccccvvv', 'American International University - Bangladesh', 1, 250000.00, '01512311235', '2020-04-03 19:20:12', 'BT-01AD'),
('ddd', 'American International University - Bangladesh', 2, 250000.00, '01111223344', '2020-04-07 09:26:30', 'BT-01AD'),
('dsffgfg', 'American International University - Bangladesh', 3, 50000.00, '01500000000', '2020-04-03 19:35:45', 'BT-01AD'),
('qwqwe', 'American International University - Bangladesh', 2, 35000.00, '77778894561', '2020-04-03 19:44:15', 'BT-01AD'),
('sadasfsdv', 'American International University - Bangladesh', 3, 35000.00, '01578314500', '2020-04-03 19:31:29', 'BT-01AD'),
('saffdbvsdfrh', 'ascac', 1, 35000.00, '0000000001', '2020-04-03 19:39:17', 'BT-01AD'),
('sdsdcsd', 'sdvdf', 1, 35000.00, '01547896321', '2020-04-03 19:04:56', 'BT-01AD'),
('ssdffgx', 'American International University - Bangladesh', 1, 250000.00, '11111111111', '2020-04-03 19:41:55', 'BT-01AD'),
('superuser', 'SUPER USER', 1, 0.00, '00000000000', '2020-03-27 01:25:08', 'superuser'),
('uupujp', 'zcvsc', 2, 250000.00, '015873001144', '2020-04-03 19:22:07', 'BT-01AD'),
('xxx', 'American International University - Bangladesh', 3, 250000.00, '01515218520', '2020-04-03 18:59:53', 'BT-01AD'),
('xxxcccvvv', 'American International University - Bangladesh', 1, 250000.00, '01512312345', '2020-04-03 19:21:17', 'BT-01AD'),
('yyyy123', 'xccc123', 2, 35000.00, '01423578033', '2020-04-03 19:09:38', 'BT-01AD'),
('zzzxxczxac', 'adad', 2, 35000.00, '01515123456', '2020-04-03 19:23:34', 'BT-01AD');

-- --------------------------------------------------------

--
-- Table structure for table `emp_image`
--

CREATE TABLE `emp_image` (
  `IEmpID` varchar(15) DEFAULT NULL,
  `EmpIMG` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `LID` varchar(15) NOT NULL,
  `SID` int(1) NOT NULL,
  `PASS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`LID`, `SID`, `PASS`) VALUES
('1000', 1, '2931'),
('1002', 1, '8865'),
('2000', 1, '7750'),
('245', 1, '2346'),
('2587', 2, '8878'),
('50001', 1, '4165'),
('5002', 1, '4960'),
('80', 1, '7884'),
('8000', 3, '4289'),
('8001', 3, '1994'),
('854', 3, '6137'),
('8800', 3, '2014'),
('affadfv', 1, '4458'),
('ascsavs', 1, '4712'),
('asfasdvfdvdfbvd', 1, '6271'),
('BT-01AD', 1, '1234'),
('BT-01MG', 2, '1234'),
('BT-01SM', 3, '1234'),
('BT-02AD', 1, '5170'),
('BT-02MG', 2, '6001'),
('BT-02SM', 3, '7624'),
('BT-03AD', 1, '1420'),
('BT-03MG', 2, '7322'),
('BT-03SM', 3, '5998'),
('BT-04AD', 1, '7240'),
('BT-04MG', 2, '8856'),
('BT-04SM', 3, '8615'),
('BT-05AD', 1, '1883'),
('BT-05MG', 2, '2649'),
('BT-05SM', 3, '9746'),
('BT-06AD', 1, '9599'),
('BT-06MG', 2, '3938'),
('BT-06SM', 3, '7235'),
('BT-07AD', 1, '1352'),
('BT-07MG', 2, '7115'),
('BT-07SM', 3, '1367'),
('BT-07SMvsv', 2, '6574'),
('BT-08MG', 2, '7781'),
('BT-08SM', 3, '4589'),
('BT-09MG', 2, '9846'),
('BT-09SM', 1, '5004'),
('BT-10SM', 2, '2300'),
('BT-11SM', 2, '4328'),
('BT-12SM', 3, '1971'),
('BT-13SM', 3, '8610'),
('BT-14SM', 3, '9364'),
('BT-15SM', 3, '4901'),
('BT-16SM', 3, '1331'),
('BT-17SM', 4, '9569'),
('BT-18SM', 3, '7706'),
('BT-19SM', 4, '5011'),
('BT-20SM', 4, '2706'),
('BT-21SM', 3, '5302'),
('BT-22SM', 3, '2637'),
('BT-23SM', 3, '5407'),
('BT-24SM', 3, '3085'),
('BT-25SM', 3, '5319'),
('BT-26SM', 3, '4033'),
('BT-27SM', 3, '8429'),
('BT-28SM', 3, '2697'),
('BT-29SM', 3, '6563'),
('BT-30SM', 3, '1898'),
('BT-31SM', 3, '7058'),
('BT-32SM', 3, '5302'),
('BT-33SM', 3, '1470'),
('BT-34SM', 3, '6106'),
('BT-35SM', 3, '5921'),
('BT-36SM', 3, '2747'),
('BT-37SM', 3, '5951'),
('BT-38SM', 3, '1777'),
('BT-39SM', 3, '2251'),
('BT-40SM', 3, '5417'),
('BT-41SM', 3, '2672'),
('BT-42SM', 3, '9243'),
('BT-43SM', 2, '2452'),
('BT-44SM', 2, '7682'),
('BT-45SM', 3, '2208'),
('BT-46SM', 3, '4504'),
('BT-48SM', 3, '5031'),
('BT-50SM', 1, '7200'),
('BT-51SM', 3, '2402'),
('BT-52SM', 3, '2749'),
('BT-546531', 2, '8505'),
('BT=49SM', 3, '9990'),
('cccc', 2, '7261'),
('ccccvvv', 1, '7200'),
('ddd', 2, '2285'),
('dsffgfg', 3, '9173'),
('qwqwe', 2, '3871'),
('sadasfsdv', 3, '8548'),
('saffdbvsdfrh', 1, '7467'),
('sdsdcsd', 1, '5612'),
('ssdffgx', 1, '1822'),
('superuser', 1, '3339'),
('uupujp', 2, '6529'),
('xxx', 3, '5898'),
('xxxcccvvv', 1, '8845'),
('yyyy123', 2, '1686'),
('zzzxxczxac', 2, '7082');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `NoteID` int(255) NOT NULL,
  `NoteName` varchar(50) NOT NULL,
  `OwnerID` varchar(10) NOT NULL,
  `Text` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`NoteID`, `NoteName`, `OwnerID`, `Text`) VALUES
(12, 'Contact', 'BT-01AD', '01515217821\r\n01720017312\r\n01552321780'),
(13, 'Task', 'BT-01AD', 'Complete the web project ASAP.'),
(14, 'To Do', 'BT-01AD', 'Solve the javaScript problem. Employee List');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` varchar(15) NOT NULL,
  `P_NAME` varchar(50) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `AVAILABILITY` varchar(15) DEFAULT NULL,
  `QUANTITY` int(15) NOT NULL,
  `BUY_PRICE` double(10,2) NOT NULL,
  `SELL_PRICE` double(10,2) NOT NULL,
  `MOD_BY` varchar(15) NOT NULL,
  `Add_PDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SLID` int(254) NOT NULL,
  `PID` varchar(15) NOT NULL,
  `QUANT` int(15) NOT NULL,
  `OB_AMMOUNT` double(10,2) NOT NULL,
  `PROFIT` double(10,2) NOT NULL,
  `C_NAME` varchar(25) NOT NULL,
  `C_MOB` varchar(14) NOT NULL,
  `SOLD_BY` varchar(15) NOT NULL,
  `Sell_SDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `SID` int(1) NOT NULL,
  `DESIGNATION` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`SID`, `DESIGNATION`) VALUES
(1, 'ADMIN'),
(2, 'MANAGER'),
(3, 'SALESMAN'),
(4, 'UNASSIGNED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`),
  ADD UNIQUE KEY `E_MOB` (`E_MOB`),
  ADD KEY `D_ID` (`DID`),
  ADD KEY `ADDED_BY` (`ADDED_BY`);

--
-- Indexes for table `emp_image`
--
ALTER TABLE `emp_image`
  ADD KEY `IEmpID` (`IEmpID`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`LID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`NoteID`),
  ADD KEY `OwnerID` (`OwnerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `MOD_BY` (`MOD_BY`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SLID`),
  ADD KEY `PID` (`PID`),
  ADD KEY `SOLD_BY` (`SOLD_BY`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `DESIGNATION` (`DESIGNATION`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `NoteID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SLID` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `status` (`SID`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`ADDED_BY`) REFERENCES `log_in` (`LID`),
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`EmpID`) REFERENCES `log_in` (`LID`);

--
-- Constraints for table `emp_image`
--
ALTER TABLE `emp_image`
  ADD CONSTRAINT `emp_image_ibfk_1` FOREIGN KEY (`IEmpID`) REFERENCES `employee` (`EmpID`);

--
-- Constraints for table `log_in`
--
ALTER TABLE `log_in`
  ADD CONSTRAINT `log_in_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `status` (`SID`);

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`OwnerID`) REFERENCES `log_in` (`LID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`MOD_BY`) REFERENCES `log_in` (`LID`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`SOLD_BY`) REFERENCES `log_in` (`LID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
