DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Verify_Contact$$
CREATE PROCEDURE SP_Verify_Contact (IN user_id INTEGER,
												IN is_verified boolean,
												contact_type_code NVARCHAR(50),
                                                OUT errormsg NVARCHAR(2000))
BEGIN
/* *****************************************************************************************
-- Name SP_Verify_Contact
-- Description  The following procedure is used to set a contact as verified.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/

DECLARE contact_type_id INTEGER;

SELECT ID INTO contact_type_id FROM vlist_item where code = contact_type_code;

UPDATE Contact 
set verified = is_verified
where user_id = user_id
and ContactTypeLI = contact_type_id;


       
END$$

DELIMITER ; 
