DELIMITER $$
DROP PROCEDURE IF EXISTS SP_INSERT_VERIFYCODE$$

CREATE PROCEDURE `SP_INSERT_VERIFYCODE`(IN reference nvarchar(200))
BEGIN

/* *****************************************************************************************
-- Name SP_INSERT_VERIFYCODE
-- Description  The following procedure is used to generate and return a verification code.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Harley Fischel                 	11/22/16                   Create Procedure
-- ******************************************************************************************
*/

	DECLARE vcode INT;
	DECLARE contact_id INT;
    DECLARE vveri INT;

	SELECT `id` INTO contact_id FROM contact WHERE `information` = reference;
	SELECT `verified` INTO vveri FROM contact WHERE `id` = contact_id;

	IF vveri = 1 THEN 
		SELECT vveri AS `verified`;
    ELSE
		UPDATE verify_code SET `active` = 0 WHERE `active` = 1 AND `verified` = 0 AND `expire_time` > NOW();

		SELECT FLOOR((RAND() * (999999-100000+1))+100000) AS v_code FROM verify_code 
		WHERE "v_code" NOT IN (SELECT `code` FROM verify_code WHERE `active` = 1) LIMIT 1 INTO vcode; 

		INSERT INTO verify_code (`code`,
								`contact_id`,
								`expire_time`)
							VALUES
								(vcode,
								contact_id,
								NOW() + INTERVAL 20 MINUTE);

		SELECT vcode AS `code`;
	END IF;

END$$

DELIMITER ; 
