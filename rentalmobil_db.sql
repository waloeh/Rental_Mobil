-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2021 pada 02.50
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `nama_driver` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat_driver` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar_driver` varchar(128) NOT NULL,
  `status_driver` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`id_driver`, `nama_driver`, `jenis_kelamin`, `alamat_driver`, `no_hp`, `email`, `gambar_driver`, `status_driver`) VALUES
(14, 'Ujang m', 'laki-laki', 'Perum. Megaregency blok FK-3 No. 17 Des. Sukaragam Kec. Serang Baru - Bekasi', '09211098879', 'ujang@gmail.com', 'catur.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `harga_sewa` varchar(20) NOT NULL,
  `tahun_pembuatan` date NOT NULL,
  `tgl_ganti_oli` date NOT NULL,
  `tgl_ganti_ban` date NOT NULL,
  `tgl_service` date NOT NULL,
  `tgl_bayar_pajak` date NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `status_kendaraan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nama_kendaraan`, `jenis_kendaraan`, `no_polisi`, `harga_sewa`, `tahun_pembuatan`, `tgl_ganti_oli`, `tgl_ganti_ban`, `tgl_service`, `tgl_bayar_pajak`, `gambar`, `status_kendaraan`) VALUES
(9, 'KOSUB', 'bus', 'F 988784 YZA', '3200000', '2010-06-30', '2021-12-30', '2021-12-31', '2021-12-30', '2022-05-31', 'hiba.jpg', 'siap'),
(10, 'Budiman', 'bus', 'B 76886 TYH', '1200000', '2015-06-24', '2021-07-29', '2021-07-16', '2021-07-21', '2021-07-22', 'hiba1.jpg', 'siap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `pelunasan` int(11) NOT NULL,
  `id_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `tgl_input`, `id_transaksi`, `uang_muka`, `pelunasan`, `id_pelanggan`) VALUES
(14, '2021-07-30', 31, 1000000, 0, 'KOSUB000001'),
(25, '2021-07-30', 31, 0, 3000000, 'KOSUB000001'),
(26, '2021-07-30', 32, 2, 0, 'KOSUB000032'),
(27, '2021-07-30', 33, 3, 0, 'KOSUB000032'),
(28, '2021-07-31', 34, 500000, 0, 'KOSUB000032'),
(29, '2021-08-01', 35, 11, 0, 'KOSUB000035'),
(30, '2021-08-01', 36, 3, 0, 'KOSUB000001'),
(31, '2021-08-02', 37, 9, 0, 'KOSUB000001'),
(32, '2021-08-02', 38, 55, 0, 'KOSUB000001'),
(33, '2021-08-02', 39, 0, 0, 'KOSUB000001'),
(34, '2021-08-02', 40, 400000, 0, 'KOSUB000001'),
(35, '2021-08-02', 41, 300000, 0, 'KOSUB000041'),
(36, '2021-08-02', 42, 400000, 0, 'KOSUB000001'),
(37, '2021-08-02', 43, 1000000, 0, 'KOSUB000043'),
(38, '2021-08-02', 44, 1000000, 0, 'KOSUB000044'),
(39, '2021-08-02', 45, 3000000, 0, 'KOSUB000045'),
(40, '2021-08-02', 46, 7000000, 0, 'KOSUB000046');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tgl_input`, `keterangan`, `nominal`, `id_user`) VALUES
(16, '2021-08-02', 'beli nasi', '100000', 0),
(17, '2021-08-02', 'ganti ban', '500000', 0),
(18, '2021-08-02', 'komisi sopir', '100', 0),
(19, '2021-08-02', 'komisi kernek', '50', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` varchar(20) NOT NULL,
  `tgl_transaksi` varchar(20) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `keperluan` varchar(128) NOT NULL,
  `jml_bus` int(11) NOT NULL,
  `bus_dikirim` varchar(128) NOT NULL,
  `tempat_tujuan` varchar(128) NOT NULL,
  `tgl_berangkat` varchar(20) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `sisa_pembayaran` int(11) NOT NULL,
  `pelunasan` int(11) NOT NULL,
  `uang_jalan` int(11) NOT NULL,
  `komisi_driver` int(11) NOT NULL,
  `komisi_kernek` int(11) NOT NULL,
  `nama_kernek` varchar(50) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `nama_pemesan`, `alamat`, `no_tlp`, `keperluan`, `jml_bus`, `bus_dikirim`, `tempat_tujuan`, `tgl_berangkat`, `jam`, `tgl_kembali`, `total_harga`, `uang_muka`, `sisa_pembayaran`, `pelunasan`, `uang_jalan`, `komisi_driver`, `komisi_kernek`, `nama_kernek`, `id_driver`, `id_kendaraan`, `id_user`, `status`) VALUES
(42, 'KOSUB000001', '02-08-2021 11:25:24', 'Ust. Mustofa', 'Kp. Perum Rengas Dengklok Wanaherang', '081288218128', 'Berziarah', 1, 'Wanaherang', 'Cirebon', '2021-08-06', '06:00', '2021-08-06', 7000000, 400000, 6600000, 0, 300000, 500000, 300000, 'rudi', 14, 9, 0, 0),
(43, 'KOSUB000043', '02-08-2021 11:31:41', 'Ustaj H. Aminah', 'Kp. Tapos Cimanggis', '08323', 'wisata', 1, 'cileungsi', 'kota wisata', '2021-06-05', '04:30', '2021-08-11', 7000000, 1000000, 6000000, 0, 50000, 100000, 50000, 'maman', 14, 9, 0, 0),
(44, 'KOSUB000044', '02-08-2021 11:33:46', 'Bpk Triyono', 'cileungsi', '02832638', 'wisata', 1, 'bogor', 'bogor', '2021-08-02', '09:00', '2021-08-11', 1500000, 1000000, 500000, 0, 50000, 100000, 50000, 'abduh', 14, 9, 0, 0),
(45, 'KOSUB000045', '02-08-2021 11:35:11', 'Bpk. enah', 'cimanggis', '087857', 'wisata', 1, 'jogja', 'jogja', '2021-08-05', '06:00', '2021-08-05', 7000000, 3000000, 4000000, 0, 50000, 100000, 50000, 'amin', 14, 9, 0, 0),
(46, 'KOSUB000046', '02-08-2021 11:36:39', 'Krti', 'gunung putri', '0897867', 'wisata', 1, 'pacitan', 'pacitan', '2021-08-04', '06:00', '2021-08-02', 12000000, 7000000, 5000000, 0, 50000, 100000, 50000, 'imam', 14, 9, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(164) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `jenis_kelamin`, `email`, `no_hp`, `username`, `password`, `gambar`) VALUES
(6, 'admin', 'cileungsi', 'laki-laki', 'admin@gmail.com', '08766787766', 'admin', '$2y$10$Qc9VfuuQuc2U0lMXgpTBguyofDcvA9RaFVt1nZnd6H.FSP3TnPzkS', 'presentasi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
