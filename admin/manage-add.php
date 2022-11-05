<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";

    ?>
</head>
<h2>เพิ่มห้องพัก</h2>
<body>
    <div class="container-fluid">

        <div class="col-lg-12">
            <div class="row">
                <!-- FORM Panel -->
                <div class="col-md-12">
                    <form action="" id="manage-room">
                        <div class="card">
                            <div class="card-header">
                                เพิ่มห้องพัก
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label class="control-label">เลขห้องพัก</label>
                                    <input type="text" class="form-control" name="room">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">ประเภทห้องพัก</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">สถานะห้องว่าง</label>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="0">ว่าง</option>
                                        <option value="1">เต็ม</option>
                                        <option value="2">กำลังทำความสะอาด</option>
                                        <option value="3">อยู่ในระหว่างการซ่อมแซม</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-sm btn-success col-sm-3 offset-md-3">บันทึก</button>
                                        <button class="btn btn-sm btn-danger col-sm-3" type="button" onclick="$('#manage-room').get(0).reset()">ยกเลิก</button>
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