<?php
include "../fuction/connectDB.php";

if (isset($_POST["id"])) {
     $id = $_POST["id"];
     $data = "SELECT * FROM roombook,payment,room_categories,bank,typepay WHERE roombook.room_cat_id=room_categories.id and payment.B_id=roombook.b_id and payment.PM_Bank=bank.Bank_ID and roombook.TP_ID = typepay.TP_ID  and roombook.b_id = '$id'";
     $output = '';
     $resultdata = mysqli_query($conn, $data);
     $output .= '<div class="table-responsive">  <table class="table table-bordered">';
     while ($row = mysqli_fetch_array($resultdata)) {
          $output .= '
          <tr>  
               <td width="30%"><label>ประเภทห้อง</label></td>  
               <td width="70%">' . $row["name"] . '</td>  
          </tr>  
          <tr>  
               <td width="30%"><label>เตียง</label></td>  
               <td width="70%">เตียงคู่ ' . $row["doub_bed"] . ' เตียง และ เตียงเดี่ยว ' . $row["sing_bed"] . ' เตียง</td>  
          </tr>    
          <tr>  
               <td width="30%"><label>จำนวนคน</label></td>  
               <td width="70%">ผู้ใหญ่ ' . $row["adults"] . ' คน และ เด็ก  ' . $row["kids"] . ' คน</td>  
          </tr>  
          <tr>  
               <td width="30%"><label>วันที่เช็คอิน</label></td>  
               <td width="70%">' . date("d/m/Y", strtotime($row['checkin'])) . '</td>  
          </tr> 
          <tr>  
               <td width="30%"><label>วันที่เช็คเอ้าท์</label></td>  
               <td width="70%">' . date("d/m/Y", strtotime($row['checkout'])) . '</td>  
          </tr> 
          <tr>  
               <td width="30%"><label>บริการเสริม</label></td>  
               <td width="70%">' . $row["extraservice"] . '</td>  
          </tr> 
          <tr>  
               <td width="30%"><label>โอนจากธนาคาร</label></td>  
               <td width="70%">' . $row["Bank"] . '</td>  
          </tr> 
          <tr>  
          <td width="30%"><label>รูปแบบการชำระเงิน</label></td>  
               <td width="70%">' . $row["TP_Pay"] . '</td>  
          </tr> 
          <tr>  
               <td width="30%"><label>เวลาที่โอน</label></td>  
               <td width="70%">' . date("h:ia", strtotime($row['PM_Time'])) . '</td>  
          </tr> 
          <tr>  
               <td width="30%"><label>ชื่อผู้จอง</label></td>  
               <td width="70%">' . $row["PM_Name"] . '</td>  
          </tr> 
          <tr>  
               <td width="30%"><label>จำนวนเงินที่ชำระ</label></td>  
               <td width="70%">' . $row["PM_Total"] . '</td>  
          </tr> 
          <tr>  
               <td width="30%"><label>หลักฐานการชำระเงิน</label></td>  
               <td width="70%"><img style="width:300px;" src="../' . $row["PM_Img"] . '"></td>  
          </tr> 
          
     ';
     }
     $output .= '  
     </table>  
</div>  
';
     echo $output;
}
?>
<div id="bookingdetail" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title">รายละเอียดแบนเนอร์</h5>
               </div>
               <div class="modal-body" id="detail">

               </div>

          </div>
     </div>
</div>