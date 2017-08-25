<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div>
        <h1>ลงทะเบียน</h1>
        <form action="register.php" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username" required autofocus>
            <label for="password">Password: </label>
            <input type="password" name="password" required>
            <label for="email">E-mail: </label>
            <input type="email" name="email" placeholder="example@domain.com" required>
            <br><br>
            <input type="submit" value="ลงทะเบียน">
        </form>
        <br>
        <br>
        <a href="index.php">กลับหน้าหลัก</a>
        </div>
    </body>
</html>
