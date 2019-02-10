<?php
/*********************************************
* This file will allow other pages to connect
* to the database!
*********************************************/

function get_db() {
	$db = NULL;

	try {

		$db_url = getenv('DATABASE_URL');

		$db_opts = parse_url($db_url);

		$db_host = $db_opts["host"];
		$db_port = $db_opts["port"];
		$db_user = $db_opts["user"];
		$db_pass = $db_opts["pass"];
		$db_name = ltrim($db_opts["path"], '/');

		$db = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $some_prob) {
		echo "Error connecting to DB. Details: $some_prob";
		die();
	}

	return $db;
}

?>