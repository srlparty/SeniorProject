<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../css/booking.css">

    <?php

    include "./nav.php";
    ?>
</head>

<body>

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
            </div>
        </div>
    </div>


    <div class="card rd mb-3 ">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="../img/bgvilla.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body room-detail" style="height: 350px;">
                    <div class="row">
                        <h3 class="title">ใส่โค้ดประเภทห้อง เตียง</h3>
                        <div class="detail">
                                <button type="button" class="btn btn-link" style="color: #EF774B;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">รายละเอียดเพิ่มเติม</button>
                            </div>
                        <div class="col-md-6">
                            <p class="card-t"></i>วันที่เช็คอิน :</p>
                            <p class="card-t"></i></i>วันที่เช็คอิน :</p>
                            <p class="card-t"></i>จำนวนคน :</p>
                            <p class="card-t"></i>เลือกบริการเสริมที่ท่านต้องการ :</p>
                            <form action="/action_page.php">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="food">
                                <label for="vehicle1"> อาหารเช้า</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="bed">
                                <label for="vehicle2"> เตียงเสริม</label><br>
                                <div class="pay">
                                    <a href="./pay.php"><button type="button" class="btn btn-success" style="width: 100px;">ชำระเงิน</button></a>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <p>เลือกรูปแบบการชำระเงิน</p>
                            <form action="/action_page.php">
                            <input type="radio" id="html" name="fav_pay" value="payfull">
                                <label for="vehicle1"> จ่ายเต็มราคา</label><br>
                                <input type="radio" id="css" name="fav_pay" value="paydeposit">
                                <label for="vehicle2"> จ่ายมัดจำ 50 %</label><br>
                            </form><br>
                            <p>ราคารวม</p>
                            <?php
                            $a = 3200;
                            $b = 100;
                            echo $a . " บาท/คืน + " . $b ." ค่าบริการเสริม". " = " .($a + $b ."บาท" ) ; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>