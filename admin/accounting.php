<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/manage.css">
    <?php include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";
    $count_n = 1;
    $sql = "SELECT * FROM user ";
    $result = $conn->query($sql); ?>
</head>

<body>
    <h2><b>บัญชีผู้ใช้</b></h2>

    <a href="./accout-add.php"><button type="button" class="btn btn-primary addroom" style="background-color: #EF774B; border:#EF774B;">
            <i class='bx bx-plus'></i>เพิ่มบัญชีผู้ใช้
        </button></a>

    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อผู้ใช้</th>
                <th>ประเภท</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $count_n; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['urole']; ?></td>
                    <td>
                        <center>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">จัดการ</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item edit_user" href="javascript:void(0)" data-id='<?php echo $row['id'] ?>'>แก้ไข</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item delete_user" href="javascript:void(0)" data-id='<?php echo $row['id'] ?>'>ลบ</a>
                                </div>
                            </div>
                        </center>
                    </td>
                </tr>
            <?php $count_n++;
            endwhile ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>