-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 04:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flora_cares`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `PrivilegeID` int(11) NOT NULL,
  `SpecialID` int(11) NOT NULL,
  `TimeRangeID` int(11) NOT NULL,
  `CareCenterID` int(11) NOT NULL,
  `DesiredTime` varchar(100) NOT NULL,
  `DesiredDate` varchar(100) NOT NULL,
  `MedicalConcern` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Moved_To` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `RoleID`, `PatientID`, `DoctorID`, `PrivilegeID`, `SpecialID`, `TimeRangeID`, `CareCenterID`, `DesiredTime`, `DesiredDate`, `MedicalConcern`, `Status`, `Moved_To`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, '2:00 PM', '4/9/2020', 'Stomach Ache', 'Unconfirmed', '4/9/2020');

-- --------------------------------------------------------

--
-- Table structure for table `carecenter`
--

CREATE TABLE `carecenter` (
  `CareCenterID` int(11) NOT NULL,
  `CareCenterName` varchar(100) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Phone_No` varchar(50) NOT NULL,
  `Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carecenter`
--

INSERT INTO `carecenter` (`CareCenterID`, `CareCenterName`, `Type`, `Location`, `Phone_No`, `Code`) VALUES
(1, 'Amara', 'Clinic', 'Bahan', '09450022111', 11922);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `PrivilegeID` int(11) NOT NULL,
  `SpecialID` int(11) NOT NULL,
  `TimeRangeID` int(11) NOT NULL,
  `CareCenterID` int(11) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `DFirstName` varchar(100) NOT NULL,
  `DLastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Privilege` varchar(100) NOT NULL,
  `Specialization` varchar(100) NOT NULL,
  `Field` varchar(100) NOT NULL,
  `Languages` varchar(100) NOT NULL,
  `Languages2` varchar(100) NOT NULL,
  `Languages3` varchar(100) NOT NULL,
  `StartTime` varchar(100) NOT NULL,
  `EndTime` varchar(100) NOT NULL,
  `NRC` varchar(100) NOT NULL,
  `Medical_ID` int(11) NOT NULL,
  `Certification` varchar(100) NOT NULL,
  `Credibility` varchar(100) NOT NULL,
  `License` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Phone_No` varchar(50) NOT NULL,
  `DoctorImage` varchar(300) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `City_Code` int(11) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorID`, `RoleID`, `PrivilegeID`, `SpecialID`, `TimeRangeID`, `CareCenterID`, `User_Name`, `DFirstName`, `DLastName`, `Email`, `Privilege`, `Specialization`, `Field`, `Languages`, `Languages2`, `Languages3`, `StartTime`, `EndTime`, `NRC`, `Medical_ID`, `Certification`, `Credibility`, `License`, `Location`, `Phone_No`, `DoctorImage`, `Password`, `City_Code`, `Country`) VALUES
(1, 1, 1, 1, 1, 1, 'Karma', 'JK', 'Rowling', 'berry@gmail.com', 'Customer Service', 'Surgeon', '', 'English', 'Italian', 'French', '7:00 AM', '2:00 PM', '12/KMY(N)067470', 112, '12312', '40%', '1241225242343', 'Bahan', '0912312313', 'Images/zero2.jpg', 'lol', 11082, 'Myanmar'),
(2, 1, 2, 1, 1, 1, 'Doctor Care', 'Juna', 'Arling', 'juna@gmail.com', 'Employee', 'Surgeon', '', 'Italian', 'Thai', 'Bangladesh', '1:00 PM', '7:00 PM', '12/KMY(N)067470', 112, '12312', '60%', '1241225242343', 'Bahan', '095036950', 'Images/zero3.jpg', 'pop', 11082, 'Myanmar'),
(3, 1, 2, 1, 1, 1, 'Doctor Flow', 'Flora', 'Panking', 'flora@gmail.com', 'Employee', 'Surgeon', '', 'Italian', 'Mandarin', 'Spanish', '12:00 AM', '5:00 PM', '12/KMY(N)067470', 112, '12312', '80%', '1241225242343', 'Bahan', '0912312313', 'Images/Animegirl.jpg', 'pop', 11082, 'Myanmar');

-- --------------------------------------------------------

--
-- Table structure for table `medicstore`
--

CREATE TABLE `medicstore` (
  `MedicStoreID` int(11) NOT NULL,
  `MedicStoreName` varchar(100) NOT NULL,
  `Certification` varchar(200) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Phone_No` varchar(50) NOT NULL,
  `Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NotificationID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `Notification` varchar(100) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Receiver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `PFirstName` varchar(100) NOT NULL,
  `PLastName` varchar(100) NOT NULL,
  `History` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_No` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `NRC` varchar(100) NOT NULL,
  `City_Code` int(11) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Age` int(100) NOT NULL,
  `BloodType` varchar(50) NOT NULL,
  `Bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `PatientName`, `User_Name`, `PFirstName`, `PLastName`, `History`, `Email`, `Phone_No`, `Address`, `Password`, `NRC`, `City_Code`, `Country`, `Gender`, `Age`, `BloodType`, `Bio`) VALUES
