<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth-regis.css">
    <?php
    session_start();
    include "./importlink.php";
    require_once './connectDB.php'
    ?>
    <title>Forgot password</title>
</head>

<body>
    <img src="../img/bbg.png" alt="">
    <form class="row g-3 register " action="./signup_db.php" method="POST">
        <h2 class="text-center" style="margin-top: 50px ;">ลืมรหัสผ่าน</h2>
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger g-3" role="alert">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['warning'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php
                echo $_SESSION['warning'];
                unset($_SESSION['warning']);
                ?>
            </div>
        <?php } ?>
        <div class="col-12">
            <label class="form-label">อีเมล</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">รหัสผ่านใหม่</label>
            <input type="password" name="us_password" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">ยืนยันรหัสผ่านใหม่</label>
            <input type="password" name="cf_password" class="form-control">
        </div>
        <div class="g-3  col-md-12 text-center">
            <button type="submit" name="signup" class="btn btn-primary w-50 ">ยืนยัน</button>
        </div>
        <a href="../fuction/auth-login.php" class="text-center">เป็นสมาชิกอยู่แล้ว</a>
    </form>
</body>

</html