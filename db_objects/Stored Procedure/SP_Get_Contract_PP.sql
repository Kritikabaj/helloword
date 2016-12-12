DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Get_Contract_PP$$
CREATE PROCEDURE SP_Get_Contract_PP(IN language_code varchar(2))
BEGIN
/* *****************************************************************************************
-- Name SP_Get_Contract_PP
-- Description       The following procedure is design look up and return the proper privacy
                     policy contract based on provided language ISO code.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Harley Fischel                 	12/07/16                   Create Procedure
-- ******************************************************************************************
*/

	SELECT contract.id, vlist_item.`name`, contract.`text`, `language`.`name` AS language_name, `language`.`iso_code` AS language_code 
    FROM contract 
    INNER JOIN vlist_item ON vlist_item.id = contract.contract_type_li
	INNER JOIN `language` ON `language`.id = contract.language_id 
    WHERE vlist_item.`code` = 'CONTRACTTYPEPRIV' AND `language`.iso_code = language_code
    ORDER BY contract.insert_time DESC LIMIT 1;
	COMMIT;
       
END$$

DELIMITER ; 
