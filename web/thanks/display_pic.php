<?php
/***********************************************
* This page shows the list of thank you images
* and provides links to see them.
***********************************************/

require "dbConnect.php";
$db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Display Thank You Message</title>
	<link rel="stylesheet" type="text/css" href="thanks.css">
</head>
<body>
	<div class="center">

		<?php

		    $name = $_GET['i_name'];
		    $i_file = $_GET['i_file'];
		    $user = $_GET['user'];

		    echo "<h1 class='title'>$name</h1>";

		   	echo "<img src='$file' alt = '$name'/>";

		   	echo "<form action='add_user_fav.php?user=$user&i_file=$i_file' method='POST'><input type='submit' value='Add to Favorites'/></form>";
		?>


	</div>
</body>
</html>