
DROP TABLE IF EXISTS `contract` ;

CREATE TABLE `contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The primary key of the contract table. ',
  `text` text NOT NULL COMMENT 'The contract text that is displayed to the end user for acceptance.',
  `contract_type_li` int(11) NOT NULL COMMENT 'A foreign key to the vlist_item table. This is the type of contract the user is reviewing such as privacy policy or TOS.',
  `language_id` int(11) NOT NULL COMMENT 'A foreign key to the language table. This is the language of contract the user is reviewing such as privacy policy or TOS.',
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'A standard column storing the timestamp when the record was created.',
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'A standard column storing the timestamp when the record was updated.',
  `mod_person_id` int(11) NOT NULL COMMENT 'A non enforced foreign key to the person table. This defines the last person or process that created or updated the record.',
  `active` tinyint(1) NOT NULL COMMENT 'A flag indicating if the contract is active',
  PRIMARY KEY (`id`),
  KEY `contract_type_li_vlist_item_idx` (`contract_type_li`),
  KEY `language_id_language_idx` (`language_id`),
  CONSTRAINT `contract_type_li_vlist_item` FOREIGN KEY (`contract_type_li`) REFERENCES `vlist_item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `language_id_language` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='The contract table stores all the contracts represented in the system.';
