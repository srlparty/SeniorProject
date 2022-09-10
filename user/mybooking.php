<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking Room</title>
    <link rel="stylesheet" href="../css/mybooking.css">

    <!-- table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <?php
    include "./nav.php";
    include "../fuction/connectDB.php";
    include "../fuction/importlink.php"
    ?>

</head>

<body>
    <h3>การจองของฉัน</h3>

    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>หมายเลขการจอง</th>
                <th>ชื่อผู้จอง</th>
                <th>รายละเอียดการจอง</th>
                <th>สถานะการจอง</th>
                <th>พิมพ์เอกสารการรจอง</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // include "./fuction/connectDB.php"

            // $query = mysqli_query($conn, "SELECT * FROM payment");
            // while ($row = mysqli_fetch_array($query)) { 
            ?>
            <tr>
                <td>..</td>
                <td>?php echo $row['PM_Name']; ?></td>
                <td>
                <div class="detail-booking">
                    <button type="button" class="btn btn-link text-white" style=" background-color: #EF774B;"   data-bs-toggle="modal" data-bs-target="#detail-booking">ดูรายละเอียด</button>
                    </div>
                </td>
                <td>..</td>
                <td>
                <div class="print">
                        <button type="button" class="btn btn-success" style="width: 100px;"><i class='bx bxs-printer'></i>  พิมพ์</button>
                    </div>
                </td>
            
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