<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  include('connectDB.php');
  if (isset($_POST["save_sv"])) {
    $SV_ID = $_POST['SV_ID'];
    $SV_Name = $_POST['SV_Name'];
    $SV_Price= $_POST['SV_Price'];
   
    if (isset($_POST["SV_ID"]) != "" && isset($_POST["SV_Name"]) != "" && isset($_POST["SV_Price"]) != "") {
      $sqlCheck = "SELECT SV_ID FROM onservice WHERE SV_ID='$SV_ID'";
      $rsCheck = mysqli_query($conn, $sqlCheck);
      $rowCheck = mysqli_num_rows($rsCheck);
      if ($rowCheck > 0) {
          echo "<script>alert('เลขบริการเสริมซ้ำ กรุณาเปลี่ยนเลขบริการเสริม');</script>";
      }else{
          $sqlInsert = "INSERT INTO onservice (SV_ID, SV_Name, SV_Price) VALUES ('$SV_ID', '$SV_Name',  '$SV_Price')";
          if (mysqli_query($conn, $sqlInsert)) {
              echo "<script>alert('เพิ่มบริการเสริมสำเร็จ');window.location='../admin.php/service.php';</script>";
           } else {
              echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองอีกครั้ง');</script>";
                }
            }
        } else {
            echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองอีกครั้ง');</script>";
    }
  }

  ?>

</body>
</html>

<div class="modal fade" id="addser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">เพิ่มบริการเสริม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="R_ID" class="form-label">บริการเสริม</label>
                        <input type="text" class="form-control" id="SV_Name" name="SV_Name" aria-describedby="emailHelp" placeholder="กรุณาระบุบริการเสริม">
                    </div>
                    <div class="mb-3">
                        <label for="R_ID" class="form-label">ราคา</label>
                        <input type="text" class="form-control" id="SV_Price" name="SV_Price" aria-describedby="emailHelp" placeholder="กรุณาระบุราคา">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" name="save_sv">บันทึก</button>
                    <button type="button" class="btn btn-danger" name="save-btn">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</div>