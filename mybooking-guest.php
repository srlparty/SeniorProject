<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking Room</title>
    <link rel="stylesheet" href="./css/mybooking.css">

<?php
include "./nav.php";
include "../seniorproject/fuction/connectDB.php";
?>
</head>
<body>
<h3>การจองของฉัน</h3>

    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>หมายการจอง</th>
                <th>ชื่ผู้จอง</th>
                <th>รายละเอียดการจอง</th>
                <th>สถานะการจอง</th>
                <th>พิมพ์เอกสานการจอง</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                
                <td>
                    <div class="print">
                        <button type="button" class="btn btn-Success">พิมพ์</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    

</body>
</html>