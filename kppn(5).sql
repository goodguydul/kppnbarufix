-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2017 at 02:29 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kppn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `checklist1` text NOT NULL,
  `checklist2` text NOT NULL,
  `checklist3` text NOT NULL,
  `checklist4` text NOT NULL,
  `checklist5` text NOT NULL,
  `checklist6` text NOT NULL,
  `judulform1` text NOT NULL,
  `judulform2` text NOT NULL,
  `judulform3` text NOT NULL,
  `namakepalakantor` varchar(50) NOT NULL,
  `nipkepalakantor` varchar(50) NOT NULL,
  `nama_kanwil` varchar(100) DEFAULT NULL,
  `nama_kantor` varchar(100) DEFAULT NULL,
  `alamat_kantor` varchar(100) DEFAULT NULL,
  `telepon_fax` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `situs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `checklist1`, `checklist2`, `checklist3`, `checklist4`, `checklist5`, `checklist6`, `judulform1`, `judulform2`, `judulform3`, `namakepalakantor`, `nipkepalakantor`, `nama_kanwil`, `nama_kantor`, `alamat_kantor`, `telepon_fax`, `email`, `situs`) VALUES
(1, 'Surat Perjanjian Pembayaran antara PPK dan Pihak 3(Rekanan)', 'Asli Jaminan/garansi Bank yang diterbitkan Bank Umum\r\n-Berlokasi diwilayah kerja KPPN Palembang dan bersifat transferable\r\n-Masa berlaku sampai dengan berakhirnya masa kontrak\r\n-Nilai Jaminan sekurang-kurangnya sebesar nilai pekerjaan yang belum diselesaikan\r\n-Masa pengajuan klaim selama 30 hari kalender sejak berakhirnya\r\njaminan/garansi bank', 'Surat Pernyataaan Keabsahan Jaminan/Garansi Bank dari PPK', 'Asli Surat Kuasa (Bermaterai) dari PPK kepada Kepala KPPN untuk mencairkan jaminan/garansi bank', 'Surat pernyataan kesanggupan untuk menyelesaikan pekerjaan 100%  s.d. berakhirnya masa kontrak dari pihak ketiga/rekanan', '', 'TANDA TERIMA', 'PENYERAHAN DOKUMEN PERSYARATAN', 'JAMINAN PELAKSANAAN/BANK GARANSI', 'Siti Rosidah Sundari', '196709211993032001', 'KANWIL DITJEN PERBENDAHARAAN PROVINSI DKI JAKARTA', 'KANTOR PELAYANAN PERBENDAHARAAN NEGARA BEKASI', 'Gedung Keuangan Negara Palembang Jl. Kapten A. Rivai No.4 Palembang 30139', 'Telepon 0711-352357, 357706, 372894 Fax 0711-312755', 'kppn014@perbendaharaan.go.id', 'www.kppnpalembang.net');

-- --------------------------------------------------------

--
-- Table structure for table `datasatker`
--

CREATE TABLE `datasatker` (
  `no` int(11) NOT NULL,
  `kode_satker` varchar(6) NOT NULL,
  `kemen` varchar(4) NOT NULL,
  `BA` varchar(3) NOT NULL,
  `kew` varchar(10) NOT NULL,
  `nama_satker` varchar(100) NOT NULL,
  `no_DIPA` varchar(30) NOT NULL,
  `tgl_DIPA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasatker`
--

INSERT INTO `datasatker` (`no`, `kode_satker`, `kemen`, `BA`, `kew`, `nama_satker`, `no_DIPA`, `tgl_DIPA`) VALUES
(1, '007102', '006', '01', 'KD', 'Kejaksaan Tinggi Sumatera Selatan', 'DIPA-006.01.2.007102/2015', '2014-11-14'),
(2, '007119', '006', '01', 'KD', 'Kejaksaan Negeri Palembang', 'DIPA-006.01.2.007119/2015', '2014-11-14'),
(3, '007123', '006', '01', 'KD', 'Kejaksaan Negeri Kayuagung', 'DIPA-006.01.2.007123/2016', '2014-11-14'),
(4, '007186', '006', '01', 'KD', 'Kejaksaan Negeri Prabumulih', 'DIPA-006.01.2.007186/2016', '2014-11-14'),
(5, '018403', '068', '01', 'KD', 'Perwakilan Badan Kependudukan Dan Keluarga Berencana Nasional Provinsi Sumatera Selatan', 'DIPA-068.01.2.018403/2015', '2014-11-14'),
(6, '098938', '005', '01', 'KD', 'Pengadilan Tinggi Palembang', 'DIPA-005.01.2.098938/2015', '2014-11-14'),
(7, '098942', '005', '01', 'KD', 'Pengadilan Negeri Palembang', 'DIPA-005.01.2.098942/2015', '2014-11-14'),
(8, '098959', '005', '01', 'KD', 'Pengadilan Negeri Kayuagung', 'DIPA-005.01.2.098959/2015', '2014-11-14'),
(9, '099225', '005', '03', 'KD', 'Pengadilan Tinggi Palembang', 'DIPA-005.03.2.099225/2015', '2014-11-14'),
(10, '099226', '005', '03', 'KD', 'Pengadilan Negeri Palembang', 'DIPA-005.03.2.099226/2015', '2014-11-14'),
(11, '099227', '005', '03', 'KD', 'Pengadilan Negeri Kayuagung', 'DIPA-005.03.2.099227/2015', '2014-11-14'),
(12, '109118', '013', '05', 'KD', 'Rumah Tahanan Negara Palembang', 'DIPA-013.05.2.109118/2015', '2014-11-14'),
(13, '110008', '027', '01', 'DK', 'Dinas Sosial Provinsi Sumatera Selatan', 'DIPA-027.01.3.110008/2015', '2014-11-14'),
(14, '110009', '024', '01', 'DK', 'Dinas Kesehatan Provinsi Sumatera Selatan', 'DIPA-024.01.3.110009/2016', '2014-11-14'),
(15, '110012', '020', '01', 'DK', 'Dinas Pertambangan Dan Energi Provinsi Sumatera Selatan', 'DIPA-020.01.3.110012/2015', '2014-11-14'),
(16, '110018', '010', '04', 'DK', 'Badan Penanggulangan Bencana Daerah Provinsi Sumatera Selatan', 'DIPA-010.04.3.110018/2015', '2014-11-14'),
(17, '110028', '040', '12', 'DK', 'Dinas Kebudayaan Dan Pariwisata Daerah Provinsi Sumatera Selatan', 'DIPA-040.12.3.110028/2015', '2014-11-14'),
(18, '110030', '087', '01', 'DK', 'Kantor Arsip Daerah Provinsi Sumatera Selatan', 'DIPA-087.01.3.110030/2015', '2014-11-14'),
(19, '110031', '092', '01', 'DK', 'Dinas Pemuda Dan Olah Raga Provinsi Sumatera Selatan', 'DIPA-092.01.3.110031/2015', '2014-11-14'),
(21, '110055', '029', '01', 'DK', 'Dinas Kehutanan Propinsi Sumatera Selatan', 'DIPA-029.01.3.110055/2015', '2014-11-14'),
(22, '110060', '055', '01', 'DK', 'Bappeda Provinsi Sumatera Selatan', 'DIPA-055.01.3.110060/2015', '2014-11-14'),
(23, '110068', '044', '01', 'DK', 'Dinas Koperasi, Usaha Kecil Dan Menengah Provinsi Sumatera Selatan', 'DIPA-044.01.3.110068/2015', '2014-11-14'),
(24, '110090', '010', '01', 'DK', 'Bappeda Provinsi Sumatera Selatan (10.01.1)', 'DIPA-010.01.3.110090/2015', '2014-11-14'),
(25, '110098', '032', '01', 'DK', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.01.3.110098/2016', '2014-11-14'),
(26, '110100', '033', '06', 'KP', 'Operasi Dan Pemeliharaan Sumber Daya Air Sumatera Viii', 'DIPA-033.06.1.110100/2016', '2014-11-14'),
(27, '110101', '047', '01', 'DK', 'Badan Pemberdayaan Perempuan Dan Perlindungan Anak Provinsi Sumatera Selatan', 'DIPA-047.01.3.110101/2015', '2014-11-14'),
(28, '110102', '040', '05', 'DK', 'Dinas Kebudayaan Dan Pariwisata Provinsi Sumatera Selatan', 'DIPA-040.05.3.110102/2015', '2014-11-14'),
(29, '110104', '029', '01', 'DK', 'Badan Koordinasi Penyuluhan Pertanian, Perikanan Dan Kehutanan Provinsi Sumatera Selatan', 'DIPA-029.01.3.110104/2015', '2014-11-14'),
(30, '110105', '040', '01', 'DK', 'Dinas Kebudayaan Dan Pariwisata Provinsi Sumatera Selatan', 'DIPA-040,01,3,110105/2015', '2015-04-08'),
(31, '110827', '018', '06', 'TP', 'Dinas Peternakan Kabupaten Ogan Komering Ilir', 'DIPA-018.06.4.110827/2015', '2014-11-14'),
(32, '110841', '025', '08', 'KD', 'Kantor Kementerian Agama Kab.Ogan Komering Ilir', 'DIPA-025.08.2.110841/2015', '2014-11-14'),
(33, '110843', '032', '04', 'TP', 'Dinas Kelautan Dan Perikanan Kab. Ogan Komering Ilir', 'DIPA-032.04.4.110843/2015', '2014-11-14'),
(34, '110844', '032', '04', 'TP', 'Dinas Perikanan Dan Peternakan Kab. Ogan Ilir', 'DIPA-032.04.4.110844/2015', '2014-11-14'),
(35, '110845', '018', '04', 'TP', 'Dinas Pertanian Kab. Ogan Komering Ilir', 'DIPA-018.04.4.110845/2015', '2014-11-14'),
(36, '111231', '032', '04', 'TP', 'Dinas Pertanian, Perikanan, Dan Kelautan Kota Palembang', 'DIPA-032.04.4.111231/2015', '2014-11-14'),
(37, '115159', '026', '04', 'TP', 'Dinas Tenaga Kerja Kota Palembang', 'DIPA-026.04.4.115159/2015', '2014-11-14'),
(38, '115160', '040', '05', 'TP', 'Dinas Kebudayaan Dan Pariwisata Kota Palembang', 'DIPA-040.05.4.115160/2015', '2014-11-14'),
(39, '115168', '040', '01', 'TP', 'Dinas Kebudayaan Dan Pariwisata Kota Palembang', 'DIPA-040,01,4,115168/2015', '2015-04-08'),
(40, '117134', '015', '01', 'KD', 'Gedung Keuangan Negara Palembang', 'DIPA-015.01.2.117134/2015', '2014-11-14'),
(41, '119000', '018', '04', 'DK', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.04.3.119000/2015', '2014-11-14'),
(42, '119002', '065', '01', 'DK', 'Badan Promosi Dan Perizinan Penanaman Modal Daerah Provinsi Sumatera Selatan', 'DIPA-065.01.3.119002/2015', '2014-11-14'),
(43, '119003', '018', '07', 'DK', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.07.3.119003/2015', '2014-11-14'),
(44, '119004', '018', '08', 'DK', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.08.3.119004/2015', '2014-11-14'),
(45, '119005', '018', '10', 'DK', 'Badan Koordinasi Penyuluhan Pertanian, Perikanan, Dan Kehutanan Propinsi Sumatera Selatan', 'DIPA-018.10.3.119005/2016', '2014-11-14'),
(46, '119006', '026', '05', 'DK', 'Dinas Tenaga Kerja Dan Transmigrasi Provinsi Sumatera Selatan', 'DIPA-026.05.3.119006/2015', '2014-11-14'),
(47, '119007', '026', '06', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Provinsi Sumatera Selatan', 'DIPA-026.06.4.119007/2015', '2014-11-14'),
(48, '119008', '026', '08', 'DK', 'Dinas Tenaga Kerja Dan Transmigrasi Provinsi Sumatera Selatan', 'DIPA-026.08.3.119008/2015', '2014-11-14'),
(49, '119009', '027', '03', 'DK', 'Dinas Sosial Provinsi Sumatera Selatan', 'DIPA-027.03.3.119009/2015', '2014-11-14'),
(50, '119010', '027', '04', 'DK', 'Dinas Sosial Provinsi Sumatera Selatan', 'DIPA-027.04.3.119010/2015', '2014-11-14'),
(51, '119011', '027', '05', 'DK', 'Dinas Sosial Provinsi Sumatera Selatan', 'DIPA-027.05.3.119011/2015', '2014-11-14'),
(52, '119012', '024', '03', 'DK', 'Dinas Kesehatan Provinsi Sumatera Selatan', 'DIPA-024.03.3.119012/2015', '2014-11-14'),
(53, '119013', '024', '04', 'DK', 'Dinas Kesehatan Provinsi Sumatera Selatan', 'DIPA-024.04.3.119013/2015', '2014-11-14'),
(54, '119014', '024', '05', 'DK', 'Dinas Kesehatan Provinsi Sumatera Selatan', 'DIPA-024.05.3.119014/2015', '2014-11-14'),
(55, '119015', '024', '07', 'DK', 'Dinas Kesehatan Provinsi Sumatera Selatan', 'DIPA-024.07.3.119015/2015', '2014-11-14'),
(56, '119017', '023', '05', 'DK', 'Dinas Pendidikan Nasional Provinsi Sumatera Selatan', 'DIPA-023.05.3.119017/2015', '2014-11-14'),
(57, '119018', '023', '12', 'DK', 'Dinas Pendidikan Nasional Provinsi Sumatera Selatan', 'DIPA-023.12.3.119018/2015', '2014-11-14'),
(58, '119020', '040', '06', 'DK', 'Dinas Kebudayaan Dan Pariwisata Daerah Provinsi Sumatera Selatan', 'DIPA-040.06.3.119020/2015', '2014-11-14'),
(59, '119021', '040', '10', 'DK', 'Dinas Kebudayaan Dan Pariwisata Daerah Provinsi Sumatera Selatan', 'DIPA-040.10.3.119021/2015', '2014-11-14'),
(60, '119022', '026', '13', 'DK', 'Dinas Tenaga Kerja Dan Transmigrasi Provinsi Sumatera Selatan', 'DIPA-026.13.3.119022/2015', '2014-11-14'),
(61, '119023', '018', '07', 'DK', 'Dinas Peternakan Provinsi Sumatera Selatan', 'DIPA-018.07.3.119023/2015', '2014-11-14'),
(62, '119024', '018', '08', 'DK', 'Dinas Peternakan Provinsi Sumatera Selatan', 'DIPA-018.08.3.119024/2015', '2014-11-14'),
(63, '119025', '090', '03', 'DK', 'Dinas Perindustrian Dan Perdagangan Sumatera Selatan', 'DIPA-090.03.3.119025/2015', '2014-11-14'),
(64, '119028', '019', '05', 'DK', 'Dinas Perindustrian Dan Perdagangan Sumatera Selatan', 'DIPA-019.05.3.119028/2015', '2014-11-14'),
(65, '119033', '018', '07', 'DK', 'Dinas Perkebunan Provinsi Sumatera Selatan', 'DIPA-018.07.3.119033/2015', '2014-11-14'),
(66, '119034', '018', '08', 'DK', 'Dinas Perkebunan Provinsi Sumatera Selatan', 'DIPA-018.08.3.119034/2015', '2014-11-14'),
(67, '119036', '032', '03', 'DK', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.03.3.119036/2016', '2014-11-14'),
(68, '119037', '032', '04', 'DK', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.04.3.119037/2016', '2014-11-14'),
(69, '119038', '032', '05', 'DK', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.05.3.119038/2015', '2014-11-14'),
(70, '119039', '032', '06', 'DK', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.06.3.119039/2015', '2014-11-14'),
(71, '119040', '032', '07', 'DK', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.07.3.119040/2015', '2014-11-14'),
(72, '119041', '032', '12', 'DK', 'Badan Koordinasi Penyuluhan Pertanian, Perikanan Dan Kehutanan Provinsi Sumatera Selatan', 'DIPA-032.12.3.119041/2015', '2014-11-14'),
(73, '119042', '032', '13', 'DK', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.13.3.119042/2015', '2014-11-14'),
(74, '119058', '026', '06', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Ogan Komering Ilir', 'DIPA-026.06.4.119058/2015', '2014-11-14'),
(75, '119059', '026', '07', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Ogan Komering Ilir', 'DIPA-026.07.4.119059/2015', '2014-11-14'),
(76, '119066', '026', '07', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Ogan Ilir', 'DIPA-026.07.4.119066/2015', '2014-11-14'),
(77, '119072', '018', '03', 'DK', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.03.3.119072/2016', '2014-11-14'),
(78, '119073', '026', '04', 'DK', 'Dinas Tenaga Kerja Dan Transmigrasi Provinsi Sumatera Selatan', 'DIPA-026.04.3.119073/2015', '2014-11-14'),
(79, '119074', '023', '03', 'DK', 'Dinas Pendidikan Nasional Provinsi Sumatera Selatan', 'DIPA-023.03.3.119074/2015', '2014-11-14'),
(80, '119076', '026', '07', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Provinsi Sumatera Selatan', 'DIPA-026.07.4.119076/2015', '2014-11-14'),
(81, '119077', '018', '06', 'DK', 'Dinas Peternakan Provinsi Sumatera Selatan', 'DIPA-018.06.3.119077/2015', '2014-11-14'),
(82, '119078', '090', '02', 'DK', 'Dinas Perindustrian Dan Perdagangan Sumatera Selatan', 'DIPA-090.02.3.119078/2015', '2014-11-14'),
(83, '119081', '018', '05', 'DK', 'Dinas Perkebunan Provinsi Sumatera Selatan', 'DIPA-018.05.3.119081/2015', '2014-11-14'),
(84, '119082', '010', '04', 'DK', 'Sekretariat Daerah Provinsi Sumatera Selatan', 'DIPA-010.04.3.119082/2015', '2014-11-14'),
(85, '119094', '018', '03', 'TP', 'Dinas Pertanian Kab. Ogan Komering Ilir', 'DIPA-018.03.4.119094/2015', '2014-11-14'),
(86, '119095', '018', '05', 'TP', 'Dinas Perkebunan Kab. Ogan Komering Ilir', 'DIPA-018.05.4.119095/2015', '2014-11-14'),
(87, '119096', '026', '04', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Ogan Komering Ilir', 'DIPA-026.04.4.119096/2015', '2014-11-14'),
(88, '119101', '018', '03', 'TP', 'Dinas Pertanian, Perkebunan Dan Kehutanan Kab Ogan Ilir', 'DIPA-018.03.4.119101/2015', '2014-11-14'),
(89, '119102', '026', '04', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Ogan Ilir', 'DIPA-026.04.4.119102/2015', '2014-11-14'),
(90, '119113', '010', '04', 'DK', 'Satuan Polisi Pamong Praja Provinsi Sumatera Selatan', 'DIPA-010.04.3.119113/2015', '2014-11-14'),
(91, '119129', '018', '03', 'TP', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.03.4.119129/2015', '2014-11-14'),
(92, '119130', '018', '04', 'TP', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.04.4.119130/2015', '2014-11-14'),
(93, '119132', '018', '05', 'TP', 'Dinas Perkebunan Provinsi Sumatera Selatan', 'DIPA-018.05.4.119132/2015', '2014-11-14'),
(94, '119133', '018', '06', 'TP', 'Dinas Peternakan Provinsi Sumatera Selatan', 'DIPA-018.06.4.119133/2015', '2014-11-14'),
(95, '119134', '018', '07', 'TP', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.07.4.119134/2015', '2014-11-14'),
(96, '119135', '018', '07', 'TP', 'Dinas Peternakan Provinsi Sumatera Selatan', 'DIPA-018.07.4.119135/2015', '2014-11-14'),
(97, '119136', '018', '07', 'TP', 'Dinas Perkebunan Provinsi Sumatera Selatan', 'DIPA-018.07.4.119136/2015', '2014-11-14'),
(98, '119137', '018', '08', 'TP', 'Dinas Pertanian Tanaman Pangan Dan Hortikultura Propinsi Sumatera Selatan', 'DIPA-018.08.4.119137/2015', '2014-11-14'),
(99, '119138', '018', '08', 'TP', 'Dinas Peternakan Provinsi Sumatera Selatan', 'DIPA-018.08.4.119138/2015', '2014-11-14'),
(101, '119140', '027', '03', 'TP', 'Dinas Sosial Provinsi Sumatera Selatan', 'DIPA-027.03.4.119140/2015', '2014-11-14'),
(102, '119142', '032', '04', 'TP', 'Dinas Kelautan Dan Perikanan Provinsi Sumatera Selatan', 'DIPA-032.04.4.119142/2015', '2014-11-14'),
(103, '119153', '019', '02', 'DK', 'Dinas Perindustrian Dan Perdagangan Sumatera Selatan', 'DIPA-019.02.3.119153/2015', '2014-11-14'),
(104, '119223', '033', '03', 'DK', 'Dinas Pu Cipta Karya Provinsi Sumatera Selatan', 'DIPA-033.03.3.119223/2015', '2014-11-14'),
(105, '119225', '018', '11', 'DK', 'Badan Ketahanan Pangan Propinsi Sumatera Selatan', 'DIPA-018.11.3.119225/2015', '2014-11-14'),
(106, '119232', '033', '06', 'TP', 'Dinas Pekerjaan Umum Pengairan Provinsi Sumatera Selatan', 'DIPA-033.06.4.119232/2015', '2014-11-14'),
(107, '119233', '010', '05', 'DK', 'Badan Pemberdayaan Masyarakat Dan Pemerintahan Desa Provinsi Sumatera Selatan', 'DIPA-010.05.3.119233/2015', '2014-11-14'),
(108, '119234', '033', '04', 'TP', 'Dinas Pu Bina Marga Prov. Sumsel', 'DIPA-033.04.4.119234/2015', '2014-11-14'),
(109, '119271', '024', '03', 'TP', 'Dinas Kesehatan Kab. Ogan Komering Ilir', 'DIPA-024,03,4,119271/2015', '2014-11-14'),
(110, '119274', '010', '05', 'UB', 'Badan Pemberdayaan Masyarakat Dan Pempemerintahan Desa Kab. Ogan Komering Ilir', 'DIPA-010.05.5.119274/2015', '2014-11-14'),
(111, '119296', '024', '03', 'TP', 'Dinas Kesehatan Kab. Ogan Ilir', 'DIPA-024,03,4,119296/2015', '2014-11-14'),
(112, '119304', '024', '03', 'TP', 'Dinas Kesehatan Kota Palembang', 'DIPA-024,03,4,119304/2015', '2014-11-14'),
(113, '119313', '026', '04', 'TP', 'Disnakertrans Kota Prabumulih', 'DIPA-026.04.4.119313/2015', '2014-11-14'),
(114, '119314', '024', '03', 'TP', 'Dinas Kesehatan Kota Prabumulih', 'DIPA-024-03,4,119314/2015', '2014-11-14'),
(115, '119394', '040', '11', 'DK', 'Dinas Kebudayaan Dan Pariwisata Daerah Provinsi Sumatera Selatan', 'DIPA-040.11.3.119394/2015', '2014-11-14'),
(116, '119770', '015', '04', 'KD', 'Kantor Wilayah Djp Sumatera Selatan Dan Kepulauan Bangka Belitung', 'DIPA-015.04.2.119770/2015', '2014-11-14'),
(117, '237788', '018', '12', 'KD', 'Balai Karantina Pertanian Kelas I Palembang', 'DIPA-018.12.2.237788/2015', '2014-11-14'),
(118, '237821', '032', '11', 'KD', 'Balai Penelitian Perikanan Perairan Umum (Bp3U)', 'DIPA-032.11.2.237821/2016', '2014-11-14'),
(119, '238535', '029', '06', 'KD', 'Balai Pemantapan Kawasan Hutan Wilayah Ii Palembang', 'DIPA-029.06.2.238535/2016', '2014-11-14'),
(120, '238542', '029', '05', 'KD', 'Balai Konservasi Sumber Daya Alam Sumatera Selatan', 'DIPA-029.05.2.238542/2015', '2014-11-14'),
(121, '248920', '019', '07', 'KD', 'Baristand Industri Palembang', 'DIPA-019.07.2.248920/2015', '2014-11-14'),
(122, '309360', '025', '04', 'KD', 'Madrasah Tsanawiyah Negeri Palembang Ii Kota Palembang', 'DIPA-025.04.2.309360/2016', '2014-11-14'),
(123, '344626', '012', '23', 'KP', 'Lanal Palembang', 'DIPA-012.23.1.344626/2015', '2014-11-14'),
(124, '344627', '012', '23', 'KP', 'Lanal Bangka Belitung', 'DIPA-012.23.1.344627/2015', '2014-11-14'),
(125, '344824', '012', '24', 'KP', 'Lanud Palembang', 'DIPA-012.24.1.344824/2015', '2014-11-14'),
(126, '350165', '067', '08', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Propinsi Sumatera Selatan', 'DIPA-067,08,4,350165/2015', '2015-04-29'),
(127, '350168', '067', '08', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kab. Oki', 'DIPA-067,08,4,350168/2015', '2015-04-29'),
(128, '350169', '067', '07', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kab. Oki', 'DIPA-067,07,4,350169/2015', '2015-04-24'),
(129, '350171', '067', '08', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Ogan Ilir', 'DIPA-067,08,4,350171/2015', '2015-04-29'),
(130, '350172', '067', '07', 'TP', 'Dinas Tenaga Kerja Dan Transmigrasi Propinsi Sumatera Selatan', 'DIPA-067,07,4,350172/2015', '2015-04-24'),
(131, '350174', '067', '03', 'DK', 'Badan Pemberdayaan Masyarakat Dan Pemerintahan Desa Propinsi Sumatera Selatan', 'DIPA-067,03,3,350174/2015', '2015-05-11'),
(132, '350177', '067', '03', 'UB', 'Badan Pemberdayaan Masyarakat Dan Pemerintahan Desa Kab. Ogan Komering Ilir', 'DIPA-067,03,5,350177/2015', '2015-05-11'),
(133, '351745', '056', '05', 'KD', 'Kantor Pertanahan Kota Palembang', 'DIPA-056.05,2.351745/2015', '2015-06-01'),
(134, '351748', '056', '08', 'KD', 'Kantor Pertanahan Kota Palembang', 'DIPA-056.08,2.351745/2015', '2015-06-01'),
(135, '351749', '056', '09', 'KD', 'Kantor Pertanahan Kota Palembang', 'DIPA-056.09,2.351745/2015', '2015-06-01'),
(136, '369600', '027', '04', 'KD', 'Panti Sosial Bina Daksa "Budi Perkasa", Palembang', 'DIPA-027.04.2.369600/2016', '2014-11-14'),
(137, '400089', '042', '04', 'KD', 'Universitas Sriwijaya', 'DIPA-042,04,2,400089/2015', '2015-04-15'),
(138, '400116', '042', '04', 'KD', 'Koordinasi Perguruan Tinggi Swasta Wilayah Ii Palembang', 'DIPA-042,04,2,400116/2015', '2015-04-15'),
(139, '400130', '042', '04', 'KD', 'Politeknik Negeri Sriwijaya', 'DIPA-042,04,2,400130/2015', '2015-04-15'),
(140, '400271', '029', '11', 'KD', 'Balai Konservasi Sumber Daya Alam Sumatera Selatan', 'DIPA-029,11,2,400271/2015', '2015-04-09'),
(141, '400356', '029', '09', 'KD', 'Balai Pengelolaan Das Musi', 'DIPA-029,09,2,400356/2015', '2015-04-13'),
(142, '400467', '029', '10', 'KD', 'Balai Konservasi Sumber Daya Alam Sumatera Selatan', 'DIPA-029,10,2,400467/2015', '2015-04-13'),
(143, '400468', '029', '10', 'KD', 'Balai Taman Nasional Sembilang', 'DIPA-029,10,2,400468/2015', '2015-04-13'),
(144, '400556', '029', '01', 'DK', 'Badan Lingkungan Hidup (Blh) Propinsi Sumatera Selatan', 'DIPA-029,01,3,400556/2015', '2014-11-14'),
(145, '400779', '033', '07', 'DK', 'Dekonsentrasi Bidang Perumahan Dinas PU Cipta Karya Propinsi Sumatera Selatan', 'DIPA-033.07.3.400779/2015', '2014-11-14'),
(146, '400944', '033', '15', 'KP', 'Balai Pendidikan Dan Pelatihan Ii', 'DIPA-033,15,1,400944/2015', '2014-11-14'),
(147, '400992', '042', '01', 'KD', 'Politeknik Negeri Sriwijaya', 'DIPA-042.01.2.400992/2016', '2015-12-07'),
(148, '401656', '033', '07', 'KP', 'SNVT Penyediaan Perumahan Propinsi Sumatera Selatan', 'DIPA-033.07.1.401656/2016', '2015-12-07'),
(149, '402236', '005', '01', 'KD', 'Pengadilan Tinggi Agama Palembang', 'DIPA-005.01.2.402236/2015', '2014-11-14'),
(150, '402237', '005', '04', 'KD', 'Pengadilan Tinggi Agama Palembang', 'DIPA-005.04.2.402237/2015', '2014-11-14'),
(151, '402242', '005', '01', 'KD', 'Pengadilan Agama Palembang', 'DIPA-005.01.2.402242/2015', '2014-11-14'),
(152, '402243', '005', '04', 'KD', 'Pengadilan Agama Palembang', 'DIPA-005.04.2.402243/2015', '2014-11-14'),
(153, '402273', '005', '01', 'KD', 'Pengadilan Agama Kayu Agung', 'DIPA-005.01.2.402273/2015', '2014-11-14'),
(154, '402274', '005', '04', 'KD', 'Pengadilan Agama Kayu Agung', 'DIPA-005.04.2.402274/2015', '2014-11-14'),
(155, '406369', '013', '05', 'KD', 'Balai Pemasyarakatan Palembang', 'DIPA-013.05.2.406369/2015', '2014-11-14'),
(156, '406375', '013', '05', 'KD', 'Lembaga Pemasyarakatan Palembang', 'DIPA-013.05.2.406375/2016', '2014-11-14'),
(157, '406381', '013', '05', 'KD', 'Lembaga Pemasyarakatan Tanjung Raja', 'DIPA-013.05.2.406381/2015', '2014-11-14'),
(158, '406494', '013', '05', 'KD', 'Rumah Tahanan Negara Prabumulih', 'DIPA-013.05.2.406494/2015', '2014-11-14'),
(159, '406539', '013', '05', 'KD', 'Lembaga Pemasyarakatan Anak Palembang', 'DIPA-013.05.2.406539/2016', '2014-11-14'),
(160, '408143', '013', '06', 'KD', 'Kantor Imigrasi Palembang', 'DIPA-013.06.2.408143/2015', '2014-11-14'),
(161, '408812', '013', '03', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.03.2.408812/2016', '2014-11-14'),
(162, '408813', '013', '05', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.05.2.408813/2015', '2014-11-14'),
(163, '408814', '013', '06', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.06.2.408814/2015', '2014-11-14'),
(164, '408815', '013', '07', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.07.2.408815/2015', '2014-11-14'),
(165, '408816', '013', '08', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.08.2.408816/2016', '2014-11-14'),
(166, '408817', '013', '09', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.09.2.408817/2015', '2014-11-14'),
(167, '408818', '013', '01', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.01.2.408818/2016', '2014-11-14'),
(168, '408819', '013', '10', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.10.2.408819/2016', '2014-11-14'),
(169, '408820', '013', '11', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.11.2.408820/2015', '2014-11-14'),
(170, '408821', '013', '12', 'KD', 'Kanwil Kementerian Hukum Dan Ham Palembang', 'DIPA-013.12.2.408821/2016', '2014-11-14'),
(171, '409810', '015', '04', 'KD', 'Kantor Pelayanan Pajak Pratama Kayu Agung', 'DIPA-015.04.2.409810/2015', '2014-11-14'),
(172, '410382', '015', '04', 'KD', 'Kantor Pelayanan Pajak Pratama Prabumulih', 'DIPA-015.04.2.410382/2015', '2014-11-14'),
(173, '411146', '015', '05', 'KD', 'Kantor Wilayah Djbc Sumatera Bagian Selatan', 'DIPA-015.05.2.411146/2015', '2014-11-14'),
(174, '411702', '015', '05', 'KD', 'Kantor Pengawasan dan Pelayanan Bea Cukai Palembang', 'DIPA-015.05.2.411702/2015', '2014-11-14'),
(175, '413256', '022', '04', 'KD', 'Kantor Kesyahbandaran Dan Otoritas Pelabuhan Palembang', 'DIPA-022.04.2.413256/2015', '2014-11-14'),
(176, '413293', '022', '04', 'KD', 'Distrik Navigasi Palembang', 'DIPA-022.04.2.413293/2015', '2014-11-14'),
(177, '414540', '107', '01', 'KP', 'Kantor Sar Palembang', 'DIPA-107.01.1.414540/2015', '2014-11-14'),
(178, '414860', '023', '14', 'KD', 'Lpmp Sumatera Selatan', 'DIPA-023.14.2.414860/2015', '2014-11-14'),
(179, '415112', '023', '04', 'KD', 'Universitas Sriwijaya', 'DIPA-023.04.2.415112/2015', '2014-11-14'),
(180, '415329', '023', '04', 'KD', 'Koordinasi Perguruan Tinggi Swasta Wilayah Ii Palembang', 'DIPA-023.04.2.415329/2015', '2014-11-14'),
(181, '415383', '024', '03', 'KD', 'Loka Kesehatan Tradisional Masyarakat Palembang', 'DIPA-024.03.2.415383/2016', '2014-11-14'),
(182, '415624', '024', '04', 'KD', 'Rumah Sakit Umum Pusat Dr. Mohammad Hoesin Palembang', 'DIPA-024.04.2.415624/2015', '2014-11-14'),
(183, '415630', '024', '04', 'KD', 'Rumah Sakit Kusta Dr.Rivai Abdullah Palembang', 'DIPA-024.04.2.415630/2015', '2014-11-14'),
(184, '415649', '024', '04', 'KD', 'Balai Besar Laboratorium Kesehatan Palembang', 'DIPA-024.04.2.415649/2015', '2014-11-14'),
(185, '416094', '024', '05', 'KD', 'Kantor Kesehatan Pelabuhan Kelas Ii Palembang', 'DIPA-024.05.2.416094/2016', '2014-11-14'),
(186, '418352', '025', '01', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.01.2.418352/2016', '2014-11-14'),
(187, '418353', '025', '03', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.03.2.418353/2016', '2014-11-14'),
(188, '418354', '025', '04', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.04.2.418354/2015', '2014-11-14'),
(189, '418355', '025', '05', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.05.2.418355/2015', '2014-11-14'),
(190, '418356', '025', '06', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.06.2.418356/2015', '2014-11-14'),
(191, '418357', '025', '07', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.07.2.418357/2015', '2014-11-14'),
(192, '418358', '025', '08', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.08.2.418358/2015', '2014-11-14'),
(193, '418359', '025', '09', 'KD', 'Kanwil Kementerian Agama Prop. Sumatera Selatan', 'DIPA-025.09.2.418359/2015', '2014-11-14'),
(194, '418368', '025', '01', 'KD', 'Kantor Kementerian Agama Kota Palembang', 'DIPA-025.01.2.418368/2015', '2014-11-14'),
(195, '418369', '025', '03', 'KD', 'Kantor Kementerian Agama Kota Palembang', 'DIPA-025.03.2.418369/2015', '2014-11-14'),
(196, '418370', '025', '04', 'KD', 'Kantor Kementerian Agama Kota Palembang', 'DIPA-025.04.2.418370/2015', '2014-11-14'),
(197, '418371', '025', '05', 'KD', 'Kantor Kementerian Agama Kota Palembang', 'DIPA-025.05.2.418371/2015', '2014-11-14'),
(198, '418372', '025', '06', 'KD', 'Kantor Kementerian Agama Kota Palembang', 'DIPA-025.06.2.418372/2015', '2014-11-14'),
(199, '418373', '025', '08', 'KD', 'Kantor Kementerian Agama Kota Palembang', 'DIPA-025.08.2.418373/2015', '2014-11-14'),
(200, '418374', '025', '04', 'KD', 'Madrasah Aliyah Negeri 3 Palembang Kota Palembang', 'DIPA-025.04.2.418374/2016', '2014-11-14'),
(201, '418375', '025', '09', 'KD', 'Kantor Kementerian Agama Kota Palembang', 'DIPA-025.09.2.418375/2015', '2014-11-14'),
(202, '418380', '025', '04', 'KD', 'Madrasah Tsanawiyah Negeri Palembang I Kota Palembang', 'DIPA-025.04.2.418380/2015', '2014-11-14'),
(203, '418399', '025', '04', 'KD', 'Madrasah Aliyah Negeri Palembang I Kota Palembang', 'DIPA-025.04.2.418399/2016', '2015-12-07'),
(204, '418425', '025', '01', 'KD', 'Kantor Kementerian Agama Kab.Ogan Komering Ilir', 'DIPA-025.01.2.418425/2016', '2014-11-14'),
(205, '418426', '025', '03', 'KD', 'Kantor Kementerian Agama Kab.Ogan Komering Ilir', 'DIPA-025.03.2.418426/2016', '2014-11-14'),
(206, '418427', '025', '04', 'KD', 'Kantor Kementerian Agama Kab.Ogan Komering Ilir', 'DIPA-025.04.2.418427/2016', '2014-11-14'),
(207, '418428', '025', '07', 'KD', 'Kantor Kementerian Agama Kab.Ogan Komering Ilir', 'DIPA-025.07.2.418428/2015', '2014-11-14'),
(208, '418429', '025', '09', 'KD', 'Kantor Kementerian Agama Kab.Ogan Komering Ilir', 'DIPA-025.09.2.418429/2015', '2014-11-14'),
(209, '418431', '025', '04', 'KD', 'Madrasah Tsanawiyah Negeri Sakatiga Kab. Ogan Ilir', 'DIPA-025.04.2.418431/2016', '2016-12-07'),
(210, '418440', '025', '04', 'KD', 'Madrasah Aliyah Negeri Sakatiga Kab. Ogan Ilir', 'DIPA-025.04.2.418440/2016', '2014-11-14'),
(211, '424208', '025', '04', 'KD', 'Iain Raden Fatah Palembang', 'DIPA-025.04.2.424208/2015', '2014-11-14'),
(212, '424214', '025', '04', 'KD', 'Madrasah Aliyah Negeri Palembang Ii Kota Palembang', 'DIPA-025.04.2.424214/2016', '2014-11-14'),
(213, '424951', '025', '04', 'KD', 'Madrasah Tsanawiyah Negeri Tanjung Raja Kab.Ogan Ilir', 'DIPA-025.04.2.424951/2016', '2014-11-14'),
(214, '425369', '025', '11', 'KD', 'Balai Pendidikan Dan Pelatihan Keagamaan Palembang', 'DIPA-025.11.2.425369/2016', '2014-11-14'),
(215, '426041', '025', '04', 'KD', 'Madrasah Tsanawiyah Negeri Prabumulih Kota Prabumulih', 'DIPA-025.04.2.426041/2016', '2014-11-14'),
(216, '426421', '104', '01', 'KD', 'Balai Pelayanan Penempatan Dan Perlindungan Tenaga Kerja Indonesia (Bp3Tki) Palembang', 'DIPA-104.01.2.426421/2015', '2014-11-14'),
(217, '426891', '029', '03', 'KD', 'Balai Pemantauan Pemanfaatan Hutan Produksi Wilayah V Palembang', 'DIPA-029.03.2.426891/2015', '2014-11-14'),
(218, '427159', '029', '04', 'KD', 'Balai Pengelolaan Das Musi', 'DIPA-029.04.2.427159/2015', '2014-11-14'),
(219, '427310', '029', '04', 'KD', 'Balai Perbenihan Tanaman Hutan Sumatera', 'DIPA-029.04.2.427310/2016', '2014-11-14'),
(220, '427454', '029', '07', 'KD', 'Balai Penelitian Kehutanan Palembang', 'DIPA-029.07.2.427454/2015', '2014-11-14'),
(221, '428211', '054', '01', 'KD', 'Badan Pusat Statistik Prop. Sumatera Selatan', 'DIPA-054.01.2.428211/2015', '2014-11-14'),
(222, '428227', '054', '01', 'KD', 'Badan Pusat Statistik Kota Palembang', 'DIPA-054.01.2.428227/2015', '2014-11-14'),
(223, '428242', '054', '01', 'KD', 'Badan Pusat Statistik Kab. Ogan Komering Ilir', 'DIPA-054.01.2.428242/2015', '2014-11-14'),
(224, '431102', '056', '01', 'KD', 'Kantor Wilayah Badan Pertanahan Nasional Prop. Sumatera Selatan', 'DIPA-056.01.2.431102/2015', '2014-11-14'),
(225, '431111', '056', '01', 'KD', 'Kantor Pertanahan Kota Palembang', 'DIPA-056.01.2.431111/2015', '2014-11-14'),
(226, '431158', '056', '01', 'KD', 'Kantor Pertanahan Kab. Ogan Komering Ilir', 'DIPA-056.01.2.431158/2015', '2014-11-14'),
(227, '432841', '063', '01', 'KD', 'Balai Besar Pengawas Obat Dan Makanan Palembang', 'DIPA-063.01.2.432841/2015', '2014-11-14'),
(228, '437092', '075', '01', 'KD', 'Stasiun Meteorologi Sultan Mahmud Badaruddin Ii Palembang', 'DIPA-075.01.2.437092/2015', '2014-11-14'),
(229, '437106', '075', '01', 'KD', 'Stasiun Klimatologi Kenten - Palembang', 'DIPA-075.01.2.437106/2015', '2014-11-14'),
(230, '440551', '025', '01', 'KD', 'Kantor Kementerian Agama Kab. Ogan Ilir', 'DIPA-025.01.2.440551/2015', '2014-11-14'),
(231, '440552', '025', '03', 'KD', 'Kantor Kementerian Agama Kab. Ogan Ilir', 'DIPA-025.03.2.440552/2016', '2014-11-14'),
(232, '440553', '025', '04', 'KD', 'Kantor Kementerian Agama Kab. Ogan Ilir', 'DIPA-025.04.2.440553/2016', '2014-11-14'),
(233, '440554', '025', '05', 'KD', 'Kantor Kementerian Agama Kab. Ogan Ilir', 'DIPA-025.05.2.440554/2015', '2014-11-14'),
(234, '440555', '025', '06', 'KD', 'Kantor Kementerian Agama Kab. Ogan Ilir', 'DIPA-025.06.2.440555/2015', '2014-11-14'),
(235, '440557', '025', '08', 'KD', 'Kantor Kementerian Agama Kab. Ogan Ilir', 'DIPA-025.08.2.440557/2015', '2014-11-14'),
(236, '440559', '025', '09', 'KD', 'Kantor Kementerian Agama Kab. Ogan Ilir', 'DIPA-025.09.2.440559/2015', '2014-11-14'),
(237, '444751', '090', '02', 'TP', 'Dinas Perindustrian Dan Perdagangan Provinsi Sumatera Selatan', 'DIPA-090,02,4,444751/2015', '2015-05-07'),
(238, '444752', '090', '02', 'TP', 'Dinas Koperasi, Perindustrian Dan Perdagangan Kota Prabumulih', 'DIPA-090,02,4,444752/2015', '2015-05-07'),
(239, '447033', '020', '05', 'KP', 'Unit Induk Pembangunan Jaringan Sumatera Ii', 'DIPA-020.05.1.447033/2015', '2014-11-14'),
(240, '447146', '020', '05', 'KP', 'Listrik Pedesaan Sumatera Selatan', 'DIPA-020.05.1.447146/2015', '2014-11-14'),
(241, '447940', '033', '04', 'KP', 'Balai Besar Pelaksanaan Jalan Nasional Iii (Bengkulu, Lampung, Sumsel, Dan Babel) Di Palembang', 'DIPA-033.04.1.447940/2016', '2016-12-07'),
(242, '449752', '015', '04', 'KD', 'Kantor Pelayanan Pajak Madya Palembang', 'DIPA-015.04.2.449752/2015', '2014-11-14'),
(243, '450573', '089', '01', 'KD', 'Perwakilan Bpkp Prop. Sumatera Selatan', 'DIPA-089.01.2.450573/2015', '2014-11-14'),
(244, '466674', '022', '03', 'KP', 'Pengembangan Llaj Sumatera Selatan', 'DIPA-022.03.1.466674/2015', '2014-11-14'),
(245, '467039', '022', '03', 'KP', 'Pengembangan Llasdp Sumatera Selatan', 'DIPA-022.03.1.467039/2015', '2014-11-14'),
(246, '467328', '022', '08', 'KP', 'Pengembangan Perkeretaapian Sumatera Selatan', 'DIPA-022.08.1.467328/2015', '2014-11-14'),
(247, '467364', '022', '08', 'KP', 'Balai Teknik Perkeretaapian Wilayah Sumatera Bagian Selatan', 'DIPA-022,08,1,467364/2015', '2014-11-14'),
(248, '472112', '033', '04', 'KP', 'Perencanaan Dan Pengawasan Jalan Nasional Provinsi Sumatera Selatan', 'DIPA-033.04.1.472112/2015', '2014-11-14'),
(249, '486520', '033', '05', 'KP', 'Pengembangan Kawasan Permukiman Dan Penataan Bangunan Provinsi Sumatera Selatan', 'DIPA-033.05.1.486520/2015', '2014-11-14'),
(250, '493482', '033', '05', 'KP', 'Penataan Bangunan Dan Lingkungan Sumatera Selatan', 'DIPA-033.05.1.493482/2016', '2014-11-14'),
(251, '495163', '033', '05', 'KP', 'Pengembangan Air Minum Dan Sanitasi Propinsi Sumatera Selatan', 'DIPA-033.05.1.495163/2015', '2014-11-14'),
(252, '495188', '033', '05', 'KP', 'Pengembangan Sistem Penyehatan Lingkungan Permukiman Sumatera Selatan', 'DIPA-033.05.1.495188/2016', '2014-11-14'),
(253, '497733', '013', '05', 'KD', 'Lembaga Pemasyarakatan Wanita Palembang', 'DIPA-013.05.2.497733/2016', '2014-11-14'),
(254, '498092', '033', '06', 'KP', 'Snvt Pelaksanaan Jaringan Sumber Air Sumatera Viii Provinsi Sumatera Selatan', 'DIPA-033.06.1.498092/2015', '2014-11-14'),
(255, '498097', '033', '06', 'KP', 'Snvt Pelaksanaan Jaringan Pemanfaatan Air Sumatera Viii Provinsi Sumatera Selatan', 'DIPA-033.06.1.498097/2015', '2014-11-14'),
(256, '498590', '033', '04', 'KP', 'Pelaksanaan Jalan Nasional Wilayah I Provinsi Sumsel', 'DIPA-033.04.1.498590/2015', '2014-11-14'),
(257, '498591', '033', '04', 'KP', 'Pelaksanaan Jalan Nasional Wilayah Ii Provinsi Sumsel', 'DIPA-033.04.1.498591/2015', '2014-11-14'),
(258, '498592', '033', '04', 'KP', 'Pelaksanaan Jalan Metropolitan Palembang', 'DIPA-033.04.1.498592/2015', '2014-11-14'),
(259, '499191', '043', '01', 'DK', 'Badan Lingkungan Hidup (Blh) Provinsi Sumatera Selatan', 'DIPA-043.01.3.499191/2015', '2014-11-14'),
(260, '502087', '033', '05', 'KP', 'Pembangunan Infrastruktur Permukiman Kab. Ogan Komering Ilir', 'DIPA-033.05.1.502087/2015', '2014-11-14'),
(261, '502089', '033', '05', 'UB', 'Pembangunan Infrastruktur Permukiman Kab. Ogan Komering Ilir', 'DIPA-033.05.5.502089/2015', '2014-11-14'),
(262, '502169', '033', '05', 'KP', 'Pembangunan Infrastruktur Permukiman Kab. Ogan Ilir', 'DIPA-033.05.1.502169/2015', '2014-11-14'),
(263, '502181', '033', '05', 'UB', 'Pembangunan Infrastruktur Permukiman Kota Prabumulih', 'DIPA-033.05.5.502181/2015', '2014-11-14'),
(264, '505786', '033', '05', 'KP', 'Perencanaaan Dan Pengendalian Program Infrastruktur Permukiman Provinsi Sumatera Selatan', 'DIPA-033.05.1.505786/2015', '2014-11-14'),
(265, '517988', '022', '12', 'KP', 'Balai Diklat Transportasi Darat (Bp2Td) Palembang', 'DIPA-022.12.1.517988/2016', '2016-12-07'),
(266, '521620', '022', '04', 'KD', 'Unit Penyelenggara Pelabuhan Sungai Lumpur', 'DIPA-022.04.2.521620/2015', '2014-11-14'),
(267, '526200', '022', '12', 'KP', 'Balai Pendidikan Dan Pelatihan Penerbangan (Bp3)Palembang', 'DIPA-022.12.1.526200/2015', '2014-11-14'),
(268, '526750', '005', '01', 'KD', 'Pengadilan Tata Usaha Negara Palembang', 'DIPA-005.01.2.526750/2015', '2014-11-14'),
(269, '526751', '005', '05', 'KD', 'Pengadilan Tata Usaha Negara Palembang', 'DIPA-005.05.2.526751/2015', '2014-11-14'),
(270, '527933', '015', '08', 'KD', 'Kanwil Ditjen Perbendaharaan Provinsi Sumatera Selatan', 'DIPA-015.08.2.527933/2015', '2014-11-14'),
(271, '527940', '015', '08', 'KD', 'Kantor Pelayanan Perbendaharaan Negara Palembang', 'DIPA-015.08.2.527940/2016', '2014-11-14'),
(272, '537880', '015', '09', 'KD', 'Kanwil Djkn Sumatera Selatan, Jambi Dan Bangka Belitung', 'DIPA-015.09.2.537880/2015', '2014-11-14'),
(273, '537894', '015', '09', 'KD', 'Kantor Pelayanan Kekayaan Negara Dan Lelang Palembang', 'DIPA-015.09.2.537894/2015', '2014-11-14'),
(274, '549875', '023', '01', 'KD', 'Balai Arkeologi Provinsi Di Palembang (Sumatera Selatan)', 'DIPA-023.01.2.549875/2015', '2014-11-14'),
(275, '553111', '025', '04', 'KD', 'Madrasah Tsanawiyah Negeri Tanjung Laut Kab. Ogan Komering Ilir', 'DIPA-025.04.2.553111/2015', '2014-11-14'),
(276, '559965', '033', '05', 'KP', 'Pembangunan Infrastruktur Permukiman Kota Palembang', 'DIPA-033.05.1.559965/2015', '2014-11-14'),
(277, '559966', '033', '05', 'KP', 'Pembangunan Infrastruktur Permukiman Kota Prabumulih', 'DIPA-033.05.1.559966/2015', '2014-11-14'),
(278, '560834', '015', '04', 'KD', 'Kantor Pelayanan Pajak Pratama Palembang Seberang Ulu', 'DIPA-015.04.2.560834/2015', '2014-11-14'),
(279, '561204', '015', '11', 'KD', 'Balai Diklat Keuangan Palembang', 'DIPA-015.11.2.561204/2015', '2014-11-14'),
(280, '561541', '015', '04', 'KD', 'Kantor Pelayanan Pajak Pratama Palembang Ilir Timur', 'DIPA-015.04.2.561541/2015', '2014-11-14'),
(281, '567481', '032', '13', 'KD', 'Balai Karantina Ikan, Pengendalian Mutu Dan Keamanan Hasil Perikanan Kelas Ii Palembang', 'DIPA-032.13.2.567481/2016', '2014-11-14'),
(282, '567495', '018', '09', 'KD', 'Balai Pengkajian Teknologi Pertanian Sumatera Selatan', 'DIPA-018.09.2.567495/2015', '2014-11-14'),
(283, '569031', '015', '04', 'KD', 'Kantor Pelayanan Penyuluhan Dan Konsultasi Perpajakan Indralaya', 'DIPA-015.04.2.569031/2015', '2014-11-14'),
(284, '574312', '029', '05', 'KD', 'Balai Taman Nasional Sembilang', 'DIPA-029.05.2.574312/2015', '2014-11-14'),
(285, '575968', '025', '04', 'KD', 'Madrasah Aliyah Negeri Prabumulih Kota Prabumulih', 'DIPA-025.04.2.575968/2016', '2014-11-14'),
(286, '576736', '023', '04', 'KD', 'Politeknik Negeri Sriwijaya', 'DIPA-023.04.2.576736/2015', '2014-11-14'),
(288, '579214', '004', '02', 'KD', 'BPK RI Perwakilan Provinsi Sumatera Selatan', 'DIPA-004.02.2.579214/2015', '2014-11-14'),
(289, '591011', '025', '04', 'KD', 'Madrasah Ibtidaiyah Negeri Payaraman Kab. Ogan Ilir', 'DIPA-025.04.2.591011/2015', '2014-11-14'),
(290, '591177', '025', '04', 'KD', 'Madrasah Ibtidaiyah Negeri Prabumulih', 'DIPA-025.04.2.591177/2016', '2014-11-14'),
(291, '591334', '025', '04', 'KD', 'Madrasah Ibtidaiyah Negeri Palembang I Kodya Pelembang', 'DIPA-025.04.2.591334/2016', '2014-11-14'),
(292, '591341', '025', '04', 'KD', 'Madrasah Ibtidaiyah Negeri Palembang Ii Kodya Palembang', 'DIPA-025.04.2.591341/2015', '2014-11-14'),
(293, '597537', '025', '04', 'KD', 'Madrasah Tsanawiyah Negeri Tulung Selapan Kab.Ogan Komering Ilir', 'DIPA-025.04.2.597537/2016', '2014-11-14'),
(294, '613455', '059', '03', 'KD', 'Balai Monitor Spektrum Frekuensi Radio Kelas Ii Palembang', 'DIPA-059.03.2.613455/2015', '2014-11-14'),
(295, '621729', '023', '13', 'KD', 'Balai Bahasa Palembang', 'DIPA-023.13.2.621729/2015', '2014-11-14'),
(296, '621911', '024', '05', 'KD', 'Balai Teknik Kesehatan Lingkungan Dan Pengendalian Penyakit Kelas I Palembang', 'DIPA-024.05.2.621911/2016', '2014-11-14'),
(297, '622372', '088', '01', 'KD', 'Kantor Regional Vii Badan Kepegawaian Negara Palembang', 'DIPA-088.01.2.622372/2015', '2014-11-14'),
(298, '626115', '013', '05', 'KD', 'Rumah Penyimpanan Barang Sitaan Negara Palembang', 'DIPA-013.05.2.626115/2015', '2014-11-14'),
(299, '632160', '024', '12', 'KD', 'Politeknik Kesehatan Palembang', 'DIPA-024.12.2.632160/2015', '2014-11-14'),
(300, '633781', '033', '06', 'KP', 'Balai Besar Wilayah Sungai Sumatera Viii', 'DIPA-033.06.1.633781/2015', '2014-11-14'),
(301, '635617', '015', '04', 'KD', 'Kantor Pelayanan Pajak Pratama Palembang Ilir Barat', 'DIPA-015.04.2.635617/2015', '2014-11-14'),
(302, '637550', '056', '01', 'KD', 'Kantor Pertanahan Kota Prabumulih', 'DIPA-056.01.2.637550/2015', '2014-11-14'),
(303, '641461', '060', '01', 'KD', 'Spripim Polda Sumsel', 'DIPA-060.01.2.641461/2015', '2014-11-14'),
(304, '641478', '060', '01', 'KD', 'Roops Polda Sumsel', 'DIPA-060.01.2.641478/2015', '2014-11-14'),
(305, '641482', '060', '01', 'KD', 'Yanma Polda Sumsel', 'DIPA-060.01.2.641482/2016', '2014-11-14'),
(306, '641499', '060', '01', 'KD', 'Ditintelkam Polda Sumsel', 'DIPA-060.01.2.641499/2015', '2014-11-14'),
(307, '641504', '060', '01', 'KD', 'Ditreskrimum Polda Sumsel', 'DIPA-060.01.2.641504/2016', '2014-11-14'),
(308, '641511', '060', '01', 'KD', 'Ditsabhara Polda Sumsel', 'DIPA-060.01.2.641511/2015', '2014-11-14'),
(309, '641525', '060', '01', 'KD', 'Ditlantas Polda Sumsel', 'DIPA-060.01.2.641525/2016', '2014-11-14'),
(310, '641546', '060', '01', 'KD', 'Ro Sdm Polda Sumsel', 'DIPA-060.01.2.641546/2016', '2014-11-14'),
(311, '641571', '060', '01', 'KD', 'Rosarpras Polda Sumsel', 'DIPA-060.01.2.641571/2015', '2014-11-14'),
(312, '641588', '060', '01', 'KD', 'Satbrimob Polda Sumsel', 'DIPA-060.01.2.641588/2015', '2014-11-14'),
(313, '641592', '060', '01', 'KD', 'Ditpolair Polda Sumsel', 'DIPA-060.01.2.641592/2015', '2014-11-14'),
(314, '641600', '060', '01', 'KD', 'Bidkeu Polda Sumsel', 'DIPA-060.01.2.641600/2016', '2014-11-14'),
(315, '641614', '060', '01', 'KD', 'Biddokkes Polda Sumsel', 'DIPA-060.01.2.641614/2016', '2014-11-14'),
(316, '641621', '060', '01', 'KD', 'Labfor Cab Palembang', 'DIPA-060.01.2.641621/2015', '2014-11-14'),
(317, '641635', '060', '01', 'KD', 'Polresta Palembang', 'DIPA-060.01.2.641635/2016', '2014-11-14'),
(318, '641656', '060', '01', 'KD', 'Polres Ogan Komering Ilir', 'DIPA-060.01.2.641656/2015', '2014-11-14'),
(319, '647948', '033', '01', 'KP', 'Balai Pendidikan Dan Latihan Pu Wilayah Vii Palembang', 'DIPA-033.01.1.647948/2015', '2014-11-14'),
(320, '648209', '033', '13', 'KP', 'Pelaksana Pelatihan Konstruksi Wilayah Palembang', 'DIPA-033.13.1.648209/2015', '2014-11-14'),
(321, '650112', '025', '01', 'KD', 'Kantor Kementerian Agama Kota Prabumulih', 'DIPA-025.01.2.650112/2015', '2014-11-14'),
(322, '650113', '025', '03', 'KD', 'Kantor Kementerian Agama Kota Prabumulih', 'DIPA-025.03.2.650113/2016', '2014-11-14'),
(323, '650114', '025', '04', 'KD', 'Kantor Kementerian Agama Kota Prabumulih', 'DIPA-025.04.2.650114/2016', '2014-11-14'),
(324, '650115', '025', '05', 'KD', 'Kantor Kementerian Agama Kota Prabumulih', 'DIPA-025.05.2.650115/2015', '2014-11-14'),
(325, '650116', '025', '06', 'KD', 'Kantor Kementerian Agama Kota Prabumulih', 'DIPA-025.06.2.650116/2015', '2014-11-14'),
(326, '650117', '025', '09', 'KD', 'Kantor Kementerian Agama Kota Prabumulih', 'DIPA-025.09.2.650117/2015', '2014-11-14'),
(327, '650829', '060', '01', 'KD', 'Bidpropam Polda Sumsel', 'DIPA-060.01.2.650829/2015', '2014-11-14'),
(328, '650833', '060', '01', 'KD', 'Bid Ti Polda Sumsel', 'DIPA-060.01.2.650833/2015', '2014-11-14'),
(329, '650840', '060', '01', 'KD', 'Rumkit Bhayangkara Palembang', 'DIPA-060.01.2.650840/2015', '2014-11-14'),
(330, '652190', '054', '01', 'KD', 'Badan Pusat Statistik Kota Prabumulih', 'DIPA-054.01.2.652190/2015', '2014-11-14'),
(331, '654336', '076', '01', 'KD', 'Kpu Provinsi Sumatera Selatan', 'DIPA-076.01.2.654336/2015', '2014-11-14'),
(332, '656532', '076', '01', 'KD', 'Kpu Kabupaten Ogan Komering Ilir', 'DIPA-076.01.2.656532/2015', '2014-11-14'),
(333, '656549', '076', '01', 'KD', 'Kpu Kabupaten Ogan Ilir', 'DIPA-076.01.2.656549/2015', '2014-11-14'),
(334, '656581', '076', '01', 'KD', 'Kpu Kota Palembang', 'DIPA-076.01.2.656581/2015', '2014-11-14'),
(335, '656617', '076', '01', 'KD', 'Kpu Kota Prabumulih', 'DIPA-076.01.2.656617/2015', '2014-11-14'),
(336, '663211', '005', '01', 'KD', 'Pengadilan Militer I - 04 Di Palembang', 'DIPA-005.01.2.663211/2015', '2014-11-14'),
(337, '663212', '005', '05', 'KD', 'Pengadilan Militer I - 04 Di Palembang', 'DIPA-005.05.2.663212/2015', '2014-11-14'),
(338, '665285', '060', '01', 'KD', 'Polres Prabumulih', 'DIPA-060.01.2.665285/2015', '2014-11-14'),
(339, '665311', '060', '01', 'KD', 'Polres Ogan Ilir', 'DIPA-060.01.2.665311/2016', '2014-11-14'),
(340, '667222', '054', '01', 'KD', 'Badan Pusat Statistik Kab. Ogan Ilir', 'DIPA-054.01.2.667222/2015', '2014-11-14'),
(341, '668266', '042', '01', 'KP', 'Balai Agrotechnopark', 'DIPA-042.01.1.668266/2015', '2014-11-14'),
(342, '669062', '056', '01', 'KD', 'Kantor Pertanahan Kab. Ogan Ilir, Sumatra Selatan', 'DIPA-056.01.2.669062/2015', '2014-11-14'),
(343, '669254', '060', '01', 'KD', 'Ditresnarkoba Polda Sumsel', 'DIPA-060.01.2.669254/2016', '2014-11-14'),
(344, '672952', '005', '01', 'KD', 'Pengadilan Negeri Prabumulih', 'DIPA-005.01.2.672952/2015', '2014-11-14'),
(345, '672953', '005', '03', 'KD', 'Pengadilan Negeri Prabumulih', 'DIPA-005.03.2.672953/2015', '2014-11-14'),
(346, '675094', '025', '04', 'KD', 'Madrasah Aliyah Negeri Mesuji Raya', 'DIPA-025.04.2.675094/2016', '2014-11-14'),
(347, '678359', '060', '01', 'KD', 'Itwasda Polda Sumsel', 'DIPA-060.01.2.678359/2015', '2014-11-14'),
(348, '678363', '060', '01', 'KD', 'Rorena Polda Sumsel', 'DIPA-060.01.2.678363/2015', '2014-11-14'),
(349, '678370', '060', '01', 'KD', 'Ditbinmas Polda Sumsel', 'DIPA-060.01.2.678370/2015', '2014-11-14'),
(350, '679482', '060', '01', 'KD', 'Ditreskrimsus Polda Sumatera Selatan', 'DIPA-060.01.2.679482/2015', '2014-11-14'),
(351, '679499', '060', '01', 'KD', 'Ditpamobvit Polda Sumatera Selatan', 'DIPA-060.01.2.679499/2015', '2014-11-14'),
(352, '681312', '025', '04', 'KD', 'Madrasah Aliyah Negeri Mesuji', 'DIPA-025.04.2.681312/2016', '2014-11-14'),
(353, '682562', '066', '01', 'KD', 'Badan Narkotika Nasional Provinsi Sumatera Selatan', 'DIPA-066.01.2.682562/2015', '2014-11-14'),
(354, '683593', '013', '05', 'KD', 'Lapas Kelas Iii Kayu Agung Propinsi Sumatera Selatan', 'DIPA-013.05.2.683593/2016', '2014-11-14'),
(355, '683996', '013', '05', 'KD', 'Lapas Narkotika Kelas III Palembang', 'DIPA-013.05.2.683996/2015', '2014-11-14'),
(356, '685695', '012', '22', 'KP', 'Denmadam Ii/Swj (It,Sintel,Sops,Spers,Slog, Ster,Sren, Puskodalopsdam, Setum Dam Ii/Swj)', 'DIPA-012.22.1.685695/2015', '2014-11-14'),
(357, '685742', '012', '22', 'KP', 'Zidam-Ii/Swj', 'DIPA-012.22.1.685742/2015', '2014-11-14'),
(358, '685759', '012', '22', 'KP', 'Bekangdam-Ii/Swj', 'DIPA-012.22.1.685759/2015', '2014-11-14'),
(359, '685763', '012', '22', 'KP', 'Paldam-Ii/Swj', 'DIPA-012.22.1.685763/2015', '2014-11-14'),
(360, '685770', '012', '22', 'KP', 'Hubdam-Ii/Swj', 'DIPA-012.22.1.685770/2015', '2014-11-14'),
(361, '685784', '012', '22', 'KP', 'Kesdam-Ii/Swj', 'DIPA-012.22.1.685784/2015', '2014-11-14'),
(362, '685873', '012', '22', 'KP', 'Rindam-Ii/Swj', 'DIPA-012.22.1.685873/2015', '2014-11-14'),
(363, '685916', '012', '22', 'KP', 'Korem 044/Gapo Dam-Ii/Swj', 'DIPA-012.22.1.685916/2015', '2014-11-14'),
(364, '686250', '115', '01', 'KD', 'Sekretariat Bawaslu Provinsi Sumatera Selatan', 'DIPA-115.01.2.686250/2016', '2014-11-14'),
(365, '689490', '066', '01', 'KD', 'Badan Narkotika Nasional Kota Prabumulih', 'DIPA-066.01.2.689490/2015', '2014-11-14'),
(366, '700147', '116', '01', 'KD', 'Rri Palembang', 'DIPA-116.01.2.700147/2015', '2014-11-14'),
(367, '700235', '117', '01', 'KD', 'Tvri Stasiun Sumatera Selatan', 'DIPA-117.01.2.700235/2015', '2014-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `no` int(11) NOT NULL,
  `kode_satker` varchar(10) NOT NULL,
  `es_1` varchar(5) NOT NULL,
  `uraian_satker` varchar(100) NOT NULL,
  `nama_rekanan` varchar(30) NOT NULL,
  `no_CAN` int(10) NOT NULL,
  `no_kontrak` varchar(30) NOT NULL,
  `tgl_akhir_kontrak` date NOT NULL,
  `nama_penjamin_bank_asuransi` varchar(20) NOT NULL,
  `no_jaminan` varchar(20) NOT NULL,
  `tgl_jaminan` date NOT NULL,
  `tgl_akhir_jaminan` date NOT NULL,
  `nilai_bank_garansi` int(20) NOT NULL,
  `masa_berlaku_bank_garansi` varchar(30) NOT NULL,
  `no_SPM` varchar(10) NOT NULL,
  `nama_petugas_satker` varchar(30) NOT NULL,
  `nip_petugas_satker` varchar(20) NOT NULL,
  `no_hp_petugas_satker` varchar(15) NOT NULL,
  `tgl_tanda_terima` date NOT NULL,
  `username` varchar(10) NOT NULL,
  `checklist1` tinyint(1) DEFAULT NULL,
  `checklist2` tinyint(1) DEFAULT NULL,
  `checklist3` tinyint(1) DEFAULT NULL,
  `checklist4` tinyint(1) DEFAULT NULL,
  `checklist5` tinyint(1) DEFAULT NULL,
  `checklist6` int(11) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `tgl_pencairan` date NOT NULL,
  `nilai_pencairan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`no`, `kode_satker`, `es_1`, `uraian_satker`, `nama_rekanan`, `no_CAN`, `no_kontrak`, `tgl_akhir_kontrak`, `nama_penjamin_bank_asuransi`, `no_jaminan`, `tgl_jaminan`, `tgl_akhir_jaminan`, `nilai_bank_garansi`, `masa_berlaku_bank_garansi`, `no_SPM`, `nama_petugas_satker`, `nip_petugas_satker`, `no_hp_petugas_satker`, `tgl_tanda_terima`, `username`, `checklist1`, `checklist2`, `checklist3`, `checklist4`, `checklist5`, `checklist6`, `status`, `tgl_pencairan`, `nilai_pencairan`) VALUES
