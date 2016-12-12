DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Insert_AccountRegistrationNew$$
CREATE PROCEDURE SP_Insert_AccountRegistrationNew (IN invite_code_id INTEGER,
												IN first_name NVARCHAR(50),
												IN last_name NVARCHAR(50),
                                                IN email NVARCHAR(50),
                                                IN phone NVARCHAR(50),
                                                IN pin NVARCHAR(50),
                                                IN password NVARCHAR(50),
                                                IN cloud_id NVARCHAR(50),
                                                IN head_household BOOLEAN,
                                                IN mod_person_id INTEGER,
                                                OUT errormsg NVARCHAR(2000))
BEGIN
/* *****************************************************************************************
-- Name SP_Insert_AccountRegistrationNew
-- Description       The following procedure is called when a new user registers on the system. 
--					 this registration is for head of household users only, family members are handled in another procedure
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/11/16                   Create Procedure
-- ******************************************************************************************
*/

# Declarations
DECLARE default_timezone INTEGER;
DECLARE user_id INTEGER;
DECLARE contact_type_email INTEGER;
DECLARE language_id INTEGER;
DECLARE contract_id_tos INTEGER;
DECLARE contract_id_pp INTEGER;	
DECLARE contact_type_mobile INTEGER;	
        
        
		# Default time zone
        SELECT id into default_timezone FROM time_zone where zone_name = 'Eastern Standard Time';

		# Create a user in the user table for the newly registered person.
		 INSERT INTO user
							(`first_name`,
							`last_name`,
							`username_custom`,
							`emailaddress_login`,
							`cloud_id`,
							`pin`,
							`BillingSiteID`,
							`head_of_household`,
							`push_notification_enabled`,
							`invitecode_id`,
							`timezone_id`,
							`mod_person_id`,
							`active`)
							VALUES
							(first_name,
							last_name,
							null,
							email,
							'123',
							pin,
							'1111',
							true,
							false,
							invite_code_id,
							default_timezone,
							mod_person_id,
							true);
       
       SET user_id = LAST_INSERT_ID();
        
        # Setup the contact for the user
        
        SELECT id INTO contact_type_email from vlist_item where code = 'CONTACTTYPEEMAIL';
        
        
        INSERT INTO contact
							(`information`,
							`user_id`,
							`ContactTypeLI`,
							`verified`,
							`primary`,
							`confirmation_code`,
							`mod_person_id`,
							`active`)
							VALUES
							(email,
							user_id,
							contact_type_email,
							true,
							true,
							null,
							1,
							true);
                            
        # Save the mobile number for the user.
        
		SELECT id INTO contact_type_mobile from vlist_item where code = 'CONTACTTYPEMOBPHONE';
        
        INSERT INTO contact
							(`information`,
							`user_id`,
							`ContactTypeLI`,
							`verified`,
							`primary`,
							`confirmation_code`,
							`mod_person_id`,
							`active`)
							VALUES
							(phone,
							user_id,
							contact_type_mobile,
							true,
							true,
							null,
							1,
							true);
        
        
        # Default the language to English
        SELECT id INTO language_id from language where name = 'English';
        
        #Insert a record into the user_language table.
        INSERT INTO user_language
					(`user_id`,
					`language_id`,
					`mod_person_id`,
					`active`)
					VALUES
					(user_id,
					language_id,
					1,
					TRUE);


		# Get the active contract, this is the contract the registering user accepted.
        SELECT id INTO contract_id_tos 
        from contract 
        where contract_type_li = (select id from vlist_item where code = 'CONTRACTTYPETOS');

		# Create a record in the user_contract table to store the user accepted the active contract.
		INSERT INTO user_contract
						(`user_id`,
						`contract_id`,
						`accepted_date`,
						`mod_person_id`,
						`active`)
						VALUES
						(user_id,
						contract_id_tos,
						NOW(),
						1,
						true);
         
		SELECT id INTO contract_id_pp 
        from contract 
        where contract_type_li = (select id from vlist_item where code = 'CONTRACTTYPEPRIV'); 
        
         
		INSERT INTO user_contract
						(`user_id`,
						`contract_id`,
						`accepted_date`,
						`mod_person_id`,
						`active`)
						VALUES
						(user_id,
						contract_id_pp,
						NOW(),
						1,
						true);

       
END$$

DELIMITER ; 
