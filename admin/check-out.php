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
            </tr>
        </thead>
        <tbody>
        <?Php
            require_once('../fuction/connectDB.php');
            $result = $dbconn->prepare("SELECT * FROM room ");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
        ?>

            <tr>
                <td><?php echo $row['R_ID']; ?></td>
                <td><?php echo $row['R_Type']; ?></td>
                <td><?php echo $row['R_Bed']; ?></td>
                <td><?php echo $row['R_Detail']; ?></td>
                <td><?php echo $row['R_Detail']; ?></td>
                <td>
                    <!-- modal -->
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