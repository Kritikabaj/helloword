DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Load_TestData$$

CREATE PROCEDURE SP_Load_TestData()
BEGIN
/* *****************************************************************************************
-- Name SP_Load_TestData
-- Description      The following is used to load test data for testing the solution
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/10/16                   Create Procedure
-- ******************************************************************************************
*/
# Declarations
DECLARE I INTEGER; 
DECLARE ICHAR CHAR(50);
DECLARE stateid INTEGER DEFAULT 10; 
DECLARE property_count TINYINT;
DECLARE addressid INTEGER;
DECLARE invitecode NVARCHAR(20);
DECLARE property_addressid INTEGER;
       
       # Load up the state table
       #CALL SP_Load_StateData;
       
            
       # Simulate loading data that would be loaded into the billing system. This is the shelled account
       # data for properties that would be part of the survey process.
       
       
       DELETE FROM property_address;
       DELETE FROM address;
       DELETE FROM invite_code;
       
       # Load the property_address table. 
       
       
       SET i = 1;
       SET property_count = 10;
       
       #SELECT stateid = ID FROM state WHERE abbreviation = 'FL';
       
       
       WHILE (i <= property_count) DO
			SET ICHAR = CONVERT(I, CHAR(50));
            
			INSERT INTO address
						(`address_line1`,
						`address_line2`,
						`state_id`,
						`city`,
						`postal_code`)
			VALUES
						('1100 Fingerlake Road',
						CONCAT('Apartment - ', ICHAR),
						10,
						'Tampa',
						'33615');
                        
            SET addressid = LAST_INSERT_ID();
            
            # Load up the property_address table
            INSERT INTO property_address
						(`address_id`,
						`msa_property_id`,
						`billing_site_id`,
						`mod_person_id`,
						`active`)
						VALUES
						(addressid,
						1,
						i,
						1,
						TRUE);

			SET property_addressid = LAST_INSERT_ID();
            
            # Load up the invitation table.
            
            # Random invitation code
            SET invitecode = FLOOR(RAND()*(99999-10+1))+10;
            
            INSERT INTO invite_code
						(`invitation_code`,
						`generate_date`,
						`expire_date`,
						`head_household_invite`,
						`first_name`,
						`last_name`,
						`emailaddress`,
						`phone`,
						`password`,
						`billing_site_id`,
						`property_address_id`,
						`mod_person_id`,
						`active`,
						`property_name`)
						VALUES
						(invitecode,
						NOW(),
						DATE_ADD(NOW(), INTERVAL 30 DAY),
						TRUE,
						CONCAT('Geoff - ', ICHAR),
						'Baker',
						'geoff.baker@hotwirecommunications.com',
						'3059889898',
						NULL,
						i,
						property_addressid,
						1,
						TRUE,
						'Boca West');


                        
			SET i = i + 1;
		END WHILE;
                   
END$$

DELIMITER ; 
