<?php
	session_start();

	if (isset($_SESSION["session_id"]) == false) {
		echo "ยังบ่ได้ Login นะงับ<br>";
		echo "<a href='login.php'>เข้าสูระบบ</a>";
		exit;
	}

	if ($_SESSION["username"] != "admin") {
		echo "Admin Only<br>";
		echo "<a href='login.php'>เข้าสู้ระบบ</a>";
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
</head>
<body>
<div id="header">
	Admin Menu --> <a href="admin.php">home</a> <a href="admin_product.php">product</a> <a href="logout.php">Logout</a>
</div>
