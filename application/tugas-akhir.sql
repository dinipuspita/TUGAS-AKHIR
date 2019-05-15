-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 11:32 AM
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
(1, 'DESA JUNREJO', 65314, 'Jl.Tamrin', '460603', 'Terdaftar'),
(2, 'DESA BEJI', 65314, 'Jl.Raya Beji 73', '596852', 'Belum Terdaftar'),
(5, 'KELURAHAN DADAPREJO', 65314, 'Jl.Martorejo 10', '460817', 'Belum Terdaftar'),
(6, 'DESA MOJOREJO', 65314, 'Jl.Raya Mojorejo 76 Batu', '531377', 'Belum Terdaftar'),
(7, 'DESA PENDEM', 65314, 'Jl.Raya Caru 7 Batu', '531180', 'Belum Terdaftar'),
(8, 'DESA TLEKUNG', 65314, 'Jl.Raya Tlekung 197 Batu', '590396', 'Belum Terdaftar'),
(9, 'DESA TORONGREJO', 65314, 'Jl.Wukir Retawu Batu', '596765', 'Belum Terdaftar'),
(11, 'Ploso', 65314, 'Malang', '460603', 'Belum Terdaftar');

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
(9, 2, 'KUKUK KUSBIANTO PARMAN, SP', '2014', '2020'),
(10, 5, 'PARMAN, S.P', '2014', '2020'),
(11, 1, 'ANDI FAISAL', '2014', '2020'),
(12, 6, 'SUWARNO', '2014', '2020'),
(13, 7, 'TRI WAHYUWONO EFENDI', '2014', '2020'),
(14, 8, 'BAMBANG SUMARGO', '2014', '2020'),
(15, 9, 'SUGENG SANTOSO', '2014', '2020');

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
(8, 6, 'mojorejo', '69eae64401fe415bd42fd6d20c4adc0e', '2', 'mojorejo@gmail.com');

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
(8, 'Tidak / Belum Bekerja');

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
('3579030803780005', '3579030512070235', 'ROH JULAENI', 'Sidoarjo', '1978-03-08', 'Laki-laki', 'Islam', 'Sudah Menikah', 'Warga Negara Indonesia', 'JL MOJOAGUNG', '24', '4', 2, 41, 1, 'Kepala Rumah Tangga', 'Dino', 'Tiyem', 'Belum Tamat SMA / Sederajat'),
('3579030905110002', '3579030110120006', 'MUCHAMAD FAHMI AR\'ROSYID', 'Batu', '2011-05-11', 'Laki-laki', 'Islam', 'Belum Menikah', 'Warga Negara Indonesia', 'JL MOJOSANTRI', '1', '7', 5, 8, 1, 'Anak', 'MUHAMMAD ROFIUDIN', 'WACHDAH KHOIRIN NI\'\'MAH', 'Belum Tamat SD / Sederajat'),
('3579032009860001', '3579030110120006', 'MUHAMMAD ROFIUDIN', 'Malang', '1986-09-20', 'Laki-laki', 'Islam', 'Sudah Menikah', 'Warga Negara Indonesia', 'JL MOJOSANTRI', '1', '7', 5, 32, 1, 'Kepala Rumah Tangga', 'Tono', 'Tini', 'Tamat SMA / Sederajat'),
('3579035506820002', '3579030512070235', 'ALIFAH KHUSNUL KHOTIMAH', 'Batu', '1982-06-15', 'Perempuan', 'Islam', 'Sudah Menikah', 'Warga Negara Indonesia', 'JL MOJOAGUNG', '24', '4', 3, 36, 1, 'Istri/Suami', 'Sunar', 'Silem', 'Belum Tamat SMP / Sederajat');

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

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_bantuan`
--

CREATE TABLE `transaksi_bantuan` (
  `id_transaksi` int(11) NOT NULL,
  `id_jenis_bantuan` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL
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
  ADD KEY `kepala_desa_ibfk_1` (`id_desa`);

--
-- Indexes for table `kepemilikan_aset`
--
ALTER TABLE `kepemilikan_aset`
  ADD PRIMARY KEY (`id_kepemilikan_aset`),
  ADD KEY `kepemilikan_aset_ibfk_1` (`NIK`);

--
-- Indexes for table `keterangan_pengesahan`
--
ALTER TABLE `keterangan_pengesahan`
  ADD PRIMARY KEY (`id_pengesahan`),
  ADD KEY `keterangan_pengesahan_ibfk_1` (`NIK`);

--
-- Indexes for table `keterangan_perumahan`
--
ALTER TABLE `keterangan_perumahan`
  ADD PRIMARY KEY (`id_ket_perumahan`),
  ADD KEY `keterangan_perumahan_ibfk_1` (`NIK`);

--
-- Indexes for table `keterangan_sosial_ekonomi`
--
ALTER TABLE `keterangan_sosial_ekonomi`
  ADD PRIMARY KEY (`id_sosial_eko`),
  ADD KEY `keterangan_sosial_ekonomi_ibfk_1` (`NIK`);

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
  ADD KEY `penduduk_ibfk_1` (`id_desa`),
  ADD KEY `penduduk_ibfk_2` (`id_pekerjaan`);

--
-- Indexes for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  ADD PRIMARY KEY (`id_pengenalan_tempat`),
  ADD KEY `pengenalan_tempat_ibfk_1` (`NIK`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `surat_ibfk_4` (`NIK`);

--
-- Indexes for table `transaksi_bantuan`
--
ALTER TABLE `transaksi_bantuan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_bantuan_ibfk_1` (`id_jenis_bantuan`),
  ADD KEY `transaksi_bantuan_ibfk_2` (`NIK`);

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
  MODIFY `id_kepala_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  MODIFY `id_pengenalan_tempat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_bantuan`
--
ALTER TABLE `transaksi_bantuan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `kepala_desa_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kepemilikan_aset`
--
ALTER TABLE `kepemilikan_aset`
  ADD CONSTRAINT `kepemilikan_aset_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keterangan_pengesahan`
--
ALTER TABLE `keterangan_pengesahan`
  ADD CONSTRAINT `keterangan_pengesahan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keterangan_perumahan`
--
ALTER TABLE `keterangan_perumahan`
  ADD CONSTRAINT `keterangan_perumahan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keterangan_sosial_ekonomi`
--
ALTER TABLE `keterangan_sosial_ekonomi`
  ADD CONSTRAINT `keterangan_sosial_ekonomi_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_2` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengenalan_tempat`
--
ALTER TABLE `pengenalan_tempat`
  ADD CONSTRAINT `pengenalan_tempat_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_4` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_bantuan`
--
ALTER TABLE `transaksi_bantuan`
  ADD CONSTRAINT `transaksi_bantuan_ibfk_1` FOREIGN KEY (`id_jenis_bantuan`) REFERENCES `jenis_bantuan` (`id_jenis_bantuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_bantuan_ibfk_2` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
