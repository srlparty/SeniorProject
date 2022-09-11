<?php

// session_start();
// require_once './connectDB.php';
// if (isset($_POST['signin'])) {
//     $email = $_POST['email'];
//     $us_password = $_POST['us_password'];
    
    
//     if (empty($email)) {
//         $_SESSION['error'] = 'กรุณากรอกอีเมล';
//         header("location: auth-login.php");
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
//         header("location: auth-login.php");
//     } else if (empty($us_password)) {
//         $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
//         header("location: auth-login.php");
//     } else {


//     try {

//         $check_data = $conn->prepare("SELECT * FROM user WHERE email = :email");
//         $check_data->bindParam(":email" , $email);
//         $check_data->execute();
//         $row = $check_data->fetch(PDO::FETCH_ASSOC);

//         if ($check_data->rowCount() > 0 ){

//             if ($email == $row['email']){
//                 if (password_verify($us_password, $row['us_password'])){
//                     if ($row['UST_ID'] == '2'){
//                         $_SESSION['admin_login'] = $row['US_ID'];
//                         header("location: ../admin/board.php");
//                     }else {
//                         $_SESSION['user_login'] = $row['US_ID'];
//                         header("location: ../user/index-user.php");
//                     }
//                 } else{
//                     $_SESSION['error'] = 'รหัสผ่านผิด';
//                     header("location: auth-login.php");
//                 }
//             }

//         }else{
//             $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
//             header("location: auth-login.php");
//         }

//     } catch(PDOException $e) {
//         echo $e->getMessage();
//     }
// }
 
// }


?>