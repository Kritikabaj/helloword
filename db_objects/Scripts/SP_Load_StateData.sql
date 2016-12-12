
DELIMITER $$

DROP PROCEDURE IF EXISTS SP_Load_Contract$$

CREATE PROCEDURE SP_Load_Contract ()
BEGIN
/* *****************************************************************************************
-- Name SP_Load_Contract
-- Description      Load up the contract information. 
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/
	
		DELETE FROM contract;
        
		  INSERT INTO contract
					(`text`,
					`contract_type_li`,
					`modified_date`,
					`active`,
					`mod_person_id`)
					VALUES
					('This is the text of the contract.',
					<{contract_type_li: }>,
					<{modified_date: }>,
					<{active: }>,
					<{mod_person_id: }>);


       
END$$

DELIMITER ; 
