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
			<br/>
			Chapter: <input type="text" name="chapter" id="chapter">
			<br/>
			Verse: <input type="text" name="verse" id="verse">
			<br/>
			Content: <input type="textarea" name="content" id="content">
			<br/>


		<?php
		$statement = $db->prepare("SELECT id, name FROM topics");
		$statement->execute();

		while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
			$name = $row['name'];
			$id = $row['id']
			echo "$name <input type='checkbox' name='topic' value='$id'><br/>";
		}

		?>

		<input type="submit" value="Submit Scripture">

        </form>

	</div>
</body>
</html>