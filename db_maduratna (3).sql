-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2021 pada 17.45
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_maduratna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_appoinment`
--

CREATE TABLE `tb_appoinment` (
  `id_appoinment` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_jam` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_appoinment`
--

INSERT INTO `tb_appoinment` (`id_appoinment`, `nama`, `notelp`, `email`, `tanggal`, `id_jam`, `id_service`) VALUES
('MDR004', 'Eka Laksmana', '4564646', 'crincekronis@gmail.com', '2021-03-05', 9, 2),
('MDR005', 'Trip Bocil', '089635208686', 'wahyuscpta13@gmail.com', '2021-03-09', 1, 2),
('MDR006', 'Wahyu Sucipta', '089635208686', 'admin@gmail.com', '2021-03-09', 4, 2),
('MDR007', 'Yusa', '089635208686', 'wahyuscpta13@gmail.com', '2021-03-10', 11, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id_jam` int(11) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jam`
--

INSERT INTO `tb_jam` (`id_jam`, `jam`, `kategori`) VALUES
(1, '09.00', 'AM'),
(4, '10.00', 'AM'),
(5, '11.00', 'AM'),
(6, '01.00', 'PM'),
(7, '02.00', 'PM'),
(8, '03.00', 'PM'),
(9, '04.00', 'PM'),
(10, '05.00', 'PM'),
(11, '07.00', 'PM'),
(12, '08.00', 'PM'),
(13, '09.00', 'PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `email`, `pesan`, `status`) VALUES
(3, 'Trip Bocil', 'tripbocil@gmail.com', 'Murah, nyaman, dan layanannya lengkap serta hasil potongannya selalu pas dan sesuai ekspetasi. Rasanya Beda dari tempat lain.\r\n', 1),
(4, 'Johm Andreas', 'johnandreas@gmail.com', 'Staffnya ramah dan enak untuk diajak komunikasi dan menyesuaikan apa yang kita mau. Dan says sudah berlangganan 3 bulan dan tidak pernah kecewa dengan pelayanannya,', 1),
(5, 'Peter Jamerson', 'peterjemerson@gmail.com', 'Cocok Guntingannya, saya sudah menjadi pelanggan sejak Maduratna Barber Shop pertama kali buka. Tinggal datang, duduk, pulang. Sangat menyenangkan potong rambut disini.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `desc_produk` text NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `fitur_1` varchar(50) NOT NULL,
  `fitur_2` varchar(50) NOT NULL,
  `fitur_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `desc_produk`, `harga`, `gambar`, `fitur_1`, `fitur_2`, `fitur_3`) VALUES
(4, 'Maduratna Hairspray', 'Maduratna Hair Serum adalah sebuah produk inovasi dalam dunia styling rambut pria. Membentuk rambut sesuai keinginan dan mempertahankan kerapian model rambut Anda sepanjang hari.Rambut yang ditata tidak mudah berubah.', '35000', '6041c509b03b1.jpg', 'Styling dengan cepat dan mudah', 'Mudah Disisir', 'Menjaga kelembaban rambut'),
(5, 'Oil Based Pomade', 'Maduratna Oil Based Pomade merupakan Produk penata rambut yang diperuntukan bagi kalian yang suka dengan penampilan rambut yang terlihat natural, dengan Hold yang kuat, mudah diatur dan dapat membantu memberikan tekstur serta volume pada rambut', '50000', '6041c51112620.jpg', 'Cocok untuk semua jenis rambut', 'Mudah disisir ulang', 'Mengandung Aloe Vera'),
(6, 'Maduratna Hair Serum', 'Maduratna Hair Serum adalah sebuah produk inovasi dalam dunia styling rambut pria. Dengan kandungan ALOE VERA dapat membuat rambut anda tetap sehat. Memberikan TEKSTUR pada rambut dan membuat rambut lebih mengembang sepanjang hari.', '75000', '6041c51c777c9.jpg', 'Mengandung Aloe Vera', 'Mudah Digunakan', 'Tidak mengandung bahan kimia'),
(12, 'HAIR SHAVER KNIFE', 'Bagi para pria yang setiap hari mencukur jenggot dan kumis wajib untuk memiliki pisau cukur lipat ini. Anda dapat mencukur jenggot dengan lebih rapi seperti layaknya pencukur profesional di salon dan tempat pangkas rambut. Gagang yang nyaman dan mata silet yang tajam membuat mencukur lebih mudah.  SPECIALS FEATURES :', '35000', '6041c5237ddbb.jpg', 'Berbahan Stainless Stell', 'Nyaman digenggam', 'Mudah dibawa kemanapun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `desc_staff` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `nama`, `job`, `desc_staff`, `gambar`) VALUES
(1, 'John Alexander', 'Professional Barber', 'Jangan ragu untuk datang kepada saya. Dengan pengalaman dan skill yang saya miliki tentunya menjadi jaminan bahwa anda akan puas melihat hasillnya. So, tunggu apa lagi saya tunggu kedatangan anda di Maduratna Barbershop.', '604609188086a.jpg'),
(3, 'Steffan Julle', 'Professional Barber', 'Passion saya adalah mencukur. Seni saya adalah mencukur. Jadi anda tidak salah datang kepada saya karena tidak akan membiarkan customer kecewa. Percayakan kepada kami untuk semua permasalahan rambut anda.', '6046091fb4e38.jpg'),
(4, 'Alexunder Bryan', 'Professional Barber', 'Sangat bangga bisa bergabung dengan Team Maduratna Barber Shop. Menurut saya memotong rambut adalah seni dan kanvas saya adalah rambut customer. Jadi saya siap memberikan pelayanan yang terbaik untuk kepuasan anda.', '6046092652210.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD PRIMARY KEY (`id_appoinment`),
  ADD KEY `id_jam` (`id_jam`),
  ADD KEY `id_service` (`id_service`);

--
-- Indeks untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD CONSTRAINT `tb_appoinment_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `tb_service` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
