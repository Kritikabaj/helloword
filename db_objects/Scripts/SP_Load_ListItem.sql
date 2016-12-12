
DELIMITER $$

DROP PROCEDURE IF EXISTS SP_Load_ListItem$$

CREATE PROCEDURE SP_Load_ListItem ()
BEGIN
/* *****************************************************************************************
-- Name SP_Load_ListItem
-- Description    This procedure will load the value pair table vlist and vlist_item. 
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/11/16                   Create Procedure
-- ******************************************************************************************
*/

# Declarations
DECLARE vlist_id integer;

DELETE FROM vlist;
DELETE FROM vlist_item;

	# Create the vlist table entry for the contact types
	
	INSERT INTO vlist
					(`name`,
					`description`,
					`code`,
					`insert_time`,
					`update_time`,
					`mod__person_id`,
					`active`)
					VALUES
					('Contact Type',
					'The different contact types of a user',
					'CONTACTTYPE',
					NOW(),
					NOW(),
					1,
					True);
                    
                    SET vlist_id = LAST_INSERT_ID();
                    
	INSERT INTO vlist_item
					(`vlist_id`,
					`name`,
					`description`,
					`code`,
					`display_order`,
					`insert_time`,
					`update_time`,
					`mod__person_id`,
					`active`)
					VALUES
					(vlist_id,
					'Email Address',
					'The email address of the user.',
					'CONTACTTYPEEMAIL',
					1,
					NOW(),
					NOW(),
					1,
					TRUE);

      
      INSERT INTO vlist_item
					(`vlist_id`,
					`name`,
					`description`,
					`code`,
					`display_order`,
					`insert_time`,
					`update_time`,
					`mod__person_id`,
					`active`)
					VALUES
					(vlist_id,
					'Mobile Phone',
					'The mobile number of the user.',
					'CONTACTTYPEMOBPHONE',
					1,
					NOW(),
					NOW(),
					1,
					TRUE);              
                    
						
		# Create the vlist table entry for the contract types
	
	INSERT INTO vlist
					(`name`,
					`description`,
					`code`,
					`insert_time`,
					`update_time`,
					`mod__person_id`,
					`active`)
					VALUES
					('Contract Type',
					'The different contract types',
					'CONTRACTTYPE',
					NOW(),
					NOW(),
					1,
					True);
                    
                    SET vlist_id = LAST_INSERT_ID();
                    
	INSERT INTO vlist_item
					(`vlist_id`,
					`name`,
					`description`,
					`code`,
					`display_order`,
					`insert_time`,
					`update_time`,
					`mod__person_id`,
					`active`)
					VALUES
					(vlist_id,
					'Terms of Service',
					'The application terms of service.',
					'CONTRACTTYPETOS',
					1,
					NOW(),
					NOW(),
					1,
					TRUE);

      
      INSERT INTO vlist_item
					(`vlist_id`,
					`name`,
					`description`,
					`code`,
					`display_order`,
					`insert_time`,
					`update_time`,
					`mod__person_id`,
					`active`)
					VALUES
					(vlist_id,
					'Privacy Policy',
					'The application privacy policy.',
					'CONTRACTTYPEPRIV',
					1,
					NOW(),
					NOW(),
					1,
					TRUE);              



END$$

DELIMITER ; 
