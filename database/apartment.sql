-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 09:46 AM
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
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `AdminID` int(11) NOT NULL,
  `Adminname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`AdminID`, `Adminname`, `Address`, `Tel`, `Email`, `Password`, `Position`, `Level`) VALUES
(1, 'ADMIN', '50/584 59/1', '0930085001', 'admin@gmail.com', '1', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbcompany`
--

CREATE TABLE `tbcompany` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Vat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Picturelogo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbcompany`
--

INSERT INTO `tbcompany` (`ID`, `Name`, `Address`, `Tel`, `Vat`, `Picturelogo`) VALUES
(1, 'PA APARTMENT', 'บ้านเลขที่ 136 ถนนราชวิถี ซ.สวนอ้อย 2 แขวงวชิระ เขตดุสิต กทม.10300', '029272469', '7', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbemployee`
--

CREATE TABLE `tbemployee` (
  `EmpID` int(11) NOT NULL,
  `Empname` varchar(200) NOT NULL,
  `Empaddress` text NOT NULL,
  `Tel` varchar(100) NOT NULL,
  `Empposition` varchar(100) NOT NULL,
  `imgemployee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbemployee`
--

INSERT INTO `tbemployee` (`EmpID`, `Empname`, `Empaddress`, `Tel`, `Empposition`, `imgemployee`) VALUES
(1, 'สมหมาย เย็นดี', '888/9', '0292724699', 'ผู้จัดการ', '1139818.jpeg'),
(2, 'สมญิง เย็นดี', '888/9', '0891418877', 'แม่บ้าน', '855818.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tborder_detail`
--

CREATE TABLE `tborder_detail` (
  `oor_ID` int(10) NOT NULL,
  `or_ID` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL,
  `oor_qty` int(11) NOT NULL,
  `oor_subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tborder_detail`
--

INSERT INTO `tborder_detail` (`oor_ID`, `or_ID`, `RoomID`, `oor_qty`, `oor_subtotal`) VALUES
(9, 10, 1, 2, 4800);

-- --------------------------------------------------------

--
-- Table structure for table `tbreserved`
--

CREATE TABLE `tbreserved` (
  `ReservedID` int(20) NOT NULL,
  `Cusname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `typeroom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datereserved` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `case_status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'จองแล้ว',
  `dateservice` datetime NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbreserved`
--

INSERT INTO `tbreserved` (`ReservedID`, `Cusname`, `typeroom`, `datereserved`, `detail`, `case_status`, `dateservice`, `UserID`) VALUES
(1, 'ปริญญา มนต์ขลัง', 'ห้องพักเตียงคู่', '2022-03-08', '2 คน', 'จองแล้ว', '2022-03-08 01:00:57', 4),
(2, 'สมชาย เข็ม', 'ห้องพักเตียงเดี่ยว', '2022-03-20', '1 คน', 'จองแล้ว', '2022-03-18 17:29:38', 3),
(4, 'สมชาย เข็ม', 'ห้องพักเตียงคู่ (ครบ)', '2022-03-22', '2 คน', 'จองแล้ว', '2022-03-20 00:04:32', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbroom`
--

CREATE TABLE `tbroom` (
  `RoomID` int(30) NOT NULL,
  `Room_Pic` varchar(100) NOT NULL,
  `Room` varchar(30) NOT NULL,
  `r_desc` varchar(1000) NOT NULL,
  `r_price` varchar(100) NOT NULL,
  `typeid` int(30) NOT NULL,
  `r_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbroom`
--

INSERT INTO `tbroom` (`RoomID`, `Room_Pic`, `Room`, `r_desc`, `r_price`, `typeid`, `r_status`) VALUES
(1, 'room1.jpg', 'ห้อง-1', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(2, 'room1.jpg', 'ห้อง-2', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(3, 'room1.jpg', 'ห้อง-3', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(4, 'room1.jpg', 'ห้อง-4', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(5, 'room1.jpg', 'ห้อง-5', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(6, 'room1.jpg', 'ห้อง-6', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(7, 'room1.jpg', 'ห้อง-7', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(8, 'room1.jpg', 'ห้อง-8', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(9, 'room1.jpg', 'ห้อง-9', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(10, 'room1.jpg', 'ห้อง-10', '- เตียงมีเฟอร์นิเจอร์ ตู้, เตียงพร้อมที่นอนเดี่ยว\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 2,400 บาท / เดือน', '2400', 1, 'ว่าง'),
(11, 'room2.jpg', 'ห้อง-11', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(12, 'room2.jpg', 'ห้อง-12', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(13, 'room2.jpg', 'ห้อง-13', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(14, 'room2.jpg', 'ห้อง-14', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(15, 'room2.jpg', 'ห้อง-15', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(16, 'room2.jpg', 'ห้อง-16', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(17, 'room2.jpg', 'ห้อง-17', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(18, 'room2.jpg', 'ห้อง-18', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(19, 'room2.jpg', 'ห้อง-19', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(20, 'room2.jpg', 'ห้อง-20', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- พัดลม 1 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 3,000 บาท / เดือน', '3000', 2, 'ว่าง'),
(21, 'room3.jpg', 'ห้อง-21', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, โต๊ะวางทีวี, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- เครื่องทำน้ำอุ่น\r\n- พัดลม 2 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 4,600บาท / เดือน', '4600', 3, 'ว่าง'),
(22, 'room3.jpg', 'ห้อง-22', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, โต๊ะวางทีวี, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- เครื่องทำน้ำอุ่น\r\n- พัดลม 2 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 4,600บาท / เดือน', '4600', 3, 'ว่าง'),
(23, 'room3.jpg', 'ห้อง-23', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, โต๊ะวางทีวี, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- เครื่องทำน้ำอุ่น\r\n- พัดลม 2 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 4,600บาท / เดือน', '4600', 3, 'ว่าง'),
(24, 'room3.jpg', 'ห้อง-24', '- เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, โต๊ะวางทีวี, เตียงพร้อมที่นอนคู่\r\n- อินเตอร์เน็ต 24 ชั่วโมง\r\n- เครื่องทำน้ำอุ่น\r\n- พัดลม 2 ตัว\r\n- กล้องวงจรปิด\r\n- ราคา 4,600บาท / เดือน', '4600', 3, 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `tbservicedetail`
--

CREATE TABLE `tbservicedetail` (
  `oor_ID` int(10) NOT NULL,
  `or_ID` int(11) DEFAULT NULL,
  `product_ID` int(11) NOT NULL,
  `oor_qty` int(11) NOT NULL,
  `oor_subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbservicehead`
--

CREATE TABLE `tbservicehead` (
  `or_ID` int(11) NOT NULL,
  `or_Date` datetime NOT NULL,
  `UserID` int(11) NOT NULL,
  `servicedetail` text COLLATE utf8_unicode_ci NOT NULL,
  `or_total` float NOT NULL,
  `EmpID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbtype`
--

CREATE TABLE `tbtype` (
  `typeid` int(11) NOT NULL,
  `typeroom` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbtype`
--

INSERT INTO `tbtype` (`typeid`, `typeroom`) VALUES
(1, 'ห้องพักเตียงเดี่ยว'),
(2, 'ห้องพักเตียงคู่'),
(3, 'ห้องเตียงคู่(ครบ)');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `UserID` int(11) NOT NULL,
  `Cusname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Cusaddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Custel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Level` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`UserID`, `Cusname`, `Cusaddress`, `Custel`, `Email`, `Password`, `Level`) VALUES
(1, 'ภูษณะ ชมฉ่ำ', '589/7 florida', '0930085001', 'www.phusana@gmail.com', '111111', 'M'),
(3, 'สมชาย เข็ม', '58/789', '0846734568', 'email@gmail.com', '123456', 'M'),
(4, 'ปริญญา มนต์ขลัง', '589/7 florida', '0846734568', 'email2@gmail.com', '111111', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_head`
--

CREATE TABLE `tb_order_head` (
  `or_ID` int(10) NOT NULL,
  `or_Date` datetime NOT NULL,
  `UserID` int(11) NOT NULL,
  `or_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order_head`
--

INSERT INTO `tb_order_head` (`or_ID`, `or_Date`, `UserID`, `or_total`) VALUES
(10, '2022-03-20 13:38:22', 4, 4800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `tbcompany`
--
ALTER TABLE `tbcompany`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbemployee`
--
ALTER TABLE `tbemployee`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `tborder_detail`
--
ALTER TABLE `tborder_detail`
  ADD PRIMARY KEY (`oor_ID`);

--
-- Indexes for table `tbreserved`
--
ALTER TABLE `tbreserved`
  ADD PRIMARY KEY (`ReservedID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `tbroom`
--
ALTER TABLE `tbroom`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `tbservicedetail`
--
ALTER TABLE `tbservicedetail`
  ADD PRIMARY KEY (`oor_ID`);

--
-- Indexes for table `tbservicehead`
--
ALTER TABLE `tbservicehead`
  ADD PRIMARY KEY (`or_ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `tbtype`
--
ALTER TABLE `tbtype`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Email_2` (`Email`);

--
-- Indexes for table `tb_order_head`
--
ALTER TABLE `tb_order_head`
  ADD PRIMARY KEY (`or_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbcompany`
--
ALTER TABLE `tbcompany`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbemployee`
--
ALTER TABLE `tbemployee`
  MODIFY `EmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tborder_detail`
--
ALTER TABLE `tborder_detail`
  MODIFY `oor_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbreserved`
--
ALTER TABLE `tbreserved`
  MODIFY `ReservedID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbroom`
--
ALTER TABLE `tbroom`
  MODIFY `RoomID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbservicedetail`
--
ALTER TABLE `tbservicedetail`
  MODIFY `oor_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbservicehead`
--
ALTER TABLE `tbservicehead`
  MODIFY `or_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbtype`
--
ALTER TABLE `tbtype`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_order_head`
--
ALTER TABLE `tb_order_head`
  MODIFY `or_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
