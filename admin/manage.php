<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";

    ?>
</head>

<body>
    <h2><b>จัดการห้องพัก</b></h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary addroom" style="background-color: #EF774B; border:#EF774B;" data-bs-toggle="modal" data-bs-target="#addroom">
        เพิ่มห้องพัก
    </button>


    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>เลขห้อง</th>
                <th>ประเภทห้อง</th>
                <th>ประเภทเตียง</th>
                <th>สิ่งอำนวยความสะดวก</th>
                <th>จำนวนผู้เข้าพัก</th>
                <th>ราคา</th>
                <th>รูปภาพ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
        <?Php
            require_once('../fuction/connectDB.php');
            $result = $conn->prepare("SELECT * FROM room ");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
        ?>

            <tr>
                <td><?php echo $row['R_ID']; ?></td>
                <td><?php echo $row['R_Type']; ?></td>
                <td><?php echo $row['R_Bed']; ?></td>
                <td><?php echo $row['R_Detail']; ?></td>
                <td><?php echo $row['R_Typecount']; ?></td>
                <td><?php echo $row['R_Price']; ?></td>
                <td><?php echo $row['R_Img']; ?></td>
                <td>
                    <div class="edit-delete">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editroom"><i class='bx bx-edit-alt'></i>แก้ไข</button>
                        <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i>ลบ</button>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php require '../fuction/modal-addroom.php';
            require '../fuction/modal-editroom-1.php' ?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>