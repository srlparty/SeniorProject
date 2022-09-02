<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../css/pay.css">

    <?php

    include "./nav.php";
    include "../fuction/connectDB.php";
    ?>
</head>

<body>
<div class="shadow p-3 mb-5 bg-body rounded" style="height: 100px;" display="flex;">
        <div class="container text-center ">
            <div class="row">
                <div class="col-md-3 ">
                    <form method="POST" class="hstack gap-4 mt-4">
                        <label>วันที่เช็คอิน</label>
                        <input type="date" class="form-control" style="width: 50%;">
                    </form>
                </div>
                <div class="col-md-3">
                    <form method="POST" class="hstack gap-4 mt-4">
                        <label>วันที่เช็คเอ้าท์</label>
                        <input type="date" class="form-control" style="width: 50%;">
                    </form>
                </div>
                <div class="col-md-3 ">
                    <form method="POST" class="hstack gap-4 mt-4">
                        <label>จำนวนคน</label>
                        <label class="form-check-label" for="flexCheckDefault">ผู้ใหญ่</label>
                        <input id="number" type="number" value="" class="form-control" id="bed1" name="1" aria-describedby="emailHelp">
                        <label class="form-check-label" for="flexCheckDefault">เด็ก</label>
                        <input id="number" type="number" value="" class="form-control" id="bed1" name="1" aria-describedby="emailHelp">
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="contrainer">
            <form action="">
                <div class="payment"><br>
                    <h4>กรอกข้อมูลการชำระเงิน</h4>
                    <div class="col-md-6"><br>
                        <label class="form-label">เลขบัตรประจำตัวประชาชน 13 หลัก</label>
                        <input type="email" name="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">ชื่อ</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">นามสกุล</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">อีเมล</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">เบอร์โทรศัพท์</label>
                        <input type="email" name="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">วันที่โอนเงิน</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">เวลาที่โอนเงิน</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">ธนาคารที่ใช้โอนเงิน</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">จำนวนเงินที่โอน</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">แนบเอกสารชำระเงิน</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="grcode">
                        <div class="img">
                            <img src="../img/QRCode.jpg" alt="">
                        </div>
                        <div class="row">
                            <div class="col-50">
                                <ul>ชื่อบัญชี : VILLA DE PANTA PHU RUEA</ul>
                                <ul>เลขบัญชี : 120-5698-326</ul>
                                <ul>ชื่อธนาคาร : ไทยพาณิชย์</ul>
                            </div>
                        </div>
                <div class="g-3  col-md-7 text-center">
                    <button type="submit" name="signup" class="btn btn-success w-100 ">ชำระเงิน</button>
                </div>
            </div>
        </div>
    </div>
    </form>

</body>

</html>