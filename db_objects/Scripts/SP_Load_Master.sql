
DELIMITER $$

DROP PROCEDURE IF EXISTS SP_Load_Master$$

CREATE PROCEDURE SP_Load_Master ()
BEGIN

# Step 1: Generate the DDL for the tables by foward generating the ERD diagram

#Step 2 load the procedures by running the mydb_routines file from the data export.

# Step 3: run the procedures below.

call SP_Load_Language ();
call SP_Load_ListItem ();
call SP_Load_Contract ();
call SP_Load_StateData ();
call SP_Load_TimeZone ();

call SP_Load_TestData();



       
END$$

DELIMITER ; 
