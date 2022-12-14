<!DOCTYPE html>
<htmlF lang="en">

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
    <title>regis</title>
</head>

<body>
    <img src="../img/bbg.png" alt="">
    <form class="row g-3 register " action="./signup_db.php" method="POST">
        <h2 class="text-center" style="margin-top: 50px ;">สมัครสมาชิก</h2>
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
        <?php } ?><div class="col-md-6">
            <label class="form-label">ชื่อ</label>
            <input type="text" name="firstname" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">นามสกุล</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">อีเมล</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">รหัสผ่าน</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">ยืนยันรหัสผ่าน</label>
            <input type="password" name="cf_password" class="form-control">
        </div>
        <div class="col-12 ">
            <div class="forgetpass">
                <a class="form-check-label" for="gridCheck">
                    ลืมรหัสผ่าน
                </a>
            </div>
        </div>
        <div class="g-3  col-md-12 text-center">
            <button type="submit" name="signup" class="btn btn-primary w-50 ">สมัครสมาชิก</button>
        </div>
        <a href="../fuction/auth-login.php" class="text-center">มีสมาชิกอยู่แล้ว</a>
    </form>
</body>

</htmlF