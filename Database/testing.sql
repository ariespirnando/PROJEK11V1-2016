/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.24 : Database - aurora_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`aurora_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `aurora_db`;

/*Table structure for table `tbcliping` */

DROP TABLE IF EXISTS `tbcliping`;

CREATE TABLE `tbcliping` (
  `idCliping` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judulCliping` varchar(300) DEFAULT NULL,
  `gambar` text,
  `jenis` enum('clip','event') DEFAULT NULL,
  PRIMARY KEY (`idCliping`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbcliping` */

insert  into `tbcliping`(`idCliping`,`judulCliping`,`gambar`,`jenis`) values (6,'TVS Motor Oto Trend 5 Feb 2013','file_1477411413.png','clip'),(7,'TVS Motor Auto Bisnis 16-22 jan 2013','file_1477411533.png','clip'),(8,'Ride and Beauty Campaign on 30 Oktober 2015 at Jumat','file_1477411565.png','event');

/*Table structure for table `tbcontent` */

DROP TABLE IF EXISTS `tbcontent`;

CREATE TABLE `tbcontent` (
  `idContent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judulContent` varchar(300) DEFAULT NULL,
  `isiContent` text,
  `gambarContent` text,
  `Tanggal` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idContent`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbcontent` */

insert  into `tbcontent`(`idContent`,`judulContent`,`isiContent`,`gambarContent`,`Tanggal`) values (3,'PT TVS MOTOR COMAPY INDONESIA MEMBERANGKATKAN PEMBELI TVS BERIBADAH UMROH','Jakarta - Program Undian berhadiah yang di selenggarakan PT TVS Motor Company Indonesia (PTTMCI) dengan tajuk “Gelegar TVS“ yang dimulai sejak tanggal 1 Agustus 2014 akhirnya mencapai titik puncak, program tersebut berhasil mengumpulkan kupon undian dengan jumlah ribuan dari berbagai titik-titik dealer TVS dengan lingkup nasional. Proses pengundian Program Undian Gelegar TVS dengan hadiah utama 1 unit mobil All New Avanza, 3 paket umroh, 5 motor TVS APACHE, 7 motor TVS DAZZ, serta 36 smartphone Samsung telah dilakukan dihadapan pejabat terkait dari Kemensos, Dinsos, Kepolisian dan notaris serta para saksi-saksi baik dari perwakilan dealer maupun dari pihak TVS pada tanggal 18 Februari 2015.','file_1477406647.png','2016-10-25 21:44:07'),(4,'Tvs Motor Kini Hadir Di Bogor','Siap Melayani Sepenuh Hati, dengan Produk Motor Berkualitas Dunia\r\n\r\nKehadiran TVS Motor di Bogor semakin melengkapi jaringan Dealer TVS Motor Company Indonesia. Produk TVS Motor Company Indonesia banyak diminati diarea perkotaan maupun sub urban, karena produk tersebut cocok dan dapat memenuhi kebutuhan sehari-hari masyarakat setempat.\r\n\r\nUntuk memenuhi kebutuhan masyarakat TVS menawararkan produk unggulan yang disesuaikan untuk kebutuhan masyarakat. TVS MAX yang diperuntukkan untuk masyarakat perkotaan, dan TVS MAX Semi Trail untuk masyarakat sub urban yang sering melintasi jalanan dengan permukaan tidak sebagus aspal, seperti area perkebunan. TVS DAZZ motor matic dengan fitur yang menarik seperti charger HP, ban tubeless, dan kapasitas tangki bahan bakar yang besar. TVS ROCKZ varian motor bebek yang dilengkapi charger HP dan mp3 dan radio cocok untuk mereka yang berjiwa muda. TVS NEO XR varian bebek dengan tenaga yang kuat namun irit bahan bakar dan dilengkapi Charger HP serta TVS APACHE sepeda motor sport dengan dapur pacu berkarakter over square yang mampu menghasilkan tenaga 17,03 dk (daya kuda) dan torsi 15,5 N-m yang mampu menggapai jarak 0-60 km/jam dalam waktu hanya 4,2 detik. semua produk ini lahir membawa DNA yang sama, yaitu motor India kualitas dunia yang Kuat, Tangguh, Murah dan Irit.\r\n\r\nSelain mengembangkan produk-produk yang inovatif dan berkualitas, TVS Motor Company Indonesia terus memperluas jaringan main dealer, dealer hingga bengkel-bengkel mitra. Perluasan jaringan ini akan terus di lakukan untuk memenuhi kebutuhan di tiap daerah.\r\n\r\nSegera kunjungi TVS Bogor untuk mendapatkan promo menarik pembelian sepeda motor TVS.','file_1477461340.png','2016-10-26 12:55:40');

/*Table structure for table `tbdialog` */

DROP TABLE IF EXISTS `tbdialog`;

CREATE TABLE `tbdialog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Komentar` text,
  `idService` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbdialog_ibfk_1` (`idService`),
  CONSTRAINT `tbdialog_ibfk_1` FOREIGN KEY (`idService`) REFERENCES `tbservice` (`idService`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbdialog` */

insert  into `tbdialog`(`id`,`tanggal`,`Komentar`,`idService`) values (4,'2016-11-12 04:44:45','tes',9),(5,'2016-11-12 04:45:06','asdfghjkl',9),(6,'2016-11-12 04:50:42','tews',10),(7,'2016-11-12 04:55:34','tes',8),(8,'2016-11-12 04:55:43','tes',10);

/*Table structure for table `tbgambar` */

DROP TABLE IF EXISTS `tbgambar`;

CREATE TABLE `tbgambar` (
  `idGambar` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Gambar` text,
  `JenisGambar` enum('gHome','gGaleri','gAward') DEFAULT NULL,
  `Keterangan` text,
  `Status` char(1) DEFAULT NULL,
  `namaGambar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idGambar`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbgambar` */

insert  into `tbgambar`(`idGambar`,`Gambar`,`JenisGambar`,`Keterangan`,`Status`,`namaGambar`) values (6,'file_1476936841.jpg','gHome','Pic2','2','Pict2'),(7,'file_1476936857.jpg','gHome','Pic3','2','pict3'),(8,'file_1476937119.jpg','gHome','Pict4','2','Pict4'),(9,'file_1476937138.jpg','gHome','Pict5','2','Pic5'),(10,'file_1476938552.jpg','gHome','pic6','2','pic6'),(11,'file_1476938566.jpg','gHome','pic7','2','pic7'),(12,'file_1477111819.jpg','gGaleri','-','2','G1'),(13,'file_1477111838.jpg','gGaleri','-','2','g2'),(14,'file_1477111862.jpg','gGaleri','-','2','g3'),(15,'file_1477111873.jpg','gGaleri','-','2','g4'),(16,'file_1477822907.png','gHome','aktif','2','pict11'),(17,'file_1477823069.png','gAward','aktif','2','pict12');

/*Table structure for table `tbkomentar` */

DROP TABLE IF EXISTS `tbkomentar`;

CREATE TABLE `tbkomentar` (
  `idProduk` int(10) unsigned NOT NULL,
  `kodePelanggan` char(15) DEFAULT NULL,
  `komentar` text,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `kodePelanggan` (`kodePelanggan`),
  KEY `idProduk` (`idProduk`),
  CONSTRAINT `tbkomentar_ibfk_1` FOREIGN KEY (`kodePelanggan`) REFERENCES `tbpelanggan` (`kodePelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbkomentar_ibfk_2` FOREIGN KEY (`idProduk`) REFERENCES `tbproduk` (`idProduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbkomentar` */

insert  into `tbkomentar`(`idProduk`,`kodePelanggan`,`komentar`,`tanggal`,`id`) values (9,'PL1000002','sa','2016-10-23 15:58:48',4),(9,'PL1000001','tes','2016-10-26 09:51:30',10),(9,'PL1000001','dfghjk','2016-10-26 12:55:24',11),(9,'PL1000001','aini jjjjjjjj','2016-10-30 17:23:15',12);

/*Table structure for table `tbkomunitas` */

DROP TABLE IF EXISTS `tbkomunitas`;

CREATE TABLE `tbkomunitas` (
  `kodePelanggan` char(15) DEFAULT NULL,
  `komentar` text,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `tbkomunitas_ibfk_1` (`kodePelanggan`),
  CONSTRAINT `tbkomunitas_ibfk_1` FOREIGN KEY (`kodePelanggan`) REFERENCES `tbpelanggan` (`kodePelanggan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbkomunitas` */

insert  into `tbkomunitas`(`kodePelanggan`,`komentar`,`tanggal`,`id`) values ('PL1000002','jos','2016-10-23 13:51:35',1),('PL1000002','dadsad','2016-10-23 15:56:02',3),('PL1000002','fghjk','2016-10-24 11:03:25',4),('PL1000002','dsfg','2016-10-24 11:03:34',5),('PL1000001','hahahaha','2016-10-26 02:30:56',7),('PL1000001','tes','2016-10-26 12:56:04',8),('PL1000001','ada test','2016-10-30 17:28:09',9);

/*Table structure for table `tbpelanggan` */

DROP TABLE IF EXISTS `tbpelanggan`;

CREATE TABLE `tbpelanggan` (
  `kodePelanggan` char(15) NOT NULL,
  `NamaPelanggan` varchar(30) DEFAULT NULL,
  `Alamat` text,
  `Telpon` char(16) DEFAULT NULL,
  PRIMARY KEY (`kodePelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbpelanggan` */

insert  into `tbpelanggan`(`kodePelanggan`,`NamaPelanggan`,`Alamat`,`Telpon`) values ('PL1000001','admin','admin','admin'),('PL1000002','Achmad Aries Pirnando','Kotabumi','085669555948'),('PL1000003','Aini Rahmayati','Liwa','085669555068'),('PL1100004','tes','testes','tes');

/*Table structure for table `tbproduk` */

DROP TABLE IF EXISTS `tbproduk`;

CREATE TABLE `tbproduk` (
  `idProduk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namaProduk` varchar(30) DEFAULT NULL,
  `keteranganProduk` text,
  `gambarProduk` text,
  `status` char(1) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idProduk`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbproduk` */

insert  into `tbproduk`(`idProduk`,`namaProduk`,`keteranganProduk`,`gambarProduk`,`status`,`warna`) values (9,'TVS Max R','-','file_1476946710.jpg','2','-'),(10,'TVS Neo XR CW','-','file_1476946725.jpg','1','-'),(11,'TVS ROCKZ 125 ','-','file_1476946737.jpg','2','-'),(12,'TVS-DAZ','-','file_1476946774.jpg','2','-');

/*Table structure for table `tbservice` */

DROP TABLE IF EXISTS `tbservice`;

CREATE TABLE `tbservice` (
  `idService` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kodePelanggan` char(15) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jenis` char(10) DEFAULT NULL,
  `keluahan` text,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idService`),
  KEY `kodePelanggan` (`kodePelanggan`),
  CONSTRAINT `tbservice_ibfk_1` FOREIGN KEY (`kodePelanggan`) REFERENCES `tbpelanggan` (`kodePelanggan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbservice` */

insert  into `tbservice`(`idService`,`kodePelanggan`,`tahun`,`jenis`,`keluahan`,`tanggal`,`status`) values (8,'PL1000002',1990,'a','a','2016-11-12 04:55:34',2),(9,'PL1000003',2008,'sadfs','sa','2016-11-05 15:32:37',1),(10,'PL1000002',1995,'sdfghjkl.','cvbnm','2016-11-12 04:55:43',2);

/*Table structure for table `tbuser` */

DROP TABLE IF EXISTS `tbuser`;

CREATE TABLE `tbuser` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `creadon` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbuser` */

insert  into `tbuser`(`id`,`username`,`password`,`creadon`) values (7,'admin','202cb962ac59075b964b07152d234b70','2016-10-26 12:25:09'),(10,'ainirahmayati','b6e6425767fbfead1d5fd31a78e15ace','2016-10-30 17:31:58');

/*Table structure for table `v_dialog` */

DROP TABLE IF EXISTS `v_dialog`;

/*!50001 DROP VIEW IF EXISTS `v_dialog` */;
/*!50001 DROP TABLE IF EXISTS `v_dialog` */;

/*!50001 CREATE TABLE  `v_dialog`(
 `idService` int(10) unsigned ,
 `jenis` char(10) ,
 `keluahan` text ,
 `kodePelanggan` char(15) ,
 `status` int(11) ,
 `tahun` year(4) ,
 `tgl` datetime ,
 `Alamat` text ,
 `NamaPelanggan` varchar(30) ,
 `Telpon` char(16) ,
 `id` int(10) unsigned ,
 `Komentar` text ,
 `tanggal` datetime 
)*/;

/*Table structure for table `v_komentar` */

DROP TABLE IF EXISTS `v_komentar`;

/*!50001 DROP VIEW IF EXISTS `v_komentar` */;
/*!50001 DROP TABLE IF EXISTS `v_komentar` */;

/*!50001 CREATE TABLE  `v_komentar`(
 `gambarProduk` text ,
 `idProduk` int(10) unsigned ,
 `keteranganProduk` text ,
 `namaProduk` varchar(30) ,
 `status` char(1) ,
 `warna` varchar(10) ,
 `Alamat` text ,
 `kodePelanggan` char(15) ,
 `NamaPelanggan` varchar(30) ,
 `Telpon` char(16) ,
 `komentar` text ,
 `id` int(10) unsigned ,
 `tanggal` datetime 
)*/;

/*Table structure for table `v_komunitas` */

DROP TABLE IF EXISTS `v_komunitas`;

/*!50001 DROP VIEW IF EXISTS `v_komunitas` */;
/*!50001 DROP TABLE IF EXISTS `v_komunitas` */;

/*!50001 CREATE TABLE  `v_komunitas`(
 `kodePelanggan` char(15) ,
 `komentar` text ,
 `tanggal` datetime ,
 `id` int(10) unsigned ,
 `Alamat` text ,
 `NamaPelanggan` varchar(30) ,
 `Telpon` char(16) 
)*/;

/*Table structure for table `v_service` */

DROP TABLE IF EXISTS `v_service`;

/*!50001 DROP VIEW IF EXISTS `v_service` */;
/*!50001 DROP TABLE IF EXISTS `v_service` */;

/*!50001 CREATE TABLE  `v_service`(
 `idService` int(10) unsigned ,
 `jenis` char(10) ,
 `keluahan` text ,
 `tahun` year(4) ,
 `tanggal` datetime ,
 `status` int(11) ,
 `Alamat` text ,
 `NamaPelanggan` varchar(30) ,
 `Telpon` char(16) ,
 `kodePelanggan` char(15) 
)*/;

/*View structure for view v_dialog */

/*!50001 DROP TABLE IF EXISTS `v_dialog` */;
/*!50001 DROP VIEW IF EXISTS `v_dialog` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dialog` AS (select `ts`.`idService` AS `idService`,`ts`.`jenis` AS `jenis`,`ts`.`keluahan` AS `keluahan`,`ts`.`kodePelanggan` AS `kodePelanggan`,`ts`.`status` AS `status`,`ts`.`tahun` AS `tahun`,`ts`.`tanggal` AS `tgl`,`tp`.`Alamat` AS `Alamat`,`tp`.`NamaPelanggan` AS `NamaPelanggan`,`tp`.`Telpon` AS `Telpon`,`td`.`id` AS `id`,`td`.`Komentar` AS `Komentar`,`td`.`tanggal` AS `tanggal` from ((`tbservice` `ts` join `tbpelanggan` `tp`) join `tbdialog` `td`) where ((`ts`.`idService` = `td`.`idService`) and (`ts`.`kodePelanggan` = `tp`.`kodePelanggan`))) */;

/*View structure for view v_komentar */

/*!50001 DROP TABLE IF EXISTS `v_komentar` */;
/*!50001 DROP VIEW IF EXISTS `v_komentar` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_komentar` AS (select `pr`.`gambarProduk` AS `gambarProduk`,`pr`.`idProduk` AS `idProduk`,`pr`.`keteranganProduk` AS `keteranganProduk`,`pr`.`namaProduk` AS `namaProduk`,`pr`.`status` AS `status`,`pr`.`warna` AS `warna`,`pl`.`Alamat` AS `Alamat`,`pl`.`kodePelanggan` AS `kodePelanggan`,`pl`.`NamaPelanggan` AS `NamaPelanggan`,`pl`.`Telpon` AS `Telpon`,`kom`.`komentar` AS `komentar`,`kom`.`id` AS `id`,`kom`.`tanggal` AS `tanggal` from ((`tbproduk` `pr` join `tbkomentar` `kom`) join `tbpelanggan` `pl`) where ((`pr`.`idProduk` = `kom`.`idProduk`) and (`kom`.`kodePelanggan` = `pl`.`kodePelanggan`))) */;

/*View structure for view v_komunitas */

/*!50001 DROP TABLE IF EXISTS `v_komunitas` */;
/*!50001 DROP VIEW IF EXISTS `v_komunitas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_komunitas` AS (select `ko`.`kodePelanggan` AS `kodePelanggan`,`ko`.`komentar` AS `komentar`,`ko`.`tanggal` AS `tanggal`,`ko`.`id` AS `id`,`pel`.`Alamat` AS `Alamat`,`pel`.`NamaPelanggan` AS `NamaPelanggan`,`pel`.`Telpon` AS `Telpon` from (`tbkomunitas` `ko` join `tbpelanggan` `pel`) where (`ko`.`kodePelanggan` = `pel`.`kodePelanggan`)) */;

/*View structure for view v_service */

/*!50001 DROP TABLE IF EXISTS `v_service` */;
/*!50001 DROP VIEW IF EXISTS `v_service` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_service` AS (select `s`.`idService` AS `idService`,`s`.`jenis` AS `jenis`,`s`.`keluahan` AS `keluahan`,`s`.`tahun` AS `tahun`,`s`.`tanggal` AS `tanggal`,`s`.`status` AS `status`,`p`.`Alamat` AS `Alamat`,`p`.`NamaPelanggan` AS `NamaPelanggan`,`p`.`Telpon` AS `Telpon`,`p`.`kodePelanggan` AS `kodePelanggan` from (`tbservice` `s` join `tbpelanggan` `p`) where (`s`.`kodePelanggan` = `p`.`kodePelanggan`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
