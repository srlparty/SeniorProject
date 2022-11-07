<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check pay</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/check-pay.css">
    <?php include "../admin/nav-admin.php";
    include "../fuction/importlink.php";
    include "../fuction/connectDB.php";
    $count_n = 1;
    $sql = "SELECT * FROM payment , booking ,roomtype ";
    $result = $conn->query($sql); ?>
</head>

<body>
    <h2><b>ตรวจสอบการชำระเงิน</b></h2>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ประเภทห้อง</th>
                <th>วันที่จอง</th>
                <th>ชื่อ-สกุล</th>
                <th>เบอร์โทรศัพท์</th>
                <th>รายละเอียดการจอง</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tbody>
                <tr>
                    <td><?php echo $count_n; ?></td>
                    <td><?php echo $row['RT_Name']; ?></td>
                    <td><?php echo $row['BK_Date']; ?></td>
                    <td><?php echo $row['PM_Name']; ?></td>
                    <td><?php echo $row['PM_Tel']; ?></td>
                    <td>
                        <div class="detail-booking">
                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#detail-booking">รายละเอียดการจอง</button>
                        </div>
                    </td>
                    <td>
                        <div class="edit-delete">
                            <button type="button" class="btn btn-success">ยืนยัน</button>
                            <button type="button" class="btn btn-danger">ยกเลิก</button>
                        </div>
                    </td>
                </tr>
            <?php $count_n++;
        endwhile ?>
            </tbody>
    </table>
    <?php require '../fuction/modal-detail-booking.php' ?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>