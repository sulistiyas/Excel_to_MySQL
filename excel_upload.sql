# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-08-12 00:52:51
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "participant"
#

DROP TABLE IF EXISTS `participant`;
CREATE TABLE `participant` (
  `id_participant` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(200) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(200) NOT NULL DEFAULT '',
  `no_telp` varchar(100) NOT NULL DEFAULT '',
  `jenkel` varchar(10) NOT NULL DEFAULT '',
  `usia` varchar(10) NOT NULL DEFAULT '',
  `nama_desa` varchar(200) DEFAULT '',
  `kecamatan` varchar(200) NOT NULL DEFAULT '',
  `rt` varchar(10) NOT NULL DEFAULT '',
  `rw` varchar(10) NOT NULL DEFAULT '',
  `notes` varchar(255) DEFAULT '',
  `tps` varchar(100) DEFAULT '',
  PRIMARY KEY (`id_participant`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "participant"
#


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_users` varchar(10) NOT NULL DEFAULT '',
  `full_name` varchar(200) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES ('USR001','Administrator','admin','21232f297a57a5a743894a0e4a801fc3');
