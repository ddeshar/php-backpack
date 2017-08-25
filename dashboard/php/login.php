<?php
    require 'include/dbconnect.php';

    $login_username = mysqli_real_escape_string($conn,$_POST['username']);
    $login_password = mysqli_real_escape_string($conn,$_POST['password']);

    $salt = 'tikde78uj4ujuhlaoikiksakeidke';
    $hash_login_password = hash_hmac('sha256', $login_password, $salt);

    $sql = "SELECT * FROM tbl_users WHERE username=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"ss", $login_username,$hash_login_password);
    mysqli_execute($stmt);
    $result_user = mysqli_stmt_get_result($stmt);

    if ($result_user->num_rows == 1) {
        session_start();
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $_SESSION['user_id'] = $row_user['user_id'];

        if ($row_user['status'] == 500) {
          $_SESSION['is_admin'] = 500;
          $_SESSION['login_username'] = $row_user['login_username'];
          header("Location: admin.php");

        }elseif ($row_user['status'] == 100) {
          $_SESSION['is_member'] = 100;
          $_SESSION['login_username'] = $row_user['login_username'];
          header("Location: member.php");

        }elseif ($row_user['status'] == 0) {
          $_SESSION['is_user'] = 0;
          $_SESSION['login_username'] = $row_user['login_username'];
          header("Location: user.php");
        }
    } else{
      echo "sorry ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }


// var_dump($result_user);
// exit;
    // if ($result_user->num_rows == 1) {
    //     session_start();
    //     $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
    //     $_SESSION['user_id'] = $row_user['user_id'];
    //     header("Location: admin.php");
    // } else {
    //     echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    // }
