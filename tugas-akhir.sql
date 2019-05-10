-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 09:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas-akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `status_akun` enum('Terdaftar','Belum Terdaftar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `kode_pos`, `alamat`, `no_telepon`, `status_akun`) VALUES
(1, 'DESA JUNREJO', 65314, 'Jl.Tamrinn', '460603', 'Terdaftar'),
(2, 'DESA BEJI', 65314, 'Jl.Raya Beji 73', '596852', 'Terdaftar'),
(5, 'KELURAHAN DADAPREJO', 65314, 'Jl.Martorejo 10', '460817', 'Terdaftar'),
(6, 'DESA MOJOREJO', 65314, 'Jl.Raya Mojorejo 76 Batu', '531377', 'Terdaftar'),
(7, 'DESA PENDEM', 65314, 'Jl.Raya Caru 7 Batu', '531180', 'Terdaftar'),
(8, 'DESA TLEKUNG', 65314, 'Jl.Raya Tlekung 197 Batu', '590396', 'Terdaftar'),
(9, 'DESA TORONGREJO', 65314, 'Jl.Wukir Retawu Batu', '596765', 'Terdaftar'),
(10, 'Ploso', 653145, 'ploso', '596851', 'Terdaftar'),
(11, 'Kenangan', 97, 'daun', '0009', 'Terdaftar');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bantuan`
--

CREATE TABLE `jenis_bantuan` (
  `id_jenis_bantuan` int(11) NOT NULL,
  `nama_bantuan` varchar(50) NOT NULL,
  `keterangan_bantuan` varchar(225) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_bantuan`
--

INSERT INTO `jenis_bantuan` (`id_jenis_bantuan`, `nama_bantuan`, `keterangan_bantuan`, `id_kategori`) VALUES
(863, 'Kartu Indonesia Pintar (KIP)', 'Bersekolah, Usia Anak 7 s/d 18 Tahun, Mempunyai Surat Keterangan Kurang Mampu', 1),
(864, 'Kartu Indonesia Sehat (KIS)', 'Penduduk Kurang Mampu yang Mempunyai Surat Keterangan Kurang Mampu', 1),
(865, 'Kartu keluarga Sejahtera (KKS)', 'Mempunyai Surat Keterangan Kurang Mampu, Usia 45 s/d 74 Tahun', 1),
(866, 'RASKIN', 'Mempunyai Surat Keterangan Kurang Mampu, Usia Penerima 75 s/d 90 Tahun', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bantuan`
--

CREATE TABLE `kategori_bantuan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_bantuan`
--

INSERT INTO `kategori_bantuan` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bantuan Non Tunai'),
(3, 'Bantuan Langsung Tunai');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_desa`
--

CREATE TABLE `kepala_desa` (
  `id_kepala_desa` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `nama_kepala_desa` varchar(50) NOT NULL,
  `jabatan_mulai` varchar(50) NOT NULL,
  `jabatan_selesai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala_desa`
--

INSERT INTO `kepala_desa` (`id_kepala_desa`, `id_desa`, `nama_kepala_desa`, `jabatan_mulai`, `jabatan_selesai`) VALUES
(7, 1, 'Budi Harsono S', '2014', '2020'),
(8, 10, 'KUKUK KUSBIANTO', '2014', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan_aset`
--

CREATE TABLE `kepemilikan_aset` (
  `id_kepemilikan_aset` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `jml_tabung_gas` int(11) NOT NULL,
  `jml_AC` int(11) NOT NULL,
  `jml_pemanas_air` int(11) NOT NULL,
  `jml_telepon_rumah` int(11) NOT NULL,
  `jml_televisi` int(11) NOT NULL,
  `jml_emas` int(11) NOT NULL,
  `jml_komputer` int(11) NOT NULL,
  `jml_sepeda` int(11) NOT NULL,
  `jml_spdmotor` int(11) NOT NULL,
  `jml_mobil` int(11) NOT NULL,
  `jml_perahu` int(11) NOT NULL,
  `jml_motor_tempel` int(11) NOT NULL,
  `jml_perahumotor` int(11) NOT NULL,
  `jml_kapal` int(11) NOT NULL,
  `jml_lahan` int(11) NOT NULL,
  `jml_rumahlain` int(11) NOT NULL,
  `jml_sapi` int(11) NOT NULL,
  `jml_kerbau` int(11) NOT NULL,
  `jml_kuda` int(11) NOT NULL,
  `jml_babi` int(11) NOT NULL,
  `jml_kambing` int(11) NOT NULL,
  `pendapatan` varchar(50) NOT NULL,
  `tanggungan_keluarga` int(11) NOT NULL,
  `kelengkapan_dokumen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepemilikan_aset`
--

INSERT INTO `kepemilikan_aset` (`id_kepemilikan_aset`, `NIK`, `jml_tabung_gas`, `jml_AC`, `jml_pemanas_air`, `jml_telepon_rumah`, `jml_televisi`, `jml_emas`, `jml_komputer`, `jml_sepeda`, `jml_spdmotor`, `jml_mobil`, `jml_perahu`, `jml_motor_tempel`, `jml_perahumotor`, `jml_kapal`, `jml_lahan`, `jml_rumahlain`, `jml_sapi`, `jml_kerbau`, `jml_kuda`, `jml_babi`, `jml_kambing`, `pendapatan`, `tanggungan_keluarga`, `kelengkapan_dokumen`) VALUES
(8, '3517152608970003', 1, 1, 1, 11, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 1, 1, 1, 1, 1, '1200000', 6, 'Lengkap'),
(10, '3517152608970013', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, '1200000', 6, 'Lengkap'),
(11, '3517152608970003', 1, 1, 1, 11, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 6, 1, 1, 1, 1, 1, 1, '1200000', 4, 'Lengkap'),
(12, '3517152608970043', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 0, '1500000', 3, 'Lengkap'),
(13, '3517152608970043', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, '1500000', 3, 'Lengkap'),
(14, '3517152608970010', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 8, 1, 1, 1, 1, 1, 1, '1500000', 3, 'Lengkap'),
(17, '3517152608970001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, '1200000', 0, 'Surat Keterangan Rt/Rw Tidak A'),
(18, '3517152608970002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '1200000', 3, 'Surat Keterangan Rt/Rw Tidak A'),
(19, '3517152608970001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '1200000', 2, 'Surat Keterangan Rt/Rw Tidak A'),
(20, '3517152608970001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '1200000', 2, 'Surat Keterangan Rt/Rw Tidak A'),
(21, '3517152608970001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '1200000', 2, 'Surat Keterangan Rt/Rw Tidak A'),
(22, '3517152608970002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '1200000', 3, 'Surat Keterangan Rt/Rw Tidak A'),
(23, '3517152608970010', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 1, 1, 1, 1, 1, '3000000', 2, 'KTP Tidak Ada'),
(24, '3517152608970002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '3000000', 3, 'Lengkap'),
(25, '3517152608970006', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, '3000000', 2, 'Surat Keterangan Rt/Rw Tidak A'),
(26, '3517152608970002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, '1200000', 3, 'Surat Keterangan Rt/Rw Tidak A'),
(27, '3517152608970010', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 1, 1, 1, 1, 1, '1000000', 2, 'Lengkap'),
(28, '3517152608970006', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, '1000000', 2, 'Lengkap'),
(29, '3517152608970010', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 1, 1, 1, 1, 1, '1000000', 2, 'Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_pengesahan`
--

CREATE TABLE `keterangan_pengesahan` (
  `id_pengesahan` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `tanggal_verivali` date NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `hasil_verivali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan_pengesahan`
--

INSERT INTO `keterangan_pengesahan` (`id_pengesahan`, `NIK`, `tanggal_verivali`, `nama_petugas`, `tanggal_pemeriksaan`, `hasil_verivali`) VALUES
(1, '3517152608970013', '2019-04-09', 'Dyah Indah', '2019-04-18', '2.Rumah Tangga Tidak Dtemukan'),
(2, '3517152608970003', '2019-04-26', 'Dyah Indah', '2019-04-16', '3.Rumah Tangga/Bangunan Sensus Sudah Tidak Ada<'),
(3, '3517152608970010', '2019-04-10', 'Dyah Indah', '2019-04-16', '1.Selesai Verivali'),
(4, '3517152608970010', '2019-05-16', 'Dyah Indah', '2019-04-30', '1.Selesai Verivali'),
(5, '3517152608970010', '2019-05-16', 'Dyah Indah', '2019-04-30', '1.Selesai Verivali'),
(6, '3517152608970010', '2019-05-16', 'Dyah Indah', '2019-04-30', '1.Selesai Verivali'),
(7, '3517152608970010', '2019-05-16', 'Dyah Indah', '2019-04-30', '1.Selesai Verivali'),
(8, '3517152608970010', '2019-05-14', 'Dyah Indah', '2019-05-15', '1.Selesai Verivali'),
(9, '3517152608970010', '2019-05-14', 'Dyah Indah', '2019-05-07', '2.Rumah Tangga Tidak Dtemukan'),
(10, '3517152608970010', '2019-05-14', 'Dyah Indah', '2019-05-07', '2.Rumah Tangga Tidak Dtemukan'),
(11, '3517152608970010', '2019-05-14', 'Dyah Indah', '2019-05-07', '2.Rumah Tangga Tidak Dtemukan'),
(12, '3517152608970010', '2019-05-01', 'Dyah Indah', '2019-05-11', '1.Selesai Verivali');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_perumahan`
--

CREATE TABLE `keterangan_perumahan` (
  `id_ket_perumahan` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `status_bangunan` text NOT NULL,
  `status_lahan` text NOT NULL,
  `luas_lantai` int(11) NOT NULL,
  `jenis_lantai_terluas` text NOT NULL,
  `jenis_dinding_terluas` text NOT NULL,
  `kondisi_dinding` text NOT NULL,
  `jenis_atap` text NOT NULL,
  `kondisi_atap` text NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `sumber_air_minum` text NOT NULL,
  `kode_pelanggan_air` varchar(50) NOT NULL,
  `cara_memperoleh_air` text NOT NULL,
  `sumber_penerangan` text NOT NULL,
  `daya_terpasang` text NOT NULL,
  `id_pln` varchar(50) NOT NULL,
  `bahan_bakar_memasak` text NOT NULL,
  `id_pelanggan_gas` varchar(50) NOT NULL,
  `fasilitas_bab` text NOT NULL,
  `jenis_kloset` text NOT NULL,
  `tempat_PAT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan_perumahan`
--

INSERT INTO `keterangan_perumahan` (`id_ket_perumahan`, `NIK`, `status_bangunan`, `status_lahan`, `luas_lantai`, `jenis_lantai_terluas`, `jenis_dinding_terluas`, `kondisi_dinding`, `jenis_atap`, `kondisi_atap`, `jumlah_kamar`, `sumber_air_minum`, `kode_pelanggan_air`, `cara_memperoleh_air`, `sumber_penerangan`, `daya_terpasang`, `id_pln`, `bahan_bakar_memasak`, `id_pelanggan_gas`, `fasilitas_bab`, `jenis_kloset`, `tempat_PAT`) VALUES
(1, '3517152608970002', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '1.Listrik', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(2, '3517152608970002', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '1.Listrik', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(3, '3517152608970006', '2.Kontrak/Sewa', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(4, '3517152608970006', '2.Kontrak/Sewa', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(5, '3517152608970006', '2.Kontrak/Sewa', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(6, '3517152608970006', '2.Kontrak/Sewa', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(7, '3517152608970006', '2.Kontrak/Sewa', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(8, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '2.SPAL'),
(9, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '2.SPAL'),
(10, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '02.Keramik', '1.Tembok', '2.Jelek/Kualitas Rendah', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '1.Listrik', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(11, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(12, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(13, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(14, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(15, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(16, '3517152608970001', '2.Kontrak/Sewa', '2.Kontrak/Sewa', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '02.Genteng Keramik', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '1.Listrik', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(17, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '1.Listrik', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(18, '3517152608970001', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '03.Genteng Metal', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '2. 900watt', '1888', '1.Listrik', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(19, '3517152608970002', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '2.Listrik Non PLN', '2. 900watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '2.Plengsengan', '2.SPAL'),
(20, '3517152608970003', '2.Kontrak/Sewa', '2.Kontrak/Sewa', 1000, '02.Keramik', '2.Plesteran/Anyaman Bambu/Kawat', '2.Jelek/Kualitas Rendah', '02.Genteng Keramik', '2.Jelek/Kualitas Rendah', 4, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '2. 900watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(21, '3517152608970013', '2.Kontrak/Sewa', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '2.Plesteran/Anyaman Bambu/Kawat', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '2.Jelek/Kualitas Rendah', 2, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '2. 900watt', '1888', '1.Listrik', 'PGN-123', '2.Bersama', '1.Leher Angsa', '1.Tangki'),
(22, '3517152608970003', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '2.Listrik Non PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '2.Plengsengan', '2.SPAL'),
(23, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '2.Listrik Non PLN', '2. 900watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(24, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(25, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(26, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(27, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(28, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '02.Genteng Keramik', '1.Bagus/Kualitas Tinggi', 2, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '2. 900watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '1.Leher Angsa', '1.Tangki'),
(29, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 1, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '2.Listrik Non PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '2.Plengsengan', '2.SPAL'),
(30, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 1, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '2.Listrik Non PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '2.Plengsengan', '2.SPAL'),
(31, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 1, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '2.Listrik Non PLN', '1. 450watt', '1888', '2.Gas > 3 kg', 'PGN-123', '1.Sendiri', '2.Plengsengan', '2.SPAL'),
(32, '3517152608970010', '1.Milik Sendiri', '1.Milik Sendiri', 1000, '01.Marmer/Granit', '1.Tembok', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '01.Air Kemasan Bermerk', 'PAM-90', '1.Membeli Eceran', '1.Listrik PLN', '2. 900watt', '1888', '2.Gas > 3 kg', 'PGN-123', '2.Bersama', '2.Plengsengan', '1.Tangki');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_sosial_ekonomi`
--

CREATE TABLE `keterangan_sosial_ekonomi` (
  `id_sosial_eko` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `NO_KK` varchar(20) NOT NULL,
  `jenis_cacat` text NOT NULL,
  `penyakit_kronis` text NOT NULL,
  `jenjang_pendidikan` text NOT NULL,
  `hub_kepala_keluarga` text NOT NULL,
  `lapangan_usaha` text NOT NULL,
  `status_kedudukan` text NOT NULL,
  `KKS` text NOT NULL,
  `KIS` text NOT NULL,
  `KIP` text NOT NULL,
  `RASKIN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan_sosial_ekonomi`
--

INSERT INTO `keterangan_sosial_ekonomi` (`id_sosial_eko`, `NIK`, `NO_KK`, `jenis_cacat`, `penyakit_kronis`, `jenjang_pendidikan`, `hub_kepala_keluarga`, `lapangan_usaha`, `status_kedudukan`, `KKS`, `KIS`, `KIP`, `RASKIN`) VALUES
(1, '3517152608970013', '', '01.Tuna Daksa/Cacat Tubuh', '0.Tidak Ada', '01.SD/SDLB', '1.Kepala Rumah Tangga', '1.Pertanian', '1.Berusaha Sendiri', 'Ya', 'Ya', 'Ya', 'Ya'),
(2, '3517152608970003', '', '01.Tuna Daksa/Cacat Tubuh', '1.Hipertensi ( Tekanan Darah Tinggi)', '01.SD/SDLB', '2.Istri/Suami', '1.Pertanian', '1.Berusaha Sendiri', 'Ya', 'Ya', 'Ya', 'Ya'),
(3, '3517152608970010', '', '01.Tuna Daksa/Cacat Tubuh', '0.Tidak Ada', '01.SD/SDLB', '1.Kepala Rumah Tangga', '1.Pertanian', '1.Berusaha Sendiri', 'Ya', 'Ya', 'Ya', 'Ya'),
(5, '3517152608970010', '1017152608970089', '0.Tidak Cacat', '0.Tidak Ada', 'Tamat SMP / Sederajat', 'Kepala Rumah Tangga', '1.Pertanian', '1.Berusaha Sendiri', 'Ya', 'Ya', 'Ya', 'Ya'),
(6, '3517152608970010', '1017152608970089', '0.Tidak Cacat', '1.Hipertensi ( Tekanan Darah Tinggi)', 'Tamat SMP / Sederajat', 'Kepala Rumah Tangga', '2.Holtikultura', '1.Berusaha Sendiri', 'Tidak', 'Tidak', 'Tidak', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `id_desa`, `username`, `password`, `level`, `email`) VALUES
(1, 1, 'dinsos', '845388911209126f2566e2edeedcbc45', '1', 'dinassosial@gmail.com'),
(2, 1, 'junrejo', 'aec477d7dacf40552155423f170de310', '2', 'junrejobatu@gmail.com'),
(7, 6, 'mojorejo', '69eae64401fe415bd42fd6d20c4adc0e', '2', 'mojorejo@gmail.com'),
(8, 10, 'ploso', '63ad7860966fb09d380a6637b760b958', '2', 'ploso');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'Guru'),
(2, 'Petani'),
(3, 'Nelayan'),
(4, 'Buruh Tani'),
(5, 'Wiraswasta'),
(6, 'PNS'),
(7, 'Nelayan');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` varchar(16) NOT NULL,
  `NO_KK` varchar(20) NOT NULL,
  `nama_penduduk` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` text NOT NULL,
  `status` text NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `RT` varchar(10) NOT NULL,
  `RW` varchar(10) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `status_hubungan_keluarga` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pendidikan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK`, `NO_KK`, `nama_penduduk`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status`, `kewarganegaraan`, `alamat`, `RT`, `RW`, `id_pekerjaan`, `usia`, `id_desa`, `status_hubungan_keluarga`, `nama_ayah`, `nama_ibu`, `pendidikan`) VALUES
('3517152608970001', '3717152608970002', 'Dini Puspita Sari', 'Malang', '2017-12-19', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 10', '003', '003', 1, 7, 1, '', '', '', ''),
('3517152608970002', '3717152608970004', 'Puri Handayani', 'Jombang', '2019-02-06', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 20', '09', '01', 1, 0, 1, '', '', '', ''),
('3517152608970003', '3717152608970004', 'Siska Rahmadina', 'Batu', '2014-06-17', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 201', '005', '005', 5, 90, 1, '', '', '', ''),
('3517152608970006', '3717152608970003', 'Zahkiyah Fermania', 'Batu', '2013-05-14', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 20', '01', '01', 5, 5, 1, '', '', '', ''),
('3517152608970008', '3717152608970003', 'Nurizal Febryan', 'Batu', '2016-06-07', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Mawar No.59', '08', '09', 2, 90, 1, '', '', '', ''),
('3517152608970010', '1017152608970089', 'Muhammad Ali', 'Batu', '1971-02-09', 'Laki-laki', 'Islam', 'Sudah Menikah', 'WNI', 'Jl.Junrejo Gang 10', '005', '005', 2, 45, 1, 'Kepala Rumah Tangga', 'Suharto Ishaq', 'Aminah', 'Tamat SMP / Sederajat'),
('3517152608970013', '3717152608970004', 'Andi Pradana', 'Batu', '1998-05-25', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Baturejo 10', '003', '003', 5, 20, 1, '', '', '', ''),
('3517152608970023', '1017152608970089', 'Fatimah Azzahroh', 'Malang', '1989-05-25', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Junrejo Gang 10', '005', '005', 5, 29, 1, 'Istri/Suami', 'Santoso', 'Aminah', 'Tamat SMP / Sederajat'),
('3517152608970043', '3517152608970043', 'Sasa Fatimah', 'Malang', '2007-06-10', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Junrejo Gang 10', '005', '005', 5, 90, 1, 'Anak', 'Muhammad Ali', 'Fatimah Azzahrah', 'Belum Tamat SD / Sederajat'),
('3517152608970090', '3717152608970002', 'Ananda Putri', 'Malang', '1999-06-15', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 201', '03', '05', 2, 90, 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengenalan_tempat`
--

CREATE TABLE `pengenalan_tempat` (
  `id_pengenalan_tempat` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `nama_sls` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_urut_rt` varchar(16) NOT NULL,
  `nama_krt` varchar(50) NOT NULL,
  `jumlah_ART` int(11) NOT NULL,
  `jumlah_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengenalan_tempat`
--

INSERT INTO `pengenalan_tempat` (`id_pengenalan_tempat`, `NIK`, `provinsi`, `kabupaten`, `kecamatan`, `nama_sls`, `alamat`, `no_urut_rt`, `nama_krt`, `jumlah_ART`, `jumlah_keluarga`) VALUES
(2, '3517152608970013', 'Jawa Timur', 'Batu', 'Junrejo', 'Rt 003, Rw 001', 'Malang', '2147483647', 'Budi H', 2, 4),
(3, '3517152608970003', 'Jawa Timur', 'Batu', 'Junrejo', 'Rt 003, Rw 001', 'Jl.Martorejo 10', '2147483647', 'Budi H', 2, 1),
(4, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'Rt 003, Rw 001', 'Jl.Martorejo 10', '2147483647', 'Budi H', 2, 1),
(5, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(6, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(7, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(8, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(9, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(10, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(11, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(12, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '2147483647', 'Budi H', 2, 3),
(13, '3517152608970010', 'Jawa Timur', 'Batu', 'Junrejo', 'RT 005 RW 005', 'Jl.Junrejo Gang 10', '1017152608970089', 'Budi H', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(10) NOT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status_surat` enum('Diterima','Menunggu') NOT NULL,
  `persetujuan` enum('Disetujui','Belum Disetujui') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `NIK`, `tanggal_surat`, `keterangan`, `status_surat`, `persetujuan`) VALUES
(101, '3517152608970090', '2019-04-11', 'RS B', 'Diterima', 'Disetujui'),
(122, '3517152608970006', '2019-04-11', 'Untuk R', 'Diterima', 'Disetujui'),
(126, '3517152608970013', '2019-04-19', 'Untuk BPJS C', 'Diterima', 'Disetujui'),
(130, '3517152608970010', '2019-04-25', 'Untuk BPJS di Rumah Sakit A', 'Diterima', 'Disetujui'),
(131, '3517152608970001', '2019-04-30', 'Untuk BPJS di Rumah Sakit A', 'Diterima', 'Disetujui'),
(132, '3517152608970002', '2019-05-02', 'Untuk BPJS di Rumah Sakit A', 'Diterima', 'Belum Disetujui'),
(133, '3517152608970001', '2019-05-02', 'Untuk BPJS di Rumah Sakit A', 'Diterima', 'Belum Disetujui'),
(134, '3517152608970001', '2019-05-02', 'Untuk Melanjutkan Biaya Keringanan BPJS', 'Menunggu', 'Belum Disetujui'),
(135, '3517152608970001', '2019-05-02', 'Untuk Melanjutkan Biaya Keringanan BPJS', 'Menunggu', 'Belum Disetujui'),
(136, '3517152608970002', '2019-05-02', 'Untuk BPJS C', 'Menunggu', 'Belum Disetujui'),
(137, '3517152608970010', '2019-05-02', 'Untuk BPJS C', 'Diterima', 'Belum Disetujui'),
(138, '3517152608970002', '2019-05-02', 'Untuk BPJS', 'Diterima', 'Disetujui'),
(139, '3517152608970006', '2019-05-02', 'Untuk BPJS di Rumah Sakit A', 'Diterima', 'Disetujui'),
(140, '3517152608970002', '2019-05-02', 'Untuk BPJS di Rumah Sakit A', 'Diterima', 'Belum Disetujui'),
(141, '3517152608970010', '2019-05-03', 'Untuk Melanjutkan Biaya Keringanan BPJS', 'Diterima', 'Belum Disetujui'),
(142, '3517152608970006', '2019-05-03', 'Untuk Melanjutkan Biaya Keringanan BPJS Cakra Husada', 'Diterima', 'Belum Disetujui'),
(143, '3517152608970003', '2019-05-08', 'berobat', 'Diterima', 'Disetujui'),
(144, '3517152608970010', '2019-05-10', 'Untuk BPJS P', 'Diterima', 'Belum Disetujui'),
(145, '3517152608970010', '2019-05-10', 'Untuk BPJS P', 'Diterima', 'Belum Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_bantuan`
--

CREATE TABLE `transaksi_bantuan` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_jenis_bantuan` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `id_pengesahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_bantuan`
--

INSERT INTO `transaksi_bantuan` (`id_transaksi`, `id_jenis_bantuan`, `NIK`, `id_pengesahan`) VALUES
('1', 863, '3517152608970001', 2),
('2', 864, '3517152608970002', 4),
('3', 865, '3517152608970023', 2),
('4', 863, '3517152608970010', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  ADD PRIMARY KEY (`id_jenis_bantuan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_bantuan`
--
ALTER TABLE `kategori_bantuan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  ADD PRIMARY KEY (`id_kepala_desa`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `kepemilikan_aset`
--
ALTER TABLE `kepemilikan_aset`
  ADD PRIMARY KEY (`id_kepemilikan_aset`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `keterangan_pengesahan`
--
ALTER TABLE `keterangan_pengesahan`
  ADD PRIMARY KEY (`id_pengesahan`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `keterangan_perumahan`
--
ALTER TABLE `keterangan_perumahan`
  ADD PRIMARY KEY (`id_ket_perumahan`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `keterangan_sosial_ekonomi`
--
ALTER TABLE `keterangan_sosial_ekonomi`
  ADD PRIMARY KEY (`id_sosial_eko`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `id_desa` (`id_desa`),
  ADD KEY `id_pekerjaan` (`id_pekerjaan`);

--
-- Indexes for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  ADD PRIMARY KEY (`id_pengenalan_tempat`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `transaksi_bantuan`
--
ALTER TABLE `transaksi_bantuan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_bantuan` (`id_jenis_bantuan`),
  ADD KEY `id_pengesahan` (`id_pengesahan`),
  ADD KEY `NIK` (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  MODIFY `id_jenis_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=867;

--
-- AUTO_INCREMENT for table `kategori_bantuan`
--
ALTER TABLE `kategori_bantuan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  MODIFY `id_kepala_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kepemilikan_aset`
--
ALTER TABLE `kepemilikan_aset`
  MODIFY `id_kepemilikan_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `keterangan_pengesahan`
--
ALTER TABLE `keterangan_pengesahan`
  MODIFY `id_pengesahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `keterangan_perumahan`
--
ALTER TABLE `keterangan_perumahan`
  MODIFY `id_ket_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `keterangan_sosial_ekonomi`
--
ALTER TABLE `keterangan_sosial_ekonomi`
  MODIFY `id_sosial_eko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  MODIFY `id_pengenalan_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  ADD CONSTRAINT `jenis_bantuan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_bantuan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  ADD CONSTRAINT `kepala_desa_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Constraints for table `kepemilikan_aset`
--
ALTER TABLE `kepemilikan_aset`
  ADD CONSTRAINT `kepemilikan_aset_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `keterangan_pengesahan`
--
ALTER TABLE `keterangan_pengesahan`
  ADD CONSTRAINT `keterangan_pengesahan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `keterangan_perumahan`
--
ALTER TABLE `keterangan_perumahan`
  ADD CONSTRAINT `keterangan_perumahan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `keterangan_sosial_ekonomi`
--
ALTER TABLE `keterangan_sosial_ekonomi`
  ADD CONSTRAINT `keterangan_sosial_ekonomi_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`),
  ADD CONSTRAINT `penduduk_ibfk_2` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`);

--
-- Constraints for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  ADD CONSTRAINT `pengenalan_tempat_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_4` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `transaksi_bantuan`
--
ALTER TABLE `transaksi_bantuan`
  ADD CONSTRAINT `transaksi_bantuan_ibfk_1` FOREIGN KEY (`id_jenis_bantuan`) REFERENCES `jenis_bantuan` (`id_jenis_bantuan`),
  ADD CONSTRAINT `transaksi_bantuan_ibfk_3` FOREIGN KEY (`id_pengesahan`) REFERENCES `keterangan_pengesahan` (`id_pengesahan`),
  ADD CONSTRAINT `transaksi_bantuan_ibfk_4` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
