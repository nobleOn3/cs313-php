<?php
/***********************************************
* This page allows a user to create an 
* "account".
***********************************************/

require "dbConnect.php";
$db = get_db();

$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['pass']);
$name = htmlspecialchars($_POST['name']);

$stmt = $db->prepare('INSERT INTO users(name, pass, user_real) VALUES (:user, :pass, :user_r);');
$stmt->bindValue(':user', $user, PDO::PARAM_STR);
$stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
$stmt->bindValue(':user_r', $name, PDO::PARAM_STR);
$stmt->execute();



$new_page = "thank_you_list.php?user=$user";
header("Location: $new_page");
die();

?>