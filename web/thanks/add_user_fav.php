<?php
/***********************************************
* This page allows a user to create an 
* "account".
***********************************************/

require "dbConnect.php";
$db = get_db();

$i_file = $_GET['i_file'];
$user = $_GET['user'];

echo "$i_file";
echo "$user";

// $query = "SELECT id FROM users WHERE user = '$user'";
// $stmt = $db->prepare($query);
// $stmt->execute();
// $user_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $user_id = $user_array['id'];

// $query = "SELECT id FROM thank_you_images WHERE image_file = '$i_file'";
// $stmt = $db->prepare($query);
// $stmt->execute();
// $img_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $img_id = $img_array['id'];

// $query = "INSERT INTO user_favorites(user_id, image_id) VALUES ($user_id, $img_id)";
// $stmt = $db->prepare($query);
// $stmt->execute();

// header("Location: thank_you_list.php");
// die();

?>