create database  IF NOT EXISTS network;

use network;

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL auto_increment,
  `num` varchar(11) default NULL,
  `name` varchar(6) default NULL,
  `college` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) DEFAULT CHARSET=gbk;
