-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 07:19 AM
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
(9, 'DESA TORONGREJO', 65314, 'Jl.Wukir Retawu Batu', '596765', 'Terdaftar');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bantuan`
--

CREATE TABLE `jenis_bantuan` (
  `id_jenis_bantuan` int(11) NOT NULL,
  `nama_bantuan` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_bantuan`
--

INSERT INTO `jenis_bantuan` (`id_jenis_bantuan`, `nama_bantuan`, `id_kategori`) VALUES
(6, 'Kartu Indonesia Pintar (KIP)', 2),
(7, 'RASKIN', 2),
(8, 'Kartu Keluarga Sejahtera (KKS)', 1),
(9, 'Kartu Indonesia Sehat (KIS)', 1);

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
(2, 'Bantuan Langsung Tunai');

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
(7, 5, 'Budi Harsono S', '', ''),
(8, 2, 'KUKUK KUSBIANTO', '2014', '2020');

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
  `jml_kambing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_pengesahan`
--

CREATE TABLE `keterangan_pengesahan` (
  `id_pengesahan` int(11) NOT NULL,
  `tanggal_verivali` date NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `hasil_verivali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_perumahan`
--

CREATE TABLE `keterangan_perumahan` (
  `id_ket_perumahan` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `status_bangunan` text NOT NULL,
  `status_lahan` text NOT NULL,
  `luas_lantai` text NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_sosial_ekonomi`
--

CREATE TABLE `keterangan_sosial_ekonomi` (
  `id_sosial_eko` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `NO_KK` int(11) NOT NULL,
  `jenis_cacat` text NOT NULL,
  `penyakit_kronis` text NOT NULL,
  `partisipasi_sekolah` text NOT NULL,
  `jenjang_pendidikan` text NOT NULL,
  `hub_kepala_keluarga` text NOT NULL,
  `ijazah_tertinggi` text NOT NULL,
  `kelas_tertinggi` text NOT NULL,
  `lapangan_usaha` text NOT NULL,
  `status_kedudukan` text NOT NULL,
  `KKS` text NOT NULL,
  `KIS` text NOT NULL,
  `KIP` text NOT NULL,
  `RASKIN` text NOT NULL,
  `pendapatan` varchar(50) NOT NULL,
  `tanggungan_keluarga` int(11) NOT NULL,
  `kelengkapan_dokumen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bantuan`
--

CREATE TABLE `kriteria_bantuan` (
  `id_kriteria` int(11) NOT NULL,
  `id_jenis_bantuan` int(11) NOT NULL,
  `isi_kriteria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_bantuan`
--

INSERT INTO `kriteria_bantuan` (`id_kriteria`, `id_jenis_bantuan`, `isi_kriteria`) VALUES
(1, 6, 'Mempunyai Anak Bersekolah Dengan Usia 7 s/d 12 Tahun Keatas');

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
  `email` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `id_desa`, `username`, `password`, `level`, `email`, `no_telp`) VALUES
(1, 1, 'dinsos', '845388911209126f2566e2edeedcbc45', '1', 'dinassosial@gmail.com', 0),
(2, 1, 'junrejo', 'aec477d7dacf40552155423f170de310', '2', 'desa.junrejo@gmail.com', 0),
(7, 6, 'mojorejo', '69eae64401fe415bd42fd6d20c4adc0e', '2', 'mojorejo@gmail.com', 0),
(9, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com', 0),
(10, 5, 'dadaprejo', '7fdc0f54ce46cfcb27aa326653d7c24d', '2', 'dadaprejo@gmail.com', 0),
(11, 2, 'beji', '16467297b544fe96f6ca4ff57304cc0f', '2', 'beji_batu@gmail.com', 3415645),
(12, 6, 'mojorejo', '69eae64401fe415bd42fd6d20c4adc0e', '2', 'mojorejo@gmail.com', 3415647),
(13, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com', 3415621),
(17, 8, 'tlekung', '3938bc98aa245a8673f9c0002f286551', '2', 'tlekung@gmail.com', 3415645),
(18, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com', 0),
(19, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com', 0),
(20, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com', 0),
(21, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com', 0),
(22, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com', 0),
(23, 8, 'tlekung', '3938bc98aa245a8673f9c0002f286551', '2', 'tlekung@gmail.com', 3415645),
(24, 8, 'tlekung', '3938bc98aa245a8673f9c0002f286551', '2', 'tlekung@gmail.com', 3415645),
(25, 8, 'tlekung', '3938bc98aa245a8673f9c0002f286551', '2', 'tlekung@gmail.com', 3415645),
(26, 9, 'torongrejo', '97cce5cdb3db719406f4fec082291ca2', '2', 'torongrejo@gmail.com', 3415645);

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
(6, 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` varchar(16) NOT NULL,
  `NO_KK` varchar(30) NOT NULL,
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
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK`, `NO_KK`, `nama_penduduk`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status`, `kewarganegaraan`, `alamat`, `RT`, `RW`, `id_pekerjaan`, `usia`, `id_desa`) VALUES
('3517152608970001', '3717152608970002', 'Dini Puspita Sari', 'Malang', '2017-12-19', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 10', '003', '003', 1, 1, 1),
('3517152608970002', '3717152608970004', 'Puri Handayani', 'Jombang', '2019-02-06', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 20', '09', '01', 1, 0, 1),
('3517152608970090', '3717152608970002', 'Ananda Putri', 'Malang', '1999-06-15', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', 'Jl.Martorejo 201', '03', '04', 1, 19, 1);

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
  `no_urut_rt` int(11) NOT NULL,
  `nama_krt` varchar(50) NOT NULL,
  `jumlah_ART` int(11) NOT NULL,
  `jumlah_keluarga` int(11) NOT NULL,
  `no_kk_setiap_ART` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(10) NOT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status_surat` enum('Diterima','Menunggu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `NIK`, `tanggal_surat`, `keterangan`, `status_surat`) VALUES
(101, '3517152608970090', '2019-04-08', 'RS A', 'Diterima'),
(102, '3517152608970090', '2019-04-08', 'Untuk Melanjutkan Biaya Keringanan BPJS Cakra Husada', 'Diterima'),
(103, '3517152608970001', '2019-04-08', 'Untuk Melanjutkan Biaya Keringanan BPJS Cakra Husada', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_bantuan`
--

CREATE TABLE `transaksi_bantuan` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `id_pengesahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id_pengesahan`);

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
-- Indexes for table `kriteria_bantuan`
--
ALTER TABLE `kriteria_bantuan`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_bantuan` (`id_jenis_bantuan`);

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
  ADD KEY `id_bantuan` (`id_bantuan`),
  ADD KEY `id_pengesahan` (`id_pengesahan`),
  ADD KEY `NIK` (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  MODIFY `id_jenis_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_bantuan`
--
ALTER TABLE `kategori_bantuan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  MODIFY `id_kepala_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kepemilikan_aset`
--
ALTER TABLE `kepemilikan_aset`
  MODIFY `id_kepemilikan_aset` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan_pengesahan`
--
ALTER TABLE `keterangan_pengesahan`
  MODIFY `id_pengesahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan_perumahan`
--
ALTER TABLE `keterangan_perumahan`
  MODIFY `id_ket_perumahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan_sosial_ekonomi`
--
ALTER TABLE `keterangan_sosial_ekonomi`
  MODIFY `id_sosial_eko` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria_bantuan`
--
ALTER TABLE `kriteria_bantuan`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  MODIFY `id_pengenalan_tempat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  ADD CONSTRAINT `jenis_bantuan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_bantuan` (`id_kategori`);

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
-- Constraints for table `kriteria_bantuan`
--
ALTER TABLE `kriteria_bantuan`
  ADD CONSTRAINT `kriteria_bantuan_ibfk_1` FOREIGN KEY (`id_jenis_bantuan`) REFERENCES `jenis_bantuan` (`id_jenis_bantuan`);

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
  ADD CONSTRAINT `transaksi_bantuan_ibfk_1` FOREIGN KEY (`id_bantuan`) REFERENCES `jenis_bantuan` (`id_jenis_bantuan`),
  ADD CONSTRAINT `transaksi_bantuan_ibfk_3` FOREIGN KEY (`id_pengesahan`) REFERENCES `keterangan_pengesahan` (`id_pengesahan`),
  ADD CONSTRAINT `transaksi_bantuan_ibfk_4` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
