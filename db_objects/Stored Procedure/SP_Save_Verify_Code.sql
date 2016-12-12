DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Save_Verify_Code$$

CREATE PROCEDURE `SP_Save_Verify_Code`(IN verify_code INTEGER, IN reference nvarchar(200))
BEGIN

/* *****************************************************************************************
-- Name SP_Save_Verify_Code
-- Description  The following procedure is used to contact record for a user.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Harley Fischel                 	11/22/16                   Create Procedure
-- ******************************************************************************************
*/

            INSERT INTO verify_code (`code`,
									`reference`,
									`dt_expire`)
								VALUES
									(verify_code,
									SHA1(reference),
									NOW() + INTERVAL 20 MINUTE);
  
END$$

DELIMITER ; 
