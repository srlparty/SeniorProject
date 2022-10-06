<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>

    <!-- table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/check-ava.css">
    <?php include "../admin/nav-admin.php";
    include "../fuction/importlink.php" ?>
</head>

<body>
    <h2><b>ตรวจสอบห้องว่าง</b></h2>
    <div class="card-group">
        <div class="card" style="background-color: #145A32; color:aliceblue;">
            <div class="card-header"><i class='bx bxs-bed'></i> ว่าง</div>
            <div class="card-main">
                <div class="main-room">ใส่โค้ด</div>
            </div>
        </div>
        <div class="card" style="background-color: #D32F2F; color:aliceblue;">
            <div class="card-header">เต็ม</div>
            <div class="card-main">
                <div class="main-room">ใส่โค้ด</div>
            </div>
        </div>
        <div class="card" style="background-color: #F39C12; color:aliceblue;">
            <div class="card-header">กำลังทำความสะอาด</div>
            <div class="card-main">
                <div class="main-room">ใส่โค้ด</div>
            </div>
        </div>
        <div class="card" style="background-color: #8E44AD ; color:aliceblue;">
            <div class="card-header">ชำรุดกำลังซ่อม</div>
            <div class="card-main">
                <div class="main-room">ใส่โค้ด</div>
            </div>
        </div>
    </div>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>เลขห้อง</th>
                <th>ประเภทห้อง</th>
                <th>สถานะห้อง</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>..</td>
                <td>...</td>
                <td>
                    <select class="form-select" aria-label="Default select">
                        <option selected>เลือกสถานะห้อง</option>
                        <option value="1">ว่าง</option>
                        <option value="2">เต็ม</option>
                        <option value="3">กำลังทำความสะอาด</option>
                        <option value="3">ชำรุดกำลังซ่อม</option>
                    </select>
                </td>
                <td>
                    <div class="edit-delete">
                        <button type="button" class="btn btn-success"><i class='bx bx-edit-alt'></i>บันทึก</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <?php require '../fuction/modal-addroom.php';
    require '../fuction/modal-editroom.php' ?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>