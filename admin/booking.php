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
    <h2><b>การจอง</b></h2>

    <?php
    include('../fuction/connectDB.php');
    $cat = $conn->query("SELECT * FROM room_categories");
    $cat_arr = array();
    while ($row = $cat->fetch_assoc()) {
        $cat_arr[$row['id']] = $row;
    }
    $room = $conn->query("SELECT * FROM rooms");
    $room_arr = array();
    while ($row = $room->fetch_assoc()) {
        $room_arr[$row['id']] = $row;
    }
    ?>
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <th>ลำดับ</th>
                                    <th>ประเภทห้องพัก</th>
                                    <th>วันที่จอง</th>
                                    <th>ชื่อผู้จอง</th>
                                    <th>ดูรายเอียดเพิ่มเติม</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $checked = $conn->query("SELECT * FROM roombook,payment,room_categories WHERE roombook.room_cat_id=room_categories.id and payment.B_id=roombook.B_id and `BKS_ID`='1'");
                                    while ($row = $checked->fetch_assoc()) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i++ ?></td>
                                            <td class="text-center"><?php echo $row['name'] ?></td>
                                            <td class="text-center"><?php echo date("วันที่ d/m/Y เวลา h:i a", strtotime($row['timestamp'])) ?></td>
                                            <td class=""><?php echo $row['PM_Name'] ?></td>
                                            <td class="text-center">
                                                <button class="btn btn-primary check_out modal_data" type="button" id="<?php echo $row['b_id'] ?>">ดูรายเอียดเพิ่มเติม</button>
                                            </td>

                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require '../fuction/modal-info.php';
    ?>
    <script>
        $(document).ready(function() {
            $('.modal_data').click(function() {
                var id = $(this).attr("id");
                $.ajax({
                    url: "../fuction/modal-info.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#detail').html(data);
                        $('#dataModal').modal('show');
                    }
                });

            })

        });
    </script>
    <?php require '../fuction/modal-addroom.php';
    require '../fuction/modal-editroom-1.php' ?>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>