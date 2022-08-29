<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "./connectDB.php";
    session_start();
    

     // signIn

     if (isset($_POST['login-btn'])) {
        $username_login = $_POST['US_Email'];
        $password_login = MD5($_POST['US_Pass']);

        $sql = "SELECT * FROM user WHERE US_Email='$username_login' AND US_Pass='$password_login'";
        $rs = mysqli_query($conn, $sql);
        $fRows = mysqli_fetch_row($rs);
        $numRows = mysqli_num_rows($rs);
        if ($numRows > 0) {
            $_SESSION['US_ID'] = $fRows[0];
            $_SESSION['US_Email'] = $username_login;
            $_SESSION['Type'] = $fRows[9];
            if ($fRows[9] == 1) {
                echo "<script>window.location='admin.php';</script>";
            } else {
                echo "<script>window.location='../user/index.php';</script>";
            }
        } else {
            echo "<script>alert('บัญชีผู้ใช้งาน หรือ รหัสผ่านของคุณไม่ถูกต้อง กรุณาตรวจสอบครั้ง'),window.location='index.php';</script>";
        }
    }
    ?>

</body>
</html>