-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.21-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk weckatalog
CREATE DATABASE IF NOT EXISTS `weckatalog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `weckatalog`;

-- membuang struktur untuk table weckatalog.wec_category
CREATE TABLE IF NOT EXISTS `wec_category` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `nm_cat` varchar(20) DEFAULT NULL,
  `desc_cat` text DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel weckatalog.wec_category: ~7 rows (lebih kurang)
DELETE FROM `wec_category`;
/*!40000 ALTER TABLE `wec_category` DISABLE KEYS */;
INSERT INTO `wec_category` (`id_cat`, `nm_cat`, `desc_cat`) VALUES
	(1, 'Makanan', 'This is category of Food Product'),
	(7, 'Elektronik', 'Ini adalah data kategori elektronik'),
	(8, 'Food', 'This is category of Food Product'),
	(9, 'New Data', 'New category'),
	(10, 'Ini Hasil Edit', 'asdfasf'),
	(11, 'Rumah Tangga', 'ksdjgksdg'),
	(12, 'COba lagi', 'kdshgksdg');
/*!40000 ALTER TABLE `wec_category` ENABLE KEYS */;

-- membuang struktur untuk table weckatalog.wec_pages
CREATE TABLE IF NOT EXISTS `wec_pages` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_page` date DEFAULT NULL,
  `title_page` varchar(50) DEFAULT NULL,
  `content_page` longtext DEFAULT NULL,
  `publish` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel weckatalog.wec_pages: ~0 rows (lebih kurang)
DELETE FROM `wec_pages`;
/*!40000 ALTER TABLE `wec_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `wec_pages` ENABLE KEYS */;

-- membuang struktur untuk table weckatalog.wec_product
CREATE TABLE IF NOT EXISTS `wec_product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `kd_product` varchar(10) NOT NULL,
  `nm_product` varchar(50) NOT NULL,
  `id_cat` int(11) NOT NULL DEFAULT 0,
  `harga` int(11) NOT NULL DEFAULT 0,
  `stok` smallint(6) NOT NULL DEFAULT 0,
  `desc_product` longtext DEFAULT NULL,
  `diskon` float NOT NULL DEFAULT 0,
  `foto` longtext DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  PRIMARY KEY (`id_product`),
  UNIQUE KEY `kd_barang` (`kd_product`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel weckatalog.wec_product: ~3 rows (lebih kurang)
DELETE FROM `wec_product`;
/*!40000 ALTER TABLE `wec_product` DISABLE KEYS */;
INSERT INTO `wec_product` (`id_product`, `kd_product`, `nm_product`, `id_cat`, `harga`, `stok`, `desc_product`, `diskon`, `foto`, `status`) VALUES
	(1, 'BR0001', 'Indomeie Mie Goreng Rasa Ayam', 1, 2500, 1000, 'Ini mie instan paling favorit', 2, '5f87cc0bb8616.jpg', 1),
	(2, 'BR0002', 'Sandal Jepit', 7, 35000, 35, 'asdfasf', 0, '', 0),
	(4, '', '', 0, 0, 0, '', 0, '', 0);
/*!40000 ALTER TABLE `wec_product` ENABLE KEYS */;

-- membuang struktur untuk table weckatalog.wec_slideshow
CREATE TABLE IF NOT EXISTS `wec_slideshow` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `title_slide` varchar(50) DEFAULT NULL,
  `content_slide` varchar(200) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel weckatalog.wec_slideshow: ~0 rows (lebih kurang)
DELETE FROM `wec_slideshow`;
/*!40000 ALTER TABLE `wec_slideshow` DISABLE KEYS */;
/*!40000 ALTER TABLE `wec_slideshow` ENABLE KEYS */;

-- membuang struktur untuk table weckatalog.wec_users
CREATE TABLE IF NOT EXISTS `wec_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel weckatalog.wec_users: ~0 rows (lebih kurang)
DELETE FROM `wec_users`;
/*!40000 ALTER TABLE `wec_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `wec_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
