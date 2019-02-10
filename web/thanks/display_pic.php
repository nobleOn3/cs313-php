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
		    $file = $_GET['i_file'];

		    echo "<h1 class='title'>$name</h1>";

		   	echo "<img src='$file' alt = '$name'/>";

		?>

	</div>
</body>
</html>