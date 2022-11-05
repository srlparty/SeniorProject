<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/service.css">
    <?php include "../admin/nav-admin.php";
    include "../fuction/importlink.php" ?>
</head>

<body>
    <h2><b>บริการเสริม</b></h2>
    <!-- Button trigger modal -->
    <a href="./service-add.php"><button type="button" class="btn btn-primary addser" style="background-color: #EF774B; border:#EF774B;" >
        เพิ่มบริการเสริม
    </button></a>

    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>บริการเสริม</th>
                <th>ราคา</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
        <?Php
            require_once('../fuction/connectDB.php');
            $result = $dbconn->prepare("SELECT * FROM onservice");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
        ?>
            <tr>
                <td><?php echo $row['SV_ID']; ?></td>
                <td><?php echo $row['SV_Name']; ?></td>
                <td><?php echo $row['SV_Price']; ?></td>
                <td>
                    <div class="edit-delete">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editser"><i class='bx bx-edit-alt'></i>แก้ไข</button>
                        <a type="button"  href="../fuction/deleteservice.php=<?php echo $row['SV_ID'] ?>" onclick="return confirm('คุณต้องการลบบริการเสริมนี้ใช่หรือไม่')" class="btn btn-danger"  style="background-color: #DB1414 ; border-radius :10px; height: 5vh;"><span class="bx bx-trash"></i>ลบ</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php require '../fuction/modal-addser.php' ;
    require '../fuction/modal-editser.php'?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>