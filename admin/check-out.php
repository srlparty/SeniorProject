<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check out</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";
    $count_n = 1;
    $sql = "SELECT * FROM room, roomstatus, checked , roomtype";
    $result = $conn->query($sql);
    ?>
</head>

<body>
    <h2><b>Check Out</b></h2>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ประเภทห้อง</th>
                <th>เลขห้อง</th>
                <th>เลขที่อ้างอิง</th>
                <th>สถานะห้อง</th>
                <th>จัดการ</th>
                <th>ปริ้นใบเสร็จ</th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
        <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $count_n; ?></td>
                    <td><?php echo $row['RT_Name']; ?></td>
                    <td><?php echo $row['R_ID']; ?></td>
                    <td><?php echo $row['ref_no']; ?></td>
                    <td><?php echo $row['RS_Name']; ?></td>
                    <td>
                        <div class="edit-delete">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editroom"><i class='bx bx-edit-alt'></i>แก้ไข</button>
                            <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i>ลบ</button>
                        </div>
                    </td>
                </tr>
            <?php $count_n++;
             endwhile ?>
=======


            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>
                    <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cal">รายละเอียดเพิ่มเติม</button></center>
                </td>
                <td>
                    <!-- ปริ้นนนนนนนนนน -->
                    <center><button type="button" class="btn btn-secondary"><i class='bx bxs-printer'></i>พิมพ์</button></center>
                </td>
            </tr>
>>>>>>> 4ec202629a095bee07f2f887cf8096ab62b464d9
        </tbody>
    </table>
    <?php require '../fuction/modal-checkin-cal.php'; ?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>