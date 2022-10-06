<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/accounting.css">
    <?php include "../admin/nav-admin.php";
    include "../fuction/importlink.php" ?>
</head>

<body>
    <h2><b>บัญชี</b></h2>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>สกุล</th>
                <th>วันที่จอง</th>
                <th>เวลาที่โอน</th>
                <th>ธนาคารที่โอน</th>
                <th>จำนวนเงิน</th>
                <th>หลักฐานการชำระเงิน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
                <td>...</td>
                <td>...</td>
                <td>..</td>
            </tr>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>