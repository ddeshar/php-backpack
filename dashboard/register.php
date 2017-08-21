<?php
        require 'include/dbconnect.php';

        $login_username = $_POST['username'];
        $login_password = $_POST['password'];
        $login_email = $_POST['email'];

        //เข้ารหัส รหัสผ่าน
        $salt = 'tikde78uj4ujuhlaoikiksakeidke';
        $hash_login_password = hash_hmac('sha256', $login_password, $salt);

        $query = "INSERT INTO tbl_users (username,password,email) VALUES ('$login_username','$hash_login_password','$login_email')";

        $result = mysqli_query($conn,$query);

        if ($result) {
            header("Location: index.php");
        } else {
            echo "เกิดข้อผิดพลาด ".  mysqli_error($conn);
        }

        mysqli_close($conn);
