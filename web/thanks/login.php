<?php
/***********************************************
* This page allows a user to create an 
* "account".
***********************************************/

require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="thanks.css">
</head>
<body>
	<div class="center">
		<h1 class="titleLime">Login</h1>

        <form action="addNewUser.php" method="POST">
        	Username: <input type="text" name="username"/><br/>
        	Password: <input type="text" name="pass"/><br/>
        	<input type="submit" value="Sign Up!" />
        </form>

	</div>
</body>
</html>