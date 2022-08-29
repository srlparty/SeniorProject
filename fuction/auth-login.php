<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth-regis.css">
    <?php
    include "./importlink.php"
    ?>
    <title>login</title>
</head>

<body>
    <img src="../img/bbg.png" alt="">

    <form class="row g-3 register ">
        <h2 class="text-center" style="margin-top: 50px ;">เข้าสู่ระบบ</h2>
        <div class="col-12">
            <label for="input" class="form-label">อีเมล</label>
            <input type="text" class="form-control" id="US_Email" name="US_Email" required>
        </div>
        <div class="col-12">
            <label for="inputpassword" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="US_Pass" name="US_Pass" required>
        </div>
        <div class="col-12 ">
            <div class="forgetpass">
                <a class="form-check-label" for="gridCheck">
                    ลืมรหัสผ่าน
                </a>
            </div>
        </div>
        <div class="g-3  col-md-12 text-center">

            <a href="..."type="submit" name="login-btn" class="btn btn-primary w-50 ">ยืนยัน</a>
        </div>
        <a href="../fuction/auth-regis.php" class="text-center">สมัครสมาชิก</a>
    </form>
</body>

</html