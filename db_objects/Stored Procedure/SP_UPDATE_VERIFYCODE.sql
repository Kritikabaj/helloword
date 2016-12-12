DELIMITER $$
DROP PROCEDURE IF EXISTS SP_UPDATE_VERIFYCODE$$

CREATE PROCEDURE `SP_UPDATE_VERIFYCODE`(IN verify_code INTEGER, IN refer nvarchar(200))
BEGIN

/* *****************************************************************************************
-- Name SP_UPDATE_VERIFYCODE
-- Description  The following procedure is used to verify a code with a contact record.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Harley Fischel                 	11/22/16                   Create Procedure
-- ******************************************************************************************
*/

	DECLARE verified INT;
    DECLARE expired INT;
    DECLARE contact_id INT;
    
    SELECT id INTO contact_id FROM contact WHERE `information` = refer;

	SELECT IF(`expire_time` > NOW(), 0, 1) INTO expired FROM verify_code WHERE `code` = verify_code AND `contact_id` = contact_id;

	SELECT IF(`id` IS NULL, 0, 1) INTO verified FROM verify_code WHERE `code` = verify_code AND `contact_id` = contact_id AND `expire_time` > NOW();

	SET verified = IF(verified IS NULL, 0, 1);
    UPDATE verify_code SET `verified` = verified, active = 0 WHERE `code` = verify_code AND `contact_id` = contact_id;
    
    if(verified = 1) THEN
		UPDATE contact SET `verified` = 1, `confirmation_code` = verify_code WHERE `id` = contact_id;
	END IF;

	SELECT verified, expired;
  
END$$
