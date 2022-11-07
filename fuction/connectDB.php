
<?php 
    $conn = new mysqli("localhost", "root", "", "villadepantaphurua");
    if($conn->connect_errno){
        echo "<script>alrert(‘db error’)</script>";
        exit();
    }
?>