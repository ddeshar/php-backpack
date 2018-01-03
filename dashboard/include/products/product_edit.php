<?php
  require_once 'include/permission/admin.php';
  // Form Submit
  if (isset($_POST["btnEdit"])) {
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $pprice = $_POST["pprice"];
    $pquantity = $_POST["pquantity"];
    $pdetail = $_POST["pdetail"];

    $sql = "update product set product_name='$pname', product_price='$pprice', product_quantity='$pquantity', product_detail='$pdetail' where product_id='$pid'";
    //echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script type='text/javascript'>";
      echo "alert('แก้ไขสินค้าสำเร็จ');";
      echo "window.location='product.php';";
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
      $pdetail = $row["product_detail"];
      $pprice = $row["product_price"];
    }else{
      $pid = "";
      $pname = "";
      $pquantity = "";
      $pdetail = "";
      $pprice = "";
    }
  }
?>

<div class="row">
  <div class="col-md-8">
    <div class="card">
      <h3 class="card-title">Edit Product</h3>
      <div class="card-body">
        <form action="" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">ชื่อสินค้า :</label>
            <div class="col-md-8">
              <input class="form-control" name="pname" value="<?php echo "$pname"; ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">คำอธิบาย :</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" name="pdetail" value="<?php echo "$pdetail"; ?>"  type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">ราคา :</label>
            <div class="col-md-8">
              <input class="form-control" name="pprice" value="<?php echo "$pprice"; ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">จำนวนเวลา :</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" name="pquantity" value="<?php echo "$pquantity"; ?>" type="text">
            </div>
          </div>

          <div class="card-footer">
            <div class="row">
              <div class="col-md-8 col-md-offset-3">
                <input name="pid" type="hidden" value="<?php echo "$pid"; ?>" />
                <button class="btn btn-primary icon-btn" type="submit" name="btnEdit" value="แก้ไขสินค้า"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Product</button>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
