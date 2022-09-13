<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth-regis.css">
    <?php
    
     
      include "../fuction/connectDB.php";
      include "../fuction/importlink.php"
    
    ?>
    <title>Edit Informaion</title>
</head>

<body>
    <img src="../img/bbg.png" alt="">
    <form class="row g-3 register " action="./signup_db.php" method="POST">
        <h2 class="text-center" style="margin-top: 50px ;">แก้ไขมูลส่วนตัว</h2>
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
        <div class="col-md-6">
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
        <div class="g-3  col-md-12 text-center">
            <button type="submit" name="signup" class="btn btn-primary w-50 ">ยืนยัน</button>
        </div>
        <a href="../user/index-user.php" class="text-center">กลับสู่หน้าหลัก</a>
    </form>
</body>

</html