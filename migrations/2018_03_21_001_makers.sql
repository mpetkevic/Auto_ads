CREATE TABLE `makers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `makers_title_uindex` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO makers (id, title) VALUES (1, 'Audi');
INSERT INTO makers (id, title) VALUES (3, 'BMW');
INSERT INTO makers (id, title) VALUES (5, 'Opel');
INSERT INTO makers (id, title) VALUES (7, 'Toyota');