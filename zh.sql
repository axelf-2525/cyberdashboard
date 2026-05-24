CREATE DATABASE IF NOT EXISTS `zh`
CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zh`;

CREATE TABLE `dolgozo` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL default '',
  `cim` varchar(70) NOT NULL default '',
  `kor` varchar(10) NOT NULL default '',
   PRIMARY KEY  (`id`)
)
ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `dolgozo` (`id`,`nev`,`cim`,`kor`) VALUES 
 (1,'Tóth István','Debrecen',35),
 (2,'Nagy Éva','Szeged',20),
 (3,'Horváth Péter','Kecskemét',23);
