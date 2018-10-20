-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 11:33 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nama` varchar(20) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hobi` varchar(35) NOT NULL,
  `fakultas` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `moto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nama`, `nim`, `tgl_lahir`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`, `moto`) VALUES
('Firza Maulana', '242424', '2018-10-14', 'Laki-Laki', 'BULU TANGKIS', 'FAKULTAS REKAYASA INDUSTRI', 'Medan', 'Jangan pantang menyerah'),
('Rizsa El Akbar', '25372542', '2018-10-18', 'Laki-Laki', 'BULU TANGKIS, SEPAKBOLA', 'FAKULTAS REKAYASA INDUSTRI', 'Palu', 'Tetap bahagia'),
('Dania Zalfa', '262764', '2018-10-24', 'Laki-Laki', 'SEPAKBOLA', 'FAKULTAS REKAYASA INDUSTRI', 'Bandung', 'Yang penting yakin\r\n'),
('Zidan Safari', '2632672', '2018-10-15', 'Perempuan', 'SEPAKBOLA, BOLA VOLI', 'FAKULTAS INFORMATIKA', 'Mataram', 'Istiqomah'),
('ADINDA', '2642462', '2018-10-14', 'Laki-Laki', 'SEPAKBOLA', 'FAKULTAS REKAYASA INDUSTRI', 'Bandung', 'Harus bisa'),
('Abdurrahman Wahid', '2676442', '2018-10-10', 'Laki-Laki', 'BULU TANGKIS', 'FAKULTAS INFORMATIKA', 'Bandung', 'Bahagia selalu'),
('ILHAM RIZKI', '313131', '2018-10-25', 'Laki-Laki', 'BULU TANGKIS, SEPAKBOLA', 'FAKULTAS ILMU TERAPAN', 'Lombok', 'Banyak bersyukur'),
('Aan Yuni', '6426484', '2018-10-24', 'Perempuan', 'SEPAKBOLA', 'FAKULTAS REKAYASA INDUSTRI', 'Bandung', 'Yang penting cantik'),
('M. MUSYAHID ABROR', '6701174119', '2018-10-28', 'Laki-Laki', 'SEPAKBOLA', 'FAKULTAS INFORMATIKA', 'Bandung', 'Jangan susah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
