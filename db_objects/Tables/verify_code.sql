
DROP TABLE IF EXISTS `verify_code` ;

CREATE TABLE `verify_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The primary key of the verify_code table. ',
  `verify_type_li` int(11) NOT NULL COMMENT 'A foreign key to the vlist_item table. ',
  `content` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT 'The email address or phone number based on the type of verification defined by the verify_type_li column. ',
  `verification_code` int(11) NOT NULL COMMENT 'The auto-generated verification code. This is a 6 digit number created in a stored procedure and auto generated. ',
  `expire_date` datetime NOT NULL COMMENT 'The date and time the verification code becomes invalid / expired.',
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'A standard column storing the timestamp when the record was created.',
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'A standard column storing the timestamp when the record was updated.',
  `mod_person_id` int(11) NOT NULL COMMENT 'A non enforced foreign key to the person table. This defines the last person or process that created or updated the record.',
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `verify_code_vlist_item_idx` (`verify_type_li`),
  CONSTRAINT `verify_code_vlist_item` FOREIGN KEY (`verify_type_li`) REFERENCES `vlist_item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The verify_code table stores all verification codes generated for verifying phone and email addresses.';

