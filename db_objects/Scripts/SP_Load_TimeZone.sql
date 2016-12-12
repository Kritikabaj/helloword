
DELIMITER $$

DROP PROCEDURE IF EXISTS SP_Load_TimeZone$$

CREATE PROCEDURE SP_Load_TimeZone ()
BEGIN
/* *****************************************************************************************
-- Name SP_Load_TimeZone
-- Description       One time script to load the time zone table. 
-- Maintainence History
--  Developer                  		Date                       Modification Made
--  Geoff Baker                   	11/11/16                   Create Procedure
-- ******************************************************************************************
*/
	
		DELETE FROM time_zone;
        
		 
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (2, N'Eastern Standard Time', -5, 1, N'(GMT-05:00) Eastern Time (US & Canada)', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (3, N'Greenwich Standard Time', 0, 0, N'(GMT) Casablanca, Monrovia, Reykjavik', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (4, N'GMT Standard Time', 0, 1, N'(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (5, N'W. Europe Standard Time', 1, 1, N'(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (6, N'Central Europe Standard Time', 1, 1, N'(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (7, N'Romance Standard Time', 1, 1, N'(GMT+01:00) Brussels, Copenhagen, Madrid, Paris', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (8, N'Central European Standard Time', 1, 1, N'(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (9, N'W. Central Africa Standard Time', 1, 0, N'(GMT+01:00) West Central Africa', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (10, N'Jordan Standard Time', 2, 1, N'(GMT+02:00) Amman', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (11, N'GTB Standard Time', 2, 1, N'(GMT+02:00) Athens, Bucharest, Istanbul', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (12, N'Middle East Standard Time', 2, 1, N'(GMT+02:00) Beirut', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (13, N'Egypt Standard Time', 2, 1, N'(GMT+02:00) Cairo', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (14, N'South Africa Standard Time', 2, 0, N'(GMT+02:00) Harare, Pretoria', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (15, N'FLE Standard Time', 2, 1, N'(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (16, N'Israel Standard Time', 2, 1, N'(GMT+02:00) Jerusalem', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (17, N'E. Europe Standard Time', 2, 1, N'(GMT+02:00) Minsk', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (18, N'Namibia Standard Time', 2, 1, N'(GMT+02:00) Windhoek', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (19, N'Arabic Standard Time', 3, 1, N'(GMT+03:00) Baghdad', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (20, N'Arab Standard Time', 3, 0, N'(GMT+03:00) Kuwait, Riyadh', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (21, N'Russian Standard Time', 3, 1, N'(GMT+03:00) Moscow, St. Petersburg, Volgograd', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (22, N'E. Africa Standard Time', 3, 0, N'(GMT+03:00) Nairobi', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (23, N'Georgian Standard Time', 3, 1, N'(GMT+03:00) Tbilisi', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (24, N'Iran Standard Time', 3.5, 1, N'(GMT+03:30) Tehran', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (25, N'Arabian Standard Time', 4, 0, N'(GMT+04:00) Abu Dhabi, Muscat', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (26, N'Azerbaijan Standard Time', 4, 1, N'(GMT+04:00) Baku', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (27, N'Caucasus Standard Time', 4, 1, N'(GMT+04:00) Yerevan', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (28, N'Afghanistan Standard Time', 4.5, 0, N'(GMT+04:30) Kabul', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (29, N'Ekaterinburg Standard Time', 5, 1, N'(GMT+05:00) Ekaterinburg', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (30, N'West Asia Standard Time', 5, 0, N'(GMT+05:00) Islamabad, Karachi, Tashkent', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (31, N'India Standard Time', 5.5, 0, N'(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (32, N'Sri Lanka Standard Time', 5.5, 0, N'(GMT+05:30) Sri Jayawardenepura', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (33, N'Nepal Standard Time', 5.75, 0, N'(GMT+05:45) Kathmandu', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (34, N'N. Central Asia Standard Time', 6, 1, N'(GMT+06:00) Almaty, Novosibirsk', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (35, N'Central Asia Standard Time', 6, 0, N'(GMT+06:00) Astana, Dhaka', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (36, N'Myanmar Standard Time', 6.5, 0, N'(GMT+06:30) Yangon (Rangoon)', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (37, N'SE Asia Standard Time', 7, 0, N'(GMT+07:00) Bangkok, Hanoi, Jakarta', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (38, N'North Asia Standard Time', 7, 1, N'(GMT+07:00) Krasnoyarsk', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (39, N'China Standard Time', 8, 0, N'(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (40, N'North Asia East Standard Time', 8, 1, N'(GMT+08:00) Irkutsk, Ulaan Bataar', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (41, N'Singapore Standard Time', 8, 0, N'(GMT+08:00) Kuala Lumpur, Singapore', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (42, N'W. Australia Standard Time', 8, 0, N'(GMT+08:00) Perth', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (43, N'Taipei Standard Time', 8, 0, N'(GMT+08:00) Taipei', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (44, N'Tokyo Standard Time', 9, 0, N'(GMT+09:00) Osaka, Sapporo, Tokyo', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (45, N'Korea Standard Time', 9, 0, N'(GMT+09:00) Seoul', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (46, N'Yakutsk Standard Time', 9, 1, N'(GMT+09:00) Yakutsk', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (47, N'Cen. Australia Standard Time', 9.5, 1, N'(GMT+09:30) Adelaide', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (48, N'AUS Central Standard Time', 9.5, 0, N'(GMT+09:30) Darwin', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (49, N'E. Australia Standard Time', 10, 0, N'(GMT+10:00) Brisbane', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (50, N'AUS Eastern Standard Time', 10, 1, N'(GMT+10:00) Canberra, Melbourne, Sydney', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (51, N'West Pacific Standard Time', 10, 0, N'(GMT+10:00) Guam, Port Moresby', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (52, N'Tasmania Standard Time', 10, 1, N'(GMT+10:00) Hobart', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (53, N'Vladivostok Standard Time', 10, 1, N'(GMT+10:00) Vladivostok', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (54, N'Central Pacific Standard Time', 11, 0, N'(GMT+11:00) Magadan, Solomon Is., New Caledonia', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (55, N'New Zealand Standard Time', 12, 1, N'(GMT+12:00) Auckland, Wellington', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (56, N'Fiji Standard Time', 12, 0, N'(GMT+12:00) Fiji, Kamchatka, Marshall Is.', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (57, N'Tonga Standard Time', 13, 0, N'(GMT+13:00) Nuku  alofa', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (58, N'Azores Standard Time', -1, 1, N'(GMT-01:00) Azores', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (59, N'Cape Verde Standard Time', -1, 0, N'(GMT-01:00) Cape Verde Is.', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (60, N'Mid-Atlantic Standard Time', -2, 1, N'(GMT-02:00) Mid-Atlantic', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (61, N'E. South America Standard Time', -3, 1, N'(GMT-03:00) Brasilia', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (62, N'SA Eastern Standard Time', -3, 0, N'(GMT-03:00) Buenos Aires, Georgetown', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (63, N'Greenland Standard Time', -3, 1, N'(GMT-03:00) Greenland', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (64, N'Newfoundland Standard Time', -3.5, 1, N'(GMT-03:30) Newfoundland', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (65, N'Atlantic Standard Time', -4, 1, N'(GMT-04:00) Atlantic Time (Canada)', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (66, N'SA Western Standard Time', -4, 0, N'(GMT-04:00) Caracas, La Paz', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (67, N'Central Brazilian Standard Time', -4, 1, N'(GMT-04:00) Manaus', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (68, N'Pacific SA Standard Time', -4, 1, N'(GMT-04:00) Santiago', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (69, N'SA Pacific Standard Time', -5, 0, N'(GMT-05:00) Bogota, Lima, Quito, Rio Branco', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (70, N'US Eastern Standard Time', -5, 0, N'(GMT-05:00) Indiana (East)', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (71, N'Central America Standard Time', -6, 0, N'GMT-06:00) Central America', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (72, N'Central Standard Time', -6, 1, N'(GMT-06:00) Central Time (US & Canada)', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (73, N'Central Standard Time (Mexico)', -6, 1, N'(GMT-06:00) Guadalajara, Mexico City, Monterrey', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (74, N'Canada Central Standard Time', -6, 0, N'(GMT-06:00) Saskatchewan', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (75, N'US Mountain Standard Time', -7, 0, N'(GMT-07:00) Arizona', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (76, N'Mountain Standard Time (Mexico)', -7, 1, N'(GMT-07:00) Chihuahua, La Paz, Mazatlan', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (77, N'Mountain Standard Time', -7, 1, N'(GMT-07:00) Mountain Time (US & Canada)', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (78, N'Pacific Standard Time', -8, 1, N'(GMT-08:00) Pacific Time (US & Canada)', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (79, N'Pacific Standard Time (Mexico)', -8, 1, N'(GMT-08:00) Tijuana, Baja California', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (80, N'Alaskan Standard Time', -9, 1, N'(GMT-09:00) Alaska', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (81, N'Hawaiian Standard Time', -10, 0, N'(GMT-10:00) Hawaii', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (82, N'Samoa Standard Time', -11, 0, N'(GMT-11:00) Midway Island, Samoa', 1);
		INSERT time_zone (id, zone_name, utc_difference, use_daylight, display_name, active) VALUES (83, N'Dateline Standard Time', -12, 0, N'(GMT-12:00) International Date Line West', 1);






       
END$$

DELIMITER ; 
