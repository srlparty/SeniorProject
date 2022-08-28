<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Document</title>

    <?php include "./fuction/importlink.php" ?>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg  nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/logovilla.PNG" alt="" width="80px" height="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ชำระเงิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Disabled</a>
                    </li>
                </ul>
                <form class="login-regis" >
                    <a href="" class="login" type="button" >เข้าสู่ระบบ/สมัครสมาชิก<i class='bx bxs-user-circle' style="width: 20px;"></i></a>
                </form>
            </div>
        </div>
    </nav>
</body>

</html>