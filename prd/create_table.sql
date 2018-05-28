CREATE TABLE `prd` (
  `id` int(11) NOT NULL auto_increment,
  `TeamName` varchar(200) collate utf8_unicode_ci default NULL,
  `TeamPoints` varchar(200) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

INSERT INTO `prd` VALUES (1, 'asd', 15);
INSERT INTO `prd` VALUES (2, 'zxc', 20);

-----------------------------------------------------------------------------------------------
CREATE TABLE `player` (
  `id` int(11) NOT NULL auto_increment,
  `TeamName` varchar(200) collate utf8_unicode_ci default NULL,
  `PlayerName` varchar(200) collate utf8_unicode_ci default NULL,
  `PlayerNumber` varchar(200) collate utf8_unicode_ci default NULL,
  `PlayerWeight` varchar(200) collate utf8_unicode_ci default NULL,
  `PlayerHeight` varchar(200) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

INSERT INTO `player` VALUES (1, 'asd', 'GG', 1, 65, 175);
INSERT INTO `player` VALUES (2, 'asd', 'ZZ', 5, 70, 180);

