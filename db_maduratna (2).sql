-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD:db_maduratna (2).sql
-- Generation Time: Mar 05, 2021 at 09:40 AM
=======
-- Generation Time: Mar 04, 2021 at 09:51 AM
>>>>>>> 3d1522ca6dfdb3ca34f862d9603fb48c5993f55d:db_maduratna (1).sql
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_appoinment`
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
-- Dumping data for table `tb_appoinment`
--

INSERT INTO `tb_appoinment` (`id_appoinment`, `nama`, `notelp`, `email`, `tanggal`, `id_jam`, `id_service`) VALUES
('MDR001', 'ASDA', '87653421', 'wahyuscpta13@gmail.com', '2021-03-05', 1, 1),
('MDR002', 'qweqwe', '453', 'qweqwe@wqe', '2021-03-05', 5, 2),
('MDR003', 'MAN HAIRCUTING', '342432', 'tripbocil@gmail.com123', '2021-03-05', 6, 2),
('MDR004', 'Eka Laksmana', '4564646', 'crincekronis@gmail.com', '2021-03-05', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id_jam` int(11) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jam`
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
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `email`, `pesan`) VALUES
(1, 'Wahyu Sucipta', 'wahyuscpta13@gmail.com', 'Mantap ANJENG'),
(3, 'Trip Bocil', 'tripbocil@gmail.com', 'Murah, nyaman, dan layanannya lengkap serta hasil potongannya selalu pas dan sesuai ekspetasi. Rasanya Beda dari tempat lain.\r\n'),
(4, 'Johm Andreas', 'johnandreas@gmail.com', 'Staffnya ramah dan enak untuk diajak komunikasi dan menyesuaikan apa yang kita mau. Dan says sudah berlangganan 3 bulan dan tidak pernah kecewa dengan pelayanannya,'),
(5, 'Peter Jamerson', 'peterjemerson@gmail.com', 'Cocok Guntingannya, saya sudah menjadi pelanggan sejak Maduratna Barber Shop pertama kali buka. Tinggal datang, duduk, pulang. Sangat menyenangkan potong rambut disini.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
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
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `desc_produk`, `harga`, `gambar`, `fitur_1`, `fitur_2`, `fitur_3`) VALUES
<<<<<<< HEAD:db_maduratna (2).sql
(4, 'Maduratna Hairspray', 'Maduratna Hair Serum adalah sebuah produk inovasi dalam dunia styling rambut pria. Membentuk rambut sesuai keinginan dan mempertahankan kerapian model rambut Anda sepanjang hari.Rambut yang ditata tidak mudah berubah.', '35000', '6041c509b03b1.jpg', 'Styling dengan cepat dan mudah', 'Mudah Disisir', 'Menjaga kelembaban rambut'),
(5, 'Oil Based Pomade', 'Maduratna Oil Based Pomade merupakan Produk penata rambut yang diperuntukan bagi kalian yang suka dengan penampilan rambut yang terlihat natural, dengan Hold yang kuat, mudah diatur dan dapat membantu memberikan tekstur serta volume pada rambut', '50000', '6041c51112620.jpg', 'Cocok untuk semua jenis rambut', 'Mudah disisir ulang', 'Mengandung Aloe Vera'),
(6, 'Maduratna Hair Serum', 'Maduratna Hair Serum adalah sebuah produk inovasi dalam dunia styling rambut pria. Dengan kandungan ALOE VERA dapat membuat rambut anda tetap sehat. Memberikan TEKSTUR pada rambut dan membuat rambut lebih mengembang sepanjang hari.', '75000', '6041c51c777c9.jpg', 'Mengandung Aloe Vera', 'Mudah Digunakan', 'Tidak mengandung bahan kimia'),
(12, 'HAIR SHAVER KNIFE', 'Bagi para pria yang setiap hari mencukur jenggot dan kumis wajib untuk memiliki pisau cukur lipat ini. Anda dapat mencukur jenggot dengan lebih rapi seperti layaknya pencukur profesional di salon dan tempat pangkas rambut. Gagang yang nyaman dan mata silet yang tajam membuat mencukur lebih mudah.  SPECIALS FEATURES :', '35000', '6041c5237ddbb.jpg', 'Berbahan Stainless Stell', 'Nyaman digenggam', 'Mudah dibawa kemanapun');
=======
(4, 'Maduratna Hairspray', 'Maduratna Hair Serum adalah sebuah produk inovasi dalam dunia styling rambut pria. Membentuk rambut sesuai keinginan dan mempertahankan kerapian model rambut Anda sepanjang hari.Rambut yang ditata tidak mudah berubah.', '35000', 'hairspray.jpg', 'Styling dengan cepat dan mudah', 'Mudah Disisir', 'Menjaga kelembaban rambut'),
(5, 'Oil Based Pomade', 'Maduratna Oil Based Pomade merupakan Produk penata rambut yang diperuntukan bagi kalian yang suka dengan penampilan rambut yang terlihat natural, dengan Hold yang kuat, mudah diatur dan dapat membantu memberikan tekstur serta volume pada rambut', '50000', 'pomade.jpg', 'Cocok untuk semua jenis rambut', 'Mudah disisir ulang', 'Mengandung Aloe Vera'),
(6, 'Maduratna Hair Serum', 'Maduratna Hair Serum adalah sebuah produk inovasi dalam dunia styling rambut pria. Dengan kandungan ALOE VERA dapat membuat rambut anda tetap sehat. Memberikan TEKSTUR pada rambut dan membuat rambut lebih mengembang sepanjang hari.', '75000', 'serum.jpg', 'Mengandung Aloe Vera', 'Mudah Digunakan', 'Tidak mengandung bahan kimia'),
(7, 'Hair Shaver Knife', 'Bagi para pria yang setiap hari mencukur jenggot dan kumis wajib untuk memiliki pisau cukur lipat ini. Anda dapat mencukur jenggot dengan lebih rapi seperti layaknya pencukur profesional di salon dan tempat pangkas rambut. Gagang yang nyaman dan mata silet yang tajam membuat mencukur lebih mudah.', '35000', 'shaver.jpg', 'Berbahan Stainless Stell', 'Nyaman digenggam', 'Mudah dibawa kemanapun');
>>>>>>> 3d1522ca6dfdb3ca34f862d9603fb48c5993f55d:db_maduratna (1).sql

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id_service` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `desc_service` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`id_service`, `nama`, `desc_service`, `harga`) VALUES
(1, 'MAN HAIRCUTING', 'Layanan perawatan sederhana dan cepat namun berkualitas tinggi yang memberikan potongan rambut paling menarik, diikuti dengan pijat kepala dan punggung dan pemberian pomade.', 50000),
(2, 'HAIR COLORING', 'Anda menginginkannya, kami membuatnya. Biarkan tukang cukur berpengalaman kami mewarnai rambut Anda dengan sempurna sesuai keinginan.', 80000),
(3, 'BEARD SHAVING', 'Dimulai dengan handuk panas untuk merilekskan kulit Anda dan membuka pori-pori Anda, diikuti dengan pencukuran yang cermat dan nyaman.', 40000),
(4, 'HAIR GROOMING', 'Layanan perawatan pria penuh. Dimulai dengan handuk dingin, lalu potong dan cuci rambut, dilanjutkan dengan pijat kepala dan punggung dengan handuk panas, diakhiri dengan pengaplikasian hair tonic dan pomade berkualitas tinggi.', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `desc_staff` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `nama`, `job`, `desc_staff`, `gambar`) VALUES
(1, 'John Alexander', 'Professional Barber', 'Jangan ragu untuk datang kepada saya. Dengan pengalaman dan skill yang saya miliki tentunya menjadi jaminan bahwa anda akan puas melihat hasillnya. So, tunggu apa lagi saya tunggu kedatangan anda di Maduratna Barbershop.', '6041c6ef691ed.jpg'),
(3, 'Steffan Julle', 'Professional Barber', 'Passion saya adalah mencukur. Seni saya adalah mencukur. Jadi anda tidak salah datang kepada saya karena tidak akan membiarkan customer kecewa. Percayakan kepada kami untuk semua permasalahan rambut anda.', '6041c6e9ec2cb.jpg'),
(4, 'Alexunder Bryan', 'Professional Barber', 'Sangat bangga bisa bergabung dengan Team Maduratna Barber Shop. Menurut saya memotong rambut adalah seni dan kanvas saya adalah rambut customer. Jadi saya siap memberikan pelayanan yang terbaik untuk kepuasan anda.', '6041c6f506708.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id_testi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id_testi`, `nama`, `email`, `testimoni`) VALUES
(11, 'Trip Bocil', 'tripbocil@gmail.com', 'Murah, nyaman, dan layanannya lengkap serta hasil potongannya selalu pas dan sesuai ekspetasi. Rasanya Beda dari tempat lain.'),
(12, 'Johm Andreas', 'johnandreas@gmail.com', 'Staffnya ramah dan enak untuk diajak komunikasi dan menyesuaikan apa yang kita mau. Dan says sudah berlangganan 3 bulan dan tidak pernah kecewa dengan pelayanannya,'),
(20, 'Peter Jamerson', 'peterjemerson@gmail.com', 'Cocok Guntingannya, saya sudah menjadi pelanggan sejak Maduratna Barber Shop pertama kali buka. Tinggal datang, duduk, pulang. Sangat menyenangkan potong rambut disini.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD PRIMARY KEY (`id_appoinment`),
  ADD KEY `id_jam` (`id_jam`),
  ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id_testi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jam`
--
ALTER TABLE `tb_jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
<<<<<<< HEAD:db_maduratna (2).sql
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 3d1522ca6dfdb3ca34f862d9603fb48c5993f55d:db_maduratna (1).sql

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_appoinment`
--
ALTER TABLE `tb_appoinment`
  ADD CONSTRAINT `tb_appoinment_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `tb_service` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
