<?php
	include 'include/_header.php';
	include 'include/_navbar.php';

	$output = '';

	if(isset($_POST['search'])) {
		$search = $_POST['search'];
		$search = preg_replace("#[^0-9a-z]i#","", $search);

		$query = mysqli_query($conn, "SELECT * FROM product WHERE product_name LIKE '%$search%'") or die ("Could not search");
		$count = mysqli_num_rows($query);

		if($count == 0){
			$output = "There was no search results!";

		}else{

			while ($row = mysqli_fetch_array($query)) {

				$pid = $row ['product_id'];
				$pname = $row ['product_name'];
				$pdetail = $row ['product_detail'];
				$pprice = $row ['product_price'];
				$pquantity = $row ['product_quantity'];

				// $output .='<div> '.$pname.''.$pdetail.''.$pprice.''.$pquantity.'</div>';
				$output .='<tr>
						<td>'.$pname.'</td>
						<td>'.$pdetail.'</td>
						<td>'.$pprice.'</td>
						<td>'.$pquantity.'</td>
						<td><a href=admin_product_edit.php?id='.$pid.'>แก่ไข้</a></td>
						<td><a href=admin_product.php?id='.$pid.' onclick=return confirm(ยืนยันการลบ);>ลบ</a></td>
					</tr>';
			}

		}
	}
?>

<div class="container-fluid">
	<div class="row">
		<?php include 'include/_menuleft.php'; ?>

		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<h1><?php echo "มึงมาแล้วหรอ " . $_SESSION["username"] ; ?></h1>

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
						<?php print ("$output");?>
					</tbody>
				</table>
			</div>
		</main>
	</div>
</div>

<?php include 'include/_footer.php'; ?>
