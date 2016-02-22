-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 07:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `h3f`
--

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `university_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'pec', 'Pondicherry Engineering College', NULL, NULL),
(2, 1, 'igcas', 'Indra Gandhi College of Arts and Science ', NULL, NULL);

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `slug`, `name`, `departmentof_id`, `departmentof_type`, `created_at`, `updated_at`) VALUES
(1, 'department_of_managemnt', 'Department of Management', 1, 'App\\School', NULL, NULL),
(2, 'dep_engg', 'Department of Engineering and Technology', 1, 'App\\College', NULL, NULL);

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `department_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'keerthi', 'Keerthivasan', NULL, NULL),
(2, 1, 'murugane', 'Murugane', NULL, NULL),
(3, 2, 'john', 'John', NULL, NULL),
(4, 2, 'sam', 'Sam', NULL, NULL),
(5, 1, 'kartick', 'Karthick', NULL, NULL);



--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `faculty_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'paper1', 'paper1', NULL, NULL),
(2, 2, 'paper2', 'paper2', NULL, NULL),
(3, 3, 'paper3', 'paper3', NULL, NULL),
(4, 4, 'paper4', 'paper4', NULL, NULL),
(5, 5, 'paper5', 'paper5', NULL, NULL);

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `university_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'som', 'School of Management', NULL, NULL),
(2, 1, 'soe', 'School of Engineering and Technology', NULL, NULL);

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 'pondicherry', 'pondicherry', NULL, NULL),
(2, 'tamilnadu', 'Tamil Nadu', NULL, NULL);

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `state_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'pondicherry-university', 'Pondicherry University', NULL, NULL),
(2, 2, 'madras-university', 'Madras University', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
