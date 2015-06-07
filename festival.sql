-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2015 at 11:38 PM
-- Server version: 5.6.23-enterprise-commercial-advanced-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `festival`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowhistory`
--

CREATE TABLE IF NOT EXISTS `borrowhistory` (
  `OrderID` int(40) NOT NULL AUTO_INCREMENT,
  `VisitorID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `BorrowDate` datetime(6) DEFAULT NULL,
  `ReturnDate` datetime(6) DEFAULT NULL,
  `EmployeeID` int(11) NOT NULL,
  `StandID` int(11) NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `ItemID` (`ItemID`),
  KEY `VisitorID` (`VisitorID`),
  KEY `EmployeeID` (`EmployeeID`),
  KEY `StandID` (`StandID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `borrowhistory`
--

INSERT INTO `borrowhistory` (`OrderID`, `VisitorID`, `ItemID`, `BorrowDate`, `ReturnDate`, `EmployeeID`, `StandID`) VALUES
(29, 1, 1, '2015-05-20 01:51:23.287265', '2015-05-20 01:51:56.000000', 1, 5),
(30, 1, 3, '2015-05-20 01:51:23.423356', NULL, 1, 5),
(31, 1, 4, '2015-05-20 01:51:23.555443', NULL, 1, 5),
(32, 1, 4, '2015-05-20 01:51:43.396588', NULL, 1, 5),
(33, 1, 4, '2015-05-20 01:51:43.542685', NULL, 1, 5),
(34, 1, 4, '2015-05-20 01:51:43.674774', NULL, 1, 5),
(35, 1, 3, '2015-05-20 01:52:01.011260', NULL, 1, 5),
(36, 1, 7, '2015-05-20 01:52:01.105322', NULL, 1, 5),
(37, 2, 3, '2015-05-31 17:52:39.295294', NULL, 1, 6),
(38, 2, 3, '2015-05-31 17:52:39.449396', NULL, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `consumableorder`
--

CREATE TABLE IF NOT EXISTS `consumableorder` (
  `ConsOrderID` int(200) NOT NULL AUTO_INCREMENT,
  `ItemID` int(11) NOT NULL,
  `VisitorID` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `StandID` int(11) NOT NULL,
  PRIMARY KEY (`ConsOrderID`),
  KEY `VisitorId_idx` (`VisitorID`),
  KEY `StandID_idx` (`StandID`),
  KEY `ItemID` (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_festival`
--

CREATE TABLE IF NOT EXISTS `customer_festival` (
  `VisitorID` int(11) NOT NULL AUTO_INCREMENT,
  `RFID` varchar(20) DEFAULT NULL,
  `Name` varchar(319) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Balance_Total` decimal(19,4) DEFAULT NULL,
  `Email` varchar(319) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `DateCreated` date NOT NULL,
  `Entered` tinyint(1) DEFAULT NULL,
  `Camping` tinyint(1) DEFAULT NULL,
  `TicketID` int(11) DEFAULT NULL,
  `TicketCode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`VisitorID`),
  KEY `TicketID1` (`TicketID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer_festival`
--

INSERT INTO `customer_festival` (`VisitorID`, `RFID`, `Name`, `BirthDate`, `Sex`, `Balance_Total`, `Email`, `UserName`, `Password`, `DateCreated`, `Entered`, `Camping`, `TicketID`, `TicketCode`) VALUES
(1, '28007be738', 'Gosho', '2015-05-03', 'M', '1500.0000', 'gosho@abv.bg', 'goshko', 'azsumpi4', '2015-05-11', 1, 1, 1, '123'),
(2, '5c005e3e8a', 'Remco', '2015-01-02', 'M', '2.0000', 'remco@gmail.com', 'remco', 'remko', '2015-05-11', 0, 0, 2, '231'),
(3, NULL, NULL, NULL, NULL, NULL, 'qwdqwd@abv.bg', 'asd', 'dqwd', '2015-06-05', NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'mitko', '$2y$12$FfhCxGHkQqX0Kz4MmRWBx.9hi9byRPSuB/wNxxcVUjR0m1vdhIOB.', '2015-06-05', NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 'mitaka', '$2y$12$9ssEezggHbQPczn4.Gp4C.zUq906TlMqeRjy5RUJ.nKzwR4NkP1T2', '2015-06-07', NULL, NULL, NULL, NULL),
(9, NULL, 'Mitio Pishtova', '1992-08-11', 'M', NULL, 'mitkopi4a@abv.bg', 'mitio', '$2y$12$sFqksqmb86VFr6HJruYGheJtbydLbCWyBst9W1IiGxMXvqBvupKE.', '2015-06-07', NULL, 0, 3, '22899'),
(11, NULL, 'Dimitar Aleksov', '1992-08-11', 'M', NULL, 'mitalexster@gmail.com', 'zuekut', '$2y$12$QfGVdkbLobcw7yxTFXkFXOQ0gFTY1HB/ibJlrzvcysnhVE9P/n7Cu', '2015-06-07', NULL, 0, 1, '47271');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EmployeeID` int(11) NOT NULL AUTO_INCREMENT,
  `RFID` varchar(20) NOT NULL,
  `Name` varchar(319) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `Manager` tinyint(4) NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `RFID`, `Name`, `DateOfBirth`, `Sex`, `Manager`) VALUES
(1, '4a0036de54', 'Dimitar', '2013-12-11', 'M', 0),
(2, '2800c19a7b', 'Simo', '2015-05-01', 'M', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employeehistory`
--

CREATE TABLE IF NOT EXISTS `employeehistory` (
  `employee_EmployeeID` int(11) NOT NULL,
  `stand_StandID` int(11) NOT NULL,
  `HoursWorked` double DEFAULT NULL,
  KEY `fk_EmployeeHistory_stand1_idx` (`stand_StandID`),
  KEY `employee_EmployeeID` (`employee_EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeehistory`
--

INSERT INTO `employeehistory` (`employee_EmployeeID`, `stand_StandID`, `HoursWorked`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 4, 0),
(1, 5, 0.02),
(1, 3, 0),
(1, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ItemID` int(11) NOT NULL,
  `Name` varchar(319) NOT NULL,
  `Availability` tinyint(1) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Price` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `Name`, `Availability`, `Type`, `Price`) VALUES
(1, 'Camera', 1, 'rental', '10'),
(2, 'Laptop', 1, 'rental', '0'),
(3, 'SDcard', 1, 'rental', '0'),
(4, 'Charger', 1, 'rental', '0'),
(5, 'Tablette', 1, 'rental', '0'),
(6, 'Iphone', 1, 'rental', '0'),
(7, 'Gopro', 1, 'rental', '0'),
(8, 'Battery', 1, 'rental', '0'),
(9, 'Cola', 1, 'drink', '3'),
(10, 'Beer', 1, 'drink', '4'),
(11, 'Fanta', 1, 'drink', '4'),
(12, 'Water', 1, 'drink', '2'),
(13, 'Burger', 1, 'food', '4'),
(14, 'Fries', 1, 'food', '3'),
(15, 'Hot Dog', 1, 'food', '3'),
(16, 'Banana', 1, 'food', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stand`
--

CREATE TABLE IF NOT EXISTS `stand` (
  `Type` varchar(45) NOT NULL,
  `StandID` int(11) NOT NULL,
  PRIMARY KEY (`StandID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stand`
--

INSERT INTO `stand` (`Type`, `StandID`) VALUES
('Food', 1),
('Rentals', 2),
('Entering', 3),
('Leaving', 4),
('Camping', 5),
('MoneyBack', 6);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `ItemId` int(11) NOT NULL,
  `StandId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  KEY `ItemId_idx` (`ItemId`),
  KEY `StandId_idx` (`StandId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`ItemId`, `StandId`, `Quantity`) VALUES
(1, 2, 87),
(2, 2, 0),
(3, 2, 51),
(4, 2, 92),
(5, 2, 253),
(6, 2, 241),
(7, 2, 123),
(8, 2, 107),
(9, 1, 132),
(10, 1, 120),
(11, 1, 131),
(12, 1, 0),
(13, 1, 17),
(14, 1, 0),
(15, 1, 0),
(16, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `TicketID` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  PRIMARY KEY (`TicketID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TicketID`, `Type`) VALUES
(1, 'Day1'),
(2, 'Day2'),
(3, 'Day3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowhistory`
--
ALTER TABLE `borrowhistory`
  ADD CONSTRAINT `Employee_Borrow_ForeignKey` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`),
  ADD CONSTRAINT `RentalForeignKey` FOREIGN KEY (`ItemID`) REFERENCES `item` (`ItemID`),
  ADD CONSTRAINT `Stand_Borrow_ForeignKey` FOREIGN KEY (`StandID`) REFERENCES `stand` (`StandID`),
  ADD CONSTRAINT `VisitorForeignKey` FOREIGN KEY (`VisitorID`) REFERENCES `customer_festival` (`VisitorID`);

--
-- Constraints for table `consumableorder`
--
ALTER TABLE `consumableorder`
  ADD CONSTRAINT `ItemID_Reference` FOREIGN KEY (`ItemID`) REFERENCES `item` (`ItemID`),
  ADD CONSTRAINT `StandID_Reference` FOREIGN KEY (`StandID`) REFERENCES `stand` (`StandID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `VisitorID_Reference` FOREIGN KEY (`VisitorID`) REFERENCES `customer_festival` (`VisitorID`);

--
-- Constraints for table `customer_festival`
--
ALTER TABLE `customer_festival`
  ADD CONSTRAINT `TicketID1` FOREIGN KEY (`TicketID`) REFERENCES `ticket` (`TicketID`);

--
-- Constraints for table `employeehistory`
--
ALTER TABLE `employeehistory`
  ADD CONSTRAINT `fk_EmployeeHistory_stand1` FOREIGN KEY (`stand_StandID`) REFERENCES `stand` (`StandID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employeehistory_EmployeeID` FOREIGN KEY (`employee_EmployeeID`) REFERENCES `employee` (`EmployeeID`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `ItemIdStock` FOREIGN KEY (`ItemId`) REFERENCES `item` (`ItemID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `StandIdStock` FOREIGN KEY (`StandId`) REFERENCES `stand` (`StandID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