(3, '406381', '', 'Lembaga Pemasyarakatan Tanjung Raja', 'a', 123123, '123123', '1996-09-28', '1231231', '5646456234', '1996-09-18', '1996-09-18', 1231231, '2312312312', '231231231', '12312', '123', '123123', '1970-01-01', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-01-01', '123123123'),
(12, '007102', '', 'Kejaksaan Tinggi Sumatera Selatan', 'PT Angin Ribut', 12312, '5464456456', '1996-09-28', '123123123', '123563452347', '1996-09-28', '1996-09-28', 1231, '123', '231231231', '123', '23', '123', '1996-09-28', 'admin', 1, 1, 1, 1, 1, NULL, 2, '2017-01-18', '400900212'),
(13, '007102', '', 'Kejaksaan Tinggi Sumatera Selatan', 'PT Angin Ribut', 12312, '5464456456', '1996-09-28', '123123123', '1238674565476', '1996-09-28', '1996-09-28', 1231, '123', '231231231', '123', '23', '123', '1996-09-28', 'admin', 1, 1, 1, 1, 1, NULL, 0, '2017-01-01', '123123123'),
(14, '406381', '', 'Lembaga Pemasyarakatan Tanjung Raja', 'PT Angin Ribut', 123123, '22222', '1996-09-28', '123', '5456456456', '2017-01-01', '2017-01-20', 1231231, '123', '231231231', 'Idruanisa', '09210921092', '123123', '1996-09-28', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-01-18', '902323134'),
(15, '406381', '', 'Lembaga Pemasyarakatan Tanjung Raja', 'PT Angin Ribut', 12312, '123', '2017-01-14', 'ricardo', '28282828', '2017-01-11', '2017-01-10', 123, '123', '123', 'Abdul', '0909', '121212', '2017-01-16', 'admin', 1, 1, 1, NULL, NULL, NULL, 2, '2017-01-18', '400900212'),
(16, '472112', '', 'Perencanaan Dan Pengawasan Jalan Nasional Provinsi Sumatera Selatan', 'PT. ANUGRAH KRIDAPRADANA', 16000025, 'HK.02.03/22.P25/S-', '2017-01-18', 'Bank Mandiri', 'MBG774025611616', '2016-12-22', '2017-01-18', 460549643, '10-12-2016 - 31-12-2016', '00283', 'IDRUSANI', '0989789789', '085357381218', '2017-01-18', 'admin', 1, 1, 1, 1, 1, NULL, 0, '2017-01-18', '902323134'),
(17, '472112', '', 'Perencanaan Dan Pengawasan Jalan Nasional Provinsi Sumatera Selatan', 'PT. ANUGRAH KRIDAPRADANA', 16000025, 'HK.02.03/22.P25/S', '2017-01-31', 'Bank Mandiri', 'MBG774025611677', '2017-01-20', '2017-01-31', 460549643, '20-01-2017 s.d 30-01-2017', '00283', 'IDRUSANI', '0989789789', '085357381218', '1970-01-01', 'front', 1, 1, 1, 1, 1, NULL, 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `kementerian`
--

CREATE TABLE `kementerian` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kementerian`
--

INSERT INTO `kementerian` (`kode`, `nama`) VALUES
('001', 'Majelis Permusyawaratan Rakyat Republik Indonesia'),
('002', 'Dewan Perwakilan Rakyat Republik Indonesia'),
('004', 'Badan Pemeriksa Keuangan Republik Indonesia'),
('005', 'Mahkamah Agung Republik Indonesia'),
('006', 'Kejaksaan Republik Indonesia'),
('007', 'Kementerian Sekretariat Negara'),
('010', 'Kementerian Dalam Negeri'),
('011', 'Kementerian Luar Negeri'),
('012', 'Kementerian Pertahanan'),
('013', 'Kementerian Hukum dan Hak Asasi Manusia'),
('015', 'Kementerian Keuangan'),
('018', 'Kementerian Pertanian'),
('019', 'Kementerian Perindustrian'),
('020', 'Kementerian Energi dan Sumber Daya Mineral'),
('022', 'Kementerian Perhubungan'),
('023', 'Kementerian Pendidikan Nasional'),
('024', 'Kementerian Kesehatan'),
('025', 'Kementerian Agama'),
('026', 'Kementerian Tenaga Kerja dan Transmigrasi'),
('027', 'Kementerian Sosial'),
('029', 'Kementerian Kehutanan'),
('032', 'Kementerian Kelautan dan Perikanan'),
('033', 'Kementerian Pekerjaan Umum'),
('034', 'Kementerian Koordinator Bidang Politik, Hukum dan '),
('035', 'Kementerian Koordinator Bidang Perekonomian'),
('036', 'Kementerian Koordinator Bidang Kesejahteraan Rakya'),
('040', 'Kementerian Kebudayaan dan Pariwisata'),
('041', 'Kementerian Badan Usaha Milik Negara'),
('042', 'Kementerian Riset dan Teknologi'),
('043', 'Kementerian Lingkungan Hidup'),
('044', 'Kementerian Koperasi dan Pengusaha Kecil dan Menen'),
('047', 'Kementerian Pemberdayaan Perempuan dan Perlindunga'),
('048', 'Kementerian Pendayagunaan Aparatur Negara dan Refo'),
('050', 'Badan Intelijen Negara'),
('051', 'Lembaga Sandi Negara'),
('052', 'Dewan Ketahanan Nasional'),
('054', 'Badan Pusat Statistik'),
('055', 'Kementerian Perencanaan Pembangunan Nasional/Badan'),
('056', 'Badan Pertanahan Nasional'),
('057', 'Perpustakaan Nasional Republik Indonesia'),
('059', 'Kementerian Komunikasi dan Informatika'),
('060', 'Kepolisian Negara Republik Indonesia'),
('063', 'Badan Pengawasan Obat dan Makanan'),
('064', 'Lembaga Ketahanan Nasional'),
('065', 'Badan Koordinasi Penanaman Modal'),
('066', 'Badan Narkotika Nasional'),
('067', 'Kementerian Pembangunan Daerah Tertinggal'),
('068', 'Badan Kependudukan dan Keluarga Berencana Nasional'),
('074', 'Komisi Nasional Hak Asasi Manusia'),
('075', 'Badan Meteorologi, Klimatologi dan Geofisika '),
('076', 'Komisi Pemilihan Umum'),
('077', 'Mahkamah Konstitusi Republik Indonesia'),
('078', 'Pusat Pelaporan dan Analisis Transaksi Keuangan'),
('079', 'Lembaga Ilmu Pengetahuan Indonesia'),
('080', 'Badan Tenaga Nuklir Nasional'),
('081', 'Badan Pengkajian dan Penerapan Teknologi'),
('082', 'Lembaga Penerbangan dan Antariksa Nasional'),
('083', 'Badan Koordinasi Survei dan Pemetaan Nasional'),
('084', 'Badan Standardisasi Nasional'),
('085', 'Badan Pengawas Tenaga Nuklir'),
('086', 'Lembaga Administrasi Negara'),
('087', 'Arsip Nasional Republik Indonesia'),
('088', 'Badan Kepegawaian Negara'),
('089', 'Badan Pengawasan Keuangan dan Pembangunan'),
('090', 'Kementerian Perdagangan'),
('091', 'Kementerian Perumahan Rakyat'),
('092', 'Kementerian Pemuda dan Olahraga '),
('093', 'Komisi Pemberantasan Korupsi'),
('095', 'Dewan Perwakilan Daerah '),
('100', 'Komisi Yudisial Republik Indonesia'),
('103', 'Badan Nasional Penanggulangan Bencana'),
('104', 'Badan Nasional Penempatan dan Perlindungan Tenaga '),
('105', 'Badan Penanggulangan Lumpur Sidoarjo'),
('106', 'Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah'),
('107', 'Badan SAR Nasional'),
('108', 'Komisi Pengawasan Persaingan Usaha'),
('109', 'Badan Pengembangan Wilayah Suramadu'),
('110', 'Ombudsman Republik Indonesia'),
('111', 'Badan Nasional Pengelola Perbatasan '),
('112', 'Badan Pengusahaan Kawasan Perdagangan Bebas dan Pe'),
('113', 'Badan Nasional Penanggulangan Terorisme');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `logged_in` tinyint(1) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `nip`, `logged_in`, `level`) VALUES
(7, 'front', 'front', 'FO', '09090', 1, 3),
(10, 'front2', 'front2', 'front2', '129129', 0, 3),
(9, 'middle', 'middle', 'Fulan', '121212', 0, 2),
(3, 'superuser', 'admin', 'Admin', '1', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasatker`
--
ALTER TABLE `datasatker`
  ADD PRIMARY KEY (`kode_satker`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `kemen` (`kemen`),
  ADD KEY `kode_satker_2` (`kode_satker`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`no`),
  ADD KEY `kode_satker` (`kode_satker`),
  ADD KEY `username` (`username`),
  ADD KEY `no_jaminan` (`no_jaminan`);

--
-- Indexes for table `kementerian`
--
ALTER TABLE `kementerian`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `datasatker`
--
ALTER TABLE `datasatker`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
