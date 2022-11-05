<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";

    ?>
</head>
<h2>เพิ่มบัญชีผู้ใช้</h2>

<body>
    <div class="container-fluid">

        <div class="col-lg-12">
            <div class="row">
                <!-- FORM Panel -->
                <div class="col-md-12">
                    <form action="" id="manage-room">
                        <div class="card">
                            <div class="card-header">
                                เพิ่มบัญชีผู้ใช้
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label class="control-label">ชื่อ</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text" class="form-control" name="user">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">PASSWORD</label>
                                    <input type="password" class="form-control" name="password">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">User Type</label>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
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