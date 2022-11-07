<?php
$date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
$date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d', strtotime(date('Y-m-d') . ' + 3 days'));
?>
<?php
include './nav.php'
?>
<style>
    .countbutton .btn-outline-primary:hover {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    .countbutton .btn-outline-primary {
        font-size: 25px;
        color: #0d6efd;
        border-color: #0d6efd;
    }
</style>


<section class="page-section bg-dark"><br>

    <div class="container">
        <div class="col-lg-12">
            <div class="card item-rooms mb-3">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="img">
                                    <img src="./QRCode.jpg" alt="">
                                </div>
                                <ul>ชื่อบัญชี : VILLA DE PANTA PHU RUEA</ul>
                                <ul>เลขบัญชี : 120-5698-326</ul>
                                <ul>ชื่อธนาคาร : ไทยพาณิชย์</ul>
                                <div class="col-md-6">
                                    <p>เลือกรูปแบบการชำระเงิน</p>
                                    <input type="radio" id="payfull" name="type_pay" value="1" onchange="calday()" checked>
                                    <label for="vehicle1"> จ่ายเต็มราคา</label><br>
                                    <input type="radio" id="paydeposit" name="type_pay" value="2" onchange="calday()">
                                    <label for="vehicle2"> จ่ายมัดจำ 50 %</label><br>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-md-9"><br>
                                    <label for="date_in">วันที่เช็คอิน</label>
                                    <input type="date" name="checkin" id="date_start" class="form-control" required>
                                </div>
                                <div class="col-md-9"><br>
                                    <label for="date_in_time">วันที่เช็คเอ้าท์</label>
                                    <input type="date" name="checkout" id="date_end" class="form-control" onchange="calday()" required>
                                </div>
                                <div class="col-md-9"><br>
                                    <label for="days">จำนวนวันที่อยู่</label>
                                    <input type="number" min="1" name="days" id="days" class="form-control" value="0" required readonly>
                                </div>
                                <div class="col-md-9"><br>
                                    <label for="days">จำกัดจำนวนผู้เข้าพัก</label><br>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="days">ผู้ใหญ่</label>
                                        </div>
                                        <div class="row countbutton col-8">
                                            <div class="col-4">
                                                <button type="button" class="btn btn-outline-primary w-100 p-0" onclick="adult_minus()">-</button>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" id="adults" name="adults" value="0" class="border-0 w-100 form-control text-center">
                                            </div>
                                            <div class="col-4">
                                                <button type="button" class="btn btn-outline-primary w-100 p-0" onclick="adult_plus()">+</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="days">เด็ก</label>
                                        </div>
                                        <div class=" row countbutton col-8">
                                            <div class="col-4">
                                                <button type="button" class="btn btn-outline-primary w-100 p-0" onclick="kid_minus()">-</button>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" id="kids" name="kids" value="0" class="border-0 w-100 form-control text-center">
                                            </div>
                                            <div class="col-4">
                                                <button type="button" class="btn btn-outline-primary w-100 p-0" onclick="kid_plus()">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9"><br>
                                    <select class="custom-select browser-default" name="extraservice">
                                        <option selected disabled>เลือกบริการเสริมที่ท่านต้องการ</option>
                                        <option value="อาหารเช้า">อาหารเช้า</option>
                                        <option value="เตียงเสริม">เตียงเสริม</option>
                                    </select>
                                </div>
                                <div class="col-md-9"><br>
                                    <label class="form-label">เลขบัตรประจำตัวประชาชน 13 หลัก</label>
                                    <input type="text" name="PM_Idcard" class="form-control" require>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">ชื่อ-นามสกุล</label>
                                    <input type="text" name="PM_Name" class="form-control" require>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">อีเมล</label>
                                    <input type="email" name="PM_Email" class="form-control" require>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">เบอร์โทรศัพท์</label>
                                    <input type="text" name="PM_Tel" class="form-control" require>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">วันที่โอนเงิน</label>
                                    <input type="date" name="PM_Date" class="form-control" require>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">เวลาที่โอนเงิน</label>
                                    <input type="time" name="PM_Time" class="form-control" require>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">ธนาคารที่ใช้โอนเงิน</label>
                                    <select class="custom-select browser-default" name="PM_Bank" require>
                                        <?php
                                        $cat = $conn->query("SELECT * FROM bank ORDER BY bank.`Bank_ID` ASC");
                                        while ($row = $cat->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $row['Bank_ID'] ?>"><?php echo $row['Bank'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">จำนวนเงินที่โอน</label>
                                    <input type="text" name="PM_Total" id="PM_Total" class="form-control" value="0" require>
                                </div>
                                <div class="col-md-9">
                                    <label for="formFile" class="form-label">แนบเอกสารชำระเงิน</label>
                                    <input class="form-control" type="file" id="formFile" name="PM_Img" require>
                                </div>
                                <br>
                                <div class="col-md-9">
                                    <button type="submit" name="save-payment" class="btn btn-success w-100 ">ชำระเงิน</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<?php
include "../fuction/connectDB.php";
$id = $_GET['id'];
$queryinfo = mysqli_query($conn, "SELECT * FROM room_categories WHERE id = $id");
$row = mysqli_fetch_array($queryinfo);
extract($row);

if (isset($_POST['save-payment'])) {
    $PM_Idcard = $_POST['PM_Idcard'];
    $PM_Name = $_POST['PM_Name'];
    $PM_Email = $_POST['PM_Email'];
    $PM_Tel = $_POST['PM_Tel'];
    $PM_Date = $_POST['PM_Date'];
    $PM_Time = $_POST['PM_Time'];
    $PM_Bank = $_POST['PM_Bank'];
    $PM_Total = $_POST['PM_Total'];
    // $PM_Img = $_POST['PM_Img'];

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $days = $_POST['days'];
    $extraservice = $_POST['extraservice'];
    $type_pay = $_POST['type_pay'];


    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    $numrand = (mt_rand());
    // ไฟล์ภาพตลาด
    $PM_Imgtmp = $_FILES['PM_Img']['tmp_name'];
    $PM_Imgoldname = strrchr($_FILES['PM_Img']['name'], ".");
    $PM_Imgname = $date . $numrand . $PM_Imgoldname;
    $PM_Imgtype = $_FILES['PM_Img']['type'];
    $PM_Img = 'images/' . $PM_Imgname;

    $adults = $_POST['adults'];
    $kids = $_POST['kids'];

    $insertbook = mysqli_query($conn, "INSERT INTO `roombook`(
        TP_ID,
        checkin,
        checkout,
        days,
        adults,
        kids,
        extraservice,
        room_cat_id
     ) VALUES('$type_pay','$checkin','$checkout','$days','$adults','$kids','$extraservice','$id')");

    $b_id =  mysqli_insert_id($conn);
    $query = mysqli_query($conn, "INSERT INTO payment`( PM_Idcard`, PM_Name, PM_Email, PM_Tel, PM_Date, PM_Time, PM_Bank, PM_Total,`PM_Img`,`B_id` ) VALUES( '$PM_Idcard', '$PM_Name', '$PM_Email', '$PM_Tel', '$PM_Date', '$PM_Time' , '$PM_Bank', '$PM_Total','$PM_Img','$b_id' )");


    if ($insertbook) {
        move_uploaded_file($PM_Imgtmp, $PM_Img);
        echo "<script>alert('ชำระเงินสำเร็จ')</script>";
        echo '<meta http-equiv="refresh" content="1";/>';
    } else {
        echo "<script>alert('$type_pay,$checkin,$checkout,$days,$extraservice')</script>";
    }
}
?>
<script>
    function adult_plus() {
        var a = document.getElementById("adults").value;
        document.getElementById("adults").value = +a + +1;
    }

    function adult_minus() {
        var a = document.getElementById("adults").value;
        if (+a - +1 < 0) {
            document.getElementById("adults").value = 0;
        } else {
            document.getElementById("adults").value = +a - +1;
        }

    }

    function kid_plus() {
        var a = document.getElementById("kids").value;
        document.getElementById("kids").value = +a + +1;
    }

    function kid_minus() {
        var a = document.getElementById("kids").value;
        if (+a - +1 < 0) {
            document.getElementById("kids").value = 0;
        } else {
            document.getElementById("kids").value = +a - +1;
        }

    }

    function calday() {
        var date_in = new Date(document.getElementById("date_start").value);
        var date_out = new Date(document.getElementById("date_end").value);
        var one_day = 1000 * 60 * 60 * 24;
        var defDate = (date_out.getTime() - date_in.getTime()) / one_day
        document.getElementById("days").value = defDate;
        var price = <?php echo $row['price'] ?>;

        if (document.getElementById('payfull').checked) {
            document.getElementById("PM_Total").value = price * defDate;
        } else {
            if (document.getElementById('paydeposit').checked) {
                document.getElementById("PM_Total").value = (price * defDate) / 2;
            } else {
                document.getElementById("PM_Total").value = price * defDate;
            }
        }
    }
</script>