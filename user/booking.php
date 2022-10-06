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
                <div class="pay">
                    <a href="./pay.php"><button type="button" class="btn btn-success" style="width: 100px;">ชำระเงิน</button></a>
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
                        <h3 class="title"><b>ใส่โค้ดประเภทห้อง เตียง</b></h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-t"><i class='bx bx-wifi'></i>ฟรี Wi-Fi</p>
                                <p class="card-t"></i><i class='bx bx-x'></i>ห้องปลอดบุหรี่</p>
                                <p class="card-t"><i class='bx bxs-bowl-rice'></i>ไม่รวมอาหารเช้า</p>
                                <p class="card-t"><i class='bx bxs-dog'></i>ไม่อนุญาตให้นำสัตว์เลี้ยงเข้าห้องพัก</p>
                                <button type="button" class="btn btn-link" style="color: #EF774B;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">รายละเอียดเพิ่มเติม</button>

                            </div>
                            <div class="col-md-3 ms-auto">
                                <p class="card-t"><b>ราคา</b></p>
                                <p class="card-t">
                                <h1>ใส่โค้ดราคา</h1>
                                </p>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <a href="./booking.php"><button type="button" class="subroom ">จอง</button></a>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>