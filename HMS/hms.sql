-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 11:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `Name`, `Email`, `Gender`, `Username`, `Password`, `Contact`) VALUES
(5, 'Akib Rahman', 'akib@gmail.com', 'Male', 'akib', '111111', '01233223322'),
(6, 'Dip', 'dip@gmail.com', 'Male', 'dip', '111111', '01711223311'),
(7, 'Akib Rahman', 'akib2@gmail.com', 'Male', 'akib4', '111111', '01733665544');

-- --------------------------------------------------------

--
-- Table structure for table `admittedpatient`
--

CREATE TABLE `admittedpatient` (
  `Id` int(100) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admittedpatient`
--

INSERT INTO `admittedpatient` (`Id`, `PatientName`, `Age`, `Phone`, `Speciality`) VALUES
(2, 'Kabyo ', '24', '01711355787', 'Medicine'),
(3, 'Prosenjit', '24', '01711355787', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(100) NOT NULL,
  `Username` text NOT NULL,
  `Day` text NOT NULL,
  `Time` text NOT NULL,
  `Date` text NOT NULL,
  `Speciality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `Username`, `Day`, `Time`, `Date`, `Speciality`) VALUES
(24, 'sakib', 'Sunday', '5pm', '2022-08-03', 'Medicine'),
(26, 'rajib', 'Sunday', '6 pm', '2022-08-10', 'Medicine'),
(27, 'sifat', 'Saturday', '8 pm', '2022-08-18', 'Medicine'),
(29, 'rahul', 'Saturday', '6 pm', '2022-08-18', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `cabinbooking`
--

CREATE TABLE `cabinbooking` (
  `Id` int(100) NOT NULL,
  `Username` text NOT NULL,
  `Date` text NOT NULL,
  `CabinNo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Id` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Complain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Id`, `Username`, `Title`, `Complain`) VALUES
(1, 'kabyo', 'check', 'scfsdcf');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Id` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Degree` text NOT NULL,
  `Speciality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors_db`
--

CREATE TABLE `doctors_db` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_db`
--

INSERT INTO `doctors_db` (`Id`, `Name`, `Email`, `Gender`, `Username`, `Password`, `Contact`, `Speciality`, `Photo`) VALUES
(3, 'Checker', 'aa.shahriar11@gmail.com', 'Female', 'check', '222222', '01715446655', 'Chile', '../Asset/Photo/default.jpg'),
(4, 'Rahul Khan', 'rahul@gmail.com', 'Male', 'rahul', '666666', '013333333333', 'Medicine', '../Asset/Photo/eng.png');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_reg`
--

CREATE TABLE `doctors_reg` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `equipement`
--

CREATE TABLE `equipement` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipement`
--

INSERT INTO `equipement` (`Id`, `Name`, `Price`, `Date`) VALUES
(1, 'check', '3333', '2022-08-04'),
(2, 'MRI', '3500000', '2022-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `equipement_info`
--

CREATE TABLE `equipement_info` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PurchaseDate` varchar(100) NOT NULL,
  `Equip_Condition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipement_info`
--

INSERT INTO `equipement_info` (`Id`, `Name`, `PurchaseDate`, `Equip_Condition`) VALUES
(1, 'X-Ray Machine', '2016-06-09', 'Not Ok'),
(2, 'Test Value', '2022-06-08', 'Not Ok');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalbills`
--

CREATE TABLE `hospitalbills` (
  `Id` int(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  `Utility` varchar(100) NOT NULL,
  `EmployeeSalary` varchar(100) NOT NULL,
  `TotalBill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalbills`
--

INSERT INTO `hospitalbills` (`Id`, `Month`, `Utility`, `EmployeeSalary`, `TotalBill`) VALUES
(1, 'January', '50000', '170000', '220000'),
(2, 'August', '150000', '860000', '1010000'),
(3, 'August', '150000', '860000', '1010000');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceNo` int(100) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `TestBill` varchar(100) NOT NULL,
  `DoctorBill` varchar(100) NOT NULL,
  `TotalBill` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Id` int(100) NOT NULL,
  `PostedBy` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Details` varchar(250) NOT NULL,
  `Vacancy` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`Id`, `Name`, `Email`, `Gender`, `Username`, `Password`, `Contact`, `Photo`) VALUES
(1, 'dcfvsdvc', 'check@gmail.com', 'Male', 'sakib', 'dddddd', '111111', ''),
(2, 'mr check', 'check@gmail.com', 'Male', 'check1', 'nnnnnn', '111111', '../Asset/Photo/eng.png'),
(3, 'Mr Check', 'check@gmail.com', 'Male', 'check', 'nnnnnn', '111111', '../Asset/Photo/eng.png'),
(4, 'bbb', 'bb', 'Male', 'bbb', '', 'b', '../Asset/Photo/flusk.png'),
(5, 'Prosenjit Chowdhury', 'prosenjit@gmail.com', 'Male', 'prosenjit', '111111', '01223355661', '../Asset/Photo/eng.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Id` int(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Body` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Id`, `Title`, `Body`) VALUES
(7, 'Notice From Management', 'Urgent Meeting Needed'),
(8, 'Introduction To Linux', 'Checking Notice');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Id` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Age` text NOT NULL,
  `Mobile` text NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Id`, `Name`, `Username`, `Password`, `Age`, `Mobile`, `Gender`) VALUES
(12, 'kabyo deb', 'kabyo', '111111', '21', '01722334455', 'Male'),
(13, 'Prosenjit Chowdhury', 'kabyodeb', '1111', '24', '012222222222', 'Male'),
(14, 'Jisun Abedin', 'kabyoo', '1111', '23', '012222222222', 'Male'),
(15, 'Prosenjit Chowdhury', 'biswas', '1111', '23', '012222222222', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Id` int(100) NOT NULL,
  `Doctor` varchar(100) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Medicine` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Id`, `Doctor`, `PatientName`, `Age`, `Medicine`, `Speciality`) VALUES
(1, 'rahul', 'Jisun Abedin', '23', 'Napa', 'Medicine'),
(2, 'rahul', 'Rahim Mia', '26', 'Napa, Tufnil, Volagel', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `purchasemedicine`
--

CREATE TABLE `purchasemedicine` (
  `Id` int(100) NOT NULL,
  `Username` text NOT NULL,
  `Medicine1` text NOT NULL,
  `Price1` text NOT NULL,
  `Medicine2` text NOT NULL,
  `Price2` text NOT NULL,
  `Medicine3` text NOT NULL,
  `Price3` text NOT NULL,
  `TotalPrice` text NOT NULL,
  `PaymentMethod` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `Id` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `Withdrawn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`Id`, `Username`, `Month`, `Salary`, `Withdrawn`) VALUES
(1, 'rahul', 'July', '25000', 'Withdrawn'),
(2, 'rahul', 'August', '25000', 'Withdrawn');

-- --------------------------------------------------------

--
-- Table structure for table `testprice`
--

CREATE TABLE `testprice` (
  `Id` int(100) NOT NULL,
  `TestName` text NOT NULL,
  `Price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testprice`
--

INSERT INTO `testprice` (`Id`, `TestName`, `Price`) VALUES
(11, 'X-Ray', '500'),
(12, 'autopsy', '1500'),
(13, 'Biopsy', '3000'),
(14, 'Blood Test', '200'),
(15, 'Ultrasound', '3000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`Username`) USING HASH;

--
-- Indexes for table `admittedpatient`
--
ALTER TABLE `admittedpatient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cabinbooking`
--
ALTER TABLE `cabinbooking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctors_db`
--
ALTER TABLE `doctors_db`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctors_reg`
--
ALTER TABLE `doctors_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `equipement_info`
--
ALTER TABLE `equipement_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hospitalbills`
--
ALTER TABLE `hospitalbills`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceNo`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `purchasemedicine`
--
ALTER TABLE `purchasemedicine`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testprice`
--
ALTER TABLE `testprice`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admittedpatient`
--
ALTER TABLE `admittedpatient`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cabinbooking`
--
ALTER TABLE `cabinbooking`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors_db`
--
ALTER TABLE `doctors_db`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors_reg`
--
ALTER TABLE `doctors_reg`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipement_info`
--
ALTER TABLE `equipement_info`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospitalbills`
--
ALTER TABLE `hospitalbills`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceNo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchasemedicine`
--
ALTER TABLE `purchasemedicine`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testprice`
--
ALTER TABLE `testprice`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
