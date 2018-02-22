#apocalypse-02142018.sql

Drop table if exists Apocalypse;
CREATE TABLE `Apocalypses` (
  `ApocalypseID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) DEFAULT NULL,
  `Origin` varchar(50) DEFAULT NULL,
  `Harbinger` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Date` datetime,
  `Survivors` int(10),
  PRIMARY KEY (`ApocalypseID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


