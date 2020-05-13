-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2020 pada 06.38
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shoesstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id`, `order_id`, `produk`, `qty`, `harga`) VALUES
(1, 1, 2, 1, '6250000'),
(2, 2, 1, 4, '3500000'),
(3, 4, 1, 1, '3500000'),
(4, 5, 20, 2, '100000'),
(5, 5, 18, 1, '400000'),
(6, 5, 19, 1, '600000'),
(7, 6, 18, 1, '400000'),
(8, 6, 19, 1, '600000'),
(9, 6, 20, 1, '100000'),
(10, 8, 19, 2, '600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Sneakers'),
(2, 'Boots'),
(3, 'Slip-On Casual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `tanggal`, `pelanggan`) VALUES
(1, '2020-05-08', 1),
(2, '2020-05-08', 2),
(3, '2020-05-08', 3),
(4, '2020-05-08', 4),
(5, '2020-05-13', 5),
(6, '2020-05-13', 6),
(7, '2020-05-13', 7),
(8, '2020-05-13', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `email`, `alamat`, `telp`) VALUES
(1, 'asdsad', 'ccahyaeka@dsadsad.com', 'asdsad', 'asdsad'),
(2, 'asdsad', 'cahyaekapermana@gmail.com', 'asdsa', 'asdsad'),
(3, 'asdsad', 'cahyaekapermana@gmail.com', 'asdsa', 'asdsad'),
(4, 'asdsad', 'cahyaekapermana@gmail.com', 'asdsad', 'asdsad'),
(5, 'Cahya', 'cahyaekapermana2@gmail.com', 'Jl.Teluk Kendah', '0123213123'),
(6, 'Cahya', 'cahyaekapermana2@gmail.com', 'Jl.Teluk Kendah', '0123213123'),
(7, 'Cahya', 'cahyaekapermana2@gmail.com', 'Jl.Teluk Kendah', '0123213123'),
(8, 'Cahya', 'cahyaekapermana2@gmail.com', 'Jl.Teluk Kendah', '0123213123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`, `timestamp`) VALUES
(18, 'Sneaker Compas Trendy', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '400000', '37250901-1.jpg', 1, '2020-05-13 02:19:49'),
(19, 'Boots Trendy Uy', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '600000', 'Luthor-Tan-02.jpg', 2, '2020-05-13 02:40:23'),
(20, 'Slip On Trendy', 'Lorem ipsum dolor sit amet, consectetur adipiscing', '100000', 'b05a190105332a5927fa85df61c083eb.jpg', 3, '2020-05-13 02:09:02'),
(21, 'Sepatu Baru', 'Ini New ', '10000', 'b05a190105332a5927fa85df61c083eb1.jpg', 2, '2020-05-13 04:37:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_article`
--

CREATE TABLE `tb_article` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_article`
--

INSERT INTO `tb_article` (`id`, `gambar`, `judul`, `deskripsi`) VALUES
(44, 'compass_compass-gazelle-low-sneaker-pria---navy-white_full03.jpg', 'Compas Burning ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum risus non iaculis interdum. Ut consectetur tortor in metus hendrerit vehicula. Cras ullamcorper, magna in cursus ullamcorper, lacus lacus varius diam, tincidunt sagittis quam purus sit amet tellus. Pellentesque vehicula turpis erat, quis sollicitudin leo imperdiet eu. Nulla rhoncus pellentesque laoreet.'),
(46, '37250901-1.jpg', 'Harbonilas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum risus non iaculis interdum. Ut consectetur tortor in metus hendrerit vehicula. Cras ullamcorper, magna in cursus ullamcorper, lacus lacus varius diam, tincidunt sagittis quam purus sit amet tellus. Pellentesque vehicula turpis erat, quis sollicitudin leo imperdiet eu. Nulla rhoncus pellentesque laoreet.'),
(47, 'pavillion_pavillion-sneakers-sepatu-pria--800-390-_full13.jpg', 'Habis Gelap ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum risus non iaculis interdum. Ut consectetur tortor in metus hendrerit vehicula. Cras ullamcorper, magna in cursus ullamcorper, lacus lacus varius diam, tincidunt sagittis quam purus sit amet tellus. Pellentesque vehicula turpis erat, quis sollicitudin leo imperdiet eu. Nulla rhoncus pellentesque laoreet.'),
(48, 'compass_compass-gazelle-low-sneaker-pria---navy-white_full031.jpg', 'Bismillah ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum risus non iaculis interdum. Ut consectetur tortor in metus hendrerit vehicula. Cras ullamcorper, magna in cursus ullamcorper, lacus lacus varius diam, tincidunt sagittis quam purus sit amet tellus. Pellentesque vehicula turpis erat, quis sollicitudin leo imperdiet eu. Nulla rhoncus pellentesque laoreet.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama_lengkap`, `email`, `level`, `created_at`) VALUES
(1, 'cahya', '7513810474271763d6f8f0c999466094', '', '', 'Customer', '2020-04-30 04:07:50'),
(2, 'yayan', 'ccbf0a5c0f14f09a68076c4804296a62', '', '', 'Admin', '2020-04-30 04:07:50'),
(6, 'aris', '288077f055be4fadc3804a69422dd4f8', 'Aris Asu', 'aris@gmail.com', 'Admin', '2020-04-30 04:07:50'),
(7, 'subhi', 'dec04f12cbbfb084a0e7cc6483d7c20f', 'Subhi ', 'subhi@gmail.com', 'Admin', '2020-04-30 04:07:50'),
(8, 'cahya', '79ee82b17dfb837b1be94a6827fa395a', 'ascsadsa', 'asdsad', 'Admin', '2020-04-30 04:07:50'),
(9, 'Shafira', '2ec4b0bdf35a294f7b42496e0a19ceea', 'Shafira', 'Shafira', 'Admin', '2020-04-30 04:07:50'),
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Cahya', 'assacsacasc@gmail.com', 'Admin', '2020-04-30 04:07:50'),
(11, 'ccc', '9df62e693988eb4e1e1444ece0578579', 'bbbjjh', 'iiuiu', 'Admin', '2020-05-02 13:59:55'),
(12, 'Cahya Eka', '202cb962ac59075b964b07152d234b70', 'CahyaGanteng', 'asdasdda', 'Admin', '2020-05-04 02:12:54'),
(13, 'cahya', '202cb962ac59075b964b07152d234b70', 'cahyaekaaa', 'asdsadasd', 'Admin', '2020-05-04 02:13:37'),
(14, 'cahya', '202cb962ac59075b964b07152d234b70', 'cahyaekaaa', 'asdsadasd', 'Admin', '2020-05-04 02:13:37'),
(15, 'cahyaeka', '202cb962ac59075b964b07152d234b70', 'asdsad', 'asdsad', 'Admin', '2020-05-04 02:14:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_article`
--
ALTER TABLE `tb_article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_article`
--
ALTER TABLE `tb_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
