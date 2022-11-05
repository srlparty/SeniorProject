<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";

    ?>
</head>

<body>
    <h2><b>การจอง</b></h2>


    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ประเภทห้อง</th>
                <th>วันที่จอง</th>
                <th>ชื่อผู้จอง</th>
                <th>รายละเอียดเพิ่มเติม</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>5</td>
                <td>5</td>
                <td>5</td>
                <td>5</td>
                <td>
                    <center>
                    <div class="edit-delete">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingdetail">ดูรายละเอียดเพิ่มเติม</button>
                    </div></center>
                </td>
            </tr>
        </tbody>
    </table>
    <?php require '../fuction/modal-booking-detail.php';?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>