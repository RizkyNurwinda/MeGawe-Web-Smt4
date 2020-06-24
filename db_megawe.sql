-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 10:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_megawe`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_perusahaan`
--

CREATE TABLE `jenis_perusahaan` (
  `idJenisPerusahaan` int(11) NOT NULL,
  `jenisPerusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_perusahaan`
--

INSERT INTO `jenis_perusahaan` (`idJenisPerusahaan`, `jenisPerusahaan`) VALUES
(1, 'Manufaktur'),
(2, 'Perdagangan\r\n'),
(3, 'Pemerintahan\r\n'),
(4, 'Pabrik\r\n'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pekerjaan`
--

CREATE TABLE `kategori_pekerjaan` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_pekerjaan`
--

INSERT INTO `kategori_pekerjaan` (`idKategori`, `namaKategori`, `gambar`) VALUES
(1, 'Akutansi/Keuangan', 'o1.png'),
(2, 'Komputer/IT', 'o2.png'),
(3, 'Pendidikan', 'o3.png'),
(4, 'Teknik', 'o4.png'),
(5, 'Kesehatan', 'o5.png'),
(6, 'Marketing', 'o6.png');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `idLowongan` int(11) NOT NULL,
  `lowongan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `persyaratan` varchar(255) NOT NULL,
  `idPerusahaan` int(11) NOT NULL,
  `tglPost` date NOT NULL,
  `status` enum('buka','tutup') NOT NULL,
  `gaji` bigint(20) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `jamKerja` enum('0','1','2') NOT NULL,
  `kuota` int(11) NOT NULL,
  `fkKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`idLowongan`, `lowongan`, `deskripsi`, `persyaratan`, `idPerusahaan`, `tglPost`, `status`, `gaji`, `kota`, `jamKerja`, `kuota`, `fkKategori`) VALUES
(1, 'Kasir', 'Dapat bekerja keras dan memajukan perusahaan', '1. lulusan sma/sedrajat\n2. bekerja keras\n3. patuh\n4. suka bermusyawarah', 5, '2020-06-01', 'buka', 1000000, 'Kediri', '0', 2, 1),
(2, 'Staf IT', 'Mengatur jaringan yang ada', '1. lulusan sma/sedrajat\n2. bekerja keras\n3. patuh\n4. suka bermusyawarah', 5, '2020-06-01', 'buka', 2000000, 'Kediri', '0', 1, 2),
(3, 'PSG', 'Mempromosikan produk ', '1. lulusan sma/sedrajat\n2. bekerja keras\n3. patuh\n4. suka bermusyawarah', 5, '2020-06-01', 'buka', 1500000, 'Kediri', '0', 1, 6),
(4, 'Pengajar MM', 'Menjadi guru les MM SMP', '1. lulusan sma/sedrajat\n2. bekerja keras\n3. patuh\n4. suka bermusyawarah', 5, '2020-06-01', 'tutup', 1000000, 'Kediri', '1', 0, 3),
(5, 'Kuli', 'Memindahkan barang-barang bangunan', '1. smp/sedrajat\n2. semangat\n3. giat\n4. Termotivasi', 6, '2020-06-01', 'buka', 200000, 'Lumajang', '1', 5, 2),
(6, 'Sekertaris', 'Bekerja Sesuai Target', '1. lulusan sma/sedrajat\n2. bekerja keras\n3. patuh\n4. suka bermusyawarah', 5, '2020-06-01', 'buka', 1000000, 'Lumajang', '2', 1, 1),
(7, 'Tenaga Medis', 'Dapat melakukan P3K', '1. lulusan sma/sedrajat\n2. bekerja keras\n3. patuh\n4. suka bermusyawarah', 5, '2020-06-01', 'buka', 500000, 'Lumajang', '1', 6, 5),
(8, 'Marketing', 'Mempromosikan Barang di media sosial', '1. lulusan sma/sedrajat\n2. bekerja keras\n3. patuh\n4. suka bermusyawarah', 6, '2020-06-01', 'buka', 800000, 'Ponorogo', '1', 20, 6);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idMember` int(11) NOT NULL,
  `namaMember` varchar(100) NOT NULL,
  `jenisKelamin` enum('L','P') NOT NULL,
  `tanggalLahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTelp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fotoMember` varchar(25) NOT NULL,
  `fkUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idMember`, `namaMember`, `jenisKelamin`, `tanggalLahir`, `agama`, `alamat`, `noTelp`, `email`, `fotoMember`, `fkUser`) VALUES
(1, 'kiki', 'P', '2020-06-01', 'islam', 'Kediri', '089868989787', 'rizky@gmail.com', 'usericon.png', 2),
(2, 'RATNA DEWI S', 'P', '1991-02-06', 'islam', 'Lumajang', '085616151718', 'dewis@gmail.com', 'usericon1.png', 5),
(3, 'Nina Ard', 'P', '2020-06-05', 'islam', 'Bojonegoro', '085616151799', 'ardnina@gmail.com', 'download.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `idPendaftar` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `idLowongan` int(11) NOT NULL,
  `tglDaftar` date NOT NULL,
  `cv` varchar(100) NOT NULL,
  `statusDaftar` enum('baru','lolos','tidak lolos') NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`idPendaftar`, `idMember`, `idLowongan`, `tglDaftar`, `cv`, `statusDaftar`, `keterangan`) VALUES
(1, 8, 8, '2020-06-01', 'LATIHAN_SOAL_FILE_CSV.pdf', 'tidak lolos', 'Terverifikasi'),
(2, 8, 10, '2020-06-01', 'Praktikum12.pdf', 'lolos', 'Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idPerusahaan` int(11) NOT NULL,
  `namaPerusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunBerdiri` date NOT NULL,
  `idJenisPerusahaan` int(11) NOT NULL,
  `fotoPerusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fkUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idPerusahaan`, `namaPerusahaan`, `alamat`, `noTelp`, `email`, `website`, `visi`, `misi`, `tahunBerdiri`, `idJenisPerusahaan`, `fotoPerusahaan`, `fkUser`) VALUES
