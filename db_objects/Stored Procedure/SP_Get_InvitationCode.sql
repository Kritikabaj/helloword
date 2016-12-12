DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Get_InvitationCode$$
CREATE PROCEDURE SP_Get_InvitationCode (IN invitationcode NVARCHAR(50))
BEGIN
/* *****************************************************************************************
-- Name SP_Get_InvitationCode
-- Description       The following procedure will look up an invitation code
--                   if an invitation code is found, records pertaining to the code
--					 are returned to the calling function, if not an error message
--					 is returned.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/09/16                   Create Procedure
-- ******************************************************************************************
*/

       SELECT 	id,
				first_name,
				last_name,
				emailaddress,
                phone,
				property_address_id,
                property_name,
                head_household_invite
       FROM   	invite_code
       WHERE  	invitation_code = invitationcode;
       
END$$

DELIMITER ; 
