<?php

	$conn = mysqli_connect("localhost","root","123456");
	if (!$conn) {
			echo "can't connect to database";
			exit;
	}
	mysqli_select_db($conn, "php_project");
	mysqli_query($conn, "SET NAMES utf8")
?>
