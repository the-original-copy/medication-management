-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 04:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `cre_id` int(11) NOT NULL,
  `cus_id` int(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `amount` double NOT NULL,
  `discription` varchar(250) NOT NULL,
  `dis_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`cre_id`, `cus_id`, `date`, `amount`, `discription`, `dis_cat`) VALUES
(5, 18, '2022-07-05', 15000, 'Sample Receivable Amount', 'badge-gradient-success');

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE `debit` (
  `deb_id` int(11) NOT NULL,
  `cus_id` int(250) NOT NULL,
  `amount` double NOT NULL,
  `discription` varchar(250) NOT NULL,
  `category_id` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `dis_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `debit`
--

INSERT INTO `debit` (`deb_id`, `cus_id`, `amount`, `discription`, `category_id`, `date`, `dis_cat`) VALUES
(24, 18, 1250, 'Sample 101', 'Travel-Expenses', '2022-07-05', 'badge-gradient-warning');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `items` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recep`
--

CREATE TABLE `recep` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `hash_key` varchar(200) NOT NULL,
  `account_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `name`, `password`, `email`, `created`, `modified`, `status`, `hash_key`, `account_status`) VALUES
(1, 'Administrator', '0192023a7bbd73250516f069df18b500', 'admin@mail.com', '2022-07-05 00:00:00', '2022-07-05 00:00:00', 1, '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblmedication`
--

CREATE TABLE `tblmedication` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `Medication` varchar(200) DEFAULT NULL,
  `MedicationType` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Age` int(11) NOT NULL,
  `Dose` varchar(200) DEFAULT NULL,
  `Frequency` int(11) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `StartTime` time NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `NoteDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblmedication`
--

INSERT INTO `tblmedication` (`ID`, `UserId`, `Medication`, `MedicationType`, `Description`, `Age`, `Dose`, `Frequency`, `StartDate`, `StartTime`, `Status`, `NoteDate`) VALUES
(1, 1, 'Paracetamol', '', '', 0, '120', 0, '2021-09-19', '00:00:00', 0, '2021-09-22 16:28:16'),
(2, 1, 'Amoxyl', '', '', 0, '100', 0, '2021-09-19', '00:00:00', 0, '2021-09-22 16:28:39'),
(3, 1, 'Penicillin', '', '', 0, '100', 0, '2021-09-20', '00:00:00', 0, '2021-09-22 16:31:10'),
(4, 1, 'Brufen', '', '', 0, '25', 0, '2021-09-22', '00:00:00', 0, '2021-09-22 17:34:11'),
(7, 27, 'Paracetamol', '2', 'Painkiller', 20, '10mg', 3, '2023-07-17', '12:00:00', 0, '2023-07-16 21:26:52'),
(9, 28, 'Omeprazoleb', '0', 'Treat indigestion and heartburn', 21, '100mg', 1, '2023-07-17', '09:30:00', 0, '2023-07-17 06:17:57'),
(10, 27, 'Omeprazole', '1', 'Treat indigestion and heartburn', 20, '20mg', 3, '2023-07-17', '09:30:00', 0, '2023-07-21 17:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicationlist`
--

CREATE TABLE `tblmedicationlist` (
  `medication_id` int(11) NOT NULL,
  `medication_name` varchar(200) NOT NULL,
  `medication_type` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `date_added` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblmedicationlist`
--

INSERT INTO `tblmedicationlist` (`medication_id`, `medication_name`, `medication_type`, `age`, `date_added`) VALUES
(1, 'Aspirin', 'Tablet', 'Over 16 years', '2023-07-16 18:39:29'),
(2, 'Amoxicillin', 'Oral suspension', '3 months or older', '2023-07-16 18:50:26'),
(3, 'Amoxicillin', 'Chewable tablet', 'Over 2 years', '2023-07-16 18:53:37'),
(4, 'Amoxicillin', 'Capsule', 'Over 6 years', '2023-07-16 18:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `tblreminders`
--

CREATE TABLE `tblreminders` (
  `reminder_id` int(11) NOT NULL,
  `medication_id` int(11) NOT NULL,
  `reminder_time` time NOT NULL,
  `last_reminder_sent` datetime DEFAULT NULL,
  `next_reminder` datetime DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `FirstName` varchar(150) DEFAULT NULL,
  `LastName` varchar(150) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `DOB` date NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `role_id`, `FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`, `DOB`, `RegDate`) VALUES
(23, 2, 'Rob', NULL, 'jondeo@test.com', 742277094, '12345678', '0000-00-00', '2023-07-16 17:17:55'),
(24, 2, 'kiva', NULL, 'mary@gmail.com', 742277094, '12345678', '0000-00-00', '2023-07-16 17:18:09'),
(25, 2, 'monika', NULL, 'monika.waweru@strathmore.edu', 742277094, '12345678', '0000-00-00', '2023-07-16 17:18:31'),
(26, 2, 'Monika', 'Waweru', 'monikawaweru@gmail.com', 742277094, '12345678', '2013-07-03', '2023-07-16 17:18:45'),
(27, 2, 'Grace', 'Muli', 'muligrace@gmail.com', 712345678, '5e67d0b35a19f63ae8cf3c5e5bcf4c33', '2003-01-29', '2023-07-16 21:09:39'),
(28, 2, 'Grace', 'Muli', 'Grace.Muli@strathmore.edu', 113276577, '4bf1094f35e1e20aa825fbfad9e4188a', '0000-00-00', '2023-07-17 06:16:27'),
(29, 2, 'Jane', 'Doe', 'john@gmail.com', 712348765, 'd763ec748433fb79a04f82bd46133d55', '0000-00-00', '2023-07-21 14:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_roles`
--

CREATE TABLE `tbluser_roles` (
  `role_id` int(11) NOT NULL,
  `user_role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser_roles`
--

INSERT INTO `tbluser_roles` (`role_id`, `user_role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`cre_id`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`deb_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recep`
--
ALTER TABLE `recep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedication`
--
ALTER TABLE `tblmedication`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblmedicationlist`
--
ALTER TABLE `tblmedicationlist`
  ADD PRIMARY KEY (`medication_id`);

--
-- Indexes for table `tblreminders`
--
ALTER TABLE `tblreminders`
  ADD PRIMARY KEY (`reminder_id`),
  ADD KEY `medication_id` (`medication_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser_roles`
--
ALTER TABLE `tbluser_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `debit`
--
ALTER TABLE `debit`
  MODIFY `deb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recep`
--
ALTER TABLE `recep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblmedication`
--
ALTER TABLE `tblmedication`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblmedicationlist`
--
ALTER TABLE `tblmedicationlist`
  MODIFY `medication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblreminders`
--
ALTER TABLE `tblreminders`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblreminders`
--
ALTER TABLE `tblreminders`
  ADD CONSTRAINT `tblreminders_ibfk_1` FOREIGN KEY (`medication_id`) REFERENCES `tblmedication` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
