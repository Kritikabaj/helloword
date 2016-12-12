
DROP TABLE IF EXISTS `language` ;

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The primary key of the tblLanguage table. ',
  `name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'The name of the language.',
  `iso_code` varchar(2) CHARACTER SET utf8 NOT NULL COMMENT 'The ISO-639-1 code of the language.',
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'A standard column storing the timestamp when the record was created.',
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'A standard column storing the timestamp when the record was updated.',
  `mod_person_id` int(11) NOT NULL COMMENT 'A non enforced foreign key to the person table. This defines the last person or process that created or updated the record.',
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='The language table stores all the languages represented in the system.';
