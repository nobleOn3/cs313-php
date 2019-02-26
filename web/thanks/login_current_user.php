<!DOCTYPE html>
<html>
<head>
	<title>Login Current User</title>
	<link rel="stylesheet" type="text/css" href="thanks.css">
</head>
<body>
	<div class="center">
		<h1 class="titleLime">Sign In Current User</h1>
                <pre>Not a current user?</pre>
                <a href='./login.php'>Sign up here!</a> 

        <form action="sign_in.php" method="POST">
        	Username: <input type="text" name="username"/><br/><br/>
        	Password: <input type="text" name="pass"/><br/><br/>
        	<input type="submit" value="Log in" />
        </form>

	</div>
</body>
</html>