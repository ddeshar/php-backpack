<?php
  if (isset($_POST["btnsubmit"])) {

    $login_username = $_POST['username'];
    $login_password = $_POST['password'];
    $login_email = $_POST['email'];
    $login_status = $_POST['status'];

    //เข้ารหัส รหัสผ่าน
    $salt = 'tikde78uj4ujuhlaoikiksakeidke';
    $hash_login_password = hash_hmac('sha256', $login_password, $salt);

    $query = "INSERT INTO tbl_users (username,password,email,status) VALUES ('$login_username','$hash_login_password','$login_email','$login_status')";

    $result = mysqli_query($conn,$query);

    if ($result) {
      echo "<script type='text/javascript'>";
      echo "alert('เพิมเสร็จแล้ว');";
      echo "window.location='user.php';";
      echo "</script>";
      //header('location: admin_product.php');
    }else{
      die("Query Failed" . mysqli_error($conn));
      // echo "<font color='red'>SQL Error</font><hr>";
    }
    // 
    // if ($result) {
    //     header("Location: user.php");
    // } else {
    //     echo "เกิดข้อผิดพลาด ".  mysqli_error($conn);
    // }
  }
?>
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <h3 class="card-title">Add Product</h3>
      <div class="card-body">
        <form action="" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">Username :</label>
            <div class="col-md-8">
              <input class="form-control" name="username" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Password :</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" name="password" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">E-mail :</label>
            <div class="col-md-8">
              <input class="form-control" name="email" type="email">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="select">Status</label>
            <div class="col-lg-8">
              <select class="form-control" name="status" id="select">
                <option value="0" >user</option>
                <option value="100" >member</option>
                <option value="500" >admin</option>
              </select>
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
