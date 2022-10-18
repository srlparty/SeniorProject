<?php
	include('../fuction/connectDB.php');
	$SV_ID=$_GET['SV_ID'];
	$sqlDelUsers = "DELETE FROM onservice WHERE SV_ID='$SV_ID'";
	if($rsDelUsers = mysqli_query($conn, $sqlDelUsers)){
		// echo "<script>alert('ลบบริการเสริมเสร็จสิ้น');window.location='../admin/service.php'</script>" ;
		mysqli_close($conn);
	 }else{
		 echo "<script>alert ('ผิดพลาด ไม่สามารถลบข้อมูลได้');window.location = '../admin/service.php';</script>" ;
	 }
 
 ?>