<?php
  $conn = mysqli_connect('localhost','root','123456','php_project');

  if (mysqli_connect_errno()) {
    echo "ไม่สามารถติดต่อฐานข้อมูล mysql ได้". mysqli_connect_error();
  }
  mysqli_set_charset($conn, 'utf8');
