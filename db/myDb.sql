List of important commands for the thank you site.
Author: Jessen Noble
*********************************************************************************************

TABLES:
(* indicates primary key)
(- indicates foreign key relationship)
--------------------------------------
users (id:int*, name:varchar(60), passsword:varchar(20))

primary_color (id:int*, name:varchar(30))

thank_you_images (id:int*, name:varchar(30), -primary_color:int, image:varchar(100)) 
   (related to primary color)

user_favorites (-user_id:int, -image_id:int); (related to users and thank_you_images)

*********************************************************************************************
Creating tables:
CREATE TABLE table_name (var_name		var_type (add primary key here too if it applies), 
	var_name	var_type, etc.);
*********************************************************************************************
INSERTING INFO:
INSERT INTO table_name VALUES(val_1, val_2, val_3, etc); (value variables should be in order
 they appear in the table)
*********************************************************************************************
DELETING INFO:

Removing a table:
DROP TABLE table_name;
----------------------
Removing the contents of a table:
DELETE FROM table_name;
-----------------------
Removing a row:
DELETE FROM table_name WHERE column_name = value; (column_name ex: id; value ex: 1)
-----------------------------------------------------------------------------------

*********************************************************************************************