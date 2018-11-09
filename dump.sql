

CREATE TABLE `barang` (
  `id` int(20) NOT NULL auto_increment,
  `stok` varchar(20) default NULL,
  `nama` varchar(60) default NULL,
  `harga_beli` varchar(15) default NULL,
  `harga_jual` varchar(15) default NULL,
  `keuntungan` varchar(15) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `barang` */

insert  into `barang`(`id`,`stok`,`nama`,`harga_beli`,`harga_jual`,`keuntungan`) values (1,'1422334','pepsodent','1600','1750','150'),(2,'311223','formula','1500','1650','150'),(3,'1344433','sikat gigi formula','1300','1500','200'),(4,'2533444','good day mocca','1200','1300','100'),(5,'244333','Top Kopi White','900','1100','200'),(6,'4233312','Top Kopi Original','900','1100','200'),(7,'8991389247013','Amplop Paperline','4500','5000','500'),(8,'1666523','Aqua 1500 ml','3400','3700','300'),(9,'3444878','Mizone Apel','3300','3600','300'),(10,'23555','teh kotak','2300','2500','200'),(11,'14223349','Fresh Tea','3200','3500','300'),(13,'986663','Roti Roma','2400','2700','300'),(14,'96555','sikat gigi','1200','1500','300');

/*Table structure for table `belanja` */

CREATE TABLE `belanja` (
  `id` int(20) NOT NULL auto_increment,
  `stok` varchar(20) default NULL,
  `nama` varchar(60) default NULL,
  `harga_beli` varchar(10) default NULL,
  `harga_jual` varchar(10) default NULL,
  `laku` varchar(10) default '1',
  `sub_total` varchar(10) default NULL,
  `kasir` varchar(10) default NULL,
  `tgl` varchar(10) default NULL,
  `flag` char(1) default '1',
  `waktu` char(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;

/*Data for the table `belanja` */

/*Table structure for table `temp` */

CREATE TABLE `temp` (
  `id` int(20) NOT NULL auto_increment,
  `stok` varchar(20) default NULL,
  `nama` varchar(60) default NULL,
  `harga_beli` varchar(10) default NULL,
  `harga_jual` varchar(10) default NULL,
  `laku` varchar(10) default '1',
  `sub_total` varchar(10) default NULL,
  `kasir` varchar(10) default NULL,
  `tgl` varchar(10) default NULL,
  `waktu` char(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

/*Data for the table `temp` */

insert  into `temp`(`id`,`stok`,`nama`,`harga_beli`,`harga_jual`,`laku`,`sub_total`,`kasir`,`tgl`,`waktu`) values (76,'311223','formula','1500','1650','2','3300','','20170328','18:17:45');

/*Table structure for table `temp_bayar` */

CREATE TABLE `temp_bayar` (
  `id` int(11) NOT NULL auto_increment,
  `bayar` char(8) default NULL,
  `kembali` char(8) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
