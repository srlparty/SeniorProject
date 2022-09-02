<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
    <link rel="stylesheet" href="../css/indax.css">

    <?php
    
    include "./nav.php";
    include "../fuction/connectDB.php";
    ?>
</head>


<body>


    <img class="image-hotel" src="../img/banner1.png" class="d-block w-100" alt="...">

    <!-- container Search -->

<body>

    <div class="container text-center">
        <div class="row">
        <div class="col-md-3 ">
                <p>วันที่เช็คอิน</p>
                <form method="POST" class="hstack gap-4 mt-4">
                    <label>เลือกวันที่เช็คอิน</label>
                    <input type="date" class="form-control" style="width: 50%;">
                </form>
            </div>
            <div class="col-md-3" style="border-left: 1px solid rgb(221, 221, 221) ;">
                <p> วันที่เช็คเอ้าท์</p>
                <form method="POST" class="hstack gap-4 mt-4">
                    <label>เลือกวันที่เช็คเอ้าท์</label>
                    <input type="date" class="form-control" style="width: 50%;">
                </form>
            </div>
            <div class="col-md-3" style="border-left: 1px solid rgb(221, 221, 221) ;">
                <p>จำนวนคน</p>
                    <form method="POST" class="hstack gap-4 mt-4">
                <label class="form-check-label" for="flexCheckDefault">ผู้ใหญ่</label>
                <input id="number" type="number" value="" class="form-control" id="bed1" name="1" aria-describedby="emailHelp">
                <label class="form-check-label" for="flexCheckDefault">เด็ก</label>
                <input id="number" type="number" value="" class="form-control" id="bed1" name="1" aria-describedby="emailHelp">
                </form>
            </div>
            <button class="col-md-3 btnsearch" href="">
                ค้นหา
            </button>
        </div>
    </div>


    <!-- card public relations -->
    <h2>ประชาสัมพันธ์</h2>
    <div class="card-body news">
        ที่พักบรรยากาศอบอุ่น บ้านสวน ริมคลองท้องทุ่งนา บรรยากาศแห่งการพักผ่อน ที่ห้อมล้อมด้วยธรรมชาติ บรรยากาศแห่งความสุข และผ่อนคลาย ที่ "วิลล่าเดอพันตา" ภูเรือ
    </div>



    <!-- card room-->
    <h3>ห้องพัก</h3>
    <div class="card rd mb-3 ">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="../img/bgvilla.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body room-detail">
                    <h3 class="title">Card title</h3>
                    <p class="card-t">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-t"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <!-- Button trigger modal -->
                    <button type="button" class="subroom " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        ดูรายละเอียดเพิ่มเติม
                    </button>

             

                </div>
            </div>
        </div>
    </div>

    <!-- map -->
    <div class="Villa">
        <h3>สถานที่ใกล้เคียง</h3>
        <div class="mapvilla">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.0649722229796!2d101.37282671467175!3d17.456604088037206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3121273d1cd2b60d%3A0x71bd6196d0c3b524!2z4LmC4Lij4LiH4LmB4Lij4Lih4Lin4Li04Lil4Lil4LmI4Liy4LmA4LiU4Lit4Lie4Lix4LiZ4LiV4Liy!5e0!3m2!1sth!2sth!4v1661761437813!5m2!1sth!2sth" width="750" height="450" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="nearbyplaces">
                <ul>ภูเรือ - 1.3 กม.</ul>
                <ul>โรงพยาบาลภูเรือ - 2.3 กม.</ul>
                <ul>จุดชมวิวเดโช - 3.6 กม.</ul>
                <ul>อุทยานแห่งชาติภูเรือ - 4.9 กม.</ul>
                <ul>หน้าผาสามทอง - 5.2 กม.</ul>
                <ul>ภูเรือแคมป์ไซต์ - 6.2 กม.</ul>
                <ul>ผาโหล่นน้อย - 6.4 กม.</ul>
                <ul>น้ําตกปลาบ่า - 7.2 กม.</ul>
                <ul>ภูเรือ ใจดี กอล์ฟ - 15.2 กม.</ul>
            </div>
        </div>
    </div>
    <!-- About the hotel -->
    <div class="cabouthotel">
        <img src="../img/bbg.png" class="card-img" alt="...">

    </div>

    <?php  require '../fuction/modal-user.php'?>


</body>

</html>