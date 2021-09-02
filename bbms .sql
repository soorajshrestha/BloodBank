-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 02:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_purchase`
--

CREATE TABLE IF NOT EXISTS `blood_purchase` (
`ID` int(11) NOT NULL,
  `Blood_Bank` varchar(50) NOT NULL,
  `Blood_Group` varchar(20) NOT NULL,
  `Number_Bottle` varchar(20) NOT NULL,
  `Date_Purchase` date NOT NULL,
  `Total_Price` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_purchase`
--

INSERT INTO `blood_purchase` (`ID`, `Blood_Bank`, `Blood_Group`, `Number_Bottle`, `Date_Purchase`, `Total_Price`) VALUES
(1, 'Nepal Red Cross Society ', 'A +VE', '15', '2016-10-04', 9000),
(2, 'Nepal Blood Bank', 'B -VE', '10', '2016-10-11', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `blood_sales`
--

CREATE TABLE IF NOT EXISTS `blood_sales` (
`ID` int(11) NOT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  `Number_Bottle` varchar(50) NOT NULL,
  `Date_Sale` date NOT NULL,
  `Total_Price` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_sales`
--

INSERT INTO `blood_sales` (`ID`, `Patient_Name`, `Blood_Group`, `Number_Bottle`, `Date_Sale`, `Total_Price`) VALUES
(1, 'Suraj Thapa', 'A +VE', '1', '2016-10-04', 600),
(2, 'Rachana KC', 'A +VE', '1', '2016-10-04', 600),
(3, 'Ram Gurung', 'A +VE', '2', '2016-10-04', 1200),
(4, 'Prashanna Shrestha', 'AB +VE', '3', '2016-10-21', 1800),
(5, 'Saroj Shrestha', 'B +VE', '3', '2016-09-22', 1800),
(8, 'Asmita Thapa', 'O -VE', '2', '2016-09-30', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE IF NOT EXISTS `reg_user` (
`ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  `Age` int(5) NOT NULL,
  `Contact_No` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`ID`, `First_Name`, `Last_Name`, `Username`, `Password`, `Email_Address`, `Blood_Group`, `Age`, `Contact_No`, `Address`, `Gender`) VALUES
(4, 'Manish', 'Kafle', 'kafle.manish', '202cb962ac59075b964b07152d234b70', 'manishkafle@gmail.com', 'A -ve', 19, '9845236722', 'lokanthali', 'Male'),
(5, 'Jiten', 'Limbu', 'limbu.jiten', '202cb962ac59075b964b07152d234b70', 'limoojiten@gmail.com', 'B -ve', 18, '9802541651', 'kritipur', 'Male'),
(6, 'Nirajan', 'Chaudhary', 'Chaudhary.Nirajan', '202cb962ac59075b964b07152d234b70', 'chaudharynirajan@gmail.com', 'B +ve', 18, '9803218454', 'Baneshwor', 'Male'),
(7, 'suraj', 'shrestha', 'shrestha.suraj', '4dd49f4f84e4d6945e3bc6d14812004e', 'shresthasooraj@gmail.com', 'AB +ve', 19, '9800651124', 'kalanki', 'Male'),
(8, 'Rajeev ', 'Sahi ', 'sahi.rajeev', 'a675ffb2ec24936fba6e16d5f384578f', 'sahirajeev@gmail.com', 'O +ve', 19, '9846581426', 'sundarijal', 'Male'),
(9, 'prashanna', 'shrestha', 'stha.gore', '202cb962ac59075b964b07152d234b70', 'stha.gore@gmail.com', 'A +ve', 17, '9845621652', 'Purano Naikap', 'Male'),
(10, 'priyanka', 'thapa', 'thapa.priyanka', '1fd96777aedeadb325c66f3780054765', 'thapa.priyanka@gmail.com', 'AB -ve', 20, '9861521530', 'ratnapark', 'Female'),
(11, 'shristhi', 'shrestha', 'stha.shristhi', '202cb962ac59075b964b07152d234b70', 'stha.shristhi@gmail.com', 'B +ve', 20, '9845611231', 'Bhaktapur', 'Female'),
(12, 'Anita ', 'Rana Magar', 'rana.anita', '202cb962ac59075b964b07152d234b70', 'ranaanita@gmail.com', 'A +ve', 18, '9846213586', 'Sita Paila', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_purchase`
--
ALTER TABLE `blood_purchase`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blood_sales`
--
ALTER TABLE `blood_sales`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_purchase`
--
ALTER TABLE `blood_purchase`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blood_sales`
--
ALTER TABLE `blood_sales`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
