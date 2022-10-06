-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 10:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villadepantaphurua`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `BO_ID` int(11) NOT NULL,
  `BO_Detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BK_ID` int(11) NOT NULL,
  `BK_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `BK_Date` date NOT NULL,
  `BK_Person` varchar(10) NOT NULL,
  `BK_QTY` varchar(33) NOT NULL,
  `BK_Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bookingstatus`
--

CREATE TABLE `bookingstatus` (
  `BKS_ID` int(11) NOT NULL,
  `BKS_Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookingstatus`
--

INSERT INTO `bookingstatus` (`BKS_ID`, `BKS_Status`) VALUES
(1, 'ยืนยันการได้ห้องพัก');

-- --------------------------------------------------------

--
-- Table structure for table `gendertype`
--

CREATE TABLE `gendertype` (
  `G_ID` int(11) NOT NULL,
  `Gendertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gendertype`
--

INSERT INTO `gendertype` (`G_ID`, `Gendertype`) VALUES
(1, 'ชาย'),
(2, 'หญิง'),
(3, 'ไม่ระบุ...');

-- --------------------------------------------------------

--
-- Table structure for table `invioce`
--

CREATE TABLE `invioce` (
  `IN_ID` int(11) NOT NULL,
  `IN_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IN_Date` date NOT NULL,
  `IN_Total` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PM_ID` int(11) NOT NULL,
  `PM_Date` date NOT NULL,
  `PM_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PM_Total` varchar(5) NOT NULL,
  `PM_Receipt` varchar(100) NOT NULL,
  `PM_Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `PR_ID` int(11) NOT NULL,
  `PR_Name` varchar(50) NOT NULL,
  `PR_Date` date NOT NULL,
  `PR_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(10, 'กรุงเทพมหานคร'),
(11, 'สมุทรปราการ'),
(12, 'นนทบุรี'),
(13, 'ปทุมธานี'),
(14, 'พระนครศรีอยุธยา'),
(15, 'อ่างทอง'),
(16, 'ลพบุรี'),
(17, 'สิงห์บุรี'),
(18, 'ชัยนาท'),
(19, 'สระบุรี'),
(20, 'ชลบุรี'),
(21, 'ระยอง'),
(22, 'จันทบุรี'),
(23, 'ตราด'),
(24, 'ฉะเชิงเทรา'),
(25, 'ปราจีนบุรี'),
(26, 'นครนายก'),
(27, 'สระแก้ว'),
(30, 'นครราชสีมา'),
(31, 'บุรีรัมย์'),
(32, 'สุรินทร์'),
(33, 'ศรีสะเกษ'),
(34, 'อุบลราชธานี'),
(35, 'ยโสธร'),
(36, 'ชัยภูมิ'),
(37, 'อำนาจเจริญ'),
(38, 'บึงกาฬ'),
(39, 'หนองบัวลำภู'),
(40, 'ขอนแก่น'),
(41, 'อุดรธานี'),
(42, 'เลย'),
(43, 'หนองคาย'),
(44, 'มหาสารคาม'),
(45, 'ร้อยเอ็ด'),
(46, 'กาฬสินธุ์'),
(47, 'สกลนคร'),
(48, 'นครพนม'),
(49, 'มุกดาหาร'),
(50, 'เชียงใหม่'),
(51, 'ลำพูน'),
(52, 'ลำปาง'),
(53, 'อุตรดิตถ์'),
(54, 'แพร่'),
(55, 'น่าน'),
(56, 'พะเยา'),
(57, 'เชียงราย'),
(58, 'แม่ฮ่องสอน'),
(60, 'นครสวรรค์'),
(61, 'อุทัยธานี'),
(62, 'กำแพงเพชร'),
(63, 'ตาก'),
(64, 'สุโขทัย'),
(65, 'พิษณุโลก'),
(66, 'พิจิตร'),
(67, 'เพชรบูรณ์'),
(70, 'ราชบุรี'),
(71, 'กาญจนบุรี'),
(72, 'สุพรรณบุรี'),
(73, 'นครปฐม'),
(74, 'สมุทรสาคร'),
(75, 'สมุทรสงคราม'),
(76, 'เพชรบุรี'),
(77, 'ประจวบคีรีขันธ์'),
(80, 'นครศรีธรรมราช'),
(81, 'กระบี่'),
(82, 'พังงา'),
(83, 'ภูเก็ต'),
(84, 'สุราษฎร์ธานี'),
(85, 'ระนอง'),
(86, 'ชุมพร'),
(90, 'สงขลา'),
(91, 'สตูล'),
(92, 'ตรัง'),
(93, 'พัทลุง'),
(94, 'ปัตตานี'),
(95, 'ยะลา'),
(96, 'นราธิวาส');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `R_ID` int(11) NOT NULL,
  `R_Type` int(11) NOT NULL,
  `R_Price` varchar(5) NOT NULL,
  `R_Detail` varchar(1000) NOT NULL,
  `R_Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`R_ID`, `R_Type`, `R_Price`, `R_Detail`, `R_Img`) VALUES
(301, 0, '4000', '1เตียงใหญ่', 'img/'),
(511, 0, '4500', '2เตียงใหญ่', 'img/06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roomstatus`
--

CREATE TABLE `roomstatus` (
  `RS_ID` int(11) NOT NULL,
  `RS_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomstatus`
--

INSERT INTO `roomstatus` (`RS_ID`, `RS_Name`) VALUES
(1, 'ว่าง'),
(2, 'เต็ม'),
(3, 'กำลังทำความสะอาด');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `RT_ID` int(11) NOT NULL,
  `RT_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`RT_ID`, `RT_Name`) VALUES
(1, 'Standard'),
(2, 'Family'),
(3, 'Superior'),
(4, 'Deluxe'),
(5, 'Triple Family room');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `SV_ID` int(11) NOT NULL,
  `SV_Name` varchar(100) NOT NULL,
  `SV_Price` varchar(5) NOT NULL,
  `SV_QTY` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `US_ID` int(11) NOT NULL,
  `US_Name` varchar(50) NOT NULL,
  `US_Fname` varchar(100) NOT NULL,
  `US_Lname` varchar(100) NOT NULL,
  `US_BD` date NOT NULL,
  `US_Tel` varchar(10) NOT NULL,
  `US_Email` varchar(100) NOT NULL,
  `US_Address` int(10) NOT NULL,
  `US_Pass` varchar(100) NOT NULL,
  `US_Gender` int(11) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`US_ID`, `US_Name`, `US_Fname`, `US_Lname`, `US_BD`, `US_Tel`, `US_Email`, `US_Address`, `US_Pass`, `US_Gender`, `Type`) VALUES
(1, 'jugwoo', '1', '2', '1998-04-07', '0611501396', 'jungwoo@gmail.com', 40, '1234', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ustype`
--

CREATE TABLE `ustype` (
  `UST_ID` int(11) NOT NULL,
  `UST_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ustype`
--

INSERT INTO `ustype` (`UST_ID`, `UST_Type`) VALUES
(1, 'เจ้าของโรงแรม'),
(2, 'ผู้เข้าพัก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`BO_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BK_ID`),
  ADD KEY `BK_Status` (`BK_Status`);

--
-- Indexes for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  ADD PRIMARY KEY (`BKS_ID`);

--
-- Indexes for table `gendertype`
--
ALTER TABLE `gendertype`
  ADD PRIMARY KEY (`G_ID`);

--
-- Indexes for table `invioce`
--
ALTER TABLE `invioce`
  ADD PRIMARY KEY (`IN_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PM_ID`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`PR_ID`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `R_Type` (`R_Type`);

--
-- Indexes for table `roomstatus`
--
ALTER TABLE `roomstatus`
  ADD PRIMARY KEY (`RS_ID`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`RT_ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`SV_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`US_ID`),
  ADD KEY `Type` (`Type`),
  ADD KEY `US_Gender` (`US_Gender`),
  ADD KEY `US_Address` (`US_Address`);

--
-- Indexes for table `ustype`
--
ALTER TABLE `ustype`
  ADD PRIMARY KEY (`UST_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BK_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  MODIFY `BKS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gendertype`
--
ALTER TABLE `gendertype`
  MODIFY `G_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invioce`
--
ALTER TABLE `invioce`
  MODIFY `IN_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PM_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `PR_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=512;

--
-- AUTO_INCREMENT for table `roomstatus`
--
ALTER TABLE `roomstatus`
  MODIFY `RS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `RT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `SV_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `US_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ustype`
--
ALTER TABLE `ustype`
  MODIFY `UST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`BK_Status`) REFERENCES `bookingstatus` (`BKS_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `ustype` (`UST_ID`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`US_Gender`) REFERENCES `gendertype` (`G_ID`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`US_Address`) REFERENCES `province` (`province_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
