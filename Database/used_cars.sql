-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 04:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxexp`
--

-- --------------------------------------------------------

--
-- Table structure for table `used_cars`
--

CREATE TABLE `used_cars` (
  `ucid` varchar(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Price` int(5) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `Mileage` varchar(10) NOT NULL,
  `Fuel` varchar(10) NOT NULL,
  `Seller` varchar(10) NOT NULL,
  `Owner` varchar(10) NOT NULL,
  `Transmission` varchar(10) NOT NULL,
  `Location` varchar(10) NOT NULL,
  `Image` varchar(20) NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `Certified` char(20) DEFAULT NULL,
  `Manufacturingyear` int(11) DEFAULT NULL,
  `BodyType` char(20) DEFAULT NULL,
  `kmsDriven` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used_cars`
--

INSERT INTO `used_cars` (`ucid`, `Name`, `Price`, `Model`, `Mileage`, `Fuel`, `Seller`, `Owner`, `Transmission`, `Location`, `Image`, `phone_number`, `Certified`, `Manufacturingyear`, `BodyType`, `kmsDriven`) VALUES
('usb201501', 'Baleno', 7, 'vxi', '21', 'Petrol', 'Dealer', '2nd', 'Manual', 'Mumbai', 'usb201501.jpg', 2147483647, 'y', 2015, 'Hatch back', 45000),
('uns201402', 'Sunny', 5, 'lxi', '16.9', 'Petrol', 'Individual', '3rd', 'Manual', 'Thane', 'uns201402.jpg', 2147483647, 'y', 2014, 'Sedan', 25000),
('uvv201303', 'Vento', 5, 'vxi', '15.04', 'Petrol', 'Dealer', '3rd', 'Manual', 'Delhi', 'c3.jpg', 2147483647, 'y', 2013, 'Sedan', 50000),
('uti201304', 'Indigo', 3, 'lxi', '13', 'Petrol', 'Individual', '2nd', 'Manual', 'Pune', 'c4.jpg', 1187978789, 'y', 2013, 'Sedan', 17000),
('ums201605', 'Dzire', 7, 'zxi', '20.85', 'Petrol', 'Individual', '1st', 'Manual', 'Pune', 'c5.jpg', 1287978789, 'n', 2016, 'Sedan', 10000),
('uhi201106', 'i10', 3, 'zxi', '19.81', 'Petrol', 'Dealer', '3rd', 'Manual', 'Delhi', 'c6.jpg', 1387978789, 'n', 2011, 'Hatch Back', 11000),
('uti201407', 'Indigo', 3, 'zxi', '19.6', 'Diesel', 'Individual', '2nd', 'Manual', 'Delhi', 'c7.jpg', 1487978789, 'y', 2014, 'Sedan', 9000),
('utn201508', 'Nano', 2, 'zxi', '25.35', 'Petrol', 'Individual', '2nd', 'Manual', 'Delhi', 'c8.jpg', 1156978789, 'y', 2015, 'Hatch Back', 70000),
('uvv201309', 'Vento', 5, 'vdi', '15.04', 'Petrol', 'Dealer', '2nd', 'Manual', 'Chennai', 'c9.jpg', 1267978789, 'n', 2013, 'Sedan', 75000),
('uha201510', 'Amaze', 7, 'vdi', '15.5 ', 'Petrol', 'Dealer', '3rd', 'Automatic', 'Chennai', 'c10.jpg', 1378978789, 'n', 2015, 'Hatch Back', 90000),
('uti201211', 'Indigo', 3, 'vdi', '19.6', 'Diesel', 'Dealer', '3rd', 'Manual', 'Chennai', 'c11.jpg', 1489978789, 'y', 2012, 'Hatch Back', 40000),
('umb201512', 'Baleno', 7, 'vdi', '21.4', 'Petrol', 'Dealer', '1st', 'Manual', 'Chennai', 'c12.jpg', 1190978789, 'y', 2015, 'Sedan', 30000),
('umq201313', 'Quanto', 5, 'vxi', '17.1', 'Diesel', 'Dealer', '1st', 'Manual', 'Mumbai', 'c13.jpg', 1212978789, 'n', 2013, 'Suv', 45000),
('ume201314', 'Ertiga', 7, 'lxi', '16.02', 'Petrol', 'Individual', '2nd', 'Manual', 'Mumbai', 'c14.jpg', 1323978789, 'n', 2013, 'Hatch Back', 55000),
('umx201415', 'XUV500', 10, 'lxi', '15.1', 'Diesel', 'Individual', '1st', 'Manual', 'Mumbai', 'c15.jpg', 1434978789, 'y', 2014, 'Suv', 51000),
('ume201016', 'Estilo', 2, 'zxi', '19', 'Petrol', 'Dealer', '1st', 'Manual', 'Mumbai', 'c16.jpg', 1434988789, 'n', 2010, 'Hatch Back', 41000),
('uhe201217', 'Eon', 3, 'lxi', '21.1', 'Petrol', 'Dealer', '1st', 'Manual', 'Goa', 'c17.jpg', 1434999789, 'y', 2012, 'Hatch Back', 31000),
('umw201318', 'WagonR', 4, 'vdi', '15', 'Petrol', 'Dealer', '1st', 'Manual', 'Goa', 'c18.jpg', 1434967789, 'n', 2013, 'Hatch Back', 21000),
('uhc201019', 'Civic', 5, 'lxi', '10.6', 'Petrol', 'Dealer', '1st', 'Manual', 'Goa', 'c19.jpg', 1434968789, 'y', 2010, 'Sedan', 22000),
('uma201120', 'Alto', 2, 'lxi', '20.2', 'Diesel', 'Individual', '2nd', 'Manual', 'Punjab', 'c20.jpg', 1434789789, 'y', 2011, 'Hatch Back', 32000),
('umb201521', 'Mercedes B', 35, 'vdi', '21', 'Diesel', 'Dealer', '1st', 'Automatic', 'New Delhi', 'c21.jpg', 1434579789, 'n', 2015, 'Sedan', 54770),
('ulc201222', 'Toyota Lan', 65, 'vdi', '21', 'Diesel', 'Dealer', '1st', 'Automatic', 'New Delhi', 'c22.jpg', 1434357789, 'y', 2012, 'Suv', 61230),
('uff201323', 'Ford Figo ', 3, 'vdi', '17', 'Diesel', 'Dealer', '1st', 'Manual', 'New Delhi', 'c23.jpg', 1434689789, 'y', 2013, 'Hatch Back', 61780),
('24', 'Maruti sx4', 2, 'vxi', '18', 'Petrol', 'Dealer', '1st', 'Manual', 'Punjab', 'c24.jpg', 1232222233, 'y', 2007, 'Sedan', 59000),
('25', ' AccordVTi', 3, 'lxi', '19', 'Petrol', 'Dealer', '2nd', 'Manual', 'Punjab', 'c25.jpg', 1213233233, 'y', 2007, 'Sedan', 51259),
('27', 'Zen Estilo', 2, 'vxi', '17', 'Petrol', 'Individual', '1st', 'Manual', 'Thane', 'c27.jpg', 1212343556, 'y', 2011, 'Hatch Back', 13000),
('26', ' i20Active', 8, 'vxi', '19', 'Petrol', 'Dealer', '1st', 'Manual', 'Kerela', 'c26.jpg', 1212332453, 'y', 2016, 'Hatch Back', 1545),
('28', 'Alto LXi', 1, 'lxi', '19', 'Petrol', 'Dealer', '1st', 'Manual', 'Mumbai', 'c28.jpg', 1242455666, 'y', 2010, 'Hatch Back', 50000),
('29', ' Cruze LTZ', 7, 'vxi', '20', 'Petrol', 'Dealer', '2nd', 'Manual', 'Kerela', 'c29.jpg', 1345435666, 'n', 2011, 'Sedan', 38),
('30', 'Pulse RxZ', 4, 'vdi', '18', 'Diesel', 'Dealer', '1sr', 'Manual', 'Kerela', 'c30.jpg', 1235465364, 'y', 2012, 'Hatch Back', 57670);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
