<?php
	include 'include/_header.php';
	include 'include/_navbar.php';
?>

<div class="container-fluid">
	<div class="row">
		<?php include 'include/_menuleft.php'; ?>

		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<h1>จัดการสมาชิก</h1>
			<a class="btn btn-primary btn-lg active" href="admin_product_add.php">เพิ่มสินค้า</a><br>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>รหัสสินค้า</th>
							<th>ชื่อสินค้า</th>
							<th>ราคา</th>
							<th>จำนวนเวลา</th>
							<th>แก้ไข</th>
							<th>ลบ</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if (isset($_GET["id"])) {
								$product_id = $_GET["id"];
								$sql = "delete from product where product_id='$product_id'";
								$result = mysqli_query($conn, $sql);
							}

							$sql = "select * from product";
							$result = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_array($result)){
								$product_id = $row["product_id"];
								$product_name = $row["product_name"];
								$product_quantity = $row["product_quantity"];
								$product_price = $row["product_price"];

								echo "<tr>
										<td>$product_id</td>
										<td>$product_name</td>
										<td>$product_quantity</td>
										<td>$product_price</td>
										<td><a href='admin_product_edit.php?id=$product_id'>แก่ไข้</a></td>
										<td><a href='admin_product.php?id=$product_id' onclick='return confirm(\"ยืนยันการลบ\");'>ลบ</a></td>
									</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</main>
	</div>
</div>

<?php include 'include/_footer.php'; ?>
