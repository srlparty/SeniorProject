<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav.css">
    <title>Document</title>

    <?php include "../fuction/importlink.php" ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg  nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../img/logovilla.PNG" alt="" width="80px" height="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index-user.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pay.php">ชำระเงิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./mybooking.php">การจองของฉัน</a>
                    </li>
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       ดึงชื่อ user
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./editinfo.php">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a class="dropdown-item" href="./logout.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </div>
        </div>
        <!-- <form class="login-regis" >
                    <a href="./fuction/auth-login.php" class="login" type="button" >เข้าสู่ระบบ/สมัครสมาชิก<i class='bx bxs-user-circle' style="width: 20px;"></i></a>
                </form> -->
        </div>
        </div>
    </nav>
</body>

</html>