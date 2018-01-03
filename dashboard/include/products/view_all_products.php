<div class="page-title">
  <div>
    <h1>Data Table</h1>
    <ul class="breadcrumb side">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li>Tables</li>
      <li class="active"><a href="#">Data Table</a></li>
    </ul>
  </div>
  <div>
    <a class="btn btn-primary btn-flat" href="product.php?source=product_add"><i class="fa fa-lg fa-plus"></i></a>
    <a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a>
    <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <table class="table table-hover table-bordered" id="sampleTable">
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
										<td><a href='product.php?source=product_edit&id=$product_id'>แก่ไข้</a></td>
										<td><a href='product.php?id=$product_id' onclick='return confirm(\"ยืนยันการลบ\");'>ลบ</a></td>
									</tr>";
							}
						?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
