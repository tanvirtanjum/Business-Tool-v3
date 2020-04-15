-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 11:02 AM
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
('BT-01AD', 'TANVIR TANJUM SHOURAV', 1, 200000.00, '01515217821', '2020-04-14 22:58:19', 'superuser'),
('BT-01MG', 'RAHATUL MAKSUD', 2, 100000.00, '01735493564', '2020-04-14 23:01:42', 'BT-01AD'),
('BT-01SM', 'ANIKA TAHSIN TINA', 3, 50000.00, '01815247877', '2020-04-15 01:38:21', 'BT-01AD'),
('BT-02AD', 'ZISHAD HOSSAIN LIMON', 1, 170000.00, '01521203725', '2020-04-15 01:47:51', 'BT-01AD'),
('BT-03AD', 'DEWAN AMOR CHOWDHURY', 1, 170000.00, '01515247821', '2020-04-15 01:57:16', 'BT-02AD'),
('superuser', 'SUPER USER', 1, 0.00, '00000000000', '2020-03-27 01:25:08', 'superuser');

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
  `PASS` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`LID`, `SID`, `PASS`) VALUES
('BT-01AD', 1, '7ba0691b7777b6581397456412a41390'),
('BT-01MG', 2, '81b073de9370ea873f548e31b8adc081'),
('BT-01SM', 3, '2a845d4d23b883acb632fefd814e175f'),
('BT-02AD', 1, '01a5480f5021b4d8f231de3489e61c42'),
('BT-03AD', 1, '5da2297bad6924526e48e00dbfc3c27a'),
('superuser', 1, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `NoteID` int(255) NOT NULL,
  `NoteName` varchar(50) NOT NULL,
  `OwnerID` varchar(10) NOT NULL,
  `Text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `NoteID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SLID` int(254) NOT NULL AUTO_INCREMENT;

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
