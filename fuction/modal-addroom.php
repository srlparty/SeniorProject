<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "../fuction/connectDB.php";
    if (isset($_POST['save-btn'])) {
        $R_ID = $_POST['R_ID'];
        $R_Type = $_POST['R_Type'];
        $R_Bed = $_POST['R_Bed']; 
        $R_Detail = $_POST['R_Detail'];
        $R_Typecount = $_POST['R_Typecount'];
        $R_Price = $_POST['R_Price'];
        $R_Img = $_POST['R_Img'];

        if (isset($_POST["R_ID"]) != "" && isset($_POST["R_Type"])  != "" && isset($_POST["R_Bed"]) != "" && isset($_POST["R_Detail"]) !=
         "" && isset($_POST["R_Typecount"]) != "" && isset($_POST["R_Price"]) != "" && isset($R_Img) != "") {
            $rsCheck = mysqli_query($conn, $sqlCheck);
            $rowCheck = mysqli_num_rows($rsCheck);
            if ($rowCheck > 0) {
                echo "<script>alert('เลขห้องพักซ้ำ กรุณาเปลี่ยนเลขห้องพัก');</script>";
            }else{
                $sqlInsert = "INSERT INTO room (R_ID, R_Type, R_Bed, R_Detail, R_Typecount, R_Price, R_Img) values ('$R_ID', '$R_Type','$R_Bed', '$R_Detail','$R_Typecount','$R_Price' ,'$R_Img')";
                if (mysqli_query($conn, $sqlInsert)) {
                    echo "<script>alert('เพิ่มห้องสำเร็จ');window.location='../damin/manage.php';</script>";
                 } else {
                    echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองอีกครั้ง');</script>";
                      }
                  }
              } else {
                  echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองอีกครั้ง');</script>";
          }
        }
    ?>


    <!-- Modal -->
    <div class="modal fade" id="addroom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มห้องพัก</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- form -->
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="R_ID" class="form-label">เลขห้อง</label>
                            <input type="text" class="form-control" id="R_ID" name="R_ID" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเลขห้อง">
                        </div>
                        <div class="mb-3">
                            <label for="R_Type" class="form-label">ประเภทห้อง</label>
                            <select id="R_Type" class="form-control" name="R_Type" value="R_Type" placeholder="ประเภทห้องพัก">
                                <option selected>เลือกประเภทห้อง</option>
                                <option value="1">Standard</option>
                                <option value="2">Family</option>
                                <option value="3">Superior</option>
                                <option value="4">Deluxe</option>
                                <option value="5">Triple Family room</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="R_Bed" class="form-label">ประเภทเตียง</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">เตียงคู่</label>
                                <input id="number" type="number" value="" class="form-control" id="bed1" name="1" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเตียง">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">เตียงเดี่ยว</label>
                                <input id="number" type="number" value="" class="form-control" id="bed2" name="2" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเตียง">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="R_Detail" class="form-label">สิ่งอำนวยความสะดวก</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-air" value="1" name="1">
                                <label class="form-check-label" for="inlineCheckbox1">แอร์</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-tv" value="2" name="2">
                                <label class="form-check-label" for="inlineCheckbox2">โทรทัศน์</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-water-heater" value="3" name="3">
                                <label class="form-check-label" for="inlineCheckbox2">เครื่องทำน้ำอุ่น</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-towel" value="4" name="4">
                                <label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดตัว</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-towel-hair" value="5" name="5">
                                <label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดผม</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-fridge" value="6" name="6">
                                <label class="form-check-label" for="inlineCheckbox2">ตู้เย็น</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-kettle" value="7" name="7">
                                <label class="form-check-label" for="inlineCheckbox2">กาน้ำร้อน</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-water" value="8" name="8">
                                <label class="form-check-label" for="inlineCheckbox2">น้ำดื่ม</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-pillow" value="9" name="9">
                                <label class="form-check-label" for="inlineCheckbox2">หมอน</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="facilities-blanket" value="10" name="10">
                                <label class="form-check-label" for="inlineCheckbox2">ผ้าห่ม</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="R_ guest" class="form-label">จำนวนผู้เข้าพัก</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    ผู้ใหญ่
                                </label>
                                <input id="number" type="number" value="" class="form-control" id="bed1" name="1" aria-describedby="emailHelp" placeholder="กรุณากำหนดจำนวนผู้เข้าพัก">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="2" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    เด็ก
                                </label>
                                <input id="number" type="number" value="" class="form-control" id="bed2" name="2" aria-describedby="emailHelp" placeholder="กรุณากำหนดจำนวนผู้เข้าพัก">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="R_Price" class="form-label">ราคา</label>
                            <input type="text" class="form-control" id="price-room" name="R_Price" aria-describedby="emailHelp" placeholder="กรุณากำหนดราคาห้องพัก">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">รูปภาพ</label><br>

                            <!-- โค้ดอัพรูปได้หลายๆรูป -->
                            <!-- <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file[]" accept="image/png, image/gif, image/jpeg" multiple>
                            <input type="submit" value="อัปโหลด">
                        </form>
                    </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success " name="save-btn">บันทึก</button>
                            <button type="button" class="btn btn-danger">ยกเลิก</button>
                        </div>
                </div>
            </div>
        </div>


        <!-- โค้ดอัพรูปได้หลายๆรูป -->
        <!-- <?php
                isset($_FILES['file']) ? $file = $_FILES['file'] : $file = "";

                if (!empty($file)) {
                    for ($i = 0; $i < count($file['name']); $i++) {
                        $file_name = $file['name'][$i];
                        $file_tmp_name = $file['tmp_name'][$i];
                        if (move_uploaded_file($file_tmp_name, $file_name)) {
                            echo "<img src='{$file_name}' /><br/>";
                        }
                    }
                }
                ?> -->


</body>

</html>