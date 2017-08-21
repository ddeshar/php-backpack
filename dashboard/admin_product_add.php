<?php
	include 'include/_header.php';
	include 'include/_navbar.php';

	if (isset($_POST["btnsubmit"])) {
		$pname = $_POST["pname"];
		$pdetail = $_POST["pdetail"];
		$pprice = $_POST["pprice"];
		$pquantity = $_POST["pquantity"];

		$sql = "INSERT INTO product (product_name,product_detail,product_price,product_quantity) VALUES('$pname','$pdetail','$pprice','$pquantity')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('เพิมเสร็จแล้ว');";
			echo "window.location='admin_product.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			die("Query Failed" . mysqli_error($conn));
			// echo "<font color='red'>SQL Error</font><hr>";
		}
	}
?>

	<div class="container-fluid">
		<div class="row">
			<?php include 'include/_menuleft.php'; ?>
			<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
				<h1>Dashboard</h1>

				<form method="post" action="admin_product_add.php">
				  <div class="form-group">
				    <label for="exampleInputEmail1">ชื่อสินค้า:</label>
				    <input type="text" name="pname"class="form-control">
				  </div>
					<div class="form-group">
						<label for="exampleInputEmail1">คำอธิบาย:</label>
						<input type="text" name="pdetail"class="form-control">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">ราคา:</label>
						<input type="text" name="pprice"class="form-control">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">จำนวนเวลา:</label>
						<input type="text" name="pquantity"class="form-control">
					</div>
				  <button type="submit" name="btnsubmit" value="send" class="btn btn-primary">Submit</button>
				</form>
			</main>
		</div>
	</div>

<?php include 'include/_footer.php'; ?>
