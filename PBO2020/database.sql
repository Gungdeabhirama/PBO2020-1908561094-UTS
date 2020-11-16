create database gudanggitar;

use gudanggitar;

CREATE TABLE `gudanggitar` (
  `id` bigint(100) NOT NULL auto_increment,
  `nama` varchar(100),
  `warna` varchar(20),
  `type` varchar(50),
  `tahun` int(10),
  PRIMARY KEY  (`id`)
);