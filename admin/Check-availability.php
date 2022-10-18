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
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/connectDB.php";
    include "../fuction/importlink.php" ?>
</head>

<body>
    <h2><b>ตรวจสอบห้องว่าง</b></h2>
    <div class="card-group">
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">ว่าง</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;  margin-left: 1%;">
            <div class="card-header">เต็ม</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
            </div>
        </div>
        <div class="card text-white bg-warning mb-3" style="max-width: 18rem; margin-left: 1%;">
            <div class="card-header">กำลังทำความสะอาด</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin-left: 1%;">
            <div class="card-header">ชำรุดกำลังซ่อม</div>
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
            </div>
        </div>

    </div>

        <table id="myTable" class="display" style="width: 100%;">
            <thead>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>เลขห้อง</th>
                <th>ประเภทห้อง</th>
                <th>สถานะ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?Php
            require_once('../fuction/connectDB.php');
            $result = $dbconn->prepare("SELECT * FROM room ");
            $result->execute();
            for ($i = 0; $row = $result->fetch(); $i++) 
            ?>

                <tr>
                    <th>เลขห้อง</th>
                    <th>ประเภทห้อง</th>
                    <th>สถานะ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?Php
                require_once('../fuction/connectDB.php');
                $result = $dbconn->prepare("SELECT * FROM room ");
                $result->execute();
                for ($i = 0; $row = $result->fetch(); $i++) {
                ?>
                    <tr>
                        <td><?php echo $row['R_ID']; ?></td>
                        <td><?php echo $row['R_Type']; ?></td>
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
                <?php } ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                $("#myTable").DataTable();
            });
        </script>
</body>

</html>