-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 02:54 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `k_tes`
--

CREATE TABLE `k_tes` (
  `id` int(11) NOT NULL,
  `nama_ktes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_tes`
--

INSERT INTO `k_tes` (`id`, `nama_ktes`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'B1'),
(6, 'B2'),
(7, 'B3'),
(8, 'B4');

-- --------------------------------------------------------

--
-- Table structure for table `mlogin`
--

CREATE TABLE `mlogin` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlogin`
--

INSERT INTO `mlogin` (`id`, `id_client`, `username`, `password`, `level`, `status`) VALUES
(1, 0, 'sigit', 'sigit', 'admin', 'aktif'),
(2, 1, 'sigit1', 'sigit12', 'user', 'tidak aktif'),
(3, 6, 'aa', 'aa', 'user', 'tidak aktif');

-- --------------------------------------------------------

--
-- Table structure for table `m_client`
--

CREATE TABLE `m_client` (
  `id_client` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `kelas` varchar(232) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `tgl_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_client`
--

INSERT INTO `m_client` (`id_client`, `nama`, `tgl_lahir`, `sekolah`, `kelas`, `jenis_kelamin`, `nis`, `tgl_tes`) VALUES
(1, 'Sigit Budianto', '2002-02-09', 'smk cendekia lasem', '12 Multimedia ', 'Perempuan', '1234', '2020-06-11'),
(6, 'qqq', '2020-07-15', 'qq', 'qq', 'qq', '111', '2020-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `m_hasil`
--

CREATE TABLE `m_hasil` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_ktes` int(11) NOT NULL,
  `benar` int(11) NOT NULL,
  `salah` int(11) NOT NULL,
  `kosong` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_soal`
--

CREATE TABLE `m_soal` (
  `id_soal` int(11) NOT NULL,
  `id_ktes` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `f` varchar(255) NOT NULL,
  `kunci` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_soal`
--

INSERT INTO `m_soal` (`id_soal`, `id_ktes`, `gambar`, `soal`, `a`, `b`, `c`, `d`, `e`, `f`, `kunci`) VALUES
(1, 1, 'A1.1.jpg', 'lihat gambar di bawah ini', 'A1-1A.png', 'A1-1B.png', 'A1-1C.png', 'A1-1D.png', 'A1-1E.png', 'A1-1F.png', 'b'),
(2, 1, 'A1.2.jpg', 'lihat gambar di bawah ini', 'A1-2A.png', 'A1-2B.png', 'A1-2C.png', 'A1-2D.png', 'A1-2E.png', 'A1-2F.png', 'c'),
(3, 1, 'A1.3.jpg', 'lihat gambar di bawah ini', 'A1-3A.png', 'A1-3B.png', 'A1-3C.png', 'A1-3D.png', 'A1-3E.png', 'A1-3F.png', 'b'),
(4, 1, 'A1.4.jpg', 'lihat gambar di bawah ini', 'A1-4A.png', 'A1-4B.png', 'A1-4C.png', 'A1-4D.png', 'A1-4E.png', 'A1-4F.png', 'd'),
(5, 1, 'A1.5.jpg', 'lihat gambar di bawah ini', 'A1-5A.png', 'A1-5B.png', 'A1-5C.png', 'A1-5D.png', 'A1-5E.png', 'A1-5F.png', 'e'),
(6, 1, 'A1.6.jpg', 'lihat gambar di bawah ini', 'A1-6A.png', 'A1-6B.png', 'A1-6C.png', 'A1-6D.png', 'A1-6E.png', 'A1-6F.png', 'b'),
(7, 1, 'A1.7.jpg', 'lihat gambar di bawah ini', 'A1-7A.png', 'A1-7B.png', 'A1-7C.png', 'A1-7D.png', 'A1-7E.png', 'A1-7F.png', 'd'),
(8, 1, 'A1.8.jpg', 'lihat gambar di bawah ini', 'A1-8A.png', 'A1-8B.png', 'A1-8C.png', 'A1-8D.png', 'A1-8E.png', 'A1-8F.png', 'b'),
(9, 1, 'A1.9.jpg', 'lihat gambar di bawah ini', 'A1-9A.png', 'A1-9B.png', 'A1-9C.png', 'A1-9D.png', 'A1-9E.png', 'A1-9F.png', 'e'),
(10, 1, 'A1.10.jpg', 'lihat gambar di bawah ini', 'A1-10A.png', 'A1-10B.png', 'A1-10C.png', 'A1-10D.png', 'A1-10E.png', 'A1-10F.png', 'c'),
(11, 1, 'A1.11.jpg', 'lihat gambar di bawah ini', 'A1-11A.png', 'A1-11B.png', 'A1-11C.png', 'A1-11D.png', 'A1-11E.png', 'A1-11F.png', 'b'),
(12, 1, 'A1.12.jpg', 'lihat gambar di bawah ini', 'A1-12A.png', 'A1-12B.png', 'A1-12C.png', 'A1-12D.png', 'A1-12E.png', 'A1-12F.png', 'b'),
(13, 1, 'A1.13.jpg', 'lihat gambar di bawah ini', 'A1-13A.png', 'A1-13B.png', 'A1-13C.png', 'A1-13D.png', 'A1-13E.png', 'A1-13F.png', 'e'),
(17, 2, 'A2-1.png', 'lihat gambar di bawah ini', 'A2-1A.png', 'A2-1B.png', 'A2-1B.png', 'A2-1C.png', 'A2-1E.png', '', 'b'),
(18, 2, 'A2-2.png', 'lihat gambar di bawah ini', 'A2-2A.png', 'A2-2B.png', 'A2-2C.png', 'A2-2D.png', 'A2-2E.png', '', 'b'),
(19, 2, 'A2-3.png', 'lihat gambar di bawah ini', 'A2-3A.png', 'A2-3B.png', 'A2-3C.png', 'A2-3D.png', 'A2-3E.png', '', 'e'),
(20, 2, 'A2-4.png', 'lihat gambar di bawah ini', 'A2-4A.png', 'A2-4B.png', 'A2-4C.png', 'A2-4D.png', 'A2-4E.png', '', 'a'),
(21, 2, 'A2-5.png', 'lihat gambar di bawah ini', 'A2-5A.png', 'A2-5B.png', 'A2-5C.png', 'A2-5D.png', 'A2-5E.png', '', 'a'),
(22, 2, 'A2-6.png', 'lihat gambar di bawah ini', 'A2-6A.png', 'A2-6B.png', 'A2-6C.png', 'A2-6D.png', 'A2-6E.png', '', 'a'),
(23, 2, 'A2-7.png', 'lihat gambar di bawah ini', 'A2-7A.png', 'A2-7B.png', 'A2-7C.png', 'A2-7D.png', 'A2-7E.png', '', 'a'),
(24, 2, 'A2-8.png', 'lihat gambar di bawah ini', 'A2-8A.png', 'A2-8B.png', 'A2-8C.png', 'A2-8D.png', 'A2-8E.png', '', 'a'),
(25, 2, 'A2-9.png', 'lihat gambar di bawah ini', 'A2-9A.png', 'A2-9B.png', 'A2-9C.png', 'A2-9D.png', 'A2-9E.png', '', 'a'),
(26, 2, 'A2-10.png', 'lihat gambar di bawah ini', 'A2-10A.png', 'A2-10B.png', 'A2-10C.png', 'A2-10D.png', 'A2-10E.png', '', 'a'),
(27, 2, 'A2-11.png', 'lihat gambar di bawah ini', 'A2-11A.png', 'A2-11B.png', 'A2-11C.png', 'A2-11D.png', 'A2-11E.png', '', 'a'),
(28, 2, 'A2-12.png', 'lihat gambar di bawah ini', 'A2-12A.png', 'A2-12B.png', 'A2-12C.png', 'A2-12D.png', 'A2-12E.png', '', 'a'),
(29, 2, 'A2-13.png', 'lihat gambar di bawah ini', 'A2-13A.png', 'A2-13B.png', 'A2-13C.png', 'A2-13D.png', 'A2-13E.png', '', 'a'),
(30, 2, 'A2-14.png', 'lihat gambar di bawah ini', 'A2-14A.png', 'A2-14B.png', 'A2-14C.png', 'A2-14D.png', 'A2-14E.png', '', 'a'),
(31, 3, 'A3-1.png', 'lihat gambar di bawah ini', 'A3-1A.png', 'A3-1B.png', 'A3-1C.png', 'A3-1D.png', 'A3-1E.png', 'A3-1F.png', 'e'),
(32, 3, 'A3-2.png', 'lihat gambar di bawah ini', 'A3-2A.png', 'A3-2B.png', 'A3-2C.png', 'A3-2D.png', 'A3-2E.png', 'A3-2F.png', 'e'),
(33, 3, 'A3-3.png', 'lihat gambar di bawah ini', 'A3-3A.png', 'A3-3B.png', 'A3-3C.png', 'A3-3D.png', 'A3-3E.png', 'A3-3F.png', 'e'),
(34, 3, 'A3-4.png', 'lihat gambar di bawah ini', 'A3-4A.png', 'A3-4B.png', 'A3-4C.png', 'A3-4D.png', 'A3-4E.png', 'A3-4F.png', 'b'),
(35, 3, 'A3-5.png', 'lihat gambar di bawah ini', 'A3-5A.png', 'A3-5B.png', 'A3-5C.png', 'A3-5D.png', 'A3-5E.png', 'A3-5F.png', 'b'),
(36, 3, 'A3-6.png', 'lihat gambar di bawah ini', 'A3-6A.png', 'A3-6B.png', 'A3-6C.png', 'A3-6D.png', 'A3-6E.png', 'A3-6F.png', 'd'),
(37, 3, 'A3-7.png', 'lihat gambar di bawah ini', 'A3-7A.png', 'A3-7B.png', 'A3-7C.png', 'A3-7D.png', 'A3-7E.png', 'A3-7F.png', 'e'),
(38, 3, 'A3-8.png', 'lihat gambar di bawah ini', 'A3-8A.png', 'A3-8B.png', 'A3-8C.png', 'A3-8D.png', 'A3-8E.png', 'A3-8F.png', 'e'),
(39, 3, 'A3-9.png', 'lihat gambar di bawah ini', 'A3-9A.png', 'A3-9B.png', 'A3-9C.png', 'A3-9D.png', 'A3-9E.png', 'A3-9F.png', 'a'),
(40, 3, 'A3-10.png', 'lihat gambar di bawah ini', 'A3-10A.png', 'A3-10B.png', 'A3-10C.png', 'A3-10D.png', 'A3-10E.png', 'A3-10F.png', 'a'),
(41, 3, 'A3-11.png', 'lihat gambar di bawah ini', 'A3-11A.png', 'A3-11B.png', 'A3-11C.png', 'A3-11D.png', 'A3-11E.png', 'A3-11F.png', 'f'),
(42, 3, 'A3-12.png', 'lihat gambar di bawah ini', 'A3-12A.png', 'A3-12B.png', 'A3-12C.png', 'A3-12D.png', 'A3-12E.png', 'A3-12F.png', 'c'),
(43, 3, 'A3-13.png', 'lihat gambar di bawah ini', 'A3-13A.png', 'A3-13B.png', 'A3-13C.png', 'A3-13D.png', 'A3-13E.png', 'A3-13F.png', 'c'),
(44, 4, 'A4-1.png', 'lihat gambar di bawah ini', 'A4-1A.png', 'A4-1B.png', 'A4-1C.png', 'A4-1D.png', 'A4-1E.png', '', 'b'),
(45, 4, 'A4-2.png', 'lihat gambar di bawah ini', 'A4-2A.png', 'A4-2B.png', 'A4-2C.png', 'A4-2D.png', 'A4-2E.png', '', 'a'),
(46, 4, 'A4-3.png', 'lihat gambar di bawah ini', 'A4-3A.png', 'A4-3B.png', 'A4-3C.png', 'A4-3D.png', 'A4-3E.png', '', 'd'),
(47, 4, 'A4-4.png', 'lihat gambar di bawah ini', 'A4-4A.png', 'A4-4B.png', 'A4-4C.png', 'A4-4D.png', 'A4-4E.png', '', 'd'),
(48, 4, 'A4-5.png', 'lihat gambar di bawah ini', 'A4-5A.png', 'A4-5B.png', 'A4-5C.png', 'A4-5D.png', 'A4-5E.png', '', 'a'),
(49, 4, 'A4-6.png', 'lihat gambar di bawah ini', 'A4-6A.png', 'A4-6B.png', 'A4-6C.png', 'A4-6D.png', 'A4-6E.png', '', 'b'),
(50, 4, 'A4-7.png', 'lihat gambar di bawah ini', 'A4-7A.png', 'A4-7B.png', 'A4-7C.png', 'A4-7D.png', 'A4-7E.png', '', 'c'),
(51, 4, 'A4-8.png', 'lihat gambar di bawah ini', 'A4-8A.png', 'A4-8B.png', 'A4-8C.png', 'A4-8D.png', 'A4-8E.png', '', 'd'),
(52, 4, 'A4-9.png', 'lihat gambar di bawah ini', 'A4-9A.png', 'A4-9B.png', 'A4-9C.png', 'A4-9D.png', 'A4-9E.png', '', 'a'),
(53, 4, 'A4-10.png', 'lihat gambar di bawah ini', 'A4-10A.png', 'A4-10B.png', 'A4-10C.png', 'A4-10D.png', 'A4-10E.png', '', 'd'),
(54, 5, 'B1-1.png', 'lihat gambar di bawah ini', 'B1-1A.png', 'B1-1B.png', 'B1-1C.png', 'B1-1D.png', 'B1-1E.png', 'B1-1F.png', 'a'),
(55, 5, 'B1-2.png', 'lihat gambar di bawah ini', 'B1-2A.png', 'B1-2B.png', 'B1-2C.png', 'B1-2D.png', 'B1-2E.png', 'B1-2F.png', 'a'),
(56, 5, 'B1-3.png', 'lihat gambar di bawah ini', 'B1-3A.png', 'B1-3B.png', 'B1-3C.png', 'B1-3D.png', 'B1-3E.png', 'B1-3F.png', 'a'),
(57, 5, 'B1-4.png', 'lihat gambar di bawah ini', 'B1-4A.png', 'B1-4B.png', 'B1-4C.png', 'B1-4D.png', 'B1-4E.png', 'B1-4F.png', 'a'),
(58, 5, 'B1-5.png', 'lihat gambar di bawah ini', 'B1-5A.png', 'B1-5B.png', 'B1-5C.png', 'B1-5D.png', 'B1-5E.png', 'B1-5F.png', 'a'),
(59, 5, 'B1-6.png', 'lihat gambar di bawah ini', 'B1-6A.png', 'B1-6B.png', 'B1-6C.png', 'B1-6D.png', 'B1-6E.png', 'B1-6F.png', 'a'),
(60, 5, 'B1-7.png', 'lihat gambar di bawah ini', 'B1-7A.png', 'B1-7B.png', 'B1-7C.png', 'B1-7D.png', 'B1-7E.png', 'B1-7F.png', 'a'),
(61, 5, 'B1-8.png', 'lihat gambar di bawah ini', 'B1-8A.png', 'B1-8B.png', 'B1-8C.png', 'B1-8D.png', 'B1-8E.png', 'B1-8F.png', 'a'),
(62, 5, 'B1-9.png', 'lihat gambar di bawah ini', 'B1-9A.png', 'B1-9B.png', 'B1-9C.png', 'B1-9D.png', 'B1-9E.png', 'B1-9F.png', 'a'),
(63, 5, 'B1-10.png', 'lihat gambar di bawah ini', 'B1-10A.png', 'B1-10B.png', 'B1-10C.png', 'B1-10D.png', 'B1-10E.png', 'B1-10F.png', 'a'),
(64, 5, 'B1-11.png', 'lihat gambar di bawah ini', 'B1-11A.png', 'B1-11B.png', 'B1-11C.png', 'B1-11D.png', 'B1-11E.png', 'B1-11F.png', 'a'),
(65, 5, 'B1-12.png', 'lihat gambar di bawah ini', 'B1-12A.png', 'B1-12B.png', 'B1-12C.png', 'B1-12D.png', 'B1-12E.png', 'B1-12F.png', 'a'),
(66, 5, 'B1-13.png', 'lihat gambar di bawah ini', 'B1-13A.png', 'B1-13B.png', 'B1-13C.png', 'B1-13D.png', 'B1-13E.png', 'B1-13F.png', 'a'),
(67, 6, 'B2-1.png', 'lihat gambar di bawah ini', 'B2-1A.png', 'B2-1B.png', 'B2-1C.png', 'B2-1D.png', 'B2-1E.png', '', 'a'),
(68, 6, 'B2-2.png', 'lihat gambar di bawah ini', 'B2-2A.png', 'B2-2B.png', 'B2-2C.png', 'B2-2D.png', 'B2-2E.png', '', 'a'),
(69, 6, 'B2-3.png', 'lihat gambar di bawah ini', 'B2-3A.png', 'B2-3B.png', 'B2-3C.png', 'B2-3D.png', 'B2-3E.png', '', 'a'),
(70, 6, 'B2-4.png', 'lihat gambar di bawah ini', 'B2-4A.png', 'B2-4B.png', 'B2-4C.png', 'B2-4D.png', 'B2-4E.png', '', 'a'),
(71, 6, 'B2-5.png', 'lihat gambar di bawah ini', 'B2-5A.png', 'B2-5B.png', 'B2-5C.png', 'B2-5D.png', 'B2-5E.png', '', 'a'),
(72, 6, 'B2-6.png', 'lihat gambar di bawah ini', 'B2-6A.png', 'B2-6B.png', 'B2-6C.png', 'B2-6D.png', 'B2-6E.png', '', 'a'),
(73, 6, 'B2-7.png', 'lihat gambar di bawah ini', 'B2-7A.png', 'B2-7B.png', 'B2-7C.png', 'B2-7D.png', 'B2-7E.png', '', 'a'),
(74, 6, 'B2-8.png', 'lihat gambar di bawah ini', 'B2-8A.png', 'B2-8B.png', 'B2-8C.png', 'B2-8D.png', 'B2-8E.png', '', 'a'),
(75, 6, 'B2-9.png', 'lihat gambar di bawah ini', 'B2-9A.png', 'B2-9B.png', 'B2-9C.png', 'B2-9D.png', 'B2-9E.png', '', 'a'),
(76, 6, 'B2-10.png', 'lihat gambar di bawah ini', 'B2-10A.png', 'B2-10B.png', 'B2-10C.png', 'B2-10D.png', 'B2-10E.png', '', 'a'),
(77, 6, 'B2-11.png', 'lihat gambar di bawah ini', 'B2-11A.png', 'B2-11B.png', 'B2-11C.png', 'B2-11D.png', 'B2-11E.png', '', 'a'),
(78, 6, 'B2-12.png', 'lihat gambar di bawah ini', 'B2-12A.png', 'B2-12B.png', 'B2-12C.png', 'B2-12D.png', 'B2-12E.png', '', 'a'),
(79, 6, 'B2-13.png', 'lihat gambar di bawah ini', 'B2-13A.png', 'B2-13B.png', 'B2-13C.png', 'B2-13D.png', 'B2-13E.png', '', 'a'),
(80, 6, 'B2-14.png', 'lihat gambar di bawah ini', 'B2-14A.png', 'B2-14B.png', 'B2-14C.png', 'B2-14D.png', 'B2-14E.png', '', 'a'),
(81, 7, 'B3-1.png', 'lihat gambar di bawah ini', 'B3-1A.png', 'B3-1B.png', 'B3-1C.png', 'B3-1D.png', 'B3-1E.png', 'B3-1F.png', 'a'),
(82, 7, 'B3-2.png', 'lihat gambar di bawah ini', 'B3-2A.png', 'B3-2B.png', 'B3-2C.png', 'B3-2D.png', 'B3-2E.png', 'B3-2F.png', 'a'),
(83, 7, 'B3-3.png', 'lihat gambar di bawah ini', 'B3-3A.png', 'B3-3B.png', 'B3-3C.png', 'B3-3D.png', 'B3-3E.png', 'B3-3F.png', 'a'),
(84, 7, 'B3-4.png', 'lihat gambar di bawah ini', 'B3-4A.png', 'B3-4B.png', 'B3-4C.png', 'B3-4D.png', 'B3-4E.png', 'B3-4F.png', 'a'),
(85, 7, 'B3-5.png', 'lihat gambar di bawah ini', 'B3-5A.png', 'B3-5B.png', 'B3-5C.png', 'B3-5D.png', 'B3-5E.png', 'B3-5F.png', 'a'),
(86, 7, 'B3-6.png', 'lihat gambar di bawah ini', 'B3-6A.png', 'B3-6B.png', 'B3-6C.png', 'B3-6D.png', 'B3-6E.png', 'B3-6F.png', 'a'),
(87, 7, 'B3-7.png', 'lihat gambar di bawah ini', 'B3-7A.png', 'B3-7B.png', 'B3-7C.png', 'B3-7D.png', 'B3-7E.png', 'B3-7F.png', 'a'),
(88, 7, 'B3-8.png', 'lihat gambar di bawah ini', 'B3-8A.png', 'B3-8B.png', 'B3-8C.png', 'B3-8D.png', 'B3-8E.png', 'B3-8F.png', 'a'),
(89, 7, 'B3-9.png', 'lihat gambar di bawah ini', 'B3-9A.png', 'B3-9B.png', 'B3-9C.png', 'B3-9D.png', 'B3-9E.png', 'B3-9F.png', 'a'),
(90, 7, 'B3-10.png', 'lihat gambar di bawah ini', 'B3-10A.png', 'B3-10B.png', 'B3-10C.png', 'B3-10D.png', 'B3-10E.png', 'B3-10F.png', 'a'),
(91, 7, 'B3-11.png', 'lihat gambar di bawah ini', 'B3-11A.png', 'B3-11B.png', 'B3-11C.png', 'B3-11D.png', 'B3-11E.png', 'B3-11F.png', 'a'),
(92, 7, 'B3-12.png', 'lihat gambar di bawah ini', 'B3-12A.png', 'B3-12B.png', 'B3-12C.png', 'B3-12D.png', 'B3-12E.png', 'B3-12F.png', 'a'),
(93, 7, 'B3-13.png', 'lihat gambar di bawah ini', 'B3-13A.png', 'B3-13B.png', 'B3-13C.png', 'B3-13D.png', 'B3-13E.png', 'B3-13F.png', 'a'),
(94, 8, 'B4-1.png', 'lihat gambar di bawah ini', 'B4-1A.png', 'B4-1B.png', 'B4-1C.png', 'B4-1D.png', 'B4-1E.png', '', 'a'),
(95, 8, 'B4-2.png', 'lihat gambar di bawah ini', 'B4-2A.png', 'B4-2B.png', 'B4-2C.png', 'B4-2D.png', 'B4-2E.png', '', 'a'),
(96, 8, 'B4-3.png', 'lihat gambar di bawah ini', 'B4-3A.png', 'B4-3B.png', 'B4-3C.png', 'B4-3D.png', 'B4-3E.png', '', 'a'),
(97, 8, 'B4-4.png', 'lihat gambar di bawah ini', 'B4-4A.png', 'B4-4B.png', 'B4-4C.png', 'B4-4D.png', 'B4-4E.png', '', 'a'),
(98, 8, 'B4-5.png', 'lihat gambar di bawah ini', 'B4-5A.png', 'B4-5B.png', 'B4-5C.png', 'B4-5D.png', 'B4-5E.png', '', 'a'),
(99, 8, 'B4-6.png', 'lihat gambar di bawah ini', 'B4-6A.png', 'B4-6B.png', 'B4-6C.png', 'B4-6D.png', 'B4-6E.png', '', 'a'),
(100, 8, 'B4-7.png', 'lihat gambar di bawah ini', 'B4-7A.png', 'B4-7B.png', 'B4-7C.png', 'B4-7D.png', 'B4-7E.png', '', 'a'),
(101, 8, 'B4-8.png', 'lihat gambar di bawah ini', 'B4-8A.png', 'B4-8B.png', 'B4-8C.png', 'B4-8D.png', 'B4-8E.png', '', 'a'),
(102, 8, 'B4-9.png', 'lihat gambar di bawah ini', 'B4-9A.png', 'B4-9B.png', 'B4-9C.png', 'B4-9D.png', 'B4-9E.png', '', 'a'),
(103, 8, 'B4-10.png', 'lihat gambar di bawah ini', 'B4-10A.png', 'B4-10B.png', 'B4-10C.png', 'B4-10D.png', 'B4-10E.png', '', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `k_tes`
--
ALTER TABLE `k_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mlogin`
--
ALTER TABLE `mlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_client`
--
ALTER TABLE `m_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `m_hasil`
--
ALTER TABLE `m_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_soal`
--
ALTER TABLE `m_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `k_tes`
--
ALTER TABLE `k_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mlogin`
--
ALTER TABLE `mlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_client`
--
ALTER TABLE `m_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_hasil`
--
ALTER TABLE `m_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `m_soal`
--
ALTER TABLE `m_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
