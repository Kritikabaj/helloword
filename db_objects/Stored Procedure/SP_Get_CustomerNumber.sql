DELIMITER $$
DROP PROCEDURE IF EXISTS SP_Get_CustomerNumber$$
CREATE PROCEDURE SP_Get_CustomerNumber (IN customer_number NVARCHAR(50),
                                            OUT errormsg NVARCHAR(2000))
BEGIN
/* *****************************************************************************************
-- Name SP_Get_CustomerNumber
-- Description  The following procedure is used to return customer information given a customer number.
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/14/16                   Create Procedure
-- ******************************************************************************************
*/


SELECT first_name,
		last_name
FROM user
WHERE BillingSiteID = customer_number; 

       
END$$

DELIMITER ; 
