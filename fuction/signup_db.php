<?php

session_start();
require_once './connectDB.php';
if (isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cf_password = $_POST['cf_password'];
    $urole = 'user';

    if (empty($firstname)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อ';
        header("location: auth-regis.php");
    } else if (empty($lastname)) {
        $_SESSION['error'] = 'กรุณากรอกนามสกุล';
        header("location: auth-regis.php");
    } else if (empty($email)) {
        $_SESSION['error'] = 'กรุณากรอกนามอีเมล';
        header("location: auth-regis.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
        header("location: auth-regis.php");
    } else if (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
        header("location: auth-regis.php");
    } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวมากกว่า 5 ถึง 20 ตัวอักษร';
        header("location: auth-regis.php");
    } else if (empty($cf_password)) {
        $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
        header("location: auth-regis.php");
    } else if ( $password != $cf_password ) {
        $_SESSION [ ' error ' ] = 'รหัสผ่านไม่ตรงกัน';
        header ( " location : auth-regis.php" ) ;
    } else {

    try {

        $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
        $check_email->bindParam(":email" , $email);
        $check_email->execute();
        $row = $check_email->fetch(PDO::FETCH_ASSOC);

        if ($row['email'] ==$email){
            $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='auth-login.php'>คลิกที่นี่</a>เพื่อเข้าสู่ระบบ";
            header("location: auth-regis.php");
        } else if (!isset($_SESSION['error'])){
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare (
                "INSERT INTO users(firstname, lastname, email, password, urole)
                VALUES(:firstname, :lastname, :email, :password, :urole)");
            $stmt->bindParam(":firstname", $firstname);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $passwordHash);
            $stmt->bindParam(":urole", $urole);
            $stmt->execute();
            $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว <a href='auth-login.php' class='alert-link'>คลิกที่นี่เพื่อเข้าสู่ระบบ</a>";
            header("location: auth-regis.php");
        }else{
            $_SESSION['error'] = "มีบางอย่างผิดพลาด";
            header("location: auth-regis.php");
        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}
 
}
?>