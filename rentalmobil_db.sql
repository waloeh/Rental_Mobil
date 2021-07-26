-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2021 pada 03.57
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
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`id_driver`, `nama_driver`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `gambar`, `status`) VALUES
(1, 'Agus', 'laki-laki', 'Cileungsi', '08211908876', 'e@gmail.com', 'es_jeruk.jpg', 1),
(2, 'Dinda', 'perempuan', 'Cianjur', '0831110310381', 'dinda@gmail.com', 'jerawat.png', 1),
(3, 'ytytyt', 'laki-laki', 'frt', 'frtrt', '', 'buku1.jpg', 1),
(6, 'ww', 'laki-laki', 'ee', '88888', '', '', 0),
(7, 'hh', 'laki-laki', 'hhh', '777', '', '', 0),
(8, 'yy', 'perempuan', 'yyy', '777', '', 'bm.jpg', 0),
(9, 'ff', 'perempuan', 'vfff', '777', '', 'es jeruk.jpg', 0),
(10, 'tttttttt', 'perempuan', 'ttttttt', '888888', '', '1.png', 0),
(11, 'jjjjJJJ', 'laki-laki', 'JJJJJJJ', '0000', '', 'buku2.jpg', 0),
(12, 'hadi', 'laki-laki', 'cianjur', '98', '', 'hadi.jpg', 0),
(13, 's', 'laki-laki', 's', '33', 'e@gmail.com', '24.png', 1);

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
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nama_kendaraan`, `jenis_kendaraan`, `no_polisi`, `harga_sewa`, `tahun_pembuatan`, `tgl_ganti_oli`, `tgl_ganti_ban`, `tgl_service`, `tgl_bayar_pajak`, `gambar`, `status`) VALUES
(1, 'Hiba Utama tes', 'sedan', 'B 1234 TAH tes', '3000000 0', '2021-06-30', '2021-06-04', '2021-06-30', '2021-07-08', '2021-06-11', 'bakso.jpeg', 'siap'),
(2, 'Omon', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'default.png', 'siap'),
(3, 'Tesi', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'default.png', 'siap'),
(4, 'Sanubari', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'default.png', 'service'),
(5, 'HAmdan att', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'default.png', 'jalan'),
(6, 'gg', '', 'ooo', '000', '2021-08-06', '2021-07-10', '2021-07-30', '2021-07-16', '2021-07-15', 'catur.jpg', 'jalan'),
(7, 'hhh', '', 'jj', 'jjj', '2021-07-23', '2021-07-09', '2021-07-22', '2021-07-22', '2021-07-09', 'catur.jpg', 'siap'),
(8, 't', '', '2', '3', '2021-08-06', '2021-07-10', '2021-07-22', '2021-07-14', '2021-07-14', 'buku2.jpg', 'service');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `status` varchar(15) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tgl_input`, `status`, `keterangan`, `nominal`, `id_transaksi`, `id_user`, `id_kendaraan`) VALUES
(1, '2021-06-16 00:00:00', 'pemasukan', 'beli oli untuk mobil hiba', '150000', 0, 1, 1),
(2, '2021-07-12 00:00:00', 'pengeluaran', 'ganti ban ', '13000000', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `keperluan` varchar(128) NOT NULL,
  `bus_dikirim` varchar(128) NOT NULL,
  `tempat_tujuan` varchar(128) NOT NULL,
  `tgl_berangkat` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `uang_muka` varchar(20) NOT NULL,
  `sisa_pembayaran` varchar(20) NOT NULL,
  `komisi_driver` varchar(20) NOT NULL,
  `komisi_kernek` varchar(20) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `nama_pemesan`, `alamat`, `keperluan`, `bus_dikirim`, `tempat_tujuan`, `tgl_berangkat`, `tgl_kembali`, `total_harga`, `uang_muka`, `sisa_pembayaran`, `komisi_driver`, `komisi_kernek`, `id_driver`, `id_kendaraan`, `id_user`) VALUES
(1, '2021-06-08 02:12:09', 'Fajar', 'Kp. Gandoang Rt.007 Rw. 009 Des. Sukaragam Ke. Serang Baru - Bekasi', 'Ziarah', 'Kp. Gandoang Rt.007 Rw. 009 Des. Sukaragam Ke. Serang Baru - Bekasi', 'Kp. Pogor Rt.007 Rw. 009 Des. Sukaragam Ke. Serang Baru - Bandung', '2021-06-16 00:00:00', '2021-06-19 00:00:00', '30000000', '25000000', '5000000', '300000', '150000', 1, 1, 1);

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
  `password` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `jenis_kelamin`, `email`, `no_hp`, `username`, `password`, `gambar`) VALUES
(6, 't', 't', 'perempuan', 't@gmail.com', 't', 't', '$2y$10$VPthLuUcMpxVaEpoCoaCYO7u8TOmfx0Cx.xay820KYqg2m6gOeO0m', 'bm.jpg');

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
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

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
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
