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
<h2>เพิ่มบริการเสริม</h2>

<body>
    <div class="container-fluid">

        <div class="col-lg-12">
            <div class="row">
                <!-- FORM Panel -->
                <div class="col-md-12">
                    <form action="" id="manage-room">
                        <div class="card">
                            <div class="card-header">
                                เพิ่มบริการเสริม
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label for="R_ID" class="form-label">บริการเสริม</label>
                                    <input type="text" class="form-control" id="SV_Name" name="SV_Name" aria-describedby="emailHelp" placeholder="กรุณาระบุบริการเสริม">
                                </div>
                                <div class="form-group">
                                    <label for="R_ID" class="form-label">ราคา</label>
                                    <input type="text" class="form-control" id="SV_Price" name="SV_Price" aria-describedby="emailHelp" placeholder="กรุณาระบุราคา">

                                    </select>
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