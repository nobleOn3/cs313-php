<?php
/*********************************************
* This file will allow other pages to connect
* to the database!
*********************************************/

function get_db() {
	$db = NULL;

	try {

		$dbUrl = getenv('DATABASE_URL');

		$dbopts = parse_url($dbUrl);

		$db_host = $dbopts["host"];
		$db_port = $dbopts["user"];
		$db_pass = $dbopts["pass"];
		$db_name = ltrim($dbopts["path"], '/');

		$db = new PDO("psql:host=$db_host;port=$db_port;dbname=$db_name", $dbUser, $dbPassword);

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $ex) {
		echo "Error connecting to DB. Details: $ex";
		die();
	}

	return $db;
}

?>