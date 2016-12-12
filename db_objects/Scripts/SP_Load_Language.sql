
DELIMITER $$

DROP PROCEDURE IF EXISTS SP_Load_Language$$

CREATE PROCEDURE SP_Load_Language ()
BEGIN
/* *****************************************************************************************
-- Name SP_Load_Language
-- Description       Script to load the different support languages in the DB 
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/
	
		DELETE FROM language;
        
		 
		INSERT INTO language
				(`name`)
				VALUES
				('English');



		INSERT INTO language
				(`name`)
				VALUES
				('Spanish');



       
END$$

DELIMITER ; 
