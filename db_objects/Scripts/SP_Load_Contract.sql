
DELIMITER $$

DROP PROCEDURE IF EXISTS SP_Load_Contract$$

CREATE PROCEDURE SP_Load_Contract ()
BEGIN
/* *****************************************************************************************
-- Name SP_Load_Contract
-- Description       Script to load the different contracts in the DB 
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/

DECLARE contract_type_tos integer;
DECLARE contract_type_pp integer;

	
		DELETE FROM contract;
        
		SELECT id INTO contract_type_tos FROM vlist_item where code = 'CONTRACTTYPETOS';
        
		INSERT INTO contract
						(`text`,
						`contract_type_li`,
						`modified_date`,
						`active`,
						`mod_person_id`)
						VALUES
						('This is the TOS',
						contract_type_tos,
						NOW(),
						TRUE,
						1);

		SELECT id INTO contract_type_pp FROM vlist_item where code = 'CONTRACTTYPEPRIV';
        
		INSERT INTO contract
						(`text`,
						`contract_type_li`,
						`modified_date`,
						`active`,
						`mod_person_id`)
						VALUES
						('This is the PP',
						contract_type_pp,
						NOW(),
						TRUE,
						1);


       
END$$

DELIMITER ; 
