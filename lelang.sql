-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Agu 2019 pada 04.11
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bid`
--

CREATE TABLE `bid` (
  `idbid` int(11) NOT NULL,
  `idlelang` int(11) NOT NULL,
  `idbidder` int(11) NOT NULL,
  `tawaran` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi_barang`
--

CREATE TABLE `diskusi_barang` (
  `iddiskusi` int(11) NOT NULL,
  `idlelang` int(11) NOT NULL,
  `idpenjual` int(11) NOT NULL,
  `idbidder` int(11) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif`
--

CREATE TABLE `notif` (
  `idnotif` int(11) NOT NULL,
  `idlelang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `idreview` int(11) NOT NULL,
  `idpenjual` int(11) NOT NULL,
  `idbidder` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tadmin`
--

CREATE TABLE `tadmin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pw` varchar(128) CHARACTER SET utf8 NOT NULL,
  `namaadmin` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tadmin`
--

INSERT INTO `tadmin` (`idadmin`, `username`, `pw`, `namaadmin`, `alamat`, `email`) VALUES
(4, 'admin1', '$2y$10$SBZGMd1WxsJJufoLDdITYujYKL1zCXkX1IOASsOeS0U.AcbCeum5W', 'Muhammad Saleh', 'Jalan.Citraland Perumnas Cirebon Ciremai Raya', 'salehmhmd@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbidder`
--

CREATE TABLE `tbidder` (
  `idbidder` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `namabidder` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `fotoprofil` varchar(255) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbidder`
--

INSERT INTO `tbidder` (`idbidder`, `username`, `pw`, `namabidder`, `alamat`, `email`, `telp`, `status`, `fotoprofil`, `saldo`) VALUES
(3, 'aldi1234', '$2y$10$xlb/zkHJj3f1zsOMw0', 'Aldi Ridiawan', 'jln.gn kelud 11 no.18', 'evanydiah60738@unpak.ac.id', '085864558002', 1, '', 200),
(7, 'istianah', '$2y$10$n3APjxLLRiqstRpSrpnr6u3Zn6fgYCuT.jHFOVxuOPG0Dsg0JIxZG', 'Istianah', 'Jalan Pinus 2 No.31 Cirebon', 'iiseus@gmail.com', '087850032365', 1, '', 0),
(8, 'aunurrofiq', '$2y$10$5.PIjMAWsQ9buy4F.gbYTu.YEGefgsmtjzpad1yJvzwYiwOtUsCv2', 'Aunur Rofiq', 'Jalan Ampera IV No. 2 Kelurahan Pekiringan Kecamatan Kesambi Kota Cirebon', 'inurrofiq63@gmail.com', '081330010166', 1, 'download1.jpg', 0),
(9, 'ika suher', '$2y$10$yE5aX4K8U49NVS7u0YBGzeltFMY4qKLzN7ztE4si7Tpn1LExCvEbK', 'Ika Suhermiati', 'Perumahan Griya Intan no 19A Cirebon', 'ikasuhermiati783@gmail.com', '089772799204', 1, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkategori`
--

CREATE TABLE `tkategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tkategori`
--

INSERT INTO `tkategori` (`idkategori`, `kategori`) VALUES
(1, 'lukisan'),
(2, 'kriya'),
(3, 'grafis'),
(4, 'ukiran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tlelang`
--

CREATE TABLE `tlelang` (
  `idlelang` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idpenjual` int(11) NOT NULL,
  `namabrg` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ob` int(11) NOT NULL,
  `inc` int(11) NOT NULL,
  `current` int(11) NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pemenang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tlelang`
--

INSERT INTO `tlelang` (`idlelang`, `idkategori`, `idpenjual`, `namabrg`, `deskripsi`, `ob`, `inc`, `current`, `waktu_awal`, `waktu_akhir`, `foto1`, `foto2`, `foto3`, `status`, `pemenang`) VALUES
(1, 1, 1, 'Lukisan abstract', 'terbuat dari vinil dan cat lukis', 50000, 4000, 0, '2019-08-21 09:14:13', '2019-08-07 05:11:11', '', '', '', '', ''),
(2, 1, 28, 'Lukisan Penari Bali', 'Lukisan dengan cat acrylic ukuran canvas 230x120', 45000, 10000, 0, '2019-08-19 04:15:15', '0000-00-00 00:00:00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpenjual`
--

CREATE TABLE `tpenjual` (
  `idpenjual` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pw` varchar(255) CHARACTER SET utf8 NOT NULL,
  `namapenjual` varchar(128) CHARACTER SET utf8 NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `fotoprofil` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpenjual`
--

INSERT INTO `tpenjual` (`idpenjual`, `username`, `pw`, `namapenjual`, `alamat`, `email`, `telp`, `fotoprofil`, `status`) VALUES
(28, 'penjual1', '$2y$10$eDSgC25eqa20N1XACZtY9OZrTJuxpscFsK.rxzBVCaXw8Ol1WJZjK', 'Rizal Akbar', 'jln.gn kelud 11 no.18', 'emailalternatif6@gmail.com', '085864558002', 'default.jpg', 0),
(29, 'fahmifan', '$2y$10$DDjPKn38.mm/j8JFHY8G7OmSJJEkswNVV27jYX9oVf7PEEZ4Q5uIC', 'Fahmi Fahrezi', 'Villa Intan 1, Blok F4, No 09, Jadimulya Gunungjati, Cirebon, Jawa Barat 45151', 'fahmicityzen@gmail.com', '087851423695', 'IMG00263-20110607-1343.jpg', 0),
(30, 'aditya54', '$2y$10$oeTVOZzrYH5l0WW2irOD4.cvRart9VIFDxUsod0I2/sny8KglXRqe', 'Aditya Lukmana', 'JL. Tuparev, No. 83, Cirebon, Sutawinangun, Kedawung, Cirebon,', 'Adit5421@gmail.com', '082833904133', 'default.jpg', 0),
(31, 'salman97', '$2y$10$U/OS9m4/ulk.E/ngneBWcOP2I1IYeIRCDqb2Vg8wJmVJwVpHBMkLO', 'Fahrizal Salman', 'Perum Banjarwangunan Blok C7 No 11, Mundu,Cirebon,Jawa Barat', 'Salmankhan97@gmail.com', '085231770004', 'default.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsaldo`
--

CREATE TABLE `tsaldo` (
  `idsaldo` int(11) NOT NULL,
  `idbidder` int(11) NOT NULL,
  `beli` int(11) NOT NULL,
  `fototransfer` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tsaldo`
--

INSERT INTO `tsaldo` (`idsaldo`, `idbidder`, `beli`, `fototransfer`, `status`) VALUES
(13, 6, 30, 'About1.jpg', 'Terkonfirmasi'),
(14, 7, 30, 'images.png', 'Belum Terkonfirmasi'),
(15, 6, 17, 'rtaImage.jpg', 'Belum Terkonfirmasi'),
(16, 9, 100, 'Transfer-ke-go-pay-berhasil.png', 'Belum Terkonfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`idbid`);

--
-- Indexes for table `diskusi_barang`
--
ALTER TABLE `diskusi_barang`
  ADD PRIMARY KEY (`iddiskusi`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`idnotif`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`idreview`);

--
-- Indexes for table `tadmin`
--
ALTER TABLE `tadmin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tbidder`
--
ALTER TABLE `tbidder`
  ADD PRIMARY KEY (`idbidder`);

--
-- Indexes for table `tkategori`
--
ALTER TABLE `tkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tlelang`
--
ALTER TABLE `tlelang`
  ADD PRIMARY KEY (`idlelang`);

--
-- Indexes for table `tpenjual`
--
ALTER TABLE `tpenjual`
  ADD PRIMARY KEY (`idpenjual`);

--
-- Indexes for table `tsaldo`
--
ALTER TABLE `tsaldo`
  ADD PRIMARY KEY (`idsaldo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `idbid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diskusi_barang`
--
ALTER TABLE `diskusi_barang`
  MODIFY `iddiskusi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `idnotif` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `idreview` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tadmin`
--
ALTER TABLE `tadmin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbidder`
--
ALTER TABLE `tbidder`
  MODIFY `idbidder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tkategori`
--
ALTER TABLE `tkategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tlelang`
--
ALTER TABLE `tlelang`
  MODIFY `idlelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tpenjual`
--
ALTER TABLE `tpenjual`
  MODIFY `idpenjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tsaldo`
--
ALTER TABLE `tsaldo`
  MODIFY `idsaldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
