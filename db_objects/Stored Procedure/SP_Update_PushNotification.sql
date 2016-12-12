DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Update_PushNotification$$
CREATE PROCEDURE SP_Update_PushNotification (IN user_id INTEGER,
												IN first_name NVARCHAR(50),
												EnablePushNotification boolean,
                                                OUT new_id INTEGER)
BEGIN
/* *****************************************************************************************
-- Name SP_Update_PushNotification
-- Description       The following procedure is used to update the users push notification preferences.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/

UPDATE user 
set push_notification_enabled = EnablePushNotification 
where user_id = user_id;

SET new_id = LAST_INSERT_ID();

       
END$$

DELIMITER ; 
