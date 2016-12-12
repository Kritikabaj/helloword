DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Get_RegistrationValidation$$
CREATE PROCEDURE SP_Get_RegistrationValidation (IN emailaddress NVARCHAR(50),
												IN mobilenumber NVARCHAR(50),
												IN username NVARCHAR(50),
                                                OUT errormsg NVARCHAR(2000))
BEGIN
/* *****************************************************************************************
-- Name SP_Get_RegistrationValidation
-- Description       The following procedure is used to validate the information that is entered by an end user
--					  during the registration process including username, email and phone number to ensure there
--					  are no duplicates.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/10/16                   Create Procedure
-- ******************************************************************************************
*/

DECLARE invite_email_count TINYINT;
DECLARE user_email_count TINYINT;
DECLARE username_count TINYINT;
DECLARE invite_mobile_number_count TINYINT;

		        
        # If the email address is already in the user table means a user already is using this email
        # from a claimed invite or existing user 
        SELECT count(*) INTO user_email_count
        FROM user
        WHERE emailaddress = emailaddress;
        
        SELECT count(*) username_count 
        FROM user
        WHERE username_custom = username_custom;
        
        # All mobile numbers are stored with just numbers (no special charcters)
        SELECT count(*) INTO invite_mobile_number_count 
        FROM invite_code
        WHERE phone = mobilenumber;
        
        SET errormsg = null;
        
        IF user_email_count > 0 THEN SET errormsg = 'Email address already in use. Please choose a different email address.\r\n'; END IF;
        
        IF username_count > 0 THEN SET errormsg = 'Username already in use. Please choose a different username.\r\n' ; END IF;
        
        IF invite_mobile_number_count > 0 THEN SET errormsg = 'Mobile number already in use. Please choose a different mobile number.\r\n'; END IF ;
        
        
       
END$$

DELIMITER ; 
