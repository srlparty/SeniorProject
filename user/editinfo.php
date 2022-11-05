<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth-regis.css">
    <?php
    
     
      include "../fuction/connectDB.php";
      include "../fuction/importlink.php"
    
    ?>
    <title>Edit Informaion</title>
</head>

<body>

<?php
if (isset($_GET['US_ID'])) { 
  $conn = mysqli_connect("localhost", "root", "", "villadepanta");
  $all_user = "SELECT * FROM user WHERE (US_ID = $US_ID) ";
  $result = mysqli_query($conn, $all_user);
  $row = mysqli_fetch_array($result);
  extract($row);
}
?> 
    <img src="../img/bbg.png" alt="">
    <form class="row g-3 register " action="./signup_db.php" method="POST">
        <h2 class="text-center" style="margin-top: 50px ;">แก้ไขมูลส่วนตัว</h2>
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger g-3" role="alert">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['warning'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php
                echo $_SESSION['warning'];
                unset($_SESSION['warning']);
                ?>
            </div>
        <?php } ?>
        <div class="col-md-6">
            <label class="form-label">ชื่อ</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">นามสกุล</label>
            <input type="text" name="lastname" class="form-control"  value="<?php echo $row['lastname'];?>">
        </div>
        <div class="col-12">
            <label class="form-label">อีเมล</label>
            <input type="email" name="email" class="form-control"  value="<?php echo $row['email'];?>">
        </div>
        <div class="g-3  col-md-12 text-center">
            <button type="submit" name="signup" class="btn btn-primary w-50 ">ยืนยัน</button>
        </div>
        <a href="../user/index-user.php" class="text-center">กลับสู่หน้าหลัก</a>
    </form>

    <?php
    if (isset($_POST['signup'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
      

        if (isset($_POST["firstname"]) != "" && isset($_POST["lastname"]) != "" && isset($_POST["email"]) !=  "")  {
            $sqlupdate = "UPDATE room SET firstname='$firstname', lastname='$lastname', email='$email' WHERE US_ID = '$US_ID' ";
            mysqli_query($conn, $sqlupdate);
              echo "<script>window.location='./editinfo.php';</script>";
            }
            else {
                echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองอีกครั้ง);</script>";
            }
        }
    ?>
</body>

</html


<?php
require_once('connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:login.php");
  exit();
}

$check_submit = "";

$sql = "SELECT * FROM tb_user WHERE user_username = '".$_SESSION['user_username']."'";
$query = mysqli_query($Connection,$sql);
$result = mysqli_fetch_array($query);

if (isset($_GET['update'])) {
  if ($_GET['update'] == "pass") {
    $check_submit = '<div class="alert alert-success" role="alert">';
    $check_submit .= '<span><i class="bi bi-check2-circle"></i> บันทึกข้อมูลเรียบร้อยแล้ว</span>';
    $check_submit .= '</div>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
</head>
<body class="default">
  <?php include 'includes/navbar.php';?>
  <div class="container-fluid">
    <div class="col-md-12 mt-4">
      <div class="row justify-content-md-center">
        <div class="col-md-auto"><?php echo $check_submit;?></div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-5 mb-4">
        <div class="card border-dark mt-2">
          <h5 class="card-header"><i class="bi bi-person-bounding-box"></i> ข้อมูลส่วนตัวของฉัน</h5>
          <div class="card-body">
            <h5 class="card-text">ชื่อผู้ใช้ : <span class="badge bg-primary"><?php echo $result[1]; ?></span></h5>
            <h5 class="card-text">ชื่อ - นามสกุล : <span class="badge bg-primary"><?php echo $result[3].' '.$result[4]; ?></span></h5>
            <h5 class="card-text">เพศ : <span class="badge bg-primary"><?php echo $result[5]; ?></span></h5>
            <h5 class="card-text">อีเมล์ :
              <?php
              if ($result[6] == NULL) {
                echo "<span class='badge bg-danger'>ว่าง</span>";
              }else{
                echo "<span class='badge bg-primary'>$result[6]</span>";
              }
              ?>
            </h5>
            <h5 class="card-text">ระดับผู้ใช้ : <span class="badge bg-primary"><?php if ($result[7] == "member") {echo "สมาชิก";}else{echo "ผู้ดูแลระบบ";} ?></span></h5>
            <div class="mt-3">
              <a href="profile_edit.php" class="btn btn-success">แก้ไขข้อมูล</a>
              <a href="change_password.php" class="btn btn-warning">เปลี่ยนรหัสผ่าน</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <?php mysqli_close($Connection);?>
</body>
</html>
