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
	<title>Thank You list</title>
</head>
<body>
	<div>
		<h1>Thank You Designs</h1>

		<?php
		   $stmt = $db->prepare("SELECT name, image_file FROM thank_you_images");
		   $stmt->execute();

		   while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		   	{
		   		$name = $row['name'];
		   		$image_file = $row['image_file'];

		   		echo "<p>$name</p>";
		   	}

		?>

	</div>
</body>
</html>