(5, 'PT SUBUR MAKMUR', 'KEDIRI', '089868989787', 'SUBURMAKUR@GMAIL.COM', 'www.SUBURMAKMUR.co.id', 'MENGUTAMAAN KHAK PELANGGAN', '1. MENGUTAMAKAN MUTU\r\n2. MENJAMIN KWALITAS\r\n3. SIAP SIAGA', '2018-06-01', 3, 'usericon.png', 3),
(6, 'PT SOBAT AMBYAR', 'Lumajang', '081111111888', 'ambyar@gmail.com', 'www.sobatambyar.com', 'Menjadikan karyawan istimewa', '1. mengabadikan sobat ambyar indonesia\r\n2. menghibur sakit hati', '2011-06-09', 4, 'lampu-vektor-11550712105em7ogcdxcp.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'kiki123', '202cb962ac59075b964b07152d234b70', 2),
(3, 'rizky123', '202cb962ac59075b964b07152d234b70', 3),
(5, 'Ratna', '202cb962ac59075b964b07152d234b70', 2),
(6, 'bos123', '202cb962ac59075b964b07152d234b70', 3),
(7, 'Nina', '202cb962ac59075b964b07152d234b70', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_perusahaan`
--
ALTER TABLE `jenis_perusahaan`
  ADD PRIMARY KEY (`idJenisPerusahaan`);

--
-- Indexes for table `kategori_pekerjaan`
--
ALTER TABLE `kategori_pekerjaan`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`idLowongan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`idPendaftar`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`idPerusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_perusahaan`
--
ALTER TABLE `jenis_perusahaan`
  MODIFY `idJenisPerusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_pekerjaan`
--
ALTER TABLE `kategori_pekerjaan`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `idLowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `idPendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `idPerusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
