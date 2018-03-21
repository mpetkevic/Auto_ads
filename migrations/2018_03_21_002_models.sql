CREATE TABLE `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maker_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `table_name_makers_id_fk` (`maker_id`),
  CONSTRAINT `table_name_makers_id_fk` FOREIGN KEY (`maker_id`) REFERENCES `makers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO models (id, maker_id, title) VALUES (1, 1, 'A6');
INSERT INTO models (id, maker_id, title) VALUES (3, 1, 'A5');
INSERT INTO models (id, maker_id, title) VALUES (4, 1, 'A4');
INSERT INTO models (id, maker_id, title) VALUES (5, 1, 'Q7');
INSERT INTO models (id, maker_id, title) VALUES (6, 1, 'Q5');
INSERT INTO models (id, maker_id, title) VALUES (7, 3, '320');
INSERT INTO models (id, maker_id, title) VALUES (8, 3, '325');
INSERT INTO models (id, maker_id, title) VALUES (9, 3, '330');
INSERT INTO models (id, maker_id, title) VALUES (10, 3, '530');
INSERT INTO models (id, maker_id, title) VALUES (11, 5, 'Astra');
INSERT INTO models (id, maker_id, title) VALUES (12, 5, 'Zafira');
INSERT INTO models (id, maker_id, title) VALUES (13, 5, 'Corsa');
INSERT INTO models (id, maker_id, title) VALUES (14, 7, 'Corolla');
INSERT INTO models (id, maker_id, title) VALUES (15, 7, 'Avensis');
INSERT INTO models (id, maker_id, title) VALUES (16, 7, 'Prius');