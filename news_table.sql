CREATE TABLE `news` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` text,
  `text` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1