-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 10:26 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `dim_bank`
--

CREATE TABLE `dim_bank` (
  `IDbank` varchar(50) NOT NULL,
  `kode_bank` varchar(50) NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_bank`
--

INSERT INTO `dim_bank` (`IDbank`, `kode_bank`, `bank`) VALUES
('10b10', 'b10', 'BANK ARTHA GRAHA'),
('11b11', 'b11', 'BANK DANAMON'),
('12b12', 'b12', 'BANK LIPPO'),
('13b13', 'b13', 'BANK MOL'),
('14b14', 'b14', 'BANK CICIT'),
('15b15', 'b15', 'BANK MIERTA'),
('16b16', 'b16', 'BANK INDONESIA (BANK SENTRAL)'),
('17b17', 'b17', 'BANK TABUNGAN RAKYAT'),
('18b18', 'b18', 'BANK MANDIRI'),
('19b19', 'b19', 'BANK MUTIARA'),
('1b1', 'b1', 'BANK BNI'),
('20b20', 'b20', 'BANK AGRONIAGA'),
('21b21', 'b21', 'BANK ANDA'),
('22b22', 'b22', 'BANK CAPITAL INDONESIA'),
('23b23', 'b23', 'BANK CENTRAL ASIA'),
('24b24', 'b24', 'BANK EKONOMI RAHARJA'),
('25b25', 'b25', 'BANK GANESHA'),
('26b26', 'b26', 'BANK HANA'),
('27b27', 'b27', 'BANK HIMPUNAN SAUDARA 1906'),
('28b28', 'b28', 'BANK ICBC INDONESIA'),
('29b29', 'b29', 'BANK INDEX SELINDO'),
('2b2', 'b2', 'BANK BUKOPIN'),
('30b30', 'b30', 'BANK KESAWAN'),
('31b31', 'b31', 'BANK MASPION'),
('32b32', 'b32', 'BANK MEGA'),
('33b33', 'b33', 'BANK PERMATA SYARIAH'),
('34b34', 'b34', 'BANK BJB SYARIAH'),
('35b35', 'b35', 'BANK BCA SYARIAH'),
('36b36', 'b36', 'BANK DANAMON SYARIAH'),
('37b37', 'b37', 'BANK CIMB NIAGA SYARIAH'),
('38b38', 'b38', 'BANK SYARIAH MANDIRI'),
('39b39', 'b39', 'BANK SYARIAH BUKOPIN'),
('3b3', 'b3', 'BANK BUMI ARTHA'),
('40b40', 'b40', 'BANK MEGA SYARIAH INDONESIA'),
('41b41', 'b41', 'BANK MAYBANK SYARIAH INDONESIA'),
('42b42', 'b42', 'BANK BRI SYARIAH '),
('43b43', 'b43', 'BANK BNI SYARIAH '),
('44b44', 'b44', 'BANK SUMUT '),
('45b45', 'b45', 'BANK BPD BALI'),
('46b46', 'b46', 'BANK SULUT'),
('47b47', 'b47', 'BANK SULTENG'),
('48b48', 'b48', 'BANK NTT'),
('49b49', 'b49', 'BANK NTB'),
('4b4', 'b4', 'BANK BUMIPUTERA INDONESIA'),
('50b50', 'b50', 'BANK JATIM'),
('5b5', 'b5', 'BANK CIMB NIAGA'),
('6b6', 'b6', 'BANK MAYA PADA'),
('7b7', 'b7', 'BANK BRI'),
('8b8', 'b8', 'BANK SULTRA'),
('9b9', 'b9', 'BANK BCA');

-- --------------------------------------------------------

--
-- Table structure for table `dim_cabang`
--

CREATE TABLE `dim_cabang` (
  `IDcabang` varchar(50) NOT NULL,
  `kode_cabang` varchar(100) NOT NULL,
  `cabang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_cabang`
--

INSERT INTO `dim_cabang` (`IDcabang`, `kode_cabang`, `cabang`) VALUES
('10c10', 'c10', 'ASERA'),
('11c11', 'c11', 'KOLTIM'),
('12c12', 'c12', 'RAHA'),
('13c13', 'c13', 'BAU-BAU'),
('14c14', 'c14', 'BUNGKUTOKO'),
('15c15', 'c15', 'PARE-PARE'),
('16c16', 'c16', 'BANDUNG'),
('17c17', 'c17', 'SURABAYA'),
('18c18', 'c18', 'JAKARTA'),
('19c19', 'c19', 'SEMARANG'),
('1c1', 'c1', 'BATU RAJA'),
('20c20', 'c20', 'BALI'),
('21c21', 'c21', 'JAMBI'),
('22c22', 'c22', 'BANJARMASIN'),
('23c23', 'c23', 'SAMARINDA'),
('24c24', 'c24', 'KENDARI'),
('25c25', 'c25', 'YOGYAKARTA'),
('26c26', 'c26', 'PADANG'),
('27c27', 'c27', 'PALANGKA RAYA'),
('28c28', 'c28', 'BANDA ACEH'),
('29c29', 'c29', 'PONTIANAK'),
('2c2', 'c2', 'BENGKULU'),
('30c30', 'c30', 'PALU'),
('31c31', 'c31', 'AMBON'),
('32c32', 'c32', 'MATARAM'),
('33c33', 'c33', 'KUPANG'),
('34c34', 'c34', 'MANADO'),
('35c35', 'c35', 'DENPASAR'),
('36c36', 'c36', 'JAYAPURA'),
('37c37', 'c37', 'PEKANBARU'),
('38c38', 'c38', 'PALEMBANG'),
('39c39', 'c39', 'TEGAL'),
('3c3', 'c3', 'CURUP'),
('40c40', 'c40', 'MEDAN'),
('41c41', 'c41', 'GORONTALO'),
('42c42', 'c42', 'TANGERANG'),
('43c43', 'c43', 'SERANG'),
('44c44', 'c44', 'DEPOK'),
('45c45', 'c45', 'BOGOR'),
('46c46', 'c46', 'SUKABUMI'),
('47c47', 'c47', 'TASIKMALAYA'),
('48c48', 'c48', 'BANJAR'),
('49c49', 'c49', 'MAGELANG'),
('4c4', 'c4', 'LAMPUNG'),
('50c50', 'c50', 'PEKALONGAN'),
('5c5', 'c5', 'LUBUK LINGGAU'),
('6c6', 'c6', 'MAKASSAR'),
('7c7', 'c7', 'GOWA'),
('8c8', 'c8', 'TALLO'),
('9c9', 'c9', 'UNAAHA');

-- --------------------------------------------------------

--
-- Table structure for table `dim_cmo`
--

CREATE TABLE `dim_cmo` (
  `ID_CMO` varchar(50) NOT NULL,
  `kode_CMO` varchar(100) NOT NULL,
  `nama_CMO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_cmo`
--

INSERT INTO `dim_cmo` (`ID_CMO`, `kode_CMO`, `nama_CMO`) VALUES
('10cm10', 'cm10', 'Umar'),
('11cm11', 'cm11', 'Ali'),
('12cm12', 'cm12', 'Fatimah'),
('13cm13', 'cm13', 'Hasan'),
('14cm14', 'cm14', 'Aiman'),
('15cm15', 'cm15', 'Fudhail'),
('16cm16', 'cm16', 'Jaya'),
('17cm17', 'cm17', 'Ricky'),
('18cm18', 'cm18', 'Pini'),
('19cm19', 'cm19', 'Tina'),
('1cm1', 'cm1', 'Usman'),
('20cm20', 'cm20', 'Agus'),
('21cm21', 'cm21', 'Ical'),
('22cm22', 'cm22', 'Alpa'),
('23cm23', 'cm23', 'Anip'),
('24cm24', 'cm24', 'Rama'),
('25cm25', 'cm25', 'Isma'),
('26cm26', 'cm26', 'Mail'),
('27cm27', 'cm27', 'Ismail'),
('28cm28', 'cm28', 'Juki'),
('29cm29', 'cm29', 'Andy'),
('2cm2', 'cm2', 'Ruqayyah'),
('30cm30', 'cm30', 'John'),
('31cm31', 'cm31', 'Mario'),
('32cm32', 'cm32', 'Kriss'),
('33cm33', 'cm33', 'Hatta'),
('34cm34', 'cm34', 'Zull'),
('35cm35', 'cm35', 'Rena'),
('36cm36', 'cm36', 'Dessi'),
('37cm37', 'cm37', 'Kirito'),
('38cm38', 'cm38', 'Kaneki'),
('39cm39', 'cm39', 'Irfan'),
('3cm3', 'cm3', 'Lukman'),
('40cm40', 'cm40', 'Ramzi'),
('41cm41', 'cm41', 'Gilang'),
('42cm42', 'cm42', 'Alif'),
('43cm43', 'cm43', 'David'),
('44cm44', 'cm44', 'Alfin'),
('45cm45', 'cm45', 'Hafizh'),
('46cm46', 'cm46', 'Hafid'),
('47cm47', 'cm47', 'Mona'),
('48cm48', 'cm48', 'Citra'),
('49cm49', 'cm49', 'Nicky'),
('4cm4', 'cm4', 'Agustina'),
('50cm50', 'cm50', 'Mr.Khan'),
('5cm5', 'cm5', 'Kiki'),
('6cm6', 'cm6', 'Jay'),
('7cm7', 'cm7', 'Jidih'),
('8cm8', 'cm8', 'Azahra'),
('9cm9', 'cm9', 'Kirei');

-- --------------------------------------------------------

--
-- Table structure for table `dim_mobil`
--

CREATE TABLE `dim_mobil` (
  `IDmobil` varchar(50) NOT NULL,
  `kode_mobil` varchar(100) NOT NULL,
  `merk_mobil` varchar(50) NOT NULL,
  `tahun_kendaraan` int(5) NOT NULL,
  `produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_mobil`
--

INSERT INTO `dim_mobil` (`IDmobil`, `kode_mobil`, `merk_mobil`, `tahun_kendaraan`, `produk`) VALUES
('m1', '1m1', 'chevrolet', 2012, 'pt chevrolet'),
('m10', '10m10', 'samsungg', 2015, '2014'),
('m11', '11m11', 'qwerty', 2013, 'pt key'),
('m12', '12m12', 'kia', 2014, 'pt kia motor'),
('m13', '13m13', 'mobilone', 2013, 'pt mobil'),
('m14', '14m14', 'daihatsu 2', 2016, 'pt daihatsu'),
('m15', '15m15', 'alphard 2', 2015, 'pt alphard'),
('m16', '16m16', 'kijang 2', 2014, 'pt kijang'),
('m17', '17m17', 'jazz', 2015, 'pt honda'),
('m18', '18m18', 'mkios', 2017, 'pt telkim'),
('m19', '19m19', 'jazz 2', 2017, 'pt honda'),
('m2', '2m2', 'daihatsu', 2011, 'pt daihatsu'),
('m20', '20m20', 'go car', 2016, 'pt mobil go'),
('m21', '21m21', 'go car 2', 2015, 'pt mobil go'),
('m22', '22m22', 'inova 2', 2014, 'pt inova'),
('m23', '23m23', 'ayla 2', 2013, 'pt honda'),
('m24', '24m24', 'xenia 2', 2015, 'pt xenia'),
('m25', '25m25', 'lamborgini', 2016, 'pt kia'),
('m3', '3m3', 'honda', 2013, 'pt honda'),
('m4', '4m4', 'Alphard', 2013, 'pt alphard'),
('m5', '5m5', 'xenia', 2012, '2011'),
('m6', '6m6', 'ayla', 2010, '2009'),
('m7', '7m7', 'kijang', 2015, '2012'),
('m8', '8m8', 'inova', 2014, '2012'),
('m9', '9m9', 'oppo', 2016, '2015');

-- --------------------------------------------------------

--
-- Table structure for table `dim_nasabah`
--

CREATE TABLE `dim_nasabah` (
  `IDnasabah` varchar(50) NOT NULL,
  `no_kontrak` int(100) NOT NULL,
  `nama_nasabah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_nasabah`
--

INSERT INTO `dim_nasabah` (`IDnasabah`, `no_kontrak`, `nama_nasabah`) VALUES
('n1', 1, 'refli'),
('n10', 10, 'Syifa'),
('n11', 11, 'randy'),
('n12', 12, 'anwar'),
('n13', 13, 'rara'),
('n14', 14, 'ratu'),
('n15', 15, 'elsa'),
('n16', 16, 'aan'),
('n17', 17, 'ani'),
('n18', 18, 'astri'),
('n19', 19, 'ika'),
('n2', 2, 'reo'),
('n20', 20, 'werdana'),
('n21', 21, 'astati'),
('n22', 22, 'komang'),
('n23', 23, 'made'),
('n24', 24, 'ketut'),
('n25', 25, 'yusuf'),
('n26', 26, 'putri'),
('n27', 27, 'apin'),
('n28', 28, 'epos'),
('n29', 29, 'akbar'),
('n3', 3, 'rifki'),
('n30', 30, 'habiranto'),
('n31', 31, 'nanda'),
('n32', 32, 'wiranto'),
('n33', 33, 'ilham'),
('n34', 34, 'undo'),
('n35', 35, 'haris'),
('n36', 36, 'sumayah'),
('n37', 37, 'bilal'),
('n38', 38, 'muadz'),
('n39', 39, 'mona'),
('n4', 4, 'rio'),
('n40', 40, 'jack'),
('n41', 41, 'bunga'),
('n42', 42, 'paul'),
('n43', 43, 'gitasav'),
('n44', 44, 'rosa'),
('n45', 45, 'anggun'),
('n46', 46, 'agung'),
('n47', 47, 'dewi'),
('n48', 48, 'mega'),
('n49', 49, 'rani'),
('n5', 5, 'sanusi'),
('n50', 50, 'joshua'),
('n6', 6, 'shireen'),
('n7', 7, 'wisnu'),
('n8', 8, 'adam'),
('n9', 9, 'hawa');

-- --------------------------------------------------------

--
-- Table structure for table `dim_vendor`
--

CREATE TABLE `dim_vendor` (
  `IDvendor` varchar(50) NOT NULL,
  `kode_vendor` varchar(50) NOT NULL,
  `nama_vendor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_vendor`
--

INSERT INTO `dim_vendor` (`IDvendor`, `kode_vendor`, `nama_vendor`) VALUES
('v1', '1v1', 'mentari motor'),
('v10', '10v10', 'Besthit motor'),
('v11', '11v11', 'Mesran jaya'),
('v12', '12v12', 'Lukas abadi'),
('v13', '13v13', 'Agung Putra Motor'),
('v14', '14v14', 'Kencana jaya'),
('v15', '15v15', 'putra putri motor'),
('v16', '16v16', 'cahaya motor'),
('v17', '17v17', 'ilham motor'),
('v18', '18v18', 'surya mobilindo'),
('v19', '19v19', 'mekanik go'),
('v2', '2v2', 'mj mobil'),
('v20', '20v20', 'distrik 363'),
('v21', '21v21', 'astatiku motor'),
('v22', '22v22', 'mega jaya abadi motorindo'),
('v23', '23v23', 'motorku mobilindo'),
('v24', '24v24', 'sineas jaya motor'),
('v25', '25v25', 'akustik motor'),
('v26', '26v26', 'oyasumi mobil indonesia'),
('v27', '27v27', 'indo jaya motor'),
('v28', '28v28', 'sam group '),
('v29', '29v29', 'hadji menang group'),
('v3', '3v3', 'mura mobilindo'),
('v30', '30v30', 'mega jaya teknik'),
('v31', '31v31', 'indo motor group'),
('v32', '32v32', 'indo mobilindo'),
('v33', '33v33', 'indonesian cars'),
('v34', '34v34', 'ayam raya motor'),
('v35', '35v35', 'indoraya mobil'),
('v36', '36v36', 'teknik mobilindo'),
('v37', '37v37', 'indo group jaya motor'),
('v38', '38v38', 'princess mobilku'),
('v39', '39v39', 'abadi teknik'),
('v4', '4v4', 'nauval auto mobil'),
('v40', '40v40', 'milenial group indo'),
('v41', '41v41', 'flash group mobil'),
('v42', '42v42', 'disk teknik group'),
('v43', '43v43', 'cahaya group abadi'),
('v44', '44v44', 'kilatan mobilindo'),
('v45', '45v45', 'astra motor'),
('v46', '46v46', 'H grup motor'),
('v47', '47v47', 'Daily motorindo'),
('v48', '48v48', 'kia motor'),
('v49', '49v49', 'gaul motorindo'),
('v5', '5v5', 'nata jaya mobilindo'),
('v50', '50v50', 'comp grup motor'),
('v6', '6v6', 'wirabuana motor'),
('v7', '7v7', 'takashi murah jaya'),
('v8', '8v8', 'Futura Mobil'),
('v9', '9v9', 'Milenial abadi');

-- --------------------------------------------------------

--
-- Table structure for table `fakta_penjualan`
--

CREATE TABLE `fakta_penjualan` (
  `IDnasabah` varchar(50) NOT NULL,
  `IDmobil` varchar(50) NOT NULL,
  `IDbank` varchar(50) NOT NULL,
  `ID_CMO` varchar(50) NOT NULL,
  `IDvendor` varchar(50) NOT NULL,
  `IDcabang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `tahun` int(11) NOT NULL,
  `tahun_pelunasan` int(11) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `angsuran_bulan` int(255) NOT NULL,
  `total_angsuran` int(255) NOT NULL,
  `biaya_administrasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakta_penjualan`
--

INSERT INTO `fakta_penjualan` (`IDnasabah`, `IDmobil`, `IDbank`, `ID_CMO`, `IDvendor`, `IDcabang`, `tanggal`, `tahun`, `tahun_pelunasan`, `jumlah`, `angsuran_bulan`, `total_angsuran`, `biaya_administrasi`) VALUES
('n1', 'm1', '1b1', '1cm1', 'v1', '1c1', '2017-01-01', 2017, 1, 100, 1500000, 10000000, 1000000),
('n2', 'm2', '2b2', '2cm2', 'v2', '2c2', '2017-03-22', 2017, 3, 150, 2000000, 15000000, 1000000),
('n3', 'm3', '3b3', '3cm3', 'v3', '3c3', '2017-05-31', 2017, 5, 300, 1200000, 12000000, 1500000),
('n4', 'm4', '4b4', '4cm4', 'v4', '4c4', '2017-07-26', 2017, 7, 200, 1250000, 10000000, 1500000),
('n5', 'm5', '5b5', '5cm5', 'v5', '5c5', '2016-10-19', 2016, 10, 250, 1600000, 20000000, 1250000),
('n6', 'm6', '6b6', '6cm6', 'v6', '6c6', '2016-09-20', 2016, 9, 210, 1250000, 12000000, 1000000),
('n7', 'm7', '7b7', '7cm7', 'v7', '7c7', '2016-04-27', 2016, 4, 50, 1350000, 12500000, 1200000),
('n8', 'm8', '8b8', '8cm8', 'v8', '8c8', '2016-01-31', 2016, 1, 500, 1600000, 15000000, 1000000),
('n9', 'm9', '9b9', '9cm9', 'v9', '9c9', '2016-11-30', 2016, 11, 500, 2000000, 20000000, 1250000),
('n10', 'm10', '10b10', '10cm10', 'v10', '10c10', '2015-07-08', 2015, 7, 250, 1600000, 15000000, 1500000),
('n1', 'm1', '1b1', '1cm1', 'v1', '1c1', '2015-10-28', 2015, 10, 2, 1000000, 390000000, 1230000),
('n1', 'm1', '1b1', '1cm1', 'v7', '9c9', '2017-12-12', 2017, 12, 10, 1000000, 69000000, 8000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dim_bank`
--
ALTER TABLE `dim_bank`
  ADD PRIMARY KEY (`IDbank`),
  ADD KEY `IDbank` (`IDbank`);

--
-- Indexes for table `dim_cabang`
--
ALTER TABLE `dim_cabang`
  ADD PRIMARY KEY (`IDcabang`),
  ADD KEY `IDcabang` (`IDcabang`);

--
-- Indexes for table `dim_cmo`
--
ALTER TABLE `dim_cmo`
  ADD PRIMARY KEY (`ID_CMO`),
  ADD KEY `ID_CMO` (`ID_CMO`);

--
-- Indexes for table `dim_mobil`
--
ALTER TABLE `dim_mobil`
  ADD PRIMARY KEY (`IDmobil`),
  ADD KEY `IDmobil` (`IDmobil`);

--
-- Indexes for table `dim_nasabah`
--
ALTER TABLE `dim_nasabah`
  ADD PRIMARY KEY (`IDnasabah`),
  ADD KEY `IDnasabah` (`IDnasabah`),
  ADD KEY `IDnasabah_2` (`IDnasabah`);

--
-- Indexes for table `dim_vendor`
--
ALTER TABLE `dim_vendor`
  ADD PRIMARY KEY (`IDvendor`),
  ADD KEY `IDvendor` (`IDvendor`);

--
-- Indexes for table `fakta_penjualan`
--
ALTER TABLE `fakta_penjualan`
  ADD KEY `IDnasabah` (`IDnasabah`),
  ADD KEY `IDmobil` (`IDmobil`),
  ADD KEY `IDbank` (`IDbank`),
  ADD KEY `ID_CMO` (`ID_CMO`),
  ADD KEY `IDvendor` (`IDvendor`),
  ADD KEY `IDcabang` (`IDcabang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fakta_penjualan`
--
ALTER TABLE `fakta_penjualan`
  ADD CONSTRAINT `fakta_penjualan_ibfk_1` FOREIGN KEY (`IDnasabah`) REFERENCES `dim_nasabah` (`IDnasabah`),
  ADD CONSTRAINT `fakta_penjualan_ibfk_2` FOREIGN KEY (`IDcabang`) REFERENCES `dim_cabang` (`IDcabang`),
  ADD CONSTRAINT `fakta_penjualan_ibfk_3` FOREIGN KEY (`IDmobil`) REFERENCES `dim_mobil` (`IDmobil`),
  ADD CONSTRAINT `fakta_penjualan_ibfk_4` FOREIGN KEY (`ID_CMO`) REFERENCES `dim_cmo` (`ID_CMO`),
  ADD CONSTRAINT `fakta_penjualan_ibfk_5` FOREIGN KEY (`IDvendor`) REFERENCES `dim_vendor` (`IDvendor`),
  ADD CONSTRAINT `fakta_penjualan_ibfk_6` FOREIGN KEY (`IDbank`) REFERENCES `dim_bank` (`IDbank`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
