<?php
include 'include/_header.php';
include 'include/_navbar.php';

	// Form Submit
	if (isset($_POST["btnEdit"])) {
		$pid = $_POST["pid"];
		$pname = $_POST["pname"];
		$pprice = $_POST["pprice"];
		$pquantity = $_POST["pquantity"];

		$sql = "update product set product_name='$pname', product_price='$pprice', product_quantity='$pquantity' where product_id='$pid'";
		//echo $sql;exit;
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('แก้ไขสินค้าสำเร็จ');";
			echo "window.location='admin_product.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			echo "<font color='red'>SQL Error</font><hr>";
		}
	}else{
		$product_id = $_GET["id"];
		$sql = "select * from product where product_id='$product_id'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$pid = $row["product_id"];
			$pname = $row["product_name"];
			$pquantity = $row["product_quantity"];
			$pprice = $row["product_price"];
		}else{
			$pid = "";
			$pname = "";
			$pquantity = "";
			$pprice = "";
		}
	}
?>
<div class="container-fluid">
	<div class="row">
		<?php include 'include/_menuleft.php'; ?>
		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<h1>แก้ไขสินค้า</h1>

			<form method="post" action="admin_product_edit.php">
				<div class="form-group">
					<label for="exampleInputEmail1">ชื่อสินค้า:</label>
					<input name="pname" type="text" value="<?php echo "$pname"; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">ราคา:</label>
					<input name="pprice" type="text" value="<?php echo "$pprice"; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">จำนวนเวลา:</label>
					<input name="pquantity" type="text" value="<?php echo "$pquantity"; ?>" class="form-control">
				</div>
				<input name="pid" type="hidden" value="<?php echo "$pid"; ?>" />
				<button name="btnEdit" type="submit" value="แก้ไขสินค้า" class="btn btn-primary">Submit</button>
			</form>

</main>
</div>
</div>

<?php include 'include/_footer.php'; ?>
