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
    ?>
</head>

<body>
    <?php
  include "../fuction/connectDB.php";
    if (isset($_POST["save-btn"])) {
        $PM_ID = $_POST['PM_ID'];
        $PM_Idcard = $_POST['PM_Idcard'];
        $PM_Name = $_POST['PM_Name'];
        $PM_Email = $_POST['PM_Email'];
        $PM_Tel = $_POST['PM_Tel'];
        $PM_Date = $_POST['PM_Date'];
        $PM_Time = $_POST['PM_Time'];
        $PM_Bank = $_POST['PM_Bank'];
        $PM_Total = $_POST['PM_Total'];
        $PM_Img = 'img/' . $PM_Img;

       
    }
    ?>
  <div class="aa">
        <div class="container text-center">
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
                        <!-- <label>จำนวนคน</label> -->
                        <label>ผู้ใหญ่</label>
                        <input id="number" type="number" value="" class="form-control" name="1" style="width: 100px;">
                        <label>เด็ก</label>
                        <input id="number" type="number" value="" class="form-control" name="1" style="width: 100px;">
                    </form>
                </div>
                <div class="col-md-2">
                    <form method="POST" class="hstack gap-4 mt-4">
                        <label>  ดึงข้อมูลจำนวนยอดสรุปที่ต้องชำระเงิน</label>
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
                    <input type="text" name="PM_Idcard" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">ชื่อ-นามสกุล</label>
                    <input type="text" name="PM_Name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">อีเมล</label>
                    <input type="email" name="PM_Email" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">เบอร์โทรศัพท์</label>
                    <input type="text" name="PM_Tel" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">วันที่โอนเงิน</label>
                    <input type="date" name="PM_Date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">เวลาที่โอนเงิน</label>
                    <input type="time" name="PM_Time" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">ธนาคารที่ใช้โอนเงิน</label>
                    <input type="text" name="PM_Bank" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">จำนวนเงินที่โอน</label>
                    <input type="text" name="PM_Total" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="formFile" class="form-label">แนบเอกสารชำระเงิน</label>
                    <input class="form-control" type="file" id="formFile" name="PM_Img">
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
                        <button type="submit" name="save-btn" class="btn btn-success w-100 ">ชำระเงิน</button>
                    </div>
                </div>
            </div>
    </div>
    </form>

</body>

</html>