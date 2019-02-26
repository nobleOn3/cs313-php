<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="thanks.css">
</head>
<body>
	<div class="center">
		<h1 class="titleLime">Login</h1>

        <form action="add_new_user.php" method="POST">
        	Username: <input type="text" name="username"/><br/><br/>
        	Password: <input type="text" name="pass"/><br/><br/>
        	First and Last Name: <input type="text" name="name"/><br/><br/>
        	<input type="submit" value="Create Account" />
        </form>

	</div>
</body>
</html>