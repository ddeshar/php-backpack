<?php
        session_start();
        // if (!isset($_SESSION['is_admin'])) {
        //     header("Location: admin.php");
        // }else if (!isset($_SESSION['is_member'])) {
        //     header("Location: member.php");
        // }else if (!isset($_SESSION['is_user'])) {
        //     header("Location: user.php");
        // }
        // require 'dbconnect.php';
        $session_login_id = $_SESSION['user_id'];

        $qry_user = "SELECT * FROM tbl_users WHERE user_id='$session_login_id'";
        $result_user = mysqli_query($conn,$qry_user);
        if ($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            $s_login_username = $row_user['username'];
            $s_login_email = $row_user['email'];
            mysqli_free_result($result_user);
        }
