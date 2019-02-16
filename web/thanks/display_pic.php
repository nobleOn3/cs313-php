<?php
/***********************************************
* This page shows the list of thank you images
* and provides links to see them.
***********************************************/

require "dbConnect.php";
$db = get_db();

function add_pic() {
    $file = $_GET['i_file'];
	$user = $_GET['user'];

    $query = "SELECT id FROM users WHERE user = $user";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$user_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$query = "SELECT id FROM thank_you_images WHERE image_file = $i_file";
    $stmt = $db->prepare($query);
	$stmt->execute();
	$img_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$query = "INSERT INTO user_favorites(user_id, image_id) VALUES ($user_id, $img_id)";
    $stmt = $db->prepare($query);
	$stmt->execute();

	header("Location: thank_you_list.php");
	die();
}
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
		    $user = $_GET['user'];

		    echo "<h1 class='title'>$name</h1>";

		   	echo "<img src='$file' alt = '$name'/>";
		?>

		<button onClick="<?php add_pic()?>;" value="Add to favorites"/>

	</div>
</body>
</html>