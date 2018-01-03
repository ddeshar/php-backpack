<?php
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
      echo "window.location='product.php';";
      echo "</script>";
      //header('location: admin_product.php');
    }else{
      die("Query Failed" . mysqli_error($conn));
      // echo "<font color='red'>SQL Error</font><hr>";
    }
  }
?>
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <h3 class="card-title">Add Product</h3>
      <div class="card-body">
        <form action="" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">ชื่อสินค้า :</label>
            <div class="col-md-8">
              <input class="form-control" name="pname" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">คำอธิบาย :</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" name="pdetail" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">ราคา :</label>
            <div class="col-md-8">
              <input class="form-control" name="pprice" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">จำนวนเวลา :</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" name="pquantity" type="text">
            </div>
          </div>

          <div class="card-footer">
            <div class="row">
              <div class="col-md-8 col-md-offset-3">
                <button class="btn btn-primary icon-btn" type="submit" name="btnsubmit" value="send"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Product</button>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
