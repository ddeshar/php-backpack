<?php
	include 'include/_header.php';
	include 'include/_navbar.php';
?>

<div class="container-fluid">
	<div class="row">
		<?php include 'include/_menuleft.php'; ?>

		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<h1><?php echo "มึงมาแล้วหรอ " . $_SESSION["username"] ; ?></h1>

		</main>
	</div>
</div>

<?php include 'include/_footer.php'; ?>
