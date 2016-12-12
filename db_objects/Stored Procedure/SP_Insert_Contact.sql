DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Insert_Contact$$
CREATE PROCEDURE SP_Insert_Contact (IN user_id INTEGER,
												IN information nvarchar(200),
												contact_type_code NVARCHAR(50),
                                                verified BOOLEAN,
                                                is_primary BOOLEAN,
                                                confirmation_code NVARCHAR(50),
                                                mod_person_id INTEGER,
                                                OUT errormsg NVARCHAR(2000))
BEGIN
/* *****************************************************************************************
-- Name SP_Insert_Contact
-- Description  The following procedure is used to contact record for a user.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/

DECLARE contact_type_id INTEGER;

select id into contact_type_id FROM contact where code = contact_type_code;
            
            INSERT INTO contact
										(`information`,
										`user_id`,
										`ContactTypeLI`,
										`verified`,
										`primary`,
										`confirmation_code`,
										`mod_person_id`,
										`active`)
									VALUES
										(information,
										user_id,
										contact_type_id,
										verified,
										is_primary,
										confirmation_code,
										mod_person_id,
										true);



       
END$$

DELIMITER ; 
