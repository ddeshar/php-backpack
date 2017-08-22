<?php

	$conn = mysqli_connect("localhost","root","mysql");
	if (!$conn) {
			echo "can't connect to database";
			exit;
	}
	mysqli_select_db($conn, "php_project");
	mysqli_query($conn, "SET NAMES utf8")
?>
