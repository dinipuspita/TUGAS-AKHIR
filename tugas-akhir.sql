-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 04:42 AM
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
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `kode_pos`, `alamat`, `no_telepon`) VALUES
(1, 'DESA JUNREJO', 65314, 'Jl.Tamrinn', '460603'),
(2, 'DESA BEJI', 65314, 'Jl.Raya Beji 73', '596852'),
(5, 'KELURAHAN DADAPREJO', 65314, 'Jl.Martorejo 10', '460817'),
(6, 'DESA MOJOREJO', 65314, 'Jl.Raya Mojorejo 76 Batu', '531377'),
(7, 'DESA PENDEM', 65314, 'Jl.Raya Caru 7 Batu', '531180'),
(8, 'DESA TLEKUNG', 65314, 'Jl.Raya Tlekung 197 Batu', '590396'),
(9, 'DESA TORONGREJO', 65314, 'Jl.Wukir Retawu Batu', '596765');

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
(1, 'Raskin', 2),
(2, 'PKH', 1),
(3, 'Indonesia Sehat', 1),
(4, 'Bpjs', 2);

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
  `NIK` int(11) NOT NULL,
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
  `jlm_perahumotor` int(11) NOT NULL,
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
  `NIK` int(11) NOT NULL,
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

--
-- Dumping data for table `keterangan_perumahan`
--

INSERT INTO `keterangan_perumahan` (`id_ket_perumahan`, `NIK`, `status_bangunan`, `status_lahan`, `luas_lantai`, `jenis_lantai_terluas`, `jenis_dinding_terluas`, `kondisi_dinding`, `jenis_atap`, `kondisi_atap`, `jumlah_kamar`, `sumber_air_minum`, `kode_pelanggan_air`, `cara_memperoleh_air`, `sumber_penerangan`, `daya_terpasang`, `id_pln`, `bahan_bakar_memasak`, `id_pelanggan_gas`, `fasilitas_bab`, `jenis_kloset`, `tempat_PAT`) VALUES
(1, 3, '2.Kontrak/Sewa', '1.Milik Sendiri', '1000', '01.Marmer/Granit', '2.Plesteran/Anyaman Bambu/Kawat', '1.Bagus/Kualitas Tinggi', '01.Beton/Genteng Beton', '1.Bagus/Kualitas Tinggi', 2, '02.Air Isi Ulang', 'PAM-90', '1.Membeli Eceran', '2Listrik Non PLN', '2.900 watt', '1888', '1.Listrik', 'PGN-123', '2.Bersama', '1.Leher Angsa', '1.Tangki');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_sosial_ekonomi`
--

CREATE TABLE `keterangan_sosial_ekonomi` (
  `id_sosial_eko` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
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

--
-- Dumping data for table `keterangan_sosial_ekonomi`
--

INSERT INTO `keterangan_sosial_ekonomi` (`id_sosial_eko`, `NIK`, `NO_KK`, `jenis_cacat`, `penyakit_kronis`, `partisipasi_sekolah`, `jenjang_pendidikan`, `hub_kepala_keluarga`, `ijazah_tertinggi`, `kelas_tertinggi`, `lapangan_usaha`, `status_kedudukan`, `KKS`, `KIS`, `KIP`, `RASKIN`, `pendapatan`, `tanggungan_keluarga`, `kelengkapan_dokumen`) VALUES
(1, 98667890, 98667890, '0.Tidak Cacat', '0.Tidak Ada', '0.Tidak/Belum Pernah Sekolah', '10.Perguruan Tinggi', '3.Anak', '4.D1/D2/D3', '3', '15.Informasi & Komunikasi', '3.PNS/TNI/Polri/BUMN/BUMD/Anggota Legislatif', 'Tidak', '0', '0', '0', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bantuan`
--

CREATE TABLE `kriteria_bantuan` (
  `id_kriteria` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `isi_kriteria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `id_desa`, `username`, `password`, `level`, `email`) VALUES
(1, 1, 'dinsos', '845388911209126f2566e2edeedcbc45', '1', 'dinassosial@gmail.com'),
(2, 1, 'junrejo', 'aec477d7dacf40552155423f170de310', '2', 'desa.junrejo@gmail.com'),
(7, 6, 'mojorejo', '69eae64401fe415bd42fd6d20c4adc0e', '2', 'mojorejo@gmail.com'),
(8, 8, 'tlekung', '3938bc98aa245a8673f9c0002f286551', '2', 'tlekung@gmail.com'),
(9, 7, 'pendem', '00dde71d344adcbcbd0a531b9640d337', '2', 'pendem@gmail.com'),
(10, 5, 'dadaprejo', '7fdc0f54ce46cfcb27aa326653d7c24d', '2', 'dadaprejo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` int(11) NOT NULL,
  `NO_KK` varchar(30) NOT NULL,
  `nama_penduduk` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` text NOT NULL,
  `status` text NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `RT` varchar(10) NOT NULL,
  `RW` varchar(10) NOT NULL,
  `pekerjaan` text NOT NULL,
  `usia` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK`, `NO_KK`, `nama_penduduk`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status`, `kewarganegaraan`, `alamat`, `RT`, `RW`, `pekerjaan`, `usia`, `id_desa`) VALUES
(3, '0978556777777', 'Andi Pradana', 'malang', '2006-12-01', 'Perempuan', 'Islam', 'Belum Menikah', 'wni', '', '01', '04', 'Tidak/Belum Bekerja', 20, 1),
(98667890, '0978556777777', 'Dini Puspita Sari', 'malang', '1998-05-25', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', '', '03', '01', 'Tidak/Belum Bekerja', 20, 1),
(98667898, '0978556777779', 'siska', 'Batu', '0000-00-00', 'Perempuan', 'Islam', 'Belum Menikah', 'WNI', '', '09', '08', 'Tidak/Belum Bekerja', 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengenalan_tempat`
--

CREATE TABLE `pengenalan_tempat` (
  `id_pengenalan_tempat` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
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
  `id_surat` varchar(10) NOT NULL,
  `NIK` int(11) NOT NULL,
  `id_kepala_desa` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `NIK`, `id_kepala_desa`, `tanggal_surat`, `keterangan`) VALUES
('104', 98667898, 7, '2019-03-27', 'Untuk Melanjutkan Biaya Keringanan BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_bantuan`
--

CREATE TABLE `transaksi_bantuan` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
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
  ADD KEY `id_bantuan` (`id_bantuan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `id_desa` (`id_desa`);

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
  ADD KEY `NIK` (`NIK`),
  ADD KEY `surat_ibfk_3` (`id_kepala_desa`);

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
  MODIFY `id_jenis_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_ket_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keterangan_sosial_ekonomi`
--
ALTER TABLE `keterangan_sosial_ekonomi`
  MODIFY `id_sosial_eko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kriteria_bantuan`
--
ALTER TABLE `kriteria_bantuan`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  MODIFY `id_pengenalan_tempat` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `kriteria_bantuan_ibfk_1` FOREIGN KEY (`id_bantuan`) REFERENCES `jenis_bantuan` (`id_jenis_bantuan`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Constraints for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  ADD CONSTRAINT `pengenalan_tempat_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_3` FOREIGN KEY (`id_kepala_desa`) REFERENCES `kepala_desa` (`id_kepala_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_ibfk_5` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

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
