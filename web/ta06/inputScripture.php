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
	<title>Input Your Scripture</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="">

		<form action="insertScripture.php" method="POST">
			Book: <input type="text" name="book" id="book">
			Chapter: <input type="text" name="chapter" id="chapter">
			Verse: <input type="text" name="verse" id="verse">
			Content: <input type="textarea" name="content" id="content">


		<?php
		$statement = $db->prepare("SELECT name FROM topics");
		$statement->execute();

		while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$name = $row['name'];
			echo "$name . ' ' <input type='checkbox' name='topic'>";
		}

		?>

        </form>

	</div>
</body>
</html>