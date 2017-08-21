<?php
	include 'include/_header.php';
	include 'include/_navbar.php';
?>

<div class="container-fluid">
	<div class="row">
		<?php include 'include/_menuleft.php'; ?>

		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<?php
							echo "รหัสสมาชิก: ".$_SESSION['user_id'];
							echo "<br>";
							echo "ยินดีต้อนรับคุณ $s_login_username อีเมล์ $s_login_email" ;
			?>

		</main>
	</div>
</div>

<?php include 'include/_footer.php'; ?>
