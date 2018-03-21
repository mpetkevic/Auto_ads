CREATE TABLE `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `is_used` int(11) NOT NULL,
  `is_new` int(11) NOT NULL,
  `is_crashed` int(11) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `ads_models_id_fk` (`model_id`),
  CONSTRAINT `ads_models_id_fk` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO ads (id, model_id, price, is_used, is_new, is_crashed, description) VALUES (1, 1, 500000, 1, 2, 1, 'New CAr');
INSERT INTO ads (id, model_id, price, is_used, is_new, is_crashed, description) VALUES (2, 15, 150000, 1, 2, 1, 'New CAr');