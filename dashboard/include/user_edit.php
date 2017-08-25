<?php
  // Form Submit
  if (isset($_POST["btnEdit"])) {
    $pid = $_POST["pid"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $status = $_POST["status"];

    $salt = 'tikde78uj4ujuhlaoikiksakeidke';
    $hash_login_password = hash_hmac('sha256', $login_password, $salt);

    $sql = "update tbl_users set username='$username', password='$hash_login_password', email='$email', status='$status' where user_id='$pid'";
    //echo $sql;exit;
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script type='text/javascript'>";
      echo "alert('แก้ไขสินค้าสำเร็จ');";
      echo "window.location='user.php';";
      echo "</script>";
      //header('location: admin_product.php');
    }else{
      echo "<font color='red'>SQL Error</font><hr>";
    }
  }else{
    $product_id = $_GET["id"];
    $sql = "select * from tbl_users where user_id='$product_id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      $pid = $row["user_id"];
      $username = $row["username"];
      $password = $row["password"];
      $email = $row["email"];
      $status = $row["status"];
    }else{
      $pid = "";
      $username = "";
      $password = "";
      $email = "";
      $status = "";
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
            <label class="control-label col-md-3">Username :</label>
            <div class="col-md-8">
              <input class="form-control" name="username" value="<?php echo "$username"; ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Password :</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" name="password" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">E-mail :</label>
            <div class="col-md-8">
              <input class="form-control" name="email" value="<?php echo "$email"; ?>" type="email">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="select">Status</label>
            <div class="col-lg-8">
              <select class="form-control" name="status" id="select">
                <option value="<?=$status?>" ><?php
                  if ($status == 500) {
                    echo "admin";
                  }else if ($status == 100) {
                    echo "member";
                  }else if ($status == 0) {
                    echo "user";
                  }
                ?></option>
                <option value="0" >user</option>
                <option value="100" >member</option>
                <option value="500" >admin</option>
              </select>
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
