<?php
/***********************************************
* This page allows a user to create an 
* "account".
***********************************************/

require "dbConnect.php";
$db = get_db();

$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['pass']);

$stmt = $db->prepare("SELECT pass FROM users WHERE name = '$user'");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $pass_real = $row['pass'];
}

if(password_verify("$pass", "$pass_real")) {
   //echo "$pass_real is equal to $pass";
   $new_page = "thank_you_list.php?user=$user";
   header("Location: $new_page");
   die();
}

else {
	//echo "$pass_real is not equal to $pass";
	$new_page = "login_current_user.php";
    header("Location: $new_page");
    die();
}

?>