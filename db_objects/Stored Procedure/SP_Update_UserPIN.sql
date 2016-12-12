DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Update_UserPIN$$
CREATE PROCEDURE SP_Update_UserPIN (IN user_id INTEGER,
												IN pin NVARCHAR(50))
BEGIN
/* *****************************************************************************************
-- Name SP_Update_UserPIN
-- Description       The following procedure is used to update a user PIN.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/

UPDATE user set pin = pin where user_id = user_id;

       
END$$

DELIMITER ; 