(1, 'Berry Ent', 'Bari', 'Berry', 'Ent', 'None', 'berry@gmail.com', '09450035977', 'Yankin', 'ggwp', '12/KMY(N)067470', 11081, 'Myanmar', 'Male', 18, 'O', 'Allergy'),
(2, 'Lily West', 'LilyLily', 'Lily', 'West', 'None', 'lily@gmail.com', '09450035977', 'Yankin', 'lwin', '12/KMY(N)067470', 11081, 'Myanmar', 'Female', 18, 'O', 'Allergy');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `PrivilegeID` int(11) NOT NULL,
  `PrivilegeName` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`PrivilegeID`, `PrivilegeName`, `Salary`) VALUES
(1, 'Admin', '$1000'),
(2, 'Employee', '$500'),
(3, 'Employee', '$500'),
(4, 'Customer Service', '$700');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleID`, `RoleName`) VALUES
(1, 'Doctor'),
(2, 'Patient'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `roleprivilege`
--

CREATE TABLE `roleprivilege` (
  `RolePrivilegeID` int(11) NOT NULL,
  `RolePrivilegeName` varchar(100) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `PrivilegeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `SpecialID` int(11) NOT NULL,
  `SpecialName` varchar(100) NOT NULL,
  `Field` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`SpecialID`, `SpecialName`, `Field`) VALUES
(1, 'Surgeon', 'Cardiac');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `PrivilegeID` int(11) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone_No` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `RoleName` varchar(100) NOT NULL,
  `NRC` varchar(100) NOT NULL,
  `City_Code` int(11) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Privilege` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `RoleID`, `PrivilegeID`, `User_Name`, `FirstName`, `LastName`, `Email`, `Phone_No`, `Password`, `Address`, `RoleName`, `NRC`, `City_Code`, `Country`, `Gender`, `Privilege`, `Salary`) VALUES
(1, 3, 1, 'Karma', 'Luna', 'Light', 'lily@gmail.com', '0912312313', 'kkm', 'South Okklapa', 'Staff', '12/KMY(N)067470', 11082, 'Myanmar', 'Female', 'Admin', '$1000');

-- --------------------------------------------------------

--
-- Table structure for table `timerange`
--

CREATE TABLE `timerange` (
  `TimeRangeID` int(11) NOT NULL,
  `StartTime` varchar(100) NOT NULL,
  `EndTime` varchar(100) NOT NULL,
  `Duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timerange`
--

INSERT INTO `timerange` (`TimeRangeID`, `StartTime`, `EndTime`, `Duration`) VALUES
(1, '2020-12-09', '2020-12-16', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `carecenter`
--
ALTER TABLE `carecenter`
  ADD PRIMARY KEY (`CareCenterID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `medicstore`
--
ALTER TABLE `medicstore`
  ADD PRIMARY KEY (`MedicStoreID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NotificationID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`PrivilegeID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `roleprivilege`
--
ALTER TABLE `roleprivilege`
  ADD PRIMARY KEY (`RolePrivilegeID`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`SpecialID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `timerange`
--
ALTER TABLE `timerange`
  ADD PRIMARY KEY (`TimeRangeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carecenter`
--
ALTER TABLE `carecenter`
  MODIFY `CareCenterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicstore`
--
ALTER TABLE `medicstore`
  MODIFY `MedicStoreID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `PrivilegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roleprivilege`
--
ALTER TABLE `roleprivilege`
  MODIFY `RolePrivilegeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `SpecialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timerange`
--
ALTER TABLE `timerange`
  MODIFY `TimeRangeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
