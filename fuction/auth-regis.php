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
    <title>regis</title>
</head>

<body>
    <img src="../img/bbg.png" alt="">

    <form class="row g-3 register ">
        <h2 class="text-center" style="margin-top: 50px ;">สมัครสมาชิก</h2>
        <div class="col-md-6">
            <label for="inputName" class="form-label">ชื่อ</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">นามสกุล</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">อีเมล</label>
            <input type="text" class="form-control" id="inputAddress" required>
        </div>
        <div class="col-12">
            <label for="inputpassword" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="inputAddress2" required>
        </div>
        <div class="col-12">
            <label for="inputpassword2" class="form-label">ยืนยันรหัสผ่าน</label>
            <input type="password" class="form-control" id="inputpassword" required>
        </div>
        <div class="col-12 ">
            <div class="forgetpass">
                <a class="form-check-label" for="gridCheck">
                    ลืมรหัสผ่าน
                </a>
            </div>
        </div>
        <div class="g-3  col-md-12 text-center">
            <a href=".." type="submit" class="btn btn-primary w-50 ">ยืนยัน</a>
        </div>
        <a href="../fuction/auth-login.php" class="text-center">สมัครสมาชิกอยู่แล้ว</a>
    </form>
</body>

</html