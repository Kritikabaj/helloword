DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Insert_UserContract$$
CREATE PROCEDURE SP_Insert_UserContract (IN user_id INTEGER,
												contact_type_code NVARCHAR(50),
                                                mod_person_id INTEGER,
                                                OUT errormsg NVARCHAR(2000))
BEGIN
/* *****************************************************************************************
-- Name SP_Insert_UserContract
-- Description  The following procedure is used to create a record for a user that accepted a contract.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/

DECLARE contract_type_id INTEGER;

select id into contract_type_id FROM contact where code = contact_type_code;
            
			INSERT INTO user_contract
						(`user_id`,
						`contract_id`,
						`accepted_date`,
						`mod_person_id`,
						`active`)
			VALUES
						(user_id,
						contract_type_id,
						NOW(),
						mod_person_id,
						true);



       
END$$

DELIMITER ; 
