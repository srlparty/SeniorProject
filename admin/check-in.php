<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check in</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php
    include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";
    $count_n = 1;
    $sql = "SELECT * FROM room , roomtype ,roomstatus ";
    $result = $conn->query($sql);
    ?>
</head>

<body>
    <h2><b>Check In</b></h2>


    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ประเภทห้อง</th>
                <th>เลขห้อง</th>
                <th>สถานะห้อง</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $count_n; ?></td>
                    <td><?php echo $row['RT_Name']; ?></td>
                    <td><?php echo $row['R_ID']; ?></td>
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
        </tbody>
    </table>
    <?php require '../fuction/modal-addroom.php';
    require '../fuction/modal-editroom-1.php' ?>
=======
     <tr>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td>
                    <center>
                    <div class="edit-delete">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkin">check in</button>
                    </div></center>
                </td>
            </tr>

        </tbody>
    </table>
    <?php require '../fuction/modal-checkin.php';?>
>>>>>>> 4ec202629a095bee07f2f887cf8096ab62b464d9
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>