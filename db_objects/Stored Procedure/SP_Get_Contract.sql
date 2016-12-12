DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Get_Contract$$
CREATE PROCEDURE SP_Get_Contract(IN contract_type nvarchar(32),
                                 IN language_code nvarchar(2))
BEGIN
/* *****************************************************************************************
-- Name SP_Get_Contract
-- Description       The following procedure is design look up and return the proper of any
                     contract based on provided contract type and language ISO code.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Harley Fischel                 	12/07/16                   Create Procedure
-- ******************************************************************************************
*/

	SELECT contract.id, ct.`name`, contract.`text`, `language`.`name` AS language_name, `language`.`iso_code` AS language_code 
    FROM contract 
    INNER JOIN vlist_item ON vlist_item.id = contract.contract_type_li
	INNER JOIN `language` ON `language`.id = contract.language_id 
    WHERE vlist_item.`code` = contract_type AND `language`.iso_code = language_code
    ORDER BY contract.insert_time DESC LIMIT 1;
	COMMIT;
       
END$$

DELIMITER ; 
