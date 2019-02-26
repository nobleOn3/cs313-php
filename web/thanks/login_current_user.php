<!DOCTYPE html>
<html>
<head>
	<title>Login Current User</title>
	<link rel="stylesheet" type="text/css" href="thanks.css">
</head>
<body>
	<div class="center">
		<h1 class="titleLime">Sign In Current User</h1>
                <h3 class="titleLime">Not a current user?</h3>
                <a href='./login.php'>Sign up here!</a> 
                <br/><br/><br/>

        <form action="sign_in.php" method="POST">
        	Username: <input type="text" name="username"/><br/><br/>
        	Password: <input type="text" name="pass"/><br/><br/>
        	<input type="submit" value="Log in" />
        </form>

	</div>
</body>
</html>