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
                <div class="col-md-4">
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
                <!-- FORM Panel -->

                <!-- Table Panel -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th class="text-center">รูปภาพ</th>
                                        <th class="text-center">รายละเอียด</th>
                                        <th class="text-center">จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $i = 1;
                                    $cats = $conn->query("SELECT * FROM room_categories order by id asc");
                                    while ($row = $cats->fetch_assoc()) :
                                    ?>
                                        <?php
                                        if ($row['airconditioner'] != '0') {
                                            $airconditioner = "แอร์";
                                            $airconditioner_checked = "true";
                                        } else {
                                            $airconditioner = "";
                                            $airconditioner_checked = "";
                                        }
                                        if ($row['tv'] != '0') {
                                            $tv = ",โทรทัศน์";
                                            $tv_checked = "true";
                                        } else {
                                            $tv = "";
                                            $tv_checked = "";
                                        }
                                        if ($row['waterheater'] != '0') {
                                            $waterheater = ",เครื่องทำน้ำอุ่น";
                                            $waterheater_checked = "true";
                                        } else {
                                            $waterheater = "";
                                            $waterheater_checked = "";
                                        }
                                        if ($row['towel_forhair'] != '0') {
                                            $towel_forhair = ",ผ้าเช็ดผม";
                                            $towel_forhair_checked = "true";
                                        } else {
                                            $towel_forhair = "";
                                            $towel_forhair_checked = "";
                                        }
                                        if ($row['towel'] != '0') {
                                            $towel = ",ผ้าเช็ดตัว";
                                            $towel_checked = "true";
                                        } else {
                                            $towel = "";
                                            $towel_checked = "";
                                        }
                                        if ($row['fridge'] != '0') {
                                            $fridge = ",ตู้เย็น";
                                            $fridge_checked = "true";
                                        } else {
                                            $fridge = "";
                                            $fridge_checked = "";
                                        }
                                        if ($row['pot'] != '0') {
                                            $pot = ",กาน้ำร้อน";
                                            $pot_checked = "true";
                                        } else {
                                            $pot = "";
                                            $pot_checked = "";
                                        }
                                        if ($row['water'] != '0') {
                                            $water = ",น้ำดื่ม";
                                            $water_checked = "true";
                                        } else {
                                            $water = "";
                                            $water_checked = "";
                                        }
                                        if ($row['pillow'] != '0') {
                                            $pillow = ",หมอน";
                                            $pillow_checked = "true";
                                        } else {
                                            $pillow = "";
                                            $pillow_checked = "";
                                        }
                                        if ($row['blanket'] != '0') {
                                            $blanket = ",ผ้าห่ม";
                                            $blanket_checked = "true";
                                        } else {
                                            $blanket = "";
                                            $blanket_checked = "";
                                        }
                                        $service = $airconditioner . $tv . $waterheater . $towel_forhair . $towel . $fridge . $pot . $water . $pillow . $blanket;
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i++ ?></td>


                                            <td class="text-center">
                                                <img src="<?php echo isset($row['cover_img']) ? '../assets/img/' . $row['cover_img'] : '' ?>" alt="" id="cimg">
                                            </td>
                                            <td class="">
                                                <p>ประเภท: <b><?php echo $row['name'] ?></b></p>
                                                <p>ประเภทเตียง:</p>
                                                <p>&nbsp;&nbsp;&nbsp; - เตียงเดี่ยว <b> <?php echo $row['sing_bed'] ?></b> เตียง</p>
                                                <p>&nbsp;&nbsp;&nbsp; - เตียงคู่ <b><?php echo $row['doub_bed'] ?></b> เตียง</p>
                                                </p>
                                                <p>สิ่งอำนวยความสะดวก: <b><?php echo $service ?></b></p>
                                                <p>จำกัดจำนวนผู้เข้าพัก: </p>
                                                <p>&nbsp;&nbsp;&nbsp; - ผู้ใหญ่ <b> <?php echo $row['adults'] ?></b> คน</p>
                                                <p>&nbsp;&nbsp;&nbsp; - เด็ก <b><?php echo $row['kids'] ?></b> คน</p>
                                                <p>ราคา: <b><?php echo "฿" . number_format($row['price'], 2) ?></b></p>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-doub-bed="<?php echo $row['doub_bed'] ?>" data-sing-bed="<?php echo $row['sing_bed'] ?>" data-adults="<?php echo $row['adults'] ?>" data-kids="<?php echo $row['kids'] ?>" data-price="<?php echo $row['price'] ?>" data-cover_img="<?php echo $row['cover_img'] ?>" data-airconditioner_checked="<?php echo $airconditioner_checked ?>" data-tv_checked="<?php echo $tv_checked ?>" data-waterheater_checked="<?php echo $waterheater_checked ?>" data-towel_forhair_checked="<?php echo $towel_forhair_checked ?>" data-towel_checked="<?php echo $towel_checked ?>" data-fridge_checked="<?php echo $fridge_checked ?>" data-pot_checked="<?php echo $pot_checked ?>" data-water_checked="<?php echo $water_checked ?>" data-pillow_checked="<?php echo $pillow_checked ?>" data-blanket_checked="<?php echo $blanket_checked ?>">แก้ไข</button>
                                                <button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $row['id'] ?>">ลบ</button>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Table Panel -->
            </div>
        </div>

    </div>
    <style>
        img#cimg,
        .cimg {
            max-height: 10vh;
            max-width: 6vw;
        }

        td {
            vertical-align: middle !important;
        }
    </style>
    <script>
        function displayImg(input, _this) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#cimg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#manage-category').submit(function(e) {
            e.preventDefault()
            start_load()
            $.ajax({
                url: '../fuction/ajax.php?action=save_category',
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                success: function(resp) {
                    if (resp == 1) {
                        alert_toast("Data successfully added", 'success')
                        setTimeout(function() {
                            location.reload()
                        }, 1500)

                    } else if (resp == 2) {
                        alert_toast("Data successfully updated", 'success')
                        setTimeout(function() {
                            location.reload()
                        }, 1500)

                    }
                }
            })
        })
        $('.edit_cat').click(function() {
            start_load()
            var cat = $('#manage-category')
            cat.get(0).reset()
            cat.find("[name='id']").val($(this).attr('data-id'))
            cat.find("[name='name']").val($(this).attr('data-name'))
            cat.find("[name='Bed']").val($(this).attr('data-Bed'))
            cat.find("[name='price']").val($(this).attr('data-price'))
            cat.find("[name='doub_bed']").val($(this).attr('data-doub-bed'))
            cat.find("[name='sing_bed']").val($(this).attr('data-sing-bed'))
            cat.find("[name='adults']").val($(this).attr('data-adults'))
            cat.find("[name='kids']").val($(this).attr('data-kids'))
            cat.find("[name='airconditioner']")[0].checked = $(this).attr('data-airconditioner_checked');
            cat.find("[name='tv']")[0].checked = $(this).attr('data-tv_checked');
            cat.find("[name='waterheater']")[0].checked = $(this).attr('data-waterheater_checked');
            cat.find("[name='towel_forhair']")[0].checked = $(this).attr('data-towel_forhair_checked');
            cat.find("[name='towel']")[0].checked = $(this).attr('data-towel_checked');
            cat.find("[name='fridge']")[0].checked = $(this).attr('data-fridge_checked');
            cat.find("[name='pot']")[0].checked = $(this).attr('data-pot_checked');
            cat.find("[name='water']")[0].checked = $(this).attr('data-water_checked');
            cat.find("[name='pillow']")[0].checked = $(this).attr('data-pillow_checked');
            cat.find("[name='blanket']")[0].checked = $(this).attr('data-blanket_checked');


            cat.find("#cimg").attr('src', '../assets/img/' + $(this).attr('data-cover_img'))
            end_load()
        })
        $('.delete_cat').click(function() {
            _conf("Are you sure to delete this category?", "delete_cat", [$(this).attr('data-id')])
        })

        function delete_cat($id) {
            start_load()
            $.ajax({
                url: '../fuction/ajax.php?action=delete_category',
                // url: 'ajax.php?action=delete_category',
                method: 'POST',
                data: {
                    id: $id
                },
                success: function(resp) {
                    if (resp == 1) {
                        alert_toast("Data successfully deleted", 'success')
                        setTimeout(function() {
                            location.reload()
                        }, 1500)

                    }
                }
            })
        }

        function doub_plus() {
            var a = document.getElementById("doub_bed").value;
            document.getElementById("doub_bed").value = +a + +1;
        }

        function doub_minus() {
            var a = document.getElementById("doub_bed").value;
            if (+a - +1 < 0) {
                document.getElementById("doub_bed").value = 0;
            } else {
                document.getElementById("doub_bed").value = +a - +1;
            }

        }

        function sing_plus() {
            var a = document.getElementById("sing_bed").value;
            document.getElementById("sing_bed").value = +a + +1;
        }

        function sing_minus() {
            var a = document.getElementById("sing_bed").value;
            if (+a - +1 < 0) {
                document.getElementById("sing_bed").value = 0;
            } else {
                document.getElementById("sing_bed").value = +a - +1;
            }

        }

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
    </script>



</body>