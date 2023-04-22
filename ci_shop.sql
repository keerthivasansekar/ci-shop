-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 09:43 AM
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
-- Database: `ci_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `description` varchar(155) NOT NULL,
  `content` text NOT NULL,
  `price` int(11) NOT NULL DEFAULT 124,
  `category` varchar(55) NOT NULL,
  `slug` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `price`, `category`, `slug`) VALUES
(1, 'Hospital Management System', 'Our Hospital Management System<br>Product', 'null', 124, 'products', 'hospital-management-system'),
(2, 'School Management System', 'Our School Management System<br>Product', 'null', 124, 'products', 'school-management-system'),
(3, 'Restaurant Food Delivery App', 'Our Restaurant Food Delivery App<br>Product', 'null', 124, 'products', 'restaurant-food-delivery-app'),
(4, 'Car Booking App Uber Ola Clone', 'Our Car Booking App Uber Ola Clone<br>Product', 'null', 124, 'products', 'car-booking-app-uber-ola-clone'),
(5, 'Facility Management Software', 'Our Facility Management Software<br>Product', 'null', 124, 'products', 'facility-management-software'),
(6, 'University/Institution/College ERP', 'Our University/Institution/College ERP<br>Product', 'null', 124, 'products', 'university-institution-college-erp'),
(7, 'Ecommerce Mobile App', 'Our Ecommerce Mobile App<br>Product', 'null', 124, 'products', 'ecommerce-mobile-app'),
(8, 'Grocery Mobile App', 'Our Grocery Mobile App<br>Product', 'null', 124, 'products', 'grocery-mobile-app'),
(9, 'Learning Management Software', 'Our Learning Management Software<br>Product', 'null', 124, 'products', 'learning-management-software'),
(10, 'Online Exam Software', 'Our Online Exam Software<br>Product', 'null', 124, 'products', 'online-exam-software'),
(11, 'Retail POS Software', 'Our Retail POS Software<br>Product', 'null', 124, 'products', 'retail-pos-software'),
(12, 'Enterprises Resourse Planning (ERP)', 'Our Enterprises Resourse Planning (ERP)<br>Product', 'null', 124, 'products', 'enterprises-resourse-planning-erp'),
(13, 'Customer Relationship Management System', 'Our Customer Relationship Management System<br>Product', 'null', 124, 'products', 'customer-relationship-management-system'),
(14, 'Human Resource Management System', 'Our Human Resource Management System<br>Product', 'null', 124, 'products', 'human-resource-management-system'),
(15, 'Invoice Management System', 'Our Invoice Management System<br>Product', 'null', 124, 'products', 'invoice-management-system'),
(16, 'Project Management System', 'Our Project Management System<br>Product', 'null', 124, 'products', 'project-management-system'),
(17, 'Accounting Management System', 'Our Accounting Management System<br>Product', 'null', 124, 'products', 'accounting-management-system'),
(18, 'Membership Management System', 'Our Membership Management System<br>Product', 'null', 124, 'products', 'membership-management-system'),
(19, 'Courier & Logistics Integration System', 'Our Courier & Logistics Integration System<br>Product', 'null', 124, 'products', 'courier-logistics-integration-system'),
(20, 'Legal Case Management System', 'Our Legal Case Management System<br>Product', 'null', 124, 'products', 'legal-case-management-system');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
