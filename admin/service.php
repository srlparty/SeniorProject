<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/service.css">
    <?php include "../admin/nav-admin.php";
    include "../fuction/importlink.php" ?>
</head>

<body>
    <h2><b>บริการเสริม</b></h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary addser" style="background-color: #EF774B; border:#EF774B;" data-bs-toggle="modal" data-bs-target="#addser">
        เพิ่มบริการเสริม
    </button>

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
            <tr>
                <td>..</td>
                <td>...</td>
                <td>...</td>
                <td>
                    <div class="edit-delete">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editser"><i class='bx bx-edit-alt'></i>แก้ไข</button>
                        <button type="button" class="btn btn-danger"><i class='bx bx-trash' ></i>ลบ</button>
                    </div>
                </td>
            </tr>
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