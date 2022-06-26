-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 01:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kazeproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `pelajaran` varchar(255) NOT NULL,
  `kode_pertemuan` int(15) NOT NULL,
  `pretemuan` int(2) NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `kode_absen` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `kehadiran` enum('Hadir','Sakit','Alpha') NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`pelajaran`, `kode_pertemuan`, `pretemuan`, `kode_kelas`, `kode_absen`, `nama`, `nim`, `kehadiran`, `tanggal`) VALUES
('Algoritma & Pemrograman', 2212021, 1, '221202', '34112110402212021', 'Rosa Kumala Dewi', '3411211000', 'Hadir', '2022-06-25'),
('Algoritma & Pemrograman', 2212021, 1, '221202', '34112110492212021', 'Nur Faid Prasetyo', '3411211049', 'Alpha', '2022-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kode_admin` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `nama`, `email`, `jabatan`, `bio`, `profil`, `sampul`) VALUES
('221202', 'Kzquandary', 'kzquandary@gmail.com', 'Staff IT', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_kelas`
--

CREATE TABLE `anggota_kelas` (
  `kode_kelas` varchar(255) NOT NULL,
  `pelajaran` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `kode_dosen` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_kelas`
--

INSERT INTO `anggota_kelas` (`kode_kelas`, `pelajaran`, `nim`, `kode_dosen`, `kelas`, `sampul`, `nama`) VALUES
('221202', 'Algoritma & Pemrograman', '3411211038', '049', 'B', 'NULL', 'Septian Yudha Nailendra'),
('221202', 'Algoritma & Pemrograman', '3411211041', '049', 'B', 'NULL', 'Firza Rafiandi Andhika'),
('221202', 'Algoritma & Pemrograman', '3411211044', '049', 'B', 'NULL', 'Aldy Aditiya'),
('221202', 'Algoritma dan Pemrograman', '3411211049', '049', 'B', 'sampul/221202.jpg', 'Nur Faid Prasetyo');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kode_dosen` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama`, `email`, `password`, `gender`, `no_hp`, `bio`, `profil`, `sampul`) VALUES
('049', 'Dr. Asep Id Hadiana', 'asepidhadiana@gmail.com', 'asepidhadiana', 'Laki-laki', '089662966963', '', 'profile/KazeProfile.jpeg', 'sampul/KazeSampul.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kabsen`
--

CREATE TABLE `kabsen` (
  `kode_absen` int(20) NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `pertemuan` varchar(255) NOT NULL,
  `pelajaran` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabsen`
--

INSERT INTO `kabsen` (`kode_absen`, `kode_kelas`, `pertemuan`, `pelajaran`, `tanggal`) VALUES
(2212021, '221202', '1', 'Algoritma & Pemrograman', '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `pelajaran` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `kode_dosen` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nama_dosen`, `pelajaran`, `kelas`, `kode_dosen`, `sampul`) VALUES
('221202', 'Dr. Asep Id Hadiana', 'Algoritma & Pemrograman', 'B', '049', 'sampul/221202.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `semester` varchar(2) NOT NULL,
  `wali` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `email`, `gender`, `fakultas`, `jurusan`, `kelas`, `birthdate`, `semester`, `wali`, `status`, `bio`, `profil`, `sampul`) VALUES
('3411211000', 'Rosa Kumala Dewi', 'rosakd@gmail.com', 'Perempuan', 'Sains dan Informatika', 'Informatika', 'B', '2005-01-27', '2', 'Dr. Asep Id Hadiana', 'Aktif', 'Saya suka mewek', 'profile/ProfilRosa.jpg', 'sampul/SampulRosa.jpeg'),
('3411211038', 'Septian Yudha Nailendra', 'septianyudha21@if.unjani.ac.id', 'Laki-laki', 'Sains dan Informatika', 'Informatika', 'B', '2002-09-10', '2', 'Dr. Asep Id Hadiana', 'Aktif', 'Halo saya Dr. Asep Id Hadiana', 'profile/KazeProfile.jpeg', 'sampul/KazeSampul.jpeg'),
('3411211041', 'Firza Rafiandi Andhika', 'firzassss@gmail.com', 'Laki-laki', 'Sains dan Informatika', 'Informatika', 'B', '2003-01-17', '2', 'Dr. Asep Id Hadiana', 'Aktif', 'Halo saya murid Dr. Asep Id Hadiana', 'profile/KazeProfile.jpeg', 'sampul/KazeSampul.jpeg'),
('3411211044', 'Aldy Aditiya', 'aldyaditiya57@gmail.com', 'Laki-laki', 'Sains dan Informatika', 'Informatika', 'B', '2003-07-03', '2', 'Dr. Asep Id Hadiana', 'Aktif', 'Halo saya murid Dr. Asep Id Hadiana', 'profile/KazeProfile.jpeg', 'sampul/KazeSampul.jpeg'),
('3411211049', 'Nur Faid Prasetyo', 'kzquandary@gmail.com', 'Laki-laki', 'Sains dan Informatika', 'Informatika', 'B', '2002-12-22', '2', 'Dr. Asep Id Hadiana', 'Aktif', 'Saya Manusia Terkuat Di Bumi', 'profile/KazeProfile.jpeg', 'sampul/KazeSampul.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `pelajaran` varchar(255) NOT NULL,
  `tugas 1` varchar(255) NOT NULL,
  `tugas 2` varchar(255) NOT NULL,
  `tugas 3` varchar(255) NOT NULL,
  `tugas 4` varchar(255) NOT NULL,
  `tugas 5` varchar(255) NOT NULL,
  `absensi` varchar(255) NOT NULL,
  `uts` varchar(255) NOT NULL,
  `uas` varchar(255) NOT NULL,
  `nilai akhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nim`, `nama`, `kelas`, `dosen`, `kode_kelas`, `pelajaran`, `tugas 1`, `tugas 2`, `tugas 3`, `tugas 4`, `tugas 5`, `absensi`, `uts`, `uas`, `nilai akhir`) VALUES
('3411211000', 'Rosa Kumala Dewi', 'B', 'Dr. Asep Id Hadiana', '221202', 'Algoritma dan Pemrograman', '5', '10', '11', '0', '0', '0', '0', '0', '0'),
('3411211038', 'Septian Yudha Nailendra', 'B', 'Dr. Asep Id Hadiana', '221202', 'Algoritma & Pemrograman', '5', '10', '11', '0', '0', '0', '0', '0', '0'),
('3411211041', 'Firza Rafiandi Andhika ', 'B', 'Dr. Asep Id Hadiana', '221202', 'Algoritma & Pemrograman', '5', '10', '11', '0', '0', '0', '0', '0', '0'),
('3411211044', 'Aldy Aditiya', 'B', 'Dr. Asep Id Hadiana', '221202', 'Algoritma & Pemrograman', '5', '10', '11', '0', '0', '0', '0', '0', '0'),
('3411211049', 'Nur Faid Prasetyo', 'B', 'Dr. Asep Id Hadiana', '221202', 'Algoritma dan Pemrograman', '5', '10', '11', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_login`, `password`, `status`, `email`) VALUES
('049', 'dc855efb0dc7476760afaa1b281665f1', 2, 'asephadiana@gmail.com'),
('3411211000', 'a25e7ea9ad877e9dc33f1d671aa00d4c', 1, 'rosakd@gmail.com'),
('3411211038', 'a25e7ea9ad877e9dc33f1d671aa00d4c', 1, 'septianyudha21@if.unjani.ac.id'),
('3411211041', 'a25e7ea9ad877e9dc33f1d671aa00d4c', 1, 'firzassss@gmail.com'),
('3411211044', 'a25e7ea9ad877e9dc33f1d671aa00d4c', 1, 'aldyaditiya57@gmail.com'),
('3411211049', '36d74dff2d790d2d37b1a12f44f3f037', 1, 'kzquandary@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`kode_absen`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `anggota_kelas`
--
ALTER TABLE `anggota_kelas`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode_dosen`);

--
-- Indexes for table `kabsen`
--
ALTER TABLE `kabsen`
  ADD PRIMARY KEY (`kode_absen`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabsen`
--
ALTER TABLE `kabsen`
  MODIFY `kode_absen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2212023;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
