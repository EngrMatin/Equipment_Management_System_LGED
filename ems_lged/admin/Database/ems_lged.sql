-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 01:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_lged`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractor_info`
--

CREATE TABLE `contractor_info` (
  `contractor_id` int(32) NOT NULL,
  `contractor_name` varchar(64) NOT NULL,
  `contractor_address` varchar(128) NOT NULL,
  `contractor_mobile` varchar(32) NOT NULL,
  `contractor_email` varchar(32) NOT NULL,
  `division_id` int(8) NOT NULL,
  `district_id` int(8) NOT NULL,
  `package_no` varchar(32) NOT NULL,
  `road_id` varchar(32) NOT NULL,
  `road_name` varchar(255) NOT NULL,
  `upazila_id` int(8) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `contractor_password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contractor_info`
--

INSERT INTO `contractor_info` (`contractor_id`, `contractor_name`, `contractor_address`, `contractor_mobile`, `contractor_email`, `division_id`, `district_id`, `package_no`, `road_id`, `road_name`, `upazila_id`, `active_status`, `contractor_password`) VALUES
(13, 'The New Trade Link', 'Parashuram, Feni', '01715123456', 'tradelink@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-05', '413492005', 'Hazigonj-Palishara bazar road.', 26, 0, 'Lged@2023'),
(14, 'M/S Nobarun Traders', 'Narayangonj', '01777654321', 'nobarun@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-06', '413582001', 'Kachua-Raghunathpur G.C Road', 27, 0, 'Lged@2023'),
(15, 'M/S Toma Construction', 'Mogbazar, Dhaka', '01555123555', 'toma@gmail.com', 2, 18, '', '419312005', 'Cheora G.C -Bara Puskurni road.', 12, 1, 'Lged@2023'),
(19, 'M/S Ripon Traders', 'Shaharasti, Chandpur', '01755654987', 'ripontraders@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-10', '413952003', 'Khila bazar GC-Chitoshi bazar GC Road.', 30, 1, 'Lged@2023'),
(20, 'M/S Sukanto Traders', 'Palpara, Chandpur', '01824321654', 'sukanto@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UNR-03', '413583021', 'Sachar UP-Ragdail Bazar road.', 27, 1, 'Lged@2023'),
(21, 'M/S Contemporary', 'Faridganj, Chandpur', '01745963852', 'contemporary@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-04', '413452002', 'Faridganj GC-Chandra GC Road.', 24, 1, 'Lged@2023'),
(22, 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', '01745445566', 'rta@gmail.com', 2, 18, '', '419183001', 'Burichong UP office-Rajapur UP Office Road', 8, 1, 'Lged@2023'),
(26, 'M/S Mahathir Enterprise', 'Dharmapur, Cumilla', '01817666888', 'mahathir@gmail.com', 2, 18, '', '419152001', 'Brahmanpara-Dulalpur GC Road.', 7, 0, 'Lged@2023'),
(42, 'M/S Zaman Traders', 'Zaman Tower, Jhawtala, Cumilla.', '01714072636', 'zamantraders@gmail.com', 2, 18, '', '419402008', '', 14, 1, 'Lged@2023'),
(43, 'M/S Neptune Traders', 'Indira Road, Farmgate, Dhaka', '017111222555', 'neptunetraders@gmail.com', 2, 18, '', '419672001', '', 7, 1, 'Lged@2023'),
(44, 'M/S Harun & Sons', 'Harina Bazar, Chandpur Sadar, Chandpur', '01755696869', 'harunandsons@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-08', '413962002', 'Matlab-Kachua Road.', 29, 1, 'Lged@2023'),
(45, 'M/S Taj Enterprise', 'Hazari Road, Feni', '01745887799', 'tajenterprise@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-07', '413472002', 'Haimchar Upazila H/Q-Rampur Bazar Road.', 25, 1, 'Lged@2023'),
(48, 'M/S Doli Construction', 'Tejgaon, Dhaka.', '01711224422', 'doliconstruction@gmail.com', 2, 15, '', '412152009', 'Nurpur GC-Kalibari R&H Road', 39, 1, 'Lged@2023'),
(49, 'M/S Anwar and Sons', 'Daudkandi, Cumilla.', '01755666888', 'anwarandsons@gmail.com', 2, 18, '', '419363027', 'Gouripur UP (G.C) to Lalpur Bazar Road', 13, 1, 'Lged@2023'),
(50, 'M/S Rana Builders', 'BT road, Chandpur.', '01756665544', 'ranabuilders@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-09', '413762003', 'Sengarchar GC-Kalirbazar GC road', 28, 1, 'Lged@2023'),
(51, 'M/S Aziz and Brothers', 'Puran Bazar, Chandpur.', '01523456456', 'azizandbrothers@gmail.com', 2, 16, 'LGED/RTIP2/CHD/2022-23/UZR-03', '413222004', 'Balia GC-Chandra GC Road.', 23, 1, 'Lged@2023'),
(52, 'Pubali Construction Ltd.', 'North Badda, Dhaka.', '017111222333', 'pubaliconstruction@gmail.com', 2, 18, '', '419882002', 'Rampur-Manikarchar Road.', 19, 1, 'Lged@2023'),
(53, 'Basic Engineering Ltd.', 'Gulshan, Dhaka.', '017111555888', 'basicengineeringltd@gmail.com', 0, 0, '', '0', '', 0, 1, 'Lged@2023'),
(54, 'Western Engineering (Pvt) Ltd.', 'Dhanmondi, Dhaka.', '01711554455', 'westernengineeringltd@gmail.com', 2, 18, '', '419892003', '', 22, 1, 'Lged@2023'),
(55, 'SIMEX Bangladesh Ltd.', 'Baridhara, Dhaka.', '01711555666', 'simexbdltd@gmail.com', 2, 18, '', '419812004', 'Panuarpool RHD-Eliotgonj GC Road.', 20, 1, 'Lged@2023'),
(67, 'M/S Mostafa & Sons', 'Kazipara, Sadar, Brahmanbaria.', '01711123456', 'mostafaandsons@gmail.com', 2, 15, 'LGED/RTIP2/2022-23/BB/UZR-01', '412022003', 'Akhaura Bara Bazar (GC)-Singer Beel GC road', 37, 1, 'Lged@2023'),
(68, 'M/S Hasan Enterprise', 'Medda, Sadar, Brahmanbaria.', '01711145678', 'hasanenterprise@gmail.com', 2, 15, 'LGED/RTIP2/2022-23/BB/UZR-02', '412852003', 'Bottali R&H-Bitghar GC Road.', 34, 1, 'Lged@2023'),
(69, 'M/S Hamim International', 'Paikpara, Sadar, Brahmanbaria.', '01711198765', 'hamiminternational@gmail.com', 2, 15, 'LGED/RTIP2/2022-23/BB/UZR-03', '412042006', 'Bancharampur H/Q -Saifullakandi UP Road', 38, 1, 'Lged@2023'),
(70, 'M/S Mamun Techno Builders', 'Munsefpara, Sadar, Brahmanbaria.', '01711165498', 'mamuntechnobuilders@gmail.com', 2, 15, 'LGED/RTIP2/2022-23/BB/UZR-04', '412942001', 'Sarail-Aurail hat Road', 35, 1, 'Lged@2023'),
(71, 'M/S Pioneer Construction', 'Kasba, Brahmanbaria.', '01711115599', 'pioneerconstruction@gmail.com', 2, 15, 'LGED/RTIP2/2022-23/BB/UZR-05', '412902006', 'Chairkuri GC-Kunda R&H Road', 33, 1, 'Lged@2023');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(16) NOT NULL,
  `district_name` varchar(32) NOT NULL,
  `division_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`, `division_id`) VALUES
(0, '-', 0),
(1, 'Dhaka', 1),
(2, 'Faridpur', 1),
(3, 'Gazipur', 1),
(4, 'Gopalganj', 1),
(5, 'Kishoreganj', 1),
(6, 'Madaripur', 1),
(7, 'Manikganj', 1),
(8, 'Munshiganj', 1),
(9, 'Narayanganj', 1),
(10, 'Narsingdi', 1),
(11, 'Rajbari', 1),
(12, 'Shariatpur', 1),
(13, 'Tangail', 1),
(14, 'Bandarban', 2),
(15, 'Brahmanbaria', 2),
(16, 'Chandpur', 2),
(17, 'Chattogram', 2),
(18, 'Cumilla', 2),
(19, 'Cox\'s Bazar', 2),
(20, 'Feni', 2),
(21, 'Khagrachhari', 2),
(22, 'Lakshmipur', 2),
(23, 'Noakhali', 2),
(24, 'Rangamati', 2),
(25, 'Habiganj', 3),
(26, 'Moulvibazar', 3),
(27, 'Sunamganj', 3),
(28, 'Sylhet', 3);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `division_id` int(16) NOT NULL,
  `division_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`division_id`, `division_name`) VALUES
(0, '-'),
(1, 'Dhaka'),
(2, 'Chattogram'),
(3, 'Sylhet'),
(4, 'Mymensingh'),
(5, 'Rajshahi'),
(6, 'Rangpur'),
(7, 'Khulna'),
(8, 'Barishal');

-- --------------------------------------------------------

--
-- Table structure for table `driver_info`
--

CREATE TABLE `driver_info` (
  `dri_id` int(32) NOT NULL,
  `division_id` int(16) NOT NULL,
  `district_id` int(16) NOT NULL,
  `driver_id` varchar(32) NOT NULL,
  `driver_name` varchar(32) NOT NULL,
  `driver_address` varchar(128) DEFAULT NULL,
  `driver_mobile_no` varchar(32) DEFAULT NULL,
  `driver_nid_no` varchar(32) NOT NULL,
  `driver_dob` date DEFAULT NULL,
  `appointment_type` varchar(32) DEFAULT NULL,
  `equipment_id` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`dri_id`, `division_id`, `district_id`, `driver_id`, `driver_name`, `driver_address`, `driver_mobile_no`, `driver_nid_no`, `driver_dob`, `appointment_type`, `equipment_id`) VALUES
(1, 2, 16, '2013M008', 'Kazi Md. Billal Hossain', 'Faridgonj, Chandpur', '01547235231', '', '0000-00-00', 'Master_Role', 'CDR-RLS-10-JSP-004'),
(2, 2, 16, '2013M009', 'Md. Rabiul Hasan', 'Raipur, Laksmipur', '01749125145', '', '1990-01-01', 'Master_Role', 'CDR-RLS-10-JSP-005'),
(3, 2, 16, '2013M010', 'Md. Zahidul Islam', 'Homna, Cumilla', '01879541563', '', '1985-01-01', 'Master_Role', 'CDR-RLS-10-JSM-001'),
(4, 2, 16, '2013M011', 'Md. Golam Hossain', 'Hatia, Noakhali', '01698236547', '', '1985-01-01', 'Master_Role', 'CDR-RLS-10-JSP-003'),
(5, 2, 16, '2013M012', 'Md. Imam Hossen', 'Meghna, Cumilla', '01954569587', '', '1985-01-01', 'Master_Role', 'CDR-RLS-10-SPC-002'),
(6, 2, 16, '2013M013', 'Kazi Shah Alam', 'Kachua, Chandpur', '01814987654', '', '1985-01-01', 'Master_Role', 'CDR-RLS-10-CTD-010'),
(7, 2, 16, '2013M014', 'Md. Aslam Fakir', 'Haimchar, Chandpur', '01832695847', '', '1985-01-01', 'Master_Role', 'CDR-RLS-10-CTD-006'),
(8, 2, 16, '2013M015', 'Md. Abul Hossain', 'Kachua, Chandpur', '01547142536', '', '1985-01-01', 'Master_Role', 'CDR-RLV-08-SAK-013'),
(9, 2, 16, '2013M016', 'Md. Abdul Malek', 'Raipur, Laksmipur', '01745895658', '', '1990-01-01', 'Master_Role', 'CDR-RLS-10-CTD-007'),
(10, 2, 16, '2013M017', 'Md. Hasanat Ali (Tutul)', 'Kachua, Chandpur', '01956324124', '', '1985-01-01', 'Master_Role', 'CDR-RLS-10-CTD-009'),
(11, 2, 16, '2013P018', 'Md. Azmal Hossen', 'Hatia, Noakhali', '01858785785', '', '1985-01-01', 'Outsourcing', 'CDR-RLS-10-SAK-008'),
(12, 2, 16, '2013P019', 'Md. Akbar Hossen', 'Faridgonj, Chandpur', '01523658658', '', '1985-01-01', 'Outsourcing', 'CDR-SC-10-WCR-012'),
(13, 2, 16, '2013M020', 'Md. Azad Hossain', 'Hazigonj, Chandpur', '01621541563', '', '1990-01-01', 'Master_Role', 'CDR-SC-10-WCR-011'),
(14, 2, 16, '2013M021', 'Md. Mizanur Rahman', 'Shaharasti, Chandpur', '01921854856', '', '1985-01-01', 'Master_Role', 'CDR-RLV-08-BMG-014'),
(18, 2, 18, '2019M011', 'Md. Rashed Mia', 'Chandina, Cumilla', '01754654987', '', '1985-01-01', 'Master_Role', 'COM-RLS-07-JSM-001'),
(20, 2, 18, '2019M012', 'Md. Mamunur Rashid', 'Meghna, Cumilla', '01552123456', '', '0000-00-00', 'Master_Role', 'COM-RLS-12-KAW-002'),
(21, 2, 18, '2019M013', 'Md. Kabir Hossain', 'Hatia, Noakhali', '01623748596', '', '0000-00-00', 'Master_Role', 'COM-RLB-10-JSM-004'),
(22, 2, 18, '2019M014', 'Md. Didarul Islam', 'Subarnachar, Noakhali', '01923586947', '', '0000-00-00', 'Master_Role', 'COM-RLS-10-JSP-007'),
(23, 2, 18, '2019M015', 'Md. Nabir Hossain', 'Langolkot, Cumilla', '01745321654', '', '0000-00-00', 'Master_Role', 'COM-RLS-12-LAU-010'),
(24, 2, 18, '2019M016', 'Babul Chandra Roy', 'Muradnagar, Cumilla', '01789456789', '', '0000-00-00', 'Master_Role', 'COM-RLS-10-JSM-013'),
(27, 2, 18, '2019G003', 'Md. Azharul Islam', 'Laksam, Cumilla.', '01587458478', '-', '1985-01-01', 'GoB', 'COM-RLV-08-WCR-037'),
(28, 2, 18, '2019G004', 'Md. Ahasan Kabir Mollah', 'Kachua, Chandpur.', '01812565656', '-', '1985-01-01', 'GoB', 'COM-RLV-08-WCR-034'),
(29, 2, 18, '2019G005', 'Md. Dulal Miah', 'Nabinagar, Brahmanbaria.', '01655212324', '-', '0000-00-00', 'GoB', 'COM-RLV-08-WCR-036'),
(30, 2, 18, '2019G006', 'Md. Abdul Jalil', 'Faridganj, Chandpur.', '01911556688', '-', '1985-01-01', 'GoB', 'COM-RLV-08-WCR-035'),
(31, 2, 18, '2019M017', 'Md. Nurul Islam', 'Burichong, Cumilla', '01523456789', '-', '0000-00-00', 'Master_Role', 'COM-RLS-10-JSM-023'),
(32, 2, 18, '2019M018', 'Md. Jakir Hossain', 'Langolkot, Cumilla.', '01675415161', '-', '0000-00-00', 'Master_Role', 'COM-RLS-10-JSM-027'),
(33, 2, 18, '2019M019', 'Md. Zahirul Islam', 'Titas, Cumilla.', '01715326252', '-', '0000-00-00', 'Master_Role', 'COM-RLS-12-SAK-028'),
(34, 2, 18, '2019M020', 'Md. Abdul Kader', 'Daudkandi, Cumilla.', '01912857595', '-', '0000-00-00', 'Master_Role', 'COM-RLS-12-SAK-011'),
(35, 2, 18, '2019G007', 'Md. Amir Hossain', 'Barura, Cumilla.', '01786554466', '-', '1985-01-01', 'GoB', 'COM-RLS-12-LAU-012'),
(36, 2, 15, '2012G004', 'Md. Abdur Rashid', 'Bijoynagar, Brahmanbaria.', '01745654987', '-', '1980-01-01', 'GoB', 'BBR-RLV-10-011'),
(37, 2, 15, '2012G005', 'Md. Abdul Majid', 'Nabinagar, Brahmanbaria.', '01711456789', '-', '1985-01-01', 'GoB', 'BBR-SC-08-008'),
(38, 2, 15, '2012M006', 'Md. Hasan Ali', 'Ashuganj, Brahmanbaria.', '01812456789', '-', '1990-01-01', 'Master_Role', 'BBR-RLS-10-001'),
(39, 2, 15, '2012M007', 'Md. Afzal Mia', 'Nasirnagar, Brahmanbaria.', '01732456789', '-', '1985-01-01', 'Master_Role', 'BBR-RLS-10-002'),
(40, 2, 15, '2012M008', 'Md. Abu Sayeed', 'Kasba, Brahmanbaria.', '01718456789', '-', '1985-01-01', 'Master_Role', 'BBR-RLS-10-006'),
(41, 2, 15, '2012M009', 'Md. Bellal Hossen', 'Kasba, Brahmanbaria.', '01812456789', '-', '1985-01-01', 'Master_Role', 'BBR-RLS-10-009'),
(42, 2, 15, '2012M010', 'Md. Rahat Amin', 'Sadar, Brahmanbaria.', '01611456789', '-', '1985-01-01', 'Master_Role', 'BBR-RLS-10-010'),
(43, 2, 15, '2012M011', 'Md. Abdur Rahim', 'Bancharampur, Brahmanbaria.', '01645456789', '-', '1985-01-01', 'Master_Role', 'BBR-RLV-3.5-006'),
(44, 2, 15, '2012M012', 'Md. Halim Mia', 'Bancharampur, Brahmanbaria.', '01887456789', '-', '1985-01-01', 'Master_Role', 'BBR-SC-08-007'),
(48, 2, 16, '2013G001', 'Md. Alamgir Hossain', 'Haziganj, Chandpur.', '01756124578', '-', '1985-01-01', 'GoB', 'Dhaka_Metro_Gha-11-3416'),
(49, 2, 16, '2013G002', 'Md. Jahangir Alam', 'Shaharasti, Chandpur', '01812321987', '-', '1985-01-01', 'GoB', 'SAS-65-2889'),
(50, 2, 16, '2013G003', 'Md. Abdul Hakim Sardar', 'Haziganj, Chandpur.', '01755456987', '-', '1990-01-01', 'GoB', 'Dhaka_Metro_Tha-11-5621'),
(51, 2, 16, '2013G004', 'Md. Shakhawat Hossen	', 'Kabirhat, Noakhali.', '01912325658', '-', '1980-01-01', 'GoB', 'Dhaka_Metro_Tha-13-2764'),
(52, 2, 16, '2013G005', 'Hafej Ahmed Manik', 'Daudkandi, Cumilla.', '01945321654', '-', '1985-01-01', 'GoB', 'Deputed to H/Q'),
(54, 2, 16, '2013G006', 'Md. Fajar Ali', 'Barura, Cumilla.', '01654123789', '-', '1985-01-01', 'GoB', 'Deputed to H/Q'),
(55, 2, 16, '2013G007', 'Md. Nurul Alam', 'Kachua, Chandpur', '01812357159', '-', '1980-01-01', 'GoB', 'Truck'),
(56, 2, 16, '2013M022', 'Md. Ibrahim Khalil', 'Lalmai, Cumilla.', '01852123456', '-', '1990-01-01', 'Master_Role', 'WA at Kachua'),
(57, 2, 15, '2012G001', 'Md. Babul Miah', 'Kasba, Brahmanbaria.', '01711357951', '-', '1985-01-01', 'GoB', 'Dhaka_Metro_Gha-13-9728'),
(58, 2, 15, '2012G002', 'Md. Palash Mozumdar', 'Kasba, Brahmanbaria.', '01822917913', '-', '1985-01-01', 'GoB', 'Dhaka_Metro_Tha-13-1613'),
(59, 2, 15, '2012P013', 'Md. Al Amin Patwary', 'Haziganj, Chandpur.', '01611695847', '-', '1990-01-01', 'Outsourcing', 'Dhaka_Metro_Tha-11-5619'),
(60, 2, 18, '2019M021', 'Md. Liton Mia', 'Lalmai, Cumilla.', '01611684351', '-', '1985-01-01', 'Master_Role', 'COM-RLS-10-JSP-006'),
(61, 2, 18, '2019M022', 'Md. Jashim Uddin', 'Lahsam, Cumilla.', '01645478589', '-', '1990-01-01', 'Master_Role', 'COM-RLV-08-WCR-032'),
(62, 2, 18, '2019G001', 'Md. Rabiullah', 'Chandina, Cumilla.', '01711984651', '-', '1990-01-01', 'GoB', 'Dhaka_Metro_Gha-13-0298'),
(63, 2, 18, '2019G002', 'Md. Nazrul Islam', 'Burichang, Cumilla.', '01819132871', '-', '1985-01-01', 'GoB', 'Cumilla-Gha-11-0016'),
(64, 2, 18, '2019G008', 'Md. Saleh Ahmed', 'Lalmai, Cumilla', '01618321654', '-', '1985-01-01', 'GoB', 'Mitshubishi Truck'),
(65, 2, 18, '2019G009', 'Md. Nazir Ahmed', 'Chouddagram, Cumilla', '01715545758', '-', '1990-01-01', 'GoB', 'Dhaka_Metro_Tha-11-2584'),
(66, 2, 18, '2019P010', 'Md. Abul Khair', 'Muradnagar, Cumilla.', '01817689578', '-', '1985-01-01', 'Outsourcing', 'Dhaka_Metro_Tha-11-5239');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_category`
--

CREATE TABLE `equipment_category` (
  `category_id` int(16) NOT NULL,
  `equipment_type` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `equipment_category`
--

INSERT INTO `equipment_category` (`category_id`, `equipment_type`) VALUES
(1, 'Static Road Roller'),
(2, 'Vibratory Roller'),
(3, 'Sheep-foot Roller'),
(4, 'Pneumatic Tyre Roller'),
(5, 'Soil Compactor'),
(6, 'Plate Compactor'),
(7, 'Bulldozer'),
(8, 'Pay Loader'),
(9, 'Earth Excavator and Loader'),
(10, 'Crane'),
(11, 'Bitumen Mixing Plant'),
(12, 'Bitumen Sprayer'),
(13, 'Bitumen Heater and Distributor'),
(14, 'Prime Mover Mounted Trolley');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_info`
--

CREATE TABLE `equipment_info` (
  `equip_id` int(16) NOT NULL,
  `division_id` int(16) NOT NULL,
  `district_id` int(16) NOT NULL,
  `equipment_id` varchar(32) NOT NULL,
  `category_id` int(32) NOT NULL,
  `equipment_brand` varchar(32) DEFAULT NULL,
  `equipment_model` varchar(32) DEFAULT NULL,
  `equipment_weight` varchar(16) NOT NULL,
  `year_of_manufacture` decimal(4,0) DEFAULT NULL,
  `source` varchar(32) DEFAULT NULL,
  `hire_charge` int(8) NOT NULL,
  `physical_status` varchar(32) NOT NULL,
  `allotment_status` int(16) DEFAULT 0,
  `allotment_to_date` date DEFAULT NULL,
  `location` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `equipment_info`
--

INSERT INTO `equipment_info` (`equip_id`, `division_id`, `district_id`, `equipment_id`, `category_id`, `equipment_brand`, `equipment_model`, `equipment_weight`, `year_of_manufacture`, `source`, `hire_charge`, `physical_status`, `allotment_status`, `allotment_to_date`, `location`) VALUES
(1, 2, 16, 'CDR-RLS-10-JSM-001', 1, 'Joss Muar', '3Y8/10', '10 T', '1990', 'Tangail', 4000, 'Running', 2, '2023-04-08', 'Haziganj'),
(2, 2, 16, 'CDR-RLS-10-SPC-002', 1, 'Speed Craft', '3Y8/10', '10 T', '1995', 'H/Q', 4000, 'Running', 2, '2023-04-08', 'Haimchar'),
(3, 2, 16, 'CDR-RLS-10-JSP-003', 1, 'Jessop', '810', '10 T', '1995', 'RDP-13', 4000, 'Running', 2, '2023-04-08', 'Matlab Uttar'),
(4, 2, 16, 'CDR-RLS-10-JSP-004', 1, 'Jessop', '810', '10 T', '1995', 'RDP-13', 4000, 'Running', 2, '2023-04-08', 'Shahrasti'),
(5, 2, 16, 'CDR-RLS-10-JSP-005', 1, 'Jessop', '810', '10 T', '1995', 'RDP-13', 4000, 'Running', 2, '2023-04-07', 'Kachua'),
(6, 2, 16, 'CDR-RLS-10-CTD-006', 1, 'China Tendam', '2Y8/10', '10 T', '1996', 'H/Q', 4000, 'Running', 2, '2023-04-05', 'Matlab Dakshin'),
(7, 2, 16, 'CDR-RLS-10-CTD-007', 1, 'China Tendam', '2Y8/10B', '10 T', '1997', 'OPEC', 4000, 'Running', 2, '2023-04-05', 'Chandpur Sadar'),
(8, 2, 16, 'CDR-RLS-10-SAK-008', 1, 'Sakai', 'R2', '10 T', '2000', 'JAICA', 4000, 'Running', 2, '2023-04-08', 'Faridganj'),
(9, 2, 16, 'CDR-RLS-10-CTD-009', 1, 'China Tendam', '2Y8/10', '10 T', '2002', 'Rajshahi', 4000, 'Running', 2, '2023-04-08', 'Shahrasti'),
(10, 2, 16, 'CDR-RLS-10-CTD-010', 1, 'China Tendam', '2YJ8/10H', '10 T', '2009', 'RIIP-2', 4000, 'Under_repair', 0, NULL, ''),
(11, 2, 16, 'CDR-RLV-08-SAK-013', 2, 'Sakai', 'SGI5', '8 T', '1995', 'Satkhira', 4000, 'Running', 2, '2023-04-08', 'Kachua'),
(12, 2, 16, 'CDR-RLV-08-BMG-014', 2, 'Bomag', 'BW135AD', '8 T', '2010', 'RIIP-2', 4000, 'Running', 2, '2023-04-07', 'Haziganj'),
(13, 2, 16, 'CDR-SC-10-WCR-011', 5, 'Weycor', 'AW1070E', '10 T', '2020', 'GCP-3', 4000, 'Running', 2, '2023-04-04', 'Faridganj'),
(14, 2, 16, 'CDR-SC-10-WCR-012', 5, 'Weycor', 'AW1070E', '10 T', '2020', 'GCP-3', 4000, 'Running', 2, '2023-04-04', 'Chandpur Sadar'),
(31, 2, 18, 'COM-RLS-07-JSM-001', 1, 'Joss Muar', 'TR-7', '5-7 T', '1996', 'LGED HQ', 2000, 'Running', 1, NULL, 'Monohorgonj'),
(32, 2, 18, 'COM-RLS-12-KAW-002', 1, 'Kawasaki', 'KMRH12D', '12 T', '1997', 'HQ', 3000, 'Running', 1, NULL, 'Chandina'),
(33, 2, 18, 'COM-RLB-10-JSM-004', 1, 'Joss Muar', 'TR-7', '10 T', '1998', 'HQ', 3000, 'Running', 2, '2023-01-06', 'Comilla Adarsha Sadar'),
(34, 2, 18, 'COM-RLS-10-JSP-007', 1, 'Jessop', '810S', '10 T', '1997', 'HQ', 3000, 'Running', 2, '2023-01-07', 'Homna'),
(35, 2, 18, 'COM-RLS-12-LAU-010', 1, 'Lauyong', '3Y8/10', '12 T', '1998', 'HQ', 3000, 'Running', 2, '2023-01-07', 'Brahmanpara'),
(36, 2, 18, 'COM-RLS-10-JSM-013', 1, 'Johsmuller', 'TR-7', '10 T', '1999', 'HQ', 3000, 'Running', 2, '2023-01-15', 'Meghna'),
(43, 2, 18, 'COM-RLS-10-JSM-023', 1, 'Johsmuller', 'TR-7', '10 T', '2000', 'H/Q', 3000, 'Running', 1, NULL, 'Barura'),
(44, 2, 18, 'COM-RLS-10-JSM-027', 1, 'Johsmuller', 'TR-7', '10 T', '2000', 'H/Q', 3000, 'Running', 1, NULL, 'Chauddagram'),
(45, 2, 18, 'COM-RLS-12-SAK-028', 1, 'Sakai', 'R2', '12 T', '2000', 'H/Q', 3000, 'Running', 2, '2023-01-06', 'Debidwar'),
(46, 2, 18, 'COM-RLS-12-SAK-011', 1, 'Sakai', 'R2', '12 T', '2000', 'H/Q', 3000, 'Running', 2, '2023-01-10', 'Titas'),
(47, 2, 18, 'COM-RLS-12-LAU-012', 1, 'Lauyong', '3Y8/12', '12 T', '2000', 'H/Q', 3000, 'Running', 2, '2023-01-07', 'Lalmai'),
(48, 2, 18, 'COM-RLV-08-WCR-034', 2, 'Weycor', 'AW1070E', '8 T', '2000', 'H/Q', 3000, 'Running', 1, NULL, 'Burichong'),
(49, 2, 18, 'COM-RLV-08-WCR-035', 2, 'Weycor', 'AW1070E', '8 T', '2000', 'H/Q', 3000, 'Running', 1, NULL, 'Daudkandi'),
(50, 2, 18, 'COM-RLV-08-WCR-036', 2, 'LIUGONG', '6210E', '8 T', '2000', 'H/Q', 3000, 'Running', 2, '2023-01-10', 'Laksam'),
(51, 2, 18, 'COM-RLV-08-WCR-037', 2, 'HAMM-HD', 'HD-90', '8 T', '2000', 'H/Q', 3000, 'Running', 2, '2023-02-08', 'Nangalkot'),
(53, 2, 15, 'BBR-RLS-10-001', 1, 'Marshall', '2435', '10 T', '0', '', 3000, 'Running', 2, '2023-04-02', 'Kasba'),
(54, 2, 15, 'BBR-RLS-10-002', 1, 'Angad', '', '10 T', '0', '', 3000, 'Running', 2, '2023-04-02', 'Brahmanbaria Sadar'),
(55, 2, 15, 'BBR-RLS-10-005', 1, 'LUOYANG', '2Y8', '10 T', '0', '', 3000, 'Under_repair', 0, '0000-00-00', ''),
(56, 2, 15, 'BBR-RLS-10-006', 1, 'LUOYANG', '2Y8', '10 T', '0', '', 3000, 'Running', 2, '2023-04-08', 'Akhaura'),
(57, 2, 15, 'BBR-RLS-10-008', 1, 'Sakai', 'R-2', '10 T', '0', '', 3000, 'Repairable', 0, '0000-00-00', ''),
(58, 2, 15, 'BBR-RLS-10-009', 1, 'JUNMA', 'V3300-E', '10 T', '0', '', 3000, 'Running', 2, '2023-04-08', 'Nabinagar'),
(59, 2, 15, 'BBR-RLS-10-010', 1, 'Sakai', 'R-2', '10 T', '0', 'Laxmipur', 3000, 'Running', 2, '2023-04-04', 'Bancharampur'),
(60, 2, 15, 'BBR-RLV-3.5-005', 2, 'HAMM', 'HD-12', '3.5 T', '0', '', 2000, 'Damaged', 0, '0000-00-00', ''),
(61, 2, 15, 'BBR-RLV-3.5-006', 2, 'Bomag', 'BW135AD', '3.5 T', '0', '', 1500, 'Running', 2, '2023-04-05', 'Nasirnagar'),
(62, 2, 15, 'BBR-RLV-10-011', 2, 'HAMM', 'HD-90', '10 T', '0', '', 3000, 'Running', 2, '2023-04-04', 'Sarail'),
(63, 2, 15, 'BBR-SC-08-007', 5, 'Weycor', 'AW1070E', '8 T', '0', '', 2000, 'Running', 2, '2023-04-03', 'Ashuganj'),
(64, 2, 15, 'BBR-SC-08-008', 5, 'Weycor', 'AW1070E', '8 T', '0', '', 2000, 'Running', 2, '2023-04-03', 'Bijoynagar'),
(65, 2, 18, 'COM-RLS-10-JSP-006', 1, 'Jessop', '810 S', '10 T', '0', '', 4000, 'Under_repair', 0, '0000-00-00', ''),
(66, 2, 18, 'COM-RLS-10-JSP-014', 1, 'Jessop', '810 S', '10 T', '0', '', 4000, 'Under_repair', 0, '0000-00-00', ''),
(67, 2, 18, 'COM-RLS-12-LAU-009', 1, 'Lauyong', '3Y8/12', '12 T', '0', '', 0, 'Under_repair', 0, '0000-00-00', ''),
(68, 2, 18, 'COM-RLS-10-JNM-026', 1, 'JUNMA', '2YJ8H/10H', '10 T', '0', '', 4000, 'Under_repair', 0, '0000-00-00', ''),
(69, 2, 18, 'COM-RLV-08-WCR-032', 2, 'Weycor', 'AW1070E', '8 T', '0', '', 4000, 'Under_repair', 0, '0000-00-00', ''),
(70, 2, 18, 'COM-RLV-08-WCR-033', 2, 'Weycor', 'AW1070E', '8 T', '0', '', 0, 'Damaged', 0, '0000-00-00', ''),
(71, 2, 18, 'COM-RLV-3.5-025', 2, 'BW', 'BW135AD', '3.5 T', '0', '', 1500, 'Under_repair', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `permission_info`
--

CREATE TABLE `permission_info` (
  `permission_id` int(16) NOT NULL,
  `user_id` int(16) NOT NULL,
  `role_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `permission_info`
--

INSERT INTO `permission_info` (`permission_id`, `user_id`, `role_id`) VALUES
(6, 15, 3),
(7, 16, 21),
(8, 17, 21),
(9, 18, 21),
(10, 20, 31),
(11, 19, 31),
(12, 21, 31),
(13, 22, 31),
(14, 24, 31),
(15, 25, 31),
(16, 26, 31),
(17, 23, 23),
(18, 27, 23);

-- --------------------------------------------------------

--
-- Table structure for table `requisition_info`
--

CREATE TABLE `requisition_info` (
  `requisition_id` int(32) NOT NULL,
  `division_id` int(16) NOT NULL,
  `district_id` int(16) NOT NULL,
  `package_no` varchar(32) NOT NULL,
  `upazila_id` int(16) NOT NULL,
  `road_id` int(16) NOT NULL,
  `road_name` varchar(255) NOT NULL,
  `chainage` varchar(32) NOT NULL,
  `layer` varchar(32) NOT NULL,
  `length` float NOT NULL DEFAULT 1,
  `width` float NOT NULL DEFAULT 1,
  `thickness` float NOT NULL DEFAULT 1,
  `equipment_type` varchar(32) NOT NULL,
  `requisition_from_date` date NOT NULL,
  `requisition_to_date` date NOT NULL,
  `request_date` datetime NOT NULL,
  `contractor_name` varchar(128) NOT NULL,
  `contractor_address` varchar(128) NOT NULL,
  `forwarding_note` text NOT NULL,
  `forwarding_status` int(16) NOT NULL DEFAULT 0,
  `date_of_forwarding` datetime DEFAULT NULL,
  `equipment_id` varchar(32) DEFAULT NULL,
  `allotment_no` varchar(32) DEFAULT NULL,
  `proposer_note` text DEFAULT NULL,
  `proposal_status` int(16) NOT NULL DEFAULT 0,
  `date_of_proposal` datetime DEFAULT NULL,
  `approval_note` text DEFAULT NULL,
  `approval_status` int(16) NOT NULL DEFAULT 0,
  `allotment_date` datetime DEFAULT NULL,
  `equipment_return_status` int(16) NOT NULL DEFAULT 0,
  `equipment_return_date` datetime DEFAULT NULL,
  `equipment_restore_status` int(8) DEFAULT 0,
  `equipment_restore_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `requisition_info`
--

INSERT INTO `requisition_info` (`requisition_id`, `division_id`, `district_id`, `package_no`, `upazila_id`, `road_id`, `road_name`, `chainage`, `layer`, `length`, `width`, `thickness`, `equipment_type`, `requisition_from_date`, `requisition_to_date`, `request_date`, `contractor_name`, `contractor_address`, `forwarding_note`, `forwarding_status`, `date_of_forwarding`, `equipment_id`, `allotment_no`, `proposer_note`, `proposal_status`, `date_of_proposal`, `approval_note`, `approval_status`, `allotment_date`, `equipment_return_status`, `equipment_return_date`, `equipment_restore_status`, `equipment_restore_date`) VALUES
(10, 2, 16, '', 23, 413222010, 'Mohamaya - Faridganj Road', '3500m - 5500m', 'Base Course (WBM)', 2000, 3.66, 150, 'Vibratory Roller', '2023-03-01', '2023-03-10', '2023-02-27 00:00:00', 'M/S Nobarun Traders', 'Narayangonj', 'Forwarded', 1, '2023-02-27 17:02:56', '6', 'Chad/2022-23/120', 'May be approved', 1, '2023-02-28 17:02:56', 'Approved', 1, '2023-02-28 00:00:00', 2, '2023-03-11 17:02:56', 1, '2023-03-11 17:02:56'),
(11, 2, 16, '', 25, 413472010, 'Haimchar - Faridganj Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-14', '2023-03-22', '2023-03-10 00:00:00', 'The New Trade Link', 'Parashuram, Feni', 'Forwarded', 1, '2023-03-10 17:05:45', '6', 'Chad/2022-23/120', 'May be approved', 1, '2023-03-11 17:05:45', 'Approved', 1, '2023-03-12 00:00:00', 2, '2023-03-23 17:05:45', 1, '2023-03-23 17:05:45'),
(12, 2, 18, '', 12, 419312005, 'Cheora G.C -Bara Puskurni road.', '00 - 2000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-02', '2023-03-10', '2023-03-01 00:00:00', 'M/S Toma Construction', 'Dhaka', 'Forwarded', 1, '2023-03-01 16:38:02', '31', 'Com/2022-23/135', 'May be approved', 1, '2023-03-01 16:38:02', 'Approved', 1, '2023-03-01 00:00:00', 2, '2023-03-11 16:38:02', 1, '2023-03-11 16:38:02'),
(13, 2, 18, '', 16, 419722002, 'Laksam - Mudafforgonj Road', '00 - 2000m', 'Base Course (WBM)', 2000, 3.66, 150, 'Static Road Roller', '2023-03-03', '2023-03-09', '2023-03-02 00:00:00', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-03-02 17:09:56', '33', 'Com/2022-23/136', 'Equipment is available', 1, '2023-03-02 22:09:56', 'Approved', 1, '2023-03-02 00:00:00', 2, '2023-03-14 17:09:56', 1, '2023-03-14 17:09:56'),
(14, 2, 16, '', 27, 413582016, 'Kachua - Gouripur Road', '3500m - 5500m', 'Sub-grade', 2000, 3.66, 150, 'Vibratory Roller', '2023-03-07', '2023-03-14', '2023-03-05 00:00:00', 'M/S Nobarun Traders', 'Narayangonj', 'Forwarded', 1, '2023-03-05 17:13:00', '8', 'Chad/2022-23/117', 'Equipment is available', 1, '2023-03-05 17:13:00', 'Approved', 1, '2023-03-05 00:00:00', 2, '2023-03-15 17:13:00', 1, '2023-03-15 17:13:00'),
(15, 2, 18, '', 16, 419722002, 'Laksam - Mudafforgonj Road', '00 - 2000m', '40mm Carpeting', 2000, 3.66, 1, 'Static Road Roller', '2023-04-04', '2023-04-10', '2023-04-02 00:00:00', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-04-02 17:35:48', '35', 'Cum/2022-23/102', 'May be approved', 1, '2023-04-02 17:35:48', 'Approved', 1, '2023-04-02 00:00:00', 2, '2023-04-11 17:35:48', 1, '2023-04-11 17:35:48'),
(16, 2, 18, '', 8, 419183001, 'Burichong UP office-Rajapur UP Office Road', '3500m - 5500m', 'Sub-grade', 2000, 3.66, 150, 'Soil Compactor', '2023-02-02', '2023-02-07', '2023-02-01 00:00:00', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'May be allotted.', 1, '2023-02-01 17:38:57', '35', 'Com/2022-23/137', 'May be approved', 1, '2023-02-01 17:38:57', 'Approved', 1, '2023-02-01 00:00:00', 2, '2023-02-07 17:38:57', 1, '2023-02-07 17:38:57'),
(17, 2, 18, '', 12, 419312009, 'Padua (NHW) bazar-Gunabati UPC(GC) road', '500m - 2500m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-12', '2023-03-18', '2023-03-09 00:00:00', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-09 18:43:48', '31', 'Com/2022-23/145', 'Equipment is available', 1, '2023-03-09 18:44:41', 'Approved', 1, '2023-03-09 18:46:11', 2, '2023-03-19 16:42:37', 1, '2023-03-19 16:42:37'),
(20, 2, 18, '', 7, 419152001, 'Brahmanpara-Dulalpur GC Road.', '00 - 2000m', 'Sub-grade', 2000, 3.66, 1, 'Soil Compactor', '2023-03-11', '2023-03-19', '2023-03-08 00:00:00', 'M/S Mahathir Enterprise', 'Dharmapur, Cumilla', 'Forwarded', 1, '2023-03-09 18:16:03', '35', 'Com/2022-23/141', 'Equipment is available', 1, '2023-03-09 18:16:03', 'Approved', 1, '2023-03-09 00:00:00', 2, '2023-03-20 18:16:03', 1, '2023-03-20 18:16:03'),
(21, 2, 16, '', 23, 413222001, 'Ibrahim BT Road', '5500m-7500m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-11', '2023-03-25', '2023-03-08 00:00:00', 'M/S Sukanto Traders', 'Palpara, Chandpur', 'Forwarded', 1, '2023-03-08 17:18:16', '1', 'Chad/2022-23/127', 'May be approved', 1, '2023-03-08 17:18:16', 'Approved', 1, '2023-03-09 00:00:00', 2, '2023-03-26 17:18:16', 1, '2023-03-26 17:18:16'),
(22, 2, 18, '', 11, 419272003, 'Chandina-Latifpur Road', '1000m - 3000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-02-04', '2023-02-11', '2023-02-01 00:00:00', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-02-01 17:21:24', '35', 'Com/2022-23/142', 'May be approved', 1, '2023-02-02 17:21:24', 'Approved', 1, '2023-02-02 00:00:00', 2, '2023-02-12 17:21:24', 1, '2023-02-12 17:21:24'),
(23, 2, 18, '', 17, 419992020, 'Lalmai - Nangalkot Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-04-03', '2023-04-12', '2023-04-01 00:00:00', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-04-02 18:42:25', '47', 'Com/2022-23/147', 'May be approved', 1, '2023-04-02 21:30:00', 'Approved', 1, '2023-04-02 21:32:12', 0, NULL, 0, NULL),
(25, 2, 18, '', 14, 419402008, 'Debidwar GC to Dulalpur GC Road', '1500m - 3500m', 'Sub-grade', 2000, 3.66, 1, 'Static Road Roller', '2023-03-06', '2023-03-21', '2023-03-04 00:00:00', 'M/S Zaman Traders', 'Zaman Tower, Jhawtala, Cumilla.', 'Forwarded', 1, '2023-03-05 12:09:11', '36', 'Com/2022-23/143', 'May be approved', 1, '2023-03-05 17:17:23', 'Approved', 1, '2023-03-05 17:18:47', 2, '2023-03-22 18:42:56', 1, '2023-03-22 18:42:56'),
(32, 2, 18, '', 8, 419182001, 'Burichang GC-Rampur Post Office Road', '500m - 2500m', 'Sub-grade', 2000, 3.66, 1, 'Soil Compactor', '2023-03-06', '2023-03-15', '2023-03-04 20:40:24', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-05 00:18:04', '31', 'Com/2022-23/144', 'May be approved', 1, '2023-03-05 00:21:00', 'No equipment is available right now.', 2, '2023-03-05 00:22:31', 0, NULL, 0, NULL),
(34, 2, 18, '', 7, 419152002, 'Dulalpur GC-Jafargonj GC Road', '00 - 2000m', 'Sub-grade', 2000, 3.66, 1, 'Static Road Roller', '2023-03-07', '2023-03-15', '2023-03-05 13:30:38', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-06 18:46:58', '32', 'Com/2022-23/146', 'May be approved', 1, '2023-03-06 18:47:45', 'Approved', 1, '2023-03-06 16:21:47', 2, '2023-03-16 16:59:18', 1, '2023-03-16 16:59:43'),
(35, 2, 18, '', 8, 419183001, 'Burichong UP office-Rajapur UP Office Road', '3500m - 5500m', 'Improved Sub-grade', 2000, 3.66, 150, 'Vibratory Roller', '2023-02-20', '2023-02-27', '2023-02-19 13:33:28', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-02-19 21:28:19', '48', 'Com/2022-23/148', 'May be approved', 1, '2023-02-19 21:30:45', 'Approved', 1, '2023-02-19 21:32:51', 2, '2023-02-28 01:02:13', 1, '2023-02-28 01:03:40'),
(36, 2, 18, '', 11, 419272003, 'Chandina-Latifpur Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-02-22', '2023-03-02', '2023-02-20 11:37:16', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-02-20 16:38:14', '32', 'Com/2022-23/146', 'May be approved', 1, '2023-02-20 16:39:03', 'Approved', 1, '2023-02-20 17:02:08', 2, '2023-03-03 01:02:29', 1, '2023-03-03 01:03:33'),
(37, 2, 18, '', 12, 419312009, 'Padua (NHW) bazar-Gunabati UPC(GC) road', '500m - 2500m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-06', '2023-03-15', '2023-03-04 16:40:48', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-05 00:34:30', '44', 'Com/2022-23/157', 'May be approved', 1, '2023-03-05 00:35:36', 'Approved', 1, '2023-03-05 00:37:12', 2, '2023-03-16 01:08:19', 1, '2023-03-16 01:22:30'),
(38, 2, 18, '', 7, 419152001, 'Brahmanpara-Dulalpur GC Road.', '00 - 2000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-04-03', '2023-04-11', '2023-04-01 16:43:35', 'M/S Mahathir Enterprise', 'Dharmapur, Cumilla', 'Forwarded', 1, '2023-04-02 23:29:38', '35', 'Com/2022-23/149', 'May be approved', 1, '2023-04-02 23:33:45', 'Approved', 1, '2023-04-02 23:35:17', 1, '2023-04-12 01:28:38', 0, NULL),
(39, 2, 18, '', 14, 419402008, 'Debidwar GC to Dulalpur GC Road', '1500m - 3500m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-21', '2023-03-30', '2023-03-19 16:47:02', 'M/S Zaman Traders', 'Zaman Tower, Jhawtala, Cumilla.', 'Forwarded', 1, '2023-03-20 00:34:52', '45', 'Com/2022-23/158', 'May be approved', 1, '2023-03-20 00:36:04', 'Approved', 1, '2023-03-20 00:37:18', 0, NULL, 0, NULL),
(40, 2, 18, '', 21, 419872002, 'Nangalkot-Khila Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Vibratory Roller', '2023-04-03', '2023-04-13', '2023-04-01 16:55:41', 'M/S Taj Enterprise', 'Hazari Road, Feni', 'Forwarded', 1, '2023-04-02 00:24:32', '51', 'Com/2022-23/155', 'May be approved', 1, '2023-04-02 00:28:57', 'Approved', 1, '2023-04-02 00:31:06', 0, NULL, 0, NULL),
(41, 2, 18, '', 9, 419672001, 'Comilla-Rasulpur Road.', '00 - 2000m', 'Base Course (WBM)', 2000, 3.66, 150, 'Static Road Roller', '2023-04-03', '2023-04-09', '2023-04-01 16:59:27', 'M/S Neptune Traders', 'Indira Road, Farmgate, Dhaka', 'Forwarded', 1, '2023-04-02 23:58:47', '33', 'Com/2022-23/153', 'May be approved', 1, '2023-04-02 00:26:56', 'Approved', 1, '2023-04-02 00:31:12', 0, NULL, 0, NULL),
(42, 2, 18, '', 6, 419092013, 'Barura GC - Modafforganj RHD Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Vibratory Roller', '2023-04-01', '2023-04-10', '2023-03-30 17:04:50', 'M/S Harun & Sons', 'Harina Bazar, Chandpur Sadar, Chandpur', 'Forwarded', 1, '2023-03-30 23:57:55', '43', 'Com/2022-23/159', 'May be approved', 1, '2023-03-30 00:45:57', 'Approved', 1, '2023-03-30 00:46:43', 2, '2023-04-11 01:07:53', 1, '2023-04-11 01:22:39'),
(43, 2, 18, '', 10, 419913007, 'Suagonj-Kalikapur-Talikhona Road', '00 - 2000m', 'Base Course (WBM)', 2000, 3.66, 150, 'Vibratory Roller', '2023-04-02', '2023-04-13', '2023-04-01 17:11:43', 'M/S Doli Construction', 'Tejgaon, Dhaka.', 'Forwarded', 1, '2023-04-02 00:55:20', '', 'Com/2022-23/160', 'No Equipment is available', 1, '2023-04-02 00:56:32', 'No Equipment is available right now.', 2, '2023-04-02 00:57:27', 0, NULL, 0, NULL),
(44, 2, 18, '', 13, 419363027, 'Gouripur UP (G.C) to Lalpur Bazar Road', '1000m - 3000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Vibratory Roller', '2023-04-03', '2023-04-12', '2023-04-01 17:16:31', 'M/S Anwar and Sons', 'Daudkandi, Cumilla.', 'Forwarded', 1, '2023-04-02 23:32:11', '49', 'Com/2022-23/150', 'May be approved', 1, '2023-04-02 23:34:05', 'Approved', 1, '2023-04-02 23:35:33', 2, '2023-04-13 01:07:25', 1, '2023-04-13 01:23:28'),
(45, 2, 18, '', 15, 419542002, 'Homna-Dulalpur-Bancharampur Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-04-03', '2023-04-11', '2023-04-01 17:21:01', 'M/S Rana Builders', 'BT road, Chandpur.', 'Forwarded', 1, '2023-04-02 23:57:12', '34', 'Com/2022-23/154', 'May be approved', 1, '2023-04-02 00:27:29', 'Approved', 1, '2023-04-02 00:31:18', 0, NULL, 0, NULL),
(46, 2, 18, '', 16, 419722003, 'Laksam - Monohargonj Road', '1500m - 3500m', 'Sub-base Course', 2000, 3.66, 150, 'Vibratory Roller', '2023-04-03', '2023-04-13', '2023-04-01 17:57:19', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-04-02 23:30:59', '50', 'Com/2022-23/151', 'May be approved', 1, '2023-04-02 23:34:29', 'Approved', 1, '2023-04-02 23:35:47', 0, NULL, 0, NULL),
(47, 2, 18, '', 18, 419902006, 'Monoharganj GC - Santir Bazar R&H Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-04-03', '2023-04-12', '2023-04-01 17:59:30', 'M/S Zaman Traders', 'Zaman Tower, Jhawtala, Cumilla.', 'Forwarded', 1, '2023-04-02 23:31:27', '31', 'Com/2022-23/152', 'May be approved', 1, '2023-04-02 23:34:55', 'Approved', 1, '2023-04-02 23:35:56', 2, '2023-04-13 01:02:58', 1, '2023-04-13 01:03:25'),
(48, 2, 18, '', 22, 419892003, 'Gouripur - Jiarkandi - Bakhrabad(Muradnagar) Road.', '2500-4500m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-04-04', '2023-04-13', '2023-04-02 18:23:18', 'Western Engineering (Pvt) Ltd.', 'Dhanmondi, Dhaka.', 'Forwarded', 1, '2023-04-02 00:25:26', '46', 'Com/2022-23/156', 'May be approved', 1, '2023-04-02 00:29:27', 'Approved', 1, '2023-04-02 00:31:23', 0, NULL, 0, NULL),
(49, 2, 18, '', 20, 419812004, 'Panuarpool RHD-Eliotgonj GC Road.', '1000m - 3000m', 'Base Course (WBM)', 2000, 3.66, 150, 'Vibratory Roller', '2023-04-04', '2023-04-18', '2023-04-02 18:26:05', 'SIMEX Bangladesh Ltd.', 'Baridhara, Dhaka.', 'Forwarded', 1, '2023-03-30 22:24:33', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(50, 2, 18, '', 19, 419882002, 'Rampur-Manikarchar Road.', '1000m - 3000m', 'Sub-grade', 2000, 3.66, 1, 'Static Road Roller', '2023-03-23', '2023-03-30', '2023-03-22 18:27:58', 'Pubali Construction Ltd.', 'North Badda, Dhaka.', 'Forwarded', 1, '2023-03-22 00:24:53', '36', 'Com/2022-23/156', 'May be approved', 1, '2023-03-22 00:30:45', 'Approved', 1, '2023-03-22 00:31:28', 0, NULL, 0, NULL),
(51, 2, 18, '', 11, 419272003, 'Chandina-Latifpur Road', '1000m - 3000m', 'Base Course (WBM)', 2000, 3.66, 150, 'Vibratory Roller', '2023-03-16', '2023-03-25', '2023-03-15 20:12:44', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-15 21:50:25', '48', 'Com/2022-23/158', 'May be approved', 1, '2023-03-15 21:50:25', 'Approved', 1, '2023-03-15 21:50:25', 2, '2023-03-26 21:50:25', 1, '2023-03-26 21:50:25'),
(52, 2, 18, '', 8, 419183001, 'Burichong UP office-Rajapur UP Office Road', '3500m - 5500m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-05', '2023-03-12', '2023-03-02 20:14:19', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-02 01:21:09', '31', 'Com/2022-23/161', 'May be approved', 1, '2023-03-02 01:25:32', NULL, 1, '2023-03-02 21:25:59', 2, '2023-03-13 21:25:59', 1, '2023-03-13 21:25:59'),
(53, 2, 18, '', 7, 419154004, 'Nagaish Bazar-Bagra Bazar Road.', '1500m - 3000m', 'Sub-base Course', 1500, 3.66, 150, 'Vibratory Roller', '2023-04-03', '2023-04-13', '2023-04-01 20:17:33', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', '', 0, '0000-00-00 00:00:00', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(55, 2, 15, '', 37, 412022003, 'Akhaura Bara Bazar (GC)-Singer Beel GC road', '3000m - 5000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 12:14:51', 'M/S Mostafa & Sons', 'Kazipara, Sadar, Brahmanbaria.', '', 0, NULL, '56', 'BBR/2022-23/45', 'May be approved', 1, '2023-03-28 17:37:42', 'Approved', 1, '2023-03-28 17:40:38', 0, NULL, 0, NULL),
(56, 2, 15, '', 34, 412852003, 'Bottali R&H-Bitghar GC Road.', '5000m - 7000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 12:18:48', 'M/S Hasan Enterprise', 'Medda, Sadar, Brahmanbaria.', '', 0, NULL, '58', 'BBR/2022-23/46', 'Equipment is available', 1, '2023-03-28 17:38:15', 'Approved', 1, '2023-03-28 17:40:46', 0, NULL, 0, NULL),
(57, 2, 15, '', 38, 412042006, 'Bancharampur H/Q -Saifullakandi UP Road', '5500m - 6500m', 'Sub-base Course', 1000, 3.66, 150, 'Static Road Roller', '2023-03-29', '2023-04-04', '2023-03-28 12:28:15', 'M/S Hamim International', 'Paikpara, Sadar, Brahmanbaria.', '', 0, NULL, '59', 'BBR/2022-23/47', 'May be approved', 1, '2023-03-28 17:38:40', 'Approved', 1, '2023-03-28 17:40:53', 0, NULL, 0, NULL),
(58, 2, 15, '', 35, 412942001, 'Sarail-Aurail hat Road', '12000m - 13000m', 'Sub-base Course', 1000, 3.66, 150, 'Vibratory Roller', '2023-03-29', '2023-04-04', '2023-03-28 12:31:16', 'M/S Mamun Techno Builders', 'Munsefpara, Sadar, Brahmanbaria.', '', 0, NULL, '62', 'BBR/2022-23/48', 'May be approved', 1, '2023-03-28 17:39:15', 'Approved', 1, '2023-03-28 17:41:02', 0, NULL, 0, NULL),
(59, 2, 15, '', 33, 412902006, 'Chairkuri GC-Kunda R&H Road', '5000m - 6000m', 'Sub-base Course', 1000, 3.66, 150, 'Vibratory Roller', '2023-03-29', '2023-04-05', '2023-03-28 12:35:24', 'M/S Pioneer Construction', 'Kasba, Brahmanbaria.', '', 0, NULL, '61', 'BBR/2022-23/49', 'May be approved', 1, '2023-03-28 17:39:46', 'Approved', 1, '2023-03-28 17:41:47', 0, NULL, 0, NULL),
(60, 2, 15, '', 36, 412632002, 'Kasba-Akhaura Road', '5000m - 7000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-13', '2023-03-21', '2023-03-12 12:45:56', 'M/S Mostafa & Sons', 'Kazipara, Sadar, Brahmanbaria.', '', 0, NULL, '53', 'BBR/2022-23/47', 'May be approved', 1, '2023-03-12 17:32:43', 'Approved', 1, '2023-03-12 17:34:02', 2, '2023-03-22 21:09:20', 1, '2023-03-22 21:09:20'),
(61, 2, 15, '', 31, 412132004, 'Pairtala R&H-Gosaipur bazar road.', '7000m - 9000m', 'Sub-grade', 2000, 3.66, 1, 'Soil Compactor', '2023-02-02', '2023-02-07', '2023-02-01 12:49:22', 'M/S Hasan Enterprise', 'Medda, Sadar, Brahmanbaria.', '', 0, NULL, '54', 'BBR/2022-23/44', 'Equipment is available', 1, '2023-02-01 17:33:08', 'Approved', 1, '2023-02-01 17:34:13', 2, '2023-02-07 21:12:11', 1, '2023-02-07 21:12:11'),
(62, 2, 15, '', 39, 412152009, 'Nurpur GC-Kalibari R&H Road', '2500m - 4500m', 'Sub-grade', 2000, 3.66, 1, 'Soil Compactor', '2023-03-29', '2023-04-03', '2023-03-28 12:57:30', 'M/S Doli Construction', 'Tejgaon, Dhaka.', '', 0, NULL, '64', 'BBR/2022-23/41', 'May be approved', 1, '2023-03-28 17:19:33', 'Approved', 1, '2023-03-28 17:21:59', 0, NULL, 0, NULL),
(63, 2, 15, '', 32, 412982001, 'Ashugonj-Talshahar Road', '6500m - 8000m', 'Sub-grade', 1500, 3.66, 1, 'Soil Compactor', '2023-03-29', '2023-04-03', '2023-03-28 13:01:15', 'M/S Hasan Enterprise', 'Medda, Sadar, Brahmanbaria.', '', 0, NULL, '63', 'BBR/2022-23/42', 'Equipment is available', 1, '2023-03-28 17:31:43', 'Approved', 1, '2023-03-28 17:34:19', 0, NULL, 0, NULL),
(64, 2, 16, '', 23, 413222004, 'Balia GC-Chandra GC Road.', '1000m - 3000m', 'Sub-grade', 2000, 3.66, 1, 'Soil Compactor', '2023-02-02', '2023-02-07', '2023-02-01 19:15:39', 'M/S Aziz and Brothers', 'Puran Bazar, Chandpur.', 'Forwarded', 1, '2023-02-01 12:52:34', '14', 'CHD/2022-23/31', 'May be approved', 1, '2023-02-01 12:56:08', 'Approved', 1, '2023-02-01 13:35:21', 2, '2023-02-07 21:02:51', 1, '2023-02-07 21:02:51'),
(65, 2, 16, '', 24, 413452002, 'Faridganj GC-Chandra GC Road.', '7000m - 9000m', 'Sub-grade', 2000, 3.66, 1, 'Soil Compactor', '2023-02-02', '2023-02-07', '2023-02-01 19:33:29', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-02-01 13:18:37', '13', 'CHD/2022-23/32', 'May be approved', 1, '2023-02-01 13:24:21', 'Approved', 1, '2023-03-01 13:35:27', 2, '2023-02-07 21:01:12', 1, '2023-02-07 21:01:12'),
(66, 2, 16, '', 26, 413492005, 'Hazigonj-Palishara bazar road.', '6500m - 8500m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 19:38:36', 'The New Trade Link', 'Parashuram, Feni', 'Forwarded', 1, '2023-03-29 13:21:49', '1', 'CHD/2022-23/33', 'May be approved', 1, '2023-03-29 13:25:14', 'Approved', 1, '2023-03-29 13:35:32', 0, NULL, 0, NULL),
(67, 2, 16, '', 27, 413582001, 'Kachua-Raghunathpur G.C Road', '4500m - 6500m', 'Base Course (WMM)', 2000, 3.66, 150, 'Vibratory Roller', '2023-03-30', '2023-04-08', '2023-03-28 19:42:19', 'M/S Nobarun Traders', 'Narayangonj', 'Forwarded', 1, '2023-03-29 13:20:16', '11', 'CHD/2022-23/34', 'May be approved', 1, '2023-03-29 13:26:11', 'Approved', 1, '2023-03-29 13:35:38', 0, NULL, 0, NULL),
(68, 2, 16, '', 25, 413472002, 'Haimchar Upazila H/Q-Rampur Bazar Road.', '3000m - 4500m', 'Improved Sub-grade', 1500, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 22:02:12', 'M/S Taj Enterprise', 'Hazari Road, Feni', 'Forwarded', 1, '2023-03-29 13:22:18', '2', 'CHD/2022-23/35', 'May be approved', 1, '2023-03-29 13:43:41', 'Approved', 1, '2023-03-29 13:48:40', 0, NULL, 0, NULL),
(69, 2, 16, '', 29, 413962002, 'Matlab-Kachua Road.', '8500m - 10500m', 'Sub-grade', 2000, 3.66, 1, 'Soil Compactor', '2023-03-30', '2023-04-05', '2023-03-28 22:06:25', 'M/S Harun & Sons', 'Harina Bazar, Chandpur Sadar, Chandpur', 'Forwarded', 1, '2023-03-29 13:22:41', '6', 'CHD/2022-23/38', 'May be approved', 1, '2023-03-29 13:50:35', 'Approved', 1, '2023-03-29 13:52:43', 0, NULL, 0, NULL),
(70, 2, 16, '', 28, 413762003, 'Sengarchar GC-Kalirbazar GC road', '11000m - 13000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 22:11:30', 'M/S Rana Builders', 'BT road, Chandpur.', 'Forwarded', 1, '2023-03-29 13:19:31', '3', 'CHD/2022-23/36', 'May be approved', 1, '2023-03-29 13:44:13', 'Approved', 1, '2023-03-29 13:48:45', 0, NULL, 0, NULL),
(71, 2, 16, '', 30, 413952003, 'Khila bazar GC-Chitoshi bazar GC Road.', '4000m - 6000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 22:15:17', 'M/S Ripon Traders', 'Shaharasti, Chandpur', 'Forwarded', 1, '2023-03-29 13:21:22', '4', 'CHD/2022-23/37', 'May be approved', 1, '2023-03-29 13:44:38', 'Approved', 1, '2023-03-29 13:48:50', 0, NULL, 0, NULL),
(72, 2, 16, '', 27, 413583021, 'Sachar UP-Ragdail Bazar road.', '2000m - 3500m', 'Improved Sub-grade', 1500, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-07', '2023-03-28 22:21:33', 'M/S Sukanto Traders', 'Palpara, Chandpur', 'Forwarded', 1, '2023-03-29 13:20:21', '5', 'CHD/2022-23/37', 'May be approved', 1, '2023-03-29 13:46:08', 'Approved', 1, '2023-03-29 13:48:56', 0, NULL, 0, NULL),
(73, 2, 16, '', 23, 413223007, 'Hanarchar U.P. to Chandra G.C. Road.', '2000m - 3500m', 'Sub-grade', 1500, 3.66, 1, 'Soil Compactor', '2023-03-30', '2023-04-05', '2023-03-28 22:27:14', 'M/S Harun & Sons', 'Harina Bazar, Chandpur Sadar, Chandpur', 'Forwarded', 1, '2023-03-29 12:54:16', '7', 'CHD/2022-23/39', 'May be approved', 1, '2023-03-29 13:51:02', 'Approved', 1, '2023-03-29 13:52:48', 0, NULL, 0, NULL),
(74, 2, 16, '', 24, 413453001, 'Faridgonj GC-Patwary Bazar Road.', '6000m - 8000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 22:30:35', 'M/S Nobarun Traders', 'Narayangonj', 'Forwarded', 1, '2023-03-29 13:18:46', '8', 'CHD/2022-23/40', 'May be approved', 1, '2023-03-29 13:51:25', 'Approved', 1, '2023-03-29 13:52:53', 0, NULL, 0, NULL),
(75, 2, 16, '', 30, 413953002, 'Khila Bazar -Shahrasti Bazar Road', '4000m - 5500m', 'Improved Sub-grade', 1500, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 22:33:40', 'The New Trade Link', 'Parashuram, Feni', 'Forwarded', 1, '2023-03-29 13:21:26', '9', 'CHD/2022-23/41', 'May be approved', 1, '2023-03-29 13:51:45', 'Approved', 1, '2023-03-29 13:52:58', 0, NULL, 0, NULL),
(76, 2, 16, '', 26, 413493002, 'Hazigonj-Hatila East U.P. road', '1500m - 3000m', 'Improved Sub-grade', 1500, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-07', '2023-03-28 22:36:55', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-03-29 13:21:53', '12', 'CHD/2022-23/42', 'May be approved', 1, '2023-03-29 13:52:17', 'Approved', 1, '2023-03-29 13:53:02', 0, NULL, 0, NULL),
(77, 2, 16, '', 28, 413763002, 'Shatnal Up office-Sengarchar GC road', '00 - 1500m', 'Improved Sub-grade', 1500, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-07', '2023-03-28 22:39:52', 'M/S Aziz and Brothers', 'Puran Bazar, Chandpur.', 'Forwarded', 1, '2023-03-29 13:19:35', '', 'CHD/2022-23/43', 'No Equipment is available', 1, '2023-03-29 13:54:02', 'No Equipment is available right now.', 2, '2023-03-29 13:55:04', 0, NULL, 0, NULL),
(78, 2, 16, '', 24, 413452011, 'Rupsha bazar GC-Kalir bazar GC Road', '00 - 2000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-28 22:45:52', 'M/S Aziz and Brothers', 'Puran Bazar, Chandpur.', 'Forwarded', 1, '2023-03-29 13:18:51', '', 'CHD/2022-23/44', 'No Equipment is available', 1, '2023-03-29 13:54:23', 'No Equipment is available right now.', 2, '2023-03-29 13:55:12', 0, NULL, 0, NULL),
(79, 2, 16, '', 27, 413582009, 'Kachua GC-Teguria R&H road.', '00 - 2000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Vibratory Roller', '2023-03-30', '2023-04-08', '2023-03-28 22:47:38', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-03-29 13:20:25', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(80, 2, 18, '', 8, 419183001, 'Burichong UP office-Rajapur UP Office Road', '3500m - 5500m', 'Base Course (WMM)', 2000, 3.66, 150, 'Static Road Roller', '2023-03-21', '2023-03-28', '2023-03-20 20:14:19', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-20 01:21:09', '31', 'Com/2022-23/161', 'May be approved', 1, '2023-03-20 01:25:32', NULL, 1, '2023-03-20 21:25:59', 2, '2023-03-29 21:25:59', 1, '2023-03-29 21:25:59'),
(81, 2, 16, '', 23, 413222004, 'Balia GC-Chandra GC Road.', '1000m - 3000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Soil Compactor', '2023-02-19', '2023-02-27', '2023-02-16 19:15:39', 'M/S Aziz and Brothers', 'Puran Bazar, Chandpur.', 'Forwarded', 1, '2023-02-16 12:52:34', '14', 'CHD/2022-23/51', 'May be approved', 1, '2023-02-16 12:56:08', 'Approved', 1, '2023-02-16 13:35:21', 2, '2023-02-28 21:02:51', 1, '2023-02-28 21:02:51'),
(82, 2, 16, '', 24, 413452002, 'Faridganj GC-Chandra GC Road.', '7000m - 9000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-02-19', '2023-02-27', '2023-02-16 19:33:29', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-02-16 13:18:37', '13', 'CHD/2022-23/52', 'May be approved', 1, '2023-02-16 13:24:21', 'Approved', 1, '2023-03-16 13:35:27', 2, '2023-02-28 21:01:12', 1, '2023-02-28 21:01:12'),
(83, 2, 15, '', 36, 412632002, 'Kasba-Akhaura Road', '5000m - 7000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-02-19', '2023-02-27', '2023-02-16 12:45:56', 'M/S Mostafa & Sons', 'Kazipara, Sadar, Brahmanbaria.', '', 0, NULL, '53', 'BBR/2022-23/53', 'May be approved', 1, '2023-02-16 17:32:43', 'Approved', 1, '2023-02-16 17:34:02', 2, '2023-02-28 21:09:20', 1, '2023-02-28 21:09:20'),
(84, 2, 15, '', 31, 412132004, 'Pairtala R&H-Gosaipur bazar road.', '7000m - 9000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-02-19', '2023-02-27', '2023-02-16 12:49:22', 'M/S Hasan Enterprise', 'Medda, Sadar, Brahmanbaria.', '', 0, NULL, '54', 'BBR/2022-23/54', 'Equipment is available', 1, '2023-02-16 17:33:08', 'Approved', 1, '2023-02-16 17:34:13', 2, '2023-02-28 21:12:11', 1, '2023-02-28 21:12:11'),
(85, 2, 16, '', 23, 413222004, 'Balia GC-Chandra GC Road.', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-13', '2023-03-21', '2023-03-12 19:15:39', 'M/S Aziz and Brothers', 'Puran Bazar, Chandpur.', 'Forwarded', 1, '2023-03-12 12:52:34', '14', 'CHD/2022-23/35', 'May be approved', 1, '2023-02-12 12:56:08', 'Approved', 1, '2023-03-12 13:35:21', 2, '2023-03-22 21:02:51', 1, '2023-03-22 21:02:51'),
(86, 2, 16, '', 24, 413452002, 'Faridganj GC-Chandra GC Road.', '7000m - 9000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-13', '2023-03-21', '2023-03-12 19:33:29', 'M/S Contemporary', 'Faridganj, Chandpur', 'Forwarded', 1, '2023-03-12 13:18:37', '13', 'CHD/2022-23/37', 'May be approved', 1, '2023-03-12 13:24:21', 'Approved', 1, '2023-03-12 13:35:27', 2, '2023-03-22 21:01:12', 1, '2023-03-22 21:01:12'),
(87, 2, 15, '', 36, 412632002, 'Kasba-Akhaura Road', '5000m - 7000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-13', '2023-03-21', '2023-03-12 12:45:56', 'M/S Mostafa & Sons', 'Kazipara, Sadar, Brahmanbaria.', '', 0, NULL, '53', 'BBR/2022-23/58', 'May be approved', 1, '2023-03-12 17:32:43', 'Approved', 1, '2023-03-12 17:34:02', 2, '2023-03-22 21:09:20', 1, '2023-03-22 21:09:20'),
(88, 2, 15, '', 31, 412132004, 'Pairtala R&H-Gosaipur bazar road.', '7000m - 9000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-03-13', '2023-03-21', '2023-03-12 12:49:22', 'M/S Hasan Enterprise', 'Medda, Sadar, Brahmanbaria.', '', 0, NULL, '54', 'BBR/2022-23/59', 'Equipment is available', 1, '2023-03-12 17:33:08', 'Approved', 1, '2023-03-12 17:34:13', 2, '2023-03-22 21:12:11', 1, '2023-03-22 21:12:11'),
(89, 2, 18, '', 7, 419152002, 'Dulalpur GC-Jafargonj GC Road', '00 - 2000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-03-30', '2023-04-08', '2023-03-29 13:42:49', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-29 13:42:49', '32', 'Com/2022-23/172', 'May be approved', 1, '2023-03-29 13:42:49', NULL, 0, NULL, 0, NULL, 0, NULL),
(90, 2, 18, '', 12, 419312005, 'Cheora G.C -Bara Puskurni road.', '00 - 2000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-04-02', '2023-04-12', '2023-03-30 17:18:23', 'M/S Toma Construction', 'Dhaka', '', 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(91, 2, 18, '', 7, 419154011, 'Shidlai-Berekhola Road.', '3500m - 5000m', 'Sub-base Course', 1500, 3.66, 150, 'Static Road Roller', '2023-04-04', '2023-04-14', '2023-03-30 17:34:49', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', '', 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(92, 2, 18, '', 12, 419312009, 'Padua (NHW) bazar-Gunabati UPC(GC) road', '500m - 2500m', 'Base Course (WMM)', 2000, 3.66, 150, 'Vibratory Roller', '2023-04-05', '2023-04-15', '2023-03-30 17:41:37', 'M/S R-Ta Enterprise', 'Bishnupur, Cumilla', 'Forwarded', 1, '2023-03-30 22:15:44', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(93, 2, 18, '', 14, 419402008, 'Debidwar GC to Dulalpur GC Road', '1500m - 3500m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-04-05', '2023-04-15', '2023-03-30 17:47:24', 'M/S Zaman Traders', 'Zaman Tower, Jhawtala, Cumilla.', '', 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(94, 2, 18, '', 13, 419363027, 'Gouripur UP (G.C) to Lalpur Bazar Road', '1000m - 3000m', 'Sub-base Course', 2000, 3.66, 150, 'Static Road Roller', '2023-04-05', '2023-04-15', '2023-03-30 17:53:07', 'M/S Anwar and Sons', 'Daudkandi, Cumilla.', '', 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL),
(95, 2, 18, '', 9, 419672001, 'Comilla-Rasulpur Road.', '00 - 2000m', '40mm Carpeting', 2000, 3.66, 1, 'Static Road Roller', '2023-04-05', '2023-04-13', '2023-03-30 17:56:16', 'M/S Neptune Traders', 'Indira Road, Farmgate, Dhaka', 'Forwarded', 1, '2023-03-30 22:30:25', '43', 'Com/2022-23/158', 'May be approved', 1, '2023-03-30 22:31:38', NULL, 0, NULL, 0, NULL, 0, NULL),
(96, 2, 18, '', 19, 419882002, 'Rampur-Manikarchar Road.', '1000m - 3000m', 'Improved Sub-grade', 2000, 3.66, 150, 'Static Road Roller', '2023-04-05', '2023-04-14', '2023-03-30 18:01:26', 'Pubali Construction Ltd.', 'North Badda, Dhaka.', '', 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `road_layer_list`
--

CREATE TABLE `road_layer_list` (
  `layer_id` int(8) NOT NULL,
  `layer_name` varchar(32) NOT NULL,
  `roller_hire_rate` float NOT NULL DEFAULT 1,
  `unit` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `road_layer_list`
--

INSERT INTO `road_layer_list` (`layer_id`, `layer_name`, `roller_hire_rate`, `unit`) VALUES
(1, 'Sub-grade', 3.15, 'sqm'),
(2, 'Improved Sub-grade', 24, 'cum'),
(3, 'Sub-base Course', 30, 'cum'),
(4, 'Base Course (WBM)', 66, 'cum'),
(5, 'Base Course (WMM)', 90, 'cum'),
(6, '25mm Carpeting', 6, 'sqm'),
(7, '40mm Carpeting', 9.6, 'sqm'),
(8, '50mm Carpeting', 12, 'sqm'),
(9, '7mm Seal Coat', 3, 'sqm');

-- --------------------------------------------------------

--
-- Table structure for table `role_info`
--

CREATE TABLE `role_info` (
  `role_id` int(16) NOT NULL,
  `role_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role_info`
--

INSERT INTO `role_info` (`role_id`, `role_name`) VALUES
(1, 'System Super Admin'),
(2, 'Senior System Admin'),
(3, 'Head Office Assistant Admin'),
(4, 'Deputy System Admin'),
(5, 'Assistant System Admin'),
(11, 'Head Office Super Admin'),
(12, 'Head Office Senior Admin'),
(13, 'Head Office Admin'),
(14, 'Head Office Assistant Admin'),
(15, 'Head Office Authorized User'),
(21, 'District Admin'),
(22, 'District Assistant Admin'),
(23, 'District Authorized User'),
(31, 'Upazila Admin'),
(32, 'Upazila Assistant Admin'),
(33, 'Upazila Authorized User');

-- --------------------------------------------------------

--
-- Table structure for table `temp_con_info`
--

CREATE TABLE `temp_con_info` (
  `temp_con_id` int(16) NOT NULL,
  `division_id` int(8) NOT NULL,
  `district_id` int(8) NOT NULL,
  `temp_con_name` varchar(64) NOT NULL,
  `temp_con_address` varchar(128) NOT NULL,
  `temp_con_mobile` varchar(32) NOT NULL,
  `temp_con_email` varchar(32) NOT NULL,
  `package_no` varchar(32) NOT NULL,
  `road_id` varchar(32) NOT NULL,
  `road_name` varchar(255) NOT NULL,
  `upazila_id` int(8) NOT NULL,
  `temp_con_password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `temp_con_info`
--

INSERT INTO `temp_con_info` (`temp_con_id`, `division_id`, `district_id`, `temp_con_name`, `temp_con_address`, `temp_con_mobile`, `temp_con_email`, `package_no`, `road_id`, `road_name`, `upazila_id`, `temp_con_password`) VALUES
(9, 2, 18, 'The Eastern Engineers', 'Rampura, Dhaka', '01711159357', 'theeasternengineers@gmail.com', 'LGED/CUM/GCP4/2022-23/05', '419882002', 'Rampur-Manikarchar Road.', 19, 'Lged@2023'),
(17, 2, 18, 'M/S Appollo Enterprise', 'Jatrabari, Dhaka.', '01711381183', 'appollo@gmail.com', 'LGED/CUM/GCP4/2022-23/051', '419154030', 'Madhabpur-Ranigach Road.', 7, 'Lged@2023'),
(18, 2, 18, 'The Western Engineers', 'Motojheel, Dhaka.', '01712681186', 'westernengineers@gmail.com', 'LGED/CUM/GCP4/2022-23/052', '419155062', 'Shaitshala-Palpara Asram Road. ', 7, 'Lged@2023');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `upazila_id` int(16) NOT NULL,
  `upazila_name` varchar(32) NOT NULL,
  `district_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`upazila_id`, `upazila_name`, `district_id`) VALUES
(0, '-', 0),
(1, 'Dhamrai', 1),
(2, 'Dohar', 1),
(3, 'Keraniganj', 1),
(4, 'Nawabganj', 1),
(5, 'Savar', 1),
(6, 'Barura', 18),
(7, 'Brahmanpara', 18),
(8, 'Burichong', 18),
(9, 'Comilla Adarsha Sadar', 18),
(10, 'Comilla Sadar Dakshin', 18),
(11, 'Chandina', 18),
(12, 'Chauddagram', 18),
(13, 'Daudkandi', 18),
(14, 'Debidwar', 18),
(15, 'Homna', 18),
(16, 'Laksam', 18),
(17, 'Lalmai', 18),
(18, 'Monohorgonj', 18),
(19, 'Meghna', 18),
(20, 'Muradnagar', 18),
(21, 'Nangalkot', 18),
(22, 'Titas', 18),
(23, 'Chandpur Sadar', 16),
(24, 'Faridganj', 16),
(25, 'Haimchar', 16),
(26, 'Haziganj', 16),
(27, 'Kachua', 16),
(28, 'Matlab Uttar', 16),
(29, 'Matlab Dakshin', 16),
(30, 'Shahrasti', 16),
(31, 'Brahmanbaria Sadar', 15),
(32, 'Ashuganj', 15),
(33, 'Nasirnagar', 15),
(34, 'Nabinagar', 15),
(35, 'Sarail', 15),
(36, 'Kasba', 15),
(37, 'Akhaura', 15),
(38, 'Bancharampur', 15),
(39, 'Bijoynagar', 15),
(501, '-', 1),
(502, '-', 18),
(503, '-', 16),
(504, '-', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(16) NOT NULL,
  `user_name` varchar(64) DEFAULT NULL,
  `user_designation` varchar(64) NOT NULL,
  `user_division_id` int(8) NOT NULL,
  `user_district_id` int(8) NOT NULL,
  `user_upazila_id` int(8) DEFAULT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_mobile_no` varchar(32) NOT NULL,
  `role_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_designation`, `user_division_id`, `user_district_id`, `user_upazila_id`, `user_email`, `user_password`, `user_mobile_no`, `role_id`) VALUES
(15, 'Mohammed Abdul Matin', 'Deputy Project Director', 0, 0, 0, 'dpd.rtip2.cumilla@lged.gov.bd', '123', '01715529212', 3),
(16, 'Md. Younus Hossain Biswas', 'Executive Engineer', 2, 16, 0, 'xen.chandpur@lged.gov.bd', '123', '01708123187', 21),
(17, 'Mirza Md. Iftekhar Ali', 'Executive Engineer', 2, 18, 0, 'xen.cumilla@lged.gov.bd', 'Lged@2023', '01708123190', 21),
(18, 'Md. Abdul Mannan', 'Executive Engineer', 2, 15, 0, 'xen.bbaria@lged.gov.bd', '123', '01708123180', 21),
(19, 'Md. Saiful Islam', 'Upazila Engineer', 2, 18, 9, 'ue.cumilla-s@lged.gov.bd', '123', '01708161321', 31),
(20, 'Md. Nuruzzaman', 'Upazila Engineer', 2, 18, 12, 'ue.chouddagram@lged.gov.bd', '123', '01732277930', 31),
(21, 'Mishuk Kumar Datta', 'Upazila Engineer', 2, 18, 16, 'ue.laksam@lged.gov.bd', '123', '01718838267', 31),
(22, 'Md. Zahidul Islam', 'Upazila Engineer', 2, 18, 17, 'ue.lalmai@lged.gov.bd', '123', '01710099355', 31),
(23, 'Md. Kamruzzaman', 'Mechanical Foreman', 2, 16, 0, 'foreman.chandpur@lged.gov.bd', '123', '01715692939', 23),
(24, 'Md. Shahidul Islam', 'Upazila Engineer', 2, 16, 23, 'ue.chandpur-s@lged.gov.bd', '123', '01708161308', 31),
(25, 'Md. Khairul Alam Sobuj', 'Upazila Engineer', 2, 16, 25, 'ue.haimchar@lged.gov.bd', '123', '01708161310', 31),
(26, 'Md. Rejwan Siddik', 'Upazila Engineer', 2, 16, 27, 'ue.kachua@lged.gov.bd', '123', '01708161312', 31),
(27, 'Md. Harunur Rashid', 'Mechanical Foreman', 2, 18, 0, 'foreman.cumilla@lged.gov.bd', '123', '01717156070', 23),
(28, 'Alif Ahmed Akkhor', 'Upazila Engineer', 2, 18, 8, 'ue.burichong@lged.gov.bd', '123', '01708161318', 31),
(29, 'Md. Oliur Rahman', 'Upazila Engineer', 2, 18, 7, 'ue.brahmanpara@lged.gov.bd', '123', '01708161317', 31),
(30, 'Md. Jahangir Alam', 'Upazila Engineer', 2, 18, 11, 'ue.chandina@lged.gov.bd', '123', '01708161319', 31),
(31, 'Md. Shah Alam', 'Upazila Engineer', 2, 18, 14, 'ue.debidwar@lged.gov.bd', '123', '01708161324', 31),
(32, 'Md. Jahangir Kabir', 'Upazila Engineer', 2, 18, 20, 'ue.muradnagar@lged.gov.bd', '123', '01708161329', 31),
(33, 'Md. Rahat Amin Patwary', 'Upazila Engineer', 2, 18, 6, 'ue.barura@lged.gov.bd', '123', '01708161316', 31),
(34, 'Showkat Ali Mir', 'Upazila Engineer', 2, 18, 18, 'ue.monohorganj@lged.gov.bd', '123', '01708161328', 31),
(36, 'Afsar Uddin', 'Upazila Engineer', 2, 18, 13, 'ue.daudkandi@lged.gov.bd', '123', '01708161399', 31),
(38, 'GM Mujibor Rahman', 'Executive Engineer', 1, 1, 501, 'xen.dhaka@lged.gov.bd', '123', '01708131299', 21),
(39, 'Md. Saiful Kabir', 'Upazila Engineer', 2, 18, 15, 'ue.homna@lged.gov.bd', 'Lged@2023', '01708161348', 31),
(40, 'Md. Abdulla Al Mamun', 'Upazila Engineer', 2, 18, 21, 'ue.nangalkot@lged.gov.bd', 'Lged@2023', '01708161330', 31),
(41, 'Md. Mahmudul Ashraf', 'Upazila Engineer', 2, 18, 19, 'ue.meghna@lged.gov.bd', 'Lged@2023', '01708161327', 31),
(42, 'Md. Muzammel Haque', 'Upazila Engineer', 2, 18, 22, 'ue.titas@lged.gov.bd', 'Lged@2023', '01708161331', 31),
(43, 'Tapan Banarji', 'Upazila Engineer', 2, 18, 10, 'ue.cumilla-s.daksin@lged.gov.bd', 'Lged@2023', '01708161322', 31),
(44, 'Md. Emdadul Haque', 'Mechanical Foreman', 2, 15, 504, 'foreman.bbaria@lged.gov.bd', 'Lged@2023', '01711968574', 23),
(45, 'Ziaul Haque Zia', 'Upazila Engineer', 2, 16, 24, 'ue.faridganj@lged.gov.bd', 'Lged@2023', '01708161309', 31),
(46, 'Abdulla Al Hasan', 'Upazila Engineer', 2, 16, 26, 'ue.haziganj@lged.gov.bd', 'Lged@2023', '01708161311', 31),
(47, 'Rejwan Hasan', 'Upazila Engineer', 2, 16, 30, 'ue.shahrasti@lged.gov.bd', 'Lged@2023', '01708161315', 31),
(48, 'Hafijur Rahman Khan', 'Upazila Engineer', 2, 16, 28, 'ue.umatlab@lged.gov.bd', 'Lged@2023', '01708161313', 31),
(49, 'Imtiaj Khaled', 'Upazila Engineer', 2, 16, 29, 'ue.dmatlab@lged.gov.bd', 'Lged@2023', '01708161314', 31),
(50, 'Md. Shafiqur Rahman', 'Superintending Engineer (Administration)', 0, 0, 0, 'se.admin@lged.gov.bd', 'Lged@2023', '01708123106', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractor_info`
--
ALTER TABLE `contractor_info`
  ADD PRIMARY KEY (`contractor_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `driver_info`
--
ALTER TABLE `driver_info`
  ADD PRIMARY KEY (`dri_id`);

--
-- Indexes for table `equipment_category`
--
ALTER TABLE `equipment_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `equipment_info`
--
ALTER TABLE `equipment_info`
  ADD PRIMARY KEY (`equip_id`);

--
-- Indexes for table `permission_info`
--
ALTER TABLE `permission_info`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `requisition_info`
--
ALTER TABLE `requisition_info`
  ADD PRIMARY KEY (`requisition_id`);

--
-- Indexes for table `road_layer_list`
--
ALTER TABLE `road_layer_list`
  ADD PRIMARY KEY (`layer_id`);

--
-- Indexes for table `role_info`
--
ALTER TABLE `role_info`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `temp_con_info`
--
ALTER TABLE `temp_con_info`
  ADD PRIMARY KEY (`temp_con_id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`upazila_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor_info`
--
ALTER TABLE `contractor_info`
  MODIFY `contractor_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `division_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `driver_info`
--
ALTER TABLE `driver_info`
  MODIFY `dri_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `equipment_category`
--
ALTER TABLE `equipment_category`
  MODIFY `category_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `equipment_info`
--
ALTER TABLE `equipment_info`
  MODIFY `equip_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `permission_info`
--
ALTER TABLE `permission_info`
  MODIFY `permission_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `requisition_info`
--
ALTER TABLE `requisition_info`
  MODIFY `requisition_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `road_layer_list`
--
ALTER TABLE `road_layer_list`
  MODIFY `layer_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role_info`
--
ALTER TABLE `role_info`
  MODIFY `role_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `temp_con_info`
--
ALTER TABLE `temp_con_info`
  MODIFY `temp_con_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `upazila_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
