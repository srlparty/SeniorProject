<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";

    ?>
</head>

<body>
<h2><b>จัดการประเภทห้อง</b></h2>
    

<div class="container-fluid">

    <div class="col-lg-12">
        <div class="row">
            <!-- FORM Panel -->
            <div class="col-md-12">
                <form action="" id="manage-category">
                    <div class="card">
                        <div class="card-header">
                            จัดการห้องพัก
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label class="control-label">ประเภทห้อง</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="Bed" class="form-label">ประเภทเตียง</label>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label>
                                            เตียงคู่
                                        </label>
                                    </div>
                                    <div class="col-8 row">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="doub_minus()">-</button>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" id="doub_bed" name="doub_bed" value="0" class="border-0 w-100 form-control text-center">
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="doub_plus()">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label>
                                            เตียงเดี่ยว
                                        </label>
                                    </div>
                                    <div class="col-8 row">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="sing_minus()">-</button>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" id="sing_bed" name="sing_bed" value="0" class="border-0 w-100 form-control text-center">
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="sing_plus()">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label for="R_Detail" class="form-label">สิ่งอำนวยความสะดวก</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="airconditioner" value="1" name="airconditioner">
                                    <label class="form-check-label" for="inlineCheckbox1">แอร์</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tv" value="1" name="tv">
                                    <label class="form-check-label" for="inlineCheckbox2">โทรทัศน์</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="waterheater" value="1" name="waterheater">
                                    <label class="form-check-label" for="inlineCheckbox2">เครื่องทำน้ำอุ่น</label>
                                </div>

                                <div class="mb-1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="towel_forhair" value="1" name="towel_forhair">
                                        <label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดตัว</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="towel" value="1" name="towel">
                                        <label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดผม</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="fridge" value="1" name="fridge">
                                        <label class="form-check-label" for="inlineCheckbox2">ตู้เย็น</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="pot" value="1" name="pot">
                                        <label class="form-check-label" for="inlineCheckbox2">กาน้ำร้อน</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="water" value="1" name="water">
                                        <label class="form-check-label" for="inlineCheckbox2">น้ำดื่ม</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="pillow" value="1" name="pillow">
                                        <label class="form-check-label" for="inlineCheckbox2">หมอน</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="blanket" value="1" name="blanket">
                                        <label class="form-check-label" for="inlineCheckbox2">ผ้าห่ม</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="R_ guest" class="form-label">จำกัดจำนวนผู้เข้าพัก</label>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label>
                                            ผู้ใหญ่
                                        </label>
                                    </div>
                                    <div class="col-8 row">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="adult_minus()">-</button>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" id="adults" name="adults" value="0" class="border-0 w-100 form-control text-center">
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="adult_plus()">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label>
                                            เด็ก
                                        </label>
                                    </div>
                                    <div class="col-8 row">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="kid_minus()">-</button>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" id="kids" name="kids" value="0" class="border-0 w-100 form-control text-center">
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-outline-primary w-100" onclick="kid_plus()">+</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label">ราคา</label>
                                <input type="number" class="form-control text-right" name="price" step="any">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">รูปภาพ</label>
                                <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo isset($image_path) ? '../assets/img/' . $cover_img : '' ?>" alt="" id="cimg">
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-success col-sm-3 offset-md-3">บันทึก</button>
                                    <button class="btn btn-sm btn-danger  col-sm-3" type="button" onclick="$('#manage-category').get(0).reset()">ยกเลิก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>