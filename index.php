<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/indax.css">
    <title>Index</title>
    <?php
    include "./nav.php";
    include "./fuction/connectDB.php";
    ?>
</head>

<body>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="image-hotel" src="./img/banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="image-hotel" src="./img/banner2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="image-hotel" src="./img/banner3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- container Search -->
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
  
    <div class="news">
          <h2>ยินดีต้อนรับ</h2> 
       <ul> ที่พักบรรยากาศอบอุ่น บ้านสวน ริมคลองท้องทุ่งนา บรรยากาศแห่งการพักผ่อน ที่ห้อมล้อมด้วยธรรมชาติ บรรยากาศแห่งความสุข และผ่อนคลาย ที่ "วิลล่าเดอพันตา" ภูเรือ</ul>
</div>

<!-- <<<<<<< HEAD -->
    <!-- รอบๆห้องพัก -->
    <div class="row g-0 bg-light position-relative">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="pic-cafa" src="./img/cafa10.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa9.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa11.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="pic-cafa" src="./img/cafa12.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="colpic">
                        <h4>บรรยากาศรอบๆที่พัก</h4><br>
                        <p>📌📌พักร่าง พักกาย พักใจ มาชาร์จไฟให้ชุ่มชื่นใจ ที่นี่!!!! 🌾🌻 #ลานนาคาเฟ่</p>
                        <p> ⏰ ร้านกาแฟ เปิด 9.00น.- 17.00น.</p>
                        <p> 🍺🍾 นั่งฟังเพลง ชิวๆ กันต่อ ถึง 2 ทุ่ม</p>
                        <p> 🎯 พักที่ พันตา #วิลล่าเดอพันตา</p>
                        <p> ☕️พักสายตา กับทุ่งนา🌾🌾หลากสี #ลานนาคาเฟ่</p>
                        <p> 🍺 มาพักทั้งที สนุกเต็มที่ ที่นี่👉 #ลานเล่าพันตา</p>
                        <p> 📍คิดจะพัก คิดถึง วิลล่าเดอพันตา</p>
                        <p>❇️พักที่เดียว ทั้งเที่ยว ทั้งกิน</p>

                    </div>
                </div>
            </div>
        </div>
        </div>
            


    <!-- card room -->
    <h3>ห้องพัก</h3>
    <div class="card rd mb-3 ">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="./img//bgvilla.png" class="img-fluid rounded-start" alt="...">
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
                        <div class="col-md-3">
                            <p class="card-t"><b>ราคา</b></p>
                            <p class="card-t">
                            <h1>ใส่โค้ดราคา</h1>
                            </p>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="subroom ">
                        จอง
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
   
    <footer>
            <div class="footer-container">
                <div class="footer-box">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <img src="./img/logovilla.PNG" alt="" height="80px" width="100px"><br>
                            <span>Villa de panta</span>
                        </div>
                        <span>258 หมู่ 2, ถนนเลย-สระบุรี ต.หนองบัว อ.ภูเรือ จ.เลย</span><br>
                        <span>+66 083 242 8294</span><br>
                        <span>thepanta.loei@gmail.com</span>
                    </div>
                    <div class="footer-item">
                        <ul>
                            <a >About</a>
                            <a >Contact</a>
                            <a >Terms & Conditions</a>
                        </ul>
                    </div>
                    <div class="footer-item">
                        <ul>
                            <a href="https://www.facebook.com/VilladePanta456">facebook</a>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

</body>

</html>